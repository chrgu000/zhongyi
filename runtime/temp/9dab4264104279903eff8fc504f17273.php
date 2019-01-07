<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:66:"E:\WWW\zhongyi\public/../application/admin\view\user\user-add.html";i:1509073331;}*/ ?>
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

	/*.form-horizontal .company_name,.form-horizontal .car_id,.form-horizontal .business_card,.form-horizontal .road_permit,.form-horizontal .driver_card{
		display: none;
	}*/
	.tab{
		padding:10px 0px; margin-left: -85px;
	}
	.tab p{
		padding:10px 20px;
		background: #e8e8e8;
		color: #000;
		cursor: pointer;
	}
	.tab p.fl{
		float: left;
	}
	.tab p.active{
		background: #222;
		color:#fff;
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
	<div class="row cl">
		<label class="col-3"></label>
		<div class="formControls tab col-9 col-offset-3">
			<p class="fl active gthz">个体货主</p>
			<p class="fl gshz">公司货主</p>
			<p class="fl kz">库主</p>
			<p class="fl cz">车主</p>
			<p class="fl wlgs">物流公司</p>
			<div class="clearfix"></div>
		</div>
		
	</div>
	<!-- 个体货主 -->
	<form action="<?php echo url('User/add'); ?>" method="post" class="form form-horizontal formtab gthzform" id="form-admin-add" enctype="multipart/form-data">
	    <div class="row cl">
			<label class="form-label col-3"><span class="c-red">*</span>账号:</label>
			<div class="formControls col-5">
				<input name="username" id="username" type="text" class="input-text" placeholder=""  
				onblur="checkusername()" datatype="m" nullmsg="手机号不能为空" >
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
            <div class="formControls col-5">
            	<?php foreach($type as $k=>$vo):if($vo['typename'] == '货主'): ?>
                        <input type="text" class="input-text" value="货主" readonly="true">
                        <input name="type_id" type="hidden" value="<?php echo $vo['id']; ?>">
                    <?php endif; endforeach;?> 
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-3"><span class="c-red">*</span>认证类型：</label>
            <div class="formControls col-5"> 
            	<input name="type" type="text" class="input-text" value="个体货主" readonly="true">
            </div>
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
			<label class="form-label col-3"><span class="c-red">*</span>真实姓名：</label>
			<div class="formControls col-5">
				<input name="real_name" type="text" class="input-text" datatype="*" nullmsg="请输入真实姓名！">
				<input name="company_name" type="hidden" value="">
				<input name="car_id" type="hidden" value="">
				<input name="business_card" type="hidden" value="">
				<input name="road_permit" type="hidden" value="">
				<input name="driver_card" type="hidden" value="">
			</div>
		</div>
		<div class="row cl identity_id">
			<label class="form-label col-3"><span class="c-red">*</span>身份证号：</label>
			<div class="formControls col-5">
				<input name="identity_id" type="text" class="input-text" value="" datatype="*" nullmsg="请输入身份证号！">
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
		<div class="row cl ">
			<div class="col-9 col-offset-3">
				<input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
				<input type="reset" class="btn btn-primary radius" value="&nbsp;&nbsp;重置&nbsp;&nbsp;">
			</div>
		</div>
	</form>

	<!-- 公司货主 -->
	<form action="<?php echo url('User/add'); ?>" method="post" class="form form-horizontal formtab gshzform" id="form-admin-add1" enctype="multipart/form-data" style="display: none;">
	    <div class="row cl">
			<label class="form-label col-3"><span class="c-red">*</span>账号:</label>
			<div class="formControls col-5">
				<input name="username" id="username" type="text" class="input-text" placeholder=""  
				onblur="checkusername()" datatype="m" nullmsg="手机号不能为空" >
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
            <div class="formControls col-5">
            	<?php foreach($type as $k=>$vo):if($vo['typename'] == '货主'): ?>
                        <input type="text" class="input-text" value="货主" readonly="true">
                        <input name="type_id" type="hidden" value="<?php echo $vo['id']; ?>">
                    <?php endif; endforeach;?> 
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-3"><span class="c-red">*</span>认证类型：</label>
            <div class="formControls col-5"> 
            	<input name="type" type="text" class="input-text" value="公司货主" readonly="true">
            </div>
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
		<div class="row cl company_name">
			<label class="form-label col-3"><span class="c-red">*</span>公司名称：</label>
			<div class="formControls col-5">
				<input name="company_name" type="text" class="input-text" value="" datatype="*" nullmsg="请输入公司名称">
				<input name="real_name" type="hidden" value="">
				<input name="identity_id" type="hidden" value="">
				<input name="car_id" type="hidden" value="">
				<input name="road_permit" type="hidden" value="">
				<input name="driver_card" type="hidden" value="">
				<input name="peison_business" type="hidden" value="">
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
		<div class="row cl ">
			<div class="col-9 col-offset-3">
				<input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
				<input type="reset" class="btn btn-primary radius" value="&nbsp;&nbsp;重置&nbsp;&nbsp;">
			</div>
		</div>
	</form>

	<!-- 库主 -->
	<form action="<?php echo url('User/add'); ?>" method="post" class="form form-horizontal formtab kzform" id="form-admin-add2" enctype="multipart/form-data" style="display: none;">
	    <div class="row cl">
			<label class="form-label col-3"><span class="c-red">*</span>账号:</label>
			<div class="formControls col-5">
				<input name="username" id="username" type="text" class="input-text" placeholder=""  
				onblur="checkusername()" datatype="m" nullmsg="手机号不能为空" >
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
            <div class="formControls col-5">
            	<?php foreach($type as $k=>$vo):if($vo['typename'] == '库主'): ?>
                        <input type="text" class="input-text" value="库主" readonly="true">
                        <input name="type_id" type="hidden" value="<?php echo $vo['id']; ?>">
                    <?php endif; endforeach;?> 
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-3"><span class="c-red">*</span>认证类型：</label>
            <div class="formControls col-5"> 
            	<input name="type" type="text" class="input-text" value="库主" readonly="true">
            </div>
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
		<div class="row cl company_name">
			<label class="form-label col-3"><span class="c-red">*</span>公司名称：</label>
			<div class="formControls col-5">
				<input name="company_name" type="text" class="input-text" value="" datatype="*" nullmsg="请输入公司名称">
				<input name="real_name" type="hidden" value="">
				<input name="identity_id" type="hidden" value="">
				<input name="car_id" type="hidden" value="">
				<input name="road_permit" type="hidden" value="">
				<input name="driver_card" type="hidden" value="">
				<input name="peison_business" type="hidden" value="">
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
		<div class="row cl ">
			<div class="col-9 col-offset-3">
				<input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
				<input type="reset" class="btn btn-primary radius" value="&nbsp;&nbsp;重置&nbsp;&nbsp;">
			</div>
		</div>
	</form>

	<!-- 车主 -->
	<form action="<?php echo url('User/add'); ?>" method="post" class="form form-horizontal formtab czform" id="form-admin-add3" enctype="multipart/form-data" style="display: none;">
	    <div class="row cl">
			<label class="form-label col-3"><span class="c-red">*</span>账号:</label>
			<div class="formControls col-5">
				<input name="username" id="username" type="text" class="input-text" placeholder=""  
				onblur="checkusername()" datatype="m" nullmsg="手机号不能为空" >
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
            <div class="formControls col-5">
            	<?php foreach($type as $k=>$vo):if($vo['typename'] == '车主'): ?>
                        <input type="text" class="input-text" value="车主" readonly="true">
                        <input name="type_id" type="hidden" value="<?php echo $vo['id']; ?>">
                    <?php endif; endforeach;?> 
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-3"><span class="c-red">*</span>认证类型：</label>
            <div class="formControls col-5"> 
            	<input name="type" type="text" class="input-text" value="车主" readonly="true">
            </div>
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
			<label class="form-label col-3"><span class="c-red">*</span>真实姓名：</label>
			<div class="formControls col-5">
				<input name="real_name" type="text" class="input-text" datatype="*" nullmsg="请输入真实姓名！">
				<input name="company_name" type="hidden" value="">
				<input name="road_permit" type="hidden" value="">
				<input name="driver_card" type="hidden" value="">
				<input name="peison_business" type="hidden" value="">
				<input name="business_card" type="hidden" value="">
			</div>
		</div>
		<div class="row cl identity_id">
			<label class="form-label col-3"><span class="c-red">*</span>身份证号：</label>
			<div class="formControls col-5">
				<input name="identity_id" type="text" class="input-text" value="" datatype="*" nullmsg="请输入身份证号！">
			</div>
		</div>
		<div class="row cl car_id">
			<label class="form-label col-3"><span class="c-red">*</span>车牌号：</label>
			<div class="formControls col-5">
				<input name="car_id" type="text" class="input-text" value="" datatype="*" nullmsg="请输入车牌号！">
			</div>
			<div class="col-4"></div>
		</div>
        <div class="row cl driver_card">
            <label class="form-label col-3">行驶证：</label>
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

	<!-- 物流公司 -->
	<form action="<?php echo url('User/add'); ?>" method="post" class="form form-horizontal formtab wlgsform" id="form-admin-add4" enctype="multipart/form-data" style="display: none;">
	    <div class="row cl">
			<label class="form-label col-3"><span class="c-red">*</span>账号:</label>
			<div class="formControls col-5">
				<input name="username" id="username" type="text" class="input-text" placeholder=""  
				onblur="checkusername()" datatype="m" nullmsg="手机号不能为空" >
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
            <div class="formControls col-5">
            	<?php foreach($type as $k=>$vo):if($vo['typename'] == '物流公司'): ?>
                        <input type="text" class="input-text" value="物流公司" readonly="true">
                        <input name="type_id" type="hidden" value="<?php echo $vo['id']; ?>">
                    <?php endif; endforeach;?> 
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-3"><span class="c-red">*</span>认证类型：</label>
            <div class="formControls col-5"> 
            	<input name="type" type="text" class="input-text" value="物流公司" readonly="true">
            </div>
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
		<div class="row cl company_name">
			<label class="form-label col-3"><span class="c-red">*</span>公司名称：</label>
			<div class="formControls col-5">
				<input name="company_name" type="text" class="input-text" value="" datatype="*" nullmsg="请输入公司名称">
				<input name="real_name" type="hidden" value="">
				<input name="identity_id" type="hidden" value="">
				<input name="car_id" type="hidden" value="">
				<input name="driver_card" type="hidden" value="">
				<input name="peison_business" type="hidden" value="">
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
	$("#form-admin-add1").Validform({
		tiptype:2,
		callback:function(form){
			form[0].submit();
			var index = parent.layer.getFrameIndex(window.name);
			parent.$('.btn-refresh').click();
			parent.layer.close(index);
		}
	});
	$("#form-admin-add2").Validform({
		tiptype:2,
		callback:function(form){
			form[0].submit();
			var index = parent.layer.getFrameIndex(window.name);
			parent.$('.btn-refresh').click();
			parent.layer.close(index);
		}
	});
	$("#form-admin-add3").Validform({
		tiptype:2,
		callback:function(form){
			form[0].submit();
			var index = parent.layer.getFrameIndex(window.name);
			parent.$('.btn-refresh').click();
			parent.layer.close(index);
		}
	});
	$("#form-admin-add4").Validform({
		tiptype:2,
		callback:function(form){
			form[0].submit();
			var index = parent.layer.getFrameIndex(window.name);
			parent.$('.btn-refresh').click();
			parent.layer.close(index);
		}
	});
});
$('.gthz').click(function(){
	$('.tab .fl').removeClass('active');
	$(this).addClass('active');
	$('.formtab').hide();
	$('.gthzform').show();
});
$('.gshz').click(function(){
	$('.tab .fl').removeClass('active');
	$(this).addClass('active');
	$('.formtab').hide();
	$('.gshzform').show();
});
$('.kz').click(function(){
	$('.tab .fl').removeClass('active');
	$(this).addClass('active');
	$('.formtab').hide();
	$('.kzform').show();
});
$('.cz').click(function(){
	$('.tab .fl').removeClass('active');
	$(this).addClass('active');
	$('.formtab').hide();
	$('.czform').show();
});
$('.wlgs').click(function(){
	$('.tab .fl').removeClass('active');
	$(this).addClass('active');
	$('.formtab').hide();
	$('.wlgsform').show();
});
</script>
</body>
</html>