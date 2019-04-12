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
		
		if(cpname.equals( "�������ٱ��չɷ����޹�˾")) {
			cp = new ABRScp();
		}
			
			 
		if(cpname.equals( "�������ϱ��չɷ����޹�˾"))
			cp = new ABYLcp();
			 
		if(cpname.equals( "���Ǳ��������ٱ������޹�˾"))
			cp = new FXBDXRScp();
			 
		if(cpname.equals( "�����������ٱ��չɷ����޹�˾"))
			cp = new FDSMRScp();
			 
		if(cpname.equals( "������ʢ���ٱ������޹�˾"))
			cp = new GYASRScp();
			 
		if(cpname.equals( "�������ٱ��չɷ����޹�˾"))
			cp = new GHRScp();
			 
		if(cpname.equals( "�������ٱ��չɷ����޹�˾"))
			cp = new GLRScp();
			 
		if(cpname.equals( "��̩���ٱ����������ι�˾"))
			cp = new GTRScp();
			 
		if(cpname.equals( "�������ٱ��չɷ����޹�˾"))
			cp = new HZRScp();
			 
		if(cpname.equals( "��̩���ٱ��չɷ����޹�˾"))
			cp = new HeTRScp();
			 
		if(cpname.equals( "��г�������չɷ����޹�˾"))
			cp = new HXJKcp();
			 
		if(cpname.equals( "�������ٱ��չɷ����޹�˾"))
			cp = new HGRScp();
			 
		if(cpname.equals( "�������ٱ��չɷ����޹�˾"))
			cp = new HHRScp();
			 
		if(cpname.equals( "��̩���ٱ��չɷ����޹�˾"))
			cp = new HuaTRScp();
			 //
		if(cpname.equals( "�������ٱ��չɷ����޹�˾"))
			cp = new HXRScp();
			 
		if(cpname.equals( "�������ٱ��չɷ����޹�˾"))
			cp = new JXRScp();
			 
		if(cpname.equals( "�������ٱ��չɷ����޹�˾"))
			cp = new JKRScp();
			 
		if(cpname.equals( "�������ٱ������޹�˾"))
			cp = new JLRScp();
			 
		if(cpname.equals( "ƽ���������չɷ����޹�˾"))
			cp = new PAJKcp();
			 
		if(cpname.equals( "ƽ�����ϱ��չɷ����޹�˾"))
			cp = new PAYLcp();
			 
		if(cpname.equals( "̫�������������չɷ����޹�˾"))
			cp = new TBALJKcp();
			 
		if(cpname.equals( "̫ƽ���ٱ������޹�˾"))
			cp = new TPRScp();
			 
		if(cpname.equals( "̫ƽ���ϱ��չɷ����޹�˾"))
			cp = new TPYLcp();
			 
		if(cpname.equals( "�찲���ٱ��չɷ����޹�˾"))
			cp = new TARScp();
			 
		if(cpname.equals( "ͬ��ȫ�����ٱ������޹�˾"))
			cp = new TFQQRScp();
			 
		if(cpname.equals( "�Ѱ�����޹�˾�Ϻ��ֹ�˾"))
			cp = new YBcp();
			 
		if(cpname.equals( "��Ӣ���ٱ������޹�˾"))
			cp = new ZYrs();
			 
		if(cpname.equals( "���������ٱ������޹�˾"))
			cp = new BDFZRScp();
			 
		if(cpname.equals( "�������ٱ��չɷ����޹�˾"))
			cp = new Cpimpl();
			 
		if(cpname.equals( "����������ٱ������޹�˾"))
			cp = new GDYMRScp();
			 
		if(cpname.equals( "�����������ٱ������޹�˾"))
			cp = new JYKLRScp();
			 
		if(cpname.equals( "�������ٱ��չɷ����޹�˾"))
			cp = new LARScp();
			 
		if(cpname.equals( "ũ�����ٱ��չɷ����޹�˾"))
			cp = new NYRS();
			 
		if(cpname.equals( "ǰ�����ٱ��չɷ����޹�˾"))
			cp = new QHRS();
			 
		if(cpname.equals( "�ų����ٱ������޹�˾"))
			cp = new XCRScp();
			 
		if(cpname.equals( "��̩���ٱ��չɷ����޹�˾"))
			cp = new XTRScp();
			 
		if(cpname.equals( "�е°������ٱ������޹�˾"))
			cp = new ZDRScp();
			 
		if(cpname.equals( "�й�ƽ�����ٱ��չɷ����޹�˾"))
			cp = new ZGPARScp();
			 
		if(cpname.equals( "�й����񽡿����չɷ����޹�˾"))
			cp = new Cpimpl();
			 
		if(cpname.equals( "�й����ٱ��չɷ����޹�˾"))
			cp = new ZGRScp();
			 
		if(cpname.equals( "�й�̫ƽ�����ٱ��չɷ����޹�˾"))
			cp = new ZGTPYRScp();
			 
		if(cpname.equals( "�к����ٱ������޹�˾"))
			cp = new ZHRScp();
			 
		if(cpname.equals( "�к����ٱ������޹�˾"))
			cp = new ZHeRScp();
			 
		if(cpname.equals( "�к����ٱ������޹�˾"))
			cp = new ZHongRScp();
			 
		if(cpname.equals( "�л��������ٱ��չɷ����޹�˾"))
			cp = new ZHLHRScp();
			 
		if(cpname.equals( "������̩�󶼻����ٱ������޹�˾"))
			cp = new ZMLTDDHRScp();
			 
		if(cpname.equals( "�������ٱ��չɷ����޹�˾"))
			cp = new ZRRScp();
			 
		if(cpname.equals( "���´󶫷����ٱ������޹�˾"))
			cp = new ZXDDFRScp();
			 
		if(cpname.equals( "�������ٱ������޹�˾"))
			cp = new ZYRScp();
			 
		if(cpname.equals( "�����������ٱ������޹�˾"))
			cp = new ZYSXRScp();
			 
		if(cpname.equals( "�������ٱ��չɷ����޹�˾"))
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
				System.out.println("δ�ҵ���ʼ");
				break;
			case 2:
				System.out.println("δ�ҵ���β");
				break;
			case 3:
				System.out.println("δ�ҵ�����");
				break;
			}
		} catch (Exception e) {
			System.out.println(file.getName() + "�׳��쳣");
			e.printStackTrace();
		}

		illNode node = cp.illlist.head;
		exp chuli = new exp();
		chuli.nameprocess(node);

		node = cp.illlist.head;
		JSONObject all = new JSONObject();
		while (node != null) {
			if (all.containsKey(node.Name)) {
				node.Name = "δ����ȷ��ȡ" + (int) (1 + Math.random() * (100));
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
				System.out.println("δ�ҵ���ʼ");
				break;
			case 2:
				System.out.println("δ�ҵ���β");
				break;
			case 3:
				System.out.println("δ�ҵ�����");
				break;
			}
		} catch (Exception e) {
			System.out.println(file.getName() + "�׳��쳣");
			e.printStackTrace();
		}
		node = cp.illlist.head;
		JSONObject illlist = new JSONObject();
		while (node != null) {
			if (illlist.containsKey(node.Name)) {
				node.Name = "δ����ȷ��ȡ" + (int) (1 + Math.random() * (100));
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
				System.out.println("δ�ҵ���ʼ");
				break;
			case 2:
				System.out.println("δ�ҵ���β");
				break;
			case 3:
				System.out.println("δ�ҵ�����");
				break;
			}
		} catch (Exception e) {
			System.out.println(file.getName() + "�׳��쳣");
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
		Pattern p1 = Pattern.compile("�ش󼲲�");
		Pattern p2 = Pattern.compile("���");
		Pattern p3 = Pattern.compile("ȫ��");
		Pattern p4 = Pattern.compile("�ض�[\\s\\S]{0,10}����");
		Pattern p5 = Pattern.compile("��֢[\\s\\S]{0,10}����");
		Pattern p6 = Pattern.compile("����Σ��");
		Pattern p7 = Pattern.compile("����");

		if (p1.matcher(tmp).find()) {
			if (!ob.contains("�ش󼲲����ս�")) {
				ob.add("�ش󼲲����ս�");
			}
		}
		if (p2.matcher(tmp).find()) {
			if (!ob.contains("��ʱ��ս�")) {
				ob.add("��ʱ��ս�");
			}
		}
		if (p3.matcher(tmp).find()) {
			if (!ob.contains("ȫ�б��ս�")) {
				ob.add("ȫ�б��ս�");
			}
		}
		if (p4.matcher(tmp).find()) {
			if (!ob.contains("�ض��������ս�")) {
				ob.add("�ض��������ս�");
			}
		}
		if (p5.matcher(tmp).find()) {
			if (!ob.contains("��֢�������ս�")) {
				ob.add("��֢�������ս�");
			}

		}
		if (p6.matcher(tmp).find()) {
			if (!ob.contains("����Σ�ر��ս�")) {
				ob.add("����Σ�ر��ս�");
			}

		}
		if (p7.matcher(tmp).find()) {
			if (!ob.contains("���Ᵽ�ս�")) {
				ob.add("���Ᵽ�ս�");
			}

		}
	}
}
