
-- -----------------------------
-- Table structure for `tr_admin`
-- -----------------------------
DROP TABLE IF EXISTS `tr_admin`;
CREATE TABLE `tr_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '管理员ID',
  `adminid` varchar(20) NOT NULL COMMENT '工号',
  `adminname` varchar(100) NOT NULL COMMENT '管理员姓名',
  `role` int(10) NOT NULL COMMENT '角色',
  `adminpassword` varchar(255) NOT NULL COMMENT '管理员密码',
  `adminphone` varchar(100) NOT NULL COMMENT '手机号码',
  `adminmail` varchar(100) NOT NULL COMMENT '邮箱',
  `time` int(20) NOT NULL COMMENT '添加时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `tr_admin`
-- -----------------------------
INSERT INTO `tr_admin` VALUES ('3', '1601', '邓', '5', 'e10adc3949ba59abbe56e057f20f883e', '15611111111', '1234@qq.com', '1500951621');
INSERT INTO `tr_admin` VALUES ('4', 'admin', 'admin', '1', 'ad6fad98140c6c62ad766981943211ad', '15611111111', '123@qq.com', '1500953409');
INSERT INTO `tr_admin` VALUES ('27', '1606', '张', '5', 'e10adc3949ba59abbe56e057f20f883e', '15611111111', '12223@qq.com', '1501056518');
INSERT INTO `tr_admin` VALUES ('25', '1604', '张', '5', 'e10adc3949ba59abbe56e057f20f883e', '15611111111', '123@qq.com', '1501056487');
INSERT INTO `tr_admin` VALUES ('26', '1605', '邓', '5', 'e10adc3949ba59abbe56e057f20f883e', '15611111111', '123@qq.com', '1501056503');
INSERT INTO `tr_admin` VALUES ('30', 'admins', '测试人员1', '5', '2aefc34200a294a3cc7db81b43a81873', '15538191234', '1231111@qq.com', '1503277193');
INSERT INTO `tr_admin` VALUES ('34', '1709', '周雪迎', '12', '5ad074481c3675ecc2ba19b491e79218', '15538191283', '2311478620@qq.com', '1509669688');
INSERT INTO `tr_admin` VALUES ('35', '1710', 'ALL', '13', '5ad074481c3675ecc2ba19b491e79218', '13071021121', '2311478620@qq.com', '1509670164');

-- -----------------------------
-- Table structure for `tr_article`
-- -----------------------------
DROP TABLE IF EXISTS `tr_article`;
CREATE TABLE `tr_article` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '资讯id',
  `title` varchar(255) NOT NULL COMMENT '资讯标题',
  `type` int(11) NOT NULL COMMENT '资讯类别',
  `description` text NOT NULL COMMENT '文章描述',
  `writerid` varchar(20) NOT NULL COMMENT '发布者工号',
  `writername` varchar(100) NOT NULL COMMENT '发布者姓名',
  `content` mediumtext COMMENT '资讯内容',
  `statue` varchar(10) NOT NULL DEFAULT '是' COMMENT '是否显示',
  `createtime` int(20) NOT NULL COMMENT '发布时间',
  `visit` int(11) NOT NULL DEFAULT '1' COMMENT '访问量',
  `articletime` date NOT NULL COMMENT '新闻时间',
  `sort` int(11) NOT NULL DEFAULT '8' COMMENT '顺序',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `tr_article`
-- -----------------------------
INSERT INTO `tr_article` VALUES ('41', '国家邮政局副局长邢小江调研郑州国际陆港', '11', '                                                                                                                                                 国家邮政局副局长邢小江调研郑州国际陆港', 'admin', 'admin', '<p align=\"center\">\r\n	<img src=\"/transport/public/static/admin/kindeditor/php/../../../uploads/ueditor/image/20170912/20170912080526_87373.jpg\" alt=\"\" /> \r\n</p>\r\n<p style=\"text-indent:2em;\" align=\"left\">\r\n	<span style=\"font-size:12.0pt;font-family:宋体;color:black;background:#FCFCFC;\"> </span><span style=\"font-size:12.0pt;font-family:宋体;color:black;background:#FCFCFC;\"><span style=\"font-size:16px;font-family:Microsoft YaHei;\"></span><span style=\"font-size:16px;font-family:Microsoft YaHei;\"></span><span style=\"font-size:16px;font-family:Microsoft YaHei;\"></span><span style=\"font-size:16px;font-family:Microsoft YaHei;\"></span><span style=\"font-size:16px;font-family:Microsoft YaHei;\"><span style=\"font-size:16px;\"></span>2017年2月14日，国家邮政局副局长邢小江调研郑州国际陆港。在河南省邮政管理局局长丁平，河南物资集团董事长、陆港公司总经理赵文明的陪同下，先后调研了郑欧班列综合服务中心、郑欧班列进口商品展示体验中心、郑州国际陆港进出口商品防伪溯源系统、郑州国际陆港大数据云计算中心等。</span></span> \r\n</p>\r\n<p style=\"text-indent:2em;\">\r\n	<span style=\"font-size:16px;font-family:Microsoft YaHei;color:black;background:#FCFCFC none repeat scroll 0% 0%;\"><span style=\"font-size:16px;font-family:Microsoft YaHei;color:black;background:#FCFCFC none repeat scroll 0% 0%;\"> 调研后，双方举行了座谈，邢小江副局长首先肯定了陆港公司取得的显著成绩，对物流行业的现状、未来发展的模式等方面发表了重要看法。双方对提升现代物流业和快递业的服务水平，充分利用现代科技打造综合服务模式是增强企业竞争力的有效手段，在共同打造国际品牌，走向国际市场方面，有着共同的诉求和合作愿望，可充分利用各自的资源，优势互补，共同为“一带一路”建献力量。</span></span> \r\n</p>', '是', '1505188522', '1', '2017-02-16', '1');
INSERT INTO `tr_article` VALUES ('42', '郑州陆港公司被评为“全国物流行业先进集体”', '11', '郑州陆港公司被评为“全国物流行业先进集体”', 'admin', 'admin', '<div align=\"center\">\r\n	<img src=\"/transport/public/static/admin/kindeditor/php/../../../uploads/ueditor/image/20170912/20170912055641_37007.jpg\" alt=\"\" />\r\n</div>', '是', '1505188615', '1', '2017-05-27', '5');
INSERT INTO `tr_article` VALUES ('40', '河南省委常委、郑州市委书记马懿调研陆港公司', '11', '                                                                                                                                                                                                                                                                                                                                                 河南省省委常委、郑州市市委书记马懿带领市委市政府等领导一行调研郑州国际陆港公司', 'admin', 'admin', '<p style=\"text-indent:2em;\" align=\"center\">\r\n	<img src=\"/transport/public/static/admin/kindeditor/php/../../../uploads/ueditor/image/20170912/20170912084725_47864.jpg\" alt=\"\" /> \r\n</p>\r\n<p class=\"MsoNormal\" style=\"text-indent:33.0pt;\">\r\n	<span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;font-size:16px;\"=\"\">5</span><span style=\"font-family:Microsoft YaHei;color:#3E3E3E;font-size:16px;\">月</span><span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;font-size:16px;\"=\"\">7</span><span style=\"font-family:Microsoft YaHei;color:#3E3E3E;font-size:16px;\">日，河南省省委常委、郑州市市委书记马懿带领市委市政府等领导一行调研郑州国际陆港公司。市委市政府领导在经开区党工委书记、管委会主任崔绍营和河南物资集团公司董事长兼郑州国际陆港公司总经理赵文明等人的陪同下，先后参观了郑欧班列发车点、郑欧班列综合服务中心。</span> \r\n</p>\r\n<p class=\"MsoNormal\" style=\"text-indent:33.0pt;\">\r\n	<span style=\"font-size:16px;font-family:Microsoft YaHei;color:#3E3E3E;\">陆港公司总经理赵文明提到：</span><span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;\"=\"\">“</span><span style=\"font-size:16px;font-family:Microsoft YaHei;color:#3E3E3E;\">政府引导，企业化运作的运营模式，使得郑欧班列从开行之初运营成本每年下降</span><span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;\"=\"\">25%~30%</span><span style=\"font-size:16px;font-family:Microsoft YaHei;color:#3E3E3E;\">，在中欧班列中市场化程度最高。郑欧班列拓展海铁、空铁、公铁等多式联运，实现了去程和回程公路提送货、场站拆装箱、报关报检、铁路运输等全程</span><span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;\"=\"\">“</span><span style=\"font-size:16px;font-family:Microsoft YaHei;color:#3E3E3E;\">门到门</span><span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;\"=\"\">”</span><span style=\"font-size:16px;font-family:Microsoft YaHei;color:#3E3E3E;\">服务。在境内以郑州为核心，货物集疏范围覆盖</span><span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;\"=\"\">1500</span><span style=\"font-size:16px;font-family:Microsoft YaHei;color:#3E3E3E;\">公里半径，业务覆盖了全国四分之三省市；在境外，以德国汉堡为核心，网络遍布欧盟和俄罗斯及中亚地区</span><span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;\"=\"\">121</span><span style=\"font-size:16px;font-family:Microsoft YaHei;color:#3E3E3E;\">个城市。另外，郑欧班列向东与沿海港口对接，并通过过境中转，郑欧班列以公</span><span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;\"=\"\">—</span><span style=\"font-size:16px;font-family:Microsoft YaHei;color:#3E3E3E;\">铁</span><span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;\"=\"\">—</span><span style=\"font-size:16px;font-family:Microsoft YaHei;color:#3E3E3E;\">海</span><span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;\"=\"\">—</span><span style=\"font-size:16px;font-family:Microsoft YaHei;color:#3E3E3E;\">空联运与日、韩等亚太国家广泛建立业务合作关系。</span><span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;\"=\"\">”</span> \r\n</p>\r\n<p class=\"MsoNormal\" style=\"text-indent:33.0pt;\">\r\n	<span style=\"font-size:16px;font-family:Microsoft YaHei;color:#3E3E3E;\">郑欧班列从开行以来，综合竞争力在全国中欧班列中持续保持领先地位。运行三年多，郑欧班列已实现每周</span><span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;\"=\"\">“</span><span style=\"font-size:16px;font-family:Microsoft YaHei;color:#3E3E3E;\">去四回四</span><span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;\"=\"\">”</span><span style=\"font-size:16px;font-family:Microsoft YaHei;color:#3E3E3E;\">常态化开行，并即将实现</span><span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;\"=\"\">“</span><span style=\"font-size:16px;font-family:Microsoft YaHei;color:#3E3E3E;\">去五回五</span><span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;\"=\"\">”</span><span style=\"font-size:16px;font-family:Microsoft YaHei;color:#3E3E3E;\">。</span> \r\n</p>\r\n<p class=\"MsoNormal\" style=\"text-indent:33.0pt;\">\r\n	<span style=\"font-size:10.5pt;font-family:宋体;color:#3E3E3E;background:#FCFCFC;\"><span style=\"font-size:16px;font-family:\" color:#3e3e3e;background:#fcfcfc;\"=\"\"> </span><span style=\"font-size:16px;font-family:Microsoft YaHei;color:#3E3E3E;\">依托遍布欧洲、中亚和日韩等地区的业务网络，郑欧班列</span><span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;\"=\"\">“</span><span style=\"font-size:16px;font-family:Microsoft YaHei;color:#3E3E3E;\">运贸一体化</span><span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;\"=\"\">”</span><span style=\"font-size:16px;font-family:Microsoft YaHei;color:#3E3E3E;\">业务全面铺开，通过</span><span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;\"=\"\">“</span><span style=\"font-size:16px;font-family:Microsoft YaHei;color:#3E3E3E;\">直采直运直营</span><span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;\"=\"\">”</span><span style=\"font-size:16px;font-family:Microsoft YaHei;color:#3E3E3E;\">与</span><span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;\"=\"\">“</span><span style=\"font-size:16px;font-family:Microsoft YaHei;color:#3E3E3E;\">一带一路</span><span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;\"=\"\">”</span><span style=\"font-size:16px;font-family:Microsoft YaHei;color:#3E3E3E;\">沿线国家</span><span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;\"=\"\">300</span><span style=\"font-size:16px;font-family:Microsoft YaHei;color:#3E3E3E;\">多家制造商、贸易商等建立直接合作关系。随着郑欧商城电商平台的投入运营，各线下渠道的不断拓展，郑欧班列进口商品销售额</span><span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;\"=\"\">2016</span><span style=\"font-size:16px;font-family:Microsoft YaHei;color:#3E3E3E;\">年比</span><span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;\"=\"\">2015</span><span style=\"font-size:16px;font-family:Microsoft YaHei;color:#3E3E3E;\">年增长</span><span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;\"=\"\">180</span><span style=\"font-size:16px;font-family:Microsoft YaHei;color:#3E3E3E;\">％。同时，郑州陆港跨境通依托国内中部地区首个多式联运海关监管中心，打造中欧班列特色跨境电商综合服务平台，将铁路的运力优势与空运的快捷优势有机结合，为中外客户提供了多样化的跨境电商综合解决方案。</span></span> \r\n</p>\r\n<p class=\"MsoNormal\" style=\"text-indent:33.0pt;\">\r\n	<span style=\"font-size:10.5pt;font-family:宋体;color:#3E3E3E;background:#FCFCFC;\"><span style=\"font-size:10.5pt;font-family:宋体;color:#3E3E3E;background:#FCFCFC;\"><span style=\"font-size:16px;font-family:Microsoft YaHei;color:#3E3E3E;\">如今，郑州国际陆港公司自主开发完成的多式联运场站管理系统、多式联运监管中心通关一体化云平台、郑欧商城电商网站系统、公路物流管理系统、快递柜信息系统等近</span><span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;\"=\"\">20</span><span style=\"font-size:16px;font-family:Microsoft YaHei;color:#3E3E3E;\">个配套信息系统投入使用，郑州陆港跨境商贸业务量保持快速提升态势。</span></span></span> \r\n</p>\r\n<p class=\"MsoNormal\" style=\"text-indent:33.0pt;\">\r\n	<span style=\"font-size:16px;font-family:Microsoft YaHei;color:#3E3E3E;\"><span style=\"font-size:16px;font-family:Microsoft YaHei;color:#3E3E3E;\"><span style=\"font-size:16px;font-family:Microsoft YaHei;color:#3E3E3E;\"><span style=\"font-size:16px;font-family:Microsoft YaHei;color:#3E3E3E;\">与此同时，郑州国际陆港公司大力发展汽车整车进口、粮食进口、国际运邮、冷链物流等特色口岸经济。此前，郑州市获批国家发改委中欧区域政策合作案例地区，郑州国际陆港陆港构筑了中欧贸易的重要出入门户，成为河南自贸区的核心试验田，将为郑州市打造成为国际商都持续增加强劲动力。</span></span></span></span><br />\r\n<span style=\"font-family:宋体;color:#3E3E3E;background:#FCFCFC none repeat scroll 0% 0%;font-size:16px;\"></span><span style=\"font-size:9.0pt;font-family:\" color:black;background:#fcfcfc;\"=\"\"></span><span style=\"font-family:\" color:#3e3e3e;background:#fcfcfc;font-size:16px;\"=\"\"></span><span style=\"font-family:宋体;color:#3E3E3E;background:#FCFCFC none repeat scroll 0% 0%;font-size:16px;\"></span><span style=\"font-family:\" color:#3e3e3e;background:#fcfcfc;\"=\"\"></span> \r\n</p>\r\n<p>\r\n	<br />\r\n</p>', '是', '1505188182', '1', '2017-05-16', '3');
INSERT INTO `tr_article` VALUES ('38', '国务院国资委主任调研郑州国际陆港公司', '11', '                                                                国务院国资委主任肖亚庆一行调研郑州国际陆港公司', 'admin', 'admin', '<p align=\"center\">\r\n	<img src=\"/transport/public/static/admin/kindeditor/php/../../../uploads/ueditor/image/20170912/20170912053658_94229.jpg\" alt=\"\" /> \r\n</p>\r\n<p align=\"center\">\r\n	<img src=\"/transport/public/static/admin/kindeditor/php/../../../uploads/ueditor/image/20170912/20170912053658_18195.jpg\" alt=\"\" /> \r\n</p>\r\n<p style=\"background:#FCFCFC none repeat scroll 0% 0%;text-indent:2em;\">\r\n	<span style=\"font-size:10.5pt;font-family:\" color:black;background:#fcfcfc;\"=\"\"> <span style=\"font-size:16px;\"> 6</span></span><span style=\"font-size:10.5pt;font-family:\" color:black;background:#fcfcfc;\"=\"\"><span style=\"font-size:16px;font-family:Microsoft YaHei;\">月</span><span style=\"font-size:16px;font-family:Microsoft YaHei;\">4</span><span style=\"font-size:16px;font-family:Microsoft YaHei;\">日下午，国务院国资委主任肖亚庆一行调研郑州国际陆港公司，在河南省副省长张维宁、河南省国资委主任李涛等领导的陪同下参观了郑欧班列综合服务中心、郑欧班列进口商品展示体验中心、多联集疏中心、国际陆港防伪溯源中心、大数据云机房等。河南物资集团公司董事长兼郑州国际陆港公司总经理赵文明全程陪同并讲解。</span></span><span style=\"font-family:\" color:#3e3e3e;\"=\"\"></span> \r\n</p>\r\n<p style=\"text-indent:2em;background:#FCFCFC none repeat scroll 0% 0%;\">\r\n	<span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:black;background:#fcfcfc;\"=\"\">在听取了赵文明总经理有关公司的各项业务进展情况汇报后，肖主任高度评价了郑州国际陆港公司取得的成绩，勉励郑州国际陆港公司要积极发挥国有企业的优势，同时也要借鉴民营企业的优点，使公司不断做大做强。郑州拥有开行郑欧班列的种种优势，要继续巩固郑欧班列在中欧班列中的领先地位。</span><span style=\"font-family:\" color:#3e3e3e;\"=\"\"></span> \r\n</p>\r\n<p style=\"text-indent:2em;background:#FCFCFC none repeat scroll 0% 0%;\">\r\n	<span style=\"font-size:10.5pt;font-family:\" color:black;background:#fcfcfc;\"=\"\"><span style=\"font-size:16px;font-family:Microsoft YaHei;\">郑欧班列成为河南省一张靓丽的名片，得到了社会各界的广泛关注，见证了河南积极融入对接</span><span style=\"font-size:16px;font-family:Microsoft YaHei;\"> “</span><span style=\"font-size:16px;font-family:Microsoft YaHei;\">一带一路</span><span style=\"font-size:16px;font-family:Microsoft YaHei;\">”</span><span style=\"font-size:16px;font-family:Microsoft YaHei;\">战略所取得的辉煌成果。郑州地处中国经济版图中心位置，是东、中、西三大经济板块关键链接城市，同时是环渤海经济圈、长三角经济圈、珠三角经济圈相互联通的关键节点城市，郑欧班列比其他开行中欧班列的城市具有得天独厚的先天优势。</span></span><span style=\"font-family:\" color:#3e3e3e;\"=\"\"></span> \r\n</p>\r\n<p style=\"text-indent:2em;background:#FCFCFC none repeat scroll 0% 0%;\">\r\n	<span style=\"font-size:10.5pt;font-family:\" color:black;background:#fcfcfc;\"=\"\"><span style=\"font-size:16px;font-family:Microsoft YaHei;\">在大好的发展形势下，郑州国际陆港公司紧跟时代脉搏，相继自主开发完成了多式联运场站管理系统、多式联运监管中心通关一体化云平台、郑欧商城电商网站系统、公路物流管理系统、快递柜信息系统、陆港云服务系统、共享电动汽车等近</span><span style=\"font-size:16px;font-family:Microsoft YaHei;\">20</span><span style=\"font-size:16px;font-family:Microsoft YaHei;\">个配套信息系统。与此同时郑州陆港跨境商贸业务量呈现快速提升态势，郑欧班列进口商品一度得到市场的强烈反响。</span></span><span style=\"font-family:\" color:#3e3e3e;\"=\"\"></span> \r\n</p>\r\n<p style=\"text-indent:2em;\">\r\n	<br />\r\n</p>\r\n<p style=\"text-indent:2em;\">\r\n	<br />\r\n</p>\r\n<p style=\"text-indent:2em;\">\r\n	<br />\r\n</p>\r\n<p style=\"text-indent:2em;\">\r\n	<br />\r\n</p>', '是', '1505187481', '1', '2017-06-04', '6');
INSERT INTO `tr_article` VALUES ('39', '交通部部长李小鹏调研郑州国际陆港公司', '11', '                                                                                                                交通部部长李小鹏在河南省省长陈润儿的陪同下调研郑州国际陆港公司', 'admin', 'admin', '<div align=\"center\">\r\n	<p align=\"center\">\r\n		<img src=\"/transport/public/static/admin/kindeditor/php/../../../uploads/ueditor/image/20170912/20170912054122_87623.jpg\" alt=\"\" width=\"910\" height=\"550\" /> \r\n	</p>\r\n	<p align=\"left\">\r\n		<span style=\"font-size:10.5pt;font-family:\" color:#3e3e3e;background:#fcfcfc;\"=\"\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;\"=\"\">5</span><span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;\"=\"\">月</span><span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;\"=\"\">23</span><span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;\"=\"\">日，交通部部长李小鹏在河南省省长陈润儿的陪同下调研郑州国际陆港公司。河南物资集团公司董事长兼郑州国际陆港公司总经理赵文明向领导一行汇报了郑州国际陆港公司发展状况。</span><span style=\"font-size:12.0pt;font-family:\" color:#3e3e3e;background:#fcfcfc;\"=\"\"><br />\r\n</span><span style=\"font-size:16px;font-family:\" color:#3e3e3e;background:#fcfcfc;\"=\"\"> </span><span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;\"=\"\">在郑欧班列综合服务中心，李小鹏部长听取了赵文明总经理关于郑州国际陆港公司开展多式联运业务的现状以及订舱系统、集装箱管理系统介绍后指出：目前全国有多家实体都在开发多式联运信息平台，但能做到像郑州国际陆港公司一样的深度和广度的很少。李小鹏部长当即安排交通部服务司负责人马上进行详细对接，并考虑给以大力扶持。</span></span> \r\n	</p>\r\n	<p align=\"left\">\r\n		<span style=\"font-size:10.5pt;font-family:\" color:#3e3e3e;background:#fcfcfc;\"=\"\"><span style=\"font-size:10.5pt;font-family:\" color:#3e3e3e;background:#fcfcfc;\"=\"\"></span></span> \r\n	</p>\r\n	<p align=\"left\">\r\n		<span style=\"font-size:10.5pt;font-family:\" color:#3e3e3e;background:#fcfcfc;\"=\"\"><span style=\"font-size:10.5pt;font-family:\" color:#3e3e3e;background:#fcfcfc;\"=\"\"></span></span> \r\n	</p>\r\n	<p style=\"text-indent:21.0pt;background:#FCFCFC;\" align=\"left\">\r\n		<span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;\"=\"\">2016</span><span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;\"=\"\">年</span><span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;\"=\"\">5</span><span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;\"=\"\">月，郑欧国际货运班列</span><span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;\"=\"\">“</span><span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;\"=\"\">一干三支</span><span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;\"=\"\">”</span><span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;\"=\"\">项目入选全国首批多式联运示范工程。该项目主要依托郑欧班列突出的运营优势、组织优势、集疏网络优势、人才队伍优势，以郑州国际陆港公司为运营主体，重点打造</span><span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;\"=\"\">“</span><span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;\"=\"\">一干</span><span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;\"=\"\">”</span><span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;\"=\"\">（郑欧班列）</span><span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;\"=\"\">“</span><span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;\"=\"\">三支</span><span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;\"=\"\">”</span><span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;\"=\"\">（陇海、京广通道公铁联运班列、郑日韩海公铁联运班列）三条精品示范线路，项目建立了多式联运标准体系，实现了高效组织、往返双向、均衡运输，社会效益和经济效益显著，为国内多式联运发展起到了示范创新作用。</span> \r\n	</p>\r\n	<p style=\"text-indent:21.0pt;background:#FCFCFC;\" align=\"left\">\r\n		<span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;\"=\"\"><span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;\"=\"\">先天的地理优势，让郑州成为东、中、西三大经济板块交通、物流要素的必经之地，环渤海经济圈、长三角经济圈、珠三角三大经济圈的联通融汇之地，让郑州物流的辐射范围更大，无可比拟的铁路交通优势让郑州开行中欧班列的硬件优势不可比拟。国家战略使得郑州重现定位，面临百年来前所未有的发展先机，区内活跃的经济发展局面，为郑欧班列的开行提供源源不断的货物。</span></span> \r\n	</p>\r\n	<p style=\"text-indent:21.0pt;background:#FCFCFC;\" align=\"left\">\r\n		<span style=\"font-size:16px;font-family:\" color:#3e3e3e;background:#fcfcfc;\"=\"\"><span style=\"font-size:10.5pt;font-family:\" color:#3e3e3e;background:#fcfcfc;\"=\"\"><span style=\"font-size:10.5pt;font-family:\" color:#3e3e3e;background:#fcfcfc;\"=\"\"><span></span></span><span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;\"=\"\">郑欧班列受到市场的热捧，正是从一个侧面反映了河南自贸区建设启动以来所取得的成绩，见证了河南积极融入对接</span><span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;\"=\"\"> “</span><span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;\"=\"\">一带一路</span><span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;\"=\"\">”</span><span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;\"=\"\">战略所取得的辉煌成果，这必将加快河南和外界的交流，对提升我省对外开放水平有很大的促进作用。</span></span><br />\r\n</span> \r\n	</p>\r\n	<p style=\"text-indent:21.0pt;background:#FCFCFC;\" align=\"left\">\r\n		<span style=\"font-size:16px;font-family:\" color:#3e3e3e;background:#fcfcfc;\"=\"\"></span> \r\n	</p>\r\n	<p style=\"background:#FCFCFC;\" align=\"left\">\r\n		<span style=\"font-family:\" color:#3e3e3e;\"=\"\"><br />\r\n</span> \r\n	</p>\r\n	<p style=\"background:#FCFCFC;\">\r\n		<span style=\"font-size:16px;font-family:\" color:#3e3e3e;background:#fcfcfc;\"=\"\"></span><br />\r\n<span style=\"font-family:\" color:#3e3e3e;\"=\"\"></span> \r\n	</p>\r\n<br />\r\n	<p>\r\n		<br />\r\n	</p>\r\n<br />\r\n	<p>\r\n		<br />\r\n	</p>\r\n	<p align=\"left\">\r\n		<span style=\"font-size:10.5pt;font-family:\" color:#3e3e3e;background:#fcfcfc;\"=\"\"><br />\r\n</span> \r\n	</p>\r\n	<p align=\"left\">\r\n		<span style=\"font-size:10.5pt;font-family:\" color:#3e3e3e;background:#fcfcfc;\"=\"\"><br />\r\n</span> \r\n	</p>\r\n	<p align=\"left\">\r\n		<span style=\"font-size:10.5pt;font-family:\" color:#3e3e3e;background:#fcfcfc;\"=\"\"><br />\r\n</span> \r\n	</p>\r\n	<p align=\"left\">\r\n		<span style=\"font-size:10.5pt;font-family:\" color:#3e3e3e;background:#fcfcfc;\"=\"\"></span> \r\n	</p>\r\n	<p align=\"left\">\r\n		<span style=\"font-size:10.5pt;font-family:\" color:#3e3e3e;background:#fcfcfc;\"=\"\"></span> \r\n	</p>\r\n</div>', '是', '1505187821', '1', '2017-05-24', '4');
INSERT INTO `tr_article` VALUES ('36', '赵文明总经理参加河南省现代物流发展高峰论坛', '11', '                                                                                                                                                                                                                                                                河南省现代物流业发展高峰论坛暨项目签约仪式在永和伯爵国际酒店举行', 'admin', 'admin', '<div align=\"center\">\r\n	<p style=\"text-indent:21.0pt;background:#FCFCFC;\" align=\"center\">\r\n		<img src=\"/transport/public/static/admin/kindeditor/php/../../../uploads/ueditor/image/20170912/20170912104558_93941.jpg\" alt=\"\" width=\"627\" height=\"627\" /> \r\n	</p>\r\n	<p style=\"text-indent:21.0pt;background:#FCFCFC;\" align=\"left\">\r\n		<span style=\"font-family:Microsoft YaHei;font-size:16px;\"> 6</span><span style=\"font-family:Microsoft YaHei;font-size:16px;\">月</span><span style=\"font-family:Microsoft YaHei;font-size:16px;\">28</span><span style=\"font-family:Microsoft YaHei;font-size:16px;\">日，河南省现代物流业发展高峰论坛暨项目签约仪式在永和伯爵国际酒店举行。本次大会由河南省政府副秘书长万旭主持，副省长舒庆发表主旨演讲。据了解，参与本次高峰论坛的还有来自境内外的世界</span><span style=\"font-family:Microsoft YaHei;font-size:16px;\">500</span><span style=\"font-family:Microsoft YaHei;font-size:16px;\">强高管，国内</span><span style=\"font-family:Microsoft YaHei;font-size:16px;\">500</span><span style=\"font-family:Microsoft YaHei;font-size:16px;\">强高管，全球物流百强、中国物流百强等企业代表。</span> \r\n	</p>\r\n<span style=\"font-family:Microsoft YaHei;font-size:16px;\"></span><span style=\"font-size:9.0pt;font-family:\" color:black;\"=\"\"></span> \r\n	<p style=\"text-indent:21.0pt;background:#FCFCFC;\" align=\"left\">\r\n		<span style=\"font-size:16px;font-family:Microsoft YaHei;\">郑州国际陆港公司作为特邀企业受邀参加，河南物资集团公司董事长兼郑州国际陆港公司总经理赵文明在会上发表演讲。</span><span style=\"font-family:\" color:#3e3e3e;\"=\"\"></span> \r\n	</p>\r\n	<p style=\"text-indent:21.0pt;background:#FCFCFC;\" align=\"left\">\r\n		<span style=\"font-size:16px;font-family:Microsoft YaHei;\">赵文明总经理提到，郑欧班列是中欧班列中唯一以</span><span style=\"font-size:16px;font-family:Microsoft YaHei;\">“</span><span style=\"font-size:16px;font-family:Microsoft YaHei;\">政府引导，企业化运作</span><span style=\"font-size:16px;font-family:Microsoft YaHei;\">”</span><span style=\"font-size:16px;font-family:Microsoft YaHei;\">为运营机制的班列，同时也是国内唯一实现往返均衡对开的班列，采用</span><span style=\"font-size:16px;font-family:Microsoft YaHei;\">“</span><span style=\"font-size:16px;font-family:Microsoft YaHei;\">一票式</span><span style=\"font-size:16px;font-family:Microsoft YaHei;\">”</span><span style=\"font-size:16px;font-family:Microsoft YaHei;\">全链条</span><span style=\"font-size:16px;font-family:Microsoft YaHei;\">“</span><span style=\"font-size:16px;font-family:Microsoft YaHei;\">门到门</span><span style=\"font-size:16px;font-family:Microsoft YaHei;\">”</span><span style=\"font-size:16px;font-family:Microsoft YaHei;\">运营模式，在各中欧班列中名列前茅。郑欧班列一端是活跃的东亚经济圈，一端是发达的欧洲经济圈，郑欧班列将这两端需求和供给连接在一起，为中欧企业铺就一条布满商机的国际大道。郑欧班列开通后，随之而来的是汽车进口、跨境电商、国际运邮、冷链物流等多元化业务，诚邀各方企业合作共赢。</span><span style=\"font-size:10.5pt;font-family:\" color:#3e3e3e;background:#fcfcfc;\"=\"\"></span> \r\n	</p>\r\n<span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;\"=\"\"></span><span style=\"font-size:10.5pt;font-family:\" color:#3e3e3e;background:#fcfcfc;\"=\"\"></span> <span style=\"font-family:\" color:#3e3e3e;\"=\"\"></span> \r\n	<p align=\"center\">\r\n		<img src=\"/transport/public/static/admin/kindeditor/php/../../../uploads/ueditor/image/20170912/20170912050026_58257.jpg\" alt=\"\" width=\"823\" height=\"474\" /> \r\n	</p>\r\n	<p style=\"text-indent:21.0pt;background:#FCFCFC;\" align=\"left\">\r\n		<span style=\"font-size:16px;font-family:\" color:#3e3e3e;background:#fcfcfc;\"=\"\"></span> \r\n	</p>\r\n	<p style=\"text-indent:21.0pt;background:#FCFCFC;\" align=\"left\">\r\n		<span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;\"=\"\">郑州地处中国经济版图中心位置，是东、中、西三大经济板块关键链接城市，同时是环渤海经济圈、长三角经济圈、珠三角经济圈相互联通的关键节点城市，得天独厚的先天优势助力郑欧班列成为河南省一张靓丽的名片，得到了社会各界的广泛关注，见证了河南积极融入对接</span><span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;\"=\"\"> “</span><span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;\"=\"\">一带一路</span><span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;\"=\"\">”</span><span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;\"=\"\">战略所取得的辉煌成果。</span><span style=\"font-family:\" color:#3e3e3e;\"=\"\"></span> \r\n	</p>\r\n	<p style=\"text-indent:21.0pt;background:#FCFCFC;\" align=\"left\">\r\n		<span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;\"=\"\">郑欧班列独有的恒温箱满足了对温度、湿度有较高要求的货物需要，可以在较短时间内把红酒、啤酒、牛奶、果汁等欧亚班列进口商品原汁原味地运输回郑州，让国内广大市民切实享受到了</span><span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;\"=\"\">“</span><span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;\"=\"\">一带一路</span><span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;\"=\"\">”</span><span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;\"=\"\">战略建设所带来的成果。</span><span style=\"font-size:10.5pt;font-family:\" color:#3e3e3e;background:#fcfcfc;\"=\"\"></span> \r\n	</p>\r\n	<p style=\"text-indent:21.0pt;background:#FCFCFC;\">\r\n		<span style=\"font-size:16px;font-family:\" color:#3e3e3e;background:#fcfcfc;\"=\"\"></span><span style=\"font-size:16px;font-family:\" color:#3e3e3e;background:#fcfcfc;\"=\"\"></span><span style=\"font-size:16px;font-family:\" color:#3e3e3e;background:#fcfcfc;\"=\"\"></span><span style=\"font-size:16px;font-family:\" color:#3e3e3e;background:#fcfcfc;\"=\"\"></span><span style=\"font-size:16px;font-family:\" color:#3e3e3e;background:#fcfcfc;\"=\"\"></span><span style=\"font-size:10.5pt;font-family:\" color:#3e3e3e;background:#fcfcfc;\"=\"\"></span> \r\n	</p>\r\n	<p align=\"center\">\r\n		<img src=\"/transport/public/static/admin/kindeditor/php/../../../uploads/ueditor/image/20170912/20170912050026_58655.jpg\" alt=\"\" width=\"822\" height=\"548\" /> \r\n	</p>\r\n	<p style=\"text-indent:21.0pt;background:#FCFCFC;\" align=\"left\">\r\n		<span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;\"=\"\">本次高峰论坛与会者既有政府官员，也有专家学者，还有企业高管，他们从不同领域、不同角度，与我们分享了发展现代物流的新趋势、新模式、新政策、新思维，为河南发展现代物流提供了很好的思想启迪和参考借鉴。</span><span style=\"font-family:\" color:#3e3e3e;\"=\"\"></span> \r\n	</p>\r\n	<p>\r\n		<br />\r\n	</p>\r\n	<p>\r\n		<br />\r\n	</p>\r\n	<p>\r\n		<br />\r\n	</p>\r\n</div>', '是', '1505186702', '1', '2017-03-30', '2');
INSERT INTO `tr_article` VALUES ('37', '郑州国际陆港公司荣获全国冷链物流百强企业', '11', '                                                                                郑州国际陆港公司荣获“全国冷链物流百强企业”实至名归', 'admin', 'admin', '<div align=\"left\">\r\n	<p align=\"center\">\r\n		<img src=\"/transport/public/static/admin/kindeditor/php/../../../uploads/ueditor/image/20170912/20170912053326_62923.jpg\" alt=\"\" width=\"616\" height=\"462\" /> \r\n	</p>\r\n	<p style=\"text-indent:21.0pt;background:#FCFCFC;\">\r\n		<span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;font-size:16px;\"=\"\">冷链物流企业百强排名是根据国家发改委、中国物流与采购联合会《社会物流统计核算与报表制度》的要求，中物联冷链委每年组织实施重点冷链物流企业统计调查，并根据调查结果评选出的。</span><span style=\"font-family:\" color:#3e3e3e;\"=\"\"></span> \r\n	</p>\r\n	<p style=\"text-indent:21.0pt;background:#FCFCFC;\">\r\n		<span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;font-size:16px;\"=\"\">冷链物流企业百强排名主要依据申报企业年营业额，辅以冷库容量、冷藏车数量及网点分布情况综合得出，郑州国际陆港公司荣获</span><span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;font-size:16px;\"=\"\">“</span><span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;font-size:16px;\"=\"\">全国冷链物流百强企业</span><span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;font-size:16px;\"=\"\">”</span><span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;font-size:16px;\"=\"\">实至名归。</span><span style=\"font-family:\" color:#3e3e3e;background:#fcfcfc;\"=\"\"></span> \r\n	</p>\r\n	<p align=\"center\">\r\n		<img src=\"/transport/public/static/admin/kindeditor/php/../../../uploads/ueditor/image/20170912/20170912053326_56829.jpg\" alt=\"\" width=\"804\" height=\"483\" /> \r\n	</p>\r\n	<p style=\"text-indent:21.0pt;background:#FCFCFC;\">\r\n		<span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;font-size:16px;\"=\"\">郑州国际陆港公司以陆港现有资源为基础，</span><span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;font-size:16px;\"=\"\">“</span><span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;font-size:16px;\"=\"\">车</span><span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;font-size:16px;\"=\"\">”</span><span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;font-size:16px;\"=\"\">、</span><span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;font-size:16px;\"=\"\">“</span><span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;font-size:16px;\"=\"\">货</span><span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;font-size:16px;\"=\"\">”</span><span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;font-size:16px;\"=\"\">、</span><span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;font-size:16px;\"=\"\">“</span><span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;font-size:16px;\"=\"\">库</span><span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;font-size:16px;\"=\"\">”</span><span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;font-size:16px;\"=\"\">、</span><span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;font-size:16px;\"=\"\">“</span><span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;font-size:16px;\"=\"\">箱</span><span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;font-size:16px;\"=\"\">”</span><span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;font-size:16px;\"=\"\">合理调配，以自营为主，兼顾合作，线上线下同时开展业务。多种齐全的冷藏车、覆盖多个省市自治区的运输线路、领先的信息技术、标准化的运营服务、专业化的运输管理团队，提供温控仓储、冷链干支线运输、冷链城配、防伪溯源、标签制作等全程可视化的服务使得郑州国际陆港公司一跃成为冷链物流行业的新星。</span><span style=\"font-family:\" color:#3e3e3e;\"=\"\"></span> \r\n	</p>\r\n	<p style=\"text-indent:21.0pt;background:#FCFCFC;\">\r\n		<span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;font-size:16px;\"=\"\">郑州国际陆港公司运营的郑欧班列自</span><span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;font-size:16px;\"=\"\">2013</span><span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;font-size:16px;\"=\"\">年</span><span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;font-size:16px;\"=\"\">7</span><span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;font-size:16px;\"=\"\">月</span><span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;font-size:16px;\"=\"\">18</span><span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;font-size:16px;\"=\"\">日开行以来，在四年时间内取得了巨大的成果，</span><span style=\"font-family:\" color:#3e3e3e;background:#fcfcfc;font-size:16px;\"=\"\"> </span><span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;font-size:16px;\"=\"\">郑欧班列目前是国内唯一往返相对均衡开行的中欧班列。在郑欧班列开行频次稳步提升的同时，郑州国际陆港公司不断拓展增值业务，冷链物流成为其中重要一环。</span><span style=\"font-family:\" color:#3e3e3e;\"=\"\"></span> \r\n	</p>\r\n	<p style=\"text-align:justify;text-indent:21.0pt;background:#FCFCFC;\">\r\n		<span style=\"font-family:\" color:#3e3e3e;background:#fcfcfc;font-size:16px;\"=\"\"> </span><span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;font-size:16px;\"=\"\">为保证食用性商品的品质，郑州国际陆港公司锐意创新，自主研发了恒温集装箱，并在国内国外多点布局，保证采购期随时有箱可用。在国外，产品下线后，郑州国际陆港公司直接派车装载恒温箱到工厂提货，然后通过郑欧班列直运回郑，清关后送至恒温仓库。</span><span style=\"font-family:\" color:#3e3e3e;\"=\"\"></span> \r\n	</p>\r\n	<p style=\"text-indent:21.0pt;background:#FCFCFC;\">\r\n		<span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;font-size:16px;\"=\"\">郑州国际陆港公司具有长运距全程冷链物流系统，冷藏、冷冻多温带集装箱系统，自有冷藏冷冻仓库</span><span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;font-size:16px;\"=\"\">5000</span><span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;font-size:16px;\"=\"\">平方米，依托于郑欧班列和卫星定位系统云服务信息平台，郑州国际陆港公司能实现郑州到欧洲</span><span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;font-size:16px;\"=\"\">10000</span><span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;font-size:16px;\"=\"\">公里以外的国际冷链物流、国内干线冷链物流、城市冷链物流配送等。</span><span style=\"font-family:\" color:#3e3e3e;\"=\"\"></span> \r\n	</p>\r\n	<p style=\"background:#FCFCFC;\">\r\n		<span style=\"font-family:\" color:#3e3e3e;background:#fcfcfc;font-size:16px;\"=\"\"> </span><span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;font-size:16px;\"=\"\">郑州国际陆港公司依托郑欧班列物流通道，大力发展跨境电商、进出口贸易、汽车整车进口、粮食进口、国际运邮、冷链物流等特色口岸经济。跻身全国冷链物流百强企业将成为郑州国际陆港公司发展的重要里程碑事件，标志着公司的发展再次迈入一个新的台阶，同时为河南贯彻落实</span><span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;font-size:16px;\"=\"\">“</span><span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;font-size:16px;\"=\"\">一带一路</span><span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;font-size:16px;\"=\"\">”</span><span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;font-size:16px;\"=\"\">战略建设贡献新的力量。</span><span style=\"font-family:\" color:#3e3e3e;\"=\"\"></span> \r\n	</p>\r\n	<p style=\"text-indent:21.0pt;background:#FCFCFC;\">\r\n		<span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;font-size:16px;\"=\"\">与此同时，公司组成专业采购团队常驻班列沿线列国，直接与生产企业建立战略合作伙伴关系，从源头直采进口商品，所有的商品生产日期为最新；从欧洲到中国郑州，郑欧班列全程站到站运输时间</span><span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;font-size:16px;\"=\"\">12</span><span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;font-size:16px;\"=\"\">天，全程采用冷链物流。对广大消费者而言，可以真正享受到</span><span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;font-size:16px;\"=\"\">“</span><span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;font-size:16px;\"=\"\">又真又快又鲜</span><span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;font-size:16px;\"=\"\">”</span><span style=\"font-size: 16px; font-family: Microsoft YaHei;\" color:#3e3e3e;background:#fcfcfc;font-size:16px;\"=\"\">的郑欧班列进口商品。</span><span style=\"font-family:\" color:#3e3e3e;background:#fcfcfc;\"=\"\"></span> \r\n	</p>\r\n	<p>\r\n		<br />\r\n	</p>\r\n	<p>\r\n		<br />\r\n	</p>\r\n	<p>\r\n		<br />\r\n	</p>\r\n</div>', '是', '1505187318', '1', '2017-07-13', '7');

-- -----------------------------
-- Table structure for `tr_articletype`
-- -----------------------------
DROP TABLE IF EXISTS `tr_articletype`;
CREATE TABLE `tr_articletype` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `typename` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `tr_articletype`
-- -----------------------------
INSERT INTO `tr_articletype` VALUES ('11', '新闻资讯');

-- -----------------------------
-- Table structure for `tr_banner`
-- -----------------------------
DROP TABLE IF EXISTS `tr_banner`;
CREATE TABLE `tr_banner` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `inlandcoldchain` varchar(225) NOT NULL COMMENT '国内冷链',
  `internationcoldchain` varchar(225) NOT NULL COMMENT '国际冷链',
  `boxrent` varchar(225) NOT NULL COMMENT '箱库租赁',
  `aboutus` varchar(225) NOT NULL COMMENT '关于我们',
  `goodstrace` varchar(225) NOT NULL COMMENT '货物追踪',
  `temperate` varchar(225) NOT NULL COMMENT '温度监控',
  `financialservice` varchar(225) NOT NULL COMMENT '金融服务',
  `insuranceservice` varchar(225) NOT NULL COMMENT '保险服务',
  `joinus` varchar(225) NOT NULL COMMENT '合作加盟',
  `news` varchar(225) NOT NULL COMMENT '新闻资讯',
  `brokerage` varchar(225) NOT NULL COMMENT '报关报检',
  `labelprint` varchar(225) NOT NULL COMMENT '标签印刷',
  `secondpack` varchar(225) NOT NULL COMMENT '二次包装',
  `companyindex` varchar(225) NOT NULL COMMENT '公司优势(首页)',
  `interindex` varchar(225) NOT NULL COMMENT '国际冷链运输(首页)',
  `inlandindex` varchar(225) NOT NULL COMMENT '国内冷链运输(首页)',
  `boxindex` varchar(225) NOT NULL COMMENT '箱库租赁(首页)',
  `brokerageindex` varchar(225) NOT NULL COMMENT '报关报检(首页)',
  `labelindex` varchar(225) NOT NULL COMMENT '标签印刷(首页)',
  `secondindex` varchar(225) NOT NULL COMMENT '二次包装(首页)',
  `newsindex` varchar(225) NOT NULL COMMENT '新闻资讯(首页)',
  `logo` varchar(225) NOT NULL COMMENT '网站logo',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='banner图片';

-- -----------------------------
-- Records of `tr_banner`
-- -----------------------------
INSERT INTO `tr_banner` VALUES ('1', '/uploads/20170926\\b76dcd750b5d0b6a0ab52cc73c7d07a3.jpg', '/uploads/20170926\\72c394a6931e19b2ac82579479b30a8d.jpg', '/uploads/20170926\\7c4a9542c6b88608db7f8136ea6c7141.jpg', '/uploads/20170926\\bc036e6184a678ea1a5f4c622cec3148.jpg', '/uploads/20170926\\15978030e277106fa10206e9043031ba.jpg', '/uploads/20170926\\99600eb5d106ea725e372cafff0376b7.jpg', '/uploads/20170926\\40fff0d4be5a3fa10672caff86a2a223.jpg', '/uploads/20170926\\f91736367848c13001be93c5daf73d57.jpg', '/uploads/20170926\\76b29369ded7d4ee67a21f7ad6736773.jpg', '/uploads/20170926\\7ea1fec46f09875c6e6c57d00e55dc0f.jpg', '/uploads/20170926\\6b754ca6a2e3b11636691f6adb98814e.jpg', '/uploads/20170926\\678239f1c18cadac97b41ecdd858592d.jpg', '/uploads/20170926\\308e9c3707a2cae11d8be58226464e4f.jpg', '/uploads/20170926\\f1ba17902b5b2b901e5febadb656eb4b.jpg', '/uploads/20170926\\4d4354fcc3e411dd75b65bccce3f369f.jpg', '/uploads/20170926\\bdc66dbc719caae3dce7d9d096491199.jpg', '/uploads/20170926\\77ed3930e7efe298be333e88cd37ba90.jpg', '/uploads/20170926\\4cac49719b66a105aa3371073bf0e3d4.jpg', '/uploads/20170926\\dd9277698f0c0df899051f0f3b29c8f9.jpg', '/uploads/20170926\\3962f6c2a97d9e2b9b66d808fb77cb8b.jpg', '/uploads/20170927\\8d58372284b8d06c6f24867cfdf9125a.jpg', '/uploads/20171011\\f81042c3c6bae359c417db5b54dd97a3.png');

-- -----------------------------
-- Table structure for `tr_customer`
-- -----------------------------
DROP TABLE IF EXISTS `tr_customer`;
CREATE TABLE `tr_customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '合作客户id',
  `name` varchar(200) NOT NULL COMMENT '客户名称',
  `img` varchar(200) NOT NULL COMMENT '图片',
  `url` varchar(300) NOT NULL COMMENT '路径',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `tr_customer`
