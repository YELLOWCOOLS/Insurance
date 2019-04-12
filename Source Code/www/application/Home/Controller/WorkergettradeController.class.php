<?php
namespace Home\Controller;

use Think\Controller;
use Think\Hook;


class WorkergettradeController extends Controller
{
	public function index(){
      	 
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
            $things   = M('onrecord')->where(array('state'=>0))->order("place")->select();
            $this->assign('user',$user);
            $this->assign('things',$things);
            $this->display();
        }
	}
   public function gettrade($tradeid,$id){
    
       
        
          $data=[
          'state'=>'1',
          'receiverid'=> $id
          ];
           $time=date("Y-m-d H:i:s");
           $result= M('onrecord')->where(array('recordid'=>$tradeid))->save($data);
           if($result){
            $rocod=M('onrecord')->where(array('recordid'=>$tradeid))->find();
            $data=[
              'from'=>$id,
              'to'=>$rocod['openid'],
              'type'=>'2',
              'time'=> $time
            ];
            M('message')->add($data);
            $this->assign('msg_type', 'success');
            $this->assign('msg_title', '接单成功');
             $this->assign('jump_url', C('WEB_ROOT') . '/home/workergettrade/index');
            $this->display('Public:toast'); 
           }else{
            $this->assign('msg_type', 'warn');
            $this->assign('msg_title', '接单失败');
            $this->assign('msg_desc', '少侠手速慢了');
            $this->assign('jump_url', C('WEB_ROOT') . '/home/workergettrade/index');
            $this->display('Public:toast'); 
           }
       
          
         
    }
}
