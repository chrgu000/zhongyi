<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:61:"E:\WWW\zhongyi\public/../application/index\view\talk\add.html";i:1524793168;s:66:"E:\WWW\zhongyi\public/../application/index\view\common\header.html";i:1524792449;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>中医科普网站——发布论坛</title>
	   <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/style1.css">
</head>
<body>
<div class="main">	
    <!-- 引用公共头部 -->
    
<div class="banner">
    <div ><a href="<?php echo url('Index/index'); ?>"><img src="__PUBLIC__/images/logo.png"></a></div>
</div>
<div class="header" style="width: 350px;margin-left: 900px;">
    <?php if(session('username') == ''): ?>
        <a href="<?php echo url('Login/login'); ?>">登录</a>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="<?php echo url('Login/register'); ?>">注册</a>
    <?php else: ?>
        <a href="">欢迎您：<?php echo $username; ?></a>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="<?php echo url('Login/editpwd'); ?>">修改密码</a>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="<?php echo url('Login/logout'); ?>">退出</a>
    <?php endif; ?>
    
</div>
<div class="mainnav">
    <ul>
        <li><a href="<?php echo url('Sick/lst'); ?>">疾病大全</a></li>
        <li><a href="<?php echo url('Difficult/lst'); ?>">疑难杂症</a></li>
        <li><a href="<?php echo url('Feature/lst'); ?>">中医特色</a></li>
        <li><a href="<?php echo url('Photo/lst'); ?>">中医图谱</a></li>
        <li><a href="<?php echo url('Study/lst'); ?>">学习园地</a></li>
        <li><a href="<?php echo url('Body/add'); ?>">体质测试</a></li>
        <li><a href="<?php echo url('Talk/lst'); ?>">中医论坛</a></li>  
    </ul>
</div>

    <div class="container">
        <div class="wrap">
            <div id="content">
                <div class="con">
                    <h2>请填写以下内容并点击提交按钮！</h2>
                <form action="<?php echo url('Talk/add'); ?>" method="post" enctype="multipart/form-data">
                    <div class="row cl">
                        <label class="form-label col-2"><span class="c-red">*</span>标题：</label>
                        <input type="text" name="title" value="" placeholder="请填写标题" style="width: 300px;height: 30px;">
                        <div class="col-1"> </div>
                    </div>
                    <div class="row cl" style="margin-top: 10px;">
                        <label class="form-label col-2"><span class="c-red">*</span>内容：</label>
                        <textarea name="content" class="textarea"  placeholder="请输入要发布的内容..." nullmsg="内容不能为空！" onKeyUp="textarealength(this,500)" style="width: 800px; height: 100px;"></textarea>
                        <div class="col-1"> </div>
                    </div>
                    <div class="row cl" style="margin-top: 10px; margin-bottom: 10px;">
                        <div class="col-10 col-offset-2">
                            <button onClick="article_save_submit();" class="btn btn-primary radius" type="submit" style="width: 60px;height: 40px;margin-left: 400px;">
                                提交
                            </button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
        <div class="footer">
    		<div class="col-md-12 text-center">
                <p><small>&copy; All Rights Reserved.<a href="index.html" target="_blank" title="中医科普网站">中医科普网站</a></small></p>
            </div>
    	</div>
    </div>
</div>
</body>
</html>