<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:81:"E:\WWW\transport\public/../application/admin\view\entrustcarorder\order-list.html";i:1511853560;}*/ ?>
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
<style type="text/css">
	.a{color: #333; text-decoration: none;}
	.btn2{padding: 2px 4px;}
</style>
<!--[if IE 6]>
<script type="text/javascript" src="lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>货找车订单管理</title>
</head>
<body>
<nav class="breadcrumb">
    <i class="Hui-iconfont">&#xe67f;</i> 首页 
    <span class="c-gray en">&gt;</span> 订单管理 
    <span class="c-gray en">&gt;</span> 货找车委托
    <!--<a class="btn btn-success radius r mr-20" style="line-height:1.6em;margin-top:3px" 
    href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a>-->
</nav>
<div class="pd-20 nullwrap">
<div class="text-c">
<form action="<?php echo url('Entrustcarorder/lst'); ?>" method="get">
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
        <a class="btn btn-danger radius" href="<?php echo url('Entrustcarorder/export',array('order_state'=>session('goodsentrustcar_state'),'order_number'=>session('goodsentrustcar_number'),'time'=>session('goodsentrustcar_time'))); ?>" style="margin-right: 5px;">
	    <i class="Hui-iconfont">&#xe632;</i> 导出数据</a>
    </span>
	<form action="<?php echo url('Entrustcarorder/p_del'); ?>" method="post"> 
	<?php if(in_array('173',$privilege)){ ?>
        <span class="l">
            <button type="submit" class="btn btn-danger radius" onclick="return confirm('确定要删除吗？')" >
            <i class="Hui-iconfont">&#xe6e2;</i> 批量删除</button> 
        </span> 
    <?php } ?>
        <span class="r">总金额：<strong><?php echo $totalmoney; ?></strong> 元</span>
        <span class="r">&nbsp;&nbsp;&nbsp;</span>
        <span class="r">共有数据：<strong><?php echo $counts; ?></strong> 条 </span> 
    </div>
	<table class="table table-border table-bordered table-bg nulltable">
		<thead>
			<tr>
				<th scope="col" colspan="12">订单列表</th>
			</tr>
			<tr class="text-c">
				<th width="4%"><input type="checkbox" name="" value=""></th>
				<th width="11%">订单号</th>
				<th width="">交易支付号</th>
				<th width="10%">货物名称</th>
				<th width="6%">金额</th>
				<th width="8%">货主账号</th>
				<th width="9%">货主状态</th>
				<th width="9%">车主状态</th>
				<th width="9%">订单状态</th>
				<th width="9%">下单时间</th>
				<th width="12%">操作</th>
			</tr>
		</thead>
		<tbody>
		   <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "<p class='nulltext'>暂无相关信息</p>" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
			<tr class="text-c">
			    <td ><input type="checkbox" value="<?php echo $v['id']; ?>" name="id[]"></td>
				<td title="<?php echo $v['order_number']; ?>"><?php echo $v['order_number']; ?></td>
				<td title="<?php echo $v['pay_number']; ?>"><?php echo $v['pay_number']; ?></td>
				<td>
					<?php foreach($goods as $k=>$vo):
						if(in_array($vo['id'],explode(',',$v['goods_id']))){ echo $vo['goods_name'].','; }
					endforeach;?>
				</td>
				<td><?php echo $v['order_money']; ?></td>
				<td><?php echo $v['user_name']; ?></td>
				<td >
				    <?php if($v['pay_state'] == 1): ?>待确认
				    <?php elseif($v['pay_state'] == 2): ?>待支付
				    <?php elseif($v['pay_state'] == 3): ?>待发车
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
            <!-- 下单，订单状态为1 -->
                <?php if(in_array('181',$privilege)){ if($v['order_state'] == 1): ?>
				    <a title="接受委托" href="<?php echo url('Entrustcarorder/receive',array('id'=>$v['id'])); ?>" onclick="return confirm('确定接受委托？')"  class="btn2 btn-primary radius" style="color: #fff; text-decoration: none; margin-bottom: 5px;">
                    接受委托</a>&nbsp;|
                <?php endif; } if(in_array('185',$privilege)){ if($v['order_state'] == 1): ?>
				    <a title="取消订单" href="<?php echo url('Entrustcarorder/cancel',array('id'=>$v['id'])); ?>" onclick="return confirm('确定取消订单？')"  class="btn2 btn-primary radius" style="color: #fff; text-decoration: none; margin-bottom: 5px;">
                    取消订单</a><br/>
                <?php endif; } ?>
            <!--接受，订单状态为2 -->
                <?php if(in_array('185',$privilege)){ if($v['order_state'] == 2): ?>
				    <a title="取消订单" href="<?php echo url('Entrustcarorder/cancel',array('id'=>$v['id'])); ?>" onclick="return confirm('确定取消订单？')"  class="btn2 btn-primary radius" style="color: #fff; text-decoration: none; margin-bottom: 5px;">
                    取消订单</a><br/>
                <?php endif; } ?>        
            <!-- 支付，订单状态为3 -->
                <?php if(in_array('183',$privilege)){ if($v['order_state'] == 3): ?>
				    <a title="确认发车" href="<?php echo url('Entrustcarorder/sendcar',array('id'=>$v['id'])); ?>" onclick="return confirm('确定已发车？')"  class="btn2 btn-primary radius" style="color: #fff; text-decoration: none;">
                    确认发车</a>&nbsp;|
                <?php endif; } if(in_array('185',$privilege)){ if($v['order_state'] == 3): ?>
				    <a title="取消订单" href="<?php echo url('Entrustcarorder/mcancel',array('id'=>$v['id'])); ?>" onclick="return confirm('确定取消订单？')"  class="btn2 btn-primary radius" style="color: #fff; text-decoration: none; margin-bottom: 5px;">
                    取消订单</a><br/>
                <?php endif; } ?> 
            <!--发车，订单状态为4 -->
                <?php if(in_array('184',$privilege)){ if($v['car_state'] == 4): ?>
				    <a title="委托完成" href="<?php echo url('Entrustcarorder/finish',array('id'=>$v['id'])); ?>" onclick="return confirm('确定完成运输？')"  class="btn2 btn-primary radius" style="color: #fff; text-decoration: none;">
                    委托完成</a><br/>
                <?php endif; } ?>
            <!--完成，订单状态为5、6、7 -->  
                <?php if(in_array('174',$privilege)){ if($v['order_state'] == 7): ?>
				    <a title="退款" href="<?php echo url('Entrustcarorder/back',array('id'=>$v['id'])); ?>" onclick="return confirm('确定同意退款？')"  class="btn2 btn-primary radius" style="color: #fff; text-decoration: none; margin-bottom: 3px;">
                    确认退款</a><br/>
                <?php endif; } ?>

                    <a title="查看" href="<?php echo url('Entrustcarorder/detail',array('id'=>$v['id'])); ?>"  class="ml-5" style=" font-size: 14px; color: #333; text-decoration: none;">
                    详情&nbsp;|</a> 
                <?php if(in_array('172',$privilege)){ ?>
                    <a title="删除" href="<?php echo url('Entrustcarorder/del',array('id'=>$v['id'])); ?>"  onclick="return confirm('确定要删除？')" class="ml-5" style="color: #333; 
                    font-size: 14px;text-decoration: none;">
                    删除</a>
                <?php } ?>
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