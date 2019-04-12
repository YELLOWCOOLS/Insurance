<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <title>智能保险</title>
  <!-- =============== VENDOR STYLES ===============-->
  <!-- FONT AWESOME-->
  <style type="text/css" media="screen">
  html,
  body,
  .page {
    height: 100%;
    width: 100%;
    overflow: hidden;
  }

  </style>
  <link rel="stylesheet" href="https://unpkg.com/element-ui/lib/theme-chalk/index.css">
  <link rel="stylesheet" href="/Public/Cmm/css/mobilebone.animate.css">
  <link rel="stylesheet" href="/Public/Cmm/css/mobilebone.css">
  <meta name="hotcss">
  <script type="text/javascript" src="/Public/Home/js/hotcss.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vue"></script>
  <script src="/Public/Cmm/js/mobilebone.js"></script>
  <link rel="stylesheet" href="/Public/Home/css/datePicker.css">
  <link rel="stylesheet" type="text/css" href="/Public/Cmm/css/index.css" />
</head>

<body>

  <div id="pageHome" class="page out">
 
    <div id="Home">
      <div class="tit">
        <div class="title">智能保险</div>
        <div class="subtitle">找到最佳保险配置</div>
        <div class="subtitle" id="ls">S M A R T I N S U R A N C E</div>
      </div>
      <img src="/Public/Cmm/img/home.477c98c.png" class="img-home">
      <div class="el-row">
        <a type="button" id="we1" href="#page1" class="el-button el-button--primary is-round">

          <span>开启我的智能保险</span>
        </a>
      </div>
      <div class="el-row">
       <div class="tit">
         <div class="subtitle">推荐适合您的保险产品</div>
          </div>
      </div>
    </div>
  </div>
  <div class="page out form" id="page1">
    <div class="banner">
      <span class="step">1.</span>
      <span class="desc">请选择你的性别</span>
    </div>
    <div class="content">
      <div class="el-row">
        <div class="el-col el-col-24">
          <label class="el-radio avatar-row">
            <el-radio v-model="radio1" @change="male()" label="男" value="男"></el-radio>
            <div class="imgcon1">
              <div class="imgmale img" v-bind:class="{ mactive: misactive }"></div>
            </div>
          </label>
        </div>
        <div class="el-col el-col-24">
          <label class="el-radio avatar-row">
            <el-radio v-model="radio1" @change="female()" label="女" value="女"></el-radio>
            <div class="imgcon1">
              <div class="imgfemale img" v-bind:class="{ factive: fisactive }"></div>
            </div>
          </label>
        </div>
      </div>
    </div>
    <div class="footer">
      <a href="#" class="btn btn-previous" style="display: none;">
        <div class="arrow-left"></div>
      </a>
      <a href="#page2" class="btn btn-next" style="">
        <div class="arrow-right"></div>
      </a>
    </div>
  </div>
  <div class="page out form" id="page2">
    <div class="banner">
      <span class="step">2.</span>
      <span class="desc">请填写房贷情况</span>
    </div>
    <div class="content">
      <div class="head">
        <div class="imgcon2">
          <div class="img fang" v-bind:class="{faactive: fangactive }"></div>
        </div>
        <el-switch width="100" v-model="fangdai" @change="fang()" active-text="有" inactive-text="无"></el-switch>
      </div>
      <div v-bind:class="{form: !fangactive }">
        <div class="el-input el-input-group el-input-group--prepend">
          <div class="el-input-group__prepend des">房贷剩余总额
          </div>
          <input autocomplete="off" placeholder="请输入内容" rows="2" validateevent="true" class="el-input__inner" type="text">
          <div class="el-input-group__append">万</div>
        </div>
        <div class="el-input el-input-group el-input-group--prepend">
          <div class="el-input-group__prepend des">房贷月供金额
          </div>
          <input autocomplete="off" placeholder="请输入内容" rows="2" validateevent="true" class="el-input__inner" type="text">
          <div class="el-input-group__append">万</div>
        </div>
        <div class="el-input el-input-group el-input-group--prepend">
          <div class="el-input-group__prepend des">还需还款年数
          </div>
          <input autocomplete="off" placeholder="请输入内容" rows="2" validateevent="true" class="el-input__inner" type="text">
          <div class="el-input-group__append">年</div>
        </div>
      </div>
    </div>
    <div class="footer">
      <a href="#page1" class="btn btn-previous">
        <div class="arrow-left"></div>
      </a>
      <a href="#page3" class="btn btn-next">
        <div class="arrow-right"></div>
      </a>
    </div>
  </div>
  <div class="page out form" id="page3">
    <div class="banner">
      <span class="step">3.</span>
      <span class="desc">请填写车贷情况</span>
    </div>
    <div class="content">
      <div class="head">
        <div class="imgcon2">
          <div class="img che" v-bind:class="{chactive: cheactive }"></div>
        </div>
        <el-switch width="100" v-model="chedai" @change="che()" active-text="有" inactive-text="无"></el-switch>
      </div>
      <div v-bind:class="{form: !cheactive }">
        <div class="el-input el-input-group el-input-group--prepend">
          <div class="el-input-group__prepend des">车贷剩余总额
          </div>
          <input autocomplete="off" placeholder="请输入内容" rows="2" validateevent="true" class="el-input__inner" type="text">
          <div class="el-input-group__append">万</div>
        </div>
        <div class="el-input el-input-group el-input-group--prepend">
          <div class="el-input-group__prepend des">车贷月供金额
          </div>
          <input autocomplete="off" placeholder="请输入内容" rows="2" validateevent="true" class="el-input__inner" type="text">
          <div class="el-input-group__append">万</div>
        </div>
        <div class="el-input el-input-group el-input-group--prepend">
          <div class="el-input-group__prepend des">还需还款年数
          </div>
          <input autocomplete="off" placeholder="请输入内容" rows="2" validateevent="true" class="el-input__inner" type="text">
          <div class="el-input-group__append">年</div>
        </div>
      </div>
    </div>
    <div class="footer">
      <a href="#page2" class="btn btn-previous">
        <div class="arrow-left"></div>
      </a>
      <a href="#page4" class="btn btn-next">
        <div class="arrow-right"></div>
      </a>
    </div>
  </div>
  <div class=" page out form" id="page4">
    <div class="banner">
      <span class="step">4.</span>
      <span class="desc">请填写收入情况</span>
    </div>
    <div class="content">
      <div class="head">
        <div class="imgcon2">
          <div class="img mactive" v-bind:class="{factive: head}"></div>
        </div>
        <div>
          {{money}}万元/年
        </div>
        <div class="block">
          <el-slider v-model="money" height="40" show-input-controls="false">
          </el-slider>
        </div>
      </div>
    </div>
    <div class="footer">
      <a href="#page3" class="btn btn-previous">
        <div class="arrow-left"></div>
      </a>
      <a href="#page5" class="btn btn-next">
        <div class="arrow-right"></div>
      </a>
    </div>
  </div>
  <div class=" page out form" id="page5">
    <div class="banner">
      <span class="step">5.</span>
      <span class="desc">请填写职业情况</span>
    </div>
    <div class="content">
      <div class="imgcon2">
        <div class="img mactive" v-bind:class="{factive: head}"></div>
      </div>
      <div class="sele">
        <el-select class="se" v-model="ca" filterable placeholder="请选择">
          <el-option v-for="item in options" :key="item.value" :label="item.label" :value="item.value">
          </el-option>
        </el-select>
      </div>
    </div>
    <div class="footer">
      <a href="#page4" class="btn btn-previous">
        <div class="arrow-left"></div>
      </a>
      <a href="#page6" class="btn btn-next">
        <div class="arrow-right"></div>
      </a>
    </div>
  </div>
  <div class=" page out form" id="page6">
    <div class="banner">
      <span class="step">6.</span>
      <span class="desc">请填写出生日期</span>
    </div>
    <div class="content">
      <div class="imgcon2">
        <div class="img mactive" v-bind:class="{factive: head }"></div>
      </div>
      <div class="dp">
        <input id="date5"  v-model="birthday"  readonly="" placeholder="请输入生日" type="text">
      </div>
    </div>
    <div class="footer">
      <a href="#page5" class="btn btn-previous">
        <div class="arrow-left"></div>
      </a>
      <a href="#page7" id="to7" class="btn btn-next"  >
        <div class="arrow-right"></div>
      </a>
    </div>
  </div>
  <div class="page out form" id="page7">
    <div class="banner">
      <span class="step">7.</span>
      <span class="desc">请填写社保情况</span>
    </div>
    <div class="content">
      <div class="head">
        <div class="imgcon2">
          <div class="img mactive" v-bind:class="{factive: head }"></div>
        </div>
        <el-switch width="100" v-model="shebao" active-text="有" inactive-text="无"></el-switch>
      </div>
    </div>
    <div class="footer">
      <a href="#page6" class="btn btn-previous">
        <div class="arrow-left"></div>
      </a>
      <a href="#page7" class="btn submit  btn-next">
        <div class="arrow-right"></div>
      </a>
    </div>

    <form id="for" action="/cmm/comm/result" method="post" style="display: none;" accept-charset="utf-8">
     <input  id="fsex" name="fsex" value="">
     <input  id="fincome" name="fincome" value="">
     <input  id="ftime" name="fage" value="">
     <input id="fshebao" name="fshebao" value="">
    </form>
  </div>
  <script src="/Public/Home/js/require/iscroll.js"></script>
  <script src="/Public/Admin/vendor/jquery/dist/jquery.js"></script>
  <script src="https://unpkg.com/element-ui/lib/index.js"></script>
  <script src="http://res.wx.qq.com/open/js/jweixin-1.2.0.js" type="text/javascript "></script>
  <script src="/Public/Home/js/datePicker.js"></script>
  <script src="/Public/Cmm/js/index.js"></script>
</body>