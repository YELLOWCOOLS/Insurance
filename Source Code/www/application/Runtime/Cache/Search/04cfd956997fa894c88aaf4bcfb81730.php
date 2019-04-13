<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="description" content="微小保">
  <meta name="keywords" content="微小保">
  <title>w微小保-您的私人保险顾问</title>
  <!-- =============== VENDOR STYLES ===============-->
  <!-- FONT AWESOME-->
  <link rel="alternate icon" type="image/png" href="http://amazeui.org/i/favicon.png">
  <link rel="stylesheet" href="/Public/Admin/assets/css/app.css">
  
  <link rel="stylesheet" href="/Public/Search/css/search.css">

  <link rel="stylesheet" href="/Public/Search/css/amui/assets/css/amazeui.css">
  <link rel="stylesheet" href="/Public/Search/css/layout.css">
</head>

<body>
  <header class="am-topbar am-topbar-fixed-top">
    <div class="am-container">
      <h1 class="am-topbar-brand">
        <a class="am-icon-btn am-secondary am-icon-shield"></a>
        <a href="#">微小保</a>
      </h1>
      <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-secondary am-show-sm-only" data-am-collapse="{target: '#collapse-head'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>
      <div class="am-collapse am-topbar-collapse">
        <ul class="am-nav am-nav-pills am-topbar-nav">
          <li><a href="/Search" id='home'>首页</a></li>
          <li class="am-dropdown" data-am-dropdown="">
            <a class="am-dropdown-toggle" data-am-dropdown-toggle="" href="javascript:;">
              产品列表</span>
            </a>
            <ul class="am-dropdown-content">
              <li><a href="#">儿童保险 </a></li>
              <li><a href="#">成人保险 </a></li>
              <li><a href="#">中老年保险 </a></li>
            </ul>
          <li class="am-dropdown" data-am-dropdown="">
            <a class="am-dropdown-toggle" data-am-dropdown-toggle="" href="javascript:;">
              功能列表 </span>
            </a>
            <ul class="am-dropdown-content">
              <li><a href="/search/search/qa">QA系统</a></li>
              <li><a href="/admin2/manage/login">管理系统</a></li>
            </ul>
          </li>
          </li>
        </ul>
        <?php if(empty($_SESSION['id']) == True): ?><div class="am-topbar-right">
            <a href="/search/search/login">
              <span id='login' class="am-btn  am-topbar-btn "> 登录 </span>
            </a>
            <a href="/search/search/register">
              <span id='register' class="am-btn  am-topbar-btn " style="border-left: solid;border-left-color: currentcolor;border-left-width: medium;border-left-width: 1px;border-left-color: gray">注册</span> </span>
            </a>
          </div>
          <?php else: ?>
          <div class="am-topbar-right">
            <ul class="am-nav am-nav-pills am-topbar-nav am-topbar-right admin-header-list tpl-header-list">
              <li class="am-dropdown" data-am-dropdown data-am-dropdown-toggle>
                <a class="am-dropdown-toggle tpl-header-list-link" href="javascript:;">
                  <span class="tpl-header-list-user-nick"><?php echo (session('uname')); ?></span><span class="tpl-header-list-user-ico"> </span>
                </a>
                <ul class="am-dropdown-content">
                  <li><a href="#"><span class="am-icon-bell-o"></span> 资料</a></li>
                  <li><a href="#"><span class="am-icon-cog"></span> 设置</a></li>
                  <li><a href="/search/search/log_out"><span class="am-icon-power-off"></span> 退出</a></li>
                </ul>
              </li>
            </ul>
          </div><?php endif; ?>
        <form class="am-topbar-form am-topbar-right am-form-inline" role="search">
          <div class="am-input-group">
            <input type="text" id="search_ba" class="am-form-field" placeholder="保险" value="<?php echo ($exp); ?>">
            <span class="am-input-group-btn">
              <button class="am-btn search_btn am-btn-default" class="" type="button">搜索</button>
            </span>
          </div>
        </form>
      </div>
    </div>
  </header>
  
  <div class='am-container'>
    <div class='am-g'>
      <ol class="am-breadcrumb">
        <li><a href="#" class="am-icon-home">首页</a></li>
        <li><a href="#">分类1</a></li>
        <li class="am-active">分类2</li>
        <li>内容</li>
      </ol>
    </div>
  </div>
  <div class='am-container'>
    <div class='am-panel am-panel-secondary'>
      <div class="am-panel-hd" id='panel-hd'>您搜索的相关结果如下</div>
      <div class="am-panel-bd">
        <div class='am-g panel-title'>
          <span class='high_text'>产品筛选</span>
          <span class='low_text'>共<?php echo ($num); ?>款产品</span>
          <div class='am-g' id="search_filter">
            <span class='low_text am-u-md-2 pand_bd_title'>
              保险品牌：
            </span>
            <div class='high_text am-u-md-8 '>
              <select data-am-selected="{maxHeight: 500}">
                <option value=""></option>
                <?php if(is_array($cpname)): $i = 0; $__LIST__ = $cpname;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cp): $mod = ($i % 2 );++$i;?><option value="<?php echo ($cp["cpname"]); ?>"><?php echo ($cp["cpname"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
              </select>
            </div>
            <div class='am-u-md-2'>
            </div>
          </div>
        </div>
        <div class="ins_detail">
          <div class="am-container">
            <?php if(is_array($datas)): $i = 0; $__LIST__ = $datas;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><div class="am-g">
                <hr data-am-widget="divider" style="" class="am-divider am-divider-default" />
                <div class="am-u-md-8">
                  <div class="am-g">
                    <span class="title"><?php echo ($data["insurance"]["name"]); ?></span>
                  </div>
                  <div class='am-g tag_container'>
                    <div class='am-u-md-3'>
                      保障<?php echo ((isset($data["ill_count"]["numill "]) && ($data["ill_count"]["numill "] !== ""))?($data["ill_count"]["numill "]): 40); ?>种疾病
                    </div>
                    <div class='am-u-md-3'>
                      <?php echo ($data["right"]["tag1"]); ?>
                    </div>
                    <div class='am-u-md-3'>
                      <?php echo ($data["right"]["tag2"]); ?>
                    </div>
                    <div class='am-u-md-3'>
                      <?php echo ($data["right"]["tag3"]); ?>
                    </div>
                  </div>
                  <div class="right_container">
                    <?php if(is_array($data["tag"])): $i = 0; $__LIST__ = $data["tag"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tag): $mod = ($i % 2 );++$i;?><div class="am-g">
                        <div class="am-u-md-4">
                          <?php echo ($tag["tag2"]); ?>
                        </div>
                      </div><?php endforeach; endif; else: echo "" ;endif; ?>
                  </div>
                </div>
                <div class="am-u-md-4 container-right">
                  <!-- <h1 class="am-g money">
                    <i class="am-icon-cny icon"></i>3.00
                  </h1>
                  <div class="am-g">
                    销量：1000
                  </div>
                  <div class="am-g">
                    评论：1000
                  </div> -->
                  <div class="am-g first_btn">
                    <button type="button" class="am-btn am-btn-primary am-round" data-detail="<?php echo ($data["id"]); ?>">查看详情</button>
                  </div>
                  <div class="am-g last_btn">
                    <button type="button" class="am-btn am-btn-secondary am-round">加入对比</button>
                  </div>
                </div>
              </div><?php endforeach; endif; else: echo "" ;endif; ?>
          </div>
        </div>
      </div>
    </div>
    <ul class="am-pagination am-pagination-centered">
      <?php if($now_page != 0): ?><li><a href="/search/search/search/exp/<?php echo ($exp); ?>/page/0">&laquo;</a></li>
        <?php else: ?>
        <li class='am-disabled'><a href="/search/search/search/exp/<?php echo ($exp); ?>/page/0">&laquo;</a></li><?php endif; ?>
      <?php if($now_page >= 2): ?><li><a href="/search/search/search/exp/<?php echo ($exp); ?>/page/<?php echo ($now_page-1); ?>"><?php echo ($now_page-2); ?></a></li><?php endif; ?>
      <?php if($now_page >= 1): ?><li><a href="/search/search/search/exp/<?php echo ($exp); ?>/page/<?php echo ($now_page-1); ?>"><?php echo ($now_page-1); ?></a></li><?php endif; ?>
      <li class="am-active"><a href="#"><?php echo ($now_page); ?></a></li>
      <?php if($now_page <= ($all_page-1)): ?><li><a href="/search/search/search/exp/<?php echo ($exp); ?>/page/<?php echo ($now_page+1); ?>"><?php echo ($now_page+1); ?></a></li><?php endif; ?>
      <?php if($now_page <= ($all_page-2)): ?><li><a href="/search/search/search/exp/<?php echo ($exp); ?>/page/<?php echo ($now_page+2); ?>"><?php echo ($now_page+2); ?></a></li><?php endif; ?>
      <?php if($now_page != $all_page): ?><li><a href="/search/search/search/exp/<?php echo ($exp); ?>/page/<?php echo ($all_page); ?>">&raquo;</a></li>
        <?php else: ?>
        <li class='am-disabled'><a href="/search/search/search/exp/<?php echo ($exp); ?>/page/<?php echo ($all_page); ?>">&raquo;</a></li><?php endif; ?>
    </ul>
  </div>
  </div>

  <footer class="footer  am-topbar-fixed-bottom">
    <p>© 2019 SUFE, SIME. by the ZTL Team.</p>
  </footer>
  <!-- =============== VENDOR SCRIPTS ===============-->
  <!-- JQUERY-->
  <script src="/Public/Admin/vendor/jquery/dist/jquery.js"></script>
  <script src="/Public/Search/css/amui/assets/js/amazeui.js"></script>
  
<script>
$(function() {
$('.ins_detail').on('click', '[data-detail]', function() {
      var dateId = $(this).data('detail');
     window.location.href="/search/search/insshow/id/"+dateId;
    });
})
</script>

  <script>
  $(function() {
    $(".search_btn").click(function() {
      var val = $("#search_ba").val();
      window.location.href = "/search/search/search/exp/" + val;
    });
  })

  </script>
</body>

</html>