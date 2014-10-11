-- phpMyAdmin SQL Dump
-- version 4.2.3
-- http://www.phpmyadmin.net
--
-- 主機: localhost
-- 產生時間： 2014 年 10 月 11 日 05:15
-- 伺服器版本: 5.6.10
-- PHP 版本： 5.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 資料庫： `gw2pins`
--

-- --------------------------------------------------------

--
-- 資料表結構 `pins_user`
--

DROP TABLE IF EXISTS `pins_user`;
CREATE TABLE IF NOT EXISTS `pins_user` (
`row_id` int(11) NOT NULL,
  `account` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nickname` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `intro` text COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `created_date` datetime NOT NULL,
  `game_id` varchar(15) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 資料表結構 `pins_user_level`
--

DROP TABLE IF EXISTS `pins_user_level`;
CREATE TABLE IF NOT EXISTS `pins_user_level` (
`row_id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL COMMENT '會員帳號',
  `level` tinyint(3) unsigned NOT NULL COMMENT '等級',
  `title` varchar(60) COLLATE utf8_unicode_ci NOT NULL COMMENT '稱號',
  `status` tinyint(3) unsigned NOT NULL COMMENT '申請狀態',
  `modify` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '操作帳號',
  `modify_date` datetime DEFAULT NULL COMMENT '更新時間'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `pins_user`
--
ALTER TABLE `pins_user`
 ADD PRIMARY KEY (`row_id`), ADD UNIQUE KEY `account` (`account`);

--
-- 資料表索引 `pins_user_level`
--
ALTER TABLE `pins_user_level`
 ADD PRIMARY KEY (`row_id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `pins_user`
--
ALTER TABLE `pins_user`
MODIFY `row_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- 使用資料表 AUTO_INCREMENT `pins_user_level`
--
ALTER TABLE `pins_user_level`
MODIFY `row_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
