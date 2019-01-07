<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:74:"E:\WWW\transport\public/../application/index\view\Warehouse\warehouse.html";i:1510043788;s:68:"E:\WWW\transport\public/../application/index\view\common\header.html";i:1508989788;s:68:"E:\WWW\transport\public/../application/index\view\common\footer.html";i:1509431569;}*/ ?>
﻿<!DOCTYPE html>
<html lang="en">
<head class="skin-head">
	<meta charset="UTF-8">
	<title>库源信息</title>	
	<link rel="icon" href="" type="image/x-icon"/>
    <link href="../../static/index/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../static/index/css/font-awesome.min.css">
	<link rel="stylesheet" href="__PUBLIC__/css/city-picker.css"> 
	<link rel="stylesheet"  href="__PUBLIC__/css/higo.css" />
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/mask.css">
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/style.css">

    <!-- 分页样式 -->
	<link type="text/css" rel="stylesheet" href="__PUBLIC__/css/page.css"/>
	<script type="text/javascript" src="__PUBLIC__/js/jquery.simplePagination.js"></script>
	<style type="text/css">
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
<!-- contanier-->
<div class="contanier goods_info">
	<div class="mine wrap-1200">
	    <div class="bt-tab clearfix">
		    <a href="">
	        	<p class="fl myActive">库源信息</p>
	        </a>
	    </div>
	</div>
	<div class="wrap-1200 goods_list">
		<div class="m-infortabBack">
			<div id="m-infonavCont">
				<div class="m-infonavContent2 mj-xlxx">
					<form action="<?php echo url('Warehouse/warehouse'); ?>" method="get" style="margin-bottom: 20px;">
						<div class="m-inforForm clearfix">
							<div class="clearfix fl m30">
								<p class="fl">所&nbsp;在&nbsp;地&nbsp;：</p>
                            	<div class="fr ku">
		                            <input  name="wh_address" id="name" class="xm" type="text" placeholder="请输入仓库所在地" style="width: 200px;" value="<?php echo !empty($wh_address)?$wh_address : '';; ?>" >
		                            <div class="xiala">
		                                <h1><span>确认</span></h1>
		                            </div>
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
							<!-- <div class="clearfix fl m30 search_margin">
								<p class="fl">仓库面积：</p>
								<div class="fr">
				                   	<select name="useable_area" class="siteselect">
				                   		<option >--请输入仓库面积--</option>
				                   		<option value="500">500平方以下</option>
				                   		<option value="1000">500平方～1000平方</option>
				                   		<option value="2000">1000平方～2000平方</option>
				                   		<option value="3000">2000平方以上</option>
				                   	</select>
				                </div>
				                <div class="clearfix"></div>
							</div> -->
							<div class="clearfix fl m30 search_margin">
								<p class="fl">库源状态：</p>
								<div class="fr">
				                   	<select name="order_state" class="siteselect">
				                   		<option >全部</option>
				                   		<option value="1" <?php if($order_state == '1'): ?> selected="selected"<?php endif; ?> >选择仓库</option>
				                   		<option value="2" <?php if($order_state == '2'): ?> selected="selected"<?php endif; ?> >被抢单</option>
				                   		<option value="3" <?php if($order_state == '3'): ?> selected="selected"<?php endif; ?> >已完成</option>
				                   	</select>
				                </div>
				                <div class="clearfix"></div>
							</div>
							<div class="clearfix fl m30 search_margin">
								<p class="fl">用户分类：</p>
								<div class="fr">
				                   	<select name="is_company" class="siteselect" style="width: 150px;">
				                   		<option >不限</option>
				                   		<option value="1" <?php if($is_company == '1'): ?> selected="selected"<?php endif; ?> >自营用户</option>
				                   		<option value="0" <?php if($is_company == '0'): ?> selected="selected"<?php endif; ?> >非自营用户</option>
				                   	</select>
				                </div>
				                <div class="clearfix"></div>
							</div>
							<div class="clearfix fl m30 search_margin">
								<p class="fl">发布时间：</p>
								<div class="fr">
				                    <input onblur="mzReg(this)" name="wh_time" id="name" class="xm siteinput ECalendar" type="text" placeholder="请选择发布时间" value="<?php echo !empty($wh_time)?$wh_time : '';; ?>" style="width: 150px;" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd'})">
				                </div>
				                <div class="clearfix"></div>
							</div>
							<input type="submit" value="搜索" class="fl u-aNext u-aNext2" style="float: right;" />
							<div class="clearfix"></div>

						</div>
						<!-- <div class="m-inforForm clearfix" style="margin-top: 20px;" > -->
							<!-- <div class="clearfix fl m30 search_margin">
								<p class="fl">库温类型(改)：</p>
								<div style="display: inline-block;">
				                   	<select name="temperature_type" class="siteselect">
				                   		<option >不限</option>
				                   		<option value="1">常温</option>
				                   		<option value="2">冷藏</option>
				                   		<option value="3">冷冻</option>
				                   		<option value="4">急冻</option>
				                   		<option value="5">深冷</option>
				                   	</select>
				                </div>
							</div> -->
						<!-- </div> -->
					</form>
					<div class="czh-Bottom m-formBottom clearfix timeTop f14 cz-active ">
						<table style="min-width:1136px;">
                           	<tbody>
                           	 	<tr class="ky-ddTab">
	                                <td>所在地</td>
	                                <td>仓库名称</td>
	                                <td>仓库类型</td>
	                                <td>仓库面积</td>
	                                <td>发布时间</td>
	                                <td>联系方式</td>
	                                <td>操作</td>
                            	</tr> 
                            	<?php if(is_array($warehouseres) || $warehouseres instanceof \think\Collection || $warehouseres instanceof \think\Paginator): $i = 0; $__LIST__ = $warehouseres;if( count($__LIST__)==0 ) : echo "<p class='nulltext'>暂时没有此搜索条件的数据</p>" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>           			
		                    		<tr class="ky-ddKK ky-ddKK1 odd">
		                    			<td class="zc-lastTr " style="width:17%;">
		                                    <div class="skin-list">
		                                    	<p title="<?php echo $vo['wh_address']; ?>"><?php echo $vo['wh_address']; ?></p>
		                                    </div>
		                                </td>
		                                <td class="zc-lastTr " style="width:15%;">
		                                    <div class="skin-list2">
		                                    	<p style="text-align: center;">
		                                    		<?php echo $vo['wh_name']; ?>
		                                    	</p>
		                                    </div>
		                                </td>
		                        		<td class="" style="width:12%;">
		                        			<div class="skin-list">
												<div class="czh-posi">
													<p>
														<?php echo $vo['wh_type']; ?>
													</p>
												</div>
										    </div>
		                        		</td>
		                                <td class="" style="width:22%;">
		                                    <div class="skin-list">
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
		                                <!-- <td class="" style="width: 10%">
	                                        <div class="skin-list1">
	                                            <p><?php echo $vo['useable_area']; ?>平方；&nbsp;<?php echo $vo['useable_volume']; ?>立方</p>
	                                        </div>
	                                    </td> -->
		                                <td class="" style=" width:12%;">
							                <div class="skin-list1">
												<p class=""><?php echo $vo['wh_time']; ?></p>
										    </div>
		                                </td>
		                                <td class="" style="width: 12%">
		                                    <div class="skin-list1">
												<p class="ellipsis">
													<?php if($vo['is_company'] == '1'): ?>
														<span class="zybtn" style="margin-top:-1px;" title="易冷链自营">自营</span>
													<?php endif; ?>
													&nbsp;<span><?php echo $vo['wh_contact']; ?></span></br>
													<?php if(session('userid') != ''): if($user[0]['check_state'] == '1'): ?> 
									                      	<?php echo $vo['wh_phone']; else: ?>
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
														<a href="<?php echo url('Warehouse/warehouse_detail',array('id'=>$vo['id'])); ?>" class="btn1" title="详情" datatype="1" style="color: #337cc9"><span class="glyphicon glyphicon-info-sign"></span></a>
														<?php if(session('username')  ==  $vo['wh_uid']): ?>
														<a class="u-aNext u-aNext1 u-aNext3" >您的仓库</a>
														<?php else: ?>
														<!-- <form method="get" action="<?php echo url('Warehouse/warehouseorder'); ?>" target="frame" >
														<input type="hidden" name="id" value="<?php echo $vo['id']; ?>"> -->
													    	
																<a class="u-aNext u-aNext1" href="javascript:;" onclick="admin_add('下单','<?php echo url('Warehouse/warehouseorder',array('id'=>$vo['id'])); ?>','600','600')">选择仓库</a>
													    <!-- <button id="b" type="submit"></button>
										    			</form> -->
													    <?php endif; elseif($vo['order_state'] == '2'): ?>
												    	<a href="<?php echo url('Warehouse/warehouse_detail',array('id'=>$vo['id'])); ?>" class="btn1" title="详情" datatype="1" style="color: #337cc9"><span class="glyphicon glyphicon-info-sign"></span></a>
												    	<p>被抢单</p>
												    <?php elseif($vo['order_state'] == '3'): ?>
												    	<a href="<?php echo url('Warehouse/warehouse_detail',array('id'=>$vo['id'])); ?>" class="btn1" title="详情" datatype="1" style="color: #337cc9"><span class="glyphicon glyphicon-info-sign"></span></a>
												    	<p>已完成</p>
													<?php endif; ?>	
											    </div>
											    <div class="modal fade" id="<?php echo $vo['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
													    <div class="modal-dialog">
															<div class="md-content">
														      <h3>下单</h3>
														      <div>
														      <!-- <iframe name="frame" ID="Frame1" SRC="<?php echo url('Warehouse/warehouseorder'); ?>"  style="width:520px; border:none; min-height: 500px; "> </iframe> -->
														        
														      </div>
														    </div>
													    </div>
												</div>
			                                </td>
			                                <?php else: ?>
				                            <td class="skin-border" style="width:10%;">
			                                	<div class="zc-positon">
													<?php if($vo['order_state'] == '1'): ?>
														<a href="<?php echo url('Warehouse/warehouse_detail',array('id'=>$vo['id'])); ?>" class="btn1" title="库源详情" datatype="1" style="color: #337cc9"><span class="glyphicon glyphicon-info-sign"></span ></a>
											    		<a class="u-aNext u-aNext1" href="<?php echo url('Personalcenter/personalcenter_index'); ?>" onClick="return confirm('请您先认证！')">下单</a>
													<?php elseif($vo['order_state'] == '2'): ?>
													    <a href="<?php echo url('Warehouse/warehouse_detail',array('id'=>$vo['id'])); ?>" class="btn1" title="库源详情" datatype="1" style="color: #337cc9"><span class="glyphicon glyphicon-info-sign"></span></a>
													    <p style="color: red;">被抢单</p>
													<?php else: ?>
														<a href="<?php echo url('Warehouse/warehouse_detail',array('id'=>$vo['id'])); ?>" class="btn1" title="库源详情" datatype="1" style="color: #337cc9"><span class="glyphicon glyphicon-info-sign"></span></a>
												    	<p style="color: red;">已完成</p>
													<?php endif; ?>	
											    </div> 
											</td>
											<?php endif; elseif(session('userid') == ''): ?>
											<td class="skin-border" style="width:10%;">
			                                	<div class="zc-positon">
													<?php if($vo['order_state'] == '1'): ?>
														<a href="<?php echo url('Warehouse/warehouse_detail',array('id'=>$vo['id'])); ?>" class="btn1" title="库源详情" datatype="1" style="color: #337cc9"><span class="glyphicon glyphicon-info-sign"></span ></a>
											    		<a class="u-aNext u-aNext1" href="<?php echo url('Login/login'); ?>" onClick="return confirm('请登录！')">选择仓库</a>
													<?php elseif($vo['order_state'] == '2'): ?>
													    <a href="<?php echo url('Warehouse/warehouse_detail',array('id'=>$vo['id'])); ?>" class="btn1" title="库源详情" datatype="1" style="color: #337cc9"><span class="glyphicon glyphicon-info-sign"></span></a>
													    <p style="color: red;">被抢单</p>
													<?php else: ?>
												   		<a href="<?php echo url('Warehouse/warehouse_detail',array('id'=>$vo['id'])); ?>" class="btn1" title="库源详情" datatype="1" style="color: #337cc9"><span class="glyphicon glyphicon-info-sign"></span></a>
													    <p style="color: red;">已完成</p>
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
						        <?php echo $warehouseres->render(); ?>
						        <div class="pageinput" style="">
						        	<input type="hidden" name="current_page" value="<?php echo $current_page; ?>">
						        	<input type="hidden" name="totalpage" value="<?php echo $totalpage; ?>">
						        	<p><p class="yeshudes">当前第<i><?php echo $current_page; ?></i>页/共<i><?php echo $totalpage; ?></i>页</p>转到&nbsp;<input class="tiaozhuanye" type="text" name="">&nbsp;页&nbsp;<a class="tiaozhuan" href="javascript:;" style="float: none;">确定</a></p>

						        </div>
							</div>
						</div>

                   		<!-- <div class="pages">
							<div id="paging1" class="page light-theme simple-pagination" style="text-align: center;" >
						        <?php echo $warehouseres->render(); ?>
							</div>
						</div> -->
					</div>
				</div>
			</div>
		</div>
	</div>
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
<div class="kf">
    <a style="outline: none;" href="http://42.228.11.187/chat/index.php?nick=<?php echo $username; ?>" target="_blank">
        <img src="__PUBLIC__/images/helper03.png">
        <p>在线客服</p>
    </a>
