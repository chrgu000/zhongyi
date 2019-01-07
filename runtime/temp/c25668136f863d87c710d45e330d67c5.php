<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:88:"E:\wamp\www\transport\public/../application/index\view\personalcenter\warehouselist.html";i:1506406607;s:73:"E:\wamp\www\transport\public/../application/index\view\common\header.html";i:1506762234;s:71:"E:\wamp\www\transport\public/../application/index\view\common\left.html";i:1507533842;s:73:"E:\wamp\www\transport\public/../application/index\view\common\footer.html";i:1505989080;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>库源列表</title>
    <link rel="icon" href="" type="image/x-icon"/>
    <link rel="stylesheet" href="../../static/index/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../static/index/css/font-awesome.min.css">
    <link rel="stylesheet" href="__PUBLIC__/css/city-picker.css">
    <link rel="stylesheet" href="__PUBLIC__/css/higo.css">
    <link rel="stylesheet" href="__PUBLIC__/css/style.css"> 

    <!-- 分页样式 -->
    <link type="text/css" rel="stylesheet" href="__PUBLIC__/css/page.css"/>
    <script type="text/javascript" src="__PUBLIC__/js/jquery.simplePagination.js"></script>
    <style type="text/css">
        .personCenter{
            min-height: 800px;
        }
    </style>
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
            <a class="fl" href="<?php echo url('Index/index'); ?>">
                <img src="__PUBLIC__/images/logo/logo.png" alt=""/>
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
<div class="personCenter goods_info">
    <div class="wrap-1200 clearfix" style="padding: 40px 0 45px 0;">
    	<!-- 左侧开始 -->
        <div class="person-left fl">
    <div class="photo">
        <img src="__PUBLIC__/images/default.png" alt="">
        <p><?php echo session('username')?></p>
        <p style="margin-top: 4px;">
        <?php if(is_array($userres1) || $userres1 instanceof \think\Collection || $userres1 instanceof \think\Paginator): $i = 0; $__LIST__ = $userres1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;if($v['check_state'] == '1'): ?>
        <span>已认证</span>
        <?php else: ?>
        <span>未认证</span>
        <?php endif; if($v['is_company'] == '0'): ?>
        <span>非自营</span>
        <?php else: ?>
        <span>自营</span>
        <?php endif; endforeach; endif; else: echo "" ;endif; ?>
        </p>
    </div>
    <dl>
        <dt class="active"><i class="glyphicon glyphicon-user"></i>&nbsp;个人中心</dt>
        <div class="hideleft">
            <dd class="person-dd active">
                <a href="<?php echo url('Personalcenter/personalcenter_index'); ?>">用户信息<i class="glyphicon glyphicon-chevron-right arrow" aria-hidden="true"></i></a>
            </dd>
            <!-- <dd class="person-dd">
                <a href="">常用地址</a>
            </dd>
            <dd class="person-dd ">
                <a href="">我的消息</a>
            </dd>
            <dd class="person-dd ">
                <a href="">我要推荐</a>
            </dd>
            <dd class="person-dd ">
               <a href="">网站编辑</a>
            </dd> -->
        </div>
    </dl>
    <?php if(is_array($userres) || $userres instanceof \think\Collection || $userres instanceof \think\Paginator): $i = 0; $__LIST__ = $userres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($vo['check_state'] == '1'): ?>
        <dl>
            <dt class=""><i class="glyphicon glyphicon-th-list"></i>&nbsp;我的订单</dt>
            <div class="hideleft" style="display:none;">
                <dd class="person-dd ">
                    <?php if($vo['type'] == '物流公司'): ?>
                        <a href="<?php echo url('Personalcenterorder/myorder_findcar'); ?>">我的抢单</a>
                    <?php elseif($vo['type'] == '车主'): ?>
                        <a href="<?php echo url('Personalcenterorder/myorder_findgoodscar'); ?>">我的抢单</a>
                    <?php elseif($vo['type'] == '库主'): ?>
                        <a href="<?php echo url('Personalcenterorder/myorder_findgoodsku'); ?>">我的抢单</a>
                    <?php else: ?>
                        <a href="<?php echo url('Personalcenterorder/myorder_findcar'); ?>">我的抢单</a>
                    <?php endif; ?>
                </dd>
            
                <dd class="person-dd ">
                    <?php if($vo['type'] == '物流公司'): ?>
                        <a href="<?php echo url('Personalcenterorder/acceptorder_goodscar'); ?>">接受订单</a>
                    <?php elseif($vo['type'] == '车主'): ?>
                        <a href="<?php echo url('Personalcenterorder/acceptorder_goodscar'); ?>">接受订单</a>
                    <?php elseif($vo['type'] == '库主'): ?>
                        <a href="<?php echo url('Personalcenterorder/acceptorder_goodsku'); ?>">接受订单</a>
                    <?php else: ?>
                        <a href="<?php echo url('Personalcenterorder/acceptorder_path'); ?>">接受订单</a>
                    <?php endif; ?>
                </dd>
                <!-- <dd class="person-dd ">
                    <a href="">货主订单</a>
                </dd>
            
                <dd class="person-dd ">
                    <a href="">车主订单</a>
                </dd>
            
                <dd class="person-dd ">
                    <a href="">库主订单</a>
                </dd> -->
            </div>
    	</dl>
        <!-- <dl>
            <dt class=""><i class="glyphicon glyphicon-jpy" style="font-size: 20px; font-weight: bold;"></i>&nbsp;我的钱包</dt>
            <div class="hideleft" style="display:none;">
                <dd class="person-dd ">
                    <a href="">钱包管理</a>
                </dd>
                <dd class="person-dd ">
                    <a href="">充值记录</a>
                </dd>
                <dd class="person-dd ">
                    <a href="">提现记录</a>
                </dd>
            </div>
        </dl> -->
        <?php if($vo['is_company'] == '1'): ?>
            <dl>
                <dt class=""><i class="glyphicon glyphicon-th-large"></i>&nbsp;货源管理</dt>
                <div class="hideleft" style="display:none;">
                     <dd class="person-dd">
                        <a href="<?php echo url('Personalcenter/goodsadd'); ?>">发布货源</a>
                    </dd>
                    
                    <dd class=" person-dd ">
                        <a href="<?php echo url('Personalcenter/goodslist_car'); ?>">管理货源</a>
                    </dd>
                </div>
            </dl>
            <dl>
                <dt class=""><i class="glyphicon glyphicon-log-out"></i>&nbsp;车源管理</dt>
               <div class="hideleft" style="display:none;">
                    <dd class="person-dd ">
                        <a href="<?php echo url('Personalcenter/pathadd'); ?>">发布车源</a>
                    </dd>
                     <dd class=" person-dd ">
                        <a href="<?php echo url('Personalcenter/pathlist'); ?>">管理车源</a>
                    </dd>
               </div>
            </dl>
            <dl>
                <dt class=""><i class="glyphicon glyphicon-home"></i>&nbsp;仓库管理</dt>
                <div class="hideleft" style="display:none;">
                    <dd class="person-dd ">
                        <a href="<?php echo url('Personalcenter/warehouseadd'); ?>">发布库源</a>
                    </dd>
                    <dd class="person-dd ">
                        <a href="<?php echo url('Personalcenter/warehouselist'); ?>">我的仓库</a>
                    </dd>
                </div>
            </dl>
        <?php else: if($vo['type'] == '物流公司'): ?>
                <dl>
                    <dt class=""><i class="glyphicon glyphicon-th-large"></i>&nbsp;货源管理</dt>
                    <div class="hideleft" style="display:none;">
                         <dd class="person-dd">
                            <a href="<?php echo url('Personalcenter/goodsadd'); ?>">发布货源</a>
                        </dd>
                        
                        <dd class=" person-dd ">
                            <a href="<?php echo url('Personalcenter/goodslist_car'); ?>">管理货源</a>
                        </dd>
                    </div>
                </dl>
                <dl>
                    <dt class=""><i class="glyphicon glyphicon-log-out"></i>&nbsp;车源管理</dt>
                   <div class="hideleft" style="display:none;">
                        <dd class="person-dd ">
                            <a href="<?php echo url('Personalcenter/pathadd'); ?>">发布车源</a>
                        </dd>
                         <dd class=" person-dd ">
                            <a href="<?php echo url('Personalcenter/pathlist'); ?>">管理车源</a>
                        </dd>
                   </div>
                </dl>
                <dl>
                    <dt class=""><i class="glyphicon glyphicon-home"></i>&nbsp;仓库管理</dt>
                    <div class="hideleft" style="display:none;">
                        <dd class="person-dd ">
                            <a href="<?php echo url('Personalcenter/warehouseadd'); ?>">发布库源</a>
                        </dd>
                        <dd class="person-dd ">
                            <a href="<?php echo url('Personalcenter/warehouselist'); ?>">我的仓库</a>
                        </dd>
                    </div>
                </dl>
            <?php elseif($vo['type'] == '车主'): ?>
                <dl>
                    <dt class=""><i class="glyphicon glyphicon-log-out"></i>&nbsp;车源管理</dt>
                    <div class="hideleft" style="display:none;">
                        <dd class="person-dd ">
                            <a href="<?php echo url('Personalcenter/pathadd'); ?>">发布车源</a>
                        </dd>
                         <dd class=" person-dd ">
                            <a href="<?php echo url('Personalcenter/pathlist'); ?>">管理车源</a>
                        </dd>
                   </div>
                </dl>
            <?php elseif($vo['type'] == '库主'): ?>
                <dl>
                    <dt class=""><i class="glyphicon glyphicon-home"></i>&nbsp;仓库管理</dt>
                    <div class="hideleft" style="display:none;">
                        <dd class="person-dd ">
                            <a href="<?php echo url('Personalcenter/warehouseadd'); ?>">发布库源</a>
                        </dd>
                        <dd class="person-dd ">
                            <a href="<?php echo url('Personalcenter/warehouselist'); ?>">我的仓库</a>
                        </dd>
                    </div>
                </dl>
            <?php else: ?>
                <dl>
                    <dt class=""><i class="glyphicon glyphicon-th-large"></i>&nbsp;货源管理</dt>
                    <div class="hideleft" style="display:none;">
                         <dd class="person-dd">
                            <a href="<?php echo url('Personalcenter/goodsadd'); ?>">发布货源</a>
                        </dd>
                        
                        <dd class=" person-dd ">
                            <a href="<?php echo url('Personalcenter/goodslist_car'); ?>">管理货源</a>
                        </dd>
                    </div>
                </dl>
            <?php endif; endif; else: endif; endforeach; endif; else: echo "" ;endif; ?>       
