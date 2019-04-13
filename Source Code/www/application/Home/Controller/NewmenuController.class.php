<?php
namespace Home\Controller;

use Think\Controller;
use Think\Hook;

class NewmenuController extends Controller
{
   public function index(){
   	 	Hook::listen('sessionStorage');
        $openid = session('openid');
        $user   = M('User')->where(['openid' => $openid])->find();
        $this->assign('title', '顺风校园');
        $this->display();
   }
   public function listbutton(){
        Hook::listen('sessionStorage');
        $openid = session('openid');
        $messages=M('message')->query("select * from sys.zy_message INNER join sys.zy_worker on sys.zy_message.from=sys.zy_worker.wxid order by time desc limit 20");
        $this->assign("messages",$messages);
   
        $this->display();
   }
    public function initiate(){
        Hook::listen('sessionStorage');
        $openid = session('openid');
        $user   = M('User')->where(['openid' => $openid])->find();
        if (!$user) {
            import("Org.Wechat");
            $weObj = new \Wechat(C('WEIXIN_OPTIONS'));
            $this->assign('msg_type', 'warn');
            $this->assign('msg_title', '请先注册');
            $this->assign('jump_url', $weObj->getOauthRedirect(C('WEB_ROOT') . '/home/account/register'));
            $this->display('Public:toast');
        }else{
            $this->assign('title','发起订单');
            $this->display();
        }


   }
   public function finishtrade()
    {
        Hook::listen('sessionStorage');
        $openid = session('openid');
        $user   = M('User')->where(['openid' => $openid])->find();
		$onrecord   = M('onrecord')->where(array('openid' => $openid,'state'=> 2))->order('time desc')->limit(0,10)->select();
        $this->assign("onrecords",$onrecord);
        $this->assign('title','已完成订单');
      	$this->display('mytrade');
    }
    public function view($id){
    
          $record   = M('onrecord')->where(array('recordid' => $id))->find();
          $user = M('worker')->where(array('wxid' => $record['receiverid']))->find();
          $this->assign('record',$record);
          $this->assign('title',"订单详情");
       $this->assign('user',$user);
          $this->display();
    }
    public function mytrade()
    {
        Hook::listen('sessionStorage');
        $openid = session('openid');
        $user   = M('User')->where(['openid' => $openid])->find();

        $onrecord   = M('onrecord')->where(array('openid' => $openid))->order('time desc')->limit(0,10)->select();
        $this->assign("onrecords",$onrecord);
        $this->assign('我的订单');
       
        $this->display();
    }
   public function dotrade()
    {
         $openid = session('openid');
         $user   = M('User')->where(['openid' => $openid])->find();
         $now =   date('Y-m-d H:i:s',time()) ;
        
        
         $data = [
                
                'openid' =>$openid,
                'date'=>$now,
            ];
          $money=I('weather')*2+I('weight')*2;

       
      
          $result= M('trade')->add($data);
          if($result){
           $trade=M('trade')->where($data)->find();
           $data2=[
                'openid'=>$openid,
                'tradeid'=>$trade["tradeid"],
                'initiatorid'=>$user['stuid'],
                'weather'=>I('weather'),
                'weight'=>I('weight'), 
                'place'=>I('place'),
                'num'=>I('number'),
                'company'=>I('company'),
                'money'=>$money,
                'time'=>$now
           ];
           $result2=M('onrecord')->add($data2,$options=array(),$replace=true);
           if($result2){
             $this->assign('msg_type', 'success');
             $this->assign('msg_title', '创建订单成功');
               $this->assign('jump_url', C('WEB_ROOT') . '/home/newmenu/index');
             $this->display('Public:toast');  
         }else{
             $this->assign('msg_type', 'warn');
             $this->assign('msg_title', '创建订单失败-01');
               $this->assign('jump_url', C('WEB_ROOT') . '/home/newmenu/index');
             $this->display('Public:toast');  
           } 
        }
    }

    public function ballint(){
    Hook::listen('sessionStorage');
        $openid = session('openid');

         $user   = M('User')->where(['openid' => $openid])->find();
         if($user){

         }else{
           $this->assign('msg_type', 'warn');
            $this->assign('msg_title', '请先注册');
            $this->assign('jump_url', C('WEB_ROOT'). '/home/account/register');
            $this->display('Public:toast');
         }
    $this->display();
   }

   public function guanint(){
     Hook::listen('sessionStorage');
        $openid = session('openid');

         $user   = M('User')->where(['openid' => $openid])->find();
         if($user){

         }else{
           $this->assign('msg_type', 'warn');
            $this->assign('msg_title', '请先注册');
            $this->assign('jump_url', C('WEB_ROOT'). '/home/account/register');
            $this->display('Public:toast');
         }

    $this->display();
   }

 public function guan_ma($type,$id){
      
      $room=M('room')->where(['id' => $id])->find();
	 Hook::listen('sessionStorage');
      $openid = session('openid');
      $user   = M('User')->where(['openid' => $openid])->find();
      $use   =M('roommember')->where(['memberid'=>$openid,'roomid'=>$id])->find();
      $list   =M('roommember')->where(['roomid'=>$id])->select();

      if($room['state']==1&&$room['alr']==1){

        $this->assign('type','3');
        $this->assign('roomown',$user);
        $this->assign('list',$list);
        $this->assign('room',$room);
        $this->assign('title',$room['roomname']);
        $this->display();
      }else{
      if($openid==$room['ownerid']){
        
       
        $this->assign('type','2');
        $this->assign('roomown',$user);
        $this->assign('list',$list);
        $this->assign('room',$room);
        $this->assign('title',$room['roomname']);
        $this->display();
      }else{
        if($use){
        $this->assign('type','0');
        $this->assign('list',$list);
        $this->assign('room',$room);
        $this->assign('title',$room['roomname']);
        $this->display();  
        }else{
        $this->assign('type','1');
        $this->assign('list',$list);
        $this->assign('room',$room);
        $this->assign('title',$room['roomname']);
        $this->display();  
        }
      }
      }
   }


}