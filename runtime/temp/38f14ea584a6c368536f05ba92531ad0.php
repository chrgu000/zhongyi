<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:67:"E:\WWW\zhongyi\public/../application/index\view\login\register.html";i:1525489439;}*/ ?>
<!--注册页面-->
<!DOCTYPE html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>中医科普网站</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FreeHTML5.co" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

	<link rel="stylesheet" href="__PUBLIC__/css/bootstrap.min.css">
	
	<link rel="stylesheet" href="__PUBLIC__/css/style.css">
	</head>
	<body class="body">

		<div class="container">
			<div class="row">
				<div class="col-md-4 col-md-push-8">
					

					<!-- Start Sign In Form -->
					<form action="<?php echo url('Login/register'); ?>" method="post" class="fh5co-form animate-box" data-animate-effect="fadeInRight">
						<h2>注册</h2>
						<div class="form-group">
							<label for="name" class="sr-only">用户名</label>
							<input type="text" name="username" class="form-control" id="name" placeholder="请输入用户名" autocomplete="off" onclick="checkname()">
						</div>
						<div class="form-group">
							<label for="password" class="sr-only">密码</label>
							<input type="password" name="password" class="form-control" id="password" placeholder="请输入密码" autocomplete="off">
						</div>
						<div class="form-group">
							<label for="re-password" class="sr-only">确认密码</label>
							<input type="password" name="repassword" class="form-control" id="re-password" placeholder="请再次输入密码" autocomplete="off">
						</div>
						<div class="form-group">
							<label for="re-password" class="sr-only">手机号码</label>
							<input type="text" name="mobile" class="form-control" id="re-password" placeholder="请输入手机号码" autocomplete="off">
						</div>
						<div class="form-group">
							<p>已注册? &nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo url('Login/login'); ?>">登录</a></p>
						</div>
						<div class="form-group">
							<input type="submit" value="注册" class="btn btn-primary">
						</div>
					</form>
					<!-- END Sign In Form -->

				</div>
			</div>
			<div class="row" style="padding-top: 60px; clear: both;">
				<div class="col-md-12 text-center"><p><small>&copy; All Rights Reserved.<a href="index.html" target="_blank" title="中医科普网站">中医科普网站</a></small></p></div>
			</div>
		</div>
	
	
	</body>
</html>
