package src;

import java.io.*;
import java.util.regex.Matcher;
import java.util.regex.Pattern;


public class JavaTest {
	public static void serachThebegin()
	{
		
	}
	
	public static void main(String argv[]){
		
		String partern0="����Ŀ¼";//��ʼ������־
		String partern1="^[0-9]\\.{0,1}[\u4e00-\u9fa5]{0,100}$";//��ű�־һ
		String partern2="^[0-9]\\.{0,1}[0-9]{0,2}$";//��ű�־��
		String target="�ش󼲲�";//�ش󼲲�������ʽ
//		String signOfEnd="^[\u4e00-\u9fa5]";//������־
		
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
            if(file.isFile() && file.exists()){ //�ж��ļ��Ƿ����
                InputStreamReader read = new InputStreamReader(new FileInputStream(file),encoding);//�жϱ��뷽ʽ
                BufferedReader bufferedReader = new BufferedReader(read);
                String lineTxt = null;
                while((lineTxt= bufferedReader.readLine())!=null){
                	//�ж��Ƿ��ҵ���ʼ��־
                	matcher0=p0.matcher(lineTxt);
                	
                	if(matcher0.find())
                		{System.out.println(lineTxt);start=true;break;}
                	
                }
                
                while((lineTxt = bufferedReader.readLine()) != null){
                	
                	
                	//�ҵ���ʼ��־��ʼ����
                	if(start)
                	{
                		
                		if(lineTxt.trim().length()==0)
                			continue;
                		
                		String[] arr=lineTxt.split("\\s+");//ɾ���ո�
                		
                		
                		
      				   	//��ȡ�ֶ�
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
                			
                			//ȷ���ش󼲲����
                			if(pmatcher.find()&&(i>1)) 
                			{
                				keyOftarget=arr[i]; 
                				nodeOftarget=content.search(keyOftarget);//������keyΪkeyoftarget��node�ڵ�
                				//linklist�����������жϽ������Լ���������
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
                	
                	
            		nextOftarget=content.getNext(nodeOftarget);//���ظö������һ��node�ڵ㣨Ŀ¼�����ϵ���һ����
              
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
                		if(M.find())//ǰʮ���ַ����������ַ�
                		{
                			matcherendOfnexttarget= patternillend.matcher(lineTxt);
                    		if(matcherendOfnexttarget.find()) {
                    			contentlink.add(finalnameOfill.toString(),finalexplainOfill.toString());
                    			break;
                    		}
                			if(hasendofillname==true) {//�Ѿ���ȡ��������һ������
                				contentlink.add(finalnameOfill.toString(),finalexplainOfill.toString());
                				finalnameOfill.delete(0, finalnameOfill.length());
                				finalexplainOfill.delete(0, finalexplainOfill.length());
                				hasendofillname=false;
                			}
                		
                			hasstartofillname=true;
                			k=12;
                			while(lineTxt.charAt(k)!=' '){//�жϲ����Ƿ���� ������ʮһ�����ߺ���һ�����������ַ�ʱ ������ǰ������δ����
                				k++;
                			}
                			//��ǰ�еĲ�����ȡ���� 
                			//��ȡǰk���ַ���ȥ�ո� ֮��浽finallname ��Ĳ�����
                			
                			finalnameOfill.append(tmp.substring(0,k).replace(" ", ""));//���name
                			finalexplainOfill.append(tmp.substring(k,lineTxt.length()-1).replace(" ", ""));//���explain

                			
                		}else {//��ǰ�в����в�����
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
        System.out.println("�Ҳ���ָ�����ļ�");
    }
    } catch (Exception e) {
        System.out.println("��ȡ�ļ����ݳ���");
        e.printStackTrace();
    }
        contentlink.show();
    }
	
}