-- -----------------------------
INSERT INTO `tr_customer` VALUES ('5', '', '/uploads/20170915\\50da736da8c6e5b29018dd3b35d74a5f.jpg', '');
INSERT INTO `tr_customer` VALUES ('6', '', '/uploads/20170915\\e12c102c1f12e230eb450fc0561d9229.jpg', '');
INSERT INTO `tr_customer` VALUES ('7', '', '/uploads/20170915\\70e243878ea838a6c4716167fa1f87e6.jpg', '');
INSERT INTO `tr_customer` VALUES ('8', '', '/uploads/20170915\\0612ec4c757d2fa953e0caf535bd0439.jpg', '');
INSERT INTO `tr_customer` VALUES ('9', '', '/uploads/20170915\\edfc02a3ca5a3d6e0c0ea0b9e84df76e.jpg', '');
INSERT INTO `tr_customer` VALUES ('10', '', '/uploads/20170915\\a1a9af233442e9c5ecf51afa7f1a992a.jpg', '');
INSERT INTO `tr_customer` VALUES ('11', '', '/uploads/20170915\\23dd55f70b5a8c3a1071876bc50a9f70.jpg', '');
INSERT INTO `tr_customer` VALUES ('12', '', '/uploads/20170915\\16c67fbd16d0c8a65361129021f58e20.jpg', '');
INSERT INTO `tr_customer` VALUES ('13', '', '/uploads/20170915\\3d4ea9fd8846033c11df24035ae6d38e.jpg', '');
INSERT INTO `tr_customer` VALUES ('14', '', '/uploads/20170915\\e6ecf834d2c904ab5f1ab30c43873462.jpg', '');
INSERT INTO `tr_customer` VALUES ('15', '', '/uploads/20170915\\e82fe5f03fb3c4797d7b3db38bb8a0e1.jpg', '');
INSERT INTO `tr_customer` VALUES ('16', '', '/uploads/20170915\\e0a58103a1e1e81a80cfd30548d58ea9.jpg', '');

-- -----------------------------
-- Table structure for `tr_goods`
-- -----------------------------
DROP TABLE IF EXISTS `tr_goods`;
CREATE TABLE `tr_goods` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `add_goods` int(11) NOT NULL DEFAULT '0' COMMENT '是否为订单添加货源',
  `goods_sort` varchar(60) NOT NULL COMMENT '货物品类',
  `goods_name` varchar(100) NOT NULL COMMENT '货物名称',
  `goods_type` varchar(60) NOT NULL COMMENT '货物类型',
  `standard_ton` varchar(100) NOT NULL COMMENT '货物规格:吨',
  `standard_square` varchar(100) NOT NULL COMMENT '货物规格：方',
  `low_temperature` varchar(100) NOT NULL COMMENT '最低温度',
  `high_temperature` varchar(100) NOT NULL COMMENT '最高温度',
  `carriage` varchar(100) NOT NULL COMMENT '运输费用',
  `carriage_type` varchar(50) NOT NULL COMMENT '运输费用类型',
  `payment_mode` varchar(60) NOT NULL COMMENT '支付方式',
  `invoice` varchar(50) NOT NULL COMMENT '发票',
  `starting_address` varchar(200) NOT NULL COMMENT '始发地',
  `startingaddress_detail` varchar(300) NOT NULL COMMENT '始发地详细地址',
  `destination` varchar(200) NOT NULL COMMENT '目的地',
  `destination_detail` varchar(300) NOT NULL COMMENT '目的地详细地址',
  `start_loadingtime` date NOT NULL COMMENT '最早装车时间',
  `end_loadingtime` date NOT NULL COMMENT '最晚装车时间',
  `start_arrivetime` varchar(100) NOT NULL COMMENT '最早到货时间',
  `end_arrivetime` varchar(100) NOT NULL COMMENT '最晚到货时间',
  `car_length` varchar(200) NOT NULL COMMENT '需要车长',
  `car_type` varchar(200) NOT NULL COMMENT '需要车型',
  `whaddress` varchar(200) NOT NULL COMMENT '需要冷库地址',
  `whaddress_detail` varchar(200) NOT NULL COMMENT '冷库详细地址',
  `enter_wh_time` date NOT NULL COMMENT '入库时间',
  `storage_time` varchar(100) NOT NULL COMMENT '预计库存时间',
  `package_type` varchar(100) NOT NULL COMMENT '包装类型',
  `store_price` varchar(100) NOT NULL COMMENT '存储费用价格',
  `price_type` varchar(100) NOT NULL COMMENT '价格类型',
  `need_wh_temperature` varchar(100) NOT NULL COMMENT '库存温度',
  `goods_photo` varchar(300) NOT NULL COMMENT '货物图片',
  `goods_remark` text NOT NULL COMMENT '备注',
  `contact` varchar(60) NOT NULL COMMENT '联系人',
  `phone` varchar(200) NOT NULL COMMENT '联系电话',
  `uid` varchar(200) NOT NULL COMMENT '用户账号',
  `is_company` int(11) NOT NULL DEFAULT '0' COMMENT '是否自营',
  `order_state` int(11) NOT NULL DEFAULT '1' COMMENT '下单状态',
  `check_state` int(11) NOT NULL DEFAULT '1' COMMENT '信息认证',
  `time` date NOT NULL COMMENT '发布时间',
  `uptype` varchar(50) NOT NULL COMMENT '上传类型（找车或找库）',
  `is_recycle` int(11) NOT NULL DEFAULT '0' COMMENT '是否删除',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=110 DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `tr_goods`
