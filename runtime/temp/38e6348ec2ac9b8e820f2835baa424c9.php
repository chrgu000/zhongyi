<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:85:"E:\wamp\www\transport\public/../application/admin\view\ordergoodsku\order-detail.html";i:1506419133;}*/ ?>
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
            <a class="back" href="<?php echo url('Ordergoodsku/lst'); ?>" style="color:#fff; text-decoration: none;">返回</a>
            <div class="clearfix"></div>
          </h3>
          <p>
            <span>订单编号：&nbsp;<?php echo $order['order_number']; ?></span>&nbsp;&nbsp;&nbsp;&nbsp;
            <span style="float: right;">订单状态：
              <?php if($order['order_state'] == '1'): ?>
                 待付款
                <?php elseif($order['order_state'] == '2'): ?>
                  待入库
                <?php elseif($order['order_state'] == '3'): ?>
                  已完成
                <?php elseif($order['order_state'] == '4'): ?>
                  已取消
                <?php elseif($order['order_state'] == '5'): ?>
                  退款中
              <?php endif; ?>
            </span>
          </p>
        </div>

        <table style="max-width: 970px; width: 100%">
          <thead>
            <th>货主信息</th>
            <th>库源信息</th>
          </thead>
          <tbody>
            <tr>
            <!-- 货主信息 -->
              <td style="vertical-align: top;">
                <ul class="u-inforUl detail">
                  <li class="orderdetail_tit">货主基本信息</li>
                  <li class="clearfix"><a>货主账号：</a><span><?php echo $goods['uid']; ?> </span></li>
                </ul>

                <ul class="u-inforUl detail">
                  <li class="orderdetail_tit">货源信息</li>
                    <li class="clearfix"><a>货物名称：</a><span><?php echo $goods['goods_name']; ?></span></li>
                    <li class="clearfix"><a>货物类型：</a>
                      <span>
                        <?php if(is_array($goods_type2) || $goods_type2 instanceof \think\Collection || $goods_type2 instanceof \think\Paginator): $i = 0; $__LIST__ = $goods_type2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;if($v['id'] == $goods['goods_type']): ?>
                            <?php echo $v['typename']; endif; endforeach; endif; else: echo "" ;endif; ?>
                      </span>
                    </li>
                    <li class="clearfix"><a>货物规格：</a>
                      <span>
                        <?php echo $goods['standard_ton']; ?>吨；<?php echo $goods['standard_square']; ?>方
                      </span>
                    </li>
                    <li class="clearfix"><a>库存温度：</a>
                      <span>
                        <?php if(is_array($need_wh_temperature2) || $need_wh_temperature2 instanceof \think\Collection || $need_wh_temperature2 instanceof \think\Paginator): $i = 0; $__LIST__ = $need_wh_temperature2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;if($v['id'] == $goods['need_wh_temperature']): ?>
                            <?php echo $v['typename']; endif; endforeach; endif; else: echo "" ;endif; ?>
                      </span>
                    </li>
                    <li class="clearfix"><a>预计库存时间:</a>
                      <span>
                        <?php if(is_array($storage_time2) || $storage_time2 instanceof \think\Collection || $storage_time2 instanceof \think\Paginator): $i = 0; $__LIST__ = $storage_time2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;if($v['id'] == $goods['storage_time']): ?>
                            <?php echo $v['typename']; endif; endforeach; endif; else: echo "" ;endif; ?>
                      </span>
                    </li>    
                    <li class="clearfix"><a>存储费用：</a>
                      <span><?php echo $order['order_money']; ?>&nbsp;元</span>
                    </li>
                    <li class="clearfix"><a>包装类型：</a>
                      <span><?php echo $goods['package_type']; ?></span>
                    </li>
                    <li class="clearfix"><a>货物图片：</a>
                      <?php if($goods['goods_photo'] != ''): ?>
                         <span><img src="__IMG__<?php echo $goods['goods_photo']; ?>" style="width: 200px;height: 200px" /></span>
                      <?php else: ?>
                         <span>暂无图片</span>
                      <?php endif; ?>
                    </li>
                    <li class="clearfix"><a>支付方式:</a>
                      <span>
                        <?php if(is_array($payment_mode2) || $payment_mode2 instanceof \think\Collection || $payment_mode2 instanceof \think\Paginator): $i = 0; $__LIST__ = $payment_mode2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;if($v['id'] == $goods['payment_mode']): ?>
                            <?php echo $v['typename']; endif; endforeach; endif; else: echo "" ;endif; ?>
                      </span>
                    </li>
                    <li class="clearfix"><a>是否自营:</a>
                      <span>
                        <?php if($goods['is_company'] == 0): ?>非自营
                        <?php elseif($goods['is_company']): ?>自营
                        <?php endif; ?>
                      </span>
                    </li>
                    <li class="clearfix"><a>是否需要发票:</a><span><?php echo $goods['invoice']; ?></span></li>
                    <li class="clearfix"><a>发布时间：</a><span><?php echo $goods['time']; ?></span></li>
                </ul>

                <ul class="u-inforUl detail">
                  <li class="orderdetail_tit">配送信息</li>
                  <li class="clearfix"><a>仓库地址：</a><span><?php echo $goods['whaddress']; ?><?php echo $goods['whaddress_detail']; ?></span></li>
                  <li class="clearfix"><a>入库时间：</a><span><?php echo $goods['enter_wh_time']; ?></span></li>
                </ul>

                <ul class="u-inforUl detail">
                  <li class="orderdetail_tit">联系信息</li>
                  <li class="clearfix"><a>货物联系人：</a><span><?php echo $goods['contact']; ?></span></li>
                  <li class="clearfix"><a>货物联系电话：</a><span><?php echo $goods['phone']; ?></span></li>
                  <li class="clearfix"><a>备注：</a><span><?php echo $goods['goods_remark']; ?></span></li>
                </ul>
              </td>

              <!-- 库主信息 -->
              <td>
                <ul class="u-inforUl detail">
                  <li class="orderdetail_tit">库主信息</li>
                  <li class="clearfix"><a>库主账号：</a><span><?php echo $list['wh_uid']; ?> </span></li>
                </ul>

                <ul class="u-inforUl detail">
                  <li class="orderdetail_tit">库源信息</li>
                  <li class="clearfix"><a>仓库名称：</a><span><?php echo $list['wh_name']; ?></span></li>
                  <li class="clearfix"><a>仓库类型：</a><span><?php echo $list['wh_type']; ?></span></li>
                  <li class="clearfix"><a>仓库价格：</a>
                    <span>
                      <?php echo $list['wh_price']; if($list['wh_price_type'] == '0'): ?>
                        元/天/托
                        <?php elseif($list['wh_price_type'] == '1'): ?>
                          元/天/平
                        <?php elseif($list['wh_price_type'] == '2'): ?>
                          元/天/吨
                        <?php elseif($list['wh_price_type'] == '3'): ?>
                          元/天/方
                      <?php endif; ?>
                    </span>
                  </li>
                    <li class="clearfix"><a>仓库面积：</a>
                      <span>
                        <p style="margin-left: 94px;">
                        <?php if($list['normal_area'] != ''): ?>
                          常温：<?php echo $list['normal_area']; ?>平方；<?php echo $list['normal_volume']; ?>立方
                          <?php else: endif; ?>
                        </p>
                        <p style="margin-left: 94px;">
                        <?php if($list['coldstorage_area'] != ''): ?>    
                          冷藏：<?php echo $list['coldstorage_area']; ?>平方；<?php echo $list['coldstorage_volume']; ?>立方
                          <?php else: endif; ?>
                        </p>
                        <p style="margin-left: 94px;">
                          <?php if($list['freeze_area'] != ''): ?>
                            冷冻：<?php echo $list['freeze_area']; ?>平方；<?php echo $list['freeze_volume']; ?>立方
                            <?php else: endif; ?>
                        </p>
                        <p style="margin-left: 94px;">
                          <?php if($list['quickfreeze_area'] != ''): ?>
                            急冻：<?php echo $list['quickfreeze_area']; ?>平方；<?php echo $list['quickfreeze_volume']; ?>立方
                            <?php else: endif; ?>
                        </p>
                        <p style="margin-left: 94px;">
                          <?php if($list['deepcold_area'] != ''): ?>
                            深冷：<?php echo $list['deepcold_area']; ?>平方；<?php echo $list['deepcold_volume']; ?>立方
                            <?php else: endif; ?>
                        </p>
                      </span>
                    <li class="clearfix"><a>是否自营:</a>
                      <span>
                        <?php if($list['is_company'] == 0): ?>非自营
                        <?php elseif($list['is_company']): ?>自营
                        <?php endif; ?>
                      </span>
                    </li>
                    <li class="clearfix"><a>增值服务：</a><span><?php echo $list['wh_service']; ?></span></li>
                    <li class="clearfix"><a>发票：</a><span><?php echo $list['wh_invoice']; ?></span></li>
                    <li class="clearfix"><a>发布日期：</a><span><?php echo $list['wh_time']; ?></span></li>
                </ul>
                
                <ul class="u-inforUl detail">
                  <li class="orderdetail_tit">仓库地址信息</li>
                  <li class="clearfix"><a>仓库实拍图：</a>
                    <span><img src="__IMG__<?php echo $list['wh_photo']; ?>" style="width: 200px;height: 200px" /></span>
                  </li>
                  <li class="clearfix"><a>仓库地址：</a>
                    <span><?php echo $list['wh_address']; ?><?php echo $list['wh_address_detail']; ?></span>
                  </li>
                </ul>

                <ul class="u-inforUl detail">
                  <li class="orderdetail_tit">联系信息</li>
                  <li class="clearfix"><a>联系人：</a><span><?php echo $list['wh_contact']; ?></span></li>
                  <li class="clearfix"><a>联系方式：</a><span><?php echo $list['wh_phone']; ?></span></li>
                  <li class="clearfix"><a>备注：</a><span><?php echo $list['wh_remark']; ?></span></li>
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