<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:75:"E:\WWW\transport\public/../application/index\view\entrust\remarkrevise.html";i:1509528487;}*/ ?>
﻿<!DOCTYPE html>
<html lang="en" style="width: 500px;">
<head class="skin-head">
	<meta charset="UTF-8">
	<title>修改备注</title>	
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
	<style type="text/css">
		.submit{
			background: #337cc9; color: #fff; margin-top: 10px; padding:6px 30px; border-radius: 6px;
		}
		.rz-Form .remark{
			width: 400px; height: 100px; margin:0 auto; border:1px solid #ddd; display: block; padding:10px;
		}
	</style>
</head>
<body style="width: 500px; height: auto; padding:40px;">
<form action="<?php echo url('Entrust/remarkrevise'); ?>" method="post" class="rz-Form" style="margin:0px; text-align: center;" target="_parent">
	<input type="hidden" name="id" value="<?php echo $id; ?>">
	<input type="hidden" name="orderid" value="<?php echo $orderid; ?>">
    <textarea name="remark" class="remark"></textarea>
    <input type="submit" name="" value="提交" class="submit">
</form>
<script type="text/javascript" src="__PUBLIC__/js/jquery.min.js"></script>
<script src="__PUBLIC__/js/auth.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/sitepicker.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/bootstrap.min.js"></script>
<script src="__PUBLIC__/js/Ecalendar.jquery.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/lib/layer/1.9.3/layer.js"></script>
<script src="__PUBLIC__/js/main.js"></script>
</body>
</html>