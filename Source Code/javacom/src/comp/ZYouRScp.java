package comp;
//��Ӣ����
import java.io.BufferedReader;
import java.io.IOException;

import java.util.regex.Matcher;
import java.util.regex.Pattern;

import src.linkList;

public class ZYouRScp extends Cpimpl implements Cp {
	public linkList illlist=new linkList();
		public ZYouRScp() {
		
		// TODO Auto-generated method stub
		Mulustart ="����Ŀ¼";
		Muluend ="��������";
		Zhongjistart = new String[]{"^[ ]*[0-9]+���ش󼲲���"};
		Zhongjiend = new String[]{"^[ ]*[0-9]+��ȫ�У�|^[ ]*[0-9]+����Ʒ"};
		
	}

	
}