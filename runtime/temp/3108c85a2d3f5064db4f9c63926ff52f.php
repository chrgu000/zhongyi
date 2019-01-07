<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:70:"E:\wamp\www\transport\public/../application/admin\view\path\check.html";i:1506419255;}*/ ?>
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
<title>车源详情</title>
</head>
<body>
<a class="btn btn-success radius r mr-20" style="line-height:1.6em;margin-top:3px" 
    href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a>
<div class="pd-20">
	<form action="<?php echo url('Path/check'); ?>" method="post" class="form form-horizontal" id="form-admin-add">
	<input type="hidden" name="id" value="<?php echo $list['id']; ?>">
	    <div class="row cl">
			<label class="form-label col-3">始发地:</label>
			<div class="formControls col-5">
				<input name="startsite" type="text" class="input-text" value="<?php echo $list['startsite']; ?>" readonly="true" title="<?php echo $list['startsite']; ?>">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-3">目的地:</label>
			<div class="formControls col-5">
				<input name="endsite" type="text" class="input-text" value="<?php echo $list['endsite']; ?>" readonly="true"title="<?php echo $list['endsite']; ?>">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-3">常用车型：</label>
			<div class="formControls col-5">
				<input name="vehicle_type" type="text" class="input-text" value="<?php echo $list['vehicle_type']; ?>" readonly="true" title="<?php echo $list['vehicle_type']; ?>">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-3">常用车长：</label>
			<div class="formControls col-5">
				<input name="vehicle_length" type="text" class="input-text" value="<?php echo $list['vehicle_length']; ?>" readonly="true" title="<?php echo $list['vehicle_length']; ?>">
			</div>
		</div>
		<!--<div class="row cl">
			<label class="form-label col-3">金额：</label>
			<div class="formControls col-5">
				<input name="money" type="text" class="input-text" value="<?php echo $list['money']; ?>" readonly="true">
			</div>
		</div>-->
		<div class="row cl">
			<label class="form-label col-3">发布人账号：</label>
			<div class="formControls col-5">
				<input name="uid" type="text" class="input-text" value="<?php echo $list['uid']; ?>" readonly="true">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-3">联系人：</label>
			<div class="formControls col-5">
				<input name="linkman" type="text" class="input-text" value="<?php echo $list['linkman']; ?>" readonly="true">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-3">联系电话：</label>
			<div class="formControls col-5">
				<input name="linkphone" type="text" class="input-text" value="<?php echo $list['linkphone']; ?>" readonly="true">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-3">发布人账号：</label>
			<div class="formControls col-5">
				<input name="uid" type="text" class="input-text" value="<?php echo $list['uid']; ?>" readonly="true">
			</div>
		</div>
        <div class="row cl">
			<label class="form-label col-3">发布时间：</label>
			<div class="formControls col-5">
				<input name="time" type="text" class="input-text" value="<?php echo $list['time']; ?>" readonly="true">
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
            <label class="form-label col-3">审核结果：</label>
            <div class="formControls col-5"> <span class="select-box">
                <select class="select" size="1" name="check_state" datatype="*" nullmsg="请选择审核结果！">
                    <option value=""  selected>请选择审核结果</option>
                        <option value="2">审核通过</option>
                        <option value="3">审核不通过</option>
                </select>
            </span> </div>
            <div class="col-2"> </div>
        </div>
        <div class="row cl">
			<div class="col-9 col-offset-3">
				<input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
				<a class="btn btn-primary radius" href="<?php echo url('Path/checklst'); ?>">&nbsp;&nbsp;返回&nbsp;&nbsp;</a>
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
	$.Huitab("#tab-system .tabBar span","#tab-system .tabCon","current","click","0");

	$('.userimg').hover(function(){
		$(this).next('.userimg1').show();
	},function(){
		$(this).next('.userimg1').hide();
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
});
</script>
</body>
</html>