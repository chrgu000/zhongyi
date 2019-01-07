<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:93:"E:\WWW\transport\public/../application/index\view\personalcenterorder\order_path_detail1.html";i:1508896141;s:68:"E:\WWW\transport\public/../application/index\view\common\header.html";i:1508989788;s:66:"E:\WWW\transport\public/../application/index\view\common\left.html";i:1509590134;s:68:"E:\WWW\transport\public/../application/index\view\common\footer.html";i:1509431569;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>订单详情</title>
    <link rel="icon" href="" type="image/x-icon"/>
    <link rel="stylesheet" href="../../../../static/index/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../../static/index/css/font-awesome.min.css">
    <link rel="stylesheet" href="__PUBLIC__/css/higo.css">
    <link rel="stylesheet" href="__PUBLIC__/css/city-picker.css">
    <link rel="stylesheet" href="__PUBLIC__/css/style.css">
    <style type="text/css">
        .personCenter{
            min-height: 800px;
        }
        .goods_detail table th{
            background: #fff;
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
                            <em>网上托运</em>
                        </a>
                    <?php else: if($user_u['check_state'] != '1'): ?>
                            <a href="<?php echo url('Personalcenter/personalcenter_index'); ?>" onClick="return confirm('请您先认证！')">
                                <em>网上托运</em>
                            </a>
                        <?php else: ?>
                            <a href="<?php echo url('Entrust/entrust'); ?>">
                                <em>网上托运</em>
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
                        <li><a href="<?php echo url('Internation/internationmoney'); ?>">国际订舱</a></li>
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
        <?php else: if($vo['type'] == '物流公司'): ?>
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
            <?php endif; endif; else: endif; endforeach; endif; else: echo "" ;endif; ?>       
</div>
    <!-- 左侧结束 -->
       
    <!-- 右侧开始 -->
    <div class="person-right fr mjy-add mj-pro0">
      <div class="m-infortabBack">
        <div id="m-infonavCont">
          <div class="m-infonavContent2 mj-xlxx goods_detail" style="background: #fff">
            <style type="text/css">
              .orderdetail{
                  padding:20px;
                  padding-bottom: 10px;
              }
              .orderdetail h3{
                  font-size: 20px;
                  line-height: 30px;
                  margin-bottom: 20px;
              }
              .orderdetail p{
                  font-size: 14px;
              }
              .orderdetail_tit{
                  padding:10px;
                  text-align: center;
                  border-bottom: 1px dashed #337cc9;
                  font-size: 18px;
                  margin-bottom: 20px;
              }
            </style>
            <div class="orderdetail">
              <h3>
                <span style="float: left;">订单详情</span>
                <a class="back" href="<?php echo url('Personalcenterorder/myorder_findcar'); ?>">返回</a>
                <div class="clearfix"></div>
              </h3>
              <?php if(is_array($order_pathres) || $order_pathres instanceof \think\Collection || $order_pathres instanceof \think\Paginator): $i = 0; $__LIST__ = $order_pathres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v1): $mod = ($i % 2 );++$i;?>
              <p>
                <span>订单编号：&nbsp;<?php echo $v1['order_number']; ?></span>&nbsp;&nbsp;&nbsp;&nbsp;
                <span style="float: right;">订单状态：
                  <?php if($v1['pay_state'] == '1'): ?>
                    订单待确认
                    <?php elseif($v1['pay_state'] == '2'): ?>
                      订单已确认，待付款
                    <?php elseif($v1['pay_state'] == '3'): ?>
                      订单已支付，待发车
                    <?php elseif($v1['pay_state'] == '4'): ?>
                      已发车，货物运输中
                    <?php elseif($v1['pay_state'] == '5'): ?>
                      订单交易完成
                    <?php elseif($v1['pay_state'] == '6'): ?>
                      订单交易取消
                    <?php else: ?>
                      订单交易取消，退款中
                  <?php endif; ?>

                </span>

              </p>
              <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
            <table style="max-width: 970px; width: 100%">
              <thead>
                <th>货主信息</th>
                <th>车主信息</th>
              </thead>
              <tbody>
                <tr>
                  <!-- 货主信息 -->
                    <td>
                      <?php if(is_array($userres2) || $userres2 instanceof \think\Collection || $userres2 instanceof \think\Paginator): $i = 0; $__LIST__ = $userres2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v2): $mod = ($i % 2 );++$i;?>
                        <ul class="u-inforUl detail">
                          <li class="orderdetail_tit">货主基本信息</li>
                          <li class="clearfix"><a>货主姓名：</a>
                            <span>
                              <?php if($v2['company_name'] != ''): ?>
                                <?php echo $v2['company_name']; else: ?>
                                  <?php echo $v2['real_name']; endif; ?>  
                            </span>
                          </li>
                          <li class="clearfix"><a>联系方式：</a><span><?php echo $v2['username']; ?></span></li>
                          <li class="clearfix"><a>认证类型： </a>
                            <span>
                              <?php if(is_array($type_id) || $type_id instanceof \think\Collection || $type_id instanceof \think\Paginator): $i = 0; $__LIST__ = $type_id;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v3): $mod = ($i % 2 );++$i;if($v3['id'] == $v2['type_id']): ?>
                                  <?php echo $v3['typename']; endif; endforeach; endif; else: echo "" ;endif; ?>
                              &nbsp;
                              <?php if($v2['type'] != ''): ?>
                                (<?php echo $v2['type']; ?>)
                                <?php else: endif; ?>
                            </span>
                          </li>
                        </ul>
                      <?php endforeach; endif; else: echo "" ;endif; if(is_array($goodsres) || $goodsres instanceof \think\Collection || $goodsres instanceof \think\Paginator): $i = 0; $__LIST__ = $goodsres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v4): $mod = ($i % 2 );++$i;?>
                        <ul class="u-inforUl detail">
                          <li class="orderdetail_tit">货源详情</li>
                          <li class="clearfix"><a>货物名称：</a><span><?php echo $v4['goods_name']; ?></span></li>
                          <li class="clearfix"><a>货物类型：</a>
                            <span>
                              <?php if(is_array($goods_type) || $goods_type instanceof \think\Collection || $goods_type instanceof \think\Paginator): $i = 0; $__LIST__ = $goods_type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v5): $mod = ($i % 2 );++$i;if($v5['id'] == $v4['goods_type']): ?>
                                  <?php echo $v5['typename']; endif; endforeach; endif; else: echo "" ;endif; ?>
                            </span>
                          </li>
                          <?php if($v4['low_temperature'] != ''): ?>
                            <li class="clearfix"><a>温度要求：</a>
                              <span>
                                <?php echo $v4['low_temperature']; ?>℃~<?php echo $v4['high_temperature']; ?>℃
                              </span>
                            </li>
                            <?php else: endif; ?>
                          <li class="clearfix"><a>货物规格：</a>
                            <span>
                              <?php echo $v4['standard_ton']; ?>吨；<?php echo $v4['standard_square']; ?>方
                            </span>
                          </li>
                          <li class="clearfix"><a>发布时间：</a><span><?php echo $v4['time']; ?></span></li>
                          <li class="clearfix"><a>订单金额：</a>
                            <span>
                              <?php echo $order_pathres[0]['order_money']; ?>元
                            </span>
                          </li>
                          <li class="clearfix"><a>支付方式:</a>
                            <span>
                              <?php if(is_array($payment_mode) || $payment_mode instanceof \think\Collection || $payment_mode instanceof \think\Paginator): $i = 0; $__LIST__ = $payment_mode;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v6): $mod = ($i % 2 );++$i;if($v6['id'] == $v4['payment_mode']): ?>
                                  <?php echo $v6['typename']; endif; endforeach; endif; else: echo "" ;endif; ?>
                            </span>
                          </li>
                          <li class="clearfix"><a>是否需要发票:</a><span><?php echo $v4['invoice']; ?></span></li>
                          <li class="clearfix"><a>装车时间：</a><span><?php echo $v4['start_loadingtime']; ?>——<?php echo $v4['end_loadingtime']; ?></span></li>
                          <li class="clearfix"><a>到货时间：</a><span><?php echo $v4['start_arrivetime']; ?>——<?php echo $v4['end_arrivetime']; ?></span></li>
                        </ul>
                        <ul class="u-inforUl detail">
                          <li class="orderdetail_tit">配送信息</li>
                          <?php if($v4['whaddress'] != ''): ?>
                            <li class="clearfix"><a>所需冷库地址：</a>
                              <span>
                                <?php echo $v4['whaddress']; ?>
                              </span>
                            </li>
                            <li class="clearfix"><a>所需冷库详细地址:</a><span><?php echo $v4['whaddress_detail']; ?></span></li>
                            <?php else: ?>
                              <li class="clearfix"><a>始发地： </a><span><?php echo $v4['starting_address']; ?></span></li>
                              <li class="clearfix"><a>始发地详细地址： </a><span><?php echo $v4['startingaddress_detail']; ?></span></li>
                              <li class="clearfix"><a>目的地： </a><span><?php echo $v4['destination']; ?></span></li>
                              <li class="clearfix"><a>目的地详细地址： </a><span><?php echo $v4['destination_detail']; ?></span></li>
                          <?php endif; if($v4['storage_time'] != ''): ?>
                            <li class="clearfix"><a>预计库存时间：</a>
                              <span>
                                <?php if(is_array($storage_time) || $storage_time instanceof \think\Collection || $storage_time instanceof \think\Paginator): $i = 0; $__LIST__ = $storage_time;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v7): $mod = ($i % 2 );++$i;if($v7['id'] == $v4['storage_time']): ?>
                                    <?php echo $v7['typename']; endif; endforeach; endif; else: echo "" ;endif; ?>
                              </span>
                            </li>
                            <?php else: endif; ?>
                        </ul>
                        <ul class="u-inforUl detail">
                          <li class="orderdetail_tit">联系信息</li>
                          <?php if($v4['goods_photo'] != ''): ?>
                          <li class="clearfix"><a>货物实拍图：</a><span><img src="__IMG__<?php echo $v4['goods_photo']; ?>" style="width: 200px;height: 200px" /></span></li>
                          <?php else: endif; ?>
                          <li class="clearfix"><a>货物联系人：</a><span><?php echo $v4['contact']; ?></span></li>
                          <li class="clearfix"><a>货物联系电话：</a><span><?php echo $v4['phone']; ?></span></li>
                          <li class="clearfix"><a>备注：</a><span><?php echo $v4['goods_remark']; ?></span></li>
                        </ul>
                      <?php endforeach; endif; else: echo "" ;endif; ?>
                    </td>

                  <!-- 车主信息 -->
                    <td>
                    <?php if(is_array($userres3) || $userres3 instanceof \think\Collection || $userres3 instanceof \think\Paginator): $i = 0; $__LIST__ = $userres3;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($i % 2 );++$i;?>
                      <ul class="u-inforUl detail">
                        <li class="orderdetail_tit">车主基本信息</li>
                        <li class="clearfix"><a>承运方姓名：</a>
                          <span>
                            <?php if($vo1['company_name'] != ''): ?>
                              <?php echo $vo1['company_name']; else: ?>
                                <?php echo $vo1['real_name']; endif; ?>
                          </span>
                        </li>
                        <li class="clearfix"><a>承运方联系方式：</a><span><?php echo $vo1['username']; ?></span></li>
                        <li class="clearfix"><a>认证类型： </a>
                          <span>
                            <?php if(is_array($type_id) || $type_id instanceof \think\Collection || $type_id instanceof \think\Paginator): $i = 0; $__LIST__ = $type_id;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo3): $mod = ($i % 2 );++$i;if($vo3['id'] == $vo1['type_id']): ?>
                                <?php echo $vo3['typename']; endif; endforeach; endif; else: echo "" ;endif; ?>
                            &nbsp;
                            <?php if($vo1['type'] != ''): ?>
                              (<?php echo $vo1['type']; ?>)
                              <?php else: endif; ?>
                          </span>
                        </li>
                      </ul>
                    <?php endforeach; endif; else: echo "" ;endif; if(is_array($pathres) || $pathres instanceof \think\Collection || $pathres instanceof \think\Paginator): $i = 0; $__LIST__ = $pathres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($i % 2 );++$i;?>
                      <ul class="u-inforUl detail">
                        <li class="orderdetail_tit">车源信息</li>
                        <li class="clearfix"><a>始发地：</a><span><?php echo $vo2['startsite']; ?></span></li>
                        <li class="clearfix"><a>目的地：</a><span><?php echo $vo2['endsite']; ?></span></li>
                        <li class="clearfix"><a>常用车型：</a><span><?php echo $vo2['vehicle_type']; ?></span></li>
                        <li class="clearfix"><a>常用车长：</a><span><?php echo $vo2['vehicle_length']; ?></span></li>
                      </ul>
                      <ul class="u-inforUl detail">
                        <li class="orderdetail_tit">联系信息</li>
                        <li class="clearfix"><a>联系人：</a><span><?php echo $vo2['linkman']; ?></span></li>
                        <li class="clearfix"><a>联系方式：</a><span><?php echo $vo2['linkphone']; ?></span></li>
                      </ul>
                      <?php endforeach; endif; else: echo "" ;endif; ?>
                      
                    </td>
                  
                </tr>
              </tbody>
            </table>
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
<div class="kf">
    <a style="outline: none;" href="http://42.228.11.187/chat/index.php?nick=<?php echo $username; ?>" target="_blank">
        <img src="__PUBLIC__/images/helper03.png">
        <p>在线客服</p>
    </a>
</div>
<script type="text/javascript" src="__PUBLIC__/js/jquery.min.js"></script>
<script src="__PUBLIC__/js/auth.js"></script>
<script src="__PUBLIC__/js/sitepicker.js"></script>
<script type="text/javascript">
    $('.person-left dl dt').click(function(){
        $('.person-left dl dt').removeClass('active');
        $(this).addClass('active');
        $('.person-left dl .hideleft').hide();
        $(this).next('.hideleft').show();
    });
    $('.person-left dl').find('.hideleft').hide();
    $('.person-left dl').eq(1).find('.hideleft').show();
    $('.person-left dl').find('dt').removeClass('active');
    $('.person-left dl').eq(1).find('dt').addClass('active');
    $('.nav_wrap').find('li').removeClass('now');
    $('.nav_wrap').children('li').eq(0).addClass('now');
</script>
</body>
</html>