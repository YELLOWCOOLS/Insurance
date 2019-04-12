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




    
<div class="tpl-content-wrapper">
    <div class="tpl-content-page-title">
      中国人寿保险公司
    </div>
    <ol class="am-breadcrumb">
      <li><a href="#" class="am-icon-home">首页</a></li>
      <li><a href="#">合同状态浏览</a></li>
    </ol>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="panel panel-default">
          <div class="panel-body">
            <table id="datatable" class="table table-striped table-hover">
              <thead>
                <tr>
                  <th class="col-1">编号</th>
                  <th class="col-4">公司名</th>
                  <th class="col-4">保险名称</th>
                  <th class ='col-1'>状态</th>
                  <th class="col-2">操作</th>
                </tr>
              </thead>
              <tbody>
                <?php if(is_array($ins)): $i = 0; $__LIST__ = $ins;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$in): $mod = ($i % 2 );++$i;?><tr>
                    <td><?php echo ($in["id"]); ?> </td>
                    <td><?php echo ($in["cpname"]); ?></td>
                    <td><?php echo ($in["name"]); ?></td>

                    
                      <?php if($in["state"] == false): ?><td>
                        显示
                      </td>
                       <td>
                      <a class="btn btn-xs btn-default" href="javascript:;"  data-update="<?php echo ($in["id"]); ?>/state/<?php echo ($in["state"]); ?>">隐藏 </a>
                      </td>
                      <?php else: ?>
                      <td>
                      隐藏
                      </td>
                       <td>
                      <a class="btn btn-xs btn-default" href="javascript:;" data-update="<?php echo ($in["id"]); ?>/state/<?php echo ($in["state"]); ?>">显示 </a>
                      </td><?php endif; ?>
                      
                      
                  </tr><?php endforeach; endif; else: echo "" ;endif; ?>
              </tbody>
            </table>
          </div>
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
   
    $('#datatable').on('click', '[data-update]', function() {
      var dataId = $(this).data('update');
      
      　window.location.href="/admin2/manage/change_state/id/"+dataId;
    });

  });

  </script>

    
</body>

</html>