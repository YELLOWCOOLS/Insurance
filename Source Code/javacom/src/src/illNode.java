package src;

public  class illNode{
	public String Name;
	public String Key;
	public illNode next;
	public int type=999;
	illNode(String name,String Key){
		this.Name=name;
		this.Key=Key;
		next=null;
	}
	
	illNode(String name,String Key,int type){
		this.Name=name;
		this.Key=Key;
		next=null;
		this.type=type;
	};
}

