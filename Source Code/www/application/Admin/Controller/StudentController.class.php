<?php
namespace Admin\Controller;

use Admin\Controller\BaseController;

class StudentController extends BaseController
{

    public function index()
    {
        $map['username'] = array('exp','is not null');
        $users=D('User')
            ->where($map)
            ->select();
        $this->assign('users',$users);
        $this->assign('active_menu','candidate');
        $this->display();
    }

    public function view(){
       
        $openid= $_GET['openid'];
        if(!isset($openid)){
            exit("参数错误");
        }else{
            $user=M('User')->where(array('openid'=>$openid))->find();
            $this->assign('user',$user);
            $this->assign('active_menu','candidate');
            $this->display();
        }
    }

   
        public function ajaxRemoveCandidate(){
            $openid = $_POST['openid'];
            M('User')->where(array('openid'=>$openid))->delete();
            $this->ajaxReturn('ok');
        }
}