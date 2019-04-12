<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>微小保后台管理系统</title>
  <meta name="keywords" content="index">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <link rel="icon" type="image/png" href="/Public/Admin/assets/i/favicon.png">
  <link rel="apple-touch-icon-precomposed" href="/Public/Admin/assets/i/app-icon72x72@2x.png">
  <link rel="stylesheet" href="/Public/Admin/assets/css/amazeui.min.css" />
  <link rel="stylesheet" href="/Public/Admin/assets/css/admin.css">
  <link rel="stylesheet" href="/Public/Admin/assets/css/app.css">
  <script src="/Public/Admin/assets/js/echarts.min.js"></script>
  
  <link rel="stylesheet" type="text/css" href="/Public/Admin/vendor/datatables-colvis/css/dataTables.colVis.css" />
  <link rel="stylesheet" type="text/css" href="/Public/Admin/vendor/datatables/media/css/dataTables.bootstrap.css" />
  <link rel="stylesheet" type="text/css" href="/Public/Admin/vendor/dataTables.fontAwesome/index.css" />
  <link rel="stylesheet" type="text/css" href="/Public/Admin/vendor/sweetalert/dist/sweetalert.css" />
  <link rel="stylesheet" type="text/css" href="/Public/Admin/vendor/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" />
  <link rel="stylesheet" type="text/css" href="/Public/Admin/css/zy.css" />
  <link rel="stylesheet" type="text/css" href="/Public/Admin/css/bootstrap.css" />

 
  </style>

</head>

<body data-type=<?php echo ($html_name); ?>>
  <header class="am-topbar am-topbar-inverse admin-header">
    <div class="am-topbar-brand">
      <a  class="am-icon-btn am-secondary am-icon-shield"></a>
      <span>微小保</span>
    </div>
    <div class="am-icon-list tpl-header-nav-hover-ico am-fl am-margin-right">
    </div>
    <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>
    <div class="am-collapse am-topbar-collapse" id="topbar-collapse">
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
    </div>
  </header>
  <div class="tpl-page-container tpl-page-header-fixed">
    <div class="tpl-left-nav tpl-left-nav-hover">
      <div class="tpl-left-nav-title">
        管理系统功能列表
      </div>
      <div class="tpl-left-nav-list">
        <ul class="tpl-left-nav-menu">
          <li class="tpl-left-nav-item">
            <a href="/admin2/manage/index.html" class="nav-link ">
              <i class="am-icon-home"></i>
              <span>首页</span>
            </a>
          </li>
          <li class="tpl-left-nav-item">
            <a href="javascript:;" class="nav-link tpl-left-nav-link-list">
              <i class="am-icon-bar-chart"></i>
              <span>数据报告</span>
              <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right tpl-left-nav-more-ico-rotate"></i>
            </a>
            <ul class="tpl-left-nav-sub-menu" style="display: block;">
              <li>
                <a href="/admin2/manage/chart.html">
                  <i class="am-icon-angle-right"></i>
                  <span>总体数据报告</span>
                </a>
                <a href="/admin2/manage/table_images_list.html">
                  <i class="am-icon-angle-right"></i>
                  <span>合同数据报告</span>
                  <i class="am-icon-star tpl-left-nav-content-ico am-fr am-margin-right"></i>
                </a>
              </li>
            </ul>
          </li>
          <li class="tpl-left-nav-item">
            <a href="javascript:;" class="nav-link tpl-left-nav-link-list">
              <i class="am-icon-table"></i>
              <span>合同管理</span>
              <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right tpl-left-nav-more-ico-rotate"></i>
            </a>
            <ul class="tpl-left-nav-sub-menu" style="display: block;">
              <li>
                <a href="/admin2/manage/search_ins.html">
                  <i class="am-icon-angle-right"></i>
                  <span>合同浏览</span>
                </a>
                <a href="/admin2/manage/table_images_list.html">
                  <i class="am-icon-angle-right"></i>
                  <span>合同上传</span>
                  <i class="am-icon-star tpl-left-nav-content-ico am-fr am-margin-right"></i>
                </a>
                <a href="/admin2/manage/change_state_ins.html">
                  <i class="am-icon-angle-right"></i>
                  <span>合同状态管理</span>
                </a>
              </li>
            </ul>
          </li>
          <li class="tpl-left-nav-item">
            <a href="javascript:;" class="nav-link tpl-left-nav-link-list">
              <i class="am-icon-wpforms"></i>
              <span>账号管理</span>
              <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right tpl-left-nav-more-ico-rotate"></i>
            </a>
            <ul class="tpl-left-nav-sub-menu" style="display: block;">
              <li>
                <a href="/admin2/manage/form_amazeui.html">
                  <i class="am-icon-angle-right"></i>
                  <span>申请管理员账号</span>
                  <i class="am-icon-star tpl-left-nav-content-ico am-fr am-margin-right"></i>
                </a>
                <a href="/admin2/manage/form_line.html">
                  <i class="am-icon-angle-right"></i>
                  <span>修改资料</span>
                </a>
                <a href="/admin2/manage/form_line.html">
                  <i class="am-icon-angle-right"></i>
                  <span>密码修改</span>
                </a>
              </li>
            </ul>
          </li>
          <li class="tpl-left-nav-item">
            <a href="/admin2/manage/log_out" class="nav-link tpl-left-nav-link-list">
              <i class="am-icon-key"></i>
              <span>退出</span>
            </a>
          </li>
        </ul>
      </div>
    </div>




    
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="panel panel-default">
          <div class="panel-body">
            <table id="datatable" class="table table-striped table-hover">
              <thead>
                <tr>
                  <th class="col-2" style =“width:20%" >保险id<?php echo ($id); ?></th>
                  <th class="col-8" style ='width:60%'>项目详情</th>
                  <th class="col-2" style ='width:20%'>操作</th>
                </tr>
              </thead>
              <tbody>
                <?php if(is_array($illde)): $i = 0; $__LIST__ = $illde;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$de): $mod = ($i % 2 );++$i;?><tr>
                    <td><?php echo ($de["name"]); ?> </td>
                    <td><?php echo ($de["exp"]); ?></td>
                    <td>
                      <a class="btn btn-xs btn-default" href="javascript:;" data-update="<?php echo ($de["name"]); ?>&<?php echo ($de["exp"]); ?>&<?php echo ($de["num"]); ?>"><i class="am-icon-plus"></i> </a>&nbsp;
                      <a class="btn btn-danger btn-xs" href="javascript:;" data-remove="<?php echo ($de["num"]); ?>"><i class="am-icon-trash"></i></a></td>
                  </tr><?php endforeach; endif; else: echo "" ;endif; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

    <script src="/Public/Admin/assets/js/jquery.min.js"></script>
    <script src="/Public/Admin/assets/js/amazeui.min.js"></script>
    <script src="/Public/Admin/assets/js/iscroll.js"></script>
    <script src="/Public/Admin/assets/js/app.js"></script>


    
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