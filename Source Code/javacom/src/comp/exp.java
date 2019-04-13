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
		Pattern p1 = Pattern.compile("��ͬ[\\s\\S]*����|��ͬ[\\s\\S]*����");
		Pattern p2 = Pattern.compile("��ͬ����");
		Pattern p3 = Pattern.compile("Ͷ����Χ|Ͷ������");
		Pattern p4 = Pattern.compile("��ԥ��");
		Pattern p5 = Pattern.compile("����[\\s\\S]+�ڼ�");
		Pattern p6 = Pattern.compile("��������");
		Pattern p7 = Pattern.compile("�������");
		Pattern p8 = Pattern.compile("������");
		Pattern p9 = Pattern.compile("���ս�����");
		Pattern p10 = Pattern.compile("���ս����");
		Pattern p11 = Pattern.compile("����ʱЧ");
		Pattern p12 = Pattern.compile("���ս����");
		Pattern p13 = Pattern.compile("������");
		Pattern p14 = Pattern.compile("Ч��[\\s\\S]*��ֹ");
		Pattern p15 = Pattern.compile("Ч��[\\s\\S]*�ָ�");
		Pattern p16 = Pattern.compile("��ͬ[��]���");
		Pattern p17 = Pattern.compile("����");

		if (p1.matcher(name).find()) {
			node.Name = "��ͬ����";
			node.type = 1;

			return;
		}
		if (p2.matcher(name).find()) {
			node.Name = "��ͬ����";
			node.type = 2;

			return;
		}
		if (p3.matcher(name).find()) {
			node.Name = "Ͷ����Χ";
			node.type = 3;

			return;
		}
		if (p4.matcher(name).find()) {
			node.Name = "��ԥ��";
			node.type = 4;
			return;
		}
		if (p5.matcher(name).find()) {
			node.Name = "�����ڼ�";
			node.type = 5;
			return;
		}
		if (p6.matcher(name).find()) {
			node.Name = "��������";
			node.type = 6;
			return;
		}
		if (p7.matcher(name).find()) {
			node.Name = "�������";
			node.type = 7;
			return;
		}
		if (p8.matcher(name).find()) {
			node.Name = "������";
			node.type = 8;
			return;
		}
		if (p9.matcher(name).find()) {
			node.Name = "���ս�����";
			node.type = 9;
			return;
		}
		if (p10.matcher(name).find()) {
			node.Name = "���ս����";
			node.type = 10;
			return;
		}
		if (p11.matcher(name).find()) {
			node.Name = "����ʱЧ";
			node.type = 11;
			return;
		}
		if (p12.matcher(name).find()) {
			node.Name = "���ս����";
			node.type = 12;
			return;
		}
		if (p13.matcher(name).find()) {
			node.Name = "������";
			node.type = 13;
			return;
		}
		if (p14.matcher(name).find()) {
			node.Name = "����Ч����ֹ";
			node.type = 14;
			return;
		}
		if (p15.matcher(name).find()) {
			node.Name = "����Ч���ָ�";
			node.type = 15;
			return;
		}
		if (p16.matcher(name).find()) {
			node.Name = "��ͬ���";
			node.type = 16;
			return;
		}
		if (p17.matcher(name).find()) {
			node.Name = "����";
			node.type = 17;
			return;
		}

	}

	public void dutyprocess(illNode node, linkList illlist) {
		String tmp = node.Key;
		Pattern p1 = Pattern.compile("�ش󼲲�");
		Pattern p2 = Pattern.compile("���");
		Pattern p3 = Pattern.compile("ȫ��");
		Pattern p4 = Pattern.compile("�ض�[\\s\\S]{0,10}����");
		Pattern p5 = Pattern.compile("��֢[\\s\\S]{0,10}����");
		Pattern p6 = Pattern.compile("����Σ��");
		Pattern p7 = Pattern.compile("����");

		if (p1.matcher(tmp).find()) {
			illlist.add("�ش󼲲����ս�", "", 18);
		}
		if (p2.matcher(tmp).find()) {
			illlist.add("��ʱ��ս�", "", 18);
		}
		if (p3.matcher(tmp).find()) {
			illlist.add("ȫ�б��ս�", "", 18);
		}
		if (p4.matcher(tmp).find()) {
			illlist.add("�ض��������ս�", "", 18);
		}
		if (p5.matcher(tmp).find()) {
			illlist.add("��֢�������ս�", "", 18);
		}
		if (p6.matcher(tmp).find()) {
			illlist.add("����Σ�ر��ս�", "", 18);
		}
		if (p7.matcher(tmp).find()) {
			illlist.add("���Ᵽ�ս�", "", 18);
		}

	}

}
