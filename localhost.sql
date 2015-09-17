-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2015 年 09 月 17 日 15:48
-- 服务器版本: 5.5.20
-- PHP 版本: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `wd_db`
--
CREATE DATABASE `wd_db` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `wd_db`;

-- --------------------------------------------------------

--
-- 表的结构 `jl_ad`
--

CREATE TABLE IF NOT EXISTS `jl_ad` (
  `ad_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '广告编号',
  `ad_name` varchar(100) NOT NULL COMMENT '广告名称',
  `ad_link` varchar(100) NOT NULL COMMENT '广告链接',
  `ad_img_url` varchar(100) NOT NULL COMMENT '广告图片路径',
  PRIMARY KEY (`ad_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `jl_admin`
--

CREATE TABLE IF NOT EXISTS `jl_admin` (
  `admin_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '管理员编号',
  `admin_username` varchar(100) NOT NULL COMMENT '管理员用户名',
  `admin_password` varchar(100) NOT NULL COMMENT '管理员密码',
  `admin_email` varchar(100) NOT NULL COMMENT '管理员电子邮件',
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `jl_admin`
--

INSERT INTO `jl_admin` (`admin_id`, `admin_username`, `admin_password`, `admin_email`) VALUES
(1, 'Jeffery', '123', '13451@qq.com'),
(2, 'Tone', '1234', '13451@qq.com');

-- --------------------------------------------------------

--
-- 表的结构 `jl_document`
--

CREATE TABLE IF NOT EXISTS `jl_document` (
  `document_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '单页ID',
  `document_name` varchar(100) NOT NULL COMMENT '单页名称',
  `document_link` varchar(100) NOT NULL COMMENT '单页链接',
  `document_content` text NOT NULL COMMENT '单页内容',
  PRIMARY KEY (`document_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `jl_document`
--

INSERT INTO `jl_document` (`document_id`, `document_name`, `document_link`, `document_content`) VALUES
(1, '公司简介', '', '<div class="contLeft">\r\n					<ul style="margin:11px 0 0 13px;">\r\n						<li class="left">\r\n							<span style="color:#3366cc;">公司简介</span>\r\n							<span style="color:#999;">About us</span>\r\n						</li>\r\n						<li class="right"></li>\r\n					</ul>\r\n					<img src="images/about_us-contLeft-img.png">\r\n					<p style="width:415px;height:90px;margin-top:17px">在过去的六个交易日中，国际油价连续上涨6.84美元，累计涨幅超过8%。据东方油气网监测，在3月29日后，国际油价突然发力大幅上扬，3月29 日上涨至每桶82美元以上，31日达83.76美元，4月1日达84.87美元，4月5日上涨至86.62美元。</p>\r\n					<p style="width:415px;height:45px;margin-top:0;">业内人士认为,经济数据向好以及进入消费旺季等利多因素共振推动石油市场价格急剧攀升。中国石油大学工商管理学院院长王震分析说,当前国际油市</p>\r\n					<p style="margin-top:0;">从去年11月10日至今近半年的时间里，国内油价始终都没有调整，原因在于布伦特、迪拜、辛塔三地原油变化率曾先后3次临界破4%，但都在临界破 4%最后的关键几天里转了向。</p>\r\n					<p>按照《石油价格管理办法》规定，“国际市场原油连续22个工作日移动平均价格变化超过4%时，可相应调整国内成品油价格”。据东方油气网监测，截至4月6日，布伦特、迪拜和辛塔三地原油变化率已达4.78%。</p>\r\n					<p>由于进入4月份后，国内原油结算价将比前月上涨200余元，若不调整出厂价，炼油盈利将持平或略显亏损。预计，这次调价可能仍以满足炼油不亏损为前提，综合考虑当前CPI(居民消费价格指数)，调幅可能有所控制。</p>\r\n					<p>据东方油气网监测，从去年第四季度至今半年多的时间里，在供求关系及竞争格局的作用下，只要没有调价预期干扰，实际批发价远远达不到规定的批发最高限价，基本呈现着与出厂价一致的“厂批同价”的实际批发价格局。</p>\r\n				</div>'),
(2, '联系我们', '', '<div class="contLeft">\n					<ul style="margin:11px 0 0 13px;">\n						<li class="left">\n							<span style="color:#3366cc;">联系我们</span>\n							<span style="color:#999;">Contact us</span>\n						</li>\n						<li class="right"></li>\n					</ul>\n					<p style="margin-top:8px;">地　址：广东省广州市天河100号</p>\n					<p>联系人：乐 可</p>\n					<p>移动电话：13658888888</p>\n					<p>固定电话：020-1234567</p>\n					<p>传　真：020-1234567</p>\n					<div class="clear"></div>\n					<ul style="margin:21px 0 0 13px;">\n						<li class="left">\n							<span style="color:#3366cc;">我的位置</span>\n							<span style="color:#999;">Maps</span>\n						</li>\n						<li class="right" style="border-top:1px solid white;"></li>\n					</ul>\n					<img src="images/contact-content-map.png" style="margin:8px 0 0 13px;">\n				</div>');

-- --------------------------------------------------------

--
-- 表的结构 `jl_friend`
--

CREATE TABLE IF NOT EXISTS `jl_friend` (
  `friend_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '友链ID',
  `friend_name` varchar(100) NOT NULL COMMENT '友链名称',
  `friend_link` tinytext NOT NULL COMMENT '友链链接',
  PRIMARY KEY (`friend_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `jl_friend`
--

INSERT INTO `jl_friend` (`friend_id`, `friend_name`, `friend_link`) VALUES
(1, '绿叶学习网1', 'http://baidu.com'),
(2, '绿叶学习网', 'http://baidu.com');

-- --------------------------------------------------------

--
-- 表的结构 `jl_meg`
--

CREATE TABLE IF NOT EXISTS `jl_meg` (
  `meg_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '留言ID',
  `meg_name` tinytext NOT NULL COMMENT '留言名称',
  `meg_content` text NOT NULL COMMENT '留言内容',
  PRIMARY KEY (`meg_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- 转存表中的数据 `jl_meg`
--

INSERT INTO `jl_meg` (`meg_id`, `meg_name`, `meg_content`) VALUES
(5, 'dasd ', 'dsad'),
(6, 'Jeffery', '但是大傻逼就');

-- --------------------------------------------------------

--
-- 表的结构 `jl_nav`
--

CREATE TABLE IF NOT EXISTS `jl_nav` (
  `nav_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '导航ID',
  `nav_name` varchar(100) NOT NULL COMMENT '导航名称',
  `nav_link` tinytext NOT NULL COMMENT '导航链接',
  `nav_order` int(11) NOT NULL COMMENT '导航排序',
  PRIMARY KEY (`nav_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `jl_nav`
--

INSERT INTO `jl_nav` (`nav_id`, `nav_name`, `nav_link`, `nav_order`) VALUES
(1, '首页', 'index.php', 0),
(2, '公司简介', 'about_us.php', 0),
(3, '产品展示', 'product.php', 0),
(4, '行业新闻', 'knowledge.php', 0),
(5, '客户留言', 'gbook.php', 0),
(6, '联系我们', 'contact.php', 0);

-- --------------------------------------------------------

--
-- 表的结构 `jl_news`
--

CREATE TABLE IF NOT EXISTS `jl_news` (
  `news_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '新闻ID',
  `news_name` varchar(100) NOT NULL COMMENT '新闻名称',
  `news_link` varchar(100) NOT NULL COMMENT '新闻链接',
  `news_description` text NOT NULL COMMENT '新闻内容',
  `news_time` int(11) NOT NULL COMMENT '新闻发布时间',
  PRIMARY KEY (`news_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

--
-- 转存表中的数据 `jl_news`
--

INSERT INTO `jl_news` (`news_id`, `news_name`, `news_link`, `news_description`, `news_time`) VALUES
(1, '哈哈打算打算', 'http://baidu.com', '这是一个新闻', 1442448000),
(18, '祝贺公司网站正式上线', 'baidu.com', '祝贺公司网站正式上线祝贺公司网站正式上线', 0),
(8, 'dsads', 'asdasd', 'dasddsad', 1441324800),
(9, 'dsadasd', 'ddasda', 'asdas', 0),
(10, 'dasdas', 'dasdas', 'dasd', 0),
(11, 'dsadasdas', 'dasdas', 'dasdas', 0),
(12, 'dasdas', 'sa', 'sad', 0),
(13, 'asda', 'sdasd', 'das', 0),
(14, 'asd', 'asdadd', 'asdasd', 0),
(15, 'dasdasdas', 'asdas', 'sd', 0),
(16, 'dsadadadd', 'dsad', 'das', 0),
(17, 'dsadadasaas', 'asdasd', 'asdsad', 0),
(19, '禁止保温材料现场调配 保证节能建材真正', 'baidu.com', '禁止保温材料现场调配 保证节能建材真正禁止保温材料现场调配 保证节能建材真正', 0),
(20, '节能65%烧结页岩空心砖面世', 'http:baidu.com', '节能65%烧结页岩空心砖面世节能65%烧结页岩空心砖面世', 0),
(21, '新到璃心玻璃棉管 欢饮订购', 'bdiu', '新到璃心玻璃棉管 欢饮订购新到璃心玻璃棉管 欢饮订购', 0),
(22, '祝贺公司网站正式上', 'sadsa', '祝贺公司网站正式上祝贺公司网站正式上', 0),
(23, 'HEHHEE', 'http://baidu.com', '这是测试版1', 0);

-- --------------------------------------------------------

--
-- 表的结构 `jl_notice`
--

CREATE TABLE IF NOT EXISTS `jl_notice` (
  `notice_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '通知ID',
  `notice_name` tinytext NOT NULL COMMENT '通知名称',
  `notice_content` tinytext NOT NULL COMMENT '通知内容',
  `notice_time` int(10) unsigned NOT NULL COMMENT '发布时间',
  PRIMARY KEY (`notice_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `jl_notice`
--

INSERT INTO `jl_notice` (`notice_id`, `notice_name`, `notice_content`, `notice_time`) VALUES
(1, 'dsad', 'sadsada', 1441231200),
(2, 'dsad', 'sadsada', 1441231200),
(3, 'asddsad', 'dsa', 0);

-- --------------------------------------------------------

--
-- 表的结构 `jl_option`
--

CREATE TABLE IF NOT EXISTS `jl_option` (
  `option_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '设置ID',
  `keyword` text NOT NULL COMMENT '关键字',
  `description` text NOT NULL COMMENT '网站描述',
  `address` text NOT NULL COMMENT '联系地址',
  `contact` text NOT NULL COMMENT '联系方式',
  `copyright` text NOT NULL COMMENT '版权',
  PRIMARY KEY (`option_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `jl_option`
--

INSERT INTO `jl_option` (`option_id`, `keyword`, `description`, `address`, `contact`, `copyright`) VALUES
(1, '公司,前身,是金,能保,能保,能保,能保,能保', '我公司前身是金能保温材料经营部，因扩大经营规模，于2009年3月变更为金陵贸易有限公司。1994年开始从事保温、保冷、吸音、耐火、化工、建材等产品的经营贸易', '广东省广州市天河100号', '联系人：乐 可　移动电话：13658888888　固定电话：020-1234567　传真：020-1234567', 'Copyright @ 2009 金陵贸易有限公司 版权所有 粤ICP备000000号');

-- --------------------------------------------------------

--
-- 表的结构 `jl_products`
--

CREATE TABLE IF NOT EXISTS `jl_products` (
  `products_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '产品编号',
  `products_name` varchar(100) NOT NULL COMMENT '产品名称',
  `products_img` tinytext NOT NULL COMMENT '产品图像',
  PRIMARY KEY (`products_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- 转存表中的数据 `jl_products`
--

INSERT INTO `jl_products` (`products_id`, `products_name`, `products_img`) VALUES
(2, 'Jeffery', '2.png'),
(3, '计算机系', '3.png'),
(4, 'Tone', 'ad-two.png'),
(5, 'dasdsad', 'article_list_center-top.png'),
(6, 'dsadsa', '3.png'),
(7, 'dsad', 'ad.png'),
(8, 'sdadsad', 'bg-product_list.png'),
(9, 'dsadada', '3.png'),
(10, 'dsadadad', '2.png'),
(11, 'dsadas', '2.png'),
(12, 'dsadadasa', 'ad-one.png'),
(13, 'dsadadadd', 'ad.png'),
(14, 'dsadadasa', '1.png'),
(15, '卢慧君', 'about_us-contLeft-img.png');

-- --------------------------------------------------------

--
-- 表的结构 `wd_ad`
--

CREATE TABLE IF NOT EXISTS `wd_ad` (
  `ad_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '广告ID',
  `ad_title` varchar(100) NOT NULL COMMENT '广告名称',
  `ad_description` text NOT NULL COMMENT '广告描述',
  `ad_links` varchar(100) NOT NULL COMMENT '广告链接',
  `ad_img_url` varchar(100) NOT NULL COMMENT '广告图片路径',
  `ad_add_time` int(11) NOT NULL COMMENT '广告添加时间',
  PRIMARY KEY (`ad_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `wd_ad`
--

INSERT INTO `wd_ad` (`ad_id`, `ad_title`, `ad_description`, `ad_links`, `ad_img_url`, `ad_add_time`) VALUES
(5, 'wengdo1', '文豆集团1', 'http://wengdo.cn', '1-140R1093501M6.gif', 1441404000),
(4, 'wengdo', '文豆集团哈', 'http://wengdo.com', '1-140Q41544230-L.gif', 1441922400),
(6, 'wengdo2', '呵呵呵', 'http://zycsdn.com', '1-140Q41544230-L.gif', 1441317600),
(7, 'wengdo', '绿叶学习网', 'http://www.lvyestudent', 'ad.png', 1442534400);

-- --------------------------------------------------------

--
-- 表的结构 `wd_article`
--

CREATE TABLE IF NOT EXISTS `wd_article` (
  `article_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '文章编号',
  `article_title` varchar(100) NOT NULL COMMENT '文章标题',
  `article_author` varchar(100) NOT NULL COMMENT '文章作者',
  `article_time` int(10) unsigned NOT NULL COMMENT '文章发布时间',
  `article_click` int(10) unsigned NOT NULL COMMENT '文章点击数',
  `article_cate_id` int(11) unsigned NOT NULL COMMENT '文章分类ID（外键）',
  `article_links` varchar(100) NOT NULL COMMENT '文章链接',
  PRIMARY KEY (`article_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- 转存表中的数据 `wd_article`
--

INSERT INTO `wd_article` (`article_id`, `article_title`, `article_author`, `article_time`, `article_click`, `article_cate_id`, `article_links`) VALUES
(4, 'Jeffery的食物之一dasddsad', 'ddasd', 213123213, 0, 2, 'jeffery.com'),
(7, 'Jeffery的食物之死dasdsakjhdsa大师的撒', 'ddasd', 213123213, 0, 1, 'jeffery.comdsad'),
(8, 'Jeffery的食物之一', 'ddasd', 213123213, 0, 2, 'jeffery.com'),
(9, '天下啊', 'author ', 213123213, 0, 2, 'http://www.baidu.com'),
(10, 'Tone的天下', 'author', 213123213, 0, 2, 'http://zycsdn.cpm'),
(11, '温航的行走路', 'author', 213123213, 0, 1, 'http://baidu.cim'),
(12, '大师的撒旦', 'dsadas', 213123213, 0, 2, 'dsaddsa dsadsa'),
(13, 'dasd', 'sad', 213123213, 0, 2, 'sadsad'),
(14, 'd,hsakjdsa', 'dsadsa', 213123213, 0, 1, 'dasdasd');

-- --------------------------------------------------------

--
-- 表的结构 `wd_article_cate`
--

CREATE TABLE IF NOT EXISTS `wd_article_cate` (
  `article_cate_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '文章分类ID',
  `article_cate_name` varchar(50) NOT NULL COMMENT '文章分类名称',
  PRIMARY KEY (`article_cate_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `wd_article_cate`
--

INSERT INTO `wd_article_cate` (`article_cate_id`, `article_cate_name`) VALUES
(1, '通知'),
(2, '新闻');

-- --------------------------------------------------------

--
-- 表的结构 `wd_case`
--

CREATE TABLE IF NOT EXISTS `wd_case` (
  `case_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '案例ID',
  `case_title` varchar(100) NOT NULL COMMENT '案例标题',
  `case_link` varchar(100) NOT NULL COMMENT '案例链接',
  `case_add_time` int(10) unsigned NOT NULL COMMENT '案例发布时间',
  `case_img_url` varchar(100) NOT NULL COMMENT '案例图像链接',
  `case_description` tinytext NOT NULL COMMENT '案例描述',
  `case_cate_id` int(10) unsigned NOT NULL COMMENT '案例分类ID（外键）',
  PRIMARY KEY (`case_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `wd_case`
--

INSERT INTO `wd_case` (`case_id`, `case_title`, `case_link`, `case_add_time`, `case_img_url`, `case_description`, `case_cate_id`) VALUES
(1, 'Jeffery国际ddas第三本大师的萨达', 'www.baidu.comdsadsa', 1473804000, '1-140Q41646460-L.gif', '的撒旦撒旦的撒打算啊', 1),
(4, 'Jeffery国际ddas第三本大师', 'www.baidu.comdsadsa', 1473804000, '1-140923112141W4.jpg', '的撒旦撒旦的撒打算啊', 2),
(5, 'Jeffery国际ddas第三本大师', 'www.baidu.comdsadsa', 1473804000, '1-140923112141W4.jpg', '的撒旦撒旦的撒打算啊', 3),
(6, 'Jeffery国际ddas第三本大师', 'www.baidu.comdsadsa', 1473804000, '1-140923112141W4.jpg', '的撒旦撒旦的撒打算啊', 2),
(7, 'dsadkjslkakdsa', 'andklasjdias.com', 1441749600, '1-thumb.jpg', 'adjasdslkajdkla', 1),
(8, 'Jeffery的Case', 'http://www.baidu.com', 1441929600, '2.png', '呵呵', 1),
(9, 'Jeffery的Case', 'dsadsad', 1441670400, 'ad.png', 'sadsad', 2);

-- --------------------------------------------------------

--
-- 表的结构 `wd_case_cate`
--

CREATE TABLE IF NOT EXISTS `wd_case_cate` (
  `case_cate_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '案例分类ID',
  `case_cate_name` tinytext NOT NULL COMMENT '案例分类名称',
  PRIMARY KEY (`case_cate_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `wd_case_cate`
--

INSERT INTO `wd_case_cate` (`case_cate_id`, `case_cate_name`) VALUES
(1, '企业品牌网站'),
(2, '电子商务网站'),
(3, '门户型网站'),
(4, '管理系统网站'),
(5, '团购网站');

-- --------------------------------------------------------

--
-- 表的结构 `wd_contact`
--

CREATE TABLE IF NOT EXISTS `wd_contact` (
  `contact_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '联系我们ID',
  `contact_name` tinytext NOT NULL COMMENT '留言名称',
  `contact_email` varchar(100) NOT NULL COMMENT '留言电子邮件',
  `contact_meg_contact` text NOT NULL COMMENT '留言内容',
  `contact_time` int(10) unsigned NOT NULL COMMENT '留言时间',
  PRIMARY KEY (`contact_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `wd_contact`
--

INSERT INTO `wd_contact` (`contact_id`, `contact_name`, `contact_email`, `contact_meg_contact`, `contact_time`) VALUES
(1, 'dsad', 'sads', ' adsad', 0),
(2, 'Jeffery', '1345199080@qq.com', '呵呵呵 ', 0),
(3, 'Tony', '1345199080@qq.com', '呵呵哈哈，上的还是看见爱好就开始打回家看的话健康撒旦 ', 0),
(4, '计算机系', 'dsadas', ' 倒萨倒萨大', 0),
(5, 'dasdsad', 'dsad', ' sadsad', 0),
(6, 'dasd', 'sad', ' asdasd', 0);

-- --------------------------------------------------------

--
-- 表的结构 `wd_document`
--

CREATE TABLE IF NOT EXISTS `wd_document` (
  `document_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '单页ID',
  `document_title` tinytext NOT NULL COMMENT '单页标题',
  `document_content` text NOT NULL COMMENT '单页内容',
  `document_time` int(11) NOT NULL COMMENT '单页添加时间',
  PRIMARY KEY (`document_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `wd_document`
--

INSERT INTO `wd_document` (`document_id`, `document_title`, `document_content`, `document_time`) VALUES
(1, '了解文豆', '<div class="about">\n<div class="container">\n	<ol class="breadcrumb">\n  <li><a href="#">首页</a></li>\n  <li><a href="#">关于我们</a></li>\n  <li class="active">了解文豆</li>\n	</ol>\n	 <ul class="nav nav-pills nav-justified">\n		<li class="active"><a href="#tab1" data-toggle="tab">关于我们</a></li>\n		 <li class=""><a href="#tab2" data-toggle="tab">团队介绍</a></li>\n		 <li class=""><a href="#tab3" data-toggle="tab">我们的优势</a></li>\n		 <li class=""><a href="#tab4" data-toggle="tab">发展历程</a></li>\n	 </ul>\n	 <div class="about-img"><img src="images/about_img.gif" alt="" style="width:100%"></div>\n	 <div class="tab-content">\n	 <div class="tab-pane active" id="tab1">\n		<p>\n			文豆集团，是一家提供互联网服务的高科技集团公司，集策划、设计、前端优化、研发、测试、系统运维、网站推广、运营、团队外包及互联网人才培养为一体的成熟业务体系。总部位于广州市海珠区鹭江地铁旁。\n\n		</p>\n      <p> 文豆主要提供高品质网站建设方案，电子商务平台解决方案，移动端应用开发方案（基于Android、iOS APP及移动端网站），微应用、微商城、微官网、微互动营销解决方案，企业信息化解决方案（OA、CRM），以及PHP网站开发、Java开发、UI设计、淘宝美工人才培养服务，人才外包服务，高端IT人才猎头服务。\n		</p>\n		<p>\n		公司的运营理念是：\n		携手共进，共赢天下\n		以结果为导向。树立好工作目标，监督过程，实现理想效果。\n		打造一流的团队，创造一流的服务，成为一流的行业标志。\n		</p>\n		<p>\n		员工职业发展：\n		我们非常清楚职业发展计划对于每个员工的重要性。公司对人员的要求，更加看重心态，只要愿意成为文豆的一份子，公司都会让员工充分展示自己，发挥他们的潜力、才干和热情，在文豆走向职业的成功。\n		</p>\n		<p>\n		服务理念：\n		产品是核心，服务是灵魂，服务是命脉。\n		走在行业的前端，创造新的至高点。\n		</p>\n	 </div> \n	 <div class="tab-pane" id="tab2">\n		<p>\n			一个前进的时代,总有一种奋发向上的精神;\n		一个发展的企业,总有一种积极进取的凝聚力——那就是团队的力量。\n		事实告诉我们,一个企业,不仅要有强大的物质基础,更要有一个强大的团队力量。\n		<br>\n		这种力量源自理想、源自信仰、源自操守、源自品格,是一个企业战胜一切艰难险阻的强大动力。\n		文豆坚持把培育一支优秀的团队摆在重要位置,让文豆每个人自觉地与企业同呼吸,共命运,荣辱与共,同心同德,齐心协力,勇于进取,共同实现企业发展目。\n		<br>\n		文豆明确合理的企业目标是团队每个成员凝聚在一起的奋斗方向,在对目标认知与共识的基础上,鼓舞斗志,团结奋进,自觉为团队贡献力量,并把个体利益升华为团队利益,增强团队凝聚力。\n		企业通过企业文化的创造、认同、享用、继承和发展,完成个性目标与企业目标的融合过程,增强内部共性化,培养员工共同价值观,提升凝聚力。\n		<br>\n		团队精神的精髓是“协作“,而协作的基础是信任,而信任是团队乃至公司发展的前提,\n		文豆团队每一个成员将诚实、公开、一致、尊重、宽容五个方面互为一体,创造了一个相互信任的氛围,培养彼此之间的信任感。 个性创造奇迹,团队成就未来。有效地发挥团队精神,有助于企业集中人、财、物发挥集体效应,增强企业竞争力,使企业朝着更高、更远目标不断迈进。\n		<img src="images/1-140Z6005T3934.jpg" alt="" class="pull-center img-responsive">\n		</p>\n	 </div> \n	 <div class="tab-pane" id="tab3">\n		<p>\n		我们擅长项目开发、产品网络推广、企业品牌传播、事件营销，注重传播源身份、角度、品牌和互动的效果营销团队。性价比高，策划准，效果好。\n		</p>\n<p>洞察客户需求，策划相应解决方案及创新建议。是整个项目的执行根基和指南。\n站在客户的角度，倾听并真正理解客户需求的变化，及时加以应对。这会让项目进度更加顺利。\n强调项目经理和客户的全程沟通，重视项目沟通会，关键节点可安排工作人员驻扎客户公司现场，以便高效、准确地解决关键问题。</p>\n<p>\n当客户需求和公司既定流程有所冲突，根据实际情况协调安排公司相关部门配合，急客户之所需。 在项目执行过程中，有一套专业科学的质量保障系统及规范。配置专职专人质量控制人员，对各个环节进行及时检查、测试及纠正。\n欲善其事，必先利其器。文豆有一套合理的奖惩制度，保障和调动项目组成员的积极性。\n</p>\n	 </div>\n	  <div class="tab-pane" id="tab4">\n		<p>\n		</p><p>&gt;2015年2月，文豆集团，深圳总部正式成立，开始运营\n</p><p>&gt;2015年1月，集团下的软件公司“广州爬山去软件科技有限公司”成立\n</p><p>&gt;2014年10月，文豆正式启动集团化的运营模式\n</p><p>&gt;2014年7月文豆网络-番禺技术培训中心成立，为番禺区的IT爱好者提供专业的岗前培训\n</p><p>&gt;2014年6月文豆网络-广州大学城技术培训中心成立，为大学城附近的学子提供专业的岗前培训\n</p><p>&gt;2013年12月文豆电商学院成立，为广大电商企业及商家提供电商人才培养服务\n</p><p>&gt;2013年5月技术研发部研发的 WDCRM（文豆客户关系管理系统）1.0版本上线，为企业信息化建设提供专业的客户关系管理解决方案服务\n</p><p>&gt;2013年1月技术研发部研发的分推客云平台上线，为广大中小企业提供基于微信的微网站，微商城等微应用服务\n</p><p>&gt;2012年6月ACI正式授权文豆为ACI认证培训考试中心\n</p><p>&gt;2012年4月技术研发部研发的PHP必答网上线，为PHP爱好者提供免费的技术问答服务\n</p><p>&gt;2012年3月技术研发部研发的PHP资讯网上线，为PHP爱好者提供相关的资讯信息服务\n</p><p>&gt;2012年2月技术研发部研发的Web人才网上线，构建国内最专业的Web人才求职招聘平台\n</p><p>&gt;2011年11月与上海商派网络科技有限公司签订合作成为知识供应商，为其客户培养电商技术人才\n</p><p>&gt;2010年6月技术研发部研发的ee72源码商城上线，为广大程序员提供源码买卖交易服务平台\n</p><p>&gt;2010年3月技术研发部研发的1.0研发完成，为各大企业提供高端的网站建设实施方案，从策划，设计，开发，营销一体化的解决方案\n</p><p>&gt;2010年2月与南方医科大学的医学职业技术学院合作创建大学生校园实训中心，同时成立培训部，同时技术研发部结合实际开发要</p><p>&gt;求研发出了自己的课程体系，开始给员工及客户企业做岗前培训\n</p><p>&gt;2009年12月创建文豆网络，开始为企业提供互联网解决方案\n		</p>\n	 </div>\n	</div>\n</div>\n</div>', 132132131),
(2, 'CEO致辞', '<div class="col-md-7">\n				 <h3>CEO致词</h3>\n				 <div class="row">\n					 <div class="col-md-5">	\n					 	<img src="images/ceo-per.jpg" alt="" style="width:100%">\n					 </div>\n					 <div class="col-md-7">\n					 	<h4>客户，你好！</h4>\n					 	<p style="font-size:16px;">我们公司是一家领先的技术和诀窍的行业领导者 该公司的一名代表.\n\n	从过去几年的努力和错误,我们企业通过客人们一起成长。相关行业的竞争越来越激化的 情况下,首先想到顾客,xx技术为基础,推出xx服务商用化,并成功通信行业的视线。\n\n	我们的企业领先的技术和经验,目前业界首位具有代表性的公司。“从过去几年的努力和 错误,我们企业通过客人们一起成长。相关行业的竞争越来越激化的情况下,首先想到顾 客,xx技术为基础,推出xx服务商用化,并成功通信行业的视线。.\n\n	今后我们企业进一步适当的21世纪成长为世界级企业顾客我报答大家的努力。\n\n	web(株)代表理事</p>\n					 	<img src="images/ceo-sign.jpg" alt="">\n					 <br><br>\n					<p> 公司名 浅田真央株式会社网站</p>\n					<p>	&gt; 住址 首尔市加纳区洞123蔓延</p>\n					<p>	&gt; 电话号码 01- 234-5678 (FAX : 01 234-5679)</p>\n					<p>	&gt; 董事长 洪吉童代表</p>\n					<p>	&gt; 设立日 1998年2月15日</p>\n					<p>	&gt; 资金 2亿韩元</p>\n					<p>	&gt; 职员数 150人</p>\n					<p>	&gt; 官方网站 http://www.asaweb.com</p>\n					<p>	&gt; 联系我们</p>\n					 </div>\n				</div>\n			</div>', 313213213),
(3, '加入我们', '<div class="col-md-7">\r\n				 <h3>加入我们</h3>\r\n				 <div class="row">\r\n					 <div class="col-md-5">\r\n					 	<h4><strong>工作流程</strong></h4>\r\n						<p><strong>采购：</strong>客户需要伸出援助之手，每当你使用一个代理来.</p>\r\n						<p><strong>搜集：</strong>客户需要伸出援助之手，每当你使用一个代理来.</p>\r\n						<p><strong>开发：</strong>客户需要伸出援助之手，每当你使用一个代理来.</p>\r\n						<p><strong>维护	：</strong>客户需要伸出援助之手，每当你使用一个代理来.</p>	\r\n					 </div>\r\n					 <div class="col-md-7">\r\n					 	<img src="images/invite-img.jpg" alt="" style="width:100%">\r\n					 </div>\r\n				</div>\r\n				<div class="row">\r\n					 <div class="col-md-12">\r\n						<h4><strong>申请注意选项</strong></h4>\r\n						<p>基于一个事实，即应用程序必须被正确地写入。如果发现虚假信息，通过甚至在事件发生后予以撤销</p>\r\n						<p>基于一个事实，即应用程序必须被正确地写入。如果发现虚假信息，通过甚至在事件发生后予以撤销</p>\r\n						<p>基于一个事实，即应用程序必须被正确地写入。如果发现虚假信息，通过甚至在事件发生后予以撤销</p>\r\n						<p>基于一个事实，即应用程序必须被正确地写入。如果发现虚假信息，通过甚至在事件发生后予以撤销</p>\r\n						<p>基于一个事实，即应用程序必须被正确地写入。如果发现虚假信息，通过甚至在事件发生后予以撤销</p>\r\n						<button class="btn btn-info" data-toggle="popover" data-placement="left" data-trigger="focus" data-content="申请职位表">下载申请表</button>\r\n					 </div>\r\n				</div>\r\n			</div>', 213213213);

-- --------------------------------------------------------

--
-- 表的结构 `wd_friend_links`
--

CREATE TABLE IF NOT EXISTS `wd_friend_links` (
  `friend_links_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '友情链接ID',
  `friend_title` tinytext NOT NULL COMMENT '友情链接名称',
  `friend_links` tinytext NOT NULL COMMENT '友情链接地址',
  `friend_description` tinytext NOT NULL COMMENT '友链描述',
  `friend_add_time` int(11) NOT NULL COMMENT '友链添加时间',
  PRIMARY KEY (`friend_links_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `wd_friend_links`
--

INSERT INTO `wd_friend_links` (`friend_links_id`, `friend_title`, `friend_links`, `friend_description`, `friend_add_time`) VALUES
(2, 'JefferyHHHE123213', 'http://zycsdn.com', 'dasd', 1441836000),
(3, '大师的网站', 'http://www.zycsdn.com', '这是一个关于大师级别的网站哈！', 1442440800);

-- --------------------------------------------------------

--
-- 表的结构 `wd_meg`
--

CREATE TABLE IF NOT EXISTS `wd_meg` (
  `meg_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '留言编号',
  `meg_author` tinytext NOT NULL COMMENT '留言者',
  `meg_email` varchar(100) NOT NULL COMMENT '留言电子邮件',
  `meg_content` text NOT NULL COMMENT '留言内容',
  `meg_register_id` int(10) unsigned NOT NULL COMMENT '留言是否注册了（外键）',
  `meg_checked` int(1) unsigned NOT NULL COMMENT '留言审核',
  `meg_time` int(10) unsigned NOT NULL COMMENT '留言时间',
  PRIMARY KEY (`meg_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `wd_meg`
--

INSERT INTO `wd_meg` (`meg_id`, `meg_author`, `meg_email`, `meg_content`, `meg_register_id`, `meg_checked`, `meg_time`) VALUES
(2, 'Jeffery', '13@qq.com', '123213', 0, 0, 1441749600),
(3, '13', '12312312312', '3123', 0, 0, 0),
(4, 'Moneny', '1345199080@qq.com', 'http://www.baidu.com', 0, 0, 0),
(5, 'Jeffery', '123123@qq.com', '的撒北京的摩诃萨节目的挥洒接口和大家卡圣诞节快撒很健康的挥洒框架回家快点撒和健康的挥洒极客获得健康哈萨克结婚登记卡萨很健康和框架的撒谎就看到挥洒接口和大家撒萨dsa爱上', 0, 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `wd_nav`
--

CREATE TABLE IF NOT EXISTS `wd_nav` (
  `nav_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '一级菜单ID',
  `nav_name` varchar(25) NOT NULL COMMENT '导航名称',
  `nav_pid` int(11) NOT NULL COMMENT '父类(层级导航)ID',
  `nav_links` varchar(100) NOT NULL COMMENT '导航链接',
  `is_del` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '是否删除',
  PRIMARY KEY (`nav_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- 转存表中的数据 `wd_nav`
--

INSERT INTO `wd_nav` (`nav_id`, `nav_name`, `nav_pid`, `nav_links`, `is_del`) VALUES
(1, '关于我们', 0, '', 0),
(2, '案例展示', 0, '', 0),
(3, '客户留言', 0, '', 0),
(4, '联系我们', 0, '', 0),
(5, '合作伙伴', 0, '', 0),
(6, '了解文豆', 1, 'about.php', 0),
(7, 'CEO致辞', 1, 'ceo-zici.php', 0),
(8, '加入我们', 1, 'invite-job.php', 0),
(9, '公司新闻', 1, 'news.php', 0),
(10, '案例列表', 2, 'cases.php', 0),
(11, '留言列表', 3, 'guestbook.php', 0),
(12, '公司联系', 4, 'contact.php', 0),
(13, '小伙伴', 5, 'partners.php', 0);

-- --------------------------------------------------------

--
-- 表的结构 `wd_option`
--

CREATE TABLE IF NOT EXISTS `wd_option` (
  `option_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '网站设置ID',
  `option_key` text NOT NULL COMMENT '网站设置关键字',
  `option_description` text NOT NULL COMMENT '网站设置描述',
  `contact` tinytext NOT NULL COMMENT '联系方式',
  `copyright` tinytext NOT NULL COMMENT '版权信息',
  `option_address` text NOT NULL COMMENT '公司地址',
  PRIMARY KEY (`option_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `wd_option`
--

INSERT INTO `wd_option` (`option_id`, `option_key`, `option_description`, `contact`, `copyright`, `option_address`) VALUES
(1, '文豆,wengdo,文豆公司,php,html,css,js,jq,PHP开发培训班即将开始dasdsaviodsahgioudpohusad', '文豆集团是一家提供互联网服务的高科技集团公司，集策划、设计、前端优化sdadsad、研发、测试、系统运维、网站推广、运营、团队外包及互联网人才培养为一体的成熟业务体系； 主要提供高品质建设方案，移动端应用开发方案，微应用、微商城、微官网、微互动营销解决方案，企业信息化解决方案，以及PHP网站开发、Java开发、UI设计、淘宝美工人才培养服务，人才外包服务，高端IT人才猎头服务。', '广州：400-889-7654 \r\n深圳：0755-66691037dsad\r\n广州：400-889-7654 \r\n广州：400-889-7654 ', 'Copyright 2009-2015 ,All Rights Reserved wengdosdsadsa', '广州总部：广州海珠区广州大道南448号财智大厦28楼\r\n深圳总部：深圳福田区福华路322号文蔚大厦4楼\r\n广州番禺分部：广州市番禺区市桥光明北路12号锦绣华庭三座404\r\n广州增城分部：广州增城区荔城花园东门32号\r\n广州大学城分部：广州大学城中七路大学时光首层\r\n广州白云分部：广州市白云区从云路839号利都商务中心B911\r\n惠州分部：惠州市惠城区江北三新南路3号名流公馆10层05室\r\n佛山分部:佛山市南海区桂城南新一路16号首层\r\n东莞分部：东莞市莞城区汇峰中心E区1002室\r\n肇庆分部：肇庆市端州区端州五路18号大楼四楼长江教育(市人才大厦前)\r\n集团广告创意部：广州市荔湾区芳村培真路2号之2鹤展创意园A栋2楼');

-- --------------------------------------------------------

--
-- 表的结构 `wd_personal`
--

CREATE TABLE IF NOT EXISTS `wd_personal` (
  `personal_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '个人资料ID',
  `personal_myphoto` blob NOT NULL COMMENT '个人资料相片',
  `personal_name` tinytext NOT NULL COMMENT '个人资料姓名',
  `personal_email` varchar(100) NOT NULL COMMENT '个人资料电子邮件',
  `personal_company` tinytext NOT NULL COMMENT '个人资料公司名称',
  `personal_job` tinytext NOT NULL COMMENT '个人资料职业',
  PRIMARY KEY (`personal_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `wd_register`
--

CREATE TABLE IF NOT EXISTS `wd_register` (
  `register_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '注册ID',
  `register_name` tinytext NOT NULL COMMENT '注册名称',
  `register_password` varchar(25) NOT NULL COMMENT '注册密码',
  `register_email` varchar(100) NOT NULL COMMENT '注册的电子邮件',
  `register_gender` int(1) unsigned NOT NULL COMMENT '注册的性别',
  `register_per_products` text NOT NULL COMMENT '注册的个人介绍',
  `register_add_time` int(11) NOT NULL COMMENT '注册添加时间',
  `is_vip` int(10) unsigned NOT NULL COMMENT '是否是会员',
  PRIMARY KEY (`register_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- 转存表中的数据 `wd_register`
--

INSERT INTO `wd_register` (`register_id`, `register_name`, `register_password`, `register_email`, `register_gender`, `register_per_products`, `register_add_time`, `is_vip`) VALUES
(13, 'JefferyTone', '123@qq.com', '123@qq.com', 0, '呵呵', 0, 0),
(14, 'dsa', 'dsadsad', '阿斯顿撒大大', 1, 'dsadsadsadsad', 1443225600, 0),
(15, 'dsasad', 'sadas', 'dsad', 1, 'asdasd', 1442620800, 0),
(16, 'dsadd', 'asdas', 'dasdas', 1, 'dasdasd', 1442534400, 0),
(17, 'asd', 'asd', 'sadasdas', 1, 'dasd', 1443139200, 0),
(18, 'saddasdsad', 'sadasd', 'sads', 1, 'dasda', 1443052800, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
