<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:66:"E:\WWW\transport\public/../application/admin\view\datasum\lst.html";i:1511854582;}*/ ?>
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
<title>数据统计</title>
</head>
<body>
<nav class="breadcrumb">
    <i class="Hui-iconfont">&#xe67f;</i> 首页 
    <span class="c-gray en">&gt;</span> 数据管理 
    <span class="c-gray en">&gt;</span> 基础数据统计 
    <!--<a class="btn btn-success radius r mr-20" style="line-height:1.6em;margin-top:3px" 
    href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a>-->
</nav>
<div class="pd-20 nullwrap">
	<table class="table table-border table-bordered table-bg nulltable">
		<thead>
			<tr>
				<th scope="col" colspan="10">用户注册统计</th>
			</tr>
			<tr class="text-c">
				<th width="16%">个体货主</th>
				<th width="16%">公司货主</th>
				<th width="16%">车主</th>
				<th width="16%">库主</th>
				<th width="16%">物流公司</th>
				<th width="20%">注册总数</th>
			</tr>
		</thead>
		<tbody>
			<tr class="text-c">
			    <td><?php echo $person_shipper; ?></td>
				<td><?php echo $company_shipper; ?></td>
				<td><?php echo $driver; ?></td>
				<td><?php echo $warehouse_owner; ?></td>
				<td><?php echo $logistics_company; ?></td>
				<td><?php echo $total_user; ?></td>
			</tr>
		</tbody>
	</table>
	<table class="table table-border table-bordered table-bg nulltable newtablem">
		<thead>
			<tr>
				<th scope="col" colspan="10">用户下单统计</th>
			</tr>
			<tr class="text-c">
				<th width="16%">找车货源订单</th>
				<th width="16%">找库货源订单</th>
				<th width="16%">车源订单</th>
				<th width="16%">库源订单</th>
				<th width="16%">网上托运订单</th>
				<th width="20%">订单总数</th>
			</tr>
		</thead>
		<tbody>
			<tr class="text-c">
			    <td><?php echo $num_carfindgoods; ?></td>
				<td><?php echo $num_kufindgoods; ?></td>
				<td><?php echo $num_orderpath; ?></td>
				<td><?php echo $num_orderwh; ?></td>
				<td><?php echo $num_entrust; ?></td>
				<td><?php echo $total_num; ?></td>
			</tr>
		</tbody>
	</table>
	<table class="table table-border table-bordered table-bg nulltable newtablem">
		<thead>
			<tr>
				<th scope="col" colspan="10">订单金额统计</th>
			</tr>
			<tr class="text-c">
				<th width="16%">找车货源订单总额</th>
				<th width="16%">找库货源订单总额</th>
				<th width="16%">车源订单总额</th>
				<th width="16%">库源订单总额</th>
				<th width="16%">网上托运订单总额</th>
				<th width="20%">订单总额</th>
			</tr>
		</thead>
		<tbody>
			<tr class="text-c">
			    <td><?php echo $money_carfindgoods; ?></td>
				<td><?php echo $money_kufindgoods; ?></td>
				<td><?php echo $money_path; ?></td>
				<td><?php echo $money_wh; ?></td>
				<td><?php echo $money_entrust; ?></td>
				<td><?php echo $total_money; ?></td>
			</tr>
		</tbody>
	</table>
</div>
<script type="text/javascript" src="__PUBLIC__/lib/jquery/1.9.1/jquery.min.js"></script>  
<script type="text/javascript" src="__PUBLIC__/lib/layer/1.9.3/layer.js"></script> 
<script type="text/javascript" src="__PUBLIC__/lib/laypage/1.2/laypage.js"></script> 
<script type="text/javascript" src="__PUBLIC__/lib/My97DatePicker/WdatePicker.js"></script> 
<script type="text/javascript" src="__PUBLIC__/js/H-ui.js"></script> 
<script type="text/javascript" src="__PUBLIC__/js/H-ui.admin.js"></script> 
<script type="text/javascript">

function picture_add(title,url){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}

$(function(){
    $("#paging1").pagination({
        items: 100,
        itemsOnPage: 10,
        cssStyle: 'light-theme'
    });
});

</script>
</body>
</html>