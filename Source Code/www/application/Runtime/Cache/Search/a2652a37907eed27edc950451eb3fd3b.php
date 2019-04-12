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
  
  <link rel="stylesheet" href="/Public/Search/css/register.css">

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
  
  <div class=' root' style='background-image: url("//activities.huizecdn.com/hz/www/upload/2019/0227/daerwen-login.jpg");'>
    <div class='am-g index_root'>
      <div class="am-u-md-3" id="page1">
        <form action="/search/search/do_register" method="POST" class="am-form">
          <fieldset>
            <legend>邮箱注册</legend>
            <div class="am-form-group">
              <label for="doc-ipt-email-1">邮件</label>
              <input type="email" class="" name="email" id="doc-ipt-email-1" placeholder="填写邮箱">
            </div>
            <div class="am-form-group">
              <label for="doc-ipt-pwd-1">密码</label>
              <input type="password" class="" name="password" id="doc-ipt-pwd-1" placeholder="填上你的密码吧">
            </div>
            <p><a id='sub' class="am-btn am-btn-secondary">注册</a></p>
            <div id="warnbtn" class="am-alert btn btn-block btn-primary mt-lg" data-am-alert>
              <button type="button" class="am-close  btn-primary">&times;</button>
              <p style='text-align: center;'>注意：<?php echo ($warn); ?></p>
            </div>
          </fieldset>
        </form>
      </div>
      <div class="am-u-md-3" id="page2" style="display: none">
        <form action="/search/search/do_register" method="POST" class="am-form">
          <fieldset>
            <legend class='title2'>信息填写</legend>
            <small>该信息仅作为推荐时使用</small>
            <div class="am-form-group am-form-inline">
              <label for="doc-ipt-3" class="am-form-label">性别</label>
              <div class='am-g'>
                <div class="am-radio am-u-md-6" style="text-align: center">
                  <label>
                    <input type="radio" name="sex" value="1" checked>
                    男
                  </label>
                </div>
                <div class="am-radio am-u-md-6" style="text-align: center">
                  <label>
                    <input type="radio" name="sex" value="0">
                    女
                  </label>
                </div>
              </div>
            </div>
            <div class="am-form-group am-form-inline">
              <label for="doc-ipt-3" class="am-form-label">年龄</label>
              <div class='am-g'>
                <div class="am-radio am-u-md-6" style="text-align: center">
                  <label>
                    <input type="radio" name="age" value="0" checked>
                    30岁以上
                  </label>
                </div>
                <div class="am-radio am-u-md-6" style="text-align: center">
                  <label>
                    <input type="radio" name="age" value="1">
                    30岁以下
                  </label>
                </div>
              </div>
            </div>
            <div class="am-form-group am-form-inline">
              <label for="doc-ipt-3" class="am-form-label">家庭年收入</label>
              <div class='am-g'>
                <div class="am-radio am-u-md-6" style="text-align: center">
                  <label>
                    <input type="radio" name="income" value="1" checked>
                    24万以上
                  </label>
                </div>
                <div class="am-radio am-u-md-6" style="text-align: center">
                  <label>
                    <input type="radio" name="income" value="0">
                    24万以下
                  </label>
                </div>
              </div>
            </div>
            <div class="am-form-group am-form-inline">
              <label for="doc-ipt-3" class="am-form-label">婚姻状况</label>
              <div class='am-g'>
                <div class="am-radio am-u-md-6" style="text-align: center">
                  <label>
                    <input type="radio" name="marry" value="0" checked>
                    已婚
                  </label>
                </div>
                <div class="am-radio am-u-md-6" style="text-align: center">
                  <label>
                    <input type="radio" name="marry" value="1">
                    未婚
                  </label>
                </div>
              </div>
            </div>
            <div class="am-form-group am-form-inline">
              <label for="doc-ipt-3" class="am-form-label">健康状况</label>
              <div class='am-g'>
                <div class="am-radio am-u-md-6" style="text-align: center">
                  <label>
                    <input type="radio" name="health" value="1" checked>
                    优秀
                  </label>
                </div>
                <div class="am-radio am-u-md-6" style="text-align: center">
                  <label>
                    <input type="radio" name="health" value="0">
                    良好
                  </label>
                </div>
              </div>
            </div>
            <p><a id='sub2' class="am-btn am-btn-secondary">完成</a></p>
          </fieldset>
        </form>
      </div>
      <div class="am-u-md-5" id="page3" style='display: none'>
        <form action="/search/search/do_register" method="POST" class="am-form">
          <fieldset>
            <legend class='title2'>信息填写</legend>
            <small>勾选你感兴趣的标签</small>
            <div class="am-form-group am-container" >
              <div class="label_ku" style="margin-top: 2rem">
                <?php if(is_array($right)): $i = 0; $__LIST__ = $right;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ri): $mod = ($i % 2 );++$i;?><label class="am-checkbox-inline" style="min-width: 17rem;margin-left: 0">
                    <input type="checkbox" name = "interest"value="<?php echo ($ri["tag1"]); ?>"> <?php echo ($ri["tag1"]); ?>
                  </label><?php endforeach; endif; else: echo "" ;endif; ?>
              </div>
            </div>
            <p><a id='sub3' class="am-btn am-btn-secondary">完成</a></p>
          </fieldset>
        </form>
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
    $fla = <?php echo ($flag); ?>;
    if ($fla) {
      $('#warnbtn').alert('close');
    } else {
      $('.am-u-md-3').css('height', '40rem');
    };
    $('#sub').click(function(event) {

      $.ajax({
        url: '/search/search/do_register',
        type: 'post',
        data: {
          'password': $('#doc-ipt-pwd-1').val(),
          'email': $('#doc-ipt-email-1').val()
        },
        dataType: "json",
        success: function(data) {
          if (data == 'ok') {
            $('#page1').css('display', 'none');
            $('#page2').css('display', '');

          }
        }
      });
    });

    $('#sub2').click(function(event) {
      $.ajax({
        url: '/search/search/info_detail',
        type: 'post',
        data: {
          'sex': $("input[name='sex']:checked").val(),
          'age': $("input[name='age']:checked").val(),
          'income': $("input[name='income']:checked").val(),
          'marry': $("input[name='marry']:checked").val(),
          'health': $("input[name='health']:checked").val()
        },
        dataType: "json",
        success: function(data) {
          if (data == 'ok') {
            $('#page2').css('display', 'none');
            $('#page3').css('display', '');
          }
        }
      });
    })
    $('#sub3').click(function(event) {
      $("input[name='interest']:checked").each(function(index){
        $.ajax({
        url: '/search/search/interest',
        type: 'post',
        data: {
          'right': $(this).val(),
        },
        dataType: "json",
        success: function(data) {
          if (data == 'ok') {
            $('#page2').css('display', 'none');
            $('#page3').css('display', '');
          }
        }
      });

        });
      window.location.href="/search";

    })
  })

  </script>
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