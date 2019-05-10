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
    public function get_entity_api($question ="打球的李娜和唱歌的李娜不是同一个人"){

        $header = array(
            'Host: 218.193.131.250:20013',
            'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:66.0) Gecko/20100101 Firefox/66.0l'.
            'Accept: application/json, text/javascript, */*; q=0.01',
            'Accept-Language: zh-CN,zh;q=0.8,zh-TW;q=0.7,zh-HK;q=0.5,en-US;q=0.3,en;q=0.2',
            'Accept-Encoding: gzip, deflate',
            'Referer: http://shuyantech.com/qa',
            'Origin: http://shuyantech.com',
            'Connection: keep-alive'
        );

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, "http://shuyantech.com/api/entitylinking/cutsegment?q=".$question); 
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($curl);
        $json = json_decode($output,true);
        $results = [];
        foreach($json["entities"] as $val){
            array_push($results,$val[1]);
        };
        // dump ($results);
        $this->ajaxReturn($results);
    }
    public function get_entity_api_return($question ="打球的李娜和唱歌的李娜不是同一个人"){

        $header = array(
            'Host: 218.193.131.250:20013',
            'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:66.0) Gecko/20100101 Firefox/66.0l'.
            'Accept: application/json, text/javascript, */*; q=0.01',
            'Accept-Language: zh-CN,zh;q=0.8,zh-TW;q=0.7,zh-HK;q=0.5,en-US;q=0.3,en;q=0.2',
            'Accept-Encoding: gzip, deflate',
            'Referer: http://shuyantech.com/qa',
            'Origin: http://shuyantech.com',
            'Connection: keep-alive'
        );

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, "http://shuyantech.com/api/entitylinking/cutsegment?q=".$question); 
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($curl);
        $json = json_decode($output,true);
        $results = [];
        foreach($json["entities"] as $val){
            array_push($results,$val[1]);
        };
       
        return($results);
    }
    public function get_answer3($question = "养猪能购买保险吗"){
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, "http://localhost:8000/ins_qa/get_questiong?ques=".urlencode($question)); 
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);  
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        $output = curl_exec($curl);
        $data["quest"]= $output;
        // echo($output);
        $res = M("qa")->where($data)->find();

        if($res){
            $output =$res["ans"];
        }else{
            $output = "建议您换个说法";
        }
        // echo(M("qa")->getLastSql());
        // echo($output);
        $this->ajaxReturn($output);   
    }
      // return('{"answer": "中山北一路校区：上海市虹口区中山北一路369号, 主校区：上海市杨浦区国定路777号, 昆山路校区：上海市虹口区昆山路146号", "score": 2.283775008640216, "others": [[2.283775008640216, "上海财经大学", "地址", "中山北一路校区：上海市虹口区中山北一路369号"], [2.2742655953745694, "上海财经大学", "地址", "主校区：上海市杨浦区国定路777号"], [2.2713841879909866, "上海财经大学", "地址", "昆山路校区：上海市虹口区昆山路146号"], [0.39860750305934534, "上海财经大学", "简称", "上海财大、上财、财大"], [0.23101715884379692, "上海财经大学", "类型", "财经"]], "entity": "上海财经大学"}'); 
    public function get_answer4($question){
       
        $header = array(
            'Host: 218.193.131.250:20013',
            'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:66.0) Gecko/20100101 Firefox/66.0l'.
            'Accept: application/json, text/javascript, */*; q=0.01',
            'Accept-Language: zh-CN,zh;q=0.8,zh-TW;q=0.7,zh-HK;q=0.5,en-US;q=0.3,en;q=0.2',
            'Accept-Encoding: gzip, deflate',
            'Referer: http://shuyantech.com/qa',
            'Origin: http://shuyantech.com',
            'Connection: keep-alive'
        );
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, "http://218.193.131.250:20013/?p=".$question); 
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

        $output = curl_exec($curl);
        // echo($output);
        return($output);
        // return('{"answer": "张学良" , "score": 0.20673009032196, "others": ["少帅<<张学良>>的最爱妻子是谁 于凤至和赵一荻谁漂亮_尚之潮张学良一生之中有2个最重要的女人,一个是原配夫人于凤至,一个是赵四小姐,大家都说赵四小姐是张学良的最", "赵一荻是谁?<<张学良>>第二任妻子赵一荻生平简介赵一荻(1912—2000),张学良第二任妻子,人称赵四小姐。赵一荻陪伴张学良72...《红楼梦》最幸福的一对夫妻——贾代善和贾母 贾"], "entity": "赵一（河北小童星）"}');
    }
    public function get_entity($entity = "复旦大学"){

        $header = array(
            'Host: 218.193.131.250:20013',
            'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:66.0) Gecko/20100101 Firefox/66.0l'.
            'Accept: application/json, text/javascript, */*; q=0.01',
            'Accept-Language: zh-CN,zh;q=0.8,zh-TW;q=0.7,zh-HK;q=0.5,en-US;q=0.3,en;q=0.2',
            'Accept-Encoding: gzip, deflate',
            'Referer: http://shuyantech.com/qa',
            'Origin: http://shuyantech.com',
            'Connection: keep-alive'
        );

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, "http://shuyantech.com/api/cndbpedia/avpair?q=".$entity."&apikey=41cc8f719b4be425b0debef2a983526f"); 
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($curl);
        // echo($output);g
        $this->ajaxReturn($output);

       // return('{"status": "ok", "ret": [["中文名", "复旦大学"], ["英文名称", "Fudan University"], ["简称", "复旦·FUDAN"], ["创办时间", "1905年06月29日"], ["类别", "公立大学"], ["学校类型", "综合"], ["属性", "985工程（1999年）"], ["属性", "211工程（1994年）"], ["属性", "九校联盟（2009年），环太平洋大学联盟"], ["属性", "双一流（世界一流大学建设高校）"], ["属性", "111计划（2006年）"], ["所属地区", "中国·上海"], ["现任校长", "许宁生"], ["知名校友", "李岚清"], ["知名校友", "王沪宁"], ["知名校友", "韩正"], ["知名校友", "朱民"], ["知名校友", "李源潮"], ["知名校友", "竺可桢"], ["知名校友", "于右任"], ["知名校友", "邵力子"], ["主管部门", "中华人民共和国教育部"], ["硕士点", "一级学科41个、专业学位27个"], ["博士点", "一级学科35个、专业学位2个"], ["博士后流动站", "35 个"], ["校训", "博学而笃志"], ["校训", "切问而近思"], ["校歌", "复旦大学校歌"], ["专职院士", "中国科学院院士 21人"], ["专职院士", "中国工程院院士 5人"], ["主要院系", "中国语言文学系"], ["主要院系", "历史学系"], ["主要院系", "上海医学院"], ["主要院系", "外国语言文学学院"], ["主要院系", "化学系"], ["主要院系", "物理学系"], ["主要院系", "经济学院"], ["主要院系", "管理学院"], ["主要院系", "新闻学院"], ["主要院系", "信息科学与工程学院"], ["国家重点学科", "一级学科 11 个，二级学科 19个"], ["学校地址", "上海市杨浦区邯郸路220号"], ["学校代码", "10246"], ["主要奖项", "全国优秀博士论文55篇（截至2012年）"], ["校庆日", "5月27日"], ["学校官网", "http://www.fudan.edu.cn"], ["世界排名", "前200名（2018年）"], ["CATEGORY_ZH", "中国高校"], ["CATEGORY_ZH", "公办高校"], ["CATEGORY_ZH", "研究生院高校"], ["CATEGORY_ZH", "211高校"], ["CATEGORY_ZH", "985高校"], ["CATEGORY_ZH", "专科高校"], ["CATEGORY_ZH", "综合类高校"], ["CATEGORY_ZH", "教育部隶属高校"], ["CATEGORY_ZH", "上海高校"], ["CATEGORY_ZH", "本科高校"], ["CATEGORY_ZH", "大学"], ["CATEGORY_ZH", "教育部隶属高校(60801)"], ["CATEGORY_ZH", "学校"], ["DESC", "复旦大学（Fudan University），简称“复旦”，位于中国上海，由中华人民共和国教育部直属，中央直管副部级建制，国家双一流（A类）、985工程、211工程建设高校，九校联盟、环太平洋大学联盟、中国大学校长联谊会、东亚研究型大学协会、新工科教育国际联盟的重要成员，入选珠峰计划、111计划、2011计划、卓越医生教育培养计划、卓越法律人才教育培养计划、国家建设高水平大学公派研究生项目，是一所世界知名、国内顶尖的全国重点大学。\n复旦大学校名取自《尚书大传》之“日月光华，旦复旦兮”，始创于1905年，原名复旦公学，1917年定名为复旦大学，是中国人自主创办的第一所高等院校。上海医科大学前身是1927年创办的国立第四中山大学医学院。2000年，复旦大学与上海医科大学合并。学校拥有哲学、经济学、法学、教育学、文学、历史学、理学、工学、医学、管理学、艺术学等11个学科门类。\n截至2017年12月31日，复旦大学有直属院（系）32个，附属医院17家（其中4家筹建）。学校设有本科专业74个，拥有一级学科博士学位授权点37个，一级学科硕士学位授权点43个，博士专业学位授权点2个，硕士专业学位授权点27个，博士后科研流动站35个。在校普通本、专科生13361人，研究生19903人，留学生3486人。在校教学科研人员2948人。学校有四个校区，形成“一体两翼”的校园格局：即以邯郸校区、江湾新校区为一体，以枫林校区、张江校区为两翼。占地面积244.99万平方米，校舍建筑面积198.22万平方米。"]]}"');

    }

    public function get_entity_return($entity = "复旦大学"){

        $header = array(
            'Host: 218.193.131.250:20013',
            'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:66.0) Gecko/20100101 Firefox/66.0l'.
            'Accept: application/json, text/javascript, */*; q=0.01',
            'Accept-Language: zh-CN,zh;q=0.8,zh-TW;q=0.7,zh-HK;q=0.5,en-US;q=0.3,en;q=0.2',
            'Accept-Encoding: gzip, deflate',
            'Referer: http://shuyantech.com/qa',
            'Origin: http://shuyantech.com',
            'Connection: keep-alive'
        );

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, "http://shuyantech.com/api/cndbpedia/avpair?q=".$entity."&apikey=41cc8f719b4be425b0debef2a983526f"); 
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($curl);
        // echo($output);g
        return($output);

       // return('{"status": "ok", "ret": [["中文名", "复旦大学"], ["英文名称", "Fudan University"], ["简称", "复旦·FUDAN"], ["创办时间", "1905年06月29日"], ["类别", "公立大学"], ["学校类型", "综合"], ["属性", "985工程（1999年）"], ["属性", "211工程（1994年）"], ["属性", "九校联盟（2009年），环太平洋大学联盟"], ["属性", "双一流（世界一流大学建设高校）"], ["属性", "111计划（2006年）"], ["所属地区", "中国·上海"], ["现任校长", "许宁生"], ["知名校友", "李岚清"], ["知名校友", "王沪宁"], ["知名校友", "韩正"], ["知名校友", "朱民"], ["知名校友", "李源潮"], ["知名校友", "竺可桢"], ["知名校友", "于右任"], ["知名校友", "邵力子"], ["主管部门", "中华人民共和国教育部"], ["硕士点", "一级学科41个、专业学位27个"], ["博士点", "一级学科35个、专业学位2个"], ["博士后流动站", "35 个"], ["校训", "博学而笃志"], ["校训", "切问而近思"], ["校歌", "复旦大学校歌"], ["专职院士", "中国科学院院士 21人"], ["专职院士", "中国工程院院士 5人"], ["主要院系", "中国语言文学系"], ["主要院系", "历史学系"], ["主要院系", "上海医学院"], ["主要院系", "外国语言文学学院"], ["主要院系", "化学系"], ["主要院系", "物理学系"], ["主要院系", "经济学院"], ["主要院系", "管理学院"], ["主要院系", "新闻学院"], ["主要院系", "信息科学与工程学院"], ["国家重点学科", "一级学科 11 个，二级学科 19个"], ["学校地址", "上海市杨浦区邯郸路220号"], ["学校代码", "10246"], ["主要奖项", "全国优秀博士论文55篇（截至2012年）"], ["校庆日", "5月27日"], ["学校官网", "http://www.fudan.edu.cn"], ["世界排名", "前200名（2018年）"], ["CATEGORY_ZH", "中国高校"], ["CATEGORY_ZH", "公办高校"], ["CATEGORY_ZH", "研究生院高校"], ["CATEGORY_ZH", "211高校"], ["CATEGORY_ZH", "985高校"], ["CATEGORY_ZH", "专科高校"], ["CATEGORY_ZH", "综合类高校"], ["CATEGORY_ZH", "教育部隶属高校"], ["CATEGORY_ZH", "上海高校"], ["CATEGORY_ZH", "本科高校"], ["CATEGORY_ZH", "大学"], ["CATEGORY_ZH", "教育部隶属高校(60801)"], ["CATEGORY_ZH", "学校"], ["DESC", "复旦大学（Fudan University），简称“复旦”，位于中国上海，由中华人民共和国教育部直属，中央直管副部级建制，国家双一流（A类）、985工程、211工程建设高校，九校联盟、环太平洋大学联盟、中国大学校长联谊会、东亚研究型大学协会、新工科教育国际联盟的重要成员，入选珠峰计划、111计划、2011计划、卓越医生教育培养计划、卓越法律人才教育培养计划、国家建设高水平大学公派研究生项目，是一所世界知名、国内顶尖的全国重点大学。\n复旦大学校名取自《尚书大传》之“日月光华，旦复旦兮”，始创于1905年，原名复旦公学，1917年定名为复旦大学，是中国人自主创办的第一所高等院校。上海医科大学前身是1927年创办的国立第四中山大学医学院。2000年，复旦大学与上海医科大学合并。学校拥有哲学、经济学、法学、教育学、文学、历史学、理学、工学、医学、管理学、艺术学等11个学科门类。\n截至2017年12月31日，复旦大学有直属院（系）32个，附属医院17家（其中4家筹建）。学校设有本科专业74个，拥有一级学科博士学位授权点37个，一级学科硕士学位授权点43个，博士专业学位授权点2个，硕士专业学位授权点27个，博士后科研流动站35个。在校普通本、专科生13361人，研究生19903人，留学生3486人。在校教学科研人员2948人。学校有四个校区，形成“一体两翼”的校园格局：即以邯郸校区、江湾新校区为一体，以枫林校区、张江校区为两翼。占地面积244.99万平方米，校舍建筑面积198.22万平方米。"]]}"');

    }

}