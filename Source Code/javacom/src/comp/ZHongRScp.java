package comp;

//�к�����
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
		Zhongjistart = new String[] { "^[ ]{0,2}��[һ�����������߰˾�ʮ]+��[ ]+�ش󼲲�����|�ش󼲲�������" };
		Zhongjiend = new String[] { "��[һ�����������߰˾�ʮ]+��[ ]+��������|��[һ�����������߰˾�ʮ]+��[ ]+���⼲������|��[һ�����������߰˾�ʮ]+��[ ]+����|�����ش󼲲�������|��֢���������������" };

	}


}