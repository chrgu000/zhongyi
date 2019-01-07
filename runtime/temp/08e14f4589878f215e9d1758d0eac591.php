<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:80:"E:\wamp\www\transport\public/../application/admin\view\article\article-edit.html";i:1505791100;}*/ ?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<!--[if lt IE 9]>
<script type="text/javascript" src="lib/html5.js"></script>
<script type="text/javascript" src="lib/respond.min.js"></script>
<script type="text/javascript" src="lib/PIE_IE678.js"></script>
<![endif]-->
<link href="__PUBLIC__/css/H-ui.min.css" rel="stylesheet" type="text/css" />
<link href="__PUBLIC__/css/H-ui.admin.css" rel="stylesheet" type="text/css" />
<link href="__PUBLIC__/lib/icheck/icheck.css" rel="stylesheet" type="text/css" />
<link href="../../../../../static/admin/lib/Hui-iconfont/1.0.1/iconfont.css" rel="stylesheet" type="text/css" />
<link href="__PUBLIC__/lib/webuploader/0.1.5/webuploader.css" rel="stylesheet" type="text/css" />
<!--[if IE 6]>
<script type="text/javascript" src="lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<link rel="stylesheet" href="__PUBLIC__/kindeditor/themes/default/default.css"/>
<link rel="stylesheet" href="__PUBLIC__/kindeditor/plugins/code/prettify.css"/>
<script charset="utf-8" src="__PUBLIC__/kindeditor/kindeditor-all.js"/></script>
<script charset="utf-8" src="__PUBLIC__/kindeditor/lang/zh-CN.js"/></script>
<script charset="utf-8" src="__PUBLIC__/kindeditor/plugins/code/prettify.js"/></script>
<script type="text/javascript" src="__PUBLIC__/lib/My97DatePicker/WdatePicker.js"></script>
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
<title>新增文章</title>
</head>
<body>
<a class="btn btn-success radius r mr-20" style="line-height:1.6em;margin-top:3px" 
 href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a>
<div class="pd-20">
	<form action="" method="post" class="form form-horizontal" enctype="multipart/form-data" id="form-admin-add" name="example">
	<input type="hidden" name="id" value="<?php echo $article['id']; ?>">
		<div class="row cl">
			<label class="form-label col-2"><span class="c-red">*</span>文章标题：</label>
			<div class="formControls col-8">
				<input type="text" name="title" class="input-text" value="<?php echo $article['title']; ?>" placeholder="" id="" datatype="*1-200" nullmsg="标题不能为空" >
			</div>
			<div class="col-1"> </div>
		</div>
		<div class="row cl">
            <label class="form-label col-2"><span class="c-red">*</span>资讯类别：</label>
            <div class="formControls col-4"> <span class="select-box">
                <select class="select" size="1" name="type" datatype="*" nullmsg="请选择资讯类别！">
                    <option value="" selected>请选择资讯类别</option>
                    <?php foreach($type as $k=>$v):
                    if($v['id']==$article['type']) $select="selected='selected'";
                    else $select=""; ?>
                        <option value="<?php echo $v['id']; ?>" <?php echo $select;?>><?php echo $v['typename']; ?></option>
                    <?php endforeach;?>
                </select>
            </span> </div>
            <div class="col-1"> </div>
        </div>
        <div class="row cl">
            <label class="form-label col-2"><span class="c-red">*</span>是否显示：</label>
            <div class="formControls col-4"> <span class="select-box">
                <select class="select" size="1" name="statue" datatype="*" nullmsg="请选择是否显示！">
                <?php if($article['statue'] == '是'): ?>
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
			<label class="form-label col-2">发布者工号：</label>
			<div class="formControls col-4">
				<input type="text" name="writerid" class="input-text" value="<?php echo $article['writerid']; ?>" readonly="true">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-2">发布者姓名：</label>
			<div class="formControls col-4">
				<input type="text" name="writername" class="input-text" value="<?php echo $article['writername']; ?>" readonly="true" >
			</div>
		</div>
        <div class="row cl">
            <label class="form-label col-2">新闻时间：</label>
            <div class="formControls col-4">
                <input type="text" name="articletime" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd'})" id="datemin" class="input-text Wdate" placeholder="请选择新闻时间" value="<?php echo $article['articletime']; ?>">
            </div>
        </div> 
		<div class="row cl">
            <label class="form-label col-2">资讯描述：</label>
            <div class="formControls col-8">
                <textarea name="description" class="textarea"  placeholder="请输入新闻概要..."  dragonfly="true" nullmsg="描述不能为空！" onKeyUp="textarealength(this,300)">
                <?php echo $article['description']; ?></textarea>
            </div>
        </div>
		<!--<div class="row cl">
            <label class="form-label col-1">附件：</label>
            <div class="formControls col-5"> 
                <span class="btn-upload form-group">
                    <input class="input-text upload-url" type="text" name="uploadfile-2" id="uploadfile-2" datatype="*" nullmsg="请添加附件！" style="width:200px">
                    <a href="javascript:void();" class="btn btn-primary radius upload-btn"><i class="Hui-iconfont">&#xe642;</i> 浏览文件</a>
                    <input type="file" multiple name="file-2" class="input-file">
                </span>
            </div>
            <div class="col-4"> </div>
        </div>-->
		<div class="row cl">
			<label class="form-label col-2">文章内容：</label>
			<div class="formControls col-8"> 
				<textarea name="content" id="content" style="width:100%; height: 700px;"><?php echo $article['content']; ?></textarea> 
			</div>
		</div>
		<div class="row cl">
			<div class="col-10 col-offset-2">
				<button onClick="article_save_submit();" class="btn btn-primary radius" type="submit">提交</button>
				<a class="btn btn-primary radius" href="<?php echo url('Article/lst'); ?>">返回</a>
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