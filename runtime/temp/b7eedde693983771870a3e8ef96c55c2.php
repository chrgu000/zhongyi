<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:74:"E:\wamp\www\transport\public/../application/index\view\login\register.html";i:1507620186;s:73:"E:\wamp\www\transport\public/../application/index\view\common\header.html";i:1506762234;s:73:"E:\wamp\www\transport\public/../application/index\view\common\footer.html";i:1505989080;}*/ ?>
﻿<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>注册</title>
	<meta name="description" content="">
	<meta name="Keywords" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
	<meta content="text/html; " http-equiv="Content-Type">
	<meta name="renderer" content="webkit">
	<link rel="icon" href="" type="image/x-icon"/>
	<link href="../../static/index/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../static/index/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/style.css">
    <link rel="stylesheet"  href="__PUBLIC__/css/higo.css" />
	<style>
		body{
			background: #fff;
		}
		.disable-posi{
			position: absolute;
			top: 0;
			left: 0;
			width:498px;
			height: 44px;
		}
	
		.c-spanRight1 {
		    font-size: 24px;
		    color: #ea574c;
		    position: absolute;
		    top: 4px;
		    left: -28px;
		}
		.zhH1{
			display:block;
			width:500px;
			height:46px;
			background:#ccc;
			font-size:14px;
			line-height:46px;
			border-radius:3px;
		}

	</style>
</head>

<body>
	<!-- 头部 -->
	<div class="top">
    <div class="clearfix wrap-1200">
        <p class="fl"><!-- <span>易冷链，专注冷鲜，用心服务。&nbsp;&nbsp;</span> --><span><a class="glyphicon glyphicon-earphone" style="color: white;"></a>&nbsp;&nbsp;服务热线：0371—55172118</span></p>
        <?php if(session('username') == ''): ?>
            <p class="fr reg">
                <a href="<?php echo url('Personalcenter/personalcenter_index'); ?>">
                    <span><i class="glyphicon glyphicon-user"></i>&nbsp;个人中心</span>
                </a>    
                <a href="<?php echo url('Login/login'); ?>"><span>登录</span></a>
                <a href="<?php echo url('Login/register'); ?>"><span>注册</span></a>
            </p>
            <?php else: ?>
            <p class="fr reg">
                <a href="<?php echo url('Personalcenter/personalcenter_index'); ?>">
                    <span><i class="glyphicon glyphicon-user"></i>&nbsp;个人中心</span>
                </a>  
                <span>欢迎您：<?php echo session('username')?> </span>
                <a href="<?php echo url('Login/logout'); ?>"><span>退出</span></a>
            </p>
        <?php endif; ?>
    </div>
</div>

