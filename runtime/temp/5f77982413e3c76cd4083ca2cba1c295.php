<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:65:"E:\WWW\zhongyi\public/../application/index\view\feature\list.html";i:1525910904;s:66:"E:\WWW\zhongyi\public/../application/index\view\common\header.html";i:1525480770;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>中医科普网站--中医特色</title>
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/style1.css">
</head>
<body>
	<style type="text/css">
</style>
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
        <li><a href="<?php echo url('Index/index'); ?>">首页</a></li>
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
                <h2></h2><h1>中医特色</h1><h2></h2>
                <div class="con">
                    <!-- 读取特色总描述 -->
                    <p><?php echo $text['text']; ?></p>
                    <div class="desc"></div>
                    <?php if(is_array($feature) || $feature instanceof \think\Collection || $feature instanceof \think\Paginator): $i = 0; $__LIST__ = $feature;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <a href="<?php echo url('Feature/detail',array('id'=>$vo['id'])); ?>" title="查看详情"><h3 style="text-align: center;"><?php echo $vo['title']; ?></h3>
                        <div style="text-align: center;">
                            <img src="__IMG__/<?php echo $vo['image']; ?>" >
                        </div>
                        </a>
                        <?php echo $vo['text']; ?>
                        <div class="desc"></div>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
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