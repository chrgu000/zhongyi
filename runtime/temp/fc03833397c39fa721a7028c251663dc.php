<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:75:"E:\wamp\www\transport\public/../application/admin\view\warehouse\check.html";i:1506419483;}*/ ?>
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
<title>库源详情</title>
</head>
<body>
<a class="btn btn-success radius r mr-20" style="line-height:1.6em;margin-top:3px" 
    href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a>
<div class="pd-20">
	<form action="<?php echo url('Warehouse/check'); ?>" method="post" class="form form-horizontal" id="form-admin-add">
	    <input type="hidden" name="id" value="<?php echo $list['id']; ?>">
	    <div class="row cl">
			<label class="form-label col-3">仓库名称：</label>
			<div class="formControls col-7">
				<input name="wh_name" type="text" class="input-text" value="<?php echo $list['wh_name']; ?>" readonly="true" title="<?php echo $list['wh_name']; ?>">
			</div>
		</div>
	    <div class="row cl">
			<label class="form-label col-3">仓库地址:</label>
			<div class="formControls col-7">
				<input name="wh_address" type="text" class="input-text" value="<?php echo $list['wh_address']; ?>" readonly="true" style="width: 47%" title="<?php echo $list['wh_address']; ?>">——
				<input name="wh_address_detail" type="text" class="input-text" value="<?php echo $list['wh_address_detail']; ?>" readonly="true" style="width: 47%" title="<?php echo $list['wh_address_detail']; ?>">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-3">仓库价钱：</label>
			<div class="formControls col-5">
				<?php if($list['wh_price_type'] == '0'): ?>
	                <input name="wh_price" type="text" class="input-text" value="<?php echo $list['wh_price']; ?>元/天/托" readonly="true" >
	            <?php elseif($list['wh_price_type'] == '1'): ?>
	                <input name="wh_price" type="text" class="input-text" value="<?php echo $list['wh_price']; ?>元/天/平" readonly="true" >
	            <?php elseif($list['wh_price_type'] == '2'): ?>
	                <input name="wh_price" type="text" class="input-text" value="<?php echo $list['wh_price']; ?>元/天/吨" readonly="true" >
	            <?php elseif($list['wh_price_type'] == '3'): ?>
	                <input name="wh_price" type="text" class="input-text" value="<?php echo $list['wh_price']; ?>元/天/方" readonly="true" >
	            <?php endif; ?>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-3">仓库类型：</label>
			<div class="formControls col-5">
				<input name="wh_type" type="text" class="input-text" value="<?php echo $list['wh_type']; ?>" readonly="true">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-3">发票：</label>
			<div class="formControls col-5">
			    <?php if($list['wh_invoice'] == '提供发票'): ?>
				<input name="wh_invoice" type="text" class="input-text" value="提供发票" readonly="true" >
				<?php else: ?>
				<input name="wh_invoice" type="text" class="input-text" value="不提供发票" readonly="true" >
			    <?php endif; ?>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-3">增值服务：</label>
			<div class="formControls col-5">
				<input name="wh_service" type="text" class="input-text" value="<?php echo $list['wh_service']; ?>" readonly="true">
			</div>
		</div>
		<div class="row cl">
		    <label class="form-label col-3" style="text-align: right;">仓库面积:</label>
		</div>
		<div class="row cl">
			<label class="form-label col-3">常温:</label>
			<div class="formControls col-5">
				<input name="normal_area" type="text" class="input-text" value="<?php echo $list['normal_area']; ?>" readonly="true" style="width: 40%">(平方)
				<input name="normal_volume" type="text" class="input-text" value="<?php echo $list['normal_volume']; ?>" readonly="true" style="width: 40%">(立方)
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-3">冷藏:</label>
			<div class="formControls col-5">
				<input name="coldstorage_area" type="text" class="input-text" value="<?php echo $list['coldstorage_area']; ?>" readonly="true" style="width: 40%">(平方)
				<input name="coldstorage_volume" type="text" class="input-text" value="<?php echo $list['coldstorage_volume']; ?>" readonly="true" style="width: 40%">(立方)
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-3">冷冻:</label>
			<div class="formControls col-5">
				<input name="freeze_area" type="text" class="input-text" value="<?php echo $list['freeze_area']; ?>" readonly="true" style="width: 40%">(平方)
				<input name="freeze_volume" type="text" class="input-text" value="<?php echo $list['freeze_volume']; ?>" readonly="true" style="width: 40%">(立方)
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-3">急冻:</label>
			<div class="formControls col-5">
				<input name="quickfreeze_area" type="text" class="input-text" value="<?php echo $list['quickfreeze_area']; ?>" readonly="true" style="width: 40%">(平方)
				<input name="quickfreeze_volume" type="text" class="input-text" value="<?php echo $list['quickfreeze_volume']; ?>" readonly="true" style="width: 40%">(立方)
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-3">深冷:</label>
			<div class="formControls col-5">
				<input name="deepcold_area" type="text" class="input-text" value="<?php echo $list['deepcold_area']; ?>" readonly="true" style="width: 40%">(平方)
				<input name="deepcold_volume" type="text" class="input-text" value="<?php echo $list['deepcold_volume']; ?>" readonly="true" style="width: 40%">(立方)
			</div>
		</div>
        <!--<div class="row cl">
			<label class="form-label col-3">可用库存:</label>
			<div class="formControls col-5">
				<input name="useable_area" type="text" class="input-text" value="<?php echo $list['useable_area']; ?>" readonly="true" style="width: 40%">(平方)
				<input name="useable_volume" type="text" class="input-text" value="<?php echo $list['useable_volume']; ?>" readonly="true" style="width: 40%">(立方)
			</div>
		</div>-->
		<div class="row cl">
			<label class="form-label col-3">仓库图片：</label>
			<div class="formControls col-5">
			<?php if($list['wh_photo'] != ''): ?>
				<div class="userimg"><img src="__IMG__<?php echo $list['wh_photo']; ?>" title="点击右键保存图片"  /></div>
				<span class="btn-upload form-group">
                    <a href="__IMG__<?php echo $list['wh_photo']; ?>" class="btn btn-primary radius upload-btn" target="_blank" >
                    <i class="Hui-iconfont">&#xe642;</i> 点击查看原图</a>
                </span>
			<?php else: ?>
			    <div>暂无图片</div>
			<?php endif; ?>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-3">联系人：</label>
			<div class="formControls col-5">
				<input name="wh_contact" type="text" class="input-text" value="<?php echo $list['wh_contact']; ?>" readonly="true">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-3">联系电话：</label>
			<div class="formControls col-5">
				<input name="wh_phone" type="text" class="input-text" value="<?php echo $list['wh_phone']; ?>" readonly="true">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-3">发布人账号：</label>
			<div class="formControls col-5">
				<input name="wh_uid" type="text" class="input-text" value="<?php echo $list['wh_uid']; ?>" readonly="true">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-3">备注：</label>
			<div class="formControls col-5">
				<textarea name="wh_remark" class="textarea"  readonly="true"><?php echo $list['wh_remark']; ?></textarea>
			</div>
		</div>
        <div class="row cl">
			<label class="form-label col-3">发布时间：</label>
			<div class="formControls col-5">
				<input name="wh_time" type="text" class="input-text" value="<?php echo $list['wh_time']; ?>" readonly="true">
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
				<a class="btn btn-primary radius" href="<?php echo url('Warehouse/checklst'); ?>">&nbsp;&nbsp;返回&nbsp;&nbsp;</a>
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