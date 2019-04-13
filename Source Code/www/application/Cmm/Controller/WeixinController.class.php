<?php
namespace Home\Controller;

use Think\Controller;

class WeixinController extends Controller
{
    public function setMenu()
    {
        import("Org.Wechat");
        $weObj = new \Wechat(C('WEIXIN_OPTIONS'));
        $weObj->deleteMenu();
        $user_menu = array(
            'button' => array(
                0 => array(

                    'type' => 'view',
                    'name' => '开始推荐',
                    'url'  => $weObj->getOauthRedirect(C('WEB_ROOT') . '/home/cmm/comm/index'),
                    ),

                1 => array(
                    'type' => 'view',
                    'name' => '管理员后台',
                    'url'  => $weObj->getOauthRedirect(C('WEB_ROOT') . '/home/Menu/index'),
                    ),
                ),
        );
        $weObj->createMenu($user_menu);
    }

    public function getResponse(){
        import("Org.Wechat");
        $weObj = new \Wechat(C('WEIXIN_OPTIONS'));
        $weObj->valid();

        $msg_type = $weObj->getRev()->getRevType();    //获取事件类型
        switch ($msg_type) {
        case \Wechat::MSGTYPE_EVENT:               //判断是否为事件消息
        $event = $weObj->getRev()->getRevEvent();
        switch ($event['event']) {
                case \Wechat::EVENT_SUBSCRIBE:     //订阅事件
                $weObj->text('欢迎关注智能保险')->reply();
                break;
                default:
                break;
            }
            break;
        default:                                   //普通消息
        $weObj->text("")->reply();
    }


    }
     public function doShare()
    {
        import("Org.Wechat");
        $weObj = new \Wechat(C('WEIXIN_OPTIONS'));
        $url   = urldecode(I('post.url'));

        $sign_package = $weObj->getJsSign($url);
        $this->ajaxReturn($sign_package);
    }

public function  post(){
 import("Org.Wechat");
$weObj = new \Wechat(C('WEIXIN_OPTIONS'));
$auth_info = $weObj->getOauthAccessToken();

$url = "https://api.weixin.qq.com/cgi-bin/template/api_set_industry?access_token=".$auth_info;
//定义传递的参数数组；
$data['industry_id1']='1';
$data['industry_id2']='2';
//定义返回值接收变量；
echo(http($url, $data, 'POST', array("Content-type: text/html; charset=utf-8")));
}


    public function index()
    {
        import("Org.Wechat");
        $weObj = new \Wechat(C('WEIXIN_OPTIONS'));

        $weObj->valid();
          $this->setMenu();
        $this->getResponse();

        \Think\Log::record($_SERVER["REMOTE_ADDR"]);
        \Think\Log::record($_SERVER["QUERY_STRING"]);
    }
}
