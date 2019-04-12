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
                    'name' => '注册新账号',
                    'url'  => $weObj->getOauthRedirect(C('WEB_ROOT') . '/home/account/register'),
                    ),

                1 => array(
                    'type' => 'view',
                    'name' => '菜单',
                    'url'  => $weObj->getOauthRedirect(C('WEB_ROOT') . '/home/Newmenu/index'),
                    ),
                2 =>array(
                    'name' =>'工员入口',
                    'sub_button'=> array(
                            0=>array(
                                    'type' =>'view',
                                    'name' =>'接单',
                                    'url'  =>$weObj->getOauthRedirect(C('WEB_ROOT') . '/home/workergettrade/index'),
                                ),
                            1=>array(
                                    'type' =>'view',
                                    'name' =>'查询已接订单',
                                    'url'  =>$weObj->getOauthRedirect(C('WEB_ROOT') . '/home/workermytrade/index'),
                                ),
                            2=>array(
                                    'type' =>'view',
                                    'name' =>'历史订单',
                                    'url'  =>$weObj->getOauthRedirect(C('WEB_ROOT') . '/home/workerhistorytrade/index'),
                                ),
                        )
                    )
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
                $weObj->text('欢迎关注顺风校园，祝您使用愉快')->reply();
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

/**
 * 发送HTTP请求方法
 * @param  string $url    请求URL
 * @param  array  $params 请求参数
 * @param  string $method 请求方法GET/POST
 * @return array  $data   响应数据
 */
public function http($url, $params, $method = 'GET', $header = array(), $multi = false){
    $opts = array(
            CURLOPT_TIMEOUT        => 30,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_SSL_VERIFYHOST => false,
            CURLOPT_HTTPHEADER     => $header
    );
    /* 根据请求类型设置特定参数 */
    switch(strtoupper($method)){
        case 'GET':
            $opts[CURLOPT_URL] = $url . '?' . http_build_query($params);
            break;
        case 'POST':
            //判断是否传输文件
            $params = $multi ? $params : http_build_query($params);
            $opts[CURLOPT_URL] = $url;
            $opts[CURLOPT_POST] = 1;
            $opts[CURLOPT_POSTFIELDS] = $params;
            break;
        default:
            throw new Exception('不支持的请求方式！');
    }
    /* 初始化并执行curl请求 */
    $ch = curl_init();
    curl_setopt_array($ch, $opts);
    $data  = curl_exec($ch);
    $error = curl_error($ch);
    curl_close($ch);
    if($error) throw new Exception('请求发生错误：' . $error);
    return  $data;
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
