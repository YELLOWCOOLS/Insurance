package comp;
//��������



import java.io.BufferedReader;
import java.io.IOException;
import java.util.regex.Matcher;
import java.util.regex.Pattern;

import src.linkList;

public class LARScp extends Cpimpl implements Cp{

	//���浱ǰ���յ���Ϣ
	//�������ݿ�ʱ  ��������ɺ� ������һ������
	public src.linkList list;
	public src.Tre tre;
	//���캯��
	public LARScp() {
		
		// ��������Ҫ�Ĳ��ֵĿ�ʼ�ͽ��������ڴ˴�����
		// �ⲿ����ƥ�䵽ʱ������Ӧ�ĺ���
		
		Mulustart = "����Ŀ¼";
		Muluend ="��������";
		//�˴�����Ϊ����  ��ʾ�ؼ����ڵĶ�����ܲ��� һ���ط�
		//һ����ʼ��Ӧһ������
		Zhongjistart = new String[]{"�ش󼲲���Χ������|�ش󼲲����ض������ķ�Χ������"};
		Zhongjiend = new String[]{"�����ش󼲲������в���������������"};
		
	}



}