<?php
namespace admin2\Controller;

use Think\Controller;
use Think\Hook;

class manageController extends Controller
{
    public function get_uuuid(){
        $MAX  = M('insurance')->where('1=1')->order('id desc')->find();
        $id = $MAX['id']+1;
        return (String)$id;
    }
    public function select_ins(){
        $uid = session('mid');
        if($uid){
        $cpname="安邦人寿保险股份有限公司";
        $name=I('name');
        $id=I('id');
        if($cpname!=""){
            $date['cpname']=$cpname;
        }
        if($id!=""){
            $date['id']=$id;
        }
        if($name!=""){
            $date['name']=$name;
        }

        $insurances=M("insurance")->where($date)->select();
        $this->assign("ins",$insurances);
        $this->display();
        }else{
        $this->assign('warn','非法访问，请登录');
        $this->display('Manage:login');
        }
    }
    public function ins_chart($id){
        Hook::listen('sessionStorage');
        $uid = session('mid');
        if($uid){
        $this->assign("html_name","chart");
        $this->display();
        }else{
        $this->assign('warn','非法访问，请登录');
        $this->display('Manage:login');
        }
    }
    public function uploadfile(){
        $cp_name  =$_POST['cp_name'];
        $ins_name = $_POST['ins_name'];
        $id = $this->get_uuuid();
       
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('txt');// 设置附件上传类型
        $upload->rootPath  =     './public/Search/1txt/';
        $upload->savePath  =     ''; // 设置附件上传根目录
        $upload->autoSub = false;
        $upload->saveName = $id;
        $upload->replace = True;
                // 上传文件 
        $info   =   $upload->upload();
            if(!$info) {
                $this->error($upload->getError());
                }else{
                
            }
        session("ins_name",$ins_name);
        session("cp_name",$cp_name);
        $this->delete_all($id);
        $this->redirect("/admin2/manage/get_data_all/id/".$id);

    }
    public function delete_all($id){
        M('detailexp')->execute("SET SQL_SAFE_UPDATES = 0;
Delete FROM zy_detailexp  where num in( select num from( select num from zy_detailexp   where id =".$id.") ab ) ;");
        M('illlist')->execute("SET SQL_SAFE_UPDATES = 0;
Delete FROM zy_illlist  where num in( select num from( select num from zy_illlist   where id =".$id.") ab ) ;");
        M('tag')->execute("SET SQL_SAFE_UPDATES = 0;
Delete FROM zy_tag  where num in( select num from( select num from zy_tag   where id =".$id.") ab ) ;");
        M('right')->execute("SET SQL_SAFE_UPDATES = 0;
Delete FROM zy_right where num in( select num from( select num from zy_right   where id =".$id.") ab ) ;");
    }

    public function get_data_all($id,$page=0){
        $name = session('cp_name');

        $url = "http://localhost:8080/inspro/data_progress?id=".$id."&cpname=".$name;
        $html =file_get_contents($url);
        $re = json_decode($html);
        $data_id['id']=$id;
        $all = $re->all;
        $all_a = array();
        $res = M('detailexp')->where($data_id)->find();
        if(!$res){
            foreach($all as $key =>$value){
            $data = array();
            $data['id'] = $id;
            $data['name'] = $key;
            $data['exp'] = $value;
            array_push($all_a,$data);
              }
          M('detailexp')->addAll($all_a);  
        }
        $all_a = M('detailexp')->where($data_id)->select();
       
        $illlist = $re->illlist;
        $illlist_a = array();
        $res = M('illlist')->where($data_id)->find();

        if(!$res){
            foreach($illlist as $key =>$value){
            $data = array();
            $data['id'] = $id;
            $data['illname'] = $key;
            $data['illexp'] = $value;
            array_push($illlist_a,$data);
        }
        M('illlist')->addAll($illlist_a);
        }
        $illlist_a = M('illlist')->where($data_id)->select();


        $tag = $re->tag;
        $tag_a = array();
        $res = M('tag')->where($data_id)->find();
        if(!$res){
        foreach($tag as $key =>$value){
            $data = array();
            $data['id'] = $id;
            $data['tag2'] = $value;
            $data['type'] = 2;
            array_push($tag_a,$data);
        }
        M('tag')->addAll($tag_a);
        }
        $tag_a = M('tag')->where($data_id)->select();

        $right = M('right')->query("Select distinct tag1 from zy_right");
        $this->assign('right',$right);
        $this->assign('all',$all_a);
        $this->assign('id',$id);
        $this->assign('tag',$tag_a);
        $this->assign('illlist',$illlist_a);
        $this->assign('page',$page);

        $this->display('file_makesure');
    }
    public function file_makesure(){

    }

     
    public function login(){
        $this->assign('warn',true);
        $this->display();
    }
    public function dologin(){
        Hook::listen('sessionStorage');
        $name=I("username");
        $password=I("password");
        
        $user = M("manage_user")->where(['ma_name' =>$name,'ma_password'=>$password])->find();
        
        if($user){
            session('uname',$user['ma_name']);
            session('company',$user['ma_company']);
            session("mid",$user['ma_id']);
            $this->assign("html_name","index");
            $this->display('Manage:index');
        }else{
            $this->assign('warn','密码错误或用户不存在');
            $this->display('Manage:login');
        }

    }
    public function index()
    {
        
        $uid = session('mid');
        if($uid){
        $this->assign("html_name","index");
        $this->display();
        }else{
        $this->assign('warn','非法访问，请登录');
        $this->display('Manage:login');
        }
        
    }
    public function chart(){

        Hook::listen('sessionStorage');
        $uid = session('mid');
        if($uid){
        $this->assign("html_name","chart");
        $this->display();
        }else{
        $this->assign('warn','非法访问，请登录');
        $this->display('Manage:login');
        }
    }
    public function form_amazeui(){
        $uid = session('mid');
        if($uid){
        $this->assign("html_name","generalComponents");
    	$this->display();
        }else{
        $this->assign('warn','非法访问，请登录');
        $this->display('Manage:login');
        }
    }
    public function form_line(){
        $uid = session('mid');
        if($uid){
        $this->assign("html_name","generalComponents");
        $this->display();
        }else{
        $this->assign('warn','非法访问，请登录');
        $this->display('Manage:login');
        }
    }
    public function form_news(){
        $uid = session('mid');
        if($uid){
        $this->assign("html_name","generalComponents");
        $this->display();
        }else{
        $this->assign('warn','非法访问，请登录');
        $this->display('Manage:login');
        }
    }
    public function form_news_list(){
        $uid = session('mid');
        if($uid){
        $this->assign("html_name","generalComponents");
        $this->display();
        }else{
        $this->assign('warn','非法访问，请登录');
        $this->display('Manage:login');
        }
    }
    public function table_font_list(){
        $uid = session('mid');
        if($uid){
        $this->assign("html_name","generalComponents");
        $this->display();
        }else{
        $this->assign('warn','非法访问，请登录');
        $this->display('Manage:login');
        }
    }
     public function table_images_list(){
        $uid = session('mid');
        if($uid){
        $this->assign("html_name","generalComponents");
        $this->display();
        }else{
        $this->assign('warn','非法访问，请登录');
        $this->display('Manage:login');
        }
    }
    public function search_ins(){
        $uid = session('mid');
        if($uid){
        $cpname="安邦人寿保险股份有限公司";
        $name=I('name');
        $id=I('id');
        if($cpname!=""){
            $date['cpname']=$cpname;
        }
        if($id!=""){
            $date['id']=$id;
        }
        if($name!=""){
            $date['name']=$name;
        }

        $insurances=M("insurance")->where($date)->select();
        $this->assign("ins",$insurances);
        $this->display();
        }else{
        $this->assign('warn','非法访问，请登录');
        $this->display('Manage:login');
        }
    }
    public function insview($id){
        $uid = session('mid');
        if($uid){
        $explist=M("detailexp")
                ->where(array('id'=>$id))
                ->order('num')
                ->select();
        $this->assign("id",$id);
        $this->assign("illde",$explist);
        $this->display();
        }else{
        $this->assign('warn','非法访问，请登录');
        $this->display('Manage:login');
        }
    }
    public function change_state_ins(){
        $uid = session('mid');
        if($uid){
        $cpname="东吴人寿保险股份有限公司";
        $name=I('name');
        $id=I('id');
        if($cpname!=""){
            $date['cpname']=$cpname;
        }
        if($id!=""){
            $date['id']=$id;
        }
        if($name!=""){
            $date['name']=$name;
        }


        $insurances=M("insurance")->where($date)->select();
        $this->assign("ins",$insurances);
        $this->display();
        }else{
        $this->assign('warn','非法访问，请登录');
        $this->display('Manage:login');
        }
    }
      public function change_state($id,$state){
        $uid = session('mid');
        if($uid){
        if($state='0'){
            $data['state'] = '1';
        }else{
            $data['state'] = '0';
        }
        
        $res = M("insurance")->where(array('id'=>$id))->save($data);
        $this->redirect("change_state_ins",manage);
        }else{
        $this->assign('warn','非法访问，请登录');
        $this->display('Manage:login');
        }
        
    }
    public function log_out(){
        session(null);
        $this->assign('warn',true);
        $this->display('Manage:login');
    }
    public function update_de_name($id,$value){
        if(IS_POST){
        $data['name'] = $value;
        $res = M("detailexp") ->where(array('num'=>$id))->save($data);
        if($res){
            $this->ajaxReturn('ok');
        }else{
            $this->ajaxReturn();
        }
        }else{
            echo("错误的访问方式");
            $this->ajaxReturn();
        }
    }
    public function update_de_exp($id,$value){
        if(IS_POST){
        $data['exp'] = $value;
        $res = M("detailexp") ->where(array('num'=>$id))->save($data);
        if($res){
            $this->ajaxReturn('ok');
        }else{
            $this->ajaxReturn();
        }
        }else{
            echo("错误的访问方式");
            $this->ajaxReturn();
        }
    }
    public function delete_de($id){
        if(IS_POST){
        $data['exp'] = $value;
        $res = M("detailexp") ->where(array('num'=>$id))->delete();
        if($res){
            $this->ajaxReturn('ok');
        }else{
            $this->ajaxReturn();
        }
        }else{
            echo("错误的访问方式");
            $this->ajaxReturn();
        }
    }
    public function update_il_name($id,$value){
        if(IS_POST){
        $data['illname'] = $value;
        $res = M("illlist") ->where(array('num'=>$id))->save($data);
        if($res){
            $this->ajaxReturn('ok');
        }else{
            $this->ajaxReturn();
        }
        }else{
            echo("错误的访问方式");
            $this->ajaxReturn();
        }
    }
    public function update_il_exp($id,$value){
        if(IS_POST){
        $data['illexp'] = $value;
        $res = M("illlist") ->where(array('num'=>$id))->save($data);
        if($res){
            $this->ajaxReturn('ok');
        }else{
            $this->ajaxReturn();
        }
        }else{
            echo("错误的访问方式");
            $this->ajaxReturn();
        }
    }
    public function delete_il($id){
        if(IS_POST){
        $data['exp'] = $value;
        $res = M("illlist") ->where(array('num'=>$id))->delete();
        if($res){
            $this->ajaxReturn('ok');
        }else{
            $this->ajaxReturn();
        }
        }else{
            echo("错误的访问方式");
            $this->ajaxReturn();
        }
    }
     public function delete_tag($id){
        if(IS_POST){
        $data['exp'] = $value;
        $res = M("tag") ->where(array('num'=>$id))->delete();
        if($res){
            $this->ajaxReturn('ok');
        }else{
            $this->ajaxReturn();
        }
        }else{
            echo("错误的访问方式");
            $this->ajaxReturn();
        }
    }
    public function add_tag($id,$value){
        if(IS_POST){
        $data['id']=$id;
        $data['type'] =2;
        $data['tag2'] = $value;

        $res = M("tag")->add($data);
        if($res){
            $this->ajaxReturn('ok');
        }else{
            $this->ajaxReturn();
        }
        }else{
            echo("错误的访问方式");
            $this->ajaxReturn();
        }
    }
    public function add_right($id,$tag1,$tag2,$tag3){
        if(IS_POST){
        $data['id']=$id;
        $data['tag1'] =$tag1;
        $data['tag2'] =$tag2;
        $data['tag3'] =$tag3;
        
        
        $name = session('ins_name');
        $cpname =session('cp_name');

        $res = M("right")->add($data);
        if($res){
            if($name){
                $data_ins['name']=$name;
                $data_ins['cpname']=$cpname;
                $data_ins['state'] =0;
                $data_ins['id'] =$id;
                $res_2 = M("insurance")->add($data_ins);
                if($res_2){
                    $this->ajaxReturn('ok');
                }else{
                    $this->ajaxReturn();
                }
            }
        }else{
            $this->ajaxReturn();
        }

        }else{
            echo("错误的访问方式");
            $this->ajaxReturn();
        }
        
    }



}