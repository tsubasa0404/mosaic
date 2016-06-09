-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016 年 2 朁E16 日 08:45
-- サーバのバージョン： 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mosaic_dev`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `expense_items`
--

CREATE TABLE IF NOT EXISTS `expense_items` (
`id` int(11) NOT NULL,
  `item` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `expense_items`
--

INSERT INTO `expense_items` (`id`, `item`) VALUES
(1, 'house rent'),
(2, 'office supplies'),
(3, 'daily necessities'),
(4, 'food'),
(5, 'job posting'),
(6, 'lodging'),
(7, 'entertainment'),
(8, 'transportation'),
(9, 'extraordinary loss'),
(10, 'education'),
(11, 'communications'),
(12, 'administration'),
(13, 'exercise'),
(14, 'donation'),
(15, 'internet'),
(16, 'exchange'),
(17, 'electricity'),
(18, 'water bill'),
(19, 'salary'),
(20, 'welfare'),
(21, 'table money'),
(22, 'others');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `expense_items`
--
ALTER TABLE `expense_items`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `expense_items`
--
ALTER TABLE `expense_items`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