<!-- 头部结束 -->
<!-- 导航开始 -->
<div class="head clearfix" style="overflow: visible;">
            <div class="logo" style="width: auto;">
            <a class="fl" href="<?php echo url('Index/index'); ?>">
                <img src="__PUBLIC__/images/logo/logo.png" alt=""/>
                <!-- <h2 style="width:200px; text-align: center; line-height: 26px; margin-top: 10px; margin-left: 40px;"><span style="font-size: 24px; ">陆港易冷链</span><br><span>LUGANG YILENGLIAN</span></h2> -->
                </a>
                <!-- <div class="fr logofont">
                <p>专注冷鲜</p>
                <p style="margin-left: 16px;">用心服务</p>
                </div> -->
                <!-- <div class="fr logoimg">
                    <img src="__PUBLIC__/images/a2.png">
                </div> -->
                <div class="clearfix"></div>
            </div>
            <ul class="nav_wrap clearfix fr" style="margin-left: 0px; margin-right: -20px;">
                
                <li class="now">
                    <a href="<?php echo url('Index/index'); ?>">
                        <em>首页</em>
                    </a>
                </li>
                <li class="now">
                    <a href="<?php echo url('Goods/goods_car'); ?>">
                        <em>货源信息</em>
                    </a>
                </li>
                <li class="now">
                    <a href="<?php echo url('Path/path'); ?>">
                        <em>车源信息</em>
                    </a>
                </li>
                <li class="now">
                    <a href="<?php echo url('Warehouse/warehouse'); ?>">
                        <em>库源信息</em>
                    </a>
                </li>
                <li>
                    <a href="<?php echo url('Inland/inlandcoldchain'); ?>">
                        <em>国内冷链</em>
                    </a>
                    <ul class="drowdown">
                        <li><a href="<?php echo url('Inland/inlandcoldchain'); ?>">业务介绍</a></li>
                        <li><a href="<?php echo url('Inland/inlandmoney'); ?>">费用查询</a></li>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo url('Internation/internationcoldchain'); ?>" >
                        <em>国际冷链</em>
                    </a>
                    <ul class="drowdown">
                        <li><a href="<?php echo url('Internation/internationcoldchain'); ?>">业务介绍</a></li>
                        <li><a href="<?php echo url('Internation/internationmoney'); ?>">费用查询</a></li>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo url('Rent/boxrent'); ?>">
                        <em>箱库租赁</em>
                    </a>
                    <ul class="drowdown" >
                        <li><a href="<?php echo url('Rent/boxrent'); ?>">冷藏箱租赁</a></li>
                        <li><a href="<?php echo url('Rent/storerent'); ?>">冷库租赁</a></li>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo url('Aboutus/aboutus'); ?>">
                        <em>关于我们</em>
                    </a>
                    <ul class="drowdown">
                        <li><a href="<?php echo url('Aboutus/aboutus'); ?>">公司简介</a></li>
                        <li><a href="<?php echo url('Aboutus/cultural'); ?>">企业文化</a></li>
                        <li><a href="<?php echo url('Aboutus/honor'); ?>">荣誉资质</a></li>
                    </ul>
                </li>
                <!-- <li>
                    <a href="<?php echo url('Goods/goods_car'); ?>">
                        <em>信息共享</em>
                    </a>
                    <ul class="drowdown">
                        <li><a href="<?php echo url('Path/path'); ?>">车源信息</a></li>
                        <li><a href="<?php echo url('Warehouse/warehouse'); ?>">库源信息</a></li>
                        <li><a href="<?php echo url('Goods/goods_car'); ?>">货源信息</a></li>
                    </ul>
                </li> -->
                <!-- <li>
                    <a href="<?php echo url('Personalcenter/personalcenter_index'); ?>">
                        <em>个人中心</em>
                    </a>
                </li> -->
            </ul>
            <div class="clearfix"></div>
        </div>


	<div class="contanier">
		<div class="mj-Reg wrap-1200">
			<h2 class="m-regH2"><a class="u-regH2a" href="javascript:;">注册</a></h2>
			<form action="<?php echo url('Login/register'); ?>" method="post">
			<input type="hidden" name="is_company" value="0">
			<div class="m-regForm">
				<div class="c-regfloor c-regLast">
					<span>意向认证:</span>
					<?php if(is_array($type) || $type instanceof \think\Collection || $type instanceof \think\Paginator): $i = 0; $__LIST__ = $type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
						<input type="radio" name="type_id" value="<?php echo $vo['id']; ?>"><?php echo $vo['typename']; endforeach; endif; else: echo "" ;endif; ?>
					<!-- <label><input type="radio" checked="checked" name="type_id" value="1"/>物流公司</label> -->
					<!-- <label><input type="radio" name="type_id" value="2"/>信息部</label> -->
					<!-- <label><input type="radio" name="type_id" value="3"/>司机</label>
					<label><input type="radio" name="type_id" value="4"/>货主</label>
					<label><input type="radio" name="type_id" value="5"/>库主</label> -->
					<p class="u-point hide">请选择意向认证此项为必选项</p>
					<em class="c-spanRight"></em>
					<b class="c-spanRight1">*</b>
				</div>
				<div class="c-regfloor">
					<i class="glyphicon glyphicon-earphone"></i>
					<input name="username" class="u-input input-phone regusername" id="phoneVidate" pagemark="register" type="text" maxlength="11" placeholder="请输入手机号" onblur="checkname()">
					<span id="usercheck" style="color:red; font-size: 12px; float: right;"></span>
					<p class="u-point hide">您输入的手机号码有误</p>
					
					<em class="c-spanRight "></em>
					<b class="c-spanRight1">*</b>
				</div>
				<div class="c-regfloor">
					<i class="glyphicon glyphicon-lock"></i>
					<input name="password" class="u-input inputPass regpassword" type="password" placeholder="设置密码" id="setPassWord">
					<p class="u-point hide">密码长度为6-32位，支持数字、字母、字符</p>
					<em class="c-spanRight "></em>
					<b class="c-spanRight1">*</b>
				</div>
				<div class="c-regfloor">
					<i class="glyphicon glyphicon-lock"></i>
					<input name="repassword" class="u-input ag-password regrepassword" type="password" placeholder="确认密码"  id="setPassAgain" disabled>
					<b class="disable-posi"></b>
					<p class="u-point hide">密码输入不一致</p>
					<em class="c-spanRight "></em>
					<b class="c-spanRight1">*</b>
				</div>
				
				<div class="c-regfloor1 c-regTest">
					<div class="u-inputBorder fl">
						<i class="glyphicon glyphicon-picture"></i>
						<input name="codeimage" class="u-input u-inputWidth u-yzinput regcodeimage" id="capCode" type="text" placeholder="验证码">
					</div>
					<p class="u-point hide">验证码输入有误</p>
					<em class="c-spanRight "></em>
					<b class="c-spanRight1">*</b>
					<div class="fr c-regImg">
						<img id="captchaMobile" 
						     src="<?php echo captcha_src(); ?>" width="170"
						     height="42" onclick="this.src='<?php echo captcha_src(); ?>?'+Math.random();" />
					</div>
				</div>

				<!-- 短信验证   完成-->
				<div class="c-regfloor1 c-regTest">
					<em class="c-spanRight hide"></em>
					<b class="c-spanRight1">*</b>
					<div class="u-inputBorder fl">
						<i class="fa fa-envelope"></i>&nbsp;
						<input name="code" id="code"  class="u-input u-inputWidth regdxyz" type="text" placeholder="短信验证" maxlength="6" onblur="checksmscode1()">
					</div>
					<a class="c-testBtn fr" id="dxcode" href="javascript:;">获取验证码</a>
					<div class="clearfix"></div>
					<span id="checkcode" style="color:red; font-size: 12px; display: block;"></span>
				</div>

				<!-- 短信验证和邀请码 -->
		   <!-- <div class="c-regfloor1 c-regTest">		
				<div class="c-regfloor">
					<i class="mjFont lo-reg">&#xe60c;</i>
					<input class="u-input" type="text" placeholder="邀请码" id="inviteCode">
					<p class="u-point hide">邀请码输入有误</p>
				</div> -->
				<!-- 短信验证和邀请码 -->
				<div class="c-formBtn">
				    <input type="submit" id="registersubmit" class="u-inptBtn zhH" value="同意协议并注册" style="cursor: pointer;" />
					<a class="textC zhH1" style="display:none" href="javascript:;">同意协议并注册</a>
					<div class="u-agree">
						<input type="checkbox" id="checkOk" checked="checked"/>
						<span>已阅读</span>
						<a href="<?php echo url('Login/agreement'); ?>" style="color:#0080FF;" target="_blank">《服务协议》</a>
					</div>
				</div>	
			</div>
		  </form>
		</div>
	</div>

	
	<!-- 底部 -->
	
