<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   <meta name="description" content="智能保险顾问管理系统">
   <meta name="keywords" content="智能保险顾问管理系统">
   <title>智能保险顾问管理系统</title>
   <!-- =============== VENDOR STYLES ===============-->
   <!-- FONT AWESOME-->
   <link rel="stylesheet" type="text/css" href="/Public/Admin/vendor/fontawesome/css/font-awesome.min.css" />
   <!-- SIMPLE LINE ICONS-->
   <link rel="stylesheet" type="text/css" href="/Public/Admin/vendor/simple-line-icons/css/simple-line-icons.css" />
   <!-- =============== BOOTSTRAP STYLES ===============-->
   <link rel="stylesheet" type="text/css" href="/Public/Admin/css/bootstrap.css" />
   <!-- =============== APP STYLES ===============-->
   <link rel="stylesheet" type="text/css" href="/Public/Admin/css/app.css" />
    
</head>

<body>
    
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6">
        <div class="panel panel-default panel-flat">
          <div class="panel-body">
            <form action="/admin/candidate/search" method="POST">
              <div class="form-group has-feedback">
                <label class="text-muted">公司名</label>
                <input placeholder="请输入公司名(选填)" name="cpname" autocomplete="off" class="form-control">
             
              </div>
              <div class="form-group has-feedback">
                <label class="text-muted">保险名</label>
                <input placeholder="请输入保险名(选填)" name="name" autocomplete="off" class="form-control">
               
              </div>
              <div class="form-group has-feedback">
                <label class="text-muted">保险id</label>
                <input placeholder="请输入保险id(选填)" name="id" autocomplete="off" class="form-control">
               
              </div>
              <button id="submit1" class="btn btn-danger btn-block">搜索条款
              </button>
              <button id="submit2" class="btn btn-danger btn-block">条款分布
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

   <!-- =============== VENDOR SCRIPTS ===============-->
   <!-- MODERNIZR-->
   <script src="/Public/Admin/vendor/modernizr/modernizr.custom.js"></script>
   <!-- JQUERY-->
   <script src="/Public/Admin/vendor/jquery/dist/jquery.js"></script>
   <!-- BOOTSTRAP-->
   <script src="/Public/Admin/vendor/bootstrap/dist/js/bootstrap.js"></script>
   <!-- STORAGE API-->
   <script src="/Public/Admin/vendor/jQuery-Storage-API/jquery.storageapi.js"></script>
   <!-- PARSLEY-->
   <script src="/Public/Admin/vendor/parsleyjs/dist/parsley.min.js"></script>
   <!-- =============== APP SCRIPTS ===============-->
   <script src="/Public/Admin/js/app.js"></script>
    
  <script>
  $(function() {
    $('#submit1').click(function(e) {
      document.forms[0].submit();
    });

    $('#submit2').click(function(e) {
      $.post('/admin/candidate/statistics');
    });

  });

  </script>
 
</body>

</html>