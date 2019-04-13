package comp;

import java.io.BufferedReader;
import java.io.File;
import java.io.FileInputStream;
import java.io.FileNotFoundException;
import java.io.IOException;
import java.io.InputStreamReader;
import java.io.UnsupportedEncodingException;
import java.util.Stack;
import java.util.regex.Matcher;
import java.util.regex.Pattern;

import src.illNode;

public class test {
	public static void main(String[] args) throws Exception {
		Cpimpl cp = null;
		String name = null;
		Stack<File> sta = new Stack<>();
		File dir2 = new File("C://Users//Shinelon//Desktop//нд╪Ч");
		for(File file:dir2.listFiles()) {
			sta.push(file);
		}
		
		
		File file=null;
		Stack<File> filesta=new Stack<>();
		while(!sta.isEmpty()) {
			file=sta.pop();	
			for(File files:  file.listFiles()) {
				if(Pattern.compile(".txt$").matcher(files.getName()).find()) {
					
					filesta.push(files);
				}
			}
			th2 th=new th2(filesta,file.getName());
			th.run();
			Thread.currentThread().sleep(1000);
		}
		
		
		
	}
}