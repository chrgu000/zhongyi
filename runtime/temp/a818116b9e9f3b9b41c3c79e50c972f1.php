<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:78:"E:\wamp\www\transport\public/../application/index\view\service\labelprint.html";i:1505697578;s:73:"E:\wamp\www\transport\public/../application/index\view\common\header.html";i:1505375810;s:73:"E:\wamp\www\transport\public/../application/index\view\common\footer.html";i:1505791287;}*/ ?>
﻿<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>标签印刷</title>
<link href="../../static/index/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../../static/index/css/font-awesome.min.css">
<link rel="stylesheet"  href="__PUBLIC__/css/higo.css" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/style.css">
<link href="__PUBLIC__/css/city-picker.css" rel="stylesheet" type="text/css" />
<link href="__PUBLIC__/css/zym.css" rel="stylesheet" type="text/css" />
<link href="__PUBLIC__/css/animate.css" rel="stylesheet" type="text/css" />
</head>
<body>
<!-- 头部开始 -->

<div class="top">
    <div class="clearfix wrap-1200">
        <p class="fl"><span><a class="glyphicon glyphicon-earphone" style="color: white;"></a>&nbsp;&nbsp;服务热线：0371—55172118</span></p>
        <?php if(session('username') == ''): ?>
            <p class="fr reg">            
                <a href="<?php echo url('Login/login'); ?>"><span>登录</span></a>
                <a href="<?php echo url('Login/register'); ?>"><span>注册</span></a>
            </p>
            <?php else: ?>
            <p class="fr reg">
                <span>欢迎您：<?php echo session('username')?> </span>
                <a href="<?php echo url('Login/logout'); ?>"><span>退出</span></a>
            </p>
        <?php endif; ?>
    </div>
</div>

<!-- 头部结束 -->
<!-- 导航开始 -->
<div class="head clearfix" style="overflow: visible;">
            <div class="logo"><a href="<?php echo url('Index/index'); ?>">
                <img src="__PUBLIC__/images/logo.jpg" alt=""/>
                <!-- <h2 style="width:200px; text-align: center; line-height: 26px; margin-top: 10px; margin-left: 40px;"><span style="font-size: 24px; ">陆港易冷链</span><br><span>LUGANG YILENGLIAN</span></h2> -->
                </a>
            </div>
            <ul class="nav_wrap clearfix" style="margin-left: 180px;">
                <li class="now">
                    <a href="<?php echo url('Index/index'); ?>">
                        <em>首页</em>
                    </a>
                </li>
                <li>
                    <a href="<?php echo url('Aboutus/aboutus'); ?>">
                        <em>关于我们</em>
                    </a>
                    <ul class="drowdown">
                        <li><a href="<?php echo url('Aboutus/aboutus'); ?>">公司简介</a></li>
                        <li><a href="<?php echo url('Aboutus/cultural'); ?>">企业文化</a></li>
                        <li><a href="<?php echo url('Aboutus/honor'); ?>">荣誉资质</a></li>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo url('Internation/internationcoldchain'); ?>" >
                        <em>国际冷链</em>
                    </a>
                    <ul class="drowdown">
                        <li><a href="<?php echo url('Internation/internationcoldchain'); ?>">业务介绍</a></li>
                        <li><a href="<?php echo url('Internation/internationmoney'); ?>">费用查询</a></li>
                    </ul>
                </li>
                
                <li>
                    <a href="<?php echo url('Inland/inlandcoldchain'); ?>">
                        <em>国内冷链</em>
                    </a>
                    <ul class="drowdown">
                        <li><a href="<?php echo url('Inland/inlandcoldchain'); ?>">业务介绍</a></li>
                        <li><a href="<?php echo url('Inland/inlandmoney'); ?>">费用查询</a></li>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo url('Rent/boxrent'); ?>">
                        <em>箱库租赁</em>
                    </a>
                    <ul class="drowdown" >
                        <li><a href="<?php echo url('Rent/boxrent'); ?>">冷藏箱租赁</a></li>
                        <li><a href="<?php echo url('Rent/storerent'); ?>">冷库租赁</a></li>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo url('Goods/goods_car'); ?>">
                        <em>信息共享</em>
                    </a>
                    <ul class="drowdown">
                        <li><a href="<?php echo url('Path/path'); ?>">车源信息</a></li>
                        <li><a href="<?php echo url('Warehouse/warehouse'); ?>">库源信息</a></li>
                        <li><a href="<?php echo url('Goods/goods_car'); ?>">货源信息</a></li>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo url('Personalcenter/personalcenter_index'); ?>">
                        <em>个人中心</em>
                    </a>
                </li>
            </ul>
        </div>


