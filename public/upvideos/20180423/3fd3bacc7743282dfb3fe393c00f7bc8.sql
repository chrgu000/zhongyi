-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2018 年 04 月 23 日 07:48
-- 服务器版本: 5.5.53
-- PHP 版本: 5.4.45

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `huaxian`
--

-- --------------------------------------------------------

--
-- 表的结构 `tr_gov`
--

CREATE TABLE IF NOT EXISTS `tr_gov` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `file` varchar(255) DEFAULT NULL COMMENT '文件',
  `filename` varchar(255) NOT NULL,
  `time` datetime NOT NULL COMMENT '上传时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='文件上传表' AUTO_INCREMENT=19 ;

--
-- 转存表中的数据 `tr_gov`
--

INSERT INTO `tr_gov` (`id`, `file`, `filename`, `time`) VALUES
(18, 'sublime_text.exe', '20180419\\41dd5121e27aaa05281512eb59c2824b.exe', '2018-04-19 15:40:29'),
(17, '时韫商城问题汇总及解决情况跟踪表.xlsx', '20180419\\048a7f6e70f2cd06f47555bb57156677.xlsx', '2018-04-19 15:28:46'),
(13, '陆港服务器.txt', '20180412\\453a3f9116fed4eb5cd5537fc67ce705.txt', '2018-04-12 16:56:34'),
(14, 'CI框架notes.docx', '20180412\\09e8280e233d72bf5c6c56370afa0d67.docx', '2018-04-12 17:41:13'),
(15, '产业聚集区官网功能清单工期.xlsx', '20180412\\cc4077264d3d6f60ede52a42417c96c1.xlsx', '2018-04-12 17:43:44'),
(16, '欧亚班列账号密码.txt', '20180413\\2fe1f044cc446071f00a0cb3f457d8b9.txt', '2018-04-13 20:02:04');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
