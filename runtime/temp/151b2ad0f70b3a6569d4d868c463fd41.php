<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:74:"E:\wamp\www\transport\public/../application/admin\view\web\banner-add.html";i:1506419506;}*/ ?>
<!DOCTYPE HTML>
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
<title>添加banner图片</title>
</head>
<body>
<a class="btn btn-success radius r mr-20" style="line-height:1.6em;margin-top:3px" 
 href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a>
<div class="pd-20">

  <form action="<?php echo url('Web/inlandcoldchainadd'); ?>" method="post" class="form form-horizontal" enctype="multipart/form-data">
    <div class="row cl">
      <label class="form-label col-3">国内冷链：</label>
      <div class="formControls col-3"> 
          <span class="btn-upload form-group">
              <input class="input-text upload-url" type="text" name="inlandcoldchain" id="uploadfile-2" placeholder="点击上传图片" width="350px;">
              <a href="javascript:void();" class="btn btn-primary radius upload-btn">
              <i class="Hui-iconfont">&#xe642;</i> </a>
              <input type="file"  name="inlandcoldchain" class="input-file">
          </span>
      </div>
      <div class="formControls col-2"> 
          <input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
      </div>
    </div>
  </form>

  <form action="<?php echo url('Web/internationcoldchainadd'); ?>" method="post" class="form form-horizontal" enctype="multipart/form-data">
    <div class="row cl" style="margin-top: 25px;">
      <label class="form-label col-3">国际冷链：</label>
      <div class="formControls col-3"> 
          <span class="btn-upload form-group">
              <input class="input-text upload-url" type="text" name="internationcoldchain" id="uploadfile-2" placeholder="点击上传图片">
              <a href="javascript:void();" class="btn btn-primary radius upload-btn">
              <i class="Hui-iconfont">&#xe642;</i></a>
              <input type="file"  name="internationcoldchain" class="input-file">
          </span>
      </div>
      <div class="formControls col-2"> 
          <input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
      </div>
    </div>
  </form>

  <form action="<?php echo url('Web/boxrentadd'); ?>" method="post" class="form form-horizontal" enctype="multipart/form-data">
    <div class="row cl" style="margin-top: 25px;">
      <label class="form-label col-3">箱库租赁：</label>
      <div class="formControls col-3"> 
          <span class="btn-upload form-group">
              <input class="input-text upload-url" type="text" name="boxrent" id="uploadfile-2" placeholder="点击上传图片">
              <a href="javascript:void();" class="btn btn-primary radius upload-btn">
              <i class="Hui-iconfont">&#xe642;</i></a>
              <input type="file"  name="boxrent" class="input-file">
          </span>
      </div>
      <div class="formControls col-2"> 
          <input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
      </div>
    </div>
  </form>

  <form action="<?php echo url('Web/aboutusadd'); ?>" method="post" class="form form-horizontal" enctype="multipart/form-data">
    <div class="row cl" style="margin-top: 25px;">
      <label class="form-label col-3">关于我们：</label>
      <div class="formControls col-3"> 
          <span class="btn-upload form-group">
              <input class="input-text upload-url" type="text" name="aboutus" id="uploadfile-2" placeholder="点击上传图片">
              <a href="javascript:void();" class="btn btn-primary radius upload-btn">
              <i class="Hui-iconfont">&#xe642;</i></a>
              <input type="file"  name="aboutus" class="input-file">
          </span>
      </div>
      <div class="formControls col-2"> 
          <input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
      </div>
    </div>
  </form>

  <form action="<?php echo url('Web/goodstraceadd'); ?>" method="post" class="form form-horizontal" enctype="multipart/form-data">
    <div class="row cl" style="margin-top: 25px;">
      <label class="form-label col-3">货物追踪：</label>
      <div class="formControls col-3"> 
          <span class="btn-upload form-group">
              <input class="input-text upload-url" type="text" name="goodstrace" id="uploadfile-2" placeholder="点击上传图片">
              <a href="javascript:void();" class="btn btn-primary radius upload-btn">
              <i class="Hui-iconfont">&#xe642;</i></a>
              <input type="file"  name="goodstrace" class="input-file">
          </span>
      </div>
      <div class="formControls col-2"> 
          <input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
      </div>
    </div>
  </form>

  <form action="<?php echo url('Web/temperateadd'); ?>" method="post" class="form form-horizontal" enctype="multipart/form-data">
    <div class="row cl" style="margin-top: 25px;">
      <label class="form-label col-3">温度监控：</label>
      <div class="formControls col-3"> 
          <span class="btn-upload form-group">
              <input class="input-text upload-url" type="text" name="temperate" id="uploadfile-2" placeholder="点击上传图片">
              <a href="javascript:void();" class="btn btn-primary radius upload-btn">
              <i class="Hui-iconfont">&#xe642;</i></a>
              <input type="file"  name="temperate" class="input-file">
          </span>
      </div>
      <div class="formControls col-2"> 
          <input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
      </div>
    </div>
  </form>

  <form action="<?php echo url('Web/financialserviceadd'); ?>" method="post" class="form form-horizontal" enctype="multipart/form-data">
    <div class="row cl" style="margin-top: 25px;">
      <label class="form-label col-3">金融服务：</label>
      <div class="formControls col-3"> 
          <span class="btn-upload form-group">
              <input class="input-text upload-url" type="text" name="financialservice" id="uploadfile-2" placeholder="点击上传图片">
              <a href="javascript:void();" class="btn btn-primary radius upload-btn">
              <i class="Hui-iconfont">&#xe642;</i></a>
              <input type="file"  name="financialservice" class="input-file">
          </span>
      </div>
      <div class="formControls col-2"> 
          <input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
      </div>
    </div>
  </form>

  <form action="<?php echo url('Web/insuranceserviceadd'); ?>" method="post" class="form form-horizontal" enctype="multipart/form-data">
    <div class="row cl" style="margin-top: 25px;">
      <label class="form-label col-3">保险服务：</label>
      <div class="formControls col-3"> 
          <span class="btn-upload form-group">
              <input class="input-text upload-url" type="text" name="insuranceservice" id="uploadfile-2" placeholder="点击上传图片">
              <a href="javascript:void();" class="btn btn-primary radius upload-btn">
              <i class="Hui-iconfont">&#xe642;</i></a>
              <input type="file"  name="insuranceservice" class="input-file">
          </span>
      </div>
      <div class="formControls col-2"> 
          <input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
      </div>
    </div>
  </form>

  <form action="<?php echo url('Web/joinusadd'); ?>" method="post" class="form form-horizontal" enctype="multipart/form-data">
    <div class="row cl" style="margin-top: 25px;">
      <label class="form-label col-3">合作加盟：</label>
      <div class="formControls col-3"> 
          <span class="btn-upload form-group">
              <input class="input-text upload-url" type="text" name="joinus" id="uploadfile-2" placeholder="点击上传图片">
              <a href="javascript:void();" class="btn btn-primary radius upload-btn">
              <i class="Hui-iconfont">&#xe642;</i></a>
              <input type="file"  name="joinus" class="input-file">
          </span>
      </div>
      <div class="formControls col-2"> 
          <input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
      </div>
    </div>
  </form>

  <form action="<?php echo url('Web/newsadd'); ?>" method="post" class="form form-horizontal" enctype="multipart/form-data">
    <div class="row cl" style="margin-top: 25px;">
      <label class="form-label col-3">新闻资讯：</label>
      <div class="formControls col-3"> 
          <span class="btn-upload form-group">
              <input class="input-text upload-url" type="text" name="news" id="uploadfile-2" placeholder="点击上传图片">
              <a href="javascript:void();" class="btn btn-primary radius upload-btn">
              <i class="Hui-iconfont">&#xe642;</i></a>
              <input type="file"  name="news" class="input-file">
          </span>
      </div>
      <div class="formControls col-2"> 
          <input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
      </div>
    </div>
  </form>

  <form action="<?php echo url('Web/brokerageadd'); ?>" method="post" class="form form-horizontal" enctype="multipart/form-data">
    <div class="row cl" style="margin-top: 25px;">
      <label class="form-label col-3">报关报检：</label>
      <div class="formControls col-3"> 
          <span class="btn-upload form-group">
              <input class="input-text upload-url" type="text" name="brokerage" id="uploadfile-2" placeholder="点击上传图片">
              <a href="javascript:void();" class="btn btn-primary radius upload-btn">
              <i class="Hui-iconfont">&#xe642;</i></a>
              <input type="file"  name="brokerage" class="input-file">
          </span>
      </div>
      <div class="formControls col-2"> 
          <input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
      </div>
    </div>
  </form>

  <form action="<?php echo url('Web/labelprintadd'); ?>" method="post" class="form form-horizontal" enctype="multipart/form-data">
    <div class="row cl" style="margin-top: 25px;">
      <label class="form-label col-3">标签印刷：</label>
      <div class="formControls col-3"> 
          <span class="btn-upload form-group">
              <input class="input-text upload-url" type="text" name="labelprint" id="uploadfile-2" placeholder="点击上传图片">
              <a href="javascript:void();" class="btn btn-primary radius upload-btn">
              <i class="Hui-iconfont">&#xe642;</i></a>
              <input type="file"  name="labelprint" class="input-file">
          </span>
      </div>
      <div class="formControls col-2"> 
          <input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
      </div>
    </div>
  </form>

  <form action="<?php echo url('Web/secondpackadd'); ?>" method="post" class="form form-horizontal" enctype="multipart/form-data">
    <div class="row cl" style="margin-top: 25px;">
      <label class="form-label col-3">二次包装：</label>
      <div class="formControls col-3"> 
          <span class="btn-upload form-group">
              <input class="input-text upload-url" type="text" name="secondpack" id="uploadfile-2" placeholder="点击上传图片">
              <a href="javascript:void();" class="btn btn-primary radius upload-btn">
              <i class="Hui-iconfont">&#xe642;</i></a>
              <input type="file"  name="secondpack" class="input-file">
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