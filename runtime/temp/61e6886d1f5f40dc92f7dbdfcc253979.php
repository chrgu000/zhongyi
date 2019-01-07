<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:67:"E:\WWW\transport\public/../application/index\view\rent\boxrent.html";i:1508720788;s:68:"E:\WWW\transport\public/../application/index\view\common\header.html";i:1513838096;s:68:"E:\WWW\transport\public/../application/index\view\common\footer.html";i:1522316551;}*/ ?>
﻿<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="" type="image/x-icon"/>
    <link href="../../static/index/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../static/index/css/font-awesome.min.css">
    <link rel="stylesheet"  href="__PUBLIC__/css/higo.css" />
    <link href="__PUBLIC__/css/city-picker.css" rel="stylesheet" type="text/css" />
    <link href="__PUBLIC__/css/zym.css" rel="stylesheet" type="text/css" />
    <link href="__PUBLIC__/css/footer.css" rel="stylesheet" type="text/css" />
    <link href="__PUBLIC__/css/animate.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/style.css">
    <title>租赁业务-冷藏箱租赁</title>
    <style type="text/css">
    	#footer_color a{
    		color: white;
    		text-decoration: none;	
    	}
        .bootstrap-tagsinput input{
            width: 100%;
        }
        .tag.label.label-info{
            background: #696969;
            font-size: 14px;
            margin-top: 3px;
            display: inline-block;
        }
    </style>
