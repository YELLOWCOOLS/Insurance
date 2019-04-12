<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Amaze UI Admin index Examples</title>
  <meta name="description" content="这是一个 index 页面">
  <meta name="keywords" content="index">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <link rel="icon" type="image/png" href="/Public/Admin/assets/i/favicon.png">
  <link rel="apple-touch-icon-precomposed" href="/Public/Admin/assets/i/app-icon72x72@2x.png">
  <meta name="apple-mobile-web-app-title" content="Amaze UI" />
  <link rel="stylesheet" href="/Public/Admin/assets/css/amazeui.min.css" />
  <link rel="stylesheet" href="/Public/Admin/assets/css/admin.css">
  <link rel="stylesheet" href="/Public/Admin/assets/css/app.css">
  <script src="/Public/Admin/assets/js/echarts.min.js"></script>
  
  
</head>

<body data-type=<?php echo ($html_name); ?>>
  <header class="am-topbar am-topbar-inverse admin-header">
    <div class="am-topbar-brand">
      <a href="javascript:;" class="tpl-logo">
        <img src="/Public/Admin/assets/img/logo.png" alt="">
      </a>
    </div>
    <div class="am-icon-list tpl-header-nav-hover-ico am-fl am-margin-right">
    </div>
    <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>
    <div class="am-collapse am-topbar-collapse" id="topbar-collapse">
      <ul class="am-nav am-nav-pills am-topbar-nav am-topbar-right admin-header-list tpl-header-list">
        <li class="am-dropdown" data-am-dropdown data-am-dropdown-toggle>
          <a class="am-dropdown-toggle tpl-header-list-link" href="javascript:;">
            <span class="tpl-header-list-user-nick">禁言小张</span><span class="tpl-header-list-user-ico"> <img src="/Public/Admin/assets/img/user01.png"></span>
          </a>
          <ul class="am-dropdown-content">
            <li><a href="#"><span class="am-icon-bell-o"></span> 资料</a></li>
            <li><a href="#"><span class="am-icon-cog"></span> 设置</a></li>
            <li><a href="#"><span class="am-icon-power-off"></span> 退出</a></li>
          </ul>
        </li>
        <li><a href="###" class="tpl-header-list-link"><span class="am-icon-sign-out tpl-header-list-ico-out-size"></span></a></li>
      </ul>
    </div>
  </header>
  <div class="tpl-page-container tpl-page-header-fixed">
    <div class="tpl-left-nav tpl-left-nav-hover">
      <div class="tpl-left-nav-title">
        管理系统列表
      </div>
      <div class="tpl-left-nav-list">
        <ul class="tpl-left-nav-menu">
          <li class="tpl-left-nav-item">
            <a href="/admin2/manage/index.html" class="nav-link active">
              <i class="am-icon-home"></i>
              <span>首页</span>
            </a>
          </li>
          <li class="tpl-left-nav-item">
            <a href="javascript:;" class="nav-link tpl-left-nav-link-list">
              <i class="am-icon-bar-chart"></i>
              <span>数据报告</span>
                <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right"></i>
            </a>
            <ul class="tpl-left-nav-sub-menu">
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
              <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right"></i>
            </a>
            <ul class="tpl-left-nav-sub-menu">
              <li>
                <a href="/admin2/manage/table_font_list.html">
                  <i class="am-icon-angle-right"></i>
                  <span>合同浏览</span>
                </a>
                <a href="/admin2/manage/table_images_list.html">
                  <i class="am-icon-angle-right"></i>
                  <span>合同上传</span>
                  <i class="am-icon-star tpl-left-nav-content-ico am-fr am-margin-right"></i>
                </a>
                <a href="/admin2/manage/form_news.html">
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
            <a href="login.html" class="nav-link tpl-left-nav-link-list">
              <i class="am-icon-key"></i>
              <span>退出</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
    
        <div class="tpl-content-wrapper">
            <div class="tpl-content-page-title">
                Amaze UI 表单
            </div>
            <ol class="am-breadcrumb">
                <li><a href="#" class="am-icon-home">首页</a></li>
                <li><a href="#">表单</a></li>
                <li class="am-active">Amaze UI 表单</li>
            </ol>
            <div class="tpl-portlet-components">
                <div class="portlet-title">
                    <div class="caption font-green bold">
                        <span class="am-icon-code"></span> 表单
                    </div>
                    <div class="tpl-portlet-input tpl-fz-ml">
                        <div class="portlet-input input-small input-inline">
                            <div class="input-icon right">
                                <i class="am-icon-search"></i>
                                <input type="text" class="form-control form-control-solid" placeholder="搜索..."> </div>
                        </div>
                    </div>


                </div>
                <div class="tpl-block">
                    <div class="am-g">
                        <div class="am-u-sm-12 am-u-md-6">
                            <div class="am-btn-toolbar">
                                <div class="am-btn-group am-btn-group-xs">
                                    <button type="button" class="am-btn am-btn-default am-btn-success"><span class="am-icon-plus"></span> 新增</button>
                                    <button type="button" class="am-btn am-btn-default am-btn-secondary"><span class="am-icon-save"></span> 保存</button>
                                    <button type="button" class="am-btn am-btn-default am-btn-warning"><span class="am-icon-archive"></span> 审核</button>
                                    <button type="button" class="am-btn am-btn-default am-btn-danger"><span class="am-icon-trash-o"></span> 删除</button>
                                </div>
                            </div>
                        </div>
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
                    </div>

                    <ul class="tpl-task-list">
                        <li>
                            <div class="task-checkbox">
                                <input type="hidden" value="1" name="test">
                                <input type="checkbox" class="liChild" value="2" name="test"> </div>
                            <div class="task-title">
                                <span class="task-title-sp"> Amaze UI Icon 组件目前使用了 Font Awesome </span>
                                <span class="label label-sm label-success">技术部</span>
                                <span class="task-bell">
                                            <i class="am-icon-bell-o"></i>
                                        </span>
                            </div>
                            <div class="task-config">
                                <div class="am-dropdown tpl-task-list-dropdown" data-am-dropdown="">
                                    <a href="###" class="am-dropdown-toggle tpl-task-list-hover " data-am-dropdown-toggle="">
                                        <i class="am-icon-cog"></i> <span class="am-icon-caret-down"></span>
                                    </a>
                                    <ul class="am-dropdown-content tpl-task-list-dropdown-ul">
                                        <li>
                                            <a href="javascript:;">
                                                <i class="am-icon-check"></i> 保存 </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="am-icon-pencil"></i> 编辑 </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="am-icon-trash-o"></i> 删除 </a>
                                        </li>
                                    </ul>


                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="task-checkbox">
                                <input type="hidden" value="1" name="test">
                                <input type="checkbox" class="liChild" value="2" name="test"> </div>
                            <div class="task-title">
                                <span class="task-title-sp"> 在 data-am-dropdown 里指定要适应到的元素，下拉内容的宽度会设置为该元素的宽度。当然可以直接在 CSS 里设置下拉内容的宽度。 </span>
                                <span class="label label-sm label-danger">运营</span>

                            </div>
                            <div class="task-config">
                                <div class="am-dropdown tpl-task-list-dropdown" data-am-dropdown="">
                                    <a href="###" class="am-dropdown-toggle tpl-task-list-hover " data-am-dropdown-toggle="">
                                        <i class="am-icon-cog"></i> <span class="am-icon-caret-down"></span>
                                    </a>
                                    <ul class="am-dropdown-content tpl-task-list-dropdown-ul">
                                        <li>
                                            <a href="javascript:;">
                                                <i class="am-icon-check"></i> 保存 </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="am-icon-pencil"></i> 编辑 </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="am-icon-trash-o"></i> 删除 </a>
                                        </li>
                                    </ul>


                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="task-checkbox">
                                <input type="hidden" value="1" name="test">
                                <input type="checkbox" class="liChild" value="2" name="test"> </div>
                            <div class="task-title">
                                <span class="task-title-sp"> 使用 LESS： 通过设置变量 @fa-font-path 覆盖默认的值，如 @fa-font-path: "../fonts";。这个变量定义在 icon.less 里。 </span>
                                <span class="label label-sm label-warning">市场部</span>

                            </div>
                            <div class="task-config">
                                <div class="am-dropdown tpl-task-list-dropdown" data-am-dropdown="">
                                    <a href="###" class="am-dropdown-toggle tpl-task-list-hover " data-am-dropdown-toggle="">
                                        <i class="am-icon-cog"></i> <span class="am-icon-caret-down"></span>
                                    </a>
                                    <ul class="am-dropdown-content tpl-task-list-dropdown-ul">
                                        <li>
                                            <a href="javascript:;">
                                                <i class="am-icon-check"></i> 保存 </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="am-icon-pencil"></i> 编辑 </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="am-icon-trash-o"></i> 删除 </a>
                                        </li>
                                    </ul>


                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="task-checkbox">
                                <input type="hidden" value="1" name="test">
                                <input type="checkbox" class="liChild" value="2" name="test"> </div>
                            <div class="task-title">
                                <span class="task-title-sp"> 添加 .am-btn-group-justify class 让按钮组里的按钮平均分布，填满容器宽度。 </span>
                                <span class="label label-sm label-default">已废弃</span>

                            </div>
                            <div class="task-config">
                                <div class="am-dropdown tpl-task-list-dropdown" data-am-dropdown="">
                                    <a href="###" class="am-dropdown-toggle tpl-task-list-hover " data-am-dropdown-toggle="">
                                        <i class="am-icon-cog"></i> <span class="am-icon-caret-down"></span>
                                    </a>
                                    <ul class="am-dropdown-content tpl-task-list-dropdown-ul">
                                        <li>
                                            <a href="javascript:;">
                                                <i class="am-icon-check"></i> 保存 </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="am-icon-pencil"></i> 编辑 </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="am-icon-trash-o"></i> 删除 </a>
                                        </li>
                                    </ul>


                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="task-checkbox">
                                <input type="hidden" value="1" name="test">
                                <input type="checkbox" class="liChild" value="2" name="test"> </div>
                            <div class="task-title">
                                <span class="task-title-sp"> 按照示例组织好 HTML 结构（不加 data-am-dropdown 属性），然后通过 JS 来调用。 </span>
                                <span class="label label-sm label-success">技术部</span>
                                <span class="task-bell">
                                            <i class="am-icon-bell-o"></i>
                                        </span>
                            </div>
                            <div class="task-config">
                                <div class="am-dropdown tpl-task-list-dropdown" data-am-dropdown="">
                                    <a href="###" class="am-dropdown-toggle tpl-task-list-hover " data-am-dropdown-toggle="">
                                        <i class="am-icon-cog"></i> <span class="am-icon-caret-down"></span>
                                    </a>
                                    <ul class="am-dropdown-content tpl-task-list-dropdown-ul">
                                        <li>
                                            <a href="javascript:;">
                                                <i class="am-icon-check"></i> 保存 </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="am-icon-pencil"></i> 编辑 </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="am-icon-trash-o"></i> 删除 </a>
                                        </li>
                                    </ul>


                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="task-checkbox">
                                <input type="hidden" value="1" name="test">
                                <input type="checkbox" class="liChild" value="2" name="test"> </div>
                            <div class="task-title">
                                <span class="task-title-sp"> 添加 .am-btn-group-justify class 让按钮组里的按钮平均分布，填满容器宽度。 </span>
                                <span class="label label-sm label-default">已废弃</span>

                            </div>
                            <div class="task-config">
                                <div class="am-dropdown tpl-task-list-dropdown" data-am-dropdown="">
                                    <a href="###" class="am-dropdown-toggle tpl-task-list-hover " data-am-dropdown-toggle="">
                                        <i class="am-icon-cog"></i> <span class="am-icon-caret-down"></span>
                                    </a>
                                    <ul class="am-dropdown-content tpl-task-list-dropdown-ul">
                                        <li>
                                            <a href="javascript:;">
                                                <i class="am-icon-check"></i> 保存 </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="am-icon-pencil"></i> 编辑 </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="am-icon-trash-o"></i> 删除 </a>
                                        </li>
                                    </ul>


                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="task-checkbox">
                                <input type="hidden" value="1" name="test">
                                <input type="checkbox" class="liChild" value="2" name="test"> </div>
                            <div class="task-title">
                                <span class="task-title-sp"> 使用 LESS： 通过设置变量 @fa-font-path 覆盖默认的值，如 @fa-font-path: "../fonts";。这个变量定义在 icon.less 里。 </span>
                                <span class="label label-sm label-warning">市场部</span>

                            </div>
                            <div class="task-config">
                                <div class="am-dropdown tpl-task-list-dropdown" data-am-dropdown="">
                                    <a href="###" class="am-dropdown-toggle tpl-task-list-hover " data-am-dropdown-toggle="">
                                        <i class="am-icon-cog"></i> <span class="am-icon-caret-down"></span>
                                    </a>
                                    <ul class="am-dropdown-content tpl-task-list-dropdown-ul">
                                        <li>
                                            <a href="javascript:;">
                                                <i class="am-icon-check"></i> 保存 </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="am-icon-pencil"></i> 编辑 </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="am-icon-trash-o"></i> 删除 </a>
                                        </li>
                                    </ul>


                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="task-checkbox">
                                <input type="hidden" value="1" name="test">
                                <input type="checkbox" class="liChild" value="2" name="test"> </div>
                            <div class="task-title">
                                <span class="task-title-sp"> 添加 .am-btn-group-justify class 让按钮组里的按钮平均分布，填满容器宽度。 </span>
                                <span class="label label-sm label-default">已废弃</span>

                            </div>
                            <div class="task-config">
                                <div class="am-dropdown tpl-task-list-dropdown" data-am-dropdown="">
                                    <a href="###" class="am-dropdown-toggle tpl-task-list-hover " data-am-dropdown-toggle="">
                                        <i class="am-icon-cog"></i> <span class="am-icon-caret-down"></span>
                                    </a>
                                    <ul class="am-dropdown-content tpl-task-list-dropdown-ul">
                                        <li>
                                            <a href="javascript:;">
                                                <i class="am-icon-check"></i> 保存 </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="am-icon-pencil"></i> 编辑 </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="am-icon-trash-o"></i> 删除 </a>
                                        </li>
                                    </ul>


                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="task-checkbox">
                                <input type="hidden" value="1" name="test">
                                <input type="checkbox" class="liChild" value="2" name="test"> </div>
                            <div class="task-title">
                                <span class="task-title-sp"> 按照示例组织好 HTML 结构（不加 data-am-dropdown 属性），然后通过 JS 来调用。 </span>
                                <span class="label label-sm label-success">技术部</span>
                                <span class="task-bell">
                                            <i class="am-icon-bell-o"></i>
                                        </span>
                            </div>
                            <div class="task-config">
                                <div class="am-dropdown tpl-task-list-dropdown" data-am-dropdown="">
                                    <a href="###" class="am-dropdown-toggle tpl-task-list-hover " data-am-dropdown-toggle="">
                                        <i class="am-icon-cog"></i> <span class="am-icon-caret-down"></span>
                                    </a>
                                    <ul class="am-dropdown-content tpl-task-list-dropdown-ul">
                                        <li>
                                            <a href="javascript:;">
                                                <i class="am-icon-check"></i> 保存 </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="am-icon-pencil"></i> 编辑 </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="am-icon-trash-o"></i> 删除 </a>
                                        </li>
                                    </ul>


                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="task-checkbox">
                                <input type="hidden" value="1" name="test">
                                <input type="checkbox" class="liChild" value="2" name="test"> </div>
                            <div class="task-title">
                                <span class="task-title-sp"> 添加 .am-btn-group-justify class 让按钮组里的按钮平均分布，填满容器宽度。 </span>
                                <span class="label label-sm label-default">已废弃</span>

                            </div>
                            <div class="task-config">
                                <div class="am-dropdown tpl-task-list-dropdown" data-am-dropdown="">
                                    <a href="###" class="am-dropdown-toggle tpl-task-list-hover " data-am-dropdown-toggle="">
                                        <i class="am-icon-cog"></i> <span class="am-icon-caret-down"></span>
                                    </a>
                                    <ul class="am-dropdown-content tpl-task-list-dropdown-ul">
                                        <li>
                                            <a href="javascript:;">
                                                <i class="am-icon-check"></i> 保存 </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="am-icon-pencil"></i> 编辑 </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="am-icon-trash-o"></i> 删除 </a>
                                        </li>
                                    </ul>


                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="task-checkbox">
                                <input type="hidden" value="1" name="test">
                                <input type="checkbox" class="liChild" value="2" name="test"> </div>
                            <div class="task-title">
                                <span class="task-title-sp"> 使用 LESS： 通过设置变量 @fa-font-path 覆盖默认的值，如 @fa-font-path: "../fonts";。这个变量定义在 icon.less 里。 </span>
                                <span class="label label-sm label-warning">市场部</span>

                            </div>
                            <div class="task-config">
                                <div class="am-dropdown tpl-task-list-dropdown" data-am-dropdown="">
                                    <a href="###" class="am-dropdown-toggle tpl-task-list-hover " data-am-dropdown-toggle="">
                                        <i class="am-icon-cog"></i> <span class="am-icon-caret-down"></span>
                                    </a>
                                    <ul class="am-dropdown-content tpl-task-list-dropdown-ul">
                                        <li>
                                            <a href="javascript:;">
                                                <i class="am-icon-check"></i> 保存 </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="am-icon-pencil"></i> 编辑 </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="am-icon-trash-o"></i> 删除 </a>
                                        </li>
                                    </ul>


                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="task-checkbox">
                                <input type="hidden" value="1" name="test">
                                <input type="checkbox" class="liChild" value="2" name="test"> </div>
                            <div class="task-title">
                                <span class="task-title-sp"> 添加 .am-btn-group-justify class 让按钮组里的按钮平均分布，填满容器宽度。 </span>
                                <span class="label label-sm label-default">已废弃</span>

                            </div>
                            <div class="task-config">
                                <div class="am-dropdown tpl-task-list-dropdown" data-am-dropdown="">
                                    <a href="###" class="am-dropdown-toggle tpl-task-list-hover " data-am-dropdown-toggle="">
                                        <i class="am-icon-cog"></i> <span class="am-icon-caret-down"></span>
                                    </a>
                                    <ul class="am-dropdown-content tpl-task-list-dropdown-ul">
                                        <li>
                                            <a href="javascript:;">
                                                <i class="am-icon-check"></i> 保存 </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="am-icon-pencil"></i> 编辑 </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="am-icon-trash-o"></i> 删除 </a>
                                        </li>
                                    </ul>


                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="task-checkbox">
                                <input type="hidden" value="1" name="test">
                                <input type="checkbox" class="liChild" value="2" name="test"> </div>
                            <div class="task-title">
                                <span class="task-title-sp"> 按照示例组织好 HTML 结构（不加 data-am-dropdown 属性），然后通过 JS 来调用。 </span>
                                <span class="label label-sm label-success">技术部</span>
                                <span class="task-bell">
                                            <i class="am-icon-bell-o"></i>
                                        </span>
                            </div>
                            <div class="task-config">
                                <div class="am-dropdown tpl-task-list-dropdown" data-am-dropdown="">
                                    <a href="###" class="am-dropdown-toggle tpl-task-list-hover " data-am-dropdown-toggle="">
                                        <i class="am-icon-cog"></i> <span class="am-icon-caret-down"></span>
                                    </a>
                                    <ul class="am-dropdown-content tpl-task-list-dropdown-ul">
                                        <li>
                                            <a href="javascript:;">
                                                <i class="am-icon-check"></i> 保存 </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="am-icon-pencil"></i> 编辑 </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="am-icon-trash-o"></i> 删除 </a>
                                        </li>
                                    </ul>


                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="task-checkbox">
                                <input type="hidden" value="1" name="test">
                                <input type="checkbox" class="liChild" value="2" name="test"> </div>
                            <div class="task-title">
                                <span class="task-title-sp"> 添加 .am-btn-group-justify class 让按钮组里的按钮平均分布，填满容器宽度。 </span>
                                <span class="label label-sm label-default">已废弃</span>

                            </div>
                            <div class="task-config">
                                <div class="am-dropdown tpl-task-list-dropdown" data-am-dropdown="">
                                    <a href="###" class="am-dropdown-toggle tpl-task-list-hover " data-am-dropdown-toggle="">
                                        <i class="am-icon-cog"></i> <span class="am-icon-caret-down"></span>
                                    </a>
                                    <ul class="am-dropdown-content tpl-task-list-dropdown-ul">
                                        <li>
                                            <a href="javascript:;">
                                                <i class="am-icon-check"></i> 保存 </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="am-icon-pencil"></i> 编辑 </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="am-icon-trash-o"></i> 删除 </a>
                                        </li>
                                    </ul>


                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="task-checkbox">
                                <input type="hidden" value="1" name="test">
                                <input type="checkbox" class="liChild" value="2" name="test"> </div>
                            <div class="task-title">
                                <span class="task-title-sp"> 使用 LESS： 通过设置变量 @fa-font-path 覆盖默认的值，如 @fa-font-path: "../fonts";。这个变量定义在 icon.less 里。 </span>
                                <span class="label label-sm label-warning">市场部</span>

                            </div>
                            <div class="task-config">
                                <div class="am-dropdown tpl-task-list-dropdown" data-am-dropdown="">
                                    <a href="###" class="am-dropdown-toggle tpl-task-list-hover " data-am-dropdown-toggle="">
                                        <i class="am-icon-cog"></i> <span class="am-icon-caret-down"></span>
                                    </a>
                                    <ul class="am-dropdown-content tpl-task-list-dropdown-ul">
                                        <li>
                                            <a href="javascript:;">
                                                <i class="am-icon-check"></i> 保存 </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="am-icon-pencil"></i> 编辑 </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="am-icon-trash-o"></i> 删除 </a>
                                        </li>
                                    </ul>


                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="task-checkbox">
                                <input type="hidden" value="1" name="test">
                                <input type="checkbox" class="liChild" value="2" name="test"> </div>
                            <div class="task-title">
                                <span class="task-title-sp"> 添加 .am-btn-group-justify class 让按钮组里的按钮平均分布，填满容器宽度。 </span>
                                <span class="label label-sm label-default">已废弃</span>

                            </div>
                            <div class="task-config">
                                <div class="am-dropdown tpl-task-list-dropdown" data-am-dropdown="">
                                    <a href="###" class="am-dropdown-toggle tpl-task-list-hover " data-am-dropdown-toggle="">
                                        <i class="am-icon-cog"></i> <span class="am-icon-caret-down"></span>
                                    </a>
                                    <ul class="am-dropdown-content tpl-task-list-dropdown-ul">
                                        <li>
                                            <a href="javascript:;">
                                                <i class="am-icon-check"></i> 保存 </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="am-icon-pencil"></i> 编辑 </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="am-icon-trash-o"></i> 删除 </a>
                                        </li>
                                    </ul>


                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="task-checkbox">
                                <input type="hidden" value="1" name="test">
                                <input type="checkbox" class="liChild" value="2" name="test"> </div>
                            <div class="task-title">
                                <span class="task-title-sp"> 按照示例组织好 HTML 结构（不加 data-am-dropdown 属性），然后通过 JS 来调用。 </span>
                                <span class="label label-sm label-success">技术部</span>
                                <span class="task-bell">
                                            <i class="am-icon-bell-o"></i>
                                        </span>
                            </div>
                            <div class="task-config">
                                <div class="am-dropdown tpl-task-list-dropdown" data-am-dropdown="">
                                    <a href="###" class="am-dropdown-toggle tpl-task-list-hover " data-am-dropdown-toggle="">
                                        <i class="am-icon-cog"></i> <span class="am-icon-caret-down"></span>
                                    </a>
                                    <ul class="am-dropdown-content tpl-task-list-dropdown-ul">
                                        <li>
                                            <a href="javascript:;">
                                                <i class="am-icon-check"></i> 保存 </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="am-icon-pencil"></i> 编辑 </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="am-icon-trash-o"></i> 删除 </a>
                                        </li>
                                    </ul>


                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>










        </div>

    </div>


   <block name="script">
  <script src="/Public/Admin/assets/js/app.js"></script>

    <script src="/Public/Admin/assets/js/jquery.min.js"></script>
    <script src="/Public/Admin/assets/js/amazeui.min.js"></script>
    <script src="/Public/Admin/assets/js/iscroll.js"></script>
    
      <script src="/Public/Admin/assets/js/app.js"></script>
    
</body>

</html>