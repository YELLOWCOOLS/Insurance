package src;

import java.io.*;
import java.util.HashMap;
import java.util.regex.Matcher;
import java.util.regex.Pattern;

public class getill {
	public static int length=13;
	

	public static void main(String argv[]) {
		
	}
	
	/*
	 * Ԥ������
	 * 
	 */
	public static void preHandle() {
		
	}
	/*
	 * ��ʼ���� fileUrl ��ȡ��txt�ļ�URl ʾ��: fileUrl="C://Users//Shinelon//Desktop//775.txt";
	 * @params
	 * target ��������txt�ļ�URl ʾ��:
	 * targetUrl="re780.txt";
	 * HashMao<Sting,String> map->{
	 *   pattern0  :   " " //����Ŀ¼�ı�־  �磺""
	 *   pattern1  :   " " //��ű�־ ����� ��: ����.����
	 *   pattern2  :   " " //��ű�־ С���� �磺����.����
	 *   target	   :   " " //Ŀ�� ��:�ش󼲲�
	 *   
	 * }
	 */
	public static void readFilie(String fileUrl, String targetUrl, HashMap<String, String> map) {
			//p0 Ŀ¼�ı�־
			Pattern p0=Pattern.compile(map.get("pattern0"));
			//p1 ��ű�־ �����
			Pattern p1=Pattern.compile(map.get("pattern1"));
			//p3 ��ű�־ С����
			Pattern p2=Pattern.compile(map.get("pattern2"));
			//target Ѱ��Ŀ��
			Pattern target=Pattern.compile(map.get("target"));
			
			BufferedReader read=getFilereader(fileUrl);
			
			
			
	}
	public static Tre getContent(BufferedReader reader,Pattern p) {
		Tre content=new Tre();
		Matcher matcher;
		String lineTxt=null;
		Boolean hasfindcontent=false; 
		try {
			while((lineTxt=reader.readLine())!=null) {
				//�ж��Ƿ�ƥ�䵽��Ŀ¼��ʼ�ı�ʶ��
				matcher=p.matcher(lineTxt);
				if(matcher.find()) {
					hasfindcontent=true;
					System.out.println("Ŀ¼��ͷ�Ѿ���ƥ�䵽");
					break;
				}
			}
			if(!hasfindcontent) {
				System.out.println("����Ŀ¼��ͷ��ǣ�Ŀ¼����ʧ��");
			}
			
		}catch (Exception e) {
			
		}
		return null;
	}
	/*
	 * ��ȡ�ļ���
	 * ���ļ�������ʱ����NULL
	 */
	public static  BufferedReader getFilereader(String fileUrl) {
		BufferedReader bufferedReader=null;
		InputStreamReader read=null;
		try {
		File file=new File(fileUrl);
		read=new InputStreamReader(new FileInputStream(file),"UTF-8");
		bufferedReader = new BufferedReader(read);
		}catch (Exception e) {
			System.out.println("��ȡ�ļ���ʧ��");
			System.out.println(e.getMessage());
			return null;
		}
		return bufferedReader;
	}

}
