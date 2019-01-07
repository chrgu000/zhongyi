<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:60:"E:\WWW\zhongyi\public/../application/admin\view\gov\lst.html";i:1524207934;}*/ ?>
<!DOCTYPE html>
<html>
<head>
	<title>文件上传功能测试</title>
</head>
<body>
<div>上传文件</div>
<form action="<?php echo url('Gov/lst'); ?>" method="post" class="form form-horizontal" enctype="multipart/form-data" id="addform">      
    <div class="row cl">    
    <label class="form-label col-xs-4 col-sm-2">选择要上传的文件：</label>    
    <div class="btn-upload form-group">    
        <!-- <input type="text" name="uploadfile" id="uploadfile" class="input-text upload-url radius" readonly><a href="javascript:void();" class="btn btn-primary radius"><i class="Hui-iconfont"></i>浏览文件</a>     -->
       
        <input type="file" name="file" class="input-file" value="请选择您要上传的文件" multipart>                   
    </div>        
    <button type="submit" >导入文件</button>    
    </div>        
</form> 
<form action="<?php echo url('Gov/video'); ?>" method="post" class="form form-horizontal" enctype="multipart/form-data" id="addform">      
    <div class="row cl">    
    <label class="form-label col-xs-4 col-sm-2">选择要上传的视频文件：</label>    
    <div class="btn-upload form-group">    
        <!-- <input type="text" name="uploadfile" id="uploadfile" class="input-text upload-url radius" readonly><a href="javascript:void();" class="btn btn-primary radius"><i class="Hui-iconfont"></i>浏览文件</a>     -->
       
        <input type="file" name="videoname" class="input-file" value="请选择您要上传的文件" multipart>                   
    </div>        
    <button type="submit" >导入文件</button>    
    </div>        
</form> 
</body>
</html>