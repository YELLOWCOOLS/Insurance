package comp;

//中国太平洋
import java.io.BufferedReader;
import java.io.IOException;

import java.util.regex.Matcher;
import java.util.regex.Pattern;

import src.linkList;

public class ZGTPYRScp extends Cpimpl implements Cp {
	public linkList illlist = new linkList();

	public ZGTPYRScp() {

		// TODO Auto-generated method stub
		Mulustart = "条款目录";
		Muluend = "中国太平洋人寿保险股份有限公司 ";
		Zhongjistart = new String[] { "[0-9]+.[ ]*重大疾病的定义|特定重大疾病的定义 " };
		Zhongjiend = new String[] { "[0-9]+.[ ]*释义" };

	}

	
}