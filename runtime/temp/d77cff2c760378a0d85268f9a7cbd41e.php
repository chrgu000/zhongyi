<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:76:"E:\wamp\www\transport\public/../application/admin\view\goods\goods-list.html";i:1506419025;}*/ ?>
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
<title>货源管理</title>
</head>
<body>
<nav class="breadcrumb">
    <i class="Hui-iconfont">&#xe67f;</i> 首页 
    <span class="c-gray en">&gt;</span> 货源管理 
    <span class="c-gray en">&gt;</span> 货源列表 
    <!--<a class="btn btn-success radius r mr-20" style="line-height:1.6em;margin-top:3px" 
    href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a>-->
</nav>
<div class="pd-20 nullwrap">
<div id="tab-system" class="HuiTab">
<div class="tabBar cl">
    <a href="<?php echo url('Goods/lst'); ?>" style="color: #FFF; text-decoration: none;"><span>找车货源</span></a>
    <a href="<?php echo url('Goods/lst2'); ?>" style="color: #000; text-decoration: none;"><span>找库货源</span></a>
</div>
<div class="tabCon"><!--找车货源-->
<div class="pd-20">
<div class="text-c">
<form action="<?php echo url('Goods/lst'); ?>" method="get">
    状态：
	<select name="order_state" class="input-text" style="width: 10%;">
	    <option value="">--下单状态--</option>
	    <option value="1" >未抢单</option>
		<option value='2' >已抢单</option>
	</select>
    货物品类：
    <select name="goods_sort" class="input-text" style="width: 10%;">
	    <option value="">--货物品类--</option>
		<?php if(is_array($goods_sort2) || $goods_sort2 instanceof \think\Collection || $goods_sort2 instanceof \think\Paginator): $i = 0; $__LIST__ = $goods_sort2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
		<option value="<?php echo $v['id']; ?>"><?php echo $v['typename']; ?></option>
		<?php endforeach; endif; else: echo "" ;endif; ?>
	</select>
	是否自营：
    <select name="is_company" class="input-text" style="width: 10%;">
	    <option value="">--是否自营--</option>
	    <option value="2" >非自营</option>
		<option value='1' >自营</option>
	</select>
    货物名称：
    <div  style="display: inline-block;">
        <input  name="goods_name"  class="input-text" type="text" placeholder="请输入货物名称" style="width: 130px;" value="">
    </div>
    货源id：
    <div  style="display: inline-block;">
        <input  name=" id"  class="input-text" type="text" placeholder="请输入货物id" style="width: 100px;" value="">
    </div>
    <div class="text-c" style="margin-top: 10px;">
        起始地：
        <div class="ku" style="display: inline-block;">
            <input onblur="mzReg(this)" name="starting_address" id="name" class="input-text" type="text" placeholder="请输入始发地" value="" style="width: 170px;">
            <div class="xiala"><h1><span>确认</span></h1></div>
        </div>
        目的地：
        <div class="ku1" style="display: inline-block;">
            <input onblur="mzReg(this)" name="destination" id="name" class="input-text" type="text" placeholder="请输入目的地" value="" style="width: 170px;" >
            <div class="xiala1"><h1><span>确认</span></h1></div>
        </div>
       所需车型：
        <select name="car_type" class="input-text" style="width: 15%;">
	        <option value="">--所需车型--</option>
		    <?php if(is_array($car_type2) || $car_type2 instanceof \think\Collection || $car_type2 instanceof \think\Paginator): $i = 0; $__LIST__ = $car_type2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
		    <option value="<?php echo $v['id']; ?>"><?php echo $v['typename']; ?></option>
		    <?php endforeach; endif; else: echo "" ;endif; ?>
    	</select>
        发布时间：<input type="text" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd'})" id="datemin" class="input-text Wdate" style="width:15%" value="" name="time" placeholder="请输入发布时间" >
        <button type="submit" class="btn btn-success"><i class="Hui-iconfont">&#xe665;</i> 查询</button>
    </div>		
