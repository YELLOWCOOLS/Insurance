package src;




public class linkList {
		public illNode head;//���ͷ
		public illNode tail;//���β
		//���캯����ʼ��Ϊnull
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
		//�����²���NameΪ������KeyΪ����
		public void add (String Name, String Key){
			illNode node = new illNode(Name, Key);
			
			if(head == null) {
				head = node;
				tail = node;
			}else {
			
			tail.next = node;
			tail = node;
			}
			
			
			/*��������ʱ��������˷���һ��ôд�Բ��ԣ�
			 * Node curr = head;
			
			while(curr.next != null){
				curr = curr.next;
			}
			
			curr.next = node;*/
		}
		//��ʾ�洢����
		public void show(){
			 illNode current = head;  
	    
	   
	     
	    }  
		
	}


