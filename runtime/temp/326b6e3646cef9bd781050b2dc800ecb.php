<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:74:"E:\wamp\www\transport\public/../application/admin\view\path\path-list.html";i:1506419276;}*/ ?>
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
<link rel="stylesheet" href="__PUBLIC__/css/city-picker.css">
<link type="text/css" rel="stylesheet" href="__PUBLIC__/css/page.css"/>
<script type="text/javascript" src="__PUBLIC__/js/jquery.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/jquery.simplePagination.js"></script>  
<!--[if IE 6]>
<script type="text/javascript" src="lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>车源管理</title>
</head>
<body>
<nav class="breadcrumb">
    <i class="Hui-iconfont">&#xe67f;</i> 首页 
    <span class="c-gray en">&gt;</span> 车源管理 
    <span class="c-gray en">&gt;</span> 车源列表 
    <!--<a class="btn btn-success radius r mr-20" style="line-height:1.6em;margin-top:3px" 
    href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a>-->
</nav>
<div class="pd-20 nullwrap">
<div class="text-c">
<form action="<?php echo url('Path/lst'); ?>" method="get">
    车型：
	<select name="vehicle_type" class="input-text" style="width: 12%;">
	    <option value="">--请输入车型--</option>
	    <option value="普通货车" >普通货车</option>
		<option value="冷藏车">冷藏车</option>
		<option value="平板" >平板</option>
		<option value="常温箱式">常温箱式</option>
		<option value="集装箱" >集装箱</option>
		<option value="高栏" >高栏</option>
	</select>
	状态：
	    <select name="order_state" class="input-text" style="width: 12%;">
	        <option value="">--下单状态--</option>
	        <option value="1">未抢单</option>
		    <option value='2'>已抢单</option>
	    </select>
	是否自营：
    <select name="is_company" class="input-text" style="width: 10%;">
	    <option value="">--是否自营--</option>
	    <option value="2" >非自营</option>
		<option value='1' >自营</option>
	</select>
	车主账号：
	     <div  style="display: inline-block;">
            <input  name="uid"  class="input-text" type="text" placeholder="请输入车主账号" style="width: 150px;" value="">
        </div>
    <div class="text-c" style="margin-top: 10px;">
        车源id：
        <div  style="display: inline-block;">
            <input  name="id"  class="input-text" type="text" placeholder="请输入车源id" style="width: 170px;" value="">
        </div>
	    始发地：
        <div class="ku" style="display: inline-block;">
            <input onblur="mzReg(this)" name="startsite" id="name" class="input-text" type="text" placeholder="请输入始发地"  value="" style="width: 170px;">
            <div class="xiala"><h1><span>确认</span></h1></div>
        </div>
        目的地：
        <div class="ku1" style="display: inline-block;">
            <input onblur="mzReg(this)" name="endsite" id="name" class="input-text" type="text" placeholder="请输入目的地"  value=""  style="width: 150px;" >
            <div class="xiala1"><h1><span>确认</span></h1></div>
        </div>
        发布时间：
	    <input type="text" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd'})" id="datemin" class="input-text Wdate" style="width:15%" name="time" value="" placeholder="请输入发布时间" >
        <button type="submit" class="btn btn-success"><i class="Hui-iconfont">&#xe665;</i> 查询</button>
    </div>	
