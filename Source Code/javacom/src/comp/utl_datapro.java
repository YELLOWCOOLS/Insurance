package comp;

import java.io.BufferedReader;
import java.io.File;
import java.io.FileInputStream;
import java.io.InputStreamReader;
import java.util.Random;
import java.util.regex.Pattern;

import com.alibaba.fastjson.JSON;
import com.alibaba.fastjson.JSONArray;
import com.alibaba.fastjson.JSONObject;

import src.illNode;

public class utl_datapro {
	public Cpimpl get_cp(String cpname) {
		Cpimpl cp = null;
		
		if(cpname.equals( "安邦人寿保险股份有限公司")) {
			cp = new ABRScp();
		}
			
			 
		if(cpname.equals( "安邦养老保险股份有限公司"))
			cp = new ABYLcp();
			 
		if(cpname.equals( "复星保德信人寿保险有限公司"))
			cp = new FXBDXRScp();
			 
		if(cpname.equals( "富德生命人寿保险股份有限公司"))
			cp = new FDSMRScp();
			 
		if(cpname.equals( "工银安盛人寿保险有限公司"))
			cp = new GYASRScp();
			 
		if(cpname.equals( "国华人寿保险股份有限公司"))
			cp = new GHRScp();
			 
		if(cpname.equals( "国联人寿保险股份有限公司"))
			cp = new GLRScp();
			 
		if(cpname.equals( "国泰人寿保险有限责任公司"))
			cp = new GTRScp();
			 
		if(cpname.equals( "合众人寿保险股份有限公司"))
			cp = new HZRScp();
			 
		if(cpname.equals( "和泰人寿保险股份有限公司"))
			cp = new HeTRScp();
			 
		if(cpname.equals( "和谐健康保险股份有限公司"))
			cp = new HXJKcp();
			 
		if(cpname.equals( "华贵人寿保险股份有限公司"))
			cp = new HGRScp();
			 
		if(cpname.equals( "华汇人寿保险股份有限公司"))
			cp = new HHRScp();
			 
		if(cpname.equals( "华泰人寿保险股份有限公司"))
			cp = new HuaTRScp();
			 //
		if(cpname.equals( "华夏人寿保险股份有限公司"))
			cp = new HXRScp();
			 
		if(cpname.equals( "吉祥人寿保险股份有限公司"))
			cp = new JXRScp();
			 
		if(cpname.equals( "君康人寿保险股份有限公司"))
			cp = new JKRScp();
			 
		if(cpname.equals( "君龙人寿保险有限公司"))
			cp = new JLRScp();
			 
		if(cpname.equals( "平安健康保险股份有限公司"))
			cp = new PAJKcp();
			 
		if(cpname.equals( "平安养老保险股份有限公司"))
			cp = new PAYLcp();
			 
		if(cpname.equals( "太保安联健康保险股份有限公司"))
			cp = new TBALJKcp();
			 
		if(cpname.equals( "太平人寿保险有限公司"))
			cp = new TPRScp();
			 
		if(cpname.equals( "太平养老保险股份有限公司"))
			cp = new TPYLcp();
			 
		if(cpname.equals( "天安人寿保险股份有限公司"))
			cp = new TARScp();
			 
		if(cpname.equals( "同方全球人寿保险有限公司"))
			cp = new TFQQRScp();
			 
		if(cpname.equals( "友邦保险有限公司上海分公司"))
			cp = new YBcp();
			 
		if(cpname.equals( "中英人寿保险有限公司"))
			cp = new ZYrs();
			 
		if(cpname.equals( "北大方正人寿保险有限公司"))
			cp = new BDFZRScp();
			 
		if(cpname.equals( "东吴人寿保险股份有限公司"))
			cp = new Cpimpl();
			 
		if(cpname.equals( "光大永明人寿保险有限公司"))
			cp = new GDYMRScp();
			 
		if(cpname.equals( "交银康联人寿保险有限公司"))
			cp = new JYKLRScp();
			 
		if(cpname.equals( "利安人寿保险股份有限公司"))
			cp = new LARScp();
			 
		if(cpname.equals( "农银人寿保险股份有限公司"))
			cp = new NYRS();
			 
		if(cpname.equals( "前海人寿保险股份有限公司"))
			cp = new QHRS();
			 
		if(cpname.equals( "信诚人寿保险有限公司"))
			cp = new XCRScp();
			 
		if(cpname.equals( "信泰人寿保险股份有限公司"))
			cp = new XTRScp();
			 
		if(cpname.equals( "中德安联人寿保险有限公司"))
			cp = new ZDRScp();
			 
		if(cpname.equals( "中国平安人寿保险股份有限公司"))
			cp = new ZGPARScp();
			 
		if(cpname.equals( "中国人民健康保险股份有限公司"))
			cp = new Cpimpl();
			 
		if(cpname.equals( "中国人寿保险股份有限公司"))
			cp = new ZGRScp();
			 
		if(cpname.equals( "中国太平洋人寿保险股份有限公司"))
			cp = new ZGTPYRScp();
			 
		if(cpname.equals( "中韩人寿保险有限公司"))
			cp = new ZHRScp();
			 
		if(cpname.equals( "中荷人寿保险有限公司"))
			cp = new ZHeRScp();
			 
		if(cpname.equals( "中宏人寿保险有限公司"))
			cp = new ZHongRScp();
			 
		if(cpname.equals( "中华联合人寿保险股份有限公司"))
			cp = new ZHLHRScp();
			 
		if(cpname.equals( "中美联泰大都会人寿保险有限公司"))
			cp = new ZMLTDDHRScp();
			 
		if(cpname.equals( "中融人寿保险股份有限公司"))
			cp = new ZRRScp();
			 
		if(cpname.equals( "中新大东方人寿保险有限公司"))
			cp = new ZXDDFRScp();
			 
		if(cpname.equals( "中意人寿保险有限公司"))
			cp = new ZYRScp();
			 
		if(cpname.equals( "中银三星人寿保险有限公司"))
			cp = new ZYSXRScp();
			 
		if(cpname.equals( "中邮人寿保险股份有限公司"))
			cp = new Cpimpl();

		if (cp == null) {
			return new Cpimpl();
		}
		return cp;
	}