-- -----------------------------
INSERT INTO `tr_goods` VALUES ('27', '0', '', '柚子', '1', '2', '9', '', '', '', '', '1', '否', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '河南省郑州市管城回族区', '陆港', '2017-08-12', '3', '无', '213123', '一口价', '4', '/uploads/20170807\\af222c6fa01d6f0dd304539fc7172e78.png', '我想吃柚子！！！', '周雪迎', '13403991030', '13262750648', '0', '1', '2', '2017-08-07', '1', '0');
INSERT INTO `tr_goods` VALUES ('26', '0', '6', '小仙女', '1', '22', '49', '20', '25', '4', '运输费用', '1', '是', '河南省郑州市管城回族区', '陆港', '吉林省白城市洮北区', '平台镇', '0000-00-00', '0000-00-00', '2017-08-16', '2017-08-17', '4', '1', '', '', '0000-00-00', '', '', '', '', '', '', '', '杨先生', '13403991030', '13262750648', '0', '1', '2', '2017-08-08', '0', '0');
INSERT INTO `tr_goods` VALUES ('24', '0', '3', '橙子', '2', '3', '5', '15', '25', '123', '运输费用', '1', '是', '河南省郑州市金水区', '新校区', '河南省郑州市二七区', '老校区', '2017-08-10', '2017-08-11', '2017-08-16', '2017-08-17', '4', '4', '', '', '0000-00-00', '', '', '', '', '', '', '', '王医生', '15639926652', '13403991030', '0', '1', '2', '2017-08-08', '0', '0');
INSERT INTO `tr_goods` VALUES ('28', '0', '6', '火锅底料', '1', '11', '4', '20', '25', '111', '运输费用', '1', '否', '重庆市重庆市渝中区', '13223', '四川省德阳市广汉市', '3333', '2017-08-11', '2017-08-13', '2017-08-16', '2017-08-18', '3', '1', '', '', '0000-00-00', '', '', '', '', '', '', '你在终点等我笑里有雨滴。。。', '123', '15538191283', '13262750648', '0', '2', '2', '2017-08-09', '0', '0');
INSERT INTO `tr_goods` VALUES ('32', '0', '', '铅笔', '3', '16', '3', '', '', '', '', '1', '否', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '北京市北京市', '34342', '2017-08-09', '3', '无', '4321', '一口价', '4', '/uploads/20170814\\69fdc5b0e8ad2069120fae597cc330f6.png', '我一直追寻着你心情的足迹，被所有的人误解都要理解你。。。。', '234324', '15538191283', '13262750648', '0', '1', '2', '2017-08-14', '1', '0');
INSERT INTO `tr_goods` VALUES ('30', '0', '1', '蒙牛', '2', '5', '17', '20', '25', '666', '运输费用', '1', '是', '内蒙古赤峰市松山区', '777', '河南省焦作市武陟县', '666', '2017-08-12', '2017-08-13', '2017-08-18', '2017-08-20', '6', '2', '', '', '0000-00-00', '', '', '', '', '', '', '', '666', '15538191283', '13403991030', '0', '2', '2', '2017-08-11', '0', '0');
INSERT INTO `tr_goods` VALUES ('107', '0', '1', '666666', '1', '1', '1', '1', '1', '0.01', '运输费用', '1', '是', '123123', '12313', '1321', '132', '2017-11-25', '2017-11-26', '2017-11-28', '2017-11-29', '4', '2', '', '', '0000-00-00', '', '', '', '', '', '', '', '123', '13403991030', '13403991030', '0', '1', '2', '2017-11-24', '0', '0');
INSERT INTO `tr_goods` VALUES ('108', '0', '2', '啊啊啊', '1', '5', '5', '4', '5', '0.01', '运输费用', '1', '是', '4345345', '45343', '453453', '453543', '2017-11-23', '2017-11-24', '2017-11-29', '2017-11-30', '4', '4', '', '', '0000-00-00', '', '', '', '', '', '', '', 'www', '13403991030', '13403991030', '0', '2', '2', '2017-11-24', '0', '0');
INSERT INTO `tr_goods` VALUES ('34', '0', '2', '3333333', '3', '1', '3', '23', '23', '3', '运输费用', '1', '否', '上海市', '111', '上海市', '222', '0000-00-00', '0000-00-00', '2017-8-28', '2017-8-30', '4', '3', '', '', '0000-00-00', '', '', '', '', '', '', '你却在终点等我笑里有雨滴', '护手霜', '15538191283', '13403991030', '0', '1', '2', '2017-08-29', '0', '0');
INSERT INTO `tr_goods` VALUES ('40', '0', '2', '虾虾虾', '3', '2', '5', '-10', '-5', '9999', '运输费用', '1', '是', '河南省郑州市', '经开区', '河南省郑州市二七区', '无限城喜虾客', '2017-09-21', '2017-09-22', '2017-09-23', '2017-09-25', '4', '2', '', '', '0000-00-00', '', '', '', '', '', '', '你却在终点等我笑里有雨滴。。。', '郑州陆港', '15538191382', '15538191382', '1', '1', '2', '2017-09-19', '0', '0');
INSERT INTO `tr_goods` VALUES ('35', '0', '', '虾', '2', '1', '2', '', '', '', '', '1', '否', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '内蒙古', '121331', '2017-08-13', '3', '有', '999', '一口价', '3', '/uploads/20170829\\4d5a26c7fc989c18eb79d6dc8fca894a.png', '被所有的人误解都有理解你。。。', '皮卡丘', '13262750648', '13403991030', '0', '1', '2', '2017-08-29', '1', '0');
INSERT INTO `tr_goods` VALUES ('36', '0', '', '热干面', '1', '3', '3', '', '', '', '', '1', '否', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '云南省', '11111', '2017-09-09', '5', '有', '22', '一口价', '1', '/uploads/20170831\\94719df502ab038567da61a5164d827a.png', '我一直追寻着你心情的足迹！！！！', '工藤新一', '13071021121', '13403991030', '0', '1', '2', '2017-08-31', '1', '0');
INSERT INTO `tr_goods` VALUES ('37', '0', '', '榴莲', '2', '25', '25', '', '', '', '', '1', '是', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '河南省郑州市中原区', '西三环', '2017-09-07', '1', '纸质', '0.01', '一口价', '2', '/uploads/20170831\\52d40f9e524fb30f3d66a1eec678e588.jpg', '', '杨', '15678907890', '13403991030', '0', '2', '2', '2017-08-31', '1', '0');
INSERT INTO `tr_goods` VALUES ('41', '0', '4', '羊肉', '2', '2', '4', '-10', '0', '0.01', '运输费用', '1', '是', '北京市北京市宣武区', '北京市北京市宣武区', '天津市天津市南开区', '天津市天津市南开区', '2017-09-15', '2017-09-12', '2017-09-15', '2017-09-22', '3', '2', '', '', '0000-00-00', '', '', '', '', '', '', '需要冷藏', '王女士', '13071021121', '15538191382', '1', '1', '2', '2017-09-20', '0', '0');
INSERT INTO `tr_goods` VALUES ('42', '0', '', '板栗', '1', '2', '3', '', '', '', '', '1', '是', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '上海市上海市长宁区', '上海市上海市长宁区', '2017-09-15', '1', '按时', '0.01', '一口价', '3', '/uploads/20170920\\702f46f3a32c3216b0cecca2796af5ba.jpg', '', '王女士', '13071021121', '15538191382', '1', '2', '2', '2017-09-20', '1', '0');
INSERT INTO `tr_goods` VALUES ('43', '0', '1', '鲤鱼', '1', '1', '3', '15', '25', '0.01', '运输费用', '1', '是', '河南省郑州市金水区', '111', '河南省郑州市二七区', '222', '2017-09-22', '2017-09-23', '2017-09-28', '2017-09-29', '4', '5', '', '', '0000-00-00', '', '', '', '', '', '', '', '王先生', '15538191282', '15538191283', '0', '1', '2', '2017-09-20', '0', '0');
INSERT INTO `tr_goods` VALUES ('44', '0', '3', '橙子', '1', '1', '2', '15', '20', '0.01', '运输费用', '1', '是', '河南省郑州市金水区', '111', '河南省郑州市二七区', '222', '2017-09-21', '2017-09-21', '2017-09-23', '2017-09-24', '3', '1', '', '', '0000-00-00', '', '', '', '', '', '', '', '王先生', '15538191283', '15538191283', '0', '2', '2', '2017-09-20', '0', '0');
INSERT INTO `tr_goods` VALUES ('45', '0', '', '猕猴桃', '1', '1', '2', '', '', '', '', '1', '是', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '河南省郑州市二七区', '德化街', '2017-09-22', '2', '无', '0.01', '一口价', '4', '/uploads/20170920\\cce2a02161d406d4fd7d4a1dfe142ca0.jpg', '', '王先生', '15538191283', '15538191283', '0', '1', '2', '2017-09-20', '1', '0');
INSERT INTO `tr_goods` VALUES ('46', '0', '3', '水蜜桃', '1', '1', '6', '15', '25', '0.01', '运输费用', '1', '是', '北京市北京市', '西城区', '内蒙古呼和浩特市', '新城区', '2017-09-30', '2017-10-01', '2017-10-06', '2017-10-07', '3', '1', '', '', '0000-00-00', '', '', '', '', '', '', '', '王先生', '15737315727', '13403991030', '0', '1', '1', '2017-09-21', '0', '0');
INSERT INTO `tr_goods` VALUES ('47', '0', '3', '水蜜桃', '1', '1', '5', '15', '25', '0.01', '运输费用', '1', '是', '北京市北京市', '东城区', '山西省太原市', '晋源区', '2017-09-23', '2017-09-26', '2017-10-04', '2017-10-06', '3', '1', '', '', '0000-00-00', '', '', '', '', '', '', '', '王先生', '15737315727', '13403991030', '0', '1', '1', '2017-09-21', '0', '0');
INSERT INTO `tr_goods` VALUES ('48', '0', '1', '牛肉', '1', '3', '4', '0', '5', '0.01', '运输费用', '1', '是', '台湾省高雄', '台湾省高雄', '陕西省延安市七里村镇', '陕西省延安市七里村镇', '2017-09-22', '2017-09-23', '2017-09-25', '2017-09-26', '3', '1', '', '', '0000-00-00', '', '', '', '', '', '', '', '周颖', '13071021121', '15538191382', '1', '2', '2', '2017-09-21', '0', '0');
INSERT INTO `tr_goods` VALUES ('49', '0', '', '开心果', '1', '2', '3', '', '', '', '', '1', '是', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '上海市上海市长宁区', '上海市上海市长宁区', '2017-09-23', '2', '按时', '0.01', '一口价', '3', '/uploads/20170921\\3b7bb9dbc370139b7e698eb99133be3b.jpg', '', '周颖', '13071021121', '15538191382', '1', '2', '2', '2017-09-21', '1', '0');
INSERT INTO `tr_goods` VALUES ('50', '0', '3', '山楂', '1', '2', '5', '15', '25', '0.01', '运输费用', '1', '是', '北京市北京市', '朝阳区', '江苏省南京市', '浦口区', '2017-09-22', '2017-09-23', '2017-09-26', '2017-09-28', '5', '1', '', '', '0000-00-00', '', '', '', '', '', '', '', '沈星移', '13403991030', '13403991030', '0', '2', '2', '2017-09-21', '0', '0');
INSERT INTO `tr_goods` VALUES ('51', '0', '', '猕猴桃', '1', '1', '6', '', '', '', '', '1', '否', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '天津市天津市河西区', '河西区', '2017-09-22', '1', '无', '0.01', '一口价', '4', '/uploads/20170921\\4690214a4896fd00172898ea52457112.jpg', '', '吴聘', '13403991030', '13403991030', '0', '2', '2', '2017-09-21', '1', '0');
INSERT INTO `tr_goods` VALUES ('53', '0', '', '樱桃干', '1', '20', '3', '', '', '', '', '1', '否', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '重庆市重庆市九龙坡区', '0930', '2017-10-02', '1', '有', '0.01', '一口价', '4', '/uploads/20170930\\04801674b2c184f94fb78d4d6a97c180.png', '再将旧事轻歌慢诵，任旁人惊动。可我只能假笑扮从容。。。', '李先生', '18595920787', '18595920787', '0', '2', '2', '2017-09-30', '1', '0');
INSERT INTO `tr_goods` VALUES ('54', '0', '6', '杏脯', '1', '3', '5', '15', '23', '0.01', '运输费用', '1', '是', '北京市北京市崇文区', '灯火缱绻映照一双', '福建省福州市凤城镇', '如画颜容，宛如豆蔻枝头温柔的旧梦', '2017-10-03', '2017-10-06', '2017-10-07', '2017-10-07', '4', '3', '', '', '0000-00-00', '', '', '', '', '', '', '对面不识，恍然间思绪翻涌', '李先生', '18595920787', '18595920787', '0', '2', '2', '2017-09-30', '0', '0');
INSERT INTO `tr_goods` VALUES ('55', '0', '3', '哈密瓜', '1', '43', '2', '23', '12', '0.01', '运输费用', '1', '否', '上海市上海市卢湾区', '测试', '内蒙古', '1222', '2017-10-10', '2017-10-11', '2017-10-18', '2017-10-19', '4', '1', '', '', '0000-00-00', '', '', '', '', '', '', '后来谁家喜宴重逢，佳人在侧，烛影摇红。', '易冷链', '15538191382', '15538191382', '1', '2', '2', '2017-10-09', '0', '0');
INSERT INTO `tr_goods` VALUES ('56', '0', '', '我的一个道姑朋友', '1', '1', '2', '', '', '', '', '1', '否', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '天津市', '233', '2017-10-11', '1', '为', '0.01', '一口价', '2', '/uploads/20171009\\385e06023b3790b07240a68abed3afd3.jpg', '灯火缱绻映照一双  如画颜容 宛如豆蔻枝头温柔的旧梦', '易冷链', '15538191382', '15538191382', '1', '2', '2', '2017-10-09', '1', '0');
INSERT INTO `tr_goods` VALUES ('57', '0', '2', '橘子', '1', '12', '1', '12', '12', '0.01', '运输费用', '1', '是', '12213123132', '123133333333333', '1222222222222', '2222222222222', '2017-10-19', '2017-10-20', '2017-10-25', '2017-10-27', '4', '3', '', '', '0000-00-00', '', '', '', '', '', '', '', '213', '15538191382', '15538191382', '1', '2', '2', '2017-10-10', '0', '0');
INSERT INTO `tr_goods` VALUES ('58', '0', '', '22222222222222', '1', '2', '2', '', '', '', '', '1', '否', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '12222222222222', '222222222222', '2017-10-11', '3', '12', '0.01', '一口价', '3', '/uploads/20171010\\bab0627135a227e4b64d2d32dccad0ca.png', '', '123', '15538191382', '15538191382', '1', '1', '2', '2017-10-10', '1', '0');
INSERT INTO `tr_goods` VALUES ('59', '0', '2', '馒头', '2', '2', '3', '13', '33', '0.01', '运输费用', '1', '是', '2222222222222222222', '22222222222', '2222222222222', '222222222222222', '2017-10-26', '2017-10-18', '2017-10-26', '2017-10-26', '3', '3', '', '', '0000-00-00', '', '', '', '', '', '', '', '23', '15538191382', '15538191382', '1', '1', '2', '2017-10-10', '0', '0');
INSERT INTO `tr_goods` VALUES ('60', '0', '', '11111222222222', '1', '1', '2', '', '', '', '', '1', '是', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '111111111', '111111111111', '2017-10-13', '2', '23', '0.01', '一口价', '3', '/uploads/20171010\\526b5e275e8524dfff961c9bf7ff1d11.jpg', '', '23', '15538191283', '15538191382', '1', '1', '2', '2017-10-10', '1', '0');
INSERT INTO `tr_goods` VALUES ('61', '0', '1', '虾', '1', '1', '2', '12', '15', '0.01', '运输费用', '1', '是', '香港香港特别行政区九龙城区', '香港', '澳门澳门特别行政区澳门特别行政区', '澳门', '2017-10-18', '2017-10-19', '2017-10-31', '2017-11-01', '3', '1', '', '', '0000-00-00', '', '', '', '', '', '', '', '益达', '15538191382', '15538191382', '1', '2', '2', '2017-10-11', '0', '0');
INSERT INTO `tr_goods` VALUES ('62', '0', '', 'mac-CB96', '2', '2', '1', '', '', '', '', '1', '否', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '香港香港特别行政区中西区', '香港', '2017-10-19', '2', '有', '0.01', '一口价', '3', '/uploads/20171011\\ce7f67f9f21975d44ee2281736015d25.png', '', 'mac人鱼姬色', '15538191382', '15538191382', '1', '2', '2', '2017-10-11', '1', '0');
INSERT INTO `tr_goods` VALUES ('63', '0', '2', 'YSL圣罗兰', '1', '5', '2', '15', '20', '0.01', '运输费用', '1', '是', '香港香港特别行政区西贡区', '经北四路经开第十七大街', '澳门澳门特别行政区澳门特别行政区', '经北四路经开第十七大街', '2017-10-12', '2017-10-12', '2017-10-18', '2017-10-19', '5', '1', '', '', '0000-00-00', '', '', '', '', '', '', '', 'YSL', '13071021121', '13071021121', '0', '1', '2', '2017-10-11', '0', '0');
INSERT INTO `tr_goods` VALUES ('64', '0', '', 'mac-CB96-see sheer', '1', '1', '2', '', '', '', '', '1', '是', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '香港香港特别行政区黄大仙区', '经北四路经开第十七大街', '2017-10-27', '1', '有', '0.01', '一口价', '1', '/uploads/20171011\\db59bbc5f01e4a1151392cc41f3654a8.jpg', '', 'Mac', '13071021121', '13071021121', '0', '2', '2', '2017-10-11', '1', '0');
INSERT INTO `tr_goods` VALUES ('65', '0', '2', '煎蛋', '1', '1', '1', '15', '25', '0.01', '运输费用', '1', '是', '香港香港特别行政区沙田区', '经北四路经开第十七大街', '澳门澳门特别行政区澳门特别行政区', '经北四路经开第十七大街', '2017-10-12', '2017-10-13', '2017-10-17', '2017-10-18', '5', '1', '', '', '0000-00-00', '', '', '', '', '', '', '', '煎蛋', '13403991030', '13403991030', '0', '2', '2', '2017-10-11', '0', '1');
INSERT INTO `tr_goods` VALUES ('66', '0', '', '魅可人鱼姬色', '1', '3', '2', '', '', '', '', '1', '是', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '香港香港特别行政区屯门区', '经北四路经开第十七大街', '2017-10-12', '2', '有', '0.01', '一口价', '4', '/uploads/20171011\\844f437d318d4295bd1de004d0a6234b.jpg', '', '魅可', '13403991030', '13403991030', '0', '1', '2', '2017-10-11', '1', '0');
INSERT INTO `tr_goods` VALUES ('67', '0', '2', '1233232323232', '1', '2', '2', '123', '12', '0.01', '运输费用', '1', '是', '222222222222222222222', '2222222222', '1231232132131', '131232', '2017-10-12', '2017-10-20', '2017-10-25', '2017-10-26', '3', '2', '', '', '0000-00-00', '', '', '', '', '', '', '', '11', '13403991030', '18595920787', '0', '1', '2', '2017-10-11', '0', '0');
INSERT INTO `tr_goods` VALUES ('68', '0', '2', '柠檬', '1', '3', '2', '12', '22', '0.01', '运输费用', '1', '是', '北京市', 'qwe', '内蒙古呼和浩特市', '1323123', '2017-10-19', '2017-10-20', '2017-10-25', '2017-10-26', '4', '4', '', '', '0000-00-00', '', '', '', '', '', '', '', '122', '18595920787', '18595920787', '0', '1', '2', '2017-10-12', '0', '0');
INSERT INTO `tr_goods` VALUES ('77', '1', '2', '蔓越莓', '2', '2', '3', '2', '3', '0.01', '运输费用', '1', '是', '辽宁省沈阳市和平区', '2324', '天津市天津市', '2424', '2017-10-18', '2017-10-19', '2017-10-13', '2017-10-20', '4', '1', '', '', '0000-00-00', '', '', '', '', '', '', '凄凄切切群群群群群群群群群群群群群群群', '223', '18595920787', '18595920787', '0', '2', '2', '2017-10-12', '0', '0');
INSERT INTO `tr_goods` VALUES ('78', '1', '', '菊花', '2', '21', '21', '', '', '', '', '1', '是', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '天津市天津市南开区', '2312', '2017-10-21', '2', '21', '23', '一口价', '1', '/uploads/20171012\\418ddfff2541f6591b5bbe37417760ca.jpg', '', '21', '18595920787', '18595920787', '0', '1', '2', '2017-10-12', '1', '0');
INSERT INTO `tr_goods` VALUES ('79', '1', '', '菊花', '2', '21', '21', '', '', '', '', '1', '是', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '天津市天津市南开区', '2312', '2017-10-21', '2', '21', '23', '一口价', '1', '/uploads/20171012\\ed3067466582f415432287c8ae250022.jpg', '', '21', '18595920787', '18595920787', '0', '1', '2', '2017-10-12', '1', '0');
INSERT INTO `tr_goods` VALUES ('80', '1', '', '菊花', '2', '21', '21', '', '', '', '', '1', '是', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '天津市天津市南开区', '2312', '2017-10-21', '2', '21', '23', '一口价', '1', '/uploads/20171012\\721e4db078898708cc891f49299c9639.jpg', '', '21', '18595920787', '18595920787', '0', '1', '2', '2017-10-12', '1', '0');
INSERT INTO `tr_goods` VALUES ('81', '1', '', '菊花', '2', '21', '21', '', '', '', '', '1', '是', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '天津市天津市南开区', '2312', '2017-10-21', '2', '21', '23', '一口价', '1', '/uploads/20171012\\7b073d57bd2810a8add4b2ffcc20910f.jpg', '', '21', '18595920787', '18595920787', '0', '1', '2', '2017-10-12', '1', '0');
INSERT INTO `tr_goods` VALUES ('82', '1', '', 'YSL圣罗兰', '2', '12', '2', '', '', '', '', '1', '是', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '1221414', '121414', '2017-10-13', '2', '124', '0.01', '一口价', '2', '/uploads/20171012\\66edf62fb11ffa34e39890691a7ae54d.png', '前世欠你一颗伤心泪，晋升还你一场烟花美', '1214', '13403991030', '13403991030', '0', '2', '2', '2017-10-12', '1', '0');
INSERT INTO `tr_goods` VALUES ('83', '1', '', '66666', '3', '3', '3', '', '', '', '', '1', '否', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '113131', '543315454', '2017-10-13', '1', '23', '0.01', '一口价', '1', '/uploads/20171012\\3311ff077dc114e0866838f4f780ad71.jpg', '可我只能假笑扮从容。。。', '123', '18595920787', '18595920787', '0', '1', '2', '2017-10-12', '1', '0');
INSERT INTO `tr_goods` VALUES ('105', '0', '1', '美甲', '3', '12', '21', '12', '12', '0.01', '运输费用', '1', '是', '北京市北京市', '111', '天津市天津市河东区', '12212', '2017-10-26', '2017-10-27', '2017-10-27', '2017-10-28', '6', '3', '', '', '0000-00-00', '', '', '', '', '', '', '', '122', '13403991030', '13403991030', '0', '2', '2', '2017-10-25', '0', '1');
INSERT INTO `tr_goods` VALUES ('85', '1', '', '眼药水', '2', '3', '3', '', '', '', '', '1', '否', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '上海市', '111', '2017-10-12', '1', '2142', '0.01', '一口价', '3', '/uploads/20171012\\57b60df06a970b5c804afc43b149f6ec.jpg', '啊啊啊啊啊啊啊啊啊啊啊啊', '243', '13403991030', '13403991030', '0', '1', '2', '2017-10-12', '1', '0');
INSERT INTO `tr_goods` VALUES ('86', '1', '', '蓝莓果粒茶', '1', '12', '3', '', '', '', '', '1', '是', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '香港香港特别行政区观塘区', '经北四路经开第十七大街', '2017-08-13', '1', '2323', '0.01', '一口价', '1', '/uploads/20171013\\d3286bfa78fcc65f5d263ecf7a9d0c83.jpg', '', '21333321', '13403991030', '13403991030', '0', '1', '2', '2017-10-13', '1', '0');
INSERT INTO `tr_goods` VALUES ('87', '1', '3', '999999', '1', '2', '33', '13', '31', '0.01', '运输费用', '1', '是', '上海市上海市卢湾区', '21321324', '重庆市重庆市九龙坡区', '21312312', '2017-10-20', '2017-10-19', '2017-10-25', '2017-10-19', '4', '4', '', '', '0000-00-00', '', '', '', '', '', '', '', '2424', '13403991030', '13403991030', '0', '1', '2', '2017-10-13', '0', '0');
INSERT INTO `tr_goods` VALUES ('106', '0', '1', '德芙666', '2', '1', '2', '1', '2', '0.01', '运输费用', '1', '是', '123', '111', '123', '222', '2017-11-21', '2017-11-22', '2017-11-28', '2017-11-29', '3', '3', '', '', '0000-00-00', '', '', '', '', '', '', '', '123', '13403991030', '13403991030', '0', '1', '2', '2017-11-20', '0', '1');
INSERT INTO `tr_goods` VALUES ('89', '1', '', '青岛大虾', '3', '8', '2', '', '', '', '', '1', '是', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '上海市', '111', '2017-10-13', '1', '箱装', '0.01', '一口价', '1', '/uploads/20171013\\6d94096002437d57c5707bf243a43e77.jpg', '', '王先生', '15538191383', '13403991030', '0', '1', '2', '2017-10-13', '1', '0');
INSERT INTO `tr_goods` VALUES ('90', '1', '2', '档案', '3', '2', '12', '214', '234', '0.01', '运输费用', '1', '是', '香港香港特别行政区深水埗区', '1224124', '澳门', '12412424', '2017-10-11', '2017-10-12', '2017-10-17', '2017-10-18', '5', '2', '', '', '0000-00-00', '', '', '', '', '', '', '', '123123', '13403991030', '18595920787', '0', '1', '2', '2017-10-13', '0', '0');
INSERT INTO `tr_goods` VALUES ('91', '0', '6', '头发', '1', '43', '121', '21', '32', '0.01', '运输费用', '1', '是', '北京市北京市东城区', '东城区', '天津市天津市河西区', '河西区', '2017-10-13', '2017-10-14', '2017-10-25', '2017-10-26', '3', '1', '', '', '0000-00-00', '', '', '', '', '', '', '', '眼镜女士', '13027731857', '13027731857', '0', '2', '2', '2017-10-13', '0', '0');
INSERT INTO `tr_goods` VALUES ('95', '0', '2', '海带海带海带', '2', '2', '2', '3', '3', '0.01', '运输费用', '1', '是', '天津市天津市河东区', '王企鹅二', '天津市天津市河东区', '发的', '2017-10-16', '2017-10-16', '2017-10-18', '2017-10-19', '3', '2', '', '', '0000-00-00', '', '', '', '', '', '', '', '243', '13071505230', '13271505230', '0', '2', '2', '2017-10-13', '0', '0');
INSERT INTO `tr_goods` VALUES ('93', '0', '', '鱼丸鱼丸', '2', '2', '2', '', '', '', '', '1', '是', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '山西省太原市迎泽区', '1232312', '2017-10-13', '2', '无包装', '0.01', '一口价', '2', '/uploads/20171013\\aa8f6d66f168c86e793c8444b8d02ef5.jpg', '213132313', '1232', '13271505230', '13271505230', '0', '2', '2', '2017-10-13', '1', '0');
INSERT INTO `tr_goods` VALUES ('94', '0', '', '拖把', '1', '21', '32', '', '', '', '', '1', '是', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '上海市上海市长宁区', '长宁区', '2017-10-14', '1', '无', '0.01', '一口价', '1', '/uploads/20171013\\8f3128613df494a2dd6d7453f3568e67.png', '', '拖把女士', '13027731857', '13027731857', '0', '2', '2', '2017-10-13', '1', '0');
INSERT INTO `tr_goods` VALUES ('96', '1', '2', '鱼豆腐', '2', '1', '2', '2', '12', '0.01', '运输费用', '1', '是', '山西省朔州市山阴县', '123213', '湖北省武汉市硚口区', '13213', '2017-10-19', '2017-10-18', '2017-10-26', '2017-10-17', '4', '2', '', '', '0000-00-00', '', '', '', '', '', '', '', '1221', '15528164562', '13271505230', '0', '2', '2', '2017-10-13', '0', '0');
INSERT INTO `tr_goods` VALUES ('97', '0', '1', '124242', '2', '2', '3', '23', '33', '0.01', '运输费用', '1', '是', '天津市', '324324', '内蒙古呼和浩特市新城区', '324214', '2017-10-17', '2017-10-18', '2017-10-25', '2017-10-26', '3', '1', '', '', '0000-00-00', '', '', '', '', '', '', '', '123', '15538191283', '13271505230', '0', '1', '2', '2017-10-13', '0', '0');
INSERT INTO `tr_goods` VALUES ('98', '0', '', '35445', '1', '45', '4', '', '', '', '', '1', '是', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '3435', '345435', '2017-10-19', '1', '345', '0.01', '一口价', '1', '/uploads/20171013\\011a4ed8add68f121184677a889960ef.png', '', '435', '15538191283', '13271505230', '0', '1', '2', '2017-10-13', '1', '0');
INSERT INTO `tr_goods` VALUES ('99', '0', '2', '花瓶', '1', '21', '32', '21', '32', '0.01', '运输费用', '1', '是', '天津市天津市南开区', '南开区', '北京市北京市宣武区', '宣武区', '2017-10-21', '2017-10-11', '2017-10-21', '2017-10-18', '3', '2', '', '', '0000-00-00', '', '', '', '', '', '', '', '花瓶女士', '13071021121', '13027731857', '0', '1', '2', '2017-10-13', '0', '0');
INSERT INTO `tr_goods` VALUES ('100', '0', '', '铅笔', '1', '21', '32', '', '', '', '', '1', '是', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '天津市天津市南开区', '南开区', '2017-10-19', '2', '21', '0.01', '一口价', '1', '/uploads/20171013\\4e3c0cb8d1532909c58d1edebebbdb4c.png', '', '铅笔女士', '13027731857', '13027731857', '0', '1', '2', '2017-10-13', '1', '0');
INSERT INTO `tr_goods` VALUES ('101', '0', '', '喜虾客', '2', '2', '2', '', '', '', '', '1', '是', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '安徽省合肥市', '213123', '2017-10-19', '2', '123', '0.01', '一口价', '3', '/uploads/20171013\\237c530d56e2cca456dbb8c5f7d16dc1.jpg', '3333333321111', '12312', '13403991030', '13403991030', '0', '2', '2', '2017-10-13', '1', '0');
INSERT INTO `tr_goods` VALUES ('102', '0', '', '鲅鱼', '3', '3', '12', '', '', '', '', '1', '是', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '浙江省绍兴市新昌县', '浙江省绍兴市新昌县', '2017-10-27', '3', '无', '6230', '一口价', '1', '/uploads/20171020\\933ed75f41bac472177667ab54f7b212.jpg', '', '石磊', '15623456895', '13403991030', '0', '1', '1', '2017-10-20', '1', '0');
INSERT INTO `tr_goods` VALUES ('103', '0', '', '冰淇淋', '3', '15', '24', '', '', '', '', '1', '否', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '浙江省宁波市鄞州区', '浙江省宁波市鄞州区', '2017-10-25', '1', '有', '0.01', '一口价', '3', '/uploads/20171020\\eebbee068a390a6f4a7665487c13be8a.jpg', '', '徐建国', '13652345612', '13403991030', '0', '2', '2', '2017-10-20', '1', '0');
INSERT INTO `tr_goods` VALUES ('104', '0', '', '111', '1', '1', '1', '', '', '', '', '1', '是', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '重庆市', '', '2017-10-28', '2', '1', '1', '一口价', '2', '/uploads/20171024\\854292678308ffdbe353f122dec68596.png', '', 'aaa', '13071021121', '13071021121', '0', '1', '1', '2017-10-24', '1', '0');
INSERT INTO `tr_goods` VALUES ('109', '0', '1', '东方饭店', '1', '45', '67', '12', '34', '0.01', '运输费用', '1', '是', '天津市', '订单', '天津市', '多个', '2017-11-30', '2017-12-01', '2017-12-06', '2017-12-07', '3', '2', '', '', '0000-00-00', '', '', '', '', '', '', '', '鞍山市所', '13403991030', '13403991030', '0', '2', '2', '2017-11-24', '0', '0');

-- -----------------------------
-- Table structure for `tr_goodscarlong`
-- -----------------------------
DROP TABLE IF EXISTS `tr_goodscarlong`;
CREATE TABLE `tr_goodscarlong` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `typename` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `tr_goodscarlong`
-- -----------------------------
INSERT INTO `tr_goodscarlong` VALUES ('3', '4.2米以下');
INSERT INTO `tr_goodscarlong` VALUES ('4', '4.2米-7.2米');
INSERT INTO `tr_goodscarlong` VALUES ('5', '7.2米-9.6米');
INSERT INTO `tr_goodscarlong` VALUES ('6', '9.6米以上');

-- -----------------------------
-- Table structure for `tr_goodscartype`
-- -----------------------------
DROP TABLE IF EXISTS `tr_goodscartype`;
CREATE TABLE `tr_goodscartype` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `typename` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `tr_goodscartype`
-- -----------------------------
INSERT INTO `tr_goodscartype` VALUES ('1', '普通货车');
INSERT INTO `tr_goodscartype` VALUES ('2', '冷藏车');
INSERT INTO `tr_goodscartype` VALUES ('3', '平板车');
INSERT INTO `tr_goodscartype` VALUES ('4', '常温箱式');
INSERT INTO `tr_goodscartype` VALUES ('5', '集装箱');
INSERT INTO `tr_goodscartype` VALUES ('6', '高栏');

-- -----------------------------
-- Table structure for `tr_goodscoldtype`
-- -----------------------------
DROP TABLE IF EXISTS `tr_goodscoldtype`;
CREATE TABLE `tr_goodscoldtype` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `typename` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `tr_goodscoldtype`
-- -----------------------------
INSERT INTO `tr_goodscoldtype` VALUES ('1', '常温');
INSERT INTO `tr_goodscoldtype` VALUES ('2', '冷藏');
INSERT INTO `tr_goodscoldtype` VALUES ('3', '冷冻');
INSERT INTO `tr_goodscoldtype` VALUES ('4', '急冻');
INSERT INTO `tr_goodscoldtype` VALUES ('5', '深冷');

-- -----------------------------
-- Table structure for `tr_goodskindtype`
-- -----------------------------
DROP TABLE IF EXISTS `tr_goodskindtype`;
CREATE TABLE `tr_goodskindtype` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `typename` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `tr_goodskindtype`
-- -----------------------------
INSERT INTO `tr_goodskindtype` VALUES ('1', '水产品');
INSERT INTO `tr_goodskindtype` VALUES ('2', '速冻食品');
INSERT INTO `tr_goodskindtype` VALUES ('3', '果蔬');
INSERT INTO `tr_goodskindtype` VALUES ('4', '肉类');
INSERT INTO `tr_goodskindtype` VALUES ('5', '医药');
INSERT INTO `tr_goodskindtype` VALUES ('6', '其他');

-- -----------------------------
-- Table structure for `tr_goodspaytype`
-- -----------------------------
DROP TABLE IF EXISTS `tr_goodspaytype`;
CREATE TABLE `tr_goodspaytype` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `typename` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `tr_goodspaytype`
-- -----------------------------
INSERT INTO `tr_goodspaytype` VALUES ('1', '在线支付');

-- -----------------------------
-- Table structure for `tr_goodstemperature`
-- -----------------------------
DROP TABLE IF EXISTS `tr_goodstemperature`;
CREATE TABLE `tr_goodstemperature` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `typename` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `tr_goodstemperature`
-- -----------------------------
INSERT INTO `tr_goodstemperature` VALUES ('1', '-10℃以下');
INSERT INTO `tr_goodstemperature` VALUES ('2', '-10℃~0℃');
INSERT INTO `tr_goodstemperature` VALUES ('3', '0℃~10℃');
INSERT INTO `tr_goodstemperature` VALUES ('4', '10℃以上');

