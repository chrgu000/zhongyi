<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:84:"E:\wamp\www\transport\public/../application/index\view\service\insuranceservice.html";i:1505360558;s:73:"E:\wamp\www\transport\public/../application/index\view\common\header.html";i:1505375810;s:73:"E:\wamp\www\transport\public/../application/index\view\common\footer.html";i:1505791287;}*/ ?>
﻿<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>保险服务</title>
<link href="../../static/index/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../../static/index/css/font-awesome.min.css">
<link rel="stylesheet"  href="__PUBLIC__/css/higo.css" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/style.css">
<link href="__PUBLIC__/css/city-picker.css" rel="stylesheet" type="text/css" />
<link href="__PUBLIC__/css/zym.css" rel="stylesheet" type="text/css" />
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
        <img src="__PUBLIC__/images/bxfw.jpg">
    </div>
</div>
<!-- 内容开始 -->
<div class="webAgency_container webAgency_2" style="height: auto; padding-bottom: 40px;">
    <div class="webAgency_box">
        <h2 >保险服务
            <div class="linel"></div>
            <div class="liner"></div>
        </h2>
        <p class="insuredes">陆港联合保险行业的领军企业，中国人民财产保险股份有限公司，中国太平洋财产保险股份有限公司，提供优质的货物运输保险服务。</p>
    </div>
</div>
<div style="width: 100%;background: #f5f5f5;">
    <div class="goodstrace wrap-1200" style="padding-top: 40px;">
        <div class="trace_l fl">
            <h3>保障范围</h3>
            <p class="des"></p>
            <p class="item iteminsure"><span class="itemnum">01</span>被保险货物在运输途中遭受暴风，雷电，洪水，地震自然灾害；</p>
            <p class="item iteminsure"><span class="itemnum">02</span>运输工具遭受碰撞，倾覆，出轨；</p>
            <p class="item iteminsure"><span class="itemnum">03</span>遭受隧道坍塌，崖崩，失火，爆炸等意外事故</p>
            <p class="border">以上场景所造成的全部或部分损失</p>
        </div>
        <div class="trace_r fr">
            <h3>优势介绍</h3>
            <p class="des"></p>
            <p class="item iteminsure"><span class="itemnum"><i class="glyphicon glyphicon-ok"></i></span>省钱：优惠费率，满足客户、同行不同业务需求。</p>
            <p class="item iteminsure"><span class="itemnum"><i class="glyphicon glyphicon-ok"></i></span>省时：填写投保信息单，即可完成全程投保。</p>
            <p class="item iteminsure"><span class="itemnum"><i class="glyphicon glyphicon-ok"></i></span>省力：重点客户VIP一对一全程服务。</p>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- 内容结束 -->
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
</body>
</html>
