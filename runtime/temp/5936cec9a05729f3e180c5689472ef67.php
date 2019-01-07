<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:64:"E:\WWW\zhongyi\public/../application/index\view\talk\detail.html";i:1524794340;s:66:"E:\WWW\zhongyi\public/../application/index\view\common\header.html";i:1524792449;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>中医科普网站——论坛详情</title>
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
                    <div>
                        <h3>论坛消息详情</h3>
                        <p>标题：<?php echo $list['title']; ?><span style="float: right;"><?php echo $list['user']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $list['time']; ?></span></p>
                        <p>内容：<?php echo $list['content']; ?></p>
                        <div class="desc"></div>
                        <h4>回复内容</h4>
                            <?php if($list1): if(is_array($list1) || $list1 instanceof \think\Collection || $list1 instanceof \think\Paginator): $i = 0; $__LIST__ = $list1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                    <p>内容：<?php echo $vo['content']; ?></p>
                                    <p>回复人：<?php echo $vo['user']; ?>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $vo['time']; ?></p>
                                    <div class="desc"></div>
                                <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                        <div class="desc"></div>
                    </div>
                    <div>
                        <h3>我要回复</h3>
                        <form action="<?php echo url('Talk/add1',array('id'=>$list['id'])); ?>" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="talkid" value="<?php echo $list['id']; ?>">
                            <div class="row cl" style="margin-top: 10px;">
                                <label class="form-label col-2"><span class="c-red">*</span>内容：</label>
                                <textarea name="content" class="textarea"  placeholder="请输入要发布的内容..." nullmsg="内容不能为空！" onKeyUp="textarealength(this,500)" style="width: 800px; height: 100px;"></textarea>
                                <div class="col-1"> </div>
                            </div>
                            <div class="row cl" style="margin-top: 10px; margin-bottom: 10px;">
                                <div class="col-10 col-offset-2">
                                    <button onClick="article_save_submit();" class="btn btn-primary radius" type="submit" style="width: 60px;height: 40px;margin-left: 400px;">
                                        回复
                                    </button>
                                </div>
                            </div>
                        </form>
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