<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="智能保险顾问后台管理系统">
    <meta name="keywords" content="智能保险顾问后台管理系统">
    <title>智能保险顾问后台管理系统</title>
    <!-- =============== VENDOR STYLES ===============-->
    <!-- FONT AWESOME-->
    <link rel="stylesheet" type="text/css" href="/Public/Admin/vendor/fontawesome/css/font-awesome.min.css" />
    <!-- SIMPLE LINE ICONS-->
    <link rel="stylesheet" type="text/css" href="/Public/Admin/vendor/simple-line-icons/css/simple-line-icons.css" />
    <!-- ANIMATE.CSS-->
    <link rel="stylesheet" type="text/css" href="/Public/Admin/vendor/animate.css/animate.min.css" />
    <!-- WHIRL (spinners)-->
    <link rel="stylesheet" type="text/css" href="/Public/Admin/vendor/whirl/dist/whirl.css" />
    <!-- =============== PAGE VENDOR STYLES ===============-->
    
  <link rel="stylesheet" type="text/css" href="/Public/Admin/vendor/datatables-colvis/css/dataTables.colVis.css" />
  <link rel="stylesheet" type="text/css" href="/Public/Admin/vendor/datatables/media/css/dataTables.bootstrap.css" />
  <link rel="stylesheet" type="text/css" href="/Public/Admin/vendor/dataTables.fontAwesome/index.css" />
  <link rel="stylesheet" type="text/css" href="/Public/Admin/vendor/sweetalert/dist/sweetalert.css" />
  <link rel="stylesheet" type="text/css" href="/Public/Admin/vendor/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" />
  <link rel="stylesheet" type="text/css" href="/Public/Admin/css/zy.css" />

    <!-- =============== BOOTSTRAP STYLES ===============-->
    <link rel="stylesheet" type="text/css" href="/Public/Admin/css/bootstrap.css" />
    <!-- =============== APP STYLES ===============-->
    <link rel="stylesheet" type="text/css" href="/Public/Admin/css/app.css" />
</head>

