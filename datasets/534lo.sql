-- phpMyAdmin SQL Dump
-- version 2.11.9.4
-- http://www.phpmyadmin.net
--
-- 主機: oniddb
-- 建立日期: Oct 19, 2018, 05:00 PM
-- 伺服器版本: 5.5.58
-- PHP 版本: 5.2.6-1+lenny16

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 資料庫: `liaoi-db`
--

-- --------------------------------------------------------

--
-- 資料表格式： `534lo`
--

CREATE TABLE IF NOT EXISTS `534lo` (
  `account` varchar(45) NOT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY (`account`),
  KEY `password` (`password`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 列出以下資料庫的數據： `534lo`
--

INSERT INTO `534lo` (`account`, `password`) VALUES
('betty', 'apple'),
('chi', 'chi'),
('webster', 'ellen'),
('jerry', 'kid'),
('ray', 'ray');
