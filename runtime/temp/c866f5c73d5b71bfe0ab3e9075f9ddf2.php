<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:77:"E:\WWW\transport\public/../application/index\view\goods\goods_car_detail.html";i:1509004762;s:68:"E:\WWW\transport\public/../application/index\view\common\header.html";i:1508989788;s:68:"E:\WWW\transport\public/../application/index\view\common\footer.html";i:1509431569;}*/ ?>
﻿<!DOCTYPE html>
<html lang="zh">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>找车货源详情</title>
<link rel="icon" href="" type="image/x-icon"/>
<link rel="stylesheet" type="text/css" href="../../../../static/index/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../../../../static/index/css/font-awesome.min.css">
<link rel="stylesheet"  href="__PUBLIC__/css/mask.css" />
<link rel="stylesheet" href="__PUBLIC__/css/auth.css">
<link rel="stylesheet" href="__PUBLIC__/css/style.css"/>
<link rel="stylesheet"  href="__PUBLIC__/css/higo.css" />

</head>
<body>
<!-- 头部开始 -->
<div class="top">
    <div class="clearfix wrap-1200">
        <p class="fl"><!-- <span>易冷链，专注冷鲜，用心服务。&nbsp;&nbsp;</span> --><span><a class="glyphicon glyphicon-earphone" style="color: white;"></a>&nbsp;&nbsp;服务热线：0371—55172118</span></p>
        <?php if(session('username') == ''): ?>
            <p class="fr reg">
                <a href="<?php echo url('Login/login'); ?>" onClick="return confirm('请登录！')">
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
                <img src="__IMG__<?php echo $banner['logo']; ?>" alt=""/>
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
                    <?php if(session('username') == ''): ?>
                        <a href="<?php echo url('Login/login'); ?>" onClick="return confirm('请登录！')">
                            <em>网上托运</em>
                        </a>
                    <?php else: if($user_u['check_state'] != '1'): ?>
                            <a href="<?php echo url('Personalcenter/personalcenter_index'); ?>" onClick="return confirm('请您先认证！')">
                                <em>网上托运</em>
                            </a>
                        <?php else: ?>
                            <a href="<?php echo url('Entrust/entrust'); ?>">
                                <em>网上托运</em>
                            </a>
                        <?php endif; endif; ?>
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
                        <li><a href="<?php echo url('Inland/inlandmoney'); ?>">国内订车</a></li>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo url('Internation/internationcoldchain'); ?>" >
                        <em>国际冷链</em>
                    </a>
                    <ul class="drowdown">
                        <li><a href="<?php echo url('Internation/internationcoldchain'); ?>">业务介绍</a></li>
                        <li><a href="<?php echo url('Internation/internationmoney'); ?>">国际订舱</a></li>
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
                        <li><a href="<?php echo url('Aboutus/cultural'); ?>">实力展示</a></li>
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


