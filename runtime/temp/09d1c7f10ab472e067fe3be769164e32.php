<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:70:"E:\WWW\transport\public/../application/index\view\entrust\entrust.html";i:1513838075;s:68:"E:\WWW\transport\public/../application/index\view\common\header.html";i:1513838096;s:68:"E:\WWW\transport\public/../application/index\view\common\footer.html";i:1509431569;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>易冷链承运</title>
    <link rel="icon" href="" type="image/x-icon"/>
    <link rel="stylesheet" href="../../static/index/css/bootstrap.min.css">
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


<div class="personCenter">
    <div class="wrap-1200 clearfix" style="padding: 40px 0 45px 0;">
        <!-- 右侧开始 -->
        <div class="wrap-1200 fr mjy-add mj-pro0">
            <div class="mj-adds clearfix mj-addNav">
                 <p class="p1 active">易冷链承运</p>
                 <!-- <p class="p2">找库货源</p> -->
            </div>
            <!-- 找车货源 -->
            <form id="addCarGoodsResource1" enctype="multipart/form-data" method="post" novalidate="novalidate" class="form1" action="<?php echo url('Entrust/entrust_order'); ?>" onSubmit="return checkentrust();">
                <input type="hidden" name="user_id" value="session('userid')"> 
                <input type="hidden" name="user_name" value="session('username')">
                <input type="hidden" name="carrier_name" value="<?php echo $transport1['name']; ?>">     <!-- 托运方姓名 -->
                <input type="hidden" name="carrier_phone" value="<?php echo $transport1['phone']; ?>"><!-- 托运方联系电话 -->
                <div class="wrap-1200 rz-Form entrustrz-form">
                    <div class="entrustrz-formcon entrustrz-formcon1">
                        <!-- 货源信息 -->
                        <p class="goodscount">货物一</p>
                        <div class="fl entrustrz-form0 entrustrz-form1">
                            <h3 class="entrustrz-formtit">货源信息</h3>
                            <!-- 货物一 -->
                            <div class="">
                               <!--  <p class="goodscount">货物一</p> -->
                                <div class="rz-model rz-label">
                                    <div class="clearfix">
                                        <p class="fl rz-i">*</p>
                                        <p class="fl">货物名称&nbsp;</p>
                                    </div>
                                    <input onblur="mzReg(this)" name="goods_name" id="name" class="xm goodsname" type="text" placeholder="请输入货物名称">
                                    <label>请输入货物名称</label>
                                </div>
                                <div class="rz-model rz-label">
                                    <div class="clearfix">
                                        <p class="fl rz-i">*</p>
                                        <p class="fl">货物品类&nbsp;</p>
                                    </div>
                                    <select onblur="mzReg(this)" name="goods_sort" class="siteselect goodssort" style="width: 340px;">
                                        <option value="" selected>请选择</option>
                                        <?php if(is_array($type) || $type instanceof \think\Collection || $type instanceof \think\Paginator): $i = 0; $__LIST__ = $type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                            <option value="<?php echo $vo['id']; ?>"><?php echo $vo['typename']; ?></option>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                                    <label>请选择货物品类</label>
                                </div>
                                <div class="rz-model rz-label">
                                    <div class="clearfix">
                                        <p class="fl rz-i">*</p>
                                        <p class="fl">货物类型&nbsp;</p>
                                    </div>
                                    <select onblur="mzReg(this)" name="goods_type" class="siteselect goodstype" style="width: 340px;">
                                        <option value="" selected>请选择</option>
                                        <?php if(is_array($type1) || $type1 instanceof \think\Collection || $type1 instanceof \think\Paginator): $i = 0; $__LIST__ = $type1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($i % 2 );++$i;?>
                                            <option value="<?php echo $vo1['id']; ?>"><?php echo $vo1['typename']; ?></option>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                                    <label>请选择货物类型</label>
                                </div>
                                <div class="rz-model rz-label">
                                    <div class="clearfix">
                                        <p class="fl rz-i">*</p>
                                        <p class="fl">货物温度要求&nbsp;</p>
                                    </div>
                                    <input onblur="yfReg(this)" name="low_t" id="name" class="xm lowtemp" type="text" placeholder="请输入温度要求" style="width: 140px;">
                                    <span>&nbsp;℃-&nbsp;</span>
                                    <input onblur="yfReg(this)" name="high_t" id="name" class="xm hightemp" type="text" placeholder="请输入温度要求" style="width: 140px;"><span>&nbsp;℃&nbsp;</span>
                                    <label class="label" style="font-size: 12px;">请输入合法温度</label>
                                </div>
                                <div class="rz-model rz-label">
                                    <div class="clearfix">
                                        <p class="fl rz-i">*</p>
                                        <p class="fl">货物规格&nbsp;</p>
                                    </div>
                                    <input onblur="xsReg(this)" name="goods_ton" id="name" class="xm goodsstand1" type="text" placeholder="请输入货物规格" style="width: 140px;">
                                    <span>&nbsp;吨-&nbsp;</span>
                                    <input onblur="xsReg(this)" name="goods_square" id="name" class="xm goodsstand2" type="text" placeholder="请输入货物规格" style="width: 140px;"><span>&nbsp;方&nbsp;</span>
                                    <label class="label" style="font-size: 12px;">请输入合法货物规格</label>
                                </div>
                                <div class="rz-model rz-label">
                                    <div class="clearfix">
                                        <p class="fl rz-i">*</p>
                                        <p class="fl">运输费用</p>
                                    </div>
                                    <div class="libraryarea">
                                        <input type="radio" name="carriage_type" class="moneyradio " checked="checked" value="运输费用">&nbsp;运输费用
                                        <input onblur="xsReg(this)" name="order_money" id="name" class="xm money carriage" type="text" placeholder="请输入运输费用" style="width: 200px;" value="">
                                        <label style="margin-left: 100px;">请输入正确格式的运输费用</label>
                                    </div>
                                    <!-- <div class="libraryarea">
                                        <input type="radio" name="carriage_type" class="moneyphone" value="电话联系">&nbsp;电话联系
                                    </div> -->
                                </div>
                                <div class="rz-model rz-label">
                                    <div class="clearfix">
                                        <p class="fl rz-i">*</p>
                                        <p class="fl">支付方式</p>
                                    </div>
                                    <div class="libraryarea">
                                        <?php if(is_array($type4) || $type4 instanceof \think\Collection || $type4 instanceof \think\Paginator): $i = 0; $__LIST__ = $type4;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                            <input type="radio" checked name="payment_mode" class="moneyradio" value="<?php echo $vo['id']; ?>"><?php echo $vo['typename']; endforeach; endif; else: echo "" ;endif; ?>
                                    </div>
                                    <label>请选择支付方式</label>
                                </div>
                                <div class="rz-model rz-label">
                                    <div class="clearfix">
                                        <p class="fl rz-i">*</p>
                                        <p class="fl" style="width: 90px;">是否需要发票</p>
                                    </div>
                                    <div class="libraryarea">
                                        <input type="radio" name="invoice" class="moneyradio" checked="" value="是">&nbsp;是
                                    </div>
                                    <div class="libraryarea">
                                        <input type="radio" name="invoice" class="moneyradio" value="否">&nbsp;否
                                    </div>
                                    <label>请选择是否需要发票</label>
                                </div>
                            </div>
                            <!-- 货物二 -->
                            <!-- <div class="entrustrz-formcon entrustrz-formcon2" style="display: none;">
                                <p class="goodscount">货物二</p>
                                <div class="rz-model rz-label">
                                    <div class="clearfix">
                                        <p class="fl rz-i">*</p>
                                        <p class="fl">货物名称&nbsp;</p>
                                    </div>
                                    <input onblur="mzReg(this)" name="goods_name2" id="name" class="xm goodsname1" type="text" placeholder="请输入货物名称">
                                    <label>请输入货物名称</label>
                                </div>
                                <div class="rz-model rz-label">
                                    <div class="clearfix">
                                        <p class="fl rz-i">*</p>
                                        <p class="fl">货物品类&nbsp;</p>
                                    </div>
                                    <select onblur="mzReg(this)" name="goods_sort2" class="siteselect goodssort1" style="width: 340px;">
                                        <option value="" selected>请选择</option>
                                        <?php if(is_array($type) || $type instanceof \think\Collection || $type instanceof \think\Paginator): $i = 0; $__LIST__ = $type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                            <option value="<?php echo $vo['id']; ?>"><?php echo $vo['typename']; ?></option>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                                    <label>请选择货物品类</label>
                                </div>
                                <div class="rz-model rz-label">
                                    <div class="clearfix">
                                        <p class="fl rz-i">*</p>
                                        <p class="fl">货物类型&nbsp;</p>
                                    </div>
                                    <select onblur="mzReg(this)" name="goods_type2" class="siteselect goodstype1" style="width: 340px;">
                                        <option value="" selected>请选择</option>
                                        <?php if(is_array($type1) || $type1 instanceof \think\Collection || $type1 instanceof \think\Paginator): $i = 0; $__LIST__ = $type1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($i % 2 );++$i;?>
                                            <option value="<?php echo $vo1['id']; ?>"><?php echo $vo1['typename']; ?></option>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                                    <label>请选择货物类型</label>
                                </div>
                                <div class="rz-model rz-label">
                                    <div class="clearfix">
                                        <p class="fl rz-i">*</p>
                                        <p class="fl">温度要求&nbsp;</p>
                                    </div>
                                    <input onblur="yfReg(this)" name="low_t2" id="name" class="xm lowtemp1" type="text" placeholder="请输入温度要求" style="width: 140px;">
                                    <span>&nbsp;℃-&nbsp;</span>
                                    <input onblur="yfReg(this)" name="high_t2" id="name" class="xm hightemp1" type="text" placeholder="请输入温度要求" style="width: 140px;"><span>&nbsp;℃&nbsp;</span>
                                    <label class="label" style="font-size: 12px;">请输入合法温度</label>
                                </div>
                                <div class="rz-model rz-label">
                                    <div class="clearfix">
                                        <p class="fl rz-i">*</p>
                                        <p class="fl">货物规格&nbsp;</p>
                                    </div>
                                    <input onblur="xsReg(this)" name="goods_ton2" id="name" class="xm goodsstand11" type="text" placeholder="请输入货物规格" style="width: 140px;">
                                    <span>&nbsp;吨-&nbsp;</span>
                                    <input onblur="xsReg(this)" name="goods_square2" id="name" class="xm goodsstand21" type="text" placeholder="请输入货物规格" style="width: 140px;"><span>&nbsp;方&nbsp;</span>
                                    <label class="label" style="font-size: 12px;">请输入合法货物规格</label>
                                </div>
                                <p class="addicon addicon2"><span class="glyphicon glyphicon-plus-sign"></span></p>
                                <p class="addicon minusicon2" style="display: none;"><span class="glyphicon glyphicon-minus-sign"></span></p>

                            </div> -->
                            <!-- 货物三 -->
                            <!-- <div class="entrustrz-formcon entrustrz-formcon3" style="display: none;">
                                <p class="goodscount">货物三</p>
                                <div class="rz-model rz-label">
                                    <div class="clearfix">
                                        <p class="fl rz-i">*</p>
                                        <p class="fl">货物名称&nbsp;</p>
                                    </div>
                                    <input onblur="mzReg(this)" name="goods_name3" id="name" class="xm goodsname2" type="text" placeholder="请输入货物名称">
                                    <label>请输入货物名称</label>
                                </div>
                                <div class="rz-model rz-label">
                                    <div class="clearfix">
                                        <p class="fl rz-i">*</p>
                                        <p class="fl">货物品类&nbsp;</p>
                                    </div>
                                    <select onblur="mzReg(this)" name="goods_sort3" class="siteselect goodssort2" style="width: 340px;">
                                        <option value="" selected>请选择</option>
                                        <?php if(is_array($type) || $type instanceof \think\Collection || $type instanceof \think\Paginator): $i = 0; $__LIST__ = $type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                            <option value="<?php echo $vo['id']; ?>"><?php echo $vo['typename']; ?></option>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                                    <label>请选择货物品类</label>
                                </div>
                                <div class="rz-model rz-label">
                                    <div class="clearfix">
                                        <p class="fl rz-i">*</p>
                                        <p class="fl">货物类型&nbsp;</p>
                                    </div>
                                    <select onblur="mzReg(this)" name="goods_type3" class="siteselect goodstype2" style="width: 340px;">
                                        <option value="" selected>请选择</option>
                                        <?php if(is_array($type1) || $type1 instanceof \think\Collection || $type1 instanceof \think\Paginator): $i = 0; $__LIST__ = $type1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($i % 2 );++$i;?>
                                            <option value="<?php echo $vo1['id']; ?>"><?php echo $vo1['typename']; ?></option>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                                    <label>请选择货物类型</label>
                                </div>
                                <div class="rz-model rz-label">
                                    <div class="clearfix">
                                        <p class="fl rz-i">*</p>
                                        <p class="fl">温度要求&nbsp;</p>
                                    </div>
                                    <input onblur="yfReg(this)" name="low_t3" id="name" class="xm lowtemp2" type="text" placeholder="请输入温度要求" style="width: 140px;">
                                    <span>&nbsp;℃-&nbsp;</span>
                                    <input onblur="yfReg(this)" name="high_t3" id="name" class="xm hightemp2" type="text" placeholder="请输入温度要求" style="width: 140px;"><span>&nbsp;℃&nbsp;</span>
                                    <label class="label" style="font-size: 12px;">请输入合法温度</label>
                                </div>
                                <div class="rz-model rz-label">
                                    <div class="clearfix">
                                        <p class="fl rz-i">*</p>
                                        <p class="fl">货物规格&nbsp;</p>
                                    </div>
                                    <input onblur="xsReg(this)" name="goods_ton3" id="name" class="xm goodsstand12" type="text" placeholder="请输入货物规格" style="width: 140px;">
                                    <span>&nbsp;吨-&nbsp;</span>
                                    <input onblur="xsReg(this)" name="goods_square3" id="name" class="xm goodsstand22" type="text" placeholder="请输入货物规格" style="width: 140px;"><span>&nbsp;方&nbsp;</span>
                                    <label class="label" style="font-size: 12px;">请输入合法货物规格</label>
                                </div>

                            </div> -->
                        </div>
                        <!-- 配送信息 -->
                        <div class="fl entrustrz-form0 entrustrz-form3">
                            <h3 class="entrustrz-formtit">配送信息</h3>
                            <div class="entrustrz-formcon">
                                <div class="rz-model rz-label">
                                    <div class="clearfix">
                                        <p class="fl rz-i">*</p>
                                        <p class="fl">始发地&nbsp;</p>
                                    </div>
                                    <div class="ku" style="display: inline-block;">
                                        <input onblur="mzReg(this)"  name="startsite" id="name" class="xm starting_address startsite" type="text" placeholder="请输入始发地">
                                         <label style="margin-left: 0px;">始发地必须</label>
                                        <div class="xiala" onclick="mzReg1(this)">
                                            <h1><span>确认</span></h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="entrustrz-formcon">
                                    <div class="rz-model rz-label">
                                        <div class="clearfix">
                                            <p class="fl rz-i">*</p>
                                            <p class="fl">始发地详细地址&nbsp;</p>
                                        </div>
                                        <input onblur="mzReg(this)" name="startsite_detail" id="name" class="xm startsite_detial" type="text" placeholder="请输入详细地址">
                                        <label>详细地址必须</label>
                                    </div>
                                </div>
                                <div class="rz-model rz-label">
                                    <div class="clearfix">
                                        <p class="fl rz-i">*</p>
                                        <p class="fl">目的地&nbsp;</p>
                                    </div>
                                     <div class="ku1" style="display: inline-block;">
                                        <input onblur="mzReg(this)" name="endsite" id="name" class="xm endsite" type="text" placeholder="请输入目的地" >
                                        <label style="margin-left: 0px;">目的地必须</label>
                                        <div class="xiala1" onclick="mzReg2(this)">
                                            <h1><span>确认</span></h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="entrustrz-formcon">
                                    <div class="rz-model rz-label">
                                        <div class="clearfix">
                                            <p class="fl rz-i">*</p>
                                            <p class="fl">目的地详细地址&nbsp;</p>
                                        </div>
                                        <input onblur="mzReg(this)" name="endsite_detail" id="name" class="xm endsite_detial" type="text" placeholder="请输入详细地址">
                                        <label>详细地址必须</label>
                                    </div>
                                </div>
                                <div class="rz-model rz-label">
                                    <div class="clearfix">
                                        <p class="fl rz-i">*</p>
                                        <p class="fl">装车时间&nbsp;</p>
                                    </div>
                                    <input onblur="mzReg(this)" name="start_loadingtime" class="xm siteinput ECalendar loadtime1" type="text" placeholder="请选择装车时间" style="width: 150px;" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd'})">
                                    ——
                                    <input onblur="mzReg(this)" name="end_loadingtime" class="xm siteinput ECalendar loadtime2" type="text" placeholder="请选择装车时间" style="width: 150px;" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd'})">
                                    <label class="label" style="font-size: 12px;">请选择装车时间</label>
                                </div>
                                <div class="rz-model rz-label">
                                    <div class="clearfix">
                                        <p class="fl rz-i">*</p>
                                        <p class="fl">到货时间&nbsp;</p>
                                    </div>
                                    <input onblur="mzReg(this)" name="start_arrivetime" class="xm siteinput ECalendar arrivetime1" type="text" placeholder="请选择到货时间" style="width: 150px;" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd'})">
                                    ——
                                    <input  onblur="mzReg(this)" name="end_arrivetime" class="xm siteinput ECalendar arrivetime2" type="text" placeholder="请选择到货时间" style="width: 150px;" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd'})">
                                    <label class="label" style="font-size: 12px;">请选择到货时间</label>
                                </div>
                                <div class="rz-model rz-label">
                                    <div class="clearfix">
                                        <p class="fl rz-i">*</p>
                                        <p class="fl">需要车长&nbsp;</p>
                                    </div>
                                    <select onblur="mzReg(this)" name="car_length" class="siteselect carlength" style="width: 340px;">
                                    <option value="" selected>请选择</option>
                                        <?php if(is_array($type2) || $type2 instanceof \think\Collection || $type2 instanceof \think\Paginator): $i = 0; $__LIST__ = $type2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($i % 2 );++$i;?>
                                            <option value="<?php echo $vo2['id']; ?>"><?php echo $vo2['typename']; ?> </option>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                                    <label>请选择需要车长</label>
                                </div>
                                <div class="rz-model rz-label">
                                    <div class="clearfix">
                                        <p class="fl rz-i">*</p>
                                        <p class="fl">需要车型&nbsp;</p>
                                    </div>
                                    <select onblur="mzReg(this)" name="car_type" class="siteselect cartype" style="width: 340px;">
                                    <option value="" selected>请选择</option>
                                        <?php if(is_array($type3) || $type3 instanceof \think\Collection || $type3 instanceof \think\Paginator): $i = 0; $__LIST__ = $type3;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo3): $mod = ($i % 2 );++$i;?>
                                            <option value="<?php echo $vo3['id']; ?>"><?php echo $vo3['typename']; ?> </option>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                                    <label>请选择需要车型</label>
                                </div>

                            </div>
                        </div>
                        <!-- 联系信息 -->
                        <div class="fl entrustrz-form0 entrustrz-form2">
                            <h3 class="entrustrz-formtit">联系信息</h3>
                            <div class="entrustrz-formcon">
                                <p style="border-bottom: 1px dotted #2562b4;font-size: 16px;margin: 20px 0px;padding: 10px;color: #2562b4;" class="goodscount">发货人信息</p>
                                <div class="rz-model rz-label">
                                    <div class="clearfix">
                                        <p class="fl rz-i">*</p>
                                        <p class="fl">发货人&nbsp;</p>
                                    </div>
                                    <input onblur="mzReg(this)" name="shipper_name" id="idCard" class="sfz linkman1" type="text" placeholder="请输入发货人">
                                    <label>请输入发货人</label>
                                </div>
                                <div class="rz-model rz-label">
                                    <div class="clearfix">
                                        <p class="fl rz-i">*</p>
                                        <p class="fl">发货人联系电话&nbsp;</p>
                                    </div>
                                    <input onblur="uxPhone(this)" name="shipper_phone" id="idCard" class="sfz linkphone1" type="text" placeholder="请输入发货人联系电话" style="margin:0px; text-align: left;">
                                    <label>请输入正确格式的联系电话</label>
                                </div>
                                <div class="rz-model rz-label">
                                    <div class="clearfix">
                                        <p class="fl">备注</p>
                                    </div>
                                    <textarea name="remark" class="remark_area" maxlength="30" ></textarea>
                                    <p style="width: auto;">您还可以输入<span id="word">30</span>个字</p>
                                </div>
                                <p style="border-bottom: 1px dotted #2562b4;font-size: 16px;margin: 20px 0px;padding: 10px;color: #2562b4;" class="goodscount">收货人信息</p>
                                <div class="rz-model rz-label">
                                    <div class="clearfix">
                                        <p class="fl rz-i">*</p>
                                        <p class="fl">收货人&nbsp;</p>
                                    </div>
                                    <input onblur="mzReg(this)" name="receiver_name" id="idCard" class="sfz linkman2" type="text" placeholder="请输入收货人">
                                    <label>请输入收货人</label>
                                </div>
                                <div class="rz-model rz-label">
                                    <div class="clearfix">
                                        <p class="fl rz-i">*</p>
                                        <p class="fl">收货人联系电话&nbsp;</p>
                                    </div>
                                    <input onblur="uxPhone(this)" name="receiver_phone" id="idCard" class="sfz linkphone2" type="text" placeholder="请输入收货人联系电话" style="margin:0px; text-align: left;">
                                    <label>请输入正确格式的联系电话</label>
                                </div>
                              
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <!-- 添加按钮 -->
                        <p class="addicon addicon1"><span class="glyphicon glyphicon-plus-sign"></span></p>
                        <p class="addicon minusicon1" style="display: none;"><span class="glyphicon glyphicon-minus-sign"></span></p>
                    </div>

                    <div class="entrustrz-formcon entrustrz-formcon2" style="display: none;">
                        <p class="goodscount">货物二</p>
                        <div class="fl entrustrz-form0 entrustrz-form1">
                            <h3 class="entrustrz-formtit">货源信息</h3>
                            <!-- 货物一 -->
                            <div class="">
                               <!--  <p class="goodscount">货物一</p> -->
                                <div class="rz-model rz-label">
                                    <div class="clearfix">
                                        <p class="fl rz-i">*</p>
                                        <p class="fl">货物名称&nbsp;</p>
                                    </div>
                                    <input onblur="mzReg(this)" name="goods_name2" id="name" class="xm goodsname1" type="text" placeholder="请输入货物名称">
                                    <label>请输入货物名称</label>
                                </div>
                                <div class="rz-model rz-label">
                                    <div class="clearfix">
                                        <p class="fl rz-i">*</p>
                                        <p class="fl">货物品类&nbsp;</p>
                                    </div>
                                    <select onblur="mzReg(this)" name="goods_sort2" class="siteselect goodssort1" style="width: 340px;">
                                        <option value="" selected>请选择</option>
                                        <?php if(is_array($type) || $type instanceof \think\Collection || $type instanceof \think\Paginator): $i = 0; $__LIST__ = $type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                            <option value="<?php echo $vo['id']; ?>"><?php echo $vo['typename']; ?></option>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                                    <label>请选择货物品类</label>
                                </div>
                                <div class="rz-model rz-label">
                                    <div class="clearfix">
                                        <p class="fl rz-i">*</p>
                                        <p class="fl">货物类型&nbsp;</p>
                                    </div>
                                    <select onblur="mzReg(this)" name="goods_type2" class="siteselect goodstype1" style="width: 340px;">
                                        <option value="" selected>请选择</option>
                                        <?php if(is_array($type1) || $type1 instanceof \think\Collection || $type1 instanceof \think\Paginator): $i = 0; $__LIST__ = $type1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($i % 2 );++$i;?>
                                            <option value="<?php echo $vo1['id']; ?>"><?php echo $vo1['typename']; ?></option>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                                    <label>请选择货物类型</label>
                                </div>
                                <div class="rz-model rz-label">
                                    <div class="clearfix">
                                        <p class="fl rz-i">*</p>
                                        <p class="fl">货物温度要求&nbsp;</p>
                                    </div>
                                    <input onblur="yfReg(this)" name="low_t2" id="name" class="xm lowtemp1" type="text" placeholder="请输入温度要求" style="width: 140px;">
                                    <span>&nbsp;℃-&nbsp;</span>
                                    <input onblur="yfReg(this)" name="high_t2" id="name" class="xm hightemp1" type="text" placeholder="请输入温度要求" style="width: 140px;"><span>&nbsp;℃&nbsp;</span>
                                    <label class="label" style="font-size: 12px;">请输入合法温度</label>
                                </div>
                                <div class="rz-model rz-label">
                                    <div class="clearfix">
                                        <p class="fl rz-i">*</p>
                                        <p class="fl">货物规格&nbsp;</p>
                                    </div>
                                    <input onblur="xsReg(this)" name="goods_ton2" id="name" class="xm goodsstand11" type="text" placeholder="请输入货物规格" style="width: 140px;">
                                    <span>&nbsp;吨-&nbsp;</span>
                                    <input onblur="xsReg(this)" name="goods_square2" id="name" class="xm goodsstand21" type="text" placeholder="请输入货物规格" style="width: 140px;"><span>&nbsp;方&nbsp;</span>
                                    <label class="label" style="font-size: 12px;">请输入合法货物规格</label>
                                </div>
                                <div class="rz-model rz-label">
                                    <div class="clearfix">
                                        <p class="fl rz-i">*</p>
                                        <p class="fl">运输费用</p>
                                    </div>
                                    <div class="libraryarea">
                                        <input type="radio" name="carriage_type2" class="moneyradio " checked="checked" value="运输费用">&nbsp;运输费用
                                        <input onblur="xsReg(this)" name="order_money2" id="name" class="xm money carriage1" type="text" placeholder="请输入运输费用" style="width: 200px;" value="">
                                        <label style="margin-left: 100px;">请输入正确格式的运输费用</label>
                                    </div>
                                    <!-- <div class="libraryarea">
                                        <input type="radio" name="carriage_type" class="moneyphone" value="电话联系">&nbsp;电话联系
                                    </div> -->
                                </div>
                                <div class="rz-model rz-label">
                                    <div class="clearfix">
                                        <p class="fl rz-i">*</p>
                                        <p class="fl">支付方式</p>
                                    </div>
                                    <div class="libraryarea">
                                        <?php if(is_array($type4) || $type4 instanceof \think\Collection || $type4 instanceof \think\Paginator): $i = 0; $__LIST__ = $type4;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                            <input type="radio" checked name="payment_mode2" class="moneyradio" value="<?php echo $vo['id']; ?>"><?php echo $vo['typename']; endforeach; endif; else: echo "" ;endif; ?>
                                    </div>
                                    <label>请选择支付方式</label>
                                </div>
                                <div class="rz-model rz-label">
                                    <div class="clearfix">
                                        <p class="fl rz-i">*</p>
                                        <p class="fl" style="width: 90px;">是否需要发票</p>
                                    </div>
                                    <div class="libraryarea">
                                        <input type="radio" name="invoice2" class="moneyradio" checked="" value="是">&nbsp;是
                                    </div>
                                    <div class="libraryarea">
                                        <input type="radio" name="invoice2" class="moneyradio" value="否">&nbsp;否
                                    </div>
                                    <label>请选择是否需要发票</label>
                                </div>
                            </div>
                            <!-- 货物二 -->
                            <!-- <div class="entrustrz-formcon entrustrz-formcon2" style="display: none;">
                                <p class="goodscount">货物二</p>
                                <div class="rz-model rz-label">
                                    <div class="clearfix">
                                        <p class="fl rz-i">*</p>
                                        <p class="fl">货物名称&nbsp;</p>
                                    </div>
                                    <input onblur="mzReg(this)" name="goods_name2" id="name" class="xm goodsname1" type="text" placeholder="请输入货物名称">
                                    <label>请输入货物名称</label>
                                </div>
                                <div class="rz-model rz-label">
                                    <div class="clearfix">
                                        <p class="fl rz-i">*</p>
                                        <p class="fl">货物品类&nbsp;</p>
                                    </div>
                                    <select onblur="mzReg(this)" name="goods_sort2" class="siteselect goodssort1" style="width: 340px;">
                                        <option value="" selected>请选择</option>
                                        <?php if(is_array($type) || $type instanceof \think\Collection || $type instanceof \think\Paginator): $i = 0; $__LIST__ = $type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                            <option value="<?php echo $vo['id']; ?>"><?php echo $vo['typename']; ?></option>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                                    <label>请选择货物品类</label>
                                </div>
                                <div class="rz-model rz-label">
                                    <div class="clearfix">
                                        <p class="fl rz-i">*</p>
                                        <p class="fl">货物类型&nbsp;</p>
                                    </div>
                                    <select onblur="mzReg(this)" name="goods_type2" class="siteselect goodstype1" style="width: 340px;">
                                        <option value="" selected>请选择</option>
                                        <?php if(is_array($type1) || $type1 instanceof \think\Collection || $type1 instanceof \think\Paginator): $i = 0; $__LIST__ = $type1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($i % 2 );++$i;?>
                                            <option value="<?php echo $vo1['id']; ?>"><?php echo $vo1['typename']; ?></option>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                                    <label>请选择货物类型</label>
                                </div>
                                <div class="rz-model rz-label">
                                    <div class="clearfix">
                                        <p class="fl rz-i">*</p>
                                        <p class="fl">温度要求&nbsp;</p>
                                    </div>
                                    <input onblur="yfReg(this)" name="low_t2" id="name" class="xm lowtemp1" type="text" placeholder="请输入温度要求" style="width: 140px;">
                                    <span>&nbsp;℃-&nbsp;</span>
                                    <input onblur="yfReg(this)" name="high_t2" id="name" class="xm hightemp1" type="text" placeholder="请输入温度要求" style="width: 140px;"><span>&nbsp;℃&nbsp;</span>
                                    <label class="label" style="font-size: 12px;">请输入合法温度</label>
                                </div>
                                <div class="rz-model rz-label">
                                    <div class="clearfix">
                                        <p class="fl rz-i">*</p>
                                        <p class="fl">货物规格&nbsp;</p>
                                    </div>
                                    <input onblur="xsReg(this)" name="goods_ton2" id="name" class="xm goodsstand11" type="text" placeholder="请输入货物规格" style="width: 140px;">
                                    <span>&nbsp;吨-&nbsp;</span>
                                    <input onblur="xsReg(this)" name="goods_square2" id="name" class="xm goodsstand21" type="text" placeholder="请输入货物规格" style="width: 140px;"><span>&nbsp;方&nbsp;</span>
                                    <label class="label" style="font-size: 12px;">请输入合法货物规格</label>
                                </div>
                                <p class="addicon addicon2"><span class="glyphicon glyphicon-plus-sign"></span></p>
                                <p class="addicon minusicon2" style="display: none;"><span class="glyphicon glyphicon-minus-sign"></span></p>

                            </div> -->
                            <!-- 货物三 -->
                            <!-- <div class="entrustrz-formcon entrustrz-formcon3" style="display: none;">
                                <p class="goodscount">货物三</p>
                                <div class="rz-model rz-label">
                                    <div class="clearfix">
                                        <p class="fl rz-i">*</p>
                                        <p class="fl">货物名称&nbsp;</p>
                                    </div>
                                    <input onblur="mzReg(this)" name="goods_name3" id="name" class="xm goodsname2" type="text" placeholder="请输入货物名称">
                                    <label>请输入货物名称</label>
                                </div>
                                <div class="rz-model rz-label">
                                    <div class="clearfix">
                                        <p class="fl rz-i">*</p>
                                        <p class="fl">货物品类&nbsp;</p>
                                    </div>
                                    <select onblur="mzReg(this)" name="goods_sort3" class="siteselect goodssort2" style="width: 340px;">
                                        <option value="" selected>请选择</option>
                                        <?php if(is_array($type) || $type instanceof \think\Collection || $type instanceof \think\Paginator): $i = 0; $__LIST__ = $type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                            <option value="<?php echo $vo['id']; ?>"><?php echo $vo['typename']; ?></option>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                                    <label>请选择货物品类</label>
                                </div>
                                <div class="rz-model rz-label">
                                    <div class="clearfix">
                                        <p class="fl rz-i">*</p>
                                        <p class="fl">货物类型&nbsp;</p>
                                    </div>
                                    <select onblur="mzReg(this)" name="goods_type3" class="siteselect goodstype2" style="width: 340px;">
                                        <option value="" selected>请选择</option>
                                        <?php if(is_array($type1) || $type1 instanceof \think\Collection || $type1 instanceof \think\Paginator): $i = 0; $__LIST__ = $type1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($i % 2 );++$i;?>
                                            <option value="<?php echo $vo1['id']; ?>"><?php echo $vo1['typename']; ?></option>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                                    <label>请选择货物类型</label>
                                </div>
                                <div class="rz-model rz-label">
                                    <div class="clearfix">
                                        <p class="fl rz-i">*</p>
                                        <p class="fl">温度要求&nbsp;</p>
                                    </div>
                                    <input onblur="yfReg(this)" name="low_t3" id="name" class="xm lowtemp2" type="text" placeholder="请输入温度要求" style="width: 140px;">
                                    <span>&nbsp;℃-&nbsp;</span>
                                    <input onblur="yfReg(this)" name="high_t3" id="name" class="xm hightemp2" type="text" placeholder="请输入温度要求" style="width: 140px;"><span>&nbsp;℃&nbsp;</span>
                                    <label class="label" style="font-size: 12px;">请输入合法温度</label>
                                </div>
                                <div class="rz-model rz-label">
                                    <div class="clearfix">
                                        <p class="fl rz-i">*</p>
                                        <p class="fl">货物规格&nbsp;</p>
                                    </div>
                                    <input onblur="xsReg(this)" name="goods_ton3" id="name" class="xm goodsstand12" type="text" placeholder="请输入货物规格" style="width: 140px;">
                                    <span>&nbsp;吨-&nbsp;</span>
                                    <input onblur="xsReg(this)" name="goods_square3" id="name" class="xm goodsstand22" type="text" placeholder="请输入货物规格" style="width: 140px;"><span>&nbsp;方&nbsp;</span>
                                    <label class="label" style="font-size: 12px;">请输入合法货物规格</label>
                                </div>

                            </div> -->
                        </div>
                        <!-- 配送信息 -->
                        <div class="fl entrustrz-form0 entrustrz-form3">
                            <h3 class="entrustrz-formtit">配送信息</h3>
                            <div class="entrustrz-formcon">
                                <div class="rz-model rz-label">
                                    <div class="clearfix">
                                        <p class="fl rz-i">*</p>
                                        <p class="fl">始发地&nbsp;</p>
                                    </div>
                                    <div class="ku" style="display: inline-block;">
                                        <input onblur="mzReg(this)"  name="startsite2" id="name" class="xm starting_address startsite1" type="text" placeholder="请输入始发地">
                                         <label style="margin-left: 0px;">始发地必须</label>
                                        <div class="xiala" onclick="mzReg1(this)">
                                            <h1><span>确认</span></h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="entrustrz-formcon">
                                    <div class="rz-model rz-label">
                                        <div class="clearfix">
                                            <p class="fl rz-i">*</p>
                                            <p class="fl">始发地详细地址&nbsp;</p>
                                        </div>
                                        <input onblur="mzReg(this)" name="startsite_detail2" id="name" class="xm startsite_detial1" type="text" placeholder="请输入详细地址">
                                        <label>详细地址必须</label>
                                    </div>
                                </div>
                                <div class="rz-model rz-label">
                                    <div class="clearfix">
                                        <p class="fl rz-i">*</p>
                                        <p class="fl">目的地&nbsp;</p>
                                    </div>
                                     <div class="ku1" style="display: inline-block;">
                                        <input onblur="mzReg(this)" name="endsite2" id="name" class="xm endsite1" type="text" placeholder="请输入目的地" >
                                        <label style="margin-left: 0px;">目的地必须</label>
                                        <div class="xiala1" onclick="mzReg2(this)">
                                            <h1><span>确认</span></h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="entrustrz-formcon">
                                    <div class="rz-model rz-label">
                                        <div class="clearfix">
                                            <p class="fl rz-i">*</p>
                                            <p class="fl">目的地详细地址&nbsp;</p>
                                        </div>
                                        <input onblur="mzReg(this)" name="endsite_detail2" id="name" class="xm endsite_detial1" type="text" placeholder="请输入详细地址">
                                        <label>详细地址必须</label>
                                    </div>
                                </div>
                                <div class="rz-model rz-label">
                                    <div class="clearfix">
                                        <p class="fl rz-i">*</p>
                                        <p class="fl">装车时间&nbsp;</p>
                                    </div>
                                    <input onblur="mzReg(this)" name="start_loadingtime2" class="xm siteinput ECalendar loadtime11" type="text" placeholder="请选择装车时间" style="width: 150px;" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd'})">
                                    ——
                                    <input onblur="mzReg(this)" name="end_loadingtime2" class="xm siteinput ECalendar loadtime21" type="text" placeholder="请选择装车时间" style="width: 150px;" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd'})">
                                    <label class="label" style="font-size: 12px;">请选择装车时间</label>
                                </div>
                                <div class="rz-model rz-label">
                                    <div class="clearfix">
                                        <p class="fl rz-i">*</p>
                                        <p class="fl">到货时间&nbsp;</p>
                                    </div>
                                    <input onblur="mzReg(this)" name="start_arrivetime2" class="xm siteinput ECalendar arrivetime11" type="text" placeholder="请选择到货时间" style="width: 150px;" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd'})">
                                    ——
                                    <input  onblur="mzReg(this)" name="end_arrivetime2" class="xm siteinput ECalendar arrivetime21" type="text" placeholder="请选择到货时间" style="width: 150px;" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd'})">
                                    <label class="label" style="font-size: 12px;">请选择到货时间</label>
                                </div>
                                <div class="rz-model rz-label">
                                    <div class="clearfix">
                                        <p class="fl rz-i">*</p>
                                        <p class="fl">需要车长&nbsp;</p>
                                    </div>
                                    <select onblur="mzReg(this)" name="car_length2" class="siteselect carlength1" style="width: 340px;">
                                    <option value="" selected>请选择</option>
                                        <?php if(is_array($type2) || $type2 instanceof \think\Collection || $type2 instanceof \think\Paginator): $i = 0; $__LIST__ = $type2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($i % 2 );++$i;?>
                                            <option value="<?php echo $vo2['id']; ?>"><?php echo $vo2['typename']; ?> </option>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                                    <label>请选择需要车长</label>
                                </div>
                                <div class="rz-model rz-label">
                                    <div class="clearfix">
                                        <p class="fl rz-i">*</p>
                                        <p class="fl">需要车型&nbsp;</p>
                                    </div>
                                    <select onblur="mzReg(this)" name="car_type2" class="siteselect cartype1" style="width: 340px;">
                                    <option value="" selected>请选择</option>
                                        <?php if(is_array($type3) || $type3 instanceof \think\Collection || $type3 instanceof \think\Paginator): $i = 0; $__LIST__ = $type3;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo3): $mod = ($i % 2 );++$i;?>
                                            <option value="<?php echo $vo3['id']; ?>"><?php echo $vo3['typename']; ?> </option>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                                    <label>请选择需要车型</label>
                                </div>

                            </div>
                        </div>
                        <!-- 联系信息 -->
                        <div class="fl entrustrz-form0 entrustrz-form2">
                            <h3 class="entrustrz-formtit">联系信息</h3>
                            <div class="entrustrz-formcon">
                                <p style="border-bottom: 1px dotted #2562b4;font-size: 16px;margin: 20px 0px;padding: 10px;color: #2562b4;" class="goodscount">发货人信息</p>
                                <div class="rz-model rz-label">
                                    <div class="clearfix">
                                        <p class="fl rz-i">*</p>
                                        <p class="fl">发货人&nbsp;</p>
                                    </div>
                                    <input onblur="mzReg(this)" name="shipper_name2" id="idCard" class="sfz linkman11" type="text" placeholder="请输入发货人">
                                    <label>请输入发货人</label>
                                </div>
                                <div class="rz-model rz-label">
                                    <div class="clearfix">
                                        <p class="fl rz-i">*</p>
                                        <p class="fl">发货人联系电话&nbsp;</p>
                                    </div>
                                    <input onblur="uxPhone(this)" name="shipper_phone2" id="idCard" class="sfz linkphone11" type="text" placeholder="请输入发货人联系电话" style="margin:0px; text-align: left;">
                                    <label>请输入正确格式的联系电话</label>
                                </div>
                                <div class="rz-model rz-label">
                                    <div class="clearfix">
                                        <p class="fl">备注</p>
                                    </div>
                                    <textarea name="remark2" class="remark_area" maxlength="30" ></textarea>
                                    <p style="width: auto;">您还可以输入<span id="word">30</span>个字</p>
                                </div>
                                <p style="border-bottom: 1px dotted #2562b4;font-size: 16px;margin: 20px 0px;padding: 10px;color: #2562b4;" class="goodscount">收货人信息</p>
                                <div class="rz-model rz-label">
                                    <div class="clearfix">
                                        <p class="fl rz-i">*</p>
                                        <p class="fl">收货人&nbsp;</p>
                                    </div>
                                    <input onblur="mzReg(this)" name="receiver_name2" id="idCard" class="sfz linkman21" type="text" placeholder="请输入收货人">
                                    <label>请输入收货人</label>
                                </div>
                                <div class="rz-model rz-label">
                                    <div class="clearfix">
                                        <p class="fl rz-i">*</p>
                                        <p class="fl">收货人联系电话&nbsp;</p>
                                    </div>
                                    <input onblur="uxPhone(this)" name="receiver_phone2" id="idCard" class="sfz linkphone21" type="text" placeholder="请输入收货人联系电话" style="margin:0px; text-align: left;">
                                    <label>请输入正确格式的联系电话</label>
                                </div>
                              
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <!-- 添加按钮 -->
                        <p class="addicon addicon2"><span class="glyphicon glyphicon-plus-sign"></span></p>
                        <p class="addicon minusicon2" style="display: none;"><span class="glyphicon glyphicon-minus-sign"></span></p>
                    </div>

                    <div class="entrustrz-formcon entrustrz-formcon3" style="display: none;">
                        <p class="goodscount">货物三</p>
                        <div class="fl entrustrz-form0 entrustrz-form1">
                            <h3 class="entrustrz-formtit">货源信息</h3>
                            <!-- 货物一 -->
                            <div class="">
                               <!--  <p class="goodscount">货物一</p> -->
                                <div class="rz-model rz-label">
                                    <div class="clearfix">
                                        <p class="fl rz-i">*</p>
                                        <p class="fl">货物名称&nbsp;</p>
                                    </div>
                                    <input onblur="mzReg(this)" name="goods_name3" id="name" class="xm goodsname2" type="text" placeholder="请输入货物名称">
                                    <label>请输入货物名称</label>
                                </div>
                                <div class="rz-model rz-label">
                                    <div class="clearfix">
                                        <p class="fl rz-i">*</p>
                                        <p class="fl">货物品类&nbsp;</p>
                                    </div>
                                    <select onblur="mzReg(this)" name="goods_sort3" class="siteselect goodssort2" style="width: 340px;">
                                        <option value="" selected>请选择</option>
                                        <?php if(is_array($type) || $type instanceof \think\Collection || $type instanceof \think\Paginator): $i = 0; $__LIST__ = $type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                            <option value="<?php echo $vo['id']; ?>"><?php echo $vo['typename']; ?></option>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                                    <label>请选择货物品类</label>
                                </div>
                                <div class="rz-model rz-label">
                                    <div class="clearfix">
                                        <p class="fl rz-i">*</p>
                                        <p class="fl">货物类型&nbsp;</p>
                                    </div>
                                    <select onblur="mzReg(this)" name="goods_type3" class="siteselect goodstype2" style="width: 340px;">
                                        <option value="" selected>请选择</option>
                                        <?php if(is_array($type1) || $type1 instanceof \think\Collection || $type1 instanceof \think\Paginator): $i = 0; $__LIST__ = $type1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($i % 2 );++$i;?>
                                            <option value="<?php echo $vo1['id']; ?>"><?php echo $vo1['typename']; ?></option>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                                    <label>请选择货物类型</label>
                                </div>
                                <div class="rz-model rz-label">
                                    <div class="clearfix">
                                        <p class="fl rz-i">*</p>
                                        <p class="fl">货物温度要求&nbsp;</p>
                                    </div>
                                    <input onblur="yfReg(this)" name="low_t3" id="name" class="xm lowtemp2" type="text" placeholder="请输入温度要求" style="width: 140px;">
                                    <span>&nbsp;℃-&nbsp;</span>
                                    <input onblur="yfReg(this)" name="high_t3" id="name" class="xm hightemp2" type="text" placeholder="请输入温度要求" style="width: 140px;"><span>&nbsp;℃&nbsp;</span>
                                    <label class="label" style="font-size: 12px;">请输入合法温度</label>
                                </div>
                                <div class="rz-model rz-label">
                                    <div class="clearfix">
                                        <p class="fl rz-i">*</p>
                                        <p class="fl">货物规格&nbsp;</p>
                                    </div>
                                    <input onblur="xsReg(this)" name="goods_ton3" id="name" class="xm goodsstand12" type="text" placeholder="请输入货物规格" style="width: 140px;">
                                    <span>&nbsp;吨-&nbsp;</span>
                                    <input onblur="xsReg(this)" name="goods_square3" id="name" class="xm goodsstand22" type="text" placeholder="请输入货物规格" style="width: 140px;"><span>&nbsp;方&nbsp;</span>
                                    <label class="label" style="font-size: 12px;">请输入合法货物规格</label>
                                </div>
                                <div class="rz-model rz-label">
                                    <div class="clearfix">
                                        <p class="fl rz-i">*</p>
                                        <p class="fl">运输费用</p>
                                    </div>
                                    <div class="libraryarea">
                                        <input type="radio" name="carriage_type3" class="moneyradio " checked="checked" value="运输费用">&nbsp;运输费用
                                        <input onblur="xsReg(this)" name="order_money3" id="name" class="xm money carriage2" type="text" placeholder="请输入运输费用" style="width: 200px;" value="">
                                        <label style="margin-left: 100px;">请输入正确格式的运输费用</label>
                                    </div>
                                    <!-- <div class="libraryarea">
                                        <input type="radio" name="carriage_type" class="moneyphone" value="电话联系">&nbsp;电话联系
                                    </div> -->
                                </div>
                                <div class="rz-model rz-label">
                                    <div class="clearfix">
                                        <p class="fl rz-i">*</p>
                                        <p class="fl">支付方式</p>
                                    </div>
                                    <div class="libraryarea">
                                        <?php if(is_array($type4) || $type4 instanceof \think\Collection || $type4 instanceof \think\Paginator): $i = 0; $__LIST__ = $type4;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                            <input type="radio" checked name="payment_mode3" class="moneyradio" value="<?php echo $vo['id']; ?>"><?php echo $vo['typename']; endforeach; endif; else: echo "" ;endif; ?>
                                    </div>
                                    <label>请选择支付方式</label>
                                </div>
                                <div class="rz-model rz-label">
                                    <div class="clearfix">
                                        <p class="fl rz-i">*</p>
                                        <p class="fl" style="width: 90px;">是否需要发票</p>
                                    </div>
                                    <div class="libraryarea">
                                        <input type="radio" name="invoice3" class="moneyradio" checked="" value="是">&nbsp;是
                                    </div>
                                    <div class="libraryarea">
                                        <input type="radio" name="invoice3" class="moneyradio" value="否">&nbsp;否
                                    </div>
                                    <label>请选择是否需要发票</label>
                                </div>
                            </div>
                            <!-- 货物二 -->
                            <!-- <div class="entrustrz-formcon entrustrz-formcon2" style="display: none;">
                                <p class="goodscount">货物二</p>
                                <div class="rz-model rz-label">
                                    <div class="clearfix">
                                        <p class="fl rz-i">*</p>
                                        <p class="fl">货物名称&nbsp;</p>
                                    </div>
                                    <input onblur="mzReg(this)" name="goods_name2" id="name" class="xm goodsname1" type="text" placeholder="请输入货物名称">
                                    <label>请输入货物名称</label>
                                </div>
                                <div class="rz-model rz-label">
                                    <div class="clearfix">
                                        <p class="fl rz-i">*</p>
                                        <p class="fl">货物品类&nbsp;</p>
                                    </div>
                                    <select onblur="mzReg(this)" name="goods_sort2" class="siteselect goodssort1" style="width: 340px;">
                                        <option value="" selected>请选择</option>
                                        <?php if(is_array($type) || $type instanceof \think\Collection || $type instanceof \think\Paginator): $i = 0; $__LIST__ = $type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                            <option value="<?php echo $vo['id']; ?>"><?php echo $vo['typename']; ?></option>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                                    <label>请选择货物品类</label>
                                </div>
                                <div class="rz-model rz-label">
                                    <div class="clearfix">
                                        <p class="fl rz-i">*</p>
                                        <p class="fl">货物类型&nbsp;</p>
                                    </div>
                                    <select onblur="mzReg(this)" name="goods_type2" class="siteselect goodstype1" style="width: 340px;">
                                        <option value="" selected>请选择</option>
                                        <?php if(is_array($type1) || $type1 instanceof \think\Collection || $type1 instanceof \think\Paginator): $i = 0; $__LIST__ = $type1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($i % 2 );++$i;?>
                                            <option value="<?php echo $vo1['id']; ?>"><?php echo $vo1['typename']; ?></option>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                                    <label>请选择货物类型</label>
                                </div>
                                <div class="rz-model rz-label">
                                    <div class="clearfix">
                                        <p class="fl rz-i">*</p>
                                        <p class="fl">温度要求&nbsp;</p>
                                    </div>
                                    <input onblur="yfReg(this)" name="low_t2" id="name" class="xm lowtemp1" type="text" placeholder="请输入温度要求" style="width: 140px;">
                                    <span>&nbsp;℃-&nbsp;</span>
                                    <input onblur="yfReg(this)" name="high_t2" id="name" class="xm hightemp1" type="text" placeholder="请输入温度要求" style="width: 140px;"><span>&nbsp;℃&nbsp;</span>
                                    <label class="label" style="font-size: 12px;">请输入合法温度</label>
                                </div>
                                <div class="rz-model rz-label">
                                    <div class="clearfix">
                                        <p class="fl rz-i">*</p>
                                        <p class="fl">货物规格&nbsp;</p>
                                    </div>
                                    <input onblur="xsReg(this)" name="goods_ton2" id="name" class="xm goodsstand11" type="text" placeholder="请输入货物规格" style="width: 140px;">
                                    <span>&nbsp;吨-&nbsp;</span>
                                    <input onblur="xsReg(this)" name="goods_square2" id="name" class="xm goodsstand21" type="text" placeholder="请输入货物规格" style="width: 140px;"><span>&nbsp;方&nbsp;</span>
                                    <label class="label" style="font-size: 12px;">请输入合法货物规格</label>
                                </div>
                                <p class="addicon addicon2"><span class="glyphicon glyphicon-plus-sign"></span></p>
                                <p class="addicon minusicon2" style="display: none;"><span class="glyphicon glyphicon-minus-sign"></span></p>

                            </div> -->
                            <!-- 货物三 -->
                            <!-- <div class="entrustrz-formcon entrustrz-formcon3" style="display: none;">
                                <p class="goodscount">货物三</p>
                                <div class="rz-model rz-label">
                                    <div class="clearfix">
                                        <p class="fl rz-i">*</p>
                                        <p class="fl">货物名称&nbsp;</p>
                                    </div>
                                    <input onblur="mzReg(this)" name="goods_name3" id="name" class="xm goodsname2" type="text" placeholder="请输入货物名称">
                                    <label>请输入货物名称</label>
                                </div>
                                <div class="rz-model rz-label">
                                    <div class="clearfix">
                                        <p class="fl rz-i">*</p>
                                        <p class="fl">货物品类&nbsp;</p>
                                    </div>
                                    <select onblur="mzReg(this)" name="goods_sort3" class="siteselect goodssort2" style="width: 340px;">
                                        <option value="" selected>请选择</option>
                                        <?php if(is_array($type) || $type instanceof \think\Collection || $type instanceof \think\Paginator): $i = 0; $__LIST__ = $type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                            <option value="<?php echo $vo['id']; ?>"><?php echo $vo['typename']; ?></option>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                                    <label>请选择货物品类</label>
                                </div>
                                <div class="rz-model rz-label">
                                    <div class="clearfix">
                                        <p class="fl rz-i">*</p>
                                        <p class="fl">货物类型&nbsp;</p>
                                    </div>
                                    <select onblur="mzReg(this)" name="goods_type3" class="siteselect goodstype2" style="width: 340px;">
                                        <option value="" selected>请选择</option>
                                        <?php if(is_array($type1) || $type1 instanceof \think\Collection || $type1 instanceof \think\Paginator): $i = 0; $__LIST__ = $type1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($i % 2 );++$i;?>
                                            <option value="<?php echo $vo1['id']; ?>"><?php echo $vo1['typename']; ?></option>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                                    <label>请选择货物类型</label>
                                </div>
                                <div class="rz-model rz-label">
                                    <div class="clearfix">
                                        <p class="fl rz-i">*</p>
                                        <p class="fl">温度要求&nbsp;</p>
                                    </div>
                                    <input onblur="yfReg(this)" name="low_t3" id="name" class="xm lowtemp2" type="text" placeholder="请输入温度要求" style="width: 140px;">
                                    <span>&nbsp;℃-&nbsp;</span>
                                    <input onblur="yfReg(this)" name="high_t3" id="name" class="xm hightemp2" type="text" placeholder="请输入温度要求" style="width: 140px;"><span>&nbsp;℃&nbsp;</span>
                                    <label class="label" style="font-size: 12px;">请输入合法温度</label>
                                </div>
                                <div class="rz-model rz-label">
                                    <div class="clearfix">
                                        <p class="fl rz-i">*</p>
                                        <p class="fl">货物规格&nbsp;</p>
                                    </div>
                                    <input onblur="xsReg(this)" name="goods_ton3" id="name" class="xm goodsstand12" type="text" placeholder="请输入货物规格" style="width: 140px;">
                                    <span>&nbsp;吨-&nbsp;</span>
                                    <input onblur="xsReg(this)" name="goods_square3" id="name" class="xm goodsstand22" type="text" placeholder="请输入货物规格" style="width: 140px;"><span>&nbsp;方&nbsp;</span>
                                    <label class="label" style="font-size: 12px;">请输入合法货物规格</label>
                                </div>

                            </div> -->
                        </div>
                        <!-- 配送信息 -->
                        <div class="fl entrustrz-form0 entrustrz-form3">
                            <h3 class="entrustrz-formtit">配送信息</h3>
                            <div class="entrustrz-formcon">
                                <div class="rz-model rz-label">
                                    <div class="clearfix">
                                        <p class="fl rz-i">*</p>
                                        <p class="fl">始发地&nbsp;</p>
                                    </div>
                                    <div class="ku" style="display: inline-block;">
                                        <input onblur="mzReg(this)"  name="startsite3" id="name" class="xm starting_address startsite2" type="text" placeholder="请输入始发地">
                                         <label style="margin-left: 0px;">始发地必须</label>
                                        <div class="xiala" onclick="mzReg1(this)">
                                            <h1><span>确认</span></h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="entrustrz-formcon">
                                    <div class="rz-model rz-label">
                                        <div class="clearfix">
                                            <p class="fl rz-i">*</p>
                                            <p class="fl">始发地详细地址&nbsp;</p>
                                        </div>
                                        <input onblur="mzReg(this)" name="startsite_detail3" id="name" class="xm startsite_detial2" type="text" placeholder="请输入详细地址">
                                        <label>详细地址必须</label>
                                    </div>
                                </div>
                                <div class="rz-model rz-label">
                                    <div class="clearfix">
                                        <p class="fl rz-i">*</p>
                                        <p class="fl">目的地&nbsp;</p>
                                    </div>
                                     <div class="ku1" style="display: inline-block;">
                                        <input onblur="mzReg(this)" name="endsite3" id="name" class="xm endsite2" type="text" placeholder="请输入目的地" >
                                        <label style="margin-left: 0px;">目的地必须</label>
                                        <div class="xiala1" onclick="mzReg2(this)">
                                            <h1><span>确认</span></h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="entrustrz-formcon">
                                    <div class="rz-model rz-label">
                                        <div class="clearfix">
                                            <p class="fl rz-i">*</p>
                                            <p class="fl">目的地详细地址&nbsp;</p>
                                        </div>
                                        <input onblur="mzReg(this)" name="endsite_detail3" id="name" class="xm endsite_detial2" type="text" placeholder="请输入详细地址">
                                        <label>详细地址必须</label>
                                    </div>
                                </div>
                                <div class="rz-model rz-label">
                                    <div class="clearfix">
                                        <p class="fl rz-i">*</p>
                                        <p class="fl">装车时间&nbsp;</p>
                                    </div>
                                    <input onblur="mzReg(this)" name="start_loadingtime3" class="xm siteinput ECalendar loadtime12" type="text" placeholder="请选择装车时间" style="width: 150px;" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd'})">
                                    ——
                                    <input onblur="mzReg(this)" name="end_loadingtime3" class="xm siteinput ECalendar loadtime22" type="text" placeholder="请选择装车时间" style="width: 150px;" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd'})">
                                    <label class="label" style="font-size: 12px;">请选择装车时间</label>
                                </div>
                                <div class="rz-model rz-label">
                                    <div class="clearfix">
                                        <p class="fl rz-i">*</p>
                                        <p class="fl">到货时间&nbsp;</p>
                                    </div>
                                    <input onblur="mzReg(this)" name="start_arrivetime3" class="xm siteinput ECalendar arrivetime12" type="text" placeholder="请选择到货时间" style="width: 150px;" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd'})">
                                    ——
                                    <input  onblur="mzReg(this)" name="end_arrivetime3" class="xm siteinput ECalendar arrivetime22" type="text" placeholder="请选择到货时间" style="width: 150px;" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd'})">
                                    <label class="label" style="font-size: 12px;">请选择到货时间</label>
                                </div>
                                <div class="rz-model rz-label">
                                    <div class="clearfix">
                                        <p class="fl rz-i">*</p>
                                        <p class="fl">需要车长&nbsp;</p>
                                    </div>
                                    <select onblur="mzReg(this)" name="car_length3" class="siteselect carlength2" style="width: 340px;">
                                    <option value="" selected>请选择</option>
                                        <?php if(is_array($type2) || $type2 instanceof \think\Collection || $type2 instanceof \think\Paginator): $i = 0; $__LIST__ = $type2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($i % 2 );++$i;?>
                                            <option value="<?php echo $vo2['id']; ?>"><?php echo $vo2['typename']; ?> </option>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                                    <label>请选择需要车长</label>
                                </div>
                                <div class="rz-model rz-label">
                                    <div class="clearfix">
                                        <p class="fl rz-i">*</p>
                                        <p class="fl">需要车型&nbsp;</p>
                                    </div>
                                    <select onblur="mzReg(this)" name="car_type3" class="siteselect cartype2" style="width: 340px;">
                                    <option value="" selected>请选择</option>
                                        <?php if(is_array($type3) || $type3 instanceof \think\Collection || $type3 instanceof \think\Paginator): $i = 0; $__LIST__ = $type3;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo3): $mod = ($i % 2 );++$i;?>
                                            <option value="<?php echo $vo3['id']; ?>"><?php echo $vo3['typename']; ?> </option>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                                    <label>请选择需要车型</label>
                                </div>

                            </div>
                        </div>
                        <!-- 联系信息 -->
                        <div class="fl entrustrz-form0 entrustrz-form2">
                            <h3 class="entrustrz-formtit">联系信息</h3>
                            <div class="entrustrz-formcon">
                                <p style="border-bottom: 1px dotted #2562b4;font-size: 16px;margin: 20px 0px;padding: 10px;color: #2562b4;" class="goodscount">发货人信息</p>
                                <div class="rz-model rz-label">
                                    <div class="clearfix">
                                        <p class="fl rz-i">*</p>
                                        <p class="fl">发货人&nbsp;</p>
                                    </div>
                                    <input onblur="mzReg(this)" name="shipper_name3" id="idCard" class="sfz linkman12" type="text" placeholder="请输入发货人">
                                    <label>请输入发货人</label>
                                </div>
                                <div class="rz-model rz-label">
                                    <div class="clearfix">
                                        <p class="fl rz-i">*</p>
                                        <p class="fl">发货人联系电话&nbsp;</p>
                                    </div>
                                    <input onblur="uxPhone(this)" name="shipper_phone3" id="idCard" class="sfz linkphone12" type="text" placeholder="请输入发货人联系电话" style="margin:0px; text-align: left;">
                                    <label>请输入正确格式的联系电话</label>
                                </div>
                                <div class="rz-model rz-label">
                                    <div class="clearfix">
                                        <p class="fl">备注</p>
                                    </div>
                                    <textarea name="remark3" class="remark_area" maxlength="30" ></textarea>
                                    <p style="width: auto;">您还可以输入<span id="word">30</span>个字</p>
                                </div>
                                <p style="border-bottom: 1px dotted #2562b4;font-size: 16px;margin: 20px 0px;padding: 10px;color: #2562b4;" class="goodscount">收货人信息</p>
                                <div class="rz-model rz-label">
                                    <div class="clearfix">
                                        <p class="fl rz-i">*</p>
                                        <p class="fl">收货人&nbsp;</p>
                                    </div>
                                    <input onblur="mzReg(this)" name="receiver_name3" id="idCard" class="sfz linkman22" type="text" placeholder="请输入收货人">
                                    <label>请输入收货人</label>
                                </div>
                                <div class="rz-model rz-label">
                                    <div class="clearfix">
                                        <p class="fl rz-i">*</p>
                                        <p class="fl">收货人联系电话&nbsp;</p>
                                    </div>
                                    <input onblur="uxPhone(this)" name="receiver_phone3" id="idCard" class="sfz linkphone22" type="text" placeholder="请输入收货人联系电话" style="margin:0px; text-align: left;">
                                    <label>请输入正确格式的联系电话</label>
                                </div>
                              
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    

                    <p class="entrustsub">
                        <input type="submit" class="entrustbtn" name="" value="提交">
                    </p>
                </div>
            </form>
            <!-- 找库货源 -->
           <!--  <form id="addCarGoodsResource" enctype="multipart/form-data" method="post" novalidate="novalidate" class="form2" style="display: none;" action="<?php echo url('Personalcenter/goodsadd1'); ?>" onSubmit="return checkku();">
                <input type="hidden" name="uid" value="<?php echo trim(session('username'))?>">
                <input type="hidden" name="uptype" value="1">
                <input type="hidden" name="is_recycle" value="0">
                <input type="hidden" name="order_state" value="1">
                <div class="rz-Form entrustrz-form">
                    <div class="rz-model rz-label">
                        <div class="clearfix">
                            <p class="fl rz-i">*</p>
                            <p class="fl" style="width: 80px;">需要冷库地&nbsp;</p>
                        </div>
                        <div class="ku" style="display: inline-block;">
                            <input onblur="mzReg(this)" name="whaddress" id="name" class="xm whaddress" type="text" placeholder="请选择需要冷库地" style="width: 200px;">
                            <label style="margin:0px">冷库地必须</label>
                            <div class="xiala" onclick="mzReg1(this)">
                                <h1><span>确认</span></h1>
                            </div>
                        </div>
                        <input onblur="mzReg(this)" name="whaddress_detail" id="name" class="xm whaddress_detail" type="text" placeholder="请输入详细地址" style="width: 200px;">
                        <label>详细地址必须</label>
                    </div>
                     <div class="rz-model rz-label">
                        <div class="clearfix">
                            <p class="fl rz-i">*</p>
                            <p class="fl">入库时间&nbsp;</p>
                        </div>
                        <input onblur="mzReg(this)" name="enter_wh_time" class="xm siteinput ECalendar enter_wh_time" type="text" placeholder="请选择入库时间" style="width: 462px;" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd'})">
                        <label>请选择入库时间</label>
                    </div>
                    <div class="rz-model rz-label">
                        <div class="clearfix">
                            <p class="fl rz-i">*</p>
                            <p class="fl" style="width: 90px;">预计库存时间&nbsp;</p>
                        </div>
                        <select onblur="mzReg(this)" name="storage_time" class="siteselect storage_time" style="width: 462px;">
                            <option value="" selected>请选择</option>
                            <?php if(is_array($types) || $types instanceof \think\Collection || $types instanceof \think\Paginator): $i = 0; $__LIST__ = $types;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo4): $mod = ($i % 2 );++$i;?>
                                <option value="<?php echo $vo4['id']; ?>"><?php echo $vo4['typename']; ?></option>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                        <label>请选择预计库存时间</label>
                    </div>
                    <div class="rz-model rz-label">
                        <div class="clearfix">
                            <p class="fl rz-i">*</p>
                            <p class="fl">货物名称&nbsp;</p>
                        </div>
                        <input onblur="mzReg(this)" name="goods_name" id="name" class="xm goods_name" type="text" placeholder="请输入货物名称">
                        <label>请输入货物名称</label>
                    </div>
                    <div class="rz-model rz-label">
                        <div class="clearfix">
                            <p class="fl rz-i">*</p>
                            <p class="fl">货物类型&nbsp;</p>
                        </div>
                        <select onblur="mzReg(this)" name="goods_type" class="siteselect goods_type" style="width: 462px;">
                        <option value="" selected>请选择</option>
                            <?php if(is_array($type6) || $type6 instanceof \think\Collection || $type6 instanceof \think\Paginator): $i = 0; $__LIST__ = $type6;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo6): $mod = ($i % 2 );++$i;?>
                                <option value="<?php echo $vo6['id']; ?>"><?php echo $vo6['typename']; ?></option>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                        <label>请选择货物类型</label>
                    </div>
                    <div class="rz-model rz-label">
                        <div class="clearfix">
                            <p class="fl rz-i">*</p>
                            <p class="fl">货物规格&nbsp;</p>
                        </div>
                        <input onblur="xsReg(this)" name="standard_ton" id="name" class="xm standard_ton" type="text" placeholder="请输入货物规格" style="width: 200px;">
                        <span>&nbsp;吨&nbsp;</span>
                        <input onblur="xsReg(this)" name="standard_square" id="name" class="xm standard_square" type="text" placeholder="请输入货物规格" style="width: 200px;"><span>&nbsp;方&nbsp;</span>
                        <label>请输入正确格式的货物规格</label>
                    </div>
                    <div class="rz-model rz-label">
                        <div class="clearfix">
                            <p class="fl rz-i">*</p>
                            <p class="fl">包装类型&nbsp;</p>
                        </div>
                        <input onblur="mzReg(this)" name="package_type" id="name" class="xm package_type" type="text" placeholder="请输入包装类型">
                        <label>请输入包装类型</label>
                    </div>
                    <div class="rz-model rz-label">
                        <div class="clearfix">
                            <p class="fl rz-i">*</p>
                            <p class="fl">输入价格&nbsp;</p>
                            <p class="fl" style="width: auto;">（此价格仅为存储费用不包含其他费用）</p>
                        </div>
                        <input onblur="xsReg(this)" name="store_price" id="name" class="xm store_price" type="text" placeholder="请输入货物价格">
                        <label>请输入价格</label>
                    </div>
                    <div class="rz-model rz-label">
                        <div class="clearfix">
                            <p class="fl rz-i">*</p>
                            <p class="fl">价格类型</p>
                        </div>
                        <div class="libraryarea">
                            <input type="radio" name="price_type" class="price_type" checked value="一口价">&nbsp;一口价
                        </div>
                        <label>请选择价格类型</label>
                    </div>
                    <div class="rz-model rz-label">
                        <div class="clearfix">
                            <p class="fl rz-i">*</p>
                            <p class="fl">支付方式</p>
                        </div>
                        <div class="libraryarea">
                            <?php if(is_array($type4) || $type4 instanceof \think\Collection || $type4 instanceof \think\Paginator): $i = 0; $__LIST__ = $type4;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                <input type="radio" checked name="payment_mode" class="payment_mode" value="<?php echo $vo['id']; ?>"><?php echo $vo['typename']; endforeach; endif; else: echo "" ;endif; ?>
                        </div>
                        <label>请选择支付方式</label>
                    </div>
                    <a id="sszz"></a>
                    <div class="rz-model rz-label">
                        <div class="clearfix">
                            <p class="fl rz-i">*</p>
                            <p class="fl">库存温度&nbsp;</p>
                        </div>
                        <select onblur="mzReg(this)" name="need_wh_temperature" class="siteselect need_wh_temperature" style="width: 462px;">
                            <option value="" selected>请选择</option>
                            <?php if(is_array($type5) || $type5 instanceof \think\Collection || $type5 instanceof \think\Paginator): $i = 0; $__LIST__ = $type5;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo5): $mod = ($i % 2 );++$i;?>
                                <option value="<?php echo $vo5['id']; ?>"><?php echo $vo5['typename']; ?></option>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                        <label>请选择库存温度</label>
                    </div>
                    <div class="rz-model rz-label">
                        <div class="clearfix">
                            <p class="fl rz-i">*</p>
                            <p class="fl" style="width: 90px;">是否需要发票</p>
                        </div>
                        <div class="libraryarea">
                            <input type="radio" name="invoice" class="invoice" checked value="是">&nbsp;是
                        </div>
                        <div class="libraryarea">
                            <input type="radio" name="invoice" class="invoice" value="否">&nbsp;否
                        </div>
                        <label>请选择是否需要发票</label>
                    </div>
                    <div class="clearfix rz-model">
                        <div class="clearfix">
                            <p class="fl rz-i">*</p>
                            <p class="fl">货物图片</p>
                           
                        </div>
                       <div class="img_show">
                            <img src="__PUBLIC__/images/sci.png" id='show'>
                        </div>
                        <span class="fileinput-button">
                            <span>点击上传</span>
                            <input type="file" name="goods_photo" id='file' onchange="c()" class="sfz goods_photo"  placeholder="请上传货物图片">
                        </span>
                    </div>
                    <div class="rz-model rz-label">
                        <div class="clearfix">
                            <p class="fl rz-i">*</p>
                            <p class="fl">联系人&nbsp;</p>
                        </div>
                        <input onblur="mzReg(this)" name="contact" id="idCard" class="sfz contact" type="text" placeholder="请输入联系人">
                        <label>请输入联系人</label>
                    </div>
                    <div class="rz-model rz-label">
                        <div class="clearfix">
                            <p class="fl rz-i">*</p>
                            <p class="fl">联系电话&nbsp;</p>
                        </div>
                        <input onblur="uxPhone(this)" name="phone" id="idCard" class="sfz phone" type="text" placeholder="请输入联系电话" style="margin:0px; text-align: left;">
                        <label>请输入联系电话</label>
                    </div>
                    <div class="rz-model rz-label">
                        <div class="clearfix">
                            <p class="fl">备注</p>
                        </div>
                        <textarea name="goods_remark" class="remark_area" maxlength="30" ></textarea>
                        <p style="width: auto;">您还可以输入<span id="word">30</span>个字</p>
                    </div>
                    <div class="rz-model" style="position:relative">
                        <input type="submit" name="" class="rz_sub" value="提交">
                   </div>
                </div>

            </form> -->
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
<div class="kf">
    <a style="outline: none;" href="http://42.228.11.187/chat/index.php?nick=<?php echo $username; ?>" target="_blank">
        <img src="__PUBLIC__/images/helper03.png">
        <p>在线客服</p>
    </a>
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
    $('.nav_wrap').children('li').eq(1).addClass('now');
    
    // 货源选择
    $('.addicon1').click(function(){
        $('.entrustrz-formcon2').show();
        $('.minusicon1').show();
        $(this).hide();
    });
    $('.minusicon1').click(function(){
        $('.entrustrz-formcon2').hide();
        $('.entrustrz-formcon3').hide();
        $('.addicon1').show();
        $('.addicon2').show();
        $('.minusicon2').hide();
        $(this).hide();
    });
    $('.addicon2').click(function(){
        $('.entrustrz-formcon3').show();
        $('.minusicon2').show();
        $(this).hide();
    });
    $('.minusicon2').click(function(){
        $('.entrustrz-formcon3').hide();
        $('.addicon2').show();
        $(this).hide();
    })

</script>
</body>
</html>