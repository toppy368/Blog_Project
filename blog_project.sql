-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 2015 �?05 ??26 ??17:20
-- 伺服器版本: 5.6.24
-- PHP 版本： 5.6.8
-- 授權：GNU GENERAL PUBLIC LICENSE Version 2
-- 授權檔：LICENSE.txt

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 資料庫： `blog_project`
--

-- --------------------------------------------------------

--
-- 資料表結構 `userdata`
--

CREATE TABLE IF NOT EXISTS `userdata` (
  `uid` int(11) NOT NULL,
  `account` char(15) COLLATE utf8_unicode_ci NOT NULL,
  `password` varbinary(255) NOT NULL,
  `rtime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `userdata`
--

INSERT INTO `userdata` (`uid`, `account`, `password`, `rtime`) VALUES
(0, 'test', 0x74657374, '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
