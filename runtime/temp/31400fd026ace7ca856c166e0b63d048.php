<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:66:"E:\WWW\transport\public/../application/index\view\index\index.html";i:1522316439;s:68:"E:\WWW\transport\public/../application/index\view\common\header.html";i:1513838096;s:68:"E:\WWW\transport\public/../application/index\view\common\footer.html";i:1522318885;}*/ ?>
<!DOCTYPE html>
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
    <link href="__PUBLIC__/css/animate.css" rel="stylesheet" type="text/css" />
    <title>陆港易冷链</title>
    <style type="text/css">
        .city-picker-span{
            border:none;
            border-bottom:1px solid #ccc;
        }
        .g-searchWrap .g-searchBox{
            width: 360px;
        }
        .g-searchWrap .g-searchBox .g-content li .xiala>div>p,.g-searchWrap .g-searchBox .g-content li .xiala1>div>p,.g-searchWrap .g-searchBox .g-content li .xiala3>div>p{
            height: 220px;
        }
        .g-searchWrap .g-searchBox .g-content .xiala>div>p>div>p,.g-searchWrap .g-searchBox .g-content .xiala1>div>p>div>p,.g-searchWrap .g-searchBox .g-content .xiala3>div>p>div>p{
            height: auto;
            min-height: 30px;
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
    <!-- 轮播图开始 -->
    <div id="carousel-example-generic" class="carousel slide " data-ride="carousel" style="position: relative;">
        <ol class="carousel-indicators ">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <!-- 轮播图第一张 -->
            <!-- <div class="item active">
                <a href=""><img src="__PUBLIC__/images/banner4.jpg" alt="banner4"></a>
            </div> -->
            <!-- 轮播图第二张第三张 -->
            <?php if(is_array($image) || $image instanceof \think\Collection || $image instanceof \think\Paginator): $i = 0; $__LIST__ = $image;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$a): $mod = ($i % 2 );++$i;?>
                <div class="item">
                    <a href=""><img src="__IMG__<?php echo $a['imgurl']; ?>" alt="banner5"></a>
                </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            <!-- <div class="item">
                <a href=""><img src="__PUBLIC__/images/banner6.jpg" alt="banner6"></a>
            </div> -->
        </div>
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="arrow_left" style="position: absolute; top: 40%;right: 50%;">
                <img class="higo-pre-next" src="__PUBLIC__/images/arrow-left.png">
            </span>
            <span class="sr-only">上一页</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="arrow_right" style="position: absolute; top: 40%;right: 50%;">
                <img class="higo-pre-next" src="__PUBLIC__/images/arrow-right.png">
            </span>
            <span class="sr-only">下一页</span>
        </a>
        <!-- 运单查询框开始 -->
        <!-- <div class="g-searchWrap">
            <div class="g-searchBg"></div>
            <div class="g-searchBox">
                <ul class="title clearfix">
                    <li class="titleLi goodsLi active">货源信息</li>
                    <li class="titleLi lineLi">车源信息</li>
                    <li class="titleLi storeLi">库源信息</li>
                    <li class="line"></li>
                </ul>
                <form action="<?php echo url('Index/goods_search'); ?>" enctype="multipart/form-data" method="get" class="formshow goodsUl">
                    <div class="g-content">
                        <ul>
                            <li class="u-start list" style="margin-bottom: 10px;">
                                <p class="fl">始&nbsp;发&nbsp;地&nbsp;：</p>
                                <div class="ku" style="display: inline-block;">
                                    <input  name="starting_address" id="city-picker3" class="form-control" type="text" placeholder="请输入始发地" value="<?php echo !empty($starting_address)?$starting_address : '';; ?>" style="width: 220px;">
                                    <div class="xiala">
                                        <h1><span>确认</span></h1>
                                    </div>
                                </div>
                            </li>
                            <li class="u-start c-startEnd" style="margin-bottom: 10px;">
                                <p class="fl">目&nbsp;的&nbsp;地&nbsp;：</p>
                                <div class="ku1" style="display: inline-block;">
                                    <input  name="destination" id="city-picker3" class="form-control" type="text" placeholder="请输入目的地" value="<?php echo !empty($destination)?$destination : '';; ?>" style="width: 220px;">
                                    <div class="xiala1">
                                        <h1><span>确认</span></h1>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="searchBtn">
                            <input type="submit" value="搜索" class="goods-search" />
                        </div>
                    </div>
                </form>
                <form action="<?php echo url('Index/path_search'); ?>" enctype="multipart/form-data" method="get" class="formshow lineUl" style="display: none;">
                    <div class="g-content " >
                        <ul>
                            <li class="u-start list" style="margin-bottom: 10px;">
                                <p class="fl">始&nbsp;发&nbsp;地&nbsp;：</p>
                                <div class="ku" style="display: inline-block;">
                                    <input  name="startsite" id="city-picker3" class="form-control" type="text" placeholder="请输入始发地" style="width: 220px;" value="<?php echo !empty($startsite)?$startsite : '';; ?>">
                                    <div class="xiala">
                                        <h1><span>确认</span></h1>
                                    </div>
                                </div>
                            </li>
                            <li class="u-start c-startEnd" style="margin-bottom: 10px;">
                                <p class="fl">目&nbsp;的&nbsp;地&nbsp;：</p>
                                <div class="ku1" style="display: inline-block;">
                                    <input  name="endsite" id="city-picker3" class="form-control" type="text" placeholder="请输入目的地" style="width: 220px;" value="<?php echo !empty($endsite)?$endsite : '';; ?>">
                                    <div class="xiala1">
                                        <h1><span>确认</span></h1>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="searchBtn">
                            <input type="submit" value="搜索" class="line-search" />
                        </div>
                    </div>
                </form>
                <form action="<?php echo url('Index/warehouse_search'); ?>" enctype="multipart/form-data" method="get" class="formshow storeUl" style="display: none;">
                    <div class="g-content " >
                        <ul>
                            <li class="u-start list" style="margin-bottom: 10px;">
                                <p class="fl">所&nbsp;在&nbsp;地&nbsp;：</p>
                                <div class="ku" style="display: inline-block;">
                                    <input  name="wh_address" id="city-picker3" class="form-control" type="text" placeholder="请输入仓库所在地" style="width: 220px;" value="<?php echo !empty($wh_address)?$wh_address : '';; ?>">
                                    <div class="xiala">
                                        <h1><span>确认</span></h1>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="searchBtn">
                            <input type="submit" value="搜索" class="line-search" />
                        </div>
                    </div>
                </form>
            </div>
        </div> -->
        <!-- 运单查询框结束 -->
    </div>
    <!-- 轮播图结束 -->
    <!-- 轮播图下面导航开始 -->
    <div class="container-flued higo-md-menu " style="min-width: 1200px;">
        <div class="row container center-block text-center higo-mmenu-box" style="min-width: 1200px;">
            <!-- <div class="col-xs-2 col-md-2">
            	<a href="<?php echo url('Service/onlineorder'); ?>" >
            		<span class="fa fa-file-text-o icon"></span>
                    <span class="">在线下单</span>
            	</a>
            </div> -->
            <div class="col-xs-2 col-md-2">
                <?php if(session('username') == ''): ?>
                    <a href="<?php echo url('Login/login'); ?>" onClick="return confirm('请登录！')">
                        <span class="fa fa-file-text-o icon"></span>
                        <span class="">信息发布</span>
                    </a>
                <?php else: if($user_u['check_state'] != '1'): ?>
                        <a href="<?php echo url('Personalcenter/personalcenter_index'); ?>" onClick="return confirm('请您先认证！')">
                            <span class="fa fa-file-text-o icon"></span>
                            <span class="">信息发布</span>
                        </a>
                    <?php else: ?>
                        <a href="<?php echo url('Personalcenter/personalcenter_index'); ?>">
                            <span class="fa fa-file-text-o icon"></span>
                            <span class="">信息发布</span>
                        </a>
                    <?php endif; endif; ?>
            </div>
            <div class="col-xs-2 col-md-2">
            	<a href="<?php echo url('Service/goodstrace'); ?>" >
                	<span class="fa fa-truck icon"></span>
                    <span class="">货物追踪</span>
            	</a>
            </div>
            <div class="col-xs-2 col-md-2">
                <a href="<?php echo url('Service/temperate'); ?>">
                    <span class="fa fa-thermometer-empty icon"></span>
                    <span class="">温度监控</span>
                </a>
            </div>
            <div class="col-xs-2 col-md-2">
                <a href="<?php echo url('Service/financialservice'); ?>" >
                    <span class="fa fa-dollar icon"></span>
                    <span class="">金融服务</span>
                </a>
            </div>
            <div class="col-xs-2 col-md-2">
            	<a href="<?php echo url('Service/insuranceservice'); ?>" >
            		<span class="fa fa-get-pocket icon"></span>
                    <span class="">保险服务</span>
            	</a>
            </div>
            <div class="col-xs-2 col-md-2">
                <a href="<?php echo url('Service/joinus'); ?>" >
                    <span class="fa fa-handshake-o icon"></span>
                    <span class="">合作加盟</span>
                </a>
            </div>
        </div>
    </div>
    <!-- 轮播图下面导航开始 -->
        
    <div class="wrap-1200" style="padding:20px 0px;position: relative;">
        <div class="fl" style="position: absolute; top: 28px;">
            <img src="__PUBLIC__/images/search.jpg" style="width: 110px; height: 52px; margin-top: 0px; margin-left: 30px;">
        </div>
        <div class="search_wrap" style="width: 900px;">
            <!-- <select name="type" class="fl search_select">
                <option id="a" value="0">货源</option>
                <option id="b" value="1">车源</option>
                <option id="c" value="2">库源</option>
            </select> -->
            <!-- <div class="fl" style="">
                <img src="__PUBLIC__/images/search.png" style="width: 42px; height: 42px; margin-top: 4px; margin-left: 10px;">
            </div> -->
            <div class="fl search_select">
                <p class="seltoggle"><span class="text">货源</span>&nbsp;<span class="fa fa-angle-down"></span></p>
                <div class="drop">
                    <p class="a active">货源</p>
                    <p class="b">车源</p>
                    <p class="c">库源</p>
                </div>
            </div>
            <form class="showwrap show1" style="display: block;"  action="<?php echo url('Index/goods_search'); ?>" enctype="multipart/form-data" method="get">
                <div class="fl search_site">
                    <span style="vertical-align: middle;">始发地</span>
                    <div class="ku" style="display: inline-block; vertical-align: middle;">
                        <input  name="starting_address" id="city-picker3" class="form-control" type="text" placeholder="请输入始发地" value="<?php echo !empty($starting_address)?$starting_address : '';; ?>" style="width: 220px;">
                        <div class="xiala">
                            <h1><span>确认</span></h1>
                        </div>
                    </div>
                   <!--  <label>始发地：<input type="text" name=""></label> -->
                </div>
                <div class="fl search_site">
                    <span style="vertical-align: middle;">目的地</span>
                    <div class="ku1" style="display: inline-block; vertical-align: middle;">
                        <input  name="destination" id="city-picker3" class="form-control" type="text" placeholder="请输入目的地" value="<?php echo !empty($starting_address)?$starting_address : '';; ?>" style="width: 220px;">
                        <div class="xiala1">
                            <h1><span>确认</span></h1>
                        </div>
                    </div>
                    <!-- <label>目的地：<input type="text" name=""></label> -->
                </div>
                <div class="search_sub fr">
                    <input class="btn" type="submit" name="" value="搜索"/>
                </div>
               <!--  <div class="fr" style="">
                    <img src="__PUBLIC__/images/search.png" style="width: 42px; height: 42px; margin-top: 4px; margin-right: 10px;">
                </div> -->
                <div class="clearfix"></div>
            </form>
            <form class="showwrap show2" class="showwrap show1"   action="<?php echo url('Index/path_search'); ?>" enctype="multipart/form-data" method="get">
                <div class="fl search_site">
                    <span style="vertical-align: middle;">始发地</span>
                    <div class="ku" style="display: inline-block; vertical-align: middle;">
                        <input  name="startsite" id="city-picker3" class="form-control" type="text" placeholder="请输入始发地" value="<?php echo !empty($startsite)?$startsite : '';; ?>" style="width: 220px;">
                        <div class="xiala">
                            <h1><span>确认</span></h1>
                        </div>
                    </div>
                   <!--  <label>始发地：<input type="text" name=""></label> -->
                </div>
                <div class="fl search_site">
                    <span style="vertical-align: middle;">目的地</span>
                    <div class="ku1" style="display: inline-block; vertical-align: middle;">
                        <input  name="endsite" id="city-picker3" class="form-control" type="text" placeholder="请输入目的地" value="<?php echo !empty($endsite)?$endsite : '';; ?>" style="width: 220px;">
                        <div class="xiala1">
                            <h1><span>确认</span></h1>
                        </div>
                    </div>
                    <!-- <label>目的地：<input type="text" name=""></label> -->
                </div>
                <div class="search_sub fr">
                    <input class="btn" type="submit" name="" value="搜索"/>
                </div>
                <div class="clearfix"></div>
            </form>
            <form class="showwrap show3" class="showwrap show2" class="showwrap show1" action="<?php echo url('Index/warehouse_search'); ?>" enctype="multipart/form-data" method="get">
                <div class="fl search_site">
                    <span style="vertical-align: middle;">所需仓库地</span>
                    <div class="ku" style="display: inline-block; vertical-align: middle;">
                        <input  name="wh_address" id="city-picker3" class="form-control" type="text" placeholder="请输入所需仓库地址" value="<?php echo !empty($wh_address)?$wh_address : '';; ?>" style="width: 220px;">
                        <div class="xiala">
                            <h1><span>确认</span></h1>
                        </div>
                    </div>
                   <!--  <label>始发地：<input type="text" name=""></label> -->
                </div>
                <div class="search_sub fr">
                    <input class="btn" type="submit" name="" value="搜索"/>
                </div>
                <div class="clearfix"></div>
            </form>
            <div class="clearfix"></div>
        </div>
        <!-- <div class="" style="position: absolute; top: 24px;right: 80px;">
            <img src="__PUBLIC__/images/search.png" style="width: 42px; height: 42px; margin-top: 4px; margin-right: 10px;">
        </div> -->
    </div>
    <div class="wrap-1200 mycar_wrap">
        <div class="fl mycar mygoods">
            <div class="title" >
                <p style="display: inline-block;"><span class="fa fa-truck"></span>&nbsp;易冷链车源</p>
                <p class="moreview"><a href="<?php echo url('Path/path'); ?>">查看更多&gt;&gt;</a></p>
            </div>
            <ul class="skb" style="margin-top: 0px;">
                <li style="background: #005bac; width: 25%;"></li>
                <li style="background: #ff8400; width: 20%;"></li>
                <li style="background: #d3d3d3; width: 55%;"></li>
            </ul>
            <div class="mycar_con list_lh" style="width: 100%;">
                <ul id="ul" class="fl mycar_conlist" style="width: 100%;background: #f5f5f5">
                    <?php if(is_array($pathres) || $pathres instanceof \think\Collection || $pathres instanceof \think\Paginator): $i = 0; $__LIST__ = $pathres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v1): $mod = ($i % 2 );++$i;?>
                        <li>
                            <a href="<?php echo url('Path/path_detail',array('id'=>$v1['id'])); ?>">
                                <p class="item iteme " style="margin-top:-3px;">
                                    <span>&nbsp;&nbsp;</span>
                                    <span title="<?php echo $v1['startsite']; ?>"><i class="glyphicon glyphicon-map-marker" style="color: #005bac;top:4px;"></i><i class="skin">始：<?php echo $v1['startsite']; ?>&nbsp;</i></span>
                                    <br>
                                   <span>&nbsp;&nbsp;</span>
                                    <span title="<?php echo $v1['endsite']; ?>"><i class="glyphicon glyphicon-map-marker" style="color: #ff8400;top:4px;"></i><i class="skin">到：<?php echo $v1['endsite']; ?>&nbsp;</i></span>
                                </p>
                                <p class="item iteme skin">
                                    <span>常用车型：</span><span title="<?php echo $v1['vehicle_type']; ?>"><?php echo $v1['vehicle_type']; ?></span>
                                    <br>
                                    <span>常用车长：</span><span title="<?php echo $v1['vehicle_length']; ?>"><?php echo $v1['vehicle_length']; ?></span>
                                </p>
                                <!-- <p class="item itemc skin" style="margin-top: 4px;">
                                    <span>发布时间：</span><span><?php echo $v1['time']; ?></span>
                                </p> -->
                                <p class="item1 itemf">
                                    <span class="zy">易冷链自营</span>
                                    <span><i class="glyphicon glyphicon-ok-circle" style="color: #ff8400"></i>已认证</span>
                                    <span>&nbsp;&nbsp;</span>
                                </p>
                            </a>
                        </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                    
                    <div class="clearfix"></div>
                </ul>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="fr mycar" >
            <div class="title" style="width: 100%;">
                <p style="display: inline-block;"><span class="fa fa-cubes"></span>&nbsp;易冷链货源</p>
                <p class="moreview"><a href="<?php echo url('Goods/goods_car'); ?>">查看更多&gt;&gt;</a></p>
            </div>
            <ul class="skb" style="margin-top: 0px;">
                <li style="background: #005bac; width: 25%;"></li>
                <li style="background: #ff8400; width: 20%;"></li>
                <li style="background: #d3d3d3; width: 55%;"></li>
            </ul>
            
            <div class="mycar_con list_lh1" style="width: 100%;">
                <ul class="fl mycar_conlist" style="width: 100%;background: #f5f5f5">
                    <?php if(is_array($goodsres1) || $goodsres1 instanceof \think\Collection || $goodsres1 instanceof \think\Paginator): $i = 0; $__LIST__ = $goodsres1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v2): $mod = ($i % 2 );++$i;?>
                        <li>
                            <a href="<?php echo url('Goods/goods_car_detail1',array('id'=>$v2['id'])); ?>">
                                <p class="item iteme " style="margin-top:-3px;">
                                    <span>&nbsp;&nbsp;</span>
                                    <span title="<?php echo $v2['starting_address']; ?>"><i class="glyphicon glyphicon-map-marker" style="color: #005bac;top:4px;"></i><i class="skin">始：<?php echo $v2['starting_address']; ?>&nbsp;</i></span>
                                    <br>
                                   <span>&nbsp;&nbsp;</span>
                                    <span title="<?php echo $v2['destination']; ?>"><i class="glyphicon glyphicon-map-marker" style="color: #ff8400;top:4px;"></i><i class="skin">到：<?php echo $v2['destination']; ?>&nbsp;</i></span>
                                </p>
                                <p class="item iteme skin">
                                    <!-- <span>货物类型：</span><span title="">
                                      <?php if(is_array($goods_sort) || $goods_sort instanceof \think\Collection || $goods_sort instanceof \think\Paginator): $i = 0; $__LIST__ = $goods_sort;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v3): $mod = ($i % 2 );++$i;if($v3['id'] == $v2['goods_sort']): ?>
                                      <?php echo $v3['typename']; endif; endforeach; endif; else: echo "" ;endif; ?>
                                    </span> -->
                                    <span>货物名称：</span><span title=""><?php echo $v2['goods_name']; ?></span>
                                    <br>
                                    <span>货物规格：</span><span title=""><?php echo $v2['standard_ton']; ?>吨；<?php echo $v2['standard_square']; ?>方</span>
                                </p>
                                <p class="item1 itemf">
                                    <?php if($v2['is_company'] == 1): ?>
                                        <span class="zy">易冷链自营</span>
                                    <?php else: ?>
                                        <span class="zy">非自营</span>
                                    <?php endif; ?>
                                    <span><i class="glyphicon glyphicon-ok-circle" style="color: #ff8400"></i>已认证</span>
                                    <span>&nbsp;&nbsp;</span>
                                </p>
                            </a>
                        </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
            <div class="clearfix"></div>
                
        </div>
        <div class="clearfix"></div>
    </div>
    <!-- 主体开始 -->
    <div class="container-flued higo-main-content" style="padding-bottom: 0px; padding-top: 10px;">
        <!-- 内容开始 -->
        <div style="width: 100%;">
        <div class="index_main">
            <div class="index_gsgk">
                <div class="index_tit index_gsgk_t">
                    <p><i class="glyphicon glyphicon-thumbs-up"></i>&nbsp;公司优势</p>
                    <span><a href="<?php echo url('Aboutus/aboutus'); ?>">更多&gt;&gt;</a></span>
                </div>
                <ul class="skb">
                    <li style="background: #005bac; width: 25%;"></li>
                    <li style="background: #ff8400; width: 20%;"></li>
                    <li style="background: #d3d3d3; width: 55%;"></li>
                </ul>
                <div class="index_gsgk_n">
                    <a><img src="__IMG__<?php echo $banner['companyindex']; ?>" style="height: 180px;"></a>
                    <p style="text-align: justify; text-indent: 30px;">
                      <!-- 陆港易冷链采用自主知识产权恒温冷藏箱，配备GPS定位系统，实时远程监控，全程冷链可追溯，保证货物质量与安全。且已形成密集的运输网络，在各大网络中心点设有完整的操作设备和场站，拥有长期专业运输车队，有效减少运输时间，实现高效运输作业。 -->
                      陆港易冷链采用自主知识产权恒温冷藏箱，配备GPS定位系统，实时远程监控，全程冷链可追溯，保证货物质量与安全。现陆港易冷链已形成密集的运输网络，在各大网络中心点设有完整的操作设备和场站，拥有长期专业运输车队，有效减少运输时间，实现高效运输作业。
                      <!-- 以完善的运输管理系统和标准化的操作模式，为客户提供专业、透明、全程可追溯的冷链运输服务。 --></p>
                      <!-- <a href="<?php echo url('Aboutus/aboutus'); ?>"><p class="morep" >了解更多<span>&gt;&gt;</span></p></a> -->
                </div>
            </div>
            <div class="index_fwxm">
                <div class="index_tit index_fwxm_t">
                    <p><i class="glyphicon glyphicon-check"></i>&nbsp;产品与服务</p>
                    <span><a href=""><!-- 更多&gt;&gt; --></a></span>
                </div>
                <ul class="skb">
                    <li style="background: #005bac; width: 25%;"></li>
                    <li style="background: #ff8400; width: 20%;"></li>
                    <li style="background: #d3d3d3; width: 55%;"></li>
                </ul>
                <div class="index_fwxm_n">
                    <ul>
                        <li>
                            <a href="<?php echo url('internation/internationcoldchain'); ?>">
                                <!-- <img src="__PUBLIC__/images/gjll.jpg"> -->
                                <img src="__IMG__<?php echo $banner['interindex']; ?>">
                                <p class="index_p_txt">
                                    国际冷链运输</p>
                                <span class="index_p_bg"></span>
                                <div class="project_detail">
                                    <p>查看详情&nbsp;<span class="fa fa-long-arrow-right"></span></p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo url('inland/inlandcoldchain'); ?>">
                                <!-- <img src="__PUBLIC__/images/gnll.jpg"> -->
                                <img src="__IMG__<?php echo $banner['inlandindex']; ?>">
                                <p class="index_p_txt">
                                    国内冷链运输</p>
                                <span class="index_p_bg"></span>
                                <div class="project_detail">
                                    <p>查看详情&nbsp;<span class="fa fa-long-arrow-right"></span></p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo url('rent/boxrent'); ?>">
                                <!-- <img src="__PUBLIC__/images/box.jpg"> -->
                                <img src="__IMG__<?php echo $banner['boxindex']; ?>">
                                <p class="index_p_txt">
                                    箱库租赁</p>
                                <span class="index_p_bg"></span>
                                <div class="project_detail">
                                    <p>查看详情&nbsp;<span class="fa fa-long-arrow-right"></span></p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo url('service/brokerage'); ?>">
                                <img src="__IMG__<?php echo $banner['brokerageindex']; ?>">
                                <p class="index_p_txt">
                                    报关报检</p>
                                <span class="index_p_bg"></span>
                                <div class="project_detail">
                                    <p>查看详情&nbsp;<span class="fa fa-long-arrow-right"></span></p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo url('service/labelprint'); ?>">
                                <!-- <img src="__PUBLIC__/images/label.jpg"> -->
                                <img src="__IMG__<?php echo $banner['labelindex']; ?>">
                                <p class="index_p_txt">
                                    标签印刷</p>
                                <span class="index_p_bg"></span>
                                <div class="project_detail">
                                    <p>查看详情&nbsp;<span class="fa fa-long-arrow-right"></span></p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo url('service/secondpack'); ?>">
                                <!-- <img src="__PUBLIC__/images/second.jpg"> -->
                                <img src="__IMG__<?php echo $banner['secondindex']; ?>">
                                <p class="index_p_txt">
                                    二次包装</p>
                                <span class="index_p_bg"></span>
                                <div class="project_detail">
                                    <p>查看详情&nbsp;<span class="fa fa-long-arrow-right"></span></p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="index_xwzx">
                <div class="index_tit index_xwzx_t">
                    <p><i class="glyphicon glyphicon-file"></i>&nbsp;新闻资讯</p>
                    <span><a href="<?php echo url('News/news'); ?>">更多&gt;&gt;</a></span>
                </div>
                <ul class="skb">
                    <li style="background: #005bac; width: 25%;"></li>
                    <li style="background: #ff8400; width: 20%;"></li>
                    <li style="background: #d3d3d3; width: 55%;"></li>
                </ul>
                <div class="index_gsgk_n">
                    <a><img src="__IMG__<?php echo $banner['newsindex']; ?>"></a>
                    <ul class="index_news_box">
                        <?php if(is_array($news) || $news instanceof \think\Collection || $news instanceof \think\Paginator): $i = 0; $__LIST__ = $news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <li ><span><?php echo $vo['articletime']; ?></span><a href="<?php echo url('News/newsdetail',array('id'=>$vo['id'])); ?>"><?php echo $vo['description']; ?></a><div class="clearfix"></div></li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>
            </div>
            <div class="clear">
            </div>
        </div>
        </div>
        <!-- 内容结束 -->
        <!-- 链接开始 -->
        <!-- <div class="link wrap-1200">
            <div class="linktitle">
                <p><span class="fa fa-handshake-o"></span>合作客户</p>
            </div>
            <ul class="clearfix">
                <li>
                    <a href="">
                        <img src="__PUBLIC__/images/zlgw.png" >
                        <p>中陆官网</p>
                    </a>
                    <div class="mask">
                        <a href=""><p>查看详情&nbsp;<span class="fa fa-long-arrow-right"></span></p></a>
                    </div>
                </li>
                <li>
                    <a href="http://banliego.com/">
                        <img src="__PUBLIC__/images/blg.png" >
                        <p>班列购</p>
                    </a>
                    <div class="mask">
                        <a href="http://banliego.com/"><p>查看详情&nbsp;<span class="fa fa-long-arrow-right"></span></p></a>
                    </div>
                </li>
                <li>
                    <a href="">
                        <img src="__PUBLIC__/images/ymt.png" >
                        <p>易贸通</p>
                    </a>
                    <div class="mask">
                        <a href=""><p>查看详情&nbsp;<span class="fa fa-long-arrow-right"></span></p></a>
                    </div>
                </li>
                <li>
                    <a href="<?php echo url('News/coldchain'); ?>">
                        <img src="__PUBLIC__/images/llbk.png" >
                        <p>冷链百科</p>
                    </a>
                    <div class="mask">
                        <a href="<?php echo url('News/coldchain'); ?>"><p>查看详情&nbsp;<span class="fa fa-long-arrow-right"></span></p></a>
                    </div>
                </li>
            </ul>
        </div> -->
        <!-- 合作客户开始 -->
        <div class="n-bg" style=" background: #fff; padding:20px 0px">
            <div class="container center-block " style="width: 1200px; padding: 0px;">
                <!-- 客户 start -->
                <div class="row higo-content-floor higo-partner">
                    <div class="col-xs-12" style="padding: 0px;">
                        <div class="panel panel-default link" style="border:none; padding-bottom: 0px;">
                            <div class="linktitle webAgency_box">
                                <p>
                                <span class="fa fa-handshake-o"></span>合作客户
                                </p>
                                <!-- <h2 style="padding:0px; font-size: 26px;">合作客户<div class="linel"></div>
                                        <div class="liner"></div>
                                </h2>
                                <p style="text-align: center; color: #2563b0; font-size: 16px; margin-bottom: 20px;">PARTNER</p> -->
                            </div>

                                            
                            <div class="panel-body higo-partner-content" style="border:1px solid #eee; padding: 0px;">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <!-- Jssor Slider Begin -->
                                        <div id="slider1_container" class="higo-partner-slider">
                                            <!-- Loading Screen -->
                                            <div class="higo-slider-load" u="loading" >
                                                <div class="slider-load-left"></div>
                                                <div class="slider-load-right"></div>
                                            </div>
                                            <!-- Slides Container -->
                                            <div u="slides" class="slides-container" >
                                                
                                                <?php if(is_array($customerres) || $customerres instanceof \think\Collection || $customerres instanceof \think\Paginator): $i = 0; $__LIST__ = $customerres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v3): $mod = ($i % 2 );++$i;?>
                                                    <div>
                                                        <a href=""><img u="image" src="__IMG__<?php echo $v3['img']; ?>" /></a>
                                                    </div>
                                                <?php endforeach; endif; else: echo "" ;endif; ?>
                                            </div>
                                            <!-- Arrow Left -->
                                            <span u="arrowleft" class="jssora03l">
                                            </span>
                                            <!-- Arrow Right -->
                                            <span u="arrowright" class="jssora03r">
                                            </span>
                                        </div>
                                        <!-- Jssor Slider End -->
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- 客户 end -->
            </div>
        </div>
        <!-- 合作客户结束 -->
        <!-- 链接结束 -->
        <!-- 友情链接开始 -->
        <!-- <div style="width: 100%">
        <div class="yqlj">
            <div class="yqlj_jz">
                <div class="yqlj_bt">
                    <h4></h4>
                    <span>友情链接</span>
                </div>
                <ul class="yqlj_qy">
                    <li><a href="http://www.zzguojilugang.com/">郑州陆港</a></li>
                    <li><a href="#">班列购</a></li>
                    <li><a href="#">易贸通</a></li>
                    <li><a href="#">中陆官网</a></li>
                </ul>
            </div>
        </div>
        </div> -->
        <!-- 友情链接结束 -->
        <!-- 底部结束开始 -->
        
        <!-- 底部开始结束 -->
    </div>
    <!-- 主体结束 -->
    
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
    <!-- <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=917739011&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:917739011:51" alt="点击这里给我发消息" title="点击这里给我发消息"/> --><!-- </a> -->
        <!-- <img src="__PUBLIC__/images/helper03.png"> -->
        <!-- <p>在线客服</p> -->
        <a href="tencent://message/?uin=1761095324&Site=-&Menu=yes" target="_blank">
        <!-- <a href="http://q.url.cn/s/B96ijym" target="_blank">班列购跳转客服地址 -->
            <img src="__PUBLIC__/images/helper03.png">
        <p>在线客服</p>
    </a>