<body>
    <div class="wrapper">
        <!-- top navbar-->
        <header class="topnavbar-wrapper">
            <!-- START Top Navbar-->
            <nav role="navigation" class="navbar topnavbar">
                <!-- START navbar header-->
                <div class="navbar-header">
                    <h3 style='color:white '>智能保险管理系统</h3>
                </div>
                <!-- END navbar header-->
                <!-- START Nav wrapper-->
                <div class="nav-wrapper">
                    <!-- START Left navbar-->
                    <ul class="nav navbar-nav">
                        <li>
                            <!-- Button used to collapse the left sidebar. Only visible on tablet and desktops-->
                            <a href="#" data-toggle-state="aside-collapsed" class="hidden-xs">
                                <em class="fa fa-navicon"></em>
                            </a>
                            <!-- Button to show/hide the sidebar on mobile. Visible on mobile only.-->
                            <a href="#" data-toggle-state="aside-toggled" data-no-persist="true" class="visible-xs sidebar-toggle">
                                <em class="fa fa-navicon"></em>
                            </a>
                        </li>
                        <!-- START User avatar toggle-->
                        <li>
                            <!-- Button used to collapse the left sidebar. Only visible on tablet and desktops-->
                            <a id="user-block-toggle" href="#user-block" data-toggle="collapse">
                                <em class="icon-user"></em>
                            </a>
                        </li>
                        <!-- END User avatar toggle-->
                    </ul>
                    <!-- END Left navbar-->
                    <!-- START Right Navbar-->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Search icon-->
                        <li>
                            <a href="/admin/account/doLogout">
                                退出 <i class="fa fa-sign-out"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- END Right Navbar-->
                </div>
                <!-- END Nav wrapper-->
            </nav>
            <!-- END Top Navbar-->
        </header>
        <!-- sidebar-->
        <aside class="aside">
            <!-- START Sidebar (left)-->
            <div class="aside-inner">
                <nav data-sidebar-anyclick-close="" class="sidebar">
                    <!-- START sidebar nav-->
                    <ul class="nav">
                      
                              
                               
                                <li>
                                    <a href="/admin/candidate/indexview" title="查询系统">
                                        <em class="fa fa-search"></em>
                                        <span>条款查询</span>
                                    </a>
                                </li>

                                 <!-- <li>
                                    <a href="/admin/candidate/indexview2" title="查询系统">
                                        <em class="fa fa-search"></em>
                                        <span>疾病查询</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/admin/candidate/statistics" title="数据统计">
                                        <em class="fa fa-bar-chart"></em>
                                        <span>数据统计</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/admin/candidate/konwledge" title="知识图谱">
                                        <em class="fa fa-map-o"></em>
                                        <span>知识图谱</span>
                                    </a>
                                </li> -->
                                <li >
                                    <a href="/admin/user/changePassword" title="修改密码">
                                        <em class="icon-lock"></em>
                                        <span>修改密码</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/admin/account/doLogout" title="退出系统">
                                        <em class="icon-logout"></em>
                                        <span>退出系统</span>
                                    </a>
                                </li>
                           
                        

                    </ul>
                    <!-- END sidebar nav-->
                </nav>
            </div>
            <!-- END Sidebar (left)-->
        </aside>
        <!-- offsidebar-->
        <!-- Main section-->
        <section>
            <!-- Page content-->
            <div class="content-wrapper">
                <div class="content-heading">
                    保险重大疾病条目查询
                </div>
                
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="panel panel-default">
          <div class="panel-body">
            <table id="datatable" class="table table-striped table-hover">
              <thead>
                <tr>
                  <th class="col-2">项目名<?php echo ($id); ?></th>
                  <th class="col-9">项目详情</th>
                  <th class="col-1">操作</th>
                </tr>
              </thead>
              <tbody>
                <?php if(is_array($illde)): $i = 0; $__LIST__ = $illde;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$de): $mod = ($i % 2 );++$i;?><tr>
                    <td><?php echo ($de["name"]); ?> </td>
                    <td><?php echo ($de["exp"]); ?></td>
                    <td>
                      <a class="btn btn-xs btn-default" href="javascript:;" data-update="<?php echo ($de["name"]); ?>&<?php echo ($de["exp"]); ?>&<?php echo ($de["num"]); ?>"><i class="fa fa-search"></i> </a>&nbsp;
                      <a class="btn btn-danger btn-xs" href="javascript:;" data-remove="<?php echo ($de["num"]); ?>"><i class="fa fa-trash"></i></a></td>
                  </tr><?php endforeach; endif; else: echo "" ;endif; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

            </div>
        </section>
        <!-- Page footer-->
        <footer>
            <!-- =============== VENDOR SCRIPTS- 信息管理与工程学院（上海财经大学） ===============-->
             <span>&copy; 2018 新机智能保险管理系统 </span>
        </footer>
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
    <!-- =============== PAGE VENDOR SCRIPTS ===============-->
    
  <script src="/Public/Admin/vendor/datatables/media/js/jquery.dataTables.min.js"></script>
  <script src="/Public/Admin/vendor/datatables-colvis/js/dataTables.colVis.js"></script>
  <script src="/Public/Admin/vendor/datatables/media/js/dataTables.bootstrap.js"></script>
  <script src="/Public/Admin/vendor/sweetalert/dist/sweetalert.min.js"></script>
  <script src="/Public/Admin/vendor/moment/min/moment-with-locales.min.js"></script>
  <script src="/Public/Admin/vendor/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>

    <!-- =============== APP SCRIPTS ===============-->
    <script src="/Public/Admin/js/app.js"></script>
    
  <script>
  $(function() {
    //datatable初始化
    $('#datatable').dataTable({
      dom: 'lfrt<"table-toolbar mv-lg">p',
      paging: false,
      ordering: false,
      info: true,
      autoWidth: false,
      oLanguage: {
        sSearch: '搜索',
        sZeroRecords: '没有相关记录',
        sInfoEmpty: '0条记录'
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
    //删除条目
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
          $.post('/admin/candidate/deletede', { num: dateId }, function(res) {

            swal({
              title: "删除成功",
              type: "success",
            }, function() {
              window.location.reload();
            });

          });
        });
    });
    //修改条目
    $('#datatable').on('click', '[data-update]', function() {
      var dateId = $(this).data('update').split('&');
      var name = dateId[0];
      var exp = dateId[1];
      var num = dateId[2];
      swal({
          title: "修改内容",
          text: "修改" + name + "条目",
          type: "input",
          showCancelButton: true,
          confirmButtonColor: "#DD6B55",
          confirmButtonText: "修改完毕",
          cancelButtonText: "取消",
          closeOnConfirm: false,
          inputValue: exp
        },
        function(inputValue) {
          // inputValue=encodeURIComponent(inputValue);
          $.post('/admin/candidate/updatede', { id: num, value: inputValue }, function(res) {
            swal({
              title: "修改成功",
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