package comp;

import java.io.BufferedReader;
import java.io.File;
import java.io.FileInputStream;
import java.io.InputStreamReader;
import java.util.Stack;
import java.util.regex.Pattern;

public class td extends Thread{
private Cpimpl cp;

private Stack<File> sta;
public td(Stack<File>sta) {
	
	this.sta=sta;
}

@Override
public void run() {
	File file=null;
	String name;
	Stack<File> filesta=new Stack<>();
	while(!sta.isEmpty()) {
		file=sta.pop();
		
		
		
		name=file.getName();
		switch (name) {
		case "�������ٱ��չɷ����޹�˾": cp=new ABRScp();break;
        case "�������ϱ��չɷ����޹�˾": cp=new ABYLcp();break;
        case "���Ǳ��������ٱ������޹�˾": cp=new FXBDXRScp();break;
        case "�����������ٱ��չɷ����޹�˾": cp=new FDSMRScp();break;
        case "������ʢ���ٱ������޹�˾": cp=new GYASRScp();break;
        case "�������ٱ��չɷ����޹�˾": cp=new GHRScp();break;
        case "�������ٱ��չɷ����޹�˾": cp=new GLRScp();break;
        case "��̩���ٱ����������ι�˾": cp=new GTRScp();break;
        case "�������ٱ��չɷ����޹�˾": cp=new HZRScp();break;
        case "��̩���ٱ��չɷ����޹�˾": cp=new HeTRScp();break;
        case "��г�������չɷ����޹�˾": cp=new HXJKcp();break;
        case "�������ٱ��չɷ����޹�˾": cp=new HGRScp();break;
        case "�������ٱ��չɷ����޹�˾": cp=new HHRScp();break;
        case "��̩���ٱ��չɷ����޹�˾": cp=new HuaTRScp();break;
        case "�������ٱ��չɷ����޹�˾": cp=new HXRScp();break;
        case "�������ٱ��չɷ����޹�˾": cp=new JXRScp();break;
        case "�������ٱ��չɷ����޹�˾": cp=new JKRScp();break;
        case "�������ٱ������޹�˾": cp=new JLRScp();break;
        case "ƽ���������չɷ����޹�˾": cp=new PAJKcp();break;
        case "ƽ�����ϱ��չɷ����޹�˾": cp=new PAYLcp();break;
        case "̫�������������չɷ����޹�˾": cp=new TBALJKcp();break;
        case "̫ƽ���ٱ������޹�˾": cp=new TPRScp();break;
        case "̫ƽ���ϱ��չɷ����޹�˾": cp=new TPYLcp();break;
        case "�찲���ٱ��չɷ����޹�˾": cp=new TARScp();break;
        case "ͬ��ȫ�����ٱ������޹�˾": cp=new TFQQRScp();break;
        case "�Ѱ�����޹�˾�Ϻ��ֹ�˾": cp=new YBcp();break;
		
		/*
		case "��Ӣ���ٱ������޹�˾": cp=new ZYrs();break;
		case "���������ٱ������޹�˾": cp=new BDFZRScp();break;
		case "�������ٱ��չɷ����޹�˾": cp=null;break;
		case "����������ٱ������޹�˾": cp=new GDYMRScp();break;
		case "�����������ٱ������޹�˾": cp=new JYKLRScp();break;
		case "�������ٱ��չɷ����޹�˾": cp=new LARScp();break;
		case "ũ�����ٱ��չɷ����޹�˾": cp=new NYRS();break;
		case "ǰ�����ٱ��չɷ����޹�˾": cp=new QHRS();break;
		case "�ų����ٱ������޹�˾": cp=new XCRScp();break;
		case "��̩���ٱ��չɷ����޹�˾": cp=new XTRScp();break;
		case "�е°������ٱ������޹�˾": cp=new ZDRScp();break;
		case "�й�ƽ�����ٱ��չɷ����޹�˾": cp=new ZGPARScp();break;
		case "�й����񽡿����չɷ����޹�˾": cp=null;break;
		case "�й����ٱ��չɷ����޹�˾": cp=new ZGRScp();break;
		case "�й�̫ƽ�����ٱ��չɷ����޹�˾": cp=new ZGTPYRScp();break;
		case "�к����ٱ������޹�˾": cp=new ZHRScp();break;
		case "�к����ٱ������޹�˾": cp=new ZHeRScp();break;
		case "�к����ٱ������޹�˾": cp=new ZHongRScp();break;
		case "�л��������ٱ��չɷ����޹�˾": cp=new ZHLHRScp();break;
		case "������̩�󶼻����ٱ������޹�˾": cp=new ZMLTDDHRScp();break;
		case "�������ٱ��չɷ����޹�˾": cp=new ZRRScp();break;
		case "���´󶫷����ٱ������޹�˾": cp=new ZXDDFRScp();break;
		case "�������ٱ������޹�˾": cp=new ZYRScp();break;
		case "�����������ٱ������޹�˾": cp=new ZYSXRScp();break;
		case "�������ٱ��չɷ����޹�˾": cp=null;break;
		*/
		
		}
		

		for(File files:  file.listFiles()) {
			if(Pattern.compile(".txt$").matcher(files.getName()).find()) {
				filesta.push(files);
			}
		}
		th2 th=new th2(filesta,file.getName());
		th.run();
		
		
	
	}
	
	
}

}
