-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2018 �?12 �?24 �?01:09
-- 服务器版本: 5.5.53
-- PHP 版本: 5.5.38

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `zhongyi`
--

-- --------------------------------------------------------

--
-- 表的结构 `b_area`
--

CREATE TABLE IF NOT EXISTS `b_area` (
  `area_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '自动生成，不可修改',
  `company_id` int(10) NOT NULL COMMENT '公司id',
  `number` varchar(10) NOT NULL COMMENT '区域编码',
  `name` varchar(20) NOT NULL COMMENT '区域名称',
  `parent_number` varchar(20) NOT NULL COMMENT '父区域编码',
  `sort` smallint(10) NOT NULL COMMENT '排序',
  `createtime` int(10) NOT NULL COMMENT '建立时间',
  `comment` varchar(100) DEFAULT NULL COMMENT '备注',
  PRIMARY KEY (`area_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='区域信息表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `b_company_set`
--

CREATE TABLE IF NOT EXISTS `b_company_set` (
  `company_set_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '自动生成，不可修改',
  `company_id` int(10) NOT NULL COMMENT '公司id',
  `bottlepre` varchar(10) NOT NULL COMMENT '钢瓶前缀',
  `switches` varchar(30) NOT NULL DEFAULT 'OM50' COMMENT '交换机型号',
  `grap_model` smallint(10) NOT NULL DEFAULT '0' COMMENT '抢单模式：0，不抢单；1，部门内抢单；2，全公司抢单',
  `wechat_tips` varchar(30) NOT NULL COMMENT '微信订气提示语',
  `print_tips` varchar(30) NOT NULL COMMENT '打印小票提示语',
  `postion_rule` smallint(10) NOT NULL DEFAULT '0' COMMENT '钢瓶定位规则：0，根据手机实时定位；1，根据客户地址定位',
  `dispatch` smallint(10) NOT NULL DEFAULT '0' COMMENT '座席员选择配送工后就完成派工操作，不需要店长再次确认：0，需要；1，不需要',
  `bottle_manage` smallint(10) NOT NULL DEFAULT '0' COMMENT '是否启用钢瓶管理：0,不启用；1，启用',
  `changeprice` smallint(10) NOT NULL DEFAULT '0' COMMENT '接单是否允许用户修改价格：0，不允许；1，允许',
  `newprice` smallint(10) NOT NULL DEFAULT '0' COMMENT '产品价格是否以最新成交价为准：0，是；1，否',
  `wcheck` smallint(10) NOT NULL DEFAULT '0' COMMENT '微信用户是否需要审核：0，不需要；1，需要',
  `comment` varchar(100) DEFAULT NULL COMMENT '备注',
  PRIMARY KEY (`company_set_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='公司参数设置表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `b_fill_record`
--

CREATE TABLE IF NOT EXISTS `b_fill_record` (
  `fill_record_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '自动生成，不可修改',
  `company_id` int(10) DEFAULT NULL COMMENT '公司id',
  `company_number` varchar(10) DEFAULT NULL COMMENT '产权单位编码',
  `company_name` varchar(20) DEFAULT NULL COMMENT '产权单位名称',
  `qr_code` varchar(100) NOT NULL COMMENT '气瓶条码',
  `chipid` varchar(16) NOT NULL COMMENT '电子标签号',
  `gangpingcode` varchar(16) NOT NULL COMMENT '气瓶钢印号',
  `weight` varchar(16) NOT NULL COMMENT '自重KG',
  `bottle_type_name` varchar(16) NOT NULL COMMENT '钢瓶规格',
  `fill_start` int(10) NOT NULL COMMENT '充装开始时间',
  `fill_end` int(10) NOT NULL COMMENT '充装完成时间',
  `real_bottle_weight` float(5,2) NOT NULL COMMENT '实际瓶重',
  `fill_weight` float(5,2) NOT NULL COMMENT '充装重量',
  `fill_total_weight` float(5,2) NOT NULL COMMENT '充装后重量',
  `fill_station` varchar(10) NOT NULL COMMENT '充装站号',
  `fill_scales_num` varchar(10) NOT NULL COMMENT '充装秤号',
  `fill_worker` varchar(5) NOT NULL COMMENT '充装工姓名',
  `fill_worker_num` varchar(10) NOT NULL COMMENT '充装工编号',
  `bottle_status` varchar(10) NOT NULL DEFAULT '有档案' COMMENT '气瓶状态（有档案，无档案）',
  `comment` varchar(100) DEFAULT NULL COMMENT '备注',
  PRIMARY KEY (`fill_record_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='气瓶充装记录表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `tr_admin`
--

CREATE TABLE IF NOT EXISTS `tr_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '管理员ID',
  `adminid` varchar(20) NOT NULL COMMENT '工号',
  `adminname` varchar(100) NOT NULL COMMENT '管理员姓名',
  `role` int(10) NOT NULL COMMENT '角色',
  `adminpassword` varchar(255) NOT NULL COMMENT '管理员密码',
  `adminphone` varchar(100) NOT NULL COMMENT '手机号码',
  `adminmail` varchar(100) NOT NULL COMMENT '邮箱',
  `time` int(20) NOT NULL COMMENT '添加时间',
  `upname` varchar(225) NOT NULL COMMENT '添加人',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=39 ;

--
-- 转存表中的数据 `tr_admin`
--

INSERT INTO `tr_admin` (`id`, `adminid`, `adminname`, `role`, `adminpassword`, `adminphone`, `adminmail`, `time`, `upname`) VALUES
(4, 'admin', 'admin', 1, '21232f297a57a5a743894a0e4a801fc3', '15611111111', '123@qq.com', 1500953409, ''),
(38, '', '111', 15, '698d51a19d8a121ce581499d7b701668', '15538191283', '', 1539392882, 'admin'),
(37, '', '强朋朋', 14, 'e10adc3949ba59abbe56e057f20f883e', '15538191283', '', 1524725322, 'admin');

-- --------------------------------------------------------

--
-- 表的结构 `tr_article`
--

CREATE TABLE IF NOT EXISTS `tr_article` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(225) NOT NULL COMMENT '名字',
  `content` mediumtext NOT NULL COMMENT '内容',
  `statue` varchar(225) NOT NULL COMMENT '是否显示',
  `user` varchar(225) NOT NULL COMMENT '发布者',
  `time` datetime NOT NULL COMMENT '发布时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='中医小百科' AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `tr_article`
--

INSERT INTO `tr_article` (`id`, `name`, `content`, `statue`, `user`, `time`) VALUES
(3, '12312312', '123123123', '是', 'admin', '2018-05-07 10:43:14'),
(2, '发烧经方', '<ol class="exp-conent-orderlist" style="color:#333333;font-family:&quot;font-size:16px;text-align:justify;background-color:#FFFFFF;">\r\n	<li class="exp-content-list list-item-1">\r\n		<div class="content-list-text">\r\n			<p>\r\n				首先，对于发烧，我们要引起足够的重视。之所以会发烧，是因为身体里有病灶，发烧是身体的一种自我保护模式，通过提升自己的温度，使酶达到最适温度，从而提高酶的活性。这样就能够更好的杀菌。所以，如果发烧了，不要只想着退烧，要从跟不上解决病灶。如果一发烧了你就用各种方法退烧，那身体自身就无法去杀灭病菌了。\r\n			</p>\r\n		</div>\r\n	</li>\r\n	<li class="exp-content-list list-item-2">\r\n		<div class="list-icon" style="color:#EEFFEE;text-align:center;background:url(&quot;">\r\n			2\r\n		</div>\r\n		<div class="content-list-text">\r\n			<p>\r\n				发烧，一般是由炎症引起的，此时在吃药的时候一定要加上一些消炎药。比如阿莫西林，罗红霉素等等。\r\n			</p>\r\n		</div>\r\n	</li>\r\n	<li class="exp-content-list list-item-3">\r\n		<div class="list-icon" style="color:#EEFFEE;text-align:center;background:url(&quot;">\r\n			3\r\n		</div>\r\n		<div class="content-list-text">\r\n			<p>\r\n				发烧最好的办法就是多喝热水，因为喝热水不但能够溶解毒素，使毒素跟随尿液排出体外，还能够提升自身酶的活性，更好的杀毒。另外，喝完热水一出汗，很容易就退烧了。\r\n			</p>\r\n		</div>\r\n	</li>\r\n	<li class="exp-content-list list-item-4">\r\n		<div class="list-icon" style="color:#EEFFEE;text-align:center;background:url(&quot;">\r\n			4\r\n		</div>\r\n		<div class="content-list-text">\r\n			<p>\r\n				有时吃完退烧药会出汗，这时最好别出去，躺在被窝里睡一觉，捂点汗出来就能退烧。\r\n			</p>\r\n		</div>\r\n	</li>\r\n	<li class="exp-content-list list-item-5">\r\n		<div class="list-icon" style="color:#EEFFEE;text-align:center;background:url(&quot;">\r\n			5\r\n		</div>\r\n		<div class="content-list-text">\r\n			<p>\r\n				如果吃药不见好转，可以去医院打一针，不过最好不要输液，因为输液对身体的损害十分巨大，在国外，输一次液相当于做一次手术。吃药也要严格按照医生说的去吃，不要自己随便吃，否则吃出副作用就更不好了。\r\n			</p>\r\n		</div>\r\n	</li>\r\n	<li class="exp-content-list list-item-6">\r\n		<div class="list-icon" style="color:#EEFFEE;text-align:center;background:url(&quot;">\r\n			6\r\n		</div>\r\n		<div class="content-list-text">\r\n			<p>\r\n				平时多吃些水果，水果里富含丰富的维生素，能够有效增强抵抗力，这样发烧时能够尽快退烧。注意多锻炼，增强自身体质，这样在面对病菌时才可以不容易生病。\r\n			</p>\r\n		</div>\r\n	</li>\r\n	<li class="exp-content-list list-item-7">\r\n		<div class="list-icon" style="color:#EEFFEE;text-align:center;background:url(&quot;">\r\n			7\r\n		</div>\r\n		<div class="content-list-text">\r\n			<p>\r\n				以上是自己总结多年来发烧时的经验，希望对各位有所帮助。\r\n			</p>\r\n		</div>\r\n	</li>\r\n</ol>', '是', 'admin', '2018-05-07 10:38:32');

-- --------------------------------------------------------

--
-- 表的结构 `tr_bodytest`
--

CREATE TABLE IF NOT EXISTS `tr_bodytest` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(225) NOT NULL COMMENT '名字',
  `sex` varchar(225) NOT NULL COMMENT '性别',
  `age` varchar(225) NOT NULL COMMENT '年龄',
  `facecolor` varchar(225) NOT NULL COMMENT '面部晦暗',
  `eye` varchar(225) NOT NULL COMMENT '黑眼圈',
  `mouthcolor` varchar(225) NOT NULL COMMENT '口唇颜色',
  `face` varchar(225) NOT NULL COMMENT '皮肤干嘛？',
  `duzi` varchar(225) NOT NULL COMMENT '腹部',
  `etou` varchar(225) NOT NULL COMMENT '额头',
  `upeye` varchar(225) NOT NULL COMMENT '上眼脸',
  `noze` varchar(225) NOT NULL COMMENT '鼻子',
  `skin` varchar(225) NOT NULL COMMENT '皮肤',
  `skincolor` varchar(225) NOT NULL COMMENT '皮肤抓红',
  `energy` varchar(225) NOT NULL COMMENT '精力充沛',
  `tired` varchar(225) NOT NULL COMMENT '疲乏',
  `nervous` varchar(225) NOT NULL COMMENT '紧张',
  `speak` varchar(225) NOT NULL COMMENT '说话声音',
  `kouku` varchar(225) NOT NULL COMMENT '口苦',
  `drink` varchar(225) NOT NULL COMMENT '喝水',
  `xiongmen` varchar(225) NOT NULL COMMENT '胸闷',
  `body` varchar(225) NOT NULL COMMENT '身体沉重',
  `hand` varchar(225) NOT NULL COMMENT '手脚心',
  `guomin` varchar(225) NOT NULL COMMENT '过敏',
  `score` varchar(225) NOT NULL COMMENT '分数',
  `result` varchar(225) NOT NULL COMMENT '测试结果',
  `time` datetime NOT NULL COMMENT '测试时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='用户体测表' AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `tr_bodytest`
--

INSERT INTO `tr_bodytest` (`id`, `name`, `sex`, `age`, `facecolor`, `eye`, `mouthcolor`, `face`, `duzi`, `etou`, `upeye`, `noze`, `skin`, `skincolor`, `energy`, `tired`, `nervous`, `speak`, `kouku`, `drink`, `xiongmen`, `body`, `hand`, `guomin`, `score`, `result`, `time`) VALUES
(10, '周雪迎', '女', '35岁~45岁', '4', '4', '5', '4', '3', '4', '3', '4', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '91', '1', '2018-05-02 16:19:23'),
(9, '周雪迎', '女', '28岁~35岁', '3', '2', '2', '3', '4', '4', '2', '3', '3', '2', '2', '3', '3', '2', '3', '3', '2', '1', '4', '3', '54', '10', '2018-05-02 16:01:32'),
(8, '周雪迎', '女', '28岁以下', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '20', '6', '2018-05-02 15:58:07');

-- --------------------------------------------------------

--
-- 表的结构 `tr_book`
--

CREATE TABLE IF NOT EXISTS `tr_book` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(225) NOT NULL COMMENT '图片',
  `name` varchar(225) NOT NULL COMMENT '名字',
  `content` mediumtext NOT NULL COMMENT '内容',
  `statue` varchar(225) NOT NULL COMMENT '是否显示',
  `user` varchar(225) NOT NULL COMMENT '发布人',
  `time` datetime NOT NULL COMMENT '发布时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `tr_book`
--

INSERT INTO `tr_book` (`id`, `image`, `name`, `content`, `statue`, `user`, `time`) VALUES
(1, '/uploads/20180423\\7e61e1356325ec37d0c3fd3615b9d648.jpg', '四库全书', '<p align="center" style="text-align:center;color:#484848;font-family:" font-size:16px;background-color:#e6e6fa;"=""><strong><strong><img src="https://gss3.bdstatic.com/-Po3dSag_xI4khGkpoWK1HF6hhy/baike/s%3D220/sign=aaa55236b319ebc4c478719bb227cf79/10dfa9ec8a136327b144af60918fa0ec08fac73c.jpg" alt="影印版" /></strong><br />\r\n</strong>\r\n	</p>\r\n<p align="center" style="text-align: left; color: rgb(72, 72, 72);" font-size:16px;background-color:#e6e6fa;"=""> <strong>简介<strong> <strong><span style="font-family:宋体;color:#D9D9D9;">-----------------------------------------------------------</span></strong></strong></strong>\r\n</p>\r\n<p align="center" style="text-align:center;color:#484848;font-family:" font-size:16px;background-color:#e6e6fa;"=""><br />\r\n	</p>\r\n<p style="color:#484848;font-family:" font-size:16px;background-color:#e6e6fa;"="">\r\n	&emsp;&emsp;《四库全书》全称《钦定四库全书》 。是在乾隆皇帝的主持下，由纪昀等360多位高官、学者编撰，3800多人抄写，耗时十三年编成的丛书，分经、史、子、集四部，故名四库。共有3500多册书，7.9万卷，3.6万册，约8亿字。当年，乾隆皇帝命人手抄了7部《四库全书》，下令分别藏于全国各地。先抄好的四部分贮于紫禁城文渊阁、辽宁沈阳文溯阁、圆明园文源阁、河北承德文津阁珍藏，这就是所谓的“北四阁”。后抄好的三部分贮扬州文汇阁、镇江文宗阁和杭州文澜阁珍藏，这就是所谓的“南三阁”。\r\n</p>\r\n<p style="color:#484848;font-family:" font-size:16px;background-color:#e6e6fa;"=""> <span><strong>主要内容<span><strong> <strong><span style="font-family:宋体;color:#D9D9D9;">------------------------------------------------------------</span></strong></strong></span></strong></span> \r\n	</p>\r\n<p style="color:#484848;font-family:" font-size:16px;background-color:#e6e6fa;"="">\r\n	&emsp;&emsp;《四库全书》的内容是十分丰富的。按照内容分类分经、史、子、集四部分，部下有类，类下有属。全书共4部44类66属。 经部收录儒家“十三经”及相关著作，包括易类、书类、诗类、礼类、春秋类、孝经类、五经总义类、四书类、乐类、小学类等10个大类，其中礼类又分周礼、仪礼、礼记、三礼总义、通礼、杂礼书6属，小学类又分训诂、字书、韵书3属。 史部收录史书，包括正史类、编年类、纪事本末类、杂史类、别史类、诏令奏议类、传记类、史钞类、载记类、时令类、地理类、职官类、政书类、目录类、史评类等15个大类，其中诏令奏议类又分诏令、奏议2属，传记类又分圣贤、名人、总录、杂录、别录5属，地理类又分宫殿疏、总志、都会郡县、河渠、边防、山川、古迹、杂记、游记、外记10属，职官类又分官制、官箴2属，政书类又分通制、典礼、邦计、军政、法令、考工6属，目录类又分经籍、金石2属。 子部收录诸子百家著作和类书，包括儒家类、兵家类、法家类、农家类、医家类、天文算法类、术数类、艺术类、谱录类、杂家类、类书类、小说家类、释家类、道家类等14大类，其中天文算法类又分推步、算书2属，术数类又分数学、占侯、相宅相墓、占卜、命书相书、阴阳五行、杂技术7属，艺术类又分书画、琴谱、篆刻、杂技4属，谱录类又分器物、食谱、草木鸟兽虫鱼3属，杂家类又分杂学、杂考、杂说、杂品、杂纂、杂编6属，小说家类又分杂事、异闻、琐语3属。 集部收录诗文词总集和专集等，包括楚辞、别集、总集、诗文评、词曲等5个大类，其中词曲类又分词集、词选、词话、词谱词韵、南北曲5属。除了章回小说、戏剧著作之外，以上门类<span style="color:#484848;font-family:" font-size:16px;background-color:#e6e6fa;"="">基本上包括了社会上流布的各种图书。就著者而言，包括妇女，僧人、道家、宦官、军人、帝王、外国人等在内的各类人物的著作。</span> \r\n</p>', '是', 'admin', '2018-04-23 15:08:53');

-- --------------------------------------------------------

--
-- 表的结构 `tr_difficult`
--

CREATE TABLE IF NOT EXISTS `tr_difficult` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `typename` varchar(225) NOT NULL COMMENT '分类名称',
  `parent_id` int(11) DEFAULT NULL COMMENT '上级分类id',
  `statue` varchar(225) NOT NULL,
  `content` mediumtext NOT NULL,
  `pri_level` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- 转存表中的数据 `tr_difficult`
--

INSERT INTO `tr_difficult` (`id`, `typename`, `parent_id`, `statue`, `content`, `pri_level`) VALUES
(1, '消化系统疾病', 0, '是', '', NULL),
(2, '肺部疾病', 0, '是', '', NULL),
(3, '骨与关节病', 0, '是', '', NULL),
(4, '皮肤病', 0, '是', '', NULL),
(5, '心血管疾病', 0, '是', '', NULL),
(6, '眼科疾病', 0, '是', '', NULL),
(7, '神经精神疾病', 0, '是', '', NULL),
(8, '内分泌疾病', 0, '是', '', NULL),
(9, '肝病', 0, '是', '', NULL),
(10, '癌症肿瘤', 0, '是', '', NULL),
(11, '肝癌', 10, '是', '', NULL),
(12, '胃癌', 10, '是', '<p style="text-align:center;">\r\n	<span style="font-size:32px;">胃癌</span>\r\n</p>\r\n<p style="text-align:center;">\r\n	<img src="https://gss3.bdstatic.com/-Po3dSag_xI4khGkpoWK1HF6hhy/baike/h%3D94/sign=1732d37334fa828bce2391e7fd1f1a07/8ad4b31c8701a18b2cda4539992f07082838fe97.jpg" alt="专家图片" />\r\n</p>\r\n<p style="text-align:left;">\r\n	&nbsp;&nbsp;&nbsp;<span style="font-size:16px;">&nbsp;</span><a target="_blank" href="https://baike.baidu.com/item/%E8%83%83%E7%99%8C"><span style="font-size:16px;">胃癌</span></a><span style="color:#333333;font-family:arial, tahoma, &quot;font-size:16px;background-color:#FFFFFF;">（gastric carcinoma）是起源于胃黏膜上皮的恶性肿瘤，在我国各种恶性肿瘤中发病率居首位，胃癌发病有明显的地域性差别，在我国的西北与东部沿海地区胃癌发病率比南方地区明显为高。好发年龄在50岁以上，男女发病率之比为2：1。由于饮食结构的改变、工作压力增大以及幽门螺杆菌的感染等原因，使得胃癌呈现年轻化倾向。胃癌可发生于胃的任何部位，其中半数以上发生于胃窦部，胃大弯、胃小弯及前后壁均可受累。绝大多数胃癌属于腺癌，早期无明显症状，或出现上腹不适、嗳气等非特异性症状，常与胃炎、胃溃疡等胃慢性疾病症状相似，易被忽略，因此，目前我国胃癌的早期诊断率仍较低。胃癌的预后与胃癌的病理分期、部位、组织类型、生物学行为以及治疗措施有关。</span><span style="font-size:16px;"></span>\r\n</p>\r\n<p style="text-align:left;">\r\n	<span style="font-size:16px;"><span style="font-size:24px;">病因</span></span>\r\n</p>\r\n<p style="text-align:left;">\r\n	<span style="font-size:16px;"><span style="font-size:24px;"><span style="font-size:16px;">\r\n	<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n		<span style="font-weight:700;">1.</span><span style="font-weight:700;">地域环境及饮食生活因素</span>\r\n	</div>\r\n	<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n		&nbsp;&nbsp;&nbsp;&nbsp;胃癌发病有明显的地域性差别，在我国的西北与东部沿海地区胃癌发病率比南方地区明显为高。长期食用熏烤、盐腌食品的人群中胃远端癌发病率高，与食品中亚硝酸盐、真菌毒素、多环芳烃化合物等致癌物或前致癌物含量高有关；吸烟者的胃癌发病危险较不吸烟者高50%。\r\n	</div>\r\n	<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n		<span style="font-weight:700;">2.</span><span style="font-weight:700;">幽门螺杆菌(</span>Hp<span style="font-weight:700;">)</span><span style="font-weight:700;">感染</span>\r\n	</div>\r\n	<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n		&nbsp;&nbsp;&nbsp;&nbsp;我国胃癌高发区成人Hp感染率在60%以上。幽门螺杆菌能促使硝酸盐转化成亚硝酸盐及亚硝胺而致癌；Hp感染引起胃黏膜慢性炎症加上环境致病因素加速黏膜上皮细胞的过度增殖，导致畸变致癌；幽门螺杆菌的毒性产物CagA、VacA可能具有促癌作用，胃癌患者中抗CagA抗体检出率较一般人群明显为高。\r\n	</div>\r\n	<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n		<span style="font-weight:700;">3.</span><span style="font-weight:700;">癌前病变</span>\r\n	</div>\r\n	<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n		&nbsp;&nbsp;&nbsp;&nbsp;胃疾病包括胃息肉、慢性萎缩性胃炎及胃部分切除后的残胃，这些病变都可能伴有不同程度的慢性炎症过程、胃黏膜肠上皮化生或非典型增生，有可能转变为癌。癌前病变系指容易发生癌变的胃黏膜病理组织学改变，是从良性上皮组织转变成癌过程中的交界性病理变化。胃黏膜上皮的异型增生属于癌前病变，根据细胞的异型程度，可分为轻、中、重三度，重度异型增生与分化较好的早期胃癌有时很难区分。\r\n	</div>\r\n	<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n		<span style="font-weight:700;">4.</span><span style="font-weight:700;">遗传和基因</span>\r\n	</div>\r\n	<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n		&nbsp;&nbsp;&nbsp;&nbsp;遗传与分子生物学研究表明，胃癌患者有血缘关系的亲属其胃癌发病率较对照组高4倍。胃癌的癌变是一个多因素、多步骤、多阶段发展过程，涉及癌基因、抑癌基因、凋亡相关基因与转移相关基因等的改变，而基因改变的形式也是多种多样的。\r\n	</div>\r\n</span></span></span>\r\n</p>', NULL),
(13, '肝硬化', 9, '是', '', NULL),
(14, '脂肪肝', 9, '是', '', NULL);

-- --------------------------------------------------------

--
-- 表的结构 `tr_doctor`
--

CREATE TABLE IF NOT EXISTS `tr_doctor` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(225) NOT NULL COMMENT '名医名称',
  `image` varchar(225) NOT NULL COMMENT '名医图片',
  `content` mediumtext NOT NULL COMMENT '名医简介',
  `statue` varchar(225) NOT NULL COMMENT '是否显示',
  `user` varchar(225) NOT NULL COMMENT '发布者',
  `time` datetime NOT NULL COMMENT '发布时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='历代名医表' AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `tr_doctor`
--

INSERT INTO `tr_doctor` (`id`, `name`, `image`, `content`, `statue`, `user`, `time`) VALUES
(3, '李时珍', '/uploads/20180423\\04d5925ad7d04a45edb5955a9ccde721.jpg', '<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	李时珍（1518—1593），字东璧，晚年自号濒湖山人，湖北蕲春县<a target="_blank" href="https://baike.baidu.com/item/%E8%95%B2%E5%B7%9E%E9%95%87">蕲州镇</a>东长街之<a target="_blank" href="https://baike.baidu.com/item/%E7%93%A6%E5%B1%91%E5%9D%9D">瓦屑坝</a>（今博士街）人，明代著名医药学家。后为楚王府奉祠正、皇家太医院判，去世后明朝廷敕封为“<a target="_blank" href="https://baike.baidu.com/item/%E6%96%87%E6%9E%97%E9%83%8E">文林郎</a>”。<span class="sup--normal" style="font-size:12px;line-height:0;vertical-align:baseline;color:#3366CC;">&nbsp;[1]</span><a name="ref_[1]_11090352"></a>&nbsp;\r\n</div>\r\n<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	李时珍自1565年起，先后到<a target="_blank" href="https://baike.baidu.com/item/%E6%AD%A6%E5%BD%93%E5%B1%B1/84549">武当山</a>、庐山、<a target="_blank" href="https://baike.baidu.com/item/%E8%8C%85%E5%B1%B1/1327">茅山</a>、牛首山及湖广、安徽、河南、河北等地收集药物标本和处方，并拜渔人、樵夫、农民、车夫、药工、捕蛇者为师，参考历代医药等方面书籍925种，考古证今、穷究物理”，记录上千万字札记，弄清许多疑难问题，历经27个寒暑，三易其稿，于明万历十八年（1590年）完成了192万字的巨著《<a target="_blank" href="https://baike.baidu.com/item/%E6%9C%AC%E8%8D%89%E7%BA%B2%E7%9B%AE/15342">本草纲目</a>》，此外对脉学及奇经八脉也有研究。著述有《<a target="_blank" href="https://baike.baidu.com/item/%E5%A5%87%E7%BB%8F%E5%85%AB%E8%84%89%E8%80%83">奇经八脉考</a>》《<a target="_blank" href="https://baike.baidu.com/item/%E6%BF%92%E6%B9%96%E8%84%89%E5%AD%A6">濒湖脉学</a>》等多种。<span class="sup--normal" style="font-size:12px;line-height:0;vertical-align:baseline;color:#3366CC;">&nbsp;[2-3]</span><a name="ref_[2-3]_11090352"></a>&nbsp;&nbsp;被后世尊为&nbsp;<span style="font-weight:700;">“<a target="_blank" href="https://baike.baidu.com/item/%E8%8D%AF%E5%9C%A3">药圣</a>”</span>\r\n</div>\r\n<p style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	1982年，其墓地<a target="_blank" href="https://baike.baidu.com/item/%E6%9D%8E%E6%97%B6%E7%8F%8D%E9%99%B5%E5%9B%AD">李时珍陵园</a>（李时珍墓）被国务院列为第二批“<a target="_blank" href="https://baike.baidu.com/item/%E5%85%A8%E5%9B%BD%E9%87%8D%E7%82%B9%E6%96%87%E7%89%A9%E4%BF%9D%E6%8A%A4%E5%8D%95%E4%BD%8D">全国重点文物保护单位</a>”。\r\n</p>\r\n<p style="text-align:center;font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	<img src="https://gss0.bdstatic.com/94o3dSag_xI4khGkpoWK1HF6hhy/baike/w%3D268%3Bg%3D0/sign=55971858b8fb43161a1f7d7c189f211e/7e3e6709c93d70cf533dd29ef2dcd100bba12b59.jpg" />\r\n</p>\r\n<p style="text-align:left;font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n		李时珍，<a target="_blank" href="https://baike.baidu.com/item/%E6%98%8E%E6%AD%A6%E5%AE%97">明武宗</a>正德十三年农历五月二十六日（1518年7月3日）生于湖北蕲春县<a target="_blank" href="https://baike.baidu.com/item/%E8%95%B2%E5%B7%9E%E9%95%87">蕲州镇</a>东长街之<a target="_blank" href="https://baike.baidu.com/item/%E7%93%A6%E5%B1%91%E5%9D%9D">瓦屑坝</a>。\r\n	</div>\r\n	<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n		其祖父是草药医生，父亲<a target="_blank" href="https://baike.baidu.com/item/%E6%9D%8E%E8%A8%80%E9%97%BB">李言闻</a>是当时名医，曾任太医院例目。当时民间医生地位低下，生活艰苦，其父不愿李时珍再学医药。李时珍14岁时随父到<a target="_blank" href="https://baike.baidu.com/item/%E9%BB%84%E5%B7%9E%E5%BA%9C">黄州府</a>应试，中秀才而归，李时珍出身于医生世家，自幼热爱医学，并不热衷于科举，其后曾三次赴武昌应试，均不第，故决心弃儒学医，钻研医学。23岁随其父学医，医名日盛。\r\n	</div>\r\n</p>', '是', 'admin', '2018-04-23 14:23:37'),
(5, '华佗', '/uploads/20180423\\f4f5d2768ccf8d001ea08251e8d2e635.jpg', '<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	华佗<span class="sup--normal" style="font-size:12px;line-height:0;vertical-align:baseline;color:#3366CC;">&nbsp;[1]</span><a name="ref_[1]_5834000"></a>&nbsp;&nbsp;（约公元145年－公元208年），字元化，一名旉，<a target="_blank" href="https://baike.baidu.com/item/%E6%B2%9B%E5%9B%BD">沛国</a><a target="_blank" href="https://baike.baidu.com/item/%E8%B0%AF%E5%8E%BF">谯县</a>人，<a target="_blank" href="https://baike.baidu.com/item/%E4%B8%9C%E6%B1%89">东汉</a>末年著名的医学家。\r\n</div>\r\n<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	华佗与<a target="_blank" href="https://baike.baidu.com/item/%E8%91%A3%E5%A5%89">董奉</a>、<a target="_blank" href="https://baike.baidu.com/item/%E5%BC%A0%E4%BB%B2%E6%99%AF">张仲景</a>并称为“<a target="_blank" href="https://baike.baidu.com/item/%E5%BB%BA%E5%AE%89%E4%B8%89%E7%A5%9E%E5%8C%BB">建安三神医</a>”。少时曾在外<a target="_blank" href="https://baike.baidu.com/item/%E6%B8%B8%E5%AD%A6">游学</a>，行医足迹遍及<a target="_blank" href="https://baike.baidu.com/item/%E5%AE%89%E5%BE%BD">安徽</a>、<a target="_blank" href="https://baike.baidu.com/item/%E6%B2%B3%E5%8D%97">河南</a>、<a target="_blank" href="https://baike.baidu.com/item/%E5%B1%B1%E4%B8%9C">山东</a>、<a target="_blank" href="https://baike.baidu.com/item/%E6%B1%9F%E8%8B%8F">江苏</a>等地，钻研医术而不求仕途。他医术全面，尤其擅长外科，精于手术。并精通内、妇、儿、针灸各科。<span class="sup--normal" style="font-size:12px;line-height:0;vertical-align:baseline;color:#3366CC;">&nbsp;[2-4]</span><a name="ref_[2-4]_5834000"></a>&nbsp;&nbsp;晚年因遭<a target="_blank" href="https://baike.baidu.com/item/%E6%9B%B9%E6%93%8D/6772">曹操</a>怀疑，<a target="_blank" href="https://baike.baidu.com/item/%E4%B8%8B%E7%8B%B1">下狱</a>被拷问致死。\r\n</div>\r\n<p style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	华佗被后人称为“外科圣手”<span class="sup--normal" style="font-size:12px;line-height:0;vertical-align:baseline;color:#3366CC;">&nbsp;[5]</span><a name="ref_[5]_5834000"></a>&nbsp;&nbsp;、“外科鼻祖”。被后人多用<a target="_blank" href="https://baike.baidu.com/item/%E7%A5%9E%E5%8C%BB%E5%8D%8E%E4%BD%97/2048">神医华佗</a>称呼他，又以“华佗再世”、“元化重生”称誉有杰出医术的医师。\r\n</p>\r\n<p style="text-align:center;font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	<img src="https://gss3.bdstatic.com/-Po3dSag_xI4khGkpoWK1HF6hhy/baike/w%3D268%3Bg%3D0/sign=2e2ea9fe78899e51788e3d127a9cbe0e/902397dda144ad344256fd84d3a20cf430ad85c3.jpg" />\r\n</p>\r\n<p style="text-align:left;font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	<span style="color:#333333;font-family:arial, 宋体, sans-serif;font-size:14px;background-color:#FFFFFF;">华佗，字元化，沛国谯(今安徽省</span><a target="_blank" href="https://baike.baidu.com/item/%E4%BA%B3%E5%B7%9E%E5%B8%82">亳州市</a><span style="color:#333333;font-family:arial, 宋体, sans-serif;font-size:14px;background-color:#FFFFFF;">)人。据考证，他约生于汉永嘉元年(公元145年)，卒于建安十三年(公元208年)。三国著名医学家。少时曾在外游学，钻研医术而不求仕途，行医足迹遍及安徽、山东、河南、江苏等地。华佗一生行医各地，声誉颇著，在医学上有多方面的成就。他精通内、外、妇、儿、针灸各科，对外科尤为擅长。后因不服曹操征召被杀，所著医书已佚。今亳州市有“华佗庵”等遗迹。</span>\r\n</p>', '是', 'admin', '2018-04-23 14:28:35'),
(6, '孙思邈', '/uploads/20180423\\34f9d244f5956a400704ef92d1477c72.jpg', '<p style="text-align:left;font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	<br />\r\n</p>\r\n<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	孙思邈（541年—682年），京兆华原（今<a target="_blank" href="https://baike.baidu.com/item/%E9%99%95%E8%A5%BF%E7%9C%81">陕西省</a><a target="_blank" href="https://baike.baidu.com/item/%E9%93%9C%E5%B7%9D%E5%B8%82">铜川市</a><a target="_blank" href="https://baike.baidu.com/item/%E8%80%80%E5%B7%9E%E5%8C%BA">耀州区</a>）人，唐代医药学家、道士，被后人尊称为“<a target="_blank" href="https://baike.baidu.com/item/%E8%8D%AF%E7%8E%8B">药王</a>”。\r\n</div>\r\n<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	西魏<a target="_blank" href="https://baike.baidu.com/item/%E5%A4%A7%E7%BB%9F/3816419">大统</a>七年（541年），孙思邈出生于一个贫穷农民的家庭<span class="sup--normal" style="font-size:12px;line-height:0;vertical-align:baseline;color:#3366CC;"> [1-8]</span><a name="ref_[1-8]_16716338"></a> 。他从小就聪明过人，长大后开始爱好道家老庄学说，隋开皇元年（581年），见国事多端，孙思邈隐居陕西<a target="_blank" href="https://baike.baidu.com/item/%E7%BB%88%E5%8D%97%E5%B1%B1/1564">终南山</a>中，并渐渐获得了很高的声名。\r\n</div>\r\n<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	孙思邈十分重视民间的医疗经验，不断积累走访，及时记录下来，终于完成了他的著作《<a target="_blank" href="https://baike.baidu.com/item/%E5%8D%83%E9%87%91%E8%A6%81%E6%96%B9">千金要方</a>》。<a target="_blank" href="https://baike.baidu.com/item/%E5%94%90%E6%9C%9D/53699">唐朝</a>建立后，孙思邈接受朝廷的邀请，与政府合作开展医学活动。唐高宗<a target="_blank" href="https://baike.baidu.com/item/%E6%98%BE%E5%BA%86">显庆</a>四年（659年），完成了世界上第一部国家药典《唐新本草》。<span class="sup--normal" style="font-size:12px;line-height:0;vertical-align:baseline;color:#3366CC;"> [9]</span><a name="ref_[9]_16716338"></a> \r\n</div>\r\n<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	唐高宗<a target="_blank" href="https://baike.baidu.com/item/%E4%B8%8A%E5%85%83/13676710">上元</a>元年（674年），孙思邈年高有病，恳请返回故里。<a target="_blank" href="https://baike.baidu.com/item/%E6%B0%B8%E6%B7%B3">永淳</a>元年（682年），与世长辞，享年142岁。\r\n</div>\r\n<p>\r\n	<br />\r\n</p>\r\n<p style="text-align:center;font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	<img src="https://gss0.bdstatic.com/94o3dSag_xI4khGkpoWK1HF6hhy/baike/w%3D268%3Bg%3D0/sign=5726b913a3ec8a13141a50e6cf38f6b2/32fa828ba61ea8d3fd15e9f89d0a304e251f5812.jpg" /> \r\n</p>\r\n<p style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	孙思邈生于<a target="_blank" href="https://baike.baidu.com/item/%E8%A5%BF%E9%AD%8F">西魏</a>大统七年（541年），自谓“幼遭风冷，屡造医门，汤药之资，罄尽家产”，孙思邈幼年嗜学如渴，知识广博，只是后来身患疾病，经常请医生治疗，花费了很多家财，于是，他便立志从医。<span class="sup--normal" style="font-size:12px;line-height:0;vertical-align:baseline;color:#3366CC;"> [1]</span><a name="ref_[1]_16716338"></a> \r\n</p>\r\n<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	孙思邈少年好读，天资聪明，7岁的时候，就认识一千多字，每天能背诵上千字的文章，据《旧唐书》载，西魏大臣<a target="_blank" href="https://baike.baidu.com/item/%E7%8B%AC%E5%AD%A4%E4%BF%A1">独孤信</a>对孙思邈十分器重，称其为“圣童”。18岁时立志究医，“颇觉有悟，是以亲邻中外有疾厄者，多所济益”。到了20岁，就能侃侃而谈<a target="_blank" href="https://baike.baidu.com/item/%E8%80%81%E5%AD%90">老子</a>、<a target="_blank" href="https://baike.baidu.com/item/%E5%BA%84%E5%AD%90">庄子</a>的学说，精通道家典籍，被人称为“圣童”，开始为乡邻治病。<span class="sup--normal" style="font-size:12px;line-height:0;vertical-align:baseline;color:#3366CC;"> [13]</span><a name="ref_[13]_16716338"></a> \r\n</div>\r\n<div class="anchor-list" style="color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	<a name="1_2"></a><a name="sub16716338_1_2"></a><a name="修行终南"></a><a name="1-2"></a> \r\n</div>\r\n<div class="para-title level-3" style="margin:20px 0px 12px;font-size:18px;font-family:" color:#333333;background-color:#ffffff;"="">\r\n<h3 class="title-text" style="font-size:18px;font-weight:400;">\r\n	修行终南\r\n</h3>\r\n	</div>\r\n	<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n		<a target="_blank" href="https://baike.baidu.com/item/%E5%8C%97%E5%91%A8">北周</a>静帝时，<a target="_blank" href="https://baike.baidu.com/item/%E6%9D%A8%E5%9D%9A/4455">杨坚</a>执掌朝政，召孙思邈任<a target="_blank" href="https://baike.baidu.com/item/%E5%9B%BD%E5%AD%90%E5%8D%9A%E5%A3%AB">国子博士</a>，孙思邈无意仕途功名，认为做高官太过世故，不能随意，坚决不接受，一心致力于医学。\r\n	</div>\r\n	<p style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n		隋<a target="_blank" href="https://baike.baidu.com/item/%E5%BC%80%E7%9A%87/15386204">开皇</a>元年（581年），见国事多端，孙思邈隐居<a target="_blank" href="https://baike.baidu.com/item/%E5%A4%AA%E7%99%BD%E5%B1%B1">太白山</a>中。他一方面下功夫钻研医学著作，一方面亲自采集草药，研究药物学。认真研读《<a target="_blank" href="https://baike.baidu.com/item/%E9%BB%84%E5%B8%9D%E5%86%85%E7%BB%8F/97915">黄帝内经</a>》、《<a target="_blank" href="https://baike.baidu.com/item/%E4%BC%A4%E5%AF%92%E6%9D%82%E7%97%85%E8%AE%BA">伤寒杂病论</a>》、《<a target="_blank" href="https://baike.baidu.com/item/%E7%A5%9E%E5%86%9C%E6%9C%AC%E8%8D%89%E7%BB%8F">神农本草经</a>》等古代医书，同时广泛收集民间流传的药方，热心为人治病，积累了许多宝贵的临床经验。他从理论到实践，再由实践经验中提炼出新的医药学研究成果，以毕生精力撰成了医学著作《<a target="_blank" href="https://baike.baidu.com/item/%E5%8D%83%E9%87%91%E8%A6%81%E6%96%B9">千金要方</a>》和《<a target="_blank" href="https://baike.baidu.com/item/%E5%8D%83%E9%87%91%E7%BF%BC%E6%96%B9">千金翼方</a>》。\r\n	</p>\r\n	<p style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n		123123131\r\n	</p>', '否', 'admin', '2018-04-23 14:30:00');

-- --------------------------------------------------------

--
-- 表的结构 `tr_feature`
--

CREATE TABLE IF NOT EXISTS `tr_feature` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `text` text NOT NULL COMMENT '内容',
  `time` datetime NOT NULL COMMENT '添加时间',
  `user` varchar(225) NOT NULL COMMENT '添加人',
  `statue` varchar(225) NOT NULL COMMENT '是否显示',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='特色描述表' AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `tr_feature`
--

INSERT INTO `tr_feature` (`id`, `text`, `time`, `user`, `statue`) VALUES
(1, '中医学经受了历史长河变迁的洗刷，为人类的生存繁衍作出了重要贡献。在现代医学快速发展的今天，中医在我国医疗保健、科研、教学、学术创新等诸多方面有其独有的特色和优势，显示了不可替代的作用，长久以来历代民医利用他们的聪明才智总结出了一套很有特色的治疗和保健的方法，如中医针灸、中医拔罐、中医刮痧、中医推拿、中医药浴、中医茶疗、自然疗法...', '2018-04-20 21:13:25', 'admin', '是'),
(2, '111中医学经受了历史长河变迁的洗刷，为人类的生存繁衍作出了重要贡献。在现代医学快速发展的今天，中医在我国医疗保健、科研、教学、学术创新等诸多方面有其独有的特色和优势，显示了不可替代的作用，长久以来历代民医利用他们的聪明才智总结出了一套很有特色的治疗和保健的方法，如中医针灸、中医拔罐、中医刮痧、中医推拿、中医药浴、中医茶疗、自然疗法...', '2018-04-21 10:39:00', 'admin', '是'),
(7, '123123中医学经受了历史长河变迁的洗刷，为人类的生存繁衍作出了重要贡献。在现代医学快速发展的今天，中医在我国医疗保健、科研、教学、学术创新等诸多方面有其独有的特色和优势，显示了不可替代的作用，长久以来历代民医利用他们的聪明才智总结出了一套很有特色的治疗和保健的方法，如中医针灸、中医拔罐、中医刮痧、中医推拿、中医药浴、中医茶疗、自然疗法...1221312', '2018-04-21 10:58:47', 'admin', '否');

-- --------------------------------------------------------

--
-- 表的结构 `tr_featuretext`
--

CREATE TABLE IF NOT EXISTS `tr_featuretext` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(225) NOT NULL COMMENT '标题',
  `text` text NOT NULL COMMENT '特色描述',
  `content` mediumtext NOT NULL COMMENT '内容',
  `image` varchar(225) NOT NULL COMMENT '特色图片',
  `statue` varchar(225) NOT NULL COMMENT '是否显示',
  `user` varchar(225) NOT NULL COMMENT '发布者',
  `time` datetime NOT NULL COMMENT '发布时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='中医特色内容表' AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `tr_featuretext`
--

INSERT INTO `tr_featuretext` (`id`, `title`, `text`, `content`, `image`, `statue`, `user`, `time`) VALUES
(1, '中医茶疗', '茶疗是根植于中医药文化与茶文化基础之上的一种养生方式，真正意义上的茶疗是以中药原植物叶片，并结合中药与茶叶炮制方法，制作成茶叶形态，它同时具备中药的治疗养生效果与茶叶的“形、色、香、道”，具有实效性、安全性、享受性及便捷性四大优点。', '<p style="color:#484848;font-family:" font-size:16px;background-color:#e6e6fa;"="">\r\n	茶疗是根植于中医药文化与茶文化基础之上的一种养生方式，真正意义上的茶疗是以中药原植物叶片，并结合中药与茶叶炮制方法，制作成茶叶形态，它同时具备中药的治疗养生效果与茶叶的“形、色、香、道”，具有实效性、安全性、享受性及便捷性四大优点。\r\n	</p>\r\n<p style="color:#484848;font-family:" font-size:16px;background-color:#e6e6fa;"="">\r\n	【功效】\r\n</p>\r\n<p style="color:#484848;font-family:" font-size:16px;background-color:#e6e6fa;"="">\r\n	每个人的健康状况都不一样，因此选择适合自身情况的茶疗产品是最重要的，这样才能达到良好的养生治病效果。像一些高血糖人群，可以选择青钱柳茶调节血糖；有脂肪肝酒精肝的人群，可以选择七叶胆茶，再配上菊花、枸杞子，坚持喝下去就可以达到清肝养肝的目的；高血压人群可以选择杜仲茶，调节血压效果好；而一些像慢性咽喉炎，肠胃炎等慢性炎症人群，选择莓茶养生是最好的。\r\n	</p>', '', '是', 'admin', '2018-04-21 14:41:38'),
(2, '中医药浴', '中医药浴属于传统中医疗法中的外治法之一，它是将水盛于器皿内，浸泡身体的某些部位或全身，利用水温本身对皮肤、经络、穴位的刺激和药物的透皮吸收，达到治疗疾病、养生保健的目的。111', '<p style="color:#484848;font-family:" font-size:16px;background-color:#e6e6fa;"="">\r\n	中医药浴属于传统中医疗法中的外治法之一，它是将水盛于器皿内，浸泡身体的某些部位或全身，利用水温本身对皮肤、经络、穴位的刺激和药物的透皮吸收，达到治疗疾病、养生保健的目的。\r\n	</p>\r\n<p style="color:#484848;font-family:" font-size:16px;background-color:#e6e6fa;"="">\r\n	【功效】\r\n</p>\r\n<p style="color:#484848;font-family:" font-size:16px;background-color:#e6e6fa;"="">\r\n	中医药浴属于传统中医疗法中的外治法之一，它是将水盛于器皿内，浸泡身体的某些部位或全身，利用水温本身对皮肤、经络、穴位的刺激和药物的透皮吸收，达到治疗疾病、养生保健的目的，它不同于一般的洗浴、温泉浴等，而是按照中医辨证施治的原则，根据不同的疾病，加入不同的药物，进行治疗，因药物不经胃肠破坏，直接作用于皮肤，并通过透皮肤吸收进入血液，故较之内服药见疗效快，舒适，无任何毒副作用的优点，也不会增加肝脏负担，因此被医学界誉为“绿色疗法”。 药浴又分为局部药浴和全身药浴两种，局部药浴多选用足部、小腿为浸泡部位，足部乃运行气血、联系脏腑、沟通内外上下经络的重要起止部位，足三阳与足三阴经均交接于此，足部有内脏及全身反射区，有52块骨头，60余条肌肉，被誉为“人体的第二心脏”，而小腿的角质层较薄，且血管、神经、肌肉丰富，更利于药物透皮吸收。全身药浴是浸泡和熏蒸除头颈部外全身其他部位，作用面积更大，药物利用度更高，适合用病变部位广泛的全身性疾患。 药浴疗法通过药物作用，水的温热效应以及磁疗效应，能够到达调和气血、平衡阴阳、疏通经脉、透达腠理、祛邪和中、温经散寒、祛风除湿、清热解毒、消肿散结、通络止痛、养荣生肌、美容保健等作用，不但可以治疗硬皮病、多发性肌炎、风湿性关节炎等风湿顽症，而且对失眠、便秘、骨折等疾病有确切疗效。\r\n	</p>', '/uploads/20180509\\b685807539172ff793e2fd2259e0fc27.jpg', '是', 'admin', '2018-04-21 15:03:34');

-- --------------------------------------------------------

--
-- 表的结构 `tr_file`
--

CREATE TABLE IF NOT EXISTS `tr_file` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(225) NOT NULL COMMENT '文件名',
  `url` varchar(225) NOT NULL COMMENT '文件路径',
  `statue` varchar(225) NOT NULL COMMENT '是否显示',
  `user` varchar(225) NOT NULL COMMENT '上传账号',
  `time` datetime NOT NULL COMMENT '上传时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='学习文件表' AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `tr_file`
--

INSERT INTO `tr_file` (`id`, `name`, `url`, `statue`, `user`, `time`) VALUES
(8, 'CI框架notes.docx', '20180426\\1fbc5263546bb834bc4d7b33fbbbb723.docx', '是', 'admin', '2018-04-26 15:16:43'),
(9, '产业聚集区官网功能清单工期.xlsx', '20180426\\13ae036fb03e3852d817aa16d2d831f6.xlsx', '是', 'admin', '2018-04-26 15:17:00');

-- --------------------------------------------------------

--
-- 表的结构 `tr_medicine`
--

CREATE TABLE IF NOT EXISTS `tr_medicine` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(225) NOT NULL COMMENT '名字',
  `content` mediumtext NOT NULL COMMENT '内容',
  `statue` varchar(225) NOT NULL COMMENT '是否显示',
  `user` varchar(225) NOT NULL COMMENT '发布者',
  `time` datetime NOT NULL COMMENT '发布时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `tr_medicine`
--

INSERT INTO `tr_medicine` (`id`, `name`, `content`, `statue`, `user`, `time`) VALUES
(1, '麻黄', '<p style="text-align:center;">\r\n	<strong><span style="font-size:24px;">麻黄</span></strong>\r\n</p>\r\n<p style="text-align:center;">\r\n	<img src="https://gss3.bdstatic.com/-Po3dSag_xI4khGkpoWK1HF6hhy/baike/w%3D268%3Bg%3D0/sign=d83de7ef47a98226b8c12c21b2b9de3c/9a504fc2d5628535d624b7bb94ef76c6a6ef6367.jpg" />\r\n</p>\r\n<p style="text-align:left;">\r\n	<p style="color:#484848;font-family:&quot;font-size:16px;background-color:#E6E6FA;">\r\n		&nbsp;麻黄是《中国药典》收录的草药，因为味道和颜色得名《本草纲目》说：“其味麻，其色黄”。麻黄别名：草麻黄，华麻黄，拉丁文名：Ephedra sinica Stapf。药用麻黄为麻黄科亚灌木草麻黄(Ephedra sinica)、木贼麻黄(Ephedra equisetina)与中麻黄(Ephedra intermedia)的干燥草质茎。主产于河北、内蒙古、甘肃、山西等地。秋末采收，阴干切段。\r\n	</p>\r\n	<p style="color:#484848;font-family:&quot;font-size:16px;background-color:#E6E6FA;">\r\n		&nbsp;&nbsp;&nbsp;&nbsp;【性味】温，味辛、微苦\r\n	</p>\r\n	<p style="color:#484848;font-family:&quot;font-size:16px;background-color:#E6E6FA;">\r\n		&nbsp;&nbsp;&nbsp;&nbsp;【归经】归肺、膀胱经\r\n	</p>\r\n	<p style="color:#484848;font-family:&quot;font-size:16px;background-color:#E6E6FA;">\r\n		&nbsp;&nbsp;&nbsp;&nbsp;【功效】发汗散寒、宣肺平喘、利水消肿\r\n	</p>\r\n	<p style="color:#484848;font-family:&quot;font-size:16px;background-color:#E6E6FA;">\r\n		&nbsp;&nbsp;&nbsp;&nbsp;【临床应用】可治疗风寒感冒、胸闷喘咳风水浮肿、支气管哮喘等病症。\r\n	</p>\r\n	<p style="color:#484848;font-family:&quot;font-size:16px;background-color:#E6E6FA;">\r\n		&nbsp;&nbsp;&nbsp;&nbsp;【用法用量】煎服3-10g。发汗解表宜生用、止咳平喘宜炙用。捣绒缓和发汗，老人、体虚及小儿宜用炙麻黄。\r\n	</p>\r\n	<p style="color:#484848;font-family:&quot;font-size:16px;background-color:#E6E6FA;">\r\n		&nbsp;&nbsp;&nbsp;&nbsp;【使用注意】因为麻黄的发汗力强，故外感风寒轻证、心悸、失眠、肺虚咳喘等均应忌用或慎用。<span style="font-family:&quot;"></span>\r\n	</p>\r\n</p>', '是', 'admin', '2018-04-23 15:17:55'),
(5, '地黄', '<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	&nbsp;&nbsp;&nbsp;&nbsp;地黄（拉丁学名：<i>Rehmannia glutinosa (Gaetn.) Libosch. ex Fisch. et Mey.</i>），玄参科<a target="_blank" href="https://baike.baidu.com/item/%E5%9C%B0%E9%BB%84%E5%B1%9E">地黄属</a>多年生草本植物，高可达30厘米，根茎肉质，鲜时黄色，在栽培条件下，茎紫红色。直径可达5.5厘米，叶片卵形至长椭圆形，叶脉在上面凹陷，花在茎顶部略排列成总状花序，花冠外紫红色，内黄紫色，药室矩圆形，蒴果卵形至长卵形，花果期4-7月。\r\n</div>\r\n<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	生于海拔50～1100m的山坡及路旁荒地等处。因其地下块根为黄白色而得名地黄，其根部为传统中药之一，最早出典于《神农本草经》。依照炮制方法在药材上分为：鲜地黄、干地黄与熟地黄，同时其药性和功效也有较大的差异，按照《中华本草》功效分类：鲜地黄为清热凉血药；熟地黄则为补益药。此外，地黄初夏开花，花大数朵，淡红紫色，具有较好的观赏性。\r\n</div>', '是', 'admin', '2018-04-25 14:58:57'),
(6, '当归', '<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	当归，（学名：Angelica sinensis，）别名<a target="_blank" href="https://baike.baidu.com/item/%E5%B9%B2%E5%BD%92">干归</a>、秦哪、<a target="_blank" href="https://baike.baidu.com/item/%E8%A5%BF%E5%BD%93%E5%BD%92">西当归</a>、岷当归、金当归、<a target="_blank" href="https://baike.baidu.com/item/%E5%BD%93%E5%BD%92%E8%BA%AB">当归身</a>、涵归尾、当归曲、土当归，多年生草本，高0.4-1米。花期6-7月，果期7-9月。\r\n</div>\r\n<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	中国1957年从欧洲引种<a target="_blank" href="https://baike.baidu.com/item/%E6%AC%A7%E5%BD%93%E5%BD%92">欧当归</a>。主产甘肃东南部，以<a target="_blank" href="https://baike.baidu.com/item/%E5%B2%B7%E5%8E%BF">岷县</a>产量多，质量好，其次为云南、四川、陕西、湖北等省，均为栽培。国内有些省区也已引种栽培。\r\n</div>\r\n<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	其根可入药，是最常用的中药之一。具有补血和血，调经止痛，润燥滑肠、<span style="font-weight:700;">抗癌<span class="sup--normal" style="font-size:12px;line-height:0;vertical-align:baseline;color:#3366CC;">&nbsp;[1]</span><a name="ref_[1]_17237063"></a>&nbsp;&nbsp;、抗老防老<span class="sup--normal" style="font-size:12px;line-height:0;vertical-align:baseline;color:#3366CC;">&nbsp;[1]</span><a name="ref_[1]_17237063"></a>&nbsp;&nbsp;、免疫<span class="sup--normal" style="font-size:12px;line-height:0;vertical-align:baseline;color:#3366CC;">&nbsp;[1]</span><a name="ref_[1]_17237063"></a>&nbsp;&nbsp;</span>之功效。\r\n</div>', '是', 'admin', '2018-04-25 15:00:54'),
(7, '白术', '<span style="color:#333333;font-family:arial, 宋体, sans-serif;font-size:14px;background-color:#FFFFFF;">白术（zhú），拉丁学名&nbsp;</span><i>Atractylodes macrocephala&nbsp;</i><span style="color:#333333;font-family:arial, 宋体, sans-serif;font-size:14px;background-color:#FFFFFF;">。别名桴蓟，</span><a target="_blank" href="https://baike.baidu.com/item/%E4%BA%8E%E6%9C%AF">于术</a><span style="color:#333333;font-family:arial, 宋体, sans-serif;font-size:14px;background-color:#FFFFFF;">，冬白术，淅术，杨桴，</span><a target="_blank" href="https://baike.baidu.com/item/%E5%90%B4%E6%9C%AF">吴术</a><span style="color:#333333;font-family:arial, 宋体, sans-serif;font-size:14px;background-color:#FFFFFF;">，片术、</span><a target="_blank" href="https://baike.baidu.com/item/%E8%8B%8D%E6%9C%AF/1108131">苍术</a><span style="color:#333333;font-family:arial, 宋体, sans-serif;font-size:14px;background-color:#FFFFFF;">等，属于菊科、</span><a target="_blank" href="https://baike.baidu.com/item/%E8%8B%8D%E6%9C%AF%E5%B1%9E">苍术属</a><span style="color:#333333;font-family:arial, 宋体, sans-serif;font-size:14px;background-color:#FFFFFF;">多年生草本植物。喜凉爽气候，以根茎入药，具有多项药用功能。主要分布于四川、云南、贵州等山区湿地。白术具有健脾益气，燥湿利水，止汗，安胎的功效，用于脾虚食少，腹胀泄泻，痰饮眩悸，水肿，自汗，胎动不安。《</span><a target="_blank" href="https://baike.baidu.com/item/%E5%8C%BB%E5%AD%A6%E5%90%AF%E6%BA%90">医学启源</a><span style="color:#333333;font-family:arial, 宋体, sans-serif;font-size:14px;background-color:#FFFFFF;">》记载：“除湿益燥，和中益气，温中，去脾胃中湿，除胃热，强脾胃，进饮食，安胎。”</span>', '是', 'admin', '2018-04-25 15:01:27'),
(8, '甘草', '<span style="color:#333333;font-family:arial, 宋体, sans-serif;font-size:14px;background-color:#FFFFFF;">甘草</span><span class="sup--normal" style="line-height:0;vertical-align:baseline;color:#3366CC;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">&nbsp;[1]</span><a name="ref_[1]_16161352"></a>&nbsp;<span style="color:#333333;font-family:arial, 宋体, sans-serif;font-size:14px;background-color:#FFFFFF;">&nbsp;，（学名：</span><i>Glycyrrhiza uralensis Fisch</i><span style="color:#333333;font-family:arial, 宋体, sans-serif;font-size:14px;background-color:#FFFFFF;">）别名：</span><a target="_blank" href="https://baike.baidu.com/item/%E5%9B%BD%E8%80%81/8210022">国老</a><span style="color:#333333;font-family:arial, 宋体, sans-serif;font-size:14px;background-color:#FFFFFF;">、</span><a target="_blank" href="https://baike.baidu.com/item/%E7%94%9C%E8%8D%89">甜草</a><span style="color:#333333;font-family:arial, 宋体, sans-serif;font-size:14px;background-color:#FFFFFF;">、乌拉尔甘草、甜根子。豆科、</span><a target="_blank" href="https://baike.baidu.com/item/%E7%94%98%E8%8D%89%E5%B1%9E">甘草属</a><span style="color:#333333;font-family:arial, 宋体, sans-serif;font-size:14px;background-color:#FFFFFF;">多年生草本，根与根状茎粗壮，是一种</span><a target="_blank" href="https://baike.baidu.com/item/%E8%A1%A5%E7%9B%8A">补益</a><span style="color:#333333;font-family:arial, 宋体, sans-serif;font-size:14px;background-color:#FFFFFF;">中草药。对人体很好的一种药，药用部位是根及</span><a target="_blank" href="https://baike.baidu.com/item/%E6%A0%B9%E8%8C%8E">根茎</a><span style="color:#333333;font-family:arial, 宋体, sans-serif;font-size:14px;background-color:#FFFFFF;">，药材性状根呈圆柱形，长25～100厘米，直径0.6～3.5厘米。外皮松紧不一，表面红棕色或灰棕色。根茎呈圆柱形，表面有芽痕，断面中部有髓。气微，味甜而特殊。功能主治清热解毒、祛痰止咳、</span><a target="_blank" href="https://baike.baidu.com/item/%E8%84%98%E8%85%B9">脘腹</a><span style="color:#333333;font-family:arial, 宋体, sans-serif;font-size:14px;background-color:#FFFFFF;">等。喜阴暗潮湿，日照长气温低的干燥气候。甘草多生长在干旱、半干旱的荒漠草原、沙漠边缘和黄土丘陵地带。根和根状茎供药用。</span>', '是', 'admin', '2018-04-25 15:02:43'),
(9, '番泻叶', '<p>\r\n	<span style="color:#333333;font-family:arial, 宋体, sans-serif;font-size:14px;background-color:#FFFFFF;">番泻叶，异名旃那叶、泻叶、泡竹叶来源为</span><a target="_blank" href="https://baike.baidu.com/item/%E8%B1%86%E7%A7%91%E6%A4%8D%E7%89%A9">豆科植物</a><span style="color:#333333;font-family:arial, 宋体, sans-serif;font-size:14px;background-color:#FFFFFF;">狭叶番泻或尖叶番泻的小叶。英文名FOLIUM SENNAE，为刺激性泻药，通过肠粘膜和神经从刺激肠蠕动，属于猛药，建议尽量少用。作用于结肠，一般几个小时内生效。</span>\r\n</p>\r\n<p>\r\n	<span style="color:#333333;font-family:arial, 宋体, sans-serif;font-size:14px;background-color:#FFFFFF;"><span style="color:#333333;font-family:arial, 宋体, sans-serif;font-size:14px;background-color:#FFFFFF;">狭叶番泻呈长卵形或卵状披针形，长1.5～5cm，宽0.4～2cm，全缘，</span><a target="_blank" href="https://baike.baidu.com/item/%E5%8F%B6%E7%AB%AF">叶端</a><span style="color:#333333;font-family:arial, 宋体, sans-serif;font-size:14px;background-color:#FFFFFF;">急尖，</span><a target="_blank" href="https://baike.baidu.com/item/%E5%8F%B6%E5%9F%BA">叶基</a><span style="color:#333333;font-family:arial, 宋体, sans-serif;font-size:14px;background-color:#FFFFFF;">稍不对称。狭叶番泻为草本状小灌木，高达1米。双数</span><a target="_blank" href="https://baike.baidu.com/item/%E7%BE%BD%E7%8A%B6%E5%A4%8D%E5%8F%B6">羽状复叶</a><span style="color:#333333;font-family:arial, 宋体, sans-serif;font-size:14px;background-color:#FFFFFF;">，小叶5～8对，具短柄；托叶卵状披针形，长2～4毫米；小叶片卵状披针形至线状披针形，先端急尖，基部稍不对称，无毛或几无毛。总状花序腋生，有花6～14朵；花梗基部有一卵形苞片，易落；</span><a target="_blank" href="https://baike.baidu.com/item/%E8%90%BC%E7%89%87">萼片</a><span style="color:#333333;font-family:arial, 宋体, sans-serif;font-size:14px;background-color:#FFFFFF;">5，长卵形；花瓣5，倒卵形，黄色；雄蕊10，上部3枚小形，不育，中央4枚等长，最下面3枚向下弯曲，花药稍呈四方形，基部箭形，4室；雌蕊弯曲如镰，子房具柄，被疏毛。叶面浅绿色，叶背灰绿色，微有毛茸，无压纹，质薄而脆。均以干燥、叶形狭尖、片大、完整、色绿、梗少、无泥砂者为佳，叶小、色黄、有梗、多破碎、有泥砂者为次。上表面黄绿色，下表面浅黄绿色，无毛或近无毛，叶脉稍隆起。革质。气微弱而特异，味微苦，稍有粘性。尖叶番泻呈披针形或长卵形，略卷曲，</span><a target="_blank" href="https://baike.baidu.com/item/%E5%8F%B6%E7%AB%AF">叶端</a><span style="color:#333333;font-family:arial, 宋体, sans-serif;font-size:14px;background-color:#FFFFFF;">短尖或微凸，</span><a target="_blank" href="https://baike.baidu.com/item/%E5%8F%B6%E5%9F%BA">叶基</a><span style="color:#333333;font-family:arial, 宋体, sans-serif;font-size:14px;background-color:#FFFFFF;">不对称，两面均有细短毛茸。</span><br />\r\n</span>\r\n</p>', '是', 'admin', '2018-04-25 15:04:22');

-- --------------------------------------------------------

--
-- 表的结构 `tr_privilege`
--

CREATE TABLE IF NOT EXISTS `tr_privilege` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '权限ID',
  `pri_name` varchar(30) NOT NULL COMMENT '权限名',
  `module_name` varchar(30) DEFAULT NULL COMMENT '模块名',
  `controller_name` varchar(30) DEFAULT NULL COMMENT '控制器名',
  `action_name` varchar(30) DEFAULT NULL COMMENT '方法名',
  `parent_id` int(11) DEFAULT NULL COMMENT '父级ID',
  `pri_level` int(11) DEFAULT NULL COMMENT '排序',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=251 ;

--
-- 转存表中的数据 `tr_privilege`
--

INSERT INTO `tr_privilege` (`id`, `pri_name`, `module_name`, `controller_name`, `action_name`, `parent_id`, `pri_level`) VALUES
(38, '管理员管理', '', '', '', 0, NULL),
(39, '添加管理员', 'admin', 'Admin', 'add', 38, NULL),
(49, '删除', 'admin', 'Role', 'del', 46, NULL),
(48, '修改', 'admin', 'Role', 'edit', 46, NULL),
(47, '查看', 'admin', 'Role', 'lst', 46, NULL),
(46, '角色列表', 'admin', 'Role', 'lst', 38, NULL),
(45, '添加角色', 'admin', 'Role', 'add', 38, NULL),
(44, '批量删除', 'admin', 'Admin', 'p_del', 40, NULL),
(40, '管理员列表', 'admin', 'Admin', 'lst', 38, NULL),
(41, '查看', 'admin', 'Admin', 'lst', 40, NULL),
(42, '修改', 'admin', 'Admin', 'edit', 40, NULL),
(43, '删除', 'admin', 'Admin', 'del', 40, NULL),
(249, '商品管理', '', '', '', 0, NULL),
(250, '添加商品', 'admin', 'Goods', 'add', 249, NULL),
(59, '查看', 'admin', 'Article', 'lst', 58, NULL),
(60, '修改', 'admin', 'Article', 'edit', 58, NULL),
(61, '删除', 'admin', 'Article', 'del', 58, NULL),
(62, '批量删除', 'admin', 'Article', 'p_del', 58, NULL),
(65, '查看', 'admin', 'Articletype', 'lst', 64, NULL),
(66, '修改', 'admin', 'Articletype', 'edit', 64, NULL),
(67, '删除', 'admin', 'Articletype', 'del', 64, NULL),
(68, '批量删除', 'admin', 'Articletype', 'p_del', 64, NULL),
(69, '用户管理', '', '', '', 0, NULL),
(247, '上传中医小百科', 'admin', 'Study', 'add_article', 230, NULL),
(72, '添加用户', 'admin', 'User', 'add', 69, NULL),
(73, '用户列表', 'admin', 'User', 'lst', 69, NULL),
(74, '查看', 'admin', 'User', 'detail', 73, NULL),
(75, '修改', 'admin', 'User', 'edit', 73, NULL),
(76, '删除', 'admin', 'User', 'del', 73, NULL),
(77, '批量删除', 'admin', 'User', 'p_del', 73, NULL),
(246, '穴位图谱列表', 'admin', 'Photo', 'lst_xuewei', 223, NULL),
(245, '添加穴位图谱', 'admin', 'Photo', 'add_xuewei', 223, NULL),
(248, '中医小百科列表', 'admin', 'Study', 'lst_article', 230, NULL),
(237, '体质测试', '', '', '', 0, NULL),
(238, '上传体测结果', 'admin', 'Body', 'add', 237, NULL),
(243, '论坛管理', '', '', '', 0, NULL),
(240, '体测结果列表', 'admin', 'Body', 'lst', 237, NULL),
(241, '用户体测结果', 'admin', 'Body', 'userlst', 237, NULL),
(244, '消息列表', 'admin', 'Talk', 'lst', 243, NULL),
(91, '查看', 'admin', 'Goods', 'detail', 90, NULL),
(93, '删除', 'admin', 'Goods', 'del', 90, NULL),
(94, '批量删除', 'admin', 'Goods', 'p_del', 90, NULL),
(97, '查看', 'admin', 'Goodsconfig', 'lst', 96, NULL),
(99, '删除', 'admin', 'Goodsconfig', 'del', 96, NULL),
(104, '查看', 'admin', 'Path', 'detail', 103, NULL),
(105, '删除', 'admin', 'Path', 'del', 103, NULL),
(106, '批量删除', 'admin', 'Path', 'p_del', 103, NULL),
(235, '网站管理', '', '', '', 0, NULL),
(236, '轮播图管理', 'admin', 'System', 'lst', 235, NULL),
(212, '疾病大全', '', '', '', 0, NULL),
(213, '疾病分类', 'admin', 'Sick', 'add', 212, NULL),
(214, '疾病列表', 'admin', 'Sick', 'lst', 212, NULL),
(215, '疑难杂症', '', '', '', 0, NULL),
(216, '添加分类', 'admin', 'Difficult', 'add', 215, NULL),
(217, '杂症列表', 'admin', 'Difficult', 'lst', 215, NULL),
(218, '中医特色', '', '', '', 0, NULL),
(219, '添加总描述', 'admin', 'Feature', 'add', 218, NULL),
(220, '添加特色', 'admin', 'Feature', 'add_feature', 218, NULL),
(221, '特色描述列表', 'admin', 'Feature', 'lst', 218, NULL),
(222, '特色列表', 'admin', 'Feature', 'featurelst', 218, NULL),
(223, '中医图谱', '', '', '', 0, NULL),
(224, '添加历代名医', 'admin', 'Photo', 'add_photo', 223, NULL),
(225, '历代名医列表', 'admin', 'Photo', 'lst_photo', 223, NULL),
(226, '添加中国古籍', 'admin', 'Photo', 'add_book', 223, NULL),
(227, '中国古籍列表', 'admin', 'Photo', 'lst_book', 223, NULL),
(228, '添加药材图谱', 'admin', 'Photo', 'add_medicine', 223, NULL),
(229, '药材图谱列表', 'admin', 'Photo', 'lst_medicine', 223, NULL),
(230, '学习园地', '', '', '', 0, NULL),
(231, '上传学习视频', 'admin', 'Study', 'add_video', 230, NULL),
(232, '视频列表', 'admin', 'Study', 'lst_video', 230, NULL),
(233, '上传学习文件', 'admin', 'Study', 'add_file', 230, NULL),
(234, '文件列表', 'admin', 'Study', 'lst_file', 230, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `tr_role`
--

CREATE TABLE IF NOT EXISTS `tr_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '角色ID',
  `rolename` varchar(100) NOT NULL COMMENT '角色名',
  `content` mediumtext COMMENT '备注',
  `pri_id` varchar(655) DEFAULT NULL COMMENT '权限节点',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- 转存表中的数据 `tr_role`
--

INSERT INTO `tr_role` (`id`, `rolename`, `content`, `pri_id`) VALUES
(1, '超级管理员', '有平台所有权限，可以添加角色分类，添加管理员', '38,39,40,41,42,43,44,45,46,47,48,49,69,72,73,74,75,76,77,212,213,214,215,216,217,218,219,220,221,222,223,224,225,226,227,228,229,245,246,230,231,232,233,234,247,248,235,236,237,238,240,241,243,244,249,250'),
(15, '111', '111', '39,40,41,42,43,44'),
(14, '普通管理员', '拥有除了权限管理的所有功能', '38,39,40,41,42,43,44,45,46,47,48,49,69,72,73,74,75,76,77,212,213,214,215,216,217,218,219,220,221,222,223,224,225,226,227,228,229,230,231,232,233,234,247,248,235,236,237,238,240,241,243,244');

-- --------------------------------------------------------

--
-- 表的结构 `tr_sick`
--

CREATE TABLE IF NOT EXISTS `tr_sick` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `typename` varchar(225) NOT NULL COMMENT '疾病名称',
  `parent_id` int(11) DEFAULT NULL COMMENT '上级分类',
  `statue` varchar(225) NOT NULL COMMENT '是否在前台显示',
  `content` mediumtext NOT NULL COMMENT '疾病描述',
  `pri_level` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- 转存表中的数据 `tr_sick`
--

INSERT INTO `tr_sick` (`id`, `typename`, `parent_id`, `statue`, `content`, `pri_level`) VALUES
(3, '消化系统疾病', 0, '否', '', NULL),
(4, '心血管疾病', 0, '是', '', NULL),
(5, '呼吸系统疾病', 0, '否', '', NULL),
(6, '传染病与寄生虫病', 0, '是', '', NULL),
(7, '急症处理', 0, '否', '', NULL),
(8, '中医眼科', 0, '是', '', NULL),
(9, '中医耳鼻喉科', 0, '否', '', NULL),
(10, '中医儿科', 0, '否', '', NULL),
(11, '中医妇科', 0, '是', '', NULL),
(18, '中医内科', 0, '否', '', NULL),
(19, '心系病症', 18, '是', '', NULL),
(17, '中医外科', 0, '是', '', NULL),
(20, '肺系病症', 18, '否', '', NULL),
(21, '皮肤传播疾病', 17, '是', '', NULL),
(22, '周围血管疾病', 17, '是', '', NULL),
(25, '胃痛', 3, '是', '<p>\r\n	<span style="color:#333333;font-family:arial, tahoma, &quot;font-size:14px;background-color:#FFFFFF;">&nbsp; &nbsp; 胃痛，中医病证名。多由外感寒邪、饮食所伤、情志不畅和脾胃素虚等病因而引发。胃是主要病变脏腑，常与肝脾等脏有密切关系。胃气郁滞、失于和降是胃痛的主要病机。治疗以理气和胃为大法，根据不同证候，采取相应治法。</span>\r\n</p>\r\n<p>\r\n	<span style="color:#333333;font-family:arial, tahoma, &quot;font-size:14px;background-color:#FFFFFF;"><span style="color:#333333;font-family:arial, 宋体, sans-serif;font-size:14px;background-color:#FFFFFF;">&nbsp;&nbsp;&nbsp;&nbsp;胃痛，又称胃脘痛，是指以上腹胃脘部近心窝处疼痛为症状的病证。</span></span>\r\n</p>\r\n<p>\r\n	<span style="color:#333333;font-family:arial, tahoma, &quot;font-size:14px;background-color:#FFFFFF;">历史：</span><span style="color:#333333;font-family:arial, tahoma, &quot;font-size:14px;background-color:#FFFFFF;">&nbsp;</span>\r\n</p>\r\n<p>\r\n	<span style="color:#333333;font-family:arial, tahoma, &quot;font-size:14px;background-color:#FFFFFF;">\r\n	<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n		&nbsp;&nbsp;&nbsp;&nbsp;1、胃痛之名最早记载于《内经》，如《灵枢·邪气脏腑病形》指出：“胃病者，腹胀，胃脘当心而痛。”《内经》首先提出胃痛的发生与肝、脾有关，还提出寒邪、伤食致病说。\r\n	</div>\r\n	<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n		&nbsp;&nbsp;&nbsp;&nbsp;2、唐宋以前文献多把属于胃脘痛的心痛和属于心经本身病变的心痛混为一谈，直至金元时代李杲《兰室秘藏》首立“胃脘痛”一门，将胃脘痛明确区分于心痛，使胃痛成为独立的病证。\r\n	</div>\r\n	<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n		&nbsp;&nbsp;&nbsp;&nbsp;3、明清时代进一步提出了胃痛的治疗大法，《医学正传》说：“古方九种心痛，……详其所由，皆在胃脘，而实不在于心也。”“气在上者涌之，清气在下者提之，寒者温之，热者寒之，虚者培之，实者泻之，结者散之，留者行之。”《医学真传·心腹痛》还指出了要从辨证去理解和运用“通则不痛”之法。\r\n	</div>\r\n<br />\r\n</span>\r\n</p>', NULL);

-- --------------------------------------------------------

--
-- 表的结构 `tr_system`
--

CREATE TABLE IF NOT EXISTS `tr_system` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(225) NOT NULL COMMENT '图片路径',
  `statue` varchar(225) NOT NULL COMMENT '是否显示',
  `user` varchar(225) NOT NULL COMMENT '发布者',
  `time` datetime NOT NULL COMMENT '发布时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='轮播图管理表' AUTO_INCREMENT=19 ;

--
-- 转存表中的数据 `tr_system`
--

INSERT INTO `tr_system` (`id`, `image`, `statue`, `user`, `time`) VALUES
(18, 'upimages/20180424\\5893586133a58f56fce8a123b9fc554b.jpg', '是', 'admin', '2018-04-24 21:06:43'),
(13, 'upimages/20180424\\4135168b89c53d4d0df2f9f22d0203b4.jpg', '是', 'admin', '2018-04-24 21:03:51'),
(14, 'upimages/20180424\\63c1a8e5e8872be3383fef3921cbcd8f.jpg', '是', 'admin', '2018-04-24 21:03:57'),
(15, 'upimages/20180424\\b7d08c7a48e6f3f97fe0d721af40a58f.jpg', '是', 'admin', '2018-04-24 21:04:03'),
(16, 'upimages/20180424\\fbfc9c574ae426eba27274d3ae025bb0.jpg', '是', 'admin', '2018-04-24 21:04:07'),
(17, 'upimages/20180424\\2f60990bc88bf7e047b9013017e5d99e.jpg', '是', 'admin', '2018-04-24 21:04:13');

-- --------------------------------------------------------

--
-- 表的结构 `tr_talk`
--

CREATE TABLE IF NOT EXISTS `tr_talk` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(225) NOT NULL COMMENT '标题',
  `content` text NOT NULL COMMENT '内容',
  `user` varchar(225) NOT NULL COMMENT '发布者',
  `time` datetime NOT NULL COMMENT '发布时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='论坛表' AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `tr_talk`
--

INSERT INTO `tr_talk` (`id`, `title`, `content`, `user`, `time`) VALUES
(1, '怎么养生', '请问怎么吃才能光吃不胖？', '周雪迎', '2018-04-26 09:34:42'),
(2, '怎么减肥', '求不运动就能减肥的秘术！！！！', '周雪迎', '2018-04-26 09:39:26'),
(8, '甄姬如何玩', '弹弹弹就好了', '周雪迎', '2018-04-27 11:08:59');

-- --------------------------------------------------------

--
-- 表的结构 `tr_talkreply`
--

CREATE TABLE IF NOT EXISTS `tr_talkreply` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `talkid` int(11) NOT NULL COMMENT '论坛消息id',
  `content` text NOT NULL COMMENT '回复内容',
  `user` varchar(225) NOT NULL COMMENT '回复人',
  `time` datetime NOT NULL COMMENT '回复时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='论坛回复表' AUTO_INCREMENT=19 ;

--
-- 转存表中的数据 `tr_talkreply`
--

INSERT INTO `tr_talkreply` (`id`, `talkid`, `content`, `user`, `time`) VALUES
(1, 1, '管住嘴，迈开腿。', '周雪迎', '2018-04-26 10:30:40'),
(4, 1, '想得美！！！', '周雪迎', '2018-04-26 10:42:09'),
(5, 1, '不知道！！！！', '周雪迎', '2018-04-26 10:46:10'),
(18, 8, '说嘞对', '周雪迎', '2018-04-27 11:09:10'),
(13, 1, '养生1', '123', '2018-04-27 09:56:07'),
(16, 2, '想的太多。。。。', '123', '2018-04-27 09:56:39'),
(17, 2, '并没有这种秘术。。。。', '周雪迎', '2018-04-27 09:57:46');

-- --------------------------------------------------------

--
-- 表的结构 `tr_testresult`
--

CREATE TABLE IF NOT EXISTS `tr_testresult` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(225) NOT NULL COMMENT '结果标题',
  `content` text NOT NULL COMMENT '结果内容',
  `user` varchar(225) NOT NULL COMMENT '发布人',
  `time` datetime NOT NULL COMMENT '发布时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='体测结果表' AUTO_INCREMENT=14 ;

--
-- 转存表中的数据 `tr_testresult`
--

INSERT INTO `tr_testresult` (`id`, `title`, `content`, `user`, `time`) VALUES
(1, '平和质（A型）', '<p style="color:#484848;font-family:" font-size:16px;background-color:#e6e6fa;"="">\r\n	总体特征：阴阳气血调和，以体态适中、面色红润、精力充沛等为主要特征。\r\n	</p>\r\n<p style="color:#484848;font-family:" font-size:16px;background-color:#e6e6fa;"="">\r\n	形体特征：体形匀称健壮。\r\n</p>\r\n<p style="color:#484848;font-family:" font-size:16px;background-color:#e6e6fa;"="">\r\n	常见表现：面色、肤色润泽，头发稠密有光泽，目光有神，鼻色明润，嗅觉通利，唇色红润，不易疲劳，精力充沛，耐受寒热，睡眠良好，胃纳佳，二便正常，舌色淡红，苔薄白，脉和缓有力。\r\n	</p>\r\n<p style="color:#484848;font-family:" font-size:16px;background-color:#e6e6fa;"="">\r\n	心理特征：性格随和开朗。\r\n</p>\r\n<p style="color:#484848;font-family:" font-size:16px;background-color:#e6e6fa;"="">\r\n	发病倾向：平素患病较少。\r\n	</p>\r\n<p style="color:#484848;font-family:" font-size:16px;background-color:#e6e6fa;"="">\r\n	对外界环境适应能力：对自然环境和社会环境适应能力较强。\r\n</p>', 'admin', '2018-04-25 18:07:11'),
(7, '阳虚质（C型）', '<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	总体特征：<a target="_blank" href="https://baike.baidu.com/item/%E5%85%83%E6%B0%94%E4%B8%8D%E8%B6%B3">元气不足</a>，以疲乏、<a target="_blank" href="https://baike.baidu.com/item/%E6%B0%94%E7%9F%AD">气短</a>、<a target="_blank" href="https://baike.baidu.com/item/%E8%87%AA%E6%B1%97">自汗</a>等气虚表现为主要特征。\r\n</div>\r\n<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	形体特征：肌肉松软不实。\r\n</div>\r\n<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	常见表现：平素语音低弱，气短懒言，容易疲乏，精神不振，易出汗，舌淡红，<a target="_blank" href="https://baike.baidu.com/item/%E8%88%8C%E8%BE%B9">舌边</a>有齿痕，脉弱。\r\n</div>\r\n<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	发病倾向：易患感冒、内脏下垂等病；病后康复缓慢。\r\n</div>\r\n<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	对外界环境适应能力：不耐受风、寒、暑、湿邪。\r\n</div>', 'admin', '2018-05-02 15:49:42'),
(6, '气虚质（B型）', '<p style="color:#484848;font-family:&quot;font-size:16px;background-color:#E6E6FA;">\r\n	总体特征：元气不足，以疲乏、气短、自汗等气虚表现为主要特征。\r\n</p>\r\n<p style="color:#484848;font-family:&quot;font-size:16px;background-color:#E6E6FA;">\r\n	形体特征：肌肉松软不实。\r\n</p>\r\n<p style="color:#484848;font-family:&quot;font-size:16px;background-color:#E6E6FA;">\r\n	常见表现：平素语音低弱，气短懒言，容易疲乏，精神不振，易出汗，舌淡红，舌边有齿痕，脉弱。\r\n</p>\r\n<p style="color:#484848;font-family:&quot;font-size:16px;background-color:#E6E6FA;">\r\n	心理特征：性格内向，不喜冒险。\r\n</p>\r\n<p style="color:#484848;font-family:&quot;font-size:16px;background-color:#E6E6FA;">\r\n	发病倾向：易患感冒、内脏下垂等病；病后康复缓慢。\r\n</p>\r\n<p style="color:#484848;font-family:&quot;font-size:16px;background-color:#E6E6FA;">\r\n	对外界环境适应能力：不耐受风、寒、暑、湿邪。\r\n</p>', 'admin', '2018-04-25 18:11:17'),
(8, '阴虚质（D型）', '<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	总体特征：阴液亏少，以口燥<a target="_blank" href="https://baike.baidu.com/item/%E5%92%BD%E5%B9%B2">咽干</a>、手足心热等<a target="_blank" href="https://baike.baidu.com/item/%E8%99%9A%E7%83%AD">虚热</a>表现为主要特征。\r\n</div>\r\n<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	形体特征：体形偏瘦。\r\n</div>\r\n<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	常见表现：手足心热，口燥咽干，鼻微干，喜冷饮，大便干燥，舌红少津，脉细数。\r\n</div>\r\n<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	发病倾向：易患虚劳、<a target="_blank" href="https://baike.baidu.com/item/%E5%A4%B1%E7%B2%BE">失精</a>、不寐等病；感邪易从<a target="_blank" href="https://baike.baidu.com/item/%E7%83%AD%E5%8C%96">热化</a>。\r\n</div>\r\n<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	对外界环境适应能力：耐冬不耐夏；不耐受暑、热、燥邪。\r\n</div>', 'admin', '2018-05-02 15:50:12'),
(9, '痰湿型（E型）', '<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	总体特征：痰湿凝聚，以形体肥胖、腹部肥满、口黏苔腻等痰湿表现为主要特征。\r\n</div>\r\n<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	形体特征：体形肥胖，腹部肥满松软。\r\n</div>\r\n<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	常见表现：面部皮肤油脂较多，多汗且黏，胸闷，痰多，口黏腻或甜，喜食肥甘甜黏，苔腻，脉滑。\r\n</div>\r\n<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	发病倾向：易患消渴、中风、胸痹等病。\r\n</div>\r\n<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	对外界环境适应能力：对梅雨季节及湿重环境适应能力差。\r\n</div>', 'admin', '2018-05-02 15:50:54'),
(10, '湿热质（F型）', '<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	总体特征：<a target="_blank" href="https://baike.baidu.com/item/%E6%B9%BF%E7%83%AD%E5%86%85%E8%95%B4">湿热内蕴</a>，以<a target="_blank" href="https://baike.baidu.com/item/%E9%9D%A2%E5%9E%A2">面垢</a>油光、口苦、苔黄腻等湿热表现为主要特征。\r\n</div>\r\n<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	形体特征：形体中等或偏瘦。\r\n</div>\r\n<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	常见表现：面垢油光，易生痤疮，口苦口干，身重困倦，大便黏滞不畅或燥结，小便短黄，男性易<a target="_blank" href="https://baike.baidu.com/item/%E9%98%B4%E5%9B%8A%E6%BD%AE%E6%B9%BF">阴囊潮湿</a>，女性易带下增多，舌质偏红，苔黄腻，脉滑数。\r\n</div>\r\n<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	发病倾向：易患疮疖、<a target="_blank" href="https://baike.baidu.com/item/%E9%BB%84%E7%96%B8">黄疸</a>、热淋等病。\r\n</div>\r\n<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	对外界环境适应能力：对夏末秋初湿热气候，湿重或气温偏高环境较难适应。\r\n</div>', 'admin', '2018-05-02 15:51:21'),
(11, '血瘀质（G型）', '<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	总体特征：血行不畅，以肤色晦黯、舌质紫黯等血瘀表现为主要特征。\r\n</div>\r\n<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	形体特征：胖瘦均见。\r\n</div>\r\n<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	常见表现：肤色晦黯，色素沉着，容易出现<a target="_blank" href="https://baike.baidu.com/item/%E7%98%80%E6%96%91">瘀斑</a>，口唇黯淡，舌黯或有瘀点，舌下络脉紫黯或增粗，脉涩。\r\n</div>\r\n<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	发病倾向：易患症瘕及痛证、血证等。\r\n</div>\r\n<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	对外界环境适应能力：不耐受寒邪。\r\n</div>', 'admin', '2018-05-02 15:51:38'),
(12, '气郁质（H型）', '<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	总体特征：气机郁滞，以神情抑郁、忧虑脆弱等气郁表现为主要特征。\r\n</div>\r\n<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	形体特征：形体瘦者为多。\r\n</div>\r\n<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	常见表现：神情抑郁，情感脆弱，烦闷不乐，舌淡红，苔薄白，脉弦。\r\n</div>\r\n<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	心理特征：性格内向不稳定、敏感多虑。\r\n</div>\r\n<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	发病倾向：易患脏躁、<a target="_blank" href="https://baike.baidu.com/item/%E6%A2%85%E6%A0%B8%E6%B0%94">梅核气</a>、<a target="_blank" href="https://baike.baidu.com/item/%E7%99%BE%E5%90%88%E7%97%85">百合病</a>及<a target="_blank" href="https://baike.baidu.com/item/%E9%83%81%E8%AF%81">郁证</a>等。\r\n</div>\r\n<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	对外界环境适应能力：对精神刺激适应能力较差；不适应阴雨天气。\r\n</div>', 'admin', '2018-05-02 15:51:54'),
(13, '特禀型（I型）', '<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	总体特征：先天失常，以生理缺陷、过敏反应等为主要特征。\r\n</div>\r\n<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	形体特征：<a target="_blank" href="https://baike.baidu.com/item/%E8%BF%87%E6%95%8F%E4%BD%93%E8%B4%A8%E8%80%85">过敏体质者</a>一般无特殊；先天禀赋异常者或有畸形，或有生理缺陷。\r\n</div>\r\n<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	常见表现：过敏体质者常见哮喘、风团、咽痒、鼻塞、喷嚏等；患遗传性疾病者有垂直遗传、先天性、家族性特征；患胎传性疾病者具有母体影响胎儿个体生长发育及相关疾病特征。\r\n</div>\r\n<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	心理特征：随禀质不同情况各异。\r\n</div>\r\n<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	发病倾向：过敏体质者易患哮喘、<a target="_blank" href="https://baike.baidu.com/item/%E8%8D%A8%E9%BA%BB%E7%96%B9">荨麻疹</a>、花粉症及药物过敏等；遗传性疾病如血友病、先天愚型等；胎传性疾病如五迟（立迟、<a target="_blank" href="https://baike.baidu.com/item/%E8%A1%8C%E8%BF%9F">行迟</a>、发迟、齿迟和语迟）、<a target="_blank" href="https://baike.baidu.com/item/%E4%BA%94%E8%BD%AF">五软</a>（<a target="_blank" href="https://baike.baidu.com/item/%E5%A4%B4%E8%BD%AF">头软</a>、<a target="_blank" href="https://baike.baidu.com/item/%E9%A1%B9%E8%BD%AF">项软</a>、<a target="_blank" href="https://baike.baidu.com/item/%E6%89%8B%E8%B6%B3%E8%BD%AF">手足软</a>、肌肉软、口软）、<a target="_blank" href="https://baike.baidu.com/item/%E8%A7%A3%E9%A2%85">解颅</a>、胎惊等。\r\n</div>\r\n<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	对外界环境适应能力：适应能力差，如<a target="_blank" href="https://baike.baidu.com/item/%E8%BF%87%E6%95%8F%E4%BD%93%E8%B4%A8%E8%80%85">过敏体质者</a>对易致过敏季节适应能力差，易引发宿疾。\r\n</div>', 'admin', '2018-05-02 15:52:42');

-- --------------------------------------------------------

--
-- 表的结构 `tr_user`
--

CREATE TABLE IF NOT EXISTS `tr_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '用户ID',
  `username` varchar(100) NOT NULL COMMENT '账号',
  `password` varchar(255) NOT NULL COMMENT '用户密码',
  `mobile` varchar(225) NOT NULL COMMENT '手机号码',
  `time` datetime NOT NULL COMMENT '注册时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=53 ;

--
-- 转存表中的数据 `tr_user`
--

INSERT INTO `tr_user` (`id`, `username`, `password`, `mobile`, `time`) VALUES
(52, '123', '202cb962ac59075b964b07152d234b70', '13403991030', '2018-04-26 15:03:13'),
(51, '周雪迎', '3f67fd97162d20e6fe27748b5b372509', '13403991030', '2018-04-24 21:36:39'),
(50, '皮卡丘', '202cb962ac59075b964b07152d234b70', '13403991031', '2018-04-24 17:58:41');

-- --------------------------------------------------------

--
-- 表的结构 `tr_video`
--

CREATE TABLE IF NOT EXISTS `tr_video` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(225) NOT NULL COMMENT '视频文件名',
  `url` varchar(225) NOT NULL COMMENT '文件路径',
  `statue` varchar(225) NOT NULL COMMENT '是否显示',
  `user` varchar(225) NOT NULL COMMENT '上传账号',
  `time` datetime NOT NULL COMMENT '上传时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='视频表' AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `tr_video`
--

INSERT INTO `tr_video` (`id`, `name`, `url`, `statue`, `user`, `time`) VALUES
(1, '088胡希恕《金匮要略》讲座06-06-02（黄芪桂枝五物汤）.mp4', '20180423\\b07db882d50faf54fff707d8ca7a7465.mp4', '是', 'admin', '2018-04-23 17:07:45'),
(2, '159胡希恕《金匮要略》讲座10-10-12（大柴胡汤）.mp4', '20180423\\ee4ff51be61a3268d1ee7c616c93f413.mp4', '是', 'admin', '2018-04-23 17:09:46'),
(6, '342胡希恕《金匮要略》讲座18-16-17（泻心汤）.mp4', '20180511\\8cd1533e8ea18a43da6fd1dda1fa9f45.mp4', '是', 'admin', '2018-05-11 10:43:10'),
(7, '220胡希恕《金匮要略》讲座13-12-16（苓桂术甘汤）.mp4', '20180511\\8ce43e2c7bb661f968ead09ed9c9313e.mp4', '是', 'admin', '2018-05-11 10:47:36'),
(8, '342胡希恕《金匮要略》讲座18-16-17（泻心汤）.mp4', '20180511\\004031f4fdcd23577d0dc37a409065d8.mp4', '是', 'admin', '2018-05-11 10:49:06'),
(9, '360胡希恕《金匮要略》讲座19-17-15（小柴胡汤）.mp4', '20180511\\99315dd0171f3fced335ac37ae164f84.mp4', '是', 'admin', '2018-05-11 11:08:04');

-- --------------------------------------------------------

--
-- 表的结构 `tr_xuewei`
--

CREATE TABLE IF NOT EXISTS `tr_xuewei` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(225) NOT NULL COMMENT '图片',
  `name` varchar(225) NOT NULL COMMENT '名称',
  `content` mediumtext NOT NULL COMMENT '内容',
  `statue` varchar(225) NOT NULL COMMENT '是否显示',
  `user` varchar(225) NOT NULL COMMENT '发布人',
  `time` datetime NOT NULL COMMENT '上传时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `tr_xuewei`
--

INSERT INTO `tr_xuewei` (`id`, `image`, `name`, `content`, `statue`, `user`, `time`) VALUES
(1, '/uploads/20180505\\376556cd3d2774085a1bad41faaf8129.jpg', '百会穴', '<span style="color:#333333;font-family:arial, 宋体, sans-serif;font-size:14px;background-color:#FFFFFF;">百会穴位于头顶正中线与两耳尖连线的交叉处，穴居颠顶，联系脑部：可见，百会穴与脑密切联系，是调节大脑功能的要穴。百脉之会，贯达全身。头为诸阳之会，百脉之宗，而百会穴则为各经脉气会聚之处。穴性属阳，又于阳中寓阴，故能通达阴阳脉络，连贯周身</span><a target="_blank" href="https://baike.baidu.com/item/%E7%BB%8F%E7%A9%B4">经穴</a><span style="color:#333333;font-family:arial, 宋体, sans-serif;font-size:14px;background-color:#FFFFFF;">，对于调节机体的阴阳平衡起着重要的作用。主治： 头痛，眩晕，休克，高血压，脱肛等。</span>', '是', 'admin', '2018-05-05 10:11:09'),
(2, '/uploads/20180505\\8792f3e2d8360b9bffb1b3e9d876a425.jpg', '太阳穴', '<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	太阳穴在<a target="_blank" href="https://baike.baidu.com/item/%E8%80%B3%E5%BB%93">耳廓</a>前面，<a target="_blank" href="https://baike.baidu.com/item/%E5%89%8D%E9%A2%9D">前额</a>两侧，外眼角延长线的上方。太阳穴在中医<a target="_blank" href="https://baike.baidu.com/item/%E7%BB%8F%E7%BB%9C%E5%AD%A6">经络学</a>上被称为“<a target="_blank" href="https://baike.baidu.com/item/%E7%BB%8F%E5%A4%96%E5%A5%87%E7%A9%B4">经外奇穴</a>”，也是最早被各家武术拳谱列为要害部位的“<a target="_blank" href="https://baike.baidu.com/item/%E6%AD%BB%E7%A9%B4">死穴</a>”之一。\r\n</div>\r\n<p style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	<a target="_blank" href="https://baike.baidu.com/item/%E5%B0%91%E6%9E%97%E6%8B%B3">少林拳</a>中记载，太阳穴一经点中“轻则昏厥，重则殒命”。现代医学证明，打击太阳穴，可使人短暂晕倒或造成<a target="_blank" href="https://baike.baidu.com/item/%E8%84%91%E9%9C%87%E8%8D%A1">脑震荡</a>使人意识丧失。\r\n</p>\r\n<p style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	<br />\r\n</p>\r\n<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	1、太阳穴是颅骨骨板最薄弱的部位\r\n</div>\r\n<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	<div class="lemma-picture text-pic layout-right" style="border:1px solid #E0E0E0;margin:0px 0px 3px;">\r\n		<a class="image-link" href="https://baike.baidu.com/pic/%E5%A4%AA%E9%98%B3%E7%A9%B4/1043109/0/95afee1f9566ffb5e0fe0bb5?fr=lemma&ct=single" target="_blank"><img class="" src="https://gss3.bdstatic.com/7Po3dSag_xI4khGkpoWK1HF6hhy/baike/s%3D220/sign=7865b219252dd42a5b0906a9333a5b2f/b90e7bec54e736d180616b789b504fc2d5626954.jpg" alt="太阳穴" style="width:210px;height:220px;" /></a><span class="description" style="color:#555555;font-size:12px;font-family:宋体;line-height:15px;">太阳穴</span> \r\n	</div>\r\n太阳穴的位置是<a target="_blank" href="https://baike.baidu.com/item/%E9%A2%85%E9%A1%B6%E9%AA%A8">颅顶骨</a>、额骨、<a target="_blank" href="https://baike.baidu.com/item/%E8%9D%B6%E9%AA%A8">蝶骨</a>及<a target="_blank" href="https://baike.baidu.com/item/%E9%A2%9E%E9%AA%A8">颞骨</a>的交汇之处，称为“翼点”或“翼缝”。此处是颅骨骨板最薄，而且是骨质脆弱的<a target="_blank" href="https://baike.baidu.com/item/%E9%83%A8%E4%BD%8D">部位</a>。颅骨为一层坚硬的<a target="_blank" href="https://baike.baidu.com/item/%E9%AA%A8%E6%9D%BF">骨板</a>，对脑起着保护作用。颅骨骨板各处薄厚不一，平均厚度为5毫米，最厚处为1厘米。而太阳穴处的骨板厚度仅为1——2毫米，是颅骨最薄弱的部份，受到暴力打击，很容易形成<a target="_blank" href="https://baike.baidu.com/item/%E9%AA%A8%E6%8A%98">骨折</a>。骨折后可直接影响脑的功能。\r\n</div>\r\n<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	2、太阳穴深层颅内有众多的出血来源\r\n</div>\r\n<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	在颅内的这一部位，血管分布相当丰富，因此构成了众多的颅内出血来源。起于颌内动脉的脑膜中动脉，在硬脑膜外沿颞骨鳞部向上行走，并在太阳穴处的颞骨鳞部分支为脑膜中动脉前、后两支。同时，<a target="_blank" href="https://baike.baidu.com/item/%E8%84%91%E8%86%9C">脑膜</a>中静脉也与脑膜中动脉相伴行。在颅内更深一层的硬脑膜下，还分布有大脑颞叶的皮质动、<a target="_blank" href="https://baike.baidu.com/item/%E9%9D%99%E8%84%89">静脉</a>。\r\n</div>\r\n<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	太阳穴遭暴力打击，不仅可以因颅骨颞鳞部骨折损伤脑膜中动脉，而且常常可以在颅骨完整的情况下损伤脑膜中动、静脉，在中颅窝基底部形成<a target="_blank" href="https://baike.baidu.com/item/%E7%A1%AC%E8%86%9C%E5%A4%96%E8%A1%80%E8%82%BF">硬膜外血肿</a>。脑膜中动脉破裂形成<a target="_blank" href="https://baike.baidu.com/item/%E8%A1%80%E8%82%BF">血肿</a>，不仅十分迅速，而且后果极为严重。脑膜中动脉破裂，可使人立即陷入昏迷，昏迷后的间歇清醒期极短，多则不足1小时，少则只有10分钟，常常在损伤两小时后完全昏迷。如果伤后6小时仍不能有效地制止出血，即可以致命。\r\n</div>\r\n<p>\r\n	<br />\r\n</p>', '是', 'admin', '2018-05-05 10:16:37');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
