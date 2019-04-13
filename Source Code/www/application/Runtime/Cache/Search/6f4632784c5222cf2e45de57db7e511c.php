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
  
  <link rel="stylesheet" href = "/Public/Search/css/layout.css">
   <link rel="stylesheet" href="/Public/Search/css/amui/assets/css/amazeui.css">
  
  <link rel="stylesheet" href="/Public/Search/css/register.css">


</head>

<body >
  <header class="am-topbar am-topbar-fixed-top">
  <div class="am-container">
    <h1 class="am-topbar-brand">
      <a href="#">微小保</a>
    </h1>

    <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-secondary am-show-sm-only" data-am-collapse="{target: '#collapse-head'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>

    <div class="am-collapse am-topbar-collapse" >
      <ul class="am-nav am-nav-pills am-topbar-nav">
        <li ><a href="/Search">首页</a></li>
      </ul>

      <div class="am-topbar-right">
      <a href= "/search/search/register">
        <button id='register' class="am-btn am-btn-secondary am-topbar-btn am-btn-sm"><span class="am-icon-pencil">注册</span> </button>
        </a>
      </div>

      <div class="am-topbar-right">
      <a href= "/search/search/login">
        <button id= 'login' class="am-btn am-btn-primary am-topbar-btn am-btn-sm"><span class="am-icon-user"></span> 登录</button>
        </a>
      </div>
    </div>

  </div>
</header>
 <div class="am-container  search-bar">
    <div class="am-collapse am-topbar-collapse">
      <ul class="am-nav am-nav-pills am-topbar-nav">
        <li class="am-dropdown" data-am-dropdown="">
          <a class="am-dropdown-toggle" data-am-dropdown-toggle="" href="javascript:;">
            产品列表 <span class="am-icon-caret-down"></span>
          </a>
          <ul class="am-dropdown-content">
            <li class="am-dropdown-header">产品列表</li>
            <li><a href="#">儿童保险 </a></li>
            <li><a href="#">成人保险 </a></li>
            <li><a href="#">中老年保险 </a></li>
          </ul>
        </li>
        <li class="am-dropdown" data-am-dropdown="">
          <a class="am-dropdown-toggle" data-am-dropdown-toggle="" href="javascript:;">
            功能列表 <span class="am-icon-caret-down"></span>
          </a>
          <ul class="am-dropdown-content">
            <li class="am-dropdown-header">功能列表</li>
            <li><a href="#">保险分析</a></li>
            <li><a href="#">保险对比</a></li>
            <li><a href="#">智能推荐</a></li>
            <li><a href="#">管理系统</a></li>
          </ul>
        </li>
        <li class="am-dropdown" data-am-dropdown="">
          <a class="am-dropdown-toggle" data-am-dropdown-toggle="" href="javascript:;">
            信息帮助 <span class="am-icon-caret-down"></span>
          </a>
          <ul class="am-dropdown-content">
            <li class="am-dropdown-header">信息帮助</li>
            <li><a href="#">保险专业名词解释</a></li>
            <li><a href="#">保险知识图谱</a></li>
          </ul>
        </li>
      </ul>
      <form class="am-topbar-form am-topbar-right am-form-inline" role="search">
        <div class="am-input-group">
          <input type="text" class="am-form-field" placeholder="守卫者一号重疾险">
          <span class="am-input-group-btn">
        <button class="am-btn am-btn-default" type="button">搜索</button>
      </span>
        </div>
      </form>
    </div>
  </div>
  
  <div class=' root' style='background-image: url("//activities.huizecdn.com/hz/www/upload/2019/0227/daerwen-login.jpg");'>
    <div class='am-g index_root'>
      <div class="am-u-md-3">
        <form action="/search/search/do_register" method="POST" class="am-form">
          <fieldset>
            <legend>邮箱登录</legend>
            <div class="am-form-group">
              <label for="doc-ipt-email-1">邮件</label>
              <input type="email" class="" id="doc-ipt-email-1" placeholder="输入电子邮件" name="eamil">
            </div>
            <div class="am-form-group">
              <label for="doc-ipt-pwd-1">密码</label>
              <input type="password" class="" name="password" id="doc-ipt-pwd-1" placeholder="设置个密码吧">
            </div>
            <p><button id='sub' type="submit" class="am-btn am-btn-secondary">登录</button></p>
            <div id="warnbtn" class="am-alert btn btn-block btn-primary mt-lg" data-am-alert>
              <button type="button" class="am-close  btn-primary">&times;</button>
              <p style='text-align: center;'>注意：<?php echo ($warn); ?></p>
            </div>
          </fieldset>
        </form>
      </div>
    </div>
  </div>

  <footer class="footer">
                <p>© 2019 SUFE, SIME. by the ZTL Team.</p>
              </footer>

  <!-- =============== VENDOR SCRIPTS ===============-->
  <!-- JQUERY-->
  <script src="/Public/Admin/vendor/jquery/dist/jquery.js"></script>
  <script src="/Public/Search/css/amui/assets/js/amazeui.js"></script>
  
<script>
  <script>
     $(function() {
      if(<?php echo ($warn); ?>){
         $('#warnbtn').alert('close');
      }
    }
      )
  </script>
</script>

  <scipt>
    

  </scipt>
</body>

</html>