-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2015 年 8 朁E13 日 12:07
-- サーバのバージョン： 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mosaicdb`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `mosaic_sizes`
--

CREATE TABLE IF NOT EXISTS `mosaic_sizes` (
`id` int(11) NOT NULL,
  `mosaic_size` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `note` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `mosaic_sizes`
--

INSERT INTO `mosaic_sizes` (`id`, `mosaic_size`, `note`, `created`, `modified`) VALUES
(1, 'normal', NULL, NULL, NULL),
(2, '-1', NULL, NULL, NULL),
(3, '-2', NULL, NULL, NULL),
(4, '+1', NULL, NULL, NULL),
(5, '+2', NULL, NULL, NULL),
(6, '-3', NULL, NULL, NULL),
(7, '+3', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mosaic_sizes`
--
ALTER TABLE `mosaic_sizes`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mosaic_sizes`
--
ALTER TABLE `mosaic_sizes`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
