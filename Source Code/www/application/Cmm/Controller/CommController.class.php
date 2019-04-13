<?php
namespace Cmm\Controller;

use Cmm\Controller\BaseController;

class CommController extends BaseController
{
    public function insview($id){
        $exps=M("ill_db.detailexp")->where(['id'=>$id])->order("type")->select();
        $this->assign("exps",json_encode($exps));
        $cp=M("ill_db.insurance")->where(['id'=>$id])->find();
         $this->assign("cp",$cp);
        $this->display();
    }
    public function index()
    {
        
        $this->display();
    }
     public function dosearch(){
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
    public function search(){
        $this->display();
    }
    public function result(){

    	$sex=I("fsex");

        // $sex="女";
    	$this->assign("sex",$sex);
        if($sex=="女"){
            $this->assign("head",0);
            $sexx=0;
        }else{
            $this->assign("head",1);
            $sexx=1;
        }
    	// $fang=I("fang");
    	// $che=I("che");
    	$income=I("fincome");
        // $income=50;
        $this->assign("income",$income);
    	$birth=I("fage")+1;

        // $time=18;
    	$shebao=I("fshebao");
        // $shebao=false;


    	if($birth<40){
    		$shou=20*$income;
    	}else if($birth<45){
    		$shou=15*$income;
    	}else if($birth<50){
    		$shou=10*$income;
    	}else if($birth>50){
    		$shou=5*$income;
    	}
    	
    	$this->assign("shou",$shou);

    	if($shebao){
    		$zhongji=30+5*$income;
    	}else{
    		$zhongji=40+6*$income;
    	}
    	$this->assign("zhongji",$zhongji);
    	
    	

    	$acci=$income*10;
    	$this->assign("acci",$acci);

    	// $num=M("ill_db.diepe")->where(['id' => $birth])->find();
    	// $numofdath=$num["num"];
        $numofdath = 10;
        $this->assign("num",$numofdath);
    	$ind="null";
    	if($sex=="女"){
    			$ind="%女性%";
    	}else{
    		$ind="%男性%";
    	}
       
    	if($birth<16){
    		$ind="%少儿%";
    	}
        $tm="Select *,((avg_age-".$birth.")*(avg_age-".$birth.")+(avg_sex-".$sexx.")*(avg_sex-".$sexx.")*10000) as score FROM (ill_db.zy_insu_record INNER join ill_db.zy_tag_count ON ill_db.zy_insu_record.id=ill_db.zy_tag_count.id) INNER join ill_db.zy_insurance on ill_db.zy_insurance.id=ill_db.zy_insu_record.id order by score  limit 1;";

    
    	$tmp="Select *,((case when tag1 like '%主险%' then 20 else 0 end)+IFNULL(numoftag1*5,0)+IFNULL(numoftag2*5,0)+(numofill*0.18)+(case when tag1 like '".$ind."' then 40 else 0 end)) as score FROM (ill_db.zy_intime INNER join ill_db.zy_tag_count ON ill_db.zy_intime.id=ill_db.zy_tag_count.id)Inner join ill_db.zy_insurance on ill_db.zy_insurance.id=ill_db.zy_intime.id  where IFNULL(start,0)< ".$birth." AND IFNULL(end,105)>".$birth." order by score desc  limit 4;";

        $tins=M("insurance")->query($tm);
    
        $this->assign("tins",$tins);

    	$insus=M("insurance")->query($tmp);

    	$this->assign("insus",$insus);
        $this->display();

    }
  
}