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
                <a href="/admin2/manage/select_ins.html">
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
       <!--    <li class="tpl-left-nav-item">
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
          </li> -->
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
      智能解析合同文件
    </div>
    <ol class="am-breadcrumb">
      <li><a href="#" class="am-icon-home">首页</a></li>
      <li><a href="#">上传</a></li>
    </ol>
    <div class="tpl-portlet-components">
      <div class="portlet-title">
        <div class="caption font-green bold">
          <span class="am-icon-code"></span> 基本信息填写
        </div>
        <!--  <div class="tpl-portlet-input tpl-fz-ml">
                        <div class="portlet-input input-small input-inline">
                            <div class="input-icon right">
                                <i class="am-icon-search"></i>
                                <input type="text" class="form-control form-control-solid" placeholder="搜索..."> </div>
                        </div>
                    </div> -->
      </div>
      <div class="tpl-block ">
        <div class="am-g tpl-amazeui-form">
          <div class="am-u-sm-12 am-u-md-9">
            <form action="/admin2/manage/uploadfile" enctype="multipart/form-data" method='post' class="am-form am-form-horizontal">
              <div class="am-form-group">
                <label for="user-name" class="am-u-sm-3 am-form-label">合同名称 / Name</label>
                <div class="am-u-sm-9">
                  <input type="text" name="ins_name" placeholder="姓名 / Name">
                  <small>请输入合同全称：如幸福附加康福宝重大疾病保险（C款）</small>
                </div>
              </div>
              <div class="am-form-group">
                <label for="user-name" class="am-u-sm-3 am-form-label">公司名称 / CpName</label>
                <div class="am-u-sm-9">
                  <input type="text" name="cp_name" placeholder="公司名称 / CpName">
                  <small>请输入公司全称如：北大方正人寿保险有限公司</small>
                </div>
              </div>
              <div class="am-form-group">
                <label class="am-u-sm-3 am-form-label">合同类型 / type</label>
                <div class="am-u-sm-9">
                  <input type="email" id="ins_type" placeholder="重大疾病保险" disabled>
                  <small>现仅能自动处理重大疾病类型的合同..</small>
                </div>
              </div>
              <div class="am-form-group">
                <label for="user-intro" class="am-u-sm-3 am-form-label">简介 / Intro</label>
                <div class="am-u-sm-9">
                  <textarea class="" rows="5" id="user-intro" placeholder="对于合同的简介"></textarea>
                  <small>250字以内</small>
                </div>
              </div>
              <div class="am-form-group am-form-file">
                <div class="am-u-sm-9 am-u-sm-push-3">
                  <button type="button" class="am-btn am-btn-danger am-btn-sm">
                    <i class="am-icon-cloud-upload"></i> 选择要上传的文件</button>
                  <input id="doc-form-file" name="file" type="file">
                </div>
                <div class="am-u-sm-9 am-u-sm-push-3">
                  <small>2M以内的合同TXT文件，如提交PDF文件将无法实时进行处理</small>
                </div>
                <div id="file-list"></div>
              </div>
              <div class="am-form-group">
                <div class="am-u-sm-9 am-u-sm-push-3">
                  <button type="submit" class="am-btn am-btn-primary">提交</button>
                </div>
              </div>
            </form>

       

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


    
  <script src="/Public/Admin/assets/js/app.js"></script>
  <script>
  $(function() {
    $('#doc-form-file').on('change', function() {
      var fileNames = '';
      $.each(this.files, function() {
        fileNames += '<span class="am-badge">' + this.name + '</span> ';
      });
      $('#file-list').html(fileNames);
    });
  });

  </script>

    
</body>

</html>