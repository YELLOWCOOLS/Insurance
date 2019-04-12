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
	 * 预处理函数
	 * 
	 */
	public static void preHandle() {
		
	}
	/*
	 * 开始函数 fileUrl 读取的txt文件URl 示例: fileUrl="C://Users//Shinelon//Desktop//775.txt";
	 * @params
	 * target 结果输出的txt文件URl 示例:
	 * targetUrl="re780.txt";
	 * HashMao<Sting,String> map->{
	 *   pattern0  :   " " //检索目录的标志  如：""
	 *   pattern1  :   " " //序号标志 大标题 如: 数字.汉字
	 *   pattern2  :   " " //序号标志 小标题 如：数字.数字
	 *   target	   :   " " //目标 如:重大疾病
	 *   
	 * }
	 */
	public static void readFilie(String fileUrl, String targetUrl, HashMap<String, String> map) {
			//p0 目录的标志
			Pattern p0=Pattern.compile(map.get("pattern0"));
			//p1 序号标志 大标题
			Pattern p1=Pattern.compile(map.get("pattern1"));
			//p3 序号标志 小标题
			Pattern p2=Pattern.compile(map.get("pattern2"));
			//target 寻找目标
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
				//判断是否匹配到了目录开始的标识符
				matcher=p.matcher(lineTxt);
				if(matcher.find()) {
					hasfindcontent=true;
					System.out.println("目录开头已经被匹配到");
					break;
				}
			}
			if(!hasfindcontent) {
				System.out.println("坏的目录开头标记，目录解析失败");
			}
			
		}catch (Exception e) {
			
		}
		return null;
	}
	/*
	 * 获取文件流
	 * 当文件不存在时返回NULL
	 */
	public static  BufferedReader getFilereader(String fileUrl) {
		BufferedReader bufferedReader=null;
		InputStreamReader read=null;
		try {
		File file=new File(fileUrl);
		read=new InputStreamReader(new FileInputStream(file),"UTF-8");
		bufferedReader = new BufferedReader(read);
		}catch (Exception e) {
			System.out.println("获取文件流失败");
			System.out.println(e.getMessage());
			return null;
		}
		return bufferedReader;
	}

}
