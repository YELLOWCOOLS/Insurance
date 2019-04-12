package comp;

//中国人寿
import java.io.BufferedReader;
import java.io.IOException;

import java.util.regex.Matcher;
import java.util.regex.Pattern;

import src.linkList;

public class ZGRScp extends Cpimpl implements Cp {
	public linkList illlist = new linkList();

	public ZGRScp() {

		// TODO Auto-generated method stub
		Mulustart = "Null ";
		Muluend = "Null";
		Zhongjistart = new String[] { "重大疾病 " };
		Zhongjiend = new String[] { "保险责任 " };

	}

	
}