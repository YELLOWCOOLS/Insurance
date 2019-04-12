package src;

import java.io.*;
import java.util.regex.Matcher;
import java.util.regex.Pattern;


public class JavaTest {
	public static void serachThebegin()
	{
		
	}
	
	public static void main(String argv[]){
		
		String partern0="条款目录";//开始检索标志
		String partern1="^[0-9]\\.{0,1}[\u4e00-\u9fa5]{0,100}$";//序号标志一
		String partern2="^[0-9]\\.{0,1}[0-9]{0,2}$";//序号标志二
		String target="重大疾病";//重大疾病正则表达式
//		String signOfEnd="^[\u4e00-\u9fa5]";//结束标志
		
		Pattern p0=Pattern.compile(partern0),p1=Pattern.compile(partern1),p2=Pattern.compile(partern2);
		Pattern ptarget=Pattern.compile(target);
//		signOfEndpattern=Pattern.compile(signOfEnd);
		Matcher matcher0=null,matcher1=null,matcher2=null,pmatcher=null,matcherendOftarget=null,matcherendOfnexttarget=null;
		boolean start=false,isOver=true;
		
		String keyOftarget=null;
		
        String filePath = "C://Users//Shinelon//Desktop//775.txt";
        
        Tre content=new Tre();
        linkList contentlink = null;
        
        Node nodeOftarget = null,nextOftarget = null;
        
        try {
        	String encoding="UTF-8";
            File file=new File(filePath);
            if(file.isFile() && file.exists()){ //判断文件是否存在
                InputStreamReader read = new InputStreamReader(new FileInputStream(file),encoding);//判断编码方式
                BufferedReader bufferedReader = new BufferedReader(read);
                String lineTxt = null;
                while((lineTxt= bufferedReader.readLine())!=null){
                	//判断是否找到开始标志
                	matcher0=p0.matcher(lineTxt);
                	
                	if(matcher0.find())
                		{System.out.println(lineTxt);start=true;break;}
                	
                }
                
                while((lineTxt = bufferedReader.readLine()) != null){
                	
                	
                	//找到开始标志后开始检索
                	if(start)
                	{
                		
                		if(lineTxt.trim().length()==0)
                			continue;
                		
                		String[] arr=lineTxt.split("\\s+");//删除空格
                		
                		
                		
      				   	//读取字段
                		isOver=false;
                		for (int i = 0; i < arr.length; i++) { 
                			
                			//System.out.print(arr[i] + ",");  
                			
                			
                			
                			//if(pmatcher.find()) signoftarget=arr[i-1];
                			matcher1=p1.matcher(arr[i]);
                			if(matcher1.find()) 
                			{
                				System.out.println(arr[i]);
                				isOver=true;
                				//String[] newOfarr=arr[i].split("[.]");
                				//content.insert(newOfarr[0],newOfarr[1]);
                			}
                			//if(matcher1.find()) insert(arr[i]);
                			matcher2=p2.matcher(arr[i]);
                			if(matcher2.find()&&(i+1<(arr.length))) 
                				{
                				System.out.println(arr[i]+" "+arr[i+1]);isOver=true;
                				content.insert(arr[i],arr[i+1]);
                				}
                			//if(matcher2.find()) insert(arr[i],arr[i+1]);
                			 
                			pmatcher=ptarget.matcher(arr[i]);
                			
                			//确定重大疾病编号
                			if(pmatcher.find()&&(i>1)) 
                			{
                				keyOftarget=arr[i]; 
                				nodeOftarget=content.search(keyOftarget);//返回了key为keyoftarget的node节点
                				//linklist搜索函数，判断结束，以及拷贝函数
                				//nextOftarget=nodeOftarget.next;
                			}
                			  
                			}
                		if(!isOver)
                			{
                				start=false;
                				break;
                			}
                		
                			//System.out.println();
                	}
                }
                	
                	
            		nextOftarget=content.getNext(nodeOftarget);//返回该对象的下一个node节点（目录序列上的下一个）
              
                	StringBuffer patternIllend=new StringBuffer();
                	StringBuffer	patternIllstart=new StringBuffer();
                	patternIllstart.append("^[\\s]*");
                	for(int i=0;i<nodeOftarget.num.length();i++) {
                		patternIllstart.append("[");
                		patternIllstart.append(nodeOftarget.num.charAt(i));
                		patternIllstart.append("]");
                	}
                	patternIllstart.append("[\\s]*");
                	for(int i=0;i<nodeOftarget.key.length();i++) {
                		patternIllstart.append("[");
                		patternIllstart.append(nodeOftarget.key.charAt(i));
                		patternIllstart.append("]");
                	}
                
                	patternIllend.append("^[\\s]*");
                	for(int i=0;i<nextOftarget.num.length();i++) {
                		patternIllend.append("[");
                		patternIllend.append(nextOftarget.num.charAt(i));
                		patternIllend.append("]");
                	}
                	patternIllend.append("[\\s]*");
                	for(int i=0;i<nextOftarget.key.length();i++) {
                		patternIllend.append("[");
                		patternIllend.append(nextOftarget.key.charAt(i));
                		patternIllend.append("]");
                	}
                	
                	Pattern patternillstart=Pattern.compile(patternIllstart.toString());
                  	Pattern patternillend=Pattern.compile(patternIllend.toString());
                	while((lineTxt = bufferedReader.readLine()) != null){
                		
                		matcherendOftarget=patternillstart.matcher(lineTxt);
                		System.out.println(lineTxt);
                		if(matcherendOftarget.find()) 
                			break;
                	}
                	Pattern p = Pattern.compile("[\u4e00-\u9fa5]");
                	Matcher M;
                	String [] nameOfill=null,explainOfill=null;
                	StringBuffer finalnameOfill=new StringBuffer(),finalexplainOfill=new StringBuffer();
                	illNode illnode;
                	int i=0;
              
                	boolean hasstartofillname=false;
                	boolean hasendofillname=false;
                	boolean notsignOfillname=false;
                	contentlink =new linkList();
                	while(true){
                		lineTxt = bufferedReader.readLine();
                		System.out.println(lineTxt);
                		StringBuilder tmp=new StringBuilder(lineTxt);
                		
                		if(tmp==null||tmp.length()==0) {
                			continue;
                		}
                		int k=0;
                		
                		try {
                		M=p.matcher(tmp.substring(0, 13));
                		}catch (Exception e) {
							continue;
						}
                		if(M.find())//前十个字符包含中文字符
                		{
                			matcherendOfnexttarget= patternillend.matcher(lineTxt);
                    		if(matcherendOfnexttarget.find()) {
                    			contentlink.add(finalnameOfill.toString(),finalexplainOfill.toString());
                    			break;
                    		}
                			if(hasendofillname==true) {//已经读取到到了下一个病名
                				contentlink.add(finalnameOfill.toString(),finalexplainOfill.toString());
                				finalnameOfill.delete(0, finalnameOfill.length());
                				finalexplainOfill.delete(0, finalexplainOfill.length());
                				hasendofillname=false;
                			}
                		
                			hasstartofillname=true;
                			k=12;
                			while(lineTxt.charAt(k)!=' '){//判断病名是否结束 即当第十一个或者后面一个存在中文字符时 当做当前病名尚未结束
                				k++;
                			}
                			//当前行的病名提取结束 
                			//提取前k个字符除去空格 之后存到finallname 版的病名中
                			
                			finalnameOfill.append(tmp.substring(0,k).replace(" ", ""));//添加name
                			finalexplainOfill.append(tmp.substring(k,lineTxt.length()-1).replace(" ", ""));//添加explain

                			
                		}else {//当前行不含有病名了
                			if(hasstartofillname==true) {
                				hasendofillname=true;
                			}
                		}
                		
                		if(hasstartofillname) {
                		finalexplainOfill.append(lineTxt.substring(k).replace(" ",""));
                		}
                		
                	}
                	
                	
                	
                	
                
                read.close();
    }else{
        System.out.println("找不到指定的文件");
    }
    } catch (Exception e) {
        System.out.println("读取文件内容出错");
        e.printStackTrace();
    }
        contentlink.show();
    }
	
}
