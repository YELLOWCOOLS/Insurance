package comp;

//�й�ƽ��
import java.io.BufferedReader;
import java.io.IOException;

import java.util.regex.Matcher;
import java.util.regex.Pattern;

import src.linkList;

public class ZGPARScp extends Cpimpl implements Cp {


	public ZGPARScp() {

		// TODO Auto-generated method stub
		Mulustart = "����Ŀ¼";
		Muluend = "^[ ]{0,10}[0-9]+\\.[0-9]+[ ]+��ͬ����|^[ ]{0,10}[0-9]+\\.[0-9]+[ ]+�������ս��ı��|^[ ]{0,10}[0-9]+\\.[0-9]+[ ]+�����ڼ�";
		Zhongjistart = new String[] { "�ش󼲲���ָ�������˳��η����������ж���ļ�|���ش󼲲���|^[ ]*�ش󼲲�����|�ⲿ�ֽ����������ṩ���ϵ�|^[ ]{0,10}�� 1 �ࣺ[ ]*�����������صļ���" };
		Zhongjiend = new String[] { "^[0-9].[0-9][ ]*ר��ҽ��|�����ش󼲲������в���������������|���ע����������" };

	}
	@Override
	public int Zhongjiprocess(BufferedReader br) throws IOException {
		Pattern p00 = Pattern.compile(Mulustart);
		Pattern p0 = Pattern.compile(Muluend);
		Pattern p000 = Pattern.compile(Zhongjistart[0]);
		Pattern p0000 = Pattern.compile(Zhongjiend[0]);
		Pattern p2 = Pattern.compile("[\u4e00-\u9fa5]");
		Pattern p3 = Pattern.compile("��[ ]*[0-9]+[ ]*ҳ");

		Pattern p1A = Pattern.compile("^[ ]{0,15}��[0-9]+��+"); // (1) ������ // ����                             0
		Pattern p1B = Pattern.compile("^[ ]{0,15}[0-9]+��"); // 1�������� ����                                          1
		Pattern p1C = Pattern.compile("^[ ]{0,15}[һ�����������߰˾�ʮ]+[ ]+"); // һ �������� ����       2
		Pattern p1D = Pattern.compile("^[ ]{0,15}��[һ�����������߰˾�ʮ]+"); // ��һ�� ����                   3
		Pattern p1E = Pattern.compile("^[ ]{0,15}[һ�����������߰˾�ʮ]+��"); // һ�������� ����             4
		Pattern p1F = Pattern.compile("^[ ]{0,15}[0-9]+\\."); // 1.������ ����                                           5
		Pattern p1G = Pattern.compile("^[ ]{0,15}[0-9]+\\.[0-9]+\\.[0-9]+");//    1.1.1                  6
		Pattern p1G2 = Pattern.compile("^[ ]{0,15}[0-9]+\\.[0-9]+");
		Pattern p1H = Pattern.compile("^[ ]{0,15}+[0-9]+\\.[0-9]");//     1.1                            7
		Pattern p1I = Pattern.compile("^[ ]{0,15}+[0-9]+��");//                1)                          8
		Pattern p1J=Pattern.compile("^[ ]{0,15}+[0-9]+[ ]*");
		String tmp;
		int inf = 0;
		Matcher ma1 = null;
		String line = new String("");
		StringBuffer name = new StringBuffer("");
		StringBuffer exp = new StringBuffer("");

		boolean flag = false;
		boolean nameflag = false;
		// ���ؼ���ʼѰ��
		while ((line = br.readLine()) != null) {
			if (Muluend == "null") {
				nameflag = true;
			}
			if (Mulustart == "null") {
				flag = true;
			}
			ma1 = p00.matcher(line);
			// Ŀ¼��ͷ
			if (ma1.find()) {
				flag = true;
				inf += 10;
				continue;
			}
			// Ŀ¼��β
			ma1 = p0.matcher(line);
			if (ma1.find() && flag) {
				nameflag = true;
				inf += 100;
				continue;
			}

			// �ؼ���ͷ
			ma1 = p000.matcher(line);
			if (ma1.find() && nameflag && flag) {
				nameflag = flag = false;
				inf += 1000;
				break;
			}

		}
		if (line == null) {
			inf = 1;// Ѱ�ҵ����ؼ���ʼ Ŀ¼��ʼ Ŀ¼����
		} else {
			int plan = -1;
			while ((line = br.readLine()) != null) {
				if(p0000.matcher(line).find()) {
					plan=-1;
					break;
				}
				if(Pattern.compile("һ�����ش󼲲����յļ�������ʹ�ù淶����Χ���ڵļ�������").matcher(line).find()) {
					continue;
				}
				if (p1A.matcher(line).find()) {
					plan = 0;
					break;
				}
				if (p1B.matcher(line).find()) {
					plan = 1;
					break;
				}
				if (p1C.matcher(line).find()) {
					plan = 2;
					break;
				}
				if (p1D.matcher(line).find()) {
					plan = 3;
					break;
				}
				if (p1E.matcher(line).find()) {
					plan = 4;
					break;
				}
				
				if (p1G.matcher(line).find()) {
					plan = 6;
					break;
				}
				if (p1H.matcher(line).find()) {
					plan = 7;
					break;
				}
				if (p1I.matcher(line).find()) {
					plan = 8;
					break;
				}
				if (p1F.matcher(line).find()) {
					plan = 5;
					break;
				}
				if(p1J.matcher(line).find()) {
					plan=9;
					break;
				}
			}
			if (plan == -1) {
				inf = 2;
			} else {
				inf = 3;
			
			System.out.print("plan:"+plan);
			switch (plan) {
			case 0:
				do {
					ma1 = p0000.matcher(line);
					if (ma1.find()) {
						inf = 5;
						illlist.add(name.toString(), exp.toString());
						break;
					}
					ma1 = p1A.matcher(line);
					if (ma1.find()) {
						if (!flag) {

							flag = true;
						} else {
							inf = 4;
							illlist.add(name.toString(), exp.toString());
						}
						name = new StringBuffer("");
						exp = new StringBuffer("");
						String results[] = line.split("��");
						name.append(results[1].trim());
					} else {
						exp.append(line.trim());
					}
				}while ((line = br.readLine()) != null);
				break;
			case 1:
				do{
					
					tmp=line;
					ma1 = p0000.matcher(line);
					if (ma1.find()) {
						illlist.add(name.toString(), exp.toString());
						inf = 5;
						break;
					}
					ma1 = p1B.matcher(line);
					if (ma1.find()) {
						if (!flag) {

							flag = true;
						} else {
							inf = 4;
							illlist.add(name.toString(), exp.toString());
						}
						name = new StringBuffer("");
						exp = new StringBuffer("");
						String results[] = line.split("��");
						String resultss[] = null;
						ma1=Pattern.compile("��").matcher(results[1]);
						boolean we=ma1.find();
						if (we&&ma1.start()<30) {
							resultss = results[1].split("��");
						} else {
							resultss = results[1].trim().split("[ ]+");
						}
						name.append(resultss[0].trim());
						
						if (resultss.length > 1)
							exp.append(resultss[1].trim());
						
						if(we&&results[1].trim().split(":").length<2) {
							nameflag=false;
						}else {
							nameflag=true;
						}
						
					} else {
						if (line.length() < 18) {
							continue;
						}
						ma1 = p2.matcher(line.substring(0, 18));
						if (ma1.find() && nameflag) {
							String tmps[] = line.trim().split("[ ]{2,}");
							name.append(tmps[0].trim());
							for (int i = 1; i < tmps.length; i++) {
								exp.append(tmps[i]);
							}
						} else {
							exp.append(line);
							nameflag = false;
						}
					}
				}while ((line = br.readLine()) != null);
				if (Zhongjiend[0] == null && inf == 4) {
					inf = 5;
				}
				break;
			case 2:

				do {
					if (p3.matcher(line).find()) {
						continue;
					}
					ma1 = p0000.matcher(line);
					if (ma1.find()) {
						illlist.add(name.toString(), exp.toString());
						inf = 5;
						break;
					}
					ma1 = p1C.matcher(line);
					if (ma1.find()) {
						if (!flag) {
							flag = true;
						} else {
							illlist.add(name.toString(), exp.toString());
						}
						name = new StringBuffer("");
						exp = new StringBuffer("");
						String results[] = line.split("[ ]{2,}");
						name.append(results[1].trim());
						if (results.length >= 3)
							exp.append(results[2].trim());
						nameflag = true;

					} else {
						if (nameflag) {
							tmp = line;
							if (tmp.length() > 10) {
								ma1 = p2.matcher(tmp.substring(0, 10));
								if (ma1.find()) {
									line = line.trim();
									tmp = line.split(" ")[0];
									name.append(tmp.trim());
									exp.append(line.substring(tmp.length()).trim());
								}
							}
						}
						exp.append(line.trim());
					}
				}while ((line = br.readLine()) != null);
				break;
			case 3:
				do {
					if (p3.matcher(line).find()) {
						continue;
					}
					ma1 = p0000.matcher(line);
					if (ma1.find()) {
						inf = 5;
						illlist.add(name.toString(), exp.toString());
						break;
					}
					ma1 = p1D.matcher(line);
					if (ma1.find()) {
						if (!flag) {

							flag = true;
						} else {
							inf = 4;
							illlist.add(name.toString(), exp.toString());
						}
						name = new StringBuffer("");
						exp = new StringBuffer("");
						String results[] = line.split("��");
						name.append(results[1].trim());
					} else {
						exp.append(line.trim());
					}
				}while ((line = br.readLine()) != null);
				break;
			case 4:
				while ((line = br.readLine()) != null) {
					if (p3.matcher(line).find()) {
						continue;
					}
					ma1 = p0000.matcher(line);
					if (ma1.find()) {
						illlist.add(name.toString(), exp.toString());

						inf = 5;
						break;
					}
					ma1 = p1E.matcher(line);
					if (ma1.find()) {
						if (!flag) {

							flag = true;
						} else {
							inf = 4;
							illlist.add(name.toString(), exp.toString());
						}
						name = new StringBuffer("");
						exp = new StringBuffer("");
						String results[] = line.split("��");
						String resultss[] = results[1].split("��");
						name.append(resultss[0].trim());
						if (resultss.length > 1)
							exp.append(resultss[1].trim());
					} else {
						exp.append(line.trim().trim());
					}
				}
				if (Zhongjiend[0] == null && inf == 4) {
					inf = 5;
				}
				break;
			case 5:
				do{
					if(p1H.matcher(line).find()) {
						continue;
					}
					if (p3.matcher(line).find()) {
						continue;
					}
					ma1 = p0000.matcher(line);
					if (ma1.find()) {
						illlist.add(name.toString(), exp.toString());

						inf = 5;
						break;
					}
					tmp=line;
					ma1 = p1F.matcher(line);
					if (ma1.find()) {
						if (!flag) {
							flag = true;
						} else {
							inf = 4;
							illlist.add(name.toString(), exp.toString());
						}
						name = new StringBuffer("");
						exp = new StringBuffer("");
						line = line.trim();
						String results[] = line.split("[.]");
						String a[] = results[1].split("[ ]{3,}");
						name.append(a[0].trim());
						for(int i=1;i<a.length;i++)
						exp.append(a[i]);
						
						nameflag = true;
					} else {
						if (nameflag) {
							
							if (tmp.length() < 15) {
								nameflag = false;
								continue;
							}
							ma1 = p2.matcher(tmp.substring(0, 10));
							if (ma1.find()) {
								line = line.trim();
								tmp = line.split("[ ]{3,}")[0];
								name.append(tmp);
								exp.append(line.substring(tmp.length()));
							} else {
								nameflag = false;
							}
						}
						exp.append(line.trim());
					}
				}while ((line = br.readLine()) != null);
				break;
			case 6:
				do{
					if (p3.matcher(line).find()) {
						continue;
					}
					ma1 = p0000.matcher(line);
					if (ma1.find()) {
						inf = 5;
						illlist.add(name.toString(), exp.toString());
						break;
					}
					tmp = line;
					ma1 = p1G.matcher(line);

					if (ma1.find()) {
						if (!flag) {
							flag = true;
						} else {
							inf = 4;
							illlist.add(name.toString(), exp.toString());
						}
						name = new StringBuffer(" ");
						exp = new StringBuffer(" ");
						tmp = line.trim();
						String tmps[] = tmp.split("[ ]{2,}");
						name.append(tmps[1].trim());
						if (tmps.length >= 3)
							exp.append(tmps[2].trim());
						nameflag = true;
					} else if (!p1G2.matcher(line).find()) {
						if (line.length() < 18) {
							continue;
						}
						ma1 = p2.matcher(line.substring(0, 18));
						if (ma1.find() && nameflag) {
							String tmps[] = line.split("[ ]{2,}");
							name.append(tmps[1].trim());
							if (tmps.length >= 3) {
								exp.append(tmps[2].trim());
							}
						} else {
							exp.append(line);
							nameflag = false;
						}
					} else {
						flag = false;
						continue;
					}

				}while ((line = br.readLine()) != null);
				break;
			case 7:
				do {
					if (p3.matcher(line).find()) {
						continue;
					}
					ma1 = p0000.matcher(line);
					if (ma1.find()) {
						inf = 5;
						illlist.add(name.toString(), exp.toString());
						break;
					}
					tmp = line;
					ma1 = p1H.matcher(line);

					if (ma1.find()) {
						if (!flag) {
							flag = true;
						} else {
							inf = 4;
							illlist.add(name.toString(), exp.toString());
						}
						name = new StringBuffer(" ");
						exp = new StringBuffer(" ");
						tmp = line.trim();
						String tmps[] = tmp.split("[ ]{2,}");
						name.append(tmps[1].trim());
						if (tmps.length >= 3)
							exp.append(tmps[2].trim());
						nameflag = true;
					} else if (!p1G2.matcher(line).find()) {
						if (line.length() < 18) {
							continue;
						}
						ma1 = p2.matcher(line.substring(0, 18));
						if (ma1.find() && nameflag) {
							String tmps[] = line.split("[ ]{2,}");
							name.append(tmps[1].trim());
							if (tmps.length >= 3) {
								exp.append(tmps[2].trim());
							}
						} else {
							exp.append(line);
							nameflag = false;
						}
					} else {
						flag = false;
						continue;
					}

				}while ((line = br.readLine()) != null);
				break;
			case 8:
				do {
					if (p3.matcher(line).find()) {
						continue;
					}
					ma1 = p0000.matcher(line);
					if (ma1.find()) {
						inf = 5;
						illlist.add(name.toString(), exp.toString());
						break;
					}
					ma1 = p1I.matcher(line);
					if (ma1.find()) {
						if (!flag) {

							flag = true;
						} else {
							inf = 4;
							illlist.add(name.toString(), exp.toString());
						}
						name = new StringBuffer("");
						exp = new StringBuffer("");
						String results[] = line.split("��");
						String rest[] = results[1].trim().split("[ ]{2,}");
						name.append(rest[0].trim());
						for (int i = 1; i < results.length; i++) {
							exp.append(rest[i].trim());
						}
						nameflag = true;
					} else {
						if (line.length() < 18) {
							continue;
						}
						ma1 = p2.matcher(line.substring(0, 18));
						if (ma1.find() && nameflag) {
							String tmps[] = line.split("[ ]{2,}");
							name.append(tmps[0].trim());
							for (int i = 1; i < tmps.length; i++) {
								exp.append(tmps[i]);
							}
						} else {
							exp.append(line);
							nameflag = false;
						}
					}
				}while ((line = br.readLine()) != null);
				break;
			case 9:
				do {
					if(Pattern.compile("��������ճ�����").matcher(line).find()) {
						continue;
					}
				if (p3.matcher(line).find()) {
					continue;
				}
				ma1 = p0000.matcher(line);
				if (ma1.find()) {
					illlist.add(name.toString(), exp.toString());
					inf = 5;
					break;
				}
				ma1 = p1J.matcher(line);
				if (ma1.find()) {
					if (!flag) {
						flag = true;
					} else {
						illlist.add(name.toString(), exp.toString());
					}
					name = new StringBuffer("");
					exp = new StringBuffer("");
					String results[] = line.trim().split("[ ]{1,}");
					name.append(results[1].trim());
					if (results.length >= 3)
						exp.append(results[2].trim());
					nameflag = true;

				} else {
					if (nameflag) {
						tmp = line;
						if (tmp.length() > 10) {
							ma1 = p2.matcher(tmp.substring(0, 10));
							if (ma1.find()) {
								line = line.trim();
								tmp = line.split(" ")[0];
								name.append(tmp.trim());
								exp.append(line.substring(tmp.length()).trim());
							}else {
								nameflag=false;
							}
						}else {
							nameflag=false;
						}
					}
					exp.append(line.trim());
				}
			}while ((line = br.readLine()) != null);
			break;
				
			}
			
				
				
				
			if (Zhongjiend[0] == "null" && inf == 4) {
				inf = 5;
			}
		}
		}
		switch (inf) {
		case 1:
			System.out.println("��һ��δͨ��" + inf);
			break;
		case 2:
			System.out.println("δƥ�䵽���");
			return 1;

		case 3:
			System.out.println("δƥ�䵽����");
			break;
		case 4:
			System.out.println("δƥ�䵽��β");
			break;
		case 5:
			System.out.println("ok");
			break;
		default:
			System.out.println("�������Ϊ" + inf);
		}
		System.out.println("                  ");
		return 0;
	}
	public void defaultpro(BufferedReader br) throws IOException {
		Pattern p00 = Pattern.compile(Mulustart);
		Pattern p0 = Pattern.compile(Muluend);
		Pattern p000 = Pattern.compile(Zhongjistart[0]);
		Pattern p0000 = Pattern.compile(Zhongjiend[0]);
		Pattern p2 = Pattern.compile("[\u4e00-\u9fa5]");
		Pattern p3 = Pattern.compile("��[ ]*[0-9]+[ ]*ҳ");

		String tmp;
		int inf = 0;
		Matcher ma1 = null;
		String line = new String("");
		StringBuffer name = new StringBuffer("");
		StringBuffer exp = new StringBuffer("");

		boolean flag = false;
		boolean nameflag = false;
		// ���ؼ���ʼѰ��
		while ((line = br.readLine()) != null) {
			if (Muluend == "null") {
				nameflag = true;
			}
			if (Mulustart == "null") {
				flag = true;
			}
			ma1 = p00.matcher(line);
			// Ŀ¼��ͷ
			if (ma1.find()) {
				flag = true;
				inf += 10;
				continue;
			}
			// Ŀ¼��β
			ma1 = p0.matcher(line);
			if (ma1.find() && flag) {
				nameflag = true;
				inf += 100;
				continue;
			}

			// �ؼ���ͷ
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
			if(Pattern.compile("��[ ]*[0-9]+[ ]*��|^[ ]*[��]*[0-9]+[��]*|��������ճ�����|����|�ؼ�����|���ò�����|�Ĺ���״̬|֫�������ȫɥʧ|����������׽�����������ȫɥʧ��").matcher(line).find()) {
				nameflag=false;
				continue;
			}
			
			if (p3.matcher(line).find()) {
				continue;
			}
			tmp = line;
			if (tmp.length() < 13) {
				exp.append(tmp.trim());
				nameflag=false;
				continue;
			}

			tmp = tmp.substring(0, 13);
			ma1 = p2.matcher(tmp);
			if (ma1.find()) {
				if (!flag) {
					name = new StringBuffer("");
					exp = new StringBuffer("");
					line = line.trim();
					tmp = line.trim().split("[ ]{4,}")[0];
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