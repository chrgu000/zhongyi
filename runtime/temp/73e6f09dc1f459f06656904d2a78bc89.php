<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:69:"E:\wamp\www\transport\public/../application/index\view\Path\path.html";i:1505959051;s:73:"E:\wamp\www\transport\public/../application/index\view\common\header.html";i:1506071803;s:73:"E:\wamp\www\transport\public/../application/index\view\common\footer.html";i:1505989080;}*/ ?>
﻿<!DOCTYPE html>
<html lang="en">
<head class="skin-head">
	<meta charset="UTF-8">
	<title>车源信息</title>	
    <link href="../../static/index/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="__PUBLIC__/css/city-picker.css"> 
	<link rel="stylesheet"  href="__PUBLIC__/css/higo.css" />
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/style.css">
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/date.css">
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/mask.css">

    <!-- 分页样式 -->
	<link type="text/css" rel="stylesheet" href="__PUBLIC__/css/page.css"/>
	<script type="text/javascript" src="__PUBLIC__/js/jquery.simplePagination.js"></script>
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
            <a class="fl" href="<?php echo url('Index/index'); ?>" style="width: 180px;">
                <img src="__PUBLIC__/images/logoa.png" alt=""/>
                <!-- <h2 style="width:200px; text-align: center; line-height: 26px; margin-top: 10px; margin-left: 40px;"><span style="font-size: 24px; ">陆港易冷链</span><br><span>LUGANG YILENGLIAN</span></h2> -->
                </a>
                <style type="text/css">

                </style>
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
	        	<p class="fl myActive">车源信息</p>
	        </a>
	    </div>
	</div>
	<div class="wrap-1200 goods_list">
		<div class="m-infortabBack">
			<div id="m-infonavCont">
				<div class="m-infonavContent2 mj-xlxx">
					<form action="" method="get" style="margin-bottom: 20px;">
						<div class="m-inforForm clearfix">
							<div class="clearfix fl m30">
								<p class="fl">始&nbsp;发&nbsp;地&nbsp;：</p>
                            	<div class="fr ku">
		                            <input  name="startsite" id="name" class="xm" type="text" placeholder="请输入始发地" style="width: 200px;">
		                            <div class="xiala">
		                                <h1><span>确认</span></h1>
		                            </div>
		                        </div> 
		                        <div class="clearfix"></div>
							</div>
							<div class="clearfix fl m30">
								<p class="fl">目&nbsp;的&nbsp;地：</p> 
                            	<div class="fr ku1">
		                            <input  name="endsite" id="name" class="xm" type="text" placeholder="请输入目的地" style="width: 200px;">
		                            <div class="xiala1">
		                                <h1><span>确认</span></h1>
		                            </div>
		                        </div>
		                        <div class="clearfix"></div>
							</div>
							<div class="clearfix fl m30 search_margin">
								<p class="fl">用户分类：</p>
								<div class="fr">
				                   	<select name="is_company" class="siteselect" style="width: 150px;">
				                   		<option >不限</option>
				                   		<option value="1">自营用户</option>
				                   		<option value="0">非自营用户</option>
				                   	</select>
				                </div>
				                <div class="clearfix"></div>
							</div>
							<div class="clearfix fl m30 search_margin">
                                <p class="fl">发布时间：</p>
                                <div class="fr">
                                	<input  onblur="mzReg(this)" name="time" id="name" class="xm siteinput ECalendar" type="text" placeholder="请选择发布时间" value="<?php echo !empty($time)?$time : '';; ?>" style="width: 150px;" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd'})">
                            	</div>
                            	<div class="clearfix"></div>
                            </div>
							<input type="submit" value="搜索" class="fl u-aNext u-aNext2" style="float: right;"> 
							<div class="clearfix"></div>
                        </div>
					</form>
					<div class="czh-Bottom m-formBottom clearfix timeTop f14 cz-active ">
						<table style="min-width:1136px;">
                           	<tbody>
                           	 	<tr class="ky-ddTab">
	                                <td>路线</td>
	                                <td>承运方名称</td>
	                                <td>常用车型</td>
	                                <td>常用车长</td>
	                                <td>发布时间</td>	
	                                <td>联系方式</td>
	                                <td>操作</td>
                            	</tr>  
                            	<?php if(is_array($pathres) || $pathres instanceof \think\Collection || $pathres instanceof \think\Paginator): $i = 0; $__LIST__ = $pathres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>          			
	                    		<tr class="ky-ddKK ky-ddKK1 odd" >
	                    			<td class="zc-lastTr " style="width:20%;">
	                                    <div class="skin-list2">
	                                    	<p class="ellipsis" title=" <?php echo $vo['startsite']; ?>" style="text-align: center;">始：<?php echo $vo['startsite']; ?></p>
											<p class="ellipsis" title="<?php echo $vo['endsite']; ?> " style="text-align: center;">到：<?php echo $vo['endsite']; ?></p>
	                                    </div>
	                                </td>
	                        		<td class="" style="width:15%;">
	                        			<div class="skin-list1">
											<div class="czh-posi">
												<p class="ellipsis">
													<?php if($vo['is_company'] == '1'): ?>
														<span style="color: red;">易冷链自营</span></br>
													<?php endif; ?>
													<?php echo $vo['linkman']; ?>
												</p>
											</div>
									    </div>
	                        		</td>
	                                <td class="" style="width:15%;">
	                                    <div class="skin-list1">
											<p class="ellipsis" title="<?php echo $vo['vehicle_type']; ?>"><?php echo $vo['vehicle_type']; ?></p>
										</div>
	                                </td>
	                                <td class="" style=" width:15%;">
						                <div class="skin-list1">
											<p class="ellipsis" title="<?php echo $vo['vehicle_length']; ?>"><?php echo $vo['vehicle_length']; ?></p>
									    </div>
	                                </td>
	                                <td class="" style="width: 10%">
	                                    <div class="skin-list1">
											<p class="ellipsis"><?php echo $vo['time']; ?></p>
									    </div>
	                                </td>
	                                <td class="" style=" width:15%;">
						                <div class="skin-list1">
											<p class="ellipsis">
												<?php if(session('userid') != ''): if($user[0]['check_state'] == '1'): ?> 
								                      	<?php echo $vo['linkphone']; else: ?>
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
													<?php if(session('username')  ==  $vo['uid']): ?>
														<a href="" class="u-aNext u-aNext1 u-aNext3" >您的车源</a>
													<?php else: ?>
													<!-- <form method="get" action="<?php echo url('Path/pathorder'); ?>" target="frame" >
													<input type="hidden" name="id" value="<?php echo $vo['id']; ?>"> -->
										    			<a class="u-aNext u-aNext1" href="javascript:;" onclick="admin_add('下单','<?php echo url('Path/pathorder',array('id'=>$vo['id'])); ?>','600','600')">下单</a>
										    			<!-- <button id="b" type="submit"></button>
										    		</form> -->
										    		<?php endif; ?>
											    </div>
											    <div class="modal fade" id="<?php echo $vo['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
												    <div class="modal-dialog">
														<div class="md-content">
														    <h3>抢单</h3>
														    <div>
														        <!-- <form action="<?php echo url('Order/order_path',array('id'=>$vo['id'])); ?>" method="post">
														        	<input type="hidden" name="user_id" value="<?php echo session('userid');?>">
														        	<input type="hidden" name="path_id" value="<?php echo $vo['id']; ?>">
														        	 <iframe name="frame" ID="Frame1" SRC="<?php echo url('Path/pathorder'); ?>"  style="width:520px; border:none; min-height: 500px; "> </iframe> -->
														        </form>
														    </div>
														</div>
												    </div>
												</div>	                             
			                                </td>
			                            <?php else: ?>
				                            <td class="skin-border" style="width:10%;">
			                                	<div class="zc-positon">
											    		<a class="u-aNext u-aNext1" href="<?php echo url('Personalcenter/personalcenter_index'); ?>" onClick="return confirm('请您先认证！')">下单</a>
											    </div> 
											</td>
										<?php endif; elseif(session('userid') == ''): ?>
										<td class="skin-border" style="width:10%;">
		                                	<div class="zc-positon">
									    		<a class="u-aNext u-aNext1" href="<?php echo url('Login/login'); ?>" onClick="return confirm('请登录！')">下单</a>
										    </div> 
									    </td>   		
									<?php endif; ?>
	                   			</tr>
	                   			<?php endforeach; endif; else: echo "" ;endif; ?>
                   			</tbody>                   			
                   		</table>
                   		<div class="pages">
							<div id="paging1" class="page light-theme simple-pagination" style="text-align: center;" >
						        <?php echo $pathres->render(); ?>
							</div>
						</div>
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
<script type="text/javascript" src="__PUBLIC__/js/jquery.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/sitepicker.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/bootstrap.min.js"></script>
<script src="__PUBLIC__/js/Ecalendar.jquery.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/lib/date/WdatePicker.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/H-ui.admin.js"></script> 
<script type="text/javascript" src="__PUBLIC__/lib/layer/1.9.3/layer.js"></script> 
<script src="__PUBLIC__/js/main.js"></script>
<script type="text/javascript">
	$('.nav_wrap').find('li').removeClass('now');
    $('.nav_wrap').children('li').eq(2).addClass('now');
	function admin_add(title,url,w,h){
		layer_show(title,url,w,h);
	}
	
</script>
</body>
</html>