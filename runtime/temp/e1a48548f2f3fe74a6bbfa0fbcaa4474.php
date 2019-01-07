<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:82:"E:\WWW\transport\public/../application/index\view\personalcenter\goodslist_ku.html";i:1510026148;s:68:"E:\WWW\transport\public/../application/index\view\common\header.html";i:1513838096;s:66:"E:\WWW\transport\public/../application/index\view\common\left.html";i:1511158695;s:68:"E:\WWW\transport\public/../application/index\view\common\footer.html";i:1517308120;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>货源列表(找库货源)</title>
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
        #paging1{text-align: center;}
        .pagination>li>a, .pagination>li>span{
            color: #333;
            background: none;
        }
        .pagination>li>a:hover, .pagination>li>span:hover{
            background: none;border:1px solid #2562b4; color: #2562b4;
        }
        .simple-pagination ul{
            display: inline-block;
            vertical-align: middle;
        }
        .pagination li .dots:hover{border:1px solid #ddd; color: #333;}
    </style>
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
<div class="personCenter goods_info">
    <div class="wrap-1200 clearfix" style="padding: 40px 0 45px 0;">
    	<!-- 左侧开始 -->
        <div class="person-left fl">
    <div class="photo">
        <img src="__PUBLIC__/images/default.png" alt="">
        <p><?php echo session('username')?></p>
        <p style="margin-top: 4px;">
        
        <?php if($userres['check_state'] == '1'): ?>
        <span>已认证</span>
        <?php else: ?>
        <span>未认证</span>
        <?php endif; if($userres['is_company'] == '0'): ?>
        <span>非自营</span>
        <?php else: ?>
        <span>自营</span>
        <?php endif; ?>
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
    <?php if($userres['check_state'] == '1'): ?>
        <dl>
            <dt class=""><i class="glyphicon glyphicon-th-list"></i>&nbsp;我的订单</dt>
            <div class="hideleft" style="display:none;">
                <dd class="person-dd ">
                    <?php if($userres['type'] == '物流公司'): ?>
                        <a href="<?php echo url('Personalcenterorder/myorder_findcar'); ?>">我的抢单</a>
                    <?php elseif($userres['type'] == '车主'): ?>
                        <a href="<?php echo url('Personalcenterorder/myorder_findgoodscar'); ?>">我的抢单</a>
                    <?php elseif($userres['type'] == '库主'): ?>
                        <a href="<?php echo url('Personalcenterorder/myorder_findgoodsku'); ?>">我的抢单</a>
                    <?php else: ?>
                        <a href="<?php echo url('Personalcenterorder/myorder_findcar'); ?>">我的抢单</a>
                    <?php endif; ?>
                </dd>
            
                <dd class="person-dd ">
                    <?php if($userres['type'] == '物流公司'): ?>
                        <a href="<?php echo url('Personalcenterorder/acceptorder_goodscar'); ?>">接受订单</a>
                    <?php elseif($userres['type'] == '车主'): ?>
                        <a href="<?php echo url('Personalcenterorder/acceptorder_goodscar'); ?>">接受订单</a>
                    <?php elseif($userres['type'] == '库主'): ?>
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
        <?php if($userres['is_company'] == '1'): ?>
            <dl style="display: none;">
                <dt class=""><i class="glyphicon glyphicon-th-large"></i>&nbsp;托运管理</dt>
                <div class="hideleft">
                    <dd class="person-dd active">
                        <a href="<?php echo url('Entrust/receive_entrust'); ?>">接受托运<i class="glyphicon glyphicon-chevron-right arrow" aria-hidden="true"></i></a>
                    </dd>
                </div>
            </dl>
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
        <?php else: if($userres['type'] == '物流公司'): ?>
                <dl>
                    <dt class=""><i class="glyphicon glyphicon-th-large"></i>&nbsp;托运管理</dt>
                    <div class="hideleft">
                        <dd class="person-dd active">
                            <a href="<?php echo url('Entrust/myentrust'); ?>">我的托运<i class="glyphicon glyphicon-chevron-right arrow" aria-hidden="true"></i></a>
                        </dd>
                    </div>
                </dl>
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
            <?php elseif($userres['type'] == '车主'): ?>
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
            <?php elseif($userres['type'] == '库主'): ?>
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
                    <dt class=""><i class="glyphicon glyphicon-th-large"></i>&nbsp;托运管理</dt>
                    <div class="hideleft">
                        <dd class="person-dd active">
                            <a href="<?php echo url('Entrust/myentrust'); ?>">我的托运<i class="glyphicon glyphicon-chevron-right arrow" aria-hidden="true"></i></a>
                        </dd>
                    </div>
                </dl>
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
            <?php endif; endif; else: endif; ?>     
</div>
        <!-- 左侧结束 -->
       
        <!-- 右侧开始 -->
        <div class="person-right fr mjy-add mj-pro0">
            <div class="mj-adds clearfix mj-addNav">
                 <a href="<?php echo url('Personalcenter/goodslist_car'); ?>"><p class="p1">找车货源</p></a>
                 <a href="<?php echo url('Personalcenter/goodslist_ku'); ?>"><p class="p2 active">找库货源</p></a>
            </div>
            <!-- 找库货源 -->
            <div class="m-infortabBack form1" >
                <div id="m-infonavCont">
                    <div class="m-infonavContent2 mj-xlxx">
                        <form action="<?php echo url('Personalcenter/goodslist_ku'); ?>" method="get" class="searchform">
                            <div class="m-inforForm clearfix" style="margin-bottom: 20px;">
                                <div class="fl m30">
                                    <p class="fl">所需仓库地址：</p>
                                    <div class="fr ku">
                                        <input name="whaddress" id="name" class="xm siteinput" type="text" value="<?php echo !empty($whaddress)?$whaddress : '';; ?>" placeholder="请选择所需仓库地" style="width: 210px;">
                                        <div class="xiala">
                                            <h1><span>确认</span></h1>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="fl m-inforForm">
                                    <div class="fl m30">
                                        <p class="fl">货物名称：</p>
                                        <div class="fr">
                                            <input name="goods_name" id="name" class="xm siteinput" type="text" value="<?php echo !empty($goods_name)?$goods_name : '';; ?>" placeholder="请输入货物名称" style="width: 210px;">
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div style="float: right" class="search">
                                    <input type="submit" value="搜索" class="fl u-aNext u-aNext2" />
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="m-inforForm clearfix moreshow" style="display: block; margin-bottom: 20px;">
                                <div class="clearfix fl m30 search_margin">
                                    <p class="fl">货物类型：</p>
                                    <div class="fr">
                                        <select name="goods_type" class="siteselect" style="width: 210px;">
                                            <option value="">--请输入货物类型--</option>
                                                <?php if(is_array($goods_type) || $goods_type instanceof \think\Collection || $goods_type instanceof \think\Paginator): $i = 0; $__LIST__ = $goods_type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v1): $mod = ($i % 2 );++$i;?>
                                                    <option value="<?php echo $v1['id']; ?>" <?php if($goods_type2 == $v1['id']): ?> selected="selected" <?php endif; ?> ><?php echo $v1['typename']; ?></option>
                                                <?php endforeach; endif; else: echo "" ;endif; ?>
                                        </select>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="clearfix fl m30 search_margin">
                                    <p class="fl">货物规格：</p>
                                    <div class="fl">
                                        <select name="standard_ton" class="siteselect" style="width: 105px;">
                                            <option >不限</option>
                                            <option value="5" <?php if($standard_ton == '5'): ?> selected="selected"<?php endif; ?> >5吨以下</option>
                                            <option value="10" <?php if($standard_ton == '10'): ?> selected="selected"<?php endif; ?> >5吨~10吨</option>
                                            <option value="15" <?php if($standard_ton == '15'): ?> selected="selected"<?php endif; ?> >10吨~15吨</option>
                                            <option value="20" <?php if($standard_ton == '20'): ?> selected="selected"<?php endif; ?> >15吨~20吨</option>
                                            <option value="25" <?php if($standard_ton == '25'): ?> selected="selected"<?php endif; ?> >20吨以上</option>
                                        </select>
                                    </div>
                                    <div class="fl">
                                        <select name="standard_square" class="siteselect" style="width: 105px;">
                                            <option >不限</option>
                                            <option value="8" <?php if($standard_square == '8'): ?> selected="selected"<?php endif; ?> >8方以下</option>
                                            <option value="15" <?php if($standard_square == '15'): ?> selected="selected"<?php endif; ?> >8方~15方</option>
                                            <option value="30" <?php if($standard_square == '30'): ?> selected="selected"<?php endif; ?> >15方~30方</option>
                                            <option value="40" <?php if($standard_square == '40'): ?> selected="selected"<?php endif; ?> >30方以上</option>
                                        </select>
                                    </div>
                                    <div class="clearfix"></div>
                                </div> 
                                <!-- <div class="fl m30 search_margin clearfix">
                                    <p class="fl">货源状态：</p>
                                    <div style="display: inline-block;">
                                        <select name="librarylist" class="siteselect">
                                            <option value="0">不限</option>
                                            <option value="1">平堆库</option>
                                            <option value="2">货架库</option>
                                            <option value="3">自动化库</option>
                                            <option value="4">保税库</option>
                                        </select>
                                    </div>
                                </div> -->  
                                <div class="clearfix fl m30 search_margin clearfix">
                                    <p class="fl">入库时间：</p>
                                    <div class="fr">
                                        <input  onblur="mzReg(this)" name="enter_wh_time" class="xm siteinput ECalendar" type="text" placeholder="请选择入库时间" value="<?php echo !empty($enter_wh_time)?$enter_wh_time : '';; ?>" style="width: 210px;" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd'})">
                                    </div>
                                    <div class="clearfix"></div>
                                </div>                      
                            </div>
                            <!-- <div class="m-inforForm clearfix moreshow" style="display: block;">
                                <div class="fl m-inforForm clearfix" style="display: inline-block;">
                                    <div class="clearfix fl m30">
                                        <p class="fl">入库时间：</p>
                                        <div style="display: inline-block;">
                                            <input id="ECalendar_case1" onblur="mzReg(this)" name="enter_wh_time" class="xm siteinput ECalendar" type="text" placeholder="请选择入库时间" value="<?php echo !empty($enter_wh_time)?$enter_wh_time : '';; ?>" style="width: 210px;">
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </form>
                        <div class="czh-Bottom m-formBottom clearfix timeTop f14 cz-active " style="padding-top: 0px;">
                            <table style="min-width:960px;">
                                <tbody>
                                    <tr class="ky-ddTab">
                                        <td>所需冷库地</td>
                                        <td>货物描述</td>
                                        <td>货物类型</td>
                                        <td>需要库温</td>
                                        <td>存储费用</td>
                                        <td>入库时间</td>
                                        <td>库存时间</td>
                                        <td>联系方式</td>   
                                        <td>审核状态</td>
                                        <td>操作</td>
                                    </tr> 
                                    <?php if(is_array($goodsres2) || $goodsres2 instanceof \think\Collection || $goodsres2 instanceof \think\Paginator): $i = 0; $__LIST__ = $goodsres2;if( count($__LIST__)==0 ) : echo "<p class='nulltext'>暂时没有数据</p>" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                    <tr class="ky-ddKK ky-ddKK1 even">
                                        <td class="zc-lastTr " style="width:14%;">
                                            <div class="skin-list3">
                                                <p class="ellipsis" title="<?php echo $vo['whaddress']; ?>"> 
                                                &nbsp;<?php echo $vo['whaddress']; ?>
                                                </p>
                                            </div>
                                        </td>
                                        <td class="zc-lastTr " style="width:13%;">
                                            <div class="skin-list2">
                                                <p class="ellipsis" title="<?php echo $vo['goods_name']; ?> "><?php echo $vo['goods_name']; ?></br><?php echo $vo['standard_ton']; ?>吨&nbsp;<?php echo $vo['standard_square']; ?>方</p>
                                            </div>
                                        </td>
                                        <td class="zc-lastTr " style="width:10%;">
                                            <div class="skin-list2">
                                                <p class="ellipsis">
                                                    <?php if(is_array($goods_type) || $goods_type instanceof \think\Collection || $goods_type instanceof \think\Paginator): $i = 0; $__LIST__ = $goods_type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v3): $mod = ($i % 2 );++$i;if($v3['id'] == $vo['goods_type']): ?>
                                                            <?php echo $v3['typename']; endif; endforeach; endif; else: echo "" ;endif; ?>   
                                               </p>
                                            </div>
                                        </td>
                                        <td class="zc-lastTr " style="width:11%;">
                                            <div class="skin-list2">
                                                <p class="ellipsis">
                                                    <?php if(is_array($need_wh_temperature) || $need_wh_temperature instanceof \think\Collection || $need_wh_temperature instanceof \think\Paginator): $i = 0; $__LIST__ = $need_wh_temperature;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v4): $mod = ($i % 2 );++$i;if($v4['id'] == $vo['need_wh_temperature']): ?>
                                                            <?php echo $v4['typename']; endif; endforeach; endif; else: echo "" ;endif; ?>   
                                               </p>
                                            </div>
                                        </td>
                                        <td class="" style="width:8%;">
                                            <div class="skin-list1">
                                                <p class="">
                                                <?php echo $vo['store_price']; ?>&nbsp;元
                                                </p>
                                            </div>
                                        </td>
                                        <td class="" style="width:8%;">
                                            <div class="skin-list1">
                                                <p class="">
                                                <?php echo $vo['enter_wh_time']; ?><!-- 入库时间 -->
                                                </p>
                                            </div>
                                        </td>
                                        <td class="" style="width:8%;">
                                            <div class="skin-list1">
                                                <p class="">
                                                <!-- 库存时间 -->
                                                <?php if(is_array($storage_time) || $storage_time instanceof \think\Collection || $storage_time instanceof \think\Paginator): $i = 0; $__LIST__ = $storage_time;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v2): $mod = ($i % 2 );++$i;if($v2['id'] == $vo['storage_time']): ?>
                                                        <?php echo $v2['typename']; endif; endforeach; endif; else: echo "" ;endif; ?>
                                                </p>
                                            </div>
                                        </td>
                                        <td class="" style=" width:10%;">
                                            <div class="skin-list1">
                                                <p class="ellipsis"><?php echo $vo['contact']; ?></br><?php echo $vo['phone']; ?></p>
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
                                                        <?php else: ?>
                                                        <p style="color: red;">(已被下单)</p>
                                                        <?php endif; else: ?>
                                                        <p style="color: red;">审核未通过</p>
                                                    <?php endif; ?>
                                                </p>
                                            </div>
                                        </td>
                                        <td class="skin-border" style="width:8%;">
                                            <div class="zc-positon">
                                                <a href="<?php echo url('Personalcenter/goods_ku_detail',array('id'=>$vo['id'])); ?>" class="btn1" title="详情" datatype="1"><span class="glyphicon glyphicon-eye-open"></span></a>
                                                <?php if($vo['order_state'] == '1'): ?>
                                                    <a href="<?php echo url('Personalcenter/goodslist_ku_revise',array('id'=>$vo['id'])); ?>" class="btn1" title="修改" datatype="1"><span class="fa fa-pencil"></span></a> 
                                                    <a href="<?php echo url('Personalcenter/goodslist_ku_del1',array('id'=>$vo['id'])); ?>" title="删除" onClick="return confirm('确定要删除吗？')" class="btn1" ><span class="fa fa-trash-o"></span></a>  
                                                <?php else: ?>
                                                    <a href="<?php echo url('Personalcenter/goodslist_ku_del1',array('id'=>$vo['id'])); ?>" title="删除" onClick="return confirm('确定要删除吗？')" class="btn1" ><span class="fa fa-trash-o"></span></a>
                                                <?php endif; ?>        
                                            </div>
                                        </td>
                                    </tr>
                                    <?php endforeach; endif; else: echo "<p class='nulltext'>暂时没有数据</p>" ;endif; ?>                           
                                </tbody>
                            </table>
                             <style type="text/css">
                                .simple-pagination ul{
                                    display: inline-block;
                                    vertical-align: middle;
                                }
                            </style>
                            <div class="pages">
                                <div id="paging1" class="page light-theme simple-pagination" style="text-align: center;" >
                                    <?php echo $goodsres2->render(); ?>
                                    <div class="pageinput" style="">
                                        <input type="hidden" name="current_page" value="<?php echo $current_page; ?>">
                                        <input type="hidden" name="totalpage" value="<?php echo $totalpage; ?>">
                                        <p><p class="yeshudes">当前第<i><?php echo $current_page; ?></i>页/共<i><?php echo $totalpage; ?></i>页</p>转到&nbsp;<input class="tiaozhuanye" type="text" name="">&nbsp;页&nbsp;<a class="tiaozhuan" href="javascript:;" style="float: none;">确定</a></p>

                                    </div>
                                </div>
                            </div> 

                            <!-- <div class="pages">
                                <div id="paging1" class="page light-theme simple-pagination" style="text-align: center;" >
                                    <?php echo $goodsres2->render(); ?>
                                </div>
                            </div> -->
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
    <p><span style="color: #eee">版权所有</span>&nbsp;郑州国际陆港开发建设有限公司 <span style="color: #eee; margin-left: 20px;">备案号：</span>&nbsp;<a style="color: #fff;" target="_blank" href="http://www.miibeian.gov.cn">豫ICP备17007279号</a>
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
    $('.nav_wrap').find('li').removeClass('now');
    $('.nav_wrap').children('li').eq(0).addClass('now');
    $('.person-left dl').find('.hideleft').hide();
    $('.person-left dl').eq(3).find('.hideleft').show();
    $('.person-left dl').find('dt').removeClass('active');
    $('.person-left dl').eq(3).find('dt').addClass('active');
    $('.person-left dl').eq(3).find('.hideleft').find('dd').eq(1).addClass('active'); 
    $('.nulltext').parents('.czh-Bottom').find('.ky-ddTab').hide();

    $('.tiaozhuan').click(function(){
        var a=parseInt($('.tiaozhuanye').val());
        var totalpage=parseInt($("input[name='totalpage']").val());
        var whaddress=$("input[name='whaddress']").val();
        var goods_name=$("input[name='goods_name']").val();
        var goods_type=$("select[name='goods_type']").val();
        var standard_ton=$("select[name='standard_ton']").val();
        var standard_square=$("select[name='standard_square']").val();
        var enter_wh_time=$("input[name='enter_wh_time']").val();
        if(a<=0){
            a=1;
        }
        if(a>totalpage){
            a=totalpage;
        }
        $(this).attr('href','/transport/public/index/personalcenter/goodslist_ku.html?whaddress='+whaddress+'&goods_name='+goods_name+'&goods_type='+goods_type+'&standard_ton='+standard_ton+'&standard_square='+standard_square+'&enter_wh_time='+enter_wh_time+'&page='+a);
    })
    var totalpage=parseInt($("input[name='totalpage']").val());
    var current_page=parseInt($("input[name='current_page']").val());
    $('.tiaozhuanye').val(current_page+1);
    if(current_page+1>totalpage){
        $('.tiaozhuanye').val(totalpage);
    }

</script>
</body>
</html>