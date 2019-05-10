from django.http import HttpResponse

import pymysql

#encoding=utf-8

import jieba
import codecs

class Seg(object):
    stopwords = []
    stopword_filepath="stopwordList//stopword.txt"

    def __init__(self):
        self.read_in_stopword()

    def read_in_stopword(self):
        file_obj = codecs.open(self.stopword_filepath,'r','utf-8')
        while True:
            line = file_obj.readline()
            line=line.strip('\r\n')
            if not line:
                break
            self.stopwords.append(line)
        file_obj.close()

    def cut(self,sentence,stopword=True):
        seg_list = jieba.cut(sentence)

        results = []
        for seg in seg_list:
            if seg in self.stopwords and stopword:
                continue
            results.append(seg)

        return results

    def cut_for_search(self,sentence,stopword=True):
        seg_list = jieba.cut_for_search(sentence)

        results = []
        for seg in seg_list:
            if seg in self.stopwords and stopword:
                continue
            results.append(seg)

        return results
#encoding=utf-8
import codecs

class FileObj(object):

    def __init__(self,filepath):
        self.filepath = filepath

    # 按行读入数据，返回一个List
    def read_lines(self):
        self.sentences = []

        file_obj = codecs.open(self.filepath,'r','utf-8')
        while True:
            line = file_obj.readline()
            line=line.strip('\r\n')
            if not line:
                break
            self.sentences.append(line)
        file_obj.close()

        return self.sentences


#encoding=utf-8


import gc

from gensim import corpora, models, similarities

from collections import defaultdict

class SentenceSimilarity():

    def __init__(self,seg):
        self.seg = seg

    def set_sentences(self,sentences):
        self.sentences = []

        for i in range(0,len(sentences)):
            self.sentences.append(Sentence(sentences[i],self.seg,i))

    # 获取切过词的句子
    def get_cuted_sentences(self):
        cuted_sentences = []

        for sentence in self.sentences:
            cuted_sentences.append(sentence.get_cuted_sentence())

        return cuted_sentences

    # 构建其他复杂模型前需要的简单模型
    def simple_model(self,min_frequency = 1):
        self.texts = self.get_cuted_sentences()

        # 删除低频词
        frequency = defaultdict(int)
        for text in self.texts:
            for token in text:
                frequency[token] += 1

        self.texts = [[token for token in text if frequency[token] > min_frequency] for text in self.texts]

        self.dictionary = corpora.Dictionary(self.texts)
        self.corpus_simple = [self.dictionary.doc2bow(text) for text in self.texts]

    # tfidf模型
    def TfidfModel(self):
        self.simple_model()

        # 转换模型
        self.model = models.TfidfModel(self.corpus_simple)
        self.corpus = self.model[self.corpus_simple]

        # 创建相似度矩阵
        self.index = similarities.MatrixSimilarity(self.corpus)

    # lsi模型
    def LsiModel(self):
        self.simple_model()

        # 转换模型
        self.model = models.LsiModel(self.corpus_simple)
        self.corpus = self.model[self.corpus_simple]

        # 创建相似度矩阵
        self.index = similarities.MatrixSimilarity(self.corpus)

    #lda模型
    def LdaModel(self):
        self.simple_model()

        # 转换模型
        self.model = models.LdaModel(self.corpus_simple)
        self.corpus = self.model[self.corpus_simple]

        # 创建相似度矩阵
        self.index = similarities.MatrixSimilarity(self.corpus)

    def sentence2vec(self,sentence):
        sentence = Sentence(sentence,self.seg)
        vec_bow = self.dictionary.doc2bow(sentence.get_cuted_sentence())
        return self.model[vec_bow]

    # 求最相似的句子
    def similarity(self,sentence):
        sentence_vec = self.sentence2vec(sentence)

        sims = self.index[sentence_vec]
        sim = max(enumerate(sims), key=lambda item: item[1])

        index = sim[0]
        score = sim[1]
        sentence = self.sentences[index]

        sentence.set_score(score)
        return sentence



#encoding=utf-8



class Sentence(object):

    def __init__(self,sentence,seg,id = 0):
        self.id = id
        self.origin_sentence = sentence
        self.cuted_sentence = self.cut(seg)

    # 对句子分词
    def cut(self,seg):
        return seg.cut_for_search(self.origin_sentence)

    # 获取切词后的词列表
    def get_cuted_sentence(self):
        return self.cuted_sentence

    # 获取原句子
    def get_origin_sentence(self):
        return self.origin_sentence

    # 设置该句子得分
    def set_score(self,score):
        self.score = score



file_obj = FileObj(r"testSet/file_corpus3.txt")
train_sentences = file_obj.read_lines()

seg = Seg()
ss = SentenceSimilarity(seg)
ss.set_sentences(train_sentences)
ss.TfidfModel()

def get_questiong(request):
    ques = request.GET.get('ques')
    sentence = ss.similarity(ques)
    res = sentence.get_origin_sentence()
    return HttpResponse(res)

def index(request):
    id   = request.GET.get('id', default='10')
    ques = request.GET.get('ques')
    handler = QuestionClassifier()
    par = QuestionPaser()
    ans = AnswerSearcher()
    try:
        data = handler.classify(ques)
        print(data)
        sql = par.parser_main(data,id)
        print(sql)
        res = ans.search_main(sql, data.get('question_types'))
        print(res)
    except:
        return HttpResponse("")
    return HttpResponse(res)

import pandas as pd
import numpy as np
import json

class distance_cul:
    def __init__(self):
        self.host = "localhost"
        self.port = 3306
        self.user = 'root'
        self.password = 'zy3387339'
        self.database = 'zhaoyi'
        self.charset = 'utf8'
        self.B = np.load('D:\\ZZZZZZZZZYYYYYYYYYY\\pycom/QA\\ins_qa\\data\\B.npy')
        self.BT = np.load('D:\\ZZZZZZZZZYYYYYYYYYY\\pycom/QA\\ins_qa\\data\\BT.npy')
        self.Bsq = np.load('D:\\ZZZZZZZZZYYYYYYYYYY\\pycom/QA\\ins_qa\\data\\Bsq.npy')

    def save(self):
        B = pd.read_csv('D:\\ZZZZZZZZZYYYYYYYYYY\\pycom/QA\\ins_qa\\data\\user.csv').iloc[:,1:]
        BT = np.transpose(B)
        Bsq = BT**2
        np.save('D:\\ZZZZZZZZZYYYYYYYYYY\\pycom/QA\\ins_qa\\data\\B.npy',B)
        np.save('D:\\ZZZZZZZZZYYYYYYYYYY\\pycom/QA\\ins_qa\\data\\BT.npy',BT)
        np.save('D:\\ZZZZZZZZZYYYYYYYYYY\\pycom/QA\\ins_qa\\data\\Bsq.npy',Bsq)

    def get_min(self,data):
        A = data
        A_BT = np.dot(A, self.BT)
        Asq = A ** 2
        print(A_BT.shape)
        Asq = np.tile(np.sum(Asq, axis=1, keepdims=True), (1, A_BT.shape[1]))
        Bsq = np.tile(np.sum(self.Bsq, axis=0, keepdims=True), (A_BT.shape[0], 1))
        ED = np.sqrt(Asq+Bsq-2*A_BT)
        return(np.where(ED == np.min(ED))[1]+1)

def get_min(request):
    concat = request.POST
    postBody = request.body
    data = json.loads(postBody)
    data = np.array([data])
    dis = distance_cul()
    print(data)
    list = dis.get_min(data).tolist()

    jsonArr = json.dumps(list, ensure_ascii=False)
    return HttpResponse(jsonArr)