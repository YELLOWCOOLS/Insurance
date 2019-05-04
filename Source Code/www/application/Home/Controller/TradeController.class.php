<?php
namespace Home\Controller;

use Think\Controller;
use Think\Hook;


class TradeController extends Controller
{
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
   public function historytrade(){
      $openid = session('openid');
       $onrecord   = M('onrecord')->where(array('openid' => $openid))->order("time desc")->select();
       $this->assign('onrecords',$onrecord);
       $this->display();
   }

    public function mytrade()
    {
        Hook::listen('sessionStorage');
        $openid = session('openid');
        $user   = M('User')->where(['openid' => $openid])->find();

        $onrecord   = M('onrecord')->where(array('openid' => $openid,'state'=>0))->select();
        $finishrecord =M('onrecord')->where(array('openid' => $openid,'state'=>2))->select();
        $shourecords =M('onrecord')->where(array('openid' => $openid,'state'=>array('in','1,3')))->select();

        $this->assign('onrecords',$onrecord);
        $this->assign('finishrecords',$finishrecord);
        $this->assign('shourecords',$shourecords);
        $this->display();
    }
    public function song($id){
    
          $record   = M('onrecord')->where(array('recordid' => $id))->find();
          $user = M('worker')->where(array('wxid' => $record['receiverid']))->find();

          $this->assign('record',$record);
          $this->assign('user',$user);

          $this->assign('title',"订单详情");
          $this->display();
    }
    public function shou($id){
    
          $record   = M('onrecord')->where(array('recordid' => $id))->find();
          $user = M('worker')->where(array('wxid' => $record['receiverid']))->find();

          $this->assign('record',$record);
          $this->assign('user',$user);
          $this->assign('title',"订单详情");

          $this->display();
    }
    public function view($id){
    
          $record   = M('onrecord')->where(array('recordid' => $id))->find();
          $user = M('worker')->where(array('wxid' => $record['receiverid']))->find();
          $this->assign('record',$record);
          $this->assign('title',"订单详情");
          $this->assign('user',$user);
          $this->display();
    }
    public function gettrade($id,$getid){
    
       
          $data=[
          'receiverid'=>$getid,
          'state'=>1
          ];
           $result= M('onrecord')->where(array('recordid'=>$id))->save($data);
           if($result){
            $this->assign('msg_type', 'success');
            $this->assign('msg_title', '接单成功');
            $this->display('Public:toast'); 
           }else{
            $this->assign('msg_type', 'warn');
            $this->assign('msg_title', '接单失败');
            $this->assign('msg_desc', '少侠手速慢了');
            $this->display('Public:toast'); 
           }
       
          
         
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
               $this->assign('jump_url', C('WEB_ROOT') . '/home/menu/index');
             $this->display('Public:toast');  

         }else{
             $this->assign('msg_type', 'warn');
             $this->assign('msg_title', '创建订单失败-01');
               $this->assign('jump_url', C('WEB_ROOT') . '/home/menu/index');
             $this->display('Public:toast');  
           }
        
            }
    }

    public function around(){
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
            $onrecords   = M('onrecord')->where(array('state'=>0))->select();
            $this->assign('title','发起订单');
            $this->assign('user',$user);
            $this->assign('onrecords',$onrecords);
            $this->display();
        }
    }

     public function getpack($recordid){
        $openid = session('openid');
     
        $record   = M('onrecord')->where(array('recordid' => $recordid))->find();
    
        if( $openid!=$record['openid']){

           $this->assign('msg_type', 'warn');
           $this->assign('msg_title', '无权限操作'); 
           $this->display('Public:toast');
        }else{
          $data=[
          'state'=>2,
          ];
          $result= M('onrecord')->where(array('recordid'=>$recordid))->save($data);
        
           $this->assign('msg_type', 'success');
           $this->assign('msg_title', '成功');
           $this->display('Public:toast');
         
        }

      }
}
