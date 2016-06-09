-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- ホスト: mysql101.phy.lolipop.jp
-- 生成時間: 2015 年 8 月 14 日 08:35
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
-- テーブルの構造 `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_role_id` int(11) NOT NULL,
  `user_img` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username_UNIQUE` (`username`),
  KEY `user_role_id` (`user_role_id`),
  KEY `employee_id` (`employee_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=18 ;

--
-- テーブルのデータをダンプしています `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `user_role_id`, `user_img`, `employee_id`, `created`, `modified`) VALUES
(1, '000sorya', '271b157cc48af2cd67d2b1ffab4007cd5a5fa80b', 1, '000sorya.png', 1, '2015-08-13 16:55:00', '2015-08-13 16:55:00'),
(2, '001pidoar', 'b7bb86c6b737ce97563e496afa2d19ead4ba48d2', 2, '001pidoar.png', 2, '2015-08-13 17:09:43', '2015-08-13 17:09:43'),
(11, '002nang', '14296f0f02d4816cccd66a4c9b38786bdea1441d', 4, '002nang.png', 3, '2015-08-14 06:25:29', '2015-08-14 06:25:29'),
(12, '004liseak', '90369b2efd8b13d2de7a07af16d5419b0d231103', 4, '004liseak.png', 4, '2015-08-14 06:26:20', '2015-08-14 06:26:20'),
(13, '005sokea', '5492dd704c35a0e704d43d9b5508123a2c52565b', 4, '005sokea.png', 5, '2015-08-14 06:28:04', '2015-08-14 06:28:04'),
(14, '006smey', 'd04731410b58f69bbe2a231e429ae995f4e5c934', 4, '006smey.png', 6, '2015-08-14 06:28:34', '2015-08-14 06:28:34'),
(15, '007sovan', '216c623267b6b4c920b87ea79f376f4974f35aa7', 4, '007sovan.png', 7, '2015-08-14 06:29:03', '2015-08-14 06:29:03'),
(16, '008chhunlay', 'f9233c5fef15aa09611f9b57aa539961f167a48d', 4, '008chhunlay.png', 8, '2015-08-14 06:29:43', '2015-08-14 06:29:43'),
(17, '010seyma', '7a84e56bc78658f37da71e804601a7be615e9a9c', 4, '010seyma.png', 10, '2015-08-14 06:30:11', '2015-08-14 06:30:11');

--
-- ダンプしたテーブルの制約
--

--
-- テーブルの制約 `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `user_employee` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `user_role_id` FOREIGN KEY (`user_role_id`) REFERENCES `user_roles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
