<?php
namespace Home\Behaviors;
use Think\Behavior;

class sessionStorageBehavior extends Behavior{
    public function run(&$param){
        if(!isset($_SESSION['openid'])){
            import("Org.Wechat");
            $weObj = new \Wechat(C('WEIXIN_OPTIONS'));
            $auth_info = $weObj->getOauthAccessToken();
            if($auth_info){
                $openid = $auth_info["openid"];
                $access_token = $auth_info["access_token"];
                $user_info = $weObj->getOauthUserinfo($access_token, $openid);
                session('openid',$openid);
                session('user_info',$user_info);
            }
        }
    }
}
