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
  
  <link rel="stylesheet" href="/Public/Search/css/qa.css">

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
    <div id="searh_container" class='am-g'>
      <div class="am-vertical-align-middl am-form-group am-u-lg-6 am-u-sm-centered am-form-icon" id="a_group">
        <h3>你可以询问关于特定保险的问题，也可以询问保险常识</h1>
          <middle>以下是您最近的浏览记录，您可以对他们提出问题</middle>
          <?php if(is_array($ins)): $i = 0; $__LIST__ = $ins;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$in): $mod = ($i % 2 );++$i;?><div class="am-g">
              <span am-u-sm-6>
                <a data-ins=<?php echo ($in["id"]); ?> data-name='<?php echo ($in["name"]); ?>' val=<?php echo ($in["name"]); ?>><?php echo ($in["name"]); ?></a>
              </span>
            </div><?php endforeach; endif; else: echo "" ;endif; ?>
          <input type="text" id='dia' class="am-form-field" placeholder="开始对话">
      </div>
    </div>
    <div class='am-g'>
      <ul class="confirm-list" id="doc-modal-list">
      </ul>
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
    var id = 10;
    $("#a_group").on('click', 'a', function() {
      var name = $(this).data('name');
      id = $(this).data('ins');

      $html1 = "<li class='question'>我想了解" + name + "</li>";
      $html2 = "<li class='answer'>好的呢</li>";
      $('#doc-modal-list').prepend($html1);
      $('#doc-modal-list').prepend($html2);
    });

    $('#dia').bind('keydown', function(event) {
      if (event.keyCode == "13") {
        $.ajax({
          url: '/search/search/get_answer',
          type: 'post',
          data: {
            'id': id,
            'question': $('#dia').val()
          },
          dataType: "json",
          success: function(data) {
            if (data) {
              $html1 = "<li class='question'>" + $('#dia').val() + "</li>";
              $html2 = "<li class='answer'>"+data+"</li>";
              $('#doc-modal-list').prepend($html1);
              $('#doc-modal-list').prepend($html2);
            }
          }
        });
      }
    });
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