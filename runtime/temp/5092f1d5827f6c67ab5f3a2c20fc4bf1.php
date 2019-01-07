<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:95:"E:\wamp\www\transport\public/../application/index\view\personalcenter\goodslist_car_revise.html";i:1506735180;s:73:"E:\wamp\www\transport\public/../application/index\view\common\header.html";i:1506762234;s:71:"E:\wamp\www\transport\public/../application/index\view\common\left.html";i:1507533842;s:73:"E:\wamp\www\transport\public/../application/index\view\common\footer.html";i:1505989080;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>修改货源(找车货源)</title>
    <link rel="icon" href="" type="image/x-icon"/>
    <link rel="stylesheet" href="../../../../static/index/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../../static/index/css/font-awesome.min.css">
    <link rel="stylesheet" href="__PUBLIC__/css/auth.css">
    <link rel="stylesheet" href="__PUBLIC__/css/city-picker.css">
    <link rel="stylesheet" href="__PUBLIC__/css/higo.css">
    <link rel="stylesheet" href="__PUBLIC__/css/style.css">
</head>
<body>
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


<div class="personCenter">
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
                <p class="">修改货源</p>
            </div>
            <!-- 找车货源 -->
            <form id="addCarGoodsResource" enctype="multipart/form-data" method="post" novalidate="novalidate" class="form1" action="<?php echo url('Personalcenter/goodslist_car_revise'); ?>">
                <input type="hidden" name="id" value="<?php echo $goods['id']; ?>">
                <input type="hidden" name="uptype" value="0">
                <input type="hidden" name="is_recycle" value="0">
                <input type="hidden" name="is_company" value="<?php echo $userres[0]['is_company']; ?>">
                <input type="hidden" name="order_state" value="1">
                <input type="hidden" name="check_state" value="1">
                <div class="rz-Form" style="margin-left: 200px;">
                    <div class="rz-model rz-label">
                        <div class="clearfix">
                            <p class="fl rz-i">*</p>
                            <p class="fl">始发地&nbsp;：</p>
                            <p class="editinfo"><?php echo $goods['starting_address']; ?></p>
                        </div>
                    </div>
                    <div class="rz-model rz-label">
                        <div class="clearfix">
                            <p class="fl rz-i">*</p>
                            <p class="fl">目的地&nbsp;：</p>
                            <p class="editinfo"><?php echo $goods['destination']; ?></p>
                        </div>
                    </div>
                    <a id="sszz"></a>
                    <div class="rz-model rz-label">
                        <div class="clearfix">
                            <p class="fl rz-i">*</p>
                            <p class="fl">货物品类&nbsp;</p>
                        </div>
                        <select onblur="mzReg(this)" name="goods_sort" class="siteselect" style="width: 462px;">
                            <option value="" selected>请选择</option>
                            <?php if(is_array($type) || $type instanceof \think\Collection || $type instanceof \think\Paginator): $i = 0; $__LIST__ = $type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                <option value="<?php echo $vo['id']; ?>" <?php if($vo['id'] == $goods['goods_sort']): ?> selected <?php endif; ?>><?php echo $vo['typename']; ?></option>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                        <label>请选择货物品类</label>
                    </div>
                    <a id="sszz"></a>
                    <div class="rz-model rz-label">
                        <div class="clearfix">
                            <p class="fl rz-i">*</p>
                            <p class="fl">货物类型&nbsp;</p>
                        </div>
                        <select onblur="mzReg(this)" name="goods_type" class="siteselect" style="width: 462px;">
                            <option value="" selected>请选择</option>
                            <?php if(is_array($type1) || $type1 instanceof \think\Collection || $type1 instanceof \think\Paginator): $i = 0; $__LIST__ = $type1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($i % 2 );++$i;?>
                                <option value="<?php echo $vo1['id']; ?>" <?php if($vo1['id'] == $goods['goods_type']): ?> selected <?php endif; ?>><?php echo $vo1['typename']; ?></option>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                        <label>请选择货物类型</label>
                    </div>
                    <a id="sszz"></a>
                    <div class="rz-model rz-label">
                        <div class="clearfix">
                            <p class="fl rz-i">*</p>
                            <p class="fl">货物名称&nbsp;</p>
                        </div>
                        <input onblur="mzReg(this)" name="goods_name" id="name" class="xm" type="text" placeholder="请输入货物名称" value="<?php echo $goods['goods_name']; ?>">
                        <label>请输入货物名称</label>
                    </div>
                    <a id="sszz"></a>
                    <div class="rz-model rz-label">
                        <div class="clearfix">
                            <p class="fl rz-i">*</p>
                            <p class="fl">温度要求&nbsp;</p>
                        </div>
                        <input onblur="yfReg(this)" name="low_temperature" id="name" class="xm" type="text" placeholder="请输入温度要求" style="width: 200px;" value="<?php echo $goods['low_temperature']; ?>">
                        <span>&nbsp;℃-&nbsp;</span>
                        <input onblur="yfReg(this)" name="high_temperature" id="name" class="xm" type="text" placeholder="请输入温度要求" style="width: 200px;" value="<?php echo $goods['high_temperature']; ?>"><span>&nbsp;℃&nbsp;</span>
                        <label>请输入正确格式的温度要求</label>
                    </div>
                    <a id="sszz"></a>
                    <div class="rz-model rz-label">
                        <div class="clearfix">
                            <p class="fl rz-i">*</p>
                            <p class="fl">货物规格&nbsp;</p>
                        </div>
                        <input onblur="xsReg(this)" name="standard_ton" id="name" class="xm" type="text" placeholder="请输入货物规格" style="width: 200px;" value="<?php echo $goods['standard_ton']; ?>">
                        <span>&nbsp;吨-&nbsp;</span>
                        <input onblur="xsReg(this)" name="standard_square" id="name" class="xm" type="text" placeholder="请输入货物规格" style="width: 200px;" value="<?php echo $goods['standard_square']; ?>"><span>&nbsp;方&nbsp;</span>
                        <label>请输入合法货物规格</label>
                    </div>
                    <a id="sszz"></a>
                    <div class="rz-model rz-label">
                        <div class="clearfix">
                            <p class="fl rz-i">*</p>
                            <p class="fl">装车时间&nbsp;</p>
                        </div>
                        <input onblur="mzReg(this)" name="start_loadingtime" class="xm siteinput ECalendar" type="text" placeholder="请选择装车时间" style="width: 200px;" value="<?php echo $goods['start_loadingtime']; ?>"  onfocus="WdatePicker({dateFmt:'yyyy-MM-dd'})">
                        ——
                        <input  onblur="mzReg(this)" name="end_loadingtime" class="xm siteinput ECalendar" type="text" placeholder="请选择装车时间" style="width: 200px;" value="<?php echo $goods['end_loadingtime']; ?>"  onfocus="WdatePicker({dateFmt:'yyyy-MM-dd'})">
                        <label>请选择装车时间</label>
                    </div>
                    <a id="sszz"></a>
                    <div class="rz-model rz-label">
                        <div class="clearfix">
                            <p class="fl rz-i">*</p>
                            <p class="fl">到货时间&nbsp;</p>
                        </div>
                        <input  onblur="mzReg(this)" name="start_arrivetime" class="xm siteinput ECalendar" type="text" placeholder="请选择到货时间" style="width: 200px;" value="<?php echo $goods['start_arrivetime']; ?>"  onfocus="WdatePicker({dateFmt:'yyyy-MM-dd'})">
                        ——
                        <input  onblur="mzReg(this)" name="end_arrivetime" class="xm siteinput ECalendar" type="text" placeholder="请选择到货时间" style="width: 200px;" value="<?php echo $goods['end_arrivetime']; ?>" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd'})">
                        <label>请选择到货时间</label>
                    </div>
                    <a id="sszz"></a>
                    <div class="rz-model rz-label">
                        <div class="clearfix">
                            <p class="fl rz-i">*</p>
                            <p class="fl">需要车长&nbsp;</p>
                        </div>
                        <div>
                        <select onblur="mzReg(this)" name="car_length" class="siteselect" style="width: 462px;">
                            <option value="" selected>请选择</option>
                            <?php if(is_array($type2) || $type2 instanceof \think\Collection || $type2 instanceof \think\Paginator): $i = 0; $__LIST__ = $type2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($i % 2 );++$i;?>
                                <option value="<?php echo $vo2['id']; ?>" <?php if($vo2['id'] == $goods['car_length']): ?> selected <?php endif; ?>><?php echo $vo2['typename']; ?> </option>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                        <label>请选择需要车长</label>
                        </div>
                    </div>
                    <a id="sszz"></a>
                    <div class="rz-model rz-label">
                        <div class="clearfix">
                            <p class="fl rz-i">*</p>
                            <p class="fl">需要车型&nbsp;</p>
                        </div>
                        <select onblur="mzReg(this)" name="car_type" class="siteselect" style="width: 462px;">
                        <option value="" selected>请选择</option>
                            <?php if(is_array($type3) || $type3 instanceof \think\Collection || $type3 instanceof \think\Paginator): $i = 0; $__LIST__ = $type3;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo3): $mod = ($i % 2 );++$i;?>
                                <option value="<?php echo $vo3['id']; ?>" <?php if($vo3['id'] == $goods['car_type']): ?> selected <?php endif; ?>><?php echo $vo3['typename']; ?> </option>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                        <label>请选择需要车型</label>
                    </div>
                    <a id="sszz"></a>
                    <div class="rz-model rz-label">
                        <div class="clearfix">
                            <p class="fl rz-i">*</p>
                            <p class="fl">运输费用</p>
                        </div>
                        <div class="libraryarea">
                            <input onblur="xsReg(this)" type="radio" name="carriage_type" class="moneyradio" checked="checked" value="运输费用" <?php if($goods['carriage_type'] == '运输费用'): ?>checked <?php endif; ?>>&nbsp;运输费用
                            <input onblur="xsReg(this)" name="carriage" id="name" class="xm money" type="text" placeholder="请输入运输费用" style="width: 200px;" value="<?php echo $goods['carriage']; ?>">
                            <label>请输入正确格式的运输费用</label>
                        </div>
                        <!-- <div class="libraryarea">
                            <input type="radio" name="carriage_type" class="moneyphone" value="电话联系" <?php if($goods['carriage_type'] == '电话联系'): ?>checked <?php endif; ?>>&nbsp;电话联系
                        </div> -->
                    </div>
                    <a id="sszz"></a>
                    <div class="rz-model rz-label">
                        <div class="clearfix">
                            <p class="fl rz-i">*</p>
                            <p class="fl">支付方式</p>
                        </div> 
                        <div class="libraryarea">
                            <?php if(is_array($type4) || $type4 instanceof \think\Collection || $type4 instanceof \think\Paginator): $i = 0; $__LIST__ = $type4;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                <input type="radio" name="payment_mode" value="<?php echo $vo['id']; ?>" <?php if($vo['id'] == $goods['payment_mode']): ?>checked <?php endif; ?>><?php echo $vo['typename']; endforeach; endif; else: echo "" ;endif; ?>
                        </div>
                        <label>请选择支付方式</label>
                    </div>
                    <a id="sszz"></a>
                    <div class="rz-model rz-label">
                        <div class="clearfix">
                            <p class="fl rz-i">*</p>
                            <p class="fl" style="width: 90px;">是否需要发票</p>
                        </div>
                        <div class="libraryarea">
                            <input type="radio" name="invoice" checked="" value="是" <?php if($goods['invoice'] == '是'): ?>checked <?php endif; ?>>&nbsp;是
                        </div>
                        <div class="libraryarea">
                            <input type="radio" name="invoice" value="否" <?php if($goods['invoice'] == '否'): ?>checked <?php endif; ?>>&nbsp;否
                        </div>
                        <label>请选择是否需要发票</label>
                    </div>
                    <a id="sszz"></a>
                    <div class="rz-model rz-label">
                        <div class="clearfix">
                            <p class="fl rz-i">*</p>
                            <p class="fl">联系人&nbsp;:</p>
                            <p class="editinfo"><?php echo $goods['contact']; ?></p>
                        </div>
                    </div>
                    <div class="rz-model rz-label">
                        <div class="clearfix">
                            <p class="fl rz-i">*</p>
                            <p class="fl">联系电话&nbsp;</p>
                        </div>
                        <input onblur="uxPhone(this)" name="phone" id="idCard" class="sfz" type="text" placeholder="请输入联系电话" value="<?php echo $goods['phone']; ?>">
                        <label>请输入正确格式的联系电话</label>
                    </div>
                    <div class="rz-model rz-label">
                        <div class="clearfix">
                            <p class="fl">备注</p>
                            <!-- <p class="fl rz-i"></p> -->
                        </div>
                        <textarea name="goods_remark" class="remark_area" maxlength="30" ><?php echo $goods['goods_remark']; ?></textarea>
                        <p style="width: auto;">您还可以输入<span id="word">30</span>个字</p>
                    </div>
                    <div class="rz-model" style="position:relative">
                        <input type="submit" name="" value="提交" class="rz_sub">
                   </div>
                </div>
            </form>
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
<script type="text/javascript" src="__PUBLIC__/lib/date/WdatePicker.js"></script> 
<script src="__PUBLIC__/js/main.js"></script>
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
    $('.person-left dl').eq(2).find('.hideleft').show();
    $('.person-left dl').find('dt').removeClass('active');
    $('.person-left dl').eq(2).find('dt').addClass('active');
    $('.person-left dl').eq(2).find('.hideleft').find('dd').eq(1).addClass('active'); 
</script>
</body>
</html>