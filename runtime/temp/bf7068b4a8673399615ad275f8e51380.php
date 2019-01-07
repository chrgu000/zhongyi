<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"E:\wamp\www\transport\public/../application/admin\view\user\user-add.html";i:1507691941;}*/ ?>
<!DOCTYPE HTML>
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
<style type="text/css">

	.form-horizontal .company_name,.form-horizontal .car_id,.form-horizontal .business_card,.form-horizontal .road_permit,.form-horizontal .driver_card{
		display: none;
	}
</style>
<!--[if IE 6]>
<script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>用户信息添加</title>
</head>
<body>
    <a class="btn btn-success radius r mr-20" style="line-height:1.6em;margin-top:1px" 
    href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a>
<div class="pd-20">
	<form action="<?php echo url('User/add'); ?>" method="post" class="form form-horizontal" id="form-admin-add" enctype="multipart/form-data">
	    <!--<div class="row cl">
			<label class="form-label col-3"><span class="c-red">*</span>账号：</label>
			<div class="formControls col-5">
				<input name="username" type="text" class="input-text" value="" placeholder="" id="user-tel"  datatype="m" nullmsg="账号不能为空">
			</div>
			<div class="col-4"> </div>
		</div>-->
	    <div class="row cl">
			<label class="form-label col-3"><span class="c-red">*</span>账号:</label>
			<div class="formControls col-5">
				<input name="username" id="username" type="text" class="input-text" placeholder=""  
				onblur="checkusername()" datatype="m" nullmsg="手机不能为空" >
			</div>
			<div class="formControls col-4"><span id="usercheck" style="color:red; font-size: 12px;"></span></div>
			<div class="col-4"> </div>
		</div>
		<div class="row cl">
			<label class="form-label col-3"><span class="c-red">*</span>初始密码：</label>
			<div class="formControls col-5">
				<input name="password" type="password" placeholder="密码" autocomplete="off" value="" class="input-text" datatype="*1-20" nullmsg="密码不能为空">
			</div>
			<div class="col-4"> </div>
		</div>
		<div class="row cl">
			<label class="form-label col-3"><span class="c-red">*</span>确认密码：</label>
			<div class="formControls col-5">
				<input type="password" placeholder="确认新密码" autocomplete="off" class="input-text " errormsg="您两次输入的新密码不一致！" datatype="*" nullmsg="请再输入一次新密码！" recheck="password" id="newpassword2" name="newpassword2">
			</div>
			<div class="col-4"> </div>
		</div>
		<div class="row cl">
            <label class="form-label col-3"><span class="c-red">*</span>用户角色：</label>
            <div class="formControls col-5"> <span class="select-box">
                <select class="select" size="1" name="type_id" datatype="*" nullmsg="请选择用户角色！">
                    <option value="" selected>请选择用户角色</option>
                    <?php if(is_array($type) || $type instanceof \think\Collection || $type instanceof \think\Paginator): $i = 0; $__LIST__ = $type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                        <option value="<?php echo $v['id']; ?>"><?php echo $v['typename']; ?></option>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
            </span> </div>
            <div class="col-4"> </div>
        </div>
        <div class="row cl">
            <label class="form-label col-3"><span class="c-red">*</span>认证类型：</label>
            <div class="formControls col-5"> <span class="select-box">
                <select class="select selectbtn" size="1" name="type" datatype="*" nullmsg="请选择用户角色！">
                    <!-- <option value="" selected>请选择认证类型</option> -->
                    <option value="个体货主" selected>个体货主</option>
                    <option value="公司货主">公司货主</option>
                    <option value="车主">车主</option>
                    <option value="库主">库主</option>
                    <option value="物流公司">物流公司</option>
                </select>
            </span> </div>
            <div class="col-4"> </div>
        </div>
        <div class="row cl">
            <label class="form-label col-3"><span class="c-red">*</span>账号类别：</label>
            <div class="formControls col-5 skin-minimal">
	            <div class="radio-box">
	                <input type="radio" id="sex-1" name="is_company" value="1" datatype="*" nullmsg="请选择账号类别">
	                <label for="sex-1">自营账号</label>
	            </div>
	            <div class="radio-box">
	                <input type="radio" id="sex-2" name="is_company" value="0">
	                <label for="sex-2">非自营账号</label>
	            </div>
            </div>
            <div class="col-4"></div>
        </div>
		<div class="row cl real_name">
			<label class="form-label col-3">真实姓名：</label>
			<div class="formControls col-5">
				<input name="real_name" type="text" class="input-text">
			</div>
		</div>
		<div class="row cl identity_id">
			<label class="form-label col-3">身份证号：</label>
			<div class="formControls col-5">
				<input name="identity_id" type="text" class="input-text" value="">
			</div>
		</div>
		<div class="row cl company_name">
			<label class="form-label col-3">公司名称：</label>
			<div class="formControls col-5">
				<input name="company_name" type="text" class="input-text" value="" >
			</div>
		</div>
		<div class="row cl car_id">
			<label class="form-label col-3">车牌号：</label>
			<div class="formControls col-5">
				<input name="car_id" type="text" class="input-text" value="" placeholder="">
			</div>
		</div>
		<div class="row cl peison_business">
            <label class="form-label col-3">个体经营许可证：</label>
            <div class="formControls col-6"> 
                <span class="btn-upload form-group">
                    <input class="input-text upload-url" type="text" name="peison_business" id="uploadfile-2" style="width:500px" placeholder="点击上传图片">
                    <a href="javascript:void();" class="btn btn-primary radius upload-btn"><i class="Hui-iconfont">&#xe642;</i> 浏览文件</a>
                    <input type="file" name="peison_business"  class="input-file">
                </span>
            </div>
        </div>
        <div class="row cl business_card">
            <label class="form-label col-3">营业执照：</label>
            <div class="formControls col-6"> 
                <span class="btn-upload form-group">
                    <input class="input-text upload-url" type="text" name="business_card" id="uploadfile-2" style="width:500px" placeholder="点击上传图片">
                    <a href="javascript:void();" class="btn btn-primary radius upload-btn"><i class="Hui-iconfont">&#xe642;</i> 浏览文件</a>
                    <input type="file" multiple name="business_card" class="input-file">
                </span>
            </div>
        </div>
        <div class="row cl road_permit">
            <label class="form-label col-3">道路运输许可证：</label>
            <div class="formControls col-6"> 
                <span class="btn-upload form-group">
                    <input class="input-text upload-url" type="text" name="road_permit" id="uploadfile-2" style="width:500px" placeholder="点击上传图片">
                    <a href="javascript:void();" class="btn btn-primary radius upload-btn"><i class="Hui-iconfont">&#xe642;</i> 浏览文件</a>
                    <input type="file" multiple name="road_permit" class="input-file">
                </span>
            </div>
        </div>
        <div class="row cl driver_card">
            <label class="form-label col-3">行驶证:</label>
            <div class="formControls col-5"> 
                <span class="btn-upload form-group">
                    <input class="input-text upload-url" type="text" name="driver_card" id="uploadfile-2"  style="width:500px" placeholder="点击上传图片">
                    <a href="javascript:void();" class="btn btn-primary radius upload-btn"><i class="Hui-iconfont">&#xe642;</i> 浏览文件</a>
                    <input type="file" multiple name="driver_card" class="input-file">
                </span>
            </div>
        </div>
		<div class="row cl ">
			<div class="col-9 col-offset-3">
				<input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
				<input type="reset" class="btn btn-primary radius" value="&nbsp;&nbsp;重置&nbsp;&nbsp;">
			</div>
		</div>
	</form>
