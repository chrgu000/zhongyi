<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:67:"E:\WWW\transport\public/../application/admin\view\datatool\lst.html";i:1512349224;}*/ ?>
﻿<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<!--[if lt IE 9]>
<script type="text/javascript" src="lib/html5.js"></script>
<script type="text/javascript" src="lib/respond.min.js"></script>
<script type="text/javascript" src="lib/PIE_IE678.js"></script>
<![endif]-->
<link rel="icon" href="" type="image/x-icon"/>
<link type="text/css" rel="stylesheet" href="__PUBLIC__/css/page.css"/>
<link href="__PUBLIC__/css/H-ui.min.css" rel="stylesheet" type="text/css" />
<link href="__PUBLIC__/css/H-ui.admin.css" rel="stylesheet" type="text/css" />
<link href="__PUBLIC__/css/style.css" rel="stylesheet" type="text/css" />
<link href="../../../static/admin/lib/Hui-iconfont/1.0.1/iconfont.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="__PUBLIC__/js/jquery.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/jquery.simplePagination.js"></script>

<!--[if IE 6]>
<script type="text/javascript" src="lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>数据库备份列表</title>
</head>
<body>
<nav class="breadcrumb">
    <i class="Hui-iconfont">&#xe67f;</i> 首页 
    <span class="c-gray en">&gt;</span> 工具管理
    <span class="c-gray en">&gt;</span> 数据库工具
    <!--<a class="btn btn-success radius r mr-20" style="line-height:1.6em;margin-top:3px" 
    href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a>-->
</nav>
<div class="pd-20 nullwrap">
	<div class="col-md-4" style="padding-bottom: 10px;">
        <button style="margin-top: 5px;" type="button" class="btn btn-danger radius" onclick="handle('备份')">添加备份</button>
    </div>
	<table class="table table-border table-bordered table-bg databasetable">
		<thead>
			<tr>
				<th scope="col" colspan="9">备份列表</th>
			</tr>
			<tr class="text-c">
				<th width="30%">备份名称</th>
				<th width="30%">备份时间</th>
				<th width="20%">备份大小</th>
				<th width="20%">操作</th>
			</tr>
		</thead>
		<tbody>
			<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
              <tr class="text-c">
                  <!-- <th scope="row"><?php echo $vo['part']; ?></th> -->
                  <td><?php echo $vo['name']; ?></td>
                  <td><?php echo $key; ?></td>
                  <td><?php echo $vo['size']; ?></td>
                  <td>
                 <!--  <a class="btn btn-xs btn-success" href="<?php echo url('Datatool/lst',['tp'=>'dowonload','name'=>$vo['name']]); ?>">下载</a> -->
                 <a class="btn btn-xs btn-warning" href="<?php echo url('Datatool/download',array('name'=>$vo['name'])); ?>">下载</a>
                  <button type="button" class="btn btn-xs btn-warning" onclick="handle('还原','<?php echo $vo['name']; ?>')">还原</button>
                  <button type="button"  class="btn btn-xs btn-danger" onclick="handle('删除','<?php echo $vo['time']; ?>')">删除</button>
                  </td>
              </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
		</tbody>		
	</table>
</div>
<script type="text/javascript" src="__PUBLIC__/lib/jquery/1.9.1/jquery.min.js"></script>  
<script type="text/javascript" src="__PUBLIC__/lib/layer/1.9.3/layer.js"></script> 
<script type="text/javascript" src="__PUBLIC__/lib/laypage/1.2/laypage.js"></script> 
<script type="text/javascript" src="__PUBLIC__/lib/My97DatePicker/WdatePicker.js"></script> 
<script type="text/javascript" src="__PUBLIC__/js/H-ui.js"></script> 
<script type="text/javascript" src="__PUBLIC__/js/H-ui.admin.js"></script> 
<script>
     function handle(tp,name=''){        
        if (tp){
            var msg = "你确定要"+ tp +"吗？";
            if(confirm(msg) == false) {
                return false;
            }
            $.ajax({
                url:"<?php echo url('Datatool/lst'); ?>",
                type:'post',
            	  cache: false, 
                data:{tp:tp,name:name},
                dataType: "json",  
                success:function(result){
                    if(result.code == 1) {
                        alert('还原成功');
                    }
                    if(result.code == 2) {
                        location.href = result.data;        
                    }
                }
            }); 
        }
    }
</script>
</body>
</html>