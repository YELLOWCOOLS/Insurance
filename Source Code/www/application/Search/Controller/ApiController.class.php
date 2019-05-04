<?php
namespace Search\Controller;

use Think\Controller;

class ApiController extends Controller
{   
 	public function get_rate(){
 		$data['age'] = I('age');
 		$data['type'] = I('type');
 		$data['year'] = I('year');
 		$data['sex'] = I('sex');

 		$result = M('rate')->where($data)->find();
 		// echo(M('rate')->_sql());
 		if($result){
 			$this->ajaxReturn($result['rate']);
 		}else{
 			$this->ajaxReturn(0);
 		}
        return 0;
    }

    public function get_min($data){
    
    	$curl = curl_init();
    	curl_setopt($curl, CURLOPT_URL, "http://127.0.0.1:8000/ins_qa/get_min"); 
    	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);  
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
        curl_setopt($curl, CURLOPT_POST, 1);
        $data =  json_encode($data);  
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        $output = curl_exec($curl);
        return(json_decode($output));         
    }
    public function get_answer($question="恶性肿瘤是个啥？",$id = 10){

    	$curl = curl_init();
    	curl_setopt($curl, CURLOPT_URL, "http://127.0.0.1:8000/ins_qa/?ques=".urlencode($question)."&id=".$id); 
    	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);  
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        $output = curl_exec($curl);
        return($output);   
    }
    public function get_answer2($question = "定期人寿保险支付时会发生什么",$id = 10){
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, "http://localhost:8000/qa2/?ques=".urlencode($question)."&id=".$id); 
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);  
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        $output = curl_exec($curl);
        return($output);   
    }
}