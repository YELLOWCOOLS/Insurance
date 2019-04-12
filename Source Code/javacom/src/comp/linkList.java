package comp;



class illNode{
	public String Name;
	public String Key;
	public illNode next;
	public int type = 999;
	
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
	}
	
	illNode(){
		
	};
}



public class linkList {
		public illNode head;//���ͷ
		public illNode tail;//���β
		//���캯����ʼ��Ϊnull
		linkList(){
			head = tail = null;
		}
		
		//�����²���NameΪ������KeyΪ����
		public void add (String Name, String Key){
			illNode node = new illNode(Name, Key);
			
			if(head == null) {
				head = node;
				tail = node;
			}
			else{
				tail.next=node;
				tail=node;
			}
			
		}
		
		public void add (String Name, String Key,int type){
			illNode node = new illNode(Name, Key,type);
			
			if(head == null) {
				head = node;
				tail = node;
			}
			else{
				tail.next=node;
				tail=node;
			}
		}
		
		//��ʾ�洢����
		public void show(){
			 illNode current = head;  
	         while (current != null) {  
	        	 System. out.println(current.Name + "\n" + current.Key);   
	            current = current. next;  
	            System. out.println(" ");  
	        }  
	   
	     
	    }  
	}


