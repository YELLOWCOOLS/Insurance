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
      项目确定
    </div>
    <ol class="am-breadcrumb">
      <li><a href="#" class="am-icon-home">首页</a></li>
      <li><a href="#">解析结果确认</a></li>
    </ol>
    <div class="container-fluid page1">
      <div class="row">
        <div class="col-lg-12">
          <div class="panel panel-default">
            <div class="panel-body">
              <table id="datatable" class="table table-striped table-hover">
                <thead>
                  <tr>
                    <th class="col-2" style=“width:15%">保险条目</th>
                    <th class="col-8" style='width:60%'>条目解释</th>
                    <th class="col-2" style='width:25%'>操作</th>
                  </tr>
                </thead>
                <tbody>
                  <?php if(is_array($all)): $i = 0; $__LIST__ = $all;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$al): $mod = ($i % 2 );++$i;?><tr>
                      <td><?php echo ($al["name"]); ?> </td>
                      <td><?php echo ($al["exp"]); ?></td>
                      <td>
                        <a class="btn btn-xs btn-default" href="javascript:;" data-updenaid="<?php echo ($al["num"]); ?>" data-updenavl="<?php echo ($al["name"]); ?>"><i class="am-icon-plus"></i> 修改条目</a>&nbsp;
                        <a class="btn btn-xs btn-default" href="javascript:;" data-updeexid="<?php echo ($al["num"]); ?>" data-updeexvl="<?php echo ($al["exp"]); ?>"><i class="am-icon-plus"></i> 修改内容</a>&nbsp;
                        <a class="btn btn-danger btn-xs" href="javascript:;" data-redeid="<?php echo ($al["num"]); ?>"><i class="am-icon-trash"></i>删除整条</a></td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div data-am-widget="gotop" class="am-gotop am-gotop-default">
        <a href="#top" class="next1" title="确认下一项">
          <span class="am-gotop-title">确认下一项</span>
          <i class="am-gotop-icon am-icon-chevron-up"></i>
        </a>
      </div>
    </div>
    <div class="container-fluid page2">
      <div class="row">
        <div class="col-lg-12">
          <div class="panel panel-default">
            <div class="panel-body">
              <table id="datatable2" class="table table-striped table-hover">
                <thead>
                  <tr>
                    <th class="col-2" style=“width:15%">疾病名称</th>
                    <th class="col-8" style='width:60%'>疾病释义</th>
                    <th class="col-2" style='width:25%'>操作</th>
                  </tr>
                </thead>
                <tbody>
                  <?php if(is_array($illlist)): $i = 0; $__LIST__ = $illlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$al): $mod = ($i % 2 );++$i;?><tr>
                      <td><?php echo ($al["illname"]); ?> </td>
                      <td><?php echo ($al["illexp"]); ?></td>
                      <td>
                        <a class="btn btn-xs btn-default" href="javascript:;" data-upilnaid="<?php echo ($al["num"]); ?>" data-upilnavl="<?php echo ($al["illname"]); ?>"><i class="am-icon-plus"></i> 修改条目</a>&nbsp;
                        <a class="btn btn-xs btn-default" href="javascript:;" data-upilexid="<?php echo ($al["num"]); ?>" data-upilexvl="<?php echo ($al["illexp"]); ?>"><i class="am-icon-plus"></i> 修改内容</a>&nbsp;
                        <a class="btn btn-danger btn-xs" href="javascript:;" data-reilid="<?php echo ($al["num"]); ?>"><i class="am-icon-trash"></i>删除整条</a></td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div data-am-widget="gotop" class="am-gotop am-gotop-default">
        <a href="#top" class="next2" title="确认下一项">
          <span class="am-gotop-title">确认下一项</span>
          <i class="am-gotop-icon am-icon-chevron-up"></i>
        </a>
      </div>
    </div>
    <div class="container-fluid page3">
      <div class="row">
        <div class="col-lg-12">
          <div class="panel panel-default">
            <div class="panel-body">
              <table id="datatable3" class="table table-striped table-hover">

                <thead>
                  <tr>
                    <th class="col-2" style=“width:20%">num</th>
                    <th class="col-8" style='width:60%'>标签项</th>
                    <th class="col-2" style='width:20%'>操作</th>
                  </tr>
                </thead>
                <tbody>
                  <?php if(is_array($tag)): $i = 0; $__LIST__ = $tag;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tg): $mod = ($i % 2 );++$i;?><tr>
                      <td><?php echo ($tg["num"]); ?></td>
                      <td><?php echo ($tg["tag2"]); ?></td>
                      <td>
                        <a class="btn btn-danger btn-xs" href="javascript:;" data-remove="<?php echo ($tg["num"]); ?>"><i class="am-icon-trash"></i></a></td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody>
  <a id ="add" class="btn btn-xs btn-default" style="float:right;" href="javascript:;" data-update="<?php echo ($tg["num"]); ?>"><i class="am-icon-plus"></i> 添加新的标签项</a>&nbsp;
              </table>
            </div>
          
          </div>
        </div>

      </div>
      <button type="button" style='float: right; margin-bottom: 5rem' class="am-btn am-btn-secondary next3">确认下一项</button>
    </div>
    <div class="page4  panel panel-default">
      <div class="am-form-group am-container" style="margin-top: 5rem">
        <div class='am-g' style="height: 4rem ;font-size: 2rem;">
          勾选保险标签
        </div>
        <small>可多选，最多显示3条</small>
        <div class="label_ku" style="margin-top: 2rem">
          <?php if(is_array($right)): $i = 0; $__LIST__ = $right;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ri): $mod = ($i % 2 );++$i;?><label class="am-checkbox-inline" style="min-width: 30rem;margin-left: 0">
              <input type="checkbox"  value="<?php echo ($ri["tag1"]); ?>"> <?php echo ($ri["tag1"]); ?>
            </label><?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
        <p><button type="submit" id ="confirm" class="am-btn am-btn-default" style="margin-top:3rem">确认提交</button></p>
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
    $("#confirm").click(function() {
        var chk_value =[0,0,0,0];
    
        $('input:checkbox:checked').each(function(index){
          if(index>=4){
            return 0 ;
          }
          chk_value[index]=$(this).val();
        });

        $.post('/admin2/manage/add_right', { id: <?php echo ($id); ?>,tag1:chk_value[0],tag2:chk_value[1],tag3:chk_value[2],tag4:chk_value[3] }, function(res) {

              if (res == "ok") {
                swal({
                  title: "添加合同成功",
                  type: "success",
                }, function() {
                  window.location.href = "/admin2/manage/index";
                });
              } else {
                swal({
                  title: "添加合同失败",
                  type: "failed",
                }, function() {

                });
              }
            });
          });
    
    var page = <?php echo ($page); ?>;
    if (page == 0) {
      $(".page1").css('display', '');
      $(".page2").css('display', 'none');
      $(".page3").css('display', 'none');
      $(".page4").css('display', 'none');
    }
    if (page == 1) {
      $(".page2").css('display', '');
      $(".page1").css('display', 'none');
      $(".page3").css('display', 'none');
      $(".page4").css('display', 'none');
    }
    if (page == 2) {
      $(".page3").css('display', '');
      $(".page1").css('display', 'none');
      $(".page2").css('display', 'none');
      $(".page4").css('display', 'none');
    }

   if (page == 3) {
      $(".page4").css('display', '');
      $(".page1").css('display', 'none');
      $(".page2").css('display', 'none');
      $(".page3").css('display', 'none');
    }


    $(".next1").click(function() {
      $(".page1").css('display', 'none');
      $(".page2").css('display', '');
      page = 1;
    });
    $(".next2").click(function() {
      $(".page2").css('display', 'none');
      $(".page3").css('display', '');
      page = 2;
    });
    $(".next3").click(function() {
      $(".page3").css('display', 'none');
      $(".page4").css('display', '');
      page = 3;
    })

    $('#datatable3').dataTable({
      dom: 'lfrt<"table-toolbar mv-lg">p',
      paging: false,
      ordering: false,
      info: true,
      autoWidth: false,
      searching : false,
      oLanguage: {
        
        sZeroRecords: '没有相关记录',
        sInfoEmpty: '0条记录'
      }
    });


    //删除条目
    $('#datatable3').on('click', '[data-remove]', function() {
      var num = $(this).data('remove');
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
        function(inputValue) {
          if (inputValue) {
            $.post('/admin2/manage/delete_tag', { id: num }, function(res) {
              if (res == "ok") {
                swal({
                  title: "删除成功",
                  type: "success",
                }, function() {
                  window.location.href = "/admin2/manage/get_data_all/id/" + <?php echo ($id); ?> + "/page/" + page;
                });
              } else {
                swal({
                  title: "删除失败",
                  type: "failed",
                }, function() {

                });
              }
            });
          }
        });
    });
    //添加条目
    $('#add').on('click', function() {
      
      
      swal({
          title: "添加条目",
          text: "添加条目",
          type: "input",
          showCancelButton: true,
          confirmButtonColor: "#DD6B55",
          confirmButtonText: "确认添加",
          cancelButtonText: "取消",
          closeOnConfirm: false,
          inputValue: ""
        },
        function(inputValue) {
          if (inputValue) {
            $.post('/admin2/manage/add_tag', { id: <?php echo ($id); ?>, value: inputValue }, function(res) {
              if (res == "ok") {
                swal({
                  title: "修改成功",
                  type: "success",
                }, function() {
                  window.location.href = "/admin2/manage/get_data_all/id/" + <?php echo ($id); ?> + "/page/" + page;
                });
              } else {
                swal({
                  title: "修改失败",
                  type: "failed",
                }, function() {

                });
              }
            });
          }


        });
    });


    $('#datatable2').dataTable({
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


    //删除条目
    $('#datatable2').on('click', '[data-reilid]', function() {
      var num = $(this).data('reilid');
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
        function(inputValue) {
          if (inputValue) {
            $.post('/admin2/manage/delete_il', { id: num }, function(res) {
              if (res == "ok") {
                swal({
                  title: "删除成功",
                  type: "success",
                }, function() {
                  window.location.href = "/admin2/manage/get_data_all/id/" + <?php echo ($id); ?> + "/page/" + page;
                });
              } else {
                swal({
                  title: "删除失败",
                  type: "failed",
                }, function() {

                });
              }
            });
          }
        });
    });
    //修改条目
    $('#datatable2').on('click', '[data-upilnaid]', function() {


      var name = $(this).data('upilnavl');
      var num = $(this).data('upilnaid');
      swal({
          title: "修改内容",
          text: "修改条目",
          type: "input",
          showCancelButton: true,
          confirmButtonColor: "#DD6B55",
          confirmButtonText: "修改完毕",
          cancelButtonText: "取消",
          closeOnConfirm: false,
          inputValue: name
        },
        function(inputValue) {
          if (inputValue) {
            $.post('/admin2/manage/update_il_name', { id: num, value: inputValue }, function(res) {
              if (res == "ok") {
                swal({
                  title: "修改成功",
                  type: "success",
                }, function() {
                  window.location.href = "/admin2/manage/get_data_all/id/" + <?php echo ($id); ?> + "/page/" + page;
                });
              } else {
                swal({
                  title: "修改失败",
                  type: "failed",
                }, function() {

                });
              }
            });
          }


        });
    });

    //修改释义
    $('#datatable2').on('click', '[data-upilexid]', function() {
      var exp = $(this).data('upilexvl');
      var num = $(this).data('upilexid');
      swal({
          title: "修改内容",
          text: "修改内容",
          type: "input",
          showCancelButton: true,
          confirmButtonColor: "#DD6B55",
          confirmButtonText: "修改完毕",
          cancelButtonText: "取消",
          closeOnConfirm: false,
          inputValue: exp
        },
        function(inputValue) {
          if (inputValue) {
            $.post('/admin2/manage/update_il_exp', { id: num, value: inputValue }, function(res) {
              if (res == "ok") {
                swal({
                  title: "修改成功",
                  type: "success",
                }, function() {
                  window.location.href = "/admin2/manage/get_data_all/id/" + <?php echo ($id); ?> + "/page/" + page;
                });
              } else {
                swal({
                  title: "修改失败",
                  type: "failed",
                }, function() {

                });
              }
            });
          }
        });
    });


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

    $("#datetimepicker-start").on("dp.change", function(e) {
      $("#datetimepicker-end").data("DateTimePicker").minDate(e.date);
    });
    $("#datetimepicker-end").on("dp.change", function(e) {
      $("#datetimepicker-start").data("DateTimePicker").maxDate(e.date);
    });

    //删除条目
    $('#datatable').on('click', '[data-redeid]', function() {
      var num = $(this).data('redeid');
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
        function(inputValue) {
          if (inputValue) {
            $.post('/admin2/manage/delete_de', { id: num }, function(res) {
              if (res == "ok") {
                swal({
                  title: "删除成功",
                  type: "success",
                }, function() {
                  window.location.href = "/admin2/manage/get_data_all/id/" + <?php echo ($id); ?> + "/page/" + page;
                });
              } else {
                swal({
                  title: "删除失败",
                  type: "failed",
                }, function() {

                });
              }
            });
          }
        });
    });
    //修改条目
    $('#datatable').on('click', '[data-updenaid]', function() {


      var name = $(this).data('updenavl');
      var num = $(this).data('updenaid');
      swal({
          title: "修改内容",
          text: "修改条目",
          type: "input",
          showCancelButton: true,
          confirmButtonColor: "#DD6B55",
          confirmButtonText: "修改完毕",
          cancelButtonText: "取消",
          closeOnConfirm: false,
          inputValue: name
        },
        function(inputValue) {
          if (inputValue) {
            $.post('/admin2/manage/update_de_name', { id: num, value: inputValue }, function(res) {
              if (res == "ok") {
                swal({
                  title: "修改成功",
                  type: "success",
                }, function() {
                  window.location.href = "/admin2/manage/get_data_all/id/" + <?php echo ($id); ?> + "/page/" + page;
                });
              } else {
                swal({
                  title: "修改失败",
                  type: "failed",
                }, function() {

                });
              }
            });
          }


        });
    });

    //修改释义
    $('#datatable').on('click', '[data-updeexid]', function() {
      var exp = $(this).data('updeexvl');
      var num = $(this).data('updeexid');
      swal({
          title: "修改内容",
          text: "修改内容",
          type: "input",
          showCancelButton: true,
          confirmButtonColor: "#DD6B55",
          confirmButtonText: "修改完毕",
          cancelButtonText: "取消",
          closeOnConfirm: false,
          inputValue: exp
        },
        function(inputValue) {
          if (inputValue) {
            $.post('/admin2/manage/update_de_exp', { id: num, value: inputValue }, function(res) {
              if (res == "ok") {
                swal({
                  title: "修改成功",
                  type: "success",
                }, function() {
                  window.location.href = "/admin2/manage/get_data_all/id/" + <?php echo ($id); ?> + "/page/" + page;
                });
              } else {
                swal({
                  title: "修改失败",
                  type: "failed",
                }, function() {

                });
              }
            });
          }
        });
    });
  });

  </script>

    
</body>

</html>