-- -----------------------------
-- Table structure for `tr_goodstime`
-- -----------------------------
DROP TABLE IF EXISTS `tr_goodstime`;
CREATE TABLE `tr_goodstime` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `typename` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `tr_goodstime`
-- -----------------------------
INSERT INTO `tr_goodstime` VALUES ('1', '一个月以内');
INSERT INTO `tr_goodstime` VALUES ('2', '1-3个月');
INSERT INTO `tr_goodstime` VALUES ('3', '3-6个月');
INSERT INTO `tr_goodstime` VALUES ('4', '6-12个月');
INSERT INTO `tr_goodstime` VALUES ('5', '12个月以上');

-- -----------------------------
-- Table structure for `tr_goods_entrust_car`
-- -----------------------------
DROP TABLE IF EXISTS `tr_goods_entrust_car`;
CREATE TABLE `tr_goods_entrust_car` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `goods_name` varchar(100) NOT NULL COMMENT '货物名称',
  `goods_sort` varchar(100) NOT NULL COMMENT '货物品类',
  `goods_type` varchar(100) NOT NULL COMMENT '货物类型',
  `goods_ton` varchar(100) NOT NULL COMMENT '货物规格-吨',
  `goods_square` varchar(100) NOT NULL COMMENT '货物规格-方',
  `low_t` varchar(100) NOT NULL COMMENT '最低温度',
  `high_t` varchar(100) NOT NULL COMMENT '最高温度',
  `username` varchar(100) NOT NULL COMMENT '用户账号',
  `userid` int(11) NOT NULL COMMENT '用户ID',
  `shipper_name` varchar(100) NOT NULL COMMENT '发货人姓名',
  `shipper_phone` varchar(100) NOT NULL COMMENT '发货人联系方式',
  `receiver_name` varchar(100) NOT NULL COMMENT '收货人姓名',
  `receiver_phone` varchar(100) NOT NULL COMMENT '收货人联系方式',
  `startsite` varchar(225) NOT NULL COMMENT '发货地',
  `startsite_detail` varchar(225) NOT NULL COMMENT '发货详细地址',
  `endsite` varchar(225) NOT NULL COMMENT '目的地',
  `endsite_detail` varchar(225) NOT NULL COMMENT '目的地详细地址',
  `start_loadingtime` date NOT NULL COMMENT '起始装车时间',
  `end_loadingtime` date NOT NULL COMMENT '终止装车时间',
  `start_arrivetime` date NOT NULL COMMENT '起始到货时间',
  `end_arrivetime` date NOT NULL COMMENT '终止到货时间',
  `car_length` int(11) NOT NULL COMMENT '车长',
  `car_type` int(11) NOT NULL COMMENT '车型',
  `order_money` double NOT NULL COMMENT '订单金额',
  `payment_mode` int(11) NOT NULL COMMENT '支付方式',
  `invoice` varchar(100) NOT NULL COMMENT '是否需要发票',
  `remark` text NOT NULL COMMENT '备注',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=116 DEFAULT CHARSET=utf8 COMMENT='货委托车表';

