package comp;


import java.awt.List;
import java.util.ArrayList;
import java.util.Stack;;

class Node {
	String num;
	String key;
	ArrayList<Node> list;

	Node(String num, String key) {
		this.key = key;
		this.num = num;
		list = new ArrayList<Node>();
	}

	Node() {
		list = new ArrayList<Node>();
	}
}

public class Tre {
	/*
	 * 储存根节点
	 */
	Node root;

	public Tre() {
		root = new Node();
	}

	/*
	 * 
	 */
	public Node search(String key) {
		Node node = root;
		return searchH(node, key);
	}

	private Node searchH(Node node, String key) {
		Stack<Node> stack = new Stack<Node>();
		stack.push(node);
		Node tmp;
		while (!stack.isEmpty()) {
			tmp = stack.pop();
			if (tmp.key != key) {
				for (int i = 0; i < tmp.list.size(); i++) {
					stack.push(tmp.list.get(i));
				}
			} else {
				return tmp;
			}
		}
		return null;
	}
	// if(node.list.isEmpty()) {
	// return null;
	// }else {
	// for(int i=0;i<node.list.size();i++) {
	// if(node.list.get(i).key==key) {
	// return node.list.get(i);
	// }
	// }
	// for(int i=0;i<node.list.size();i++ ) {
	// Node tmp=searchH(node.list.get(i),key);
	//
	// }
	// }
	// return null;

	/*
	 * 
	 * 
	 * 
	 */
	public void insert(String num, String key) {
		Node node = root;
		int[] hdNum;
		hdNum = handlenum(num);

		int i = 0;

		while (i < hdNum.length) {
			while (hdNum[i] > node.list.size()) {
				node.list.add(new Node());
			}
			node = node.list.get(hdNum[i] - 1);
			i++;
		}
		node.key = key;
		node.num = num;
	}

	public void insertnode(Node node, int[] num) {

	}

	public void show(Node a) {
		System.out.println(a.num + "  :  " + a.key);
		for (int i = 0; i < a.list.size(); i++) {
			System.out.println("    ");
			show(a.list.get(i));
		}
	};

	private int[] handlenum(String num) {

		// 当格式为1.1 1.2时
		String a[] = num.split("[.]");
		int[] handle = new int[a.length];
		for (int i = 0; i < a.length; i++) {
			handle[i] = Integer.parseInt(a[i]);
		}

		return handle;
	}

	public Node getNext(Node nodeOftarget) {
		int[] num = handlenum(nodeOftarget.num);
		int i = 0;
		return findNext(root, num, i);
	}

	private Node findNext(Node node, int[] num, int i) {
		ArrayList<Integer> array = new ArrayList<Integer>();
		Node tmp = root;
		int m = 0;
		Stack<Node> stack = new Stack<Node>();
		for (m = 0; m < num.length; m++) {
			stack.push(tmp);
			tmp = tmp.list.get(num[m] - 1);
		}
		m = num.length-1;
		while (stack.size() != 1) {
			tmp = stack.pop();
			if (tmp == root) {
				return null;
			}
			if (num[m] < tmp.list.size() - 1) {
				return tmp.list.get(num[m]);
			} else if (num[m] == tmp.list.size()) {
				continue;
			}
			m--;
		}
		return tmp;
		// if(i>=num.length) {
		// return null;
		// }
		// if(node.list.isEmpty()) {
		// return null;
		// }
		// if(num[i]<node.list.size()) {
		// Node a=findNext(node.list.get(num[i]-1),num,i++);
		// if(a==null) {
		// return node.list.get(num[i]-1);
		// }else {
		// return a;
		// }
		// }
		// return null;
	}
}
