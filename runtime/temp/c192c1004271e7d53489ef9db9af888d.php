<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:76:"E:\wamp\www\transport\public/../application/admin\view\web\indeximg-add.html";i:1506420118;}*/ ?>
﻿<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,member-scalable=no" />
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
<!--[if IE 6]>
<script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>添加首页图片</title>
</head>
<body>
<a class="btn btn-success radius r mr-20" style="line-height:1.6em;margin-top:3px" 
 href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a>
<div class="pd-20">

  <form action="<?php echo url('Web/companyindexadd'); ?>" method="post" class="form form-horizontal" enctype="multipart/form-data">
    <div class="row cl" style="margin-top: 25px;">
      <label class="form-label col-3">公司优势(首页)：</label>
      <div class="formControls col-3"> 
          <span class="btn-upload form-group">
              <input class="input-text upload-url" type="text" name="companyindex" id="uploadfile-2" placeholder="点击上传图片">
              <a href="javascript:void();" class="btn btn-primary radius upload-btn">
              <i class="Hui-iconfont">&#xe642;</i></a>
              <input type="file"  name="companyindex" class="input-file">
          </span>
      </div>
      <div class="formControls col-2"> 
          <input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
      </div>
    </div>
  </form>

  <form action="<?php echo url('Web/interindexadd'); ?>" method="post" class="form form-horizontal" enctype="multipart/form-data">
    <div class="row cl" style="margin-top: 25px;">
      <label class="form-label col-3">国际冷链运输(首页)：</label>
      <div class="formControls col-3"> 
          <span class="btn-upload form-group">
              <input class="input-text upload-url" type="text" name="interindex" id="uploadfile-2" placeholder="点击上传图片">
              <a href="javascript:void();" class="btn btn-primary radius upload-btn">
              <i class="Hui-iconfont">&#xe642;</i></a>
              <input type="file"  name="interindex" class="input-file">
          </span>
      </div>
      <div class="formControls col-2"> 
          <input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
      </div>
    </div>
  </form>

  <form action="<?php echo url('Web/inlandindexadd'); ?>" method="post" class="form form-horizontal" enctype="multipart/form-data">
    <div class="row cl" style="margin-top: 25px;">
      <label class="form-label col-3">国内冷链运输(首页)：</label>
      <div class="formControls col-3"> 
          <span class="btn-upload form-group">
              <input class="input-text upload-url" type="text" name="inlandindex" id="uploadfile-2" placeholder="点击上传图片">
              <a href="javascript:void();" class="btn btn-primary radius upload-btn">
              <i class="Hui-iconfont">&#xe642;</i></a>
              <input type="file"  name="inlandindex" class="input-file">
          </span>
      </div>
      <div class="formControls col-2"> 
          <input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
      </div>
    </div>
  </form>

  <form action="<?php echo url('Web/boxindexadd'); ?>" method="post" class="form form-horizontal" enctype="multipart/form-data">
    <div class="row cl" style="margin-top: 25px;">
      <label class="form-label col-3">箱库租赁(首页)：</label>
      <div class="formControls col-3"> 
          <span class="btn-upload form-group">
              <input class="input-text upload-url" type="text" name="boxindex" id="uploadfile-2" placeholder="点击上传图片">
              <a href="javascript:void();" class="btn btn-primary radius upload-btn">
              <i class="Hui-iconfont">&#xe642;</i></a>
              <input type="file"  name="boxindex" class="input-file">
          </span>
      </div>
      <div class="formControls col-2"> 
          <input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
      </div>
    </div>
  </form>

  <form action="<?php echo url('Web/brokerageindexadd'); ?>" method="post" class="form form-horizontal" enctype="multipart/form-data">
    <div class="row cl" style="margin-top: 25px;">
      <label class="form-label col-3">报关报检(首页)：</label>
      <div class="formControls col-3"> 
          <span class="btn-upload form-group">
              <input class="input-text upload-url" type="text" name="brokerageindex" id="uploadfile-2" placeholder="点击上传图片">
              <a href="javascript:void();" class="btn btn-primary radius upload-btn">
              <i class="Hui-iconfont">&#xe642;</i></a>
              <input type="file"  name="brokerageindex" class="input-file">
          </span>
      </div>
      <div class="formControls col-2"> 
          <input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
      </div>
    </div>
  </form>

  <form action="<?php echo url('Web/labelindexadd'); ?>" method="post" class="form form-horizontal" enctype="multipart/form-data">
    <div class="row cl" style="margin-top: 25px;">
      <label class="form-label col-3">标签印刷(首页)：</label>
      <div class="formControls col-3"> 
          <span class="btn-upload form-group">
              <input class="input-text upload-url" type="text" name="labelindex" id="uploadfile-2" placeholder="点击上传图片">
              <a href="javascript:void();" class="btn btn-primary radius upload-btn">
              <i class="Hui-iconfont">&#xe642;</i></a>
              <input type="file"  name="labelindex" class="input-file">
          </span>
      </div>
      <div class="formControls col-2"> 
          <input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
      </div>
    </div>
  </form>

  <form action="<?php echo url('Web/secondindexadd'); ?>" method="post" class="form form-horizontal" enctype="multipart/form-data">
    <div class="row cl" style="margin-top: 25px;">
      <label class="form-label col-3">二次包装(首页)：</label>
      <div class="formControls col-3"> 
          <span class="btn-upload form-group">
              <input class="input-text upload-url" type="text" name="secondindex" id="uploadfile-2" placeholder="点击上传图片">
              <a href="javascript:void();" class="btn btn-primary radius upload-btn">
              <i class="Hui-iconfont">&#xe642;</i></a>
              <input type="file"  name="secondindex" class="input-file">
          </span>
      </div>
      <div class="formControls col-2"> 
          <input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
      </div>
    </div>
  </form>

  <form action="<?php echo url('Web/newsindexadd'); ?>" method="post" class="form form-horizontal" enctype="multipart/form-data">
    <div class="row cl" style="margin-top: 25px;">
      <label class="form-label col-3">新闻资讯(首页)：</label>
      <div class="formControls col-3"> 
          <span class="btn-upload form-group">
              <input class="input-text upload-url" type="text" name="newsindex" id="uploadfile-2" placeholder="点击上传图片">
              <a href="javascript:void();" class="btn btn-primary radius upload-btn">
              <i class="Hui-iconfont">&#xe642;</i></a>
              <input type="file"  name="newsindex" class="input-file">
          </span>
      </div>
      <div class="formControls col-2"> 
          <input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
      </div>
    </div>
  </form>



</div>
<script type="text/javascript" src="__PUBLIC__/lib/jquery/1.9.1/jquery.min.js"></script>  
<script type="text/javascript" src="__PUBLIC__/js/H-ui.js"></script> 
<script type="text/javascript" src="__PUBLIC__/js/H-ui.admin.js"></script>
</body>
</html>