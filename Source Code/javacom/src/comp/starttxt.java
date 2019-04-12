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
		
		File dir2 = new File("F://保险数据//整理数据//中邮人寿保险股份有限公司");
		sta.push(dir2);
		
		File file=null;
		Stack<File> filesta=new Stack<>();
		while(!sta.isEmpty()) {
			file=sta.pop();	
			name=file.getName();
			switch (name) {
			case "安邦人寿保险股份有限公司": cp=new ABRScp();break;
			case "安邦养老保险股份有限公司": cp=new ABYLcp();break;
			case "复星保德信人寿保险有限公司": cp=new FXBDXRScp();break;
			case "富德生命人寿保险股份有限公司": cp=new FDSMRScp();break;
			case "工银安盛人寿保险有限公司": cp=new GYASRScp();break;
			case "国华人寿保险股份有限公司": cp=new GHRScp();break;
			case "国联人寿保险股份有限公司": cp=new GLRScp();break;
			case "国泰人寿保险有限责任公司": cp=new GTRScp();break;
			case "合众人寿保险股份有限公司": cp=new HZRScp();break;
			case "和泰人寿保险股份有限公司": cp=new HeTRScp();break;
			case "和谐健康保险股份有限公司": cp=new HXJKcp();break;
			case "华贵人寿保险股份有限公司": cp=new HGRScp();break;
			case "华汇人寿保险股份有限公司": cp=new HHRScp();break;
			case "华泰人寿保险股份有限公司": cp=new HuaTRScp();break;//
			case "华夏人寿保险股份有限公司": cp=new HXRScp();break;
			case "吉祥人寿保险股份有限公司": cp=new JXRScp();break;
			case "君康人寿保险股份有限公司": cp=new JKRScp();break;
			case "君龙人寿保险有限公司": cp=new JLRScp();break;
			case "平安健康保险股份有限公司": cp=new PAJKcp();break;
			case "平安养老保险股份有限公司": cp=new PAYLcp();break;
			case "太保安联健康保险股份有限公司": cp=new TBALJKcp();break;
			case "太平人寿保险有限公司": cp=new TPRScp();break;
			case "太平养老保险股份有限公司": cp=new TPYLcp();break;
			case "天安人寿保险股份有限公司": cp=new TARScp();break;
			case "同方全球人寿保险有限公司": cp=new TFQQRScp();break;//
			case "友邦保险有限公司上海分公司": cp=new YBcp();break;//
			case "中英人寿保险有限公司": cp=new ZYrs();break;
			case "北大方正人寿保险有限公司": cp=new BDFZRScp();break;
			case "东吴人寿保险股份有限公司": cp=null;break;
			case "光大永明人寿保险有限公司": cp=new GDYMRScp();break;
			case "交银康联人寿保险有限公司": cp=new JYKLRScp();break;
			case "利安人寿保险股份有限公司": cp=new LARScp();break;
			case "农银人寿保险股份有限公司": cp=new NYRS();break;
			case "前海人寿保险股份有限公司": cp=new QHRS();break;
			case "信诚人寿保险有限公司": cp=new XCRScp();break;
			case "信泰人寿保险股份有限公司": cp=new XTRScp();break;
			case "中德安联人寿保险有限公司": cp=new ZDRScp();break;
			case "中国平安人寿保险股份有限公司": cp=new ZGPARScp();break;
			case "中国人民健康保险股份有限公司": cp=null;break;
			case "中国人寿保险股份有限公司": cp=new ZGRScp();break;
			case "中国太平洋人寿保险股份有限公司": cp=new ZGTPYRScp();break;
			case "中韩人寿保险有限公司": cp=new ZHRScp();break;
			case "中荷人寿保险有限公司": cp=new ZHeRScp();break;
			case "中宏人寿保险有限公司": cp=new ZHongRScp();break;
			case "中华联合人寿保险股份有限公司": cp=new ZHLHRScp();break;
			case "中美联泰大都会人寿保险有限公司": cp=new ZMLTDDHRScp();break;
			case "中融人寿保险股份有限公司": cp=new ZRRScp();break;
			case "中新大东方人寿保险有限公司": cp=new ZXDDFRScp();break;
			case "中意人寿保险有限公司": cp=new ZYRScp();break;
			case "中银三星人寿保险有限公司": cp=new ZYSXRScp();break;
			case "中邮人寿保险股份有限公司": cp=null;break;
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
//				cp.Zhongjistart[0]="统一定义的重大疾病";
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
//					System.out.println(file.getName() + "抛出异常");
//					e.printStackTrace();
//				}finally {
//					cp.Zhongjistart[0]=tmp;
//				}
//				continue;
//			}
//			if (Pattern.compile("2091").matcher(file.getName()).find()) {
//				String tmp=cp.Zhongjistart[0];
//				cp.Zhongjistart[0]="本附加合同所保障的重大疾病共";
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
//					System.out.println(file.getName() + "抛出异常");
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
//					System.out.println("主动进行默认操作");
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
//				cp.Zhongjiend[0] = "以上重大疾病共分为四组";
//			}
//			file.getParentFile().getName()+
			
			
//			//天安人寿保险公司
//			if (Pattern.compile("980").matcher(file.getName()).find()) {
//				String tmp1= cp.Muluend;
//				String tmp2=cp.Mulustart;
//				
//				
//				cp.Muluend = "基本条款：";
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
//					System.out.println(file.getName() + "抛出异常");
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
				case 1:		System.out.println("未找到开始");break;
				case 2:		System.out.println("未找到结尾");break;
				case 3:		System.out.println("未找到内容");break;
			}
				
				
			} catch (Exception e) {
				System.out.println(file.getName() + "抛出异常");
				e.printStackTrace();
			}
			illNode node =cp.illlist.head;
			
//			while(node!=null) {
//				if(Pattern.compile("保险责任|保险期间").matcher(node.Name).find())
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