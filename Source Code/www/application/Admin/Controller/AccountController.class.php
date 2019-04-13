<?php
namespace admin\Controller;

use Think\Controller;

class accountController extends Controller
{
    public function index()
    {
        $this->display();
    }
    public function doLogin(){
    	$name=I("username");
    	$password=I("password");
    	if($name=="admin"&&$password=="admin"){
    		  $this->display('Candidate:indexview');
    	}
    }
    public function doLogout(){
        session('username',null);
        $this->success('请重新登录!','/admin');
    }
}