<!-- 头部结束 -->
<div class="contanier">
  <div class="wrap-1200">
    <a class="back" href="<?php echo url('Goods/goods_car'); ?>">返回</a>
    <!-- <button class="back" class="btn btn-default btn-sm btn-right" onclick="history.go(-1)">返回</button> -->
    <?php if(session('userid') != ''): if($user[0]['check_state'] == '1'): if($goods['order_state'] == '1'): if(session('username')  ==  $goods['uid']): ?>
            <a class="back" style="margin-right: 20px;background-color: gray;color: black;" >您的货源</a>
          <?php else: if(empty($order_goodscar) != true): if(session('userid') == $order_goodscar[0]['user_id']): if(in_array($goods['id'],$goodsids)): ?>
                  <a class="back" style="margin-right: 20px;background-color: gray;color: black;" >您已抢单</a>
                <?php else: ?>
                  <a class="back" id="a" href="<?php echo url('Order/order_goods_car',array('id'=>$goods['id'])); ?>" data-toggle="modal" data-target="#<?php echo $goods['id']; ?>" style="margin-right: 20px;">下单</a>
                <?php endif; else: ?>
                <a class="back" id="a" href="<?php echo url('Order/order_goods_car',array('id'=>$goods['id'])); ?>" data-toggle="modal" data-target="#<?php echo $goods['id']; ?>" style="margin-right: 20px;">下单</a>
              <?php endif; else: ?>
              <a class="back" id="a" href="<?php echo url('Order/order_goods_car',array('id'=>$goods['id'])); ?>" data-toggle="modal" data-target="#<?php echo $goods['id']; ?>" style="margin-right: 20px;">下单</a>
            <?php endif; endif; else: ?>
          <a class="back" style="margin-right: 20px;background-color: gray;color: black;" >被抢单</a>
        <?php endif; else: ?>
        <a class="back" href="<?php echo url('Personalcenter/personalcenter_index'); ?>" onClick="return confirm('请您先认证！')" style="margin-right: 20px;">下单</a>
      <?php endif; ?>
      <div class="modal fade" id="<?php echo $goods['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="md-content">
            <h3>抢单</h3>
            <div>
              <form action="<?php echo url('Order/order_goods_car',array('id'=>$goods['id'])); ?>" method="post" onSubmit="return checktan1();">
                <input type="hidden" name="user_id" value="<?php echo session('userid');?>">
                <input type="hidden" name="goods_id" value="<?php echo $goods['id']; ?>">
                <input type="hidden" name="goodsname" value="<?php echo $goods['goods_name']; ?>">
                <input type="hidden" name="order_money" value="<?php echo $goods['carriage']; ?>">
                <div class="rz-Form" style="margin: 0px;">
                  <div class="rz-model rz-label">
                    <div class="clearfix">
                      <p class="fl">承运方名称&nbsp;：</p>
                      <p class="editinfo">
                        <?php if($user[0]['company_name'] != ''): ?>
                          <?php echo $user[0]['company_name']; ?>
                          <input type="hidden" name="transporter_name" value="<?php echo $user[0]['company_name']; ?>">
                        <?php else: ?>
                          <?php echo $user[0]['real_name']; ?>
                          <input type="hidden" name="transporter_name" value="<?php echo $user[0]['real_name']; ?>">
                        <?php endif; ?>  
                      </p> 
                    </div>
                  </div>
                  <div class="rz-model rz-label">
                      <div class="clearfix">
                          <p class="fl">联系电话&nbsp;：</p>
                          <input name="transporter_phone" id="name" class="xm inputstyle checktanphone" type="text" value="<?php echo $user[0]['username']; ?>" onblur="uxPhone1(this)" style="width: 250px;" >
                          <label><span style="display: inline-block;margin-top: 10px;">请输入正确的手机号</span></label>
                      </div>
                  </div>
                  <div class="rz-model" style="position:relative">
                      <input type="submit" name="" class="rz_sub" value="下单">
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    <?php else: ?>
      <a class="back" href="<?php echo url('Login/login'); ?>" onClick="return confirm('请登录！')" style="margin-right: 20px;">下单</a>
    <?php endif; ?>
    <div class="clearfix"></div>
  </div>
  <div class="goods_detail wrap-1200" style="background: #fff">
    <form action="" method="post">
      <input type="hidden" name="id" value="<?php echo $goods['id']; ?>">
    </form>
    <table style="max-width: 1200px; width: 100%"> 
      <thead>
        <th>货源详情</th>
        <th>配送信息</th>
        <th>联系方式</th>
      </thead>
      <tbody>
        <tr>
          <td>
            <ul class="u-inforUl detail">
              <li class="clearfix"><a>货物品类：</a>
                <span>
                  <?php if(is_array($goods_sort) || $goods_sort instanceof \think\Collection || $goods_sort instanceof \think\Paginator): $i = 0; $__LIST__ = $goods_sort;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v1): $mod = ($i % 2 );++$i;if($v1['id'] == $goods['goods_sort']): ?>
                  <?php echo $v1['typename']; endif; endforeach; endif; else: echo "" ;endif; ?>
                </span>
              </li>
              <li class="clearfix"><a>货物名称：</a><span><?php echo $goods['goods_name']; ?></span></li>
              <li class="clearfix"><a>货物类型：</a>
                <span>
                  <?php if(is_array($goods_type) || $goods_type instanceof \think\Collection || $goods_type instanceof \think\Paginator): $i = 0; $__LIST__ = $goods_type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v2): $mod = ($i % 2 );++$i;if($v2['id'] == $goods['goods_type']): ?>
                      <?php echo $v2['typename']; endif; endforeach; endif; else: echo "" ;endif; ?>
                </span>
              </li>
              <li class="clearfix"><a>温度要求：</a><span><?php echo $goods['low_temperature']; ?>℃~<?php echo $goods['high_temperature']; ?>℃</span></li>
              <li class="clearfix"><a>货物规格：</a><span><?php echo $goods['standard_ton']; ?>吨；<?php echo $goods['standard_square']; ?>方</span></li>
              <li class="clearfix"><a>需要车长：</a>
                <span>
                  <?php if(is_array($car_length) || $car_length instanceof \think\Collection || $car_length instanceof \think\Paginator): $i = 0; $__LIST__ = $car_length;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v3): $mod = ($i % 2 );++$i;if($v3['id'] == $goods['car_length']): ?>
                  <?php echo $v3['typename']; endif; endforeach; endif; else: echo "" ;endif; ?>
                </span>
              </li>
              <li class="clearfix"><a>需要的车辆类型：</a>
                <span>
                  <?php if(is_array($car_type) || $car_type instanceof \think\Collection || $car_type instanceof \think\Paginator): $i = 0; $__LIST__ = $car_type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v4): $mod = ($i % 2 );++$i;if($v4['id'] == $goods['car_type']): ?>
                  <?php echo $v4['typename']; endif; endforeach; endif; else: echo "" ;endif; ?>
                </span>
              </li>
              <li class="clearfix"><a>运输费用：</a><span><?php echo $goods['carriage_type']; ?>为&nbsp;<?php echo $goods['carriage']; ?>元</span></li>
              <li class="clearfix"><a>支付方式： </a>
              <span>
                <?php if(is_array($payment_mode) || $payment_mode instanceof \think\Collection || $payment_mode instanceof \think\Paginator): $i = 0; $__LIST__ = $payment_mode;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v5): $mod = ($i % 2 );++$i;if($v5['id'] == $goods['payment_mode']): ?>
                <?php echo $v5['typename']; endif; endforeach; endif; else: echo "" ;endif; ?>
              </span>
              </li>
              <li class="clearfix"><a>是否需要发票： </a><span><?php echo $goods['invoice']; ?></span></li>
            </ul>
          </td>
          <td>
            <ul class="u-inforUl detail">
              <li class="clearfix"><a>始发地： </a><span><?php echo $goods['starting_address']; ?></span></li>
              <li class="clearfix"><a>始发地详细地址： </a><span><?php echo $goods['startingaddress_detail']; ?></span></li>
              <li class="clearfix"><a>目的地： </a><span><?php echo $goods['destination']; ?></span></li>
              <li class="clearfix"><a>目的地详细地址： </a><span><?php echo $goods['destination_detail']; ?></span></li>
              <li class="clearfix"><a>装车时间： </a><span><?php echo $goods['start_loadingtime']; ?>——<?php echo $goods['end_loadingtime']; ?></span></li>
              <li class="clearfix"><a>到货时间： </a><span><?php echo $goods['start_arrivetime']; ?>——<?php echo $goods['end_arrivetime']; ?></span></li>
            </ul>
          </td>
          <td>
            <ul class="u-inforUl detail">
              <li class="clearfix"><a>联系人： </a>
                <span>
                  <?php if($goods['is_company'] == '1'): ?>
                    <span style="color: #337cc9;" title="易冷链自营"><span class="fa fa-user"></span></span>
                  <?php endif; ?>&nbsp;<?php echo $goods['contact']; ?>
                </span>
              </li>
              <li class="clearfix">
                <a>联系方式： </a>
                <?php if(session('userid') != ''): if(is_array($userres) || $userres instanceof \think\Collection || $userres instanceof \think\Paginator): $i = 0; $__LIST__ = $userres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <span id="phone">
                    <?php if($vo['check_state'] == '1'): ?> 
                      <?php echo $goods['phone']; else: ?>
                      <a href="<?php echo url('Personalcenter/personalcenter_index'); ?>" style="color: red;">认证通过后可见</a>
                    <?php endif; ?>
                    </span>
                  <?php endforeach; endif; else: echo "" ;endif; else: ?>
                  <a href="<?php echo url('Login/login'); ?>" style="color: red;">登录认证后可见</a>
                <?php endif; ?>
              </li>
            </ul>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

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
<div class="kf">
    <a style="outline: none;" href="http://42.228.11.187/chat/index.php?nick=<?php echo $username; ?>" target="_blank">
        <img src="__PUBLIC__/images/helper03.png">
        <p>在线客服</p>
    </a>
</div>
<script src="__PUBLIC__/js/jquery.min.js"></script>
<script src="__PUBLIC__/js/bootstrap.min.js"></script>
<script src="__PUBLIC__/js/auth.js"></script>
<script type="text/javascript">
  $('.nav_wrap').find('li').removeClass('now');
  $('.nav_wrap').children('li').eq(2).addClass('now');
  function checktan1(){
      var checktanphone=$(".checktanphone"); 
      if(!uxPhone1(checktanphone)){
          return false;
      }
  }
</script>
</body>
</html>