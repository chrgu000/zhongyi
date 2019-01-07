<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"E:\WWW\transport\public/../application/admin\view\goods\goods-detail.html";i:1506419010;}*/ ?>
﻿<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<!--[if lt IE 9]>
<script type="text/javascript" src="lib/html5.js"></script>
<script type="text/javascript" src="lib/respond.min.js"></script>
<script type="text/javascript" src="lib/PIE_IE678.js"></script>
<![endif]-->
<link rel="icon" href="" type="image/x-icon"/>
<link href="__PUBLIC__/css/H-ui.min.css" rel="stylesheet" type="text/css" />
<link href="__PUBLIC__/css/H-ui.admin.css" rel="stylesheet" type="text/css" />
<link href="__PUBLIC__/lib/icheck/icheck.css" rel="stylesheet" type="text/css" />
<link href="../../../../../static/admin/lib/Hui-iconfont/1.0.1/iconfont.css" rel="stylesheet" type="text/css" />
<!--[if IE 6]>
<script type="text/javascript" src="lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>车找货货源详情</title>
</head>
<body>
<div class="pd-20">
	<form action="" method="post" class="form form-horizontal" id="form-admin-add">
	    <div class="row cl">
			<label class="form-label col-3">始发地:</label>
			<div class="formControls col-7">
				<input name="starting_address" type="text" class="input-text" value="<?php echo $list['starting_address']; ?>" readonly="true" style="width: 45%" title="<?php echo $list['starting_address']; ?>">——
				<input name="startingaddress_detail" type="text" class="input-text" value="<?php echo $list['startingaddress_detail']; ?>" readonly="true" style="width: 45%" title="<?php echo $list['startingaddress_detail']; ?>">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-3">目的地:</label>
			<div class="formControls col-7">
				<input name="destination" type="text" class="input-text" value="<?php echo $list['destination']; ?>" readonly="true" style="width: 45%" title="<?php echo $list['destination']; ?>">——
				<input name="destination_detail" type="text" class="input-text" value="<?php echo $list['destination_detail']; ?>" readonly="true" style="width: 45%" title="<?php echo $list['destination_detail']; ?>">
			</div>
		</div>
        <div class="row cl">
			<label class="form-label col-3">货物品类：</label>
			<div class="formControls col-5">
			    <?php if(is_array($goods_sort2) || $goods_sort2 instanceof \think\Collection || $goods_sort2 instanceof \think\Paginator): $i = 0; $__LIST__ = $goods_sort2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;if($v['id'] == $list['goods_sort']): ?>
				<input name="goods_sort" type="text" class="input-text" value="<?php echo $v['typename']; ?>" readonly="true" >
			    <?php endif; endforeach; endif; else: echo "" ;endif; ?>
			</div>
		</div>
		 <div class="row cl">
			<label class="form-label col-3">货物类型：</label>
			<div class="formControls col-5">
			    <?php if(is_array($goods_type2) || $goods_type2 instanceof \think\Collection || $goods_type2 instanceof \think\Paginator): $i = 0; $__LIST__ = $goods_type2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;if($v['id'] == $list['goods_type']): ?>
				<input name="goods_type" type="text" class="input-text" value="<?php echo $v['typename']; ?>" readonly="true" >
			    <?php endif; endforeach; endif; else: echo "" ;endif; ?>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-3">货物名称：</label>
			<div class="formControls col-5">
				<input name="goods_name" type="text" class="input-text" value="<?php echo $list['goods_name']; ?>" readonly="true">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-3">温度要求:</label>
			<div class="formControls col-5">
				<input name="low_temperature" type="text" class="input-text" value="<?php echo $list['low_temperature']; ?>" readonly="true" style="width: 45%">——
				<input name="high_temperature" type="text" class="input-text" value="<?php echo $list['high_temperature']; ?>" readonly="true" style="width: 45%">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-3">货物规格:</label>
			<div class="formControls col-5">
				<input name="standard_ton" type="text" class="input-text" value="<?php echo $list['standard_ton']; ?>" readonly="true" style="width: 40%">(吨)——
				<input name="standard_square" type="text" class="input-text" value="<?php echo $list['standard_square']; ?>" readonly="true" style="width: 40%">(方)
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-3">装车时间:</label>
			<div class="formControls col-5">
				<input name="start_loadingtime" type="text" class="input-text" value="<?php echo $list['start_loadingtime']; ?>" readonly="true" style="width: 45%">——
				<input name="end_loadingtime" type="text" class="input-text" value="<?php echo $list['end_loadingtime']; ?>" readonly="true" style="width: 45%">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-3">到货时间:</label>
			<div class="formControls col-5">
				<input name="start_arrivetime" type="text" class="input-text" value="<?php echo $list['start_arrivetime']; ?>" readonly="true" style="width: 45%">——
				<input name="end_arrivetime" type="text" class="input-text" value="<?php echo $list['end_arrivetime']; ?>" readonly="true" style="width: 45%">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-3">需要车长：</label>
			<div class="formControls col-5">
			    <?php if(is_array($car_length2) || $car_length2 instanceof \think\Collection || $car_length2 instanceof \think\Paginator): $i = 0; $__LIST__ = $car_length2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;if($v['id'] == $list['car_length']): ?>
				<input name="car_length" type="text" class="input-text" value="<?php echo $v['typename']; ?>" readonly="true" >
			    <?php endif; endforeach; endif; else: echo "" ;endif; ?>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-3">需要车型：</label>
			<div class="formControls col-5">
			    <?php if(is_array($car_type2) || $car_type2 instanceof \think\Collection || $car_type2 instanceof \think\Paginator): $i = 0; $__LIST__ = $car_type2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;if($v['id'] == $list['car_type']): ?>
				<input name="car_type" type="text" class="input-text" value="<?php echo $v['typename']; ?>" readonly="true" >
			    <?php endif; endforeach; endif; else: echo "" ;endif; ?>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-3">运输费用：</label>
			<div class="formControls col-5">
				<input name="carriage" type="text" class="input-text" value="<?php echo $list['carriage']; ?>" readonly="true">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-3">支付方式：</label>
			<div class="formControls col-5">
			    <?php if(is_array($payment_mode2) || $payment_mode2 instanceof \think\Collection || $payment_mode2 instanceof \think\Paginator): $i = 0; $__LIST__ = $payment_mode2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;if($v['id'] == $list['payment_mode']): ?>
				<input name="payment_mode2" type="text" class="input-text" value="<?php echo $v['typename']; ?>" readonly="true" >
			    <?php endif; endforeach; endif; else: echo "" ;endif; ?>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-3">发票：</label>
			<div class="formControls col-5">
			    <?php if($list['invoice'] == '是'): ?>
				<input name="payment_mode2" type="text" class="input-text" value="是" readonly="true" >
				<?php else: ?>
				<input name="payment_mode2" type="text" class="input-text" value="否" readonly="true" >
			    <?php endif; ?>
			</div>
		</div>
		<!--<div class="row cl">
			<label class="form-label col-3">货物图片：</label>
			<div class="formControls col-5">
			<?php if($list['goods_photo'] != ''): ?>
				<div class="userimg"><img src="__IMG__<?php echo $list['goods_photo']; ?>" title="点击右键保存图片" /></div>
				<span class="btn-upload form-group">
                    <a href="__IMG__<?php echo $list['goods_photo']; ?>" class="btn btn-primary radius upload-btn" target="_blank" >
                    <i class="Hui-iconfont">&#xe642;</i> 点击查看原图</a>
                </span>
			<?php else: ?>
			    <div>暂无图片</div>
			<?php endif; ?>
			</div>
		</div>-->
		<div class="row cl">
			<label class="form-label col-3">联系人：</label>
			<div class="formControls col-5">
				<input name="contact" type="text" class="input-text" value="<?php echo $list['contact']; ?>" readonly="true">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-3">联系电话：</label>
			<div class="formControls col-5">
				<input name="phone" type="text" class="input-text" value="<?php echo $list['phone']; ?>" readonly="true">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-3">发布人账号：</label>
			<div class="formControls col-5">
				<input name="uid" type="text" class="input-text" value="<?php echo $list['uid']; ?>" readonly="true">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-3">备注：</label>
			<div class="formControls col-5">
				<textarea name="" class="textarea"  readonly="true"><?php echo $list['goods_remark']; ?></textarea>
			</div>
		</div>
        <div class="row cl">
			<label class="form-label col-3">发布时间：</label>
			<div class="formControls col-5">
				<input name="time" type="text" class="input-text" value="<?php echo $list['time']; ?>" readonly="true">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-3">货源状态：</label>
			<div class="formControls col-5">
			<?php if($list['order_state'] == 1): ?>
				<input name="order_state" type="text" class="input-text" value="未抢单" readonly="true">
			<?php else: ?>
			    <input name="order_state" type="text" class="input-text" value="已抢单" readonly="true">
			<?php endif; ?>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-3">是否自营：</label>
			<div class="formControls col-5">
			<?php if($list['is_company'] == 0): ?>
				<input name="is_company" type="text" class="input-text" value="非自营" readonly="true">
			<?php elseif($list['is_company'] == 1): ?>
			    <input name="is_company" type="text" class="input-text" value="自营" readonly="true">
			<?php endif; ?>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-3">审核状态：</label>
			<div class="formControls col-5">
			<?php if($list['check_state'] == 1): ?>
				<input name="check_state" type="text" class="input-text" value="未审核" readonly="true">
			<?php elseif($list['check_state'] == 2): ?>
			    <input name="check_state" type="text" class="input-text" value="审核通过" readonly="true">
			<?php else: ?>
			    <input name="check_state" type="text" class="input-text" value="审核未通过" readonly="true">
			<?php endif; ?>
			</div>
		</div>
	</form>
</div>
<script type="text/javascript">
$(function(){
	$('.skin-minimal input').iCheck({
		checkboxClass: 'icheckbox-blue',
		radioClass: 'iradio-blue',
		increaseArea: '20%'
	});
	$.Huitab("#tab-system .tabBar span","#tab-system .tabCon","current","click","0");

	$('.userimg').hover(function(){
		$(this).next('.userimg1').show();
	},function(){
		$(this).next('.userimg1').hide();
	})
});
</script>
</body>
</html>