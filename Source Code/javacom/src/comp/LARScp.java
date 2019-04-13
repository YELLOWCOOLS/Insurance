package comp;
//利安人寿



import java.io.BufferedReader;
import java.io.IOException;
import java.util.regex.Matcher;
import java.util.regex.Pattern;

import src.linkList;

public class LARScp extends Cpimpl implements Cp{

	//储存当前保险的信息
	//输入数据库时  在所有完成后 将内容一起输入
	public src.linkList list;
	public src.Tre tre;
	//构造函数
	public LARScp() {
		
		// 将所有需要的部分的开始和结束段落在此处设置
		// 外部函数匹配到时运行响应的函数
		
		Mulustart = "条款目录";
		Muluend ="利安人寿";
		//此处设置为数组  表示重疾所在的段落可能不在 一个地方
		//一个开始对应一个结束
		Zhongjistart = new String[]{"重大疾病范围及定义|重大疾病、特定疾病的范围及定义"};
		Zhongjiend = new String[]{"上述重大疾病定义中部分术语释义如下"};
		
	}



}