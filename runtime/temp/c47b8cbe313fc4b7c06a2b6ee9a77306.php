<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:85:"E:\wamp\www\transport\public/../application/admin\view\goodsconfig\goodstype-add.html";i:1506419045;}*/ ?>
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
<title>添加条件类别</title>
</head>
<body>
<a class="btn btn-success radius r mr-20" style="line-height:1.6em;margin-top:3px" 
 href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a>
<div class="pd-20">
  <form action="<?php echo url('Goodsconfig/carlongadd'); ?>" method="post" class="form form-horizontal">
    <div class="row cl">
      <label class="form-label col-3"><span class="c-red">*</span>车长类别：</label>
      <div class="formControls col-4">
        <input type="text" class="input-text" value=""  name="typename" >
      </div>
      <div class="formControls col-3">
        <input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
      </div>
    </div>
  </form>
  <form action="<?php echo url('Goodsconfig/cartypeadd'); ?>" method="post" class="form form-horizontal" >
     <div class="row cl">
      <label class="form-label col-3"><span class="c-red">*</span>车型类别：</label>
      <div class="formControls col-4">
        <input type="text" class="input-text" value=""  name="typename" >
      </div>
      <div class="formControls col-3">
        <input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
      </div>
    </div>
  </form>
  <form action="<?php echo url('Goodsconfig/coldtypeadd'); ?>" method="post" class="form form-horizontal" >
     <div class="row cl">
      <label class="form-label col-3"><span class="c-red">*</span>货物类型：</label>
      <div class="formControls col-4">
        <input type="text" class="input-text" value=""  name="typename" >
      </div>
      <div class="formControls col-3">
        <input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
      </div>
    </div>
  </form>
  <form action="<?php echo url('Goodsconfig/kindtypeadd'); ?>" method="post" class="form form-horizontal" >
    <div class="row cl">
      <label class="form-label col-3"><span class="c-red">*</span>货物品类：</label>
      <div class="formControls col-4">
        <input type="text" class="input-text" value=""  name="typename" >
      </div>
      <div class="formControls col-3">
        <input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
      </div>
    </div>
  </form>
  <form action="<?php echo url('Goodsconfig/paytypeadd'); ?>" method="post" class="form form-horizontal" >
     <div class="row cl">
      <label class="form-label col-3"><span class="c-red">*</span>支付方式类别：</label>
      <div class="formControls col-4">
        <input type="text" class="input-text" value=""  name="typename" >
      </div>
      <div class="formControls col-3">
        <input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
      </div>
    </div>
  </form>
  <form action="<?php echo url('Goodsconfig/temperatureadd'); ?>" method="post" class="form form-horizontal" >
     <div class="row cl">
      <label class="form-label col-3"><span class="c-red">*</span>库存温度类别：</label>
      <div class="formControls col-4">
        <input type="text" class="input-text" value=""  name="typename" >
      </div>
      <div class="formControls col-3">
        <input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
      </div>
    </div>
  </form>
  <form action="<?php echo url('Goodsconfig/timeadd'); ?>" method="post" class="form form-horizontal">
     <div class="row cl">
      <label class="form-label col-3"><span class="c-red">*</span>库存时间类别：</label>
      <div class="formControls col-4">
        <input type="text" class="input-text" value=""  name="typename" >
      </div>
      <div class="formControls col-3">
        <input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
      </div>
    </div>
  </form>
</div>

</body>
</html>