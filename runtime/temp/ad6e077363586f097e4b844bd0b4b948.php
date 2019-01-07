<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:75:"E:\WWW\zhongyi\public/../application/admin\view\usertype\usertype-list.html";i:1506419463;}*/ ?>
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
<link type="text/css" rel="stylesheet" href="__PUBLIC__/css/page.css"/>
<link href="../../../static/admin/lib/Hui-iconfont/1.0.1/iconfont.css" rel="stylesheet" type="text/css" />
<!--[if IE 6]>
<script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>用户类别管理</title>
</head>
<body>

<nav class="breadcrumb"> 
     用户类别管理 <span class="c-gray en">&gt;</span> 
     类别列表 
     <!--<a class="btn btn-success radius r mr-20" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a>-->
</nav>

<div class="pd-20 nullwrap">
	<div class="text-c"> 
	    <form action="<?php echo url('Usertype/lst'); ?>" method="get">	
		     <input type="text" class="input-text" style="width:250px" placeholder="输入类别关键字" id="" name="keywords">
		     <button type="submit" class="btn btn-success radius"><i class="Hui-iconfont">&#xe665;</i> 搜索</button>
		</form>
	</div>
	<div class="cl pd-5 bg-1 bk-gray mt-20"> 
	<form action="<?php echo url('Usertype/p_del'); ?>" method="post">
	<?php if(in_array('83',$privilege)){ ?>
    <span class="l">
          <button type="submit" class="btn btn-danger radius" onclick="return confirm('确定全部删除？')">
          <i class="Hui-iconfont">&#xe6e2;</i> 批量删除</button>
    </span> 
    <?php } ?>
    <span class="r">共有数据：<strong><?php echo $counts; ?></strong> 条</span> 
    </div>

    <div class="mt-20">
	    <table class="table table-border table-bordered table-hover table-bg table-sort nulltable">
		    <thead>
			    <tr class="text-c">
				    <th width="50"><input type="checkbox" name="" value=""></th>
				    <th width="100">类别ID</th>
				    <th >类别名称</th>
				    <th width="200">操作</th>
			    </tr>
		    </thead>
		    <tbody>
		       <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "<p class='nulltext'>暂无相关信息</p>" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
			    <tr class="text-c">
				    <td><input type="checkbox" value="<?php echo $v['id']; ?>" name="id[]"></td>
				    <td><?php echo $v['id']; ?></td>
				    <td><?php echo $v['typename']; ?></td>
				    <td class="td-manage">
				    <?php if(in_array('81',$privilege)){ ?>
				        <a title="编辑"  href="<?php echo url('Usertype/edit',array('id'=>$v['id'])); ?>" class="ml-5" style="text-decoration:none">
                        <i class="Hui-iconfont">&#xe6df;</i></a> <?php } if(in_array('82',$privilege)){ ?>
                        <a title="删除" href="<?php echo url('Usertype/del',array('id'=>$v['id'])); ?>"  onclick="return confirm('确定要删除吗？')" class="ml-5" style="text-decoration:none">
                        <i class="Hui-iconfont">&#xe6e2;</i></a><?php } ?>
				    </td>
			    </tr>
			  <?php endforeach; endif; else: echo "<p class='nulltext'>暂无相关信息</p>" ;endif; ?>
		    </tbody>
	    </table>
	    <div id="paging1" class="page light-theme simple-pagination"><?php echo $page; ?></div>
    </div>
    </form>
</div>
<script type="text/javascript" src="__PUBLIC__/lib/jquery/1.9.1/jquery.min.js"></script>  
<script type="text/javascript" src="__PUBLIC__/lib/layer/1.9.3/layer.js"></script> 
<script type="text/javascript" src="__PUBLIC__/lib/laypage/1.2/laypage.js"></script> 
<script type="text/javascript" src="__PUBLIC__/lib/My97DatePicker/WdatePicker.js"></script> 
<script type="text/javascript" src="__PUBLIC__/js/H-ui.js"></script> 
<script type="text/javascript" src="__PUBLIC__/js/H-ui.admin.js"></script> 
</body>
</html>