</form>
</div>
<div class="cl pd-5 bg-1 bk-gray mt-20" style="margin-top: 25px;">
    <span class="l">
        <a class="btn btn-danger radius" href="<?php echo url('Path/export',array('vehicle_type'=>session('pathvehicle_type'),'is_company'=>session('pathis_company'),'uid'=>session('pathuid'),'id'=>session('pathid'),'order_state'=>session('pathorder_state'),'startsite'=>session('pathstartsite'),'endsite'=>session('pathendsite'),'time'=>session('pathtime'))); ?>" style="margin-right: 5px;">
	    <i class="Hui-iconfont">&#xe632;</i> 导出数据</a>
    </span>
	<form action="<?php echo url('Path/p_del'); ?>" method="post"> 
	<?php if(in_array('106',$privilege)){ ?>
        <span class="l">
            <button type="submit" class="btn btn-danger radius" onclick="return confirm('确定要删除吗？')" >
            <i class="Hui-iconfont">&#xe6e2;</i> 批量删除</button> 
            <!--<a class="btn btn-primary radius" onclick="picture_add('添加管理员','<?php echo url('Admin/add'); ?>')" href="javascript:;"  >
          <i class="Hui-iconfont">&#xe600;</i> 导出列表</a>-->
        </span> 
    <?php } ?>
        <span class="r">共有数据：<strong><?php echo $counts; ?></strong> 条</span> 
    </div>
	<table class="table table-border table-bordered table-bg nulltable">
		<thead>
			<tr>
				<th scope="col" colspan="13">车源列表</th>
			</tr>
			<tr class="text-c">
				<th width="5%"><input type="checkbox" name="" value=""></th>
				<th width=" ">路线</th>
				<th width="15%">常用车型</th>
				<th width="15%">常用车长</th>
				<th width="6%">发布时间</th>
				<th width="6%">联系人</th>
				<th width="8%">联系电话</th>
				<th width="8%">状态</th>
				<th width="8%">是否自营</th>
				<th width="8%">审核状态</th>
				<th width="8%">操作</th>
			</tr>
		</thead>
		<tbody>
		   <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "<p class='nulltext'>暂无相关信息</p>" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
			<tr class="text-c">
			    <td ><input type="checkbox" value="<?php echo $v['id']; ?>" name="id[]"></td>
				<td><?php echo $v['startsite']; ?>——<?php echo $v['endsite']; ?></td>
				<td><?php echo $v['vehicle_type']; ?></td>
				<td><?php echo $v['vehicle_length']; ?></td>
				<td ><?php echo $v['time']; ?></td>
				<td><?php echo $v['linkman']; ?></td>
				<td ><?php echo $v['linkphone']; ?></td>
				<td >
				    <?php if($v['order_state'] == 1): ?>未下单
				    <?php elseif($v['order_state'] == 2): ?>已下单
				    <?php endif; ?>
				</td>
				<td >
				    <?php if($v['is_company'] == 0): ?>非自营
				    <?php elseif($v['is_company'] == 1): ?>自营
				    <?php endif; ?>
				</td>
				<td >
				    <?php if($v['check_state'] == 1): ?>未审核
				    <?php elseif($v['check_state'] == 2): ?>通过
				    <?php else: ?>不通过
				    <?php endif; ?>
				</td>
				<td  class="td-manage">
                    <a title="查看" href="javascript:;" onclick="admin_add('查看详情','<?php echo url('Path/detail',array('id'=>$v['id'])); ?>','1100','550')" class="ml-5" style="text-decoration:none">
                    <i class="Hui-iconfont">&#xe665;</i></a> 
                    <?php if(in_array('165',$privilege)){ ?>
                    <a title="编辑"  href="<?php echo url('Path/edit',array('id'=>$v['id'])); ?>" class="ml-5" style="text-decoration:none">
                    <i class="Hui-iconfont">&#xe6df;</i></a> <?php } if(in_array('105',$privilege)){ ?>
                    <a title="删除" href="<?php echo url('Path/del',array('id'=>$v['id'])); ?>"  onclick="return confirm('确定要删除吗？')" class="ml-5" style="text-decoration:none">
                    <i class="Hui-iconfont">&#xe6e2;</i></a><?php } ?>
                </td>
			</tr>
			<?php endforeach; endif; else: echo "<p class='nulltext'>暂无相关信息</p>" ;endif; ?>
		</tbody>
	</table>
	<div id="paging1" class="page light-theme simple-pagination"><?php echo $page; ?></div>
	</form>
</div>	
</div>
<script type="text/javascript" src="__PUBLIC__/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="__PUBLIC__/lib/Validform/5.3.2/Validform.min.js"></script> 
<script type="text/javascript" src="__PUBLIC__/lib/layer/1.9.3/layer.js"></script> 
<script type="text/javascript" src="__PUBLIC__/lib/icheck/jquery.icheck.min.js"></script> 
<script type="text/javascript" src="__PUBLIC__/js/H-ui.js"></script> 
<script type="text/javascript" src="__PUBLIC__/js/H-ui.admin.js"></script> 
<script type="text/javascript" src="__PUBLIC__/lib/My97DatePicker/WdatePicker.js"></script> 
<script src="__PUBLIC__/js/sitepicker.js"></script>
<script type="text/javascript">
$(function(){
	$('.skin-minimal input').iCheck({
		checkboxClass: 'icheckbox-blue',
		radioClass: 'iradio-blue',
		increaseArea: '20%'
	});
	$.Huitab("#tab-system .tabBar span","#tab-system .tabCon","current","click","0");
});

/*管理员-增加*/
function admin_add(title,url,w,h){
	layer_show(title,url,w,h);
}
</script>
</body>
</html>