package comp;

//ǰ������
import java.io.BufferedReader;
import java.io.IOException;

import java.util.regex.Matcher;
import java.util.regex.Pattern;

import src.linkList;

public class QHRS extends Cpimpl implements Cp {


	public QHRS() {

		// TODO Auto-generated method stub
		Mulustart = "��[ ]*��[ ]*Ŀ[ ]*¼";
		Muluend = "ǰ��";
		Zhongjistart = new String[] { "^[ ]*[0-9].[0-9]  [ ]*�ش󼲲�|ָ�������ж���ļ��������˻�����" };
		Zhongjiend = new String[] { "^[ ]*[0-9].[0-9]  [ ]*ר��ҽ�� " };

	}

	
}