</div>
<script type="text/javascript" src="__PUBLIC__/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="__PUBLIC__/lib/icheck/jquery.icheck.min.js"></script> 
<script type="text/javascript" src="__PUBLIC__/lib/Validform/5.3.2/Validform.min.js"></script> 
<script type="text/javascript" src="__PUBLIC__/lib/layer/1.9.3/layer.js"></script> 
<script type="text/javascript" src="__PUBLIC__/js/H-ui.js"></script> 
<script type="text/javascript" src="__PUBLIC__/js/H-ui.admin.js"></script> 
<script type="text/javascript">
$(function(){
	$('.skin-minimal input').iCheck({
		checkboxClass: 'icheckbox-blue',
		radioClass: 'iradio-blue',
		increaseArea: '20%'
	});
	
	$("#form-admin-add").Validform({
		tiptype:2,
		callback:function(form){
			form[0].submit();
			var index = parent.layer.getFrameIndex(window.name);
			parent.$('.btn-refresh').click();
			parent.layer.close(index);
		}
	});
});
$('.selectbtn').change(function(){
	var abtn=$(this).children('option:selected').val();
	if(abtn=="个体货主"){
		$('.real_name').show();
		$('.identity_id').show();
		$('.peison_business').show();
		$('.company_name').hide();
		$('.car_id').hide();
		$('.business_card').hide();
		$('.road_permit').hide();
		$('.driver_card').hide();
	}
	if(abtn=="公司货主"){
		$('.real_name').hide();
		$('.identity_id').hide();
		$('.peison_business').hide();
		$('.company_name').show();
		$('.car_id').hide();
		$('.business_card').show();
		$('.road_permit').hide();
		$('.driver_card').hide();
	}
	if(abtn=="库主"){
		$('.real_name').hide();
		$('.identity_id').hide();
		$('.peison_business').hide();
		$('.company_name').show();
		$('.car_id').hide();
		$('.business_card').show();
		$('.road_permit').hide();
		$('.driver_card').hide();
	}
	if(abtn=="车主"){
		$('.real_name').show();
		$('.identity_id').show();
		$('.peison_business').hide();
		$('.company_name').hide();
		$('.car_id').show();
		$('.business_card').hide();
		$('.road_permit').hide();
		$('.driver_card').show();
	}
	if(abtn=="物流公司"){
		$('.real_name').hide();
		$('.identity_id').hide();
		$('.peison_business').hide();
		$('.company_name').show();
		$('.car_id').hide();
		$('.business_card').show();
		$('.road_permit').show();
		$('.driver_card').hide();
	}
})
</script>
</body>
</html>