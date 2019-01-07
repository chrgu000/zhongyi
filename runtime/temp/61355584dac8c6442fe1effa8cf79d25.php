<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:71:"E:\WWW\transport\public/../application/admin\view\admin\admin-edit.html";i:1511762946;}*/ ?>
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
<link href="../../../../static/admin/lib/Hui-iconfont/1.0.1/iconfont.css" rel="stylesheet" type="text/css" />
<!--[if IE 6]>
<script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>管理员信息修改</title>
</head>
<body>
    <a class="btn btn-success radius r mr-20" style="line-height:1.6em;margin-top:1px" 
    href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a>
<div class="pd-20">
	<form action="<?php echo url('Admin/edit'); ?>" method="post" class="form form-horizontal" id="form-admin-add">
	    <input type="hidden" name="id" value="<?php echo $admin['id']; ?>">
	    <div class="row cl">
			<label class="form-label col-3"><span class="c-red">*</span>工号：</label>
			<div class="formControls col-5">
				<input name="adminid" type="text" class="input-text" value="<?php echo $admin['adminid']; ?>" readonly="true">
			</div>
			<div class="col-4"> </div>
		</div>
		<div class="row cl">
			<label class="form-label col-3"><span class="c-red">*</span>姓名：</label>
			<div class="formControls col-5">
				<input name="adminname" type="text" class="input-text" value="<?php echo $admin['adminname']; ?>" readonly="true">
			</div>
			<div class="col-4"> </div>
		</div>
		<div class="row cl">
            <label class="form-label col-3">用户角色：</label>
            <div class="formControls col-5"> <span class="select-box">
                <select class="select" size="1" name="role" datatype="*" nullmsg="请选择用户角色！">
                    <option value="" selected>请选择用户角色</option>
                    <?php foreach($role as $k=>$v):
                    if($v['id']==$admin['role']) $select="selected='selected'";
                    else $select=""; ?>
                        <option value="<?php echo $v['id']; ?>" <?php echo $select;?>><?php echo $v['rolename']; ?></option>
                    <?php endforeach;?>
                </select>
            </span> </div>
            <div class="col-4"> </div>
        </div>
		<div class="row cl">
			<label class="form-label col-3"><span class="c-red">*</span>手机：</label>
			<div class="formControls col-5">
				<input name="adminphone" type="text" class="input-text" value="<?php echo $admin['adminphone']; ?>" placeholder="" id="user-tel"  datatype="m" nullmsg="手机不能为空">
			</div>
			<div class="col-4"> </div>
		</div>
		<div class="row cl">
			<label class="form-label col-3"><span class="c-red">*</span>邮箱：</label>
			<div class="formControls col-5">
				<input name="adminmail" type="text" class="input-text" value="<?php echo $admin['adminmail']; ?>"  placeholder="@" id="email" datatype="e" nullmsg="请输入邮箱！">		
			</div>
			<div class="col-4"> </div>
		</div>
		<div class="row cl">
			<div class="col-9 col-offset-3">
				<input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
				<a class="btn btn-primary radius" href="<?php echo url('Admin/lst'); ?>" >返回</a>
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
</script>
</body>
</html>