<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:75:"E:\wamp\www\transport\public/../application/index\view\goods\goods_car.html";i:1507540639;s:73:"E:\wamp\www\transport\public/../application/index\view\common\header.html";i:1506762234;s:73:"E:\wamp\www\transport\public/../application/index\view\common\footer.html";i:1505989080;}*/ ?>
﻿<!DOCTYPE html>
<html lang="en">
<head class="skin-head">
	<meta charset="UTF-8">
	<title>货源信息（找车货源）</title>	
	<link rel="icon" href="" type="image/x-icon"/>
	<link href="../../static/index/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../../static/index/css/font-awesome.min.css">
	<link rel="stylesheet" href="__PUBLIC__/css/city-picker.css"> 
	<link rel="stylesheet"  href="__PUBLIC__/css/higo.css" />
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/style.css">
    <!-- 遮罩 -->
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/mask.css">
    <!-- 分页样式 -->
	<link type="text/css" rel="stylesheet" href="__PUBLIC__/css/page.css"/>
	<script type="text/javascript" src="__PUBLIC__/js/jquery.simplePagination.js"></script>
	<style type="text/css">
		.goods_info .u-aNext1{
			display: block;
			width: 80px;
			margin: 0 auto;
		}
	</style>
</head>
<body style="position: relative;">
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


