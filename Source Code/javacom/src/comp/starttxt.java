package comp;

import java.io.BufferedReader;
import java.io.File;
import java.io.FileInputStream;
import java.io.FileNotFoundException;
import java.io.IOException;
import java.io.InputStreamReader;
import java.io.UnsupportedEncodingException;
import java.util.Stack;
import java.util.regex.Matcher;
import java.util.regex.Pattern;

import src.illNode;

public class starttxt {
	public static void main(String[] args) throws IOException {
		Cpimpl cp = null;
		String name = null;
		Stack<File> sta = new Stack<>();
		
		File dir2 = new File("F://��������//��������//�������ٱ��չɷ����޹�˾");
		sta.push(dir2);
		
		File file=null;
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
			case "��̩���ٱ��չɷ����޹�˾": cp=new HuaTRScp();break;//
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
			case "ͬ��ȫ�����ٱ������޹�˾": cp=new TFQQRScp();break;//
			case "�Ѱ�����޹�˾�Ϻ��ֹ�˾": cp=new YBcp();break;//
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
			}
			if(cp==null) {
				continue;
			}
			for(File files:  file.listFiles()) {
				if(Pattern.compile(".txt$").matcher(files.getName()).find()) {
					filesta.push(files);
				}
			}
		}
		
		
		while (!filesta.isEmpty()) {
			cp=new    ZYSXRScp();
			file = filesta.pop();
			System.out.print(file.getName());
//			if (Pattern.compile("1841|1842|1849|2032|231|232|234|230|233|1186|1185|1183|1908|421|422|423|557|556|558|586|587|588|589|590|1436").matcher(file.getName()).find()) {
//				continue;
//			}
//			if(!Pattern.compile("1500").matcher(file.getName()).find())
//			{
//				continue;
//			}
			
			
			
			
			
			
//			if (Pattern.compile("751").matcher(file.getName()).find()) {
//				String tmp=cp.Zhongjistart[0];
//				cp.Zhongjistart[0]="ͳһ������ش󼲲�";
//				try {
//					InputStreamReader read = new InputStreamReader(new FileInputStream(file), "UTF-8");
//					BufferedReader br = new BufferedReader(read);
//				
//					cp.Zhongjiprocess(br);
//					
//					illNode node =cp.illlist.head;
//					while(node!=null) {
//						System.out.println(node.Name);
//						node=node.next;
//					}
//				} catch (Exception e) {
//					System.out.println(file.getName() + "�׳��쳣");
//					e.printStackTrace();
//				}finally {
//					cp.Zhongjistart[0]=tmp;
//				}
//				continue;
//			}
//			if (Pattern.compile("2091").matcher(file.getName()).find()) {
//				String tmp=cp.Zhongjistart[0];
//				cp.Zhongjistart[0]="�����Ӻ�ͬ�����ϵ��ش󼲲���";
//				try {
//					InputStreamReader read = new InputStreamReader(new FileInputStream(file), "UTF-8");
//					BufferedReader br = new BufferedReader(read);
//			
//					cp.Zhongjiprocess(br);
//					
//					illNode node =cp.illlist.head;
//					while(node!=null) {
//						System.out.println(node.Name);
//						node=node.next;
//					}
//				} catch (Exception e) {
//					System.out.println(file.getName() + "�׳��쳣");
//					e.printStackTrace();
//				}finally {
//					cp.Zhongjistart[0]=tmp;
//				}
//				continue;
//			}
//			if (Pattern.compile("1437|291|292|293|294|295|296|297|298|299|300|301|302|303|304|305|306|307|308|1080|1201|1951").matcher(file.getName()).find()) {
//				InputStreamReader read;
//				try {
//					read = new InputStreamReader(new FileInputStream(file), "UTF-8");
//					BufferedReader br = new BufferedReader(read);
//					cp.defaultpro(br);
//					System.out.println("��������Ĭ�ϲ���");
//					illNode node =cp.illlist.head;
//					while(node!=null) {
//						System.out.println(node.Name);
//						node=node.next;
//					}
//					continue;
//				} catch (Exception e) {
//					e.printStackTrace();
//				}
//				continue;
//			}
			
//			if (Pattern.compile("2011").matcher(file.getName()).find()) {
//				
//				cp.Zhongjiend[0] = "�����ش󼲲�����Ϊ����";
//			}
//			file.getParentFile().getName()+
			
			
//			//�찲���ٱ��չ�˾
//			if (Pattern.compile("980").matcher(file.getName()).find()) {
//				String tmp1= cp.Muluend;
//				String tmp2=cp.Mulustart;
//				
//				
//				cp.Muluend = "�������";
//				try {
//					InputStreamReader read = new InputStreamReader(new FileInputStream(file), "UTF-8");
//					BufferedReader br = new BufferedReader(read);
//					
//					int inf = cp.allprocess(br);
//					
//					illNode node =cp.illlist.head;
//					while(node!=null) {
//						System.out.println(node.Name);
////						System.out.println(node.Key);
//						System.out.println();
//						node=node.next;
//					}
//				} catch (Exception e) {
//					System.out.println(file.getName() + "�׳��쳣");
//					e.printStackTrace();
//				}finally {
//					cp.Mulustart = tmp2;
//					cp.Muluend = tmp1;
//				}
//				continue;
//			}
//			
			
			
			try {
				InputStreamReader read = new InputStreamReader(new FileInputStream(file), "UTF-8");
				BufferedReader br = new BufferedReader(read);
				br.mark((int) file.length());
				int inf = cp.Zhongjiprocess(br);
				if (inf == 1) {
					br.reset();
					cp.defaultpro(br);
				}
////				
//				int inf = cp.allprocess(br);
				switch (inf) {
				case 0:		System.out.println("OK");break;
				case 1:		System.out.println("δ�ҵ���ʼ");break;
				case 2:		System.out.println("δ�ҵ���β");break;
				case 3:		System.out.println("δ�ҵ�����");break;
			}
				
				
			} catch (Exception e) {
				System.out.println(file.getName() + "�׳��쳣");
				e.printStackTrace();
			}
			illNode node =cp.illlist.head;
			
//			while(node!=null) {
//				if(Pattern.compile("��������|�����ڼ�").matcher(node.Name).find())
//				{
//				System.out.println(node.Name);
//				System.out.println(node.Key);
//				System.out.println();
//				
//				}
//				node=node.next;
//			}
			
//			while(node!=null) {
//				
//				System.out.println(node.Name);
//				System.out.println(node.Key);
//				System.out.println();
//				
//				
//				node=node.next;
//			}
			
			exp chuli=new exp();
			chuli.nameprocess(node);
			while(node!=null) {
				if(node.type==6) {
					chuli.dutyprocess(node,cp.illlist);
				}
				System.out.println(node.type);
				System.out.println(node.Name);
				System.out.println(node.Key);
				System.out.println();
				node=node.next;
				
			}
			
			try {
				cp.Letin(file.getName().replaceAll(".txt", ""));
			} catch (Exception e) {
				e.printStackTrace();
			}	
		
		}
	
		
		
		
	}
}