<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:71:"E:\wamp\www\transport\public/../application/admin\view\index\index.html";i:1507539722;}*/ ?>
﻿<!DOCTYPE HTML>
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
<link href="__PUBLIC__/skin/skin.css" rel="stylesheet" type="text/css" />
<link href="../../../static/admin/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="../../../static/admin/lib/Hui-iconfont/1.0.1/iconfont.css" rel="stylesheet" type="text/css" />
<link href="__PUBLIC__/css/style.css" rel="stylesheet" type="text/css" />
<!--[if IE 6]>
<script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>易冷链管理平台</title>
</head>
<body>
<header class="Hui-header cl"> 
   <a class="Hui-logo l" title="H-ui.admin v2.3" href="" style="letter-spacing: 1px; font-size: 17px;" 
   >易冷链管理平台</a> 
   <span class="Hui-subtitle l">V1.0</span>
	<ul class="Hui-userbar">
		<li style="padding-right: 15px;">欢迎用户：<?php echo $adminname; ?></li>
		<li style="padding-right: 15px;">
	        <a href="http://42.228.11.171/chat/index.php/site_admin" target="_blank" style="color: #fff;
	         text-decoration: none;">客服登录</a>
	    </li>
		<li class="dropDown dropDown_hover"><a href="#" class="dropDown_A">个人中心&nbsp;<i class="fa fa-angle-down"></i></a>
			<ul class="dropDown-menu radius box-shadow">
				<li><a href="<?php echo url('Login/changepwd'); ?>" target="Hui-article-box">修改密码</a></li>
				<li><a href="<?php echo url('Login/logout'); ?>">退出</a></li>
			</ul>
		</li>
		<!--<li id="Hui-msg"> 
            <a href="#" title="消息">
            <span class="badge badge-danger">1</span>
            <i class="Hui-iconfont" style="font-size:18px">&#xe68a;</i>
            </a> 
        </li>-->
	</ul>
</header>
<aside class="Hui-aside">
	<div class="menu_dropdown bk_2"> 
	    <?php $menu=session('menu');foreach($menu as $k=>$v): ?>
        <dl id="menu-admin">
            <dt><i class="fa fa-navicon fastyle1"></i> <?php echo $v['pri_name'];?><i class="fa fa-angle-down fastyle"></i></dt>
            <dd>
                <ul>
                    <?php foreach($v['sub'] as $k1=>$v1): ?>
                    <li><a href="<?php echo url($v1['module_name'].'/'.$v1['controller_name'].'/'.$v1['action_name'])?>"
                    target="Hui-article-box"><?php echo $v1['pri_name']?></a></li>
                <?php endforeach;?>
                </ul>
            </dd>
        </dl>
    <?php endforeach;if(session('id') == 4): ?>
    <dl id="menu-admin">
		<dt><i class="fa fa-navicon fastyle1"></i> 权限管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
		<dd>
			<ul>
                <li><a href="<?php echo url('Privilege/lst'); ?>" target="Hui-article-box">权限列表</a></li>
                <li><a href="<?php echo url('Privilege/add'); ?>" target="Hui-article-box">添加权限</a></li>
			</ul>
		</dd>
	</dl>
	<?php endif; ?>
	<!--<dl id="menu-admin">
		<dt><i class="fa fa-navicon fastyle1"></i> <a href="<?php echo url('Privilege/lst'); ?>" target="_blank" style="color: #000; text-decoration: none;">客服登录</a></dt>
	</dl>-->
	
	   
	</div>
</aside>
<section class="Hui-article-box">
	<div id="Hui-tabNav" class="Hui-tabNav">
		<div class="Hui-tabNav-wp">
			<ul id="min_title_list" class="acrossTab cl">
				<li class="active"><span title="我的桌面" data-href="welcome.html">我的桌面</span><em></em></li>
			</ul>
		</div>
		<div class="Hui-tabNav-more btn-group">
            <a id="js-tabNav-prev" class="btn radius btn-default size-S" href="javascript:;"><i class="Hui-iconfont">&#xe6d4;</i></a>
            <a id="js-tabNav-next" class="btn radius btn-default size-S" href="javascript:;"><i class="Hui-iconfont">&#xe6d7;</i></a>
        </div>
	</div>
	<div id="iframe_box" class="Hui-article">
		<div class="show_iframe">
			<div style="display:none" class="loading"></div>
			<iframe scrolling="yes" name="Hui-article-box" frameborder="0" src="<?php echo url('Index/welcome'); ?>"></iframe>
		</div>
	</div>
</section>
<script type="text/javascript" src="__PUBLIC__/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="__PUBLIC__/lib/layer/1.9.3/layer.js"></script> 
<script type="text/javascript" src="__PUBLIC__/js/H-ui.js"></script> 
<script type="text/javascript" src="__PUBLIC__/js/H-ui.admin.js"></script> 
<script type="text/javascript">
/*资讯-添加*/
function article_add(title,url){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}
/*图片-添加*/
function picture_add(title,url){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}
/*产品-添加*/
function product_add(title,url){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}
/*用户-添加*/
function member_add(title,url,w,h){
	layer_show(title,url,w,h);
}
</script> 
</body>
</html>