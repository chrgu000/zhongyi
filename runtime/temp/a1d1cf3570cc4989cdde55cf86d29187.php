<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:77:"E:\WWW\transport\public/../application/admin\view\orderpath\recycle-list.html";i:1507855955;}*/ ?>
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
<title>货源订单管理</title>
</head>
<body>
<nav class="breadcrumb">
    <i class="Hui-iconfont">&#xe67f;</i> 首页 
    <span class="c-gray en">&gt;</span> 订单管理
    <span class="c-gray en">&gt;</span> 回收站列表 
    <!--<a class="btn btn-success radius r mr-20" style="line-height:1.6em;margin-top:3px" 
    href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a>-->
</nav>
<div class="pd-20 nullwrap">
<div id="tab-system" class="HuiTab">
<div class="tabBar cl">
    <a href="<?php echo url('Orderpath/recyclelst'); ?>" style="color: #FFF; text-decoration: none;"><span>车源</span></a>
    <a href="<?php echo url('Ordergoodscar/recyclelst'); ?>" style="color: #000;text-decoration: none;"><span>找车货源</span></a>
    <a href="<?php echo url('Ordergoodsku/recyclelst'); ?>" style="color: #000; text-decoration: none;"><span>找库货源</span></a>
    <a href="<?php echo url('Orderwarehouse/recyclelst'); ?>" style="color: #000; text-decoration: none;"><span>库源</span></a>
</div>
<div class="tabCon"><!--找车货源订单回收站-->
<div class="pd-20">
<div class="text-c">
<form action="<?php echo url('Orderpath/recyclelst'); ?>" method="get">
    订单状态：
	<select name="order_state" class="input-text" style="width: 15%;">
	    <option value="">--请输入订单状态--</option>
	    <option value="1" >待确认</option>
		<option value="2" >待付款</option>
		<option value="3" >待发车</option>
		<option value="4" >运输中</option>
		<option value="5" >已完成</option>
		<option value="6" >已取消</option>
		<option value="7" >退款中</option>
	</select>
	订单号：
        <div  style="display: inline-block;">
            <input  name="order_number"  class="input-text" type="text" placeholder="请输入订单号" style="width: 170px;" value="">
        </div> 
	下单时间：
	   <input type="text" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd'})" id="datemin" class="input-text Wdate" style="width:13%" name="time" value="" placeholder="请输入下单时间" >    
    <button type="submit" class="btn btn-success"><i class="Hui-iconfont">&#xe665;</i> 查询</button>	
</form>
</div>
<div class="cl pd-5 bg-1 bk-gray mt-20" style="margin-top: 25px;">
    <span class="l">
        <a class="btn btn-danger radius" href="<?php echo url('Orderpath/backexport',array('order_state'=>session('pathrecycleorder_state'),'order_number'=>session('pathrecycleorder_number'),'time'=>session('pathrecycleordertime'))); ?>" style="margin-right: 5px;">
	    <i class="Hui-iconfont">&#xe632;</i> 导出数据</a>
    </span>
	<form action="<?php echo url('Orderpath/recycle_p_del'); ?>" method="post"> 
	<?php if(in_array('150',$privilege)){ ?>
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
				<th scope="col" colspan="14">订单列表</th>
			</tr>
			<tr class="text-c">
				<th width="4%"><input type="checkbox" name="" value=""></th>
				<th width="6%">货源id</th>
				<th width="7%">货源名称</th>
				<th width="6%">车源id</th>
				<th width="6%">货主id</th>
				<th width="12%">订单编号</th>
                <th width="">货主支付交易号</th>
				<th width="7%">订单金额</th>
				<th width="7%">货主状态</th>
				<th width="7%">车主状态</th>
				<th width="7%">订单状态</th>
				<th width="7%">下单时间</th>
				<th width="7%">操作</th>
			</tr>
		</thead>
		<tbody>
		   <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "<p class='nulltext'>暂无相关信息</p>" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
			<tr class="text-c">
			    <td ><input type="checkbox" value="<?php echo $v['id']; ?>" name="id[]"></td>
				<td><?php echo $v['goods_id']; ?></td>
				<td><?php echo $v['goodsname']; ?></td>
				<td><?php echo $v['path_id']; ?></td>
				<td><?php echo $v['user_id']; ?></td>
				<td title="<?php echo $v['order_number']; ?>"><?php echo $v['order_number']; ?></td>
				<td title="<?php echo $v['pay_number']; ?>"><?php echo $v['pay_number']; ?></td>
				<td><?php echo $v['order_money']; ?></td>
				<td >
				    <?php if($v['pay_state'] == 1): ?>待确认
				    <?php elseif($v['pay_state'] == 2): ?>待支付
				    <?php elseif($v['pay_state'] == 3): ?>已支付
				    <?php elseif($v['pay_state'] == 4): ?>运输中
				    <?php elseif($v['pay_state'] == 5): ?>已完成
				    <?php elseif($v['pay_state'] == 6): ?>已取消
				    <?php elseif($v['pay_state'] == 7): ?>退款中
				    <?php endif; ?>
				</td>
				<td >
				    <?php if($v['car_state'] == 1): ?>待确认
				    <?php elseif($v['car_state'] == 2): ?>待付款
				    <?php elseif($v['car_state'] == 3): ?>待发车
				    <?php elseif($v['car_state'] == 4): ?>运输中
				    <?php elseif($v['car_state'] == 5): ?>已完成	
				    <?php elseif($v['car_state'] == 6): ?>已取消		        
				    <?php endif; ?>
				</td>
				<td >
				    <?php if($v['order_state'] == 1): ?>待确认
				    <?php elseif($v['order_state'] == 2): ?>待付款
				    <?php elseif($v['order_state'] == 3): ?>待发车
				    <?php elseif($v['order_state'] == 4): ?>运输中
				    <?php elseif($v['order_state'] == 5): ?>已完成
				    <?php elseif($v['order_state'] == 6): ?>已取消
				    <?php elseif($v['order_state'] == 7): ?>退款中
				    <?php endif; ?>
				</td>
				<td><?php echo $v['time']; ?></td>
				<td  class="td-manage">                 
                    <!--<a title="查看" href="<?php echo url('Orderpath/detail',array('id'=>$v['id'])); ?>"  class="ml-5" style="text-decoration:none" >
                    <i class="Hui-iconfont">&#xe665;</i>&nbsp;&nbsp;</a>--> 
                    <?php if(in_array('148',$privilege)){ ?>
                    <a href="<?php echo url('Orderpath/recycle_back',array('id'=>$v['id'])); ?>" onclick="return confirm('确定要还原吗？')" title="还原" style="text-decoration:none">
                    <i class="Hui-iconfont">&#xe66b;</i>&nbsp;&nbsp;</a><?php } if(in_array('149',$privilege)){ ?>
                    <a title="删除" href="<?php echo url('Orderpath/recycle_del',array('id'=>$v['id'])); ?>" onclick="return confirm('确定要删除吗？')" class="ml-5" style="text-decoration:none">
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