<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:63:"E:\WWW\zhongyi\public/../application/index\view\study\list.html";i:1525661165;s:66:"E:\WWW\zhongyi\public/../application/index\view\common\header.html";i:1525480770;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>中医科普网站--学习园地</title>
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
				<span>视频学习</span>
			</div>
			<div class="zy-lbox mb20">
				<div class="zy-tab02">
					<div class="y-vbox" style="display:block;">
		                <ul>
							<?php if(is_array($video) || $video instanceof \think\Collection || $video instanceof \think\Paginator): $i = 0; $__LIST__ = $video;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
			                	<li style="width: 200px;height: 180px;">
			                		<video width="200" height="160" controls style="margin-top: -5px;">
										<source src="__ROOT__<?php echo $vo['url']; ?>" type="video/mp4">
									</video>
			                		<span>bg</span>
			                		<p><a href=""><?php echo $vo['name']; ?></a></p>
			                	</li>
			                <?php endforeach; endif; else: echo "" ;endif; ?>
		                </ul>
		                </div>
					</div>
				</div>
			</div>
			<div class="menu4">
				<div class="title02 mb20">
					<span>课件讲义</span>
				</div>
				<div class="zy-lbox mb20">
				    <div>
			            <ul>
			            	<?php if(is_array($file) || $file instanceof \think\Collection || $file instanceof \think\Paginator): $i = 0; $__LIST__ = $file;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v1): $mod = ($i % 2 );++$i;?>
			            		<li>
			            			<a href="<?php echo url('Study/download',array('id'=>$v1['id'])); ?>"><p><?php echo $v1['name']; ?></p></a>
			            		</li>
			            	<?php endforeach; endif; else: echo "" ;endif; ?>
			            </ul>
			        </div>
				</div>
			</div>
			<div class="menu4">
				<div class="title02 mb20">
					<span>中医小百科</span>
				</div>
				<div class="zy-lbox mb20">
				    <div>
			            <ul>
			            	<?php if(is_array($article) || $article instanceof \think\Collection || $article instanceof \think\Paginator): $i = 0; $__LIST__ = $article;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v2): $mod = ($i % 2 );++$i;?>
			            		<li>
			            			<a href="<?php echo url('Study/detail',array('id'=>$v2['id'])); ?>"><p>
			            			小百科名称：<?php echo $v2['name']; ?></p></a>
			            		</li>
			            	<?php endforeach; endif; else: echo "" ;endif; ?>
			            </ul>
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
	</div>
</div>
</body>
</html>