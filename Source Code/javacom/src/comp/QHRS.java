package comp;

//前海人寿
import java.io.BufferedReader;
import java.io.IOException;

import java.util.regex.Matcher;
import java.util.regex.Pattern;

import src.linkList;

public class QHRS extends Cpimpl implements Cp {


	public QHRS() {

		// TODO Auto-generated method stub
		Mulustart = "条[ ]*款[ ]*目[ ]*录";
		Muluend = "前海";
		Zhongjistart = new String[] { "^[ ]*[0-9].[0-9]  [ ]*重大疾病|指符合下列定义的疾病、损伤或手术" };
		Zhongjiend = new String[] { "^[ ]*[0-9].[0-9]  [ ]*专科医生 " };

	}

	
}
