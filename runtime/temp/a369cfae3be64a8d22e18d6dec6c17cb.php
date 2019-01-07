<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:62:"E:\WWW\zhongyi\public/../application/admin\view\sick\edit.html";i:1524621834;}*/ ?>
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

<link rel="stylesheet" href="__PUBLIC__/kindeditor/themes/default/default.css"/>
<link rel="stylesheet" href="__PUBLIC__/kindeditor/plugins/code/prettify.css"/>
<script charset="utf-8" src="__PUBLIC__/kindeditor/kindeditor-all.js"/></script>
<script charset="utf-8" src="__PUBLIC__/kindeditor/lang/zh-CN.js"/></script>
<script charset="utf-8" src="__PUBLIC__/kindeditor/plugins/code/prettify.js"/></script>

<script type="text/javascript">
    KindEditor.ready(function(K) {
        var editor1 = K.create('textarea[name="content"]', {
            cssPath : '__PUBLIC__/kindeditor/plugins/code/prettify.css',
            uploadJson : '__PUBLIC__/kindeditor/php/upload_json.php',
            fileManagerJson : '__PUBLIC__/kindeditor/php/file_manager_json.php',
            allowFileManager : true,
            afterCreate : function() {
                var self = this;
                K.ctrl(document, 13, function() {
                    self.sync();
                    K('form[name=example]')[0].submit();
                });
                K.ctrl(self.edit.doc, 13, function() {
                    self.sync();
                    K('form[name=example]')[0].submit();
                });
            }
        });
        prettyPrint();
    });
</script>

<!--[if IE 6]>
<script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>修改疾病</title>
</head>
<body>
<a class="btn btn-success radius r mr-20" style="line-height:1.6em;margin-top:3px" 
    href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a>
<div class="pd-20">
	<form action="<?php echo url('Sick/edit'); ?>" method="post" class="form form-horizontal" id="form-admin-add">
  <input type="hidden" name="id" value="<?php echo $list['id']; ?>">
	    <div class="row cl">
        <label class="form-label col-3">上级分类：</label>
        <div class="formControls col-5"> <span class="select-box">
        <select class="select" size="1" name="parent_id">
            <option value="0">一级分类</option>
            <?php foreach($cate as $k=>$v):
                if($v['id']==$list['parent_id']) $select="selected='selected'";
                else $select="";?>
                <option value="<?php echo $v['id']; ?>"<?php echo $select;?>><?php echo $v['html']; ?><?php echo $v['typename']; ?></option>
            <?php endforeach?>
        </select>
        </span></div>
    </div>
    <div class="row cl">
      <label class="form-label col-3"><span class="c-red">*</span>疾病分类名称：</label>
      <div class="formControls col-5">
        <input type="text" name="typename" class="input-text" value="<?php echo $list['typename']; ?>" placeholder=""   >
      </div>
    </div>
    <div class="row cl">
        <label class="form-label col-3"><span class="c-red">*</span>是否显示：</label>
        <div class="formControls col-5"> <span class="select-box">
            <select class="select" size="1" name="statue" datatype="*" nullmsg="请选择是否显示！">
            <?php if($list['statue'] == '是'): ?>
                <option value="是" selected="selected">是</option>
                <option value="否">否</option>
            <?php else: ?>
                <option value="是">是</option>
                <option value="否" selected="selected">否</option>
            <?php endif; ?>
            </select>
        </span> </div>
        <div class="col-1"> </div>
    </div>
    <div class="row cl">
		<label class="form-label col-3">疾病描述：</label>
		<div class="formControls col-5"> 
			<textarea name="content" id="content" style="width:100%; height: 700px;"><?php echo $list['content']; ?></textarea> 
		</div>
	</div>
		<div class="row cl">
			<div class="col-9 col-offset-3">
				<input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
        <a class="btn btn-primary radius" href="<?php echo url('Sick/lst'); ?>" >返回</a>
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