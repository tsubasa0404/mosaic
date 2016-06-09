-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- ホスト: mysql101.phy.lolipop.jp
-- 生成時間: 2015 年 8 月 15 日 20:28
-- サーバのバージョン: 5.6.23
-- PHP のバージョン: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- データベース: `LAA0623458-mangetsu`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `employees`
--

CREATE TABLE IF NOT EXISTS `employees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `family_name` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `employee_no` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `sex` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `tel` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `occupation` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `career_id` int(11) NOT NULL,
  `employee_group_id` int(11) DEFAULT '0',
  `prof_img` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `terminated_date` date DEFAULT NULL,
  `memo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `employee_no_UNIQUE` (`employee_no`),
  KEY `career_id` (`career_id`),
  KEY `employee_group_id` (`employee_group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=14 ;

--
-- テーブルのデータをダンプしています `employees`
--

INSERT INTO `employees` (`id`, `first_name`, `family_name`, `employee_no`, `sex`, `birthday`, `tel`, `address`, `occupation`, `career_id`, `employee_group_id`, `prof_img`, `start_date`, `terminated_date`, `memo`, `created`, `modified`) VALUES
(1, 'Sorya', 'Hikichi', '000Sorya', '1', '1989-04-04', '015676792', '#41 St3 Sangkat Teuk Thla Sensok PP', 'CEO', 1, 1, '000sorya.png', '2014-10-20', NULL, 'NULL', '2014-10-20 00:00:00', '2015-08-13 00:00:00'),
(2, 'Pidoar', 'Soun', '001Pidoar', '1', '1988-10-10', '070485049', '', 'COO', 1, 1, '001pidoar.png', '2014-10-20', NULL, 'NULL', '2014-10-20 00:00:00', '2015-08-13 00:00:00'),
(3, 'Nang', 'Khut', '002Nang', '1', '1981-05-06', '087816484', '', 'regular', 2, 1, '002nang.png', '2014-12-01', NULL, 'NULL', '2014-12-01 00:00:00', '2015-08-13 00:00:00'),
(4, 'Liseak', 'Sovan', '004Liseak', '1', '1994-03-01', '0962557056', '', 'student', 2, 1, '004liseak.png', '2014-12-01', NULL, 'NULL', '2014-12-01 00:00:00', '2015-08-13 00:00:00'),
(5, 'Sokea', 'Seng', '005Sokea', '1', '1994-02-09', '02315648', '', 'student', 2, 1, '005sokea.png', '2014-12-01', NULL, 'NULL', '2014-12-01 00:00:00', '2015-08-13 00:00:00'),
(6, 'Smey', 'Reak', '006Smey', '1', '1993-03-01', '093791414', '', 'regular', 2, 1, '006smey.png', '2014-12-01', NULL, 'NULL', '2014-12-01 00:00:00', '2015-08-13 00:00:00'),
(7, 'Sovan', 'Moul', '007Sovan', '1', '1989-08-18', '098715613', '', 'regular', 2, 1, '007sovan.png', '2014-12-01', NULL, 'NULL', '2014-12-01 00:00:00', '2015-08-13 00:00:00'),
(8, 'Chhunlay', 'Ly', '008Chhunlay', '1', '1979-04-07', '0969999837', '', 'regular', 2, 1, '008chhunlay.png', '2014-12-05', NULL, 'NULL', '2014-12-05 00:00:00', '2015-08-13 00:00:00'),
(9, 'Tida', 'Som', '009Tida', '2', '1994-01-05', '0968736924', '', 'regular', 2, 1, '009tida.png', '2015-03-02', '2015-08-04', 'NULL', '2015-03-02 00:00:00', '2015-08-13 00:00:00'),
(10, 'Seyma', 'Chrun', '010Seyma', '2', '1993-04-09', '069296595', '', 'regular', 2, 1, '010seyma.png', '2015-03-02', NULL, 'NULL', '2015-03-02 00:00:00', '2015-08-13 00:00:00'),
(11, 'Khemra', 'Sok', '011Khemra', '2', '1989-09-15', '010658806', '', 'regular', 3, 0, '011khemra.png', '2015-08-03', NULL, '', '2015-08-14 11:54:27', '2015-08-14 11:54:27'),
(12, 'Sopheap', 'Sim', '012Sopheap', '1', '1984-04-27', '098233292', '', 'regular', 3, 0, '012sopheap.png', '2015-08-03', NULL, '', '2015-08-14 11:55:33', '2015-08-14 11:55:33'),
(13, 'Vesna', 'Un', '013Vesna', '1', '1991-01-17', '016208337', '', 'regular', 3, 0, '013vesna.png', '2015-08-10', NULL, '', '2015-08-14 11:56:18', '2015-08-14 11:56:18');

--
-- ダンプしたテーブルの制約
--

--
-- テーブルの制約 `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `career` FOREIGN KEY (`career_id`) REFERENCES `careers` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
