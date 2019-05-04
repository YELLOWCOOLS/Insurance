<?php
namespace Search\Controller;

use Think\Controller;

class SearchController extends Controller
{   public function fulluser_detail(){

    }
    public function qa(){
        $id =session('id');

        if($id){
            $data['user_id']=$id;
            $history =$this-> tt_random_data(3,'user_history',$data);

            $res = [];

            foreach ($history as $key => $value) {
                $con['id'] = $value['ins_id']; 
                $re = M('insurance')->where($con)->find();
                $ans = M('detailexp')->where($con)->select();
                if(count($ans)>=10){
                array_push($res,$re);
                }
            }

            $this->assign('ins',$res);
            $this->display();
        }else{
            $this->success('请登录!','/search/search/login');
        }
        
    }
    public function get_answer2(){
        $A =A('api');
        $id = I('id');
        $question = I('question');
        
        $res = $A->get_answer($question,$id);
        if($res ==""){
        $question = I('question');
        $res = $A->get_answer2($question);
        $this->ajaxReturn($res);
        }else{
         $this->ajaxReturn($res);
        }
        
    }
    public function get_answer(){
        
    }
    public function illshow($id){
         $illlist=M("illlist")->query("Select * FROM zy_illlist group by illexp having id =".$id);
         $cp=M("insurance")
            ->where(array('id'=>$id))
            ->find();
        $this->assign('illlist',$illlist);
        $this->assign('cp',$cp);
        $this->display();
    }
    function tt_random_data($num,$table,$where=[])
    { 
    $pk = M($table)->getPK();//获取主键
    $countcus = M($table)->where($where)->field($pk)->select();//查询数据
    $con = '';
    $qu = '';
    foreach($countcus as $v=>$val){
        $con.= $val[$pk].'|';
    }
    $array = explode("|",$con);
    $countnum = count($array)-1;
    
    for($i = 0;$i <= $num;$i++){
        $sunum = mt_rand(0,$countnum);
        $qu.= $array[$sunum].',';
    }

    $whe[$pk] = array('in',$qu);
    $list = M($table)->where($whe)->select();
    return $list;

    }

