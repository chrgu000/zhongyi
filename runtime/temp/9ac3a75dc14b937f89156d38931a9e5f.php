<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:79:"E:\WWW\transport\public/../application/index\view\warehouse\warehouseorder.html";i:1508978726;}*/ ?>
﻿<!DOCTYPE html>
<html lang="en" style="width: 500px;">
<head class="skin-head">
	<meta charset="UTF-8">
	<title>车源信息</title>	
	<link rel="icon" href="" type="image/x-icon"/>
    <link href="../../static/index/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="__PUBLIC__/css/city-picker.css"> 
	<link rel="stylesheet"  href="__PUBLIC__/css/higo.css" />
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/auth.css">
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/date.css">
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/mask.css">
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
	<form action="<?php echo url('Order/order_warehouse'); ?>" method="post" class="rz-Form" target="_parent" style="margin-left: 0px;">
        <input type="hidden" name="user_id" value="<?php echo session('userid');?>">
        <input type="hidden" name="wh_id" value="<?php echo $id1; ?>">       
		<ul class="order_ku">
			<?php if(is_array($goodsres) || $goodsres instanceof \think\Collection || $goodsres instanceof \think\Paginator): $i = 0; $__LIST__ = $goodsres;if( count($__LIST__)==0 ) : echo "<p class='nulltext'>您暂时没有已发布的货源</p>" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
			<li>
				<div class="order_l fl">
					<img src="__PUBLIC__/../<?php echo $v['goods_photo']; ?>" alt="">
				</div>
				<div class="order_r fl">
					<p><span>需要仓库地：</span><?php echo $v['whaddress']; ?></p>
					<p><span>货物名称：</span><?php echo $v['goods_name']; ?></p>
					<!-- <input type="hidden" name="goodsname" value="<?php echo $v['goods_name']; ?>"> -->
					<p><span>货物类型：</span> 
    					<?php if(is_array($goods_type) || $goods_type instanceof \think\Collection || $goods_type instanceof \think\Paginator): $i = 0; $__LIST__ = $goods_type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v5): $mod = ($i % 2 );++$i;if($v5['id'] == $v['goods_type']): ?>
	                           <?php echo $v5['typename']; endif; endforeach; endif; else: echo "" ;endif; ?>
                    </p>
					<p><span>货物规格：</span><?php echo $v['standard_ton']; ?>吨；<?php echo $v['standard_square']; ?>方</p>
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
	        <input style="width:500px;" type="submit" name="" class="rz_sub" value="下单">
	   </div>
	</form>
