<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:69:"E:\WWW\transport\public/../application/index\view\path\pathorder.html";i:1507881047;}*/ ?>
﻿<!DOCTYPE html>
<html lang="en" style="width: 500px;">
<head class="skin-head">
	<meta charset="UTF-8">
	<title>车源信息</title>	
	<link rel="icon" href="" type="image/x-icon"/>
    <link href="../../static/index/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="__PUBLIC__/css/city-picker.css"> 
	<link rel="stylesheet"  href="__PUBLIC__/css/higo.css" />
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/date.css">
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/mask.css">
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/auth.css">
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/style.css">
    <!-- 分页样式 -->
	<link type="text/css" rel="stylesheet" href="__PUBLIC__/css/page.css"/>
	<script type="text/javascript" src="__PUBLIC__/js/jquery.simplePagination.js"></script>
</head>
<body style="width: 500px; height: auto; padding:40px;">
<div class="ordertab">
	<p class="active p1">选择货源</p>
	<p class="p2">添加货源</p>
</div>
<div class="owengoods">
	<form action="<?php echo url('Order/order_path'); ?>" method="post" target="_parent">
		<input type="hidden" name="user_id" value="<?php echo session('userid');?>">
		<input type="hidden" name="path_id" value="<?php echo $id1; ?>">
		<div class="rz-Form" style="margin: 0px; width: 500px; height: auto;">
			<ul class="order_ku">
				<?php if(is_array($goodsres) || $goodsres instanceof \think\Collection || $goodsres instanceof \think\Paginator): $i = 0; $__LIST__ = $goodsres;if( count($__LIST__)==0 ) : echo "<p class='nulltext'>您暂时没有已发布的货源</p>" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
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
				<?php endforeach; endif; else: echo "<p class='nulltext'>您暂时没有已发布的货源</p>" ;endif; ?>
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
</div>
<div class="upgoods" style="display: none">
	 <form enctype="multipart/form-data" method="post" novalidate="novalidate" action="<?php echo url('Path/addorder'); ?>" onSubmit="return checkcar();" target="_parent">
        <input type="hidden" name="path_id" value="<?php echo $id1; ?>">
        <input type="hidden" name="add_goods" value="1">
        <input type="hidden" name="uid" value="<?php echo trim(session('username'))?>">
        <input type="hidden" name="is_company" value="<?php echo $userres[0]['is_company']; ?>">
        <input type="hidden" name="uptype" value="0">
        <input type="hidden" name="is_recycle" value="0">
        <input type="hidden" name="order_state" value="1">
        <input type="hidden" name="check_state" value="2">
        <div class="rz-Form rz-Form1">
            <div class="rz-model rz-label">
                <div class="clearfix">
                    <p class="fl rz-i">*</p>
                    <p class="fl">始发地&nbsp;</p>
                </div>
                <!-- <div class="ku" style="display: inline-block;"> -->
                    <input   name="starting_address" id="name" class="xm starting_address" type="text" placeholder="请输入始发地" value="<?php echo $pathres['startsite']; ?>"  readonly="">
                    <!-- <br>
                    <label class="labelnomargin">始发地必须</label>
                    <div class="xiala" onclick="mzReg1(this)">
                        <h1><span>确认</span></h1>
                    </div> -->
                <!-- </div> -->
            </div>
            <div class="rz-model rz-label">
                <div class="clearfix">
                    <p class="fl rz-i">*</p>
                    <p class="fl">始发地详细地址&nbsp;</p>
                </div>
                <input onblur="mzReg(this)" name="startingaddress_detail" id="name" class="xm" type="text" placeholder="请输入详细地址">
                <br>
                <label class="labelnomargin">详细地址必须</label>
            </div>
            <div class="rz-model rz-label">
                <div class="clearfix">
                    <p class="fl rz-i">*</p>
                    <p class="fl">目的地&nbsp;</p>
                </div>
                 <!-- <div class="ku1" style="display: inline-block;"> -->
                    <input  name="destination" id="name" class="xm" type="text" placeholder="请输入目的地" value="<?php echo $pathres['endsite']; ?>" readonly="" >
                    <!-- <br>
                    <label class="labelnomargin">目的地必须</label>
                    <div class="xiala1" onclick="mzReg2(this)">
                        <h1><span>确认</span></h1>
                    </div>
                </div> -->
            </div>
            <div class="rz-model rz-label">
                <div class="clearfix">
                    <p class="fl rz-i">*</p>
                    <p class="fl">目的地详细地址&nbsp;</p>
                </div>
               <input onblur="mzReg(this)" name="destination_detail" id="name" class="xm" type="text" placeholder="请输入详细地址">
               <br>
                <label class="labelnomargin">详细地址必须</label>
            </div>
            <div class="rz-model rz-label">
                <div class="clearfix">
                    <p class="fl rz-i">*</p>
                    <p class="fl">货物品类&nbsp;</p>
                </div>
                <select onblur="mzReg(this)" name="goods_sort" class="siteselect" style="width: 500px;">
                    <option value="" selected>请选择</option>
                    <?php if(is_array($type) || $type instanceof \think\Collection || $type instanceof \think\Paginator): $i = 0; $__LIST__ = $type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <option value="<?php echo $vo['id']; ?>"><?php echo $vo['typename']; ?></option>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
                <br>
                <label class="labelnomargin">请选择货物品类</label>
            </div>
            <div class="rz-model rz-label">
                <div class="clearfix">
                    <p class="fl rz-i">*</p>
                    <p class="fl">货物类型&nbsp;</p>
                </div>
                <select onblur="mzReg(this)" name="goods_type" class="siteselect" style="width: 500px;">
                    <option value="" selected>请选择</option>
                    <?php if(is_array($type1) || $type1 instanceof \think\Collection || $type1 instanceof \think\Paginator): $i = 0; $__LIST__ = $type1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($i % 2 );++$i;?>
                        <option value="<?php echo $vo1['id']; ?>"><?php echo $vo1['typename']; ?></option>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
                <br>
                <label class="labelnomargin">请选择货物类型</label>
            </div>
            <div class="rz-model rz-label">
                <div class="clearfix">
                    <p class="fl rz-i">*</p>
                    <p class="fl">货物名称&nbsp;</p>
                </div>
                <input onblur="mzReg(this)" name="goods_name" id="name" class="xm" type="text" placeholder="请输入货物名称">
                <br>
                <label class="labelnomargin">请输入货物名称</label>
            </div>
            <div class="rz-model rz-label">
                <div class="clearfix">
                    <p class="fl rz-i">*</p>
                    <p class="fl">温度要求&nbsp;</p>
                </div>
                <input onblur="yfReg(this)" name="low_temperature" id="name" class="xm" type="text" placeholder="请输入温度要求" style="width: 180px;">
                <span>&nbsp;℃-&nbsp;</span>
                <input onblur="yfReg(this)" name="high_temperature" id="name" class="xm" type="text" placeholder="请输入温度要求" style="width: 180px;"><span>&nbsp;℃&nbsp;</span>
                <br>
                <label class="label labelnomargin" style="font-size: 12px;">请输入合法温度</label>
            </div>
            <div class="rz-model rz-label">
                <div class="clearfix">
                    <p class="fl rz-i">*</p>
                    <p class="fl">货物规格&nbsp;</p>
                </div>
                <input onblur="xsReg(this)" name="standard_ton" id="name" class="xm" type="text" placeholder="请输入货物规格" style="width: 180px;">
                <span>&nbsp;吨-&nbsp;</span>
                <input onblur="xsReg(this)" name="standard_square" id="name" class="xm" type="text" placeholder="请输入货物规格" style="width: 180px;"><span>&nbsp;方&nbsp;</span>
                <br>
                <label class="label labelnomargin" style="font-size: 12px;">请输入合法货物规格</label>
            </div>
            <div class="rz-model rz-label">
                <div class="clearfix">
                    <p class="fl rz-i">*</p>
                    <p class="fl">装车时间&nbsp;</p>
                </div>
                <input onblur="mzReg(this)" name="start_loadingtime" class="xm siteinput ECalendar" type="text" placeholder="请选择装车时间" style="width: 180px;" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd'})">
                ——
                <input onblur="mzReg(this)" name="end_loadingtime" class="xm siteinput ECalendar" type="text" placeholder="请选择装车时间" style="width: 180px;" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd'})">
                <br>
                <label class="label labelnomargin" style="font-size: 12px;">请选择装车时间</label>
            </div>
            <div class="rz-model rz-label">
                <div class="clearfix">
                    <p class="fl rz-i">*</p>
                    <p class="fl">到货时间&nbsp;</p>
                </div>
                <input onblur="mzReg(this)" name="start_arrivetime" class="xm siteinput ECalendar" type="text" placeholder="请选择到货时间" style="width: 180px;" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd'})">
                ——
                <input  onblur="mzReg(this)" name="end_arrivetime" class="xm siteinput ECalendar" type="text" placeholder="请选择到货时间" style="width: 180px;" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd'})">
                <br>
                <label class="label labelnomargin" style="font-size: 12px;">请选择到货时间</label>
            </div>
            <div class="rz-model rz-label">
                <div class="clearfix">
                    <p class="fl rz-i">*</p>
                    <p class="fl">需要车长&nbsp;</p>
                </div>
                <div>
                <select onblur="mzReg(this)" name="car_length" class="siteselect" style="width: 500px;">
                    <option value="" selected>请选择</option>
                    <?php if(is_array($type2) || $type2 instanceof \think\Collection || $type2 instanceof \think\Paginator): $i = 0; $__LIST__ = $type2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($i % 2 );++$i;?>
                        <option value="<?php echo $vo2['id']; ?>"><?php echo $vo2['typename']; ?> </option>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
                <br>
                <label class="labelnomargin">请选择需要车长</label>
                </div>
            </div>
            <div class="rz-model rz-label">
                <div class="clearfix">
                    <p class="fl rz-i">*</p>
                    <p class="fl">需要车型&nbsp;</p>
                </div>
                <select onblur="mzReg(this)" name="car_type" class="siteselect" style="width: 500px;">
                	<option value="" selected>请选择</option>
                    <?php if(is_array($type3) || $type3 instanceof \think\Collection || $type3 instanceof \think\Paginator): $i = 0; $__LIST__ = $type3;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo3): $mod = ($i % 2 );++$i;?>
                        <option value="<?php echo $vo3['id']; ?>"><?php echo $vo3['typename']; ?> </option>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
                <br>
                <label class="labelnomargin">请选择需要车型</label>
            </div>
            <div class="rz-model rz-label">
                <div class="clearfix">
                    <p class="fl rz-i">*</p>
                    <p class="fl">运输费用</p>
                </div>
                <div class="libraryarea">
                    <input type="radio" name="carriage_type" class="moneyradio" checked="checked" value="运输费用">&nbsp;运输费用
                    <input onblur="xsReg(this)" name="carriage" id="name" class="xm money" type="text" placeholder="请输入运输费用" style="width: 200px;" value="">
                    <br>
                    <label class="labelnomargin">请输入正确格式的运输费用</label>
                </div>
            </div>
            <div class="rz-model rz-label">
                <div class="clearfix">
                    <p class="fl rz-i">*</p>
                    <p class="fl">支付方式</p>
                </div>
                <div class="libraryarea">
                    <?php if(is_array($type4) || $type4 instanceof \think\Collection || $type4 instanceof \think\Paginator): $i = 0; $__LIST__ = $type4;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <input type="radio" checked name="payment_mode" value="<?php echo $vo['id']; ?>"><?php echo $vo['typename']; endforeach; endif; else: echo "" ;endif; ?>
                </div>
                <br>
                <label class="labelnomargin">请选择支付方式</label>
            </div>
            <div class="rz-model rz-label">
                <div class="clearfix">
                    <p class="fl rz-i">*</p>
                    <p class="fl" style="width: 90px;">是否需要发票</p>
                </div>
                <div class="libraryarea">
                    <input type="radio" name="invoice" checked="" value="是">&nbsp;是
                </div>
                <div class="libraryarea">
                    <input type="radio" name="invoice" value="否">&nbsp;否
                </div>
                <br>
                <label class="labelnomargin">请选择是否需要发票</label>
            </div>
            <div class="rz-model rz-label">
                <div class="clearfix">
                    <p class="fl rz-i">*</p>
                    <p class="fl">联系人&nbsp;</p>
                </div>
                <input onblur="mzReg(this)" name="contact" id="idCard" class="sfz" type="text" placeholder="请输入联系人">
                <br>
                <label class="labelnomargin">请输入联系人</label>
            </div>
            <div class="rz-model rz-label">
                <div class="clearfix">
                    <p class="fl rz-i">*</p>
                    <p class="fl">联系电话&nbsp;</p>
                </div>
                <input onblur="uxPhone(this)" name="phone" id="idCard" class="sfz" type="text" placeholder="请输入联系电话">
                <br>
                <label class="labelnomargin">请输入正确格式的联系电话</label>
            </div>
            <div class="rz-model rz-label">
                <div class="clearfix">
                    <p class="fl">备注</p>
                </div>
                <textarea name="goods_remark" class="remark_area" maxlength="30" ></textarea>
                <p style="width: auto;">您还可以输入<span id="word">30</span>个字</p>
            </div>
            <div class="rz-model" style="position:relative">
                <input type="submit" name="" class="rz_sub" value="提交">
           </div>
        </div>
    </form>
</div>
<script type="text/javascript" src="__PUBLIC__/js/jquery.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/sitepicker.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/bootstrap.min.js"></script>
<script src="__PUBLIC__/js/Ecalendar.jquery.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/lib/date/WdatePicker.js"></script>
<script src="__PUBLIC__/js/auth.js"></script>
<script src="__PUBLIC__/js/main.js"></script>
<script type="text/javascript">
	$('.ordertab p').click(function(){
		$('.ordertab p').removeClass('active');
		$(this).addClass('active');
	});
	$('.p1').click(function(){
		$('.owengoods').show();
		$('.upgoods').hide();
	});
	$('.p2').click(function(){
		$('.owengoods').hide();
		$('.upgoods').show();
	})
</script>
</body>
</html>