    public function get_user_tuijian(){
        $res =[];
        $data['id'] = session('id');
        
        $A =A('api');
        $user = M('user_detail')->where($data)->find();
        $da =array((int)$user['sex'],(int)$user['year'],(int)$user['income'],(int)$user['marry'],(int)$user['health'],(int)$user['nation'],(int)$user['faith'],(int)$user['education']);
        
        $com_user_id =[];
        foreach ($A->get_min($da) as $key => $value) {
            array_push($com_user_id,(int)$value);
        }

        $where['user_id'] = array('in',$com_user_id);
        $res1 =$this->tt_random_data(1,"user_history",$where);
        array_push($res,(int)$res1[0]['ins_id']);
        array_push($res,(int)$res1[1]['ins_id']);
        
        

        $interest = M('user_interest')->where($data)->select();
        $int = "(";
        foreach ($interest as $key => $value) {
            $int = $int.$value['right'].",";
        }
        $int =substr($int,0,strlen($int)-1); 
        $int = $int.")";
    
        $where1['tag1'] = ['in',$int];
        $where2['tag2'] = ['in',$int];       
        $where3['tag3'] = ['in',$int];
        $where_main['_complex'] =array(
            $where1,$where2,$where3,'_logic'=>'or');

        $res1 =$this->tt_random_data(1,"right",$where_main);
        array_push($res,(int)$res1[0]['id']);
        $tags =[];
        foreach ($res as $key => $value) {
            $tag = M('tag')->query("Select ins.name,ins.id,tag2 from zy_insurance ins,(
        SELECT
            id,
            tag2
        FROM
            zy_tag
        GROUP BY
            id,
            tag2
        
   ) c
   where ins.id = ".$value." and c.id =".$value);
            if(count($tag)==0){
                $tag = $this->get_random(1)[0];
            }
            array_push($tags,$tag);
        }
        return $tags;
    }
    public function get_random($num){

        $ads = M('insurance')->query('Select * FROM (
select distinct id from (zy_tag) ) as a
order by rand() limit '.$num);

        $tags = array();
        
       
        foreach($ads as $ad){
            $tag = M('tag')->query("Select ins.name,ins.id,tag2 from zy_insurance ins,(
        SELECT
            id,
            tag2
        FROM
            zy_tag
        GROUP BY
            id,
            tag2
        
   ) c
   where ins.id = ".$ad['id']." and c.id =".$ad['id']);
        array_push($tags,$tag);
        
        }

        return $tags;
    }
    public function index()
    {
        $uid = session('id');
        if($uid){
            $data['user_id'] = $uid;
            $user = M('user')->where($data)->find();
            session('uname',$user['email']);
            $this->assign('flag',1);
            $this ->assign('uid',$uid);
            $tags = $this->get_user_tuijian();
        }else{
            $this->assign('flag',0);
            $tags = $this->get_random(3);
        }
        $this -> assign("tags",$tags);
        $this->display();
    }
    function random($length=10, $type='string', $convert=0){
    $config = array(
        'number'=>'1234567890',
        'letter'=>'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',
        'string'=>'abcdefghjkmnpqrstuvwxyzABCDEFGHJKMNPQRSTUVWXYZ23456789',
        'all'=>'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890'
    );
 
    if(!isset($config[$type])) $type = 'string';
    $string = $config[$type];
 
    $code = '';
    $strlen = strlen($string) -1;
    for($i = 0; $i < $length; $i++){
        $code .= $string{mt_rand(0, $strlen)};
    }
    if(!empty($convert)){
        $code = ($convert > 0)? strtoupper($code) : strtolower($code);
    }
    return $code;
}
    public function insshow($id)
    {   
        $uid = session('id');
        if($uid){
            $data2['user_id'] = $uid;
            $data2['ins_id'] = $id;
            $data2['time'] = 0;
            $data2['is_register'] = 1;
            M('user_history')->add($data2);
        }else{
            $visitor = session('visitor');
            
            if(!$visitor){
                $visitor = $this->random();
                session('visitor',$visitor);
            }
            $data3['user_id'] = $visitor;
            $data3['ins_id'] = $id;
            $data3['time'] = 0;
            $data3['is_register'] = 0;
            M('user_history')->add($data3);
            echo($visitor);
        }

        $tag = M('tag')->query("Select tag2 from zy_insurance ins,(
        SELECT
            id,
            tag2
        FROM
            zy_tag
        GROUP BY
            id,
            tag2
        
    ) c

   where ins.id = ".$id." and c.id =".$id);
        $this->assign('id',$id);
        $name  = M('insurance')->where($data)->find();
        $this->assign('name',$name['name']);
        $tag1 = M('ill_count')->where($data)->find();
        $this->assign("ill",$tag1);
        $data['id']  = $id;
        $right = M('right')->where($data)->find();
        $this ->assign ('right',$right);
        $this ->assign('tags',$tag);
    	$this->display();
    }
    public function search($exp = "保险",$page = 0,$inscpname="")
    {   

        $start =$page*10;
        
       
        $datas = array();
        if($inscpname!=""){
        $ins_num = M('insurance')->execute("Select ins.* from zy_insurance ins inner join zy_right tg where name like '%".$exp."%' AND tg.id = ins.id AND ins.cpname ='".$inscpname."'");
        $ins = M('insurance')->query("select ins.* from zy_insurance ins inner join zy_right tg where  name  like '%".$exp."%' AND ins.id = tg.id AND ins.cpname = '".$inscpname."' limit " .$start.",10 ");
        }else{
        $ins_num = M('insurance')->execute("Select ins.* from zy_insurance ins inner join zy_right tg where name like '%".$exp."%' AND tg.id = ins.id");
        $ins = M('insurance')->query("select ins.* from zy_insurance ins inner join zy_right tg where  name  like '%".$exp."%' AND ins.id = tg.id limit " .$start.",10 ");
        }
        foreach ($ins as   $in) {

            $data =array();
            $id['id']  =$in['id'];
            $right = M('right')->where($id)->find();
            $tag = M('tag')->group('id,tag2')->where($id)->select();
            $tag1 = M('ill_count')->where($id)->find();

            $data['ill_count']=$tag1;
            $data['insurance']=$in;
            $data['right'] =$right;
            $data['tag'] =$tag;
            $data['id']=$id['id'];

            array_push($datas,$data);
        }

        $this->assign("datas",$datas);
        $this->assign ('num',$ins_num);
        $cpname = M('insurance')->query('Select cpname from zy_insurance group by cpname order by cpname');
        $this->assign('cpname',$cpname);

        $this->assign('exp',$exp);
        $this->assign('now_page',$page);
        $this->assign('all_page',floor($ins_num/10));
        $this->assign('ins',$inscpname);
    	$this->display();
    }
    public function register(){
        $right = M('right')->query("Select distinct tag1 from zy_right");
        $this->assign('right',$right);
        $this->assign("flag",true);
        $this->assign("warn",true);
        $this->display();
    }
    public function do_register(){
        $data['email'] = I("email");
        $data['password'] = I("password");
        $res = M('user')->add($data);
        if($res){
            $user = M('user')->where($data)->find();
            session("id",$user['user_id']);
            $this->ajaxReturn('ok');
        }
    
    }
    public function login(){

        $this->assign("flag",true);
        $this->assign("warn",true);
        $this->display();

    }
    public function do_login(){
        $data['email'] = I('email');
        $data['password'] = I("password");
      
        $user = M('user')->where($data)->find();
        
        if($user){
      
            $this->assign("flag",0);
            session('id',$user['user_id']);
            session('uname',$user['email']);
            $this->success('登录成功!','/search');
            
        }else{
            $this->assign("flag",0);
            $this->assign('warn','账号或密码错误');
            $this->display('login');
        }
        
    }
    public function log_out(){
        session(null);
        $this->assign('warn',true);
        $this->display('index');

    }
    public function info_detail(){
        $data['id'] =session('id');
        $data['sex'] = I('sex');
        $data['age'] = I('age');
        $data['income'] =I('income');
        $data['marry'] = I('marry');
        $data['health'] =I('health');
        
        $res = M('user_detail')->save($data);
        if($res){
            $this->ajaxReturn('ok');
        }
    }
    public function interest(){
        $data['id'] =session('id');
        $data['right'] = I('right');
        M("user_interest")->add($data);
        $this->ajaxReturn('ok');
    }
}