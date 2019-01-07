<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:61:"E:\WWW\zhongyi\public/../application/index\view\talk\lst.html";i:1524793197;s:66:"E:\WWW\zhongyi\public/../application/index\view\common\header.html";i:1524792449;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>中医科普网站——论坛</title>
        <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/style1.css">
        <link type="text/css" rel="stylesheet" href="__PUBLIC__/css/page.css"/>
        <script type="text/javascript" src="__PUBLIC__/js/jquery.simplePagination.js"></script>
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
                    <div style="margin-top: 10px;">
                        <a href="<?php echo url('Talk/add'); ?>">
                            <div style="border: 1px solid; border-radius: 10px;width: 90px; height: 40px; background-color: #b93e2a; ">
                                <p style="margin-top: 5px;margin-left: 13px; color: #fff;">发布论坛</p>
                            </div>
                        </a>
                    </div>
                    <div style="float: right;">
                        <form action="<?php echo url('Talk/lst'); ?>" method="post">       
                            <input type="text" class="input-text" style="width:200px;height: 30px;" placeholder="请输入您想查询的论坛消息" name="keywords">
                            <button type="submit" class="btn btn-success" style="height: 30px;">查询</button>
                        </form>
                    </div>
                    <div>
                        <h3>论坛消息列表</h3>
                        <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "<p class='nulltext'>暂无相关信息</p>" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                            <a href="<?php echo url('Talk/detail',array('id'=>$vo['id'])); ?>">
                                <div>
                                    <span><?php echo $vo['title']; ?></span>
                                    <span style="float: right;"><?php echo $vo['user']; ?>&nbsp;&nbsp;<?php echo $vo['time']; ?></span>
                                </div>
                            </a>
                            <div class="desc"></div>
                        <?php endforeach; endif; else: echo "<p class='nulltext'>暂无相关信息</p>" ;endif; ?>
                    </div>
                    <div class="pages">
                        <div id="paging1" class="page light-theme simple-pagination">
                            <div class="pageinput" style="">
                                <?php echo $page; ?>
                            </div>
                        </div>
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