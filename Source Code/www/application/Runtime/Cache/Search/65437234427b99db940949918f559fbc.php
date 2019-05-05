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
  
  <link href="/Public/Search/css/style.css" rel="stylesheet">
  <link href="/Public/Search/css/bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" href="/Public/Search/css/index.css">
  <link href="/Public/Search/css/font-awesome.css" rel="stylesheet"> 


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
  
  <div class="get">
    <div class="am-g">
      <div class="am-u-lg-3">
        <div style="visibility: hidden;">
          123213
        </div>
      </div>
      <div class="am-u-lg-4 tiltes">
        <h1 class="get-title">微小保 - 您的私人保险顾问</h1>
        <h2 class='fu-title'>
          懂保险，更懂你
        </h2>
      </div>
      <div class="am-u-lg-2">
      </div>
    </div>
  </div>
  <div>
    <div class='am-container'>
      <div class="am-g middle">
        <div class="am-u-lg-6">
          <span class="am-icon-building-o am-icon-lg">
          </span>
          保险公司<h1>78</h1>个
        </div>
        <div class="am-u-lg-6">
          <span class="am-icon-file-text-o am-icon-lg">
          </span>
          <span class="text">
            保险合同<h1>2101</h1>份
          </span>
        </div>
      </div>
    </div>
    <div class='am-container advertisement'>
      <div class='am-g'>
        <div class='am-u-lg-12 ad_title' style="text-align: center;margin-bottom: 10px;font-size: 2.5rem;">
          <span style="font-weight: 100;color: gray;"> ———— </span>
          <span>为您臻选 </span>
          <span style="font-weight: 100;color: gray;">————</span>
        </div>
      </div>
      <div class='am-g'>
        <div class='am-u-lg-6 item'>
          <h1 class='title'>
            <span class='am-badge am-badge-secondar'>热卖</span>
            万全安康重大疾病保险
          </h1>
          <div class="tag">
            105种重疾+55种轻症
          </div>
          <div class="tag">
            重疾轻症均多次赔付
          </div>
          <div class="tag">
            百万重疾医疗赔付3次
          </div>
          <a href="/search/search/insshow/id/813" class="am-btn am-btn-secondary">
            查看详情
          </a>
          <img class="am-img-responsive" src="/Public/Search/img/1-3.png">
        </div>
        <div class='am-u-lg-6 item'>
          <h1 class='title'>
            <span class='am-badge am-badge-secondar'>热卖</span>
            长健安康重大疾病保险
          </h1>
          <div class="tag">
            累计赔付高达8次
          </div>
          <div class="tag">
            癌症单独分组
          </div>
          <div class="tag">
            轻症3次赔付无间隔
          </div>
          <a href="/search/search/insshow/id/835" class="am-btn am-btn-secondary">
            查看详情
          </a>
          <img class="am-img-responsive" src="/Public/Search/img/1-5.png">
        </div>
      </div>
      <div class="am-g tuijian">
        <?php if(is_array($tags)): foreach($tags as $k=>$tag): ?><div class='am-u-lg-4 item'>
            <h3 class='title'>
              <span class='am-badge am-badge-warning'>推荐</span>
              <?php echo ($tag[0]["name"]); ?>
            </h3>
            <div class="tags">
              <?php if(is_array($tag)): $i = 0; $__LIST__ = array_slice($tag,0,5,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$exp): $mod = ($i % 2 );++$i;?><div class="tag">
                  <?php echo ($exp["tag2"]); ?>
                </div><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
            <button class="am-btn am-btn-secondary ins_detail" data-up="<?php echo ($tag[0]["id"]); ?>">
              查看详情
            </button>
            <img class="am-img-responsive" src="/Public/Search/img/1-<?php echo ($k); ?>.png" />
          </div><?php endforeach; endif; ?>
      </div>
    </div>
    <div class="am-container">
      <div class='am-u-lg-12 ad_title' style="text-align: center;margin-top:20px;margin-bottom: 40px;font-size: 2.5rem;">
        <span style="font-weight: 100;color: gray;"> ———— </span>
        <span>技术支持 </span>
        <span style="font-weight: 100;color: gray;">————</span>
      </div>
    </div>
    <div>
      <div class="testimonials">
        <div class="container">
          <div class="w3ls-title">
            <h3 class="w3ls-title">大数据&nbsp;&nbsp; 云计算&nbsp; </h3>
          </div>
          <div class="slidw3-agileits">
            <div class="am-u-lg-4 slid-w3text">
              <h4><span style="color: rgb(255, 255, 255); font-family: &quot;Microsoft YaHei&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 36px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: center; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px;  text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">12,889条</span></h4>
              <p>对话语料</p>
            </div>
            <div class="am-u-lg-4 slid-w3text">
              <h4><span style="color: rgb(255, 255, 255); font-family: &quot;Microsoft YaHei&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 36px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: center; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px;  text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">4000次</span></h4>
              <p>验证测试</p>
            </div>
            <div class="am-u-lg-4 slid-w3text">
              <h4><span id="number3" data-value="98" style="color: rgb(255, 255, 255); font-family: &quot;Microsoft YaHei&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 36px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: center; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px;  text-decoration-style: initial; text-decoration-color: initial;">82</span><span style="color: rgb(255, 255, 255); font-family: &quot;Microsoft YaHei&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 36px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: center; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">%</span></h4>
              <p>模型对话正确率</p>
            </div>
            <div class="clearfix"> </div>
          </div>
        </div>
      </div>
    </div>

    <div class=" am-container features-agilerow">
      <div class="col-sm-6 features-left">
        <div class="features-w3grid">
          <div class="col-xs-3 features-w3grid-left">
            <i class="fa fa-heart-o" aria-hidden="true"></i>
          </div>
          <div class="col-xs-9 features-w3grid-right">
            <h4>情感分析 </h4>
            <p>通过制定情感打分规则，进行评论情感分析，进而得到用户对保险评价情况。
            </p>
          </div>
          <div class="clearfix"> </div>
        </div>
        <div class="features-w3grid features-w3grid-mdl">
          <div class="col-xs-3 features-w3grid-left">
            <i class="fa fa-cogs" aria-hidden="true"></i>
          </div>
          <div class="col-xs-9 features-w3grid-right">
            <h4>文本挖掘</h4>
            <p> 通过大量数据以及模式分析得到统一性代码
            </p>
          </div>
          <div class="clearfix"> </div>
        </div>
        <div class="features-w3grid">
          <div class="col-xs-3 features-w3grid-left">
            <i class="fa fa-line-chart" aria-hidden="true"></i>
          </div>
          <div class="col-xs-9 features-w3grid-right">
            <h4>分析报告</h4>
            <p>对具体保险进行基础属性的分析</p>
          </div>
          <div class="clearfix"> </div>
        </div>
      </div>
      <div class="col-sm-6 features-left">
        <div class="features-w3grid">
          <div class="col-xs-3 features-w3grid-left">
            <i class="fa fa-hand-rock-o" aria-hidden="true"></i>
          </div>
          <div class="col-xs-9 features-w3grid-right">
            <h4>保险对比</h4>
            <p>对两份不同保险的具体条目进行对比</p>
          </div>
          <div class="clearfix"> </div>
        </div>
        <div class="features-w3grid features-w3grid-mdl">
          <div class="col-xs-3 features-w3grid-left">
            <i class="fa fa-book" aria-hidden="true"></i>
          </div>
          <div class="col-xs-9 features-w3grid-right">
            <h4>自动解析</h4>
            <p>通过模型自动解析文档合同，构建结构化数据
            </p>
          </div>
          <div class="clearfix"> </div>
        </div>
        <div class="features-w3grid">
          <div class="col-xs-3 features-w3grid-left">
            <i class="fa fa-star-o" aria-hidden="true"></i>
          </div>
          <div class="col-xs-9 features-w3grid-right">
            <h4>智能推荐算法</h4>
            <p>改进的基于内容和协同过滤和随着时间动态变化的推荐算法
            </p>
          </div>
          <div class="clearfix"> </div>
        </div>
      </div>
      <div class="clearfix"> </div>
    </div>
    <div class="am-container">
      <div class='am-u-lg-12 ad_title' style="text-align: center;margin-bottom: 30px;font-size: 2.5rem;">
        <span style="font-weight: 100;color: gray;"> ———— </span>
        <span>合作企业</span>
        <span style="font-weight: 100;color: gray;">————</span>
      </div>
      <div class="agileits_w3layouts_news_grids"> 
        <div class="col-md-3 col-xs-6 agileits_w3layouts_news_grid">
          <div class="w3_agileits_news_grid">
            <img src="/Public/search/img/timg.jpg" alt=" " class="img-responsive" />
            </div>
        </div>    
        <div class="col-md-3 col-xs-6 agileits_w3layouts_news_grid">
          <div class="w3_agileits_news_grid">
            <img src="/Public/search/img/timg (2).jpg" alt=" " class="img-responsive" />
          </div>
        </div>  
        <div class="col-md-3 col-xs-6 agileits_w3layouts_news_grid">
          <div class="w3_agileits_news_grid">
            <img src="/Public/search/img/timg (1).jpg" alt=" " class="img-responsive" />
          </div>
        </div>   
        <div class="col-md-3 col-xs-6 agileits_w3layouts_news_grid">
          <div class="w3_agileits_news_grid">
            <img src="/Public/search/img/timg (3).jpg" alt=" " class="img-responsive" />
          </div>
        </div>
        <div class="clearfix"> </div>
      </div>
    </div>
  </div>
  </div>
  </div>

  <footer class="footer  am-topbar-fixed-bottom">
    <p>© 2019 SUFE, SIME. by the ZTL Team.</p>
  </footer>
  <!-- =============== VENDOR SCRIPTS ===============-->
  <!-- JQUERY-->
  <script src="/Public/Admin/vendor/jquery/dist/jquery.js"></script>
  <script src="/Public/Search/css/amui/assets/js/amazeui.js"></script>
  
  <script src="/Public/search/js/responsiveslides.min.js"></script>
  <script>
  // You can also use "$(window).load(function() {"
  $(function() {
    // Slideshow 3
    $("#slider3").responsiveSlides({
      auto: false,
      pager: true,
      nav: false,
      speed: 500,
      namespace: "callbacks",
      before: function() {
        $('.events').append("<li>before event fired.</li>");
      },
      after: function() {
        $('.events').append("<li>after event fired.</li>");
      }
    });

  });

  </script>
  <script>
  $(function() {
    // alert(123);
    $('.tuijian').on('click', '[data-up]', function() {
      var dataId = $(this).data('up');
      window.location.href = "/search/search/insshow/id/" + dataId;
    })
  });

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