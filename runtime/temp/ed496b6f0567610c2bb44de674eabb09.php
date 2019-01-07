<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:82:"E:\wamp\www\transport\public/../application/index\view\inland\inlandcoldchain.html";i:1506406120;s:73:"E:\wamp\www\transport\public/../application/index\view\common\header.html";i:1506071803;s:73:"E:\wamp\www\transport\public/../application/index\view\common\footer.html";i:1505989080;}*/ ?>
﻿<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="" type="image/x-icon"/>
    <link href="../../static/index/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../static/index/css/font-awesome.min.css">
    <link rel="stylesheet"  href="__PUBLIC__/css/higo.css" />
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/style.css">
    <link href="__PUBLIC__/css/city-picker.css" rel="stylesheet" type="text/css" />
    <link href="__PUBLIC__/css/zym.css" rel="stylesheet" type="text/css" />
    <title>国内冷链-业务介绍</title>
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
        <!-- 主体开始 -->
        <div class="container-flued higo-main-content" style="padding:0px;">
            <!--关于我们-->
            <div class="ziye_bj">
                <div class="ziye_tu">
                    <img src="__IMG__<?php echo $banner['inlandcoldchain']; ?>" >
                </div>
            </div>
            <div class="zy_gywm">
                <div class="ejdh">
                    <div class="shang_g"></div>
                    <div class="women">
                        <div class="btmc">
                            <h1>I</h1>
                            <p>国内冷链<span style="font-size: 12px;">nland cold chain</span></p>
                        </div>
                        <ul class="skb">
                            <li style="background: #005bac; width: 25%;"></li>
                            <li style="background: #ff8400; width: 20%;"></li>
                            <li style="background: #d3d3d3; width: 55%;"></li>
                        </ul>
                    </div>
                    <div class="zy_dh_lb">
                        <ul>
                            <li class="active"><a  href="<?php echo url('Inland/inlandcoldchain'); ?>"><span class="glyphicon glyphicon-play"></span>&nbsp;业务介绍</a></li>
                            <li><a href="<?php echo url('Inland/inlandmoney'); ?>"><span class="glyphicon glyphicon-play"></span>&nbsp;费用查询</a></li>
                        </ul>
                    </div>
                </div>
                <div class="touyin"></div>
                <div class="zynr_db">
                    <div class="lujing">
                        <!-- <h2>业务介绍</h2> -->
                        <p style="float: left;"><span class="glyphicon glyphicon-home"></span>&nbsp;您的位置：<a href="<?php echo url('Index/index'); ?>">首页</a> > <a href="<?php echo url('Inland/inlandcoldchain'); ?>">国内冷链</a> > <a href="<?php echo url('Inland/inlandcoldchain'); ?>">业务介绍</a></p>
                    </div>
                    <ul class="skb" style="margin-bottom: 20px;">
                        <!-- <li style="background: #005bac; width: 12%;"></li>
                        <li style="background: #ff8400; width: 15%;"></li>
                        <li style="background: #d3d3d3; width: 73%;"></li> -->
                        <li style="background: #d3d3d3; width: 100%;"></li>
                    </ul>

                    <!--内容-->
                    <div class="gsjj_nr">
                        <div class="goodstrace" style="padding-top: 40px;">
                            <div class="trace_l internation" style="width: 100%">
                                <p style="font-size: 16px;">&nbsp;国内冷链运输业务包括干线运输、支线运输、城市配送。</p>
                                <p class="des"></p>
                                <div class="border1">
                                    <p class="item"><span class="itemnum">01</span>干线运输</p>
                                    <div class="aboutus">
                                        <div class="fl aboutus_l">
                                            <p class="indent">干线运输主要通过冷藏箱公路运输为主，将货物送达目的地，适合大容量、大吨位的，长途运输服务。主要承运商品为冷冻肉（含冷藏）、速冻食品、果蔬、冰淇淋、冰冻水产品、奶糖制品（含其它），服务特性：干线运输公路运输，24小时提货送货，全部专业冷藏车， 配备GPS+北斗导航系统+多温区温感设备，运输过程可视化。</p>
                                        </div>
                                        <div class="fr aboutus_r"><img src="__PUBLIC__/images/gx.jpg" alt=""></div>
                                        <div class="clearfix"></div>
                                    </div>
                                   <!--  <p class="interp">&nbsp;&nbsp;干线运输主要通过冷藏箱公路运输为主，将货物送达目的地，适合大容量、大吨位的，长途运输服务。主要承运商品为冷冻肉（含冷藏）、速冻食品、果蔬、冰淇淋、冰冻水产品、奶糖制品（含其它），服务特性：干线运输公路运输，24小时提货送货，全部专业冷藏车， 配备GPS+北斗导航系统+多温区温感设备，运输过程可视化。</p> -->
                                </div>
                                <div class="border1">
                                    <p class="item"><span class="itemnum">02</span>支线运输</p>
                                    <div class="aboutus">
                                        <div class="fl aboutus_l">
                                            <p class="indent">支线运输主要通过冷藏箱公路运输为主，将货物送达目的地，小吨位、针对短途和小批量运输服务。主要承运商品为冷冻肉（含冷藏）、速冻食品、果蔬、冰淇淋、冰冻水产品、奶糖制品（含其它），服务特性： 全程监控、实时监控、定制化服务。</p>
                                        </div>
                                        <div class="fr aboutus_r"><img src="__PUBLIC__/images/zx.jpg" alt=""></div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <!-- <p class="interp">&nbsp;&nbsp;支线运输主要通过冷藏箱公路运输为主，将货物送达目的地，小吨位、针对短途和小批量运输服务。主要承运商品为冷冻肉（含冷藏）、速冻食品、果蔬、冰淇淋、冰冻水产品、奶糖制品（含其它），服务特性： 全程监控、实时监控、定制化服务。</p> -->
                                </div>
                                <div class="border1">
                                    <p class="item"><span class="itemnum">03</span>城市配送</p>
                                    <div class="aboutus">
                                        <div class="fl aboutus_l">
                                            <p class="indent">1、连锁超市冷链服务：主要给大型连锁超市做生鲜果蔬、肉类等冷链配送服务；</p>
                                            <p class="indent">2、连锁餐饮冷链服务：自制冷冻车或配备多温车，根据分店位置制定最派送方案，提供“门”到“门”服务。</p>
                                        </div>
                                        <div class="fr aboutus_r"><img src="__PUBLIC__/images/csps.jpg" alt=""></div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <!-- <p class="interp">&nbsp;&nbsp;1、连锁超市冷链服务：主要给大型连锁超市做生鲜果蔬、肉类等冷链配送服务；<br/>&nbsp;&nbsp;2、连锁餐饮冷链服务：自制冷冻车或配备多温车，根据分店位置制定最派送方案，提供“门”到“门”服务。</p> -->
                                    
                                </div>
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
        </div>

        <!-- 主体结束 -->
    </div>      

<script type="text/javascript" src="__PUBLIC__/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/bootstrap.min.js"></script>    
<script type="text/javascript" src="__PUBLIC__/js/jssor.slider.mini.js"></script>
<!-- <script type="text/javascript" src="__PUBLIC__/js/higo-home.js"></script> -->
<script src="__PUBLIC__/js/city-picker.data.js"></script>
<script src="__PUBLIC__/js/city-picker.js"></script>
<script type="text/javascript">
    $('.nav_wrap').find('li').removeClass('now');
    $('.nav_wrap').children('li').eq(4).addClass('now');
</script>
</body>
</html>