-- -----------------------------
-- Records of `tr_goods_entrust_car`
-- -----------------------------
INSERT INTO `tr_goods_entrust_car` VALUES ('90', '1221', '2', '2', '2', '2', '2', '1', '13403991030', '3', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0', '0', '0', '0', '', '');
INSERT INTO `tr_goods_entrust_car` VALUES ('68', '123', '1', '1', '13', '132', '23', '123', '13403991030', '3', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0', '0', '0', '0', '', '');
INSERT INTO `tr_goods_entrust_car` VALUES ('69', '提子', '2', '2', '2', '2', '12', '21', '13403991030', '3', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0', '0', '0', '0', '', '');
INSERT INTO `tr_goods_entrust_car` VALUES ('70', '葡萄', '1', '2', '12', '12', '12', '12', '13403991030', '3', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0', '0', '0', '0', '', '');
INSERT INTO `tr_goods_entrust_car` VALUES ('71', '提子', '2', '2', '2', '2', '12', '21', '13403991030', '3', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0', '0', '0', '0', '', '');
INSERT INTO `tr_goods_entrust_car` VALUES ('72', '葡萄', '1', '2', '12', '12', '12', '12', '13403991030', '3', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0', '0', '0', '0', '', '');
INSERT INTO `tr_goods_entrust_car` VALUES ('73', '葡萄干', '1', '1', '1', '2', '12', '12', '13403991030', '3', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0', '0', '0', '0', '', '');
INSERT INTO `tr_goods_entrust_car` VALUES ('74', '句话', '3', '2', '1', '2', '12', '5', '13403991030', '3', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0', '0', '0', '0', '', '');
INSERT INTO `tr_goods_entrust_car` VALUES ('91', 'sfdsfd', '2', '2', '123', '123', '123', '23', '13403991030', '3', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0', '0', '0', '0', '', '');
INSERT INTO `tr_goods_entrust_car` VALUES ('92', 'YSL圣罗兰', '3', '3', '2', '2', '12', '12', '18595920787', '44', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0', '0', '0', '0', '', '');
INSERT INTO `tr_goods_entrust_car` VALUES ('93', 'MAC魅可', '2', '3', '2', '3', '12', '21', '18595920787', '44', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0', '0', '0', '0', '', '');
INSERT INTO `tr_goods_entrust_car` VALUES ('94', '虾', '2', '2', '12', '1', '21', '12', '13403991030', '3', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0', '0', '0', '0', '', '');
INSERT INTO `tr_goods_entrust_car` VALUES ('95', '美甲', '', '', '', '', '', '', '13403991030', '3', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0', '0', '0', '0', '', '');
INSERT INTO `tr_goods_entrust_car` VALUES ('96', '123123', '3', '2', '2', '12', '2', '12', '13403991030', '3', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0', '0', '0', '0', '', '');
INSERT INTO `tr_goods_entrust_car` VALUES ('97', '3213', '3', '2', '23', '123', '2', '32', '13403991030', '3', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0', '0', '0', '0', '', '222');
INSERT INTO `tr_goods_entrust_car` VALUES ('98', '2313', '', '', '', '', '1', '3', '13403991030', '3', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0', '0', '0', '0', '', '');
INSERT INTO `tr_goods_entrust_car` VALUES ('84', '护手霜', '3', '2', '123', '123', '12', '123', '13403991030', '3', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0', '0', '0', '0', '', '');
INSERT INTO `tr_goods_entrust_car` VALUES ('85', '水杯', '2', '1', '21', '12', '12', '12', '13403991030', '3', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0', '0', '0', '0', '', '');
INSERT INTO `tr_goods_entrust_car` VALUES ('86', '手机壳', '1', '2', '12', '21', '12', '12', '13403991030', '3', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0', '0', '0', '0', '', '');
INSERT INTO `tr_goods_entrust_car` VALUES ('87', '卫生纸', '2', '2', '12', '12', '12', '21', '13403991030', '3', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0', '0', '0', '0', '', '');
INSERT INTO `tr_goods_entrust_car` VALUES ('88', '文具盒', '1', '2', '12', '12', '2', '12', '13403991030', '3', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0', '0', '0', '0', '', '');
INSERT INTO `tr_goods_entrust_car` VALUES ('89', '铅笔', '2', '2', '21', '21', '21', '212', '13403991030', '3', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0', '0', '0', '0', '', '');
INSERT INTO `tr_goods_entrust_car` VALUES ('99', '123', '2', '2', '2', '2', '12', '12', '13403991030', '3', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0', '0', '0', '0', '', '');
INSERT INTO `tr_goods_entrust_car` VALUES ('100', '1', '2', '2', '2', '2', '12', '2', '13403991030', '3', '123', '13071021121', '123', '13403991030', '2', '21', '河北省', '2', '2017-11-01', '2017-11-02', '2017-11-08', '2017-11-09', '5', '4', '2', '1', '是', '1213123');
INSERT INTO `tr_goods_entrust_car` VALUES ('101', '11', '2', '2', '1', '1', '1', '1', '13403991030', '3', '123', '13071021121', '123', '13403991030', '1', '1', '1', '1', '2017-11-02', '2017-11-03', '2017-11-07', '2017-11-08', '3', '5', '1', '1', '是', '999');
INSERT INTO `tr_goods_entrust_car` VALUES ('102', '22', '2', '1', '12', '12', '12', '12', '13403991030', '3', '456', '15538191283', '456', '15538191382', '2', '2', '2', '2', '2017-11-01', '2017-11-01', '2017-11-02', '2017-11-02', '5', '2', '2', '1', '是', '222');
INSERT INTO `tr_goods_entrust_car` VALUES ('103', '333', '2', '1', '12', '21', '12', '12', '13403991030', '3', '12212', '13071021121', '1231321', '13403991031', '天津市', '12', '北京市北京市', '212', '2017-10-26', '2017-10-25', '2017-11-09', '2017-11-10', '5', '4', '10.2', '1', '是', '');
INSERT INTO `tr_goods_entrust_car` VALUES ('104', '4444', '2', '1', '21', '21', '12', '12', '13403991030', '3', '12', '15538191555', '313131', '15538191382', '天津市', '21', '北京市北京市', '12', '2017-11-02', '2017-11-02', '2017-11-09', '2017-11-09', '4', '2', '20.2', '1', '是', '');
INSERT INTO `tr_goods_entrust_car` VALUES ('105', '111111111111', '1', '2', '1', '1', '1', '1', '13403991030', '3', '111', '13071021121', '111', '13403991030', '1', '1', '1', '1', '2017-11-02', '2017-11-03', '2017-11-15', '2017-11-17', '3', '3', '1', '1', '是', '222');
INSERT INTO `tr_goods_entrust_car` VALUES ('106', '2222222', '1', '1', '2', '2', '2', '2', '13403991030', '3', '2222', '15538191283', '22222', '15538191382', '2', '2', '2', '2', '2017-11-09', '2017-11-09', '2017-11-16', '2017-11-17', '3', '3', '2', '1', '是', '111');
INSERT INTO `tr_goods_entrust_car` VALUES ('107', '3333', '2', '2', '3', '3', '333', '333', '13403991030', '3', '333', '13071021121', '333', '13403991030', '3', '3', '3', '3', '2017-11-02', '2017-11-03', '2017-11-07', '2017-11-08', '4', '1', '3', '1', '是', '222');
INSERT INTO `tr_goods_entrust_car` VALUES ('108', '666', '3', '2', '6', '6', '6', '6', '13403991030', '3', '666', '13071021121', '6661', '13403991030', '6', '6', '6', '6', '2017-11-09', '2017-11-09', '2017-11-15', '2017-11-15', '4', '5', '6', '1', '是', '1231232313');
INSERT INTO `tr_goods_entrust_car` VALUES ('109', '123', '3', '1', '2', '2', '21', '2', '13403991030', '3', '123123', '13071021121', '123', '13403991030', '天津市天津市', '123123', '重庆市重庆市大渡口区', '123123123', '2017-12-01', '2017-12-02', '2017-12-06', '2017-12-07', '5', '2', '0.01', '1', '是', '');
INSERT INTO `tr_goods_entrust_car` VALUES ('110', '123', '3', '1', '2', '2', '21', '2', '13403991030', '3', '123123', '13071021121', '123', '13403991030', '天津市天津市', '123123', '重庆市重庆市大渡口区', '123123123', '2017-12-01', '2017-12-02', '2017-12-06', '2017-12-07', '5', '2', '0.01', '1', '是', '');
INSERT INTO `tr_goods_entrust_car` VALUES ('111', '123', '3', '1', '2', '2', '21', '2', '13403991030', '3', '123123', '13071021121', '123', '13403991030', '天津市天津市', '123123', '重庆市重庆市大渡口区', '123123123', '2017-12-01', '2017-12-02', '2017-12-06', '2017-12-07', '5', '2', '0.01', '1', '是', '');
INSERT INTO `tr_goods_entrust_car` VALUES ('112', '123', '3', '1', '2', '2', '21', '2', '13403991030', '3', '123123', '13071021121', '123', '13403991030', '天津市天津市', '123123', '重庆市重庆市大渡口区', '123123123', '2017-12-01', '2017-12-02', '2017-12-06', '2017-12-07', '5', '2', '0.01', '1', '是', '');
INSERT INTO `tr_goods_entrust_car` VALUES ('113', '123', '3', '1', '2', '2', '21', '2', '13403991030', '3', '123123', '13071021121', '123', '13403991030', '天津市天津市', '123123', '重庆市重庆市大渡口区', '123123123', '2017-12-01', '2017-12-02', '2017-12-06', '2017-12-07', '5', '2', '0.01', '1', '是', '');
INSERT INTO `tr_goods_entrust_car` VALUES ('114', '123', '3', '1', '2', '2', '21', '2', '13403991030', '3', '123123', '13071021121', '123', '13403991030', '天津市天津市', '123123', '重庆市重庆市大渡口区', '123123123', '2017-12-01', '2017-12-02', '2017-12-06', '2017-12-07', '5', '2', '0.01', '1', '是', '');
INSERT INTO `tr_goods_entrust_car` VALUES ('115', '123123', '1', '3', '1', '1', '1', '1', '13403991030', '3', '123', '13071021121', '123123', '13403991030', '天津市天津市', '123', '上海市上海市', '1231', '2017-12-01', '2017-12-02', '2017-12-06', '2017-12-08', '5', '5', '0.01', '1', '是', '');

-- -----------------------------
-- Table structure for `tr_honorimg`
-- -----------------------------
DROP TABLE IF EXISTS `tr_honorimg`;
CREATE TABLE `tr_honorimg` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `title` varchar(225) NOT NULL COMMENT '标题',
  `imgurl` varchar(225) NOT NULL COMMENT '图片路径',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `tr_honorimg`
-- -----------------------------
INSERT INTO `tr_honorimg` VALUES ('3', '中国供应链管理推广先进单位', '/uploads/20171017\\b1d3a2d5a071f005f2e581468d478f29.png');
INSERT INTO `tr_honorimg` VALUES ('4', '2015年度特殊贡献奖', '/uploads/20171017\\d7f3f084f35379220d0330983a35445d.png');
INSERT INTO `tr_honorimg` VALUES ('5', '河南省供应链管理标杆企业', '/uploads/20171017\\814c6dd8ea3dcf216386187ec2ae2434.png');
INSERT INTO `tr_honorimg` VALUES ('6', '2015年郑州市对外开放平台建设重大项目先进单位', '/uploads/20171017\\6a2efa4156ca6d4d2c18bff359da5253.png');
INSERT INTO `tr_honorimg` VALUES ('7', '2015年河南经济年度人物特别贡献奖', '/uploads/20171017\\128b7048fe90216b23b51dd537a03d47.jpg');
INSERT INTO `tr_honorimg` VALUES ('8', '中国冷链物流百强企业', '/uploads/20171017\\41118674cb9b20d5e0bef52e34c4daaf.jpg');

-- -----------------------------
-- Table structure for `tr_image`
-- -----------------------------
DROP TABLE IF EXISTS `tr_image`;
CREATE TABLE `tr_image` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '图片id',
  `imgurl` varchar(225) NOT NULL COMMENT '图片路径',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `tr_image`
-- -----------------------------
INSERT INTO `tr_image` VALUES ('18', '/uploads/20170925\\6e3c9198ee2f8585a0b23e61d9ab4c6d.jpg');
INSERT INTO `tr_image` VALUES ('19', '/uploads/20170925\\00a5312539c42c9087ae42ce311b6396.jpg');
INSERT INTO `tr_image` VALUES ('14', '/uploads/20170925\\7eb701407450123ede458d2a364c4969.png');

-- -----------------------------
-- Table structure for `tr_link`
-- -----------------------------
DROP TABLE IF EXISTS `tr_link`;
CREATE TABLE `tr_link` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `linkname` varchar(200) NOT NULL COMMENT '链接名称',
  `linkurl` varchar(200) NOT NULL COMMENT '链接地址',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COMMENT='友情链接';

-- -----------------------------
-- Records of `tr_link`
-- -----------------------------
INSERT INTO `tr_link` VALUES ('7', '中陆官网', '');
INSERT INTO `tr_link` VALUES ('6', '班列购', '');
INSERT INTO `tr_link` VALUES ('9', '郑州陆港', '');

-- -----------------------------
-- Table structure for `tr_messages_code`
-- -----------------------------
DROP TABLE IF EXISTS `tr_messages_code`;
CREATE TABLE `tr_messages_code` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `mobile` varchar(20) NOT NULL COMMENT '电话号码',
  `code` varchar(10) NOT NULL COMMENT '验证码',
  `create_at` datetime NOT NULL COMMENT '创建时间',
  `update_at` datetime NOT NULL COMMENT '更新时间',
  `statue` int(11) NOT NULL COMMENT '验证码状态',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `tr_messages_code`
-- -----------------------------
INSERT INTO `tr_messages_code` VALUES ('10', '13271505230', '959249', '2017-10-13 11:11:19', '2017-10-13 11:11:19', '1');
INSERT INTO `tr_messages_code` VALUES ('9', '18595920787', '345051', '2017-10-11 14:55:02', '2017-10-11 14:55:02', '1');
INSERT INTO `tr_messages_code` VALUES ('11', '13027731857', '706121', '2017-10-13 11:14:11', '2017-10-13 11:14:11', '1');
INSERT INTO `tr_messages_code` VALUES ('5', '13403991032', '602431', '2017-10-10 09:25:10', '2017-10-10 09:25:10', '2');
INSERT INTO `tr_messages_code` VALUES ('12', '13403991030', '804912', '2017-10-23 14:04:57', '2017-10-23 14:04:57', '1');

-- -----------------------------
-- Table structure for `tr_order_warehouse`
-- -----------------------------
DROP TABLE IF EXISTS `tr_order_warehouse`;
CREATE TABLE `tr_order_warehouse` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '订单id',
  `wh_id` int(11) NOT NULL COMMENT '库id',
  `goods_id` int(11) NOT NULL COMMENT '货id',
  `goodsname` varchar(200) NOT NULL COMMENT '货物名称',
  `user_id` int(11) NOT NULL COMMENT '用户id',
  `order_number` varchar(200) NOT NULL COMMENT '订单编号',
  `pay_number` varchar(200) NOT NULL COMMENT '货主支付交易号',
  `time` datetime NOT NULL COMMENT '下单时间',
  `order_money` double NOT NULL COMMENT '订单金额',
  `pay_state` int(11) NOT NULL DEFAULT '1' COMMENT '支付状态',
  `ku_state` int(11) NOT NULL DEFAULT '1' COMMENT '库状态',
  `order_state` int(11) NOT NULL DEFAULT '1' COMMENT '订单状态',
  `del_goods` int(11) NOT NULL DEFAULT '0' COMMENT '货主删除',
  `del_ku` int(11) NOT NULL DEFAULT '0' COMMENT '库主删除',
  `is_recycle` int(11) NOT NULL DEFAULT '0' COMMENT '是否删除',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=75 DEFAULT CHARSET=gbk;

-- -----------------------------
-- Records of `tr_order_warehouse`
-- -----------------------------
INSERT INTO `tr_order_warehouse` VALUES ('12', '16', '32', '', '8', '2017083197975042', '2017083121001004610294663922', '2017-08-31 00:00:00', '0.01', '6', '5', '6', '0', '1', '0');
INSERT INTO `tr_order_warehouse` VALUES ('7', '21', '33', '', '2', '2017083150102504', '', '2017-08-31 00:00:00', '23', '2', '2', '2', '0', '0', '0');
INSERT INTO `tr_order_warehouse` VALUES ('13', '21', '32', '', '8', '2017090149999710', '', '2017-09-01 00:00:00', '4321', '1', '1', '1', '0', '0', '0');
INSERT INTO `tr_order_warehouse` VALUES ('14', '21', '32', '', '8', '2017090150541005', '', '2017-09-01 00:00:00', '4321', '1', '1', '1', '0', '0', '0');
INSERT INTO `tr_order_warehouse` VALUES ('15', '25', '32', '', '8', '2017090110199995', '2017090121001004250205685295', '2017-09-01 00:00:00', '0.01', '4', '4', '3', '0', '0', '0');
INSERT INTO `tr_order_warehouse` VALUES ('16', '18', '32', '柚子', '8', '2017091297100102', '', '2017-09-12 00:00:00', '4321', '1', '1', '1', '0', '0', '0');
INSERT INTO `tr_order_warehouse` VALUES ('17', '18', '27', '柚子', '8', '2017091254551025', '', '2017-09-12 00:00:00', '213123', '1', '1', '1', '0', '0', '0');
INSERT INTO `tr_order_warehouse` VALUES ('18', '18', '32', '柚子', '8', '2017091250102485', '', '2017-09-12 00:00:00', '4321', '1', '1', '1', '0', '0', '0');
INSERT INTO `tr_order_warehouse` VALUES ('20', '21', '27', '柚子', '8', '2017091448525248', '', '2017-09-14 00:00:00', '213123', '1', '1', '1', '0', '0', '0');
INSERT INTO `tr_order_warehouse` VALUES ('21', '0', '27', '柚子', '8', '2017091551529752', '', '2017-09-15 00:00:00', '213123', '5', '5', '5', '1', '0', '0');
INSERT INTO `tr_order_warehouse` VALUES ('22', '18', '27', '柚子', '8', '2017091549529952', '', '2017-09-15 00:00:00', '213123', '1', '1', '1', '0', '0', '0');
INSERT INTO `tr_order_warehouse` VALUES ('23', '18', '27', '柚子', '8', '2017091552981019', '', '2017-09-15 00:00:00', '213123', '1', '1', '1', '0', '0', '0');
INSERT INTO `tr_order_warehouse` VALUES ('24', '18', '27', '柚子', '8', '2017091550549752', '', '2017-09-15 00:00:00', '213123', '1', '1', '1', '0', '0', '0');
INSERT INTO `tr_order_warehouse` VALUES ('25', '18', '27', '柚子', '8', '2017091510152485', '', '2017-09-15 00:00:00', '213123', '1', '1', '1', '0', '0', '0');
INSERT INTO `tr_order_warehouse` VALUES ('26', '18', '27', '柚子', '8', '2017091599975450', '', '2017-09-15 00:00:00', '213123', '1', '1', '1', '0', '0', '0');
INSERT INTO `tr_order_warehouse` VALUES ('27', '18', '32', '铅笔', '8', '2017091597519955', '', '2017-09-15 00:00:00', '4321', '1', '1', '1', '0', '0', '0');
INSERT INTO `tr_order_warehouse` VALUES ('28', '18', '32', '铅笔', '8', '2017091510197515', '', '2017-09-15 00:00:00', '4321', '1', '1', '1', '0', '0', '0');
INSERT INTO `tr_order_warehouse` VALUES ('29', '0', '32', '铅笔', '8', '2017091510051985', '', '2017-09-15 00:00:00', '4321', '1', '1', '1', '0', '0', '0');
INSERT INTO `tr_order_warehouse` VALUES ('30', '21', '32', '铅笔', '8', '2017091551565010', '', '2017-09-15 00:00:00', '4321', '1', '1', '1', '0', '0', '0');
INSERT INTO `tr_order_warehouse` VALUES ('31', '18', '32', '铅笔', '8', '2017091510048485', '', '2017-09-15 00:00:00', '4321', '1', '1', '1', '0', '0', '0');
INSERT INTO `tr_order_warehouse` VALUES ('32', '18', '32', '铅笔', '8', '2017091553559710', '', '2017-09-15 00:00:00', '4321', '1', '1', '1', '0', '0', '0');
INSERT INTO `tr_order_warehouse` VALUES ('33', '18', '27', '柚子', '8', '2017091550525749', '', '2017-09-15 00:00:00', '213123', '1', '1', '1', '0', '0', '0');
INSERT INTO `tr_order_warehouse` VALUES ('34', '16', '32', '铅笔', '8', '2017091597515710', '', '2017-09-15 00:00:00', '4321', '1', '1', '1', '0', '0', '0');
INSERT INTO `tr_order_warehouse` VALUES ('35', '0', '32', '铅笔', '8', '2017091510052499', '', '2017-09-15 00:00:00', '4321', '5', '5', '5', '1', '0', '0');
INSERT INTO `tr_order_warehouse` VALUES ('36', '21', '27', '柚子', '8', '2017091557102495', '', '2017-09-15 00:00:00', '213123', '1', '1', '1', '0', '0', '0');
INSERT INTO `tr_order_warehouse` VALUES ('37', '16', '32', '铅笔', '8', '2017091599100501', '', '2017-09-15 00:00:00', '4321', '1', '1', '1', '0', '0', '0');
INSERT INTO `tr_order_warehouse` VALUES ('38', '21', '32', '铅笔', '8', '2017091548495498', '', '2017-09-15 00:00:00', '4321', '1', '1', '1', '0', '0', '0');
INSERT INTO `tr_order_warehouse` VALUES ('39', '16', '27', '柚子', '8', '2017091510198975', '', '2017-09-15 00:00:00', '213123', '1', '1', '1', '0', '0', '0');
INSERT INTO `tr_order_warehouse` VALUES ('40', '16', '27', '柚子', '8', '2017091555535748', '', '2017-09-15 00:00:00', '213123', '1', '1', '1', '0', '0', '0');
INSERT INTO `tr_order_warehouse` VALUES ('41', '21', '27', '柚子', '8', '2017091950565498', '', '2017-09-19 00:00:00', '213123', '1', '1', '1', '0', '0', '0');
INSERT INTO `tr_order_warehouse` VALUES ('42', '18', '27', '柚子', '8', '2017091999995054', '', '2017-09-19 00:00:00', '213123', '2', '2', '2', '0', '0', '0');
INSERT INTO `tr_order_warehouse` VALUES ('43', '30', '45', '猕猴桃', '2', '2017092051525651', '2017092021001004810505722255', '2017-09-20 00:00:00', '0.01', '4', '4', '4', '0', '0', '0');
INSERT INTO `tr_order_warehouse` VALUES ('44', '29', '45', '猕猴桃', '2', '2017092010056526', '2017092021001004810505763778', '2017-09-20 00:00:00', '0.01', '3', '3', '3', '0', '0', '0');
INSERT INTO `tr_order_warehouse` VALUES ('45', '32', '51', '猕猴桃', '3', '2017092152981025', '2017092121001004810507587869', '2017-09-21 00:00:00', '0.01', '4', '4', '4', '0', '0', '0');
INSERT INTO `tr_order_warehouse` VALUES ('46', '21', '49', '开心果', '29', '2017092610257102', '', '2017-09-26 00:00:00', '0.01', '1', '1', '1', '0', '0', '0');
INSERT INTO `tr_order_warehouse` VALUES ('47', '21', '49', '开心果', '29', '2017092656525155', '', '2017-09-26 00:00:00', '0.01', '1', '1', '1', '0', '0', '0');
INSERT INTO `tr_order_warehouse` VALUES ('48', '18', '49', '开心果', '29', '2017092655524810', '', '2017-09-26 00:00:00', '0.01', '1', '1', '1', '0', '0', '0');
INSERT INTO `tr_order_warehouse` VALUES ('49', '21', '49', '开心果', '29', '2017092648995749', '', '2017-09-26 00:00:00', '0.01', '1', '1', '1', '0', '0', '0');
INSERT INTO `tr_order_warehouse` VALUES ('50', '21', '49', '开心果', '29', '2017092756481015', '', '2017-09-27 00:00:00', '0.01', '5', '5', '5', '0', '0', '0');
INSERT INTO `tr_order_warehouse` VALUES ('51', '34', '53', '樱桃干', '39', '2017093049501021', '2017093021001004810279574746', '2017-09-30 00:00:00', '0.01', '4', '4', '4', '1', '0', '0');
INSERT INTO `tr_order_warehouse` VALUES ('52', '35', '27', '柚子', '8', '2017100952999910', '', '2017-10-09 17:36:36', '213123', '1', '1', '1', '0', '0', '0');
INSERT INTO `tr_order_warehouse` VALUES ('53', '36', '45', '猕猴桃', '41', '2017101097555798', '', '2017-10-10 08:52:26', '0.01', '5', '5', '5', '0', '0', '0');
INSERT INTO `tr_order_warehouse` VALUES ('54', '36', '36', '热干面', '3', '2017101054564852', '', '2017-10-10 08:52:54', '22', '5', '5', '5', '0', '0', '0');
INSERT INTO `tr_order_warehouse` VALUES ('55', '36', '32', '铅笔', '8', '2017101057519957', '', '2017-10-10 08:53:13', '4321', '5', '5', '5', '0', '0', '0');
INSERT INTO `tr_order_warehouse` VALUES ('56', '41', '49', '开心果', '29', '2017101010297555', '2017101021001004610293354278', '2017-10-10 18:53:19', '0.01', '4', '4', '4', '0', '0', '0');
INSERT INTO `tr_order_warehouse` VALUES ('57', '43', '60', '11111222222222', '29', '2017101049100975', '', '2017-10-10 19:23:29', '0.01', '5', '5', '5', '0', '0', '0');
INSERT INTO `tr_order_warehouse` VALUES ('58', '44', '64', 'mac-CB96-see sheer', '43', '2017101154559998', '2017101121001004810204071423', '2017-10-11 10:07:50', '0.01', '4', '4', '4', '0', '0', '0');
INSERT INTO `tr_order_warehouse` VALUES ('59', '44', '66', '魅可人鱼姬色', '3', '2017101148981009', '', '2017-10-11 10:08:00', '0.01', '5', '5', '5', '0', '1', '0');
INSERT INTO `tr_order_warehouse` VALUES ('60', '44', '66', '魅可人鱼姬色', '3', '2017101110155102', '', '2017-10-11 10:15:42', '0.01', '5', '5', '5', '0', '0', '0');
INSERT INTO `tr_order_warehouse` VALUES ('61', '45', '58', '22222222222222', '29', '2017101110110154', '', '2017-10-11 14:23:10', '0.01', '5', '5', '5', '0', '0', '0');
INSERT INTO `tr_order_warehouse` VALUES ('62', '45', '60', '11111222222222', '29', '2017101197494855', '', '2017-10-11 14:25:46', '0.01', '5', '5', '5', '0', '0', '0');
INSERT INTO `tr_order_warehouse` VALUES ('63', '45', '58', '22222222222222', '29', '2017101199974855', '', '2017-10-11 14:29:32', '0.01', '5', '5', '5', '0', '0', '0');
INSERT INTO `tr_order_warehouse` VALUES ('64', '36', '81', '菊花', '44', '2017101298571001', '', '2017-10-12 15:26:51', '23', '5', '5', '5', '1', '0', '0');
INSERT INTO `tr_order_warehouse` VALUES ('65', '36', '82', 'YSL圣罗兰', '3', '2017101297535797', '2017101221001004810207232783', '2017-10-12 15:30:50', '0.01', '4', '4', '4', '0', '0', '0');
INSERT INTO `tr_order_warehouse` VALUES ('66', '36', '83', '66666', '44', '2017101255521021', '', '2017-10-12 15:32:23', '0.01', '5', '5', '5', '1', '0', '0');
INSERT INTO `tr_order_warehouse` VALUES ('67', '35', '85', '眼药水', '3', '2017101210299545', '', '2017-10-12 18:13:19', '0.01', '1', '1', '1', '0', '0', '0');
INSERT INTO `tr_order_warehouse` VALUES ('68', '45', '86', '蓝莓果粒茶', '3', '2017101355535651', '', '2017-10-13 08:11:35', '0.01', '1', '1', '1', '0', '0', '0');
INSERT INTO `tr_order_warehouse` VALUES ('69', '35', '36', '热干面', '3', '2017101310010099', '', '2017-10-13 09:17:49', '22', '1', '1', '1', '0', '0', '0');
INSERT INTO `tr_order_warehouse` VALUES ('70', '35', '35', '虾', '3', '2017101397985450', '', '2017-10-13 09:18:18', '999', '1', '1', '1', '0', '0', '0');
INSERT INTO `tr_order_warehouse` VALUES ('71', '35', '89', '青岛大虾', '3', '2017101397995398', '', '2017-10-13 09:20:58', '60', '1', '1', '1', '0', '0', '0');
INSERT INTO `tr_order_warehouse` VALUES ('72', '48', '66', '魅可人鱼姬色', '3', '2017101398100484', '', '2017-10-13 10:40:27', '0.01', '5', '5', '5', '1', '0', '0');
INSERT INTO `tr_order_warehouse` VALUES ('73', '49', '94', '拖把', '46', '2017101310156539', '2017101321001004610298862734', '2017-10-13 14:32:30', '0.01', '4', '4', '4', '0', '1', '0');
INSERT INTO `tr_order_warehouse` VALUES ('74', '43', '45', '猕猴桃', '41', '2017112050514855', '', '2017-11-20 09:05:54', '0.01', '2', '2', '2', '0', '0', '0');

-- -----------------------------
-- Table structure for `tr_order_entrust_car`
-- -----------------------------
DROP TABLE IF EXISTS `tr_order_entrust_car`;
CREATE TABLE `tr_order_entrust_car` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `user_id` varchar(100) NOT NULL COMMENT '用户ID',
  `user_name` varchar(100) NOT NULL COMMENT '用户账号',
  `shipper_name` varchar(100) NOT NULL COMMENT '发货人姓名',
  `shipper_phone` varchar(100) NOT NULL COMMENT '发货人电话',
  `receiver_name` varchar(100) NOT NULL COMMENT '收货人姓名',
  `receiver_phone` varchar(100) NOT NULL COMMENT '收货人电话',
  `carrier_name` varchar(100) NOT NULL COMMENT '托运方姓名',
  `carrier_phone` varchar(100) NOT NULL COMMENT '托运方电话',
  `goods_id` varchar(225) NOT NULL COMMENT '货物ID',
  `order_number` varchar(225) NOT NULL COMMENT '订单编号',
  `pay_number` varchar(225) NOT NULL COMMENT '交易支付号',
  `startsite` varchar(225) NOT NULL COMMENT '发货地址',
  `startsite_detail` varchar(225) NOT NULL COMMENT '发货地详细地址',
  `endsite` varchar(225) NOT NULL COMMENT '目的地',
  `endsite_detail` varchar(225) NOT NULL COMMENT '目的地详细地址',
  `start_loadingtime` date NOT NULL COMMENT '起始装车时间',
  `end_loadingtime` date NOT NULL COMMENT '终止装车时间',
  `start_arrivetime` date NOT NULL COMMENT '起始到货时间',
  `end_arrivetime` date NOT NULL COMMENT '终止到货时间',
  `car_length` int(11) NOT NULL COMMENT '车长',
  `car_type` int(11) NOT NULL COMMENT '车型',
  `order_money` double NOT NULL COMMENT '订单金额',
  `payment_mode` int(11) NOT NULL COMMENT '支付方式',
  `invoice` varchar(100) NOT NULL COMMENT '是否需要发票',
  `remark` text NOT NULL COMMENT '备注',
  `pay_state` int(11) NOT NULL DEFAULT '1' COMMENT '支付状态',
  `car_state` int(11) NOT NULL DEFAULT '1' COMMENT '车状态',
  `order_state` int(11) NOT NULL DEFAULT '1' COMMENT '订单状态',
  `del_goods` int(11) NOT NULL DEFAULT '0' COMMENT '货主删除',
  `del_car` int(11) NOT NULL DEFAULT '0' COMMENT '车主删除',
  `is_recycle` int(11) NOT NULL DEFAULT '0' COMMENT '订单删除',
  `time` datetime NOT NULL COMMENT '下单时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COMMENT='货委托车订单表';

-- -----------------------------
-- Records of `tr_order_entrust_car`
-- -----------------------------
INSERT INTO `tr_order_entrust_car` VALUES ('7', '3', '13403991030', '12312', '13071021121', '213231', '13403991030', '', '', '68', '2017102349101555', '', '天津市天津市', '123123', '北京市', '123123', '2017-10-19', '2017-10-02', '2017-10-18', '2017-10-10', '6', '1', '0.01', '1', '是', '', '6', '6', '6', '1', '0', '0', '2017-10-23 15:34:57');
INSERT INTO `tr_order_entrust_car` VALUES ('8', '3', '13403991030', '12312', '13071021121', '123', '13403991030', '', '', '72,71', '2017102353575351', '', '天津市天津市', '1232313', '内蒙古呼和浩特市', '12323', '2017-10-18', '2017-10-19', '2017-10-19', '2017-10-22', '4', '5', '0.01', '1', '是', '', '6', '6', '6', '1', '0', '0', '2017-10-23 15:37:09');
INSERT INTO `tr_order_entrust_car` VALUES ('9', '3', '13403991030', '122', '13071021121', '111', '13403991030', '', '', '74,73', '2017102399535254', '', '内蒙古', '211231', '辽宁省沈阳市', '13223', '2017-10-19', '2017-10-19', '2017-10-12', '2017-10-24', '4', '3', '0.01', '1', '是', '', '6', '6', '6', '1', '0', '0', '2017-10-23 15:39:08');
INSERT INTO `tr_order_entrust_car` VALUES ('10', '3', '13403991030', '12313', '13071021121', '2312', '13403991030', '', '', '86,85,84', '2017102354485452', '', '天津市天津市河西区', '12311231', '河北省', '12321', '2017-10-11', '2017-10-10', '2017-10-20', '2017-10-03', '4', '4', '0.01', '1', '是', '', '6', '6', '6', '1', '0', '0', '2017-10-23 15:44:22');
INSERT INTO `tr_order_entrust_car` VALUES ('11', '3', '13403991030', '1231', '13071021121', '135', '13403991030', '陆港易冷链', '15538191382', '89,88,87', '2017102350979753', '', '北京市北京市崇文区', '12312321', '内蒙古呼和浩特市新城区', '21231', '2017-11-01', '2017-10-25', '2017-10-24', '2017-10-24', '4', '3', '0.01', '1', '是', '', '1', '1', '1', '0', '0', '0', '2017-10-23 15:48:34');
INSERT INTO `tr_order_entrust_car` VALUES ('12', '3', '13403991030', '312', '13071021121', '132', '13403991030', '陆港易冷链', '15538191382', '90', '2017102354521001', '', '1323', '1323', '1323', '1323', '2017-10-26', '2017-10-26', '2017-10-18', '2017-10-31', '4', '1', '0.01', '1', '是', '', '6', '6', '6', '1', '1', '1', '2017-10-23 21:40:54');
INSERT INTO `tr_order_entrust_car` VALUES ('13', '3', '13403991030', '1232', '13071021121', '123', '13403991030', '陆港易冷链', '15538191382', '91', '2017102398994957', '2017102321001004810214570826', '天津市', '13123', '河北省', '123', '2017-10-26', '2017-10-25', '2017-10-26', '2017-10-19', '5', '1', '0.01', '1', '是', '', '3', '3', '3', '0', '0', '0', '2017-10-23 21:42:35');
INSERT INTO `tr_order_entrust_car` VALUES ('14', '44', '18595920787', '2121', '13403991030', '1221', '13262750648', '陆港易冷链', '15538191382', '93,92', '2017102499525649', '', '重庆市重庆市', '12212', '上海市上海市', '1212', '2017-10-18', '2017-10-25', '2017-10-26', '2017-10-26', '6', '3', '0.01', '1', '是', '', '1', '1', '1', '0', '0', '0', '2017-10-24 11:11:24');
INSERT INTO `tr_order_entrust_car` VALUES ('15', '3', '13403991030', '212', '13071021121', '131', '13403991030', '陆港易冷链', '15538191382', '95,94', '2017102510153102', '2017102521001004810215149370', '河北省', '1212', '上海市', '21212', '2017-10-26', '2017-10-26', '2017-10-27', '2017-10-27', '5', '2', '0.01', '1', '是', '', '5', '5', '5', '0', '0', '0', '2017-10-25 08:45:50');
INSERT INTO `tr_order_entrust_car` VALUES ('16', '3', '13403991030', '231', '13071021121', '13', '13403991030', '陆港易冷链', '15538191382', '96', '2017102510249575', '', '天津市天津市', '23123123', '内蒙古呼和浩特市', '12313', '2017-10-26', '2017-10-19', '2017-10-26', '2017-10-27', '5', '3', '0.01', '1', '是', '', '1', '1', '1', '0', '0', '0', '2017-10-25 08:47:43');
INSERT INTO `tr_order_entrust_car` VALUES ('17', '3', '13403991030', '3213', '13071021121', '13231', '13403991030', '陆港易冷链', '15538191382', '98,97', '2017102510155101', '', '天津市天津市', '12313', '上海市', '312321', '2017-10-12', '2017-10-24', '2017-10-26', '2017-10-19', '5', '1', '0.01', '1', '是', '', '1', '1', '1', '0', '0', '0', '2017-10-25 09:19:26');
INSERT INTO `tr_order_entrust_car` VALUES ('18', '3', '13403991030', '123', '13071021121', '123', '13403991030', '陆港易冷链', '15538191382', '99', '2017102654561015', '', '天津市天津市', '1212', '天津市', '21122', '2017-10-27', '2017-10-28', '2017-10-31', '2017-11-01', '4', '4', '1000', '1', '是', '123123113', '1', '1', '1', '0', '0', '0', '2017-10-26 10:27:02');
INSERT INTO `tr_order_entrust_car` VALUES ('19', '3', '13403991030', '', '', '', '', '陆港易冷链', '15538191382', '100', '2017103110154100', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0', '0', '666', '0', '', '123123', '1', '1', '1', '0', '0', '0', '2017-10-31 16:48:14');
INSERT INTO `tr_order_entrust_car` VALUES ('20', '3', '13403991030', '', '', '', '', '陆港易冷链', '15538191382', '102,101', '2017103110153102', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0', '0', '5', '0', '', '123', '1', '1', '1', '0', '0', '0', '2017-10-31 16:53:34');
INSERT INTO `tr_order_entrust_car` VALUES ('21', '3', '13403991030', '', '', '', '', '陆港易冷链', '15538191382', '104,103', '2017103157525098', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0', '0', '30.5', '0', '', '', '6', '6', '6', '0', '0', '0', '2017-10-31 17:52:09');
INSERT INTO `tr_order_entrust_car` VALUES ('22', '3', '13403991030', '', '', '', '', '陆港易冷链', '15538191382', '107,106,105', '2017110153569948', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0', '0', '333', '0', '', '', '1', '1', '1', '0', '0', '0', '2017-11-01 08:23:17');
INSERT INTO `tr_order_entrust_car` VALUES ('23', '3', '13403991030', '', '', '', '', '陆港易冷链', '15538191382', '108', '2017110157555148', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0', '0', '7', '0', '', '', '2', '2', '2', '0', '0', '0', '2017-11-01 17:36:25');
INSERT INTO `tr_order_entrust_car` VALUES ('24', '3', '13403991030', '', '', '', '', '陆港易冷链', '15538191382', '114', '2017113049529948', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0', '0', '0.01', '0', '', '', '1', '1', '1', '0', '0', '0', '2017-11-30 08:36:49');
INSERT INTO `tr_order_entrust_car` VALUES ('25', '3', '13403991030', '', '', '', '', '陆港易冷链', '15538191382', '115', '2017113057535557', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0', '0', '0.01', '0', '', '', '1', '1', '1', '0', '0', '0', '2017-11-30 10:34:49');

-- -----------------------------
-- Table structure for `tr_order_goodscar`
-- -----------------------------
DROP TABLE IF EXISTS `tr_order_goodscar`;
CREATE TABLE `tr_order_goodscar` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `goods_id` int(11) NOT NULL COMMENT '货源ID',
  `goodsname` varchar(200) NOT NULL COMMENT '货物名称',
  `user_id` int(11) NOT NULL COMMENT '用户ID',
  `order_number` varchar(200) NOT NULL COMMENT '订单编号',
  `pay_number` varchar(200) NOT NULL COMMENT '支付交易号',
  `transporter_name` varchar(200) NOT NULL COMMENT '承运方名称',
  `transporter_phone` varchar(200) NOT NULL COMMENT '承运方联系方式',
  `order_money` double NOT NULL COMMENT '订单金额',
  `pay_state` int(11) NOT NULL DEFAULT '1' COMMENT '支付状态',
  `car_state` int(11) NOT NULL DEFAULT '1' COMMENT '车的状态',
  `order_state` int(11) NOT NULL DEFAULT '1' COMMENT '订单状态',
  `time` datetime NOT NULL COMMENT '下单时间',
  `del_goods` int(11) NOT NULL DEFAULT '0' COMMENT '货主删除',
  `del_car` int(11) NOT NULL DEFAULT '0' COMMENT '车主删除',
  `is_recycle` int(11) NOT NULL DEFAULT '0' COMMENT '是否删除',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=187 DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `tr_order_goodscar`
-- -----------------------------
INSERT INTO `tr_order_goodscar` VALUES ('93', '30', '', '8', '2017082549495499', '2017083021001004210287244714', '老杨', '13262750648', '0.01', '3', '3', '3', '2017-08-25 00:00:00', '0', '0', '0');
INSERT INTO `tr_order_goodscar` VALUES ('99', '26', '', '3', '2017082910010249', '', '235235', '13403991030', '0.01', '4', '4', '4', '2017-08-29 00:00:00', '0', '0', '0');
INSERT INTO `tr_order_goodscar` VALUES ('100', '30', '', '8', '2017082952491005', '', '老杨', '13262750648', '6661', '1', '1', '1', '2017-08-29 00:00:00', '0', '0', '0');
INSERT INTO `tr_order_goodscar` VALUES ('101', '28', '', '3', '2017083056521021', '', '235235', '13403991030', '0', '1', '1', '1', '2017-08-30 00:00:00', '0', '0', '0');
INSERT INTO `tr_order_goodscar` VALUES ('102', '28', '', '3', '2017083099565198', '', '235235', '13403991030', '0', '1', '1', '1', '2017-08-30 00:00:00', '0', '0', '0');
INSERT INTO `tr_order_goodscar` VALUES ('106', '28', '', '2', '2017083057579899', '2017083021001004810222584427', '1111111', '15538191283', '0.01', '2', '2', '2', '2017-08-30 00:00:00', '0', '0', '0');
INSERT INTO `tr_order_goodscar` VALUES ('107', '28', '', '2', '2017083054555753', '2017083021001004810222595151', '1111111', '15538191283', '0.01', '2', '2', '2', '2017-08-30 00:00:00', '0', '0', '0');
INSERT INTO `tr_order_goodscar` VALUES ('105', '28', '', '2', '2017083056494952', '2017083021001004810222585473', '1111111', '15538191283', '0.01', '2', '2', '2', '2017-08-30 00:00:00', '0', '0', '0');
INSERT INTO `tr_order_goodscar` VALUES ('108', '28', '', '3', '2017090156995410', '2017090121001004250204616876', '235235', '13403991030', '0.01', '4', '4', '4', '2017-09-01 00:00:00', '0', '0', '0');
INSERT INTO `tr_order_goodscar` VALUES ('109', '30', '', '8', '2017090157971005', '2017090121001004810226336638', '老杨', '13262750648', '0.01', '6', '5', '6', '2017-09-01 00:00:00', '0', '0', '0');
INSERT INTO `tr_order_goodscar` VALUES ('110', '30', '', '8', '2017090152524899', '2017090121001004810226482527', '老杨', '13262750648', '0.01', '4', '4', '3', '2017-09-01 00:00:00', '0', '0', '0');
INSERT INTO `tr_order_goodscar` VALUES ('111', '34', '3333333', '29', '2017091456571025', '', '陆港易冷链', '15538191382', '3', '1', '1', '1', '2017-09-14 00:00:00', '0', '0', '0');
INSERT INTO `tr_order_goodscar` VALUES ('112', '30', '蒙牛', '29', '2017091453531011', '', '陆港易冷链', '15538191382', '666', '1', '1', '1', '2017-09-14 00:00:00', '0', '0', '0');
INSERT INTO `tr_order_goodscar` VALUES ('113', '28', '火锅底料', '29', '2017091451991011', '', '陆港易冷链', '15538191382', '111', '1', '1', '1', '2017-09-14 00:00:00', '0', '0', '0');
INSERT INTO `tr_order_goodscar` VALUES ('114', '34', '3333333', '29', '2017091410155100', '', '陆港易冷链', '15538191382', '3', '1', '1', '1', '2017-09-14 00:00:00', '0', '0', '0');
INSERT INTO `tr_order_goodscar` VALUES ('115', '34', '3333333', '29', '2017091455525310', '', '陆港易冷链', '15538191382', '3', '1', '1', '1', '2017-09-14 00:00:00', '0', '0', '0');
INSERT INTO `tr_order_goodscar` VALUES ('116', '34', '3333333', '8', '2017091599551025', '', '老杨', '13262750648', '3', '1', '1', '1', '2017-09-15 00:00:00', '0', '0', '0');
INSERT INTO `tr_order_goodscar` VALUES ('117', '34', '3333333', '8', '2017091510199579', '', '老杨', '13262750648', '3', '1', '1', '1', '2017-09-15 00:00:00', '0', '0', '0');
INSERT INTO `tr_order_goodscar` VALUES ('118', '34', '3333333', '8', '2017091557535698', '', '老杨', '13262750648', '3', '5', '5', '5', '2017-09-15 00:00:00', '0', '0', '0');
INSERT INTO `tr_order_goodscar` VALUES ('119', '34', '3333333', '8', '2017091556100495', '', '老杨', '13262750648', '3', '1', '1', '1', '2017-09-15 00:00:00', '0', '0', '0');
INSERT INTO `tr_order_goodscar` VALUES ('120', '26', '小仙女', '3', '2017091554485654', '', '235235', '13403991030', '4', '1', '1', '1', '2017-09-15 00:00:00', '0', '0', '0');
INSERT INTO `tr_order_goodscar` VALUES ('121', '26', '小仙女', '3', '2017091510153975', '', '235235', '13403991030', '4', '1', '1', '1', '2017-09-15 00:00:00', '0', '0', '0');
INSERT INTO `tr_order_goodscar` VALUES ('122', '34', '3333333', '8', '2017091548984810', '', '老杨', '13262750648', '3', '1', '1', '1', '2017-09-15 00:00:00', '0', '0', '0');
INSERT INTO `tr_order_goodscar` VALUES ('123', '34', '3333333', '8', '2017091551575249', '', '老杨', '13262750648', '3', '1', '1', '1', '2017-09-15 00:00:00', '0', '0', '0');
INSERT INTO `tr_order_goodscar` VALUES ('124', '34', '3333333', '8', '2017091510254561', '', '老杨', '13262750648', '3', '1', '1', '1', '2017-09-15 00:00:00', '0', '0', '0');
INSERT INTO `tr_order_goodscar` VALUES ('125', '34', '3333333', '8', '2017091599555356', '', '老杨', '13262750648', '3', '1', '1', '1', '2017-09-15 00:00:00', '0', '0', '0');
INSERT INTO `tr_order_goodscar` VALUES ('126', '34', '3333333', '8', '2017091556991015', '', '老杨', '13262750648', '3', '1', '1', '1', '2017-09-15 00:00:00', '0', '0', '0');
INSERT INTO `tr_order_goodscar` VALUES ('127', '26', '小仙女', '3', '2017091850511024', '', '235235', '13403991030', '4', '1', '1', '1', '2017-09-18 00:00:00', '0', '0', '0');
INSERT INTO `tr_order_goodscar` VALUES ('128', '34', '3333333', '8', '2017091953521011', '', '老杨', '13262750648', '3', '1', '1', '1', '2017-09-19 00:00:00', '0', '0', '0');
INSERT INTO `tr_order_goodscar` VALUES ('129', '41', '羊肉', '2', '2017092057991005', '2017092021001004610247054048', '周雪迎', '15538191283', '0.01', '4', '4', '4', '2017-09-20 00:00:00', '0', '0', '0');
INSERT INTO `tr_order_goodscar` VALUES ('130', '48', '牛肉', '3', '2017092149101564', '2017092121001004610248860399', '235235', '13403991030', '0.01', '6', '5', '6', '2017-09-21 00:00:00', '0', '0', '0');
INSERT INTO `tr_order_goodscar` VALUES ('131', '41', '羊肉', '3', '2017092698485210', '', '235235', '13403991030', '0.01', '1', '1', '1', '2017-09-26 00:00:00', '0', '0', '0');
INSERT INTO `tr_order_goodscar` VALUES ('132', '41', '羊肉', '3', '2017092698985598', '', '235235', '13403991030', '0.01', '1', '1', '1', '2017-09-26 00:00:00', '0', '0', '0');
INSERT INTO `tr_order_goodscar` VALUES ('133', '41', '羊肉', '3', '2017092650521015', '', '235235', '13403991030', '0.01', '1', '1', '1', '2017-09-26 00:00:00', '0', '0', '0');
INSERT INTO `tr_order_goodscar` VALUES ('134', '48', '牛肉', '3', '2017092610110149', '', '235235', '13403991030', '0.01', '1', '1', '1', '2017-09-26 00:00:00', '0', '0', '0');
INSERT INTO `tr_order_goodscar` VALUES ('135', '48', '牛肉', '3', '2017092655985248', '', '235235', '13403991030', '0.01', '1', '1', '1', '2017-09-26 00:00:00', '0', '0', '0');
INSERT INTO `tr_order_goodscar` VALUES ('136', '41', '羊肉', '3', '2017092656505310', '', '235235', '13403991030', '0.01', '1', '1', '1', '2017-09-26 00:00:00', '0', '0', '0');
INSERT INTO `tr_order_goodscar` VALUES ('137', '40', '虾虾虾', '3', '2017092654484854', '', '235235', '13403991030', '9999', '1', '1', '1', '2017-09-26 00:00:00', '0', '0', '0');
INSERT INTO `tr_order_goodscar` VALUES ('138', '41', '羊肉', '3', '2017092655574957', '', '235235', '13403991030', '0.01', '1', '1', '1', '2017-09-26 00:00:00', '0', '0', '0');
INSERT INTO `tr_order_goodscar` VALUES ('139', '48', '牛肉', '3', '2017092654100989', '', '235235', '13403991030', '0.01', '1', '1', '1', '2017-09-26 00:00:00', '0', '0', '0');
INSERT INTO `tr_order_goodscar` VALUES ('140', '48', '牛肉', '3', '2017092656544999', '', '235235', '13403991030', '0.01', '1', '1', '1', '2017-09-26 00:00:00', '0', '0', '0');
INSERT INTO `tr_order_goodscar` VALUES ('141', '41', '羊肉', '3', '2017092698491025', '', '235235', '13403991030', '0.01', '1', '1', '1', '2017-09-26 00:00:00', '0', '0', '0');
INSERT INTO `tr_order_goodscar` VALUES ('142', '48', '牛肉', '3', '2017092650485355', '', '235235', '13403991030', '0.01', '1', '1', '1', '2017-09-26 00:00:00', '0', '0', '0');
INSERT INTO `tr_order_goodscar` VALUES ('143', '48', '牛肉', '3', '2017092610149504', '', '235235', '13403991030', '0.01', '1', '1', '1', '2017-09-26 00:00:00', '0', '0', '0');
INSERT INTO `tr_order_goodscar` VALUES ('144', '48', '牛肉', '3', '2017092610299545', '', '235235', '13403991030', '0.01', '1', '1', '1', '2017-09-26 00:00:00', '0', '0', '0');
INSERT INTO `tr_order_goodscar` VALUES ('145', '40', '虾虾虾', '3', '2017092657515353', '', '235235', '13403991030', '9999', '1', '1', '1', '2017-09-26 00:00:00', '0', '0', '0');
INSERT INTO `tr_order_goodscar` VALUES ('146', '48', '牛肉', '3', '2017092648555710', '', '235235', '13403991030', '0.01', '1', '1', '1', '2017-09-26 00:00:00', '0', '0', '0');
INSERT INTO `tr_order_goodscar` VALUES ('147', '40', '虾虾虾', '3', '2017092699565756', '', '235235', '13403991030', '9999', '1', '1', '1', '2017-09-26 00:00:00', '0', '0', '0');
INSERT INTO `tr_order_goodscar` VALUES ('148', '41', '羊肉', '3', '2017092648994854', '', '235235', '13403991030', '0.01', '1', '1', '1', '2017-09-26 00:00:00', '0', '0', '0');
INSERT INTO `tr_order_goodscar` VALUES ('149', '41', '羊肉', '3', '2017092699481015', '', '235235', '13403991030', '0.01', '1', '1', '1', '2017-09-26 00:00:00', '0', '0', '0');
INSERT INTO `tr_order_goodscar` VALUES ('150', '48', '牛肉', '3', '2017092752559750', '', '235235', '13403991030', '0.01', '1', '1', '1', '2017-09-27 00:00:00', '0', '0', '0');
INSERT INTO `tr_order_goodscar` VALUES ('151', '48', '牛肉', '39', '2017093057535348', '2017093021001004810279696189', '0930测试本地', '18595920787', '0.01', '4', '4', '4', '2017-09-30 00:00:00', '0', '1', '0');
INSERT INTO `tr_order_goodscar` VALUES ('152', '41', '羊肉', '41', '2017100997539999', '', '666', '15538191283', '0.01', '1', '1', '1', '2017-10-09 16:24:10', '0', '0', '0');
INSERT INTO `tr_order_goodscar` VALUES ('153', '41', '羊肉', '41', '2017100954100481', '', '666', '15538191283', '0.01', '1', '1', '1', '2017-10-09 16:28:22', '0', '0', '0');
INSERT INTO `tr_order_goodscar` VALUES ('154', '41', '羊肉', '41', '2017100956100101', '', '666', '15538191283', '0.01', '1', '1', '1', '2017-10-09 16:29:12', '0', '0', '0');
INSERT INTO `tr_order_goodscar` VALUES ('155', '40', '虾虾虾', '41', '2017100998100565', '', '666', '15538191283', '9999', '1', '1', '1', '2017-10-09 16:35:55', '0', '0', '0');
INSERT INTO `tr_order_goodscar` VALUES ('156', '52', '1323', '41', '2017100948995157', '', '666', '15538191283', '0.01', '1', '1', '1', '2017-10-09 16:58:08', '0', '0', '0');
INSERT INTO `tr_order_goodscar` VALUES ('157', '40', '虾虾虾', '8', '2017100956565110', '', '老杨', '13262750648', '9999', '1', '1', '1', '2017-10-09 17:32:08', '0', '0', '0');
INSERT INTO `tr_order_goodscar` VALUES ('158', '52', '1323', '8', '2017100955971019', '', '老杨', '13262750648', '0.01', '1', '1', '1', '2017-10-09 17:34:15', '0', '0', '0');
INSERT INTO `tr_order_goodscar` VALUES ('159', '55', '哈密瓜', '8', '2017100952101979', '', '老杨', '13262750648', '0.01', '5', '5', '5', '2017-10-09 18:16:21', '0', '0', '0');
INSERT INTO `tr_order_goodscar` VALUES ('160', '55', '哈密瓜', '41', '2017100910110097', '', '666', '15538191283', '0.01', '5', '5', '5', '2017-10-09 18:17:34', '0', '0', '0');
INSERT INTO `tr_order_goodscar` VALUES ('161', '55', '哈密瓜', '3', '2017100950101102', '2017101021001004610291816716', '235235', '13403991030', '0.01', '2', '2', '2', '2017-10-09 18:19:14', '0', '0', '0');
INSERT INTO `tr_order_goodscar` VALUES ('162', '34', '3333333', '41', '2017101010252100', '', '666', '15538191283', '3', '1', '1', '1', '2017-10-10 09:38:23', '0', '0', '0');
INSERT INTO `tr_order_goodscar` VALUES ('163', '41', '羊肉', '35', '2017101010256555', '', 'ALL', '13071021121', '0.01', '1', '1', '1', '2017-10-10 09:41:19', '0', '0', '0');
INSERT INTO `tr_order_goodscar` VALUES ('164', '26', '小仙女', '41', '2017101049535354', '', '666', '15538191283', '4', '1', '1', '1', '2017-10-10 10:26:09', '0', '0', '0');
INSERT INTO `tr_order_goodscar` VALUES ('165', '52', '1323', '29', '2017101055995055', '', '陆港易冷链', '15538191382', '0.01', '1', '1', '1', '2017-10-10 16:48:55', '0', '0', '0');
INSERT INTO `tr_order_goodscar` VALUES ('166', '43', '鲤鱼', '3', '2017101010148484', '', '235235', '13403991030', '0.01', '1', '1', '1', '2017-10-10 18:42:06', '0', '0', '0');
INSERT INTO `tr_order_goodscar` VALUES ('167', '57', '橘子', '41', '2017101010152975', '', '123', '15538191283', '0.01', '5', '5', '5', '2017-10-10 18:44:46', '0', '0', '0');
INSERT INTO `tr_order_goodscar` VALUES ('168', '57', '橘子', '3', '2017101049101975', '2017101021001004610293325929', '235235', '13403991030', '0.01', '4', '4', '4', '2017-10-10 18:44:49', '0', '0', '0');
INSERT INTO `tr_order_goodscar` VALUES ('169', '59', '馒头', '3', '2017101098102505', '', '235235', '13403991030', '0.01', '5', '5', '5', '2017-10-10 19:18:35', '0', '0', '0');
INSERT INTO `tr_order_goodscar` VALUES ('170', '61', '虾', '43', '2017101152521005', '2017101121001004810203904674', 'mac魅可', '13071021121', '0.01', '4', '4', '4', '2017-10-11 09:09:40', '0', '0', '0');
INSERT INTO `tr_order_goodscar` VALUES ('171', '61', '虾', '3', '2017101199505053', '', '235235', '13403991030', '0.01', '5', '5', '5', '2017-10-11 09:11:08', '0', '1', '0');
INSERT INTO `tr_order_goodscar` VALUES ('172', '63', 'YSL圣罗兰', '3', '2017101156495149', '', '235235', '13403991030', '0.01', '5', '5', '5', '2017-10-11 09:32:24', '0', '0', '0');
INSERT INTO `tr_order_goodscar` VALUES ('173', '63', 'YSL圣罗兰', '29', '2017101150485357', '', '陆港易冷链', '15538191382', '0.01', '1', '1', '1', '2017-10-11 14:06:26', '0', '0', '0');
INSERT INTO `tr_order_goodscar` VALUES ('174', '59', '馒头', '44', '2017101153484854', '', '测试1011', '18595920787', '0.01', '5', '5', '5', '2017-10-11 15:11:33', '0', '1', '0');
INSERT INTO `tr_order_goodscar` VALUES ('175', '95', '海带海带海带', '46', '2017101349995148', '2017101321001004810208610891', '陆港易冷链', '13027731857', '0.01', '4', '4', '4', '2017-10-13 14:26:41', '1', '0', '0');
INSERT INTO `tr_order_goodscar` VALUES ('176', '91', '眼镜', '45', '2017101310197534', '2017101321001004610298877964', '中浩科技', '13271505230', '0.01', '2', '2', '2', '2017-10-13 14:45:18', '0', '0', '0');
INSERT INTO `tr_order_goodscar` VALUES ('177', '59', '馒头', '3', '2017102597505051', '', '235235', '1340399103', '0.01', '1', '1', '1', '2017-10-25 09:56:58', '0', '0', '0');
INSERT INTO `tr_order_goodscar` VALUES ('178', '99', '花瓶', '3', '2017102556535756', '', '235235', '13403991030', '0.01', '5', '5', '5', '2017-10-25 14:49:28', '0', '0', '0');
INSERT INTO `tr_order_goodscar` VALUES ('179', '99', '花瓶', '3', '2017102699981001', '', '235235', '112212', '0.01', '1', '1', '1', '2017-10-26 09:50:20', '0', '0', '0');
INSERT INTO `tr_order_goodscar` VALUES ('180', '97', '124242', '3', '2017102655565699', '', '235235', '13403991030', '0.01', '1', '1', '1', '2017-10-26 15:57:43', '0', '0', '0');
INSERT INTO `tr_order_goodscar` VALUES ('181', '68', '柠檬', '3', '2017102655515750', '', '235235', '13403991039', '0.01', '1', '1', '1', '2017-10-26 16:11:03', '0', '0', '0');
INSERT INTO `tr_order_goodscar` VALUES ('182', '106', '德芙666', '29', '2017112451515154', '2017112421001004810590836407', '陆港易冷链', '15538191382', '0.01', '6', '5', '6', '2017-11-24 14:09:23', '0', '0', '0');
INSERT INTO `tr_order_goodscar` VALUES ('183', '107', '666666', '29', '2017112450495510', '2017112421001004810591814182', '陆港易冷链', '15538191382', '0.01', '6', '5', '6', '2017-11-24 15:34:10', '0', '0', '0');
INSERT INTO `tr_order_goodscar` VALUES ('184', '108', '啊啊啊', '29', '2017112453102505', '2017112421001004810591713427', '陆港易冷链', '15538191382', '0.01', '2', '2', '2', '2017-11-24 15:51:33', '0', '0', '0');
INSERT INTO `tr_order_goodscar` VALUES ('185', '109', '东方饭店', '29', '2017112449561011', '2017112421001004810590931969', '陆港易冷链', '15538191382', '0.01', '2', '2', '2', '2017-11-24 15:58:57', '0', '0', '0');
INSERT INTO `tr_order_goodscar` VALUES ('186', '67', '1233232323232', '3', '2017112948999954', '', '235235', '13403991030', '0.01', '1', '1', '1', '2017-11-29 08:24:00', '0', '0', '0');

-- -----------------------------
-- Table structure for `tr_order_goodsku`
-- -----------------------------
DROP TABLE IF EXISTS `tr_order_goodsku`;
CREATE TABLE `tr_order_goodsku` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '订单ID',
  `goods_id` int(11) NOT NULL COMMENT '货物ID',
  `goodsname` varchar(200) NOT NULL COMMENT '货物名称',
  `wh_id` int(11) NOT NULL COMMENT '仓库ID',
  `user_id` int(11) NOT NULL COMMENT '用户ID，库主ID',
  `order_number` varchar(200) NOT NULL COMMENT '订单编号',
  `pay_number` varchar(200) NOT NULL COMMENT '支付交易号',
  `order_contact` varchar(200) NOT NULL COMMENT '仓库联系人',
  `order_phone` varchar(200) NOT NULL COMMENT '仓库联系方式',
  `time` datetime NOT NULL COMMENT '下单时间',
  `order_money` double NOT NULL COMMENT '订单金额',
  `pay_state` int(11) NOT NULL DEFAULT '1' COMMENT '支付状态',
  `ku_state` int(11) NOT NULL DEFAULT '1' COMMENT '仓库状态',
  `order_state` int(11) NOT NULL DEFAULT '1' COMMENT '订单状态',
  `del_goods` int(11) NOT NULL DEFAULT '0' COMMENT '货主删除',
  `del_ku` int(11) NOT NULL DEFAULT '0' COMMENT '库主删除',
  `is_recycle` int(11) NOT NULL DEFAULT '0' COMMENT '是否删除',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=84 DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `tr_order_goodsku`
-- -----------------------------
INSERT INTO `tr_order_goodsku` VALUES ('20', '27', '', '19', '8', '2017083054485299', '2017083021001004810222612967', '123', '15538191382', '2017-08-30 00:00:00', '0.01', '3', '3', '2', '1', '1', '0');
INSERT INTO `tr_order_goodsku` VALUES ('35', '37', '榴莲', '19', '8', '2017090651565056', '2017090621001004810239162186', '123', '15538191382', '2017-09-06 00:00:00', '0.01', '2', '2', '2', '0', '0', '0');
INSERT INTO `tr_order_goodsku` VALUES ('36', '36', '热干面', '19', '8', '2017090657984999', '', '123', '15538191382', '2017-09-06 00:00:00', '22', '1', '1', '1', '0', '0', '0');
INSERT INTO `tr_order_goodsku` VALUES ('37', '32', '铅笔', '28', '3', '2017091497575354', '', '123', '13403991030', '2017-09-14 00:00:00', '4321', '1', '1', '1', '0', '0', '0');
INSERT INTO `tr_order_goodsku` VALUES ('38', '32', '铅笔', '28', '3', '2017091452574999', '', '123', '13403991030', '2017-09-14 00:00:00', '4321', '1', '1', '1', '0', '0', '0');
INSERT INTO `tr_order_goodsku` VALUES ('39', '27', '柚子', '22', '3', '2017091410049101', '', '杨先生', '13262750648', '2017-09-14 00:00:00', '213123', '1', '1', '1', '0', '0', '0');
INSERT INTO `tr_order_goodsku` VALUES ('40', '27', '柚子', '21', '3', '2017091410110251', '', '小可爱', '13071021121', '2017-09-14 00:00:00', '213123', '1', '1', '1', '0', '0', '0');
INSERT INTO `tr_order_goodsku` VALUES ('41', '27', '柚子', '19', '8', '2017091554481005', '', '123', '15538191382', '2017-09-15 00:00:00', '213123', '1', '1', '1', '0', '0', '0');
INSERT INTO `tr_order_goodsku` VALUES ('42', '27', '柚子', '19', '8', '2017091555981011', '', '123', '15538191382', '2017-09-15 00:00:00', '213123', '1', '1', '1', '0', '0', '0');
INSERT INTO `tr_order_goodsku` VALUES ('43', '33', '22222222', '19', '8', '2017091555524854', '', '123', '15538191382', '2017-09-15 00:00:00', '333', '1', '1', '1', '0', '0', '0');
INSERT INTO `tr_order_goodsku` VALUES ('44', '27', '柚子', '19', '8', '2017091510254499', '', '123', '15538191382', '2017-09-15 00:00:00', '213123', '1', '1', '1', '0', '0', '0');
INSERT INTO `tr_order_goodsku` VALUES ('45', '36', '热干面', '19', '8', '2017091598561025', '', '123', '15538191382', '2017-09-15 00:00:00', '22', '1', '1', '1', '0', '0', '0');
INSERT INTO `tr_order_goodsku` VALUES ('46', '33', '22222222', '19', '8', '2017091548991021', '', '123', '15538191382', '2017-09-15 00:00:00', '333', '1', '1', '1', '0', '0', '0');
INSERT INTO `tr_order_goodsku` VALUES ('47', '33', '22222222', '19', '8', '2017091510151579', '', '123', '15538191382', '2017-09-15 00:00:00', '333', '1', '1', '1', '0', '0', '0');
INSERT INTO `tr_order_goodsku` VALUES ('48', '27', '柚子', '19', '8', '2017091556535598', '', '123', '15538191382', '2017-09-15 00:00:00', '213123', '1', '1', '1', '0', '0', '0');
INSERT INTO `tr_order_goodsku` VALUES ('49', '35', '虾', '19', '8', '2017091555569857', '', '123', '15538191382', '2017-09-15 00:00:00', '999', '1', '1', '1', '0', '0', '0');
INSERT INTO `tr_order_goodsku` VALUES ('50', '0', '柚子', '19', '8', '2017091510154999', '', '123', '15538191382', '2017-09-15 00:00:00', '213123', '1', '1', '1', '0', '0', '0');
INSERT INTO `tr_order_goodsku` VALUES ('51', '0', '柚子', '19', '8', '2017091550525357', '', '123', '15538191382', '2017-09-15 00:00:00', '213123', '1', '1', '1', '0', '0', '0');
INSERT INTO `tr_order_goodsku` VALUES ('52', '36', '热干面', '19', '8', '2017091555100579', '', '123', '15538191382', '2017-09-15 00:00:00', '22', '1', '1', '1', '0', '0', '0');
INSERT INTO `tr_order_goodsku` VALUES ('53', '33', '22222222', '19', '8', '2017091598101549', '', '123', '15538191382', '2017-09-15 00:00:00', '333', '1', '1', '1', '0', '0', '0');
INSERT INTO `tr_order_goodsku` VALUES ('54', '42', '板栗', '31', '2', '2017092049494910', '2017092021001004610247077057', '王先生', '15538191283', '2017-09-20 00:00:00', '0.01', '3', '3', '3', '0', '0', '0');
INSERT INTO `tr_order_goodsku` VALUES ('55', '49', '开心果', '16', '3', '2017092110253515', '2017092121001004610248901354', '周雪迎', '15538191283', '2017-09-21 00:00:00', '0.01', '3', '3', '3', '0', '0', '0');
INSERT INTO `tr_order_goodsku` VALUES ('56', '49', '开心果', '21', '3', '2017092649100559', '', '小可爱', '13071021121', '2017-09-26 00:00:00', '0.01', '1', '1', '1', '0', '0', '0');
INSERT INTO `tr_order_goodsku` VALUES ('57', '49', '开心果', '21', '3', '2017092650555556', '', '小可爱', '13071021121', '2017-09-26 00:00:00', '0.01', '1', '1', '1', '0', '0', '0');
INSERT INTO `tr_order_goodsku` VALUES ('58', '45', '猕猴桃', '21', '3', '2017092699975653', '', '小可爱', '13071021121', '2017-09-26 00:00:00', '0.01', '1', '1', '1', '0', '0', '0');
INSERT INTO `tr_order_goodsku` VALUES ('59', '0', '柚子', '18', '3', '2017092610097575', '', '333', '15538191382', '2017-09-26 00:00:00', '213123', '4', '4', '4', '0', '1', '0');
INSERT INTO `tr_order_goodsku` VALUES ('60', '45', '猕猴桃', '21', '3', '2017092610248974', '', '小可爱', '13071021121', '2017-09-26 00:00:00', '0.01', '1', '1', '1', '0', '0', '0');
INSERT INTO `tr_order_goodsku` VALUES ('61', '0', '柚子', '21', '3', '2017092652979850', '', '小可爱', '13071021121', '2017-09-26 00:00:00', '213123', '4', '4', '4', '0', '1', '0');
INSERT INTO `tr_order_goodsku` VALUES ('62', '0', '柚子', '21', '3', '2017092649551015', '', '小可爱', '13071021121', '2017-09-26 00:00:00', '213123', '4', '4', '4', '0', '1', '0');
INSERT INTO `tr_order_goodsku` VALUES ('63', '49', '开心果', '18', '3', '2017092610150984', '', '333', '15538191382', '2017-09-26 00:00:00', '0.01', '1', '1', '1', '0', '0', '0');
INSERT INTO `tr_order_goodsku` VALUES ('64', '49', '开心果', '18', '3', '2017092655100100', '', '333', '15538191382', '2017-09-26 00:00:00', '0.01', '1', '1', '1', '0', '0', '0');
INSERT INTO `tr_order_goodsku` VALUES ('65', '45', '猕猴桃', '21', '3', '2017092657101971', '', '小可爱', '13071021121', '2017-09-26 00:00:00', '0.01', '1', '1', '1', '0', '0', '0');
INSERT INTO `tr_order_goodsku` VALUES ('66', '45', '猕猴桃', '18', '3', '2017092710249569', '', '333', '15538191382', '2017-09-27 00:00:00', '0.01', '1', '1', '1', '0', '0', '0');
INSERT INTO `tr_order_goodsku` VALUES ('67', '56', '我的一个道姑朋友', '38', '41', '2017101010054519', '', '12', '15538191283', '2017-10-10 08:58:37', '0.01', '4', '4', '4', '0', '0', '0');
INSERT INTO `tr_order_goodsku` VALUES ('68', '56', '我的一个道姑朋友', '18', '3', '2017101048481025', '', '333', '15538191382', '2017-10-10 08:58:40', '0.01', '4', '4', '4', '0', '0', '0');
INSERT INTO `tr_order_goodsku` VALUES ('69', '56', '我的一个道姑朋友', '37', '8', '2017101099481029', '2017101021001004610291795117', '213', '13262750648', '2017-10-10 08:58:52', '0.01', '2', '2', '2', '0', '0', '0');
INSERT INTO `tr_order_goodsku` VALUES ('70', '49', '开心果', '38', '41', '2017101055101984', '', '12', '15538191283', '2017-10-10 09:38:47', '0.01', '1', '1', '1', '0', '0', '0');
INSERT INTO `tr_order_goodsku` VALUES ('71', '36', '热干面', '38', '41', '2017101097575197', '', '12', '15538191283', '2017-10-10 09:39:54', '22', '1', '1', '1', '0', '0', '0');
INSERT INTO `tr_order_goodsku` VALUES ('72', '45', '猕猴桃', '36', '29', '2017101055534950', '', '易冷链', '15538191382', '2017-10-10 18:52:07', '0.01', '1', '1', '1', '0', '0', '0');
INSERT INTO `tr_order_goodsku` VALUES ('73', '58', '22222222222222', '42', '3', '2017101097101569', '2017101021001004610293338826', '周雪迎', '15538191283', '2017-10-10 18:58:50', '0.01', '3', '3', '3', '1', '1', '1');
INSERT INTO `tr_order_goodsku` VALUES ('74', '60', '11111222222222', '43', '3', '2017101099565456', '', '周雪迎', '15538191283', '2017-10-10 19:21:32', '0.01', '4', '4', '4', '0', '0', '0');
INSERT INTO `tr_order_goodsku` VALUES ('75', '62', 'mac-CB96', '46', '3', '2017101152995150', '2017101121001004810203996992', '魅可', '13403991030', '2017-10-11 09:42:44', '0.01', '3', '3', '3', '0', '0', '0');
INSERT INTO `tr_order_goodsku` VALUES ('76', '62', 'mac-CB96', '45', '43', '2017101110252571', '', 'ysl', '13071021121', '2017-10-11 09:42:55', '0.01', '4', '4', '4', '0', '0', '0');
INSERT INTO `tr_order_goodsku` VALUES ('77', '66', '魅可人鱼姬色', '36', '29', '2017101150555410', '', '易冷链', '15538191382', '2017-10-11 13:59:30', '0.01', '1', '1', '1', '0', '0', '0');
INSERT INTO `tr_order_goodsku` VALUES ('78', '93', '鱼丸鱼丸', '50', '46', '2017101354524857', '2017101321001004810208516476', '桌子女士', '13027731857', '2017-10-13 14:29:26', '0.01', '3', '3', '3', '0', '0', '0');
INSERT INTO `tr_order_goodsku` VALUES ('79', '100', '铅笔', '54', '45', '2017101355555151', '', '12312', '13271505230', '2017-10-13 16:17:59', '0.01', '1', '1', '1', '0', '0', '0');
INSERT INTO `tr_order_goodsku` VALUES ('80', '101', '喜虾客', '54', '45', '2017101351100995', '', '12312', '13271505230', '2017-10-13 16:26:43', '0.01', '4', '4', '4', '1', '0', '0');
INSERT INTO `tr_order_goodsku` VALUES ('81', '101', '喜虾客', '54', '45', '2017101397521004', '2017112921001004810598071568', '12312', '13271505230', '2017-10-13 17:36:58', '0.01', '2', '2', '2', '0', '0', '0');
INSERT INTO `tr_order_goodsku` VALUES ('82', '60', '11111222222222', '45', '43', '2017102456995053', '', 'ysl', '13071021121', '2017-10-24 15:09:28', '0.01', '1', '1', '1', '0', '0', '0');
INSERT INTO `tr_order_goodsku` VALUES ('83', '103', '冰淇淋', '35', '29', '2017112498541011', '2017112421001004810591713605', '123', '15538191382', '2017-11-24 16:02:35', '0.01', '2', '2', '2', '0', '0', '0');

-- -----------------------------
-- Table structure for `tr_order_path`
-- -----------------------------
DROP TABLE IF EXISTS `tr_order_path`;
CREATE TABLE `tr_order_path` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '订单id',
  `path_id` int(11) NOT NULL COMMENT '路线id',
  `goods_id` int(11) NOT NULL COMMENT '货源id',
  `goodsname` varchar(200) NOT NULL COMMENT '货物名称',
  `user_id` int(11) NOT NULL COMMENT '用户id',
  `order_number` varchar(200) NOT NULL COMMENT '订单编号',
  `pay_number` varchar(200) NOT NULL COMMENT '支付交易号',
  `time` datetime NOT NULL COMMENT '下单时间',
  `order_money` double NOT NULL COMMENT '支付金额',
  `pay_state` int(11) NOT NULL DEFAULT '1' COMMENT '支付状态',
  `car_state` int(11) NOT NULL DEFAULT '1' COMMENT '车状态',
  `order_state` int(11) NOT NULL DEFAULT '1' COMMENT '订单状态',
  `del_goods` int(11) NOT NULL DEFAULT '0' COMMENT '货主删除',
  `del_car` int(11) NOT NULL DEFAULT '0' COMMENT '车主删除',
  `is_recycle` int(11) NOT NULL DEFAULT '0' COMMENT '是否删除',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=64 DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `tr_order_path`
-- -----------------------------
INSERT INTO `tr_order_path` VALUES ('8', '4', '28', '', '8', '2017090498100101', '2017090421001004810233876737', '2017-09-04 00:00:00', '0.01', '5', '5', '5', '0', '0', '0');
INSERT INTO `tr_order_path` VALUES ('7', '5', '26', '', '8', '2017090148505210', '2017090121001004810227573317', '2017-09-01 00:00:00', '0.01', '5', '5', '4', '0', '0', '0');
INSERT INTO `tr_order_path` VALUES ('12', '4', '28', '', '8', '2017090452545357', '', '2017-09-04 00:00:00', '111', '1', '1', '1', '0', '0', '0');
INSERT INTO `tr_order_path` VALUES ('15', '18', '34', '', '3', '2017091452991029', '', '2017-09-14 00:00:00', '3', '1', '1', '1', '0', '0', '0');
INSERT INTO `tr_order_path` VALUES ('16', '18', '30', '', '3', '2017091457554899', '', '2017-09-14 00:00:00', '666', '1', '1', '1', '0', '0', '0');
INSERT INTO `tr_order_path` VALUES ('17', '17', '34', '', '3', '2017091454101102', '', '2017-09-14 00:00:00', '3', '1', '1', '1', '0', '0', '0');
INSERT INTO `tr_order_path` VALUES ('18', '17', '34', '', '3', '2017091497511029', '', '2017-09-14 00:00:00', '3', '1', '1', '1', '0', '0', '0');
INSERT INTO `tr_order_path` VALUES ('19', '17', '24', '', '3', '2017091452525153', '', '2017-09-14 00:00:00', '123', '1', '1', '1', '0', '0', '0');
INSERT INTO `tr_order_path` VALUES ('20', '18', '30', '', '3', '2017091452501015', '', '2017-09-14 00:00:00', '666', '1', '1', '1', '0', '0', '0');
INSERT INTO `tr_order_path` VALUES ('21', '18', '26', '', '8', '2017091510049984', '', '2017-09-15 00:00:00', '4', '1', '1', '1', '0', '0', '0');
INSERT INTO `tr_order_path` VALUES ('22', '0', '26', '', '8', '2017091598561025', '', '2017-09-15 00:00:00', '4', '1', '1', '1', '0', '0', '0');
INSERT INTO `tr_order_path` VALUES ('23', '17', '28', '', '8', '2017091599514948', '', '2017-09-15 00:00:00', '111', '1', '1', '1', '0', '0', '0');
INSERT INTO `tr_order_path` VALUES ('24', '13', '26', '', '8', '2017091548975554', '', '2017-09-15 00:00:00', '4', '1', '1', '1', '0', '0', '0');
INSERT INTO `tr_order_path` VALUES ('25', '6', '28', '', '8', '2017091599519898', '', '2017-09-15 00:00:00', '111', '1', '1', '1', '0', '0', '0');
INSERT INTO `tr_order_path` VALUES ('26', '17', '26', '', '8', '2017091510155574', '', '2017-09-15 00:00:00', '4', '1', '1', '1', '0', '0', '0');
INSERT INTO `tr_order_path` VALUES ('27', '15', '28', '', '8', '2017091552555710', '', '2017-09-15 00:00:00', '111', '1', '1', '1', '0', '0', '0');
INSERT INTO `tr_order_path` VALUES ('28', '14', '28', '', '8', '2017091910057101', '', '2017-09-19 00:00:00', '111', '2', '2', '2', '0', '0', '0');
INSERT INTO `tr_order_path` VALUES ('29', '19', '44', '橙子', '2', '2017092010251501', '2017092021001004810505708433', '2017-09-20 00:00:00', '0.01', '5', '5', '5', '0', '0', '0');
INSERT INTO `tr_order_path` VALUES ('30', '21', '50', '山楂', '3', '2017092148100555', '2017092121001004810507509467', '2017-09-21 00:00:00', '0.01', '5', '5', '5', '0', '0', '0');
INSERT INTO `tr_order_path` VALUES ('31', '17', '34', '3333333', '3', '2017092197991015', '', '2017-09-21 00:00:00', '3', '1', '1', '1', '0', '0', '0');
INSERT INTO `tr_order_path` VALUES ('32', '13', '41', '羊肉', '29', '2017092697995250', '', '2017-09-26 00:00:00', '0.01', '1', '1', '1', '0', '0', '0');
INSERT INTO `tr_order_path` VALUES ('33', '19', '34', '3333333', '3', '2017092650995749', '', '2017-09-26 00:00:00', '3', '1', '1', '1', '0', '0', '0');
INSERT INTO `tr_order_path` VALUES ('34', '17', '34', '3333333', '3', '2017092651541005', '', '2017-09-26 00:00:00', '3', '1', '1', '1', '0', '0', '0');
INSERT INTO `tr_order_path` VALUES ('35', '19', '34', '3333333', '3', '2017092657559998', '', '2017-09-26 00:00:00', '3', '1', '1', '1', '0', '0', '0');
INSERT INTO `tr_order_path` VALUES ('36', '18', '34', '3333333', '3', '2017092610255100', '', '2017-09-26 00:00:00', '3', '1', '1', '1', '0', '0', '0');
INSERT INTO `tr_order_path` VALUES ('37', '18', '34', '3333333', '3', '2017092649555351', '', '2017-09-26 00:00:00', '3', '1', '1', '1', '0', '0', '0');
INSERT INTO `tr_order_path` VALUES ('38', '15', '34', '3333333', '3', '2017092754545055', '', '2017-09-27 00:00:00', '3', '1', '1', '1', '0', '0', '0');
INSERT INTO `tr_order_path` VALUES ('39', '19', '52', '1323', '3', '2017093057505453', '', '2017-09-30 00:00:00', '0.01', '6', '6', '6', '0', '1', '0');
INSERT INTO `tr_order_path` VALUES ('40', '23', '34', '3333333', '3', '2017093056505450', '', '2017-09-30 00:00:00', '3', '2', '2', '2', '0', '0', '0');
INSERT INTO `tr_order_path` VALUES ('41', '24', '54', '杏脯', '39', '2017093052545510', '2017093021001004810279644685', '2017-09-30 00:00:00', '0.01', '5', '5', '5', '1', '0', '0');
INSERT INTO `tr_order_path` VALUES ('42', '25', '48', '牛肉', '29', '2017093050505410', '', '2017-09-30 00:00:00', '0.01', '6', '6', '6', '0', '1', '0');
INSERT INTO `tr_order_path` VALUES ('43', '24', '52', '1323', '3', '2017101099575452', '2017101021001004610293320447', '2017-10-10 18:48:44', '0.01', '6', '6', '6', '0', '1', '0');
INSERT INTO `tr_order_path` VALUES ('44', '24', '43', '鲤鱼', '41', '2017101051571015', '', '2017-10-10 18:48:51', '0.01', '2', '2', '2', '0', '0', '0');
INSERT INTO `tr_order_path` VALUES ('45', '27', '65', '煎蛋', '3', '2017101157551004', '2017101121001004810203942323', '2017-10-11 09:22:33', '0.01', '5', '5', '5', '1', '0', '0');
INSERT INTO `tr_order_path` VALUES ('46', '27', '63', 'YSL圣罗兰', '43', '2017101198101511', '2017101121001004810203928582', '2017-10-11 09:23:07', '0.01', '6', '6', '6', '0', '0', '0');
INSERT INTO `tr_order_path` VALUES ('47', '27', '63', 'YSL圣罗兰', '43', '2017101197555151', '', '2017-10-11 09:23:22', '0.01', '6', '6', '6', '0', '0', '0');
INSERT INTO `tr_order_path` VALUES ('48', '13', '59', '馒头', '29', '2017101198101575', '', '2017-10-11 14:07:23', '0.01', '6', '6', '6', '0', '0', '0');
INSERT INTO `tr_order_path` VALUES ('49', '13', '40', '虾虾虾', '29', '2017101151995110', '', '2017-10-11 14:18:11', '9999', '6', '6', '6', '0', '0', '0');
INSERT INTO `tr_order_path` VALUES ('50', '13', '59', '馒头', '29', '2017101110051491', '', '2017-10-11 14:31:09', '0.01', '6', '6', '6', '0', '0', '0');
INSERT INTO `tr_order_path` VALUES ('51', '15', '67', '1233232323232', '44', '2017101110110199', '', '2017-10-11 15:03:26', '0.01', '6', '6', '6', '1', '0', '0');
INSERT INTO `tr_order_path` VALUES ('52', '26', '68', '柠檬', '44', '2017101251571014', '', '2017-10-12 10:07:47', '0.01', '6', '6', '6', '1', '0', '0');
INSERT INTO `tr_order_path` VALUES ('53', '27', '76', '书', '44', '2017101210153509', '', '2017-10-12 14:15:26', '0.01', '6', '6', '6', '0', '1', '0');
INSERT INTO `tr_order_path` VALUES ('54', '27', '77', '蔓越莓', '44', '2017101248521021', '2017101221001004810207100114', '2017-10-12 14:18:08', '0.01', '5', '5', '5', '1', '0', '0');
INSERT INTO `tr_order_path` VALUES ('55', '27', '84', '鼠标', '3', '2017101256525598', '', '2017-10-12 17:36:40', '0.01', '1', '1', '1', '0', '0', '0');
INSERT INTO `tr_order_path` VALUES ('56', '23', '87', '虾火锅', '3', '2017101349535055', '', '2017-10-13 08:26:25', '0.01', '1', '1', '1', '0', '0', '0');
INSERT INTO `tr_order_path` VALUES ('57', '27', '88', '青岛大虾', '3', '2017101357515353', '', '2017-10-13 09:16:41', '10', '6', '6', '6', '0', '1', '0');
INSERT INTO `tr_order_path` VALUES ('58', '27', '90', '档案', '44', '2017101310250531', '', '2017-10-13 09:41:19', '0.01', '6', '6', '6', '1', '0', '0');
INSERT INTO `tr_order_path` VALUES ('59', '30', '96', '鱼豆腐', '45', '2017101310053100', '2017101321001004810208532806', '2017-10-13 14:29:49', '0.01', '5', '5', '5', '0', '0', '0');
INSERT INTO `tr_order_path` VALUES ('60', '27', '105', '美甲', '3', '2017102550511021', '2017102521001004810215331955', '2017-10-25 14:17:22', '0.01', '3', '3', '3', '0', '0', '0');
INSERT INTO `tr_order_path` VALUES ('61', '19', '106', '德芙', '3', '2017112099999710', '', '2017-11-20 08:58:04', '0.01', '6', '6', '6', '0', '0', '0');
INSERT INTO `tr_order_path` VALUES ('62', '19', '106', '德芙', '3', '2017112054100979', '', '2017-11-20 08:59:02', '0.01', '6', '6', '6', '0', '0', '0');
INSERT INTO `tr_order_path` VALUES ('63', '19', '106', '德芙', '3', '2017112051485354', '', '2017-11-20 09:03:47', '0.01', '1', '1', '1', '0', '0', '0');

-- -----------------------------
-- Table structure for `tr_path`
-- -----------------------------
DROP TABLE IF EXISTS `tr_path`;
CREATE TABLE `tr_path` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` varchar(100) NOT NULL COMMENT '用户id',
  `startsite` varchar(255) NOT NULL COMMENT '始发地',
  `endsite` varchar(255) NOT NULL COMMENT '目的地',
  `vehicle_type` varchar(255) NOT NULL COMMENT '常用车型',
  `vehicle_length` varchar(255) NOT NULL COMMENT '常用车长',
  `time` date NOT NULL COMMENT '发布时间',
  `money` double NOT NULL COMMENT '金额',
  `linkman` varchar(255) NOT NULL COMMENT '联系人',
  `linkphone` varchar(255) NOT NULL COMMENT '联系电话',
  `is_company` int(11) NOT NULL DEFAULT '0' COMMENT '是否自营',
  `order_state` int(11) NOT NULL DEFAULT '1' COMMENT '是否下单',
  `check_state` int(11) NOT NULL DEFAULT '1' COMMENT '信息认证',
  `is_recycle` int(11) NOT NULL DEFAULT '0' COMMENT '是否删除',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=gbk;

-- -----------------------------
-- Records of `tr_path`
-- -----------------------------
INSERT INTO `tr_path` VALUES ('6', '13403991030', '河南省郑州市金水区', '吉林省白城市洮北区', '普通货车,冷藏车,平板,常温箱式,集装箱,高栏', '7.2米-9.6米,9.6米以上', '2017-09-30', '0', '周雪迎', '13262750648', '0', '1', '1', '0');
INSERT INTO `tr_path` VALUES ('5', '13403991030', '上海市上海市松江区', '河南省郑州市管城回族区', '常温箱式,集装箱', '4.2米以下,4.2米-7.2米', '2017-09-12', '0', '杨先生', '13403991030', '0', '1', '2', '0');
INSERT INTO `tr_path` VALUES ('4', '13403991030', '天津市', '河北省', '冷藏车,平板', '4.2米-7.2米,7.2米-9.6米', '2017-08-08', '0', '阿', '13262750648', '0', '1', '2', '0');
INSERT INTO `tr_path` VALUES ('9', '13262750648', '四川省成都市锦江区', '内蒙古呼和浩特市玉泉区', '普通货车,冷藏车', '4.2米-7.2米', '2017-08-09', '0', '123', '13262750648', '0', '1', '2', '0');
INSERT INTO `tr_path` VALUES ('14', '13403991030', '122122222', '222222222', '冷藏车', '4.2米-7.2米', '2017-09-12', '0', '123', '13403991030', '0', '1', '2', '0');
INSERT INTO `tr_path` VALUES ('13', '13403991039', '吉林省白城市洮北区', '河南省焦作市武陟县', '常温箱式', '4.2米以下', '2017-09-11', '0', '毛利兰', '15538191283', '1', '1', '2', '0');
INSERT INTO `tr_path` VALUES ('15', '15538191382', '河南省郑州市', '北京市北京市昌平区', '冷藏车', '4.2米-7.2米', '2017-09-13', '0', '张三', '15538191333', '1', '1', '2', '0');
INSERT INTO `tr_path` VALUES ('16', '15538191382', '河南省郑州市', '上海市上海市松江区', '冷藏车,常温箱式', '7.2米-9.6米', '2017-09-13', '0', '李四', '13782788888', '1', '1', '2', '0');
INSERT INTO `tr_path` VALUES ('17', '15538191382', '河南省郑州市', '河南省焦作市武陟县', '平板', '4.2米-7.2米', '2017-09-13', '0', '张一', '13728564495', '1', '1', '2', '0');
INSERT INTO `tr_path` VALUES ('18', '15538191382', '陕西省西安市', '河南省郑州市', '常温箱式', '4.2米-7.2米', '2017-09-13', '0', '张二', '165658451223', '1', '1', '2', '0');
INSERT INTO `tr_path` VALUES ('19', '15538191382', '北京市北京市宣武区', '天津市天津市南开区', '普通货车,冷藏车', '4.2米以下,4.2米-7.2米', '2017-09-20', '0', '王女士', '13071021121', '1', '1', '2', '0');
INSERT INTO `tr_path` VALUES ('20', '15538191283', '河南省郑州市金水区', '河南省郑州市二七区', '冷藏车,常温箱式', '4.2米-7.2米', '2017-09-20', '0', '王先生', '15538191283', '0', '1', '2', '0');
INSERT INTO `tr_path` VALUES ('21', '15538191382', '天津市天津市南开区', '天津市天津市塘沽区', '普通货车', '4.2米以下,4.2米-7.2米', '2017-09-21', '0', '周颖', '13071021121', '1', '1', '2', '0');
INSERT INTO `tr_path` VALUES ('22', '13403991030', '内蒙古包头市', '安徽省宿州市', '冷藏车,平板', '4.2米-7.2米', '2017-09-21', '0', '小王', '13403991030', '0', '1', '1', '0');
INSERT INTO `tr_path` VALUES ('23', '15538191382', '上海市上海市卢湾区', '重庆市重庆市九龙坡区', '普通货车,冷藏车,常温箱式,集装箱,高栏', '4.2米以下,4.2米-7.2米,7.2米-9.6米,9.6米以上', '2017-09-30', '0', '王医生', '15538191825', '1', '1', '2', '0');
INSERT INTO `tr_path` VALUES ('24', '15538191382', '山东省淄博市淄川区', '湖北省孝感市花园镇', '普通货车,冷藏车,平板,常温箱式,集装箱,高栏', '4.2米-7.2米,7.2米-9.6米', '2017-09-30', '0', '以冬', '15538191111', '1', '2', '2', '0');
INSERT INTO `tr_path` VALUES ('25', '18595920787', '安徽省蚌埠市怀远县', '辽宁省沈阳市苏家屯区', '普通货车,冷藏车,平板,常温箱式,集装箱,高栏', '4.2米以下,4.2米-7.2米,7.2米-9.6米,9.6米以上', '2017-09-30', '0', '李先生', '18595920787', '0', '1', '2', '0');
INSERT INTO `tr_path` VALUES ('26', '15538191382', '天津市', '辽宁省', '冷藏车,平板', '4.2米-7.2米,7.2米-9.6米', '2017-10-09', '0', '易冷链', '15538191382', '1', '1', '2', '0');
INSERT INTO `tr_path` VALUES ('27', '15538191382', '香港香港特别行政区深水埗区', '澳门', '平板,常温箱式', '7.2米-9.6米', '2017-10-11', '0', 'ASD', '15538191382', '1', '1', '2', '0');
INSERT INTO `tr_path` VALUES ('28', '13071021121', '香港香港特别行政区西贡区', '澳门澳门特别行政区澳门特别行政区', '平板,常温箱式', '4.2米-7.2米,7.2米-9.6米', '2017-10-11', '0', 'zxy', '13071021121', '0', '1', '2', '0');
INSERT INTO `tr_path` VALUES ('29', '13271505230', '天津市天津市河东区', '浙江省杭州市上城区', '普通货车,冷藏车,平板,常温箱式,集装箱,高栏', '4.2米以下,9.6米以上', '2017-10-13', '0', '22', '13271505230', '0', '1', '2', '0');
INSERT INTO `tr_path` VALUES ('30', '13027731857', '山西省朔州市山阴县', '湖北省武汉市硚口区', '普通货车,平板,常温箱式', '4.2米以下,4.2米-7.2米', '2017-10-13', '0', '门女士', '13027731857', '0', '1', '2', '0');
INSERT INTO `tr_path` VALUES ('31', '15538191382', '111111111111111', '22222222222222', '普通货车,冷藏车,平板', '4.2米以下,4.2米-7.2米', '2017-10-23', '0', '123', '15538191283', '1', '1', '2', '0');
INSERT INTO `tr_path` VALUES ('32', '13403991030', '33333333', '44444', '普通货车,冷藏车,平板,常温箱式,集装箱,高栏', '4.2米以下,4.2米-7.2米,7.2米-9.6米,9.6米以上', '2017-11-20', '0', '1221312', '13403991030', '0', '1', '1', '0');
INSERT INTO `tr_path` VALUES ('33', '13403991030', '123', '123', '普通货车,冷藏车,平板,常温箱式,高栏', '4.2米以下,4.2米-7.2米,9.6米以上', '2017-11-20', '0', '123', '13403991030', '0', '1', '1', '0');

-- -----------------------------
-- Table structure for `tr_privilege`
-- -----------------------------
DROP TABLE IF EXISTS `tr_privilege`;
CREATE TABLE `tr_privilege` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '权限ID',
  `pri_name` varchar(30) NOT NULL COMMENT '权限名',
  `module_name` varchar(30) DEFAULT NULL COMMENT '模块名',
  `controller_name` varchar(30) DEFAULT NULL COMMENT '控制器名',
  `action_name` varchar(30) DEFAULT NULL COMMENT '方法名',
  `parent_id` int(11) DEFAULT NULL COMMENT '父级ID',
  `pri_level` int(11) DEFAULT NULL COMMENT '排序',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=197 DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `tr_privilege`
-- -----------------------------
INSERT INTO `tr_privilege` VALUES ('38', '管理员管理', '', '', '', '0', '');
INSERT INTO `tr_privilege` VALUES ('39', '添加管理员', 'admin', 'Admin', 'add', '38', '');
INSERT INTO `tr_privilege` VALUES ('49', '删除', 'admin', 'Role', 'del', '46', '');
INSERT INTO `tr_privilege` VALUES ('48', '修改', 'admin', 'Role', 'edit', '46', '');
INSERT INTO `tr_privilege` VALUES ('47', '查看', 'admin', 'Role', 'lst', '46', '');
INSERT INTO `tr_privilege` VALUES ('46', '角色列表', 'admin', 'Role', 'lst', '38', '');
INSERT INTO `tr_privilege` VALUES ('45', '添加角色', 'admin', 'Role', 'add', '38', '');
INSERT INTO `tr_privilege` VALUES ('44', '批量删除', 'admin', 'Admin', 'p_del', '40', '');
INSERT INTO `tr_privilege` VALUES ('40', '管理员列表', 'admin', 'Admin', 'lst', '38', '');
INSERT INTO `tr_privilege` VALUES ('41', '查看', 'admin', 'Admin', 'lst', '40', '');
INSERT INTO `tr_privilege` VALUES ('42', '修改', 'admin', 'Admin', 'edit', '40', '');
INSERT INTO `tr_privilege` VALUES ('43', '删除', 'admin', 'Admin', 'del', '40', '');
INSERT INTO `tr_privilege` VALUES ('121', '车源审核', 'admin', 'Path', 'checklst', '100', '');
INSERT INTO `tr_privilege` VALUES ('120', '货源审核', 'admin', 'Goods', 'checkcarlst', '88', '');
INSERT INTO `tr_privilege` VALUES ('123', '审核', 'admin', 'Goods', 'checkcar', '120', '');
INSERT INTO `tr_privilege` VALUES ('122', '库源审核', 'admin', 'Warehouse', 'checklst', '107', '');
INSERT INTO `tr_privilege` VALUES ('56', '资讯管理', '', '', '', '0', '');
INSERT INTO `tr_privilege` VALUES ('57', '添加资讯', 'admin', 'Article', 'add', '56', '');
INSERT INTO `tr_privilege` VALUES ('58', '资讯列表', 'admin', 'Article', 'lst', '56', '');
INSERT INTO `tr_privilege` VALUES ('59', '查看', 'admin', 'Article', 'lst', '58', '');
INSERT INTO `tr_privilege` VALUES ('60', '修改', 'admin', 'Article', 'edit', '58', '');
INSERT INTO `tr_privilege` VALUES ('61', '删除', 'admin', 'Article', 'del', '58', '');
INSERT INTO `tr_privilege` VALUES ('62', '批量删除', 'admin', 'Article', 'p_del', '58', '');
INSERT INTO `tr_privilege` VALUES ('63', '添加类别', 'admin', 'Articletype', 'add', '56', '');
INSERT INTO `tr_privilege` VALUES ('64', '类别列表', 'admin', 'Articletype', 'lst', '56', '');
INSERT INTO `tr_privilege` VALUES ('65', '查看', 'admin', 'Articletype', 'lst', '64', '');
INSERT INTO `tr_privilege` VALUES ('66', '修改', 'admin', 'Articletype', 'edit', '64', '');
INSERT INTO `tr_privilege` VALUES ('67', '删除', 'admin', 'Articletype', 'del', '64', '');
INSERT INTO `tr_privilege` VALUES ('68', '批量删除', 'admin', 'Articletype', 'p_del', '64', '');
INSERT INTO `tr_privilege` VALUES ('69', '用户管理', '', '', '', '0', '');
INSERT INTO `tr_privilege` VALUES ('70', '用户审核', 'admin', 'User', 'checklst', '69', '');
INSERT INTO `tr_privilege` VALUES ('71', '审核', 'admin', 'User', 'check', '70', '');
INSERT INTO `tr_privilege` VALUES ('72', '添加用户', 'admin', 'User', 'add', '69', '');
INSERT INTO `tr_privilege` VALUES ('73', '用户列表', 'admin', 'User', 'lst', '69', '');
INSERT INTO `tr_privilege` VALUES ('74', '查看', 'admin', 'User', 'detail', '73', '');
INSERT INTO `tr_privilege` VALUES ('75', '修改', 'admin', 'User', 'edit', '73', '');
INSERT INTO `tr_privilege` VALUES ('76', '删除', 'admin', 'User', 'del', '73', '');
INSERT INTO `tr_privilege` VALUES ('77', '批量删除', 'admin', 'User', 'p_del', '73', '');
INSERT INTO `tr_privilege` VALUES ('78', '添加类别', 'admin', 'Usertype', 'add', '69', '');
INSERT INTO `tr_privilege` VALUES ('79', '类别列表', 'admin', 'Usertype', 'lst', '69', '');
INSERT INTO `tr_privilege` VALUES ('80', '查看', 'admin', 'Usertype', 'lst', '79', '');
INSERT INTO `tr_privilege` VALUES ('81', '修改', 'admin', 'Usertype', 'edit', '79', '');
INSERT INTO `tr_privilege` VALUES ('82', '删除', 'admin', 'Usertype', 'del', '79', '');
INSERT INTO `tr_privilege` VALUES ('83', '批量删除', 'admin', 'Usertype', 'p_del', '79', '');
INSERT INTO `tr_privilege` VALUES ('84', '用户回收站', 'admin', 'User', 'recyclelst', '69', '');
INSERT INTO `tr_privilege` VALUES ('85', '查看', 'admin', 'User', 'recyclelst', '84', '');
INSERT INTO `tr_privilege` VALUES ('86', '还原', 'admin', 'User', 'recycle_back', '84', '');
INSERT INTO `tr_privilege` VALUES ('168', '荣誉资质图片', 'admin', 'Web', 'honorimglst', '161', '');
INSERT INTO `tr_privilege` VALUES ('88', '货源管理', '', '', '', '0', '');
INSERT INTO `tr_privilege` VALUES ('170', '托运订单管理', 'admin', 'Entrustcarorder', 'lst', '169', '');
INSERT INTO `tr_privilege` VALUES ('90', '货源列表', 'admin', 'Goods', 'lst', '88', '');
INSERT INTO `tr_privilege` VALUES ('91', '查看', 'admin', 'Goods', 'detail', '90', '');
INSERT INTO `tr_privilege` VALUES ('93', '删除', 'admin', 'Goods', 'del', '90', '');
INSERT INTO `tr_privilege` VALUES ('94', '批量删除', 'admin', 'Goods', 'p_del', '90', '');
INSERT INTO `tr_privilege` VALUES ('95', '添加类别', 'admin', 'Goodsconfig', 'add', '88', '');
INSERT INTO `tr_privilege` VALUES ('96', '类别列表', 'admin', 'Goodsconfig', 'lst', '88', '');
INSERT INTO `tr_privilege` VALUES ('97', '查看', 'admin', 'Goodsconfig', 'lst', '96', '');
INSERT INTO `tr_privilege` VALUES ('116', '我的资讯', 'admin', 'Article', 'mylst', '56', '');
INSERT INTO `tr_privilege` VALUES ('99', '删除', 'admin', 'Goodsconfig', 'del', '96', '');
INSERT INTO `tr_privilege` VALUES ('100', '车源管理', '', '', '', '0', '');
INSERT INTO `tr_privilege` VALUES ('169', '网上托运', '', '', '', '0', '');
INSERT INTO `tr_privilege` VALUES ('103', '车源列表', 'admin', 'Path', 'lst', '100', '');
INSERT INTO `tr_privilege` VALUES ('104', '查看', 'admin', 'Path', 'detail', '103', '');
INSERT INTO `tr_privilege` VALUES ('105', '删除', 'admin', 'Path', 'del', '103', '');
INSERT INTO `tr_privilege` VALUES ('106', '批量删除', 'admin', 'Path', 'p_del', '103', '');
INSERT INTO `tr_privilege` VALUES ('107', '库源管理', '', '', '', '0', '');
INSERT INTO `tr_privilege` VALUES ('161', '网站设置', '', '', '', '0', '');
INSERT INTO `tr_privilege` VALUES ('167', '首页图片', 'admin', 'Web', 'indeximgadd', '161', '');
INSERT INTO `tr_privilege` VALUES ('110', '库源列表', 'admin', 'Warehouse', 'lst', '107', '');
INSERT INTO `tr_privilege` VALUES ('111', '查看', 'admin', 'Warehouse', 'detail', '110', '');
INSERT INTO `tr_privilege` VALUES ('112', '删除', 'admin', 'Warehouse', 'del', '110', '');
INSERT INTO `tr_privilege` VALUES ('113', '批量删除', 'admin', 'Warehouse', 'p_del', '110', '');
INSERT INTO `tr_privilege` VALUES ('162', '轮播图管理', 'admin', 'Web', 'imglst', '161', '');
INSERT INTO `tr_privilege` VALUES ('115', '删除', 'admin', 'User', 'recycle_del', '84', '');
INSERT INTO `tr_privilege` VALUES ('126', '订单管理', '', '', '', '0', '');
INSERT INTO `tr_privilege` VALUES ('127', '找车货源订单', 'admin', 'Ordergoodscar', 'lst', '126', '');
INSERT INTO `tr_privilege` VALUES ('124', '审核', 'admin', 'Path', 'check', '121', '');
INSERT INTO `tr_privilege` VALUES ('125', '审核', 'admin', 'Warehouse', 'check', '122', '');
INSERT INTO `tr_privilege` VALUES ('128', '查看', 'admin', 'Ordergoodscar', 'detail', '127', '');
INSERT INTO `tr_privilege` VALUES ('129', '删除', 'admin', 'Ordergoodscar', 'del', '127', '');
INSERT INTO `tr_privilege` VALUES ('130', '批量删除', 'admin', 'Ordergoodscar', 'p_del', '127', '');
INSERT INTO `tr_privilege` VALUES ('144', '车源订单', 'admin', 'Orderpath', 'lst', '126', '');
INSERT INTO `tr_privilege` VALUES ('132', '退款', 'admin', 'Ordergoodscar', 'back', '127', '');
INSERT INTO `tr_privilege` VALUES ('148', '还原', 'admin', 'Ordergoodscar', 'recycle_back', '146', '');
INSERT INTO `tr_privilege` VALUES ('147', '查看', 'admin', 'Ordergoodscar', 'recyclelst', '146', '');
INSERT INTO `tr_privilege` VALUES ('146', '订单回收站', 'admin', 'Ordergoodscar', 'recyclelst', '126', '');
INSERT INTO `tr_privilege` VALUES ('145', '库源订单', 'admin', 'Orderwarehouse', 'lst', '126', '');
INSERT INTO `tr_privilege` VALUES ('137', '确认支付', 'admin', 'Ordergoodscar', 'finish', '127', '');
INSERT INTO `tr_privilege` VALUES ('138', '找库货源订单', 'admin', 'Ordergoodsku', 'lst', '126', '');
INSERT INTO `tr_privilege` VALUES ('139', '查看', 'admin', 'Ordergoodsku', 'detail', '138', '');
INSERT INTO `tr_privilege` VALUES ('140', '删除', 'admin', 'Ordergoodsku', 'del', '138', '');
INSERT INTO `tr_privilege` VALUES ('141', '批量删除', 'admin', 'Ordergoodsku', 'p_del', '138', '');
INSERT INTO `tr_privilege` VALUES ('142', '退款', 'admin', 'Ordergoodsku', 'back', '138', '');
INSERT INTO `tr_privilege` VALUES ('143', '确认支付', 'admin', 'Ordergoodsku', 'finish', '138', '');
INSERT INTO `tr_privilege` VALUES ('149', '删除', 'admin', 'Ordergoodscar', 'recycle_del', '146', '');
INSERT INTO `tr_privilege` VALUES ('150', '批量删除', 'admin', 'Ordergoodscar', 'recycle_p_del', '146', '');
INSERT INTO `tr_privilege` VALUES ('151', '查看', 'admin', 'Orderwarehouse', 'detail', '145', '');
INSERT INTO `tr_privilege` VALUES ('152', '删除', 'admin', 'Orderwarehouse', 'del', '145', '');
INSERT INTO `tr_privilege` VALUES ('153', '批量删除', 'admin', 'Orderwarehouse', 'p_del', '145', '');
INSERT INTO `tr_privilege` VALUES ('154', '退款', 'admin', 'Orderwarehouse', 'back', '145', '');
INSERT INTO `tr_privilege` VALUES ('155', '确认支付', 'admin', 'Orderwarehouse', 'finish', '145', '');
INSERT INTO `tr_privilege` VALUES ('156', '查看', 'admin', 'Orderpath', 'detail', '144', '');
INSERT INTO `tr_privilege` VALUES ('157', '删除', 'admin', 'Orderpath', 'del', '144', '');
INSERT INTO `tr_privilege` VALUES ('158', '批量删除', 'admin', 'Orderpath', 'p_del', '144', '');
INSERT INTO `tr_privilege` VALUES ('159', '退款', 'admin', 'Orderpath', 'back', '144', '');
INSERT INTO `tr_privilege` VALUES ('160', '确认支付', 'admin', 'Orderpath', 'finish', '144', '');
INSERT INTO `tr_privilege` VALUES ('163', '友情链接管理', 'admin', 'Web', 'linklst', '161', '');
INSERT INTO `tr_privilege` VALUES ('164', '合作客户管理', 'admin', 'Web', 'customerlst', '161', '');
INSERT INTO `tr_privilege` VALUES ('166', 'banner图片', 'admin', 'Web', 'banneradd', '161', '');
INSERT INTO `tr_privilege` VALUES ('171', '查看', 'admin', 'Entrustcarorder', 'detail', '170', '');
INSERT INTO `tr_privilege` VALUES ('172', '删除', 'admin', 'Entrustcarorder', 'del', '170', '');
INSERT INTO `tr_privilege` VALUES ('173', '批量删除', 'admin', 'Entrustcarorder', 'p_del', '170', '');
INSERT INTO `tr_privilege` VALUES ('174', '退款', 'admin', 'Entrustcarorder', 'back', '170', '');
INSERT INTO `tr_privilege` VALUES ('175', '托运订单回收站', 'admin', 'Entrustcarorder', 'recyclelst', '169', '');
INSERT INTO `tr_privilege` VALUES ('176', '查看', 'admin', 'Entrustcarorder', 'recyclelst', '175', '');
INSERT INTO `tr_privilege` VALUES ('177', '还原', 'admin', 'Entrustcarorder', 'recycle_back', '175', '');
INSERT INTO `tr_privilege` VALUES ('178', '删除', 'admin', 'Entrustcarorder', 'recycle_del', '175', '');
INSERT INTO `tr_privilege` VALUES ('179', '批量删除', 'admin', 'Entrustcarorder', 'recycle_p_del', '175', '');
INSERT INTO `tr_privilege` VALUES ('180', '托运方账号管理', 'admin', 'Entrustcarorder', 'transportinfo', '169', '');
INSERT INTO `tr_privilege` VALUES ('181', '接受委托', 'admin', 'Entrustcarorder', 'receive', '170', '');
INSERT INTO `tr_privilege` VALUES ('183', '发车', 'admin', 'Entrustcarorder', 'sendcar', '170', '');
INSERT INTO `tr_privilege` VALUES ('184', '托运完成', 'admin', 'Entrustcarorder', 'finish', '170', '');
INSERT INTO `tr_privilege` VALUES ('185', '取消', 'admin', 'Entrustcarorder', 'cancel', '170', '');
INSERT INTO `tr_privilege` VALUES ('186', '统计管理', '', '', '', '0', '');
INSERT INTO `tr_privilege` VALUES ('187', '基础数据统计', 'admin', 'Datasum', 'lst', '186', '');
INSERT INTO `tr_privilege` VALUES ('188', '用户数据统计', 'admin', 'Usersum', 'lst', '186', '');
INSERT INTO `tr_privilege` VALUES ('189', '工具', '', '', '', '0', '');
INSERT INTO `tr_privilege` VALUES ('190', '公告管理', 'admin', 'Publicmeg', 'lst', '189', '');
INSERT INTO `tr_privilege` VALUES ('191', '添加', 'admin', 'Publicmeg', 'add', '190', '');
INSERT INTO `tr_privilege` VALUES ('192', '修改', 'admin', 'Publicmeg', 'edit', '190', '');
INSERT INTO `tr_privilege` VALUES ('193', '删除', 'admin', 'Publicmeg', 'del', '190', '');
INSERT INTO `tr_privilege` VALUES ('194', '批量删除', 'admin', 'Publicmeg', 'pdel', '190', '');
INSERT INTO `tr_privilege` VALUES ('196', '数据库工具', 'admin', 'Datatool', 'lst', '189', '');

-- -----------------------------
-- Table structure for `tr_publicmeg`
-- -----------------------------
DROP TABLE IF EXISTS `tr_publicmeg`;
CREATE TABLE `tr_publicmeg` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `title` varchar(225) NOT NULL COMMENT '公告标题',
  `text` varchar(225) NOT NULL COMMENT '公告内容',
  `writer` varchar(225) NOT NULL COMMENT '发布者',
  `writernum` varchar(125) NOT NULL COMMENT '发布者工号',
  `time` datetime NOT NULL COMMENT '发布时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COMMENT='公告表';

-- -----------------------------
-- Records of `tr_publicmeg`
-- -----------------------------
INSERT INTO `tr_publicmeg` VALUES ('3', '114444', '22222', 'admin', 'admin', '2017-11-29 09:19:11');
INSERT INTO `tr_publicmeg` VALUES ('7', '明天有雪', '该开空调了。。。。', 'admin', 'admin', '2017-11-29 09:04:11');
INSERT INTO `tr_publicmeg` VALUES ('11', '123123123', '666666666666', 'admin', 'admin', '2017-12-01 05:45:12');
INSERT INTO `tr_publicmeg` VALUES ('9', '中午吃什么', '想喝汤，想吃酸辣土豆丝。。。', 'admin', 'admin', '2017-11-29 10:14:11');
INSERT INTO `tr_publicmeg` VALUES ('10', '中午想喝酸酸的紫菜鸡蛋汤', '配料如下：紫菜、鸡蛋、虾米、香菜、盐、香油、醋、淀粉（应该没了吧）。。。', 'admin', 'admin', '2017-11-30 08:04:11');
INSERT INTO `tr_publicmeg` VALUES ('12', '666', '666', 'admin', 'admin', '2017-12-01 17:12:35');
INSERT INTO `tr_publicmeg` VALUES ('13', '12323123123', '12313231', 'admin', 'admin', '2017-12-01 17:27:42');

-- -----------------------------
-- Table structure for `tr_role`
-- -----------------------------
DROP TABLE IF EXISTS `tr_role`;
CREATE TABLE `tr_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '角色ID',
  `rolename` varchar(100) NOT NULL COMMENT '角色名',
  `content` mediumtext COMMENT '备注',
  `pri_id` varchar(655) DEFAULT NULL COMMENT '权限节点',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `tr_role`
-- -----------------------------
INSERT INTO `tr_role` VALUES ('1', '超级管理员', '有平台所有权限，可以添加角色分类，添加管理员', '38,39,40,41,42,43,44,45,46,47,48,49,56,57,58,59,60,61,62,63,64,65,66,67,68,116,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,115,88,90,91,93,94,95,96,97,99,120,123,100,103,104,105,106,121,124,107,110,111,112,113,122,125,126,127,128,129,130,132,137,138,139,140,141,142,143,144,156,157,158,159,160,145,151,152,153,154,155,146,147,148,149,150,161,162,163,164,166,167,168,169,170,171,172,173,174,181,183,184,185,175,176,177,178,179,180,186,187,188,189,190,191,192,193,194,196');
INSERT INTO `tr_role` VALUES ('5', '普通管理员', '可以添加用户', '38,39,40,41,42,43,44,45,46,47,48,49,56,57,58,59,60,61,62,63,64,65,66,67,68,116,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,115,88,90,91,93,94,95,96,97,99,120,123,100,103,104,105,106,121,124,107,110,111,112,113,122,125,126,127,128,129,130,132,137,138,139,140,141,142,143,144,156,157,158,159,160,145,151,152,153,154,155,146,147,148,149,150,161,162,163,164,166,167,168,169,170,171,172,173,174,181,183,184,185,175,176,177,178,179,180,186,187,188,189,190,191,192,193,194,196');
INSERT INTO `tr_role` VALUES ('12', '订单管理员', '管理订单', '126,127,128,129,130,132,137,138,139,140,141,142,143,144,156,157,158,159,160,145,151,152,153,154,155,146,147,148,149,150');

-- -----------------------------
-- Table structure for `tr_smscode`
-- -----------------------------
DROP TABLE IF EXISTS `tr_smscode`;
CREATE TABLE `tr_smscode` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `mobile` varchar(20) NOT NULL COMMENT '电话号码',
  `code` varchar(10) NOT NULL COMMENT '验证码',
  `create_at` datetime NOT NULL COMMENT '创建时间',
  `update_at` datetime NOT NULL COMMENT '更新时间',
  `statue` int(11) NOT NULL COMMENT '验证码状态',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `tr_smscode`
-- -----------------------------
INSERT INTO `tr_smscode` VALUES ('5', '15638151827', '320619', '2017-10-13 08:25:55', '2017-10-13 08:25:55', '1');
INSERT INTO `tr_smscode` VALUES ('3', '13262750648', '290372', '2017-09-13 18:03:37', '2017-09-13 18:03:37', '1');

-- -----------------------------
-- Table structure for `tr_transportinfo`
-- -----------------------------
DROP TABLE IF EXISTS `tr_transportinfo`;
CREATE TABLE `tr_transportinfo` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `name` varchar(100) NOT NULL COMMENT '托运方名称',
  `phone` varchar(100) NOT NULL COMMENT '托运方联系方式',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='托运方表';

-- -----------------------------
-- Records of `tr_transportinfo`
-- -----------------------------
INSERT INTO `tr_transportinfo` VALUES ('1', '陆港易冷链', '15538191382');

-- -----------------------------
-- Table structure for `tr_user`
-- -----------------------------
DROP TABLE IF EXISTS `tr_user`;
CREATE TABLE `tr_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '用户ID',
  `username` varchar(100) NOT NULL COMMENT '账号',
  `password` varchar(255) NOT NULL COMMENT '用户密码',
  `login_time` datetime NOT NULL COMMENT '登录时间',
  `type_id` int(11) NOT NULL COMMENT '用户角色ID',
  `type` varchar(50) NOT NULL COMMENT '认证类型',
  `cardname` varchar(100) NOT NULL COMMENT '开户银行',
  `cardid` varchar(120) NOT NULL COMMENT '银行卡号',
  `card_free` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '余额',
  `company_name` varchar(60) NOT NULL COMMENT '公司名称',
  `real_name` varchar(30) NOT NULL COMMENT '真实姓名',
  `identity_type` varchar(50) NOT NULL COMMENT '证件类型',
  `identity_id` varchar(60) NOT NULL COMMENT '身份证号',
  `car_id` varchar(30) NOT NULL COMMENT '车牌号',
  `business_card` varchar(255) NOT NULL COMMENT '营业执照',
  `road_permit` varchar(255) NOT NULL COMMENT '道路运输许可证',
  `driver_card` varchar(255) NOT NULL COMMENT '行驶证',
  `peison_business` varchar(255) NOT NULL COMMENT '个体经营许可证',
  `time` date NOT NULL COMMENT '注册时间',
  `check_state` varchar(50) NOT NULL DEFAULT '0' COMMENT '认证审核状态',
  `is_company` varchar(10) NOT NULL DEFAULT '0' COMMENT '是否自营',
  `is_recycle` int(11) NOT NULL DEFAULT '0' COMMENT '是否放入回收站',
  `is_login` int(11) NOT NULL DEFAULT '0' COMMENT '是否已登录',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=49 DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `tr_user`
-- -----------------------------
INSERT INTO `tr_user` VALUES ('44', '18595920787', '5ad074481c3675ecc2ba19b491e79218', '2017-10-13 14:26:28', '4', '物流公司', '', '', '0.00', '测试1011', '', '', '', '', '/uploads/20171011\\d38517ca6716ef3f3234b9d305a2f1fe.png', '/uploads/20171011\\7268b47f32e34a0e42f61bfb43aee82e.png', '', '', '2017-10-11', '1', '0', '0', '1');
INSERT INTO `tr_user` VALUES ('3', '13403991030', '5ad074481c3675ecc2ba19b491e79218', '2017-11-29 09:15:07', '4', '物流公司', '中信银行', '6217002430010049', '0.00', '235235', '', '', '21354235', '235235', '/uploads/20170804\\5e2abfc35465ac619f1a9a643f6c5bab.png', '/uploads/20170804\\a6c4f4d8a259b74c4b9d248c3d92dcbb.png', '/uploads/20170804\\7c5207dc720729b20de577832409dba3.png', '/uploads/20170803\\5c4d965258ec7052a73c74937f583605.png', '0000-00-00', '1', '0', '0', '1');
INSERT INTO `tr_user` VALUES ('8', '13262750648', '5ad074481c3675ecc2ba19b491e79218', '2017-10-11 08:17:35', '1', '物流公司', '', '', '0.00', '', '老杨', '', '410823199603090027', '', '', '', '', '', '0000-00-00', '1', '0', '0', '0');
INSERT INTO `tr_user` VALUES ('41', '15538191283', '5ad074481c3675ecc2ba19b491e79218', '2017-11-20 09:00:41', '4', '车主', '', '', '0.00', '123', '2423', '', '410823199802121233', '豫E67574', '/uploads/20171010\\20179127859ad8141d928966dda5da7a.png', '/uploads/20171010\\5a2a62c647dd9d458f0585ec7b82453b.jpg', '/uploads/20171010\\18599d7499fc1b6b08f88e19b753a1be.jpg', '/uploads/20171009\\82a2bd1fe45726d2a54a010c1243d061.jpg', '2017-10-09', '1', '0', '0', '1');
INSERT INTO `tr_user` VALUES ('29', '15538191382', '5ad074481c3675ecc2ba19b491e79218', '2017-11-24 14:07:57', '4', '物流公司', '', '', '0.00', '陆港易冷链', '', '', '', '', '/uploads/20170913\\cb535f3a62d4c2ff4f83e0a9fadb568c.png', '/uploads/20170913\\b38e0470411aca3f7435e751bf75af8b.png', '', '', '2017-09-13', '1', '1', '0', '1');
INSERT INTO `tr_user` VALUES ('32', '15638151827', '74a0c18637d1c7585a37b331c78d71a8', '0000-00-00 00:00:00', '3', '物流公司', '', '', '0.00', '邓', '', '', '', '', '/uploads/20171013\\e918f6cba5bfc0ca26a068ec3042eff6.jpg', '/uploads/20171013\\43777688bb8d75a9717617c9bfdd011a.jpg', '', '', '2017-09-14', '1', '0', '0', '1');
INSERT INTO `tr_user` VALUES ('40', '15538191283', '5ad074481c3675ecc2ba19b491e79218', '0000-00-00 00:00:00', '4', '', '', '', '0.00', '', '', '', '', '', '', '', '', '', '2017-10-09', '0', '0', '1', '0');
INSERT INTO `tr_user` VALUES ('27', '15737315727', '5f2417b1c953698d9d36a2481b940e7a', '0000-00-00 00:00:00', '4', '', '', '', '0.00', '', '', '', '', '', '', '', '', '', '2017-09-13', '0', '0', '0', '0');
INSERT INTO `tr_user` VALUES ('43', '13071021121', '5ad074481c3675ecc2ba19b491e79218', '2017-10-25 15:18:02', '4', '物流公司', '', '', '0.00', 'mac魅可', '', '', '', '', '/uploads/20171011\\473d956cc75eeff28b5b4fedad5a2979.png', '/uploads/20171011\\465455b7b7693b464f69c74a7a15ebda.png', '', '', '2017-10-11', '1', '0', '0', '1');
INSERT INTO `tr_user` VALUES ('45', '13271505230', '5ad074481c3675ecc2ba19b491e79218', '2017-10-13 15:57:57', '4', '物流公司', '', '', '0.00', '中浩科技', '', '', '', '', '/uploads/20171013\\9b647584bcfa279c06876405c603de99.png', '/uploads/20171013\\5625c9e22c1d3fa2ebda43c338aaa602.png', '', '', '2017-10-13', '1', '0', '0', '1');
INSERT INTO `tr_user` VALUES ('46', '13027731857', '5ad074481c3675ecc2ba19b491e79218', '0000-00-00 00:00:00', '4', '物流公司', '', '', '0.00', '陆港易冷链', '', '', '', '', '/uploads/20171013\\5fe98086085ddaddd7b00e53c2282879.jpg', '/uploads/20171013\\b625841d973ffd26f4ca44a5fbcc2f76.jpg', '', '', '2017-10-13', '1', '0', '0', '1');

-- -----------------------------
-- Table structure for `tr_usertype`
-- -----------------------------
DROP TABLE IF EXISTS `tr_usertype`;
CREATE TABLE `tr_usertype` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `typename` varchar(30) NOT NULL COMMENT '类型名称',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `tr_usertype`
-- -----------------------------
INSERT INTO `tr_usertype` VALUES ('1', '货主');
INSERT INTO `tr_usertype` VALUES ('2', '车主');
INSERT INTO `tr_usertype` VALUES ('3', '库主');
INSERT INTO `tr_usertype` VALUES ('4', '物流公司');

-- -----------------------------
-- Table structure for `tr_warehouse`
-- -----------------------------
DROP TABLE IF EXISTS `tr_warehouse`;
CREATE TABLE `tr_warehouse` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `wh_name` varchar(300) NOT NULL COMMENT '仓库名称',
  `wh_type` varchar(100) NOT NULL COMMENT '仓库类型',
  `wh_price` varchar(100) NOT NULL COMMENT '仓库价格',
  `wh_price_type` varchar(100) NOT NULL COMMENT '价格类型',
  `wh_invoice` varchar(50) NOT NULL COMMENT '是否需要发票',
  `wh_service` varchar(100) NOT NULL COMMENT '增值服务',
  `wh_time` date NOT NULL COMMENT '发布日期',
  `wh_photo` varchar(300) NOT NULL COMMENT '仓库实拍图',
  `wh_address` varchar(200) NOT NULL COMMENT '仓库地址',
  `wh_address_detail` varchar(300) NOT NULL COMMENT '详细地址',
  `normal_area` varchar(200) NOT NULL COMMENT '常温面积',
  `normal_volume` varchar(200) NOT NULL COMMENT '常温体积',
  `coldstorage_area` varchar(200) NOT NULL COMMENT '冷藏面积',
  `coldstorage_volume` varchar(200) NOT NULL COMMENT '冷藏体积',
  `freeze_area` varchar(200) NOT NULL COMMENT '冷冻面积',
  `freeze_volume` varchar(200) NOT NULL COMMENT '冷冻体积',
  `quickfreeze_area` varchar(200) NOT NULL COMMENT '急冻面积',
  `quickfreeze_volume` varchar(200) NOT NULL COMMENT '急冻体积',
  `deepcold_area` varchar(200) NOT NULL COMMENT '深冷面积',
  `deepcold_volume` varchar(200) NOT NULL COMMENT '深冷体积',
  `useable_area` int(10) NOT NULL COMMENT '可用库存面积',
  `useable_volume` int(10) NOT NULL COMMENT '可用库存体积',
  `wh_contact` varchar(100) NOT NULL COMMENT '联系人',
  `wh_phone` varchar(200) NOT NULL COMMENT '联系电话',
  `wh_remark` text NOT NULL COMMENT '备注',
  `wh_uid` varchar(100) NOT NULL COMMENT '用户账号',
  `is_company` int(11) NOT NULL DEFAULT '0' COMMENT '是否自营',
  `order_state` int(11) NOT NULL DEFAULT '1' COMMENT '存储状态',
  `check_state` int(11) NOT NULL DEFAULT '1' COMMENT '信息认证',
  `is_recycle` int(11) NOT NULL DEFAULT '0' COMMENT '是否删除',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=58 DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `tr_warehouse`
-- -----------------------------
INSERT INTO `tr_warehouse` VALUES ('18', '河南省郑州市郑东新区龙子湖高校园区河南中医药大学', '平堆库,货架库,自动化库', '111', '1', '不提供发票', '提供拖车', '2017-09-12', '/uploads/20170823\\1ea6a2cfb9c6a3cb296d0df4e3d9055f.jpg', '陕西省西安市', '1232323', '222', '', '111', '', '23', '', '13', '', '123', '', '0', '0', '333', '15538191382', '', '13403991030', '0', '1', '2', '0');
INSERT INTO `tr_warehouse` VALUES ('17', '5#229', '平堆库', '21', '2', '不提供发票', '提供装卸', '2017-08-08', '/uploads/20170808\\77d282942b9da12a3b1d9c0ff619caee.png', '河南省郑州市金水区', '龙子湖高校园区河南中医药大学', '231', '221', '12', '21', '123', '1231', '122', '2132', '1231', '12', '21321', '2321', '123', '13403991030', '总有一条蜿蜒在童话镇里流转的河，', '13403991030', '0', '3', '2', '1');
INSERT INTO `tr_warehouse` VALUES ('16', '陆港310', '平堆库', '66', '2', '提供发票', '提供拖车,提供装卸', '2017-08-08', '/uploads/20170808\\8374f1928f9286f3dbf4fd570d765591.png', '河南省郑州市', '经北四路经开第十七大街郑州国际陆港开发建设有限公司', '32', '66', '132', '35', '123', '321', '', '', '', '', '1234', '4321', '周雪迎', '15538191283', '你看南风吹，我等故人归！！!', '13403991030', '0', '3', '2', '0');
INSERT INTO `tr_warehouse` VALUES ('19', '123', '平堆库,货架库', '223', '1', '提供发票', '提供拖车,提供装卸', '2017-08-09', '/uploads/20170809\\39bbec973d8454f304198d36dd076c26.png', '天津市天津市河西区', '233333333', '23', '33', '23', '44', '', '', '', '', '', '0', '325', '345', '123', '15538191382', '看不见你的笑我怎么睡得着，你的身影这么近我却抱不到。。。', '13262750648', '0', '2', '2', '0');
INSERT INTO `tr_warehouse` VALUES ('21', '100块', '货架库,自动化库', '66666666', '2', '不提供发票', '提供拖车', '2017-09-30', '/uploads/20170828\\083325f0a198825fdb52f54a6e00cf7c.png', '上海市上海市', '1234235436546', '22', '22', '', '', '', '', '', '', '', '', '22', '22', '小可爱', '13071021121', '', '13403991030', '0', '1', '1', '0');
INSERT INTO `tr_warehouse` VALUES ('22', '口香糖', '平堆库,货架库,自动化库,保税库', '66666', '1', '不提供发票', '提供拖车,提供装卸', '2017-08-28', '/uploads/20170828\\01fb488b253e893831c51612407bd127.png', '上海市', '124328473284', '2222', '2222', '', '', '', '', '', '', '', '', '2222', '2222', '杨先生', '13262750648', '', '13403991030', '0', '1', '1', '0');
INSERT INTO `tr_warehouse` VALUES ('23', '124234324', '平堆库,货架库', '23', '1', '不提供发票', '提供拖车,提供装卸', '2017-08-28', '/uploads/20170828\\7574102c63bdf973f3d1ea2b965973a6.png', '144214', '2132323', '2', '3', '', '', '', '', '', '', '', '', '2', '3', '2332', '13071021121', '', '13403991030', '0', '1', '1', '0');
INSERT INTO `tr_warehouse` VALUES ('24', '1221323', '平堆库,货架库', '2', '1', '不提供发票', '提供拖车,提供装卸', '2017-09-05', '/uploads/20170901\\dbd571cd38b48c2757822b7033ae868b.png', '天津市', '121111111111', '2', '2', '', '', '', '', '', '', '', '', '2', '23434', '333', '15538191283', '', '13403991030', '0', '1', '1', '0');
INSERT INTO `tr_warehouse` VALUES ('25', '春风十里不如你', '平堆库', '0.01', '1', '不提供发票', '提供装卸', '2017-09-12', '/uploads/20170901\\9c8d5f5523cbf1d158e798972ad6b446.jpg', '河南省郑州市中原区', '西三环', '10', '10', '10', '10', '10', '10', '10', '10', '10', '10', '5', '5', '小红', '13567896789', '', '13403991030', '0', '2', '2', '0');
INSERT INTO `tr_warehouse` VALUES ('26', '3333', '平堆库,自动化库', '23', '1', '不提供发票', '提供拖车', '2017-09-12', '/uploads/20170912\\b00c1857a57d7abef36e0c8dbf56db8a.png', '上海市', '213232', '2', '2', '3', '4', '', '', '', '', '', '', '0', '0', '222', '13403991030', '你再终点等我笑里有雨滴。。。。', '13403991030', '0', '1', '1', '0');
INSERT INTO `tr_warehouse` VALUES ('28', '5#229', '平堆库', '21', '2', '不提供发票', '提供装卸', '2017-09-15', '/uploads/20170808\\77d282942b9da12a3b1d9c0ff619caee.png', '河南省郑州市金水区', '龙子湖高校园区河南中医药大学', '231', '221', '12', '21', '123', '1231', '122', '2132', '1231', '12', '21321', '2321', '123', '13403991030', '总有一条蜿蜒在童话镇里流转的河，童话镇！！！', '13403991030', '0', '1', '1', '0');
INSERT INTO `tr_warehouse` VALUES ('29', '1111', '货架库,自动化库', '1', '1', '提供发票', '提供拖车', '2017-09-20', '/uploads/20170920\\0931929dfbbbc0dac603b5ccd01f9981.png', '2222222', '54461', '20', '50', '', '', '', '', '', '', '', '', '0', '0', '1232', '13456892563', '', '15538191382', '1', '2', '2', '0');
INSERT INTO `tr_warehouse` VALUES ('30', '陆港易冷链仓库', '平堆库,货架库', '0.01', '1', '不提供发票', '提供拖车', '2017-09-20', '/uploads/20170920\\8d6e19cab5859197fb37a87948534f21.png', '河南省郑州市管城回族区', '河南省郑州市管城回族区', '32', '43', '43', '43', '', '', '', '', '', '', '0', '0', '王女士', '13071021121', '', '15538191382', '1', '2', '2', '0');
INSERT INTO `tr_warehouse` VALUES ('31', '仓库1', '平堆库,货架库', '12', '1', '提供发票', '提供装卸', '2017-09-20', '/uploads/20170920\\368e33d2c9e30e1c78a82b93f5ed4aec.png', '河南省郑州市金水区', '111', '26600', '300', '200', '150', '', '', '', '', '', '', '0', '0', '王先生', '15538191283', '', '15538191283', '0', '2', '2', '0');
INSERT INTO `tr_warehouse` VALUES ('32', '冷库', '平堆库,货架库', '0.01', '0', '不提供发票', '提供装卸', '2017-09-21', '/uploads/20170921\\c61d1bdb292bd6cfb1ce0f0b42333e3d.png', '北京市北京市宣武区', '北京市北京市宣武区', '32', '43', '43', '21', '', '', '21', '32', '', '', '0', '0', '周颖', '13071021121', '', '15538191382', '1', '3', '2', '0');
INSERT INTO `tr_warehouse` VALUES ('33', '冷库', '平堆库,货架库', '0.01', '0', '不提供发票', '提供装卸', '2017-09-21', '/uploads/20170921\\c61d1bdb292bd6cfb1ce0f0b42333e3d.png', '北京市北京市宣武区', '北京市北京市宣武区', '32', '43', '43', '21', '', '', '21', '32', '', '', '0', '0', '周颖', '13071021121', '', '15538191382', '1', '1', '1', '0');
INSERT INTO `tr_warehouse` VALUES ('34', '我的一个道姑朋友', '平堆库,货架库,自动化库,保税库', '5656', '2', '不提供发票', '提供拖车,提供装卸', '2017-09-30', '/uploads/20170930\\9f545a2fc888b0049faf95c14c95d0f2.png', '香港香港特别行政区西贡区', '对面不识，恍然间思绪翻涌', '123456', '87954', '54564', '564665', '54654', '321645', '54465', '345654', '54546', '54546', '0', '0', '吴女士', '15538191382', '后来谁家喜宴重逢，佳人在侧，烛影摇红。。。', '15538191382', '1', '3', '2', '0');
INSERT INTO `tr_warehouse` VALUES ('35', '123', '货架库,自动化库', '12', '1', '不提供发票', '提供装卸', '2017-10-09', '/uploads/20171009\\48e914276b1247ad03023da19ff9723a.png', '上海市', '111', '23', '32', '3', '2', '', '', '', '', '', '', '0', '0', '123', '15538191382', '22222222222', '15538191382', '1', '2', '2', '0');
INSERT INTO `tr_warehouse` VALUES ('36', '易冷链仓库', '货架库,自动化库', '0.01', '0', '提供发票', '提供拖车', '2017-10-09', '/uploads/20171009\\518b9bc5b53d7b435c7f97c8bfd09dfc.jpg', '天津市', '12', '123', '122', '12', '23', '', '', '', '', '', '', '0', '0', '易冷链', '15538191382', '对面不识 恍然间思绪翻涌', '15538191382', '1', '3', '2', '0');
INSERT INTO `tr_warehouse` VALUES ('37', '13262750648', '货架库,自动化库', '12', '1', '提供发票', '提供装卸', '2017-10-10', '/uploads/20171010\\c0d958eb5d8fe39b8389878612165138.png', '233', '123', '12', '324', '12', '32', '12', '323', '12', '12', '23', '21', '0', '0', '213', '13262750648', '', '13262750648', '0', '2', '2', '0');
INSERT INTO `tr_warehouse` VALUES ('38', '15538191283', '货架库,自动化库', '1324', '1', '提供发票', '提供拖车,提供装卸', '2017-10-10', '/uploads/20171010\\08fa13c9865d58b5ee6f3544efd8c15e.png', '123', '143214', '132', '23', '123', '132', '1432', '142', '1234', '142', '14', '14', '0', '0', '12', '15538191283', '', '15538191283', '0', '1', '2', '0');
INSERT INTO `tr_warehouse` VALUES ('39', 'wqwq', '货架库', '32', '0', '不提供发票', '提供装卸', '2017-10-10', '/uploads/20171010\\4522a2dccff10314219ce31309faab46.jpg', 'wqwq', 'wqwq', '21', '32', '', '', '', '', '', '', '', '', '0', '0', '212', '13403991030', '', '15538191283', '0', '1', '1', '0');
INSERT INTO `tr_warehouse` VALUES ('40', '陆港仓库', '货架库,自动化库', '1154', '2', '提供发票', '提供装卸', '2017-10-10', '/uploads/20171010\\18cef800820afc135ffa96912e1800e4.png', '河南省郑州市', '郑州11111111', '13', '23', '', '', '', '', '', '', '', '', '0', '0', '杨先生', '15538191283', '也许我应该沉醉装疯，借你怀抱留一抹唇红。。。', '15538191283', '0', '1', '1', '0');
INSERT INTO `tr_warehouse` VALUES ('41', '陆港310', '平堆库', '66', '2', '提供发票', '提供拖车,提供装卸', '2017-10-10', '/uploads/20170808\\8374f1928f9286f3dbf4fd570d765591.png', '河南省郑州市', '经北四路经开第十七大街郑州国际陆港开发建设有限公司', '32', '66', '132', '35', '123', '321', '', '', '', '', '1234', '4321', '周雪迎', '15538191283', '你看南风吹，我等故人归！！!', '13403991030', '0', '3', '2', '1');
INSERT INTO `tr_warehouse` VALUES ('42', '陆港310', '平堆库', '66', '2', '提供发票', '提供拖车,提供装卸', '2017-10-10', '/uploads/20170808\\8374f1928f9286f3dbf4fd570d765591.png', '河南省郑州市', '经北四路经开第十七大街郑州国际陆港开发建设有限公司', '32', '66', '132', '35', '123', '321', '', '', '', '', '1234', '4321', '周雪迎', '15538191283', '你看南风吹，我等故人归！！!', '13403991030', '0', '3', '2', '1');
INSERT INTO `tr_warehouse` VALUES ('43', '陆港310', '平堆库', '66', '2', '提供发票', '提供拖车,提供装卸', '2017-10-10', '/uploads/20170808\\8374f1928f9286f3dbf4fd570d765591.png', '河南省郑州市', '经北四路经开第十七大街郑州国际陆港开发建设有限公司', '32', '66', '132', '35', '123', '321', '', '', '', '', '1234', '4321', '周雪迎', '15538191283', '你看南风吹，我等故人归！！!', '13403991030', '0', '1', '2', '0');
INSERT INTO `tr_warehouse` VALUES ('44', 'MAC', '货架库,自动化库', '0.01', '2', '提供发票', '提供装卸', '2017-10-11', '/uploads/20171011\\6dd1657ff7819c885f94f25bd81047f0.png', '香港香港特别行政区油尖旺区', '经北四路经开第十七大街郑州国际陆港开发建设有限公司', '12', '0.23', '5600', '5000', '50000', '10000', '', '', '', '', '0', '0', 'mac-see sheer', '15538191382', '', '15538191382', '1', '3', '2', '0');
INSERT INTO `tr_warehouse` VALUES ('45', 'YSL', '平堆库,货架库,自动化库,保税库', '0.01', '3', '提供发票', '提供拖车,提供装卸', '2017-10-11', '/uploads/20171011\\73aec682a2f282692f5e440e6a04c02e.png', '香港香港特别行政区观塘区', '经北四路经开第十七大街', '10000', '50000', '6250', '495620', '', '', '', '', '', '', '0', '0', 'ysl', '13071021121', '', '13071021121', '0', '1', '2', '0');
INSERT INTO `tr_warehouse` VALUES ('46', '魅可圣罗兰仓库', '货架库,自动化库,保税库', '4564', '0', '提供发票', '提供拖车,提供装卸', '2017-10-11', '/uploads/20171011\\6c89deb49b65a9dcd913c1e33103382f.png', '香港香港特别行政区深水埗区', '经北四路经开第十七大街', '2300', '4500', '46230', '56230', '', '', '', '', '', '', '0', '0', '魅可', '13403991030', '', '13403991030', '0', '3', '2', '1');
INSERT INTO `tr_warehouse` VALUES ('49', '31321', '平堆库,货架库,自动化库,保税库', '0.01', '1', '不提供发票', '提供拖车,提供装卸', '2017-10-13', '/uploads/20171013\\197c0c6405adc964e64aec3b3024fa47.png', '天津市天津市河东区', '213231', '', '', '12321', '21312', '213', '12313', '', '', '1231', '12323', '0', '0', '12312', '13271505230', '', '13271505230', '0', '3', '2', '0');
INSERT INTO `tr_warehouse` VALUES ('50', '大仓库', '平堆库,货架库', '0.01', '1', '不提供发票', '提供拖车,提供装卸', '2017-10-13', '/uploads/20171013\\457b671d576085c69d586cca7c474ce5.png', '天津市天津市南开区', '南开区', '21', '43', '', '', '', '', '', '', '', '', '0', '0', '桌子女士', '13027731857', '', '13027731857', '0', '3', '2', '0');
INSERT INTO `tr_warehouse` VALUES ('51', '大仓库', '平堆库,货架库', '0.01', '1', '不提供发票', '提供拖车,提供装卸', '2017-10-13', '/uploads/20171013\\457b671d576085c69d586cca7c474ce5.png', '天津市天津市南开区', '南开区', '21', '43', '', '', '', '', '', '', '', '', '0', '0', '桌子女士', '13027731857', '', '13027731857', '0', '1', '2', '0');
INSERT INTO `tr_warehouse` VALUES ('52', '大仓库', '平堆库,货架库', '0.01', '1', '不提供发票', '提供拖车,提供装卸', '2017-10-13', '/uploads/20171013\\457b671d576085c69d586cca7c474ce5.png', '天津市天津市南开区', '南开区', '21', '43', '', '', '', '', '', '', '', '', '0', '0', '桌子女士', '13027731857', '', '13027731857', '0', '1', '1', '0');
INSERT INTO `tr_warehouse` VALUES ('53', '大仓库', '平堆库,货架库', '0.01', '1', '不提供发票', '提供拖车,提供装卸', '2017-10-13', '/uploads/20171013\\457b671d576085c69d586cca7c474ce5.png', '天津市天津市南开区', '南开区', '21', '43', '', '', '', '', '', '', '', '', '0', '0', '桌子女士', '13027731857', '', '13027731857', '0', '1', '1', '0');
INSERT INTO `tr_warehouse` VALUES ('54', '仓库仓库', '平堆库,货架库,自动化库,保税库', '0.01', '1', '不提供发票', '提供拖车,提供装卸', '2017-10-13', '/uploads/20171013\\197c0c6405adc964e64aec3b3024fa47.png', '天津市天津市河东区', '213231', '', '', '12321', '21312', '213', '12313', '', '', '1231', '12323', '0', '0', '12312', '13271505230', '', '13271505230', '0', '2', '2', '0');
INSERT INTO `tr_warehouse` VALUES ('55', '魅可圣罗兰仓库', '货架库,自动化库,保税库', '4564', '0', '提供发票', '提供拖车,提供装卸', '2017-10-25', '/uploads/20171011\\6c89deb49b65a9dcd913c1e33103382f.png', '香港香港特别行政区深水埗区', '经北四路经开第十七大街', '2300', '4500', '46230', '56230', '', '', '', '', '', '', '0', '0', '魅可', '13403991030', '', '13403991030', '0', '1', '1', '0');
INSERT INTO `tr_warehouse` VALUES ('56', '魅可圣罗兰仓库', '货架库,自动化库,保税库', '4564', '0', '提供发票', '提供拖车,提供装卸', '2017-10-25', '/uploads/20171011\\6c89deb49b65a9dcd913c1e33103382f.png', '香港香港特别行政区深水埗区', '经北四路经开第十七大街', '2300', '4500', '46230', '56230', '', '', '', '', '', '', '0', '0', '魅可', '13403991030', '', '13403991030', '0', '1', '1', '0');
INSERT INTO `tr_warehouse` VALUES ('57', '5#229', '平堆库,货架库,自动化库,保税库', '21', '2', '不提供发票', '提供装卸', '2017-11-20', '/uploads/20170808\\77d282942b9da12a3b1d9c0ff619caee.png', '河南省郑州市金水区', '龙子湖高校园区河南中医药大学', '231', '221', '12', '21', '123', '1231', '122', '2132', '1231', '12', '21321', '2321', '123', '13403991030', '总有一条蜿蜒在童话镇里流转的河，', '13403991030', '0', '1', '1', '0');
