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
  
  <link rel="stylesheet" href="/Public/Admin/assets/css/index.css">

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
      中国人寿保险公司
    </div>
    <ol class="am-breadcrumb">
      <li><a href="#" class="am-icon-home">首页</a></li>
    </ol>
    <div class="tpl-content-scope">
      <div class="note note-info">
        <h3>微小保
          <span class="close" data-close="note"></span>
        </h3>
        <p> 为您提供最方便，便捷的管理渠道。感谢您的使用</p>
        <p><span class="label label-danger">提示:</span>出现bug或其它错误情况请联系331323279@qq.com
        </p>
      </div>
    </div>
    <div class="row tag-bar">
      <div class="am-u-lg-3 am-u-md-6 am-u-sm-12">
        <div class="dashboard-stat blue">
          <div class="visual">
            <i class="am-icon-comments-o"></i>
          </div>
          <div class="details">
            <div class="number"> 1349 </div>
            <div class="desc"> 新增浏览量 </div>
          </div>
        </div>
      </div>
      <div class="am-u-lg-3 am-u-md-6 am-u-sm-12">
        <div class="dashboard-stat red">
          <div class="visual">
            <i class="am-icon-bar-chart-o"></i>
          </div>
          <div class="details">
            <div class="number"> 100 </div>
            <div class="desc"> 新增收藏量 </div>
          </div>
        </div>
      </div>
      <div class="am-u-lg-3 am-u-md-6 am-u-sm-12">
        <div class="dashboard-stat green">
          <div class="visual">
            <i class="am-icon-reply-all"></i>
          </div>
          <div class="details">
            <div class="number"> 11% </div>
            <div class="desc"> 7天回访率 </div>
          </div>
        </div>
      </div>
      <div class="am-u-lg-3 am-u-md-6 am-u-sm-12">
        <div class="dashboard-stat purple">
          <div class="visual">
            <i class="am-icon-hand-pointer-o"></i>
          </div>
          <div class="details">
            <div class="number"> 22% </div>
            <div class="desc"> 推荐点击率 </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="am-u-md-6 am-u-sm-12 row-mb">
        <div class="tpl-portlet">
          <div class="tpl-portlet-title">
            <div class="tpl-caption font-green ">
              <i class="am-icon-cloud-download"></i>
              <span> 浏览量数据统计</span>
            </div>
          </div>
          <!--此部分数据请在 js文件夹下中的 app.js 中的 “百度图表A” 处修改数据 插件使用的是 百度echarts-->
          <div class="tpl-echarts" id="tpl-echarts-A">
          </div>
        </div>
      </div>
      <div class="am-u-md-6 am-u-sm-12 row-mb">
        <div class="tpl-portlet">
          <div class="tpl-portlet-title">
            <div class="tpl-caption font-red ">
              <i class="am-icon-bar-chart"></i>
              <span> 收藏量排名</span>
            </div>
          </div>
          <div class="tpl-scrollable">
            <div class="number-stats">
              <div class="stat-number am-fl am-u-md-6">
                <div class="title am-text-right"> Total </div>
                <div class="number am-text-right am-text-warning"> 2460 </div>
              </div>
              <div class="stat-number am-fr am-u-md-6">
                <div class="title"> Total </div>
                <div class="number am-text-success"> 2460 </div>
              </div>
            </div>
            <table class="am-table tpl-table">
              <thead>
                <tr class="tpl-table-uppercase">
                  <th>保险名称</th>
                  <th>收藏量</th>
                  <th>收藏量占比</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    1.<a class="user-name" href="###">国寿康宁终身重大疾病保险</a>
                  </td>
                  <td>241</td>
                  <td class="font-green bold">9.2%</td>
                </tr>
                <tr>
                  <td>
                    2.<a class="user-name" href="###">国寿附加安欣无忧提前给付重大疾病保险</a>
                  </td>
                  <td>210</td>
                  <td class="font-green bold">8.1%</td>
                </tr>
                <tr>
                  <td>
                    3.<a class="user-name" href="###">国寿康元终身重大疾病保险</a>
                  </td>
                  <td>190</td>
                  <td class="font-green bold">7.3%</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="am-u-md-6 am-u-sm-12 row-mb">
        <div class="tpl-portlet">
          <div class="tpl-portlet-title">
            <div class="tpl-caption font-green ">
              <span>新的评论</span>
              <span class="caption-helper">16 件</span>
            </div>
            <div class="tpl-portlet-input">
              <div class="portlet-input input-small input-inline">
                <div class="input-icon right">
                  <i class="am-icon-search"></i>
                  <input type="text" class="form-control form-control-solid" placeholder="搜索..."> </div>
              </div>
            </div>
          </div>
          <div id="wrapper" class="wrapper">
            <div id="scroller" class="scroller">
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
                    <div class="am-dropdown tpl-task-list-dropdown" data-am-dropdown>
                      <a href="###" class="am-dropdown-toggle tpl-task-list-hover " data-am-dropdown-toggle>
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
                    <div class="am-dropdown tpl-task-list-dropdown" data-am-dropdown>
                      <a href="###" class="am-dropdown-toggle tpl-task-list-hover " data-am-dropdown-toggle>
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
                    <div class="am-dropdown tpl-task-list-dropdown" data-am-dropdown>
                      <a href="###" class="am-dropdown-toggle tpl-task-list-hover " data-am-dropdown-toggle>
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
                    <div class="am-dropdown tpl-task-list-dropdown" data-am-dropdown>
                      <a href="###" class="am-dropdown-toggle tpl-task-list-hover " data-am-dropdown-toggle>
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
                    <div class="am-dropdown tpl-task-list-dropdown" data-am-dropdown>
                      <a href="###" class="am-dropdown-toggle tpl-task-list-hover " data-am-dropdown-toggle>
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
                    <div class="am-dropdown tpl-task-list-dropdown" data-am-dropdown>
                      <a href="###" class="am-dropdown-toggle tpl-task-list-hover " data-am-dropdown-toggle>
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
                    <div class="am-dropdown tpl-task-list-dropdown" data-am-dropdown>
                      <a href="###" class="am-dropdown-toggle tpl-task-list-hover " data-am-dropdown-toggle>
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
                    <div class="am-dropdown tpl-task-list-dropdown" data-am-dropdown>
                      <a href="###" class="am-dropdown-toggle tpl-task-list-hover " data-am-dropdown-toggle>
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
                    <div class="am-dropdown tpl-task-list-dropdown" data-am-dropdown>
                      <a href="###" class="am-dropdown-toggle tpl-task-list-hover " data-am-dropdown-toggle>
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
      <div class="am-u-md-6 am-u-sm-12 row-mb">
        <div class="tpl-portlet">
          <div class="tpl-portlet-title">
            <div class="tpl-caption font-green ">
              <span>新的咨询</span>
            </div>
          </div>
          <div class="am-tabs tpl-index-tabs" data-am-tabs>
            <ul class="am-tabs-nav am-nav am-nav-tabs">
              <li class="am-active"><a href="#tab1">进行中</a></li>
              <li><a href="#tab2">已完成</a></li>
            </ul>
            <div class="am-tabs-bd">
              <div class="am-tab-panel am-fade am-in am-active" id="tab1">
                <div id="wrapperA" class="wrapper">
                  <div id="scroller" class="scroller">
                    <ul class="tpl-task-list tpl-task-remind">
                      <li>
                        <div class="cosB">
                          12分钟前
                        </div>
                        <div class="cosA">
                          <span class="cosIco">
                            <i class="am-icon-bell-o"></i>
                          </span>
                          <span> 注意：Chrome 和 Firefox 下， display: inline-block; 或 display: block; 的元素才会应用旋转动画。<span class="tpl-label-info"> 提取文件
                              <i class="am-icon-share"></i>
                            </span></span>
                        </div>
                      </li>
                      <li>
                        <div class="cosB">
                          36分钟前
                        </div>
                        <div class="cosA">
                          <span class="cosIco label-danger">
                            <i class="am-icon-bolt"></i>
                          </span>
                          <span> FontAwesome 在绘制图标的时候不同图标宽度有差异， 添加 .am-icon-fw 将图标设置为固定的宽度，解决宽度不一致问题（v2.3 新增）。</span>
                        </div>
                      </li>
                      <li>
                        <div class="cosB">
                          2小时前
                        </div>
                        <div class="cosA">
                          <span class="cosIco label-info">
                            <i class="am-icon-bullhorn"></i>
                          </span>
                          <span> 使用 flexbox 实现，只兼容 IE 10+ 及其他现代浏览器。</span>
                        </div>
                      </li>
                      <li>
                        <div class="cosB">
                          1天前
                        </div>
                        <div class="cosA">
                          <span class="cosIco label-warning">
                            <i class="am-icon-plus"></i>
                          </span>
                          <span> 部分用户反应在过长的 Tabs 中滚动页面时会意外触发 Tab 切换事件，用户可以选择禁用触控操作。</span>
                        </div>
                      </li>
                      <li>
                        <div class="cosB">
                          12分钟前
                        </div>
                        <div class="cosA">
                          <span class="cosIco">
                            <i class="am-icon-bell-o"></i>
                          </span>
                          <span> 注意：Chrome 和 Firefox 下， display: inline-block; 或 display: block; 的元素才会应用旋转动画。<span class="tpl-label-info"> 提取文件
                              <i class="am-icon-share"></i>
                            </span></span>
                        </div>
                      </li>
                      <li>
                        <div class="cosB">
                          36分钟前
                        </div>
                        <div class="cosA">
                          <span class="cosIco label-danger">
                            <i class="am-icon-bolt"></i>
                          </span>
                          <span> FontAwesome 在绘制图标的时候不同图标宽度有差异， 添加 .am-icon-fw 将图标设置为固定的宽度，解决宽度不一致问题（v2.3 新增）。</span>
                        </div>
                      </li>
                      <li>
                        <div class="cosB">
                          2小时前
                        </div>
                        <div class="cosA">
                          <span class="cosIco label-info">
                            <i class="am-icon-bullhorn"></i>
                          </span>
                          <span> 使用 flexbox 实现，只兼容 IE 10+ 及其他现代浏览器。</span>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="am-tab-panel am-fade" id="tab2">
                <div id="wrapperB" class="wrapper">
                  <div id="scroller" class="scroller">
                    <ul class="tpl-task-list tpl-task-remind">
                      <li>
                        <div class="cosB">
                          12分钟前
                        </div>
                        <div class="cosA">
                          <span class="cosIco">
                            <i class="am-icon-bell-o"></i>
                          </span>
                          <span> 注意：Chrome 和 Firefox 下， display: inline-block; 或 display: block; 的元素才会应用旋转动画。<span class="tpl-label-info"> 提取文件
                              <i class="am-icon-share"></i>
                            </span></span>
                        </div>
                      </li>
                      <li>
                        <div class="cosB">
                          36分钟前
                        </div>
                        <div class="cosA">
                          <span class="cosIco label-danger">
                            <i class="am-icon-bolt"></i>
                          </span>
                          <span> FontAwesome 在绘制图标的时候不同图标宽度有差异， 添加 .am-icon-fw 将图标设置为固定的宽度，解决宽度不一致问题（v2.3 新增）。</span>
                        </div>
                      </li>
                      <li>
                        <div class="cosB">
                          2小时前
                        </div>
                        <div class="cosA">
                          <span class="cosIco label-info">
                            <i class="am-icon-bullhorn"></i>
                          </span>
                          <span> 使用 flexbox 实现，只兼容 IE 10+ 及其他现代浏览器。</span>
                        </div>
                      </li>
                      <li>
                        <div class="cosB">
                          1天前
                        </div>
                        <div class="cosA">
                          <span class="cosIco label-warning">
                            <i class="am-icon-plus"></i>
                          </span>
                          <span> 部分用户反应在过长的 Tabs 中滚动页面时会意外触发 Tab 切换事件，用户可以选择禁用触控操作。</span>
                        </div>
                      </li>
                      <li>
                        <div class="cosB">
                          12分钟前
                        </div>
                        <div class="cosA">
                          <span class="cosIco">
                            <i class="am-icon-bell-o"></i>
                          </span>
                          <span> 注意：Chrome 和 Firefox 下， display: inline-block; 或 display: block; 的元素才会应用旋转动画。<span class="tpl-label-info"> 提取文件
                              <i class="am-icon-share"></i>
                            </span></span>
                        </div>
                      </li>
                      <li>
                        <div class="cosB">
                          36分钟前
                        </div>
                        <div class="cosA">
                          <span class="cosIco label-danger">
                            <i class="am-icon-bolt"></i>
                          </span>
                          <span> FontAwesome 在绘制图标的时候不同图标宽度有差异， 添加 .am-icon-fw 将图标设置为固定的宽度，解决宽度不一致问题（v2.3 新增）。</span>
                        </div>
                      </li>
                      <li>
                        <div class="cosB">
                          2小时前
                        </div>
                        <div class="cosA">
                          <span class="cosIco label-info">
                            <i class="am-icon-bullhorn"></i>
                          </span>
                          <span> 使用 flexbox 实现，只兼容 IE 10+ 及其他现代浏览器。</span>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
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

    
</body>

</html>