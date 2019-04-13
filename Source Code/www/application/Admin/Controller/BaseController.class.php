<?php
 namespace Admin\Controller;
 use Think\Controller;

class BaseController extends Controller{
	private static $allow_actions = array('standalone');
	public function _initialize(){
		// if(!in_array(ACTION_NAME,self::$allow_actions) && !isset($_SESSION['username'])){
		// 	$this->error('登录超时，请重新登录！','/admin');
		// }
	}
}
?>