<!-- <div class="dibu">
    <div class="dibu_jz">
        <div class="dibu_zuo">
            <p>联系地址：郑州国际陆港开发建设有限公司<br>
            电 话：0851-85594612   <br></p>
        </div>
        <div class="dibu_you">
            <ul>
                <li><a href="<?php echo url('Service/brokerage'); ?>">报关报检&nbsp;&nbsp;</a>｜</li>
                <li><a href="<?php echo url('Service/labelprint'); ?>">标签印刷&nbsp;&nbsp;</a>｜</li>
                <li><a href="<?php echo url('Service/secondpack'); ?>">二次包装&nbsp;&nbsp;</a>｜</li>
                <li><a href="<?php echo url('Service/joinus'); ?>">合作加盟&nbsp;&nbsp;</a></li>
                <div style="clear: both;"></div>
            </ul>
            <img class="dibu_logo" src="__PUBLIC__/images/dibu_03.png"> 
        </div>
    </div>
</div>
<div class="dibu_1">
    <p>版权所有 郑州国际陆港开发建设有限公司 豫ICP备10001741号
</p>
</div> -->


<div class="footer" style="background: #337cc9; margin-top: 0px;">
    <div class="row higo-content-floor higo-friend-link " style="width: 1200px; margin: 0 auto; text-align: center;padding: 20px 0px;">
        <div class="col-md-3 col-xs-3" style="border-right: 1px dashed #5496e8;height: 180px;">
            <ul>
                <li>
                    <!-- <img src="__PUBLIC__/images/ewm.png" alt="" style="width:130px; height: 130px;"> -->
                    <img src="__PUBLIC__/images/底部二维码.png" alt="" style="width:130px; height: 130px;">
                    <p>扫描二维码，了解我们</p>
                </li>
            </ul>
        </div>
        <div class="col-md-2 col-xs-2" style="border-right: 1px dashed #5496e8;height: 180px;">
            <ul style="line-height: 24px;">
                <li class="higo-firend-head">关于平台</li>
                <li><a href="<?php echo url('Foot/aboutplant'); ?>">平台介绍</a></li>
                <li><a href="<?php echo url('Foot/contactus'); ?>">联系我们</a></li>
            </ul>
        </div>
        <div class="col-md-2 col-xs-2" style="border-right: 1px dashed #5496e8;height: 180px;">
            <ul style="line-height: 24px;">
                <li class="higo-firend-head">用户指南</li>
                <li><a href="<?php echo url('Foot/register_flowpath'); ?>">注册指南</a></li>
                <li><a href="<?php echo url('Foot/auth_flowpath'); ?>">认证指南</a></li>
                <li><a href="<?php echo url('Foot/upload_flowpath'); ?>">发布指南</a></li>
                <li><a href="<?php echo url('Foot/deal_flowpath'); ?>">交易指南</a></li>
                <li><a href="<?php echo url('Service/onlineorder'); ?>">下单流程</a></li>
            </ul>
        </div>
         <div class="col-md-2 col-xs-2"  style="border-right: 1px dashed #5496e8;height: 180px;">
            <ul style="line-height: 24px;">
                <li class="higo-firend-head">友情链接</li>
                <li><a href="http://www.zzguojilugang.com/" target="_blank">郑州陆港</a></li>
                <li><a href="" target="_blank">中陆官网</a></li>
                <li><a href="http://banliego.com/" target="_blank">班列购</a></li>
            </ul>
        </div>
        <div class="col-md-2 col-xs-2" >
            <ul style="line-height: 24px;">
                <li class="higo-firend-head">使用帮助</li>
                <li><a href="<?php echo url('Foot/problem'); ?>">常见问题</a></li>
                 <!-- <li><a href="">联系客服</a></li> -->
            </ul>
        </div>

    </div>
