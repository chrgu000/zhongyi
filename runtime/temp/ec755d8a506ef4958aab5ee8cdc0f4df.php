<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:61:"E:\WWW\zhongyi\public/../application/index\view\body\add.html";i:1525249063;s:66:"E:\WWW\zhongyi\public/../application/index\view\common\header.html";i:1525480770;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>中医科普网站——体质测试</title>
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
                <div class="con">
                    <h2>请选择以下内容并提交！</h2>
                <form action="<?php echo url('Body/add'); ?>" method="post" enctype="multipart/form-data">
                    <div class="row cl">
                        <label class="form-label col-2"><span style="color: red;">*</span>性别：</label>
                            <!-- <span class="select-box">
                                <select class="select" size="1" name="sex" datatype="*" nullmsg="请选择您的性别！" style="width: 300px;height: 30px;">
                                    <option value="" selected>请选择您的性别</option>
                                        <option value="男">男</option>
                                        <option value="女">女</option>
                                </select>
                            </span>  -->
                            <input type="radio" name="sex" value="男">男
                            <input type="radio" name="sex" value="女">女
                        <div class="col-1"> </div>
                    </div>
                    <div class="row cl" style="margin-top: 10px;">
                        <label class="form-label col-2"><span style="color: red;">*</span>您面色晦暗或容易出现褐斑吗？</label>
                            <div style="margin-left: 10px;">
                            <input type="radio" name="facecolor" value="5">没有
                            <input type="radio" name="facecolor" value="4">很少
                            <input type="radio" name="facecolor" value="3">有时
                            <input type="radio" name="facecolor" value="2">经常
                            <input type="radio" name="facecolor" value="1">总是
                            </div>
                        <div class="col-1"> </div>
                    </div>
                    <div class="row cl" style="margin-top: 10px;">
                        <label class="form-label col-2"><span style="color: red;">*</span>您容易有黑眼圈吗？</label>
                            <div style="margin-left: 10px;">
                            <input type="radio" name="eye" value="5">没有
                            <input type="radio" name="eye" value="4">很少
                            <input type="radio" name="eye" value="3">有时
                            <input type="radio" name="eye" value="2">经常
                            <input type="radio" name="eye" value="1">总是
                            </div>
                        <div class="col-1"> </div>
                    </div>
                    <div class="row cl" style="margin-top: 10px;">
                        <label class="form-label col-2"><span style="color: red;">*</span>您口唇的颜色比一般人红吗？</label>
                            <div style="margin-left: 10px;">
                            <input type="radio" name="mouthcolor" value="5">没有
                            <input type="radio" name="mouthcolor" value="4">很少
                            <input type="radio" name="mouthcolor" value="3">有时
                            <input type="radio" name="mouthcolor" value="2">经常
                            <input type="radio" name="mouthcolor" value="1">总是
                            </div>
                        <div class="col-1"> </div>
                    </div>
                    <div class="row cl" style="margin-top: 10px;">
                        <label class="form-label col-2"><span style="color: red;">*</span>您皮肤或口唇干吗？</label>
                            <div style="margin-left: 10px;">
                            <input type="radio" name="face" value="5">没有
                            <input type="radio" name="face" value="4">很少
                            <input type="radio" name="face" value="3">有时
                            <input type="radio" name="face" value="2">经常
                            <input type="radio" name="face" value="1">总是
                            </div>
                        <div class="col-1"> </div>
                    </div>
                    <div class="row cl" style="margin-top: 10px;">
                        <label class="form-label col-2"><span style="color: red;">*</span>您腹部肥满松软吗？</label>
                            <div style="margin-left: 10px;">
                            <input type="radio" name="duzi" value="5">没有
                            <input type="radio" name="duzi" value="4">很少
                            <input type="radio" name="duzi" value="3">有时
                            <input type="radio" name="duzi" value="2">经常
                            <input type="radio" name="duzi" value="1">总是
                            </div>
                        <div class="col-1"> </div>
                    </div>
                    <div class="row cl" style="margin-top: 10px;">
                        <label class="form-label col-2"><span style="color: red;">*</span>您有额头油脂分泌多的现象吗？</label>
                            <div style="margin-left: 10px;">
                            <input type="radio" name="etou" value="5">没有
                            <input type="radio" name="etou" value="4">很少
                            <input type="radio" name="etou" value="3">有时
                            <input type="radio" name="etou" value="2">经常
                            <input type="radio" name="etou" value="1">总是
                            </div>
                        <div class="col-1"> </div>
                    </div>
                    <div class="row cl" style="margin-top: 10px;">
                        <label class="form-label col-2"><span style="color: red;">*</span>您上眼脸比别人肿（上眼脸有轻微隆起的现象）吗？</label>
                            <div style="margin-left: 10px;">
                            <input type="radio" name="upeye" value="5">没有
                            <input type="radio" name="upeye" value="4">很少
                            <input type="radio" name="upeye" value="3">有时
                            <input type="radio" name="upeye" value="2">经常
                            <input type="radio" name="upeye" value="1">总是
                            </div>
                        <div class="col-1"> </div>
                    </div>
                    <div class="row cl" style="margin-top: 10px;">
                        <label class="form-label col-2"><span style="color: red;">*</span>您面部或鼻部有油腻感或者油亮发光吗？</label>
                            <div style="margin-left: 10px;">
                            <input type="radio" name="noze" value="5">没有
                            <input type="radio" name="noze" value="4">很少
                            <input type="radio" name="noze" value="3">有时
                            <input type="radio" name="noze" value="2">经常
                            <input type="radio" name="noze" value="1">总是
                            </div>
                        <div class="col-1"> </div>
                    </div>
                    <div class="row cl" style="margin-top: 10px;">
                        <label class="form-label col-2"><span style="color: red;">*</span>您的皮肤在不知不觉中会出现青紫瘀斑（皮下出血）吗？</label>
                            <div style="margin-left: 10px;">
                            <input type="radio" name="skin" value="5">没有
                            <input type="radio" name="skin" value="4">很少
                            <input type="radio" name="skin" value="3">有时
                            <input type="radio" name="skin" value="2">经常
                            <input type="radio" name="skin" value="1">总是
                            </div>
                        <div class="col-1"> </div>
                    </div>
                    <div class="row cl" style="margin-top: 10px;">
                        <label class="form-label col-2"><span style="color: red;">*</span>您的皮肤一抓就红，并出现抓痕吗？</label>
                            <div style="margin-left: 10px;">
                            <input type="radio" name="skincolor" value="5">没有
                            <input type="radio" name="skincolor" value="4">很少
                            <input type="radio" name="skincolor" value="3">有时
                            <input type="radio" name="skincolor" value="2">经常
                            <input type="radio" name="skincolor" value="1">总是
                            </div>
                        <div class="col-1"> </div>
                    </div>
                    <div class="row cl" style="margin-top: 10px;">
                        <label class="form-label col-2"><span style="color: red;">*</span>您精力充沛吗？</label>
                            <div style="margin-left: 10px;">
                            <input type="radio" name="energy" value="5">没有
                            <input type="radio" name="energy" value="4">很少
                            <input type="radio" name="energy" value="3">有时
                            <input type="radio" name="energy" value="2">经常
                            <input type="radio" name="energy" value="1">总是
                            </div>
                        <div class="col-1"> </div>
                    </div>
                    <div class="row cl" style="margin-top: 10px;">
                        <label class="form-label col-2"><span style="color: red;">*</span>您容易疲乏吗？</label>
                            <div style="margin-left: 10px;">
                            <input type="radio" name="tired" value="5">没有
                            <input type="radio" name="tired" value="4">很少
                            <input type="radio" name="tired" value="3">有时
                            <input type="radio" name="tired" value="2">经常
                            <input type="radio" name="tired" value="1">总是
                            </div>
                        <div class="col-1"> </div>
                    </div>
                    <div class="row cl" style="margin-top: 10px;">
                        <label class="form-label col-2"><span style="color: red;">*</span>您容易精神紧张、焦虑不安吗？</label>
                            <div style="margin-left: 10px;">
                            <input type="radio" name="nervous" value="5">没有
                            <input type="radio" name="nervous" value="4">很少
                            <input type="radio" name="nervous" value="3">有时
                            <input type="radio" name="nervous" value="2">经常
                            <input type="radio" name="nervous" value="1">总是
                            </div>
                        <div class="col-1"> </div>
                    </div>
                    <div class="row cl" style="margin-top: 10px;">
                        <label class="form-label col-2"><span style="color: red;">*</span>您说话声音低弱无力吗？</label>
                            <div style="margin-left: 10px;">
                            <input type="radio" name="speak" value="5">没有
                            <input type="radio" name="speak" value="4">很少
                            <input type="radio" name="speak" value="3">有时
                            <input type="radio" name="speak" value="2">经常
                            <input type="radio" name="speak" value="1">总是
                            </div>
                        <div class="col-1"> </div>
                    </div>
                    <div class="row cl" style="margin-top: 10px;">
                        <label class="form-label col-2"><span style="color: red;">*</span>您感到口苦或嘴里有异味吗？</label>
                            <div style="margin-left: 10px;">
                            <input type="radio" name="kouku" value="5">没有
                            <input type="radio" name="kouku" value="4">很少
                            <input type="radio" name="kouku" value="3">有时
                            <input type="radio" name="kouku" value="2">经常
                            <input type="radio" name="kouku" value="1">总是
                            </div>
                        <div class="col-1"> </div>
                    </div>
                    <div class="row cl" style="margin-top: 10px;">
                        <label class="form-label col-2"><span style="color: red;">*</span>您感到口干舌燥总想喝水吗？</label>
                            <div style="margin-left: 10px;">
                            <input type="radio" name="drink" value="5">没有
                            <input type="radio" name="drink" value="4">很少
                            <input type="radio" name="drink" value="3">有时
                            <input type="radio" name="drink" value="2">经常
                            <input type="radio" name="drink" value="1">总是
                            </div>
                        <div class="col-1"> </div>
                    </div>
                    <div class="row cl" style="margin-top: 10px;">
                        <label class="form-label col-2"><span style="color: red;">*</span>您感到胸闷或腹部胀满吗？</label>
                            <div style="margin-left: 10px;">
                            <input type="radio" name="xiongmen" value="5">没有
                            <input type="radio" name="xiongmen" value="4">很少
                            <input type="radio" name="xiongmen" value="3">有时
                            <input type="radio" name="xiongmen" value="2">经常
                            <input type="radio" name="xiongmen" value="1">总是
                            </div>
                        <div class="col-1"> </div>
                    </div>
                    <div class="row cl" style="margin-top: 10px;">
                        <label class="form-label col-2"><span style="color: red;">*</span>您感到身体沉重不轻松或不爽快吗？</label>
                            <div style="margin-left: 10px;">
                            <input type="radio" name="body" value="5">没有
                            <input type="radio" name="body" value="4">很少
                            <input type="radio" name="body" value="3">有时
                            <input type="radio" name="body" value="2">经常
                            <input type="radio" name="body" value="1">总是
                            </div>
                        <div class="col-1"> </div>
                    </div>
                    <div class="row cl" style="margin-top: 10px;">
                        <label class="form-label col-2"><span style="color: red;">*</span>您感到手脚心发热吗？</label>
                            <div style="margin-left: 10px;">
                            <input type="radio" name="hand" value="5">没有
                            <input type="radio" name="hand" value="4">很少
                            <input type="radio" name="hand" value="3">有时
                            <input type="radio" name="hand" value="2">经常
                            <input type="radio" name="hand" value="1">总是
                            </div>
                        <div class="col-1"> </div>
                    </div>
                    <div class="row cl" style="margin-top: 10px;">
                        <label class="form-label col-2"><span style="color: red;">*</span>您容易过敏（对药物、食物、花粉、气味或在季节交替，气候变化时）吗？</label>
                            <div style="margin-left: 10px;">
                            <input type="radio" name="guomin" value="5">没有
                            <input type="radio" name="guomin" value="4">很少
                            <input type="radio" name="guomin" value="3">有时
                            <input type="radio" name="guomin" value="2">经常
                            <input type="radio" name="guomin" value="1">总是
                            </div>
                        <div class="col-1"> </div>
                    </div>
                    <div class="row cl" style="margin-top: 10px;">
                        <label class="form-label col-2"><span style="color: red;">*</span>请选择您的年龄</label>
                            <div style="margin-left: 10px;">
                            <input type="radio" name="age" value="28岁以下">28岁以下
                            <input type="radio" name="age" value="28岁~35岁">28岁~35岁
                            <input type="radio" name="age" value="35岁~45岁">35岁~45岁
                            <input type="radio" name="age" value="45岁~60岁">45岁~60岁
                            <input type="radio" name="age" value="60岁以上">60岁以上
                            </div>
                        <div class="col-1"> </div>
                    </div>
                    <div class="row cl" style="margin-top: 10px;">
                        <div class="col-10 col-offset-2">
                            <button onClick="article_save_submit();" class="btn btn-primary radius" type="submit" style="width: 60px;height: 40px;margin-left: 400px;">
                                提交
                            </button>
                        </div>
                    </div>
                </form>
                    <div>
                        <p>体质，是由先天遗传和后天获得所形成的，人类个体在形态结构和功能活动方面所固有的、相对稳定的特性，与心理性格具有相关性。个体体质的不同，表现为在生理状态下对外界刺激的反应和适应上的某些差异性，以及发病过程中对某些致病因子的易感性和疾病发展的倾向性。所以，对体质的研究有助于分析疾病的发生和演变，为诊断和治疗疾病提供依据。</p>
                        <p>体质是在遗传变异的基础上，人体所表现出来的形态和机能方面相对稳定的特征。具体指：</br>
                        1．身体形态发育水平：体型、身体姿态、营养状况等。</br>
                        2．生理生化功能水平：即机体新陈代谢功能及人体各系统、器官的工作效能。</br>
                        3．身体素质和运动能力：即身体在生活、劳动和运动中所表现出来的力量、速度、耐力、灵敏、柔韧等身体素质以及走、跑、跳跃、投掷、攀登、爬越、悬垂、支撑等运动能力。</br>
                        4．心理状态：包括本体感知觉能力、个性、人际关系、意志力、判断力等。</br>
                        5．适应能力：对外界环境以及抗寒耐暑的能力，对疾病的抵抗能力。
                        影响人的体质的因素很多，如遗传、环境、营养、教育、体育锻炼、卫生保健、生活方式等，在这些因素中学校教育，特别是学校体育锻炼，对增强学生体质具有重要影响。</p>
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