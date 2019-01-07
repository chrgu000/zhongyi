<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:74:"E:\WWW\transport\public/../application/index\view\goods\goods_kuorder.html";i:1508978590;}*/ ?>
﻿<!DOCTYPE html>
<html lang="en" style="width: 500px;">
<head class="skin-head">
	<meta charset="UTF-8">
	<title>车源信息</title>	
	<link rel="icon" href="" type="image/x-icon"/>
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
<body style="width: 500px; height: auto; padding:40px;">

<form action="<?php echo url('Order/order_goods_ku'); ?>" method="post" class="rz-Form" target="_parent">
<input type="hidden" name="user_id" value="<?php echo session('userid');?>">
<input type="hidden" name="goods_id" value="<?php echo $id1; ?>">
	<ul class="order_ku">
	<?php if(is_array($whres) || $whres instanceof \think\Collection || $whres instanceof \think\Paginator): $i = 0; $__LIST__ = $whres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v4): $mod = ($i % 2 );++$i;?>
	<li>
		<div class="order_l fl">
			<img src="__PUBLIC__/../<?php echo $v4['wh_photo']; ?>" alt="" >
		</div>
		<div class="order_r fl">
			<p><span>仓库名称：</span><?php echo $v4['wh_name']; ?></p>
			<p><span>仓库地址：</span><?php echo $v4['wh_address']; ?></p>
			<p><span>仓库详细地址：</span><?php echo $v4['wh_address_detail']; ?></p>
			<p><span>仓库类型：</span><?php echo $v4['wh_type']; ?>
			</p>
			<p><span>仓库价格：</span><?php echo $v4['wh_price']; if($v4['wh_price_type'] == '0'): ?>
	          元/天/托
	        <?php elseif($v4['wh_price_type'] == '1'): ?>
	          元/天/平
	        <?php elseif($v4['wh_price_type'] == '2'): ?>
	          元/天/吨
	        <?php elseif($v4['wh_price_type'] == '3'): ?>
	          元/天/方
	        <?php endif; ?>
			</p>
		</div>
		<div class="check fr">
			<label>
				<input type="radio" name="wh_id"  value="<?php echo $v4['id']; ?>" class="checkitem"><!-- <span class=" glyphicon glyphicon-ok"></span> -->
				<input type="radio" name="order_contact"  value="<?php echo $v4['wh_contact']; ?>" class="checkitem">
				<input type="radio" name="order_phone"  value="<?php echo $v4['wh_phone']; ?>" class="checkitem">
				<input type="radio" name="goodsname"  value="<?php echo $goods1['goods_name']; ?>" class="checkitem">
				<input type="radio" name="order_money"  value="<?php echo $goods1['store_price']; ?>" class="checkitem">
			</label>
		</div>
		<div class="clearfix"></div>
	</li>
	<?php endforeach; endif; else: echo "" ;endif; ?>
	</ul>
	<div class="pages">
		<div id="paging1" class="page light-theme simple-pagination" style="text-align: center;" >
	        <?php echo $whres->render(); ?>
		</div>
	</div>
	<div class="rz-model" style="position:relative;text-align: center;">
		<input style="width:420px;" type="submit" name="" class="rz_sub" value="下单">
	</div>
</form>
<script type="text/javascript" src="__PUBLIC__/js/jquery.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/sitepicker.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/bootstrap.min.js"></script>
<script src="__PUBLIC__/js/Ecalendar.jquery.min.js"></script>
<script src="__PUBLIC__/js/main.js"></script>
</body>
</html>