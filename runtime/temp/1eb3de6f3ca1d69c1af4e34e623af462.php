<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:66:"E:\WWW\zhongyi\public/../application/index\view\login\editpwd.html";i:1524711677;}*/ ?>
<!--注册页面-->
<!DOCTYPE html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>中医科普网站--修改密码</title>
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
					<form action="<?php echo url('Login/editpwd'); ?>" method="post" class="fh5co-form animate-box" data-animate-effect="fadeInRight">
						<h2>修改密码</h2>
						<div class="form-group">
							<label for="name" class="sr-only">用户名</label>
							<input type="text" name="username" class="form-control" id="name" placeholder="请输入用户名" autocomplete="off" onclick="checkname()" value="">
						</div>
						<div class="form-group">
							<label for="password" class="sr-only">原始密码</label>
							<input type="password" name="oldpwd" class="form-control" id="password" placeholder="请输入原始密码" autocomplete="off" value="">
						</div>
						<div class="form-group">
							<label for="re-password" class="sr-only">新密码</label>
							<input type="password" name="password" class="form-control" id="re-password" placeholder="请输入新密码" autocomplete="off">
						</div>
						<div class="form-group">
							<label for="re-password" class="sr-only">确认密码</label>
							<input type="password" name="repassword" class="form-control" id="re-password" placeholder="请再次输入新密码" autocomplete="off">
						</div>
						<div class="form-group">
							<input type="submit" value="确认修改" class="btn btn-primary">
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
