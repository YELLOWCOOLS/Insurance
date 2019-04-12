package src;




public class linkList {
		public illNode head;//标记头
		public illNode tail;//标记尾
		//构造函数初始化为null
		public linkList(){
			head = tail = null;
		}
		public void add(String name,String key,int type){
			illNode node=new illNode(name, key,type);
			if(head == null) {
				head = node;
				tail = node;
			}else {
			
			tail.next = node;
			tail = node;
			}
		}
		//增加新病，Name为病名，Key为释义
		public void add (String Name, String Key){
			illNode node = new illNode(Name, Key);
			
			if(head == null) {
				head = node;
				tail = node;
			}else {
			
			tail.next = node;
			tail = node;
			}
			
			
			/*方法二（时间久了忘了方法一这么写对不对）
			 * Node curr = head;
			
			while(curr.next != null){
				curr = curr.next;
			}
			
			curr.next = node;*/
		}
		//显示存储内容
		public void show(){
			 illNode current = head;  
	    
	   
	     
	    }  
		
	}


