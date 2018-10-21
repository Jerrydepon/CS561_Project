-- phpMyAdmin SQL Dump
-- version 2.11.9.4
-- http://www.phpmyadmin.net
--
-- 主機: oniddb
-- 建立日期: Oct 21, 2018, 03:48 PM
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
-- 資料表格式： `login_library`
--

CREATE TABLE IF NOT EXISTS `login_library` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_uid` varchar(256) NOT NULL,
  `user_pwd` varchar(256) NOT NULL,
  UNIQUE KEY `user_pwd` (`user_pwd`),
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- 列出以下資料庫的數據： `login_library`
--

INSERT INTO `login_library` (`user_id`, `user_uid`, `user_pwd`) VALUES
(11, '123123123', '11111'),
(10, '123123', '123123'),
(2, 'jerry', 'kid'),
(1, 'ray', 'ray');
