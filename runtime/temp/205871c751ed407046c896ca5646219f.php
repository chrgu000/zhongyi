<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:74:"E:\wamp\www\transport\public/../application/index\view\path\pathorder.html";i:1506418102;}*/ ?>
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
<form action="<?php echo url('Order/order_path'); ?>" method="post" target="_parent">
<input type="hidden" name="user_id" value="<?php echo session('userid');?>">
<input type="hidden" name="path_id" value="<?php echo $id1; ?>">
<div class="rz-Form" style="margin: 0px; width: 500px; height: auto;">
	<ul class="order_ku">
		<?php if(is_array($goodsres) || $goodsres instanceof \think\Collection || $goodsres instanceof \think\Paginator): $i = 0; $__LIST__ = $goodsres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
		<li>
			<div class="order_r fl">
			<p><span>货物名称：</span><?php echo $v['goods_name']; ?></p>
			<p><span>货物类型：</span>
				<?php if(is_array($goods_type) || $goods_type instanceof \think\Collection || $goods_type instanceof \think\Paginator): $i = 0; $__LIST__ = $goods_type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v2): $mod = ($i % 2 );++$i;if($v2['id'] == $v['goods_type']): ?>
                      	<?php echo $v2['typename']; endif; endforeach; endif; else: echo "" ;endif; ?>
			<span style="margin-left: 20px;">运输费用：</span><?php echo $v['carriage']; ?>元
			</p>
			<p><span>货物规格：</span><?php echo $v['standard_ton']; ?>吨；&nbsp;<?php echo $v['standard_square']; ?>方</p>
			<p><span>始发地：</span><?php echo $v['starting_address']; ?></p>
			<p><span>目的地：</span><?php echo $v['destination']; ?></p>
			</div>
			<div class="check fr">
				<label>
					<input name="goods_id" value="<?php echo $v['id']; ?>" type="radio" class="checkitem"><!-- <span class=" glyphicon glyphicon-ok"></span> -->
					<input name="goodsname" value="<?php echo $v['goods_name']; ?>" type="radio" class="checkitem">
				</label>
			</div>
			<div class="clearfix"></div>
		</li>
		<?php endforeach; endif; else: echo "" ;endif; ?>
	</ul>
	<div class="pages">
		<div id="paging1" class="page light-theme simple-pagination" style="text-align: center;" >
	        <?php echo $goodsres->render(); ?>
		</div>
	</div>
	<div class="rz-model" style="position:relative; text-align: center;">
		<input type="submit" name="" class="rz_sub" value="下单">
	</div>
</div>
</form>
<script type="text/javascript" src="__PUBLIC__/js/jquery.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/sitepicker.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/bootstrap.min.js"></script>
<script src="__PUBLIC__/js/Ecalendar.jquery.min.js"></script>
<script src="__PUBLIC__/js/main.js"></script>
</body>
</html>