</head>
<body>
<div class="container-flued">
        <!-- 头部开始 -->
        <div class="top">
    <div class="clearfix wrap-1200">
        <p class="fl"><!-- <span>易冷链，专注冷鲜，用心服务。&nbsp;&nbsp;</span> --><span><a class="glyphicon glyphicon-earphone" style="color: white;"></a>&nbsp;&nbsp;服务热线：0371—55172118</span></p>
        <?php if(session('username') == ''): ?>
            <p class="fr reg">
                <a href="<?php echo url('Login/login'); ?>" onClick="return confirm('请登录！')">
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
            <a class="fl" href="<?php echo url('Index/index'); ?>">
                <img src="__IMG__<?php echo $banner['logo']; ?>" alt=""/>
                <!-- <h2 style="width:200px; text-align: center; line-height: 26px; margin-top: 10px; margin-left: 40px;"><span style="font-size: 24px; ">陆港易冷链</span><br><span>LUGANG YILENGLIAN</span></h2> -->
                </a>
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
                    <?php if(session('username') == ''): ?>
                        <a href="<?php echo url('Login/login'); ?>" onClick="return confirm('请登录！')">
                            <em>易冷链承运</em>
                        </a>
                    <?php else: if($user_u['check_state'] != '1'): ?>
                            <a href="<?php echo url('Personalcenter/personalcenter_index'); ?>" onClick="return confirm('请您先认证！')">
                                <em>易冷链承运</em>
                            </a>
                        <?php else: ?>
                            <a href="<?php echo url('Entrust/entrust'); ?>">
                                <em>易冷链承运</em>
                            </a>
                        <?php endif; endif; ?>
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
                        <li><a href="<?php echo url('Inland/inlandmoney'); ?>">国内订车</a></li>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo url('Internation/internationcoldchain'); ?>" >
                        <em>国际冷链</em>
                    </a>
                    <ul class="drowdown">
                        <li><a href="<?php echo url('Internation/internationcoldchain'); ?>">业务介绍</a></li>
                        <li><a href="<?php echo url('Internation/internationmoney'); ?>">国际订车</a></li>
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
                        <li><a href="<?php echo url('Aboutus/cultural'); ?>">实力展示</a></li>
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
        <!-- 主体开始 -->
        <div class="container-flued higo-main-content" style="padding:0px;">
            <!--关于我们-->
            <div class="ziye_bj">
                <div class="ziye_tu">
                    <img src="__IMG__<?php echo $banner['boxrent']; ?>">
                </div>
            </div>
            <div class="zy_gywm">
                <div class="ejdh">
                    <div class="shang_g"></div>
                    <div class="women">
                        <div class="btmc">
                            <h1>S</h1>
                            <p>箱库租赁<span>tore box rent </span></p>
                        </div>
                        <ul class="skb">
                            <li style="background: #005bac; width: 25%;"></li>
                            <li style="background: #ff8400; width: 20%;"></li>
                            <li style="background: #d3d3d3; width: 55%;"></li>
                        </ul>
                    </div>
                    <div class="zy_dh_lb">
                        <ul>
                            <li class="active"><a  href="<?php echo url('Rent/boxrent'); ?>"><span class="glyphicon glyphicon-play"></span>&nbsp;冷藏箱租赁</a></li>
                            <li><a href="<?php echo url('Rent/storerent'); ?>"><span class="glyphicon glyphicon-play"></span>&nbsp;冷库租赁</a></li>
                            <li class="page_Section page_Section1" style="border:none;">
                                <div class="Phone">
                                    <ul class=" clearfix">
                                        <li class="img animated tada"></li>
                                        <li class="phone_title"><p>详情咨询</p>
                                        <p class="English">Detail consultation</p></li>
                                        <li class="number" style="font-size: 24px;">0371—55172118</li>  
                                    </ul>
                                </div>
                            </li>
                            <li class="kfimage"><img src="__PUBLIC__/images/kf.png"></li>
                        </ul>
                    </div>
                </div>
                <div class="touyin"></div>
                <div class="zynr_db">
                    <div class="lujing">
                        <!-- <h2>冷藏箱租赁</h2> -->
                        <p style="float: left;"><span class="glyphicon glyphicon-home"></span>&nbsp;您的位置：<a href="<?php echo url('Index/index'); ?>">首页</a> > <a href="<?php echo url('Rent/boxrent'); ?>">箱库租赁</a> > <a href="<?php echo url('Rent/boxrent'); ?>">冷藏箱租赁</a></p>
                    </div>
                    <ul class="skb" style="margin-bottom: 20px;">
                       <!--  <li style="background: #005bac; width: 12%;"></li>
                        <li style="background: #ff8400; width: 15%;"></li>
                        <li style="background: #d3d3d3; width: 73%;"></li> -->
                        <li style="background: #d3d3d3; width: 100%;"></li>
                    </ul>

                    <!--内容-->
                    <div class="gsjj_nr">
                        <p class="indent" style="font-size: 16px;">冷藏箱出租业务。冷藏箱主要有三种规格可供选择：45尺（长*宽*高：13.7米*2.5米*2.8米，货物限重26吨）单冷机、40尺（长*宽*高：12.1米*2.4米*2.8米，货物限重26吨）单冷机和40尺双冷机（即有两套独立机组）；温度夏季可维持在-18℃，冬季可维持在5℃，浮动温度范围可控制在设定温度的±3℃；在场站堆存时，可开启电源模式作为临时冷藏、冷冻仓库使用。</p>
                        <!-- <div class="goodstrace" style="padding-top: 30px;">
                            <div class="trace_l fl">
                                <h3>机型</h3>
                                <p class="des">45尺（长*宽*高：13.7米*2.5米*2.8米，货物限重26吨）。<br/>40尺（长*宽*高：12.1米*2.4米*2.8米，货物限重26吨）</p>
                                <p class="item"><span class="item-ok glyphicon glyphicon-ok"></span>&nbsp;45尺单冷机</p>
                                <p class="item"><span class="item-ok glyphicon glyphicon-ok"></span>&nbsp;40尺单冷机</p>
                                <p class="item"><span class="item-ok glyphicon glyphicon-ok"></span>&nbsp;40尺双冷机</p>
                            </div>
                            <div class="trace_r fr">
                                <h3>温度</h3>
                                <p class="des">浮动温度范围可控制在设定温度的±3℃；在场站堆存时，可开启电源模式作为临时冷藏、冷冻仓库使用。</p>
                                <p class="item"><span class="item-ok glyphicon glyphicon-ok"></span>&nbsp;夏季可维持在-18℃</p>
                                <p class="item"><span class="item-ok glyphicon glyphicon-ok"></span>&nbsp;冬季季可维持在5℃</p>
                            </div>
                            <div class="clearfix"></div>
                        </div> -->
                        <div class="goodstrace kxzlwrap">
                            <div class="kxzlimg" style="margin: 0 auto;width:250px; height: 250px;">
                                <img src="__PUBLIC__/images/kxzl.png" alt="">
                            </div>
                            <div class="kxzltext kxzl1">
                                 <p>45RF冷藏箱：内容积 68m³，最高限重：26t</p>
                            </div>
                            <div class="kxzltext kxzl2">
                                <p>40RF冷藏箱<br/>内容积：55.46m³<br/>最高限重：26.99t</p>
                            </div>
                            <div class="kxzltext kxzl3">
                                 <p>40RF双冷机冷藏箱<br/>内容积：64m³<br/>最高限重：26t</p>
                            </div>
                        </div>
                        <!-- <div class="">
                            <p><b>陆港冷藏箱运输主要技术优势</b></p>
                            <p class="indent">1、冷机采用国际领先制造商冷王和开利的最新产品，有柴油和交流电源两种模式可供选择。运输过程中，使用燃油模式控制温度；在场站堆存时，可开启电源模式作为临时冷藏、冷冻仓库使用。</p>
                            <p class="indent">2、远程遥控启停冷机。对所有机组可以进行远程无线实时监控（含实时位置、温度等），随时掌握机组运行状况，并根据实际环境和箱内温度情况，对机组进行遥控启、停。</p>
                            <p class="indent">3、远程实时监控箱内各区温度。夏季可维持在-18℃，冬季可维持在5℃。浮动范围可控制在设定温度的±3℃以内，最大程度地满足了货物运输过程中的品质保障需要</p>
                            <p class="indent">4、适用地域范围广。经过实际国际铁路运输的检验，即使在俄罗斯冬季低温达到-50℃时，机组也可正常运行。</p>
                            <p class="indent">5、我司还可提供双冷机冷藏箱（即有2套独立机组），在出现运行异常时可进行实时切换，最大程度上确保货物安全。</p>
                            <p class="indent">6、箱型选择灵活。客户可根据实际需要，选择45呎单冷机、40呎单冷机和40呎双冷机（即有2套独立机组）等三种不同类型的冷藏箱，以适用于长路途、大货量的干线运输，优势明显。</p>
                        </div> -->
                        <div class="container" style="width: 840px;">
                            <div class="row">
                                <div class="col-lg-12 text-center">
                                    <h2 class="section-heading">技术优势</h2>
                                    <hr class="primary">
                                </div>
                            </div>
                        </div>
                        <div class="container" style="width: 840px;">
                            <div class="row">
                                <!-- begin 1st row -->
                                <div class="col-lg-5 col-md-5 text-center">
                                    <div class="service-box">
                                        <div class="yswrap">
                                            <div class="iconbox bg-primary fl">
                                                <i class="fa fa-thumbs-o-up icontext" style="visibility: visible; animation-name: bounceIn;"></i>
                                            </div>
                                            <h3 class="boxrenttitle fr">国际领先</h3>
                                            <div class="clearfix"></div>
                                        </div>
                                        <p class="text-muted">
                                             冷机采用国际领先制造商冷王和开利的最新产品，有柴油和交流电源两种模式可供选择。运输过程中，使用燃油模式控制温度。
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2">
                                </div>
                                <div class="col-lg-5 col-md-5 text-center">
                                    <div class="service-box">
                                        <div class="yswrap">
                                            <div class="iconbox iconbox1 bg-dark fl">
                                                <i class="fa fa-desktop icontext" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: bounceIn;"></i>
                                            </div>
                                            <h3 class="boxrenttitle fr">远程操控</h3>
                                            <div class="clearfix"></div>
                                        </div>
                                        <p class="text-muted">
                                            远程遥控启停冷机。对所有机组可以进行远程无线实时监控（含实时位置、温度等），随时掌握机组运行状况，并根据实际环境和箱内温度情况，对机组进行遥控启、停。
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- end 1st row -->
                            <br>
                            <div class="row">
                                <!-- begin 2nd row -->
                                <div class="col-lg-5 col-md-5 text-center">
                                    <div class="service-box">
                                        <div class="yswrap">
                                            <div class="iconbox iconbox1 bg-dark fl">
                                                <i class="fa fa-globe icontext" style="visibility: visible; animation-name: bounceIn;"></i>
                                            </div>
                                            <h3 class="boxrenttitle fr">适用广泛</h3>
                                            <div class="clearfix"></div>
                                        </div>
                                        <p class="text-muted">
                                             适用地域范围广。经过实际国际铁路运输的检验，即使在俄罗斯冬季低温达到-50℃时，机组也可正常运行。
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2">
                                </div>
                                <div class="col-lg-5 col-md-5 text-center">
                                    <div class="service-box">
                                        <div class="yswrap">
                                            <div class="iconbox bg-primary fl">
                                                <i class="fa fa-cubes icontext" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: bounceIn;"></i>
                                            </div>
                                            <h3 class="boxrenttitle fr">灵活多样 </h3>
                                            <div class="clearfix"></div>
                                        </div>
                                        <p class="text-muted">
                                            箱型选择灵活。客户可根据实际需要，选择45呎单冷机、40呎单冷机和40呎双冷机等三种不同类型的冷藏箱，以适用于长路途、大货量的干线运输。
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- end 2nd row -->
                        </div>
                        <!-- <div class="container" style="width: 840px;margin-top: 50px;">
                            <div class="row">
                                <div class="col-lg-12 text-center">
                                    <h2 class="section-heading">租赁方式</h2>
                                    <hr class="primary">
                                </div>
                            </div>
                        </div> -->
                        <!-- <style type="text/css">
                            .iconphone{
                                display: block;
                                width: 40px;
                                height: 40px;
                                line-height: 40px;
                                border-radius: 50%;
                                text-align: center;
                                background-color: #337cc9;
                                color: #fff;
                                font-size: 20px;
                                margin:0 auto;
                            }
                        </style>
                        <div style="text-align: center;">
                            <p class="indent"  style="text-align: center; color: #f05f40; font-size: 18px;margin-left: -35px;margin-top: 30px;font-weight: bold;"><span class="fa fa-phone iconphone" style="font-size: 20px;"></span>&nbsp;业务详情请咨询客服热线：0371—55172118，我们将竭诚为您服务。</p>
                        </div> -->
                        
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
    <p><span style="color: #eee">版权所有</span>&nbsp;郑州国际陆港开发建设有限公司 <span style="color: #eee; margin-left: 20px;">备案号：</span>&nbsp;<a style="color: #fff;" target="_blank" href="http://www.miibeian.gov.cn">豫ICP备17007279号</a>
</div>
<div class="kf">
    <!-- <a style="outline: none;" href="http://42.228.11.187/chat/index.php?nick=<?php echo $username; ?>" target="_blank"> -->
    <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=917739011&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:917739011:51" alt="点击这里给我发消息" title="点击这里给我发消息"/><!-- </a> -->
        <!-- <img src="__PUBLIC__/images/helper03.png"> -->
        <p>在线客服</p>
    </a>
</div>
            <!-- 底部开始结束 -->
        </div>

        <!-- 主体结束 -->
    </div>  	

<script type="text/javascript" src="__PUBLIC__/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/bootstrap.min.js"></script>    
<script type="text/javascript" src="__PUBLIC__/js/jssor.slider.mini.js"></script>
<!-- <script type="text/javascript" src="__PUBLIC__/js/higo-home.js"></script> -->
<script src="__PUBLIC__/js/city-picker.data.js"></script>
<script src="__PUBLIC__/js/city-picker.js"></script>
<script src="__PUBLIC__/js/main.js"></script>
<script type="text/javascript">
    $('.nav_wrap').find('li').removeClass('now');
    $('.nav_wrap').children('li').eq(7).addClass('now');
</script>
</body>
</html>