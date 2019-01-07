<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:63:"E:\WWW\zhongyi\public/../application/index\view\photo\list.html";i:1525486414;s:66:"E:\WWW\zhongyi\public/../application/index\view\common\header.html";i:1525480770;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>中医科普网站--中医图谱</title>
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/style1.css">
</head>
<style type="text/css">
.menu4{
	width: 960px;
	height: auto;
	margin:auto;
}
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
		<div class="menu4">
			<div class="title02 mb20">
				<span>历代名医</span>
			</div>
			<div class="zy-lbox mb20">
				<div class="zy-tab02">
					<div class="y-vbox" style="display:block;">
						<ul>
							<?php if(is_array($doctor) || $doctor instanceof \think\Collection || $doctor instanceof \think\Paginator): $i = 0; $__LIST__ = $doctor;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v1): $mod = ($i % 2 );++$i;?>
								<li>
									<a href="<?php echo url('Photo/detail',array('id'=>$v1['id'])); ?>" target="_blank">
										<img src="__IMG__/<?php echo $v1['image']; ?>" border="0">
									</a>
									<span>bg</span>
									<p><a href="<?php echo url('Photo/detail',array('id'=>$v1['id'])); ?>" target="_blank"><?php echo $v1['name']; ?></a></p>
								</li>
							<?php endforeach; endif; else: echo "" ;endif; ?>
						</ul>
					</div>
				</div>
			</div>
			<div class="title02 mb20">
				<span>中国古籍</span>
			</div>
			<div class="zy-lbox mb20">
				<div class="zy-tab02">
					<div class="y-vbox" style="display:block;">
						<ul>
							<?php if(is_array($book) || $book instanceof \think\Collection || $book instanceof \think\Paginator): $i = 0; $__LIST__ = $book;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v2): $mod = ($i % 2 );++$i;?>
								<li>
									<a href="<?php echo url('Photo/detail1',array('id'=>$v2['id'])); ?>" target="_blank">
										<img src="__IMG__/<?php echo $v2['image']; ?>" border="0">
									</a>
									<span>bg</span>
									<p>
										<a href="<?php echo url('Photo/detail1',array('id'=>$v2['id'])); ?>" target="_blank"><?php echo $v2['name']; ?></a>
									</p>
								</li>
							<?php endforeach; endif; else: echo "" ;endif; ?>
						</ul>	
					</div>
				</div>
			</div>
			<div class="title02 mb20">
				<span>药材图谱</span>
			</div>
			<div class="mt20">
				<div class="zy-lbox">
					<div class="m-yc02 mt20">
						<ul>
							<?php if(is_array($medicine) || $medicine instanceof \think\Collection || $medicine instanceof \think\Paginator): $i = 0; $__LIST__ = $medicine;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v3): $mod = ($i % 2 );++$i;?>
								<li class="p01">
		                          	<p><a href="<?php echo url('Photo/detail2',array('id'=>$v3['id'])); ?>" target="_blank"><?php echo $v3['name']; ?></a></p>
								</li>
							<?php endforeach; endif; else: echo "" ;endif; ?>
						</ul>
				  	</div>
				</div>
			</div>
			<div class="title02 mb20">
				<span>穴位图谱</span>
			</div>
			<div class="zy-lbox mb20">
				<div class="zy-tab02">
					<div class="y-vbox" style="display:block;">
						<ul>
							<?php if(is_array($xuewei) || $xuewei instanceof \think\Collection || $xuewei instanceof \think\Paginator): $i = 0; $__LIST__ = $xuewei;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v4): $mod = ($i % 2 );++$i;?>
								<li>
									<a href="<?php echo url('Photo/detail3',array('id'=>$v4['id'])); ?>" target="_blank">
										<img src="__IMG__/<?php echo $v4['image']; ?>" border="0">
									</a>
									<span>bg</span>
									<p>
										<a href="<?php echo url('Photo/detail3',array('id'=>$v4['id'])); ?>" target="_blank"><?php echo $v4['name']; ?></a>
									</p>
								</li>
							<?php endforeach; endif; else: echo "" ;endif; ?>
						</ul>	
					</div>
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