<!-- contanier-->
<div class="contanier goods_info">
	<div class="mine wrap-1200">
	    <div class="bt-tab clearfix">
		    <a href="">
	        	<a href="<?php echo url('Goods/goods_car'); ?>"><p class="fl myActive">车找货</p></a>
	        	<a href="<?php echo url('Goods/goods_ku'); ?>"><p class="fl">库找货</p></a>
	        </a>
	    </div>
	</div>
	<form action="<?php echo url('Goods/goods_car'); ?>" method="get">
	<div class="wrap-1200 goods_list">
		<div class="m-infortabBack">
			<div id="m-infonavCont">
				<div class="m-infonavContent2 mj-xlxx">
						<div class="m-inforForm clearfix" style="margin-bottom: 20px;">
							<div class="fl m-inforForm clearfix" style="display: inline-block;">
								<div class="clearfix fl m30">
									<p class="fl">货物名称：</p>
									<div class="fr">
					                    <input name="goods_name" id="name" class="xm siteinput" type="text" value="<?php echo !empty($goods_name)?$goods_name : '';; ?>" placeholder="请输入货物名称" style="width: 210px;">
					                </div>
					                <div class="clearfix"></div>
								</div>
							</div>
							<div class="clearfix fl m30">
								<p class="fl">始&nbsp;发&nbsp;地&nbsp;：</p>
			                    <div class="fr ku">
		                            <input  name="starting_address" id="name" class="xm" type="text" placeholder="请输入始发地" style="width: 200px;">
		                            <div class="xiala">
		                                <h1><span>确认</span></h1>
		                            </div>
		                        </div>
		                        <div class="clearfix"></div>
							</div>
							<div class="clearfix fl m30">
								<p class="fl">目&nbsp;的&nbsp;地&nbsp;&nbsp;：</p>
				                <div class="fr ku1">
		                            <input  name="destination" id="name" class="xm" type="text" placeholder="请输入目的地" style="width: 200px;">
		                            <div class="xiala1">
		                                <h1><span>确认</span></h1>
		                            </div>
		                        </div> 
		                        <div class="clearfix"></div>
							</div>
							<div style="float: right" class="search">
								<a href="#" class="more"><span class="glyphicon glyphicon-chevron-down"></span>&nbsp;更多</a>
								<input type="submit" value="搜索" class="fl u-aNext u-aNext2" />
							</div>
							<div class="clearfix"></div>
							
						</div>
						<div class="m-inforForm clearfix moreshow" style="margin-bottom: 20px;">
							<div class="clearfix fl m30 search_margin">
								<p class="fl">货物规格：</p>
								<div class="fl">
				                   	<select name="standard_ton" class="siteselect" style="width: 103px;">
				                   		<option >不限</option>
				                   		<option value="5">5吨以下</option>
				                   		<option value="10">5吨~10吨</option>
				                   		<option value="15">10吨~15吨</option>
				                   		<option value="20">15吨~20吨</option>
				                   		<option value="25">20吨以上</option>
				                   	</select>
				                </div>
				                <div class="fl">
				                   	<select name="standard_square" class="siteselect" style="width: 103px;">
				                   		<option >不限</option>
				                   		<option value="8">8方以下</option>
				                   		<option value="15">8方~15方</option>
				                   		<option value="30">15方~30方</option>
				                   		<option value="40">30方以上</option>
				                   	</select>
				                </div>
				                <div class="clearfix"></div>
							</div>
							<div class="clearfix fl m30 search_margin">
								<p class="fl">所需车长：</p>
								<div class="fr">
									<select name="car_length" class="siteselect"  style="width: 200px;"  >
									    <option value="">--请输入所需车长--</option>
										<?php if(is_array($car_length) || $car_length instanceof \think\Collection || $car_length instanceof \think\Paginator): $i = 0; $__LIST__ = $car_length;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v5): $mod = ($i % 2 );++$i;?>
										<option value="<?php echo $v5['id']; ?>"><?php echo $v5['typename']; ?></option>
										<?php endforeach; endif; else: echo "" ;endif; ?>
									</select>
				                </div>
				                <div class="clearfix"></div>
							</div>
							<div class="clearfix fl m30 search_margin">
								<p class="fl">所需车型：</p>
								<div class="fr">
				                    <select name="car_type" class="siteselect"  style="width: 202px;"  >
									    <option value="">--请输入所需车型--</option>
										<?php if(is_array($car_type) || $car_type instanceof \think\Collection || $car_type instanceof \think\Paginator): $i = 0; $__LIST__ = $car_type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v1): $mod = ($i % 2 );++$i;?>
										<option value="<?php echo $v1['id']; ?>"><?php echo $v1['typename']; ?></option>
										<?php endforeach; endif; else: echo "" ;endif; ?>
									</select>
				                </div>
				                <div class="clearfix"></div>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="m-inforForm clearfix moreshow" style="margin-bottom: 20px;">
							<!-- <div class="clearfix fl m30 search_margin">
								<p class="fl">支付方式：</p>
								<div class="fr">
									<select name="payment_mode" class="siteselect"  style="width: 210px;"  >
									    <option value="">--请输入支付方式--</option>
										<?php if(is_array($payment_mode) || $payment_mode instanceof \think\Collection || $payment_mode instanceof \think\Paginator): $i = 0; $__LIST__ = $payment_mode;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v2): $mod = ($i % 2 );++$i;?>
										<option value="<?php echo $v2['id']; ?>"><?php echo $v2['typename']; ?></option>
										<?php endforeach; endif; else: echo "" ;endif; ?>
									</select>
				                </div>
				                <div class="clearfix"></div>
							</div> -->
							<div class="clearfix fl m30 search_margin">
								<p class="fl">用户分类：</p>
								<div class="fr">
				                   	<select name="is_company" class="siteselect" style="width: 210px;">
				                   		<option >不限</option>
				                   		<option value="1">自营用户</option>
				                   		<option value="0">非自营用户</option>
				                   	</select>
				                </div>
				                <div class="clearfix"></div>
							</div>
							<div class="clearfix fl m30 search_margin">
								<p class="fl">装车时间：</p>
								<div class="fr">
				                    <input onblur="mzReg(this)" name="start_loadingtime" class="xm siteinput ECalendar" type="text" placeholder="请选择装车时间" value="<?php echo !empty($start_loadingtime)?$start_loadingtime : '';; ?>" style="width: 200px;" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd'})">
				                </div>
				                <div class="clearfix"></div>
							</div>
							<div class="clearfix fl m30 search_margin">
								<p class="fl">发布时间：</p>
								<div class="fr">
				                    <input onblur="mzReg(this)" name="time" id="name" class="xm siteinput ECalendar" type="text" placeholder="请选择发布时间" value="<?php echo !empty($time)?$time : '';; ?>" style="width: 200px;" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd'})">
				                </div>
				                <div class="clearfix"></div>
							</div>
							<div class="clearfix"></div>
						</div>
					<div class="czh-Bottom m-formBottom clearfix timeTop f14 cz-active ">
						<table style="min-width:1136px;">
                           	<tbody>
                           	 	<tr class="ky-ddTab">
	                                <td>路线</td>
	                                <td>货物描述</td>
	                                <td>运输费用</td>
	                                <td>装车时间</td>
	                                <td>发布时间</td>
	                                <td>联系方式</td>	
	                                <td>操作</td>
                            	</tr> 
                            	<?php if(is_array($goodsres) || $goodsres instanceof \think\Collection || $goodsres instanceof \think\Paginator): $i = 0; $__LIST__ = $goodsres;if( count($__LIST__)==0 ) : echo "<p class='nulltext'>暂时没有此搜索条件的数据</p>" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
		                   			<tr class="ky-ddKK ky-ddKK1 even">
		                    			<td class="zc-lastTr " style="width:20%;">
		                                    <div class="skin-list2">
												<p class="ellipsis" title=" <?php echo $vo['starting_address']; ?>" style="text-align: left;"><span class="fa fa-map-marker faicon1"></span>始：<?php echo $vo['starting_address']; ?></p>
												<p class="ellipsis" title="<?php echo $vo['destination']; ?> " style="text-align: left;"><span class="fa fa-map-marker faicon2"></span>到：<?php echo $vo['destination']; ?></p>
		                                    </div>
		                                </td>
		                                <td class="zc-lastTr " style="width:20%;">
		                                    <div class="skin-list2">
												<p> 
												
												<?php echo $vo['goods_name']; ?>，<?php echo $vo['standard_ton']; ?>吨，<?php echo $vo['standard_square']; ?>方
												</br>求：
												<?php if(is_array($car_length) || $car_length instanceof \think\Collection || $car_length instanceof \think\Paginator): $i = 0; $__LIST__ = $car_length;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v6): $mod = ($i % 2 );++$i;if($v6['id'] == $vo['car_length']): ?>
									                	<?php echo $v6['typename']; endif; endforeach; endif; else: echo "" ;endif; ?>
										        的
												<?php if(is_array($car_type) || $car_type instanceof \think\Collection || $car_type instanceof \think\Paginator): $i = 0; $__LIST__ = $car_type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v3): $mod = ($i % 2 );++$i;if($v3['id'] == $vo['car_type']): ?>
									                	<?php echo $v3['typename']; endif; endforeach; endif; else: echo "" ;endif; ?>
										        </br>
								                <?php if(is_array($payment_mode) || $payment_mode instanceof \think\Collection || $payment_mode instanceof \think\Paginator): $i = 0; $__LIST__ = $payment_mode;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v4): $mod = ($i % 2 );++$i;if($v4['id'] == $vo['payment_mode']): ?>
									                	<?php echo $v4['typename']; endif; endforeach; endif; else: echo "" ;endif; ?>
												</p>
		                                    </div>
		                                </td>
		                        		<td class="" style="width:10%;">
		                        			<div class="skin-list1">
												<div class="czh-posi">
													<p class=""><?php echo $vo['carriage_type']; ?>：<?php echo $vo['carriage']; ?> 元</p>
												</div>
										    </div>
		                        		</td>
		                                <td class="" style="width:15%;">
		                                    <div class="skin-list1">
												<p class="">从<?php echo $vo['start_loadingtime']; ?>
													</br>到<?php echo $vo['end_loadingtime']; ?> 
												</p>
											</div>
		                                </td>
		                                <td class="" style=" width:10%;">
							                <div class="skin-list1">
												<p class=""><?php echo $vo['time']; ?></p>
										    </div>
		                                </td>
		                                <td class="" style="width: 15%">
		                                    <div class="skin-list1">
												<p class="ellipsis">
												<?php if($vo['is_company'] == '1'): ?>
													<span style="color: #337cc9;" title="易冷链自营"><span class="fa fa-user"></span></span>
												<?php endif; ?>
													&nbsp;<?php echo $vo['contact']; ?></br>
													<?php if(session('userid') != ''): if($user[0]['check_state'] == '1'): ?> 
									                      	<?php echo $vo['phone']; else: ?>
									                      	<a href="<?php echo url('Personalcenter/personalcenter_index'); ?>" style="color: red;">认证通过后可见</a>
									                    <?php endif; else: ?>
									                  	<a href="<?php echo url('Login/login'); ?>" style="color: red;">登录认证后可见</a>
									                <?php endif; ?>
												</p>
										    </div>
		                                </td>
		                                <?php if(session('userid') != ''): if($user[0]['check_state'] == '1'): ?>
				                                <td class="skin-border" style="width:10%;">
				                                	<div class="zc-positon">
														<?php if($vo['order_state'] == '1'): ?>
															<a href="<?php echo url('Goods/goods_car_detail',array('id'=>$vo['id'])); ?>" class="btn1" title="货源详情" datatype="1" style="color: #337cc9"><span class="glyphicon glyphicon-info-sign"></span ></a>
															<?php if(session('username')  ==  $vo['uid']): ?>
																<a class="u-aNext u-aNext1 u-aNext3" >您的货源</a>
															<?php else: if(empty($order_goodscar) != true): if(session('userid') == $order_goodscar[0]['user_id']): if(in_array($vo['id'],$goodsids)): ?>
																			<a class="u-aNext u-aNext1 u-aNext3" >您已抢单</a>
																		<?php else: ?>
																			<a class="u-aNext u-aNext1" href="javascript:;" onclick="admin_add('下单','<?php echo url('Goods/goods_carorder',array('id'=>$vo['id'])); ?>','600','400')" >下单</a>
																		<?php endif; else: ?>
																		<a class="u-aNext u-aNext1" href="javascript:;" onclick="admin_add('下单','<?php echo url('Goods/goods_carorder',array('id'=>$vo['id'])); ?>','600','400')" >下单</a>
																	<?php endif; else: ?>
																	<a class="u-aNext u-aNext1" href="javascript:;" onclick="admin_add('下单','<?php echo url('Goods/goods_carorder',array('id'=>$vo['id'])); ?>','600','400')" >下单</a>
																<?php endif; endif; elseif($vo['order_state'] == '2'): ?>
														    <a href="<?php echo url('Goods/goods_car_detail',array('id'=>$vo['id'])); ?>" class="btn1" title="货源详情" datatype="1" style="color: #337cc9"><span class="glyphicon glyphicon-info-sign"></span></a>
														    <p style="color: red;">被抢单</p>
														<?php endif; ?>	
												    </div>
												    <div class="modal fade" id="<?php echo $vo['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
													    <div class="modal-dialog">
															<div class="md-content">
															    <!-- <h3>抢单</h3>
															    <div>
															        <form action="<?php echo url('Order/order_goods_car',array('id'=>$vo['id'])); ?>" method="post">
															        	<input type="hidden" name="user_id" value="<?php echo session('userid');?>">
															        	<input type="hidden" name="goods_id" value="<?php echo $vo['id']; ?>">
															        	<input type="hidden" name="goodsname" value="<?php echo $vo['goods_name']; ?>">
															        	<input type="hidden" name="order_money" value="<?php echo $vo['carriage']; ?>">
																		<div class="rz-Form" style="margin: 0px;">
																			<div class="rz-model rz-label">
															                    <div class="clearfix">
															                        <p class="fl">承运方名称&nbsp;：</p>
															                        <p class="editinfo">
																                        <?php if($user[0]['company_name'] != ''): ?>
																                        	<?php echo $user[0]['company_name']; ?>
																                        	<input type="hidden" name="transporter_name" value="<?php echo $user[0]['company_name']; ?>">
																                        <?php else: ?>
																                        	<?php echo $user[0]['real_name']; ?>
																                        	<input type="hidden" name="transporter_name" value="<?php echo $user[0]['real_name']; ?>">
																                        <?php endif; ?>  
															                        </p> 
															                    </div>
															                </div>
															                <div class="rz-model rz-label">
															                    <div class="clearfix">
															                        <p class="fl">联系电话&nbsp;：</p>
															                        <input name="transporter_phone" id="name" class="xm inputstyle" type="text" value="<?php echo $user[0]['username']; ?>" style="width: 250px;">
															                    </div>
															                </div>
															                <div class="rz-model" style="position:relative">
															                    <input type="submit" name="" class="rz_sub" value="下单">
															               </div>
															            </div>
															        </form>
															    </div> -->
															</div>
													    </div>
													</div>	                             
				                                </td>
				                            <?php else: ?>
					                            <td class="skin-border" style="width:10%;">
				                                	<div class="zc-positon">
														<?php if($vo['order_state'] == '1'): ?>
															<a href="<?php echo url('Goods/goods_car_detail',array('id'=>$vo['id'])); ?>" class="btn1" title="货源详情" datatype="1" style="color: #337cc9"><span class="glyphicon glyphicon-info-sign"></span ></a>
												    		<a class="u-aNext u-aNext1" href="<?php echo url('Personalcenter/personalcenter_index'); ?>" onClick="return confirm('请您先认证！')">下单</a>
														<?php elseif($vo['order_state'] == '2'): ?>
														    <a href="<?php echo url('Goods/goods_car_detail',array('id'=>$vo['id'])); ?>" class="btn1" title="货源详情" datatype="1" style="color: #337cc9"><span class="glyphicon glyphicon-info-sign"></span></a>
														    <p style="color: red;">被抢单</p>
														<?php endif; ?>	
												    </div> 
												</td>
											<?php endif; elseif(session('userid') == ''): ?>
											<td class="skin-border" style="width:10%;">
			                                	<div class="zc-positon">
													<?php if($vo['order_state'] == '1'): ?>
														<a href="<?php echo url('Goods/goods_car_detail',array('id'=>$vo['id'])); ?>" class="btn1" title="货源详情" datatype="1" style="color: #337cc9"><span class="glyphicon glyphicon-info-sign"></span ></a>
											    		<a class="u-aNext u-aNext1" href="<?php echo url('Login/login'); ?>" onClick="return confirm('请登录！')">下单</a>
													<?php elseif($vo['order_state'] == '2'): ?>
													    <a href="<?php echo url('Goods/goods_car_detail',array('id'=>$vo['id'])); ?>" class="btn1" title="货源详情" datatype="1" style="color: #337cc9"><span class="glyphicon glyphicon-info-sign"></span></a>
													    <p style="color: red;">被抢单</p>
													<?php endif; ?>	
											    </div> 
										    </td>   		
										<?php endif; ?>
		                   			</tr>            			
                    			<?php endforeach; endif; else: echo "<p class='nulltext'>暂时没有此搜索条件的数据</p>" ;endif; ?>
                   			</tbody>
                   		</table>
                   		<div class="pages">
							<div id="paging1" class="page light-theme simple-pagination" style="text-align: center;" >
						        <?php echo $goodsres->render(); ?>
							</div>
						</div>
					</div>	
				</div>
			</div>
		</div>
	</div>
	</form>
</div>
<!-- contanierEnd -->

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
<script type="text/javascript" src="__PUBLIC__/js/sitepicker.js"></script>
<script src="__PUBLIC__/js/main.js"></script>
<script src="__PUBLIC__/js/bootstrap.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/lib/date/WdatePicker.js"></script> 
<script type="text/javascript" src="__PUBLIC__/js/H-ui.admin.js"></script> 
<script type="text/javascript" src="__PUBLIC__/lib/layer/1.9.3/layer.js"></script>
<script type="text/javascript">
	$('.nav_wrap').find('li').removeClass('now');
    $('.nav_wrap').children('li').eq(1).addClass('now');
    function admin_add(title,url,w,h){
		layer_show(title,url,w,h);
	}
	$('.nulltext').parents('.czh-Bottom').find('.ky-ddTab').hide();
</script>
</body>
</html>