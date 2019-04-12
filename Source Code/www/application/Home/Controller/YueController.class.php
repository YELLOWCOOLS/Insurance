<?php
namespace Home\Controller;

use Think\Controller;
use Think\Hook;


class YueController extends Controller
{
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

   public function addroom(){
   		   $openid = session('openid');
         $user   = M('User')->where(['openid' => $openid])->find();
         $now =  date("Y-m-d");
         $date = str_replace('-','',$now);
         $time=date("H:i:s");


         $data=[
         	'ownerid'=>$openid,
         	'roomname'=>I('rname'),
         	'maxnum'=>I('num'),
         	'place'=>I('place'),
         	'starttime'=>I('starttime'),
          'endtime'=>I('endtime'),
          'x'=>I('px'),
          'y'=>I('py'),
          'type'=>I('type')
         ];

         $result=M('room')->add($data);
         $data=[
          'roomid'=>$result,
          'memberid'=>$openid,
          'des'=>$user['username'],
         ];
        M('roommember')->add($data);

         if($result){
            $this->assign('msg_type', 'success');
             $this->assign('msg_title', '创建房间成功');
              $this->assign('jump_url', C('WEB_ROOT') . "/home/newmenu/guan_ma/type/".I('type')."/id/".$result);
             $this->display('Public:toast');
         }
   }
    public function exitroom($id){
      $openid = session('openid');
      $room=M('room')->where(['id' => $id])->find();
      if($room){

       $result=M('roommember')->where(['roomid'=>$id,'memberid'=>$openid])->delete();
         if($result){

           $all=$room['nownum']-1;
          $result=M('room')->where(['id'=>$room['id']])->save(['nownum'=>$all]);
            $this->assign('msg_type', 'success');
             $this->assign('msg_title', '退出房间成功');
              $this->assign('jump_url', C('WEB_ROOT') . '/home/newmenu/index.html');
             $this->display('Public:toast');  
         }else{
          $this->assign('msg_type', 'warn');
            $this->assign('msg_title', '退出出错');
            $this->assign('msg_desc', '错误代码'.$result);
            $this->assign('jump_url', C('WEB_ROOT') . '/home/newmenu/index.html');
            $this->display('Public:toast'); 
         }
        
      }else{
            $this->assign('msg_type', 'warn');
            $this->assign('msg_title', '房间已被解散');
            $this->assign('msg_desc', '房主跑路了');
            $this->assign('jump_url', C('WEB_ROOT') . '/home/yue/join');
            $this->display('Public:toast'); 
      }
   }
   public function joinroom($id){
  
    $openid = session('openid');
      $room=M('room')->where(['id' => $id])->find();
      $user   = M('User')->where(['openid' => $openid])->find();
      if($room){
        if($room['maxnum']>$room['nownum']){
          $data=[
            'roomid'=>$room['id'],
            'memberid'=>$openid,
            'des'=>$user['username']
          ];
          $all=$room['nownum']+1;
        
          $result=M('room')->where(['id'=>$room['id']])->save(['nownum'=>$all]);
        
          $result=M('roommember')->add($data);
          if($result){
             $this->assign('msg_type', 'success');
             $this->assign('msg_title', '进入房间成功');
              $this->assign('jump_url', C('WEB_ROOT') . '/home/newmenu/index.html');
             $this->display('Public:toast');  
           }else{
             $this->assign('msg_type', 'warn');
             $this->assign('msg_title', '进入房间失败');
            $this->assign('jump_url', C('WEB_ROOT') . '/home/newmenu/join');
             $this->display('Public:toast');  
           }
        }else{
            $this->assign('msg_type', 'warn');
            $this->assign('msg_title', '房间已满');
            $this->assign('msg_desc', '少侠手速慢了');
            $this->assign('jump_url', C('WEB_ROOT') . '/home/newmenu/join');
            $this->display('Public:toast'); 
           }
      }else{
            $this->assign('msg_type', 'warn');
            $this->assign('msg_title', '房间已被解散');
            $this->assign('msg_desc', '房主跑路了');
            $this->assign('jump_url', C('WEB_ROOT') . '/home/newmenu/join');
            $this->display('Public:toast'); 
      }
   }
   public function deleteroom($id){
    $room=M('room')->where(['id' => $id])->find();
     $result2=M('room')->delete($room['id']);
    M('roommember')->delete($room['id']);
    if( $result2){
       $this->assign('msg_type', 'success');
             $this->assign('msg_title', '解散成功');
              $this->assign('jump_url', C('WEB_ROOT') . '/home/menu/index.html');
             $this->display('Public:toast');  
    }else{
      $this->assign('msg_type', 'warn');
             $this->assign('msg_title', '解散失败');
             $this->display('Public:toast');  
    }
   }
   public function guan_ma($type,$id){
      
      $room=M('room')->where(['id' => $id])->find();

      $openid = session('openid');
      $user   = M('User')->where(['openid' => $openid])->find();
      $use   =M('roommember')->where(['memberid'=>$openid,'roomid'=>$id])->find();
      $list   =M('roommember')->where(['roomid'=>$id])->select();
      if($room['state']=1&&$room['alr']==1){

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
        $this->assign('type','1');
        $this->assign('list',$list);
        $this->assign('room',$room);
        $this->assign('title',$room['roomname']);
        $this->display('newmenu/guan_ma');  
        }else{
        $this->assign('type','0');
        $this->assign('list',$list);
        $this->assign('room',$room);
        $this->assign('title',$room['roomname']);
        $this->display('newmenu/guan_ma');  
        }
      }
      }
   }
   public function join(){
    $openid = session('openid');
    $rooms=M('room')->where(['state'=>'0'])->order("starttime desc")->select();
    
    $this->assign('rooms',$rooms);
    $this->display('Newmenu:join');
   }
   public function myroom(){
    $openid = session('openid');
    $rooms=array();
   
    $roomsid=M('roommember')->where(['memberid'=>$openid])->order("roomid desc")->select();

    foreach($roomsid as $roomid){

       $array['id']= array('EQ',$roomid['roomid']);
       $array['state']=array('LT','1');
       $result=M('room')->where($array)->find();
       if($result){
       array_push($rooms, M('room')->where($array)->find());
       }
    }
    $this->assign("rooms",$rooms);
    $this->display("Newmenu:myroom");
   }
   public function changeplace($id){
      $room=M('room')->where(['id' => $id])->find();
      $openid = session('openid');
      $result=M("room")->where(['id'=>$id,'ownerid'=>$openid]);

      if($result){
          $this->assign('room',$room);

          $this->display();
      }else{
       
          $this->assign('msg_type', 'warn');
            $this->assign('msg_title', '无操作权限');
           
            $this->assign('jump_url', C('WEB_ROOT') . '/home/newmenu/index');
            $this->display('Public:toast'); 
      }
   }
   public function dochange($id){
      $data=[
          'place'=>I('place'),
          'x'=>I('px'),
          'y'=>I('py')
      ];
        

        $openid = session('openid');
        $user   = M('User')->where(['openid' => $openid])->find();
      $list   =M('roommember')->where(['roomid'=>$id])->select();
      $result=M("room")->where(['id'=>$id])->save($data);
      $room=M('room')->where(['id' => $id])->find();
      if($result){
            $this->assign('msg_type', 'success');
            $this->assign('msg_title', '修改成功');
            $this->assign('msg_desc', '将通知所有参加改活动的成员');
            $this->assign('jump_url', C('WEB_ROOT') . '/home/newmenu/index');
            $this->display('Public:toast'); 
      }else{
            $this->assign('msg_type', 'warn');
            $this->assign('msg_title', '修改出错');
            $this->assign('msg_desc', '错误代码'.$result);
            $this->assign('jump_url', C('WEB_ROOT') . '/home/newmenu/index');
            $this->display('Public:toast'); 
      }
     }
     public function startroom($id){
       $room=M('room')->where(['id' => $id])->find();
       if($room['alr'] ==0){
        $data=[
          'alr'=> 1      
       ];
       $result=M("room")->where(['id'=>$id])->save($data);
       if( $result){
           $this->assign('msg_type', 'success');
            $this->assign('msg_title', '该活动开始了');
            $this->assign('msg_desc', '将通知所有参加改活动的成员');
            $this->assign('jump_url', C('WEB_ROOT') . '/home/newmenu/index');
            $this->display('Public:toast'); 
       }else{
            $this->assign('msg_type', 'warn');
            $this->assign('msg_title', '操作失败');
            $this->assign('jump_url', C('WEB_ROOT') . '/home/newmenu/index');
            $this->display('Public:toast'); 
       }
       }else{
            $this->assign('msg_type', 'warn');
            $this->assign('msg_title', '该活动已经开始了');
            $this->assign('jump_url', C('WEB_ROOT') . '/home/newmenu/index');
            $this->display('Public:toast'); 
       }
     }

      public function endroom($id){
        $room=M('room')->where(['id' => $id])->find();
        
       if($room['alr']==1){
        $data=[
          'state'=> 1,        
       ];
       $result=M("room")->where(['id'=>$id])->save($data);
       if( $result){
            $this->assign('msg_type', 'success');
            $this->assign('msg_title', '该活动解散了');
            $this->assign('msg_desc', '将通知所有参加改活动的成员');
            $this->assign('jump_url', C('WEB_ROOT') . '/home/newmenu/index');
            $this->display('Public:toast'); 
       }else{
            $this->assign('msg_type', 'warn');
            $this->assign('msg_title', '操作失败');
            $this->assign('jump_url', C('WEB_ROOT') . '/home/newmenu/index');
            $this->display('Public:toast'); 
       }
       }else{
            $this->assign('msg_type', 'warn');
            $this->assign('msg_title', '该活动未开始');
            $this->assign('jump_url', C('WEB_ROOT') . '/home/newmenu/index');
            $this->display('Public:toast'); 
       }
      }


     public function sendme(){

     }
}
