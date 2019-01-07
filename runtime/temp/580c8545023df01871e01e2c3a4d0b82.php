<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:78:"E:\WWW\transport\public/../application/index\view\personalcenter\pathlist.html";i:1510026725;s:68:"E:\WWW\transport\public/../application/index\view\common\header.html";i:1513838096;s:66:"E:\WWW\transport\public/../application/index\view\common\left.html";i:1511158695;s:68:"E:\WWW\transport\public/../application/index\view\common\footer.html";i:1517308120;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>管理车源</title>
    <link rel="icon" href="" type="image/x-icon"/>
    <link rel="stylesheet" href="../../static/index/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../static/index/css/font-awesome.min.css">
    <link rel="stylesheet" href="__PUBLIC__/css/city-picker.css">
    <link rel="stylesheet" href="__PUBLIC__/css/higo.css">
    <link rel="stylesheet" href="__PUBLIC__/css/style.css">
    <!-- 分页样式 -->
    <link type="text/css" rel="stylesheet" href="__PUBLIC__/css/page.css"/>
    <script type="text/javascript" src="__PUBLIC__/js/jquery.simplePagination.js"></script>
    <style type="text/css">
        .personCenter{
            min-height: 800px;
        }
         #paging1{text-align: center;}
        .pagination>li>a, .pagination>li>span{
            color: #333;
            background: none;
        }
        .pagination>li>a:hover, .pagination>li>span:hover{
            background: none;border:1px solid #2562b4; color: #2562b4;
        }
        .simple-pagination ul{
            display: inline-block;
            vertical-align: middle;
        }
        .pagination li .dots:hover{border:1px solid #ddd; color: #333;}
    </style>
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
                            <em>易冷链承运</em>
                        </a>
                    <?php else: if($user_u['check_state'] != '1'): ?>
                            <a href="<?php echo url('Personalcenter/personalcenter_index'); ?>" onClick="return confirm('请您先认证！')">
                                <em>易冷链承运</em>
                            </a>
                        <?php else: ?>
                            <a href="<?php echo url('Entrust/entrust'); ?>">
                                <em>易冷链承运</em>
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
                        <li><a href="<?php echo url('Internation/internationmoney'); ?>">国际订车</a></li>
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
<div class="personCenter goods_info">
    <div class="wrap-1200 clearfix" style="padding: 40px 0 45px 0;">
    	<!-- 左侧开始 -->
        <div class="person-left fl">
    <div class="photo">
        <img src="__PUBLIC__/images/default.png" alt="">
        <p><?php echo session('username')?></p>
        <p style="margin-top: 4px;">
        
        <?php if($userres['check_state'] == '1'): ?>
        <span>已认证</span>
        <?php else: ?>
        <span>未认证</span>
        <?php endif; if($userres['is_company'] == '0'): ?>
        <span>非自营</span>
        <?php else: ?>
        <span>自营</span>
        <?php endif; ?>
        </p>
    </div>
    <dl>
        <dt class="active"><i class="glyphicon glyphicon-user"></i>&nbsp;个人中心</dt>
        <div class="hideleft">
            <dd class="person-dd active">
                <a href="<?php echo url('Personalcenter/personalcenter_index'); ?>">用户信息<i class="glyphicon glyphicon-chevron-right arrow" aria-hidden="true"></i></a>
            </dd>
            <!-- <dd class="person-dd">
                <a href="">常用地址</a>
            </dd>
            <dd class="person-dd ">
                <a href="">我的消息</a>
            </dd>
            <dd class="person-dd ">
                <a href="">我要推荐</a>
            </dd>
            <dd class="person-dd ">
               <a href="">网站编辑</a>
            </dd> -->
        </div>
    </dl>
    <?php if($userres['check_state'] == '1'): ?>
        <dl>
            <dt class=""><i class="glyphicon glyphicon-th-list"></i>&nbsp;我的订单</dt>
            <div class="hideleft" style="display:none;">
                <dd class="person-dd ">
                    <?php if($userres['type'] == '物流公司'): ?>
                        <a href="<?php echo url('Personalcenterorder/myorder_findcar'); ?>">我的抢单</a>
                    <?php elseif($userres['type'] == '车主'): ?>
                        <a href="<?php echo url('Personalcenterorder/myorder_findgoodscar'); ?>">我的抢单</a>
                    <?php elseif($userres['type'] == '库主'): ?>
                        <a href="<?php echo url('Personalcenterorder/myorder_findgoodsku'); ?>">我的抢单</a>
                    <?php else: ?>
                        <a href="<?php echo url('Personalcenterorder/myorder_findcar'); ?>">我的抢单</a>
                    <?php endif; ?>
                </dd>
            
                <dd class="person-dd ">
                    <?php if($userres['type'] == '物流公司'): ?>
                        <a href="<?php echo url('Personalcenterorder/acceptorder_goodscar'); ?>">接受订单</a>
                    <?php elseif($userres['type'] == '车主'): ?>
                        <a href="<?php echo url('Personalcenterorder/acceptorder_goodscar'); ?>">接受订单</a>
                    <?php elseif($userres['type'] == '库主'): ?>
                        <a href="<?php echo url('Personalcenterorder/acceptorder_goodsku'); ?>">接受订单</a>
                    <?php else: ?>
                        <a href="<?php echo url('Personalcenterorder/acceptorder_path'); ?>">接受订单</a>
                    <?php endif; ?>
                </dd>
                <!-- <dd class="person-dd ">
                    <a href="">货主订单</a>
                </dd>
            
                <dd class="person-dd ">
                    <a href="">车主订单</a>
                </dd>
            
                <dd class="person-dd ">
                    <a href="">库主订单</a>
                </dd> -->
            </div>
    	</dl>
        <!-- <dl>
            <dt class=""><i class="glyphicon glyphicon-jpy" style="font-size: 20px; font-weight: bold;"></i>&nbsp;我的钱包</dt>
            <div class="hideleft" style="display:none;">
                <dd class="person-dd ">
                    <a href="">钱包管理</a>
                </dd>
                <dd class="person-dd ">
                    <a href="">充值记录</a>
                </dd>
                <dd class="person-dd ">
                    <a href="">提现记录</a>
                </dd>
            </div>
        </dl> -->
        <?php if($userres['is_company'] == '1'): ?>
            <dl style="display: none;">
                <dt class=""><i class="glyphicon glyphicon-th-large"></i>&nbsp;托运管理</dt>
                <div class="hideleft">
                    <dd class="person-dd active">
                        <a href="<?php echo url('Entrust/receive_entrust'); ?>">接受托运<i class="glyphicon glyphicon-chevron-right arrow" aria-hidden="true"></i></a>
                    </dd>
                </div>
            </dl>
            <dl>
                <dt class=""><i class="glyphicon glyphicon-th-large"></i>&nbsp;货源管理</dt>
                <div class="hideleft" style="display:none;">
                     <dd class="person-dd">
                        <a href="<?php echo url('Personalcenter/goodsadd'); ?>">发布货源</a>
                    </dd>
                    
                    <dd class=" person-dd ">
                        <a href="<?php echo url('Personalcenter/goodslist_car'); ?>">管理货源</a>
                    </dd>
                </div>
            </dl>
            <dl>
                <dt class=""><i class="glyphicon glyphicon-log-out"></i>&nbsp;车源管理</dt>
               <div class="hideleft" style="display:none;">
                    <dd class="person-dd ">
                        <a href="<?php echo url('Personalcenter/pathadd'); ?>">发布车源</a>
                    </dd>
                     <dd class=" person-dd ">
                        <a href="<?php echo url('Personalcenter/pathlist'); ?>">管理车源</a>
                    </dd>
               </div>
            </dl>
            <dl>
                <dt class=""><i class="glyphicon glyphicon-home"></i>&nbsp;仓库管理</dt>
                <div class="hideleft" style="display:none;">
                    <dd class="person-dd ">
                        <a href="<?php echo url('Personalcenter/warehouseadd'); ?>">发布库源</a>
                    </dd>
                    <dd class="person-dd ">
                        <a href="<?php echo url('Personalcenter/warehouselist'); ?>">我的仓库</a>
                    </dd>
                </div>
            </dl>
        <?php else: if($userres['type'] == '物流公司'): ?>
                <dl>
                    <dt class=""><i class="glyphicon glyphicon-th-large"></i>&nbsp;托运管理</dt>
                    <div class="hideleft">
                        <dd class="person-dd active">
                            <a href="<?php echo url('Entrust/myentrust'); ?>">我的托运<i class="glyphicon glyphicon-chevron-right arrow" aria-hidden="true"></i></a>
                        </dd>
                    </div>
                </dl>
                <dl>
                    <dt class=""><i class="glyphicon glyphicon-th-large"></i>&nbsp;货源管理</dt>
                    <div class="hideleft" style="display:none;">
                         <dd class="person-dd">
                            <a href="<?php echo url('Personalcenter/goodsadd'); ?>">发布货源</a>
                        </dd>
                        
                        <dd class=" person-dd ">
                            <a href="<?php echo url('Personalcenter/goodslist_car'); ?>">管理货源</a>
                        </dd>
                    </div>
                </dl>
                <dl>
                    <dt class=""><i class="glyphicon glyphicon-log-out"></i>&nbsp;车源管理</dt>
                   <div class="hideleft" style="display:none;">
                        <dd class="person-dd ">
                            <a href="<?php echo url('Personalcenter/pathadd'); ?>">发布车源</a>
                        </dd>
                         <dd class=" person-dd ">
                            <a href="<?php echo url('Personalcenter/pathlist'); ?>">管理车源</a>
                        </dd>
                   </div>
                </dl>
                <dl>
                    <dt class=""><i class="glyphicon glyphicon-home"></i>&nbsp;仓库管理</dt>
                    <div class="hideleft" style="display:none;">
                        <dd class="person-dd ">
                            <a href="<?php echo url('Personalcenter/warehouseadd'); ?>">发布库源</a>
                        </dd>
                        <dd class="person-dd ">
                            <a href="<?php echo url('Personalcenter/warehouselist'); ?>">我的仓库</a>
                        </dd>
                    </div>
                </dl>
            <?php elseif($userres['type'] == '车主'): ?>
                <dl>
                    <dt class=""><i class="glyphicon glyphicon-log-out"></i>&nbsp;车源管理</dt>
                    <div class="hideleft" style="display:none;">
                        <dd class="person-dd ">
                            <a href="<?php echo url('Personalcenter/pathadd'); ?>">发布车源</a>
                        </dd>
                         <dd class=" person-dd ">
                            <a href="<?php echo url('Personalcenter/pathlist'); ?>">管理车源</a>
                        </dd>
                   </div>
                </dl>
            <?php elseif($userres['type'] == '库主'): ?>
                <dl>
                    <dt class=""><i class="glyphicon glyphicon-home"></i>&nbsp;仓库管理</dt>
                    <div class="hideleft" style="display:none;">
                        <dd class="person-dd ">
                            <a href="<?php echo url('Personalcenter/warehouseadd'); ?>">发布库源</a>
                        </dd>
                        <dd class="person-dd ">
                            <a href="<?php echo url('Personalcenter/warehouselist'); ?>">我的仓库</a>
                        </dd>
                    </div>
                </dl>
            <?php else: ?>
                <dl>
                    <dt class=""><i class="glyphicon glyphicon-th-large"></i>&nbsp;托运管理</dt>
                    <div class="hideleft">
                        <dd class="person-dd active">
                            <a href="<?php echo url('Entrust/myentrust'); ?>">我的托运<i class="glyphicon glyphicon-chevron-right arrow" aria-hidden="true"></i></a>
                        </dd>
                    </div>
                </dl>
                <dl>
                    <dt class=""><i class="glyphicon glyphicon-th-large"></i>&nbsp;货源管理</dt>
                    <div class="hideleft" style="display:none;">
                         <dd class="person-dd">
                            <a href="<?php echo url('Personalcenter/goodsadd'); ?>">发布货源</a>
                        </dd>
                        
                        <dd class=" person-dd ">
                            <a href="<?php echo url('Personalcenter/goodslist_car'); ?>">管理货源</a>
                        </dd>
                    </div>
                </dl>
            <?php endif; endif; else: endif; ?>     
</div>
        <!-- 左侧结束 -->
       
        <!-- 右侧开始 -->
        <div class="person-right fr mjy-add mj-pro0">
            <div class="mj-adds clearfix mj-addNav">
                 <p class="p1 active">管理车源</p>
            </div>
            <div class="m-infortabBack">
            <div id="m-infonavCont">
                <div class="m-infonavContent2 mj-xlxx">
                    <form action="<?php echo url('Personalcenter/pathlist'); ?>" method="get" class="searchform">
                        <div class="m-inforForm clearfix" style="margin-bottom: 20px;">
                            <div class="clearfix fl m30">
                                <p class="fl">始&nbsp;发&nbsp;地&nbsp;：</p>
                                <div class=" fr ku">
                                    <input name="startsite" id="name" class="xm siteinput" type="text" placeholder="请输入始发地" style="width: 210px;" value="<?php echo !empty($startsite)?$startsite : '';; ?>">
                                    <div class="xiala">
                                        <h1><span>确认</span></h1>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="clearfix fl m30">
                                <p class="fl">目&nbsp;的&nbsp;地：</p>
                                <div class="fr ku1">
                                    <input name="endsite" id="name" class="xm siteinput" type="text" placeholder="请输入目的地" style="width: 210px;" value="<?php echo !empty($endsite)?$endsite : '';; ?>">
                                    <div class="xiala1">
                                        <h1><span>确认</span></h1>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <input type="submit" value="搜索" class="fl u-aNext u-aNext2" style="float: right;" />
                            <div class="clearfix"></div>
                        </div>
                        <div class="m-inforForm clearfix" style="z-index: 1">
                            <div class="clearfix fl m30">
                                <p class="fl">发布时间：</p>
                                <div class="fr">
                                    <input  onblur="mzReg(this)" name="time" id="name" class="xm siteinput ECalendar" type="text" placeholder="请选择发布时间" value="<?php echo !empty($time)?$time : '';; ?>" style="width: 200px;" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd'})">
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                    <div class="czh-Bottom m-formBottom clearfix timeTop f14 cz-active " style="padding-top: 0px;">
                        <table style="min-width:960px;">
                            <tbody>
                                <tr class="ky-ddTab">
                                    <td>路线</td>
                                    <td>承运方名称</td>
                                    <td>常用车型</td>
                                    <td>常用车长</td>
                                    <td>发布时间</td>   
                                    <td>联系电话</td>
                                    <td>审核状态</td>
                                    <td>操作</td>
                                </tr> 
                                <?php if(is_array($pathres) || $pathres instanceof \think\Collection || $pathres instanceof \think\Paginator): $i = 0; $__LIST__ = $pathres;if( count($__LIST__)==0 ) : echo "<p class='nulltext'>暂时没有数据</p>" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>                        
                                <tr class="ky-ddKK ky-ddKK1 odd">
                                    <td class="zc-lastTr " style="width:15%;">
                                        <div class="skin-list1">
                                            <p class="ellipsis " style="text-align: left;" title="<?php echo $vo['startsite']; ?>"><span class="fa fa-map-marker faicon1"></span>始：<?php echo $vo['startsite']; ?></p>
                                            <p class="ellipsis " style="text-align: left;" title="<?php echo $vo['endsite']; ?>"><span class="fa fa-map-marker faicon2"></span>到：<?php echo $vo['endsite']; ?></p>
                                        </div>
                                    </td>
                                    <td class="" style="width:15%;">
                                        <div class="skin-list1">
                                            <div class="czh-posi">
                                                <p class=""><?php echo $vo['linkman']; ?></p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="" style="width:12%;">
                                        <div class="skin-list2">
                                            <p title="<?php echo $vo['vehicle_type']; ?>"><?php echo $vo['vehicle_type']; ?></p>
                                        </div>
                                    </td>
                                    <td class="" style=" width:14%;">
                                        <div class="skin-list2">
                                            <p class="" title="<?php echo $vo['vehicle_length']; ?>">
                                                <?php echo $vo['vehicle_length']; ?>
                                            </p>
                                        </div>
                                    </td>
                                    <td class="" style="width: 10%">
                                        <div class="skin-list1">
                                            <p class="" title="<?php echo $vo['time']; ?>"><?php echo $vo['time']; ?></p>
                                        </div>
                                    </td>
                                    <td class="" style=" width:12%;">
                                        <div class="skin-list1">
                                            <p class="ellipsis"><?php echo $vo['linkphone']; ?></p>
                                        </div>
                                    </td>
                                    <td class="" style="width: 12%">
                                        <div class="skin-list1">
                                            <p class="ellipsis">
                                                <?php if($vo['check_state'] == '1'): ?>
                                                    <p >等待审核</p>
                                                <?php elseif($vo['check_state'] == '2'): ?>
                                                    <p style="color: blue;">审核通过</p>
                                                <?php else: ?>
                                                    <p style="color: red;">审核未通过</p>
                                                <?php endif; ?>
                                            </p>
                                        </div>
                                    </td>
                                    <td class="skin-border" style="width:10%;">
                                        <div class="zc-positon">
                                            <a href="<?php echo url('Personalcenter/path_detail',array('id'=>$vo['id'])); ?>" class="btn1" title="详情" datatype="1"><span class="glyphicon glyphicon-eye-open"></span></a>
                                            <a href="<?php echo url('Personalcenter/path_revise',array('id'=>$vo['id'])); ?>" class="btn1" title="修改" datatype="1"><span class="fa fa-pencil"></a>
                                            <a href="<?php echo url('Personalcenter/path_del',array('id'=>$vo['id'])); ?>" title="删除" onClick="return confirm('确定要删除吗？')" class="btn1" ><span class="fa fa-trash-o"></span></a>
                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach; endif; else: echo "<p class='nulltext'>暂时没有数据</p>" ;endif; ?>
                            </tbody>
                        </table>
                        <style type="text/css">
                            .simple-pagination ul{
                                display: inline-block;
                                vertical-align: middle;
                            }
                        </style>
                        <div class="pages">
                            <div id="paging1" class="page light-theme simple-pagination" style="text-align: center;" >
                                <?php echo $pathres->render(); ?>
                                <div class="pageinput" style="">
                                    <input type="hidden" name="current_page" value="<?php echo $current_page; ?>">
                                    <input type="hidden" name="totalpage" value="<?php echo $totalpage; ?>">
                                    <p><p class="yeshudes">当前第<i><?php echo $current_page; ?></i>页/共<i><?php echo $totalpage; ?></i>页</p>转到&nbsp;<input class="tiaozhuanye" type="text" name="">&nbsp;页&nbsp;<a class="tiaozhuan" href="javascript:;" style="float: none;">确定</a></p>

                                </div>
                            </div>
                        </div> 

                        <!-- <div class="pages">
                            <div id="paging1" class="page light-theme simple-pagination" style="text-align: center;" >
                                <?php echo $pathres->render(); ?>
                            </div>
                        </div> -->
                    </div>     
                </div>
            </div>
        </div>
        </div>
        <!-- 右侧结束 -->
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
    <p><span style="color: #eee">版权所有</span>&nbsp;郑州国际陆港开发建设有限公司 <span style="color: #eee; margin-left: 20px;">备案号：</span>&nbsp;<a style="color: #fff;" target="_blank" href="http://www.miibeian.gov.cn">豫ICP备17007279号</a>
</div>
<div class="kf">
    <a style="outline: none;" href="http://42.228.11.187/chat/index.php?nick=<?php echo $username; ?>" target="_blank">
        <img src="__PUBLIC__/images/helper03.png">
        <p>在线客服</p>
    </a>
</div> 
<script type="text/javascript" src="__PUBLIC__/js/jquery.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/lib/date/WdatePicker.js"></script>
<script src="__PUBLIC__/js/auth.js"></script>
<script src="__PUBLIC__/js/sitepicker.js"></script>
<script src="__PUBLIC__/js/main.js"></script>
<script type="text/javascript">
    $('.nav_wrap').find('li').removeClass('now');
    $('.nav_wrap').children('li').eq(0).addClass('now');
    $('.person-left dl').find('.hideleft').hide();
    $('.person-left dl').eq(4).find('.hideleft').show();
    $('.person-left dl').find('dt').removeClass('active');
    $('.person-left dl').eq(4).find('dt').addClass('active');
    $('.person-left dl').eq(4).find('.hideleft').find('dd').eq(1).addClass('active'); 
    $('.nulltext').parents('.czh-Bottom').find('.ky-ddTab').hide();

    $('.tiaozhuan').click(function(){
        var a=parseInt($('.tiaozhuanye').val());
        var totalpage=parseInt($("input[name='totalpage']").val());
        var startsite=$("input[name='startsite']").val();
        var endsite=$("input[name='endsite']").val();
        var time=$("input[name='time']").val();
        if(a<=0){
            a=1;
        }
        if(a>totalpage){
            a=totalpage;
        }
        $(this).attr('href','/transport/public/index/personalcenter/pathlist.html?startsite='+startsite+'&endsite='+endsite+'&time='+time+'&page='+a);
    })
    var totalpage=parseInt($("input[name='totalpage']").val());
    var current_page=parseInt($("input[name='current_page']").val());
    $('.tiaozhuanye').val(current_page+1);
    if(current_page+1>totalpage){
        $('.tiaozhuanye').val(totalpage);
    }

</script>
</body>
</html>