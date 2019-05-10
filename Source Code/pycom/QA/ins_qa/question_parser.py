#!/usr/bin/env python3
# coding: utf-8
# File: question_parser.py
# Author: lhy<lhy_in_blcu@126.com,https://huangyong.github.io>
# Date: 18-10-4

class QuestionPaser:

    '''构建实体节点'''
    def build_entitydict(self, args):
        entity_dict = {}
        for arg, types in args.items():
            for type in types:
                if type not in entity_dict:
                    entity_dict[type] = [arg]
                else:
                    entity_dict[type].append(arg)

        return entity_dict

    '''解析主函数'''
    def parser_main(self, res_classify):
        args = res_classify['args']
        entity_dict = self.build_entitydict(args)
        question_type = res_classify['question_types'][0]
        sql = []
        id = 10
        if question_type == 'disease':
            sql = self.sql_transfer(question_type,id ,entity_dict.get('disease'))

        elif question_type == 'ori':
            sql = self.sql_transfer(question_type,None ,entity_dict.get('ori'))

        elif question_type == 'all':
            sql = self.sql_transfer(question_type,id,entity_dict.get('all'))

        elif question_type == 'ins_year':
            sql = self.sql_transfer(question_type, id,None)

        elif question_type == 'ins_num_ill':
            sql = self.sql_transfer(question_type, id,None)

        elif question_type == 'ins_duty':
            sql = self.sql_transfer(question_type,id,None)

        elif question_type == 'ins_outofduty':
            sql = self.sql_transfer(question_type,id,None)

        elif question_type == 'ins_paymoney':
            sql = self.sql_transfer(question_type,id,None)

        elif question_type == 'ins_getmoney':
            sql = self.sql_transfer(question_type,id,None)

        elif question_type == 'ins_content':
            sql = self.sql_transfer(question_type,id,None)

        elif question_type == 'ins_breakins':
            sql = self.sql_transfer(question_type,id,None)

        elif question_type == 'ins_raiseup':
            sql = self.sql_transfer(question_type, id,None)

        return sql

    '''针对不同的问题，分开进行处理'''
    def sql_transfer(self, question_type,id ,entities):
        if question_type == 'ori':
            sql = ["SELECT * FROM zhaoyi.zy_detailexp where id = {0} and name like '%{1}%' limit 1".format(id,entities[0]) ]

        elif question_type == 'disease':
            sql = ["SELECT * FROM zhaoyi.zy_illlist where id = {0} and illname like '%{1}%'".format(id,entities[0]) ]

        elif question_type == 'ins_year':
            sql = ["SELECT * FROM zhaoyi.zy_detailexp where id = {0} and name like '%投保年龄%'".format(id, entities[0])]

        elif question_type == 'ins_num_ill':
            sql = ["SELECT count(*) FROM zhaoyi.zy_illlist where id = {0} ".format(id) ]

        elif question_type == 'ins_duty':
            sql = ["SELECT * FROM zhaoyi.zy_detailexp where id = {0} and name like '%保险责任%'".format(id)]

        elif question_type == 'ins_paymoney':
            sql = ["SELECT * FROM zhaoyi.zy_detailexp where id = {0} and name like '%保险金的支付%'".format(id)]

        elif question_type == 'ins_getmoney':
            sql = ["SELECT * FROM zhaoyi.zy_detailexp where id = {0} and name like '%保险金给付%'".format(id)]

        elif question_type == 'ins_content':
            sql = ["SELECT * FROM zhaoyi.zy_detailexp where id = {0} and name like '%合同内容%变更%'".format(id)]

        elif question_type == 'ins_breakins':
            sql = ["SELECT * FROM zhaoyi.zy_detailexp where id = {0} and name like '%解除%'".format(id)]

        elif question_type == 'ins_heistate':
            sql = ["SELECT * FROM zhaoyi.zy_detailexp where id = {0} and name like '%犹豫期%'".format(id)]

        elif question_type == 'ins_raiseup':
            sql = ["SELECT * FROM zhaoyi.zy_detailexp where id = {0} and name like '%诉讼%'".format(id)]
        return sql

if __name__ == '__main__':
    handler = QuestionPaser()
