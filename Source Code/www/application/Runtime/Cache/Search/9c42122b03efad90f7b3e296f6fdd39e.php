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
  
  <link rel="stylesheet" href="/Public/Search/css/amui/assets/css/amazeui.css">
  <link rel="stylesheet" href="/Public/Admin/assets/css/app.css">
  <link rel="stylesheet" href="/Public/Search/css/layout.css">
  
  <link rel="stylesheet" type="text/css" href="/Public/Admin/vendor/datatables-colvis/css/dataTables.colVis.css" />
  <link rel="stylesheet" type="text/css" href="/Public/Admin/vendor/datatables/media/css/dataTables.bootstrap.css" />
  <link rel="stylesheet" type="text/css" href="/Public/Admin/vendor/dataTables.fontAwesome/index.css" />
  <link rel="stylesheet" type="text/css" href="/Public/Admin/vendor/sweetalert/dist/sweetalert.css" />
  <link rel="stylesheet" type="text/css" href="/Public/Admin/vendor/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" />
  <link rel="stylesheet" type="text/css" href="/Public/Admin/css/zy.css" />
  <link rel="stylesheet" type="text/css" href="/Public/Admin/css/bootstrap.css" />

</head>

<body>
  <header class="am-topbar am-topbar-fixed-top">
    <div class="am-container">
      <h1 class="am-topbar-brand">
        <a href="#">微小保</a>
      </h1>
      <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-secondary am-show-sm-only" data-am-collapse="{target: '#collapse-head'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>
      <div class="am-collapse am-topbar-collapse">
        <ul class="am-nav am-nav-pills am-topbar-nav">
          <li><a href="/Search">首页</a></li>
        </ul>
        <?php if(empty( $_SESSION['uid']) == True): ?><div class="am-topbar-right">
            <a href="/search/search/register">
              <button id='register' class="am-btn am-btn-secondary am-topbar-btn am-btn-sm"><span class="am-icon-pencil">注册</span> </button>
            </a>
          </div>
          <div class="am-topbar-right">
            <a href="/search/search/login">
              <button id='login' class="am-btn am-btn-primary am-topbar-btn am-btn-sm"><span class="am-icon-user"></span> 登录</button>
            </a>
          </div>
          <?php else: ?>
          <div class="am-topbar-right">
            <ul class="am-nav am-nav-pills am-topbar-nav am-topbar-right admin-header-list tpl-header-list">
              <li class="am-dropdown" data-am-dropdown data-am-dropdown-toggle>
                <a class="am-dropdown-toggle tpl-header-list-link" href="javascript:;">
                  <span class="tpl-header-list-user-nick"><?php echo (session('uname')); ?></span><span class="tpl-header-list-user-ico"> <img src="/Public/Admin/assets/img/user01.png"></span>
                </a>
                <ul class="am-dropdown-content">
                  <li><a href="#"><span class="am-icon-bell-o"></span> 资料</a></li>
                  <li><a href="#"><span class="am-icon-cog"></span> 设置</a></li>
                  <li><a href="/admin2/manage/log_out"><span class="am-icon-power-off"></span> 退出</a></li>
                </ul>
              </li>
              <li><a href="/admin2/manage/log_out" class="tpl-header-list-link"><span class="am-icon-sign-out tpl-header-list-ico-out-size"></span></a></li>
            </ul>
          </div><?php endif; ?>
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
            <li><a href="/admin2/manage/login">管理系统</a></li>
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
  
  <div class='am-container'>
  <div class='am-g'>
      <ol class="am-breadcrumb">
        <li><a href="/search/search" class="am-icon-home">首页</a></li>
        <li><a href="#">分类1</a></li>
        <li class="am-active"><a href ="/search/search/insshow/id/<?php echo ($cp["id"]); ?>"><?php echo ($cp["name"]); ?></a></li>
        <li>保障的重大疾病范围</li>
      </ol>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="panel panel-default">
            <div class="panel-body">
              <table id="datatable" class="table table-striped table-hover">
                <thead>
                  <tr>
                    <th class="col-2">病名</th>
                    <th class="col-9">病名释义</th>
                  </tr>
                </thead>
                <tbody>
                  <?php if(is_array($illlist)): $i = 0; $__LIST__ = $illlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ill): $mod = ($i % 2 );++$i;?><tr>
                      <td><?php echo ($ill["illname"]); ?> </td>
                      <td><?php echo ($ill["illexp"]); ?></td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
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
  
  <script src="/Public/Admin/vendor/datatables/media/js/jquery.dataTables.min.js"></script>
  <script src="/Public/Admin/vendor/datatables-colvis/js/dataTables.colVis.js"></script>
  <script src="/Public/Admin/vendor/datatables/media/js/dataTables.bootstrap.js"></script>
  <script src="/Public/Admin/vendor/sweetalert/dist/sweetalert.min.js"></script>
  <script src="/Public/Admin/vendor/moment/min/moment-with-locales.min.js"></script>
  <script src="/Public/Admin/vendor/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
  <script>
  $(function() {
    //datatable初始化
    $('#datatable').dataTable({
      dom: 'lfrt<"table-toolbar mv-lg">p',
      paging: true,
      info: true,
      autoWidth: false,
      oLanguage: {
        sSearch: '搜索',
        sLengthMenu: '每页显示 _MENU_ 条记录',
        sInfo: '第 _PAGE_ 页，共 _PAGES_ 页',
        sZeroRecords: '没有相关记录',
        sInfoEmpty: '0条记录',
        sInfoFiltered: '(从 _MAX_ 条记录过滤)',
        oPaginate: {
          sPrevious: '上一页',
          sNext: '下一页'
        }
      }
    });


    $('#downAvatar').click(function(e) {
      $('[name="type"]').val('avatar');
      document.forms['downloadzip'].submit();
    });

    $('#downCertificate').click(function(e) {
      $('[name="type"]').val('certificate');
      document.forms['downloadzip'].submit();
    });
    $('#downReport').click(function(e) {
      $('[name="type"]').val('report');
      document.forms['downloadzip'].submit();
    });
    //导出panel
    $('#export-panel').on('click', '[data-tool="panel-collapse"]', function() {
      $(this).find('em').toggleClass('fa-minus').toggleClass('fa-plus');
      $(this).parent().toggleClass('panel-heading-collapsed');
      $(this).parent().siblings('.panel-wrapper').slideToggle(200).toggleClass('in');
    });
    $('#datetimepicker-start').datetimepicker({
      icons: {
        time: "fa fa-clock-o",
        date: "fa fa-calendar",
        up: "fa fa-arrow-up",
        down: "fa fa-arrow-down"
      },
      format: 'YYYY-MM-DD'
    });
    $('#datetimepicker-end').datetimepicker({
      icons: {
        time: "fa fa-clock-o",
        date: "fa fa-calendar",
        up: "fa fa-arrow-up",
        down: "fa fa-arrow-down"
      },
      format: 'YYYY-MM-DD',
      maxDate: moment(),
      useCurrent: false
    });
    $("#datetimepicker-start").on("dp.change", function(e) {
      $("#datetimepicker-end").data("DateTimePicker").minDate(e.date);
    });
    $("#datetimepicker-end").on("dp.change", function(e) {
      $("#datetimepicker-start").data("DateTimePicker").maxDate(e.date);
    });
    //导出Excel
    $('#btnSubmit').click(function(e) {
      e.preventDefault();
      if (!$('[name="start_date"]').val()) {
        alert('起始日期不能为空!');
        return;
      }
      if (!$('[name="end_date"]').val()) {
        alert('结束日期不能为空!');
        return;
      }
      document.forms['exportExecl'].submit();
    });
    //删除学生
    $('#datatable').on('click', '[data-remove]', function() {
      var dateId = $(this).data('remove');
      swal({
          title: "确认删除该条数据?",
          text: "删除后将无法恢复，请谨慎操作",
          type: "warning",
          showCancelButton: true,
          confirmButtonColor: "#DD6B55",
          confirmButtonText: "是的",
          cancelButtonText: "取消",
          closeOnConfirm: false
        },
        function() {
          $.post('/admin/candidate/deleteill', { num: dateId }, function(res) {
            swal({
              title: "删除成功",
              type: "success",
            }, function() {
              window.location.reload();
            });
          });
        });
    });
  });

  </script>

</body>

</html>