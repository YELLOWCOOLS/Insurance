#!/usr/bin/env python3
# coding: utf-8
# File: question_classifier.py
# Author: lhy<lhy_in_blcu@126.com,https://huangyong.github.io>
# Date: 18-10-4

import os
import ahocorasick

class QuestionClassifier:
    def __init__(self):
        cur_dir = '/'.join(os.path.abspath(__file__).split('/')[:-1])
        #特征词路径
        self.disease_path = os.path.join(cur_dir, 'dict/illname.txt')
        #所有爬取的词对应的文件
        self.ori_path = os.path.join(cur_dir, 'dict/ori.txt')
        #所有name的对应词
        # self.all_path = os.path.join(cur_dir, 'dict/all.txt')

        # 加载特征词
        self.disease_wds= [i.strip() for i in open(self.disease_path,encoding="utf-8") if i.strip()]
        self.ori_wds= [i.strip() for i in open(self.ori_path,encoding="utf-8") if i.strip()]
        # self.all_wds= [i.strip() for i in open(self.all_path,encoding="utf-8") if i.strip()]
        self.region_words = set(self.disease_wds + self.ori_wds)

        # 构造领域actree
        self.region_tree = self.build_actree(list(self.region_words))
        # 构建词典
        self.wdtype_dict = self.build_wdtype_dict()

        # 问句疑问词
        self.ill = ['多少种','疾病种类','多少']
        self.year = ['年龄','出生','周岁','岁','天','月','限制']
        self.hetongchengli  = ['成立','生效','开始']
        self.duty = ['保障','承担','提供','责任','身故','全残']
        self.outofduty = ['不保障','不赔偿','不提供','不承担','条件']
        self.paymoney  = ['缴纳','支付','方式','怎么','趸交','年交','一次性','分期']
        self.getmoney = ['得到赔偿','获取赔偿','赔付','得到保险金']
        self.content = ['内容','申请','保险金','材料']
        self.breakins = ['解约','解除','退保']
        self.heistate = ['犹豫期','犹豫','试用']
        self.raiseup =['诉讼','以内']
        print('model init finished ......')
        return

    '''分类主函数'''
    def classify(self, question):
        data = {}
        #返回的是一个数组 第一项为实体名 第二项为实体类型
        medical_dict = self.check_medical(question)
        question_type = ""
        data['args'] = {}
        #当没有识别到实体类型时 将其它意图进行分析
        if medical_dict:
            for key in medical_dict:
                data['args']  = {key:medical_dict[key]}
                question_type  = medical_dict[key]
                data['question_types'] = question_type
            return data
        types = []
        for type_ in medical_dict.values():
            types += type_
        question_type = 'others'

        # 疾病种类
        if self.check_words(self.ill,question):
            question_type = 'ins_num_ill'
        # 年龄限制
        if self.check_words(self.year, question) :
            question_type = 'ins_year'
        # 保障范围
        if self.check_words(self.duty, question) :
            question_type = 'ins_duty'
        # 责任之外
        if self.check_words(self.outofduty, question) :
            question_type = 'ins_outofduty'
        # 支付情况
        if self.check_words(self.paymoney, question):
            question_type = 'ins_paymoney'
        # 得到赔偿
        if self.check_words(self.getmoney, question):
            question_type = 'ins_getmoney'
        # 修改内容
        if self.check_words(self.content, question):
            question_type = 'ins_content'
        # 解约
        if self.check_words(self.breakins, question):
            question_type = 'ins_breakins'
        # 诉讼时效
        if self.check_words(self.raiseup, question):
            question_type = 'ins_raiseup'
        # 犹豫期
        if self.check_words(self.heistate, question):
            question_type = 'ins_heistate'

        data['question_types'] = question_type

        return data

    '''构造词对应的类型'''
    def build_wdtype_dict(self):
        wd_dict = dict()
        for wd in self.region_words:
            wd_dict[wd] = []
            if wd in self.disease_wds:
                wd_dict[wd].append('disease')
            if wd in self.ori_wds:
                wd_dict[wd].append('ori')
            # if wd in self.check_wds:
            #     wd_dict[wd].append('all')

        return wd_dict

    '''构造actree，加速过滤'''
    def build_actree(self, wordlist):
        actree = ahocorasick.Automaton()
        for index, word in enumerate(wordlist):
            actree.add_word(word, (index, word))
        actree.make_automaton()
        return actree

    '''问句过滤'''
    def check_medical(self, question):
        region_wds = []
        for i in self.region_tree.iter(question):
            wd = i[1][1]
            region_wds.append(wd)
        stop_wds = []
        for wd1 in region_wds:
            for wd2 in region_wds:
                if wd1 in wd2 and wd1 != wd2:
                    stop_wds.append(wd1)
        final_wds = [i for i in region_wds if i not in stop_wds]
        final_dict = {i:self.wdtype_dict.get(i) for i in final_wds}

        return final_dict

    '''基于特征词进行分类'''
    def check_words(self, wds, sent):
        for wd in wds:
            if wd in sent:
                return True
        return False

import answer_search as answer
import question_parser as parser

if __name__ == '__main__':
    handler = QuestionClassifier()
    par = parser.QuestionPaser()
    ans = answer.AnswerSearcher()
    while 1:
        question = input('input an question:')
        data = handler.classify(question)
        print(data)
        sql  = par.parser_main(data)
        print(sql)
        res = ans.search_main(sql,data.get('question_types')[0])
        print(res)