</form>
</div>
<div class="cl pd-5 bg-1 bk-gray mt-20" style="margin-top: 25px;">
    <span class="l">
        <a class="btn btn-danger radius" href="<?php echo url('Goods/export_car',array('order_state'=>session('goodscarorder_state'),'goods_sort'=>session('goodssortcar'),'is_company'=>session('goodscaris_company'),'goods_name'=>session('goodsname_car'),'id'=>session('goodscarid'),'starting_address'=>session('goodsstartaddress'),'destination'=>session('goodsdestination'),'car_type'=>session('goodscarkeytype'),'time'=>session('goodscartime'))); ?>" style="margin-right: 5px;">
	    <i class="Hui-iconfont">&#xe632;</i> 导出数据</a>
    </span>
	<form action="<?php echo url('Goods/p_del'); ?>" method="post"> 
	<?php if(in_array('94',$privilege)){ ?>
        <span class="l">
            <button type="submit" class="btn btn-danger radius" onclick="return confirm('确定要删除吗？')" >
            <i class="Hui-iconfont">&#xe6e2;</i> 批量删除</button> 
            <!--<a class="btn btn-primary radius" onclick="picture_add('添加管理员','<?php echo url('Admin/add'); ?>')" href="javascript:;"  >
          <i class="Hui-iconfont">&#xe600;</i> 添加资讯</a>-->
        </span> 
    <?php } ?>
        <span class="r">共有数据：<strong><?php echo $counts; ?></strong> 条</span> 
    </div>
	<table class="table table-border table-bordered table-bg nulltable">
		<thead>
			<tr>
				<th scope="col" colspan="13">货源列表</th>
			</tr>
			<tr class="text-c">
				<th width="5%"><input type="checkbox" name="" value=""></th>
				<th width=" ">路线</th>
				<th width="7%">货物品类</th>
				<th width="7%">货物类型</th>
				<th width="7%">货物名称</th>
				<th width="7%">运费</th>
				<th width="7%">发布时间</th>
				<th width="7%">联系人</th>
				<th width="6%">联系电话</th>
				<th width="6%">状态</th>
				<th width="6%">是否自营</th>
				<th width="6%">审核</th>
				<th width="8%">操作</th>
			</tr>
		</thead>
		<tbody>
		   <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "<p class='nulltext'>暂无相关信息</p>" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
			<tr class="text-c">
			    <td ><input type="checkbox" value="<?php echo $v['id']; ?>" name="id[]"></td>
				<td><?php echo $v['starting_address']; ?>——<?php echo $v['destination']; ?></td>
				<td><?php foreach($goods_sort2 as $d=>$vo):if($v['goods_sort'] == $vo['id']): ?>
				    <?php echo $vo['typename']; endif; endforeach;?></td>
				<td ><?php foreach($goods_type2 as $d=>$vo):if($v['goods_type'] == $vo['id']): ?>
				    <?php echo $vo['typename']; endif; endforeach;?></td>
				<td><?php echo $v['goods_name']; ?></td>
				<td><?php echo $v['payment_mode']; ?></td>
				<td ><?php echo $v['time']; ?></td>
				<td><?php echo $v['contact']; ?></td>
				<td ><?php echo $v['phone']; ?></td>
				<td >
				    <?php if($v['order_state'] == 1): ?>未抢单
				    <?php else: ?>已抢单
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
                    <a title="查看" href="javascript:;" onclick="admin_add('查看详情','<?php echo url('Goods/detail',array('id'=>$v['id'])); ?>','1100','550')" class="ml-5" style="text-decoration:none">
                    <i class="Hui-iconfont">&#xe665;</i></a> 
                    <?php if(in_array('93',$privilege)){ ?>
                    <a title="删除" href="<?php echo url('Goods/del',array('id'=>$v['id'])); ?>"  onclick="return confirm('确定要删除吗？')" class="ml-5" style="text-decoration:none">
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