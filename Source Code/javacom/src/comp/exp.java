package comp;

import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.util.regex.Pattern;


import src.illNode;
import src.linkList;

public class exp {

	public void nameprocess(illNode node) {

		while (node != null) {
			process(node);
			node = node.next;
		}
	}

	private void process(illNode node) {

		String name = node.Name;
		Pattern p1 = Pattern.compile("合同[\\s\\S]*构成|合同[\\s\\S]*订立");
		Pattern p2 = Pattern.compile("合同成立");
		Pattern p3 = Pattern.compile("投保范围|投保年龄");
		Pattern p4 = Pattern.compile("犹豫期");
		Pattern p5 = Pattern.compile("保险[\\s\\S]+期间");
		Pattern p6 = Pattern.compile("保险责任");
		Pattern p7 = Pattern.compile("责任免除");
		Pattern p8 = Pattern.compile("受益人");
		Pattern p9 = Pattern.compile("保险金申请");
		Pattern p10 = Pattern.compile("保险金给付");
		Pattern p11 = Pattern.compile("诉讼时效");
		Pattern p12 = Pattern.compile("保险金缴纳");
		Pattern p13 = Pattern.compile("宽限期");
		Pattern p14 = Pattern.compile("效力[\\s\\S]*终止");
		Pattern p15 = Pattern.compile("效力[\\s\\S]*恢复");
		Pattern p16 = Pattern.compile("合同[的]解除");
		Pattern p17 = Pattern.compile("释义");

		if (p1.matcher(name).find()) {
			node.Name = "合同构成";
			node.type = 1;

			return;
		}
		if (p2.matcher(name).find()) {
			node.Name = "合同成立";
			node.type = 2;

			return;
		}
		if (p3.matcher(name).find()) {
			node.Name = "投保范围";
			node.type = 3;

			return;
		}
		if (p4.matcher(name).find()) {
			node.Name = "犹豫期";
			node.type = 4;
			return;
		}
		if (p5.matcher(name).find()) {
			node.Name = "保险期间";
			node.type = 5;
			return;
		}
		if (p6.matcher(name).find()) {
			node.Name = "保险责任";
			node.type = 6;
			return;
		}
		if (p7.matcher(name).find()) {
			node.Name = "责任免除";
			node.type = 7;
			return;
		}
		if (p8.matcher(name).find()) {
			node.Name = "受益人";
			node.type = 8;
			return;
		}
		if (p9.matcher(name).find()) {
			node.Name = "保险金申请";
			node.type = 9;
			return;
		}
		if (p10.matcher(name).find()) {
			node.Name = "保险金给付";
			node.type = 10;
			return;
		}
		if (p11.matcher(name).find()) {
			node.Name = "诉讼时效";
			node.type = 11;
			return;
		}
		if (p12.matcher(name).find()) {
			node.Name = "保险金缴纳";
			node.type = 12;
			return;
		}
		if (p13.matcher(name).find()) {
			node.Name = "宽限期";
			node.type = 13;
			return;
		}
		if (p14.matcher(name).find()) {
			node.Name = "保险效力中止";
			node.type = 14;
			return;
		}
		if (p15.matcher(name).find()) {
			node.Name = "保险效力恢复";
			node.type = 15;
			return;
		}
		if (p16.matcher(name).find()) {
			node.Name = "合同解除";
			node.type = 16;
			return;
		}
		if (p17.matcher(name).find()) {
			node.Name = "释义";
			node.type = 17;
			return;
		}

	}

	public void dutyprocess(illNode node, linkList illlist) {
		String tmp = node.Key;
		Pattern p1 = Pattern.compile("重大疾病");
		Pattern p2 = Pattern.compile("身故");
		Pattern p3 = Pattern.compile("全残");
		Pattern p4 = Pattern.compile("特定[\\s\\S]{0,10}疾病");
		Pattern p5 = Pattern.compile("轻症[\\s\\S]{0,10}疾病");
		Pattern p6 = Pattern.compile("早期危重");
		Pattern p7 = Pattern.compile("豁免");

		if (p1.matcher(tmp).find()) {
			illlist.add("重大疾病保险金", "", 18);
		}
		if (p2.matcher(tmp).find()) {
			illlist.add("身故保险金", "", 18);
		}
		if (p3.matcher(tmp).find()) {
			illlist.add("全残保险金", "", 18);
		}
		if (p4.matcher(tmp).find()) {
			illlist.add("特定疾病保险金", "", 18);
		}
		if (p5.matcher(tmp).find()) {
			illlist.add("轻症疾病保险金", "", 18);
		}
		if (p6.matcher(tmp).find()) {
			illlist.add("早期危重保险金", "", 18);
		}
		if (p7.matcher(tmp).find()) {
			illlist.add("豁免保险金", "", 18);
		}

	}

}