<!-- 头部结束 -->
<div class="ziye_bj" style="float: none;">
    <div class="ziye_tu">
        <img src="__PUBLIC__/images/bqysbanner.jpg">
    </div>
</div>
<div class="webAgency_container webAgency_2" style="height: auto;">
    <div class="webAgency_box">
        <h2 >标签印刷
            <div class="linel"></div>
            <div class="liner"></div>
        </h2>
        <p class="hope">陆港标签印刷，集合了关于标签印刷的丰富内容，为客户提供制作不同品类的标签需求，包括普通标签、数字标签、高档标签印刷、复合标签、包装印刷、商务印刷、来料印刷服务。</p>
    </div>
</div>
<div class="service-tips" id="service_contact">
    <div class="container text-center wrap-1200">
      <div class="row text-left">
        <div class="service-tips-item col-xs-6 col-sm-6 col-md-6">
          <div class="item-inner">
            <div class="figure-holder">
                <img src="__PUBLIC__/images/icon1.png" alt="">         
            </div>
            <div class="content">
                <h3 class="tit">普通标签</h3>
                 <p>普通单色标签印刷、彩色标签印刷。</p>
            </div>
            <div class="triangle1"></div>
          </div>
        </div>
                          <!-- item -->
        <div class="service-tips-item col-xs-6 col-sm-6 col-md-6">
          <div class="item-inner">
            <div class="figure-holder">
                <img src="__PUBLIC__/images/icon1.png" alt="">
            </div>
            <div class="content">
                <h3 class="tit">数字标签</h3>
                 <p>独有的防伪软件与后台数据材质以及整套的防伪溯源查询系统，使每一枚标签数据、颜色、位置都不一样，使每一个标签都是独一无二，其防伪提升到新的高度</p>
            </div>
            <div class="triangle1"></div>
          </div>
        </div>   
                           <!-- item -->   
        <div class="service-tips-item col-xs-6 col-sm-6 col-md-6">
          <div class="item-inner">
            <div class="figure-holder">
                <img src="__PUBLIC__/images/icon1.png" alt="">
            </div>
            <div class="content">
                <h3 class="tit">高档标签印刷</h3>
                <p>铜版纸、pvc收缩膜、镜面铜版纸、铝箔纸、热敏纸、PET纸等四色--七色 印刷，可添加二维码、可变序列号。</p>
            </div>
            <div class="triangle1"></div>
          </div>
        </div>
                         <!-- item -->
        <div class="service-tips-item col-xs-6 col-sm-6 col-md-6">
          <div class="item-inner">
            <div class="figure-holder">
                <img src="__PUBLIC__/images/icon1.png" alt="">
            </div>
            <div class="content">
                <h3 class="tit">复合标签</h3>
                <p>防伪标签和普通标签复合印刷，减少标签粘贴作业。</p>
            </div>
            <div class="triangle1"></div>
          </div>
        </div>
                         <!-- item -->
        <div class="service-tips-item col-xs-6 col-sm-6 col-md-6">
          <div class="item-inner">
            <div class="figure-holder">
                <img src="__PUBLIC__/images/icon1.png" alt="">
            </div>
            <div class="content">
                <h3 class="tit">商务印刷</h3>
                <p>台历挂历印刷、个性贺卡印刷、照片印刷、人像卡印刷、促销牌、吊牌。</p>
            </div>
            <div class="triangle1"></div>
          </div>
        </div>
                         <!-- item -->
        <div class="service-tips-item col-xs-6 col-sm-6 col-md-6">
          <div class="item-inner">
            <div class="figure-holder">
                <img src="__PUBLIC__/images/icon1.png" alt="">
            </div>
            <div class="content">
                <h3 class="tit">来料印刷服务</h3>
                <p>客户提供材料及印刷要求，我司提供印刷服务。</p>
            </div>
            <div class="triangle1"></div>
          </div>
        </div>
                         
      </div>
    </div>
</div>
<!-- 底部结束开始 -->

