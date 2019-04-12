package comp;
//中英人寿
import java.io.BufferedReader;
import java.io.IOException;

import java.util.regex.Matcher;
import java.util.regex.Pattern;

import src.linkList;

public class ZYouRScp extends Cpimpl implements Cp {
	public linkList illlist=new linkList();
		public ZYouRScp() {
		
		// TODO Auto-generated method stub
		Mulustart ="条款目录";
		Muluend ="条款正文";
		Zhongjistart = new String[]{"^[ ]*[0-9]+、重大疾病："};
		Zhongjiend = new String[]{"^[ ]*[0-9]+、全残：|^[ ]*[0-9]+、毒品"};
		
	}

	
}