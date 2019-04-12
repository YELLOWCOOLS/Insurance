<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="description" content="微小保">
  <meta name="keywords" content="微小保">
  <title>w微小保-您的私人保险顾问</title>
  <!-- =============== VENDOR STYLES ===============-->
  <!-- FONT AWESOME-->
  <link rel="alternate icon" type="image/png" href="http://amazeui.org/i/favicon.png">
  <link rel="stylesheet" href="/Public/Admin/assets/css/app.css">
  
  <link rel="stylesheet" href="/Public/Search/css/insshow.css">

  <link rel="stylesheet" href="/Public/Search/css/amui/assets/css/amazeui.css">
  <link rel="stylesheet" href="/Public/Search/css/layout.css">
</head>

<body>
  <header class="am-topbar am-topbar-fixed-top">
    <div class="am-container">
      <h1 class="am-topbar-brand">
        <a class="am-icon-btn am-secondary am-icon-shield"></a>
        <a href="#">微小保</a>
      </h1>
      <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-secondary am-show-sm-only" data-am-collapse="{target: '#collapse-head'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>
      <div class="am-collapse am-topbar-collapse">
        <ul class="am-nav am-nav-pills am-topbar-nav">
          <li><a href="/Search" id='home'>首页</a></li>
          <li class="am-dropdown" data-am-dropdown="">
            <a class="am-dropdown-toggle" data-am-dropdown-toggle="" href="javascript:;">
              产品列表</span>
            </a>
            <ul class="am-dropdown-content">
              <li><a href="#">儿童保险 </a></li>
              <li><a href="#">成人保险 </a></li>
              <li><a href="#">中老年保险 </a></li>
            </ul>
          <li class="am-dropdown" data-am-dropdown="">
            <a class="am-dropdown-toggle" data-am-dropdown-toggle="" href="javascript:;">
              功能列表 </span>
            </a>
            <ul class="am-dropdown-content">
              <li><a href="/search/search/qa">QA系统</a></li>
              <li><a href="/admin2/manage/login">管理系统</a></li>
            </ul>
          </li>
          </li>
        </ul>
        <?php if(empty($_SESSION['id']) == True): ?><div class="am-topbar-right">
            <a href="/search/search/login">
              <span id='login' class="am-btn  am-topbar-btn "> 登录 </span>
            </a>
            <a href="/search/search/register">
              <span id='register' class="am-btn  am-topbar-btn " style="border-left: solid;border-left-color: currentcolor;border-left-width: medium;border-left-width: 1px;border-left-color: gray">注册</span> </span>
            </a>
          </div>
          <?php else: ?>
          <div class="am-topbar-right">
            <ul class="am-nav am-nav-pills am-topbar-nav am-topbar-right admin-header-list tpl-header-list">
              <li class="am-dropdown" data-am-dropdown data-am-dropdown-toggle>
                <a class="am-dropdown-toggle tpl-header-list-link" href="javascript:;">
                  <span class="tpl-header-list-user-nick"><?php echo (session('uname')); ?></span><span class="tpl-header-list-user-ico"> </span>
                </a>
                <ul class="am-dropdown-content">
                  <li><a href="#"><span class="am-icon-bell-o"></span> 资料</a></li>
                  <li><a href="#"><span class="am-icon-cog"></span> 设置</a></li>
                  <li><a href="/search/search/log_out"><span class="am-icon-power-off"></span> 退出</a></li>
                </ul>
              </li>
            </ul>
          </div><?php endif; ?>
        <form class="am-topbar-form am-topbar-right am-form-inline" role="search">
          <div class="am-input-group">
            <input type="text" id="search_ba" class="am-form-field" placeholder="保险" value="<?php echo ($exp); ?>">
            <span class="am-input-group-btn">
              <button class="am-btn search_btn am-btn-default" class="" type="button">搜索</button>
            </span>
          </div>
        </form>
      </div>
    </div>
  </header>
  
  <div class='am-container'>
    <div class='am-g'>
      <ol class="am-breadcrumb">
        <li><a href="#" class="am-icon-home">首页</a></li>
        <li><a href="#">分类1</a></li>
        <li class="am-active">分类2</li>
        <li><?php echo ($name); ?></li>
      </ol>
    </div>
    <div class='am-g'>
      <div class="am-u-md-12 ins_name">
        <?php echo ($name); ?>
      </div>
    </div>
    <div class='am-g ins_tags'>
      <div class="am-u-md-3 ins_tag">
        <span class="am-badge am-badge-secondary am-radius">
          <span class="am-icon-play"></span>
          <?php echo ($ill["numill"]); ?>种疾病保障
        </span>
      </div>
      <div class="am-u-md-3 ins_tag ">
        <span class="am-badge am-badge-secondary am-radius">
          <span class="am-icon-play"></span>
          <?php echo ($right["tag1"]); ?>
        </span>
      </div>
      <div class="am-u-md-3 ins_tag">
        <span class="am-badge am-badge-secondary am-radius">
          <span class="am-icon-play"></span>
          <?php echo ($right["tag2"]); ?>
        </span>
      </div>
      <div class="am-u-md-3 ins_tag">
        <span class="am-badge am-badge-secondary am-radius">
          <span class="am-icon-play"></span>
          <?php echo ($right["tag3"]); ?>
        </span>
      </div>
    </div>
    <div class='detail'>
      <div class='am-g .am-fl'>
        <div class='am-u-md-3 time_text'>
          投保人出生日期
        </div>
        <div class='am-u-md-3 time_chose'>
          <input type="text" placeholder="" value="1999-01-01" data-am-datepicker readonly required />
        </div>
        <div class='am-u-md-3 '>
        </div>
      </div>
      <div class='am-g'>
        <div class='am-u-md-3 sex'>
          投保人性别
        </div>
        <div class='am-u-md-9'>
          <label class="am-radio-inline">
            <input type="radio" name="radio_sex_tou" value="" data-am-ucheck checked>
            男
          </label>
          <label class="am-radio-inline">
            <input type="radio" name="radio_sex_tou" value="" data-am-ucheck>
            女
          </label>
        </div>
      </div>
      <hr data-am-widget="divider" style="" class="am-divider am-divider-default" />
      <div class='am-g .am-fl'>
        <div class='am-u-md-3 time_text'>
          被保人出生日期
        </div>
        <div class='am-u-md-3 time_chose'>
          <input type="text" id="age" placeholder="" value="1999-01-01" data-am-datepicker readonly required />
        </div>
        <div class='am-u-md-3 '>
        </div>
      </div>
      <div class='am-g'>
        <div class='am-u-md-3 sex'>
          被保险人性别
        </div>
        <div class='am-u-md-9'>
          <label class="am-radio-inline">
            <input type="radio" name="sex" value="1" data-am-ucheck checked>
            男
          </label>
          <label class="am-radio-inline">
            <input type="radio" name="sex" value="2" data-am-ucheck>
            女
          </label>
        </div>
      </div>
      <div class='am-g'>
        <div class='am-u-md-3'>
          承保职业
        </div>
        <div class='am-u-md-9'>
          查询职业类别
        </div>
      </div>
      <hr data-am-widget="divider" style="" class="am-divider am-divider-default" />
      <div class='am-g'>
        <div class='am-u-md-3'>
          基本保额
        </div>
        <div class='am-u-md-9'>
          <label class="am-radio-inline">
            <input type="radio" name="money" value="1" data-am-ucheck checked> 10万元
          </label>
          <label class="am-radio-inline">
            <input type="radio" name="money" value="2" data-am-ucheck> 20万元
          </label>
          <label class="am-radio-inline">
            <input type="radio" name="money" value="3" data-am-ucheck> 30万元
          </label>
          <label class="am-radio-inline">
            <input type="radio" name="money" value="4" data-am-ucheck> 40万元
          </label>
          <label class="am-radio-inline">
            <input type="radio" name="money" value="5" data-am-ucheck> 50万元
          </label>
        </div>
      </div>
      <div class='am-g'>
        <div class='am-u-md-3'>
          保障期限
        </div>
        <div class='am-u-md-9'>
          <label class="am-radio-inline">
            <input type="radio" name="type" value="1" data-am-ucheck checked>
            保至60岁
          </label>
          <label class="am-radio-inline">
            <input type="radio" name="type" value="2" data-am-ucheck>
            保至70岁
          </label>
          <label class="am-radio-inline">
            <input type="radio" name="type" value="3" data-am-ucheck>
            终身
          </label>
        </div>
      </div>
      <div class='am-g'>
        <div class='am-u-md-3'>
          缴费类型
        </div>
        <div class='am-u-md-9'>
          年交
        </div>
      </div>
      <div class='am-g'>
        <div class='am-u-md-3'>
          缴费年限
        </div>
        <div class='am-u-md-9'>
          <label class="am-radio-inline">
            <input type="radio" name="year" value="5" data-am-ucheck checked>
            5年
          </label>
          <label class="am-radio-inline">
            <input type="radio" name="year" value="10" data-am-ucheck>
            10年
          </label>
          <label class="am-radio-inline">
            <input type="radio" name="year" value="15" data-am-ucheck>
            15年
          </label>
          <label class="am-radio-inline">
            <input type="radio" name="year" value="20" data-am-ucheck>
            20年
          </label>
          <label class="am-radio-inline">
            <input type="radio" name="year" value="30" data-am-ucheck>
            30年
          </label>
        </div>
      </div>
      <div class='am-g'>
        <div class='am-u-md-3'>
          保费
        </div>
        <div class='am-u-md-9 money'>
          ￥123
        </div>
      </div>
      <div class='am-g'>
        <div class='am-u-md-3 hidden'>
          123
        </div>
        <div class='am-u-md-6 operation'>
          <button type="button" class="am-btn am-btn-primary">产品分析</button>
          <button type="button" class="am-btn am-btn-secondary">加入收藏</button>
        </div>
        <div class='am-u-md-3'>
        </div>
      </div>
    </div>
    <div class='am-g'>
      <table class="am-table am-table-striped am-table-hover">
        <thead>
          <tr>
            <th style="color: #333333;">您的权益</th>
            <th style='width :70% ;color: #333333'>解释</th>
          </tr>
        </thead>
        <tbody>
          <?php if(is_array($tags)): $i = 0; $__LIST__ = $tags;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tag): $mod = ($i % 2 );++$i;?><tr>
              <td style="color: #333333;"><?php echo ($tag["tag2"]); ?></td>
              <td style="color: #333333;" class="tag_exp">
                <?php if($tag["tag2"] == '全残保险金'): ?>一、若被保险人于本合同生效或者最后一次复效之日起                       90 日内（含第     90 日）因
                             意外伤害以外的原因导致全残，我们将按已交保险费给付全残保险金，同时
                             本合同终止。 
                         二、若被保险人全残时未满            18 周岁，且因意外伤害或于本合同生效或最后一次
                             复效之日起      90 日后因意外伤害以外的原因导致全残，我们将按已交保险费
                             的  1.5 倍给付全残保险金，同时本合同终止。 
                         三、若被保险人全残时已满            18 周岁，且因意外伤害或于本合同生效或最后一次
                             复效之日起      90 日后因意外伤害以外的原因导致全残，我们将按本合同的基
                             本保险金额给付全残保险金，同时本合同终止。<?php endif; ?>
                <?php if($tag["tag2"] == '重大疾病保险金'): ?>一、若被保险人于本合同生效或最后一次复效之日起                       90 日内（含第    90 日）因意
                      外伤害以外的原因导致初次患本合同所列的重大疾病的一种或多种，我们将
                      按已交保险费给付重大疾病保险金，同时本合同终止。 
                  二、若被保险人因意外伤害，或于本合同生效或最后一次复效之日起                             90 日后因
                      意外伤害以外的原因，导致初次患本合同所列重大疾病的一种或多种，我们
                      将按本合同的基本保险金额给付重大疾病保险金，同时本合同终止。<?php endif; ?>
                <?php if($tag["tag2"] == '身故保险金'): ?>一、若被保险人于本合同生效或者最后一次复效之日起                       90 日内（含第     90 日）因
                      意外伤害以外的原因导致身故，我们将按已交保险费给付身故保险金，同时
                      本合同终止。 
                  二、若被保险人身故时未满            18 周岁，且因意外伤害或于本合同生效或最后一次
                      复效之日起      90 日后因意外伤害以外的原因导致身故，我们将按已交保险费
                      的  1.5 倍给付身故保险金，同时本合同终止。<?php endif; ?>
                <?php if($tag["tag2"] == '特定疾病保险金'): ?>若被保险人因意外伤害，或于本合同生效或最后一次复效之日起                            90 日后因意外
                  伤害以外的原因导致初次患本合同所列的特定疾病，我们将豁免本合同自特定疾
                         病确诊之日以后的各期保险费。<?php endif; ?>
                <?php if($tag["tag2"] == '轻症疾病保险金'): ?>被保险人初次发生并被医院的专科医生确诊患有本合同约定的轻症疾病，我们按本合同基本保险金额的20%给付轻症疾病保险金，该项保险责任终止。<?php endif; ?>
                <?php if($tag["tag2"] == '豁免保险金'): ?>被保险人初次发生并被医院的专科医生确诊患有本合同约定的，则自确
                诊日后首个本合同的保险费约定支付日开始，直至本合同最后一次保险费约定支
                   付日止，我们豁免前述期间内本合同的应交保险费。被豁免的保险费视为已交纳，
                     本合同继续有效。<?php endif; ?>
              </td>
            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
      </table>
    </div>
    <div class='am-g'>
      <table class="am-table am-table-striped am-table-hover">
        <thead>
          <tr>
            <th style="color: #333333;"">其它须知</th>
            <th><th>
            <th><th>
            
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><a href = "/Public/search/pdf/1pdf/<?php echo ($id); ?>.pdf">产品条款</a></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td><a>所保障的重大疾病范围</a></td>
            <td></td>
            <td></td>
          </tr>
          
        </tbody>
      </table>
    </div>
  </div>

  <footer class="footer  am-topbar-fixed-bottom">
    <p>© 2019 SUFE, SIME. by the ZTL Team.</p>
  </footer>
  <!-- =============== VENDOR SCRIPTS ===============-->
  <!-- JQUERY-->
  <script src="/Public/Admin/vendor/jquery/dist/jquery.js"></script>
  <script src="/Public/Search/css/amui/assets/js/amazeui.js"></script>
  
              <script>
              $(function() {

                recompute = function() {
                  var ori = new Date($("#age").val()).getFullYear();
                  var sex = $("input[name='sex']:checked").val();
                  var money = $("input[name='money']:checked").val();
                  var type = $("input[name='type']:checked").val();
                  var year = $("input[name='year']:checked").val();
                  var age = 2019 - ori;
                 
                  $.ajax({
                    url: "/search/api/get_rate",
                    type: 'post',
                    async: true,
                    dataType: 'JSON',
                    data: {
                      'age': age,
                      'year': year,
                      'type': type,
                      'sex': sex
                    },
                    success: function(data) {
                      data =  parseInt(data);
                      
                      if (data != 0) {
                        var how = money * data ;
                        $(".money").text('￥'+how);
                      }
                    }
                  })
                }
                  recompute();
                $("input").change(function() {
                  recompute();
                })



              })

              </script>

  <script>
  $(function() {
    $(".search_btn").click(function() {
      var val = $("#search_ba").val();
      window.location.href = "/search/search/search/exp/" + val;
    });
  })

  </script>
</body>

</html>