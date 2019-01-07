<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:46:"E:\WWW\zhongyi\thinkphp\tpl\dispatch_jump1.tpl";i:1508891145;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>跳转提示</title>
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/bootstrap.min.css">
    <style type="text/css">
        .success_title{
            margin-top: 30px; padding: 10px 0px; border-bottom:2px solid #ddd; font-size:20px;
        }
        .success_body{
            text-align: center; padding: 20px 0px; background: #fff; margin-top: 30px;
        }
        .success_body span{
            color: #08a09e; font-size:30px;
        }
        .success_body h3{
            padding: 20px 0px; font-size: 24px;
        }
        .success_body a{
            padding: 6px 10px; background:#08a09e;  color: #fff; text-decoration: none; font-size:14px; margin-left: 5px;
        }
        .waittime{
            margin-top: 30px;
        }
    </style>

</head>
<body style="background: #f0f1f5;">
    <div class="container">
        <div class="row" >
            <div class="col-xs-12 success_title">
                <h3 >提示信息</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 success_body" >
                <?php switch ($code) {case 1:?>
                    <span class="glyphicon glyphicon-ok" ></span>
                    <h3 class="success" ><?php echo(strip_tags($msg));?></h3>
                    <?php break;case 0:?>
                    <span class="glyphicon glyphicon-remove" ></span>
                    <h3 class="error"><?php echo(strip_tags($msg));?></h3>
                    <?php break;} ?>
                <p class="detail"></p>
                <p class="jump">
                   页面自动<a id="href" href="<?php echo($url);?>">跳转</a> 等待时间： <b id="wait"><?php echo($wait);?></b>
                </p>
               <!--  <p class="waittime">等待时间： <b id="wait"><?php echo($wait);?></b></p> -->
            </div>
        </div>
    </div>
    <script type="text/javascript">
        (function(){
            var wait = document.getElementById('wait'),
                href = document.getElementById('href').href;
            var interval = setInterval(function(){
                var time = --wait.innerHTML;
                if(time <= 0) {
                    location.href = href;
                    clearInterval(interval);
                };
            }, 1000);
        })();
    </script>
</body>
</html>