<!-- <div class="dibu">
    <div class="dibu_jz">
        <div class="dibu_zuo">
            <p>联系地址：郑州国际陆港开发建设有限公司<br>
            电 话：0851-85594612   <br></p>
        </div>
        <div class="dibu_you">
            <ul>
                <li><a href="<?php echo url('Service/brokerage'); ?>">报关报检&nbsp;&nbsp;</a>｜</li>
                <li><a href="<?php echo url('Service/labelprint'); ?>">标签印刷&nbsp;&nbsp;</a>｜</li>
                <li><a href="<?php echo url('Service/secondpack'); ?>">二次包装&nbsp;&nbsp;</a>｜</li>
                <li><a href="<?php echo url('Service/joinus'); ?>">合作加盟&nbsp;&nbsp;</a></li>
                <div style="clear: both;"></div>
            </ul>
            <img class="dibu_logo" src="__PUBLIC__/images/dibu_03.png"> 
        </div>
    </div>
</div>
<div class="dibu_1">
    <p>版权所有 郑州国际陆港开发建设有限公司 豫ICP备10001741号
</p>
</div> -->


<div class="footer" style="background: #337cc9; margin-top: 0px;">
    <div class="row higo-content-floor higo-friend-link " style="width: 1200px; margin: 0 auto; text-align: center;padding: 20px 0px;">
        <div class="col-md-3 col-xs-3" style="border-right: 1px dashed #5496e8;height: 180px;">
            <ul>
                <li>
                    <!-- <img src="__PUBLIC__/images/ewm.png" alt="" style="width:130px; height: 130px;"> -->
                    <img src="__PUBLIC__/images/底部二维码.png" alt="" style="width:130px; height: 130px;">
                    <p>扫描二维码，了解我们</p>
                </li>
            </ul>
        </div>
        <div class="col-md-2 col-xs-2" style="border-right: 1px dashed #5496e8;height: 180px;">
            <ul style="line-height: 24px;">
                <li class="higo-firend-head">关于平台</li>
                <li><a href="<?php echo url('Foot/aboutplant'); ?>">平台介绍</a></li>
                <li><a href="<?php echo url('Foot/contactus'); ?>">联系我们</a></li>
            </ul>
        </div>
        <div class="col-md-2 col-xs-2" style="border-right: 1px dashed #5496e8;height: 180px;">
            <ul style="line-height: 24px;">
                <li class="higo-firend-head">用户指南</li>
                <li><a href="<?php echo url('Foot/register_flowpath'); ?>">注册指南</a></li>
                <li><a href="<?php echo url('Foot/auth_flowpath'); ?>">认证指南</a></li>
                <li><a href="<?php echo url('Foot/upload_flowpath'); ?>">发布指南</a></li>
                <li><a href="<?php echo url('Foot/deal_flowpath'); ?>">交易指南</a></li>
                <li><a href="<?php echo url('Service/onlineorder'); ?>">下单流程</a></li>
            </ul>
        </div>
         <div class="col-md-2 col-xs-2"  style="border-right: 1px dashed #5496e8;height: 180px;">
            <ul style="line-height: 24px;">
                <li class="higo-firend-head">友情链接</li>
                <li><a href="http://www.zzguojilugang.com/">郑州陆港</a></li>
                <li><a href="">中陆官网</a></li>
                <li><a href="http://banliego.com/">班列购</a></li>
            </ul>
        </div>
        <div class="col-md-2 col-xs-2" >
            <ul style="line-height: 24px;">
                <li class="higo-firend-head">使用帮助</li>
                <li><a href="<?php echo url('Foot/problem'); ?>">常见问题</a></li>
                 <!-- <li><a href="">联系客服</a></li> -->
            </ul>
        </div>

    </div>
</div>
<div class="footer1" style="background: #0066b3; padding:20px 0px; text-align: center;color: #fff">
    <p><span style="color: #eee">版权所有</span>&nbsp;郑州国际陆港开发建设有限公司 <span style="color: #eee; margin-left: 20px;">备案号：</span>&nbsp;豫ICP备17007279号
</div>

<!-- 底部开始结束 -->
<script type="text/javascript" src="__PUBLIC__/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/main.js"></script>
<script type="text/javascript">

  // $('.figure-holder img').hover(function(){
  //       $(this).addClass('animated swing');
  //   },function(){
  //        $(this).removeClass('animated swing');
  //   })
  $('.item-inner').hover(function(){
        $(this).find('.figure-holder img').addClass('animated swing');
    },function(){
         $(this).find('.figure-holder img').removeClass('animated swing');
    })
</script>
</body>
</html>
