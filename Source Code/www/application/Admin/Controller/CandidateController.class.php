<?php
namespace Admin\Controller;

use Admin\Controller\BaseController;

class CandidateController extends BaseController
{   
  
    public function knowledge(){
        $this->display();
    }
    public function statistics(){
       $stas= M("ill_db.static")->select();
        $this->assign("stas",$stas);
        $this->display();
    }
    public function deletein($id){
       
        $rest=M("insurance")
                ->where(array('id'=>$id))
                ->delete();
        $rest2=M("illlist")
                ->where(array('id'=>$id))
                ->delete();
        if($rest&&$rest2){
             $this->ajaxReturn('ok');
        }
    }

    public function search(){
        $cpname=I('cpname');
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
    }
    public function insuranview($id){
        $explist=M("detailexp")
                ->where(array('id'=>$id))
                ->order('num')
                ->select();
        $this->assign("id",$id);
        $this->assign("illde",$explist);
         $this->display();


    }
    public function updatede($id,$value){

  
        if(IS_POST){
        $date['exp']=$value;
        $res= M("detailexp")->where(array('num'=>$id))->save($date);
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
    public function indexview(){
        $this->assign('active_menu','candidate');
        $this->display();
    }
    public function index()
    {   
        $id=I("id");
        $illlist=M("illlist")
            ->where(array('id'=>$id))
            ->select();
        $cp=M("insurance")
            ->where(array('id'=>$id))
            ->find();
         
        $this->assign('illlist',$illlist);
        $this->assign('cp',$cp);
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
    public function deleteill($num){
       
        $rest=M("illlist")
                ->where(array('num'=>$num))
                ->delete();
        if($rest){
             $this->ajaxReturn('ok');
        }
    }
     public function deletede($num){
      
        $rest=M("detailexp")
                ->where(array('num'=>$num))
                ->delete();
        if($rest){
             $this->ajaxReturn('ok');
        }
    }
   
   
        public function ajaxRemoveCandidate(){
            $openid = $_POST['openid'];
            M('User')->where(array('openid'=>$openid))->delete();
            $this->ajaxReturn('ok');
        }
}