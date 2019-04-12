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
    <a href="##" class="am-icon-btn am-secondary am-icon-shield"></a>
      <span>微小保</span>
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
        管理系统功能列表
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
              <i class="am-icon-bar-chart" ></i>
              <span>数据报告</span>
                <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right"></i>
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
              <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right"></i>
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
      Amaze UI 文字列表
    </div>
    <ol class="am-breadcrumb">
      <li><a href="#" class="am-icon-home">首页</a></li>
      <li><a href="#">Amaze UI CSS</a></li>
      <li class="am-active">文字列表</li>
    </ol>
    <div class="tpl-portlet-components">
      <div class="portlet-title">
        <div class="caption font-green bold">
          <span class="am-icon-code"></span> 列表
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
        <div class="am-g">
          <div class="am-u-sm-12">
            <form class="am-form">
              <table class="am-table am-table-striped am-table-hover table-main">
                <thead>
                  <tr>
                    <th class="table-check"><input type="checkbox" class="tpl-table-fz-check"></th>
                    <th class="table-id">ID</th>
                    <th class="table-title">标题</th>
                    <th class="table-type">类别</th>
                    <th class="table-author am-hide-sm-only">作者</th>
                    <th class="table-date am-hide-sm-only">修改日期</th>
                    <th class="table-set">操作</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><input type="checkbox"></td>
                    <td>1</td>
                    <td><a href="#">Business management</a></td>
                    <td>default</td>
                    <td class="am-hide-sm-only">测试1号</td>
                    <td class="am-hide-sm-only">2014年9月4日 7:28:47</td>
                    <td>
                      <div class="am-btn-toolbar">
                        <div class="am-btn-group am-btn-group-xs">
                          <button class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                          <button class="am-btn am-btn-default am-btn-xs am-hide-sm-only"><span class="am-icon-copy"></span> 复制</button>
                          <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> 删除</button>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td><input type="checkbox"></td>
                    <td>2</td>
                    <td><a href="#">Business management</a></td>
                    <td>default</td>
                    <td class="am-hide-sm-only">测试1号</td>
                    <td class="am-hide-sm-only">2014年9月4日 7:28:47</td>
                    <td>
                      <div class="am-btn-toolbar">
                        <div class="am-btn-group am-btn-group-xs">
                          <button class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                          <button class="am-btn am-btn-default am-btn-xs am-hide-sm-only"><span class="am-icon-copy"></span> 复制</button>
                          <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> 删除</button>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td><input type="checkbox"></td>
                    <td>3</td>
                    <td><a href="#">Business management</a></td>
                    <td>default</td>
                    <td class="am-hide-sm-only">测试1号</td>
                    <td class="am-hide-sm-only">2014年9月4日 7:28:47</td>
                    <td>
                      <div class="am-btn-toolbar">
                        <div class="am-btn-group am-btn-group-xs">
                          <button class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                          <button class="am-btn am-btn-default am-btn-xs am-hide-sm-only"><span class="am-icon-copy"></span> 复制</button>
                          <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> 删除</button>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td><input type="checkbox"></td>
                    <td>4</td>
                    <td><a href="#">Business management</a></td>
                    <td>default</td>
                    <td class="am-hide-sm-only">测试1号</td>
                    <td class="am-hide-sm-only">2014年9月4日 7:28:47</td>
                    <td>
                      <div class="am-btn-toolbar">
                        <div class="am-btn-group am-btn-group-xs">
                          <button class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                          <button class="am-btn am-btn-default am-btn-xs am-hide-sm-only"><span class="am-icon-copy"></span> 复制</button>
                          <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> 删除</button>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td><input type="checkbox"></td>
                    <td>5</td>
                    <td><a href="#">Business management</a></td>
                    <td>default</td>
                    <td class="am-hide-sm-only">测试1号</td>
                    <td class="am-hide-sm-only">2014年9月4日 7:28:47</td>
                    <td>
                      <div class="am-btn-toolbar">
                        <div class="am-btn-group am-btn-group-xs">
                          <button class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                          <button class="am-btn am-btn-default am-btn-xs am-hide-sm-only"><span class="am-icon-copy"></span> 复制</button>
                          <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> 删除</button>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td><input type="checkbox"></td>
                    <td>6</td>
                    <td><a href="#">Business management</a></td>
                    <td>default</td>
                    <td class="am-hide-sm-only">测试1号</td>
                    <td class="am-hide-sm-only">2014年9月4日 7:28:47</td>
                    <td>
                      <div class="am-btn-toolbar">
                        <div class="am-btn-group am-btn-group-xs">
                          <button class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                          <button class="am-btn am-btn-default am-btn-xs am-hide-sm-only"><span class="am-icon-copy"></span> 复制</button>
                          <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> 删除</button>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td><input type="checkbox"></td>
                    <td>7</td>
                    <td><a href="#">Business management</a></td>
                    <td>default</td>
                    <td class="am-hide-sm-only">测试1号</td>
                    <td class="am-hide-sm-only">2014年9月4日 7:28:47</td>
                    <td>
                      <div class="am-btn-toolbar">
                        <div class="am-btn-group am-btn-group-xs">
                          <button class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                          <button class="am-btn am-btn-default am-btn-xs am-hide-sm-only"><span class="am-icon-copy"></span> 复制</button>
                          <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> 删除</button>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td><input type="checkbox"></td>
                    <td>8</td>
                    <td><a href="#">Business management</a></td>
                    <td>default</td>
                    <td class="am-hide-sm-only">测试1号</td>
                    <td class="am-hide-sm-only">2014年9月4日 7:28:47</td>
                    <td>
                      <div class="am-btn-toolbar">
                        <div class="am-btn-group am-btn-group-xs">
                          <button class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                          <button class="am-btn am-btn-default am-btn-xs am-hide-sm-only"><span class="am-icon-copy"></span> 复制</button>
                          <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> 删除</button>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td><input type="checkbox"></td>
                    <td>9</td>
                    <td><a href="#">Business management</a></td>
                    <td>default</td>
                    <td class="am-hide-sm-only">测试1号</td>
                    <td class="am-hide-sm-only">2014年9月4日 7:28:47</td>
                    <td>
                      <div class="am-btn-toolbar">
                        <div class="am-btn-group am-btn-group-xs">
                          <button class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                          <button class="am-btn am-btn-default am-btn-xs am-hide-sm-only"><span class="am-icon-copy"></span> 复制</button>
                          <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> 删除</button>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td><input type="checkbox"></td>
                    <td>10</td>
                    <td><a href="#">Business management</a></td>
                    <td>default</td>
                    <td class="am-hide-sm-only">测试1号</td>
                    <td class="am-hide-sm-only">2014年9月4日 7:28:47</td>
                    <td>
                      <div class="am-btn-toolbar">
                        <div class="am-btn-group am-btn-group-xs">
                          <button class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                          <button class="am-btn am-btn-default am-btn-xs am-hide-sm-only"><span class="am-icon-copy"></span> 复制</button>
                          <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> 删除</button>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td><input type="checkbox"></td>
                    <td>11</td>
                    <td><a href="#">Business management</a></td>
                    <td>default</td>
                    <td class="am-hide-sm-only">测试1号</td>
                    <td class="am-hide-sm-only">2014年9月4日 7:28:47</td>
                    <td>
                      <div class="am-btn-toolbar">
                        <div class="am-btn-group am-btn-group-xs">
                          <button class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                          <button class="am-btn am-btn-default am-btn-xs am-hide-sm-only"><span class="am-icon-copy"></span> 复制</button>
                          <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> 删除</button>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td><input type="checkbox"></td>
                    <td>12</td>
                    <td><a href="#">Business management</a></td>
                    <td>default</td>
                    <td class="am-hide-sm-only">测试1号</td>
                    <td class="am-hide-sm-only">2014年9月4日 7:28:47</td>
                    <td>
                      <div class="am-btn-toolbar">
                        <div class="am-btn-group am-btn-group-xs">
                          <button class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                          <button class="am-btn am-btn-default am-btn-xs am-hide-sm-only"><span class="am-icon-copy"></span> 复制</button>
                          <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> 删除</button>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td><input type="checkbox"></td>
                    <td>13</td>
                    <td><a href="#">Business management</a></td>
                    <td>default</td>
                    <td class="am-hide-sm-only">测试1号</td>
                    <td class="am-hide-sm-only">2014年9月4日 7:28:47</td>
                    <td>
                      <div class="am-btn-toolbar">
                        <div class="am-btn-group am-btn-group-xs">
                          <button class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                          <button class="am-btn am-btn-default am-btn-xs am-hide-sm-only"><span class="am-icon-copy"></span> 复制</button>
                          <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> 删除</button>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td><input type="checkbox"></td>
                    <td>14</td>
                    <td><a href="#">Business management</a></td>
                    <td>default</td>
                    <td class="am-hide-sm-only">测试14号</td>
                    <td class="am-hide-sm-only">2014年9月4日 7:28:47</td>
                    <td>
                      <div class="am-btn-toolbar">
                        <div class="am-btn-group am-btn-group-xs">
                          <button class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                          <button class="am-btn am-btn-default am-btn-xs am-hide-sm-only"><span class="am-icon-copy"></span> 复制</button>
                          <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> 删除</button>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td><input type="checkbox"></td>
                    <td>15</td>
                    <td><a href="#">Business management</a></td>
                    <td>default</td>
                    <td class="am-hide-sm-only">测试1号</td>
                    <td class="am-hide-sm-only">2014年9月4日 7:28:47</td>
                    <td>
                      <div class="am-btn-toolbar">
                        <div class="am-btn-group am-btn-group-xs">
                          <button class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                          <button class="am-btn am-btn-default am-btn-xs am-hide-sm-only"><span class="am-icon-copy"></span> 复制</button>
                          <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> 删除</button>
                        </div>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
              <div class="am-cf">
                <div class="am-fr">
                  <ul class="am-pagination tpl-pagination">
                    <li class="am-disabled"><a href="#">«</a></li>
                    <li class="am-active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">»</a></li>
                  </ul>
                </div>
              </div>
              <hr>
            </form>
          </div>
        </div>
      </div>
      <div class="tpl-alert"></div>
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