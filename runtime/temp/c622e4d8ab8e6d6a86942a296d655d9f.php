<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:62:"E:\WWW\zhongyi\public/../application/index\view\Sick\list.html";i:1524738025;s:66:"E:\WWW\zhongyi\public/../application/index\view\common\header.html";i:1524712033;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>中医科普网站--疾病大全</title>
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/style1.css">
</head>
<body>	
<!-- 引用公共头部 -->
<div class="main">
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
</div>

<div class="container">
    <div class="wrap">
        <div id="content">
            <div class="con">
                <h2>疾病大全</h2>
                <div style="text-align: center;margin-top: 10px;">
                    <form action="<?php echo url('Sick/lst'); ?>" method="post">       
                        <input type="text" class="input-text" style="width:200px;height: 30px;" placeholder="请输入您想查询的疾病名称" name="keywords">
                        <button type="submit" class="btn btn-success" style="height: 30px;">查询</button>
                    </form>
                </div>
                <div>
                <!-- 循环读取一级分类和二级分类 -->
                <?php if(is_array($sick) || $sick instanceof \think\Collection || $sick instanceof \think\Paginator): $i = 0; $__LIST__ = $sick;if( count($__LIST__)==0 ) : echo "<p class='nulltext'>暂无相关信息</p>" ;else: foreach($__LIST__ as $key=>$v1): $mod = ($i % 2 );++$i;?>
                    <h3><?php echo $v1['typename']; ?></h3>   <!-- 一级分类的名字 -->
                    <?php if(is_array($sick1) || $sick1 instanceof \think\Collection || $sick1 instanceof \think\Paginator): $i = 0; $__LIST__ = $sick1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v2): $mod = ($i % 2 );++$i;?>
                        <!-- 判断二级分类的上级id是否等于一级分类的id -->
                        <?php if($v2['parent_id'] == $v1['id']): ?>  
                            <!-- 二级分类的名字 -->
                            <a href="<?php echo url('Sick/detail',array('id'=>$v2['id'])); ?>"><?php echo $v2['typename']; ?></a>|
                        <?php endif; endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "<p class='nulltext'>暂无相关信息</p>" ;endif; ?>
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
</body>
</html>