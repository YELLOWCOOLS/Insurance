package comp;
//��������

import java.io.BufferedReader;
import java.io.IOException;
import java.util.regex.Matcher;
import java.util.regex.Pattern;

import src.linkList;

public class ZRRScp extends Cpimpl implements Cp{
	public linkList illlist=new linkList();
	//���浱ǰ���յ���Ϣ
	//�������ݿ�ʱ  ��������ɺ� ������һ������
	public src.linkList list;
	public src.Tre tre;
	//���캯��
	public ZRRScp() {
		
		// ��������Ҫ�Ĳ��ֵĿ�ʼ�ͽ��������ڴ˴�����
		// �ⲿ����ƥ�䵽ʱ������Ӧ�ĺ���
		
		Mulustart = "����Ŀ¼|��������[2010]��������010��";
		Muluend ="����";
		//�˴�����Ϊ����  ��ʾ�ؼ����ڵĶ�����ܲ��� һ���ط�
		//һ����ʼ��Ӧһ������
		Zhongjistart = new String[]{"[0-9].[0-9][ ]*�ش󼲲�"};
		Zhongjiend = new String[]{"�����ش󼲲������в��������������£�|9.4    �Ŵ��Լ���"};
		
	}
	
	
}