</div>
<div class="footer1" style="background: #0066b3; padding:20px 0px; text-align: center;color: #fff">
    <p><span style="color: #eee">版权所有</span>&nbsp;郑州国际陆港开发建设有限公司 <span style="color: #eee; margin-left: 20px;">备案号：</span>&nbsp;豫ICP备17007279号
</div> 
</body>
<script type="text/javascript" src="__PUBLIC__/js/jquery.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/jquery.validate.js"></script>
<script src="__PUBLIC__/js/reg.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/common.js"></script>
<script type="text/javascript">

    $('.nav_wrap').find('li').removeClass('now');
    $('.nav_wrap').children('li').eq(0).addClass('now');
    
	$(function(){

		var myurl=GetQueryString("tjsn");
		if(myurl !=null && myurl.toString().length>1)
		{
		   $('#inviteCode').val(myurl);
		}
		
	})

	function GetQueryString(name){
		var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)");
		var r = window.location.search.substr(1).match(reg);
		if(r!=null)return  unescape(r[2]); return null;
	}
	//刷新验证码
	function refreshMoblie()
	{
		var basePath = $("#basePath").val();
		$("#captchaMobile").attr("src", basePath+"/captcha.jpg?suffix=register&t="+Math.random(100));
		$("#vCodeMobile").val("");
	}

	$('#checkOk').change(function(){
		if($(this).prop('checked')==false){
			$('.zhH').hide();
			$('.zhH1').show();
		}else{
			$('.zhH1').hide();
			$('.zhH').show();
		}
	});
</script>
</html>