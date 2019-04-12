<?php
namespace Home\Controller;

use Think\Controller;
use Think\Hook;


class WorkermytradeController extends Controller
{
   public function index()
   {
   	  	 
		Hook::listen('sessionStorage');
        $openid = session('openid');
        import("Org.Wechat");
        $weObj = new \Wechat(C('WEIXIN_OPTIONS'));
	
        $user   = M('worker')->where(['openid' => $openid])->find();
        if (!$user) {
            import("Org.Wechat");
            $weObj = new \Wechat(C('WEIXIN_OPTIONS'));
            $this->assign('msg_type', 'warn');
            $this->assign('msg_title', '不具有工作ID');
            $this->display('Public:toast');
        }else{
            $things   = M('onrecord')->where(array('state'=>1,'receiverid'=>$user['wxid']))->select();
            $this->assign('user',$user);
            $this->assign('things',$things);
            $this->display();
        }
   }
   public function getpa($reid){
   	  $data=[
          'state'=>'3',

          ];
           $time=date("Y-m-d H:i:s");
           $result= M('onrecord')->where(array('recordid'=>$reid))->save($data);
           
           if($result){
          
            $this->display('Workermytrade:index'); 
           }else{
            $this->assign('msg_type', 'warn');
            $this->assign('msg_title', '失败');
           
           
            $this->display('Workermytrade:index'); 
           }
   }
}
