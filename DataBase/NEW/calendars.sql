-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2015 年 8 朁E13 日 12:01
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
-- テーブルの構造 `calendars`
--

CREATE TABLE IF NOT EXISTS `calendars` (
`id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `allday` tinyint(4) NOT NULL DEFAULT '1',
  `start` datetime NOT NULL,
  `day_type_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=78 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `calendars`
--

INSERT INTO `calendars` (`id`, `title`, `allday`, `start`, `day_type_id`) VALUES
(1, 'LabourDay', 1, '2015-05-01 00:00:00', 2),
(2, 'off', 1, '2015-05-31 00:00:00', 1),
(3, 'Childrenday', 1, '2015-06-01 00:00:00', 2),
(4, 'off', 1, '2015-06-07 00:00:00', 1),
(5, 'off', 1, '2015-06-13 00:00:00', 1),
(6, 'off', 1, '2015-06-14 00:00:00', 1),
(7, 'QueenBirthDay', 1, '2015-06-18 00:00:00', 2),
(8, 'off', 1, '2015-06-20 00:00:00', 1),
(9, 'off', 1, '2015-06-21 00:00:00', 1),
(10, 'of', 1, '2015-06-27 00:00:00', 1),
(11, 'off', 1, '2015-06-28 00:00:00', 1),
(12, 'off', 1, '2015-07-04 00:00:00', 1),
(13, 'off', 1, '2015-07-05 00:00:00', 1),
(14, 'off', 1, '2015-07-11 00:00:00', 1),
(15, 'off', 1, '2015-07-12 00:00:00', 1),
(16, 'off', 1, '2015-07-18 00:00:00', 1),
(17, 'off', 1, '2015-07-19 00:00:00', 1),
(18, 'off', 1, '2015-07-25 00:00:00', 1),
(19, 'off', 1, '2015-07-26 00:00:00', 1),
(20, 'off', 1, '2015-08-01 00:00:00', 1),
(21, 'off', 1, '2015-08-02 00:00:00', 1),
(22, 'off', 1, '2015-08-08 00:00:00', 1),
(23, 'off', 1, '2015-08-09 00:00:00', 1),
(24, 'off', 1, '2015-08-15 00:00:00', 1),
(25, 'off', 1, '2015-08-16 00:00:00', 1),
(26, 'off', 1, '2015-08-22 00:00:00', 1),
(27, 'off', 1, '2015-08-23 00:00:00', 1),
(28, 'off', 1, '2015-08-29 00:00:00', 1),
(29, 'off', 1, '2015-08-30 00:00:00', 1),
(30, 'off', 1, '2015-09-05 00:00:00', 1),
(31, 'off', 1, '2015-09-06 00:00:00', 1),
(32, 'off', 1, '2015-09-12 00:00:00', 1),
(33, 'off', 1, '2015-09-13 00:00:00', 1),
(34, 'off', 1, '2015-09-19 00:00:00', 1),
(35, 'off', 1, '2015-09-20 00:00:00', 1),
(36, 'ConstitutionDay', 1, '2015-09-24 00:00:00', 2),
(37, 'off', 1, '2015-09-26 00:00:00', 1),
(38, 'off', 1, '2015-09-27 00:00:00', 1),
(39, 'off', 1, '2015-10-04 00:00:00', 1),
(40, 'BonnPchumBen', 1, '2015-10-11 00:00:00', 2),
(41, 'BonnPchumBen', 1, '2015-10-12 00:00:00', 2),
(42, 'BonnPchumBen', 1, '2015-10-13 00:00:00', 2),
(43, '3FromDay3rd', 1, '2015-10-14 00:00:00', 3),
(44, '3FromDay10th', 1, '2015-10-16 00:00:00', 3),
(45, 'off', 1, '2015-10-17 00:00:00', 1),
(46, 'off', 1, '2015-10-18 00:00:00', 1),
(47, 'off', 1, '2015-10-24 00:00:00', 1),
(48, 'off', 1, '2015-10-25 00:00:00', 1),
(49, 'off', 1, '2015-11-01 00:00:00', 1),
(50, 'off', 1, '2015-11-08 00:00:00', 1),
(51, 'IndependenceDay', 1, '2015-11-09 00:00:00', 2),
(52, 'off', 1, '2015-11-15 00:00:00', 1),
(53, 'off', 1, '2015-11-22 00:00:00', 1),
(54, 'WaterFestival', 1, '2015-11-24 00:00:00', 2),
(55, 'WaterFestival', 1, '2015-11-25 00:00:00', 2),
(56, 'WaterFestival', 1, '2015-11-26 00:00:00', 2),
(57, 'off', 1, '2015-11-29 00:00:00', 1),
(58, 'off', 1, '2015-12-06 00:00:00', 1),
(59, 'InternationalHumanDay', 1, '2015-12-10 00:00:00', 2),
(60, 'off', 1, '2015-12-13 00:00:00', 1),
(61, 'off', 1, '2015-12-20 00:00:00', 1),
(62, 'off', 1, '2015-12-26 00:00:00', 1),
(63, 'off', 1, '2015-12-27 00:00:00', 1),
(64, 'FinishYearHoliday', 1, '2015-12-28 00:00:00', 2),
(65, 'FinishYearHoliday', 1, '2015-12-29 00:00:00', 2),
(66, 'FinishYearHoliday', 1, '2015-12-30 00:00:00', 2),
(67, 'FinishYearHoliday', 1, '2015-12-31 00:00:00', 2),
(68, 'off', 1, '2015-05-02 00:00:00', 1),
(69, 'off', 1, '2015-05-03 00:00:00', 1),
(70, 'off', 1, '2015-05-10 00:00:00', 1),
(71, 'KingBirthday', 1, '2015-05-13 00:00:00', 2),
(72, 'KingBirthday', 1, '2015-05-14 00:00:00', 2),
(73, 'KingBirthday', 1, '2015-05-15 00:00:00', 2),
(74, 'off', 1, '2015-05-16 00:00:00', 1),
(75, 'off', 1, '2015-05-17 00:00:00', 1),
(76, 'off', 1, '2015-05-24 00:00:00', 1),
(77, 'KingFatherCommemorationDay', 1, '2015-10-15 00:00:00', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calendars`
--
ALTER TABLE `calendars`
 ADD PRIMARY KEY (`id`), ADD KEY `day_type_id_idx` (`day_type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calendars`
--
ALTER TABLE `calendars`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=78;
--
-- ダンプしたテーブルの制約
--

--
-- テーブルの制約 `calendars`
--
ALTER TABLE `calendars`
ADD CONSTRAINT `day_type_id` FOREIGN KEY (`day_type_id`) REFERENCES `day_types` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