</div>
<script type="text/javascript" src="__PUBLIC__/js/jquery.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/sitepicker.js"></script>
<script src="__PUBLIC__/js/Ecalendar.jquery.min.js"></script>
<script src="__PUBLIC__/js/classie.js"></script>
<script src="__PUBLIC__/js/modalEffects.js"></script>
<script src="__PUBLIC__/js/bootstrap.min.js"></script>
<script src="__PUBLIC__/js/main.js"></script>
<script type="text/javascript" src="__PUBLIC__/lib/date/WdatePicker.js"></script> 
<script type="text/javascript" src="__PUBLIC__/js/H-ui.admin.js"></script> 
<script type="text/javascript" src="__PUBLIC__/lib/layer/1.9.3/layer.js"></script>
<script type="text/javascript">
	$('.nav_wrap').find('li').removeClass('now');
    $('.nav_wrap').children('li').eq(4).addClass('now');
    
	function admin_add(title,url,w,h){
		layer_show(title,url,w,h);
	}
	$('.nulltext').parents('.czh-Bottom').find('.ky-ddTab').hide();

	$('.tiaozhuan').click(function(){

		var a=parseInt($('.tiaozhuanye').val());
		var totalpage=parseInt($("input[name='totalpage']").val());
		var wh_address=$("input[name='wh_address']").val();
		var order_state=$("select[name='order_state']").val();
		var is_company=$("select[name='is_company']").val();
		var wh_time=$("input[name='wh_time']").val();
		if(a<=0){
		    a=1;
		}
		if(a>totalpage){
		    a=totalpage;
		}
		$(this).attr('href','/transport/public/index/warehouse/warehouse.html?wh_address='+wh_address+'&order_state='+order_state+'&is_company='+is_company+'&wh_time='+wh_time+'&page='+a);
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