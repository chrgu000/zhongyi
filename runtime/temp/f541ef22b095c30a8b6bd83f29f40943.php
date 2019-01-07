<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:77:"E:\wamp\www\transport\public/../application/admin\view\web\customer-list.html";i:1506419518;}*/ ?>
﻿   <!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,member-scalable=no" />
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
<script type="text/javascript" src="__PUBLIC__/js/jquery.simplePagination.js"></script> 
<link type="text/css" rel="stylesheet" href="__PUBLIC__/css/page.css"/>
<!--[if IE 6]>
<script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>合作客户管理</title>
</head>
<body>

<nav class="breadcrumb"> 
     合作客户管理 <span class="c-gray en">&gt;</span> 
     客户列表 
     <a class="btn btn-success radius r mr-20" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a>
</nav>

<div class="pd-20">
	<div class="text-c"> 
	</div>
	<div class="cl pd-5 bg-1 bk-gray mt-20"> 
    <span class="l">
          <a href="<?php echo url('Web/customeradd'); ?>" class="btn btn-danger radius" >
          <i class="Hui-iconfont">&#xe600;</i> 添加合作客户</a>
    </span> 
    <span class="r">共有数据：<strong><?php echo $counts; ?></strong> 条</span> 
    </div>
    <div class="mt-20">
	    <table class="table table-border table-bordered table-hover table-bg table-sort">
		    <thead>
			    <tr class="text-c">
				    <th width="20%">名称</th>
				    <th width="25%">图片</th>
				    <th >地址</th>
				    <th width="10%">操作</th>
			    </tr>
		    </thead>
		    <tbody>
		       <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
			    <tr class="text-c">
				    <td><?php echo $v['name']; ?></td>
				    <td><div class="pptimg"><img src="__IMG__<?php echo $v['img']; ?>" /></div></td>
				    <td><?php echo $v['url']; ?></td>
				    <td class="td-manage">
                        <a title="删除" href="<?php echo url('Web/customerdel',array('id'=>$v['id'])); ?>"  onclick="return confirm('确定要删除吗？')" class="ml-5" style="text-decoration:none">
                        <i class="Hui-iconfont">&#xe6e2;</i></a>
				    </td>
			    </tr>
			  <?php endforeach; endif; else: echo "" ;endif; ?>
		    </tbody>
	    </table>
	    <div id="paging1" class="page light-theme simple-pagination"><?php echo $page; ?></div>
    </div>
</div>
</body>
</html>