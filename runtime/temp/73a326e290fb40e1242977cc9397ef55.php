<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:75:"E:\WWW\transport\public/../application/index\view\goods\goods_carorder.html";i:1509004185;}*/ ?>
﻿<!DOCTYPE html>
<html lang="en" style="width: 500px;">
<head class="skin-head">
	<meta charset="UTF-8">
	<title>车源信息</title>	
	<link rel="icon" href="" type="image/x-icon"/>
    <link href="../../static/index/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="__PUBLIC__/css/city-picker.css"> 
	<link rel="stylesheet" href="__PUBLIC__/css/auth.css">
	<link rel="stylesheet"  href="__PUBLIC__/css/higo.css" />
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/style.css">
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/date.css">
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/mask.css">
    <!-- 分页样式 -->
	<link type="text/css" rel="stylesheet" href="__PUBLIC__/css/page.css"/>
	<script type="text/javascript" src="__PUBLIC__/js/jquery.simplePagination.js"></script>
</head>
<body style="width: 500px; height: auto; padding:40px;">
<form action="<?php echo url('Order/order_goods_car'); ?>" method="post" target="_parent" onSubmit="return checktan1();">
	<input type="hidden" name="user_id" value="<?php echo session('userid');?>">
	<input type="hidden" name="goods_id" value="<?php echo $id1; ?>">
	<input type="hidden" name="goodsname" value="<?php echo $goods1['goods_name']; ?>">
	<input type="hidden" name="order_money" value="<?php echo $goods1['carriage']; ?>">
	<div class="rz-Form" style="margin: 0px; width: 500px; height: auto;">
		<ul class="order_ku">
			<li style="border:none;">
				<div class="order_r" style="width: 100%;">
					<div>
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
		                <div class="clearfix"></div>
	                </div> 
	                <div class="rz-model rz-label">
			            <div class="clearfix">
			                <p class="fl" style="margin-top: 5px;">联系电话&nbsp;：</p>
			                <input type="text" name="transporter_phone" id="name" class="xm fl inputstyle checktanphone" value="<?php echo $user[0]['username']; ?>" onblur="uxPhone1(this)" style="width: 200px;"/>
			                <label><span style="display: inline-block;margin-top: 10px;">请输入正确的手机号</span></label>
			                <div class="clearfix"></div>
			            </div>
			        </div>
			        <div class="clearfix"></div>

				</div>
			</li>
		</ul>
		<div class="rz-model" style="position:relative; text-align: center;">
			<input type="submit" name="" class="rz_sub checksub" value="下单" target="_blank">
		</div>
	</div>
		
</form>
<script type="text/javascript" src="__PUBLIC__/js/jquery.min.js"></script>
<script src="__PUBLIC__/js/auth.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/sitepicker.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/bootstrap.min.js"></script>
<script src="__PUBLIC__/js/Ecalendar.jquery.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/lib/layer/1.9.3/layer.js"></script>
<script src="__PUBLIC__/js/main.js"></script>
<script type="text/javascript">
	function checktan1(){
	    var checktanphone=$(".checktanphone"); 
	    if(!uxPhone1(checktanphone)){
	        return false;
	    }
	}
</script>
</body>
</html>