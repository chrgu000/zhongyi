<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:69:"E:\WWW\transport\public/../application/admin\view\user\User-edit.html";i:1509066878;}*/ ?>
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
<link href="../../../../../static/admin/lib/Hui-iconfont/1.0.1/iconfont.css" rel="stylesheet" type="text/css" />
<!--[if IE 6]>
<script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>用户信息修改</title>
</head>
<body>
    <a class="btn btn-success radius r mr-20" style="line-height:1.6em;margin-top:1px" 
    href="javascript:location.replace(location.href);" title="刷新" >
    <i class="Hui-iconfont">&#xe68f;</i></a>
<div class="pd-20">
	<form action="<?php echo url('User/edit'); ?>" method="post" class="form form-horizontal" id="form-admin-add" enctype="multipart/form-data">
	    <input type="hidden" name="id" value="<?php echo $list['id']; ?>">
	    <div class="row cl">
			<label class="form-label col-3"><span class="c-red">*</span>账号:</label>
			<div class="formControls col-5">
				<input name="username" type="text" class="input-text" value="<?php echo $list['username']; ?>" placeholder="" id="user-name"  datatype="*1-30" nullmsg="账号不能为空" readonly="true">
			</div>
			<div class="col-4"> </div>
		</div>
		<div class="row cl">
            <label class="form-label col-3"><span class="c-red">*</span>用户角色：</label>
            <div class="formControls col-5"> 
                <?php foreach($type as $k=>$vo):if($list['type_id'] == $vo['id']): ?>
                        <input name="" type="text" class="input-text" value="<?php echo $vo['typename']; ?>" readonly="true">
                        <input name="type_id" type="hidden" value="<?php echo $vo['id']; ?>">
                    <?php endif; endforeach;?>
                
                <!-- <span class="select-box">
                <select class="select jsselect" size="1" name="type_id" datatype="*" nullmsg="请选择用户角色！" disabled="disabled">
                    <option value="">请选择用户角色</option>
                    <?php foreach($type as $k=>$v):
                    if($v['id']==$list['type_id']) $select="selected='selected'";
                     else $select="";?>
                        <option value="<?php echo $v['id']; ?>" <?php echo $select;?>><?php echo $v['typename']; ?></option>
                    <?php endforeach;?>
                </select>
                </span> --> 
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-3"><span class="c-red">*</span>认证类型：</label>
            <div class="formControls col-5"> 
                <input name="type" type="text" class="input-text" value="<?php echo $list['type']; ?>" readonly="true">
                <!-- <span class="select-box">
                <select class="select jsselect" size="1" name="type"  datatype="*" nullmsg="请选择用户角色！" disabled="disabled">
                    <option value="">请选择认证类型</option>
                    <?php if($list['type'] == '公司货主'): ?>
                        <option value="公司货主" selected="selected">公司货主</option>
                        <option value="个体货主">个体货主</option>
                        <option value="车主">车主</option>
                        <option value="库主">库主</option>
                        <option value="物流公司">物流公司</option>
                    <?php elseif($list['type'] == '个体货主'): ?>
                        <option value="公司货主">公司货主</option>
                        <option value="个体货主" selected="selected">个体货主</option>
                        <option value="车主">车主</option>
                        <option value="库主">库主</option>
                        <option value="物流公司">物流公司</option>
                    <?php elseif($list['type'] == '车主'): ?>
                        <option value="公司货主">公司货主</option>
                        <option value="个体货主">个体货主</option>
                        <option value="车主" selected="selected">车主</option>
                        <option value="库主">库主</option>
                        <option value="物流公司">物流公司</option>
                    <?php elseif($list['type'] == '库主'): ?>
                        <option value="公司货主">公司货主</option>
                        <option value="个体货主">个体货主</option>
                        <option value="车主">车主</option>
                        <option value="库主" selected="selected">库主</option>
                        <option value="物流公司">物流公司</option>
                    <?php elseif($list['type'] == '物流公司'): ?>
                        <option value="公司货主">公司货主</option>
                        <option value="个体货主">个体货主</option>
                        <option value="车主">车主</option>
                        <option value="库主">库主</option>
                        <option value="物流公司" selected="selected">物流公司</option>
                    <?php else: ?>
                        <option value="公司货主">公司货主</option>
                        <option value="个体货主">个体货主</option>
                        <option value="车主">车主</option>
                        <option value="库主">库主</option>
                        <option value="物流公司">物流公司</option>
                    <?php endif; ?>
                </select>
                </span> --> 
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-3"><span class="c-red">*</span>账号类别：</label>
            <div class="formControls col-5 skin-minimal">
            <?php if($list['is_company'] == 0): ?>
                <div class="radio-box">
                    <input type="radio" id="sex-1" name="is_company" value="1" datatype="*" nullmsg="请选择用户角色！" >
                    <label for="sex-1">自营账号</label>
                </div>
                <div class="radio-box">
                    <input type="radio" id="sex-2" name="is_company" value="0" checked="checked" datatype="*" nullmsg="请选择用户角色！"> 
                    <label for="sex-2">非自营账号</label>
                </div>
            <?php elseif($list['is_company'] == 1): ?>
                <div class="radio-box">
                    <input type="radio" id="sex-1" name="is_company" value="1" checked="checked" datatype="*" nullmsg="请选择用户角色！" >
                    <label for="sex-1">自营账号</label>
                </div>
                <div class="radio-box">
                    <input type="radio" id="sex-2" name="is_company" value="0" datatype="*" nullmsg="请选择用户角色！"> 
                    <label for="sex-2">非自营账号</label>
                </div>
            <?php endif; ?>
            </div>
        </div>
        <?php if($list['type'] == '公司货主'): ?>
            <div class="row cl">
                <label class="form-label col-3"><span class="c-red">*</span>公司名称：</label>
                <div class="formControls col-5">
                    <input name="company_name" type="text" class="input-text" value="<?php echo $list['company_name']; ?>" datatype="*" nullmsg="请填写公司名称！" >
                </div>
                <div class="col-4"> </div>
            </div>  
            <div class="row cl">
                <label class="form-label col-3">营业执照：</label>
                <div class="formControls col-6"> 
                    <?php if($list['business_card'] != ''): ?>
                        <div class="userimg"><img src="__IMG__<?php echo $list['business_card']; ?>" /></div>
                        <span class="btn-upload form-group">
                        <a href="<?php echo url('User/businessimg_edit',array('id'=>$list['id'])); ?>" class="btn btn-primary radius upload-btn"><i class="Hui-iconfont">&#xe642;</i> 编辑图片</a>
                        <a href="<?php echo url('User/businessimg_del',array('id'=>$list['id'])); ?>" class="btn btn-primary radius upload-btn" onclick="return confirm('确定要删除吗？')"><i class="Hui-iconfont">&#xe642;</i> 删除图片</a>
                    </span>
                    <?php else: ?> 
                    <span class="btn-upload form-group">
                        <a href="<?php echo url('User/businessimg_edit',array('id'=>$list['id'])); ?>" class="btn btn-primary radius upload-btn"><i class="Hui-iconfont">&#xe642;</i> 编辑图片</a>
                    </span>
                    <?php endif; ?>
                </div>
            </div>         
        <?php elseif($list['type'] == '个体货主'): ?>
            <div class="row cl">
                <label class="form-label col-3"><span class="c-red">*</span>真实姓名：</label>
                <div class="formControls col-5">
                    <input name="real_name" type="text" class="input-text" value="<?php echo $list['real_name']; ?>" datatype="*" nullmsg="请填写真实姓名！">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-3"><span class="c-red">*</span>身份证号：</label>
                <div class="formControls col-5">
                    <input name="identity_id" type="text" class="input-text" value="<?php echo $list['identity_id']; ?>" datatype="*" nullmsg="请填写身份证号！">
                </div>
                <div class="col-4"> </div>
            </div>
            <div class="row cl">
                <label class="form-label col-3">个体经营许可证：</label>
                <div class="formControls col-6">
                    <?php if($list['peison_business'] != ''): ?>
                        <div class="userimg"><img src="__IMG__<?php echo $list['peison_business']; ?>" /></div>
                        <span class="btn-upload form-group">
                        <a href="<?php echo url('User/personimg_edit',array('id'=>$list['id'])); ?>" class="btn btn-primary radius upload-btn"><i class="Hui-iconfont">&#xe642;</i> 编辑图片</a>
                        <a href="<?php echo url('User/personimg_del',array('id'=>$list['id'])); ?>" class="btn btn-primary radius upload-btn" onclick="return confirm('确定要删除吗？')"><i class="Hui-iconfont">&#xe642;</i> 删除图片</a>
                        </span>
                    <?php else: ?> 
                    <span class="btn-upload form-group">
                        <a href="<?php echo url('User/personimg_edit',array('id'=>$list['id'])); ?>" class="btn btn-primary radius upload-btn"><i class="Hui-iconfont">&#xe642;</i> 编辑图片</a>
                    </span>
                    <?php endif; ?>
                </div>
            </div>
        <?php elseif($list['type'] == '车主'): ?>
            <div class="row cl">
                <label class="form-label col-3"><span class="c-red">*</span>真实姓名：</label>
                <div class="formControls col-5">
                    <input name="real_name" type="text" class="input-text" value="<?php echo $list['real_name']; ?>" datatype="*" nullmsg="请填写真实姓名！">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-3"><span class="c-red">*</span>身份证号：</label>
                <div class="formControls col-5">
                    <input name="identity_id" type="text" class="input-text" value="<?php echo $list['identity_id']; ?>" datatype="*" nullmsg="请填写身份证号！">
                </div>
                <div class="col-4"> </div>
            </div>
            <div class="row cl">
                <label class="form-label col-3"><span class="c-red">*</span>车牌号：</label>
                <div class="formControls col-5">
                    <input name="car_id" type="text" class="input-text" value="<?php echo $list['car_id']; ?>" datatype="*" nullmsg="请填写车牌号！" >
                </div>
                <div class="col-4"> </div>
            </div>
            <div class="row cl">
                <label class="form-label col-3">行驶证:</label>
                <div class="formControls col-5"> 
                    <?php if($list['driver_card'] != ''): ?>
                        <div class="userimg"><img src="__IMG__<?php echo $list['driver_card']; ?>" /></div>
                        <span class="btn-upload form-group">
                        <a href="<?php echo url('User/driverimg_edit',array('id'=>$list['id'])); ?>" class="btn btn-primary radius upload-btn"><i class="Hui-iconfont">&#xe642;</i> 编辑图片</a>
                        <a href="<?php echo url('User/driverimg_del',array('id'=>$list['id'])); ?>" class="btn btn-primary radius upload-btn" onclick="return confirm('确定要删除吗？')"><i class="Hui-iconfont">&#xe642;</i> 删除图片</a>
                    </span>
                    <?php else: ?> 
                    <span class="btn-upload form-group">
                        <a href="<?php echo url('User/driverimg_edit',array('id'=>$list['id'])); ?>" class="btn btn-primary radius upload-btn"><i class="Hui-iconfont">&#xe642;</i> 编辑图片</a>
                    </span>
                    <?php endif; ?>
                </div>
            </div>
        <?php elseif($list['type'] == '库主'): ?>
            <div class="row cl">
                <label class="form-label col-3"><span class="c-red">*</span>公司名称：</label>
                <div class="formControls col-5">
                    <input name="company_name" type="text" class="input-text" value="<?php echo $list['company_name']; ?>" datatype="*" nullmsg="请填写公司名称！" >
                </div>
                <div class="col-4"> </div>
            </div>
            <div class="row cl">
                <label class="form-label col-3">营业执照：</label>
                <div class="formControls col-6"> 
                    <?php if($list['business_card'] != ''): ?>
                        <div class="userimg"><img src="__IMG__<?php echo $list['business_card']; ?>" /></div>
                        <span class="btn-upload form-group">
                        <a href="<?php echo url('User/businessimg_edit',array('id'=>$list['id'])); ?>" class="btn btn-primary radius upload-btn"><i class="Hui-iconfont">&#xe642;</i> 编辑图片</a>
                        <a href="<?php echo url('User/businessimg_del',array('id'=>$list['id'])); ?>" class="btn btn-primary radius upload-btn" onclick="return confirm('确定要删除吗？')"><i class="Hui-iconfont">&#xe642;</i> 删除图片</a>
                    </span>
                    <?php else: ?> 
                    <span class="btn-upload form-group">
                        <a href="<?php echo url('User/businessimg_edit',array('id'=>$list['id'])); ?>" class="btn btn-primary radius upload-btn"><i class="Hui-iconfont">&#xe642;</i> 编辑图片</a>
                    </span>
                    <?php endif; ?>
                </div>
            </div>
        <?php elseif($list['type'] == '物流公司'): ?>
            <div class="row cl">
                <label class="form-label col-3"><span class="c-red">*</span>公司名称：</label>
                <div class="formControls col-5">
                    <input name="company_name" type="text" class="input-text" value="<?php echo $list['company_name']; ?>" datatype="*" nullmsg="请填写公司名称！" >
                </div>
                <div class="col-4"> </div>
            </div>
            <div class="row cl">
                <label class="form-label col-3">营业执照：</label>
                <div class="formControls col-6"> 
                    <?php if($list['business_card'] != ''): ?>
                        <div class="userimg"><img src="__IMG__<?php echo $list['business_card']; ?>" /></div>
                        <span class="btn-upload form-group">
                        <a href="<?php echo url('User/businessimg_edit',array('id'=>$list['id'])); ?>" class="btn btn-primary radius upload-btn"><i class="Hui-iconfont">&#xe642;</i> 编辑图片</a>
                        <a href="<?php echo url('User/businessimg_del',array('id'=>$list['id'])); ?>" class="btn btn-primary radius upload-btn" onclick="return confirm('确定要删除吗？')"><i class="Hui-iconfont">&#xe642;</i> 删除图片</a>
                    </span>
                    <?php else: ?> 
                    <span class="btn-upload form-group">
                        <a href="<?php echo url('User/businessimg_edit',array('id'=>$list['id'])); ?>" class="btn btn-primary radius upload-btn"><i class="Hui-iconfont">&#xe642;</i> 编辑图片</a>
                    </span>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-3">道路运输许可证：</label>
                <div class="formControls col-6"> 
                    <?php if($list['road_permit'] != ''): ?>
                        <div class="userimg"><img src="__IMG__<?php echo $list['road_permit']; ?>" /></div>
                        <span class="btn-upload form-group">
                        <a href="<?php echo url('User/roadimg_edit',array('id'=>$list['id'])); ?>" class="btn btn-primary radius upload-btn"><i class="Hui-iconfont">&#xe642;</i> 编辑图片</a>
                        <a href="<?php echo url('User/roadimg_del',array('id'=>$list['id'])); ?>" class="btn btn-primary radius upload-btn" onclick="return confirm('确定要删除吗？')"><i class="Hui-iconfont">&#xe642;</i> 删除图片</a>
                    </span>
                    <?php else: ?> 
                    <span class="btn-upload form-group">
                        <a href="<?php echo url('User/roadimg_edit',array('id'=>$list['id'])); ?>" class="btn btn-primary radius upload-btn"><i class="Hui-iconfont">&#xe642;</i> 编辑图片</a>
                    </span>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>
		<div class="row cl">
			<div class="col-9 col-offset-3">
				<input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
				<a class="btn btn-primary radius" href="<?php echo url('User/lst'); ?>" >返回</a>
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