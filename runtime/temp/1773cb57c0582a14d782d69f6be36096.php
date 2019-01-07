<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:69:"E:\WWW\transport\public/../application/index\view\service\joinus.html";i:1508375233;s:68:"E:\WWW\transport\public/../application/index\view\common\header.html";i:1513838096;s:68:"E:\WWW\transport\public/../application/index\view\common\footer.html";i:1509431569;}*/ ?>
﻿<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>合作加盟</title>
<link rel="icon" href="" type="image/x-icon"/>
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
<div class="ziye_bj" style="float: none;">
    <div class="ziye_tu">
        <img src="__IMG__<?php echo $banner['joinus']; ?>">
    </div>
</div>
<div class="webAgency_container webAgency_2">
    <div class="webAgency_box">
        <h2 >我们的优势
            <div class="linel"></div>
            <div class="liner"></div>
        </h2>

        <ul class="brandSuperiority_ul">
            <li class="brandSuperiority_li brandSuperiority_li1">
                <div class="brand_icon">
                    <img src="__PUBLIC__/images/lcx.jpg" alt="">
                </div>
                <div class="brand_headline">冷藏箱</div>
                <div class="brand_subheading">
                    拥有自主知识产权的冷藏箱
                </div>
            </li>
            <li class="brandSuperiority_li brandSuperiority_li2">
                <div class="brand_icon">
                    <img src="__PUBLIC__/images/sb.jpg" alt="">
                </div>
                <div class="brand_headline">设备和场站</div>
                <div class="brand_subheading">
                    拥有完整的操作设备和场站
                </div>
            </li>
            <li class="brandSuperiority_li brandSuperiority_li3">
                <div class="brand_icon">
                    <img src="__PUBLIC__/images/cd.jpg" alt="">
                </div>
                <div class="brand_headline">专业运输车队</div>
                <div class="brand_subheading">
                    拥有长期合作的专业运输车队
                </div>
            </li>
            <li class="brandSuperiority_li brandSuperiority_li4">
                <div class="brand_icon">
                    <img src="__PUBLIC__/images/ydyl.jpg" alt="">
                </div>
                <div class="brand_headline">信誉可靠</div>
                <div class="brand_subheading">
                    “一带一路”重点企业，信誉可靠
                </div>
            </li>
            <div class="clearfix"></div>
        </ul>
    </div>
</div>
<div class="joinus wrap-1200">
    <div class="joinus_l fl">
        <div class="joinus_lwrap">
            <h3>加入陆港易冷链，一起迈向成功！</h3>
            <p class="joindes">在此诚邀广大客户与陆港易冷链开展冷链业务合作！</p>
            <span class="iconphone glyphicon glyphicon-earphone"></span>
            <p class="desphone">加盟热线</p>
            <p class="phone">0371—55172118</p>
            <p class="address">地址：郑州市经开区经北四路与十七大街交叉口</p>
        </div>
    </div>
    <div class="joinus_r fr" style="overflow: hidden;">
        <img src="__PUBLIC__/images/joinus.jpg" style="width: 100%;">
    </div>
    <div class="clearfix"></div>
</div>
<div class="webAgency_container webAgency_2">
    <div class="webAgency_box">
        <h2 >未来展望
            <div class="linel"></div>
            <div class="liner"></div>
        </h2>

        <p class="hope">未来陆港易冷链将建设大库容全自动化立体冷库，加大冷藏集装箱和配送车辆配置，优化包装、运输、存储流程，制定冷链各环节操作标准，完善“门到门”冷链服务系统。综合利用物联网、云计算、大数据等先进技术，整合人、车、货、库、路、店、交易、单据等数据信息，定位建成立足河南、辐射全国，面向“一带一路”沿线国家的国际化跨境冷链物流服务中心，助力河南自贸试验区，建设成为服务”一带一路“的现代综合交通枢纽。</p>
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
<div class="kf">
    <a style="outline: none;" href="http://42.228.11.187/chat/index.php?nick=<?php echo $username; ?>" target="_blank">
        <img src="__PUBLIC__/images/helper03.png">
        <p>在线客服</p>
    </a>
</div>

<!-- 底部开始结束 -->
<script type="text/javascript" src="__PUBLIC__/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/main.js"></script>
<script type="text/javascript">
    $('.nav_wrap').find('li').removeClass('now');
    $('.nav_wrap').children('li').eq(0).addClass('now');
</script>
</body>
</html>