</div>
</div>
<!-- 在线客服  -->
<!-- <div class="kf">
    <a style="outline: none;" href="http://42.228.11.187/chat/index.php?nick=<?php echo $username; ?>" target="_blank">
        <img src="__PUBLIC__/images/helper03.png">
        <p>在线客服</p>
    </a>
</div> -->
<script type="text/javascript" src="__PUBLIC__/js/jquery.min.js"></script>
<!-- <script type="text/javascript" src="__PUBLIC__/js/jquery.js"></script> -->
<script type="text/javascript" src="__PUBLIC__/js/bootstrap.min.js"></script> 
<script type="text/javascript" src="__PUBLIC__/js/jssor.slider.mini.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/sitepicker.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/higo-home.js"></script> 
<script type="text/javascript" src="__PUBLIC__/js/scroll.js"></script>  
<script type="text/javascript" src="__PUBLIC__/js/main.js"></script>
<script type="text/javascript">
    $('.nav_wrap').find('li').removeClass('now');
    $('.nav_wrap').children('li').eq(0).addClass('now');
    $('.carousel-inner').find('.item').eq(0).addClass('active');
    // $(document).ready(function(){
    //     $('.list_lh li:even').addClass('lieven');
    // });
    $(function(){
        $(".list_lh").myScroll({
            speed:40, //数值越大，速度越慢
            rowHeight:86 //li的高度
        });
    });
    $(function(){
        $(".list_lh1").myScroll({
            speed:40, //数值越大，速度越慢
            rowHeight:86 //li的高度
        });
    });
</script>
</body>
</html>