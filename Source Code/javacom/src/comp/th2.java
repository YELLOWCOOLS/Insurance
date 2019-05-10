package comp;


import java.io.BufferedReader;
import java.io.File;
import java.io.FileInputStream;
import java.io.FileNotFoundException;
import java.io.InputStreamReader;
import java.io.UnsupportedEncodingException;
import java.util.Stack;
import java.util.regex.Pattern;

public class th2 extends Thread {
	private Cpimpl cp;
	private String cpname;
	private Stack<File> filesta;

	public th2(Stack<File> sta,String cpname) {
		
		this.filesta = sta;
		this.cpname=cpname;
	}

	@Override
	public void run() {
		
		File file =null;
		while (!filesta.isEmpty()) {
			file= filesta.pop();
			switch (file.getParentFile().getName()) {
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
		
			}
			if(cp== null) {
				continue;
			}
			
//			if (!Pattern.compile("1296").matcher(file.getName()).find()) {
//				continue;
//			}
			
			System.out.println("   ");
			System.out.print(file.getParentFile().getName()+file.getName());
			
			
			if (Pattern.compile("1841|1842|1849|2032|231|232|234|230|233|1186|1185|1183|1908|421|422|423|557|556|558|586|587|588|589|590|1436").matcher(file.getName()).find()) {
				continue;
			}
			if (Pattern.compile("1646|152|126|582|1599|1597|618|774|877|917|689|419|420|241|1367|1679|1680|1759|1897|2093|419|420|1897|2093|1759|1680|2089").matcher(file.getName()).find()) {
				String tmp1= cp.Muluend;
				String tmp2=cp.Mulustart;
				
				cp.Mulustart = "null";
				cp.Muluend = "null";
				try {
					InputStreamReader read = new InputStreamReader(new FileInputStream(file), "UTF-8");
					BufferedReader br = new BufferedReader(read);
					
					int inf = cp.Zhongjiprocess(br);
					
					src.illNode node =cp.illlist.head;
//					while(node!=null) {
//						System.out.println(node.Name);
//						node=node.next;
//					}
				} catch (Exception e) {
					System.out.println(file.getName() + "�׳��쳣");
					e.printStackTrace();
				}finally {
					cp.Mulustart = tmp2;
					cp.Muluend = tmp1;
				}
				continue;
			}
			if (Pattern.compile("751").matcher(file.getName()).find()) {
				String tmp=cp.Zhongjistart[0];
				cp.Zhongjistart[0]="ͳһ������ش󼲲�";
				try {
					InputStreamReader read = new InputStreamReader(new FileInputStream(file), "UTF-8");
					BufferedReader br = new BufferedReader(read);
				
					cp.Zhongjiprocess(br);
					
					src.illNode node =cp.illlist.head;
					cp.Letin(file.getName().replaceAll(".txt", ""));
//					while(node!=null) {
//						System.out.println(node.Name);
//						node=node.next;
//					}
				} catch (Exception e) {
					System.out.println(file.getName() + "�׳��쳣");
					e.printStackTrace();
				}finally {
					cp.Zhongjistart[0]=tmp;
				}
				continue;
			}
			if (Pattern.compile("2091").matcher(file.getName()).find()) {
				String tmp=cp.Zhongjistart[0];
				cp.Zhongjistart[0]="�����Ӻ�ͬ�����ϵ��ش󼲲���";
				try {
					InputStreamReader read = new InputStreamReader(new FileInputStream(file), "UTF-8");
					BufferedReader br = new BufferedReader(read);
			
					cp.Zhongjiprocess(br);
					
					src.illNode node =cp.illlist.head;
//					while(node!=null) {
//						System.out.println(node.Name);
//						node=node.next;
//					}
				} catch (Exception e) {
					System.out.println(file.getName() + "�׳��쳣");
					e.printStackTrace();
				}finally {
					cp.Zhongjistart[0]=tmp;
				}
				continue;
			}
			if (Pattern.compile("1437|291|292|293|294|295|296|297|298|299|300|301|302|303|304|305|306|307|308|1080|1201|1951").matcher(file.getName()).find()) {
				InputStreamReader read;
				try {
					read = new InputStreamReader(new FileInputStream(file), "UTF-8");
					BufferedReader br = new BufferedReader(read);
					cp.defaultpro(br);
					
					System.out.println("��������Ĭ�ϲ���");
					src.illNode node =cp.illlist.head;
//					while(node!=null) {
//						System.out.println(node.Name);
//						node=node.next;
//					}
					continue;
				} catch (Exception e) {
					e.printStackTrace();
				}
				continue;
			}
			

			

			
			
			if(Pattern.compile("1183|1184|1185|1186|1187|1908").matcher(file.getName()).find())
			{
				continue;
			}
			if (Pattern.compile("557|556|558|586|587|588|589|590|1436|1646|152|126|582|1599|1597|618|774|877|917|689|419|420|241|1367|1679|1680|1759|1897|2093|419|420|1897|2093|1759|1680|2089|1541|1540").matcher(file.getName()).find()&&!Pattern.compile("1590").matcher(file.getName()).find()) {
				String tmp1= cp.Muluend;
				String tmp2=cp.Mulustart;
				
				cp.Mulustart = "null";
				cp.Muluend = "null";
				try {
					InputStreamReader read = new InputStreamReader(new FileInputStream(file), "UTF-8");
					BufferedReader br = new BufferedReader(read);
					
					int inf = cp.Zhongjiprocess(br);
					
					src.illNode node =cp.illlist.head;
//					while(node!=null) {
//						System.out.println(node.Name);
//						System.out.println(node.Key);
//						System.out.println();
//						node=node.next;
//					}
					try {
                        cp.Letin(file.getName().replaceAll(".txt", ""));
                    } catch (Exception e) {
                        e.printStackTrace();
                    }
				} catch (Exception e) {
					System.out.println(file.getName() + "�׳��쳣");
					e.printStackTrace();
				}finally {
					cp.Mulustart = tmp2;
					cp.Muluend = tmp1;
				}
				continue;
			}
			
			try {
				InputStreamReader read = new InputStreamReader(new FileInputStream(file), "UTF-8");
				BufferedReader br = new BufferedReader(read);
				br.mark((int) file.length());
				int inf = cp.Zhongjiprocess(br);
				
				src.illNode node =cp.illlist.head;
				
				try {
                    cp.Letin(file.getName().replaceAll(".txt", ""));
                } catch (Exception e) {
                    e.printStackTrace();
                }
			} catch (Exception e) {
				System.out.println(file.getName() + "�׳��쳣");
				e.printStackTrace();
			}
			
			
			
			
		}
		
	
			
		
			
			
		
	}

}
