<?php
namespace admin\Controller;

use Think\Controller;

class testController extends Controller
{
    public function test()
    {
    	echo
        $this->display();
    }
    public function view()
    {
        $this->display();
    }
}