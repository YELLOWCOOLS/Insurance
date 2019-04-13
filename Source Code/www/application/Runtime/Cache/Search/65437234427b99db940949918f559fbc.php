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
  
  <link rel="stylesheet" href="/Public/Search/css/index.css">

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
          <a href = "/search/search/insshow/id/813"class="am-btn am-btn-secondary">
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
          <a href = "/search/search/insshow/id/835"class="am-btn am-btn-secondary">
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