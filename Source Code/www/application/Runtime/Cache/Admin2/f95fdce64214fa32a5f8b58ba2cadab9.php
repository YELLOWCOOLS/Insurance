<?php if (!defined('THINK_PATH')) exit(); if (!defined('THINK_PATH')) exit();?>
<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="description" content="微小保">
  <meta name="keywords" content="微小保">
  <title>微小保</title>
  <!-- =============== VENDOR STYLES ===============-->
  <!-- FONT AWESOME-->
  <link rel="stylesheet" href="/Public/Admin/assets/css/amazeui.min.css" />
  <link rel="stylesheet" type="text/css" href="/Public/Admin/vendor/fontawesome/css/font-awesome.min.css" />
  <!-- SIMPLE LINE ICONS-->
  <link rel="stylesheet" type="text/css" href="/Public/Admin/vendor/simple-line-icons/css/simple-line-icons.css" />
  <!-- =============== BOOTSTRAP STYLES ===============-->
  <link rel="stylesheet" type="text/css" href="/Public/Admin/css/bootstrap.css" />
  <!-- =============== APP STYLES ===============-->
  <link rel="stylesheet" type="text/css" href="/Public/Admin/css/app.css" />
</head>

<body>
  <div class="wrapper">
    <div class="block-center mt-xl wd-xl">
      <!-- START panel-->
      <div class="panel panel-default panel-flat">
        <div class="panel-heading text-center">
          <a href="#">
            <img src="/Public/Admin/img/sime-logo.png" class="block-center img-rounded">
          </a>
        </div>
        <div class="panel-body">
          <form action="/admin2/manage/doLogin" method="POST" class="mb-lg">
            <div class="form-group has-feedback">
              <input type="text" name="username" placeholder="用户名" autocomplete="off" required class="form-control">
              <span class="fa fa-user form-control-feedback text-muted"></span>
            </div>
            <div class="form-group has-feedback">
              <input type="password" name="password" placeholder="密码" required class="form-control">
              <span class="fa fa-lock form-control-feedback text-muted"></span>
            </div>
            <button type="submit" class="btn btn-block btn-primary mt-lg">登录</button>
          </form>
          <div id = "warnbtn" class="am-alert btn btn-block btn-primary mt-lg" style = "background-color: #b33133"data-am-alert>
            <button type="button" class="am-close  btn-primary">&times;</button>
            <p style='text-align: center;'>注意：<?php echo ($warn); ?></p>
          </div>
        </div>
      </div>
      <!-- END panel-->
      <div class="p-lg text-center">
        <span>信息管理与工程学院（上海财经大学）</span>
      </div>
    </div>
  </div>
  <!-- =============== VENDOR SCRIPTS ===============-->
  <!-- MODERNIZR-->
  <script src="/Public/Admin/assets/js/jquery.min.js"></script>
  <script src="/Public/Admin/vendor/modernizr/modernizr.custom.js"></script>
  <!-- JQUERY-->
  <script src="/Public/Admin/vendor/bootstrap/dist/js/bootstrap.js"></script>
  <script src="/Public/Admin/assets/js/amazeui.min.js"></script>
  <script src="/Public/Admin/assets/js/iscroll.js"></script>
  <script src="/Public/Admin/assets/js/app.js"></script>
  </script>
  <script>
    $(function() {
      if(<?php echo ($warn); ?>){
         $('#warnbtn').alert('close');
      }
    }
      )
  </script>
</body>

</html>