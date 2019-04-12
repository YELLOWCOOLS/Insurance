package comp;
//中融人寿

import java.io.BufferedReader;
import java.io.IOException;
import java.util.regex.Matcher;
import java.util.regex.Pattern;

import src.linkList;

public class ZRRScp extends Cpimpl implements Cp{
	public linkList illlist=new linkList();
	//储存当前保险的信息
	//输入数据库时  在所有完成后 将内容一起输入
	public src.linkList list;
	public src.Tre tre;
	//构造函数
	public ZRRScp() {
		
		// 将所有需要的部分的开始和结束段落在此处设置
		// 外部函数匹配到时运行响应的函数
		
		Mulustart = "条款目录|中融人寿[2010]疾病保险010号";
		Muluend ="中融";
		//此处设置为数组  表示重疾所在的段落可能不在 一个地方
		//一个开始对应一个结束
		Zhongjistart = new String[]{"[0-9].[0-9][ ]*重大疾病"};
		Zhongjiend = new String[]{"上述重大疾病定义中部分术语释义如下：|9.4    遗传性疾病"};
		
	}
	
	
}