</div>
        <!-- 左侧结束 -->
       
        <!-- 右侧开始 -->
        <div class="person-right fr mjy-add mj-pro0">
            <div class="mj-adds clearfix mj-addNav">
                 <p class="p1 active">管理库源</p>
            </div>
            <div class="m-infortabBack">
                <div id="m-infonavCont">
                    <div class="m-infonavContent2 mj-xlxx">
                        <form action="<?php echo url('Personalcenter/warehouselist'); ?>" method="get" class="searchform">
                            <div class="m-inforForm clearfix">
                                <div class="clearfix fl m30">
                                    <p class="fl">所&nbsp;在&nbsp;地&nbsp;：</p>
                                    <div class="fr ku">
                                        <input name="wh_address" id="name" class="xm siteinput" type="text" placeholder="请输入所在地" value="<?php echo !empty($wh_address)?$wh_address : '';; ?>" style="width: 200px;">
                                        <div class="xiala">
                                            <h1><span>确认</span></h1>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <!-- <div class="clearfix fl m30">
                                    <p class="fl">仓库面积：</p>
                                    <div class="fr">
                                        <select name="useable_area" class="siteselect" style="width: 200px;">
                                            <option >--请输入仓库面积--</option>
                                            <option value="500">500平方以下</option>
                                            <option value="1000">500平方～1000平方</option>
                                            <option value="2000">1000平方～2000平方</option>
                                            <option value="3000">2000平方以上</option>
                                        </select>
                                    </div>
                                    <div class="clearfix"></div>
                                </div> -->
                                <div class="clearfix fl m30 ">
                                    <p class="fl">库源状态：</p>
                                    <div class="fr">
                                        <select name="order_state" class="siteselect" style="width: 200px;">
                                            <option >全部</option>
                                            <option value="1">未被下单</option>
                                            <option value="2">已被下单</option>
                                            <option value="3">已完成</option>
                                        </select>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <!-- <div class="clearfix fl m30 search_margin">
                                    <p class="fl">仓库类型：</p>
                                    <div style="display: inline-block;">
                                        <select name="wh_type" class="siteselect">
                                            <option >不限</option>           
                                            <option value="平堆库">平堆库</option>
                                            <option value="货架库">货架库</option>
                                            <option value="自动化库">自动化库</option>
                                            <option value="保税库">保税库</option>
                                        </select>
                                    </div>
                                </div> -->
                                <input type="submit" value="搜索" class="fl u-aNext u-aNext2" style="float: right;" />
                                <div class="clearfix"></div>
                            </div>
                            <div class="m-inforForm clearfix" style="margin-top: 20px;" >
                                
                                <!-- <div class="clearfix fl m30 search_margin">
                                    <p class="fl">库温类型：</p>
                                    <div style="display: inline-block;">
                                        <select name="librarylist" class="siteselect" style="width: 200px;">
                                            <option value="0">不限</option>
                                            <option value="1">平堆库</option>
                                            <option value="2">货架库</option>
                                            <option value="3">自动化库</option>
                                            <option value="4">保税库</option>
                                        </select>
                                    </div>
                                </div> -->
                                
                                <div class="clearfix fl m30 search_margin">
                                    <p class="fl">发布时间：</p>
                                    <div class="fr">
                                        <input onblur="mzReg(this)" name="wh_time" id="name" class="xm siteinput ECalendar" type="text" placeholder="请选择发布时间" value="<?php echo !empty($wh_time)?$wh_time : '';; ?>" style="width: 200px;" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd'})">
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                
                            </div>
                            </div>
                        </form>
                        <div class="czh-Bottom m-formBottom clearfix timeTop f14 cz-active " style="padding-top: 0px;">
                            <table style="min-width:960px;">
                                <tbody>
                                    <tr class="ky-ddTab">
                                        <td>所在地</td>
                                        <td>仓库名称</td>
                                        <td>仓库类型</td>
                                        <td>仓库面积</td>
                                        <td>更新时间</td>
                                        <td>审核状态</td>
                                        <td>操作</td>
                                    </tr>  
                                    <?php if(is_array($wh_res) || $wh_res instanceof \think\Collection || $wh_res instanceof \think\Paginator): $i = 0; $__LIST__ = $wh_res;if( count($__LIST__)==0 ) : echo "<p class='nulltext'>暂时没有数据</p>" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>                     
                                        <tr class="ky-ddKK ky-ddKK1 odd">
                                            <td class="zc-lastTr " style="width:16%;">
                                                <div class="skin-list2">
                                                    <p title="<?php echo $vo['wh_address']; ?>"><?php echo $vo['wh_address']; ?></p>
                                                </div>
                                            </td>
                                            <td class="" style="width:15%;">
                                                <div class="skin-list1">
                                                    <div class="czh-posi">
                                                        <p><?php echo $vo['wh_name']; ?></p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="" style="width:17%;">
                                                <div class="skin-list2">
                                                    <p>
                                                        <?php echo $vo['wh_type']; ?>
                                                    </p>
                                                </div>
                                            </td>
                                            <td class="" style=" width:22%;">
                                                <div class="skin-list1">
                                                    <p>
                                                <?php if($vo['normal_area'] != ''): ?>
                                                    常温：&nbsp;<?php echo $vo['normal_area']; ?>平方/<?php echo $vo['normal_volume']; ?>立方
                                                <?php else: endif; ?>
                                            </p>
                                            <p>
                                                <?php if($vo['coldstorage_area'] != ''): ?>
                                                    冷藏：&nbsp;
                                                    <?php echo $vo['coldstorage_area']; ?>平方/<?php echo $vo['coldstorage_volume']; ?>立方
                                                <?php else: endif; ?>
                                            </p>
                                            <p>
                                                <?php if($vo['freeze_area'] != ''): ?>
                                                    冷冻：&nbsp;<?php echo $vo['freeze_area']; ?>平方/<?php echo $vo['freeze_volume']; ?>立方
                                                <?php else: endif; ?>
                                            </p>
                                            <p>
                                                <?php if($vo['quickfreeze_area'] != ''): ?>
                                                    急冻：&nbsp;
                                                    <?php echo $vo['quickfreeze_area']; ?>平方/<?php echo $vo['quickfreeze_volume']; ?>立方
                                                <?php else: endif; ?>
                                            </p>
                                            <p>
                                                <?php if($vo['deepcold_area'] != ''): ?>
                                                    深冷：&nbsp;
                                                    <?php echo $vo['deepcold_area']; ?>平方/<?php echo $vo['deepcold_volume']; ?>立方
                                                <?php else: endif; ?>
                                            </p>
                                                </div>
                                            </td>
                                            <td class="" style="width: 10%">
                                                <div class="skin-list1">
                                                    <p title="<?php echo $vo['wh_time']; ?>"><?php echo $vo['wh_time']; ?></p>
                                                </div>
                                            </td>
                                            <td class="" style="width: 10%">
                                                <div class="skin-list1">
                                                    <p class="ellipsis">
                                                        <?php if($vo['check_state'] == '1'): ?>
                                                            <p >等待审核</p>
                                                        <?php elseif($vo['check_state'] == '2'): ?>
                                                            <p>审核通过</p>
                                                            <?php if($vo['order_state'] == '1'): ?>
                                                            <p style="color: blue;">(未被下单)</p>
                                                            <?php elseif($vo['order_state'] == '2'): ?>
                                                            <p style="color: red;">(已被下单)</p>
                                                            <?php else: ?>
                                                            <p style="color: red;">已完成</p>
                                                            <?php endif; else: ?>
                                                            <p style="color: red;">审核未通过</p>
                                                        <?php endif; ?>
                                                    </p>
                                                </div>
                                            </td>
                                            <td class="skin-border" style="width:10%;">
                                                <div class="zc-positon">
                                                <?php if($vo['order_state'] == '1'): ?>
                                                    <a href="<?php echo url('Personalcenter/warehouse_detail',array('id'=>$vo['id'])); ?>" class="btn1" title="详情" datatype="1"><span class="glyphicon glyphicon-eye-open"></span></a>
                                                    <a href="<?php echo url('Personalcenter/warehouse_revise',array('id'=>$vo['id'])); ?>" class="btn1" title="修改" datatype="1"><span class="fa fa-pencil"></span></a>
                                                    <a href="<?php echo url('Personalcenter/warehouse_del',array('id'=>$vo['id'])); ?>" title="删除" onClick="return confirm('确定要删除吗？')" class="btn1" ><span class="fa fa-trash-o"></span></a>
                                                    <?php elseif($vo['order_state'] == '2'): ?>
                                                        <a href="<?php echo url('Personalcenter/warehouse_detail',array('id'=>$vo['id'])); ?>" class="btn1" title="详情" datatype="1"><span class="glyphicon glyphicon-eye-open"></span></a>
                                                    <?php else: ?>
                                                        <a href="<?php echo url('Personalcenter/warehouse_detail',array('id'=>$vo['id'])); ?>" class="btn1" title="详情" datatype="1"><span class="glyphicon glyphicon-eye-open"></span></a>
                                                        <a href="<?php echo url('Personalcenter/up_wh',array('id'=>$vo['id'])); ?>" class="btn1" title="重新发布库源信息" onClick="return confirm('确定要重新发布库源信息吗？')"><span class="glyphicon glyphicon-open"></span></a>
                                                        <a href="<?php echo url('Personalcenter/warehouse_del1',array('id'=>$vo['id'])); ?>" title="删除" onClick="return confirm('确定要删除吗？')" class="btn1" ><span class="fa fa-trash-o"></span></a>
                                                    <?php endif; ?>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; endif; else: echo "<p class='nulltext'>暂时没有数据</p>" ;endif; ?>                            
                                </tbody>
                            </table>
                            <div class="pages">
                                <div id="paging1" class="page light-theme simple-pagination" style="text-align: center;" >
                                    <?php echo $wh_res->render(); ?>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- 右侧结束 -->
    </div>
</div>

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
<script type="text/javascript" src="__PUBLIC__/js/jquery.min.js"></script>
<script src="__PUBLIC__/js/auth.js"></script>
<script src="__PUBLIC__/js/sitepicker.js"></script>
<script src="__PUBLIC__/js/main.js"></script>
<script type="text/javascript" src="__PUBLIC__/lib/date/WdatePicker.js"></script> 
<script type="text/javascript">
    function c () {
        var r= new FileReader();
        f=document.getElementById('file').files[0];
        r.readAsDataURL(f);
        r.onload=function  (e) {
        document.getElementById('show').src=this.result;
        };
    }
    $('.nav_wrap').find('li').removeClass('now');
    $('.nav_wrap').children('li').eq(0).addClass('now');
    $('.person-left dl').find('.hideleft').hide();
    $('.person-left dl').eq(4).find('.hideleft').show();
    $('.person-left dl').find('dt').removeClass('active');
    $('.person-left dl').eq(4).find('dt').addClass('active');
    $('.person-left dl').eq(4).find('.hideleft').find('dd').eq(1).addClass('active'); 
    $('.nulltext').parents('.czh-Bottom').find('.ky-ddTab').hide();
</script>
</body>
</html>