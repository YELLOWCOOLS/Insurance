package comp;

import java.io.BufferedReader;
import java.io.File;
import java.io.FileInputStream;
import java.io.FileNotFoundException;
import java.io.InputStreamReader;
import java.io.UnsupportedEncodingException;
import java.util.Stack;
import java.util.regex.Matcher;
import java.util.regex.Pattern;

public class start {
	public static void main(String[] args) {
		Cpimpl cp = null;
		String name=null;

		
		Stack<File> sta=new Stack<>(); 
		Stack<File> dirssta=new Stack<>();
		File dir =new File("C://Users//LENOVO//Desktop//hs");
		File dir2 = null;
		for(File dirs:dir.listFiles()) {
			sta.push(dirs);
		}	
		td th1=new td(sta);
		th1.run();
		
		
//		td th2=new td(cp, sta);
//		td th3=new td(cp, sta);
//	
//		th2.run();
//		th3.run();
	}
}
