package comp;

//�й�̫ƽ��
import java.io.BufferedReader;
import java.io.IOException;

import java.util.regex.Matcher;
import java.util.regex.Pattern;

import src.linkList;

public class ZGTPYRScp extends Cpimpl implements Cp {
	public linkList illlist = new linkList();

	public ZGTPYRScp() {

		// TODO Auto-generated method stub
		Mulustart = "����Ŀ¼";
		Muluend = "�й�̫ƽ�����ٱ��չɷ����޹�˾ ";
		Zhongjistart = new String[] { "[0-9]+.[ ]*�ش󼲲��Ķ���|�ض��ش󼲲��Ķ��� " };
		Zhongjiend = new String[] { "[0-9]+.[ ]*����" };

	}

	
}