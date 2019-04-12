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
        case "华泰人寿保险股份有限公司": cp=new HuaTRScp();break;
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
        case "同方全球人寿保险有限公司": cp=new TFQQRScp();break;
        case "友邦保险有限公司上海分公司": cp=new YBcp();break;
		
		/*
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
