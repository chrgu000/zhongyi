<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:65:"E:\WWW\zhongyi\public/../application/admin\view\study\detail.html";i:1524486340;}*/ ?>
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
<title>视频详情查看</title>
</head>
<body>
    
<div class="pd-20">
	<form action="" method="post" class="form form-horizontal" id="form-admin-add">
	    <div class="row cl">
			<label class="form-label col-3">视频名称:</label>
			<div class="formControls col-5">
				<input name="name" type="text" class="input-text" value="<?php echo $list['name']; ?>" readonly="true">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-3">是否显示:</label>
			<div class="formControls col-5">
				<span class="select-box">
	                <select class="select" size="1" name="statue" datatype="*" nullmsg="请选择是否显示！">
	                <?php if($list['statue'] == '是'): ?>
	                    <option value="是" selected="selected">是</option>
	                    <option value="否">否</option>
	                <?php else: ?>
	                    <option value="是">是</option>
	                    <option value="否" selected="selected">否</option>
	                <?php endif; ?>
	                </select>
	            </span>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-3">发布人:</label>
			<div class="formControls col-5">
				<input name="user" type="text" class="input-text" value="<?php echo $list['user']; ?>" readonly="true">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-3">发布时间:</label>
			<div class="formControls col-5">
				<input name="time" type="text" class="input-text" value="<?php echo $list['time']; ?>" readonly="true">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-3">视频:</label>
			<div class="formControls col-5">
				<video width="420" height="400" controls>
					<source src="__ROOT__<?php echo $list['url']; ?>" type="video/mp4">
				</video>
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