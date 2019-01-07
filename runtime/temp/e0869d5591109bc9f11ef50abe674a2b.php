<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:79:"E:\wamp\www\transport\public/../application/index\view\service\onlineorder.html";i:1505964251;s:73:"E:\wamp\www\transport\public/../application/index\view\common\header.html";i:1506071803;s:73:"E:\wamp\www\transport\public/../application/index\view\common\footer.html";i:1505989080;}*/ ?>
﻿<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>下单流程</title>
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
        <p class="fl"><!-- <span>易冷链，专注冷鲜，用心服务。&nbsp;&nbsp;</span> --><span><a class="glyphicon glyphicon-earphone" style="color: white;"></a>&nbsp;&nbsp;服务热线：0371—55172118</span></p>
        <?php if(session('username') == ''): ?>
            <p class="fr reg">
                <a href="<?php echo url('Personalcenter/personalcenter_index'); ?>">
                    <span><i class="glyphicon glyphicon-user"></i>&nbsp;个人中心</span>
                </a>    
                <a href="<?php echo url('Login/login'); ?>"><span>登录</span></a>
                <a href="<?php echo url('Login/register'); ?>"><span>注册</span></a>
            </p>
            <?php else: ?>
            <p class="fr reg">
                <a href="<?php echo url('Personalcenter/personalcenter_index'); ?>">
                    <span><i class="glyphicon glyphicon-user"></i>&nbsp;个人中心</span>
                </a>  
                <span>欢迎您：<?php echo session('username')?> </span>
                <a href="<?php echo url('Login/logout'); ?>"><span>退出</span></a>
            </p>
        <?php endif; ?>
    </div>
</div>

<!-- 头部结束 -->
<!-- 导航开始 -->
<div class="head clearfix" style="overflow: visible;">
            <div class="logo" style="width: auto;">
            <a class="fl" href="<?php echo url('Index/index'); ?>" style="width: 180px;">
                <img src="__PUBLIC__/images/logoa.png" alt=""/>
                <!-- <h2 style="width:200px; text-align: center; line-height: 26px; margin-top: 10px; margin-left: 40px;"><span style="font-size: 24px; ">陆港易冷链</span><br><span>LUGANG YILENGLIAN</span></h2> -->
                </a>
                <style type="text/css">

                </style>
                <!-- <div class="fr logofont">
                <p>专注冷鲜</p>
                <p style="margin-left: 16px;">用心服务</p>
                </div> -->
                <!-- <div class="fr logoimg">
                    <img src="__PUBLIC__/images/a2.png">
                </div> -->
                <div class="clearfix"></div>
            </div>
            <ul class="nav_wrap clearfix fr" style="margin-left: 0px; margin-right: -20px;">
                
                <li class="now">
                    <a href="<?php echo url('Index/index'); ?>">
                        <em>首页</em>
                    </a>
                </li>
                <li class="now">
                    <a href="<?php echo url('Goods/goods_car'); ?>">
                        <em>货源信息</em>
                    </a>
                </li>
                <li class="now">
                    <a href="<?php echo url('Path/path'); ?>">
                        <em>车源信息</em>
                    </a>
                </li>
                <li class="now">
                    <a href="<?php echo url('Warehouse/warehouse'); ?>">
                        <em>库源信息</em>
                    </a>
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
                    <a href="<?php echo url('Internation/internationcoldchain'); ?>" >
                        <em>国际冷链</em>
                    </a>
                    <ul class="drowdown">
                        <li><a href="<?php echo url('Internation/internationcoldchain'); ?>">业务介绍</a></li>
                        <li><a href="<?php echo url('Internation/internationmoney'); ?>">费用查询</a></li>
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
                    <a href="<?php echo url('Aboutus/aboutus'); ?>">
                        <em>关于我们</em>
                    </a>
                    <ul class="drowdown">
                        <li><a href="<?php echo url('Aboutus/aboutus'); ?>">公司简介</a></li>
                        <li><a href="<?php echo url('Aboutus/cultural'); ?>">企业文化</a></li>
                        <li><a href="<?php echo url('Aboutus/honor'); ?>">荣誉资质</a></li>
                    </ul>
                </li>
                <!-- <li>
                    <a href="<?php echo url('Goods/goods_car'); ?>">
                        <em>信息共享</em>
                    </a>
                    <ul class="drowdown">
                        <li><a href="<?php echo url('Path/path'); ?>">车源信息</a></li>
                        <li><a href="<?php echo url('Warehouse/warehouse'); ?>">库源信息</a></li>
                        <li><a href="<?php echo url('Goods/goods_car'); ?>">货源信息</a></li>
                    </ul>
                </li> -->
                <!-- <li>
                    <a href="<?php echo url('Personalcenter/personalcenter_index'); ?>">
                        <em>个人中心</em>
                    </a>
                </li> -->
            </ul>
            <div class="clearfix"></div>
        </div>


