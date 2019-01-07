<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:79:"E:\WWW\zhongyi\public/../application/admin\view\goodsconfig\goodstype-list.html";i:1506419049;}*/ ?>
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
<link href="../../../static/admin/lib/Hui-iconfont/1.0.1/iconfont.css" rel="stylesheet" type="text/css" />
<!--[if IE 6]>
<script type="text/javascript" src="lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>货源管理</title>
</head>
<body>
<nav class="breadcrumb">
    <i class="Hui-iconfont">&#xe67f;</i> 首页 
    <span class="c-gray en">&gt;</span> 货源管理 
    <span class="c-gray en">&gt;</span> 类别列表 
    <a class="btn btn-success radius r mr-20" style="line-height:1.6em;margin-top:3px" 
    href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a>
</nav>
<div class="pd-20">
<div id="tab-system" class="HuiTab">
<div class="tabBar cl">
    <span>车长类别</span>
    <span>车型类别</span>
    <span>货物类型</span>
    <span>货物品类</span>
    <span>支付方式类别</span>
    <span>库存温度类别</span>
    <span>库存时间类别</span>
</div>
<div class="tabCon"><!--车长类别列表-->
<div class="pd-20">
	<div class="cl pd-5 bg-1 bk-gray mt-20">  
    <span class="r">共有数据：<strong><?php echo $counts1; ?></strong> 条</span> 
    </div>
    <div>
	    <table class="table table-border table-bordered table-hover table-bg table-sort">
		    <thead>
			    <tr class="text-c">
				    <th width="10%">类别ID</th>
				    <th >类别名称</th>
				    <th width="20%">操作</th>
			    </tr>
		    </thead>
		    <tbody>
		       <?php if(is_array($list1) || $list1 instanceof \think\Collection || $list1 instanceof \think\Paginator): $i = 0; $__LIST__ = $list1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
			    <tr class="text-c">
				    <td><?php echo $v['id']; ?></td>
				    <td><?php echo $v['typename']; ?></td>
				    <td class="td-manage">
				    <?php if(in_array('99',$privilege)){ ?>
                        <a title="删除" href="<?php echo url('Goodsconfig/carlongdel',array('id'=>$v['id'])); ?>"  onclick="return confirm('确定要删除吗？')" class="ml-5" style="text-decoration:none">
                        <i class="Hui-iconfont">&#xe6e2;</i></a><?php } ?>
				    </td>
			    </tr>
			  <?php endforeach; endif; else: echo "" ;endif; ?>
		    </tbody>
	    </table>
    </div>
</div>	
</div>

<div class="tabCon"><!--车型类别列表-->
<div class="pd-20">
	<div class="cl pd-5 bg-1 bk-gray mt-20">  
    <span class="r">共有数据：<strong><?php echo $counts2; ?></strong> 条</span> 
    </div>
    <div>
	    <table class="table table-border table-bordered table-hover table-bg table-sort">
		    <thead>
			    <tr class="text-c">
				    <th width="10%">类别ID</th>
				    <th >类别名称</th>
				    <th width="20%">操作</th>
			    </tr>
		    </thead>
		    <tbody>
		       <?php if(is_array($list2) || $list2 instanceof \think\Collection || $list2 instanceof \think\Paginator): $i = 0; $__LIST__ = $list2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
			    <tr class="text-c">
				    <td><?php echo $v['id']; ?></td>
				    <td><?php echo $v['typename']; ?></td>
				    <td class="td-manage">
				    <?php if(in_array('99',$privilege)){ ?>
                        <a title="删除" href="<?php echo url('Goodsconfig/cartypedel',array('id'=>$v['id'])); ?>"  onclick="return confirm('确定要删除吗？')" class="ml-5" style="text-decoration:none">
                        <i class="Hui-iconfont">&#xe6e2;</i></a><?php } ?>
				    </td>
			    </tr>
			  <?php endforeach; endif; else: echo "" ;endif; ?>
		    </tbody>
	    </table>
    </div>
</div>
</div>

<div class="tabCon"><!--货物类型列表-->
<div class="pd-20">
	<div class="cl pd-5 bg-1 bk-gray mt-20">  
    <span class="r">共有数据：<strong><?php echo $counts3; ?></strong> 条</span> 
    </div>
    <div>
	    <table class="table table-border table-bordered table-hover table-bg table-sort">
		    <thead>
			    <tr class="text-c">
				    <th width="10%">类别ID</th>
				    <th >类别名称</th>
				    <th width="20%">操作</th>
			    </tr>
		    </thead>
		    <tbody>
		       <?php if(is_array($list3) || $list3 instanceof \think\Collection || $list3 instanceof \think\Paginator): $i = 0; $__LIST__ = $list3;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
			    <tr class="text-c">
				    <td><?php echo $v['id']; ?></td>
				    <td><?php echo $v['typename']; ?></td>
				    <td class="td-manage">
				    <?php if(in_array('99',$privilege)){ ?>
                        <a title="删除" href="<?php echo url('Goodsconfig/coldtypedel',array('id'=>$v['id'])); ?>"  onclick="return confirm('确定要删除吗？')" class="ml-5" style="text-decoration:none">
                        <i class="Hui-iconfont">&#xe6e2;</i></a><?php } ?>
				    </td>
			    </tr>
			  <?php endforeach; endif; else: echo "" ;endif; ?>
		    </tbody>
	    </table>
    </div>
</div>
</div>

<div class="tabCon"><!--货物品类列表-->
<div class="pd-20">
	<div class="cl pd-5 bg-1 bk-gray mt-20">  
    <span class="r">共有数据：<strong><?php echo $counts4; ?></strong> 条</span> 
    </div>
    <div>
	    <table class="table table-border table-bordered table-hover table-bg table-sort">
		    <thead>
			    <tr class="text-c">
				    <th width="10%">类别ID</th>
				    <th >类别名称</th>
				    <th width="20%">操作</th>
			    </tr>
		    </thead>
		    <tbody>
		       <?php if(is_array($list4) || $list4 instanceof \think\Collection || $list4 instanceof \think\Paginator): $i = 0; $__LIST__ = $list4;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
			    <tr class="text-c">
				    <td><?php echo $v['id']; ?></td>
				    <td><?php echo $v['typename']; ?></td>
				    <td class="td-manage">
				    <?php if(in_array('99',$privilege)){ ?>
                        <a title="删除" href="<?php echo url('Goodsconfig/kindtypedel',array('id'=>$v['id'])); ?>"  onclick="return confirm('确定要删除吗？')" class="ml-5" style="text-decoration:none">
                        <i class="Hui-iconfont">&#xe6e2;</i></a><?php } ?>
				    </td>
			    </tr>
			  <?php endforeach; endif; else: echo "" ;endif; ?>
		    </tbody>
	    </table>
    </div>
</div>
</div>

<div class="tabCon"><!--支付方式类别列表-->
<div class="pd-20">
	<div class="cl pd-5 bg-1 bk-gray mt-20">  
    <span class="r">共有数据：<strong><?php echo $counts5; ?></strong> 条</span> 
    </div>
    <div>
	    <table class="table table-border table-bordered table-hover table-bg table-sort">
		    <thead>
			    <tr class="text-c">
				    <th width="10%">类别ID</th>
				    <th >类别名称</th>
				    <th width="20%">操作</th>
			    </tr>
		    </thead>
		    <tbody>
		       <?php if(is_array($list5) || $list5 instanceof \think\Collection || $list5 instanceof \think\Paginator): $i = 0; $__LIST__ = $list5;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
			    <tr class="text-c">
				    <td><?php echo $v['id']; ?></td>
				    <td><?php echo $v['typename']; ?></td>
				    <td class="td-manage">
				    <?php if(in_array('99',$privilege)){ ?>
                        <a title="删除" href="<?php echo url('Goodsconfig/paytypedel',array('id'=>$v['id'])); ?>"  onclick="return confirm('确定要删除吗？')" class="ml-5" style="text-decoration:none">
                        <i class="Hui-iconfont">&#xe6e2;</i></a><?php } ?>
				    </td>
			    </tr>
			  <?php endforeach; endif; else: echo "" ;endif; ?>
		    </tbody>
	    </table>
    </div>
</div>
</div>

<div class="tabCon"><!--库存温度类别列表-->
<div class="pd-20">
	<div class="cl pd-5 bg-1 bk-gray mt-20">  
    <span class="r">共有数据：<strong><?php echo $counts6; ?></strong> 条</span> 
    </div>
    <div>
	    <table class="table table-border table-bordered table-hover table-bg table-sort">
		    <thead>
			    <tr class="text-c">
				    <th width="10%">类别ID</th>
				    <th >类别名称</th>
				    <th width="20%">操作</th>
			    </tr>
		    </thead>
		    <tbody>
		       <?php if(is_array($list6) || $list6 instanceof \think\Collection || $list6 instanceof \think\Paginator): $i = 0; $__LIST__ = $list6;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
			    <tr class="text-c">
				    <td><?php echo $v['id']; ?></td>
				    <td><?php echo $v['typename']; ?></td>
				    <td class="td-manage">
				    <?php if(in_array('99',$privilege)){ ?>
                        <a title="删除" href="<?php echo url('Goodsconfig/temperaturedel',array('id'=>$v['id'])); ?>"  onclick="return confirm('确定要删除吗？')" class="ml-5" style="text-decoration:none">
                        <i class="Hui-iconfont">&#xe6e2;</i></a><?php } ?>
				    </td>
			    </tr>
			  <?php endforeach; endif; else: echo "" ;endif; ?>
		    </tbody>
	    </table>
    </div>
</div>
</div>

<div class="tabCon"><!--库存时间类别列表-->
<div class="pd-20">
	<div class="cl pd-5 bg-1 bk-gray mt-20">  
    <span class="r">共有数据：<strong><?php echo $counts7; ?></strong> 条</span> 
    </div>
    <div>
	    <table class="table table-border table-bordered table-hover table-bg table-sort">
		    <thead>
			    <tr class="text-c">
				    <th width="10%">类别ID</th>
				    <th >类别名称</th>
				    <th width="20%">操作</th>
			    </tr>
		    </thead>
		    <tbody>
		       <?php if(is_array($list7) || $list7 instanceof \think\Collection || $list7 instanceof \think\Paginator): $i = 0; $__LIST__ = $list7;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
			    <tr class="text-c">
				    <td><?php echo $v['id']; ?></td>
				    <td><?php echo $v['typename']; ?></td>
				    <td class="td-manage">
				    <?php if(in_array('99',$privilege)){ ?>
                        <a title="删除" href="<?php echo url('Goodsconfig/timedel',array('id'=>$v['id'])); ?>"  onclick="return confirm('确定要删除吗？')" class="ml-5" style="text-decoration:none">
                        <i class="Hui-iconfont">&#xe6e2;</i></a><?php } ?>
				    </td>
			    </tr>
			  <?php endforeach; endif; else: echo "" ;endif; ?>
		    </tbody>
	    </table>
    </div>
</div>
</div>

</div>
</div>
<script type="text/javascript" src="__PUBLIC__/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="__PUBLIC__/lib/Validform/5.3.2/Validform.min.js"></script> 
<script type="text/javascript" src="__PUBLIC__/lib/layer/1.9.3/layer.js"></script> 
<script type="text/javascript" src="__PUBLIC__/lib/icheck/jquery.icheck.min.js"></script> 
<script type="text/javascript" src="__PUBLIC__/js/H-ui.js"></script> 
<script type="text/javascript" src="__PUBLIC__/js/H-ui.admin.js"></script> 
<script type="text/javascript" src="lib/My97DatePicker/WdatePicker.js"></script> 
<script type="text/javascript">
$(function(){
	$('.skin-minimal input').iCheck({
		checkboxClass: 'icheckbox-blue',
		radioClass: 'iradio-blue',
		increaseArea: '20%'
	});
	$.Huitab("#tab-system .tabBar span","#tab-system .tabCon","current","click","0");
});

/*图片-添加*/
function picture_add(title,url){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}
</script>
</body>
</html>