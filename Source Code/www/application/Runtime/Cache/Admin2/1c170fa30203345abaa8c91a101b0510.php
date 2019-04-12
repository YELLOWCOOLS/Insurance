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
        总体数据报告
      </div>
      <ol class="am-breadcrumb">
        <li><a href="#" class="am-icon-home">首页</a></li>
        <li><a href="#">总体数据报告</a></li>
        
      </ol>
      <div class="tpl-portlet-components">
        <div class="portlet-title">
          <div class="caption font-green bold">
            <span class="am-icon-code"></span> 浏览流量图
          </div>
        </div>
        <div class="tpl-block">
         <!--  <div class="am-g">
            <div class="am-u-sm-12 am-u-md-3">
              <div class="am-form-group">
                <select data-am-selected="{btnSize: 'sm'}">
                  <option value="option1">所有类别</option>
                  <option value="option2">IT业界</option>
                  <option value="option3">数码产品</option>
                  <option value="option3">笔记本电脑</option>
                  <option value="option3">平板电脑</option>
                  <option value="option3">只能手机</option>
                  <option value="option3">超极本</option>
                </select>
              </div>
            </div>
            <div class="am-u-sm-12 am-u-md-3">
              <div class="am-input-group am-input-group-sm">
                <input type="text" class="am-form-field">
                <span class="am-input-group-btn">
                  <button class="am-btn  am-btn-default am-btn-success tpl-am-btn-success am-icon-search" type="button"></button>
                </span>
              </div>
            </div>
          </div> -->
          <!--此部分数据请在 js文件夹下中的 app.js 中的 “百度图表A” 处修改数据 插件使用的是 百度echarts-->
          <div class="tpl-echarts tpl-chart-mb" id="tpl-echarts-A">
          </div>
          <div class="portlet-title">
            <div class="caption font-green bold">
              <span class="am-icon-code"></span> 竞争力分析
            </div>
          </div>
          <div class="tpl-echarts tpl-chart-mb" id="tpl-echarts-B">
          </div>
          <div class="portlet-title">
            <div class="caption font-green bold">
              <span class="am-icon-code"></span> 收藏用户量
            </div>
          </div>
          <div class="tpl-echarts tpl-chart-mb" id="tpl-echarts-C">
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

    
</body>

</html>