package comp;

//信泰人寿
import java.io.BufferedReader;
import java.io.IOException;

import java.util.regex.Matcher;
import java.util.regex.Pattern;

import src.linkList;

public class XTRScp extends Cpimpl implements Cp {


	public XTRScp() {

		// TODO Auto-generated method stub
		Mulustart = "条款目录|您与我们的合�?";
		Muluend = "信泰";
		Zhongjistart = new String[] { "被保险人发生符合以下疾病" };
		Zhongjiend = new String[] { "^[ ]*释[ ]*义|^�?�[ ]*释[ ]*义|^[0-9]+\\.[0-9]+[ ]*保单年度|^[0-9]+\\.[0-9]+[ ]* 意外伤害"};

	}

@Override
	public void defaultpro(BufferedReader br) throws IOException {
		Pattern p00 = Pattern.compile(Mulustart);
		Pattern p0 = Pattern.compile(Muluend);
		Pattern p000 = Pattern.compile(Zhongjistart[0]);
		Pattern p0000 = Pattern.compile(Zhongjiend[0]);
		Pattern p2 = Pattern.compile("[\u4e00-\u9fa5]");
		Pattern p3 = Pattern.compile("第[ ]*[0-9]+[ ]*�?");

		String tmp;
		int inf = 0;
		Matcher ma1 = null;
		String line = new String("");
		StringBuffer name = new StringBuffer("");
		StringBuffer exp = new StringBuffer("");

		boolean flag = false;
		boolean nameflag = false;
		// 从重疾开始寻�?
		while ((line = br.readLine()) != null) {
			if (Muluend == "null") {
				nameflag = true;
			}
			if (Mulustart == "null") {
				flag = true;
			}
			ma1 = p00.matcher(line);
			// 目录�?�?
			if (ma1.find()) {
				flag = true;
				inf += 10;
				continue;
			}
			// 目录结尾
			ma1 = p0.matcher(line);
			if (ma1.find() && flag) {
				nameflag = true;
				inf += 100;
				continue;
			}

			// 重疾�?�?
			ma1 = p000.matcher(line);
			if (ma1.find() && nameflag && flag) {
				nameflag = flag = false;
				inf += 1000;
				break;
			}

		}

		while ((line = br.readLine()) != null) {
			if (p0000.matcher(line).find()) {

				illlist.add(name.toString(), exp.toString());
				break;
			}
			if (p3.matcher(line).find()) {
				continue;
			}
			tmp = line;
			if (tmp.length() < 10) {
				exp.append(tmp.trim());
				continue;
			}

			tmp = tmp.substring(0, 10);
			ma1 = p2.matcher(tmp);
			if (ma1.find()) {
				if (!flag) {
					name = new StringBuffer("");
					exp = new StringBuffer("");
					line = line.trim();
					tmp = line.split("[ ]{4,}")[0];
					name.append(tmp);
					exp.append(line.substring(tmp.length()).trim());
					flag = true;
				} else {
					if (!nameflag) {

						illlist.add(name.toString(), exp.toString());
						name = new StringBuffer("");
						exp = new StringBuffer("");
						line = line.trim();
						tmp = line.split("[ ]{4,}")[0];
						name.append(tmp);
						exp.append(line.substring(tmp.length()).trim());
					} else {
						line = line.trim();
						tmp = line.split("[ ]{4,}")[0];
						name.append(tmp);
						exp.append(line.substring(tmp.length()));
					}
				}
				nameflag = true;
			} else {
				nameflag = false;
				exp.append(line.trim());
			}
		}
	}
}
