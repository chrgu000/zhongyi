<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:74:"E:\WWW\zhongyi\public/../application/admin\view\login\change-password.html";i:1524728438;}*/ ?>
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
<!--[if IE 6]>
<script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>修改密码</title>
</head>
<body>
<div class="pd-20">
	<form action="<?php echo url('Login/changepwd'); ?>" method="post" class="form form-horizontal">
	<input type="hidden" name="id" value="<?php echo $id; ?>">
		<div class="row cl">
			<label class="form-label col-4"><span class="c-red"></span>登录名：</label>
			<div class="formControls col-4">
				<input type="text" name="adminname" class="input-text"  value="<?php echo $adminname; ?>" readonly="true" >
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-4"><span class="c-red">*</span>新密码：</label>
			<div class="formControls col-4">
			    <input type="password" name="adminpassword" class="input-text" required="true" missingMessage="密码必须填写" id="pwd1" >
			</div>
			<div class="col-4"> </div>
		</div>
		<div class="row cl">
			<label class="form-label col-4"><span class="c-red">*</span>确认密码：</label>
			<div class="formControls col-4">
                <input class="input-text" required="true" missingMessage="密码必须填写" type="password" name="repassword" id="pwd2" onkeyup="validate()"/><span id="tishi"></span>
			</div>
			<div class="col-4"> </div>
		</div>
		<div class="row cl">
			<div class="col-8 col-offset-4">
				<input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;保存&nbsp;&nbsp;">
			</div>
		</div>
	</form>
</div>
<script>
    function validate() {
        var pwd1 = document.getElementById("pwd1").value;
        var pwd2 = document.getElementById("pwd2").value;
        <!-- 对比两次输入的密码 -->
        if(pwd1 == pwd2) {
            document.getElementById("tishi").innerHTML="<font color='green'>两次密码相同</font>";
            document.getElementById("submit").disabled = false;
        }
        else {
            document.getElementById("tishi").innerHTML="<font color='red'>两次密码不相同</font>";
            document.getElementById("submit").disabled = true;
        }
    }
</script>
</body>
</html>