<!-- 头部结束 -->
<div class="ziye_bj" style="float: none;">
    <div class="ziye_tu">
        <img src="__PUBLIC__/images/onlineorder.jpg">
    </div>
</div>
<div class='onlineorder'>
  <div class='progress_inner wrap-1200'>
    <ul class="finanl order">
      <li class='progress_inner__step'>
        <span class="step step-1 active">1</span>
        <label for='step-1'>找车货主下单</label>
      </li>
      <li class="gt"><p></p></li>
      <li class='progress_inner__step'>
        <span class="step step-2">2</span>
        <label for='step-2'>找库货主下单</label>
      </li>
      <li class="gt"><p></p></li>
      <li class='progress_inner__step'>
        <span class="step step-3">3</span>
        <label for='step-3'>库主下单</label>
      </li>
      <li class="gt"><p></p></li>
      <li class='progress_inner__step'>
        <span class="step step-4">4</span>
        <label for='step-4'>车主下单</label>
      </li>
    </ul>
    <div class='progress_inner__tabs'>
      <div class='tab tab-0' style="display: block;">
        <!-- <h1>找库货主下单</h1> -->
        <p class="fl orderimg"><img src="__PUBLIC__/images/order1.jpg" alt=""></p>
        <div class="fr orderdes">
          <p style="margin-top: 0px;"><span class="glyphicon glyphicon-th-large ordericon"></span>&nbsp;&nbsp;在信息共享页面可查看车源，货源，库源信息，选择你相中的信息进行下单。下单之前双方可进行议价</p>
          
          <p><span class="glyphicon glyphicon-open ordericon"></span>&nbsp;&nbsp;下单时选择您要运输的货源，如果没有，请先到个人中心进行发布。发布前需进行认证</p>
          
          <p><span class="glyphicon glyphicon-question-sign ordericon"></span>&nbsp;&nbsp;抢单完成之后请等待对方应答，对方可接受或者驳回</p>
          
          <p><span class="glyphicon glyphicon-yen ordericon"></span>&nbsp;&nbsp;对方驳回，订单取消，对方接受，就可进行支付，可选择支付宝或微信支付</p>
          
          <p><span class="fa fa-truck ordericon"></span>&nbsp;&nbsp;支付完成，等待车主发车，货物进行运输</p>
          
          <p><span class="fa fa-check ordericon"></span>&nbsp;&nbsp;货物到达目的地，双方进行确认，订单完成。</p>
        </div>
        <div class="clearfix"></div>
      </div>
      <div class='tab tab-1'>
        <p class="fl orderimg orderimg1"><img src="__PUBLIC__/images/order2.jpg" alt=""></p>
        <div class="fr orderdes orderdes1">
          <p style="margin-top: 0px;"><span class="glyphicon glyphicon-th-large ordericon"></span>&nbsp;&nbsp;在信息共享页面可查看车源，货源，库源信息，选择你相中的信息进行下单。下单之前双方可进行议价</p>
          
          <p><span class="glyphicon glyphicon-open ordericon"></span>&nbsp;&nbsp;下单时选择您要存储的货源，如果没有，请先到个人中心进行发布。发布前需进行认证</p>
          
          <p><span class="glyphicon glyphicon-question-sign ordericon"></span>&nbsp;&nbsp;抢单完成之后请等待对方应答，对方可接受或者驳回</p>
          
          <p><span class="glyphicon glyphicon-yen ordericon"></span>&nbsp;&nbsp;对方驳回，订单取消，对方接受，就可进行支付，可选择支付宝或微信支付</p>
          
          <p><span class="fa fa-bank ordericon"></span>&nbsp;&nbsp;支付完成，等待库主存储您的货物</p>
          
          <p><span class="fa fa-check ordericon"></span>&nbsp;&nbsp;确认货物已入库，双方进行确认，订单完成。</p>
        </div>
        <div class="clearfix"></div>
      </div>
      <div class='tab tab-2'>
        <p class="fl orderimg orderimg2"><img src="__PUBLIC__/images/order3.jpg" alt=""></p>
        <div class="fr orderdes orderdes2">
          <p style="margin-top: 0px;"><span class="glyphicon glyphicon-th-large ordericon"></span>&nbsp;&nbsp;在信息共享页面可查看车源，货源，库源信息，选择你相中的信息进行下单。下单之前双方可进行议价</p>
          
          <p><span class="glyphicon glyphicon-open ordericon"></span>&nbsp;&nbsp;下单时选择您要使用的仓库，如果没有，请先到个人中心进行发布。发布前需进行认证</p>
          
          <p><span class="glyphicon glyphicon-question-sign ordericon"></span>&nbsp;&nbsp;抢单完成之后请等待对方应答，对方可接受或者驳回</p>
          
          <p><span class="glyphicon glyphicon-yen ordericon"></span>&nbsp;&nbsp;对方驳回，订单取消，对方接受，对方就会进行支付，可选择支付宝或微信支付</p>
          
          <p><span class="fa fa-bank ordericon"></span>&nbsp;&nbsp;货主支付完成，等待您将货物存储到仓库，存储后请进行确认。</p>
          
          <p><span class="fa fa-check ordericon"></span>&nbsp;&nbsp;双方都确认之后，订单完成。</p>
        </div>
        <div class="clearfix"></div>
      </div>
      <div class='tab tab-3'>
        <p class="fl orderimg orderimg3"><img src="__PUBLIC__/images/order4.jpg" alt=""></p>
        <div class="fr orderdes orderdes3">
          <p style="margin-top: 0px;"><span class="glyphicon glyphicon-th-large ordericon"></span>&nbsp;&nbsp;在信息共享页面可查看车源，货源，库源信息，选择你相中的信息进行下单。下单之前双方可进行议价</p>
          
          <p><span class="glyphicon glyphicon-edit ordericon"></span>&nbsp;&nbsp;下单时请确认您的信息是否正确，如有需要可以更改联系方式。</p>
          
          <p><span class="glyphicon glyphicon-question-sign ordericon"></span>&nbsp;&nbsp;抢单完成之后请等待对方应答，对方可接受或者驳回</p>
          
          <p><span class="glyphicon glyphicon-yen ordericon"></span>&nbsp;&nbsp;对方驳回，订单取消，对方接受，对方会进行支付，可选择支付宝或微信支付</p>
          
          <p><span class="fa fa-truck ordericon"></span>&nbsp;&nbsp;支付完成，等待您发车，运输货物</p>
          
          <p><span class="fa fa-check ordericon"></span>&nbsp;&nbsp;货物到达目的地，双方进行确认，订单完成。</p>
        </div>
        <div class="clearfix"></div>
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
                <li><a href="http://www.zzguojilugang.com/" target="_blank">郑州陆港</a></li>
                <li><a href="" target="_blank">中陆官网</a></li>
                <li><a href="http://banliego.com/" target="_blank">班列购</a></li>
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
<script type="text/javascript" src="__PUBLIC__/js/jquery.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/main.js"></script>
<script type="text/javascript">
  $('.nav_wrap').find('li').removeClass('now');
  $('.nav_wrap').children('li').eq(0).addClass('now');
</script>
</body>
</html>
