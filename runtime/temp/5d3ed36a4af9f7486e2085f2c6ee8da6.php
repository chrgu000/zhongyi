<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:71:"E:\wamp\www\transport\public/../application/admin\view\login\login.html";i:1507539697;}*/ ?>
﻿<!DOCTYPE HTML>
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
<link href="__PUBLIC__/css/H-ui.login.css" rel="stylesheet" type="text/css" />
<link href="__PUBLIC__/css/style.css" rel="stylesheet" type="text/css" />
<link href="../../../static/admin/lib/Hui-iconfont/1.0.1/iconfont.css" rel="stylesheet" type="text/css" />
<!--[if IE 6]>
<script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>冷链物流后台登录 </title>
</head>
<body>
<input type="hidden" id="TenantId" name="TenantId" value="" />
<div class="header" style="font-size: 22px; letter-spacing: 1px; line-height: 55px; color:#EEEEEE;">易冷链后台管理系统</div>
<div class="loginWraper">
    <div id="loginform" class="loginBox">
        <form class="form form-horizontal" action="<?php echo url('Login/login'); ?>" method="post"  id="form-admin-add">
            <div class="row cl">
                <label class="form-label col-3">工号：</label>
                <div class="formControls col-8">
                    <input id="" name="adminid" type="text" placeholder="工号" class="input-text size-L" datatype="*1-50" nullmsg="工号不能为空">
                </div>
                <div class="col-6 col-offset-3"> </div>
            </div>
            <div class="row cl">
                <label class="form-label col-3">密码：</label>
                <div class="formControls col-8">
                    <input id="" name="adminpassword" type="password" placeholder="密码" class="input-text size-L" datatype="*1-50" nullmsg="密码不能为空">
                </div>
                <div class="col-6 col-offset-3"> </div>
            </div>
            <div class="row cl">
                <label class="form-label col-3">验证码：</label>
                <div class="formControls col-8">
                    <input name="code" id="code" class="input-text size-L" type="text" placeholder="验证码" style="width:200px;"  datatype="*1-50" nullmsg="验证码不能为空" >
                    <img src="<?php echo captcha_src(); ?>" alt="点击刷新验证码" onclick="this.src='<?php echo captcha_src(); ?>?'+Math.random();" width="150" height="42">
                </div>
                <div class="col-6 col-offset-3"></div>
                <div class="col-6 col-offset-3"><span id="imgcheck" style="color:red; font-size: 12px;"></span></div>
               
            </div>
            <!--<div class="row">
                <div class="formControls col-8 col-offset-3">
                    <label for="online">
                       <input type="checkbox" name="online" id="online" value="">使我保持登录状态
                    </label>
                </div>
            </div>-->
            <div class="row">
                <div class="formControls col-8 col-offset-3">
                    <input name="" type="submit" class="btn btn-success radius size-L" value="&nbsp;登&nbsp;&nbsp;&nbsp;&nbsp;录&nbsp;" id="a">
                    <input name="" type="reset" class="btn btn-default radius size-L" value="&nbsp;取&nbsp;&nbsp;&nbsp;&nbsp;消&nbsp;">
                </div>
            </div>
       </form>
  </div>
</div>
<div class="footer">Copyright 陆港易冷链版权所有</div>
<script type="text/javascript" src="__PUBLIC__/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="__PUBLIC__/js/H-ui.js"></script> 
<script type="text/javascript" src="__PUBLIC__/js/H-ui.admin.js"></script>
<script type="text/javascript" src="__PUBLIC__/lib/icheck/jquery.icheck.min.js"></script> 
<script type="text/javascript" src="__PUBLIC__/lib/Validform/5.3.2/Validform.min.js"></script> 
<script type="text/javascript" src="__PUBLIC__/lib/layer/1.9.3/layer.js"></script>
<script>
$(function(){
    $('.skin-minimal input').iCheck({
        checkboxClass: 'icheckbox-blue',
        radioClass: 'iradio-blue',
        increaseArea: '20%'
    });
    // $('#a').click(function(){
    //    var a=$('#imgcheck').text();
    //    if(a!=''){
    //     return false;
    //    }
    // })
    
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