</div>
<div class="upgoods" style="display: none;">
	<form id="addCarGoodsResource" enctype="multipart/form-data" method="post" novalidate="novalidate"  action="<?php echo url('Warehouse/addorder'); ?>" onSubmit="return checkku();" target="_parent">
        <input type="hidden" name="uid" value="<?php echo trim(session('username'))?>">
        <input type="hidden" name="wh_id" value="<?php echo $id1; ?>">
        <input type="hidden" name="is_company" value="<?php echo $userres[0]['is_company']; ?>">
        <input type="hidden" name="uptype" value="1">
        <input type="hidden" name="is_recycle" value="0">
        <input type="hidden" name="order_state" value="1">
        <input type="hidden" name="add_goods" value="1">
        <input type="hidden" name="check_state" value="2">
        <div class="rz-Form" style="margin-left: 0px;">
            <div class="rz-model rz-label">
                <div class="clearfix">
                    <p class="fl rz-i">*</p>
                    <p class="fl" style="width: 80px;">需要冷库地&nbsp;</p>
                </div>
                <!-- <div class="ku" style="display: inline-block;"> -->
                    <input name="whaddress" id="name" class="xm whaddress" type="text" placeholder="请选择需要冷库地" value="<?php echo $whres['wh_address']; ?>" readonly="">
                    <!-- <label style="margin:0px">冷库地必须</label>
                    <div class="xiala" onclick="mzReg1(this)">
                        <h1><span>确认</span></h1>
                    </div> -->
                <!-- </div> -->
            </div>
            
             <div class="rz-model rz-label">
                <div class="clearfix">
                    <p class="fl rz-i">*</p>
                    <p class="fl">入库时间&nbsp;</p>
                </div>
                <input onblur="mzReg(this)" name="enter_wh_time" class="xm siteinput ECalendar enter_wh_time" type="text" placeholder="请选择入库时间" style="width: 462px;" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd'})">
                <br><label class="labelnomargin">请选择入库时间</label>
            </div>
            <div class="rz-model rz-label">
                <div class="clearfix">
                    <p class="fl rz-i">*</p>
                    <p class="fl" style="width: 90px;">预计库存时间&nbsp;</p>
                </div>
                <select onblur="mzReg(this)" name="storage_time" class="siteselect storage_time" style="width: 500px;">
                    <option value="" selected>请选择</option>
                    <?php if(is_array($types) || $types instanceof \think\Collection || $types instanceof \think\Paginator): $i = 0; $__LIST__ = $types;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo4): $mod = ($i % 2 );++$i;?>
                        <option value="<?php echo $vo4['id']; ?>"><?php echo $vo4['typename']; ?></option>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
                <br><label class="labelnomargin">请选择预计库存时间</label>
            </div>
            <div class="rz-model rz-label">
                <div class="clearfix">
                    <p class="fl rz-i">*</p>
                    <p class="fl">货物名称&nbsp;</p>
                </div>
                <input onblur="mzReg(this)" name="goods_name" id="name" class="xm goods_name" type="text" placeholder="请输入货物名称">
                <br><label class="labelnomargin">请输入货物名称</label>
            </div>
            <div class="rz-model rz-label">
                <div class="clearfix">
                    <p class="fl rz-i">*</p>
                    <p class="fl">货物类型&nbsp;</p>
                </div>
                <select onblur="mzReg(this)" name="goods_type" class="siteselect goods_type" style="width: 500px;">
                    <option value="" selected>请选择</option>
                    <?php if(is_array($type6) || $type6 instanceof \think\Collection || $type6 instanceof \think\Paginator): $i = 0; $__LIST__ = $type6;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo6): $mod = ($i % 2 );++$i;?>
                        <option value="<?php echo $vo6['id']; ?>"><?php echo $vo6['typename']; ?></option>
                    <?php endforeach; endif; else: echo "" ;endif; ?>    
                </select>
                <br><label class="labelnomargin">请选择货物类型</label>
            </div>
            <div class="rz-model rz-label">
                <div class="clearfix">
                    <p class="fl rz-i">*</p>
                    <p class="fl">货物规格&nbsp;</p>
                </div>
                <input onblur="xsReg(this)" name="standard_ton" id="name" class="xm standard_ton" type="text" placeholder="请输入货物规格" style="width: 185px;">
                <span>&nbsp;吨&nbsp;</span>
                <input onblur="xsReg(this)" name="standard_square" id="name" class="xm standard_square" type="text" placeholder="请输入货物规格" style="width: 185px;"><span>&nbsp;方&nbsp;</span>
                <br><label class="labelnomargin">请输入正确格式的货物规格</label>
            </div>
            <div class="rz-model rz-label">
                <div class="clearfix">
                    <p class="fl rz-i">*</p>
                    <p class="fl">包装类型&nbsp;</p>
                </div>
                <input onblur="mzReg(this)" name="package_type" id="name" class="xm package_type" type="text" placeholder="请输入包装类型">
                <br><label class="labelnomargin">请输入包装类型</label>
            </div>
            <div class="rz-model rz-label">
                <div class="clearfix">
                    <p class="fl rz-i">*</p>
                    <p class="fl">输入价格&nbsp;</p>
                    <p class="fl" style="width: auto;">（此价格仅为存储费用不包含其他费用）</p>
                </div>
                <input onblur="xsReg(this)" name="store_price" id="name" class="xm store_price" type="text" placeholder="请输入货物价格">
                <br><label class="labelnomargin">请输入价格</label>
            </div>
            <div class="rz-model rz-label">
                <div class="clearfix">
                    <p class="fl rz-i">*</p>
                    <p class="fl">价格类型</p>
                </div>
                <div class="libraryarea">
                    <input type="radio" name="price_type" class="price_type" checked value="一口价">&nbsp;一口价
                </div>
                <br><label class="labelnomargin">请选择价格类型</label>
            </div>
            <div class="rz-model rz-label">
                <div class="clearfix">
                    <p class="fl rz-i">*</p>
                    <p class="fl">支付方式</p>
                </div>
                <div class="libraryarea">
                    <?php if(is_array($type4) || $type4 instanceof \think\Collection || $type4 instanceof \think\Paginator): $i = 0; $__LIST__ = $type4;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <input type="radio" checked name="payment_mode" class="payment_mode" value="<?php echo $vo['id']; ?>"><?php echo $vo['typename']; endforeach; endif; else: echo "" ;endif; ?>
                </div>
                <br><label class="labelnomargin">请选择支付方式</label>
            </div>
            <a id="sszz"></a>
            <div class="rz-model rz-label">
                <div class="clearfix">
                    <p class="fl rz-i">*</p>
                    <p class="fl">库存温度&nbsp;</p>
                </div>
                <select onblur="mzReg(this)" name="need_wh_temperature" class="siteselect need_wh_temperature" style="width: 500px;">
                    <option value="" selected>请选择</option>
                    <?php if(is_array($type5) || $type5 instanceof \think\Collection || $type5 instanceof \think\Paginator): $i = 0; $__LIST__ = $type5;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo5): $mod = ($i % 2 );++$i;?>
                        <option value="<?php echo $vo5['id']; ?>"><?php echo $vo5['typename']; ?></option>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
                <br><label class="labelnomargin">请选择库存温度</label>
            </div>
            <div class="rz-model rz-label">
                <div class="clearfix">
                    <p class="fl rz-i">*</p>
                    <p class="fl" style="width: 90px;">是否需要发票</p>
                </div>
                <div class="libraryarea">
                    <input type="radio" name="invoice" class="invoice" checked value="是">&nbsp;是
                </div>
                <div class="libraryarea">
                    <input type="radio" name="invoice" class="invoice" value="否">&nbsp;否
                </div>
                <br><label class="labelnomargin">请选择是否需要发票</label>
            </div>
            <div class="clearfix rz-model">
                <div class="clearfix">
                    <p class="fl rz-i">*</p>
                    <p class="fl">货物图片</p>
                   
                </div>
               <div class="img_show">
                    <img src="__PUBLIC__/images/sci.png" id='show'>
                </div>
                <span class="fileinput-button">
                    <span>点击上传</span>
                    <input type="file" name="goods_photo" id='file' onchange="c()" class="sfz goods_photo"  placeholder="请上传货物图片">
                </span>
            </div>
            <div class="rz-model rz-label">
                <div class="clearfix">
                    <p class="fl rz-i">*</p>
                    <p class="fl">联系人&nbsp;</p>
                </div>
                <input onblur="mzReg(this)" name="contact" id="idCard" class="sfz contact" type="text" placeholder="请输入联系人">
                <br><label class="labelnomargin">请输入联系人</label>
            </div>
            <div class="rz-model rz-label">
                <div class="clearfix">
                    <p class="fl rz-i">*</p>
                    <p class="fl">联系电话&nbsp;</p>
                </div>
                <input onblur="uxPhone(this)" name="phone" id="idCard" class="sfz phone" type="text" placeholder="请输入联系电话" style="margin-bottom: 0px;text-align: left;">
                <label class="labelnomargin">请输入联系电话</label>
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
<script type="text/javascript" src="__PUBLIC__/lib/date/WdatePicker.js"></script> 
<script src="__PUBLIC__/js/Ecalendar.jquery.min.js"></script>
<script src="__PUBLIC__/js/auth.js"></script>
<script src="__PUBLIC__/js/main.js"></script>
<script type="text/javascript">
	function c () {
        var r= new FileReader();
        f=document.getElementById('file').files[0];
        r.readAsDataURL(f);
        r.onload=function  (e) {
        document.getElementById('show').src=this.result;
        };
    }
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