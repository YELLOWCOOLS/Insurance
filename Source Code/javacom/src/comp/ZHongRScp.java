package comp;

//中宏人寿
import java.io.BufferedReader;
import java.io.IOException;

import java.util.regex.Matcher;
import java.util.regex.Pattern;

import src.linkList;

public class ZHongRScp extends Cpimpl implements Cp {
	public linkList illlist = new linkList();

	public ZHongRScp() {

		// TODO Auto-generated method stub
		Mulustart = "null";
		Muluend = "^[ ]{0,}+1";
		Zhongjistart = new String[] { "^[ ]{0,2}第[一二三四五六七八九十]+条[ ]+重大疾病释义|重大疾病包括：" };
		Zhongjiend = new String[] { "第[一二三四五六七八九十]+条[ ]+术语释义|第[一二三四五六七八九十]+条[ ]+额外疾病释义|第[一二三四五六七八九十]+条[ ]+释义|额外重大疾病包括：|轻症疾病的种类和释义" };

	}


}