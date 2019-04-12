package comp;
//中英人寿
import java.io.BufferedReader;
import java.io.IOException;

import java.util.regex.Matcher;
import java.util.regex.Pattern;

import src.linkList;

public class ZYrs extends Cpimpl implements Cp {
	public linkList illlist=new linkList();
		public ZYrs() {
		
		// TODO Auto-generated method stub
		Mulustart ="条款目录";
		Muluend ="中英人寿";
		Zhongjistart = new String[]{"包括以下疾病、疾病状态或手术|重大疾病名称及疾病定义|包括以下疾病、疾病状态或手术"};
		Zhongjiend = new String[]{"null"};
		
	}

	
}