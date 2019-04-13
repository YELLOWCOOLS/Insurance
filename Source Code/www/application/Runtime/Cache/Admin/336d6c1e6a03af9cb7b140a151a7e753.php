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
                    修改密码
                </div>
                
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="panel panel-default panel-flat">
                    <div class="panel-body">
                        <form action="/admin/user/doChangePassword" method="POST">
                            <div class="form-group has-feedback">
                                <label for="resetPassword" class="text-muted">新密码</label>
                                <input id="resetPassword" type="password" placeholder="请输入新密码" name="password" autocomplete="off" class="form-control">
                                <span class="fa fa-lock form-control-feedback text-muted"></span>
                            </div>
                            <div class="form-group has-feedback">
                                <label for="repeatPassword" class="text-muted">确认密码</label>
                                <input id="repeatPassword" type="password" placeholder="请输入新密码" autocomplete="off" class="form-control">
                                <span class="fa fa-lock form-control-feedback text-muted"></span>
                            </div>
                            <button id="reset-submit" type="submit" class="btn btn-danger btn-block">重置密码</button>
                        </form>
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
    
    <!-- =============== APP SCRIPTS ===============-->
    <script src="/Public/Admin/js/app.js"></script>
    
    <script>
        $(function(){
            $('#reset-submit').click(function(e){
                e.preventDefault();
                var p1=$('#resetPassword').val();
                var p2=$('#repeatPassword').val();
                if(!p1||!p2){
                    alert('密码不能为空!');
                    return false;
                }
                if(p1!==p2){
                    alert('密码不一致!');
                    return false;
                }
                document.forms[0].submit();
            });
        });
    </script>

</body>

</html>