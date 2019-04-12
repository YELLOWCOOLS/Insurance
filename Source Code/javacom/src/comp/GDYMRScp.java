package comp;
//光大永明

import src.linkList;

public class GDYMRScp extends Cpimpl implements Cp {

	public GDYMRScp() {
		// TODO Auto-generated method stub
		Mulustart = "条款目录";
		Muluend = "光大永明|^[ ]+第一部分";
		Zhongjistart = new String[] { "范围以内的疾病种类：|指被保险人发生符合以下疾病定义所述条件的疾病|^重大疾病：|本合同所指重大疾病|术语解释：" };
		Zhongjiend = new String[] { "null" };
	}
}
