<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:83:"E:\wamp\www\transport\public/../application/admin\view\privilege\privilege-add.html";i:1501807584;}*/ ?>
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
<link href="__PUBLIC__/css/H-ui.min.css" rel="stylesheet" type="text/css" />
<link href="__PUBLIC__/css/H-ui.admin.css" rel="stylesheet" type="text/css" />
<link href="__PUBLIC__/lib/icheck/icheck.css" rel="stylesheet" type="text/css" />
<link href="../../../static/admin/lib/Hui-iconfont/1.0.1/iconfont.css" rel="stylesheet" type="text/css" />
<!--[if IE 6]>
<script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>添加权限</title>
</head>
<body>
    <a class="btn btn-success radius r mr-20" style="line-height:1.6em;margin-top:1px" 
    href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a>
<div class="pd-20">
	<form action="<?php echo url('Privilege/add'); ?>" method="post" class="form form-horizontal" id="form-admin-add">
	    <div class="row cl">
        <label class="form-label col-3">父级权限：</label>
        <div class="formControls col-5"> <span class="select-box">
        <select class="select" size="1" name="parent_id">
            <option value="0">顶级权限</option>
            <?php if(is_array($cate) || $cate instanceof \think\Collection || $cate instanceof \think\Paginator): $i = 0; $__LIST__ = $cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                <option value="<?php echo $v['id']; ?>"><?php echo $v['html']; ?><?php echo $v['pri_name']; ?></option>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </select>
        </span></div>
    </div>

		<div class="row cl">
      <label class="form-label col-3"><span class="c-red">*</span>权限名称：</label>
      <div class="formControls col-5">
        <input type="text" name="pri_name" class="input-text" value="" placeholder=""   >
      </div>
    </div>

		 <div class="row cl">
      <label class="form-label col-3"><span class="c-red">*</span>模块名称：</label>
      <div class="formControls col-5">
        <input type="text" name="module_name" class="input-text" value="" placeholder=""     >
      </div>
    </div>

		<div class="row cl">
      <label class="form-label col-3"><span class="c-red">*</span>控制器名称：</label>
      <div class="formControls col-5">
        <input type="text" name="controller_name" class="input-text" value="" placeholder=""   >
      </div>
    </div>

		<div class="row cl">
      <label class="form-label col-3"><span class="c-red">*</span>方法名称：</label>
      <div class="formControls col-5">
        <input type="text" name="action_name" class="input-text" value="" placeholder=""  >
      </div>
    </div>

		<div class="row cl">
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
</script>
</body>
</html>