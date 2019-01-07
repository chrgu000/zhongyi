<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:71:"E:\WWW\transport\public/../application/index\view\aboutus\cultural.html";i:1508720980;s:68:"E:\WWW\transport\public/../application/index\view\common\header.html";i:1513838096;s:68:"E:\WWW\transport\public/../application/index\view\common\footer.html";i:1509431569;}*/ ?>
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
    <title>实力展示</title>
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
                    <img src="__IMG__<?php echo $banner['aboutus']; ?>">
                </div>
            </div>
            <div class="zy_gywm">
                <div class="ejdh">
                    <div class="shang_g"></div>
                    <div class="women">
                        <div class="btmc">
                            <h1>A</h1>
                            <p>关于我们<span>bout us</span></p>
                        </div>
                        <ul class="skb">
                            <li style="background: #005bac; width: 25%;"></li>
                            <li style="background: #ff8400; width: 20%;"></li>
                            <li style="background: #d3d3d3; width: 55%;"></li>
                        </ul>
                    </div>
                    <div class="zy_dh_lb">
                        <ul>
                            <li><a href="<?php echo url('Aboutus/aboutus'); ?>"><span class="glyphicon glyphicon-play"></span>&nbsp;公司简介</a></li>
                            <li class="active"><a href="<?php echo url('Aboutus/cultural'); ?>"><span class="glyphicon glyphicon-play"></span>&nbsp;实力展示</a></li>
                            <li><a href="<?php echo url('Aboutus/honor'); ?>"><span class="glyphicon glyphicon-play"></span>&nbsp;荣誉资质</a></li>
                        </ul>
                    </div>
                </div>
                <div class="touyin"></div>
                <div class="zynr_db">
                    <div class="lujing">
                        <!-- <h2>企业文化</h2> -->
                        <p style="float: left;"><span class="glyphicon glyphicon-home"></span>&nbsp;您的位置：<a href="<?php echo url('Index/index'); ?>">首页</a> > <a href="<?php echo url('Aboutus/aboutus'); ?>">关于我们</a> > <a href="<?php echo url('Aboutus/cultural'); ?>">实力展示</a></p>
                    </div>
                    <ul class="skb" style="margin-bottom: 20px;">
                       <!--  <li style="background: #005bac; width: 12%;"></li>
                        <li style="background: #ff8400; width: 15%;"></li>
                        <li style="background: #d3d3d3; width: 73%;"></li> -->
                        <li style="background: #d3d3d3; width: 100%;"></li>
                    </ul>

                    <!--内容-->
                    <div class="gsjj_nr">
                        <ul class="slzs">
                            <li class="slzsli">
                                <img class="fl" src="__PUBLIC__/images/slzs5.jpg">
                                <div class="fr slzs_des">
                                     <p class="slzs_tit">专业运输车队</p>
                                     <p>陆港易冷链采用自主配备的专业运输车队，能够为客户提供专业准时、快速、安全优质的配送服务，以满足客户要求为出发点。</p>
                                </div>
                                <div class="clearfix"></div>
                            </li>
                            <li class="slzsli">
                                <img class="fr" src="__PUBLIC__/images/slzs1.jpg">
                                <div class="fl slzs_des">
                                     <p class="slzs_tit">自主产权冷藏箱</p>
                                     <p>采用最新知识产权冷藏箱，箱内配备GPS全球定位系统和温度监控系统，可对冷藏箱全程实时监控跟踪，保证货品质量与安全。</p>
                                </div>
                                <div class="clearfix"></div>
                            </li>
                            <li class="slzsli">
                                <img class="fl" src="__PUBLIC__/images/slzs4.jpg">
                                <div class="fr slzs_des">
                                     <p class="slzs_tit">多温区仓储</p>
                                     <p>以冷藏库和冷冻库租赁为主，通过标准化流程管理及现代化物流装备应用，满足客户多元化仓储需求，提升客户的市场响应速度。</p>
                                </div>
                                <div class="clearfix"></div>
                            </li>
                            <li class="slzsli">
                                <img class="fr" src="__PUBLIC__/images/slzs2.jpg">
                                <div class="fl slzs_des">
                                     <p class="slzs_tit">大型集装箱正面吊</p>
                                     <p>吊具大小可根据箱体大小进行调节，用于各类型集装箱的装卸作业，无论在任何条件的货运站，也能正常作业，提高作业效率。</p>
                                </div>
                                <div class="clearfix"></div>
                            </li>
                            <li class="slzsli">
                                <img class="fl" src="__PUBLIC__/images/slzs3.jpg">
                                <div class="fr slzs_des">
                                     <p class="slzs_tit">叉车作业</p>
                                     <p>叉车作业抛弃传统的人力搬运，通过操作堆高车，可以快速的进行货物的堆高、堆垛作业，提高货物的运输效率。</p>
                                </div>
                                <div class="clearfix"></div>
                            </li>
                             <!-- <li class="slzsli">
                                <img class="fl" src="__PUBLIC__/images/slzs5.jpg">
                                <p class="fr marginr">专业运输车队</p>
                                <div class="clearfix"></div>
                            </li>
                           <li class="slzsli">
                                <img class="fr" src="__PUBLIC__/images/slzs1.jpg">
                                <p class="fl marginl">自主产权冷藏箱</p>
                                <div class="clearfix"></div>
                            </li>
                            <li class="slzsli">
                                <img class="fl" src="__PUBLIC__/images/slzs4.jpg">
                                <p class="fr marginr">多温区仓储</p>
                                <div class="clearfix"></div>
                            </li>
                            <li class="slzsli">
                                <img class="fr" src="__PUBLIC__/images/slzs2.jpg">
                                <p class="fl marginl">大型集装箱正面吊</p>
                                <div class="clearfix"></div>
                            </li>
                            <li class="slzsli">
                                <img class="fl" src="__PUBLIC__/images/slzs3.jpg">
                                <p class="fr marginr">叉车作业</p>
                                <div class="clearfix"></div>
                            </li> -->
                        </ul>
                       
                    <!-- <p><img style="width: 100%; height:200px;" src="__PUBLIC__/images/lg.jpg"></p>
                    <br>
                    <p class="indent">陆港冷链物流属于郑州国际陆港开发建设有限公司物流业务群。郑州国际陆港开发建设有限公司是国际陆港的规划建设及郑欧班列运营主体单位。</p>
                    <style type="text/css">
                        .cultit{
                            font-size: 16px;
                            font-weight: bold;
                        }
                        .culitem span{
                            margin-right: 10px;
                        }
                        .culitem span i{
                            color: #ff8400;
                        }
                    </style>
                    <div style="padding:30px 0px;">
                        <p class="indent cultit">公司业务</p>
                        <p class="indent culitem">
                            <span>国际货运代理</span>
                            <span>国内外多式联运、集运</span>
                            <span>跨境e贸易及电子商务</span>
                            <span>仓储服务及租赁</span>
                            <span>国际运邮快递</span>
                            <span>冷链物流</span>
                            <span>物业服务</span>
                        </p>
                    </div>
                    <div style="padding:30px 0px;">
                        <p class="indent cultit">公司项目</p>
                        <p class="indent culitem">
                            <span>郑欧班列</span>
                            <span>保税物流中心</span>
                            <span>多式联运集疏中心</span>
                            <span>汽车整车进口口岸</span>
                            <span>跨境电商仓储物流中心</span>
                            <span>亚欧国际冷链物流集疏中心</span>
                            <span>进出口商品集疏交易中心</span>
                        </p>
                    </div>
                    <p class="indent">2014年5月10日习近平总书记视察郑州国际陆港时提出“要把郑州国际陆港建设成为连通境内外，辐射东中西的国际物流通道枢纽，为丝绸之路经济带建设多做贡献”。</p> -->
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
<div class="kf">
    <a style="outline: none;" href="http://42.228.11.187/chat/index.php?nick=<?php echo $username; ?>" target="_blank">
        <img src="__PUBLIC__/images/helper03.png">
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
<!-- <script type="text/javascript" src="js/higo-home.js"></script> -->
<script src="__PUBLIC__/js/city-picker.data.js"></script>
<script src="__PUBLIC__/js/city-picker.js"></script>
<script type="text/javascript">
    $('.nav_wrap').find('li').removeClass('now');
    $('.nav_wrap').children('li').eq(8).addClass('now');
</script>
</body>
</html>