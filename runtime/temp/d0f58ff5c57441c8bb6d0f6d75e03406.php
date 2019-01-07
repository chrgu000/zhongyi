<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:83:"E:\WWW\transport\public/../application/admin\view\entrustcarorder\order-detail.html";i:1509582575;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>订单详情</title>
    <link rel="icon" href="" type="image/x-icon"/>
    <link rel="stylesheet" href="__PUBLIC__/css/style3.css">
    <link href="__PUBLIC__/css/H-ui.admin.css" rel="stylesheet" type="text/css" />
    <link href="__PUBLIC__/css/H-ui.min.css" rel="stylesheet" type="text/css" />
    <link href="../../../../../static/admin/lib/Hui-iconfont/1.0.1/iconfont.css" rel="stylesheet" type="text/css" />
    <style type="text/css">
      a:hover{ text-decoration: none;}
      .goods_detail table td .detail li a:hover{
        color: #000;
      }
    </style>
</head>
<body>
<a class="btn btn-success radius r mr-20" style="line-height:1.6em;margin-top:3px" 
href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a>
<div class="person-right mjy-add mj-pro0" style="margin:0 auto;">
            <div class="m-infortabBack">
            <div id="m-infonavCont">
                <div class="m-infonavContent2 mj-xlxx goods_detail" style="background: #fff">
                    <div class="orderdetail">
                        <h3>
                          <span style="float: left;">订单详情</span>
                          <a class="back" href="<?php echo url('Entrustcarorder/lst'); ?>" 
                          style="color: #fff; text-decoration: none;">返回</a>
                          <div class="clearfix"></div>
                        </h3>
                        <p>
                            <span>订单编号:</span>&nbsp;<?php echo $order['order_number']; ?>
                            <span style="float: right;">订单状态：
                                <?php if($order['order_state'] == '1'): ?>
                                 待确认
                                <?php elseif($order['order_state'] == '2'): ?>
                                 派车中，待付款
                                <?php elseif($order['order_state'] == '3'): ?>
                                 已支付，待发车
                                <?php elseif($order['order_state'] == '4'): ?>
                                 已发车，运输中
                                <?php elseif($order['order_state'] == '5'): ?>
                                  已完成
                                <?php elseif($order['order_state'] == '6'): ?>
                                  已取消
                                <?php elseif($order['order_state'] == '7'): ?>
                                  退款中
                              <?php endif; ?>
                            </span>
                        </p>
                    </div>
                    <table style="max-width: 970px; width: 100%">
                      <thead>
                        <th>货源信息</th>
                        <th>配送信息</th>
                        <th>联系信息</th>
                      </thead>
                      <?php if(is_array($goods) || $goods instanceof \think\Collection || $goods instanceof \think\Paginator): $i = 0; $__LIST__ = $goods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                      <tbody>
                        <tr>
                          <td>
                            <ul class="u-inforUl detail">
                             <li class="orderdetail_tit">货主基本信息</li>
                                <li class="clearfix"><a>货主账号：</a><span><?php echo $order['user_name']; ?></span></li>
                            </ul>
                            <ul class="u-inforUl detail">
                             <li class="orderdetail_tit">货源详情</li>
                                 <li class="clearfix"><a>货物名称:</a><span><?php echo $vo['goods_name']; ?></span></li>
                                 <li class="clearfix"><a>货物品类:</a><span>
                                   <?php if(is_array($goods_sort2) || $goods_sort2 instanceof \think\Collection || $goods_sort2 instanceof \think\Paginator): $i = 0; $__LIST__ = $goods_sort2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;if($v['id'] == $vo['goods_sort']): ?>
                                        <?php echo $v['typename']; endif; endforeach; endif; else: echo "" ;endif; ?>
                                 </span></li>
                                 <li class="clearfix"><a>货物类型:</a><span>
                                   <?php if(is_array($goods_type2) || $goods_type2 instanceof \think\Collection || $goods_type2 instanceof \think\Paginator): $i = 0; $__LIST__ = $goods_type2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;if($v['id'] == $vo['goods_type']): ?>
                                        <?php echo $v['typename']; endif; endforeach; endif; else: echo "" ;endif; ?>
                                 </span></li>
                                 <li class="clearfix"><a>温度要求:</a><span>
                                   <?php echo $vo['low_t']; ?>度~<?php echo $vo['high_t']; ?>度
                                 </span></li>
                                 <li class="clearfix"><a>货物规格:</a><span>
                                  <?php echo $vo['goods_ton']; ?>吨/<?php echo $vo['goods_square']; ?>方
                                 </span></li>    
                                 <br/>                         
                            </ul>
                          </td>
                          <td>
                            <ul class="u-inforUl detail">
                                <li class="clearfix"><a>始发地：</a><span>
                                  <?php echo $vo['startsite']; ?><?php echo $vo['startsite_detail']; ?>
                                </span></li>
                                <li class="clearfix"><a>目的地： </a><span>
                                  <?php echo $vo['endsite']; ?><?php echo $vo['endsite_detail']; ?>
                                </span></li>
                                <li class="clearfix"><a>装车时间：</a><span>
                                  <?php echo $vo['start_loadingtime']; ?>——<?php echo $vo['end_loadingtime']; ?>
                                </span></li>
                                <li class="clearfix"><a>到货时间：</a><span>
                                  <?php echo $vo['start_arrivetime']; ?>——<?php echo $vo['end_arrivetime']; ?>
                                </span></li>
                                <li class="clearfix"><a>需要车型：</a><span>
                                   <?php if(is_array($car_type2) || $car_type2 instanceof \think\Collection || $car_type2 instanceof \think\Paginator): $i = 0; $__LIST__ = $car_type2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;if($v['id'] == $vo['car_type']): ?>
                                        <?php echo $v['typename']; endif; endforeach; endif; else: echo "" ;endif; ?>
                                </span></li>
                                <li class="clearfix"><a>需要车长：</a><span>
                                  <?php if(is_array($car_length2) || $car_length2 instanceof \think\Collection || $car_length2 instanceof \think\Paginator): $i = 0; $__LIST__ = $car_length2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;if($v['id'] == $vo['car_length']): ?>
                                      <?php echo $v['typename']; endif; endforeach; endif; else: echo "" ;endif; ?>
                                </span></li>
                                <li class="clearfix"><a>订单总金额：</a><span><?php echo $order['order_money']; ?></span></li>
                                <li class="clearfix"><a>支付方式：</a><span>
                                   <?php if(is_array($payment_mode2) || $payment_mode2 instanceof \think\Collection || $payment_mode2 instanceof \think\Paginator): $i = 0; $__LIST__ = $payment_mode2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;if($v['id'] == $vo['payment_mode']): ?>
                                        <?php echo $v['typename']; endif; endforeach; endif; else: echo "" ;endif; ?>
                                </span></li>
                                <li class="clearfix"><a>是否需要发票：</a><span><?php echo $vo['invoice']; ?></span></li>
                                <li class="clearfix"><a>备注：</a><span><?php echo $vo['remark']; ?></span></li>
                            </ul>
                          </td>
                          <td>
                            <ul class="u-inforUl detail">
                             <li class="orderdetail_tit">承运方基本信息</li>
                              <li class="clearfix"><a>承运方联系人：</a><span><?php echo $order['carrier_name']; ?></span></li>
                              <li class="clearfix"><a>承运方联系电话：</a><span><?php echo $order['carrier_phone']; ?></span></li>
                              <li class="orderdetail_tit">货主基本信息</li>
                              <li class="clearfix"><a>发货人姓名：</a><span><?php echo $vo['shipper_name']; ?></span></li>
                              <li class="clearfix"><a>发货人联系电话：</a><span><?php echo $vo['shipper_phone']; ?></span></li>
                              <li class="clearfix"><a>收货人姓名：</a><span><?php echo $vo['receiver_name']; ?></span></li>
                              <li class="clearfix"><a>收货人联系电话：</a><span><?php echo $vo['receiver_phone']; ?></span></li>
                            </ul>
                          </td>
                        </tr>
                      </tbody>
                      <?php endforeach; endif; else: echo "" ;endif; ?>
                    </table>
                </div>
            </div>
        </div>
    <!-- 右侧结束 -->
<script type="text/javascript" src="__PUBLIC__/js/jquery.min.js"></script>
<script src="__PUBLIC__/js/auth.js"></script>
<script src="__PUBLIC__/js/sitepicker.js"></script>
<script type="text/javascript">
    $('.person-left dl dt').click(function(){
        $('.person-left dl dt').removeClass('active');
        $(this).addClass('active');
        $('.person-left dl .hideleft').hide();
        $(this).next('.hideleft').show();
    });
    $('.nav_wrap').find('li').removeClass('now');
    $('.nav_wrap').find('li').eq(6).addClass('now');
    $('.person-left dl').find('.hideleft').hide();
    $('.person-left dl').eq(1).find('.hideleft').show();
    $('.person-left dl').find('dt').removeClass('active');
    $('.person-left dl').eq(1).find('dt').addClass('active');
</script>
</body>
</html>