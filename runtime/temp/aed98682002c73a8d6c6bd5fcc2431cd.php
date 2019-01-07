<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:81:"E:\WWW\transport\public/../application/admin\view\ordergoodscar\order-detail.html";i:1508916594;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>找车货源订单详情</title>
    <link rel="icon" href="" type="image/x-icon"/>
    <link rel="stylesheet" href="__PUBLIC__/css/style2.css">
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
<div class="person-right mjy-add mj-pro0" style="margin: 0 auto 40px auto; ">
  <div class="m-infortabBack">
    <div id="m-infonavCont">
      <div class="m-infonavContent2 mj-xlxx goods_detail" style="background: #fff">

        <div class="orderdetail">
          <h3>
            <span style="float: left;">订单详情</span>
            <a class="back" href="<?php echo url('Ordergoodscar/lst'); ?>" style="color:#fff; text-decoration: none;">返回</a>
            <div class="clearfix"></div>
          </h3>
          <p>
            <span>订单编号：&nbsp;<?php echo $order['order_number']; ?></span>&nbsp;&nbsp;&nbsp;&nbsp;
            <span style="float: right;">订单状态：
              <?php if($order['order_state'] == '1'): ?>
                 待付款
                <?php elseif($order['order_state'] == '2'): ?>
                  待发车
                <?php elseif($order['order_state'] == '3'): ?>
                  运输中
                <?php elseif($order['order_state'] == '4'): ?>
                  已完成
                <?php elseif($order['order_state'] == '5'): ?>
                  已取消
                <?php elseif($order['order_state'] == '6'): ?>
                  退款中
              <?php endif; ?>
            </span>
          </p>
        </div>

        <table style="max-width: 970px; width: 100%">
          <thead>
            <th>货主信息</th>
            <th>承运方信息</th>
          </thead>
          <tbody>
            <tr>
            <!-- 货主信息 -->
              <td style="vertical-align: top;">
                <ul class="u-inforUl detail">
                  <li class="orderdetail_tit">货主信息</li>
                  <li class="clearfix"><a>货主账号：</a><span><?php echo $goods[0]['uid']; ?> </span></li>
                </ul>

                <ul class="u-inforUl detail">
                  <li class="orderdetail_tit">货源信息</li>
                    <li class="clearfix"><a>货物名称：</a><span><?php echo $goods[0]['goods_name']; ?></span></li>
                    <li class="clearfix"><a>货物类型：</a>
                      <span>
                        <?php if(is_array($goods_type2) || $goods_type2 instanceof \think\Collection || $goods_type2 instanceof \think\Paginator): $i = 0; $__LIST__ = $goods_type2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;if($v['id'] == $goods[0]['goods_type']): ?>
                            <?php echo $v['typename']; endif; endforeach; endif; else: echo "" ;endif; ?>
                      </span>
                    </li>
                    <li class="clearfix"><a>货物品类：</a>
                      <span>
                        <?php if(is_array($goods_sort2) || $goods_sort2 instanceof \think\Collection || $goods_sort2 instanceof \think\Paginator): $i = 0; $__LIST__ = $goods_sort2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;if($v['id'] == $goods[0]['goods_sort']): ?>
                            <?php echo $v['typename']; endif; endforeach; endif; else: echo "" ;endif; ?>
                      </span>
                    </li>
                    <li class="clearfix"><a>货物规格：</a>
                      <span>
                        <?php echo $goods[0]['standard_ton']; ?>吨；<?php echo $goods[0]['standard_square']; ?>方
                      </span>
                    </li>
                    <li class="clearfix"><a>温度要求：</a>
                      <span><?php echo $goods[0]['low_temperature']; ?>℃~<?php echo $goods[0]['high_temperature']; ?>℃</span>
                    </li>
                    <li class="clearfix"><a>装车时间：</a>
                      <span><?php echo $goods[0]['start_loadingtime']; ?>——<?php echo $goods[0]['end_loadingtime']; ?></span>
                    </li>
                    <li class="clearfix"><a>到货时间：</a>
                      <span><?php echo $goods[0]['start_arrivetime']; ?>——<?php echo $goods[0]['end_arrivetime']; ?></span>
                    </li> 
                    <li class="clearfix"><a>所需车长：</a>
                      <span>
                        <?php if(is_array($car_length2) || $car_length2 instanceof \think\Collection || $car_length2 instanceof \think\Paginator): $i = 0; $__LIST__ = $car_length2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;if($v['id'] == $goods[0]['car_length']): ?>
                            <?php echo $v['typename']; endif; endforeach; endif; else: echo "" ;endif; ?>
                      </span>
                    </li>
                    <li class="clearfix"><a>所需车型：</a>
                      <span>
                        <?php if(is_array($car_type2) || $car_type2 instanceof \think\Collection || $car_type2 instanceof \think\Paginator): $i = 0; $__LIST__ = $car_type2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;if($v['id'] == $goods[0]['car_type']): ?>
                            <?php echo $v['typename']; endif; endforeach; endif; else: echo "" ;endif; ?>
                      </span>
                    </li>    
                    <li class="clearfix"><a>运输费用：</a>
                      <span><?php echo $order['order_money']; ?>&nbsp;元</span>
                    </li>
                    <li class="clearfix"><a>支付方式:</a>
                      <span>
                        <?php if(is_array($payment_mode2) || $payment_mode2 instanceof \think\Collection || $payment_mode2 instanceof \think\Paginator): $i = 0; $__LIST__ = $payment_mode2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;if($v['id'] == $goods[0]['payment_mode']): ?>
                            <?php echo $v['typename']; endif; endforeach; endif; else: echo "" ;endif; ?>
                      </span>
                    </li>
                    <li class="clearfix"><a>是否自营:</a>
                      <span>
                        <?php if($goods[0]['is_company'] == 0): ?>非自营
                        <?php elseif($goods[0]['is_company']): ?>自营
                        <?php endif; ?>
                      </span>
                    </li>
                    <li class="clearfix"><a>是否需要发票:</a><span><?php echo $goods[0]['invoice']; ?></span></li>
                    <li class="clearfix"><a>发布时间：</a><span><?php echo $goods[0]['time']; ?></span></li>
                </ul>

                <ul class="u-inforUl detail">
                  <li class="orderdetail_tit">配送信息</li>
                  <li class="clearfix"><a>始发地：</a><span><?php echo $goods[0]['starting_address']; ?></span></li>
                  <li class="clearfix"><a>始发地详细地址：</a><span><?php echo $goods[0]['startingaddress_detail']; ?></span></li>
                  <li class="clearfix"><a>目的地：</a><span><?php echo $goods[0]['destination']; ?></span></li>
                  <li class="clearfix"><a>目的地详细地址：</a><span><?php echo $goods[0]['destination_detail']; ?></span></li>
                </ul>

                <ul class="u-inforUl detail">
                  <li class="orderdetail_tit">联系信息</li>
                  <li class="clearfix"><a>货物联系人：</a><span><?php echo $goods[0]['contact']; ?></span></li>
                  <li class="clearfix"><a>货物联系电话：</a><span><?php echo $goods[0]['phone']; ?></span></li>
                  <li class="clearfix"><a>备注：</a><span><?php echo $goods[0]['goods_remark']; ?></span></li>
                </ul>
              </td>

              <!-- 车主信息 -->
              <td style="vertical-align: top;">
                <ul class="u-inforUl detail">
                  <li class="orderdetail_tit">承运方基本信息</li>
                  <li class="clearfix"><a>承运方姓名：</a><span><?php echo $order['transporter_name']; ?></span></li>
                  <li class="clearfix"><a>承运方联系方式：</a><span><?php echo $order['transporter_phone']; ?></span></li>
                </ul>
                      
              </td>  
            </tr>
          </tbody>
        </table>
      </div>
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