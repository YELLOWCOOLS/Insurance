package comp;





import java.io.BufferedReader;
import java.io.IOException;
import java.util.regex.Matcher;
import java.util.regex.Pattern;

import src.linkList;

public class HHRScp extends Cpimpl implements Cp{
	
	//���浱ǰ���յ���Ϣ
	//�������ݿ�ʱ  ��������ɺ� ������һ������
	public src.linkList list;
	public src.Tre tre;
	//���캯��
	public HHRScp() {
		
		// ��������Ҫ�Ĳ��ֵĿ�ʼ�ͽ��������ڴ˴�����
		// �ⲿ����ƥ�䵽ʱ������Ӧ�ĺ���
		
		Mulustart = "null";
		Muluend ="22F0120171  ";
		//�˴�����Ϊ����  ��ʾ�ؼ����ڵĶ�����ܲ��� һ���ط�
		//һ����ʼ��Ӧһ������
		Zhongjistart = new String[]{" 6.    �ش󼲲������༰����"};
		Zhongjiend = new String[]{"22F0120171"};
		
	}
	public void defaultpro(BufferedReader br) throws IOException {
		Pattern p00 = Pattern.compile(Mulustart);
		Pattern p0 = Pattern.compile(Muluend);
		Pattern p000 = Pattern.compile(Zhongjistart[0]);
		Pattern p0000 = Pattern.compile(Zhongjiend[0]);
		Pattern p2 = Pattern.compile("[\u4e00-\u9fa5]");
		Pattern p3=Pattern.compile("��[ ]*[0-9]+[ ]*ҳ");
		
		
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
			if(Muluend=="null") {
				nameflag=true;
			}
			if(Mulustart=="null") {
				flag=true;
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
			if (ma1.find()&&flag) {
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
			if(p0000.matcher(line).find()) {
				
				illlist.add(name.toString(), exp.toString());
				break;
			}
			if(p3.matcher(line).find()) {
				continue;
			}
			tmp=line;
			if(tmp.length()<18) {
				exp.append(tmp.trim());
				continue;
			}
			
			tmp=tmp.substring(0, 18);
			ma1=p2.matcher(tmp);
			if(ma1.find()) {
				if(!flag) {
					name = new StringBuffer("");
					exp = new StringBuffer("");
					line = line.trim();
					tmp = line.split("[ ]{4,}")[0]; 
					name.append(tmp);
					exp.append(line.substring(tmp.length()).trim());
					flag=true;
				}else {
					if(!nameflag) {
						
						illlist.add(name.toString(), exp.toString());
						name = new StringBuffer("");
						exp = new StringBuffer("");
						line = line.trim();
						tmp = line.split("[ ]{4,}")[0]; 
						name.append(tmp);
						exp.append(line.substring(tmp.length()).trim());
					}else {
						line = line.trim();
						tmp = line.split("[ ]{4,}")[0];
						name.append(tmp);
						exp.append(line.substring(tmp.length()));
					}
				}
				nameflag=true;
			}else {
				nameflag=false;
				exp.append(line.trim());
			}
		}
	}
	@Override
	//Ŀ¼����
	//˼·����
	//�����е�Ŀ¼����Ϊ����Ҫ�ĸ�ʽ
	//Ȼ��Ŀ¼����
	public void Muluprocess(BufferedReader br) throws IOException {
		String partern1="^[0-9]\\.{0,1}[\u4e00-\u9fa5]{0,100}$";//��ű�־һ����.����
		String partern2="^[0-9]\\.{0,1}[0-9]{0,2}$";//��ű�־������.����
		String linetxt;
		Pattern p1=Pattern.compile(partern1),p2=Pattern.compile(partern2),p3=Pattern.compile(Muluend);
		Matcher matcher0=null,matcher1=null,matcher2=null,matcher3=null;
		 while((linetxt = br.readLine()) != null){
			 	
       		if(linetxt.trim().length()==0)
       			continue;
       		
       		matcher3=p3.matcher(linetxt);
       		if(matcher3.find()) {
       			break;
       		};
       			
       		String[] arr=linetxt.split("\\s+");//ɾ���ո�

				   	//��ȡ�ֶ�
       		for (int i = 0; i < arr.length; i++) { 
       			
       			matcher1=p1.matcher(arr[i]);
       			if(matcher1.find()) 
       			{
       				//������.���Ľ��д���
       				//��������
       			}
       			
       			matcher2=p2.matcher(arr[i]);
       			if(matcher2.find()&&(i+1<(arr.length))) 
       				{
       				//������.���ֽ��д���
       				//��������
       				}
       			 
   			
       	}
       }
	
	}

	@Override
	public int Zhongjiprocess(BufferedReader br) throws IOException {
		Pattern p00 = Pattern.compile(Mulustart);
		Pattern p0 = Pattern.compile(Muluend);
		Pattern p000 = Pattern.compile(Zhongjistart[0]);
		Pattern p0000 = Pattern.compile(Zhongjiend[0]);
		Pattern p2 = Pattern.compile("[\u4e00-\u9fa5]");
		Pattern p3=Pattern.compile("��[ ]*[0-9]+[ ]*ҳ");
		
		Pattern p1A = Pattern.compile("^[ ]{0,30}��[0-9]+��"); // (1) ������											// ����
		Pattern p1B = Pattern.compile("^[ ]{0,30}[0-9]+��"); // 1�������� ����
		Pattern p1C = Pattern.compile("^[ ]{0,30}[һ��������˾�ʮ]+"); // һ �������� ����
		Pattern p1D = Pattern.compile("^[ ]{0,30}��[һ��������˾�ʮ]+"); //��һ�� ����
		Pattern p1E =Pattern.compile("^[ ]{0,30}[һ��������˾�ʮ]+��[ ]+"); //һ�������� ����
		Pattern p1F =Pattern.compile("^[ ]{0,30}[0-9]+\\.[ ]+");  // 1.������ ����
		Pattern p1G =Pattern.compile("^[0-9]+\\.[0-9]+\\.[0-9]+");
		Pattern p1G2=Pattern.compile("^[0-9]+\\.[0-9]+");
		
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
			if(Muluend=="null") {
				nameflag=true;
			}
			if(Mulustart=="null") {
				flag=true;
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
			if (ma1.find()&&flag) {
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
		}else {
		int plan = -1;
		while ((line = br.readLine()) != null) {
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
			if(p1D.matcher(line).find()) {
				plan=3;
				break;
			}
			if(p1E.matcher(line).find()) {
				plan=4;
				break;
			}
			if(p1F.matcher(line).find()) {
				plan=5;
				break;
			}
			if(p1G.matcher(line).find()) {
				plan=6;
				break;
			}
		}
		if (plan == -1) {
			inf = 2;
		} else {
			inf = 3;
		}

		switch (plan) {
		case 0:
			while ((line = br.readLine()) != null) {
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
			}
			break;
		case 1:
			while ((line = br.readLine()) != null) {
				
				
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
		case 2:

			while ((line = br.readLine()) != null) {
				if(p3.matcher(line).find()) {
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
					
						if(results.length >= 3)
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
			}
			break;
		case 3:
			while ((line = br.readLine()) != null) {
				if(p3.matcher(line).find()) {
					continue;
				}
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
			}
			break;
		case 4:
			while ((line = br.readLine()) != null) {
				if(p3.matcher(line).find()) {
					continue;
				}
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
			while ((line = br.readLine()) != null) {
				if(p3.matcher(line).find()) {
					continue;
				}
				ma1 = p0000.matcher(line);
				if (ma1.find()) {
					illlist.add(name.toString(), exp.toString());
					
					inf = 5;
					break;
				}
				ma1 = p1F.matcher(line);
				if (ma1.find()) {
					if (!flag) {
						flag = true;
					} else {
						inf=4;
						illlist.add(name.toString(), exp.toString());
					}
					name = new StringBuffer("");
					exp = new StringBuffer("");
					line = line.trim();
					String results[] = line.split("[ ]{10,}");
					String a[]=results[0].split("[.]");
					name.append(a[1]);
					exp.append(line.substring(results[0].length()));
					nameflag = true;
				} else {
					if (nameflag) {
						tmp = line;
						if(tmp.length()<10) {
							nameflag=false;
							continue;
						}
						ma1 = p2.matcher(tmp.substring(0, 10));
						if (ma1.find()) {
							line = line.trim();
							tmp = line.split(" ")[0];
							name.append(tmp);
							exp.append(line.substring(tmp.length()));
						}else {
							nameflag=false;
						}
					}
					exp.append(line.trim());
				}
			}
			break;
		case 6:
			while ((line = br.readLine()) != null) {
				if(p3.matcher(line).find()) {
					continue;
				}
				ma1=p0000.matcher(line);
				if(ma1.find()) {
					inf=5;
					illlist.add(name.toString(), exp.toString());
					break;
				}
				tmp = line;
				ma1 = p1G.matcher(line);
				

				if (ma1.find()) {
					if (!flag) {
						flag = true;
					} else {
						inf=4;
						illlist.add(name.toString(), exp.toString());
					}
					name=new StringBuffer(" ");
					exp=new StringBuffer(" ");
					tmp = line.trim();
					String tmps[] = tmp.split("[ ]{2,}");
					name.append(tmps[1].trim());
					exp.append(tmps[2].trim());
					nameflag = true;
				} else if(!p1G2.matcher(line).find()){
					if (line.length() < 18) {
						continue;
					}
					ma1 = p2.matcher(line.substring(0,18));
					if (ma1.find() && nameflag) {
						String tmps[] = line.split("[ ]{2,}");
						name.append(tmps[1].trim());
						if(tmps.length>=3) {
						exp.append(tmps[2].trim());
						}
					} else {
						exp.append(line);
						nameflag = false;
					}
				}else {
					flag=false;
					continue;
				}

				

			}
			break;
		}
		
		if(Zhongjiend[0]=="null"&&inf==4) {
			inf=5;
		}
		}
		switch (inf) {
		case 1:
			System.out.println("��һ��δͨ��"+inf);
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
		
		return 0;
	}
	 


}
