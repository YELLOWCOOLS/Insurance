<?php
namespace Home\Controller;

use Think\Controller;
use Think\Hook;

class AccountController extends Controller
{
    public function register()
    {   
        Hook::listen('sessionStorage');
        $openid = session('openid');

        $user   = M('User')->where(['openid' => $openid])->find();
        if ($user) {
            $this->assign('msg_type', 'warn');
            $this->assign('msg_title', '请勿重复注册');
            $this->display('Public:toast');
        }else{
        $this->assign('title', '新用户注册');
        $this->display();
        }   

    }
    public function ajaxCheckUser()
    {
        $openid = session('stuid');
        $user   = M('User')->where(['stuid' => $stuid])->find();
        if ($user) {          
            $this->ajaxReturn(1);
        }
        else{
            $this->ajaxReturn(0);
        }
    }

//     // TODO 发送手机验证码
//     private function phoneSendCaptcha($phone, $code){
//         $to=$phone;
// 		$msg="您的验证码是".$code."，请不要把验证码泄露给其他人。";
// 		import('Org.ShiYuanSMS');
// 		$options=C('SHIYUANSMS_OPTIONS');
// 		$obj = new \ShiYuanSMS($options);
// 		$res=$obj->sendSMS($msg,$phone);
//         $res = explode(",",$res);
//         $res = $res[1];
//         if ($res == '0'){
//             $result = 1;
//         }
//         else{
//             $result = 0;
//         }
// 		return $result;
//     }

//     // TODO 发送邮件验证码
//     private function emailSendCaptcha($email, $code){
//        vendor('PHPMailer.PHPMailerAutoload');
//        $mail = new \PHPMailer();


// vendor('PHPMailer.PHPMailerAutoload');
//                     $mail = new \PHPMailer();
//                     $mail->IsSMTP();
//                     $mail->Host     = C('MAIL_OPTIONS')['HOST'];
//                     $mail->SMTPAuth = true;
//                     $mail->Username = C('MAIL_OPTIONS')['USERNAME'];
//                     $mail->Password = C('MAIL_OPTIONS')['PASSWORD'];
//                     $mail->From     = C('MAIL_OPTIONS')['USERNAME'];
//                     $mail->FromName = C('MAIL_OPTIONS')['FROMNAME'];
//                     $mail->AddAddress($email);
//                     $mail->IsHTML(true);
//                     $mail->CharSet = 'utf-8';
//                     $mail->Subject = "财大留学订单处理 - $order_info[order_no]";
//                     $mail->Body    =  "<h2>您的验证码是".$code."</h2>";
//                     $mail->Send();
//                      if($mail->Send()){
//                     $this->ajaxReturn(1);
//                 }else{
//                     echo $mail->ErrorInfo;
//                     $this->ajaxReturn(0);

//                 }
//     }
    public function sendCaptcha(){
        $type = I('post.type');
        $addr = I('post.addr');
        $code = rand(1000,9999);

        session('addr',$addr);
        session('code',1111);
        $this->ajaxReturn(1);

        // session('addr',$addr);
        // session('code',$code);

        // if ($type == 'email'){
        //     $result = $this->emailSendCaptcha($addr,$code);
        // }
        // if ($type == 'phone'){
        //     $result = $this->phoneSendCaptcha($addr,$code);
        // }
        
        // $this->ajaxReturn($result);

    }

    public function verifyCaptcha(){
        // $type = I('post.type');
        $addr = I('post.addr');
        $code = I('post.code');
        if($code==session('code') && $addr=session('addr')){
            $this->ajaxReturn(1);
        }
        else{
            $this->ajaxReturn(0);
        }
    }
    
    public function doRegister(){
        $openid = session('openid');
   
        $user   = M('User')->where(['openid' => $openid])->find();
        if ($user) {
            $this->assign('msg_type', 'warn');
            $this->assign('msg_title', '请勿重复注册');
            $this->display('Public:toast');
        }
        else{
            $data=[
                    'username'=>I('post.username'),
                    'sex'=>I('post.sex'),
                    'stuid'=>I('post.stuid'),
                    'phone'=>I('post.phone'),
                    'address'=>I('post.address'),
                    'openid'=>$openid
                 ];


            // $upload = new \Think\Upload();// 实例化上传类
            // $upload->maxSize   =     3145728 ;
            // $upload->exts      =     array('jpg');// 设置附件上传类型
            // $upload->rootPath  =     "./Public/"; // 设置附件上传根目录
            // $upload->savePath  =     'Home/img/erweima/'; // 设置附件上传（子）目录
            // $upload->saveName  =  $openid;
            // $upload->autoSub   =    true;
            // $upload->subName   =    '';
            // $upload-> replace  = true;
            // $info   =   $upload->upload();
            // if(!$info) {// 上传错误提示错误信息
            //  $this->assign('msg_type', 'warn');
            //  $this->assign('msg_title', '上传失败');
            //  $this->assign('msg_desc', $upload->getError());
            //  $this->display('Public:toast');  

         // }else{

         M('User')->add($data,$options=array(),$replace=true);
         $this->assign('msg_type', 'success');
         $this->assign('msg_title', '注册成功');
         $this->assign('msg_desc', '欢迎使用');
         $this->display('Public:toast');  
        // }
    }
      
    }

    public function delete(){
         $openid = session('openid');
        $user   = M('User')->where(['openid' => $openid])->find();
        if ($user) {
            $this->display();
        }else{
         $this->assign('msg_type', 'warn');
         $this->assign('msg_title', '未注册');
         $this->display('Public:toast');  
        }

    }
    
    // public function doRegister()
    // {
    //     $openid = session('openid');
    //     $user   = M('User')->where(['openid' => $openid])->find();
    //     if ($user) {
    //         $this->assign('msg_type', 'warn');
    //         $this->assign('msg_title', '请勿重复注册');
    //         $this->display('Public:toast');
    //     }
    //     else{
    //         $check = [
    //         'username'    => I('post.username'),
    //         'enroll_year' => I('post.enroll_year'),
    //         'birthday'    => str_replace('-', '', I('post.birthday')),
    //         ];
    //         $data = [
    //             'username'    => I('post.username'),
    //             'enroll_year' => I('post.enroll_year'),
    //             'birthday'    => str_replace('-', '', I('post.birthday')),
    //             'type'        => I('post.type'),
    //             'phone'       => I('post.phone'),
    //             'email'       => I('post.email'),
    //             'country'       => I('post.country'),
    //             'city'        => I('post.city'),
    //             'district'       => I('post.district'),
    //             'oversea_location'       => I('post.oversea_location'),
    //             'province'       => I('post.province'),
    //             'company'     => I('post.company'),
    //             'position'    => I('post.position'),
    //             'openid'      => $openid,
    //             'contact'     => I('post.contact')
    //         ];
    //         $client = new \GuzzleHttp\Client();
    //         $res = $client->request('GET', C('WEB_ROOT').'/api/users/', ['query' => $check]);
    //         $body = (string) $res->getBody();
    //         if ($body == '[]') {          
    //             $data['isFound']=false;
    //         }
    //         else{
    //             $data['isFound']=true;    
    //         }
    //         M('User')->add($data,$options=array(),$replace=true);
    //         $this->assign('msg_type', 'success');
    //         $this->assign('msg_title', '注册成功');
    //         $this->assign('msg_desc', '欢迎加入校友会');
    //         $this->display('Public:toast');    
    //     }
    // }

}
