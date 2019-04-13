<?php
namespace Admin\Controller;

use Admin\Controller\BaseController;

class UserController extends BaseController
{
    public function changePassword()
    {
    	$this->assign('active_menu','user');
    	$this->display();
    }
    public function doChangePassword(){
        M('admin')->where(array('username'=>'admin'))->setField('password',md5($_POST['password']));
        session('username',null);
        $this->success('修改成功，请重新登录!','/admin');
    }
    public function doLogout(){
        session('username',null);
        $this->success('请重新登录!','/admin');
    }
}