	public JSONObject all_data(int id, String cpname) {
		JSONObject all_data = new JSONObject();
		Cpimpl cp = null;
		String name = null;
		File file = new File("D://ZZZZZZZZZYYYYYYYYYY//www//public//Search//1txt//" + id + ".txt");
		cp = get_cp(cpname);
		System.out.println(file.getName());

		try {
			InputStreamReader read = new InputStreamReader(new FileInputStream(file), "UTF-8");
			BufferedReader br = new BufferedReader(read);
			br.mark((int) file.length());
			int inf = cp.allprocess(br);
			if (inf == 1) {
				br.reset();
				cp.defaultpro(br);
			}
			switch (inf) {
			case 0:
				System.out.println("OK");
				break;
			case 1:
				System.out.println("未找到开始");
				break;
			case 2:
				System.out.println("未找到结尾");
				break;
			case 3:
				System.out.println("未找到内容");
				break;
			}
		} catch (Exception e) {
			System.out.println(file.getName() + "抛出异常");
			e.printStackTrace();
		}

		illNode node = cp.illlist.head;
		exp chuli = new exp();
		chuli.nameprocess(node);

		node = cp.illlist.head;
		JSONObject all = new JSONObject();
		while (node != null) {
			if (all.containsKey(node.Name)) {
				node.Name = "未能正确获取" + (int) (1 + Math.random() * (100));
			}
			all.put(node.Name, node.Key);
			node = node.next;
		}
		all_data.put("all", all);

		cp = get_cp(cpname);
		try {
			InputStreamReader read = new InputStreamReader(new FileInputStream(file), "UTF-8");
			BufferedReader br = new BufferedReader(read);
			br.mark((int) file.length());
			int inf = cp.Zhongjiprocess(br);
			if (inf == 1) {
				br.reset();
				cp.defaultpro(br);
			}
			switch (inf) {
			case 0:
				System.out.println("OK");
				break;
			case 1:
				System.out.println("未找到开始");
				break;
			case 2:
				System.out.println("未找到结尾");
				break;
			case 3:
				System.out.println("未找到内容");
				break;
			}
		} catch (Exception e) {
			System.out.println(file.getName() + "抛出异常");
			e.printStackTrace();
		}
		node = cp.illlist.head;
		JSONObject illlist = new JSONObject();
		while (node != null) {
			if (illlist.containsKey(node.Name)) {
				node.Name = "未能正确获取" + (int) (1 + Math.random() * (100));
			}
			illlist.put(node.Name, node.Key);
			node = node.next;
		}

		all_data.put("illlist", illlist);

		cp = get_cp(cpname);
		try {
			InputStreamReader read = new InputStreamReader(new FileInputStream(file), "UTF-8");
			BufferedReader br = new BufferedReader(read);
			br.mark((int) file.length());
			int inf = cp.allprocess(br);
			if (inf == 1) {
				br.reset();
				cp.defaultpro(br);
			}
			switch (inf) {
			case 0:
				System.out.println("OK");
				break;
			case 1:
				System.out.println("未找到开始");
				break;
			case 2:
				System.out.println("未找到结尾");
				break;
			case 3:
				System.out.println("未找到内容");
				break;
			}
		} catch (Exception e) {
			System.out.println(file.getName() + "抛出异常");
			e.printStackTrace();
		}
		node = cp.illlist.head;
		chuli.nameprocess(node);
		node = cp.illlist.head;
		JSONArray tag = new JSONArray();
		while (node != null) {
			if (node.type == 6) {
				dutyprocess(node.Key, tag);
			}
			node = node.next;
		}

		all_data.put("tag", tag);

		return all_data;

	}

	public void dutyprocess(String key, JSONArray ob) {
		String tmp = key;
		Pattern p1 = Pattern.compile("重大疾病");
		Pattern p2 = Pattern.compile("身故");
		Pattern p3 = Pattern.compile("全残");
		Pattern p4 = Pattern.compile("特定[\\s\\S]{0,10}疾病");
		Pattern p5 = Pattern.compile("轻症[\\s\\S]{0,10}疾病");
		Pattern p6 = Pattern.compile("早期危重");
		Pattern p7 = Pattern.compile("豁免");

		if (p1.matcher(tmp).find()) {
			if (!ob.contains("重大疾病保险金")) {
				ob.add("重大疾病保险金");
			}
		}
		if (p2.matcher(tmp).find()) {
			if (!ob.contains("身故保险金")) {
				ob.add("身故保险金");
			}
		}
		if (p3.matcher(tmp).find()) {
			if (!ob.contains("全残保险金")) {
				ob.add("全残保险金");
			}
		}
		if (p4.matcher(tmp).find()) {
			if (!ob.contains("特定疾病保险金")) {
				ob.add("特定疾病保险金");
			}
		}
		if (p5.matcher(tmp).find()) {
			if (!ob.contains("轻症疾病保险金")) {
				ob.add("轻症疾病保险金");
			}

		}
		if (p6.matcher(tmp).find()) {
			if (!ob.contains("早期危重保险金")) {
				ob.add("早期危重保险金");
			}

		}
		if (p7.matcher(tmp).find()) {
			if (!ob.contains("豁免保险金")) {
				ob.add("豁免保险金");
			}

		}
	}
}
