<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:76:"E:\wamp\www\transport\public/../application/admin\view\user\user-detail.html";i:1507622105;}*/ ?>
<!DOCTYPE HTML>
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
<script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>用户信息查看</title>
</head>
<body>
    
<div class="pd-20">
	<form action="" method="post" class="form form-horizontal" id="form-admin-add">
	    <div class="row cl">
			<label class="form-label col-3">账号:</label>
			<div class="formControls col-5">
				<input name="username" type="text" class="input-text" value="<?php echo $list['username']; ?>" readonly="true">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-3">是否自营:</label>
			<div class="formControls col-5">
			<?php if($list['is_company'] == 0): ?>
				<input name="is_company" type="text" class="input-text" value="非自营" readonly="true">
			<?php elseif($list['is_company'] == 1): ?>
			    <input name="is_company" type="text" class="input-text" value="自营" readonly="true">
			<?php endif; ?>
			</div>
		</div>
        <div class="row cl">
			<label class="form-label col-3">用户角色：</label>
			<div class="formControls col-5">
			    <?php if(is_array($type) || $type instanceof \think\Collection || $type instanceof \think\Paginator): $i = 0; $__LIST__ = $type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;if($v['id'] == $list['type_id']): ?>
				<input name="type_id" type="text" class="input-text" value="<?php echo $v['typename']; ?>" readonly="true" >
			    <?php endif; endforeach; endif; else: echo "" ;endif; ?>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-3">认证类型：</label>
			<div class="formControls col-5">
				<input name="type" type="text" class="input-text" value="<?php echo $list['type']; ?>" readonly="true">
			</div>
		</div>

		<?php if($list['type'] == '物流公司'): ?>
		    <div class="row cl">
				<label class="form-label col-3">公司名称：</label>
				<div class="formControls col-5">
					<input name="company_name" type="text" class="input-text" value="<?php echo $list['company_name']; ?>" readonly="true">
				</div>
			</div>
			<div class="row cl">
				<label class="form-label col-3">营业执照：</label>
				<div class="formControls col-5">
				<?php if($list['business_card'] != ''): ?>
					<div class="userimg"><img src="__IMG__<?php echo $list['business_card']; ?>" title="点击右键保存图片" /></div>
					<span class="btn-upload form-group">
	                    <a href="__IMG__<?php echo $list['business_card']; ?>" class="btn btn-primary radius upload-btn" target="_blank" >
	                    <i class="Hui-iconfont">&#xe642;</i> 点击查看原图</a>
	                </span>
				<?php else: ?>
				    <div >暂无图片</div>
				<?php endif; ?>
				</div>
			</div>
			<div class="row cl">
				<label class="form-label col-3">道路运输许可证：</label>
				<div class="formControls col-5">
				<?php if($list['road_permit'] != ''): ?>
					<div class="userimg"><img src="__IMG__<?php echo $list['road_permit']; ?>" title="点击右键保存图片" /></div>
					<span class="btn-upload form-group">
	                    <a href="__IMG__<?php echo $list['road_permit']; ?>" class="btn btn-primary radius upload-btn" target="_blank" >
	                    <i class="Hui-iconfont">&#xe642;</i> 点击查看原图</a>
	                </span>
				<?php else: ?>
				    <div >暂无图片</div>
				<?php endif; ?>
				</div>
			</div>
		<?php elseif($list['type'] == '车主'): ?>
		    <div class="row cl">
				<label class="form-label col-3">真实姓名：</label>
				<div class="formControls col-5">
					<input name="real_name" type="text" class="input-text" value="<?php echo $list['real_name']; ?>" readonly="true">
				</div>
			</div>
			<div class="row cl">
				<label class="form-label col-3">身份证号：</label>
				<div class="formControls col-5">
					<input name="identity_id" type="text" class="input-text" value="<?php echo $list['identity_id']; ?>" readonly="true">
				</div>
			</div>
			<div class="row cl">
				<label class="form-label col-3">车牌号：</label>
				<div class="formControls col-5">
					<input name="car_id" type="text" class="input-text" value="<?php echo $list['car_id']; ?>" readonly="true">
				</div>
			</div>
			<div class="row cl">
				<label class="form-label col-3">行驶证：</label>
				<div class="formControls col-5">
				<?php if($list['driver_card'] != ''): ?>
					<div class="userimg"><img src="__IMG__<?php echo $list['driver_card']; ?>" title="点击右键保存图片" /></div>
					<span class="btn-upload form-group">
	                    <a href="__IMG__<?php echo $list['driver_card']; ?>" class="btn btn-primary radius upload-btn" target="_blank" >
	                    <i class="Hui-iconfont">&#xe642;</i> 点击查看原图</a>
	                </span>
				<?php else: ?>
				    <div>暂无图片</div>
				<?php endif; ?>
				</div>
			</div>
		<?php elseif($list['type'] == '个体货主'): ?>
		    <div class="row cl">
				<label class="form-label col-3">真实姓名：</label>
				<div class="formControls col-5">
					<input name="real_name" type="text" class="input-text" value="<?php echo $list['real_name']; ?>" readonly="true">
				</div>
			</div>
			<div class="row cl">
				<label class="form-label col-3">身份证号：</label>
				<div class="formControls col-5">
					<input name="identity_id" type="text" class="input-text" value="<?php echo $list['identity_id']; ?>" readonly="true">
				</div>
			</div>
			<div class="row cl">
				<label class="form-label col-3">个体经营许可证：</label>
				<div class="formControls col-5">
				<?php if($list['peison_business'] != ''): ?>
					<div class="userimg"><img src="__IMG__<?php echo $list['peison_business']; ?>" title="点击右键保存图片" /></div>
					<span class="btn-upload form-group">
	                    <a href="__IMG__<?php echo $list['peison_business']; ?>" class="btn btn-primary radius upload-btn" target="_blank" >
	                    <i class="Hui-iconfont">&#xe642;</i> 点击查看原图</a>
	                </span>
				<?php else: ?>
				    <div>暂无图片</div>
				<?php endif; ?>
				</div>
			</div>
		<?php elseif($list['type'] == '公司货主'): ?>
		    <div class="row cl">
				<label class="form-label col-3">公司名称：</label>
				<div class="formControls col-5">
					<input name="company_name" type="text" class="input-text" value="<?php echo $list['company_name']; ?>" readonly="true">
				</div>
			</div>
			<div class="row cl">
				<label class="form-label col-3">营业执照：</label>
				<div class="formControls col-5">
				<?php if($list['business_card'] != ''): ?>
					<div class="userimg"><img src="__IMG__<?php echo $list['business_card']; ?>" title="点击右键保存图片" /></div>
					<span class="btn-upload form-group">
	                    <a href="__IMG__<?php echo $list['business_card']; ?>" class="btn btn-primary radius upload-btn" target="_blank" >
	                    <i class="Hui-iconfont">&#xe642;</i> 点击查看原图</a>
	                </span>
				<?php else: ?>
				    <div >暂无图片</div>
				<?php endif; ?>
				</div>
			</div>
		<?php elseif($list['type'] == '库主'): ?>
		    <div class="row cl">
				<label class="form-label col-3">公司名称：</label>
				<div class="formControls col-5">
					<input name="company_name" type="text" class="input-text" value="<?php echo $list['company_name']; ?>" readonly="true">
				</div>
			</div>
			<div class="row cl">
				<label class="form-label col-3">营业执照：</label>
				<div class="formControls col-5">
				<?php if($list['business_card'] != ''): ?>
					<div class="userimg"><img src="__IMG__<?php echo $list['business_card']; ?>" title="点击右键保存图片" /></div>
					<span class="btn-upload form-group">
	                    <a href="__IMG__<?php echo $list['business_card']; ?>" class="btn btn-primary radius upload-btn" target="_blank" >
	                    <i class="Hui-iconfont">&#xe642;</i> 点击查看原图</a>
	                </span>
				<?php else: ?>
				    <div >暂无图片</div>
				<?php endif; ?>
				</div>
			</div>
		<?php endif; ?>
        <div class="row cl">
			<label class="form-label col-3">注册时间：</label>
			<div class="formControls col-5">
				<input name="time" type="text" class="input-text" value="<?php echo $list['time']; ?>" readonly="true">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-3">审核状态：</label>
			<div class="formControls col-5">
				<?php if($list['check_state'] == 0): ?>
				<input name="time" type="text" class="input-text" value="未认证" readonly="true">
				<?php elseif($list['check_state'] == 1): ?>
				<input name="time" type="text" class="input-text" value="审核通过" readonly="true">
				<?php elseif($list['check_state'] == 2): ?>
				<input name="time" type="text" class="input-text" value="审核不通过" readonly="true">
				<?php elseif($list['check_state'] == 3): ?>
				<input name="time" type="text" class="input-text" value="审核中" readonly="true">
				<?php endif; ?>
			</div>
		</div>
	</form>
</div>
<script type="text/javascript" src="__PUBLIC__/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="__PUBLIC__/lib/icheck/jquery.icheck.min.js"></script> 
<script type="text/javascript" src="__PUBLIC__/lib/Validform/5.3.2/Validform.min.js"></script> 
<script type="text/javascript" src="__PUBLIC__/lib/layer/1.9.3/layer.js"></script> 
<script type="text/javascript" src="__PUBLIC__/js/H-ui.js"></script> 
<script type="text/javascript" src="__PUBLIC__/js/H-ui.admin.js"></script> 
<script type="text/javascript">
$(function(){
	$('.skin-minimal input').iCheck({
		checkboxClass: 'icheckbox-blue',
		radioClass: 'iradio-blue',
		increaseArea: '20%'
	});
	
	$("#form-admin-add").Validform({
		tiptype:2,
		callback:function(form){
			form[0].submit();
			var index = parent.layer.getFrameIndex(window.name);
			parent.$('.btn-refresh').click();
			parent.layer.close(index);
		}
	});

	$('.userimg').hover(function(){
		$(this).next('.userimg1').show();
	},function(){
		$(this).next('.userimg1').hide();
	})
});
</script>
</body>
</html>