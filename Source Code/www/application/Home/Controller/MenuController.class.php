<?php
namespace Home\Controller;

use Think\Controller;
use Think\Hook;

class MenuController extends Controller
{
   public function index(){

    Hook::listen('sessionStorage');
        $openid = session('openid');

        $user   = M('User')->where(['openid' => $openid])->find();
        $this->assign('title', '顺风校园');
        $this->display();
    
   }


}