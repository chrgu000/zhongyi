<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:76:"E:\WWW\transport\public/../application/admin\view\publicmeg\public-edit.html";i:1511919353;}*/ ?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
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
<link href="__PUBLIC__/lib/webuploader/0.1.5/webuploader.css" rel="stylesheet" type="text/css" />
<!--[if IE 6]>
<script type="text/javascript" src="lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>修改公告</title>
</head>
<body>
<a class="btn btn-success radius r mr-20" style="line-height:1.6em;margin-top:3px" 
 href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a>
<div class="pd-20">
    <form action="<?php echo url('Publicmeg/edit'); ?>" method="post" class="form form-horizontal" id="form-admin-add" >
        <input type="hidden" name="id" value="<?php echo $public['id']; ?>">
        <div class="row cl">
            <label class="form-label col-2"><span class="c-red">*</span>公告标题：</label>
            <div class="formControls col-8">
                <input type="text" name="title" class="input-text" value="<?php echo $public['title']; ?>" >
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-2"><span class="c-red">*</span>发布者工号：</label>
            <div class="formControls col-4">
                <input type="text" name="writernum" class="input-text" value="<?php echo $public['writernum']; ?>" readonly="true">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-2"><span class="c-red">*</span>发布者姓名：</label>
            <div class="formControls col-4">
                <input type="text" name="writer" class="input-text" value="<?php echo $public['writer']; ?>" readonly="true" >
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-2"><span class="c-red">*</span>资讯描述：</label>
            <div class="formControls col-8">
                <textarea name="text" class="textarea"  placeholder="请输入公告内容..." nullmsg="内容不能为空！"  datatype="*"><?php echo $public['text']; ?></textarea>
            </div>
            <div class="col-1"> </div>
        </div>
        <div class="row cl">
            <div class="col-10 col-offset-2">
                <input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
                <a href="<?php echo url('Publicmeg/lst'); ?>" class="btn btn-primary radius">&nbsp;&nbsp;返回&nbsp;&nbsp;</a>
            </div>
        </div>
    </form>
</div>
<script type="text/javascript" src="__PUBLIC__/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="__PUBLIC__/lib/icheck/jquery.icheck.min.js"></script> 
<script type="text/javascript" src="__PUBLIC__/lib/Validform/5.3.2/Validform.min.js"></script> 
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