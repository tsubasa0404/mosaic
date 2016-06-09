-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- ホスト: mysql101.phy.lolipop.jp
-- 生成時間: 2015 年 11 月 14 日 15:15
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
-- テーブルの構造 `acos`
--

CREATE TABLE IF NOT EXISTS `acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=125 ;

--
-- テーブルのデータをダンプしています `acos`
--

INSERT INTO `acos` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, NULL, NULL, 'controllers', 1, 64),
(3, 1, NULL, NULL, 'Pages', 2, 5),
(4, 3, NULL, NULL, 'display', 3, 4),
(5, 1, NULL, NULL, 'UserRoles', 6, 17),
(6, 5, NULL, NULL, 'index', 7, 8),
(7, 5, NULL, NULL, 'view', 9, 10),
(8, 5, NULL, NULL, 'add', 11, 12),
(9, 5, NULL, NULL, 'edit', 13, 14),
(10, 5, NULL, NULL, 'delete', 15, 16),
(12, 1, NULL, NULL, 'Users', 18, 41),
(13, 12, NULL, NULL, 'login', 19, 20),
(14, 12, NULL, NULL, 'logout', 21, 22),
(15, 12, NULL, NULL, 'index', 23, 24),
(16, 12, NULL, NULL, 'view', 25, 26),
(17, 12, NULL, NULL, 'add', 27, 28),
(18, 12, NULL, NULL, 'edit', 29, 30),
(19, 12, NULL, NULL, 'delete', 31, 32),
(21, 1, NULL, NULL, 'AclExtras', 42, 43),
(22, 1, NULL, NULL, 'DebugKit', 44, 51),
(23, 22, NULL, NULL, 'ToolbarAccess', 45, 50),
(24, 23, NULL, NULL, 'history_state', 46, 47),
(25, 23, NULL, NULL, 'sql_explain', 48, 49),
(26, 1, NULL, NULL, 'ArosAcos', 52, 63),
(27, 26, NULL, NULL, 'beforeFIlter', 53, 54),
(28, 26, NULL, NULL, 'index', 55, 56),
(29, 26, NULL, NULL, 'view', 57, 58),
(30, 26, NULL, NULL, 'add', 59, 60),
(31, 26, NULL, NULL, 'edit', 61, 62),
(32, 12, NULL, NULL, 'dashboard', 33, 34),
(33, 12, NULL, NULL, 'acl_add', 35, 36),
(34, 12, NULL, NULL, 'acl_edit', 37, 38),
(35, 12, NULL, NULL, 'register', 39, 40),
(36, NULL, NULL, NULL, 'controllers', 65, 242),
(37, 36, NULL, NULL, 'Ajax', 66, 69),
(38, 37, NULL, NULL, 'addClient', 67, 68),
(39, 36, NULL, NULL, 'Careers', 70, 81),
(40, 39, NULL, NULL, 'index', 71, 72),
(41, 39, NULL, NULL, 'view', 73, 74),
(42, 39, NULL, NULL, 'add', 75, 76),
(43, 39, NULL, NULL, 'edit', 77, 78),
(44, 39, NULL, NULL, 'delete', 79, 80),
(45, 36, NULL, NULL, 'Clients', 82, 93),
(46, 45, NULL, NULL, 'index', 83, 84),
(47, 45, NULL, NULL, 'view', 85, 86),
(48, 45, NULL, NULL, 'add', 87, 88),
(49, 45, NULL, NULL, 'edit', 89, 90),
(50, 45, NULL, NULL, 'delete', 91, 92),
(51, 36, NULL, NULL, 'EmployeeGroups', 94, 105),
(52, 51, NULL, NULL, 'index', 95, 96),
(53, 51, NULL, NULL, 'view', 97, 98),
(54, 51, NULL, NULL, 'add', 99, 100),
(55, 51, NULL, NULL, 'edit', 101, 102),
(56, 51, NULL, NULL, 'delete', 103, 104),
(57, 36, NULL, NULL, 'Employees', 106, 121),
(58, 57, NULL, NULL, 'team_members', 107, 108),
(59, 57, NULL, NULL, 'profile', 109, 110),
(60, 57, NULL, NULL, 'index', 111, 112),
(61, 57, NULL, NULL, 'view', 113, 114),
(62, 57, NULL, NULL, 'add', 115, 116),
(63, 57, NULL, NULL, 'edit', 117, 118),
(64, 57, NULL, NULL, 'delete', 119, 120),
(65, 36, NULL, NULL, 'GoalSettings', 122, 135),
(66, 65, NULL, NULL, 'index', 123, 124),
(67, 65, NULL, NULL, 'view', 125, 126),
(68, 65, NULL, NULL, 'add', 127, 128),
(69, 65, NULL, NULL, 'addIndivisual', 129, 130),
(70, 65, NULL, NULL, 'edit', 131, 132),
(71, 65, NULL, NULL, 'delete', 133, 134),
(72, 36, NULL, NULL, 'GoalTypes', 136, 147),
(73, 72, NULL, NULL, 'index', 137, 138),
(74, 72, NULL, NULL, 'view', 139, 140),
(75, 72, NULL, NULL, 'add', 141, 142),
(76, 72, NULL, NULL, 'edit', 143, 144),
(77, 72, NULL, NULL, 'delete', 145, 146),
(78, 36, NULL, NULL, 'MosaicSizes', 148, 159),
(79, 78, NULL, NULL, 'index', 149, 150),
(80, 78, NULL, NULL, 'view', 151, 152),
(81, 78, NULL, NULL, 'add', 153, 154),
(82, 78, NULL, NULL, 'edit', 155, 156),
(83, 78, NULL, NULL, 'delete', 157, 158),
(84, 36, NULL, NULL, 'MosaicTypes', 160, 171),
(85, 84, NULL, NULL, 'index', 161, 162),
(86, 84, NULL, NULL, 'view', 163, 164),
(87, 84, NULL, NULL, 'add', 165, 166),
(88, 84, NULL, NULL, 'edit', 167, 168),
(89, 84, NULL, NULL, 'delete', 169, 170),
(90, 36, NULL, NULL, 'Orders', 172, 187),
(91, 90, NULL, NULL, 'detail', 173, 174),
(92, 90, NULL, NULL, 'order_list', 175, 176),
(93, 90, NULL, NULL, 'index', 177, 178),
(94, 90, NULL, NULL, 'view', 179, 180),
(95, 90, NULL, NULL, 'add', 181, 182),
(96, 90, NULL, NULL, 'edit', 183, 184),
(97, 90, NULL, NULL, 'delete', 185, 186),
(98, 36, NULL, NULL, 'PayCutTypes', 188, 199),
(99, 98, NULL, NULL, 'index', 189, 190),
(100, 98, NULL, NULL, 'view', 191, 192),
(101, 98, NULL, NULL, 'add', 193, 194),
(102, 98, NULL, NULL, 'edit', 195, 196),
(103, 98, NULL, NULL, 'delete', 197, 198),
(104, 36, NULL, NULL, 'StatusTypes', 200, 211),
(105, 104, NULL, NULL, 'index', 201, 202),
(106, 104, NULL, NULL, 'view', 203, 204),
(107, 104, NULL, NULL, 'add', 205, 206),
(108, 104, NULL, NULL, 'edit', 207, 208),
(109, 104, NULL, NULL, 'delete', 209, 210),
(110, 36, NULL, NULL, 'TaskRecords', 212, 227),
(111, 110, NULL, NULL, 'team_achievements', 213, 214),
(112, 110, NULL, NULL, 'index', 215, 216),
(113, 110, NULL, NULL, 'view', 217, 218),
(114, 110, NULL, NULL, 'addAjax', 219, 220),
(115, 110, NULL, NULL, 'add', 221, 222),
(116, 110, NULL, NULL, 'edit', 223, 224),
(117, 110, NULL, NULL, 'delete', 225, 226),
(118, 36, NULL, NULL, 'TimeCards', 228, 241),
(119, 118, NULL, NULL, 'index', 229, 230),
(120, 118, NULL, NULL, 'view', 231, 232),
(121, 118, NULL, NULL, 'addAjax', 233, 234),
(122, 118, NULL, NULL, 'add', 235, 236),
(123, 118, NULL, NULL, 'edit', 237, 238),
(124, 118, NULL, NULL, 'delete', 239, 240);

-- --------------------------------------------------------

--
-- テーブルの構造 `aros`
--

CREATE TABLE IF NOT EXISTS `aros` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=32 ;

--
-- テーブルのデータをダンプしています `aros`
--

INSERT INTO `aros` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, 'UserRole', 1, NULL, 1, 6),
(2, NULL, 'UserRole', 2, NULL, 7, 14),
(3, NULL, 'UserRole', 3, NULL, 15, 20),
(4, NULL, 'UserRole', 4, NULL, 21, 50),
(5, NULL, 'UserRole', 5, NULL, 51, 56),
(6, NULL, 'UserRole', 6, NULL, 57, 62),
(7, 1, 'User', 1, NULL, 2, 3),
(8, 3, 'User', 2, NULL, 16, 17),
(9, 5, 'User', 3, NULL, 52, 53),
(10, 6, 'User', 4, NULL, 58, 59),
(11, 2, 'User', 5, NULL, 8, 9),
(12, 1, 'User', 9, NULL, 4, 5),
(13, 2, 'User', 10, NULL, 10, 11),
(14, 4, 'User', 11, NULL, 22, 23),
(15, 4, 'User', 12, NULL, 24, 25),
(16, 4, 'User', 13, NULL, 26, 27),
(17, 4, 'User', 14, NULL, 28, 29),
(18, 4, 'User', 15, NULL, 30, 31),
(19, 4, 'User', 16, NULL, 32, 33),
(20, 4, 'User', 17, NULL, 34, 35),
(21, 4, 'User', 19, NULL, 36, 37),
(22, 4, 'User', 20, NULL, 38, 39),
(23, 4, 'User', 21, NULL, 40, 41),
(24, 4, 'User', 22, NULL, 42, 43),
(25, 2, 'User', 23, NULL, 12, 13),
(26, 3, 'User', 24, NULL, 18, 19),
(27, 5, 'User', 25, NULL, 54, 55),
(28, 6, 'User', 26, NULL, 60, 61),
(29, 4, 'User', 1000, NULL, 44, 45),
(30, 4, 'User', 1001, NULL, 46, 47),
(31, 4, 'User', 1002, NULL, 48, 49);

-- --------------------------------------------------------

--
-- テーブルの構造 `aros_acos`
--

CREATE TABLE IF NOT EXISTS `aros_acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `aro_id` int(10) NOT NULL,
  `aco_id` int(10) NOT NULL,
  `_create` varchar(2) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `_read` varchar(2) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `_update` varchar(2) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `_delete` varchar(2) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `ARO_ACO_KEY` (`aro_id`,`aco_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- テーブルのデータをダンプしています `aros_acos`
--

INSERT INTO `aros_acos` (`id`, `aro_id`, `aco_id`, `_create`, `_read`, `_update`, `_delete`) VALUES
(1, 1, 1, '1', '1', '1', '1'),
(2, 2, 33, '-1', '-1', '-1', '-1'),
(3, 2, 34, '-1', '-1', '-1', '-1'),
(4, 2, 35, '-1', '-1', '-1', '-1'),
(5, 2, 18, '-1', '-1', '-1', '-1'),
(6, 2, 15, '-1', '-1', '-1', '-1'),
(7, 2, 12, '-1', '-1', '-1', '-1');

-- --------------------------------------------------------

--
-- テーブルの構造 `cake_sessions`
--

CREATE TABLE IF NOT EXISTS `cake_sessions` (
  `id` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `data` text COLLATE utf8_unicode_ci NOT NULL,
  `expires` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータをダンプしています `cake_sessions`
--

INSERT INTO `cake_sessions` (`id`, `data`, `expires`) VALUES
('00p8bk5e9o8thdnvi5qvt1c7u5', 'Config|a:3:{s:9:"userAgent";s:32:"a947f60b7c7be0f767611b0fd06abb9e";s:4:"time";i:1447637394;s:9:"countdown";i:10;}Auth|a:1:{s:4:"User";a:8:{s:2:"id";s:1:"4";s:8:"username";s:9:"004liseak";s:12:"user_role_id";s:1:"4";s:8:"user_img";s:13:"004liseak.png";s:11:"employee_id";s:1:"4";s:7:"created";s:19:"2015-08-14 06:26:20";s:8:"modified";s:19:"2015-08-14 06:26:20";s:8:"UserRole";a:4:{s:2:"id";s:1:"4";s:4:"role";s:8:"Employee";s:7:"created";s:19:"2015-07-23 10:12:38";s:8:"modified";s:19:"2015-07-23 10:12:38";}}}Message|a:1:{s:4:"auth";a:3:{s:7:"message";s:47:"You are not authorized to access that location.";s:7:"element";s:7:"default";s:6:"params";a:0:{}}}', 1447637394),
('19p7ahdibv8mmek9g0asbupis0', 'Config|a:3:{s:9:"userAgent";s:32:"936761e129351eaeb1f4ff0ce70c85f9";s:4:"time";i:1449657901;s:9:"countdown";i:10;}Message|a:1:{s:4:"auth";a:3:{s:7:"message";s:47:"You are not authorized to access that location.";s:7:"element";s:7:"default";s:6:"params";a:0:{}}}Auth|a:1:{s:4:"User";a:8:{s:2:"id";s:1:"2";s:8:"username";s:9:"001pidoar";s:12:"user_role_id";s:1:"2";s:8:"user_img";s:13:"001pidoar.png";s:11:"employee_id";s:1:"2";s:7:"created";s:19:"2015-08-14 12:58:43";s:8:"modified";s:19:"2015-08-14 12:58:43";s:8:"UserRole";a:4:{s:2:"id";s:1:"2";s:4:"role";s:16:"Mangetsu Manager";s:7:"created";s:19:"2015-07-23 10:12:26";s:8:"modified";s:19:"2015-07-23 10:12:26";}}}', 1449657901),
('279skkb6a2bepufmb3f12mbs01', 'Config|a:3:{s:9:"userAgent";s:32:"b68f07a57c5bb605151104211b8f0134";s:4:"time";i:1446535139;s:9:"countdown";i:10;}Message|a:1:{s:4:"auth";a:3:{s:7:"message";s:47:"You are not authorized to access that location.";s:7:"element";s:7:"default";s:6:"params";a:0:{}}}Auth|a:1:{s:4:"User";a:8:{s:2:"id";s:2:"17";s:8:"username";s:8:"010seyma";s:12:"user_role_id";s:1:"4";s:8:"user_img";s:12:"010seyma.png";s:11:"employee_id";s:2:"10";s:7:"created";s:19:"2015-08-14 06:30:11";s:8:"modified";s:19:"2015-08-14 06:30:11";s:8:"UserRole";a:4:{s:2:"id";s:1:"4";s:4:"role";s:8:"Employee";s:7:"created";s:19:"2015-07-23 10:12:38";s:8:"modified";s:19:"2015-07-23 10:12:38";}}}', 1446535139),
('2cs5oi31850mgr39be1sdsks83', 'Config|a:3:{s:9:"userAgent";s:32:"26a8f57923e4310e0b993d24c5e439e8";s:4:"time";i:1444715538;s:9:"countdown";i:10;}Message|a:1:{s:4:"auth";a:3:{s:7:"message";s:47:"You are not authorized to access that location.";s:7:"element";s:7:"default";s:6:"params";a:0:{}}}Auth|a:1:{s:8:"redirect";s:1:"/";}', 1444715538),
('2e87dn8gs67182v91na3r4j5r0', 'Config|a:3:{s:9:"userAgent";s:32:"01edd93c45b3648eebb2351f41f1d843";s:4:"time";i:1447391292;s:9:"countdown";i:10;}Message|a:1:{s:4:"auth";a:3:{s:7:"message";s:47:"You are not authorized to access that location.";s:7:"element";s:7:"default";s:6:"params";a:0:{}}}Auth|a:1:{s:4:"User";a:8:{s:2:"id";s:1:"7";s:8:"username";s:8:"007sovan";s:12:"user_role_id";s:1:"4";s:8:"user_img";s:12:"007sovan.png";s:11:"employee_id";s:1:"7";s:7:"created";s:19:"2015-08-14 06:29:03";s:8:"modified";s:19:"2015-08-14 06:29:03";s:8:"UserRole";a:4:{s:2:"id";s:1:"4";s:4:"role";s:8:"Employee";s:7:"created";s:19:"2015-07-23 10:12:38";s:8:"modified";s:19:"2015-07-23 10:12:38";}}}', 1447391293),
('310r3lf077v8vq43ugu4g1if43', 'Config|a:3:{s:9:"userAgent";s:32:"fbd9cf48eee16e99ea7b04355ae2d583";s:4:"time";i:1452657770;s:9:"countdown";i:10;}Message|a:1:{s:4:"auth";a:3:{s:7:"message";s:47:"You are not authorized to access that location.";s:7:"element";s:7:"default";s:6:"params";a:0:{}}}Auth|a:1:{s:4:"User";a:8:{s:2:"id";s:1:"2";s:8:"username";s:9:"001pidoar";s:12:"user_role_id";s:1:"2";s:8:"user_img";s:13:"001pidoar.png";s:11:"employee_id";s:1:"2";s:7:"created";s:19:"2015-08-14 12:58:43";s:8:"modified";s:19:"2015-08-14 12:58:43";s:8:"UserRole";a:4:{s:2:"id";s:1:"2";s:4:"role";s:16:"Mangetsu Manager";s:7:"created";s:19:"2015-07-23 10:12:26";s:8:"modified";s:19:"2015-07-23 10:12:26";}}}', 1452657770),
('38emtfo9a59scorsjjhrt9m4p7', 'Config|a:3:{s:9:"userAgent";s:32:"fb6073d78a611ac1b533615413a42e13";s:4:"time";i:1452497094;s:9:"countdown";i:10;}Message|a:1:{s:4:"auth";a:3:{s:7:"message";s:47:"You are not authorized to access that location.";s:7:"element";s:7:"default";s:6:"params";a:0:{}}}Auth|a:1:{s:4:"User";a:8:{s:2:"id";s:3:"999";s:8:"username";s:8:"gokuraku";s:12:"user_role_id";s:1:"3";s:8:"user_img";s:16:"default-user.png";s:11:"employee_id";N;s:7:"created";s:19:"2015-08-14 16:42:08";s:8:"modified";s:19:"2015-08-14 16:42:08";s:8:"UserRole";a:4:{s:2:"id";s:1:"3";s:4:"role";s:8:"Gokuraku";s:7:"created";s:19:"2015-07-23 10:12:32";s:8:"modified";s:19:"2015-07-23 10:12:32";}}}', 1452497094),
('3oo0q4fkt59g5ktv6c8p0fbp82', 'Config|a:3:{s:9:"userAgent";s:32:"892ac71069c574c29b2b2dd36cbf52ab";s:4:"time";i:1444922642;s:9:"countdown";i:10;}Message|a:1:{s:4:"auth";a:3:{s:7:"message";s:47:"You are not authorized to access that location.";s:7:"element";s:7:"default";s:6:"params";a:0:{}}}Auth|a:1:{s:4:"User";a:8:{s:2:"id";s:2:"14";s:8:"username";s:7:"006smey";s:12:"user_role_id";s:1:"4";s:8:"user_img";s:11:"006smey.png";s:11:"employee_id";s:1:"6";s:7:"created";s:19:"2015-08-14 06:28:34";s:8:"modified";s:19:"2015-08-14 06:28:34";s:8:"UserRole";a:4:{s:2:"id";s:1:"4";s:4:"role";s:8:"Employee";s:7:"created";s:19:"2015-07-23 10:12:38";s:8:"modified";s:19:"2015-07-23 10:12:38";}}}', 1444922642),
('3t288rq8495lf7gglgu5vptlr3', 'Config|a:3:{s:9:"userAgent";s:32:"5860a690fa001a266fb5a40afb4af99d";s:4:"time";i:1451990652;s:9:"countdown";i:10;}Message|a:1:{s:4:"auth";a:3:{s:7:"message";s:47:"You are not authorized to access that location.";s:7:"element";s:7:"default";s:6:"params";a:0:{}}}Auth|a:0:{}', 1451990654),
('3tji808srdvgs4vkogmce6egv3', 'Config|a:3:{s:9:"userAgent";s:32:"674a8d243fdf821be8b0d93247a234f4";s:4:"time";i:1446800759;s:9:"countdown";i:10;}Message|a:1:{s:4:"auth";a:3:{s:7:"message";s:47:"You are not authorized to access that location.";s:7:"element";s:7:"default";s:6:"params";a:0:{}}}Auth|a:1:{s:8:"redirect";s:38:"/task_records/team_achievements/2015/8";}', 1446800759),
('491d17utqobqbu8b4jd6vi2vj2', 'Config|a:3:{s:9:"userAgent";s:32:"3f3218f4944bf78fe054c17ad97816a7";s:4:"time";i:1448356837;s:9:"countdown";i:10;}Message|a:1:{s:4:"auth";a:3:{s:7:"message";s:47:"You are not authorized to access that location.";s:7:"element";s:7:"default";s:6:"params";a:0:{}}}Auth|a:1:{s:4:"User";a:8:{s:2:"id";s:2:"13";s:8:"username";s:8:"013vesna";s:12:"user_role_id";s:1:"4";s:8:"user_img";s:12:"013vesna.png";s:11:"employee_id";s:2:"13";s:7:"created";s:19:"2015-08-14 12:04:13";s:8:"modified";s:19:"2015-08-14 12:04:13";s:8:"UserRole";a:4:{s:2:"id";s:1:"4";s:4:"role";s:8:"Employee";s:7:"created";s:19:"2015-07-23 10:12:38";s:8:"modified";s:19:"2015-07-23 10:12:38";}}}', 1448356837),
('4928e5e5duoj44is1n7r4pa430', 'Config|a:3:{s:9:"userAgent";s:32:"b340bdb7e0bf1412be355d6aa51f8cde";s:4:"time";i:1452430841;s:9:"countdown";i:10;}Message|a:1:{s:4:"auth";a:3:{s:7:"message";s:47:"You are not authorized to access that location.";s:7:"element";s:7:"default";s:6:"params";a:0:{}}}Auth|a:1:{s:4:"User";a:8:{s:2:"id";s:1:"6";s:8:"username";s:7:"006smey";s:12:"user_role_id";s:1:"4";s:8:"user_img";s:11:"006smey.png";s:11:"employee_id";s:1:"6";s:7:"created";s:19:"2015-08-14 06:28:34";s:8:"modified";s:19:"2015-08-14 06:28:34";s:8:"UserRole";a:4:{s:2:"id";s:1:"4";s:4:"role";s:8:"Employee";s:7:"created";s:19:"2015-07-23 10:12:38";s:8:"modified";s:19:"2015-07-23 10:12:38";}}}', 1452430842),
('49imsh0d775nrqg0vfu3obkkg0', 'Config|a:3:{s:9:"userAgent";s:32:"59f38ddba84bba46d56257b23e66fb36";s:4:"time";i:1445925683;s:9:"countdown";i:10;}Message|a:1:{s:4:"auth";a:3:{s:7:"message";s:47:"You are not authorized to access that location.";s:7:"element";s:7:"default";s:6:"params";a:0:{}}}Auth|a:1:{s:8:"redirect";s:1:"/";}', 1445925683),
('4iibmph46ls258e16hjdbjbt40', 'Config|a:3:{s:9:"userAgent";s:32:"0f0f42d23a2e028fa619e9dc015ba780";s:4:"time";i:1445153109;s:9:"countdown";i:10;}Message|a:1:{s:4:"auth";a:3:{s:7:"message";s:47:"You are not authorized to access that location.";s:7:"element";s:7:"default";s:6:"params";a:0:{}}}Auth|a:1:{s:4:"User";a:8:{s:2:"id";s:3:"999";s:8:"username";s:8:"gokuraku";s:12:"user_role_id";s:1:"3";s:8:"user_img";s:16:"default-user.png";s:11:"employee_id";N;s:7:"created";s:19:"2015-08-14 16:42:08";s:8:"modified";s:19:"2015-08-14 16:42:08";s:8:"UserRole";a:4:{s:2:"id";s:1:"3";s:4:"role";s:8:"Gokuraku";s:7:"created";s:19:"2015-07-23 10:12:32";s:8:"modified";s:19:"2015-07-23 10:12:32";}}}', 1445153109),
('4t6qk8hmnl94u2811r9t2dcqv4', 'Config|a:3:{s:9:"userAgent";s:32:"d8d684b045ae4d2587dfbe2a427b0669";s:4:"time";i:1449297177;s:9:"countdown";i:10;}Message|a:1:{s:4:"auth";a:3:{s:7:"message";s:47:"You are not authorized to access that location.";s:7:"element";s:7:"default";s:6:"params";a:0:{}}}Auth|a:1:{s:4:"User";a:8:{s:2:"id";s:1:"1";s:8:"username";s:8:"000sorya";s:12:"user_role_id";s:1:"1";s:8:"user_img";s:12:"000sorya.png";s:11:"employee_id";s:1:"1";s:7:"created";s:19:"2015-08-13 16:55:00";s:8:"modified";s:19:"2015-08-13 16:55:00";s:8:"UserRole";a:4:{s:2:"id";s:1:"1";s:4:"role";s:5:"Admin";s:7:"created";s:19:"2015-07-23 10:11:38";s:8:"modified";s:19:"2015-07-23 10:11:38";}}}', 1449297177),
('585uk7l3htjmi993djmnv0i6d0', 'Config|a:3:{s:9:"userAgent";s:32:"d9871e8554ff21e331cec3e0e5e26c8e";s:4:"time";i:1446682704;s:9:"countdown";i:10;}Message|a:1:{s:4:"auth";a:3:{s:7:"message";s:47:"You are not authorized to access that location.";s:7:"element";s:7:"default";s:6:"params";a:0:{}}}Auth|a:1:{s:4:"User";a:8:{s:2:"id";s:1:"4";s:8:"username";s:9:"004liseak";s:12:"user_role_id";s:1:"4";s:8:"user_img";s:13:"004liseak.png";s:11:"employee_id";s:1:"4";s:7:"created";s:19:"2015-08-14 06:26:20";s:8:"modified";s:19:"2015-08-14 06:26:20";s:8:"UserRole";a:4:{s:2:"id";s:1:"4";s:4:"role";s:8:"Employee";s:7:"created";s:19:"2015-07-23 10:12:38";s:8:"modified";s:19:"2015-07-23 10:12:38";}}}', 1446682704),
('5ilbjsinldi2jna6sju2o4fui0', 'Config|a:3:{s:9:"userAgent";s:32:"01edd93c45b3648eebb2351f41f1d843";s:4:"time";i:1446353292;s:9:"countdown";i:10;}Message|a:1:{s:4:"auth";a:3:{s:7:"message";s:47:"You are not authorized to access that location.";s:7:"element";s:7:"default";s:6:"params";a:0:{}}}Auth|a:1:{s:4:"User";a:8:{s:2:"id";s:1:"7";s:8:"username";s:8:"007sovan";s:12:"user_role_id";s:1:"4";s:8:"user_img";s:12:"007sovan.png";s:11:"employee_id";s:1:"7";s:7:"created";s:19:"2015-08-14 06:29:03";s:8:"modified";s:19:"2015-08-14 06:29:03";s:8:"UserRole";a:4:{s:2:"id";s:1:"4";s:4:"role";s:8:"Employee";s:7:"created";s:19:"2015-07-23 10:12:38";s:8:"modified";s:19:"2015-07-23 10:12:38";}}}', 1446353293),
('5ld9jfutplf50gqikfuf63rjn2', 'Config|a:3:{s:9:"userAgent";s:32:"320f1f029163fd16de5fbe2c7bafa81e";s:4:"time";i:1447650481;s:9:"countdown";i:10;}Message|a:1:{s:4:"auth";a:3:{s:7:"message";s:47:"You are not authorized to access that location.";s:7:"element";s:7:"default";s:6:"params";a:0:{}}}Auth|a:0:{}', 1447650481),
('61tib9s4nsgp8pcq6r61ptcdq7', 'Config|a:3:{s:9:"userAgent";s:32:"a947f60b7c7be0f767611b0fd06abb9e";s:4:"time";i:1447645393;s:9:"countdown";i:10;}Message|a:1:{s:4:"auth";a:3:{s:7:"message";s:47:"You are not authorized to access that location.";s:7:"element";s:7:"default";s:6:"params";a:0:{}}}Auth|a:1:{s:4:"User";a:8:{s:2:"id";s:1:"5";s:8:"username";s:8:"005sokea";s:12:"user_role_id";s:1:"4";s:8:"user_img";s:12:"005sokea.png";s:11:"employee_id";s:1:"5";s:7:"created";s:19:"2015-08-14 11:22:26";s:8:"modified";s:19:"2015-08-14 11:22:26";s:8:"UserRole";a:4:{s:2:"id";s:1:"4";s:4:"role";s:8:"Employee";s:7:"created";s:19:"2015-07-23 10:12:38";s:8:"modified";s:19:"2015-07-23 10:12:38";}}}', 1447645393),
('6hvcga5b40l42ljdlaqrpskfk5', 'Config|a:3:{s:9:"userAgent";s:32:"59704e9fbc1d2ed22bee4d69f5cb3ffb";s:4:"time";i:1444712636;s:9:"countdown";i:10;}Message|a:1:{s:4:"auth";a:3:{s:7:"message";s:47:"You are not authorized to access that location.";s:7:"element";s:7:"default";s:6:"params";a:0:{}}}Auth|a:1:{s:4:"User";a:8:{s:2:"id";s:2:"15";s:8:"username";s:8:"007sovan";s:12:"user_role_id";s:1:"4";s:8:"user_img";s:12:"007sovan.png";s:11:"employee_id";s:1:"7";s:7:"created";s:19:"2015-08-14 06:29:03";s:8:"modified";s:19:"2015-08-14 06:29:03";s:8:"UserRole";a:4:{s:2:"id";s:1:"4";s:4:"role";s:8:"Employee";s:7:"created";s:19:"2015-07-23 10:12:38";s:8:"modified";s:19:"2015-07-23 10:12:38";}}}', 1444712636),
('6kdb4o3mvh304nppilagl9tit2', 'Config|a:3:{s:9:"userAgent";s:32:"11ac885f05e5a50bd87a290c2c607228";s:4:"time";i:1445432238;s:9:"countdown";i:10;}Message|a:1:{s:4:"auth";a:3:{s:7:"message";s:47:"You are not authorized to access that location.";s:7:"element";s:7:"default";s:6:"params";a:0:{}}}Auth|a:1:{s:8:"redirect";s:1:"/";}', 1445432238),
('77in77u73njrv0bpto1rnthjf4', 'Config|a:3:{s:9:"userAgent";s:32:"fbd9cf48eee16e99ea7b04355ae2d583";s:4:"time";i:1451812903;s:9:"countdown";i:10;}Message|a:1:{s:4:"auth";a:3:{s:7:"message";s:47:"You are not authorized to access that location.";s:7:"element";s:7:"default";s:6:"params";a:0:{}}}Auth|a:1:{s:4:"User";a:8:{s:2:"id";s:1:"6";s:8:"username";s:7:"006smey";s:12:"user_role_id";s:1:"4";s:8:"user_img";s:11:"006smey.png";s:11:"employee_id";s:1:"6";s:7:"created";s:19:"2015-08-14 06:28:34";s:8:"modified";s:19:"2015-08-14 06:28:34";s:8:"UserRole";a:4:{s:2:"id";s:1:"4";s:4:"role";s:8:"Employee";s:7:"created";s:19:"2015-07-23 10:12:38";s:8:"modified";s:19:"2015-07-23 10:12:38";}}}', 1451812903),
('8ra8qp3e5uc6o7nb8adcqalqf6', 'Config|a:3:{s:9:"userAgent";s:32:"4f640ce474c960be747c201594c70db7";s:4:"time";i:1451453495;s:9:"countdown";i:10;}Message|a:1:{s:4:"auth";a:3:{s:7:"message";s:47:"You are not authorized to access that location.";s:7:"element";s:7:"default";s:6:"params";a:0:{}}}Auth|a:1:{s:4:"User";a:8:{s:2:"id";s:1:"5";s:8:"username";s:8:"005sokea";s:12:"user_role_id";s:1:"4";s:8:"user_img";s:12:"005sokea.png";s:11:"employee_id";s:1:"5";s:7:"created";s:19:"2015-08-14 11:22:26";s:8:"modified";s:19:"2015-08-14 11:22:26";s:8:"UserRole";a:4:{s:2:"id";s:1:"4";s:4:"role";s:8:"Employee";s:7:"created";s:19:"2015-07-23 10:12:38";s:8:"modified";s:19:"2015-07-23 10:12:38";}}}', 1451453495),
('9oto7v57rj2eq33l5doqonrv14', 'Config|a:3:{s:9:"userAgent";s:32:"1e4bf8b19c7023c14167de15d717fcb7";s:4:"time";i:1452499909;s:9:"countdown";i:10;}Message|a:1:{s:4:"auth";a:3:{s:7:"message";s:47:"You are not authorized to access that location.";s:7:"element";s:7:"default";s:6:"params";a:0:{}}}Auth|a:1:{s:4:"User";a:8:{s:2:"id";s:2:"13";s:8:"username";s:8:"013vesna";s:12:"user_role_id";s:1:"4";s:8:"user_img";s:12:"013vesna.png";s:11:"employee_id";s:2:"13";s:7:"created";s:19:"2015-08-14 12:04:13";s:8:"modified";s:19:"2015-08-14 12:04:13";s:8:"UserRole";a:4:{s:2:"id";s:1:"4";s:4:"role";s:8:"Employee";s:7:"created";s:19:"2015-07-23 10:12:38";s:8:"modified";s:19:"2015-07-23 10:12:38";}}}', 1452499910),
('ankp95450gofuep8tjn9iqtmh0', 'Config|a:3:{s:9:"userAgent";s:32:"fbd9cf48eee16e99ea7b04355ae2d583";s:4:"time";i:1452665366;s:9:"countdown";i:10;}Message|a:1:{s:4:"auth";a:3:{s:7:"message";s:47:"You are not authorized to access that location.";s:7:"element";s:7:"default";s:6:"params";a:0:{}}}Auth|a:1:{s:4:"User";a:8:{s:2:"id";s:1:"1";s:8:"username";s:8:"000sorya";s:12:"user_role_id";s:1:"1";s:8:"user_img";s:12:"000sorya.png";s:11:"employee_id";s:1:"1";s:7:"created";s:19:"2015-08-13 16:55:00";s:8:"modified";s:19:"2015-08-13 16:55:00";s:8:"UserRole";a:4:{s:2:"id";s:1:"1";s:4:"role";s:5:"Admin";s:7:"created";s:19:"2015-07-23 10:11:38";s:8:"modified";s:19:"2015-07-23 10:11:38";}}}', 1452665366),
('b2qkbf93lr9a55r645bmutkl83', 'Config|a:3:{s:9:"userAgent";s:32:"344a875138bcc9db009d894d69961d53";s:4:"time";i:1450421488;s:9:"countdown";i:10;}Message|a:1:{s:4:"auth";a:3:{s:7:"message";s:47:"You are not authorized to access that location.";s:7:"element";s:7:"default";s:6:"params";a:0:{}}}Auth|a:1:{s:4:"User";a:8:{s:2:"id";s:1:"1";s:8:"username";s:8:"000sorya";s:12:"user_role_id";s:1:"1";s:8:"user_img";s:12:"000sorya.png";s:11:"employee_id";s:1:"1";s:7:"created";s:19:"2015-08-13 16:55:00";s:8:"modified";s:19:"2015-08-13 16:55:00";s:8:"UserRole";a:4:{s:2:"id";s:1:"1";s:4:"role";s:5:"Admin";s:7:"created";s:19:"2015-07-23 10:11:38";s:8:"modified";s:19:"2015-07-23 10:11:38";}}}', 1450421488),
('b477lmkav2kvjjmodbmmu2a5k5', 'Config|a:3:{s:9:"userAgent";s:32:"59704e9fbc1d2ed22bee4d69f5cb3ffb";s:4:"time";i:1445158350;s:9:"countdown";i:10;}Message|a:1:{s:4:"auth";a:3:{s:7:"message";s:47:"You are not authorized to access that location.";s:7:"element";s:7:"default";s:6:"params";a:0:{}}}Auth|a:1:{s:4:"User";a:8:{s:2:"id";s:1:"7";s:8:"username";s:8:"007sovan";s:12:"user_role_id";s:1:"4";s:8:"user_img";s:12:"007sovan.png";s:11:"employee_id";s:1:"7";s:7:"created";s:19:"2015-08-14 06:29:03";s:8:"modified";s:19:"2015-08-14 06:29:03";s:8:"UserRole";a:4:{s:2:"id";s:1:"4";s:4:"role";s:8:"Employee";s:7:"created";s:19:"2015-07-23 10:12:38";s:8:"modified";s:19:"2015-07-23 10:12:38";}}}', 1445158350),
('bnip9ap9qlsp4ud7c9o1vsbg72', 'Config|a:3:{s:9:"userAgent";s:32:"f95d4a3e690cbbdeededa4f57f084a34";s:4:"time";i:1446988607;s:9:"countdown";i:10;}Message|a:1:{s:4:"auth";a:3:{s:7:"message";s:47:"You are not authorized to access that location.";s:7:"element";s:7:"default";s:6:"params";a:0:{}}}Auth|a:1:{s:4:"User";a:8:{s:2:"id";s:1:"5";s:8:"username";s:8:"005sokea";s:12:"user_role_id";s:1:"4";s:8:"user_img";s:12:"005sokea.png";s:11:"employee_id";s:1:"5";s:7:"created";s:19:"2015-08-14 11:22:26";s:8:"modified";s:19:"2015-08-14 11:22:26";s:8:"UserRole";a:4:{s:2:"id";s:1:"4";s:4:"role";s:8:"Employee";s:7:"created";s:19:"2015-07-23 10:12:38";s:8:"modified";s:19:"2015-07-23 10:12:38";}}}', 1446988608),
('bvmflo0oic2dbdlbpa91j0t165', 'Config|a:3:{s:9:"userAgent";s:32:"344a875138bcc9db009d894d69961d53";s:4:"time";i:1446536123;s:9:"countdown";i:10;}Message|a:1:{s:4:"auth";a:3:{s:7:"message";s:47:"You are not authorized to access that location.";s:7:"element";s:7:"default";s:6:"params";a:0:{}}}Auth|a:1:{s:4:"User";a:8:{s:2:"id";s:1:"1";s:8:"username";s:8:"000sorya";s:12:"user_role_id";s:1:"1";s:8:"user_img";s:12:"000sorya.png";s:11:"employee_id";s:1:"1";s:7:"created";s:19:"2015-08-13 16:55:00";s:8:"modified";s:19:"2015-08-13 16:55:00";s:8:"UserRole";a:4:{s:2:"id";s:1:"1";s:4:"role";s:5:"Admin";s:7:"created";s:19:"2015-07-23 10:11:38";s:8:"modified";s:19:"2015-07-23 10:11:38";}}}', 1446536123),
('c18d6f5tdaco0avircnmdkjr06', 'Config|a:3:{s:9:"userAgent";s:32:"b5b44226833d122be47483b4faff7181";s:4:"time";i:1446865719;s:9:"countdown";i:10;}Message|a:1:{s:4:"auth";a:3:{s:7:"message";s:47:"You are not authorized to access that location.";s:7:"element";s:7:"default";s:6:"params";a:0:{}}}Auth|a:1:{s:8:"redirect";s:38:"/task_records/team_achievements/2015/8";}', 1446865719),
('c5c16qn01568boi0sdu27cvf83', 'Config|a:3:{s:9:"userAgent";s:32:"c6ce8fbdefcaeab8f3453ebb5120b77d";s:4:"time";i:1445526503;s:9:"countdown";i:10;}Message|a:1:{s:4:"auth";a:3:{s:7:"message";s:47:"You are not authorized to access that location.";s:7:"element";s:7:"default";s:6:"params";a:0:{}}}Auth|a:1:{s:4:"User";a:8:{s:2:"id";s:1:"1";s:8:"username";s:8:"000sorya";s:12:"user_role_id";s:1:"1";s:8:"user_img";s:12:"000sorya.png";s:11:"employee_id";s:1:"1";s:7:"created";s:19:"2015-08-13 16:55:00";s:8:"modified";s:19:"2015-08-13 16:55:00";s:8:"UserRole";a:4:{s:2:"id";s:1:"1";s:4:"role";s:5:"Admin";s:7:"created";s:19:"2015-07-23 10:11:38";s:8:"modified";s:19:"2015-07-23 10:11:38";}}}', 1445526503),
('cg2omrc4chhqptd7p0f0m71td5', 'Config|a:3:{s:9:"userAgent";s:32:"ebe745b145a084a1a397a61dc45f71f9";s:4:"time";i:1448433593;s:9:"countdown";i:10;}Message|a:1:{s:4:"auth";a:3:{s:7:"message";s:47:"You are not authorized to access that location.";s:7:"element";s:7:"default";s:6:"params";a:0:{}}}Auth|a:1:{s:4:"User";a:8:{s:2:"id";s:1:"4";s:8:"username";s:9:"004liseak";s:12:"user_role_id";s:1:"4";s:8:"user_img";s:13:"004liseak.png";s:11:"employee_id";s:1:"4";s:7:"created";s:19:"2015-08-14 06:26:20";s:8:"modified";s:19:"2015-08-14 06:26:20";s:8:"UserRole";a:4:{s:2:"id";s:1:"4";s:4:"role";s:8:"Employee";s:7:"created";s:19:"2015-07-23 10:12:38";s:8:"modified";s:19:"2015-07-23 10:12:38";}}}', 1448433593),
('cjb7evjghd6s52vhu7kv61qgs7', 'Config|a:3:{s:9:"userAgent";s:32:"0f0f42d23a2e028fa619e9dc015ba780";s:4:"time";i:1445148346;s:9:"countdown";i:10;}Message|a:1:{s:4:"auth";a:3:{s:7:"message";s:47:"You are not authorized to access that location.";s:7:"element";s:7:"default";s:6:"params";a:0:{}}}Auth|a:1:{s:4:"User";a:8:{s:2:"id";s:1:"1";s:8:"username";s:8:"000sorya";s:12:"user_role_id";s:1:"1";s:8:"user_img";s:12:"000sorya.png";s:11:"employee_id";s:1:"1";s:7:"created";s:19:"2015-08-13 16:55:00";s:8:"modified";s:19:"2015-08-13 16:55:00";s:8:"UserRole";a:4:{s:2:"id";s:1:"1";s:4:"role";s:5:"Admin";s:7:"created";s:19:"2015-07-23 10:11:38";s:8:"modified";s:19:"2015-07-23 10:11:38";}}}', 1445148346),
('ddbitmod6co4kpbs3d5pp1rrd5', 'Config|a:3:{s:9:"userAgent";s:32:"32818322dbc389a54a6b177a2eef716b";s:4:"time";i:1446800789;s:9:"countdown";i:10;}Message|a:1:{s:4:"auth";a:3:{s:7:"message";s:47:"You are not authorized to access that location.";s:7:"element";s:7:"default";s:6:"params";a:0:{}}}Auth|a:1:{s:4:"User";a:8:{s:2:"id";s:3:"999";s:8:"username";s:8:"gokuraku";s:12:"user_role_id";s:1:"3";s:8:"user_img";s:16:"default-user.png";s:11:"employee_id";N;s:7:"created";s:19:"2015-08-14 16:42:08";s:8:"modified";s:19:"2015-08-14 16:42:08";s:8:"UserRole";a:4:{s:2:"id";s:1:"3";s:4:"role";s:8:"Gokuraku";s:7:"created";s:19:"2015-07-23 10:12:32";s:8:"modified";s:19:"2015-07-23 10:12:32";}}}', 1446800790),
('djc2esualmoer3ntb126qod8u1', 'Config|a:3:{s:9:"userAgent";s:32:"344a875138bcc9db009d894d69961d53";s:4:"time";i:1451902101;s:9:"countdown";i:10;}Message|a:1:{s:4:"auth";a:3:{s:7:"message";s:47:"You are not authorized to access that location.";s:7:"element";s:7:"default";s:6:"params";a:0:{}}}Auth|a:1:{s:4:"User";a:8:{s:2:"id";s:1:"1";s:8:"username";s:8:"000sorya";s:12:"user_role_id";s:1:"1";s:8:"user_img";s:12:"000sorya.png";s:11:"employee_id";s:1:"1";s:7:"created";s:19:"2015-08-13 16:55:00";s:8:"modified";s:19:"2015-08-13 16:55:00";s:8:"UserRole";a:4:{s:2:"id";s:1:"1";s:4:"role";s:5:"Admin";s:7:"created";s:19:"2015-07-23 10:11:38";s:8:"modified";s:19:"2015-07-23 10:11:38";}}}', 1451902101),
('e1h9piluqs1ikvk0cajfb511r7', 'Config|a:3:{s:9:"userAgent";s:32:"bdc86e44e879b9278bdeb3b419446e40";s:4:"time";i:1449531078;s:9:"countdown";i:10;}Message|a:1:{s:4:"auth";a:3:{s:7:"message";s:47:"You are not authorized to access that location.";s:7:"element";s:7:"default";s:6:"params";a:0:{}}}Auth|a:1:{s:4:"User";a:8:{s:2:"id";s:2:"12";s:8:"username";s:9:"004liseak";s:12:"user_role_id";s:1:"4";s:8:"user_img";s:13:"004liseak.png";s:11:"employee_id";s:1:"4";s:7:"created";s:19:"2015-08-14 06:26:20";s:8:"modified";s:19:"2015-08-14 06:26:20";s:8:"UserRole";a:4:{s:2:"id";s:1:"4";s:4:"role";s:8:"Employee";s:7:"created";s:19:"2015-07-23 10:12:38";s:8:"modified";s:19:"2015-07-23 10:12:38";}}}', 1449531078),
('e83u48tnqlgiorqcs7j2h2g9m4', 'Config|a:3:{s:9:"userAgent";s:32:"01edd93c45b3648eebb2351f41f1d843";s:4:"time";i:1446826300;s:9:"countdown";i:10;}Message|a:1:{s:4:"auth";a:3:{s:7:"message";s:47:"You are not authorized to access that location.";s:7:"element";s:7:"default";s:6:"params";a:0:{}}}Auth|a:1:{s:4:"User";a:8:{s:2:"id";s:1:"7";s:8:"username";s:8:"007sovan";s:12:"user_role_id";s:1:"4";s:8:"user_img";s:12:"007sovan.png";s:11:"employee_id";s:1:"7";s:7:"created";s:19:"2015-08-14 06:29:03";s:8:"modified";s:19:"2015-08-14 06:29:03";s:8:"UserRole";a:4:{s:2:"id";s:1:"4";s:4:"role";s:8:"Employee";s:7:"created";s:19:"2015-07-23 10:12:38";s:8:"modified";s:19:"2015-07-23 10:12:38";}}}', 1446826301),
('ehj7gu9bdb60pggoetiovt9uv6', 'Config|a:3:{s:9:"userAgent";s:32:"5ede1ae96f3d5f54b02f9b227e15d613";s:4:"time";i:1447207632;s:9:"countdown";i:10;}Message|a:1:{s:4:"auth";a:3:{s:7:"message";s:47:"You are not authorized to access that location.";s:7:"element";s:7:"default";s:6:"params";a:0:{}}}Auth|a:1:{s:4:"User";a:8:{s:2:"id";s:1:"1";s:8:"username";s:8:"000sorya";s:12:"user_role_id";s:1:"1";s:8:"user_img";s:12:"000sorya.png";s:11:"employee_id";s:1:"1";s:7:"created";s:19:"2015-08-13 16:55:00";s:8:"modified";s:19:"2015-08-13 16:55:00";s:8:"UserRole";a:4:{s:2:"id";s:1:"1";s:4:"role";s:5:"Admin";s:7:"created";s:19:"2015-07-23 10:11:38";s:8:"modified";s:19:"2015-07-23 10:11:38";}}}', 1447207632),
('eqfc8penjucsbp67uea9pe0aa1', 'Config|a:3:{s:9:"userAgent";s:32:"828d5ea35d645f1f1a360812fdb51c58";s:4:"time";i:1451115649;s:9:"countdown";i:10;}Message|a:1:{s:4:"auth";a:3:{s:7:"message";s:47:"You are not authorized to access that location.";s:7:"element";s:7:"default";s:6:"params";a:0:{}}}Auth|a:1:{s:4:"User";a:8:{s:2:"id";s:1:"1";s:8:"username";s:8:"000sorya";s:12:"user_role_id";s:1:"1";s:8:"user_img";s:12:"000sorya.png";s:11:"employee_id";s:1:"1";s:7:"created";s:19:"2015-08-13 16:55:00";s:8:"modified";s:19:"2015-08-13 16:55:00";s:8:"UserRole";a:4:{s:2:"id";s:1:"1";s:4:"role";s:5:"Admin";s:7:"created";s:19:"2015-07-23 10:11:38";s:8:"modified";s:19:"2015-07-23 10:11:38";}}}', 1451115649),
('gaiunnttkm2pvcu5qthivmeu41', 'Config|a:3:{s:9:"userAgent";s:32:"b5b44226833d122be47483b4faff7181";s:4:"time";i:1446865719;s:9:"countdown";i:10;}Message|a:1:{s:4:"auth";a:3:{s:7:"message";s:47:"You are not authorized to access that location.";s:7:"element";s:7:"default";s:6:"params";a:0:{}}}Auth|a:1:{s:8:"redirect";s:38:"/task_records/team_achievements/2015/8";}', 1446865719),
('i8it8i1anhfpno52f7n9rrcgq1', 'Config|a:3:{s:9:"userAgent";s:32:"5860a690fa001a266fb5a40afb4af99d";s:4:"time";i:1451520107;s:9:"countdown";i:10;}Message|a:1:{s:4:"auth";a:3:{s:7:"message";s:47:"You are not authorized to access that location.";s:7:"element";s:7:"default";s:6:"params";a:0:{}}}Auth|a:1:{s:4:"User";a:8:{s:2:"id";s:2:"13";s:8:"username";s:8:"013vesna";s:12:"user_role_id";s:1:"4";s:8:"user_img";s:12:"013vesna.png";s:11:"employee_id";s:2:"13";s:7:"created";s:19:"2015-08-14 12:04:13";s:8:"modified";s:19:"2015-08-14 12:04:13";s:8:"UserRole";a:4:{s:2:"id";s:1:"4";s:4:"role";s:8:"Employee";s:7:"created";s:19:"2015-07-23 10:12:38";s:8:"modified";s:19:"2015-07-23 10:12:38";}}}', 1451520107),
('iccuai24s1e42lk4p546jhs452', 'Config|a:3:{s:9:"userAgent";s:32:"01edd93c45b3648eebb2351f41f1d843";s:4:"time";i:1445840775;s:9:"countdown";i:10;}Message|a:1:{s:4:"auth";a:3:{s:7:"message";s:47:"You are not authorized to access that location.";s:7:"element";s:7:"default";s:6:"params";a:0:{}}}Auth|a:1:{s:4:"User";a:8:{s:2:"id";s:1:"7";s:8:"username";s:8:"007sovan";s:12:"user_role_id";s:1:"4";s:8:"user_img";s:12:"007sovan.png";s:11:"employee_id";s:1:"7";s:7:"created";s:19:"2015-08-14 06:29:03";s:8:"modified";s:19:"2015-08-14 06:29:03";s:8:"UserRole";a:4:{s:2:"id";s:1:"4";s:4:"role";s:8:"Employee";s:7:"created";s:19:"2015-07-23 10:12:38";s:8:"modified";s:19:"2015-07-23 10:12:38";}}}', 1445840775),
('iebm6tssk7dl1mh4omp82obhh5', 'Config|a:3:{s:9:"userAgent";s:32:"5b3a5e46e1e47b67736e61d32185c6ad";s:4:"time";i:1444716136;s:9:"countdown";i:10;}Message|a:0:{}Auth|a:1:{s:4:"User";a:8:{s:2:"id";s:1:"2";s:8:"username";s:9:"001pidoar";s:12:"user_role_id";s:1:"2";s:8:"user_img";s:13:"001pidoar.png";s:11:"employee_id";s:1:"2";s:7:"created";s:19:"2015-08-14 12:58:43";s:8:"modified";s:19:"2015-08-14 12:58:43";s:8:"UserRole";a:4:{s:2:"id";s:1:"2";s:4:"role";s:16:"Mangetsu Manager";s:7:"created";s:19:"2015-07-23 10:12:26";s:8:"modified";s:19:"2015-07-23 10:12:26";}}}', 1444716136),
('jkp2ne136d8mdiivtci4uot931', 'Config|a:3:{s:9:"userAgent";s:32:"11ac885f05e5a50bd87a290c2c607228";s:4:"time";i:1446194734;s:9:"countdown";i:10;}Message|a:1:{s:4:"auth";a:3:{s:7:"message";s:47:"You are not authorized to access that location.";s:7:"element";s:7:"default";s:6:"params";a:0:{}}}Auth|a:1:{s:8:"redirect";s:1:"/";}', 1446194734),
('k21cpe3624jnu13me095ltrvb3', 'Config|a:3:{s:9:"userAgent";s:32:"5ede1ae96f3d5f54b02f9b227e15d613";s:4:"time";i:1447634643;s:9:"countdown";i:10;}Message|a:1:{s:4:"auth";a:3:{s:7:"message";s:47:"You are not authorized to access that location.";s:7:"element";s:7:"default";s:6:"params";a:0:{}}}Auth|a:1:{s:4:"User";a:8:{s:2:"id";s:2:"13";s:8:"username";s:8:"013vesna";s:12:"user_role_id";s:1:"4";s:8:"user_img";s:12:"013vesna.png";s:11:"employee_id";s:2:"13";s:7:"created";s:19:"2015-08-14 12:04:13";s:8:"modified";s:19:"2015-08-14 12:04:13";s:8:"UserRole";a:4:{s:2:"id";s:1:"4";s:4:"role";s:8:"Employee";s:7:"created";s:19:"2015-07-23 10:12:38";s:8:"modified";s:19:"2015-07-23 10:12:38";}}}', 1447634643),
('kco8uoeusmahbr1bcgtgr530s0', 'Config|a:3:{s:9:"userAgent";s:32:"11ac885f05e5a50bd87a290c2c607228";s:4:"time";i:1444708636;s:9:"countdown";i:10;}Message|a:1:{s:4:"auth";a:3:{s:7:"message";s:47:"You are not authorized to access that location.";s:7:"element";s:7:"default";s:6:"params";a:0:{}}}Auth|a:1:{s:8:"redirect";s:1:"/";}', 1444708636),
('kj8atlpkhvegjlhtd54tma26c6', 'Config|a:3:{s:9:"userAgent";s:32:"01edd93c45b3648eebb2351f41f1d843";s:4:"time";i:1448959560;s:9:"countdown";i:10;}Message|a:1:{s:4:"auth";a:3:{s:7:"message";s:47:"You are not authorized to access that location.";s:7:"element";s:7:"default";s:6:"params";a:0:{}}}Auth|a:1:{s:4:"User";a:8:{s:2:"id";s:1:"7";s:8:"username";s:8:"007sovan";s:12:"user_role_id";s:1:"4";s:8:"user_img";s:12:"007sovan.png";s:11:"employee_id";s:1:"7";s:7:"created";s:19:"2015-08-14 06:29:03";s:8:"modified";s:19:"2015-08-14 06:29:03";s:8:"UserRole";a:4:{s:2:"id";s:1:"4";s:4:"role";s:8:"Employee";s:7:"created";s:19:"2015-07-23 10:12:38";s:8:"modified";s:19:"2015-07-23 10:12:38";}}}', 1448959560),
('lihd4qbpi3q832a0a2pvd3jcc7', 'Config|a:3:{s:9:"userAgent";s:32:"01edd93c45b3648eebb2351f41f1d843";s:4:"time";i:1445230426;s:9:"countdown";i:10;}Message|a:1:{s:4:"auth";a:3:{s:7:"message";s:47:"You are not authorized to access that location.";s:7:"element";s:7:"default";s:6:"params";a:0:{}}}Auth|a:1:{s:4:"User";a:8:{s:2:"id";s:1:"7";s:8:"username";s:8:"007sovan";s:12:"user_role_id";s:1:"4";s:8:"user_img";s:12:"007sovan.png";s:11:"employee_id";s:1:"7";s:7:"created";s:19:"2015-08-14 06:29:03";s:8:"modified";s:19:"2015-08-14 06:29:03";s:8:"UserRole";a:4:{s:2:"id";s:1:"4";s:4:"role";s:8:"Employee";s:7:"created";s:19:"2015-07-23 10:12:38";s:8:"modified";s:19:"2015-07-23 10:12:38";}}}', 1445230426),
('lplfspfuhveje17tt12qcgflg4', 'Config|a:3:{s:9:"userAgent";s:32:"bdc86e44e879b9278bdeb3b419446e40";s:4:"time";i:1452214780;s:9:"countdown";i:10;}Message|a:1:{s:4:"auth";a:3:{s:7:"message";s:47:"You are not authorized to access that location.";s:7:"element";s:7:"default";s:6:"params";a:0:{}}}Auth|a:1:{s:4:"User";a:8:{s:2:"id";s:1:"4";s:8:"username";s:9:"004liseak";s:12:"user_role_id";s:1:"4";s:8:"user_img";s:13:"004liseak.png";s:11:"employee_id";s:1:"4";s:7:"created";s:19:"2015-08-14 06:26:20";s:8:"modified";s:19:"2015-08-14 06:26:20";s:8:"UserRole";a:4:{s:2:"id";s:1:"4";s:4:"role";s:8:"Employee";s:7:"created";s:19:"2015-07-23 10:12:38";s:8:"modified";s:19:"2015-07-23 10:12:38";}}}', 1452214780),
('ndtldea8cm6rno3ff3bel71e06', 'Config|a:3:{s:9:"userAgent";s:32:"01edd93c45b3648eebb2351f41f1d843";s:4:"time";i:1446482917;s:9:"countdown";i:10;}Message|a:1:{s:4:"auth";a:3:{s:7:"message";s:47:"You are not authorized to access that location.";s:7:"element";s:7:"default";s:6:"params";a:0:{}}}Auth|a:1:{s:4:"User";a:8:{s:2:"id";s:1:"7";s:8:"username";s:8:"007sovan";s:12:"user_role_id";s:1:"4";s:8:"user_img";s:12:"007sovan.png";s:11:"employee_id";s:1:"7";s:7:"created";s:19:"2015-08-14 06:29:03";s:8:"modified";s:19:"2015-08-14 06:29:03";s:8:"UserRole";a:4:{s:2:"id";s:1:"4";s:4:"role";s:8:"Employee";s:7:"created";s:19:"2015-07-23 10:12:38";s:8:"modified";s:19:"2015-07-23 10:12:38";}}}', 1446482917),
('nlssbb1pp99af88nuq4cku4dt7', 'Config|a:3:{s:9:"userAgent";s:32:"a6c6a6b6b36726d90e8abbbc2e4f8cbe";s:4:"time";i:1444818373;s:9:"countdown";i:10;}Message|a:1:{s:4:"auth";a:3:{s:7:"message";s:47:"You are not authorized to access that location.";s:7:"element";s:7:"default";s:6:"params";a:0:{}}}Auth|a:0:{}', 1444818373),
('nq381clj40t0pvqhqu1n1a42p2', 'Config|a:3:{s:9:"userAgent";s:32:"de9aadae536e2542888eec9c25214c76";s:4:"time";i:1449574900;s:9:"countdown";i:10;}Message|a:1:{s:4:"auth";a:3:{s:7:"message";s:47:"You are not authorized to access that location.";s:7:"element";s:7:"default";s:6:"params";a:0:{}}}Auth|a:1:{s:8:"redirect";s:1:"/";}', 1449574900),
('oavmohplho2908hnnkvljaqdt4', 'Config|a:3:{s:9:"userAgent";s:32:"3ed6937408eb2d6f721f3ffa72619fc6";s:4:"time";i:1451793116;s:9:"countdown";i:10;}Message|a:1:{s:4:"auth";a:3:{s:7:"message";s:47:"You are not authorized to access that location.";s:7:"element";s:7:"default";s:6:"params";a:0:{}}}Auth|a:1:{s:4:"User";a:8:{s:2:"id";s:1:"5";s:8:"username";s:8:"005sokea";s:12:"user_role_id";s:1:"4";s:8:"user_img";s:12:"005sokea.png";s:11:"employee_id";s:1:"5";s:7:"created";s:19:"2015-08-14 11:22:26";s:8:"modified";s:19:"2015-08-14 11:22:26";s:8:"UserRole";a:4:{s:2:"id";s:1:"4";s:4:"role";s:8:"Employee";s:7:"created";s:19:"2015-07-23 10:12:38";s:8:"modified";s:19:"2015-07-23 10:12:38";}}}', 1451793116),
('ooblr78k07pma90qg7naju2g95', 'Config|a:3:{s:9:"userAgent";s:32:"01edd93c45b3648eebb2351f41f1d843";s:4:"time";i:1449138607;s:9:"countdown";i:10;}Message|a:1:{s:4:"auth";a:3:{s:7:"message";s:47:"You are not authorized to access that location.";s:7:"element";s:7:"default";s:6:"params";a:0:{}}}Auth|a:1:{s:4:"User";a:8:{s:2:"id";s:1:"7";s:8:"username";s:8:"007sovan";s:12:"user_role_id";s:1:"4";s:8:"user_img";s:12:"007sovan.png";s:11:"employee_id";s:1:"7";s:7:"created";s:19:"2015-08-14 06:29:03";s:8:"modified";s:19:"2015-08-14 06:29:03";s:8:"UserRole";a:4:{s:2:"id";s:1:"4";s:4:"role";s:8:"Employee";s:7:"created";s:19:"2015-07-23 10:12:38";s:8:"modified";s:19:"2015-07-23 10:12:38";}}}', 1449138607),
('p5l4bkbnas9pnejcskdgbmv883', 'Config|a:3:{s:9:"userAgent";s:32:"51597cf897b8f17e477416d44bacff42";s:4:"time";i:1452590563;s:9:"countdown";i:10;}Message|a:1:{s:4:"auth";a:3:{s:7:"message";s:47:"You are not authorized to access that location.";s:7:"element";s:7:"default";s:6:"params";a:0:{}}}Auth|a:1:{s:4:"User";a:8:{s:2:"id";s:3:"999";s:8:"username";s:8:"gokuraku";s:12:"user_role_id";s:1:"3";s:8:"user_img";s:16:"default-user.png";s:11:"employee_id";N;s:7:"created";s:19:"2015-08-14 16:42:08";s:8:"modified";s:19:"2015-08-14 16:42:08";s:8:"UserRole";a:4:{s:2:"id";s:1:"3";s:4:"role";s:8:"Gokuraku";s:7:"created";s:19:"2015-07-23 10:12:32";s:8:"modified";s:19:"2015-07-23 10:12:32";}}}', 1452590563),
('pal0m2kosblmss2cpqlkb2aom7', 'Config|a:3:{s:9:"userAgent";s:32:"11ac885f05e5a50bd87a290c2c607228";s:4:"time";i:1448250114;s:9:"countdown";i:10;}Message|a:1:{s:4:"auth";a:3:{s:7:"message";s:47:"You are not authorized to access that location.";s:7:"element";s:7:"default";s:6:"params";a:0:{}}}Auth|a:1:{s:8:"redirect";s:1:"/";}', 1448250114),
('pk6rgagscit51sh0unu93gn654', 'Config|a:3:{s:9:"userAgent";s:32:"62ca2df2d397b0643d7c333f24601ce9";s:4:"time";i:1447657235;s:9:"countdown";i:10;}Message|a:1:{s:4:"auth";a:3:{s:7:"message";s:47:"You are not authorized to access that location.";s:7:"element";s:7:"default";s:6:"params";a:0:{}}}Auth|a:1:{s:4:"User";a:8:{s:2:"id";s:3:"999";s:8:"username";s:8:"gokuraku";s:12:"user_role_id";s:1:"3";s:8:"user_img";s:16:"default-user.png";s:11:"employee_id";N;s:7:"created";s:19:"2015-08-14 16:42:08";s:8:"modified";s:19:"2015-08-14 16:42:08";s:8:"UserRole";a:4:{s:2:"id";s:1:"3";s:4:"role";s:8:"Gokuraku";s:7:"created";s:19:"2015-07-23 10:12:32";s:8:"modified";s:19:"2015-07-23 10:12:32";}}}', 1447657236),
('q4mtuvkvsornsfq0evplv47ki5', 'Config|a:3:{s:9:"userAgent";s:32:"936761e129351eaeb1f4ff0ce70c85f9";s:4:"time";i:1449386373;s:9:"countdown";i:10;}Message|a:1:{s:4:"auth";a:3:{s:7:"message";s:47:"You are not authorized to access that location.";s:7:"element";s:7:"default";s:6:"params";a:0:{}}}Auth|a:1:{s:4:"User";a:8:{s:2:"id";s:3:"999";s:8:"username";s:8:"gokuraku";s:12:"user_role_id";s:1:"3";s:8:"user_img";s:16:"default-user.png";s:11:"employee_id";N;s:7:"created";s:19:"2015-08-14 16:42:08";s:8:"modified";s:19:"2015-08-14 16:42:08";s:8:"UserRole";a:4:{s:2:"id";s:1:"3";s:4:"role";s:8:"Gokuraku";s:7:"created";s:19:"2015-07-23 10:12:32";s:8:"modified";s:19:"2015-07-23 10:12:32";}}}', 1449386373),
('r384qillchee7qotrpdvuileg6', 'Config|a:3:{s:9:"userAgent";s:32:"91f7651fd99122d39ff4e6d974eb3e31";s:4:"time";i:1452318123;s:9:"countdown";i:10;}Message|a:1:{s:4:"auth";a:3:{s:7:"message";s:47:"You are not authorized to access that location.";s:7:"element";s:7:"default";s:6:"params";a:0:{}}}Auth|a:1:{s:4:"User";a:8:{s:2:"id";s:3:"999";s:8:"username";s:8:"gokuraku";s:12:"user_role_id";s:1:"3";s:8:"user_img";s:16:"default-user.png";s:11:"employee_id";N;s:7:"created";s:19:"2015-08-14 16:42:08";s:8:"modified";s:19:"2015-08-14 16:42:08";s:8:"UserRole";a:4:{s:2:"id";s:1:"3";s:4:"role";s:8:"Gokuraku";s:7:"created";s:19:"2015-07-23 10:12:32";s:8:"modified";s:19:"2015-07-23 10:12:32";}}}', 1452318123),
('riip05atae8126igro00ln69h7', 'Config|a:3:{s:9:"userAgent";s:32:"fb6073d78a611ac1b533615413a42e13";s:4:"time";i:1450144798;s:9:"countdown";i:10;}Message|a:1:{s:4:"auth";a:3:{s:7:"message";s:47:"You are not authorized to access that location.";s:7:"element";s:7:"default";s:6:"params";a:0:{}}}Auth|a:1:{s:4:"User";a:8:{s:2:"id";s:3:"999";s:8:"username";s:8:"gokuraku";s:12:"user_role_id";s:1:"3";s:8:"user_img";s:16:"default-user.png";s:11:"employee_id";N;s:7:"created";s:19:"2015-08-14 16:42:08";s:8:"modified";s:19:"2015-08-14 16:42:08";s:8:"UserRole";a:4:{s:2:"id";s:1:"3";s:4:"role";s:8:"Gokuraku";s:7:"created";s:19:"2015-07-23 10:12:32";s:8:"modified";s:19:"2015-07-23 10:12:32";}}}', 1450144798),
('rn98eq5mbev674ngc1cjtg6572', 'Config|a:3:{s:9:"userAgent";s:32:"01edd93c45b3648eebb2351f41f1d843";s:4:"time";i:1447057588;s:9:"countdown";i:10;}Message|a:1:{s:4:"auth";a:3:{s:7:"message";s:47:"You are not authorized to access that location.";s:7:"element";s:7:"default";s:6:"params";a:0:{}}}Auth|a:1:{s:4:"User";a:8:{s:2:"id";s:1:"7";s:8:"username";s:8:"007sovan";s:12:"user_role_id";s:1:"4";s:8:"user_img";s:12:"007sovan.png";s:11:"employee_id";s:1:"7";s:7:"created";s:19:"2015-08-14 06:29:03";s:8:"modified";s:19:"2015-08-14 06:29:03";s:8:"UserRole";a:4:{s:2:"id";s:1:"4";s:4:"role";s:8:"Employee";s:7:"created";s:19:"2015-07-23 10:12:38";s:8:"modified";s:19:"2015-07-23 10:12:38";}}}', 1447057588),
('rqq91edd8ie33hsivl8t9vaja2', 'Config|a:3:{s:9:"userAgent";s:32:"9f13db4c954dc4baea015e543d038e79";s:4:"time";i:1447730699;s:9:"countdown";i:10;}Message|a:1:{s:4:"auth";a:3:{s:7:"message";s:47:"You are not authorized to access that location.";s:7:"element";s:7:"default";s:6:"params";a:0:{}}}Auth|a:1:{s:4:"User";a:8:{s:2:"id";s:1:"6";s:8:"username";s:7:"006smey";s:12:"user_role_id";s:1:"4";s:8:"user_img";s:11:"006smey.png";s:11:"employee_id";s:1:"6";s:7:"created";s:19:"2015-08-14 06:28:34";s:8:"modified";s:19:"2015-08-14 06:28:34";s:8:"UserRole";a:4:{s:2:"id";s:1:"4";s:4:"role";s:8:"Employee";s:7:"created";s:19:"2015-07-23 10:12:38";s:8:"modified";s:19:"2015-07-23 10:12:38";}}}', 1447730699),
('se1iv07m8caq0tmcegoif26ci7', 'Config|a:3:{s:9:"userAgent";s:32:"3f3218f4944bf78fe054c17ad97816a7";s:4:"time";i:1448673398;s:9:"countdown";i:10;}Message|a:1:{s:4:"auth";a:3:{s:7:"message";s:47:"You are not authorized to access that location.";s:7:"element";s:7:"default";s:6:"params";a:0:{}}}Auth|a:1:{s:4:"User";a:8:{s:2:"id";s:2:"10";s:8:"username";s:8:"010seyma";s:12:"user_role_id";s:1:"4";s:8:"user_img";s:12:"010seyma.png";s:11:"employee_id";s:2:"10";s:7:"created";s:19:"2015-08-14 06:30:11";s:8:"modified";s:19:"2015-08-14 06:30:11";s:8:"UserRole";a:4:{s:2:"id";s:1:"4";s:4:"role";s:8:"Employee";s:7:"created";s:19:"2015-07-23 10:12:38";s:8:"modified";s:19:"2015-07-23 10:12:38";}}}', 1448673398),
('stg0kgh4hlkvh3vf0nrcb3bpk0', 'Config|a:3:{s:9:"userAgent";s:32:"01edd93c45b3648eebb2351f41f1d843";s:4:"time";i:1449279238;s:9:"countdown";i:10;}Message|a:1:{s:4:"auth";a:3:{s:7:"message";s:47:"You are not authorized to access that location.";s:7:"element";s:7:"default";s:6:"params";a:0:{}}}Auth|a:1:{s:4:"User";a:8:{s:2:"id";s:1:"7";s:8:"username";s:8:"007sovan";s:12:"user_role_id";s:1:"4";s:8:"user_img";s:12:"007sovan.png";s:11:"employee_id";s:1:"7";s:7:"created";s:19:"2015-08-14 06:29:03";s:8:"modified";s:19:"2015-08-14 06:29:03";s:8:"UserRole";a:4:{s:2:"id";s:1:"4";s:4:"role";s:8:"Employee";s:7:"created";s:19:"2015-07-23 10:12:38";s:8:"modified";s:19:"2015-07-23 10:12:38";}}}', 1449279238),
('t5afteemlin3q674lm05ibl721', 'Config|a:3:{s:9:"userAgent";s:32:"b5b44226833d122be47483b4faff7181";s:4:"time";i:1446865719;s:9:"countdown";i:10;}Message|a:1:{s:4:"auth";a:3:{s:7:"message";s:47:"You are not authorized to access that location.";s:7:"element";s:7:"default";s:6:"params";a:0:{}}}Auth|a:1:{s:8:"redirect";s:38:"/task_records/team_achievements/2015/8";}', 1446865719),
('tkifa9oorp4he00kmfc92sbpn0', 'Config|a:3:{s:9:"userAgent";s:32:"11ac885f05e5a50bd87a290c2c607228";s:4:"time";i:1446857975;s:9:"countdown";i:10;}Message|a:1:{s:4:"auth";a:3:{s:7:"message";s:47:"You are not authorized to access that location.";s:7:"element";s:7:"default";s:6:"params";a:0:{}}}Auth|a:1:{s:8:"redirect";s:1:"/";}', 1446857975),
('uaub92sg8s0fragjms08kp8mr7', 'Config|a:3:{s:9:"userAgent";s:32:"8eff41a786f356c95e2bc2e8f74b55dd";s:4:"time";i:1449219851;s:9:"countdown";i:10;}Message|a:1:{s:4:"auth";a:3:{s:7:"message";s:47:"You are not authorized to access that location.";s:7:"element";s:7:"default";s:6:"params";a:0:{}}}Auth|a:1:{s:4:"User";a:8:{s:2:"id";s:1:"6";s:8:"username";s:7:"006smey";s:12:"user_role_id";s:1:"4";s:8:"user_img";s:11:"006smey.png";s:11:"employee_id";s:1:"6";s:7:"created";s:19:"2015-08-14 06:28:34";s:8:"modified";s:19:"2015-08-14 06:28:34";s:8:"UserRole";a:4:{s:2:"id";s:1:"4";s:4:"role";s:8:"Employee";s:7:"created";s:19:"2015-07-23 10:12:38";s:8:"modified";s:19:"2015-07-23 10:12:38";}}}', 1449219851),
('uls4af1sbeea91qv305mppr2m5', 'Config|a:3:{s:9:"userAgent";s:32:"5ede1ae96f3d5f54b02f9b227e15d613";s:4:"time";i:1446801842;s:9:"countdown";i:10;}Message|a:1:{s:4:"auth";a:3:{s:7:"message";s:47:"You are not authorized to access that location.";s:7:"element";s:7:"default";s:6:"params";a:0:{}}}Auth|a:1:{s:4:"User";a:8:{s:2:"id";s:3:"999";s:8:"username";s:8:"gokuraku";s:12:"user_role_id";s:1:"3";s:8:"user_img";s:16:"default-user.png";s:11:"employee_id";N;s:7:"created";s:19:"2015-08-14 16:42:08";s:8:"modified";s:19:"2015-08-14 16:42:08";s:8:"UserRole";a:4:{s:2:"id";s:1:"3";s:4:"role";s:8:"Gokuraku";s:7:"created";s:19:"2015-07-23 10:12:32";s:8:"modified";s:19:"2015-07-23 10:12:32";}}}', 1446801842),
('v8n3cunibf6677tl1bamo4n3v0', 'Config|a:3:{s:9:"userAgent";s:32:"9d7a57159cbc3418b7f8f70a3f2e707e";s:4:"time";i:1444701321;s:9:"countdown";i:10;}Message|a:1:{s:4:"auth";a:3:{s:7:"message";s:47:"You are not authorized to access that location.";s:7:"element";s:7:"default";s:6:"params";a:0:{}}}Auth|a:1:{s:4:"User";a:8:{s:2:"id";s:1:"1";s:8:"username";s:8:"000sorya";s:12:"user_role_id";s:1:"1";s:8:"user_img";s:12:"000sorya.png";s:11:"employee_id";s:1:"1";s:7:"created";s:19:"2015-08-13 16:55:00";s:8:"modified";s:19:"2015-08-13 16:55:00";s:8:"UserRole";a:4:{s:2:"id";s:1:"1";s:4:"role";s:5:"Admin";s:7:"created";s:19:"2015-07-23 10:11:38";s:8:"modified";s:19:"2015-07-23 10:11:38";}}}', 1444701322);

-- --------------------------------------------------------

--
-- テーブルの構造 `calendars`
--

CREATE TABLE IF NOT EXISTS `calendars` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `allday` tinyint(4) NOT NULL DEFAULT '1',
  `start` datetime NOT NULL,
  `day_type_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `day_type_id_idx` (`day_type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=239 ;

--
-- テーブルのデータをダンプしています `calendars`
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
(77, 'KingFatherCommemorationDay', 1, '2015-10-15 00:00:00', 2),
(78, 'off', 1, '2014-12-10 00:00:00', 1),
(79, 'off', 1, '2014-12-20 00:00:00', 1),
(80, 'off', 1, '2014-12-27 00:00:00', 1),
(81, 'off', 1, '2014-12-29 00:00:00', 1),
(82, 'off', 1, '2014-12-30 00:00:00', 1),
(83, 'off', 1, '2014-12-31 00:00:00', 1),
(84, 'off', 1, '2015-01-01 00:00:00', 1),
(85, 'off', 1, '2015-01-02 00:00:00', 1),
(86, 'off', 1, '2015-01-03 00:00:00', 1),
(87, 'off', 1, '2015-01-10 00:00:00', 1),
(88, 'off', 1, '2015-01-17 00:00:00', 1),
(89, 'off', 1, '2015-01-24 00:00:00', 1),
(90, 'off', 1, '2015-02-03 00:00:00', 1),
(91, 'off', 1, '2015-02-07 00:00:00', 1),
(92, 'off', 1, '2015-02-14 00:00:00', 1),
(93, 'off', 1, '2015-02-21 00:00:00', 1),
(94, 'off', 1, '2015-02-28 00:00:00', 1),
(95, 'off', 1, '2015-03-07 00:00:00', 1),
(96, 'off', 1, '2015-03-09 00:00:00', 1),
(97, 'off', 1, '2015-03-14 00:00:00', 1),
(98, 'off', 1, '2015-03-21 00:00:00', 1),
(99, 'off', 1, '2015-03-28 00:00:00', 1),
(100, 'off', 1, '2015-04-14 00:00:00', 1),
(101, 'off', 1, '2015-04-15 00:00:00', 1),
(102, 'off', 1, '2015-04-16 00:00:00', 1),
(103, 'off', 1, '2015-04-17 00:00:00', 1),
(104, 'off', 1, '2015-04-18 00:00:00', 1),
(105, 'off', 1, '2015-12-06 00:00:00', 1),
(106, 'international human day', 1, '2015-12-10 00:00:00', 2),
(107, 'off', 1, '2015-12-13 00:00:00', 1),
(108, 'off', 1, '2015-12-20 00:00:00', 1),
(109, 'off', 1, '2015-12-26 00:00:00', 1),
(110, 'off', 1, '2015-12-27 00:00:00', 1),
(111, 'finish year holiday', 1, '2015-12-28 00:00:00', 2),
(112, 'finish year holiday', 1, '2015-12-29 00:00:00', 2),
(113, 'finish year holiday', 1, '2015-12-30 00:00:00', 2),
(114, 'finish year holiday', 1, '2015-12-31 00:00:00', 2),
(115, 'new year holiday', 1, '2016-01-01 00:00:00', 2),
(116, 'new year holiday', 1, '2016-01-02 00:00:00', 2),
(117, 'off', 1, '2016-01-03 00:00:00', 1),
(118, 'off', 1, '2016-01-09 00:00:00', 1),
(119, 'off', 1, '2016-01-10 00:00:00', 1),
(120, 'off', 1, '2016-01-16 00:00:00', 1),
(121, 'off', 1, '2016-01-17 00:00:00', 1),
(122, 'Vesna Birthday', 1, '2016-01-17 00:00:00', 5),
(123, 'off', 1, '2016-01-23 00:00:00', 1),
(124, 'off', 1, '2016-01-24 00:00:00', 1),
(125, 'off', 1, '2016-01-30 00:00:00', 1),
(126, 'off', 1, '2016-01-31 00:00:00', 1),
(127, 'off', 1, '2016-02-06 00:00:00', 1),
(128, 'off', 1, '2016-02-07 00:00:00', 1),
(129, 'Sokea Birthday', 1, '2016-02-09 00:00:00', 5),
(130, 'off', 1, '2016-02-13 00:00:00', 1),
(131, 'off', 1, '2016-02-14 00:00:00', 1),
(132, 'off', 1, '2016-02-20 00:00:00', 1),
(133, 'off', 1, '2016-02-21 00:00:00', 1),
(134, 'off', 1, '2016-02-27 00:00:00', 1),
(135, 'off', 1, '2016-02-28 00:00:00', 1),
(136, 'Smey Birthday', 1, '2016-03-01 00:00:00', 5),
(137, 'Liseak Birthday', 1, '2016-03-01 00:00:00', 5),
(138, 'off', 1, '2016-03-05 00:00:00', 1),
(139, 'off', 1, '2016-03-06 00:00:00', 1),
(140, 'off', 1, '2016-03-07 00:00:00', 3),
(141, 'off', 1, '2016-03-12 00:00:00', 1),
(142, 'off', 1, '2016-03-13 00:00:00', 1),
(143, 'off', 1, '2016-03-19 00:00:00', 1),
(144, 'off', 1, '2016-03-20 00:00:00', 1),
(145, 'off', 1, '2016-03-26 00:00:00', 1),
(146, 'off', 1, '2016-03-27 00:00:00', 1),
(147, 'off', 1, '2016-04-03 00:00:00', 1),
(148, 'Sorya Birthday', 1, '2016-04-04 00:00:00', 5),
(149, 'Chhunlay Birthday', 1, '2016-04-07 00:00:00', 5),
(150, 'Seyma Birthday', 1, '2016-04-09 00:00:00', 5),
(151, 'off', 1, '2016-04-09 00:00:00', 1),
(152, 'off', 1, '2016-04-10 00:00:00', 1),
(153, 'Khmer new year', 1, '2016-04-14 00:00:00', 2),
(154, 'Khmer new year', 1, '2016-04-15 00:00:00', 2),
(155, 'Khmer new year', 1, '2016-04-16 00:00:00', 2),
(156, 'off', 1, '2016-04-17 00:00:00', 1),
(157, 'off', 1, '2016-04-24 00:00:00', 1),
(158, 'off', 1, '2016-04-30 00:00:00', 1),
(159, 'Labour Day', 1, '2016-05-01 00:00:00', 2),
(160, 'Nang Birthday', 1, '2016-05-06 00:00:00', 5),
(161, 'off', 1, '2016-05-07 00:00:00', 2),
(162, 'Mother Day', 1, '2016-05-08 00:00:00', 2),
(163, 'King Birthday', 1, '2016-05-13 00:00:00', 2),
(164, 'King Birthday', 1, '2016-05-14 00:00:00', 2),
(165, 'King Birthday', 1, '2016-05-15 00:00:00', 2),
(166, 'off', 1, '2016-05-21 00:00:00', 1),
(167, 'off', 1, '2016-05-22 00:00:00', 1),
(168, 'off', 1, '2016-05-28 00:00:00', 1),
(169, 'off', 1, '2016-05-29 00:00:00', 1),
(170, 'off', 1, '2016-06-04 00:00:00', 1),
(171, 'off', 1, '2016-06-05 00:00:00', 1),
(172, 'off', 1, '2016-06-11 00:00:00', 1),
(173, 'off', 1, '2016-06-12 00:00:00', 1),
(174, 'Queen Birthday', 1, '2016-06-18 00:00:00', 2),
(175, 'off', 1, '2016-06-19 00:00:00', 1),
(176, 'off', 1, '2016-06-25 00:00:00', 1),
(177, 'off', 1, '2016-06-26 00:00:00', 1),
(178, 'off', 1, '2016-07-02 00:00:00', 1),
(179, 'off', 1, '2016-07-03 00:00:00', 1),
(180, 'Lida Birthday', 1, '2016-07-09 00:00:00', 5),
(181, 'off', 1, '2016-07-09 00:00:00', 1),
(182, 'off', 1, '2016-07-10 00:00:00', 1),
(183, 'off', 1, '2016-07-16 00:00:00', 1),
(184, 'off', 1, '2016-07-17 00:00:00', 1),
(185, 'off', 1, '2016-07-23 00:00:00', 1),
(186, 'off', 1, '2016-07-24 00:00:00', 1),
(187, 'off', 1, '2016-07-30 00:00:00', 1),
(188, 'off', 1, '2016-07-31 00:00:00', 1),
(189, 'off', 1, '2016-08-06 00:00:00', 1),
(190, 'off', 1, '2016-08-07 00:00:00', 1),
(191, 'off', 1, '2016-08-13 00:00:00', 1),
(192, 'off', 1, '2016-08-14 00:00:00', 1),
(193, 'Sovan Birthday', 1, '2016-08-18 00:00:00', 5),
(194, 'off', 1, '2016-08-20 00:00:00', 1),
(195, 'off', 1, '2016-08-21 00:00:00', 1),
(196, 'off', 1, '2016-08-27 00:00:00', 1),
(197, 'off', 1, '2016-08-28 00:00:00', 1),
(198, 'off', 1, '2016-09-03 00:00:00', 1),
(199, 'off', 1, '2016-09-04 00:00:00', 1),
(200, 'off', 1, '2016-09-10 00:00:00', 1),
(201, 'off', 1, '2016-09-11 00:00:00', 1),
(202, 'Khemra Birthday', 1, '2016-09-15 00:00:00', 5),
(203, 'off', 1, '2016-09-17 00:00:00', 1),
(204, 'off', 1, '2016-09-18 00:00:00', 1),
(205, 'off', 1, '2016-09-24 00:00:00', 1),
(206, 'off', 1, '2016-09-25 00:00:00', 1),
(207, 'off', 1, '2016-10-02 00:00:00', 1),
(208, 'off', 1, '2016-10-09 00:00:00', 1),
(209, 'Pidoar Birthday', 1, '2016-10-10 00:00:00', 5),
(210, 'off', 1, '2016-10-10 00:00:00', 3),
(211, 'Bonn Pchum Ben', 1, '2016-10-11 00:00:00', 2),
(212, 'Bonn Pchum Ben', 1, '2016-10-12 00:00:00', 2),
(213, 'Bonn Pchum Ben', 1, '2016-10-13 00:00:00', 2),
(214, 'off', 1, '2016-10-14 00:00:00', 3),
(215, 'King Father Commemoration Day', 1, '2016-10-15 00:00:00', 2),
(216, 'off', 1, '2016-10-16 00:00:00', 1),
(217, 'Paris Peace Day', 1, '2016-10-23 00:00:00', 2),
(218, 'King Sihamoni Coronation Day', 1, '2016-10-29 00:00:00', 2),
(219, 'off', 1, '2016-10-30 00:00:00', 1),
(220, 'off', 1, '2016-11-05 00:00:00', 1),
(221, 'off', 1, '2016-11-06 00:00:00', 1),
(222, 'off', 1, '2016-11-13 00:00:00', 1),
(223, 'off', 1, '2016-11-19 00:00:00', 1),
(224, 'off', 1, '2016-11-20 00:00:00', 1),
(225, 'Water Festival', 1, '2016-11-24 00:00:00', 2),
(226, 'Water Festival', 1, '2016-11-25 00:00:00', 2),
(227, 'Water Festival', 1, '2016-11-26 00:00:00', 2),
(228, 'off', 1, '2016-11-27 00:00:00', 1),
(229, 'off', 1, '2016-12-04 00:00:00', 1),
(230, 'off', 1, '2016-12-11 00:00:00', 1),
(231, 'off', 1, '2016-12-18 00:00:00', 1),
(232, 'off', 1, '2016-12-25 00:00:00', 1),
(233, 'off', 1, '2016-12-26 00:00:00', 3),
(234, 'off', 1, '2016-12-27 00:00:00', 3),
(235, 'off', 1, '2016-12-28 00:00:00', 3),
(236, 'finish year holiday', 1, '2016-12-29 00:00:00', 3),
(237, 'finish year holiday', 1, '2016-12-30 00:00:00', 3),
(238, 'finish year holiday', 1, '2016-12-31 00:00:00', 3);

-- --------------------------------------------------------

--
-- テーブルの構造 `careers`
--

CREATE TABLE IF NOT EXISTS `careers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `career` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `basic_salary` int(11) NOT NULL,
  `hourly_wage` float DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `career_UNIQUE` (`career`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- テーブルのデータをダンプしています `careers`
--

INSERT INTO `careers` (`id`, `career`, `basic_salary`, `hourly_wage`) VALUES
(1, 'manager', 330, 1.3),
(2, 'regular employee', 200, 1),
(3, 'internship', 180, 1);

-- --------------------------------------------------------

--
-- テーブルの構造 `clients`
--

CREATE TABLE IF NOT EXISTS `clients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `client` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `client_UNIQUE` (`client`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- テーブルのデータをダンプしています `clients`
--

INSERT INTO `clients` (`id`, `client`) VALUES
(12, 'ALLCREATE'),
(8, 'degital ark'),
(1, 'Gokuraku'),
(11, 'jamTV'),
(9, 'Japan Entertainment'),
(10, 'mignet'),
(4, 'Oredo'),
(2, 'Porcom'),
(7, 'Queens Road'),
(3, 'September'),
(6, 'tsukubaTV'),
(5, 'vip');

-- --------------------------------------------------------

--
-- テーブルの構造 `day_types`
--

CREATE TABLE IF NOT EXISTS `day_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `day_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- テーブルのデータをダンプしています `day_types`
--

INSERT INTO `day_types` (`id`, `day_type`) VALUES
(1, 'regular holiday'),
(2, 'public holiday'),
(3, 'compensatory holiday'),
(4, 'special holiday'),
(5, 'birthday');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=17 ;

--
-- テーブルのデータをダンプしています `employees`
--

INSERT INTO `employees` (`id`, `first_name`, `family_name`, `employee_no`, `sex`, `birthday`, `tel`, `address`, `occupation`, `career_id`, `employee_group_id`, `prof_img`, `start_date`, `terminated_date`, `memo`, `created`, `modified`) VALUES
(1, 'Sorya', 'Hikichi', '000Sorya', '1', '1989-04-04', '015676792', '#41 St3 Sangkat Teuk Thla Sensok PP', 'CEO', 1, 1, '000sorya.png', '2014-10-20', NULL, 'NULL', '2014-10-20 00:00:00', '2015-08-13 00:00:00'),
(2, 'Pidoar', 'Soun', '001Pidoar', '1', '1988-10-10', '070485049', '', 'COO', 1, 1, '001pidoar.png', '2014-10-20', NULL, 'NULL', '2014-10-20 00:00:00', '2015-08-13 00:00:00'),
(3, 'Nang', 'Khut', '002Nang', '1', '1981-05-06', '087816484', '', 'regular', 2, 1, '002nang.png', '2014-12-01', NULL, 'NULL', '2014-12-01 00:00:00', '2015-08-13 00:00:00'),
(4, 'Liseak', 'Sovan', '004Liseak', '1', '1994-03-01', '0962557056', '', 'student', 2, 1, '004liseak.png', '2014-12-01', NULL, 'NULL', '2014-12-01 00:00:00', '2015-08-13 00:00:00'),
(5, 'Sokea', 'Seng', '005Sokea', '1', '1994-02-09', '0965566011', '', 'student', 2, 1, '005sokea.png', '2014-12-01', NULL, 'NULL', '2014-12-01 00:00:00', '2015-08-13 00:00:00'),
(6, 'Smey', 'Reak', '006Smey', '1', '1993-03-01', '093791414', '', 'regular', 2, 1, '006smey.png', '2014-12-01', NULL, 'NULL', '2014-12-01 00:00:00', '2015-08-13 00:00:00'),
(7, 'Sovan', 'Moul', '007Sovan', '1', '1989-08-18', '098715613', '', 'regular', 2, 1, '007sovan.png', '2014-12-01', NULL, 'NULL', '2014-12-01 00:00:00', '2015-08-13 00:00:00'),
(8, 'Chhunlay', 'Ly', '008Chhunlay', '1', '1979-04-07', '0969999837', '', 'regular', 2, 1, '008chhunlay.png', '2014-12-05', NULL, 'NULL', '2014-12-05 00:00:00', '2015-08-13 00:00:00'),
(9, 'Tida', 'Som', '009Tida', '2', '1994-01-05', '0968736924', '', 'regular', 2, 1, '009tida.png', '2015-03-02', '2015-08-04', 'NULL', '2015-03-02 00:00:00', '2015-08-13 00:00:00'),
(10, 'Seyma', 'Chrun', '010Seyma', '2', '1993-04-09', '069296595', '', 'regular', 2, 1, '010seyma.png', '2015-03-02', NULL, 'NULL', '2015-03-02 00:00:00', '2015-08-13 00:00:00'),
(11, 'Khemra', 'Sok', '011Khemra', '2', '1989-09-15', '010658806', '', 'regular', 2, 0, '011khemra.png', '2015-08-03', NULL, '', '2015-08-14 11:54:27', '2015-08-14 11:54:27'),
(12, 'Sopheap', 'Sim', '012Sopheap', '1', '1984-04-27', '098233292', '', 'regular', 2, 0, '012sopheap.png', '2015-08-03', '2015-08-20', '', '2015-08-14 11:55:33', '2015-08-14 11:55:33'),
(13, 'Vesna', 'Un', '013Vesna', '1', '1991-01-17', '016208337', '', 'regular', 2, 0, '013vesna.png', '2015-08-10', NULL, '', '2015-08-14 11:56:18', '2015-08-14 11:56:18'),
(14, 'Lida', 'Ouk', '014Lida', '1', '1994-09-07', '', '', 'regular', 3, 0, '014lida.png', '2015-09-01', NULL, '', '2015-09-02 12:04:13', '2015-09-02 12:04:13'),
(15, 'Rithy', 'Yem', '015Rithy', '1', '1996-07-13', '0889804848', 'St.Betong, Sangkat Dangkor, Khan Dangkor, PP', 'Student', 3, 0, '015rithy.png', '2015-11-02', NULL, '', '2015-11-02 09:00:49', '2015-11-02 09:00:49'),
(16, 'Chea', 'Dany', '016Chea', '2', '1994-05-09', '070836578', '', 'Staff', 3, 0, NULL, '2015-11-10', NULL, '', '2015-11-12 12:37:41', '2015-11-12 12:37:41');

-- --------------------------------------------------------

--
-- テーブルの構造 `employee_groups`
--

CREATE TABLE IF NOT EXISTS `employee_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_group` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- テーブルのデータをダンプしています `employee_groups`
--

INSERT INTO `employee_groups` (`id`, `employee_group`) VALUES
(1, '1'),
(2, '2');

-- --------------------------------------------------------

--
-- テーブルの構造 `goal_settings`
--

CREATE TABLE IF NOT EXISTS `goal_settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `month` date NOT NULL,
  `goal_type_id` int(11) NOT NULL,
  `goal_value` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `goal_setting_id_UNIQUE` (`id`),
  KEY `goal_type_id_idx` (`goal_type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=39 ;

--
-- テーブルのデータをダンプしています `goal_settings`
--

INSERT INTO `goal_settings` (`id`, `month`, `goal_type_id`, `goal_value`, `created`, `modified`) VALUES
(29, '2015-08-01', 1, 1300000, '2015-08-13 19:07:47', '2015-08-13 19:07:47'),
(30, '2015-08-01', 2, 170000, '2015-08-13 19:08:02', '2015-08-13 19:08:02'),
(31, '2015-08-01', 2, 200000, '2015-08-13 19:44:05', '2015-08-13 19:44:05'),
(32, '2015-09-01', 1, 1400000, '2015-09-01 12:49:05', '2015-09-01 12:49:05'),
(33, '2015-09-01', 2, 180000, '2015-09-01 12:49:13', '2015-09-01 12:49:13'),
(34, '2015-09-01', 1, 1600000, '2015-09-12 09:06:42', '2015-09-12 09:06:42'),
(35, '2015-10-01', 1, 1800000, '2015-10-01 06:34:41', '2015-10-01 06:34:41'),
(36, '2015-10-01', 2, 180000, '2015-10-01 06:34:47', '2015-10-01 06:34:47'),
(37, '2015-11-01', 1, 1800000, '2015-11-02 08:58:53', '2015-11-02 08:58:53'),
(38, '2015-11-01', 2, 180000, '2015-11-02 08:59:00', '2015-11-02 08:59:00');

-- --------------------------------------------------------

--
-- テーブルの構造 `goal_types`
--

CREATE TABLE IF NOT EXISTS `goal_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `goal_type` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- テーブルのデータをダンプしています `goal_types`
--

INSERT INTO `goal_types` (`id`, `goal_type`) VALUES
(1, 'indivisual'),
(2, 'team');

-- --------------------------------------------------------

--
-- テーブルの構造 `mosaic_sizes`
--

CREATE TABLE IF NOT EXISTS `mosaic_sizes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mosaic_size` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `note` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- テーブルのデータをダンプしています `mosaic_sizes`
--

INSERT INTO `mosaic_sizes` (`id`, `mosaic_size`, `note`, `created`, `modified`) VALUES
(1, 'normal', NULL, NULL, NULL),
(2, '-1', NULL, NULL, NULL),
(3, '-2', NULL, NULL, NULL),
(4, '+1', NULL, NULL, NULL),
(5, '+2', NULL, NULL, NULL),
(6, '-3', NULL, NULL, NULL),
(7, '+3', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- テーブルの構造 `mosaic_types`
--

CREATE TABLE IF NOT EXISTS `mosaic_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mosaic_type` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `note` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `mosaic_type_UNIQUE` (`mosaic_type`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- テーブルのデータをダンプしています `mosaic_types`
--

INSERT INTO `mosaic_types` (`id`, `mosaic_type`, `note`, `created`, `modified`) VALUES
(1, 'normal', NULL, NULL, NULL),
(2, 'CS', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- テーブルの構造 `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `control_no` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `file_name` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `client_id` int(11) NOT NULL,
  `delivery_date` date NOT NULL,
  `mosaic_type_id` int(11) NOT NULL,
  `mosaic_size_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `length` int(11) NOT NULL,
  `target_time` int(11) DEFAULT NULL,
  `cut_count` int(11) DEFAULT NULL,
  `multiplay` int(11) DEFAULT NULL,
  `note` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status_type_id` int(11) DEFAULT NULL,
  `worktime` float DEFAULT NULL,
  `started` datetime DEFAULT NULL,
  `completed` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `control_no_UNIQUE` (`control_no`),
  KEY `mosaic_type_id` (`mosaic_type_id`),
  KEY `mosaic_size_id` (`mosaic_size_id`),
  KEY `status_id` (`status_type_id`),
  KEY `client_id` (`client_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='			' AUTO_INCREMENT=307 ;

--
-- テーブルのデータをダンプしています `orders`
--

INSERT INTO `orders` (`id`, `control_no`, `file_name`, `client_id`, `delivery_date`, `mosaic_type_id`, `mosaic_size_id`, `price`, `length`, `target_time`, `cut_count`, `multiplay`, `note`, `status_type_id`, `worktime`, `started`, `completed`, `created`, `modified`) VALUES
(1, 'GK00013', 'nannpaheaven', 1, '2035-01-01', 1, 1, 10000, 50, 12, 0, 0, 'NULL', 3, 19.75, '2015-01-30 09:00:00', '2015-02-02 12:40:00', '0000-00-00 00:00:00', '2015-08-16 11:28:53'),
(2, 'GK00014', 'nannpaheaven', 1, '2035-01-01', 1, 1, 5000, 36, 6, 0, 0, 'NULL', 3, 11.75, '2015-02-02 15:00:00', '2015-02-05 10:40:00', '0000-00-00 00:00:00', '2015-08-16 11:28:20'),
(3, 'GK0001', 'tsukuba', 1, '2035-01-01', 2, 1, 9000, 120, 8, 0, 0, 'NULL', 3, 19.75, '2015-02-05 13:30:00', '2015-02-09 17:00:00', '0000-00-00 00:00:00', '2015-08-16 11:29:16'),
(4, 'GK0002', 'tsukuba', 1, '2035-01-01', 2, 1, 9000, 120, 8, 0, 0, 'NULL', 3, 19.75, '2015-02-05 13:30:00', '2015-02-09 17:00:00', '0000-00-00 00:00:00', '2015-08-16 11:27:46'),
(5, 'GK0003', 'tsukuba', 1, '2035-01-01', 2, 1, 9000, 120, 8, 0, 0, 'NULL', 3, 17, '2015-02-05 13:30:00', '2015-02-09 14:25:00', '0000-00-00 00:00:00', '2015-08-16 11:27:15'),
(6, 'GK0004', 'akasuri', 1, '2035-01-01', 1, 1, 41040, 240, 48, 0, 0, 'NULL', 3, 33, '2015-02-05 13:30:00', '2015-02-11 14:18:00', '0000-00-00 00:00:00', '2015-08-16 11:26:29'),
(7, 'GK0006', 'bazx008', 6, '0000-00-00', 2, 1, 19440, 120, 8, 0, 0, 'NULL', 3, 23.5, '2015-02-09 14:07:00', '2015-02-12 13:30:00', '0000-00-00 00:00:00', '2015-08-13 20:03:42'),
(8, 'GK0009', 'wosyuret_kouhen', 6, '0000-00-00', 2, 1, 19440, 120, 8, 0, 0, 'NULL', 3, 18.5, '2015-02-10 12:00:00', '2015-02-12 14:25:00', '0000-00-00 00:00:00', '2015-08-13 20:01:38'),
(9, 'GK0007', 'bazx005', 6, '0000-00-00', 2, 1, 19440, 120, 8, 0, 0, 'NULL', 3, 25.5, '2015-02-10 08:00:00', '2015-02-12 17:30:00', '0000-00-00 00:00:00', '2015-08-13 20:02:49'),
(10, 'GK0008', 'wosyuret', 6, '0000-00-00', 2, 1, 19440, 120, 8, 0, 0, 'NULL', 3, 24.5, '2015-02-10 15:30:00', '2015-02-16 08:00:00', '0000-00-00 00:00:00', '2015-08-13 20:02:47'),
(11, 'GK0005', 'bazooka_kodukuri', 1, '2035-01-01', 1, 1, 41040, 240, 48, 0, 0, 'NULL', 3, 60.5, '2015-02-10 15:30:00', '2015-02-20 12:00:00', '0000-00-00 00:00:00', '2015-08-16 11:25:19'),
(12, 'GK0010', 'bazooka_keiren', 1, '2035-01-01', 1, 1, 41040, 240, 48, 0, 0, 'NULL', 3, 54.75, '2015-02-11 15:08:00', '2015-02-20 13:39:00', '0000-00-00 00:00:00', '2015-08-16 11:23:54'),
(13, 'GK0012', 'himitsu_kyousei', 1, '2035-01-01', 1, 1, 20520, 120, 24, 0, 0, 'NULL', 3, 28, '2015-02-20 15:00:00', '2015-02-25 13:51:00', '0000-00-00 00:00:00', '2015-08-16 11:22:20'),
(14, 'GK0013', 'tomono', 3, '0000-00-00', 2, 1, 9720, 60, 4, 0, 0, 'NULL', 3, 17, '2015-02-24 08:00:00', '2015-02-25 17:00:00', '0000-00-00 00:00:00', '2015-08-13 20:02:44'),
(15, 'GK0014', 'tomono', 3, '0000-00-00', 2, 1, 9720, 60, 4, 0, 0, 'NULL', 3, 9.5, '2015-02-24 08:00:00', '2015-02-25 09:27:00', '0000-00-00 00:00:00', '2015-08-13 20:01:27'),
(16, 'GK0015', 'hosino', 3, '0000-00-00', 2, 1, 14580, 90, 6, 0, 0, 'NULL', 3, 19.5, '2015-02-24 08:00:00', '2015-02-26 11:21:00', '0000-00-00 00:00:00', '2015-08-13 20:01:27'),
(17, 'GK0016', 'NTSU', 5, '0000-00-00', 2, 1, 38880, 240, 16, 0, 0, 'NULL', 3, 14, '2015-02-25 09:27:00', '2015-02-26 15:25:00', '0000-00-00 00:00:00', '2015-08-13 20:01:26'),
(18, 'GK0011', 'scoop mansyon', 1, '2035-01-01', 1, 1, 41040, 240, 48, 0, 0, 'NULL', 3, 67.75, '2015-02-17 13:15:00', '2015-02-27 17:00:00', '0000-00-00 00:00:00', '2015-08-16 11:15:42'),
(19, 'GK0017', 'ucyuu natsume', 1, '0000-00-00', 1, 1, 23750, 150, 30, 0, 0, 'NULL', 3, 62.25, '2015-02-27 12:00:00', '2015-03-11 12:03:00', '0000-00-00 00:00:00', '2015-08-13 20:02:39'),
(20, 'GK0019', 'ODFP R-1', 7, '0000-00-00', 1, 1, 41040, 120, 24, 0, 0, 'NULL', 3, 37.75, '2015-03-03 15:56:00', '2015-03-11 13:35:00', '0000-00-00 00:00:00', '2015-08-13 20:02:38'),
(21, 'GK0020', 'ODFP R-2', 7, '0000-00-00', 1, 1, 41040, 120, 24, 0, 0, 'NULL', 3, 41, '2015-03-03 16:20:00', '2015-03-11 13:14:00', '0000-00-00 00:00:00', '2015-08-13 20:02:36'),
(22, 'GK0018', 'call girl', 1, '0000-00-00', 1, 1, 38000, 240, 48, 0, 0, 'NULL', 3, 59.75, '2015-03-03 13:30:00', '2015-03-13 17:00:00', '0000-00-00 00:00:00', '2015-08-13 20:02:34'),
(23, 'GK0021', 'fuyutsuki', 3, '0000-00-00', 2, 1, 19440, 120, 8, 0, 0, 'NULL', 3, 32.5, '2015-03-12 08:00:00', '2015-03-17 14:51:00', '0000-00-00 00:00:00', '2015-08-13 20:01:21'),
(24, 'GK0022', 'uehara', 3, '0000-00-00', 2, 1, 19440, 120, 8, 0, 0, 'NULL', 3, 34.75, '2015-03-12 08:00:00', '2015-03-17 17:10:00', '0000-00-00 00:00:00', '2015-08-13 20:01:19'),
(25, 'GK0023', 'AV debut', 3, '0000-00-00', 2, 1, 19440, 120, 8, 0, 0, 'NULL', 3, 31.5, '2015-03-12 08:00:00', '2015-03-17 09:24:00', '0000-00-00 00:00:00', '2015-08-13 20:01:22'),
(26, 'GK0024', 'morino', 3, '0000-00-00', 2, 1, 19440, 120, 8, 0, 0, 'NULL', 3, 23.5, '2015-03-12 12:00:00', '2015-03-17 08:59:00', '0000-00-00 00:00:00', '2015-08-13 20:01:18'),
(27, 'GK0025', 'enkou', 4, '0000-00-00', 1, 1, 41040, 120, 24, 0, 0, 'NULL', 3, 31.75, '2015-03-17 09:30:00', '2015-03-23 09:06:00', '0000-00-00 00:00:00', '2015-08-13 20:02:31'),
(28, 'GK0027', 'babamegane R-1', 1, '0000-00-00', 1, 1, 6300, 40, 8, 0, 0, 'NULL', 3, 18.75, '2015-03-18 16:00:00', '2015-03-23 10:44:00', '0000-00-00 00:00:00', '2015-08-13 20:01:14'),
(29, 'GK0026', 'cyoukyou', 4, '0000-00-00', 1, 1, 41040, 120, 24, 0, 0, 'NULL', 3, 55.75, '2015-03-17 09:30:00', '2015-03-25 17:02:00', '0000-00-00 00:00:00', '2015-08-13 20:01:13'),
(30, 'GK0030', 'NTSU-032', 5, '0000-00-00', 2, 1, 38880, 240, 16, 0, 0, 'NULL', 3, 17.25, '2015-03-24 08:00:00', '2015-03-25 17:02:00', '0000-00-00 00:00:00', '2015-08-13 20:01:13'),
(31, 'GK0029', 'babamegane R-2', 1, '0000-00-00', 1, 1, 6300, 40, 8, 0, 0, 'NULL', 3, 22.75, '2015-03-23 12:00:00', '2015-03-26 10:39:00', '0000-00-00 00:00:00', '2015-08-13 20:02:28'),
(32, 'GK0031', 'mensetsu', 4, '0000-00-00', 1, 1, 41040, 120, 24, 0, 0, 'NULL', 3, 32.75, '2015-03-24 15:00:00', '2015-03-30 15:45:00', '0000-00-00 00:00:00', '2015-08-13 20:01:12'),
(33, 'GK0035', 'babamegane R-3', 1, '0000-00-00', 1, 1, 6300, 40, 24, 0, 0, 'NULL', 3, 19.75, '2015-03-26 13:30:00', '2015-03-30 16:42:00', '0000-00-00 00:00:00', '2015-08-13 20:01:10'),
(34, 'GK0028', 'tomine', 3, '0000-00-00', 1, 1, 41040, 120, 24, 0, 0, 'NULL', 3, 54.25, '2015-03-20 12:30:00', '2015-03-31 04:37:00', '0000-00-00 00:00:00', '2015-08-13 20:02:26'),
(35, 'GK0032', 'rosyutu', 4, '0000-00-00', 1, 1, 41040, 120, 24, 0, 0, 'NULL', 3, 32.25, '2015-03-25 08:00:00', '2015-03-31 05:10:00', '0000-00-00 00:00:00', '2015-08-13 20:02:22'),
(36, 'GK0033', 'nagareru', 1, '0000-00-00', 1, 1, 38000, 240, 48, 0, 0, 'NULL', 3, 41, '2015-03-25 08:00:00', '2015-03-31 17:00:00', '0000-00-00 00:00:00', '2015-08-13 20:02:20'),
(37, 'GK0034', 'momose', 3, '0000-00-00', 1, 1, 44388, 130, 26, 0, 0, 'NULL', 3, 36, '2015-03-26 08:00:00', '2015-04-01 12:00:00', '0000-00-00 00:00:00', '2015-08-13 20:01:07'),
(38, 'GK0037', 'omori', 8, '0000-00-00', 1, 1, 41040, 120, 24, 0, 0, 'NULL', 3, 61.25, '2015-03-26 12:00:00', '2015-04-04 17:00:00', '0000-00-00 00:00:00', '2015-08-13 20:01:06'),
(39, 'GK0038', 'yosinaga', 7, '0000-00-00', 1, 1, 41040, 120, 24, 0, 0, 'NULL', 3, 45.75, '2015-04-01 08:00:00', '2015-04-07 12:03:00', '0000-00-00 00:00:00', '2015-08-13 20:03:05'),
(40, 'GK0039', 'tamaki', 7, '0000-00-00', 1, 1, 41040, 120, 24, 0, 0, 'NULL', 3, 44.75, '2015-04-01 08:00:00', '2015-04-07 10:04:00', '0000-00-00 00:00:00', '2015-08-13 20:02:15'),
(42, 'GK0036', 'anahiku', 1, '0000-00-00', 1, 1, 38000, 240, 48, 0, 0, 'NULL', 3, 85.75, '2015-03-26 14:00:00', '2015-04-08 16:37:00', '0000-00-00 00:00:00', '2015-08-13 20:01:03'),
(43, 'GK0041', 'bazcs 007', 1, '0000-00-00', 2, 1, 9000, 120, 8, 0, 0, 'NULL', 3, 16, '2015-04-06 13:00:00', '2015-04-08 10:00:00', '0000-00-00 00:00:00', '2015-08-13 20:02:13'),
(44, 'GK0043', 'scpcs 011', 1, '0000-00-00', 2, 1, 9000, 120, 8, 0, 0, 'NULL', 3, 12.5, '2015-04-07 10:00:00', '2015-04-08 13:15:00', '0000-00-00 00:00:00', '2015-08-13 20:01:02'),
(45, 'GK0040', 'abeno', 7, '0000-00-00', 1, 1, 41040, 120, 24, 0, 0, 'NULL', 3, 46.5, '2015-04-02 15:00:00', '2015-04-09 10:29:00', '0000-00-00 00:00:00', '2015-08-13 20:02:10'),
(46, 'GK0042', 'bazcs004', 1, '0000-00-00', 2, 1, 9000, 120, 8, 0, 0, 'NULL', 3, 17, '2015-04-07 10:00:00', '2015-04-09 09:56:00', '0000-00-00 00:00:00', '2015-08-13 20:02:07'),
(47, 'GK0044', 'bazcs 010', 1, '0000-00-00', 2, 1, 9000, 120, 8, 0, 0, 'NULL', 3, 24.5, '2015-04-08 09:32:00', '2015-04-10 16:56:00', '0000-00-00 00:00:00', '2015-08-13 20:02:04'),
(48, 'GK0046', 'hayama', 3, '0000-00-00', 1, 1, 41040, 120, 24, 0, 0, 'NULL', 3, 24, '2015-04-08 15:20:00', '2015-04-11 14:10:00', '0000-00-00 00:00:00', '2015-08-13 20:00:59'),
(49, 'GK0045', 'ucyuu mizuno', 1, '0000-00-00', 1, 1, 23750, 150, 30, 0, 0, 'NULL', 3, 51.25, '2015-04-08 10:26:00', '2015-04-13 17:00:00', '0000-00-00 00:00:00', '2015-08-13 20:02:00'),
(50, 'GK0048', 'scoop asadati', 1, '0000-00-00', 1, 1, 38000, 120, 24, 0, 0, 'NULL', 3, 32.25, '2015-04-09 12:00:00', '2015-04-13 16:04:00', '0000-00-00 00:00:00', '2015-08-13 20:00:57'),
(51, 'GK0049', 'enkou2', 4, '0000-00-00', 1, 1, 41040, 120, 24, 0, 0, 'NULL', 3, 26.75, '2015-04-10 10:20:00', '2015-04-13 17:00:00', '0000-00-00 00:00:00', '2015-08-13 20:00:56'),
(52, 'GK0051', 'rosyutu2', 4, '0000-00-00', 1, 1, 41040, 120, 24, 0, 0, 'NULL', 3, 40, '2015-04-11 12:30:00', '2015-04-20 17:00:00', '0000-00-00 00:00:00', '2015-08-13 20:01:55'),
(53, 'GK0050', 'kankin2', 4, '0000-00-00', 1, 1, 41040, 120, 24, 0, 0, 'NULL', 3, 36, '2015-04-11 08:00:00', '2015-04-21 17:00:00', '0000-00-00 00:00:00', '2015-08-13 20:01:46'),
(54, 'GK0052', 'oredo080', 4, '0000-00-00', 1, 1, 82080, 240, 48, 0, 0, 'NULL', 3, 34, '2015-04-20 08:00:00', '2015-04-21 17:00:00', '0000-00-00 00:00:00', '2015-08-13 20:00:53'),
(55, 'GK0047', 'osima', 3, '0000-00-00', 1, 1, 44388, 130, 26, 0, 0, 'NULL', 3, 73.75, '2015-04-11 10:00:00', '2015-04-23 17:00:00', '0000-00-00 00:00:00', '2015-08-13 20:01:42'),
(56, 'GK0053', 'vip054', 5, '0000-00-00', 2, 1, 38000, 240, 16, 0, 0, 'NULL', 3, 42.5, '2015-04-20 11:00:00', '2015-04-23 13:40:00', '0000-00-00 00:00:00', '2015-08-13 20:00:51'),
(57, 'GK0054', 'h421', 2, '0000-00-00', 1, 1, 19000, 60, 12, 0, 0, 'NULL', 3, 17.25, '2015-04-21 08:00:00', '2015-04-23 08:10:00', '0000-00-00 00:00:00', '2015-08-13 20:00:50'),
(58, 'GK0055', 'tubo1', 1, '0000-00-00', 2, 1, 9000, 120, 8, 0, 0, 'NULL', 3, 19.75, '2015-04-23 12:00:00', '2015-04-24 14:00:00', '0000-00-00 00:00:00', '2015-08-13 20:00:48'),
(59, 'GK0056', 'tubo2', 1, '0000-00-00', 2, 1, 9000, 120, 8, 0, 0, 'NULL', 3, 26.75, '2015-04-24 09:30:00', '2015-04-25 11:00:00', '0000-00-00 00:00:00', '2015-08-13 19:59:35'),
(60, 'GK0057', 'oiran', 7, '0000-00-00', 1, 1, 41040, 120, 24, 0, 0, 'NULL', 3, 50, '2015-04-25 08:00:00', '2015-04-27 09:30:00', '0000-00-00 00:00:00', '2015-08-13 19:59:32'),
(61, 'GK0058', 'miyabi', 3, '0000-00-00', 1, 1, 44460, 130, 26, 0, 0, 'NULL', 3, 81.25, '2015-04-27 12:00:00', '2015-04-28 16:45:00', '0000-00-00 00:00:00', '2015-08-13 19:59:29'),
(62, 'GK0061', 'b429', 2, '0000-00-00', 1, 1, 20520, 60, 12, 0, 0, 'NULL', 3, 9.75, '2015-04-28 12:00:00', '2015-04-29 10:00:00', '0000-00-00 00:00:00', '2015-08-13 19:59:25'),
(63, 'GK0059', 'hapber', 1, '0000-00-00', 1, 1, 31600, 200, 40, 0, 0, 'NULL', 3, 45.5, '2015-04-28 09:30:00', '2015-04-29 17:00:00', '0000-00-00 00:00:00', '2015-08-13 19:59:23'),
(64, 'GK0060', 'ingo', 7, '0000-00-00', 1, 1, 41040, 120, 24, 0, 0, 'NULL', 3, 42.25, '2015-04-29 08:00:00', '2015-04-29 17:00:00', '0000-00-00 00:00:00', '2015-08-13 19:59:20'),
(65, 'GK0062', 'real 001', 1, '0000-00-00', 1, 1, 33250, 210, 42, 0, 0, 'NULL', 3, 54.25, '2015-04-30 09:30:00', '2015-04-30 17:00:00', '0000-00-00 00:00:00', '2015-08-13 19:59:17'),
(66, 'GK0063', 'ucyu haruna', 1, '0000-00-00', 1, 1, 23750, 150, 30, 0, 0, 'NULL', 3, 47, '2015-05-04 08:00:00', '2015-05-04 17:00:00', '0000-00-00 00:00:00', '2015-08-13 19:59:15'),
(67, 'GK0064', 'natume', 7, '0000-00-00', 1, 1, 44460, 130, 26, 0, 0, 'NULL', 3, 22.75, '2015-05-04 08:00:00', '2015-05-05 17:00:00', '0000-00-00 00:00:00', '2015-08-13 19:59:12'),
(68, 'GK0065', 'queen 035', 7, '0000-00-00', 1, 1, 41040, 120, 24, 0, 0, 'NULL', 3, 37.5, '2015-05-04 12:00:00', '2015-05-06 15:15:00', '0000-00-00 00:00:00', '2015-08-13 19:59:10'),
(69, 'GK0067', 'tujii', 7, '0000-00-00', 1, 1, 41040, 120, 24, 0, 0, 'NULL', 3, 27.5, '2015-05-04 10:30:00', '2015-05-06 13:57:00', '0000-00-00 00:00:00', '2015-08-13 19:59:07'),
(70, 'GK0066', 'Bazooka seppun', 1, '0000-00-00', 1, 1, 38000, 240, 48, 0, 0, 'NULL', 3, 58.75, '2015-05-04 12:00:00', '2015-05-06 17:00:00', '0000-00-00 00:00:00', '2015-08-13 19:59:05'),
(71, 'GK0068', '2', 2, '0000-00-00', 1, 1, 20520, 60, 12, 0, 0, 'NULL', 3, 13.5, '2015-05-08 16:45:00', '2015-05-09 11:15:00', '0000-00-00 00:00:00', '2015-08-13 19:59:03'),
(72, 'GK0069', 'sept suzukawa', 3, '0000-00-00', 1, 1, 44460, 130, 26, 0, 0, 'NULL', 3, 42.5, '2015-05-11 12:30:00', '2015-05-12 15:00:00', '0000-00-00 00:00:00', '2015-08-13 19:59:00'),
(73, 'GK0070', '2', 2, '0000-00-00', 1, 1, 20520, 60, 12, 0, 0, 'NULL', 3, 16.75, '2015-05-18 08:30:00', '2015-05-18 12:17:00', '0000-00-00 00:00:00', '2015-08-13 19:58:58'),
(74, 'GK0071', 'baba', 1, '0000-00-00', 2, 1, 12000, 160, 12, 0, 0, 'NULL', 3, 28.25, '2015-05-18 13:00:00', '2015-05-18 17:00:00', '0000-00-00 00:00:00', '2015-08-13 19:58:56'),
(75, 'GK0072', 'ryu', 3, '0000-00-00', 1, 1, 41040, 120, 24, 0, 0, 'NULL', 3, 74.25, '2015-05-19 08:00:00', '2015-05-21 16:00:00', '0000-00-00 00:00:00', '2015-08-13 19:58:53'),
(76, 'GK0073', 'enko3', 4, '0000-00-00', 1, 1, 41040, 120, 24, 0, 0, 'NULL', 3, 30, '2015-05-19 08:00:00', '2015-05-21 10:34:00', '0000-00-00 00:00:00', '2015-08-13 19:58:50'),
(77, 'GK0074', 'kankin3', 4, '0000-00-00', 1, 1, 41040, 120, 24, 0, 0, 'NULL', 3, 38, '2015-05-19 12:00:00', '2015-05-21 13:00:00', '0000-00-00 00:00:00', '2015-08-13 19:58:48'),
(78, 'GK0075', 'oredo 010', 4, '0000-00-00', 1, 1, 41040, 120, 24, 0, 0, 'NULL', 3, 44, '2015-05-22 08:00:00', '2015-05-22 15:15:00', '0000-00-00 00:00:00', '2015-08-13 19:58:45'),
(79, 'GK0076', 'oredo 012', 4, '0000-00-00', 1, 1, 41040, 120, 24, 0, 0, 'NULL', 3, 24.75, '2015-05-22 12:30:00', '2015-05-22 17:00:00', '0000-00-00 00:00:00', '2015-08-13 19:58:43'),
(80, 'GK0077', 'baba', 1, '0000-00-00', 1, 1, 25330, 160, 28, 0, 0, 'NULL', 3, 53.25, '2015-05-25 10:00:00', '2015-05-25 14:35:00', '0000-00-00 00:00:00', '2015-08-13 19:58:40'),
(81, 'GK0078', 'kanon', 3, '0000-00-00', 1, 1, 51300, 150, 30, 0, 0, 'NULL', 3, 43.75, '2015-05-26 12:00:00', '2015-05-27 10:50:00', '0000-00-00 00:00:00', '2015-08-13 19:58:38'),
(82, 'GK0079', 'b432', 2, '0000-00-00', 1, 1, 20520, 60, 12, 0, 0, 'NULL', 3, 47, '2015-05-27 08:00:00', '2015-05-27 16:53:00', '0000-00-00 00:00:00', '2015-08-13 19:58:35'),
(83, 'GK0080', 'uehara', 3, '0000-00-00', 1, 1, 51300, 150, 30, 0, 0, 'NULL', 3, 77.5, '2015-05-28 08:00:00', '2015-05-29 17:00:00', '0000-00-00 00:00:00', '2015-08-13 19:58:31'),
(84, 'GK0081', 'b433', 2, '0000-00-00', 1, 1, 20520, 60, 12, 0, 0, 'NULL', 3, 17, '2015-05-29 08:00:00', '2015-05-29 14:16:00', '0000-00-00 00:00:00', '2015-08-13 19:58:29'),
(85, 'GK0082', 'ingo2', 1, '0000-00-00', 1, 1, 38000, 240, 48, 0, 0, 'NULL', 3, 48.75, '2015-05-30 08:00:00', '2015-06-02 10:00:00', '0000-00-00 00:00:00', '2015-08-13 19:58:27'),
(86, 'GK0083', 'ingosex', 7, '0000-00-00', 1, 5, 41040, 120, 24, 0, 0, 'Mosaic size 2 point up than usual', 3, 42.5, '2015-06-04 08:00:00', '2015-06-04 16:45:00', '0000-00-00 00:00:00', '2015-08-13 19:58:25'),
(87, 'GK0084', 'ingosex', 7, '0000-00-00', 1, 5, 41040, 120, 24, 0, 0, 'Mosaic size 2 point up', 3, 37.75, '2015-06-04 11:30:00', '2015-06-05 09:15:00', '0000-00-00 00:00:00', '2015-08-13 19:58:23'),
(88, 'GK0085', 'makihara', 7, '0000-00-00', 1, 5, 41040, 120, 24, 0, 0, 'Mosaic size 2 point up', 3, 55, '2015-06-05 08:00:00', '2015-06-06 14:45:00', '0000-00-00 00:00:00', '2015-08-13 19:58:20'),
(89, 'GK0086', 'queen043', 7, '0000-00-00', 1, 5, 41040, 120, 24, 0, 0, 'Mosaic size 2 point up', 3, 52.75, '2015-06-06 08:00:00', '2015-06-06 17:00:00', '0000-00-00 00:00:00', '2015-08-13 19:58:18'),
(90, 'GK0088', 'tomoka', 1, '0000-00-00', 1, 5, 23750, 150, 30, 0, 0, 'Mosaic Size 2 point up', 3, 76, '2015-06-09 08:00:00', '2015-06-11 10:45:00', '0000-00-00 00:00:00', '2015-08-13 19:58:15'),
(91, 'GK0089', 'kinosita', 7, '0000-00-00', 1, 5, 41040, 120, 24, 0, 0, 'Mosaic Size 2 point up', 3, 21.75, '2015-06-09 14:00:00', '2015-06-10 16:30:00', '0000-00-00 00:00:00', '2015-08-13 19:58:12'),
(92, 'GK0087', 'mask', 1, '0000-00-00', 1, 5, 33250, 210, 42, 0, 0, 'Mosaic size 2 point up', 3, 16.75, '2015-06-09 16:45:00', '2015-06-11 11:00:00', '0000-00-00 00:00:00', '2015-08-13 19:58:09'),
(93, 'GK0090', 'gokuraku guinama', 1, '0000-00-00', 1, 5, 38000, 240, 48, 0, 0, 'NULL', 3, 49.75, '2015-06-10 13:45:00', '2015-06-16 13:30:00', '0000-00-00 00:00:00', '2015-08-13 19:58:04'),
(94, 'GK0091', 'sept yuki', 3, '0000-00-00', 1, 5, 41040, 120, 24, 0, 0, 'NULL', 3, 71.5, '2015-06-11 08:00:00', '2015-06-15 17:00:00', '0000-00-00 00:00:00', '2015-08-13 19:58:01'),
(95, 'GK0092', 'sept miki', 3, '0000-00-00', 1, 5, 41040, 120, 24, 0, 0, 'NULL', 3, 44, '2015-06-11 09:30:00', '2015-06-15 17:00:00', '0000-00-00 00:00:00', '2015-08-13 19:57:58'),
(96, 'GK0093', 'oredo enko4', 4, '0000-00-00', 1, 5, 41040, 120, 24, 0, 0, 'NULL', 3, 15.5, '2015-06-15 08:00:00', '2015-06-16 15:30:00', '0000-00-00 00:00:00', '2015-08-13 19:57:56'),
(97, 'GK0094', 'oredo onsen4', 4, '0000-00-00', 1, 5, 41040, 120, 24, 0, 0, 'NULL', 3, 17.25, '2015-06-15 08:00:00', '2015-06-17 10:45:00', '0000-00-00 00:00:00', '2015-08-13 19:57:53'),
(98, 'GK0095', 'oredo kaihatu4', 4, '0000-00-00', 1, 5, 41040, 120, 24, 0, 0, 'NULL', 3, 21.5, '2015-06-15 12:30:00', '2015-06-16 17:00:00', '0000-00-00 00:00:00', '2015-08-13 19:57:51'),
(99, 'GK0096', 'oredo bukatu4', 4, '0000-00-00', 1, 5, 41040, 120, 24, 0, 0, 'NULL', 3, 11.25, '2015-06-15 12:00:00', '2015-06-17 14:15:00', '0000-00-00 00:00:00', '2015-08-13 19:57:48'),
(100, 'GK0097', 'oredo mensetu', 4, '0000-00-00', 1, 5, 41040, 120, 24, 0, 0, 'NULL', 3, 30, '2015-06-16 08:00:00', '2015-06-17 17:00:00', '0000-00-00 00:00:00', '2015-08-13 19:57:46'),
(101, 'GK0098', 'resyutu4', 4, '0000-00-00', 1, 5, 41040, 120, 24, 0, 0, 'NULL', 3, 29.75, '2015-06-16 08:00:00', '2015-06-17 17:00:00', '0000-00-00 00:00:00', '2015-08-13 19:57:43'),
(102, 'GK0099', 'h427', 2, '0000-00-00', 1, 1, 25650, 75, 15, 0, 0, 'NULL', 3, 16.75, '2015-06-17 14:30:00', '2015-06-17 17:00:00', '0000-00-00 00:00:00', '2015-08-13 19:57:37'),
(103, 'GK0100', '757', 5, '0000-00-00', 1, 1, 41040, 240, 48, 0, 0, 'This movie has already been editted. So please fix some OUT or Mosaic Size is not enough.You don''t need to hide', 3, 32.25, '2015-06-22 08:00:00', '2015-06-22 14:45:00', '0000-00-00 00:00:00', '2015-08-13 19:57:32'),
(104, 'GK0101', 'sept kanon2', 3, '0000-00-00', 1, 5, 47880, 140, 26, 0, 0, 'NULL', 3, 21.25, '2015-06-22 12:00:00', '2015-06-23 17:00:00', '0000-00-00 00:00:00', '2015-08-13 19:57:29'),
(105, 'GK0102', 'sept rena', 3, '0000-00-00', 1, 5, 51300, 150, 28, 0, 0, 'NULL', 3, 32.25, '2015-06-22 13:30:00', '2015-06-23 16:00:00', '0000-00-00 00:00:00', '2015-08-13 19:57:26'),
(106, 'GK0103', 'porcom h428', 2, '0000-00-00', 1, 3, 22230, 65, 12, 0, 0, '-2 point than normal mosaic size', 3, 19, '2015-06-26 14:45:00', '2015-06-29 13:15:00', '0000-00-00 00:00:00', '2015-08-13 19:57:23'),
(107, 'GK0104', 'sept miyabi2', 3, '0000-00-00', 1, 5, 41040, 120, 24, 0, 0, 'NULL', 3, 67.75, '2015-06-29 11:15:00', '2015-07-01 11:00:00', '0000-00-00 00:00:00', '2015-08-13 19:57:21'),
(108, 'GK0105', 'sept ami', 3, '0000-00-00', 1, 5, 47880, 140, 26, 0, 0, 'NULL', 3, 70.5, '2015-06-30 16:30:00', '2015-07-06 13:00:00', '0000-00-00 00:00:00', '2015-08-13 19:57:18'),
(109, 'GK0106', 'sept miyabi3', 3, '0000-00-00', 1, 5, 47880, 140, 26, 0, 0, 'NULL', 3, 78.5, '2015-07-01 08:00:00', '2015-07-06 14:15:00', '0000-00-00 00:00:00', '2015-08-13 19:05:37'),
(110, 'GK0107', 'porcom h429', 2, '0000-00-00', 1, 1, 23940, 70, 14, 0, 0, 'NULL', 3, 27, '2015-07-01 11:00:00', '2015-07-06 13:00:00', '0000-00-00 00:00:00', '2015-08-13 19:05:34'),
(111, 'GK0108', 'queen 053', 7, '0000-00-00', 1, 1, 37620, 110, 23, 0, 0, 'vsic?OK', 3, 50.75, '2015-07-02 14:15:00', '2015-07-06 16:30:00', '0000-00-00 00:00:00', '2015-08-13 19:05:31'),
(112, 'GK0109', 'queen 052', 7, '0000-00-00', 1, 1, 51300, 150, 30, 0, 0, '???????????!10??16?????????????????!', 3, 50.5, '2015-07-06 13:00:00', '2015-07-07 17:00:00', '0000-00-00 00:00:00', '2015-08-13 19:05:29'),
(113, 'GK0110', 'queen md050', 7, '0000-00-00', 1, 5, 41040, 120, 24, 0, 0, 'NULL', 3, 44.25, '2015-07-07 12:00:00', '2015-07-10 08:30:00', '0000-00-00 00:00:00', '2015-08-13 19:05:26'),
(114, 'GK0111', 'sept pitacos', 3, '0000-00-00', 1, 5, 51300, 150, 30, 0, 0, 'NULL', 3, 78.5, '2015-07-08 08:00:00', '2015-07-15 11:45:00', '0000-00-00 00:00:00', '2015-08-13 19:05:23'),
(115, 'GK0112', 'queen moa', 7, '0000-00-00', 1, 1, 44460, 130, 24, 0, 0, 'NULL', 3, 62.75, '2015-07-08 08:00:00', '2015-07-13 17:15:00', '0000-00-00 00:00:00', '2015-08-13 19:05:20'),
(116, 'GK0113', 'sept eri', 3, '0000-00-00', 1, 5, 41040, 120, 24, 0, 0, 'NULL', 3, 63.25, '2015-07-08 08:00:00', '2015-07-13 17:00:00', '0000-00-00 00:00:00', '2015-08-13 19:05:17'),
(117, 'GK0114', 'gokuraku osiri', 1, '0000-00-00', 1, 1, 23250, 150, 30, 0, 0, 'NULL', 3, 102.5, '2015-07-17 08:00:00', '2015-07-22 17:00:00', '0000-00-00 00:00:00', '2015-08-13 19:05:14'),
(118, 'GK0115', 'queen hayakawa', 7, '0000-00-00', 1, 1, 42749, 125, 24, 0, 0, 'NULL', 3, 47.75, '2015-07-13 08:30:00', '2015-07-16 15:00:00', '0000-00-00 00:00:00', '2015-08-13 19:05:11'),
(119, 'GK0116', 'queen 048', 7, '0000-00-00', 1, 5, 51300, 150, 30, 0, 0, 'NULL', 3, 42.25, '2015-07-14 08:00:00', '2015-07-16 17:00:00', '0000-00-00 00:00:00', '2015-08-13 19:05:08'),
(120, 'GK0117', 'hot honki', 9, '0000-00-00', 1, 1, 51300, 150, 30, 0, 0, 'NULL', 3, 50.5, '2015-07-14 08:00:00', '2015-07-16 12:30:00', '0000-00-00 00:00:00', '2015-08-13 19:05:04'),
(121, 'GK0118', 'queen natume', 7, '0000-00-00', 1, 5, 41040, 120, 24, 0, 0, '14:00????????????', 3, 36.5, '2015-07-15 12:00:00', '2015-07-17 16:30:00', '0000-00-00 00:00:00', '2015-08-13 19:05:01'),
(122, 'GK0119', 'porcom h430', 2, '0000-00-00', 1, 3, 23940, 70, 14, 0, 0, '?????????', 3, 10.25, '2015-07-16 08:00:00', '2015-07-17 10:15:00', '0000-00-00 00:00:00', '2015-08-13 19:04:57'),
(123, 'GK0120', 'gokuarku yoga', 1, '0000-00-00', 1, 1, 38000, 240, 48, 0, 0, 'NULL', 3, 25.75, '2015-07-17 09:00:00', '2015-07-20 14:45:00', '0000-00-00 00:00:00', '2015-08-13 19:04:54'),
(124, 'GK0121', 'oredo dekajiri5', 4, '0000-00-00', 1, 5, 41040, 120, 24, 0, 0, 'NULL', 3, 11.5, '2015-07-20 08:00:00', '2015-07-21 11:30:00', '0000-00-00 00:00:00', '2015-08-13 19:04:51'),
(125, 'GK0122', 'oredo enko5', 4, '0000-00-00', 1, 5, 41040, 120, 24, 0, 0, 'NULL', 3, 12.5, '2015-07-20 08:00:00', '2015-07-21 12:30:00', '0000-00-00 00:00:00', '2015-08-13 19:04:48'),
(126, 'GK0123', 'oredo kaihatu5', 4, '0000-00-00', 1, 5, 41040, 120, 24, 0, 0, 'NULL', 3, 19, '2015-07-20 15:00:00', '2015-07-22 17:00:00', '0000-00-00 00:00:00', '2015-08-13 19:04:45'),
(127, 'GK0124', 'oredo dousei5', 4, '0000-00-00', 1, 5, 41040, 120, 24, 0, 0, 'NULL', 3, 32.5, '2015-07-20 08:00:00', '2015-07-23 15:30:00', '0000-00-00 00:00:00', '2015-08-13 19:04:43'),
(128, 'GK0125', 'oredo bukatu5', 4, '0000-00-00', 1, 5, 41040, 120, 24, 0, 0, 'NULL', 3, 22.75, '2015-07-20 08:00:00', '2015-07-22 13:45:00', '0000-00-00 00:00:00', '2015-08-13 19:04:15'),
(129, 'GK0126', 'oredo mensetu5', 4, '0000-00-00', 1, 5, 41040, 120, 24, 0, 0, 'NULL', 3, 23.25, '2015-07-20 08:00:00', '2015-07-22 14:15:00', '0000-00-00 00:00:00', '2015-08-13 19:04:12'),
(130, 'GK0127', 'gokuraku nikujiri', 1, '0000-00-00', 1, 1, 28500, 180, 18, 0, 0, 'NULL', 3, 53.5, '2015-07-22 16:00:00', '2015-07-24 16:30:00', '0000-00-00 00:00:00', '2015-08-13 19:04:08'),
(131, 'GK0128', 'gokuraku katekyo', 1, '0000-00-00', 1, 1, 38000, 240, 48, 0, 0, 'NULL', 3, 62.5, '2015-07-22 08:00:00', '2015-07-24 17:00:00', '0000-00-00 00:00:00', '2015-08-13 19:04:05'),
(132, 'GK0129', 'porcom h431', 2, '0000-00-00', 1, 1, 27356, 80, 15, 0, 0, '???????????????!', 3, 20.75, '2015-07-23 08:00:00', '2015-07-24 16:45:00', '0000-00-00 00:00:00', '2015-08-13 19:04:02'),
(133, 'GK0130', 'sept sena2', 3, '0000-00-00', 1, 5, 51300, 150, 30, 0, 0, 'NULL', 3, 36.75, '2015-07-24 13:00:00', '2015-07-28 10:00:00', '0000-00-00 00:00:00', '2015-08-13 19:03:58'),
(134, 'GK0131', 'porcom ucyu', 2, '0000-00-00', 1, 3, 44460, 130, 24, 0, 0, '???????????!', 3, 26, '2015-07-21 08:00:00', '2015-07-24 17:00:00', '0000-00-00 00:00:00', '2015-08-13 19:03:55'),
(135, 'GK0132', 'gokuraku scoop 10', 1, '0000-00-00', 2, 1, 9000, 120, 12, 0, 0, '?????', 3, 18.25, '2015-07-27 08:00:00', '2015-07-29 09:15:00', '0000-00-00 00:00:00', '2015-08-13 19:03:52'),
(136, 'GK0133', 'gokuraku scoop11', 1, '0000-00-00', 2, 1, 9000, 120, 12, 0, 0, 'NULL', 3, 13.75, '2015-07-27 08:00:00', '2015-07-28 13:45:00', '0000-00-00 00:00:00', '2015-08-13 19:03:48'),
(137, 'GK0134', 'gokuraku scoop12', 1, '0000-00-00', 2, 1, 9000, 120, 12, 0, 0, 'NULL', 3, 9.5, '2015-07-27 08:00:00', '2015-07-28 09:30:00', '0000-00-00 00:00:00', '2015-08-13 19:03:46'),
(138, 'GK0135', 'gokuraku baz10', 1, '0000-00-00', 2, 1, 9000, 120, 12, 0, 0, 'NULL', 3, 17, '2015-07-27 08:00:00', '2015-07-28 17:00:00', '0000-00-00 00:00:00', '2015-08-13 19:03:43'),
(139, 'GK0136', 'gokuraku baz11', 1, '0000-00-00', 2, 1, 9000, 120, 12, 0, 0, 'NULL', 3, 32.5, '2015-07-28 08:00:00', '2015-07-30 09:00:00', '0000-00-00 00:00:00', '2015-08-13 19:03:40'),
(140, 'GK0137', 'gokuraku baz12', 1, '0000-00-00', 2, 1, 9000, 120, 12, 0, 0, 'NULL', 3, 23.5, '2015-07-28 10:00:00', '2015-07-29 14:30:00', '0000-00-00 00:00:00', '2015-08-13 19:03:37'),
(141, 'GK0139', 'porcom h432', 2, '0000-00-00', 1, 3, 23940, 70, 12, 0, 0, '??????????????????????!', 3, 16.25, '2015-07-30 13:00:00', '2015-07-30 17:00:00', '0000-00-00 00:00:00', '2015-08-13 19:03:32'),
(142, 'GK0138', 'porcom r466', 2, '0000-00-00', 1, 1, 37620, 110, 24, 0, 0, '????vsic????????', 3, 17.5, '2015-07-31 08:15:00', '2015-07-31 12:15:00', '0000-00-00 00:00:00', '2015-08-13 19:03:28'),
(143, 'GK0140', 'gokuraku panst', 1, '0000-00-00', 1, 1, 31666, 200, 40, 0, 0, 'NULL', 3, 65, '2015-08-03 13:30:00', '2015-08-05 10:30:00', '0000-00-00 00:00:00', '2015-08-13 19:03:24'),
(144, 'GK0141', 'gokuraku mansyon2', 1, '0000-00-00', 1, 1, 38000, 240, 48, 0, 0, 'NULL', 3, 69, '2015-08-04 16:00:00', '2015-08-07 13:45:00', '0000-00-00 00:00:00', '2015-08-13 19:03:16'),
(145, 'GK0142', 'oredo asahi', 4, '0000-00-00', 1, 5, 41040, 120, 24, 0, 0, '???!', 3, 27.5, '2015-08-04 14:00:00', '2015-08-06 13:00:00', '0000-00-00 00:00:00', '2015-08-13 19:03:11'),
(146, 'GK0143', 'porcom r467', 2, '0000-00-00', 1, 1, 32504, 95, 16, 0, 0, 'vsic???????', 3, 14.75, '2015-08-06 10:00:00', '2015-08-07 11:00:00', '0000-00-00 00:00:00', '2015-08-13 19:02:43'),
(147, 'GK0144', 'porcom h434', 2, '0000-00-00', 1, 3, 22230, 65, 12, 0, 0, '????????????????????', 3, 9.25, '2015-08-06 13:15:00', '2015-08-07 14:30:00', '0000-00-00 00:00:00', '2015-08-13 19:02:01'),
(148, 'GK0145', 'gokuraku hina', 1, '0000-00-00', 1, 1, 19000, 120, 24, 0, 0, 'NULL', 3, 29.75, '2015-08-07 12:00:00', '2015-08-07 17:00:00', '0000-00-00 00:00:00', '2015-08-13 18:59:31'),
(149, 'GK0146', 'queen 057', 7, '0000-00-00', 1, 5, 41040, 120, 24, 0, 0, 'NULL', 3, 43, '2015-08-10 08:00:00', '2015-08-12 09:15:00', '0000-00-00 00:00:00', '2015-08-13 19:01:32'),
(150, 'GK0147', 'sept konisi', 3, '0000-00-00', 1, 5, 41040, 120, 24, 0, 0, 'NULL', 3, 50.75, '2015-08-10 08:00:00', '2015-08-11 17:00:00', '0000-00-00 00:00:00', '2015-08-13 19:00:45'),
(151, 'GK0148', 'hot 232', 9, '2015-08-18', 1, 5, 51300, 150, 30, NULL, NULL, 'Mosaic Range : A little bigger than usual,especially for Manko is needed bigger range. But it''s not CS so no need to hide hair all.', 3, 34.25, '2015-08-11 14:45:00', '2015-08-18 09:00:00', NULL, '2015-08-18 15:26:40'),
(152, 'GK0149', 'vip 755', 5, '2015-08-17', 1, 5, 41040, 120, 24, NULL, NULL, NULL, 3, 22, '2015-08-11 10:10:00', '2015-08-13 15:03:00', NULL, NULL),
(153, 'GK0150', 'sept haruki', 3, '2015-08-17', 1, 5, 41040, 120, 24, NULL, NULL, NULL, 3, 36.67, '2015-08-12 08:00:00', '2015-08-18 12:10:00', NULL, '2015-08-18 12:06:52'),
(154, 'GK0151', 'sept akari', 3, '2015-08-17', 1, 5, 47880, 140, 28, NULL, NULL, NULL, 3, 49.5, '2015-08-12 09:15:00', '2015-08-18 13:15:00', NULL, '2015-08-18 14:02:12'),
(156, 'GK0153', 'gokuraku tikubi', 1, '2015-08-17', 1, 1, 28500, 180, 36, NULL, NULL, 'Speed Required. No need quality.', 3, 40.67, '2015-08-12 08:00:00', '2015-08-14 13:45:00', NULL, '2015-08-16 09:53:47'),
(157, 'GK0154', 'queen um020', 7, '2015-08-18', 1, 5, 41040, 120, 24, NULL, NULL, NULL, 3, 48.84, '2015-08-13 15:30:00', '2015-08-19 09:10:00', NULL, '2015-08-19 10:14:23'),
(158, 'GK0155', 'queen 055', 7, '2015-08-19', 1, 5, 41040, 120, 24, NULL, NULL, NULL, 3, 25.08, '2015-08-14 12:00:00', '2015-08-19 12:35:00', NULL, '2015-08-19 12:41:32'),
(159, 'GK0152', 'sept tennis', 3, '2015-08-17', 1, 5, 51300, 150, 28, NULL, NULL, NULL, 3, 36.5, '2015-08-12 08:00:00', '2015-08-18 12:00:00', NULL, '2015-08-18 12:03:25'),
(200, 'GK0157', 'b440', 2, '2015-08-21', 1, 3, 41040, 120, 24, NULL, NULL, '!!Attention!!Mosaic Size 2 point down.', 3, 17.09, '2015-08-19 08:00:00', '2015-08-19 14:55:00', '2015-08-18 12:10:43', '2015-08-19 15:10:45'),
(201, 'GK0156', 'queen 056', 7, '2015-08-20', 1, 5, 41040, 120, 24, NULL, NULL, '', 3, 16, '2015-08-18 12:00:00', '2015-08-19 09:40:00', '2015-08-18 12:11:39', '2015-08-19 10:19:54'),
(202, 'GK0158', 'sept hatano', 3, '2015-08-21', 1, 5, 41040, 120, NULL, NULL, NULL, '頼む！', 3, 32.57, '2015-08-20 12:00:00', '2015-08-21 12:30:00', '2015-08-20 12:14:29', '2015-08-21 14:53:29'),
(203, 'GK0159', 'mignet megane', 10, '2015-08-25', 2, 1, 20520, 120, NULL, NULL, NULL, '審査基準:日活', 3, 31, '2015-08-24 08:00:00', '2015-08-24 13:55:00', '2015-08-21 17:31:37', '2015-08-24 20:21:40'),
(204, 'GK0160', 'sept osima', 3, '2015-08-31', 1, 5, 47880, 140, NULL, NULL, NULL, 'ちん、まん、ともに、アップの時のモザイクサイズが薄くならないようにお願いします！', 3, 34.41, '2015-08-26 12:00:00', '2015-08-27 08:20:00', '2015-08-26 11:33:25', '2015-08-27 09:17:09'),
(205, 'GK0161', 'porcom h435', 2, '2015-09-01', 1, 3, 25650, 75, NULL, NULL, NULL, 'ポルコム仕様のモザイクサイズでお願いします！', 3, 18.33, '2015-08-27 08:00:00', '2015-08-27 11:15:00', '2015-08-26 14:53:45', '2015-08-27 12:23:18'),
(206, 'GK0162', 'gokuraku panko', 1, '2015-09-07', 1, 1, 20583, 130, NULL, NULL, NULL, 'vsic審査素材も、アップの時の薄すぎ注意ね～', 3, 41.89, '2015-08-28 12:00:00', '2015-08-31 12:30:00', '2015-08-28 08:52:16', '2015-08-31 13:17:54'),
(207, 'GK0163', 'gokuraku netori', 1, '2015-09-16', 1, 1, 38000, 240, NULL, NULL, NULL, 'さらっと行きましょう', 3, 61.59, '2015-08-31 15:45:00', '2015-09-01 15:25:00', '2015-08-31 13:10:37', '2015-09-01 16:33:37'),
(208, 'GK0164', 'gokuraku soro', 1, '2015-09-14', 1, 1, 22170, 140, NULL, NULL, NULL, '', 3, 64.75, '2015-09-01 13:00:00', '2015-09-04 10:10:00', '2015-08-31 14:57:19', '2015-09-04 10:32:55'),
(216, 'GK0165', 'queen 057', 7, '2015-09-07', 1, 5, 41040, 120, NULL, NULL, NULL, '７日１４時～１５時に納品お願い！', 3, 41.75, '2015-09-01 14:20:00', '2015-09-03 13:00:00', '2015-09-01 12:37:09', '2015-09-03 13:59:59'),
(217, 'GK0166', 'queen 058', 7, '2015-09-07', 1, 5, 37620, 110, NULL, NULL, NULL, '0165と一緒くらいにお願い！', 3, 23.75, '2015-09-01 14:15:00', '2015-09-02 16:00:00', '2015-09-01 12:38:21', '2015-09-02 16:16:37'),
(218, 'GK0167', 'gokuraku ranje2', 1, '2015-09-17', 1, 1, 38000, 240, NULL, NULL, NULL, 'よろしく！', 3, 57.83, '2015-09-03 12:30:00', '2015-09-04 14:15:00', '2015-09-03 10:36:31', '2015-09-04 15:23:09'),
(219, 'GK0168', 'hot SHE242', 9, '2015-09-10', 1, 5, 47880, 140, NULL, NULL, NULL, 'ちんこの濃さは、素材の後ろの方の、男がちんこをしごいているシーンを参考にしてください。　ちょっと濃いと思います。　　　　', 3, 47.17, '2015-09-04 08:20:00', '2015-09-09 09:00:00', '2015-09-03 16:17:30', '2015-09-09 09:48:23'),
(220, 'GK0169 ', 'hot SHE240', 9, '2015-09-11', 1, 5, 51300, 150, NULL, NULL, NULL, 'Mosaic Size::Condom is needed to hide perfectly, so please make mosaic size bigger than usual as people can''t see condom. If you can''t decide by yourself, please watch last 5 minutes where already have mosaic.', 3, 35.41, '2015-09-04 09:40:00', '2015-09-07 16:55:00', '2015-09-03 17:37:59', '2015-09-07 17:18:29'),
(221, 'GK0171', 'porcom h437', 2, '2015-09-10', 1, 3, 23940, 70, NULL, NULL, NULL, 'Please send before lunch time at 10/9.昼くらいまでにお願いします！', 3, 12.67, '2015-09-04 09:45:00', '2015-09-07 14:25:00', '2015-09-03 18:57:48', '2015-09-07 15:10:03'),
(222, 'GK0170', 'queen 015', 7, '2015-09-10', 1, 5, 41040, 120, NULL, NULL, NULL, 'これは簡単かな～', 3, 29.76, '2015-09-04 14:20:00', '2015-09-08 15:25:00', '2015-09-04 08:54:13', '2015-09-08 15:44:36'),
(223, 'GK0172', 'porcom', 2, '2015-09-10', 1, 1, 30780, 90, NULL, NULL, NULL, 'これはポルコムなんだけど、vsicで審査通すから、normalにしてあります', 3, 12.34, '2015-09-04 11:50:00', '2015-09-07 12:55:00', '2015-09-04 09:03:10', '2015-09-07 15:06:05'),
(224, 'GK0173', 'queen 164', 7, '2015-09-14', 1, 5, 41040, 120, NULL, NULL, NULL, '', 3, 26.75, '2015-09-07 12:05:00', '2015-09-09 13:15:00', '2015-09-04 09:42:45', '2015-09-09 13:43:22'),
(225, 'GK0174', 'queen 068', 7, '2015-09-16', 1, 5, 41040, 120, NULL, NULL, NULL, '', 3, 18.83, '2015-09-07 13:10:00', '2015-09-08 16:45:00', '2015-09-04 11:08:23', '2015-09-08 17:24:20'),
(226, 'GK0175', 'vip 759', 5, '2015-09-16', 1, 5, 82080, 240, NULL, NULL, NULL, '７２０×４８０のサイズです～', 3, 28.83, '2015-09-07 15:00:00', '2015-09-09 16:10:00', '2015-09-04 17:08:01', '2015-09-09 16:43:35'),
(227, 'GK0176 ', 'sept kin', 3, '2015-09-11', 1, 5, 37620, 110, NULL, NULL, NULL, 'かなり見づらい素材です。塗りたくってるシーンでも通常のようにかけて下さい。\r\nあと、チンコの濃さですが、モニタ画面で自分の親指より太くなったらプラス３にして下さい。\r\n納期が11日になってるけども、できれば10日、11日になっても早いうちにくれると助かります。\r\n（11日に修正してセプテンバーにもっていくもので・・・）', 3, 27.84, '2015-09-08 13:30:00', '2015-09-10 14:10:00', '2015-09-08 10:30:33', '2015-09-10 14:45:20'),
(228, 'GK0177', 'sept sachi', 3, '2015-09-17', 1, 5, 47880, 140, NULL, NULL, NULL, 'こちらもモニタ画面でチンコが自分の親指より太くなったらプラス３ね。\r\n2:30::00:00からの10分間は凶悪です・・・', 3, 42, '2015-09-08 15:30:00', '2015-09-10 14:05:00', '2015-09-08 11:15:45', '2015-09-10 14:43:07'),
(229, 'GK0178', 'queen 165', 7, '2015-09-16', 1, 5, 41040, 120, NULL, NULL, NULL, 'よろしく！', 3, 36.5, '2015-09-10 08:00:00', '2015-09-11 16:05:00', '2015-09-09 17:49:09', '2015-09-11 16:23:55'),
(230, 'GK0179', 'queen 163', 7, '2015-09-17', 1, 5, 49589, 145, NULL, NULL, NULL, '5，6分、ちんこが4本出ます。', 3, 40, '2015-09-10 08:00:00', '2015-09-11 16:00:00', '2015-09-09 19:12:16', '2015-09-11 16:25:17'),
(231, 'GK0180', 'gokuraku anaba', 1, '2015-09-18', 1, 5, 19000, 120, NULL, NULL, NULL, 'こちらは撮影の都合上、バラでアップしていきます。R-3までありますが、今のところR-1までしかできておりません。ややこしいですがお願いします。', 3, 46.41, '2015-09-11 12:30:00', '2015-09-17 12:20:00', '2015-09-11 10:50:21', '2015-09-18 08:51:29'),
(232, 'GK0181', 'gokuraku anaba CS', 1, '2015-09-18', 2, 1, 9000, 120, NULL, NULL, NULL, 'こちらもバラでアップします。前回mignetのCSでの範囲は良かったので、濃さはfeedbackにオイラが直したezpをアップしてありますので参考にして下さい。', 3, 8.33, '2015-09-11 13:00:00', '2015-09-14 09:00:00', '2015-09-11 10:53:42', '2015-09-15 09:47:38'),
(233, 'GK0182', 'oredo cos6', 4, '2015-09-17', 1, 5, 41040, 120, NULL, NULL, NULL, '17日に相手方へ持っていきますので、明るいうちに終わってくれると助かります。', 3, 13.75, '2015-09-14 13:00:00', '2015-09-14 15:45:00', '2015-09-14 11:01:36', '2015-09-15 09:51:44'),
(234, 'GK0183', 'oredo kaihatu6', 4, '2015-09-17', 1, 5, 39321, 115, NULL, NULL, NULL, '0182と一緒です', 3, 29.59, '2015-09-14 15:15:00', '2015-09-15 13:35:00', '2015-09-14 11:02:36', '2015-09-15 15:30:47'),
(235, 'GK0184', 'oredo chokyo6', 4, '2015-09-17', 1, 5, 39321, 115, NULL, NULL, NULL, '0182と一緒です。', 3, 25.08, '2015-09-14 15:15:00', '2015-09-15 13:20:00', '2015-09-14 11:03:33', '2015-09-15 15:30:58'),
(236, 'GK0185', 'porcom r468', 2, '2015-09-18', 1, 4, 30780, 90, NULL, NULL, NULL, '審査出しするので、プラス１にしてみました。いけるかな～', 3, 11.26, '2015-09-15 12:00:00', '2015-09-15 15:15:00', '2015-09-14 15:42:23', '2015-09-15 15:34:02'),
(244, 'GK0186', 'oredo buruma6', 4, '2015-09-22', 1, 5, 41040, 120, 24, NULL, NULL, '擬似で中出しをしているのでゴムが目立たないようにしてください～', 3, 19.59, '2015-09-17 12:00:00', '2015-09-17 16:40:00', '2015-09-17 11:09:54', '2015-09-17 16:49:49'),
(245, 'GK0187', 'oredo 032', 4, '2015-09-23', 1, 4, 112860, 350, 4649, NULL, NULL, '長いぜ～', 3, 58.17, '2015-09-18 08:00:00', '2015-09-18 16:10:00', '2015-09-17 12:34:01', '2015-09-18 18:01:21'),
(246, 'GK0188', 'oredo rosyutu11', 4, '2015-09-23', 1, 4, 41040, 120, 1649, NULL, NULL, '中身の通し番号、間違えて0189にしちゃいました。すみません', 3, 29, '2015-09-18 16:00:00', '2015-09-18 17:00:00', '2015-09-18 14:32:51', '2015-09-18 19:45:50'),
(247, 'GK0189', 'gokuraku onsen', 1, '2015-10-02', 1, 4, 25328, 160, 4649, NULL, NULL, '', 3, 66.9, '2015-09-25 08:00:00', '2015-09-25 16:45:00', '2015-09-24 15:06:43', '2015-09-28 09:03:35'),
(248, 'GK0190', 'sept oppabu', 3, '2015-09-30', 1, 5, 71804, 210, 4649, NULL, NULL, '', 3, 36.42, '2015-09-25 12:00:00', '2015-09-28 17:00:00', '2015-09-25 09:00:17', '2015-09-29 08:31:16'),
(249, 'GK0191', 'sept ogino', 3, '2015-10-01', 1, 5, 47880, 140, 4649, NULL, NULL, '', 3, 42.09, '2015-09-25 14:20:00', '2015-09-29 15:45:00', '2015-09-25 11:35:48', '2015-09-29 17:30:00'),
(250, 'GK0192 ', 'sept minami', 3, '2015-10-01', 1, 5, 47880, 140, 4649, NULL, NULL, 'Care of  Condorm擬似の中出しがあるので、ゴムばれしないようにお願いします。', 3, 37, '2015-09-25 14:50:00', '2015-09-30 14:50:00', '2015-09-25 11:42:48', '2015-09-30 15:04:35'),
(251, 'GK0193', 'queen 060', 7, '2015-10-02', 1, 5, 39321, 115, 4649, NULL, NULL, 'Care of Condormこれもゴムばれ注意です。', 3, 36.59, '2015-09-28 08:00:00', '2015-09-29 17:00:00', '2015-09-25 11:54:06', '2015-09-30 08:35:10'),
(252, 'GK0194', 'gokuraku cyon', 1, '2015-10-20', 1, 4, 34837, 220, 4649, NULL, NULL, '多分、これより前にどかどか入ってくるので進捗調整よろしくね⇒御意！', 3, 54.66, '2015-09-28 12:30:00', '2015-10-05 10:35:00', '2015-09-28 10:13:52', '2015-10-05 11:00:44'),
(253, 'GK0195 ', 'porcom b445', 2, '2015-10-01', 1, 5, 34203, 100, 4649, NULL, NULL, '10/1の夜から10/2の16時くらいまでにくれると助かります。御意！', 3, 16.75, '2015-09-29 08:00:00', '2015-09-30 16:20:00', '2015-09-28 11:17:17', '2015-09-30 16:38:29'),
(254, 'GK0196', 'queen 061', 7, '2015-10-02', 1, 5, 41040, 120, 4649, NULL, NULL, '', 3, 52.49, '2015-09-29 08:00:00', '2015-10-01 14:05:00', '2015-09-28 16:19:46', '2015-10-01 16:03:41'),
(255, 'GK0197', 'queen 062', 7, '2015-10-02', 1, 5, 47880, 140, 4649, NULL, NULL, '', 3, 49.67, '2015-09-29 13:55:00', '2015-10-01 15:30:00', '2015-09-28 17:03:35', '2015-10-01 16:06:00'),
(256, 'GK0198', 'queen ohsima', 7, '2015-10-08', 1, 5, 41040, 120, 4649, NULL, NULL, '', 3, 55.84, '2015-09-30 08:00:00', '2015-10-03 14:10:00', '2015-09-28 18:39:36', '2015-10-03 15:51:36'),
(257, 'GK0199', 'queen satomi', 7, '2015-10-08', 1, 5, 41040, 120, 4649, NULL, NULL, '', 3, 47.17, '2015-09-30 14:55:00', '2015-10-03 15:05:00', '2015-09-28 18:40:24', '2015-10-03 15:54:20'),
(258, 'GK0200', 'gokuraku sanpo', 1, '2015-10-20', 1, 4, 19000, 120, 4649, NULL, NULL, '', 3, 54.25, '2015-09-30 16:20:00', '2015-10-03 17:00:00', '2015-09-28 18:41:03', '2015-10-03 17:27:11'),
(259, 'GK0201', 'sept miyabi', 3, '2015-10-09', 1, 5, 44460, 130, 4649, NULL, NULL, 'ニューハーフっす。。。\r\nアナルモザがありますが、別マスクでお願いね。\r\nあと、アナルモザで、玉の方までカバーしないようにお願いします。\r\nアナルモザはアナルだけね', 3, 94.25, '2015-10-03 08:00:00', '2015-10-07 12:05:00', '2015-10-02 17:21:32', '2015-10-07 12:28:10'),
(260, 'GK0202', 'sept hoshikawa', 3, '2015-10-09', 1, 5, 51300, 150, 4649, NULL, NULL, 'これもニューハー・・・。', 3, 102.16, '2015-10-03 08:10:00', '2015-10-08 10:25:00', '2015-10-02 17:22:46', '2015-10-08 10:51:43'),
(261, 'GK0203', 'gokuraku dogeza', 1, '2015-10-21', 1, 4, 38000, 240, 4649, NULL, NULL, '', 3, 94.5, '2015-10-09 12:00:00', '2015-10-21 10:40:00', '2015-10-05 09:11:42', '2015-10-21 12:57:43'),
(262, 'GK0204', 'ark baba', 8, '2015-10-08', 1, 5, 44460, 130, 4649, NULL, NULL, '', 3, 70.67, '2015-10-06 08:00:00', '2015-10-08 17:00:00', '2015-10-05 13:04:36', '2015-10-09 07:16:09'),
(263, 'GK0205', 'queen 076', 7, '2015-10-10', 1, 5, 68407, 200, 4649, NULL, NULL, '', 3, 61.92, '2015-10-07 08:00:00', '2015-10-10 08:30:00', '2015-10-05 18:30:04', '2015-10-10 08:52:58'),
(264, 'GK0206', 'queen 080', 7, '2015-10-10', 1, 5, 53015, 155, 4649, NULL, NULL, '', 3, 46.67, '2015-10-06 08:00:00', '2015-10-09 14:10:00', '2015-10-05 18:31:29', '2015-10-09 14:27:48'),
(267, 'GK0207', 'queen 171', 7, '2015-10-10', 1, 5, 42749, 125, 4649, NULL, NULL, '', 3, 48.67, '2015-10-08 08:00:00', '2015-10-10 15:55:00', '2015-10-07 14:18:56', '2015-10-18 15:52:22'),
(268, 'GK0208', 'queen 026', 7, '2015-10-10', 1, 5, 42749, 125, NULL, NULL, NULL, '', 3, 66.25, '2015-10-09 08:00:00', '2015-10-10 16:00:00', '2015-10-07 14:19:33', '2015-10-18 17:05:45'),
(269, 'GK0209', 'porcom 446', 2, '2015-10-10', 1, 4, 25650, 75, 4649, NULL, NULL, '', 3, 18, '2015-10-10 08:00:00', '2015-10-10 17:00:00', '2015-10-09 14:07:38', '2015-10-19 07:05:10'),
(270, 'GK0210', 'tukuba ba201601', 1, '2015-10-27', 2, 1, 9000, 120, 4649, NULL, NULL, 'つくばテレビに出す、極楽素材の2次利用です。', 3, 22.25, '2015-10-22 08:00:00', '2015-10-26 14:15:00', '2015-10-14 12:26:49', '2015-10-27 14:37:56'),
(271, 'GK0211 ', 'tukuba ba201602', 1, '2015-10-27', 2, 1, 9000, 120, 4649, NULL, NULL, '', 3, 34.92, '2015-10-19 08:00:00', '2015-10-23 10:55:00', '2015-10-14 12:28:23', '2015-10-26 10:21:35'),
(272, 'GK0212', 'tukuba ba201603', 1, '2015-10-28', 2, 1, 9000, 120, 4649, NULL, NULL, '', 3, 25.83, '2015-10-19 08:00:00', '2015-10-22 09:50:00', '2015-10-14 12:29:03', '2015-10-22 10:06:06'),
(273, 'GK0213', 'tukuba sc201601', 1, '2015-10-27', 2, 1, 9000, 120, 4649, NULL, NULL, '', 3, 13.33, '2015-10-19 08:00:00', '2015-10-20 12:20:00', '2015-10-14 12:30:16', '2015-10-21 13:00:29'),
(274, 'GK0214', 'tukuba sc201602', 1, '2015-10-28', 2, 1, 9000, 120, 4649, NULL, NULL, '', 3, 18, '2015-10-19 08:00:00', '2015-10-20 17:00:00', '2015-10-14 12:31:06', '2015-10-21 13:04:30'),
(275, 'GK0215', 'tukuba sc201603', 1, '2015-10-28', 2, 1, 9000, 120, 4649, NULL, NULL, '', 3, 26.08, '2015-10-19 08:00:00', '2015-10-21 17:00:00', '2015-10-14 12:31:41', '2015-10-22 10:05:21'),
(276, 'GK0216', 'porcom r469', 2, '2015-10-21', 1, 4, 47880, 140, 4649, NULL, NULL, '', 3, 27.5, '2015-10-19 08:00:00', '2015-10-21 12:00:00', '2015-10-14 18:39:44', '2015-10-21 13:03:41'),
(277, 'GK0217', 'jamTV GENL305', 11, '2015-10-23', 2, 1, 14040, 60, 4649, NULL, NULL, '', 3, 5.58, '2015-10-22 09:50:00', '2015-10-22 15:25:00', '2015-10-22 10:15:50', '2015-10-22 15:48:59'),
(278, 'GK0218', 'mignet bbaDVD', 1, '2015-10-28', 1, 5, 19000, 120, 4649, NULL, NULL, '', 3, 59.67, '2015-10-21 10:50:00', '2015-10-27 14:00:00', '2015-10-22 10:17:12', '2015-10-27 14:41:08'),
(279, 'GK0219', 'mignet bbaCS', 1, '2015-10-28', 2, 1, 9000, 120, 4649, NULL, NULL, '', 3, 31.83, '2015-10-22 08:00:00', '2015-10-27 15:50:00', '2015-10-22 10:18:15', '2015-10-28 07:43:00'),
(280, 'GK0220', 'VIP 075', 5, '2015-10-23', 1, 5, 41040, 120, 4649, NULL, NULL, '', 3, 32.25, '2015-10-20 13:30:00', '2015-10-21 17:00:00', '2015-10-22 10:19:07', '2015-10-22 11:00:29'),
(281, 'GK0221', 'ALLCREATE HASIMOTO', 12, '2015-10-30', 1, 5, 42120, 120, 4649, NULL, NULL, '', 3, 40.5, '2015-10-21 08:00:00', '2015-10-27 16:30:00', '2015-10-22 10:21:14', '2015-10-28 07:41:40'),
(282, 'GK0222', 'ALLCREAT MINAMI', 12, '2015-10-30', 1, 5, 42120, 120, 4649, NULL, NULL, '', 3, 33.5, '2015-10-21 15:30:00', '2015-10-27 17:00:00', '2015-10-22 10:22:32', '2015-10-28 08:31:15'),
(283, 'GK0223', 'ALL CREATE UENO', 12, '2015-10-30', 1, 5, 42120, 120, 4649, NULL, NULL, '', 3, 54.83, '2015-10-21 12:00:00', '2015-10-27 17:00:00', '2015-10-22 10:24:00', '2015-10-28 07:44:31'),
(284, 'GK0224', 'ALL CREATE RINA', 12, '2015-10-30', 1, 5, 42120, 120, 4649, NULL, NULL, '', 3, 50.25, '2015-10-22 08:00:00', '2015-10-27 11:05:00', '2015-10-22 10:25:08', '2015-10-27 14:46:35'),
(285, 'GK0225', 'porcom b448', 2, '2015-10-30', 1, 5, 41040, 120, 4649, NULL, NULL, '', 3, 18.25, '2015-10-26 14:20:00', '2015-10-28 10:20:00', '2015-10-26 11:31:15', '2015-10-30 09:39:42'),
(286, 'GK0226', 'queen ONGP039', 7, '2015-10-30', 1, 5, 46160, 135, 4649, NULL, NULL, '金曜の午前中まででお願いします！', 3, 49.08, '2015-10-27 14:00:00', '2015-10-29 17:00:00', '2015-10-26 11:34:40', '2015-10-30 09:46:13'),
(287, 'GK0227', 'porcom h441', 2, '2015-10-30', 1, 5, 27356, 80, 4649, NULL, NULL, '', 3, 17.5, '2015-10-27 08:00:00', '2015-10-29 09:30:00', '2015-10-26 11:36:22', '2015-10-30 09:27:35'),
(288, 'GK0228', 'vip 053', 5, '2015-11-04', 1, 5, 51300, 180, 4649, NULL, NULL, '180minだけど、ほぼイメージ素材なので、150の値段で受けました。\r\nチンコなしです', 3, 27.16, '2015-10-28 08:00:00', '2015-10-29 14:20:00', '2015-10-27 14:35:38', '2015-10-30 09:48:07'),
(289, 'GK0229', 'sept KAZAMA', 3, '2015-11-02', 1, 5, 46160, 135, 4649, NULL, NULL, '2日の朝まで（粘って昼）、頑張ってくれ～～～～', 3, 51.16, '2015-10-28 08:00:00', '2015-10-30 10:35:00', '2015-10-27 18:08:32', '2015-10-30 10:59:37'),
(290, 'GK0230', 'ALLCREATE RUI', 12, '2015-11-03', 1, 5, 42120, 120, 4649, NULL, NULL, '', 3, 26.33, '2015-10-28 14:00:00', '2015-10-30 09:20:00', '2015-10-27 18:14:55', '2015-10-30 11:06:49'),
(291, 'GK0231', 'gokuraku ona2', 1, '2015-11-06', 1, 5, 28500, 180, 4649, NULL, NULL, '', 3, 40.8, '2015-10-30 08:00:00', '2015-10-30 14:25:00', '2015-10-29 10:42:06', '2015-10-31 10:02:11'),
(292, 'GK0232', 'gokuraku aoi', 1, '2015-11-06', 1, 5, 19000, 120, 4649, NULL, NULL, '', 3, 36.91, '2015-10-31 08:00:00', '2015-10-31 14:05:00', '2015-10-30 14:47:03', '2015-10-31 19:42:30'),
(293, 'GK0233', 'porcom r470', 2, '2015-11-06', 1, 5, 44460, 130, 4649, NULL, NULL, '', 3, 25, '2015-10-31 12:00:00', '2015-10-31 15:40:00', '2015-10-30 14:47:42', '2015-10-31 19:49:53'),
(294, 'GK0234', 'mignet anatokuten9', 1, '2015-11-06', 1, 5, 22167, 140, 4649, NULL, NULL, '', 3, 70.17, '2015-11-02 12:00:00', '2015-11-04 09:00:00', '2015-11-02 09:08:34', '2015-11-04 14:51:36'),
(295, 'GK0235', 'queen 064', 7, '2015-11-06', 1, 5, 47880, 140, 4649, NULL, NULL, '', 3, 57.34, '2015-11-03 08:00:00', '2015-11-04 12:25:00', '2015-11-02 16:13:20', '2015-11-04 14:55:06'),
(296, 'GK0236', 'queen 001', 7, '2015-11-10', 1, 5, 64986, 190, 4649, NULL, NULL, '', 3, 63.75, '2015-11-05 08:00:00', '2015-11-06 13:55:00', '2015-11-04 15:35:22', '2015-11-07 10:04:33'),
(297, 'GK0237', 'queen 002', 7, '2015-11-10', 1, 5, 41040, 120, 4649, NULL, NULL, '0236と共に10日の昼までにくれると助かります。⇒6日には完了予定です。', 3, 47, '2015-11-05 08:00:00', '2015-11-06 15:10:00', '2015-11-04 15:36:32', '2015-11-07 10:08:16'),
(298, 'GK0238', 'ark akina', 8, '2015-11-10', 1, 5, 49579, 145, 4649, NULL, NULL, 'これもちょいタイトだけど、よろしくです！', 3, 74.33, '2015-11-06 08:00:00', '2015-11-07 16:50:00', '2015-11-05 13:28:05', '2015-11-07 17:02:13'),
(299, 'GK0239', 'gokuraku oppavolley2', 1, '2015-11-12', 1, 5, 23250, 150, 4649, NULL, NULL, '', 3, 54.59, '2015-11-06 12:00:00', '2015-11-07 16:10:00', '2015-11-06 10:56:49', '2015-11-07 16:38:16'),
(300, 'GK0240', 'ark kotohara', 8, '2015-11-11', 1, 5, 41040, 120, 4649, NULL, NULL, 'パンツ透けが多いので注意してください。（薄くかける感じでOKです。）\r\n12日の日本時間12:00までに何とかお願いします。', 3, 51.24, '2015-11-10 08:00:00', '2015-11-11 15:15:00', '2015-11-09 12:15:52', '2015-11-11 15:49:24'),
(301, 'GK0241', 'queen 087', 7, '2015-11-16', 1, 5, 53010, 155, 4649, NULL, NULL, '', 3, 59.42, '2015-11-10 08:00:00', '2015-11-12 15:10:00', '2015-11-09 16:59:09', '2015-11-13 07:52:32'),
(302, 'GK0242', 'queen 175', 7, '2015-11-13', 1, 5, 49590, 145, 4649, NULL, NULL, '', 3, 36.25, '2015-11-10 08:00:00', '2015-11-12 13:00:00', '2015-11-09 17:00:04', '2015-11-12 13:55:54'),
(303, 'GK0243', 'queen 156', 7, '2015-11-17', 1, 5, 46170, 135, 4649, NULL, NULL, '', 3, 56.58, '2015-11-10 08:00:00', '2015-11-12 16:00:00', '2015-11-09 17:00:56', '2015-11-13 07:54:38'),
(304, 'GK0244', 'sept hosikawa', 3, '2015-11-18', 1, 5, 57456, 160, 4649, NULL, NULL, '', 1, NULL, NULL, NULL, '2015-11-12 14:18:47', '2015-11-12 14:18:47'),
(305, 'GK0245', 'sept rara', 3, '2015-11-18', 1, 5, 44887, 125, 4649, NULL, NULL, '', 1, NULL, NULL, NULL, '2015-11-12 14:19:26', '2015-11-12 14:22:58');
INSERT INTO `orders` (`id`, `control_no`, `file_name`, `client_id`, `delivery_date`, `mosaic_type_id`, `mosaic_size_id`, `price`, `length`, `target_time`, `cut_count`, `multiplay`, `note`, `status_type_id`, `worktime`, `started`, `completed`, `created`, `modified`) VALUES
(306, 'GK0246', 'tukuba 4zi', 6, '2015-11-30', 2, 1, 43200, 240, 4649, NULL, NULL, '審査団体を通さない素材なので、モレに気を付けてください。', 1, NULL, NULL, NULL, '2015-11-12 14:24:53', '2015-11-12 14:24:53');

-- --------------------------------------------------------

--
-- テーブルの構造 `pay_cut_types`
--

CREATE TABLE IF NOT EXISTS `pay_cut_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `amount` float NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`type`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- テーブルのデータをダンプしています `pay_cut_types`
--

INSERT INTO `pay_cut_types` (`id`, `type`, `amount`) VALUES
(1, 'off', 6.67),
(2, 'late', 1),
(3, 'early leave', 1),
(4, 'no call off', 13.5),
(5, 'paid off', 0),
(6, 'overtime work', -1),
(7, 'holiday work', -6.67);

-- --------------------------------------------------------

--
-- テーブルの構造 `priority_types`
--

CREATE TABLE IF NOT EXISTS `priority_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `priority` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- テーブルの構造 `salaries`
--

CREATE TABLE IF NOT EXISTS `salaries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` int(11) NOT NULL,
  `month` date NOT NULL,
  `basic` float NOT NULL,
  `deposit` float NOT NULL,
  `absence` float NOT NULL,
  `late` float NOT NULL,
  `early` float NOT NULL,
  `overtime` float NOT NULL,
  `off_work` float NOT NULL,
  `bonus` float NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `employeeid` (`employee_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=96 ;

--
-- テーブルのデータをダンプしています `salaries`
--

INSERT INTO `salaries` (`id`, `employee_id`, `month`, `basic`, `deposit`, `absence`, `late`, `early`, `overtime`, `off_work`, `bonus`, `created`, `modified`) VALUES
(2, 2, '2014-10-01', 250, 0, 0, 0, 0, 0, 0, 0, '2015-08-18 15:27:41', '2015-08-18 15:27:41'),
(3, 2, '2014-11-01', 250, 0, 0, 0, 0, 0, 0, 0, '2015-08-18 15:28:12', '2015-08-18 15:28:12'),
(4, 2, '2014-12-01', 250, 0, 0, 0, 0, 0, 0, 0, '2015-08-18 15:28:27', '2015-08-18 15:28:27'),
(5, 2, '2015-01-01', 300, 0, 0, 0, 0, 0, 0, 0, '2015-08-18 15:28:41', '2015-08-18 15:28:41'),
(6, 2, '2015-02-01', 300, 0, 0, 0, 0, 0, 0, 0, '2015-08-18 15:28:46', '2015-08-18 15:28:46'),
(7, 2, '2015-03-01', 300, 0, 0, 0, 0, 0, 0, 0, '2015-08-18 15:28:51', '2015-08-18 15:28:51'),
(8, 2, '2015-04-01', 300, 0, 0, 0, 0, 0, 0, 0, '2015-08-18 15:28:55', '2015-08-18 15:28:55'),
(9, 2, '2015-05-01', 300, 0, 0, 0, 0, 0, 0, 0, '2015-08-18 15:29:00', '2015-08-18 15:29:00'),
(10, 2, '2015-06-01', 300, 0, 0, 0, 0, 0, 0, 0, '2015-08-18 15:29:04', '2015-08-18 15:29:04'),
(11, 2, '2015-07-01', 300, 0, 0, 0, 0, 0, 0, 0, '2015-08-18 15:29:13', '2015-08-18 15:29:13'),
(12, 3, '2014-12-01', 180, 20, 0, 0, 0, 0, 0, 0, '2015-08-18 16:00:00', '2015-08-18 16:00:00'),
(13, 3, '2015-01-01', 180, 20, 19.35, 0, 0, 0, 0, 0, '2015-08-18 16:00:00', '2015-08-18 16:00:00'),
(14, 3, '2015-02-01', 180, 20, 0, 3.57, 0, 0, 0, 0, '2015-08-18 16:00:00', '2015-08-18 16:00:00'),
(15, 3, '2015-03-01', 180, 20, 0, 3.33, 0, 0, 0, 0, '2015-08-18 16:00:00', '2015-08-18 16:00:00'),
(16, 3, '2015-04-01', 180, 0, 13.33, 0, 2.5, 0, 0, 0, '2015-08-18 16:00:00', '2015-08-18 16:00:00'),
(17, 3, '2015-05-01', 180, 0, 26.67, 0, 0, 0, 0, 0, '2015-08-18 16:00:00', '2015-08-18 16:00:00'),
(18, 3, '2015-06-01', 200, 0, 0, 0, 0, 0, 0, 0, '2015-08-18 16:00:00', '2015-08-18 16:00:00'),
(19, 3, '2015-07-01', 200, 0, 0, 0, 5.83, 0, 0, 0, '2015-08-18 16:00:00', '2015-08-18 16:00:00'),
(20, 4, '2014-12-01', 180, 20, 0, 0, 0, 0, 0, 0, '2015-08-18 16:00:00', '2015-08-18 16:00:00'),
(21, 4, '2015-01-01', 180, 20, 0, 0, 0, 0, 0, 0, '2015-08-18 16:00:00', '2015-08-18 16:00:00'),
(22, 4, '2015-02-01', 180, 20, 0, 0, 0, 0, 0, 0, '2015-08-18 16:00:00', '2015-08-18 16:00:00'),
(23, 4, '2015-03-01', 200, 0, 0, 0, 0, 0, 0, 0, '2015-08-18 16:00:00', '2015-08-18 16:00:00'),
(24, 4, '2015-04-01', 200, 0, 0, 0, 0, 0, 0, 0, '2015-08-18 16:00:00', '2015-08-18 16:00:00'),
(25, 4, '2015-05-01', 200, 0, 0, 0, 0, 0, 0, 0, '2015-08-18 16:00:00', '2015-08-18 16:00:00'),
(26, 4, '2015-06-01', 200, 0, 0, 0, 0, 0, 0, 0, '2015-08-18 16:00:00', '2015-08-18 16:00:00'),
(27, 4, '2015-07-01', 200, 0, 0, 0, 0, 0, 0, 0, '2015-08-18 16:00:00', '2015-08-18 16:00:00'),
(28, 5, '2014-12-01', 180, 20, 0, 0, 0, 0, 0, 0, '2015-08-18 16:00:00', '2015-08-18 16:00:00'),
(29, 5, '2015-01-01', 180, 20, 0, 0, 0, 0, 0, 0, '2015-08-18 16:00:00', '2015-08-18 16:00:00'),
(30, 5, '2015-02-01', 180, 20, 0, 0, 0, 0, 0, 0, '2015-08-18 16:00:00', '2015-08-18 16:00:00'),
(31, 5, '2015-03-01', 200, 0, 0, 0, 0, 0, 0, 0, '2015-08-18 16:00:00', '2015-08-18 16:00:00'),
(32, 5, '2015-04-01', 200, 0, 6.67, 0, 0, 0, 0, 0, '2015-08-18 16:00:00', '2015-08-18 16:00:00'),
(33, 5, '2015-05-01', 200, 0, 0, 0, 0, 0, 0, 0, '2015-08-18 16:00:00', '2015-08-18 16:00:00'),
(34, 5, '2015-06-01', 200, 0, 0, 0, 0, 0, 0, 0, '2015-08-18 16:00:00', '2015-08-18 16:00:00'),
(35, 5, '2015-07-01', 200, 0, 0, 0, 0, 0, 0, 0, '2015-08-18 16:00:00', '2015-08-18 16:00:00'),
(36, 6, '2014-12-01', 180, 20, 0, 0, 0, 0, 0, 0, '2015-08-18 16:00:00', '2015-08-18 16:00:00'),
(37, 6, '2015-01-01', 180, 20, 6.45, 0, 0.81, 0, 0, 0, '2015-08-18 16:00:00', '2015-08-18 16:00:00'),
(38, 6, '2015-02-01', 180, 20, 6.7, 5, 1.3, 0, 0, 0, '2015-08-18 16:00:00', '2015-08-18 16:00:00'),
(39, 6, '2015-03-01', 200, 0, 6.67, 0, 0, 0, 0, 0, '2015-08-18 16:00:00', '2015-08-18 16:00:00'),
(40, 6, '2015-04-01', 200, 0, 0, 3.33, 0, 0, 0, 0, '2015-08-18 16:00:00', '2015-08-18 16:00:00'),
(41, 6, '2015-05-01', 200, 0, 0, 0, 0, 0, 0, 0, '2015-08-18 16:00:00', '2015-08-18 16:00:00'),
(42, 6, '2015-06-01', 200, 0, 0, 0, 0, 0, 0, 0, '2015-08-18 16:00:00', '2015-08-18 16:00:00'),
(43, 6, '2015-07-01', 200, 0, 0, 0, 0, 0, 0, 0, '2015-08-18 16:00:00', '2015-08-18 16:00:00'),
(44, 7, '2014-12-01', 180, 20, 6.45, 0, 0, 0, 0, 0, '2015-08-18 16:00:00', '2015-08-18 16:00:00'),
(45, 7, '2015-01-01', 180, 20, 0, 0, 0, 0, 0, 0, '2015-08-18 16:00:00', '2015-08-18 16:00:00'),
(46, 7, '2015-02-01', 180, 20, 0, 0, 0, 0, 0, 0, '2015-08-18 16:00:00', '2015-08-18 16:00:00'),
(47, 7, '2015-03-01', 200, 0, 0, 0, 0, 0, 0, 0, '2015-08-18 16:00:00', '2015-08-18 16:00:00'),
(48, 7, '2015-04-01', 200, 0, 0, 0, 0, 0, 0, 0, '2015-08-18 16:00:00', '2015-08-18 16:00:00'),
(49, 7, '2015-05-01', 200, 0, 6.67, 0, 0, 0, 0, 0, '2015-08-18 16:00:00', '2015-08-18 16:00:00'),
(50, 7, '2015-06-01', 200, 0, 0, 0, 0, 0, 0, 0, '2015-08-18 16:00:00', '2015-08-18 16:00:00'),
(51, 7, '2015-07-01', 200, 0, 0, 0, 4.17, 0, 0, 0, '2015-08-18 16:00:00', '2015-08-18 16:00:00'),
(52, 8, '2014-12-01', 157, 20, 0, 0, 0, 0, 0, 0, '2015-08-18 16:00:00', '2015-08-18 16:00:00'),
(53, 8, '2015-01-01', 180, 20, 0, 0, 0, 0, 0, 0, '2015-08-18 16:00:00', '2015-08-18 16:00:00'),
(54, 8, '2015-02-01', 180, 20, 0, 0, 0, 0, 0, 0, '2015-08-18 16:00:00', '2015-08-18 16:00:00'),
(55, 8, '2015-03-01', 196, 0, 0, 0, 0, 0, 0, 0, '2015-08-18 16:00:00', '2015-08-18 16:00:00'),
(56, 8, '2015-04-01', 200, 0, 0, 0, 3.75, 0, 0, 0, '2015-08-18 16:00:00', '2015-08-18 16:00:00'),
(57, 8, '2015-05-01', 200, 0, 0, 0, 0, 0, 0, 0, '2015-08-18 16:00:00', '2015-08-18 16:00:00'),
(58, 8, '2015-06-01', 200, 0, 6.67, 0, 0, 0, 0, 0, '2015-08-18 16:00:00', '2015-08-18 16:00:00'),
(59, 8, '2015-07-01', 200, 0, 0, 0, 0, 0, 0, 0, '2015-08-18 16:00:00', '2015-08-18 16:00:00'),
(60, 10, '2015-03-01', 180, 20, 13.33, 0.83, 0, 0, 0, 0, '2015-08-18 16:00:00', '2015-08-18 16:00:00'),
(61, 10, '2015-04-01', 180, 20, 13.33, 0.42, 1.25, 0, 0, 0, '2015-08-18 16:00:00', '2015-08-18 16:00:00'),
(62, 10, '2015-05-01', 180, 20, 20, 0.42, 0, 0, 0, 0, '2015-08-18 16:00:00', '2015-08-18 16:00:00'),
(63, 10, '2015-06-01', 200, 0, 20, 0, 0, 0, 0, 0, '2015-08-18 16:00:00', '2015-08-18 16:00:00'),
(64, 10, '2015-07-01', 200, 0, 40, 0.83, 6.67, 0, 0, 0, '2015-08-18 16:00:00', '2015-08-18 16:00:00'),
(65, 6, '2015-08-01', 200, 0, 6.67, 0, 0, 0, 0, 0, '2015-09-03 20:39:37', '2015-09-03 20:39:37'),
(66, 5, '2015-08-01', 200, 0, 6.67, 0, 0, 0, 0, 0, '2015-09-03 20:40:04', '2015-09-03 20:40:04'),
(67, 4, '2015-08-01', 200, 0, 0, 0, 0, 0, 0, 0, '2015-09-03 20:40:42', '2015-09-03 20:40:42'),
(68, 7, '2015-08-01', 200, 0, 0, 0, 0, 0, 0, 0, '2015-09-03 20:40:57', '2015-09-03 20:40:57'),
(69, 8, '2015-08-01', 200, 0, 13.5, 0, 0, 0, 0, 0, '2015-09-03 20:41:19', '2015-09-03 20:41:19'),
(70, 3, '2015-08-01', 200, 0, 0, 0, 0, 0, 0, 0, '2015-09-03 20:41:54', '2015-09-03 20:41:54'),
(71, 10, '2015-08-01', 200, 0, 6.67, 0, 0, 0, 0, 0, '2015-09-03 20:42:17', '2015-09-03 20:42:17'),
(72, 2, '2015-08-01', 300, 0, 0, 0, 0, 0, 0, 0, '2015-09-03 20:42:35', '2015-09-03 20:42:35'),
(73, 13, '2015-08-01', 150, 20, 6.67, 0, 0, 0, 0, 0, '2015-09-03 20:43:39', '2015-09-03 20:43:39'),
(74, 11, '2015-08-01', 180, 20, 0, 0, 0, 0, 0, 0, '2015-09-03 20:43:58', '2015-09-03 20:43:58'),
(75, 6, '2015-09-01', 200, 0, 6.67, 0, 0, 0, 0, 0, '2015-10-01 06:38:13', '2015-10-01 06:38:13'),
(76, 5, '2015-09-01', 200, 0, 0, 0, 0, 0, 0, 0, '2015-10-01 06:38:57', '2015-10-01 06:38:57'),
(77, 8, '2015-09-01', 200, 0, 0, 0, 0, 0, 0, 0, '2015-10-01 06:39:23', '2015-10-01 06:39:23'),
(78, 4, '2015-09-01', 200, 0, 0, 0, 0, 0, 0, 0, '2015-10-01 06:39:40', '2015-10-01 06:39:40'),
(79, 7, '2015-09-01', 200, 0, 0, 0, 0, 0, 0, 0, '2015-10-01 06:40:01', '2015-10-01 06:40:01'),
(80, 3, '2015-09-01', 200, 0, 0, 0, 0, 0, 0, 0, '2015-10-01 06:40:12', '2015-10-01 06:40:12'),
(81, 11, '2015-09-01', 180, 20, 6.67, 0, 0, 0, 0, 0, '2015-10-01 06:43:49', '2015-10-01 06:43:49'),
(82, 13, '2015-09-01', 180, 20, 0, 4, 0, 0, 0, 0, '2015-10-01 06:44:12', '2015-10-01 06:44:12'),
(83, 2, '2015-09-01', 300, 0, 0, 0, 0, 0, 0, 0, '2015-10-01 06:44:21', '2015-10-01 06:44:21'),
(84, 14, '2015-09-01', 180, 20, 0, 0, 0, 0, 0, 0, '2015-10-01 06:44:33', '2015-10-01 06:44:33'),
(85, 6, '2015-10-01', 200, 0, 6.67, 0, 0, 0, 0, 0, '2015-11-05 16:50:38', '2015-11-05 16:50:38'),
(86, 5, '2015-10-01', 200, 0, 0, 0, 0, 0, 0, 0, '2015-11-05 16:54:56', '2015-11-05 16:54:56'),
(87, 4, '2015-10-01', 200, 0, 0, 0, 5, 0, 0, 0, '2015-11-05 16:56:56', '2015-11-05 16:56:56'),
(88, 7, '2015-10-01', 200, 0, 0, 0, 0, 3, 0, 0, '2015-11-05 16:58:15', '2015-11-05 16:58:15'),
(89, 8, '2015-10-01', 200, 0, 6.67, 0, 0, 5.5, 0, 0, '2015-11-05 16:59:17', '2015-11-05 16:59:17'),
(90, 3, '2015-10-01', 200, 0, 6.67, 0, 0, 4, 0, 0, '2015-11-05 17:00:23', '2015-11-05 17:00:23'),
(91, 10, '2015-10-01', 200, 0, 13.5, 0, 0, 0, 0, 0, '2015-11-05 17:02:10', '2015-11-05 17:02:10'),
(92, 11, '2015-10-01', 180, 20, 0, 0, 0, 0, 0, 0, '2015-11-05 17:03:40', '2015-11-05 17:03:40'),
(93, 13, '2015-10-01', 180, 20, 0, 0, 0, 3, 0, 0, '2015-11-05 17:04:30', '2015-11-05 17:04:30'),
(94, 14, '2015-10-01', 180, 20, 0, 0, 0, 0, 0, 0, '2015-11-05 17:05:19', '2015-11-05 17:05:19'),
(95, 2, '2015-10-01', 330, 0, 0, 0, 0, 0, 0, 0, '2015-11-05 17:06:11', '2015-11-05 17:06:11');

-- --------------------------------------------------------

--
-- テーブルの構造 `status_types`
--

CREATE TABLE IF NOT EXISTS `status_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- テーブルのデータをダンプしています `status_types`
--

INSERT INTO `status_types` (`id`, `status`) VALUES
(1, 'waiting'),
(2, 'working'),
(3, 'completed');

-- --------------------------------------------------------

--
-- テーブルの構造 `task_records`
--

CREATE TABLE IF NOT EXISTS `task_records` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `edit_length` int(11) DEFAULT NULL,
  `edit_point` float DEFAULT NULL,
  `clip_no` int(11) DEFAULT NULL,
  `clip_in` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `clip_out` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `overtime` float DEFAULT NULL,
  `started` datetime DEFAULT NULL,
  `completed` datetime DEFAULT NULL,
  `worktime` float DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `control_no_idx` (`order_id`),
  KEY `employee_id_idx` (`employee_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=866 ;

--
-- テーブルのデータをダンプしています `task_records`
--

INSERT INTO `task_records` (`id`, `order_id`, `employee_id`, `edit_length`, `edit_point`, `clip_no`, `clip_in`, `clip_out`, `overtime`, `started`, `completed`, `worktime`, `created`, `modified`) VALUES
(1, 3, 8, 120, 19800, 0, 'NULL', 'NULL', 0, '2015-02-05 13:30:00', '2015-02-09 17:00:00', 20, '0000-00-00 00:00:00', '2015-08-16 11:29:24'),
(2, 1, 5, 50, 20000, 0, 'NULL', 'NULL', 0, '2015-01-30 09:00:00', '2015-02-02 12:40:00', 20, '0000-00-00 00:00:00', '2015-08-16 11:29:05'),
(3, 2, 6, 36, 10000, 0, 'NULL', 'NULL', 0, '2015-02-02 15:00:00', '2015-02-05 10:40:00', 12, '0000-00-00 00:00:00', '2015-08-16 11:28:28'),
(4, 4, 5, 120, 19800, 0, 'NULL', 'NULL', 0, '2015-02-05 13:30:00', '2015-02-09 17:00:00', 20, '0000-00-00 00:00:00', '2015-08-16 11:27:54'),
(5, 5, 4, 120, 19800, 0, 'NULL', 'NULL', 0, '2015-02-05 13:30:00', '2015-02-09 14:25:00', 17, '0000-00-00 00:00:00', '2015-08-16 11:27:22'),
(6, 6, 6, 240, 82080, 0, 'NULL', 'NULL', 0, '2015-02-05 13:30:00', '2015-02-11 14:18:00', 33, '0000-00-00 00:00:00', '2015-08-16 11:26:41'),
(7, 11, 5, 240, 82080, 0, 'NULL', 'NULL', 0, '2015-02-10 15:30:00', '2015-02-20 12:00:00', 60, '0000-00-00 00:00:00', '2015-08-16 11:25:35'),
(8, 7, 3, 120, 19440, 0, 'NULL', 'NULL', 0, '2015-02-09 14:07:00', '2015-02-12 13:30:00', 23.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 9, 7, 120, 19440, 0, 'NULL', 'NULL', 0, '2015-02-10 08:00:00', '2015-02-12 17:30:00', 25.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 10, 8, 120, 19440, 0, 'NULL', 'NULL', 0, '2015-02-10 15:30:00', '2015-02-16 08:00:00', 24.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 8, 4, 120, 19440, 0, 'NULL', 'NULL', 0, '2015-02-10 12:00:00', '2015-02-12 14:25:00', 18.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 12, 6, 240, 82080, 0, 'NULL', 'NULL', 0, '2015-02-11 15:08:00', '2015-02-20 13:39:00', 55, '0000-00-00 00:00:00', '2015-08-16 11:24:21'),
(13, 18, 7, 240, 82080, 0, 'NULL', 'NULL', 0, '2015-02-17 13:15:00', '2015-02-27 17:00:00', 68, '0000-00-00 00:00:00', '2015-08-16 11:18:27'),
(14, 13, 8, 120, 41040, 0, 'NULL', 'NULL', 5, '2015-02-20 15:00:00', '2015-02-25 13:51:00', 28, '0000-00-00 00:00:00', '2015-08-16 11:22:39'),
(15, 14, 4, 60, 9720, 0, 'NULL', 'NULL', 0, '2015-02-24 08:00:00', '2015-02-25 17:00:00', 17, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 15, 6, 60, 9720, 0, 'NULL', 'NULL', 0, '2015-02-24 08:00:00', '2015-02-25 09:27:00', 9.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 16, 5, 90, 14580, 0, 'NULL', 'NULL', 0, '2015-02-24 08:00:00', '2015-02-26 11:21:00', 19.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 17, 6, 240, 38880, 0, 'NULL', 'NULL', 0, '2015-02-25 09:27:00', '2015-02-26 15:25:00', 14, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 19, 3, 150, 23750, 0, 'NULL', 'NULL', 6, '2015-02-27 12:00:00', '2015-03-11 12:03:00', 62.25, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 22, 4, 240, 38000, 0, 'NULL', 'NULL', 0, '2015-03-03 13:30:00', '2015-03-13 17:00:00', 59.75, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 20, 7, 120, 41040, 0, 'NULL', 'NULL', 0, '2015-03-03 15:56:00', '2015-03-11 13:35:00', 37.75, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 21, 8, 120, 41040, 0, 'NULL', 'NULL', 4, '2015-03-03 16:20:00', '2015-03-11 13:14:00', 41, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 23, 6, 120, 19440, 0, 'NULL', 'NULL', 1.5, '2015-03-12 08:00:00', '2015-03-17 14:51:00', 32.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 24, 7, 120, 19440, 0, 'NULL', 'NULL', 1.5, '2015-03-12 08:00:00', '2015-03-17 17:10:00', 34.75, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 25, 8, 120, 19440, 0, 'NULL', 'NULL', 6, '2015-03-12 08:00:00', '2015-03-17 09:24:00', 31.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 26, 5, 120, 19440, 0, 'NULL', 'NULL', 2.5, '2015-03-12 12:00:00', '2015-03-17 08:59:00', 23.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 27, 4, 120, 41040, 0, 'NULL', 'NULL', 0, '2015-03-17 09:30:00', '2015-03-23 09:06:00', 31.75, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 29, 5, 120, 41040, 0, 'NULL', 'NULL', 0, '2015-03-17 09:30:00', '2015-03-25 17:02:00', 55.75, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 28, 3, 40, 6300, 0, 'NULL', 'NULL', 0, '2015-03-18 16:00:00', '2015-03-23 10:44:00', 18.75, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, 34, 6, 120, 41040, 0, 'NULL', 'NULL', 6, '2015-03-20 12:30:00', '2015-03-31 04:37:00', 54.25, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, 31, 3, 40, 6300, 0, 'NULL', 'NULL', 0, '2015-03-23 12:00:00', '2015-03-26 10:39:00', 22.75, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, 30, 4, 240, 38880, 0, 'NULL', 'NULL', 0, '2015-03-24 08:00:00', '2015-03-25 17:02:00', 17.25, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, 32, 7, 120, 41040, 0, 'NULL', 'NULL', 0, '2015-03-24 15:00:00', '2015-03-30 15:45:00', 32.75, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, 35, 8, 120, 41040, 0, 'NULL', 'NULL', 3, '2015-03-25 08:00:00', '2015-03-31 05:10:00', 32.25, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, 36, 1, 240, 38000, 0, 'NULL', 'NULL', 0, '2015-03-25 08:00:00', '2015-03-31 17:00:00', 41, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(36, 37, 5, 87, 29705, 0, 'NULL', 'NULL', 0, '2015-03-26 08:00:00', '2015-04-01 12:00:00', 36, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(37, 33, 3, 40, 6300, 0, 'NULL', 'NULL', 0.5, '2015-03-26 13:30:00', '2015-03-30 16:42:00', 19.75, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, 42, 4, 240, 38000, 0, 'NULL', 'NULL', 3, '2015-03-26 14:00:00', '2015-04-08 16:37:00', 85.75, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, 38, 7, 120, 41040, 0, 'NULL', 'NULL', 0, '2015-03-26 12:00:00', '2015-04-04 17:00:00', 61.25, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(40, 39, 6, 120, 41040, 0, 'NULL', 'NULL', 1.5, '2015-04-01 08:00:00', '2015-04-07 12:03:00', 45.75, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(41, 40, 5, 120, 41040, 0, 'NULL', 'NULL', 2.5, '2015-04-01 08:00:00', '2015-04-07 10:04:00', 44.75, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(42, 45, 8, 120, 41040, 0, 'NULL', 'NULL', 3, '2015-04-02 15:00:00', '2015-04-09 10:29:00', 46.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(43, 43, 7, 120, 9000, 0, 'NULL', 'NULL', 3, '2015-04-06 13:00:00', '2015-04-08 10:00:00', 16, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(44, 46, 6, 120, 9000, 0, 'NULL', 'NULL', 1, '2015-04-07 10:00:00', '2015-04-09 09:56:00', 17, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(45, 44, 5, 120, 9000, 0, 'NULL', 'NULL', 1, '2015-04-07 10:00:00', '2015-04-08 13:15:00', 12.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(46, 47, 3, 120, 9000, 0, 'NULL', 'NULL', 1, '2015-04-08 09:32:00', '2015-04-10 16:56:00', 24.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(47, 49, 7, 150, 23750, 0, 'NULL', 'NULL', 12.5, '2015-04-08 10:26:00', '2015-04-13 17:00:00', 51.25, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(48, 48, 5, 60, 20520, 0, 'NULL', 'NULL', 1, '2015-04-08 15:20:00', '2015-04-11 14:10:00', 24, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(49, 55, 9, 65, 22194, 0, 'NULL', 'NULL', 2, '2015-04-11 10:00:00', '2015-04-22 16:00:00', 40, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(50, 55, 10, 65, 22194, 0, 'NULL', 'NULL', 0.5, '2015-04-12 16:00:00', '2015-04-23 17:00:00', 33.75, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(51, 50, 8, 120, 38000, 0, 'NULL', 'NULL', 4, '2015-04-09 12:00:00', '2015-04-13 16:04:00', 32.25, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(52, 51, 6, 120, 41040, 0, 'NULL', 'NULL', 4, '2015-04-10 10:20:00', '2015-04-13 17:00:00', 26.75, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(53, 53, 3, 120, 41040, 0, 'NULL', 'NULL', 3, '2015-04-11 08:00:00', '2015-04-21 17:00:00', 36, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(54, 52, 5, 80, 27360, 0, 'NULL', 'NULL', 2, '2015-04-11 14:00:00', '2015-04-20 14:20:00', 18.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(55, 52, 4, 40, 13680, 0, 'NULL', 'NULL', 1, '2015-04-11 12:30:00', '2015-04-20 17:00:00', 21.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(56, 54, 7, 120, 41040, 0, 'NULL', 'NULL', 2, '2015-04-20 08:00:00', '2015-04-21 17:00:00', 19, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(57, 54, 8, 120, 41040, 0, 'NULL', 'NULL', 2, '2015-04-20 08:00:00', '2015-04-21 13:00:00', 15, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(58, 56, 6, 150, 19000, 0, 'NULL', 'NULL', 1, '2015-04-20 11:00:00', '2015-04-23 13:40:00', 27.75, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(59, 56, 5, 90, 19000, 0, 'NULL', 'NULL', 1, '2015-04-20 14:20:00', '2015-04-22 12:00:00', 14.75, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(60, 57, 4, 60, 19000, 0, 'NULL', 'NULL', 1, '2015-04-21 08:00:00', '2015-04-23 08:10:00', 17.25, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(61, 58, 7, 60, 4500, 0, 'NULL', 'NULL', 0, '2015-04-23 12:00:00', '2015-04-24 13:30:00', 9.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(62, 58, 8, 60, 4500, 0, 'NULL', 'NULL', 0, '2015-04-23 12:00:00', '2015-04-24 14:00:00', 10.25, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(63, 59, 4, 30, 2250, 0, 'NULL', 'NULL', 0, '2015-04-24 09:30:00', '2015-04-24 15:20:00', 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(64, 59, 9, 30, 2250, 0, 'NULL', 'NULL', 0, '2015-04-24 09:30:00', '2015-04-25 11:00:00', 9.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(65, 59, 10, 30, 2250, 0, 'NULL', 'NULL', 0, '2015-04-24 09:30:00', '2015-04-24 13:40:00', 4.25, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(66, 59, 3, 30, 2250, 0, 'NULL', 'NULL', 0, '2015-04-24 09:30:00', '2015-04-24 16:20:00', 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(67, 60, 5, 20, 6840, 0, 'NULL', 'NULL', 0, '2015-04-25 08:00:00', '2015-04-25 14:45:00', 6.75, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(68, 60, 7, 20, 6840, 0, 'NULL', 'NULL', 4.5, '2015-04-25 08:00:00', '2015-04-27 09:00:00', 13.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(69, 60, 4, 20, 6840, 0, 'NULL', 'NULL', 0, '2015-04-25 08:00:00', '2015-04-27 09:30:00', 9.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(70, 60, 3, 20, 6840, 0, 'NULL', 'NULL', 0, '2015-04-25 08:00:00', '2015-04-25 16:15:00', 8.25, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(71, 60, 6, 20, 6840, 0, 'NULL', 'NULL', 0, '2015-04-25 08:00:00', '2015-04-25 14:30:00', 6.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(72, 60, 8, 20, 6840, 0, 'NULL', 'NULL', 0, '2015-04-25 08:00:00', '2015-04-25 13:30:00', 5.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(73, 61, 7, 20, 5960, 0, 'NULL', 'NULL', 1, '2015-04-27 12:00:00', '2015-04-28 15:00:00', 12, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(74, 61, 9, 20, 5500, 0, 'NULL', 'NULL', 1, '2015-04-27 12:00:00', '2015-04-28 16:45:00', 13.75, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(75, 61, 8, 20, 5500, 0, 'NULL', 'NULL', 2, '2015-04-27 12:00:00', '2015-04-28 16:00:00', 14, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(76, 61, 4, 20, 5500, 0, 'NULL', 'NULL', 1, '2015-04-27 12:00:00', '2015-04-28 12:00:00', 9, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(77, 61, 5, 20, 5500, 0, 'NULL', 'NULL', 1, '2015-04-27 12:00:00', '2015-04-28 09:30:00', 6.75, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(78, 61, 10, 10, 5500, 0, 'NULL', 'NULL', 1, '2015-04-27 12:00:00', '2015-04-28 10:45:00', 7.75, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(79, 61, 6, 10, 5500, 0, 'NULL', 'NULL', 0, '2015-04-27 12:00:00', '2015-04-28 11:30:00', 7.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(80, 61, 3, 10, 5500, 0, 'NULL', 'NULL', 1, '2015-04-27 12:00:00', '2015-04-28 13:30:00', 10.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(81, 63, 8, 30, 5600, 0, 'NULL', 'NULL', 1.5, '2015-04-28 16:00:00', '2015-04-29 09:00:00', 2.75, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(82, 63, 5, 40, 5200, 0, 'NULL', 'NULL', 0, '2015-04-28 09:30:00', '2015-04-29 11:00:00', 9.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(83, 63, 7, 40, 5200, 0, 'NULL', 'NULL', 0.5, '2015-04-28 15:00:00', '2015-04-29 09:30:00', 3.25, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(84, 63, 3, 30, 5200, 0, 'NULL', 'NULL', 1, '2015-04-28 13:30:00', '2015-04-29 10:30:00', 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(85, 63, 9, 30, 5200, 0, 'NULL', 'NULL', 1, '2015-04-28 16:45:00', '2015-04-29 17:00:00', 9.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(86, 63, 10, 30, 5200, 0, 'NULL', 'NULL', 0.5, '2015-04-28 11:00:00', '2015-04-29 17:00:00', 14.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(87, 64, 4, 40, 6840, 0, 'NULL', 'NULL', 0, '2015-04-29 08:00:00', '2015-04-29 17:00:00', 9, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(88, 64, 7, 20, 6840, 0, 'NULL', 'NULL', 0, '2015-04-29 09:30:00', '2015-04-29 17:00:00', 7.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(89, 64, 3, 20, 6840, 0, 'NULL', 'NULL', 0, '2015-04-29 10:30:00', '2015-04-29 16:30:00', 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(90, 64, 6, 20, 6840, 0, 'NULL', 'NULL', 0, '2015-04-29 10:00:00', '2015-04-29 17:00:00', 7.25, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(91, 64, 5, 10, 6840, 0, 'NULL', 'NULL', 0, '2015-04-29 11:00:00', '2015-04-29 16:45:00', 5.75, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(92, 64, 8, 10, 6840, 0, 'NULL', 'NULL', 0, '2015-04-29 09:00:00', '2015-04-29 15:30:00', 6.75, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(93, 62, 4, 40, 10260, 0, 'NULL', 'NULL', 0.5, '2015-04-28 12:00:00', '2015-04-28 17:00:00', 5.75, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(94, 62, 6, 20, 10260, 0, 'NULL', 'NULL', 0.5, '2015-04-28 14:30:00', '2015-04-29 10:00:00', 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(95, 65, 7, 30, 4158, 0, 'NULL', 'NULL', 0.5, '2015-04-30 09:30:00', '2015-04-30 17:00:00', 8, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(96, 65, 9, 30, 4156, 0, 'NULL', 'NULL', 0, '2015-04-30 09:45:00', '2015-04-30 17:00:00', 7.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(97, 65, 8, 25, 4156, 0, 'NULL', 'NULL', 0, '2015-04-30 09:45:00', '2015-04-30 15:15:00', 5.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(98, 65, 10, 25, 4156, 0, 'NULL', 'NULL', 1, '2015-04-30 10:00:00', '2015-04-30 17:00:00', 8.25, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(99, 65, 3, 25, 4156, 0, 'NULL', 'NULL', 0, '2015-04-30 10:00:00', '2015-04-30 15:15:00', 5.25, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(100, 65, 5, 25, 4156, 0, 'NULL', 'NULL', 0, '2015-04-30 10:00:00', '2015-04-30 15:15:00', 5.25, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(101, 65, 6, 25, 4156, 0, 'NULL', 'NULL', 0, '2015-04-30 10:00:00', '2015-04-30 17:00:00', 7.25, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(102, 65, 4, 25, 4156, 0, 'NULL', 'NULL', 0.5, '2015-04-30 10:20:00', '2015-04-30 17:00:00', 7.25, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(103, 66, 3, 20, 3030, 0, 'NULL', 'NULL', 0.5, '2015-05-04 08:00:00', '2015-05-04 11:25:00', 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(104, 66, 5, 20, 2960, 0, 'NULL', 'NULL', 0.5, '2015-05-04 12:00:00', '2015-05-04 17:00:00', 5.75, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(105, 66, 8, 20, 2960, 0, 'NULL', 'NULL', 0.5, '2015-05-04 08:00:00', '2015-05-04 10:05:00', 2.75, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(106, 66, 10, 20, 2960, 0, 'NULL', 'NULL', 0, '2015-05-04 08:00:00', '2015-05-04 13:25:00', 5.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(107, 66, 9, 20, 2960, 0, 'NULL', 'NULL', 1.25, '2015-05-04 08:00:00', '2015-05-04 10:35:00', 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(108, 66, 7, 20, 2960, 0, 'NULL', 'NULL', 0.75, '2015-05-04 08:00:00', '2015-05-04 15:45:00', 8.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(109, 66, 4, 15, 2960, 0, 'NULL', 'NULL', 0.5, '2015-05-04 08:00:00', '2015-05-04 16:52:00', 9.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(110, 66, 6, 15, 2960, 0, 'NULL', 'NULL', 0, '2015-05-04 08:00:00', '2015-05-04 14:50:00', 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(111, 67, 5, 65, 22230, 0, 'NULL', 'NULL', 1.25, '2015-05-04 08:00:00', '2015-05-05 09:35:00', 11, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(112, 67, 6, 65, 22230, 0, 'NULL', 'NULL', 1.5, '2015-05-04 14:55:00', '2015-05-05 17:00:00', 11.75, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(113, 68, 9, 60, 20520, 0, 'NULL', 'NULL', 1.5, '2015-05-04 12:00:00', '2015-05-06 14:45:00', 20.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(114, 68, 7, 60, 20520, 0, 'NULL', 'NULL', 1.5, '2015-05-04 15:45:00', '2015-05-06 15:15:00', 17, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(115, 70, 3, 60, 9500, 0, 'NULL', 'NULL', 2, '2015-05-04 12:00:00', '2015-05-06 17:00:00', 23.25, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(116, 70, 4, 60, 9500, 0, 'NULL', 'NULL', 1, '2015-05-04 17:00:00', '2015-05-06 16:13:00', 16.25, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(117, 70, 5, 60, 9500, 0, 'NULL', 'NULL', 0.5, '2015-05-05 09:40:00', '2015-05-06 16:50:00', 15.75, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(118, 70, 6, 60, 9500, 0, 'NULL', 'NULL', 0, '2015-05-06 10:30:00', '2015-05-06 13:57:00', 3.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(119, 69, 8, 60, 20520, 0, 'NULL', 'NULL', 2, '2015-05-04 10:30:00', '2015-05-06 13:57:00', 21.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(120, 69, 10, 60, 20520, 0, 'NULL', 'NULL', 1.5, '2015-05-04 13:30:00', '2015-05-06 01:55:00', 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(121, 71, 7, 9, 2940, 0, 'NULL', 'NULL', 0, '2015-05-08 16:45:00', '2015-05-09 10:15:00', 1.75, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(122, 71, 9, 9, 2930, 0, 'NULL', 'NULL', 0, '2015-05-08 16:50:00', '2015-05-09 10:30:00', 1.75, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(123, 71, 4, 9, 2930, 0, 'NULL', 'NULL', 0, '2015-05-08 16:50:00', '2015-05-09 10:00:00', 1.25, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(124, 71, 5, 9, 2930, 0, 'NULL', 'NULL', 0, '2015-05-09 08:00:00', '2015-05-09 09:50:00', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(125, 71, 3, 8, 2930, 0, 'NULL', 'NULL', 0, '2015-05-09 08:00:00', '2015-05-09 10:30:00', 2.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(126, 71, 8, 8, 2930, 0, 'NULL', 'NULL', 0, '2015-05-09 08:00:00', '2015-05-09 11:15:00', 3.25, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(127, 71, 6, 8, 2930, 0, 'NULL', 'NULL', 0, '2015-05-09 08:10:00', '2015-05-09 09:10:00', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(128, 72, 7, 19, 6360, 0, 'NULL', 'NULL', 0, '2015-05-11 12:30:00', '2015-05-12 09:00:00', 4.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(129, 72, 4, 19, 6350, 0, 'NULL', 'NULL', 0, '2015-05-11 12:30:00', '2015-05-12 10:00:00', 5.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(130, 72, 5, 19, 6350, 0, 'NULL', 'NULL', 0, '2015-05-11 12:45:00', '2015-05-12 10:00:00', 5.25, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(131, 72, 8, 19, 6350, 0, 'NULL', 'NULL', 0, '2015-05-11 12:30:00', '2015-05-12 10:30:00', 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(132, 72, 6, 18, 6350, 0, 'NULL', 'NULL', 0, '2015-05-11 13:00:00', '2015-05-11 17:00:00', 4.25, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(133, 72, 9, 18, 6350, 0, 'NULL', 'NULL', 0, '2015-05-11 12:30:00', '2015-05-12 11:00:00', 6.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(134, 72, 3, 18, 6350, 0, 'NULL', 'NULL', 0, '2015-05-11 12:30:00', '2015-05-12 15:00:00', 10.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(135, 73, 5, 10, 3420, 0, 'NULL', 'NULL', 0, '2015-05-18 08:30:00', '2015-05-18 10:45:00', 2.25, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(136, 73, 10, 10, 3420, 0, 'NULL', 'NULL', 0, '2015-05-18 08:30:00', '2015-05-18 10:25:00', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(137, 73, 6, 10, 3420, 0, 'NULL', 'NULL', 0, '2015-05-18 08:30:00', '2015-05-18 10:55:00', 2.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(138, 73, 9, 10, 3420, 0, 'NULL', 'NULL', 0, '2015-05-18 08:30:00', '2015-05-18 11:38:00', 3.25, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(139, 73, 4, 10, 3420, 0, 'NULL', 'NULL', 0, '2015-05-18 08:30:00', '2015-05-18 11:10:00', 2.75, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(140, 73, 7, 10, 3420, 0, 'NULL', 'NULL', 0, '2015-05-18 08:30:00', '2015-05-18 12:17:00', 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(141, 74, 4, 23, 1714, 0, 'NULL', 'NULL', 0, '2015-05-18 13:00:00', '2015-05-18 15:53:00', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(142, 74, 6, 23, 1714, 0, 'NULL', 'NULL', 0, '2015-05-18 13:00:00', '2015-05-18 16:47:00', 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(143, 74, 10, 23, 1714, 0, 'NULL', 'NULL', 0, '2015-05-18 13:00:00', '2015-05-18 17:00:00', 4.25, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(144, 74, 7, 23, 1714, 0, 'NULL', 'NULL', 0, '2015-05-18 13:00:00', '2015-05-18 17:00:00', 4.25, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(145, 74, 9, 23, 1714, 0, 'NULL', 'NULL', 0.5, '2015-05-18 13:00:00', '2015-05-18 17:00:00', 4.75, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(146, 74, 5, 23, 1714, 0, 'NULL', 'NULL', 0, '2015-05-18 13:00:00', '2015-05-18 16:40:00', 3.75, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(147, 74, 3, 23, 1714, 0, 'NULL', 'NULL', 0, '2015-05-18 13:00:00', '2015-05-18 17:00:00', 4.25, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(148, 75, 4, 17, 5863, 0, 'NULL', 'NULL', 0, '2015-05-19 08:00:00', '2015-05-19 15:35:00', 7.75, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(149, 75, 6, 17, 5863, 0, 'NULL', 'NULL', 0, '2015-05-19 08:00:00', '2015-05-19 14:58:00', 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(150, 75, 7, 17, 5863, 0, 'NULL', 'NULL', 0, '2015-05-19 08:00:00', '2015-05-19 17:00:00', 9, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(151, 75, 5, 17, 5863, 0, 'NULL', 'NULL', 0, '2015-05-19 08:00:00', '2015-05-19 17:00:00', 9, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(152, 75, 3, 17, 5863, 0, 'NULL', 'NULL', 0, '2015-05-19 08:00:00', '2015-05-20 14:30:00', 14.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(153, 75, 9, 17, 5863, 0, 'NULL', 'NULL', 0, '2015-05-19 08:00:00', '2015-05-21 16:00:00', 24, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(154, 75, 8, 17, 5863, 0, 'NULL', 'NULL', 0, '2015-05-21 10:10:00', '2015-05-21 13:00:00', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(155, 76, 6, 40, 13680, 0, 'NULL', 'NULL', 0, '2015-05-19 15:00:00', '2015-05-20 15:25:00', 8.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(156, 76, 10, 40, 13680, 0, 'NULL', 'NULL', 0, '2015-05-19 08:00:00', '2015-05-21 09:30:00', 17.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(157, 76, 3, 40, 13680, 0, 'NULL', 'NULL', 0, '2015-05-20 14:40:00', '2015-05-21 10:34:00', 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(158, 77, 8, 30, 10260, 0, 'NULL', 'NULL', 0, '2015-05-19 12:00:00', '2015-05-20 11:27:00', 7.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(159, 77, 4, 30, 10260, 0, 'NULL', 'NULL', 0, '2015-05-19 15:35:00', '2015-05-20 16:00:00', 8.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(160, 77, 5, 30, 10260, 0, 'NULL', 'NULL', 0, '2015-05-20 08:00:00', '2015-05-20 17:00:00', 9, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(161, 77, 7, 30, 10260, 0, 'NULL', 'NULL', 0, '2015-05-20 08:00:00', '2015-05-21 13:00:00', 13, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(162, 78, 4, 15, 5130, 0, 'NULL', 'NULL', 0, '2015-05-22 08:00:00', '2015-05-22 13:17:00', 5.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(163, 78, 9, 15, 5130, 0, 'NULL', 'NULL', 0, '2015-05-22 08:00:00', '2015-05-22 14:00:00', 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(164, 78, 7, 15, 5130, 0, 'NULL', 'NULL', 0, '2015-05-22 08:00:00', '2015-05-22 11:45:00', 3.75, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(165, 78, 8, 15, 5130, 0, 'NULL', 'NULL', 0, '2015-05-22 08:00:00', '2015-05-22 12:04:00', 4.25, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(166, 78, 10, 15, 5130, 0, 'NULL', 'NULL', 0, '2015-05-22 08:00:00', '2015-05-22 12:25:00', 4.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(167, 78, 5, 15, 5130, 0, 'NULL', 'NULL', 0, '2015-05-22 08:00:00', '2015-05-22 13:38:00', 5.75, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(168, 78, 3, 15, 5130, 0, 'NULL', 'NULL', 0, '2015-05-22 08:00:00', '2015-05-22 14:52:00', 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(169, 78, 6, 15, 5130, 0, 'NULL', 'NULL', 0, '2015-05-22 08:00:00', '2015-05-22 15:15:00', 7.25, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(170, 79, 7, 15, 5130, 0, 'NULL', 'NULL', 0, '2015-05-22 13:50:00', '2015-05-22 17:00:00', 3.25, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(171, 79, 10, 15, 5130, 0, 'NULL', 'NULL', 0, '2015-05-22 12:30:00', '2015-05-22 17:00:00', 4.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(172, 79, 6, 15, 5130, 0, 'NULL', 'NULL', 0, '2015-05-22 15:20:00', '2015-05-22 17:00:00', 1.75, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(173, 79, 4, 15, 5130, 0, 'NULL', 'NULL', 0, '2015-05-22 13:20:00', '2015-05-22 17:00:00', 3.75, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(174, 79, 3, 15, 5130, 0, 'NULL', 'NULL', 0, '2015-05-22 14:55:00', '2015-05-22 17:00:00', 2.25, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(175, 79, 5, 15, 5130, 0, 'NULL', 'NULL', 0, '2015-05-22 13:40:00', '2015-05-22 17:00:00', 3.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(176, 79, 9, 15, 5130, 0, 'NULL', 'NULL', 0, '2015-05-22 14:00:00', '2015-05-22 17:00:00', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(177, 79, 8, 15, 5130, 0, 'NULL', 'NULL', 0, '2015-05-22 14:25:00', '2015-05-22 17:00:00', 2.75, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(178, 80, 4, 20, 3166, 0, 'NULL', 'NULL', 0, '2015-05-25 10:00:00', '2015-05-25 12:12:00', 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(179, 80, 6, 20, 3166, 0, 'NULL', 'NULL', 0, '2015-05-25 10:00:00', '2015-05-25 14:20:00', 8, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(180, 80, 5, 20, 3166, 0, 'NULL', 'NULL', 0, '2015-05-25 10:00:00', '2015-05-25 13:42:00', 7.25, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(181, 80, 7, 20, 3166, 0, 'NULL', 'NULL', 0, '2015-05-25 10:00:00', '2015-05-25 13:04:00', 7.25, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(182, 80, 10, 20, 1588, 0, 'NULL', 'NULL', 0, '2015-05-25 10:00:00', '2015-05-25 14:35:00', 4.75, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(183, 80, 8, 20, 3166, 0, 'NULL', 'NULL', 0, '2015-05-25 10:00:00', '2015-05-25 12:20:00', 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(184, 80, 9, 20, 3166, 0, 'NULL', 'NULL', 0, '2015-05-25 10:00:00', '2015-05-25 13:12:00', 6.75, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(185, 80, 3, 20, 3166, 0, 'NULL', 'NULL', 0, '2015-05-25 10:00:00', '2015-05-25 12:51:00', 7.25, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(186, 81, 4, 19, 6413, 0, 'NULL', 'NULL', 0, '2015-05-26 12:00:00', '2015-05-26 17:00:00', 5.25, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(187, 81, 7, 19, 6413, 0, 'NULL', 'NULL', 0, '2015-05-26 12:00:00', '2015-05-26 17:00:00', 5.25, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(188, 81, 8, 19, 6413, 0, 'NULL', 'NULL', 0, '2015-05-26 12:00:00', '2015-05-26 17:00:00', 5.25, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(189, 81, 9, 19, 6413, 0, 'NULL', 'NULL', 0, '2015-05-26 12:00:00', '2015-05-26 17:00:00', 5.25, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(190, 81, 5, 19, 6413, 0, 'NULL', 'NULL', 0, '2015-05-26 12:00:00', '2015-05-26 17:00:00', 5.25, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(191, 81, 6, 19, 6413, 0, 'NULL', 'NULL', 0, '2015-05-26 12:00:00', '2015-05-26 16:15:00', 4.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(192, 81, 10, 19, 6413, 0, 'NULL', 'NULL', 0, '2015-05-26 12:00:00', '2015-05-27 10:50:00', 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(193, 81, 3, 19, 6413, 0, 'NULL', 'NULL', 0, '2015-05-26 12:00:00', '2015-05-27 09:50:00', 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(194, 82, 8, 10, 3420, 0, 'NULL', 'NULL', 0, '2015-05-27 08:00:00', '2015-05-27 11:40:00', 3.75, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(195, 82, 6, 10, 3420, 0, 'NULL', 'NULL', 0, '2015-05-27 08:00:00', '2015-05-27 16:21:00', 8.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(196, 82, 5, 10, 3420, 0, 'NULL', 'NULL', 0, '2015-05-27 08:00:00', '2015-05-27 16:45:00', 8.75, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(197, 82, 4, 10, 3420, 0, 'NULL', 'NULL', 0, '2015-05-27 08:00:00', '2015-05-27 16:53:00', 9, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(198, 82, 7, 10, 3420, 0, 'NULL', 'NULL', 0, '2015-05-27 08:00:00', '2015-05-27 16:17:00', 8.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(199, 82, 3, 10, 3420, 0, 'NULL', 'NULL', 0, '2015-05-27 08:00:00', '2015-05-27 16:18:00', 8.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(200, 83, 5, 21, 7329, 0, 'NULL', 'NULL', 0, '2015-05-28 08:00:00', '2015-05-28 16:54:00', 9, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(201, 83, 8, 21, 7329, 0, 'NULL', 'NULL', 0, '2015-05-28 08:00:00', '2015-05-28 15:45:00', 7.75, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(202, 83, 4, 21, 7329, 0, 'NULL', 'NULL', 0, '2015-05-28 08:00:00', '2015-05-28 17:00:00', 9, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(203, 83, 6, 21, 7329, 0, 'NULL', 'NULL', 0, '2015-05-28 08:00:00', '2015-05-28 16:10:00', 8.25, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(204, 83, 10, 21, 7329, 0, 'NULL', 'NULL', 0, '2015-05-28 08:00:00', '2015-05-29 17:00:00', 17, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(205, 83, 9, 21, 7329, 0, 'NULL', 'NULL', 0, '2015-05-28 08:00:00', '2015-05-29 15:00:00', 15, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(206, 83, 7, 21, 7329, 0, 'NULL', 'NULL', 0, '2015-05-28 08:00:00', '2015-05-29 11:20:00', 11.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(207, 84, 8, 20, 6840, 0, 'NULL', 'NULL', 0, '2015-05-29 08:00:00', '2015-05-29 13:15:00', 5.25, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(208, 84, 4, 20, 6840, 0, 'NULL', 'NULL', 0, '2015-05-29 08:00:00', '2015-05-29 13:13:00', 5.25, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(209, 84, 5, 20, 6840, 0, 'NULL', 'NULL', 0, '2015-05-29 08:00:00', '2015-05-29 14:16:00', 6.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(210, 85, 4, 50, 7917, 0, 'NULL', 'NULL', 0, '2015-05-30 08:00:00', '2015-06-01 11:30:00', 4.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(211, 85, 8, 40, 6333, 0, 'NULL', 'NULL', 0, '2015-05-30 08:00:00', '2015-05-30 17:00:00', 9, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(212, 85, 10, 35, 5542, 0, 'NULL', 'NULL', 0, '2015-05-30 08:00:00', '2015-06-02 09:30:00', 10.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(213, 85, 6, 40, 6333, 0, 'NULL', 'NULL', 0, '2015-05-30 08:00:00', '2015-06-01 10:45:00', 3.75, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(214, 85, 9, 35, 5542, 0, 'NULL', 'NULL', 0, '2015-05-30 08:00:00', '2015-06-02 10:00:00', 11, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(215, 85, 5, 40, 6333, 0, 'NULL', 'NULL', 0, '2015-05-30 08:00:00', '2015-06-01 17:00:00', 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(216, 86, 4, 25, 8550, 0, 'NULL', '01-25-20-29', 0, '2015-06-04 08:00:00', '2015-06-04 15:15:00', 7.25, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(217, 86, 6, 15, 5130, 0, 'NULL', 'NULL', 0, '2015-06-04 08:00:00', '2015-06-04 13:00:00', 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(218, 86, 3, 15, 5130, 0, 'NULL', 'NULL', 0, '2015-06-04 08:00:00', '2015-06-04 11:15:00', 3.25, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(219, 86, 9, 15, 5130, 0, 'NULL', 'NULL', 0, '2015-06-04 08:00:00', '2015-06-04 16:45:00', 8.75, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(220, 86, 7, 15, 5130, 0, 'NULL', 'NULL', 0, '2015-06-04 08:00:00', '2015-06-04 13:30:00', 5.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(221, 86, 5, 15, 5130, 0, 'NULL', 'NULL', 0, '2015-06-04 08:00:00', '2015-06-04 15:15:00', 7.25, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(222, 86, 8, 15, 5130, 0, 'NULL', 'NULL', 0, '2015-06-04 08:00:00', '2015-06-04 13:30:00', 5.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(223, 87, 3, 25, 8550, 0, 'NULL', '01-25-17-22', 0, '2015-06-04 12:00:00', '2015-06-05 10:15:00', 7.25, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(224, 87, 7, 15, 5130, 0, '01-25-17-22', '01-40-33-14', 0, '2015-06-04 13:30:00', '2015-06-05 13:45:00', 8.25, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(225, 87, 6, 15, 5130, 0, '01-40-33-14', '01-55-42-22', 0, '2015-06-04 11:30:00', '2015-06-04 17:00:00', 5.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(226, 87, 8, 16, 5472, 0, '01-55-42-22', '02-11-55-00', 0, '2015-06-04 13:30:00', '2015-06-04 17:00:00', 3.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(227, 87, 5, 18, 6156, 0, '02-11-55-00', '02-30-00-00', 0, '2015-06-04 15:30:00', '2015-06-05 10:30:00', 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(228, 87, 4, 15, 5130, 0, '02-30-00-00', '02-45-10-07', 0, '2015-06-04 16:00:00', '2015-06-05 09:15:00', 2.25, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(229, 87, 9, 15, 5130, 0, '02-45-10-07', '02-59-39-10', 0, '2015-06-04 16:30:00', '2015-06-05 14:30:00', 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(230, 88, 6, 25, 8550, 0, 'NULL', '01-27-43-08', 0, '2015-06-05 08:00:00', '2015-06-05 15:30:00', 7.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(231, 88, 7, 10, 3420, 0, '01-27-43-08', '01-34-14-14', 0, '2015-06-05 13:45:00', '2015-06-05 16:00:00', 2.25, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(232, 88, 8, 25, 8550, 0, '01-34-14-14', '01-59-30-00', 0, '2015-06-05 08:00:00', '2015-06-05 17:00:00', 9, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(233, 88, 9, 10, 3420, 0, '01-59-30-00', '02-09-00-00', 0, '2015-06-05 14:30:00', '2015-06-06 12:00:00', 6.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(234, 88, 4, 15, 5130, 0, '02-09-00-00', '02-25-03-28', 0, '2015-06-05 09:30:00', '2015-06-05 17:00:00', 7.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(235, 88, 3, 15, 5130, 0, '02-25-03-28', '02-41-27-17', 0, '2015-06-05 10:30:00', '2015-06-06 14:45:00', 12.25, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(236, 88, 5, 20, 6840, 0, '02-41-27-17', 'last', 0, '2015-06-05 10:45:00', '2015-06-06 12:45:00', 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(237, 89, 10, 20, 6840, 0, 'NULL', 'NULL', 0, '2015-06-06 08:00:00', '2015-06-06 16:00:00', 8, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(238, 89, 8, 20, 8550, 0, 'NULL', 'NULL', 0, '2015-06-06 08:30:00', '2015-06-06 16:00:00', 7.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(239, 89, 7, 20, 6840, 0, 'NULL', 'NULL', 1, '2015-06-06 08:30:00', '2015-06-06 17:00:00', 9.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(240, 89, 6, 10, 3420, 0, 'NULL', 'NULL', 0, '2015-06-06 15:00:00', '2015-06-06 17:00:00', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(241, 89, 4, 20, 6840, 0, 'NULL', 'NULL', 0.5, '2015-06-06 08:30:00', '2015-06-06 17:00:00', 9, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(242, 89, 5, 15, 3420, 0, 'NULL', 'NULL', 1, '2015-06-06 12:45:00', '2015-06-06 17:00:00', 5.25, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(243, 89, 9, 10, 3420, 0, 'NULL', 'NULL', 3.5, '2015-06-06 12:00:00', '2015-06-06 17:00:00', 8.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(244, 89, 3, 5, 1710, 0, 'NULL', 'NULL', 1, '2015-06-06 15:00:00', '2015-06-06 17:00:00', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(245, 92, 9, 115, 18367, 0, 'NULL', '02-55-00-00', 0, '2015-06-09 16:45:00', '2015-06-11 11:00:00', 3.25, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(246, 92, 10, 45, 6967, 0, '02-55-00-00', '03-39-25-00', 0, '2015-06-10 09:30:00', '2015-06-10 17:00:00', 7.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(247, 92, 8, 50, 7917, 0, '03-39-25-00', 'last', 0, '2015-06-10 12:30:00', '2015-06-11 09:30:00', 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(248, 90, 3, 20, 3167, 0, 'start', '01-50-00-00', 0, '2015-06-09 08:00:00', '2015-06-11 10:45:00', 19.75, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(249, 90, 10, 20, 3167, 0, '01-50-00-00', '02-20-00-00', 0, '2015-06-09 08:00:00', '2015-06-10 09:30:00', 9.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(250, 90, 8, 20, 3167, 0, '02-20-00-00', '02-45-00-00', 0, '2015-06-10 08:00:00', '2015-06-10 11:00:00', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(251, 90, 5, 20, 3167, 0, '02-45-00-00', '03-04-00-00', 0.5, '2015-06-09 08:00:00', '2015-06-09 13:00:00', 5.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(252, 90, 6, 20, 3167, 0, '03-04-00-00', '03-14-00-00', 0, '2015-06-09 08:00:00', '2015-06-10 13:30:00', 13.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(253, 90, 4, 20, 3167, 0, '03-14-00-00', '03-19-00-00', 0, '2015-06-09 08:00:00', '2015-06-09 13:00:00', 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(254, 90, 7, 20, 3167, 0, '03-19-00-00', '03-27-27-00', 0, '2015-06-09 08:00:00', '2015-06-10 10:30:00', 10.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(255, 90, 9, 10, 1583, 0, '03-27-27-00', 'last', 0.5, '2015-06-09 08:00:00', '2015-06-09 16:45:00', 9.25, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(256, 91, 5, 40, 13680, 0, 'NULL', '01-39-54-27', 0, '2015-06-09 14:00:00', '2015-06-10 12:00:00', 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(257, 91, 4, 62, 21204, 0, '01-39-54-27', '02-42-20-00', 0, '2015-06-09 14:00:00', '2015-06-10 16:15:00', 10.25, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(258, 91, 7, 16, 5472, 0, '02-42-20-00', 'Last', 0, '2015-06-10 12:00:00', '2015-06-10 16:30:00', 4.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(259, 93, 5, 80, 12667, 0, 'start', '02-20-07-15', 0, '2015-06-10 13:45:00', '2015-06-12 15:45:00', 11, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(260, 93, 6, 80, 12667, 0, '02-20-07-15', '03-40-00-00', 0, '2015-06-10 14:15:00', '2015-06-12 16:15:00', 11, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(261, 93, 3, 80, 12667, 0, '03-40-00-00', 'Last', 0, '2015-06-11 10:45:00', '2015-06-16 13:30:00', 27.75, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(262, 94, 4, 40, 13680, 0, 'NULL', '02-02-05-00', 0, '2015-06-11 08:00:00', '2015-06-15 11:00:00', 20, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(263, 94, 10, 40, 13680, 0, '02-02-05-00', '02-40-21-22', 2, '2015-06-11 08:00:00', '2015-06-15 17:00:00', 28, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(264, 94, 7, 40, 13680, 0, '02-40-21-22', 'Last', 0, '2015-06-11 08:00:00', '2015-06-15 14:30:00', 23.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(265, 95, 8, 80, 27360, 0, 'NULL', '02-19-43-00', 0, '2015-06-11 09:30:00', '2015-06-15 12:00:00', 19.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(266, 95, 9, 40, 13680, 0, '02-19-43-00', 'Last', 2.5, '2015-06-11 12:00:00', '2015-06-15 17:00:00', 24.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(267, 96, 6, 120, 41040, 0, 'NULL', 'Last', 0, '2015-06-15 08:00:00', '2015-06-16 15:30:00', 15.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(268, 97, 5, 100, 41040, 0, 'NULL', '07-47-42-10', 0, '2015-06-15 08:00:00', '2015-06-17 10:30:00', 11.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(269, 97, 3, 20, 6840, 0, '07-47-42-10', 'Last', 0, '2015-06-16 14:00:00', '2015-06-17 10:45:00', 5.75, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(270, 98, 8, 70, 23940, 0, 'NULL', '02-31-04-16', 0, '2015-06-15 12:30:00', '2015-06-16 15:45:00', 11.25, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(271, 98, 7, 50, 17100, 0, '02-31-04-16', 'Last', 0, '2015-06-15 14:45:00', '2015-06-16 17:00:00', 10.25, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(272, 99, 4, 120, 41040, 0, 'NULL', 'Last', 0, '2015-06-15 12:00:00', '2015-06-17 14:15:00', 11.25, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(273, 100, 10, 40, 13680, 0, 'NULL', '02-24-17-00', 1, '2015-06-16 08:00:00', '2015-06-17 17:00:00', 18, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(274, 100, 3, 30, 10260, 0, '02-24-17-00', '02-40-05-10', 1.5, '2015-06-17 11:00:00', '2015-06-17 17:00:00', 7.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(275, 100, 6, 50, 17100, 0, '02-40-05-10', 'Last', 0, '2015-06-17 08:15:00', '2015-06-17 12:45:00', 4.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(276, 101, 9, 40, 13680, 0, 'NULL', '02-13-20-00', 0, '2015-06-16 08:00:00', '2015-06-17 12:00:00', 12, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(277, 101, 7, 40, 13680, 0, '02-13-20-00', '02-29-12-03', 0, '2015-06-17 08:30:00', '2015-06-17 15:15:00', 6.75, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(278, 101, 8, 40, 13680, 0, '02-29-12-03', 'Last', 2, '2015-06-17 08:00:00', '2015-06-17 17:00:00', 11, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(279, 102, 5, 20, 10260, 0, 'NULL', '01-32-49-25', 2, '2015-06-17 14:30:00', '2015-06-17 17:00:00', 4.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(280, 102, 7, 15, 5130, 0, '01-32-49-25', '01-40-54-28', 2, '2015-06-17 15:30:00', '2015-06-17 17:00:00', 3.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(281, 102, 6, 20, 6840, 0, '01-40-54-28', '02-02-56-22', 2, '2015-06-17 14:45:00', '2015-06-17 17:00:00', 4.25, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(282, 102, 4, 20, 6840, 0, '02-02-56-22', 'Last', 2, '2015-06-17 14:30:00', '2015-06-17 17:00:00', 4.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(283, 103, 5, 40, 7695, 0, 'NULL', '01-45-00-00', 0, '2015-06-22 08:00:00', '2015-06-22 11:15:00', 3.25, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(284, 103, 6, 40, 6840, 0, '01-45-00-00', '02-25-00-00', 0, '2015-06-22 08:00:00', '2015-06-22 11:00:00', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(285, 103, 8, 40, 6840, 0, '02-25-00-00', '03-02-00-00', 0, '2015-06-22 08:00:00', '2015-06-22 13:15:00', 5.25, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(286, 103, 4, 40, 6840, 0, '03-02-00-00', '03-42-00-00', 0, '2015-06-22 08:00:00', '2015-06-22 13:30:00', 5.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(287, 103, 7, 20, 3420, 0, '03-42-00-00', '04-02-44-29', 0, '2015-06-22 08:00:00', '2015-06-22 13:00:00', 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(288, 103, 9, 20, 3420, 0, '04-02-44-29', '04-19-00-00', 0, '2015-06-22 08:00:00', '2015-06-22 11:30:00', 3.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(289, 103, 3, 40, 6840, 0, '04-19-00-00', 'Last', 0, '2015-06-22 08:00:00', '2015-06-22 14:45:00', 6.75, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(290, 104, 6, 68, 23256, 0, 'NULL', '02-08-00-00', 0, '2015-06-22 12:00:00', '2015-06-22 15:45:00', 3.75, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(291, 104, 5, 42, 14364, 0, '02-08-00-00', '02-50-00-00', 0, '2015-06-22 12:00:00', '2015-06-22 16:30:00', 4.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(292, 104, 9, 30, 10260, 0, '02-50-00-00', 'Last', 0, '2015-06-22 12:00:00', '2015-06-23 17:00:00', 13, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(293, 105, 4, 58, 19836, 0, 'NULL', '01-58-55-16', 0, '2015-06-22 13:30:00', '2015-06-23 14:45:00', 9.25, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(294, 105, 7, 32, 10944, 0, '01-58-55-16', '02-29-29-00', 0, '2015-06-22 15:30:00', '2015-06-23 16:00:00', 8.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(295, 105, 3, 30, 10260, 0, '02-29-29-00', '03-00-11-16', 0, '2015-06-22 15:00:00', '2015-06-23 10:15:00', 4.25, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(296, 105, 8, 30, 10260, 0, '03-00-11-16', 'Last', 0, '2015-06-22 13:45:00', '2015-06-23 16:00:00', 10.25, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(297, 106, 6, 20, 6840, 0, 'NULL', '01-19-55-11', 0, '2015-06-26 14:45:00', '2015-06-26 17:00:00', 2.25, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(298, 106, 5, 15, 6156, 0, '01-19-55-11', '01-38-24-11', 0, '2015-06-26 14:45:00', '2015-06-26 17:00:00', 2.25, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(299, 106, 4, 15, 5130, 0, '01-38-24-11', '01-52-37-29', 0, '2015-06-26 14:45:00', '2015-06-29 12:45:00', 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(300, 106, 7, 15, 5130, 0, '01-52-37-29', 'Last', 0, '2015-06-26 14:45:00', '2015-06-29 13:15:00', 7.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(301, 107, 7, 18, 6156, 0, 'NULL', '01-18-20-00', 0, '2015-06-29 15:00:00', '2015-06-30 14:30:00', 8.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(302, 107, 4, 16, 5472, 0, '01-18-20-00', '01-34-42-08', 0, '2015-06-29 15:15:00', '2015-06-30 14:00:00', 7.75, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(303, 107, 9, 15, 5130, 0, '01-34-42-08', '01-49-06-27', 0, '2015-06-29 11:15:00', '2015-06-30 15:00:00', 11.75, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(304, 107, 3, 16, 5472, 0, '01-49-06-27', '02-05-39-02', 0, '2015-06-29 15:30:00', '2015-06-30 13:30:00', 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(305, 107, 8, 15, 5130, 0, '02-05-39-02', '02-20-25-18', 0, '2015-06-29 15:45:00', '2015-06-30 14:15:00', 7.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(306, 107, 6, 11, 3420, 0, '02-20-25-18', '02-30-00-00', 0, '2015-06-29 16:00:00', '2015-06-30 10:15:00', 3.25, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(307, 107, 5, 12, 4104, 0, '02-30-00-00', '02-42-08-06', 0, '2015-06-29 16:00:00', '2015-06-30 16:00:00', 8, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(308, 107, 10, 17, 5814, 0, '02-42-08-06', 'Last', 0, '2015-06-29 16:00:00', '2015-07-01 11:00:00', 14, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(309, 108, 7, 35, 11970, 0, 'NULL', '01-35-32-14', 0, '2015-06-30 16:30:00', '2015-07-02 13:15:00', 14.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(310, 108, 8, 41, 14022, 0, '01-35-32-14', '02-16-19-00', 0, '2015-06-30 16:30:00', '2015-07-06 12:30:00', 21, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(311, 108, 3, 30, 10260, 0, '02-16-19-00', '02-45-35-13', 0, '2015-06-30 16:30:00', '2015-07-02 13:00:00', 13.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(312, 108, 9, 34, 11628, 0, '02-45-35-13', 'Last', 0, '2015-06-30 16:30:00', '2015-07-06 13:00:00', 21.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(313, 109, 5, 54, 18468, 0, 'NULL', '01-54-34-28', 0, '2015-07-01 08:00:00', '2015-07-06 14:15:00', 31.25, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(314, 109, 4, 45, 15390, 0, '01-54-34-28', '02-39-00-00', 0, '2015-07-01 08:00:00', '2015-07-02 17:00:00', 17, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(315, 109, 6, 41, 14022, 0, '02-39-00-00', 'Last', 0, '2015-07-01 08:00:00', '2015-07-06 13:15:00', 30.25, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(316, 110, 10, 70, 23940, 0, 'start', 'last', 0, '2015-07-01 11:00:00', '2015-07-06 13:00:00', 27, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(317, 111, 7, 40, 13680, 0, 'Start', '01-40-00-11', 0, '2015-07-02 14:15:00', '2015-07-06 14:15:00', 17, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(318, 111, 4, 30, 6840, 0, '01-40-00-11', '02-00-00-00', 0, '2015-07-03 08:00:00', '2015-07-06 13:30:00', 14.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(319, 111, 3, 40, 17100, 0, '02-00-00-00', 'Last', 0, '2015-07-02 14:15:00', '2015-07-06 16:30:00', 19.25, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(320, 112, 10, 25, 8550, 0, 'Start', '01-40-07-19', 0, '2015-07-06 13:00:00', '2015-07-07 12:00:00', 8, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(321, 112, 8, 25, 8550, 0, '01-40-07-19', '02-15-00-00', 0, '2015-07-06 14:00:00', '2015-07-07 10:15:00', 5.25, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(322, 112, 4, 25, 8550, 0, '02-15-00-00', '02-44-00-00', 0, '2015-07-06 14:00:00', '2015-07-07 14:00:00', 8, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(323, 112, 6, 25, 8550, 0, '02-44-00-00', '02-54-20-00', 0, '2015-07-06 14:15:00', '2015-07-07 14:30:00', 8.25, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(324, 112, 7, 25, 8550, 0, '02-54-20-00', '03-09-20-00', 0, '2015-07-06 14:30:00', '2015-07-07 17:00:00', 10.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(325, 112, 5, 25, 8550, 0, '03-09-20-00', 'Last', 0, '2015-07-06 14:30:00', '2015-07-07 17:00:00', 10.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(326, 113, 8, 40, 13680, 0, 'Start', '01-40-00-00', 0, '2015-07-07 12:00:00', '2015-07-08 16:15:00', 12.25, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(327, 113, 3, 40, 13680, 0, '01-40-00-00', '02-20-13-27', 0, '2015-07-07 12:00:00', '2015-07-08 11:30:00', 8.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(328, 113, 10, 40, 13680, 0, '02-20-13-27', 'Last', 1, '2015-07-07 12:00:00', '2015-07-10 08:30:00', 23.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(329, 114, 4, 80, 27360, 0, 'Start', '02-21-02-19', 0, '2015-07-08 08:15:00', '2015-07-13 17:00:00', 33.75, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(330, 114, 6, 70, 23940, 0, '02-21-02-19', 'Last', 0, '2015-07-08 08:00:00', '2015-07-15 11:45:00', 44.75, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(331, 115, 7, 90, 30780, 0, 'Start', '02-36-25-00', 1.5, '2015-07-08 08:00:00', '2015-07-13 17:00:00', 35.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(332, 115, 8, 40, 13680, 0, '02-36-25-00', 'Last', 1.5, '2015-07-08 16:30:00', '2015-07-13 17:15:00', 27.25, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(333, 116, 5, 70, 23940, 0, 'Start', '02-13-00-00', 0, '2015-07-08 08:00:00', '2015-07-13 17:00:00', 34, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(334, 116, 3, 50, 17100, 0, '02-13-00-00', 'Last', 0, '2015-07-08 12:00:00', '2015-07-13 16:15:00', 29.25, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(335, 117, 10, 50, 7750, 0, 'Start', '02-52-30-00', 0, '2015-07-17 08:00:00', '2015-07-22 15:45:00', 32.75, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(336, 117, 5, 40, 4650, 0, '02-52-30-00', '03-04-53-00', 0, '2015-07-17 08:00:00', '2015-07-22 17:00:00', 34, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(337, 117, 4, 30, 4650, 0, '03-04-53-00', '03-20-26-00', 0, '2015-07-17 14:00:00', '2015-07-22 15:45:00', 26.75, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(338, 117, 2, 30, 4650, 0, '03-20-26-00', 'Last', 0, '2015-07-22 08:00:00', '2015-07-22 17:00:00', 9, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(339, 118, 2, 95, 32489, 0, 'Start', '02-36-13-00', 0, '2015-07-13 08:30:00', '2015-07-15 15:15:00', 23.75, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(340, 118, 3, 30, 10260, 0, '02-36-13-00', 'Last', 0, '2015-07-14 08:00:00', '2015-07-16 15:00:00', 24, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(341, 119, 8, 80, 27360, 0, 'Start', '02-22-36-00', 0, '2015-07-14 08:00:00', '2015-07-16 16:00:00', 25, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(342, 119, 7, 16, 5472, 0, '02-22-36-00', '02-35-13-09', 0, '2015-07-16 12:45:00', '2015-07-16 17:00:00', 4.25, '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `task_records` (`id`, `order_id`, `employee_id`, `edit_length`, `edit_point`, `clip_no`, `clip_in`, `clip_out`, `overtime`, `started`, `completed`, `worktime`, `created`, `modified`) VALUES
(343, 119, 6, 54, 18468, 0, '02-35-13-09', 'Last', 0, '2015-07-15 12:00:00', '2015-07-16 17:00:00', 13, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(344, 120, 5, 60, 20520, 0, 'Start', '02-00-00-09', 0, '2015-07-14 08:00:00', '2015-07-15 17:00:00', 17, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(345, 120, 7, 50, 17100, 0, '02-00-00-09', '02-50-30-00', 0, '2015-07-14 08:00:00', '2015-07-16 12:30:00', 21.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(346, 120, 4, 40, 13680, 0, '02-50-30-00', 'Last', 0, '2015-07-14 08:00:00', '2015-07-15 12:00:00', 12, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(347, 121, 4, 90, 41040, 0, 'Start', 'Last', 0, '2015-07-15 12:00:00', '2015-07-17 14:30:00', 11.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(348, 121, 5, 16, 5472, 0, 'NULL', 'NULL', 0, '2015-07-16 08:00:00', '2015-07-17 16:30:00', 16.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(349, 121, 8, 14, 4788, 0, 'NULL', 'NULL', 0, '2015-07-16 16:00:00', '2015-07-17 16:30:00', 8.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(350, 122, 2, 70, 23940, 0, 'Start', 'Last', 0, '2015-07-16 08:00:00', '2015-07-17 10:15:00', 10.25, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(351, 123, 6, 120, 19000, 0, 'start', '03-00-10-00', 0, '2015-07-17 09:00:00', '2015-07-20 14:45:00', 14.75, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(352, 123, 2, 120, 19000, 0, '03-00-10-00', 'Last', 0, '2015-07-17 12:00:00', '2015-07-20 14:00:00', 11, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(353, 124, 4, 120, 41040, 0, 'Start', 'Last', 0, '2015-07-20 08:00:00', '2015-07-21 11:30:00', 11.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(354, 125, 5, 120, 41040, 0, 'Start', 'Last', 0, '2015-07-20 08:00:00', '2015-07-21 12:30:00', 12.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(355, 126, 6, 120, 41040, 0, 'Start', 'Last', 0, '2015-07-20 15:00:00', '2015-07-22 17:00:00', 19, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(356, 127, 7, 120, 41040, 0, 'Start', 'Last', 0, '2015-07-20 08:00:00', '2015-07-23 15:30:00', 32.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(357, 128, 8, 120, 41040, 0, 'Start', 'Last', 0, '2015-07-20 08:00:00', '2015-07-22 13:45:00', 22.75, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(358, 129, 3, 120, 41040, 0, 'Start', 'Last', 0, '2015-07-20 08:00:00', '2015-07-22 14:15:00', 23.25, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(359, 130, 4, 60, 9500, 0, 'Stat', '02-04-00-00', 0, '2015-07-22 16:00:00', '2015-07-24 16:30:00', 18.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(360, 130, 10, 50, 7917, 0, '02-04-00-00', '03-00-00-00', 0, '2015-07-22 16:00:00', '2015-07-24 14:00:00', 15, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(361, 130, 6, 40, 6333, 0, '03-00-00-00', '03-35-44-00', 0, '2015-07-23 08:00:00', '2015-07-24 11:00:00', 11, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(362, 130, 7, 30, 4750, 0, '03-35-44-00', 'Last', 0, '2015-07-23 15:45:00', '2015-07-24 15:30:00', 9, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(363, 131, 2, 60, 9500, 0, 'Start', '02-00-00-00', 0, '2015-07-22 08:00:00', '2015-07-23 13:30:00', 13.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(364, 131, 5, 60, 9500, 0, '02-00-00-00', '03-02-00-00', 0, '2015-07-23 08:00:00', '2015-07-23 17:00:00', 9, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(365, 131, 3, 60, 9500, 0, '03-02-00-00', '04-00-00-00', 0, '2015-07-22 14:30:00', '2015-07-24 15:30:00', 19, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(366, 131, 8, 60, 9500, 0, '04-00-00-00', 'Last', 0, '2015-07-22 14:00:00', '2015-07-24 17:00:00', 21, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(367, 132, 2, 50, 17098, 0, 'Stat', '01-50-00-00', 0, '2015-07-23 08:00:00', '2015-07-24 12:00:00', 12, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(368, 132, 5, 30, 10259, 0, '01-50-00-00', 'Last', 0, '2015-07-24 08:00:00', '2015-07-24 16:45:00', 8.75, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(369, 133, 6, 70, 23940, 0, 'Start', '02-17-10-00', 0, '2015-07-24 13:00:00', '2015-07-28 09:30:00', 14.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(370, 133, 7, 40, 13680, 0, '02-17-10-00', '02-58-00-00', 0, '2015-07-24 16:00:00', '2015-07-28 10:00:00', 12, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(371, 133, 10, 40, 13680, 0, '02-58-00-00', 'Last', 0, '2015-07-24 16:00:00', '2015-07-28 08:15:00', 10.25, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(372, 134, 1, 130, 44460, 0, 'NULL', 'NULL', 0, '2015-07-21 08:00:00', '2015-07-24 17:00:00', 26, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(373, 135, 8, 120, 9000, 0, 'Start', 'Last', 0, '2015-07-27 08:00:00', '2015-07-29 09:15:00', 18.25, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(374, 136, 3, 120, 9000, 0, 'Start', 'Last', 0, '2015-07-27 08:00:00', '2015-07-28 13:45:00', 13.75, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(375, 137, 4, 120, 9000, 0, 'Start', 'Last', 0, '2015-07-27 08:00:00', '2015-07-28 09:30:00', 9.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(376, 138, 5, 120, 9000, 0, 'Start', 'Last', 0, '2015-07-27 08:00:00', '2015-07-28 17:00:00', 17, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(377, 139, 10, 60, 4500, 0, 'Start', '02-00-00-00', 0, '2015-07-28 08:00:00', '2015-07-30 09:00:00', 18, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(378, 139, 6, 60, 4500, 0, '02-00-00-00', 'Last', 0, '2015-07-28 09:45:00', '2015-07-29 16:15:00', 14.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(379, 140, 7, 60, 4500, 0, 'Start', '02-00-10-00', 0, '2015-07-28 10:00:00', '2015-07-29 13:00:00', 11, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(380, 140, 4, 60, 4500, 0, '02-00-10-00', 'Last', 0, '2015-07-28 10:00:00', '2015-07-29 14:30:00', 12.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(381, 142, 3, 20, 6840, 0, 'NULL', 'NULL', 0, '2015-07-31 08:15:00', '2015-07-31 10:15:00', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(382, 142, 8, 15, 5130, 0, 'NULL', 'NULL', 0, '2015-07-31 08:15:00', '2015-07-31 09:45:00', 1.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(383, 142, 7, 10, 3420, 0, 'NULL', 'NULL', 0, '2015-07-31 08:15:00', '2015-07-31 11:00:00', 2.75, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(384, 142, 6, 20, 6840, 0, 'NULL', 'NULL', 0, '2015-07-31 08:15:00', '2015-07-31 10:45:00', 2.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(385, 142, 5, 15, 5130, 0, 'NULL', 'NULL', 0, '2015-07-31 08:15:00', '2015-07-31 11:30:00', 3.25, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(386, 142, 4, 20, 6840, 0, 'NULL', 'NULL', 0, '2015-07-31 08:15:00', '2015-07-31 12:15:00', 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(387, 142, 8, 10, 3420, 0, 'NULL', 'NULL', 0, '2015-07-31 09:45:00', '2015-07-31 11:15:00', 1.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(388, 141, 4, 30, 10260, 0, 'NULL', 'NULL', 0, '2015-07-30 13:00:00', '2015-07-30 14:45:00', 1.75, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(389, 141, 6, 10, 3420, 0, 'NULL', 'NULL', 0, '2015-07-30 13:00:00', '2015-07-30 15:30:00', 2.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(390, 141, 5, 10, 3420, 0, 'NULL', 'NULL', 0, '2015-07-30 13:00:00', '2015-07-30 16:00:00', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(391, 141, 7, 5, 1710, 0, 'NULL', 'NULL', 0, '2015-07-30 13:00:00', '2015-07-30 16:00:00', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(392, 141, 8, 10, 3420, 0, 'NULL', 'NULL', 0, '2015-07-30 13:00:00', '2015-07-30 15:00:00', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(393, 141, 3, 5, 1710, 0, 'NULL', 'NULL', 0, '2015-07-30 13:00:00', '2015-07-30 17:00:00', 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(394, 143, 6, 35, 5542, 0, 'start', '01-36-25-04', 0, '2015-08-03 13:30:00', '2015-08-04 16:00:00', 10.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(395, 143, 7, 25, 3958, 0, '01-36-25-04', '02-00-33-02', 0, '2015-08-03 13:30:00', '2015-08-04 13:30:00', 8, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(396, 143, 10, 30, 4750, 0, '02-00-33-02', '02-31-37-27', 0, '2015-08-03 13:45:00', '2015-08-04 17:00:00', 11.25, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(397, 143, 4, 40, 6333, 0, '02-31-37-27', '03-11-43-00', 0, '2015-08-03 13:45:00', '2015-08-04 17:00:00', 11.25, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(398, 143, 8, 35, 5542, 0, '03-11-43-00', '03-44-20-09', 0, '2015-08-03 14:00:00', '2015-08-04 15:30:00', 9.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(399, 143, 3, 35, 5542, 0, '03-44-20-09', 'Last', 0, '2015-08-03 14:00:00', '2015-08-05 10:30:00', 14.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(400, 144, 6, 60, 9500, 0, 'Start', '02-01-00-00', 0, '2015-08-04 16:00:00', '2015-08-06 09:45:00', 11.75, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(401, 144, 8, 60, 9500, 0, '02-01-00-00', '03-00-26-16', 0, '2015-08-05 08:00:00', '2015-08-06 17:00:00', 17, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(402, 144, 10, 60, 9500, 0, '03-00-26-16', '04-00-58-24', 0, '2015-08-05 08:00:00', '2015-08-07 08:30:00', 18.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(403, 144, 3, 60, 9500, 0, '04-00-58-24', 'Last', 0, '2015-08-05 10:00:00', '2015-08-07 13:45:00', 21.75, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(404, 145, 7, 80, 27360, 0, 'Start', '02-20-32-20', 0, '2015-08-04 14:00:00', '2015-08-06 10:30:00', 14.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(405, 145, 4, 40, 13680, 0, '02-20-32-20', 'Last', 0, '2015-08-05 08:00:00', '2015-08-06 13:00:00', 13, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(406, 146, 6, 50, 17107, 0, 'start', '01-50-00-00', 0, '2015-08-06 10:00:00', '2015-08-06 16:30:00', 6.5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(407, 146, 7, 45, 15397, 0, '01-50-00-00', 'Last', 0, '2015-08-06 10:45:00', '2015-08-07 11:00:00', 8.25, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(408, 147, 4, 65, 22230, 0, 'Start', 'Last', 0, '2015-08-06 13:15:00', '2015-08-07 14:30:00', 9.25, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(409, 148, 7, 40, 6333, 0, 'Start', '01-39-35-27', 0, '2015-08-07 12:00:00', '2015-08-07 17:00:00', 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(410, 148, 6, 20, 3167, 0, '01-39-35-27', '01-56-25-11', 0, '2015-08-07 12:00:00', '2015-08-07 17:00:00', 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(411, 148, 3, 15, 2375, 0, '01-56-25-11', '02-12-55-00', 0, '2015-08-07 12:00:00', '2015-08-07 16:45:00', 4.75, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(412, 148, 8, 15, 2375, 0, '02-12-55-00', '02-31-06-00', 0, '2015-08-07 12:00:00', '2015-08-07 17:00:00', 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(413, 148, 10, 15, 2375, 0, '02-31-06-00', '02-46-00-00', 0, '2015-08-07 12:00:00', '2015-08-07 17:00:00', 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(414, 148, 5, 15, 2375, 0, '02-46-00-00', 'Last', 0, '2015-08-07 12:00:00', '2015-08-07 17:00:00', 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(415, 149, 10, 40, 13680, 0, 'Start', '01-41-33-11', 0, '2015-08-10 08:00:00', '2015-08-11 10:00:00', 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(416, 149, 3, 40, 13680, 0, '01-41-33-11', '02-22-19-02', 0, '2015-08-10 08:00:00', '2015-08-11 14:45:00', 14.75, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(417, 149, 4, 40, 13680, 0, '02-22-19-02', 'Last', 0, '2015-08-10 08:00:00', '2015-08-12 09:15:00', 18.25, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(418, 150, 5, 40, 13680, 0, 'Start', '01-42-12-19', 0, '2015-08-10 08:00:00', '2015-08-11 16:45:00', 16.75, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(419, 150, 7, 40, 13680, 0, '01-42-12-19', '02-20-06-15', 0, '2015-08-10 08:00:00', '2015-08-11 17:00:00', 17, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(420, 150, 6, 40, 13680, 0, '02-20-06-15', 'Last', 0, '2015-08-10 08:00:00', '2015-08-11 17:00:00', 17, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(421, 151, 3, 150, 51300, 0, 'Start', 'Last', 0, '2015-08-11 14:45:00', '2015-08-18 09:00:00', 34.25, '0000-00-00 00:00:00', '2015-08-18 15:25:03'),
(422, 152, 10, 120, 41040, 0, 'Start', 'Last', 0, '2015-08-11 10:15:00', '2015-08-13 15:15:00', 22, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(423, 153, 6, 120, 41040, 0, 'Start', 'Last', 0.5, '2015-08-12 08:00:00', '2015-08-18 12:10:00', 36.67, '0000-00-00 00:00:00', '2015-08-18 12:06:40'),
(424, 154, 4, 120, 41040, 0, 'Start', '03:00:05:00', 4.5, '2015-08-12 09:15:00', '2015-08-18 13:15:00', 40.5, '0000-00-00 00:00:00', '2015-08-18 14:02:04'),
(425, 159, 7, 150, 51300, 0, 'Start', 'Last', 0.5, '2015-08-12 08:00:00', '2015-08-18 12:00:00', 36.5, '0000-00-00 00:00:00', '2015-08-18 11:51:07'),
(426, 156, 8, 90, 14250, 0, 'Start', '02-30-28-21', 0, '2015-08-12 08:00:00', '2015-08-14 13:45:00', 21.75, '0000-00-00 00:00:00', '2015-08-16 09:51:38'),
(427, 156, 5, 90, 14250, 0, '02-30-28-21', 'Last', 0, '2015-08-12 08:00:00', '2015-08-14 10:55:00', 18.92, '0000-00-00 00:00:00', '2015-08-14 11:26:43'),
(428, 154, 3, 20, 6840, 2, '03:00:05:00', 'last', NULL, '2015-08-17 08:00:00', '2015-08-17 17:00:00', 9, '2015-08-16 09:44:24', '2015-08-18 11:21:36'),
(429, 157, 10, 60, 20520, 1, 'start', '02-26-44-11', 0.5, '2015-08-13 15:30:00', '2015-08-18 17:00:00', 26, '2015-08-18 11:22:42', '2015-08-19 10:07:34'),
(430, 157, 8, 50, 20520, 2, '02-26-44-11', '02-54-54-17', 1, '2015-08-14 13:50:00', '2015-08-19 09:00:00', 20.17, '2015-08-18 11:23:26', '2015-08-19 10:09:51'),
(431, 201, 7, 40, 0, 1, 'start', '01-56-04-00', 0, '2015-08-18 12:10:00', '2015-08-19 09:40:00', 6.5, '2015-08-18 12:12:32', '2015-08-20 14:12:17'),
(432, 201, 6, 40, 0, 2, '01-56-04-00', '02-38-52-09', NULL, '2015-08-18 12:00:00', '2015-08-18 17:00:00', 5, '2015-08-18 12:12:45', '2015-08-19 10:17:27'),
(433, 157, 3, 10, 3420, 3, '02-54-54-17', 'Last', NULL, '2015-08-18 15:30:00', '2015-08-19 09:10:00', 2.67, '2015-08-19 10:12:43', '2015-08-19 10:13:44'),
(434, 201, 4, 40, 13680, 3, '02-38-52-09', 'Last', NULL, '2015-08-18 13:15:00', '2015-08-19 08:45:00', 4.5, '2015-08-19 10:18:46', '2015-08-19 10:19:18'),
(435, 158, 5, 120, 41040, 1, 'Start', 'Last', 0.5, '2015-08-14 12:00:00', '2015-08-19 12:35:00', 25.08, '2015-08-19 10:20:54', '2015-08-19 12:39:24'),
(436, 200, 6, 25, 8550, 1, 'Start', '01-30-00-00', NULL, '2015-08-19 08:00:00', '2015-08-19 11:00:00', 3, '2015-08-19 10:26:49', '2015-08-19 12:11:08'),
(437, 200, 10, 20, 6840, 2, '01-30-00-00', '01-48-28-14', NULL, '2015-08-19 08:00:00', '2015-08-19 10:55:00', 2.92, '2015-08-19 10:28:53', '2015-08-19 12:12:14'),
(440, 200, 4, 25, 8550, 3, '01-48-28-14', '02-05-54-01', NULL, '2015-08-19 09:15:00', '2015-08-19 12:25:00', 3.17, '2015-08-19 10:31:36', '2015-08-19 12:42:41'),
(441, 200, 7, 20, 8550, 4, '02-05-54-01', '02-18-55-00', NULL, '2015-08-19 10:10:00', '2015-08-19 14:50:00', 4.67, '2015-08-19 10:33:09', '2015-08-19 14:56:11'),
(443, 200, 8, 10, 3420, 5, '02-18-55-00', '02-24-35-08', NULL, '2015-08-19 13:30:00', '2015-08-19 14:30:00', 1, '2015-08-19 13:37:25', '2015-08-19 14:56:56'),
(444, 200, 5, 20, 6840, 6, '02-24-35-08', 'Last', NULL, '2015-08-19 12:35:00', '2015-08-19 14:55:00', 2.33, '2015-08-19 13:38:38', '2015-08-19 14:57:38'),
(445, 202, 8, 30, 10260, 1, 'Start', '01-27-30-00', NULL, '2015-08-20 12:00:00', '2015-08-21 09:15:00', 6.25, '2015-08-20 13:45:36', '2015-08-21 09:29:13'),
(446, 202, 7, 17, 10260, 2, '01-27-30-00', '01-43-03-09', NULL, '2015-08-20 12:01:00', '2015-08-21 08:10:00', 5.15, '2015-08-20 13:46:33', '2015-08-21 08:24:18'),
(449, 202, 6, 13, 5130, 3, '01-43-03-09', '01-53-15-24', NULL, '2015-08-20 16:15:00', '2015-08-21 08:10:00', 0.92, '2015-08-20 16:42:38', '2015-08-21 08:24:45'),
(450, 202, 10, 15, 5130, 4, '01-53-15-24', '02-07-19-10', NULL, '2015-08-20 12:00:00', '2015-08-21 09:25:00', 6.42, '2015-08-20 16:47:07', '2015-08-21 09:29:44'),
(451, 202, 5, 15, 5130, 5, '02-07-19-10', '02-17-07-00', NULL, '2015-08-20 16:15:00', '2015-08-21 09:20:00', 2.08, '2015-08-20 16:48:22', '2015-08-21 09:30:10'),
(452, 202, 3, 20, 6840, 6, '02-17-07-00', '02-32-40-00', NULL, '2015-08-20 12:00:00', '2015-08-21 12:30:00', 9.5, '2015-08-20 16:49:16', '2015-08-21 14:53:06'),
(453, 202, 4, 10, 3420, 7, '02-32-40-00', 'Last', NULL, '2015-08-20 16:15:00', '2015-08-21 09:30:00', 2.25, '2015-08-20 16:50:10', '2015-08-21 09:35:10'),
(455, 203, 8, 30, 5130, 1, 'Start', '01-29-59-07', NULL, '2015-08-24 08:00:00', '2015-08-24 13:55:00', 5.92, '2015-08-24 08:49:04', '2015-08-24 14:13:31'),
(456, 203, 4, 15, 2565, 2, '01-29-59-07', '01-45-10-00', NULL, '2015-08-24 08:00:00', '2015-08-24 10:40:00', 2.67, '2015-08-24 08:49:52', '2015-08-24 10:46:39'),
(457, 203, 6, 15, 2565, 3, '01-45-10-00', '02-00-45-00', NULL, '2015-08-24 08:00:00', '2015-08-24 12:00:00', 4, '2015-08-24 08:50:43', '2015-08-24 12:29:52'),
(458, 203, 5, 15, 2565, 4, '02-00-45-00', '02-15-08-00', NULL, '2015-08-24 08:00:00', '2015-08-24 12:00:00', 4, '2015-08-24 08:52:07', '2015-08-24 12:30:15'),
(459, 203, 7, 15, 2565, 5, '02-15-08-00', '02-30-03-00', NULL, '2015-08-24 08:00:00', '2015-08-24 12:00:00', 4, '2015-08-24 08:53:05', '2015-08-24 12:30:41'),
(460, 203, 10, 15, 2565, 6, '02-30-03-00', '02-45-45-00', NULL, '2015-08-24 08:00:00', '2015-08-24 13:05:00', 5.08, '2015-08-24 08:53:51', '2015-08-24 13:51:59'),
(461, 203, 3, 15, 2565, 7, '02-45-45-00', 'Last', NULL, '2015-08-24 08:00:00', '2015-08-24 13:20:00', 5.33, '2015-08-24 08:54:31', '2015-08-24 13:52:23'),
(462, 204, 3, 20, 6840, 1, 'Start', '01-40-00-00', NULL, '2015-08-26 12:00:00', '2015-08-27 08:20:00', 5.33, '2015-08-26 13:36:28', '2015-08-27 09:04:17'),
(463, 204, 6, 20, 6840, 2, '01-40-00-00', '01-50-05-00', NULL, '2015-08-26 12:00:00', '2015-08-26 16:05:00', 4.08, '2015-08-26 13:37:49', '2015-08-27 09:04:52'),
(464, 204, 7, 20, 6840, 3, '01-50-05-00', '02-35-50-29', NULL, '2015-08-26 12:00:00', '2015-08-26 15:50:00', 3.83, '2015-08-26 13:38:52', '2015-08-27 09:05:35'),
(466, 204, 4, 20, 6840, 4, '02-35-50-29', '02-45-59-11', NULL, '2015-08-26 12:00:00', '2015-08-26 17:00:00', 5, '2015-08-26 13:39:55', '2015-08-27 09:06:29'),
(468, 204, 5, 20, 6840, 5, '02-45-59-11', '02-54-07-02', 0.5, '2015-08-26 12:00:00', '2015-08-26 17:00:00', 5.5, '2015-08-26 13:43:43', '2015-08-27 09:06:58'),
(469, 204, 10, 20, 6840, 6, '02-54-07-02', '03-05-25-01', 0.5, '2015-08-26 12:00:00', '2015-08-26 17:00:00', 5.5, '2015-08-26 13:44:35', '2015-08-27 09:08:45'),
(470, 204, 8, 20, 6840, 7, '03-05-25-01', 'Last', NULL, '2015-08-26 12:00:00', '2015-08-27 08:10:00', 5.17, '2015-08-26 13:45:07', '2015-08-27 09:09:07'),
(471, 205, 4, 10, 5130, 1, 'Start', '01-22-03-03', NULL, '2015-08-27 08:00:00', '2015-08-27 09:55:00', 1.92, '2015-08-27 08:33:43', '2015-08-27 12:19:54'),
(472, 205, 6, 10, 3420, 2, '01-22-03-03', '01-30-32-16', NULL, '2015-08-27 08:00:00', '2015-08-27 09:15:00', 1.25, '2015-08-27 08:34:28', '2015-08-27 12:20:17'),
(473, 205, 7, 10, 3420, 3, '01-30-32-16', '01-41-57-17', NULL, '2015-08-27 08:00:00', '2015-08-27 11:05:00', 3.08, '2015-08-27 08:35:59', '2015-08-27 12:20:38'),
(474, 205, 10, 10, 3420, 4, '01-41-57-17', '01-53-02-16', NULL, '2015-08-27 08:00:00', '2015-08-27 11:15:00', 3.25, '2015-08-27 08:36:52', '2015-08-27 12:21:10'),
(475, 205, 8, 15, 3420, 5, '01-53-02-16', '01-59-04-06', NULL, '2015-08-27 08:00:00', '2015-08-27 10:55:00', 2.92, '2015-08-27 08:37:38', '2015-08-27 12:21:38'),
(476, 205, 3, 10, 3420, 6, '01-59-04-06', '02-06-54-01', NULL, '2015-08-27 08:00:00', '2015-08-27 10:50:00', 2.83, '2015-08-27 08:38:19', '2015-08-27 12:22:23'),
(477, 205, 5, 10, 3420, 7, '02-06-54-01', 'Last', NULL, '2015-08-27 08:00:00', '2015-08-27 11:05:00', 3.08, '2015-08-27 08:39:20', '2015-08-27 12:23:05'),
(478, 206, 7, 19, 3009, 1, 'Start', '01-23-15-11', NULL, '2015-08-28 12:00:00', '2015-08-31 09:55:00', 5.92, '2015-08-28 13:03:27', '2015-08-31 13:07:09'),
(479, 206, 8, 19, 2850, 2, '01-23-15-11', '01-51-24-12', 0.5, '2015-08-28 12:00:00', '2015-08-28 17:00:00', 5.5, '2015-08-28 13:04:54', '2015-08-31 13:12:00'),
(480, 206, 4, 19, 3009, 3, '01-51-24-12', '02-15-57-17', NULL, '2015-08-28 12:00:00', '2015-08-31 08:10:00', 4.17, '2015-08-28 13:07:09', '2015-08-31 13:09:12'),
(481, 206, 3, 19, 1267, 4, '02-15-57-17', '02-28-12-17', NULL, '2015-08-28 12:00:00', '2015-08-31 11:05:00', 7.08, '2015-08-28 13:08:10', '2015-08-31 13:13:32'),
(482, 206, 5, 25, 3009, 5, '02-28-12-17', '02-45-34-20', NULL, '2015-08-28 12:00:00', '2015-08-31 08:25:00', 4.42, '2015-08-28 13:08:59', '2015-08-31 13:14:05'),
(483, 206, 6, 19, 3009, 6, '02-45-34-20', '02-58-10-09', NULL, '2015-08-28 12:00:00', '2015-08-31 12:30:00', 8.5, '2015-08-28 13:09:41', '2015-08-31 13:14:31'),
(484, 206, 10, 10, 2850, 7, '02-58-10-09', 'Last', NULL, '2015-08-28 12:00:00', '2015-08-31 10:18:00', 6.3, '2015-08-28 13:10:52', '2015-08-31 13:15:54'),
(485, 207, 6, 27, 4275, 1, 'Start', '01-35-08-20', NULL, '2015-08-31 15:45:00', '2015-09-01 13:55:00', 7.17, '2015-09-01 09:52:52', '2015-09-01 16:28:32'),
(486, 207, 7, 27, 4275, 2, '01-35-08-20', '02-00-45-24', NULL, '2015-08-31 15:45:00', '2015-09-01 14:20:00', 7.58, '2015-09-01 09:53:51', '2015-09-01 16:29:02'),
(487, 207, 10, 26, 4117, 3, '02-00-45-24', '02-27-37-15', NULL, '2015-09-01 08:00:00', '2015-09-01 14:25:00', 6.42, '2015-09-01 09:55:15', '2015-09-01 16:30:21'),
(488, 207, 8, 27, 4275, 4, '02-27-37-15', '02-50-51-10', NULL, '2015-08-31 15:45:00', '2015-09-01 12:25:00', 5.67, '2015-09-01 09:56:07', '2015-09-01 16:30:57'),
(489, 207, 3, 27, 4275, 5, '02-50-51-10', '03-22-42-28', NULL, '2015-08-31 15:45:00', '2015-09-01 12:45:00', 6, '2015-09-01 09:57:03', '2015-09-01 16:31:18'),
(490, 207, 5, 27, 4275, 6, '03-22-42-28', '03-45-41-18', NULL, '2015-08-31 15:45:00', '2015-09-01 14:00:00', 7.25, '2015-09-01 09:58:13', '2015-09-01 16:31:41'),
(491, 207, 4, 27, 4275, 7, '03-45-41-18', '04-3158-11', NULL, '2015-08-31 15:45:00', '2015-09-01 15:25:00', 8.67, '2015-09-01 09:59:25', '2015-09-01 16:32:08'),
(492, 207, 13, 26, 4117, 8, '04-31-58-11', '04-43-39-01', NULL, '2015-09-01 08:00:00', '2015-09-01 15:05:00', 7.08, '2015-09-01 10:00:24', '2015-09-01 16:32:34'),
(493, 207, 11, 26, 4117, 9, '04-43-39-01', 'Last', NULL, '2015-09-01 08:00:00', '2015-09-01 13:45:00', 5.75, '2015-09-01 10:01:21', '2015-09-01 16:33:01'),
(494, 208, 8, 50, 7918, 1, 'Start', '01-50-40-00', 0.5, '2015-09-01 13:00:00', '2015-09-03 09:00:00', 12.5, '2015-09-01 14:02:17', '2015-09-03 17:36:43'),
(495, 208, 10, 35, 5543, 2, '01-50-40-00', '02-25-15-00', NULL, '2015-09-01 14:30:00', '2015-09-04 08:20:00', 17.83, '2015-09-01 14:03:00', '2015-09-04 10:32:00'),
(496, 208, 4, 10, 1584, 3, '02-25-15-00', '02-40-30-00', NULL, '2015-09-02 14:05:00', '2015-09-03 11:10:00', 6, '2015-09-01 14:03:54', '2015-09-03 15:48:30'),
(500, 216, 7, 40, 13680, 1, 'Start', '01-50-00-00', NULL, '2015-09-01 14:20:00', '2015-09-03 12:30:00', 14.17, '2015-09-01 15:49:22', '2015-09-03 13:57:49'),
(501, 216, 5, 40, 13680, 2, '01-50-00-00', '02-32-39-19', NULL, '2015-09-01 14:25:00', '2015-09-03 12:30:00', 14.08, '2015-09-01 15:50:31', '2015-09-03 13:58:26'),
(502, 216, 13, 40, 13680, 3, '02-32-39-19', 'Last', NULL, '2015-09-01 15:30:00', '2015-09-03 13:00:00', 13.5, '2015-09-01 15:52:38', '2015-09-03 13:58:54'),
(503, 217, 4, 37, 12654, 1, 'Start', '01-42-06-00', NULL, '2015-09-01 15:30:00', '2015-09-02 12:25:00', 5.92, '2015-09-01 15:53:56', '2015-09-02 16:13:05'),
(504, 217, 6, 37, 12654, 2, '01-42-06-00', '02-17-30-00', NULL, '2015-09-01 14:15:00', '2015-09-02 12:20:00', 7.08, '2015-09-01 16:00:50', '2015-09-02 16:13:24'),
(505, 217, 11, 36, 12312, 3, '02-17-30-00', 'Last', NULL, '2015-09-01 14:15:00', '2015-09-02 16:00:00', 10.75, '2015-09-01 16:01:42', '2015-09-02 16:13:44'),
(506, 208, 3, 35, 5543, 4, '02-40-30-00', '03-06-44-19', 1, '2015-09-01 13:00:00', '2015-09-04 10:10:00', 22.17, '2015-09-02 14:28:49', '2015-09-04 10:32:38'),
(507, 208, 6, 10, 1584, 5, '03-06-44-19', 'Last', NULL, '2015-09-02 14:05:00', '2015-09-03 11:20:00', 6.25, '2015-09-02 14:32:29', '2015-09-03 14:21:39'),
(508, 218, 11, 33, 5225, 1, 'Start', '0130-10-00', 1.5, '2015-09-03 12:30:00', '2015-09-04 09:30:00', 7.5, '2015-09-03 14:32:41', '2015-09-04 15:19:04'),
(509, 218, 4, 35, 5542, 2, '01-30-10-00', '02-10-00-00', 0.5, '2015-09-03 12:30:00', '2015-09-04 14:15:00', 11.25, '2015-09-03 14:33:37', '2015-09-04 15:20:03'),
(510, 218, 13, 32, 5067, 3, '02-10-00-00', '02-45-00-00', 1, '2015-09-03 12:30:00', '2015-09-04 14:05:00', 11.58, '2015-09-03 14:34:25', '2015-09-04 15:20:28'),
(511, 218, 5, 35, 5542, 4, '02-45-00-00', '03-20-34-13', 0.5, '2015-09-03 12:30:00', '2015-09-04 09:40:00', 6.67, '2015-09-03 14:35:11', '2015-09-04 15:20:54'),
(512, 218, 7, 35, 5542, 5, '03-20-34-13', '03-55-37-09', 0.5, '2015-09-03 12:30:00', '2015-09-04 09:55:00', 6.92, '2015-09-03 14:36:42', '2015-09-04 15:21:55'),
(513, 218, 8, 35, 5542, 6, '03-55-37-09', '04-30-00-00', 1, '2015-09-03 12:30:00', '2015-09-04 09:50:00', 7.33, '2015-09-03 14:38:01', '2015-09-04 15:22:16'),
(514, 218, 6, 35, 5542, 7, '04-30-00-00', 'Last', 0.5, '2015-09-03 12:30:00', '2015-09-04 09:35:00', 6.58, '2015-09-03 14:38:48', '2015-09-04 15:22:40'),
(515, 219, 10, 70, 23940, 1, 'Start', '02-12-44-00', NULL, '2015-09-04 08:20:00', '2015-09-09 09:00:00', 24.67, '2015-09-04 10:34:28', '2015-09-09 09:47:24'),
(516, 219, 3, 70, 23940, 2, '02-12-44-00', 'Last', NULL, '2015-09-04 10:10:00', '2015-09-09 08:40:00', 22.5, '2015-09-04 10:35:35', '2015-09-09 09:48:12'),
(517, 220, 7, 50, 17100, 1, 'Start', '01-52-50-00', NULL, '2015-09-04 10:00:00', '2015-09-07 11:05:00', 9.08, '2015-09-04 10:36:51', '2015-09-07 17:16:49'),
(518, 220, 5, 50, 17100, 2, '01-52-50-00', '02-49-49-05', NULL, '2015-09-04 09:40:00', '2015-09-07 16:55:00', 15.25, '2015-09-04 10:37:29', '2015-09-07 17:17:22'),
(519, 220, 6, 50, 17100, 3, '02-49-49-05', 'Last', NULL, '2015-09-04 09:40:00', '2015-09-07 12:45:00', 11.08, '2015-09-04 10:38:00', '2015-09-07 17:17:49'),
(520, 223, 8, 45, 15390, 1, 'Start', '01-45-00-00', 0.5, '2015-09-04 11:50:00', '2015-09-04 17:00:00', 5.67, '2015-09-04 11:47:19', '2015-09-07 15:04:16'),
(521, 221, 11, 70, 23940, 1, 'Start', 'Last', NULL, '2015-09-04 09:45:00', '2015-09-07 14:25:00', 12.67, '2015-09-04 11:49:09', '2015-09-07 15:08:57'),
(522, 223, 4, 45, 15390, 2, '01-45-00-00', 'Last', NULL, '2015-09-04 14:15:00', '2015-09-07 12:55:00', 6.67, '2015-09-04 14:19:07', '2015-09-07 15:05:27'),
(523, 222, 13, 40, 13680, 1, 'start', '01-40-00-00', NULL, '2015-09-04 14:20:00', '2015-09-07 16:45:00', 10.42, '2015-09-07 13:41:37', '2015-09-07 17:21:34'),
(524, 222, 8, 40, 13680, 2, '01-40-00-00', '02-24-10-00', NULL, '2015-09-07 08:00:00', '2015-09-07 14:55:00', 6.92, '2015-09-07 13:42:40', '2015-09-07 17:22:13'),
(525, 222, 7, 40, 13680, 3, '02-24-10-00', 'Last', NULL, '2015-09-07 12:00:00', '2015-09-08 15:25:00', 12.42, '2015-09-07 13:43:17', '2015-09-08 15:43:49'),
(526, 224, 6, 60, 20520, 1, 'Start', '02-13-13-00', NULL, '2015-09-07 12:05:00', '2015-09-09 08:35:00', 12.5, '2015-09-07 15:07:15', '2015-09-09 13:41:15'),
(528, 225, 11, 60, 20520, 1, 'Start', '02-00-00-00', NULL, '2015-09-07 14:50:00', '2015-09-08 12:05:00', 6.25, '2015-09-07 15:11:09', '2015-09-08 17:22:27'),
(529, 225, 4, 60, 20520, 2, '02-00-00-00', 'Last', NULL, '2015-09-07 13:10:00', '2015-09-08 16:45:00', 12.58, '2015-09-07 15:11:56', '2015-09-08 17:23:55'),
(530, 226, 8, 150, 51300, 1, 'Start', '02-00-30-00', NULL, '2015-09-07 15:00:00', '2015-09-09 14:15:00', 15.25, '2015-09-08 08:34:59', '2015-09-09 16:40:55'),
(531, 226, 13, 60, 20520, 2, '02-00-30-00', '03-00-00-00', NULL, '2015-09-08 08:00:00', '2015-09-08 14:15:00', 6.25, '2015-09-08 08:37:28', '2015-09-09 16:42:15'),
(532, 227, 11, 55, 18810, 1, 'Start', '01-55-00-00', NULL, '2015-09-08 13:30:00', '2015-09-09 16:40:00', 12.17, '2015-09-08 15:14:41', '2015-09-10 14:44:29'),
(533, 227, 13, 55, 18810, 2, '01-55-00-00', 'Last', NULL, '2015-09-08 14:30:00', '2015-09-10 14:10:00', 15.67, '2015-09-08 15:15:10', '2015-09-10 14:45:01'),
(534, 226, 3, 30, 10260, 3, '04-31-02-00', 'Last', NULL, '2015-09-09 08:50:00', '2015-09-09 16:10:00', 7.33, '2015-09-09 09:35:42', '2015-09-09 16:43:02'),
(538, 224, 5, 60, 20520, 2, '02-13-13-00', 'Last', NULL, '2015-09-08 08:00:00', '2015-09-09 13:15:00', 14.25, '2015-09-09 10:03:06', '2015-09-09 13:42:00'),
(539, 229, 8, 60, 20520, 1, 'Start', '02-32-15-15', NULL, '2015-09-10 08:00:00', '2015-09-11 13:40:00', 14.67, '2015-09-10 09:38:20', '2015-09-11 16:22:36'),
(541, 230, 11, 48, 16416, 1, 'Start', '01-55-00-00', NULL, '2015-09-10 08:00:00', '2015-09-11 08:10:00', 9.17, '2015-09-10 09:46:43', '2015-09-11 16:24:21'),
(542, 230, 3, 48, 16416, 2, '01-55-00-00', '02-50-15-00', NULL, '2015-09-10 08:00:00', '2015-09-11 12:50:00', 13.83, '2015-09-10 09:47:36', '2015-09-11 16:24:42'),
(543, 230, 5, 49, 16758, 3, '02-50-15-00', 'Last', NULL, '2015-09-10 08:00:00', '2015-09-11 16:00:00', 17, '2015-09-10 09:48:08', '2015-09-11 16:25:01'),
(544, 228, 7, 50, 17100, 1, 'Start', '02-03-07-00', NULL, '2015-09-08 15:30:00', '2015-09-10 13:45:00', 14.25, '2015-09-10 14:37:31', '2015-09-10 14:40:03'),
(545, 228, 4, 50, 17100, 2, '02-03-07-00', '02-39-00-00', NULL, '2015-09-09 09:00:00', '2015-09-10 14:05:00', 14.08, '2015-09-10 14:38:26', '2015-09-10 14:40:26'),
(546, 228, 6, 40, 13680, 3, '02-39-00-00', 'Last', NULL, '2015-09-09 09:00:00', '2015-09-10 13:40:00', 13.67, '2015-09-10 14:39:02', '2015-09-10 14:41:08'),
(547, 229, 10, 40, 13680, 2, '02-32-15-15', '02-52-38-27', NULL, '2015-09-10 08:00:00', '2015-09-11 16:05:00', 17.08, '2015-09-11 10:30:45', '2015-09-11 16:23:02'),
(548, 229, 4, 20, 6840, 3, '02-52-38-27', 'Last', NULL, '2015-09-11 10:15:00', '2015-09-11 15:00:00', 4.75, '2015-09-11 10:31:50', '2015-09-11 16:23:44'),
(549, 231, 11, 13, 2059, 1, 'Start', '01-15-00-00', NULL, '2015-09-11 12:30:00', '2015-09-11 17:00:00', 4.5, '2015-09-15 08:59:40', '2015-09-15 09:43:56'),
(550, 231, 13, 13, 2059, 2, '01-15-00-00', '01-28-00-00', NULL, '2015-09-11 12:30:00', '2015-09-14 09:40:00', 5.17, '2015-09-15 09:00:36', '2015-09-15 09:44:22'),
(551, 231, 7, 14, 2217, 3, '01-28-00-00', 'Last', NULL, '2015-09-11 12:30:00', '2015-09-14 10:15:00', 5.75, '2015-09-15 09:01:34', '2015-09-15 09:45:01'),
(552, 232, 3, 20, 1500, 1, 'Start', '01-24-24-00', NULL, '2015-09-11 13:00:00', '2015-09-11 17:00:00', 4, '2015-09-15 09:03:38', '2015-09-15 09:46:30'),
(553, 232, 8, 20, 1500, 2, '01-24-24-00', 'Last', 1, '2015-09-11 13:40:00', '2015-09-14 09:00:00', 4.33, '2015-09-15 09:04:55', '2015-09-15 09:47:02'),
(554, 233, 7, 15, 5130, 1, 'Start', '01-56-34-20', NULL, '2015-09-14 13:00:00', '2015-09-14 14:20:00', 1.33, '2015-09-15 09:07:08', '2015-09-15 09:48:13'),
(555, 233, 8, 15, 5130, 2, '01-56-34-20', '02-06-00-00', NULL, '2015-09-14 13:00:00', '2015-09-14 14:10:00', 1.17, '2015-09-15 09:08:05', '2015-09-15 09:48:35'),
(556, 233, 5, 15, 5130, 3, '02-06-00-00', '02-25-35-00', NULL, '2015-09-14 13:00:00', '2015-09-14 14:10:00', 1.17, '2015-09-15 09:08:44', '2015-09-15 09:48:59'),
(557, 233, 6, 15, 5130, 4, '02-25-35-00', '02-41-18-10', NULL, '2015-09-14 13:00:00', '2015-09-14 14:20:00', 1.33, '2015-09-15 09:09:32', '2015-09-15 09:49:24'),
(558, 233, 5, 15, 5130, 5, '02-41-18-10', '02-45-47-26', NULL, '2015-09-14 13:00:00', '2015-09-14 14:45:00', 1.75, '2015-09-15 09:10:28', '2015-09-15 09:49:56'),
(559, 233, 3, 15, 5130, 6, '02-45-47-26', '02-49-20-09', NULL, '2015-09-14 13:00:00', '2015-09-14 14:45:00', 1.75, '2015-09-15 09:11:27', '2015-09-15 09:50:13'),
(560, 233, 10, 15, 5130, 7, '02-49-20-09', '02-53-11-04', NULL, '2015-09-14 13:00:00', '2015-09-14 15:30:00', 2.5, '2015-09-15 09:12:03', '2015-09-15 09:50:38'),
(561, 233, 13, 15, 5130, 8, '02-53-11-04', 'Last', NULL, '2015-09-14 13:00:00', '2015-09-14 15:45:00', 2.75, '2015-09-15 09:12:48', '2015-09-15 09:51:02'),
(562, 234, 14, 23, 7865, 1, 'Start', '01-33-04-14', NULL, '2015-09-14 15:15:00', '2015-09-15 13:15:00', 7, '2015-09-15 09:26:56', '2015-09-15 14:48:51'),
(563, 234, 10, 23, 7865, 2, '01-33-04-14', '01-53-20-02', NULL, '2015-09-14 16:40:00', '2015-09-15 13:35:00', 5.92, '2015-09-15 09:27:59', '2015-09-15 14:49:17'),
(564, 234, 3, 23, 7865, 3, '01-53-20-02', '02-13-49-15', NULL, '2015-09-14 15:45:00', '2015-09-15 12:55:00', 6.17, '2015-09-15 09:29:14', '2015-09-15 14:50:53'),
(565, 234, 13, 23, 7865, 4, '02-13-49-15', '02-34-17-15', NULL, '2015-09-14 15:15:00', '2015-09-15 12:25:00', 6.17, '2015-09-15 09:30:05', '2015-09-15 14:51:21'),
(566, 234, 8, 23, 7865, 5, '02-34-17-15', 'Last', NULL, '2015-09-14 15:30:00', '2015-09-15 10:50:00', 4.33, '2015-09-15 09:30:57', '2015-09-15 14:52:42'),
(567, 235, 6, 29, 9916, 1, 'Start', '01-50-19-00', NULL, '2015-09-14 15:15:00', '2015-09-15 11:05:00', 4.83, '2015-09-15 09:33:19', '2015-09-15 14:53:41'),
(568, 235, 7, 29, 9916, 2, '01-50-19-00', '02-04-59-10', NULL, '2015-09-14 15:15:00', '2015-09-15 13:10:00', 6.92, '2015-09-15 09:34:13', '2015-09-15 14:54:04'),
(569, 235, 5, 29, 9916, 3, '02-04-59-10', '02-23-26-00', NULL, '2015-09-14 15:15:00', '2015-09-15 12:30:00', 6.25, '2015-09-15 09:34:54', '2015-09-15 14:54:30'),
(570, 235, 4, 28, 9574, 4, '02-23-26-00', 'Last', NULL, '2015-09-14 15:15:00', '2015-09-15 13:20:00', 7.08, '2015-09-15 09:35:31', '2015-09-15 14:54:53'),
(571, 236, 8, 14, 4788, 1, 'Start', '01-20-00-00', NULL, '2015-09-15 12:00:00', '2015-09-15 13:20:00', 1.33, '2015-09-15 14:29:26', '2015-09-15 15:31:27'),
(572, 236, 6, 14, 4788, 2, '01-20-00-00', '01-37-00-00', NULL, '2015-09-15 12:00:00', '2015-09-15 13:10:00', 1.17, '2015-09-15 14:30:11', '2015-09-15 15:31:50'),
(573, 236, 5, 14, 4788, 3, '01-37-00-00', '01-50-40-12', NULL, '2015-09-15 12:30:00', '2015-09-15 14:15:00', 1.75, '2015-09-15 14:31:36', '2015-09-15 15:32:10'),
(574, 236, 13, 12, 4104, 4, '01-50-40-12', '01-59-25-19', NULL, '2015-09-15 12:30:00', '2015-09-15 14:15:00', 1.75, '2015-09-15 14:32:31', '2015-09-15 15:32:31'),
(575, 236, 3, 12, 4104, 5, '01-59-25-19', '02-11-20-14', NULL, '2015-09-15 13:05:00', '2015-09-15 15:00:00', 1.92, '2015-09-15 14:33:46', '2015-09-15 15:32:53'),
(576, 236, 4, 12, 4104, 6, '02-11-20-14', '02-22-06-14', NULL, '2015-09-15 13:35:00', '2015-09-15 15:15:00', 1.67, '2015-09-15 14:34:53', '2015-09-15 15:33:12'),
(577, 236, 7, 12, 4104, 7, '02-22-06-14', 'Last', NULL, '2015-09-15 13:35:00', '2015-09-15 15:15:00', 1.67, '2015-09-15 14:36:12', '2015-09-15 15:33:35'),
(578, 231, 14, 12, 1900, 4, 'Start', '01-14-50-00', NULL, '2015-09-16 14:15:00', '2015-09-17 12:05:00', 6.83, '2015-09-16 16:18:49', '2015-09-18 08:48:31'),
(579, 231, 13, 13, 2059, 5, '01-14-50-00', '01-26-04-22', NULL, '2015-09-16 14:15:00', '2015-09-17 12:00:00', 6.75, '2015-09-16 16:19:59', '2015-09-18 08:49:24'),
(580, 231, 6, 15, 2375, 6, '01-26-04-22', 'Last', NULL, '2015-09-16 14:15:00', '2015-09-17 09:35:00', 4.33, '2015-09-16 16:20:33', '2015-09-18 08:49:47'),
(581, 231, 4, 13, 2059, 7, 'Start', '01-17-22-21', NULL, '2015-09-16 14:40:00', '2015-09-16 17:00:00', 2.33, '2015-09-16 16:21:36', '2015-09-18 08:50:17'),
(582, 231, 5, 14, 2217, 8, '01-17-22-21', '01-29-55-00', NULL, '2015-09-16 14:40:00', '2015-09-17 09:45:00', 4.08, '2015-09-16 16:22:14', '2015-09-18 08:50:41'),
(583, 231, 8, 13, 2059, 9, '01-29-55-00', 'Last', NULL, '2015-09-16 14:40:00', '2015-09-17 12:20:00', 6.67, '2015-09-16 16:22:48', '2015-09-18 08:51:18'),
(584, 232, 11, 20, 1500, 3, 'Start', '01-20-40-00', NULL, '2015-09-16 13:30:00', '2015-09-17 09:00:00', 4.5, '2015-09-16 16:27:09', '2015-09-18 08:54:30'),
(585, 232, 10, 20, 1500, 4, '01-20-24-00', 'Last', NULL, '2015-09-16 13:30:00', '2015-09-17 09:35:00', 5.08, '2015-09-16 16:27:52', '2015-09-18 08:55:21'),
(586, 232, 3, 20, 1500, 5, 'Start', '01-24-33-21', NULL, '2015-09-16 13:30:00', '2015-09-16 17:00:00', 3.5, '2015-09-16 16:28:33', '2015-09-18 08:56:15'),
(587, 232, 7, 20, 1500, 6, '01-24-33-21', 'Last', NULL, '2015-09-16 13:30:00', '2015-09-17 09:35:00', 5.08, '2015-09-16 16:29:06', '2015-09-18 08:56:37'),
(588, 244, 4, 15, 5130, 1, 'Start', '01-49-00-00', NULL, '2015-09-17 12:00:00', '2015-09-17 14:30:00', 2.5, '2015-09-17 15:56:08', '2015-09-17 16:01:42'),
(589, 244, 6, 15, 5130, 2, '01-49-00-00', '02-07-16-00', NULL, '2015-09-17 12:00:00', '2015-09-17 13:10:00', 1.17, '2015-09-17 15:57:04', '2015-09-17 16:01:58'),
(590, 244, 5, 15, 5130, 3, '02-07-16-00', '02-14-23-00', NULL, '2015-09-17 12:00:00', '2015-09-17 15:00:00', 3, '2015-09-17 15:57:47', '2015-09-17 16:02:17'),
(591, 244, 7, 15, 5130, 4, '02-14-23-00', '02-20-52-01', NULL, '2015-09-17 12:00:00', '2015-09-17 14:55:00', 2.92, '2015-09-17 15:58:22', '2015-09-17 16:02:38'),
(592, 244, 3, 15, 5130, 5, '02-20-52-01', '02-28-15-00', NULL, '2015-09-17 12:00:00', '2015-09-17 14:55:00', 2.92, '2015-09-17 15:59:14', '2015-09-17 16:03:01'),
(593, 244, 10, 15, 5130, 6, '02-28-15-00', '02-31-58-00', NULL, '2015-09-17 12:00:00', '2015-09-17 13:05:00', 1.08, '2015-09-17 15:59:50', '2015-09-17 16:03:28'),
(594, 244, 11, 15, 5130, 7, '02-31-58-00', '02-48-33-00', NULL, '2015-09-17 12:00:00', '2015-09-17 13:20:00', 1.33, '2015-09-17 16:00:26', '2015-09-17 16:03:52'),
(595, 244, 13, 15, 5130, 8, '02-48-33-00', 'Last', NULL, '2015-09-17 12:00:00', '2015-09-17 16:40:00', 4.67, '2015-09-17 16:00:58', '2015-09-17 16:49:44'),
(596, 245, 8, 41, 13221, 1, 'Start', '02-57-13-23', NULL, '2015-09-18 08:00:00', '2015-09-18 13:30:00', 5.5, '2015-09-18 12:49:01', '2015-09-18 17:56:45'),
(597, 245, 4, 41, 13221, 2, '02-57-13-23', '03-18-15-00', NULL, '2015-09-18 08:00:00', '2015-09-18 15:20:00', 7.33, '2015-09-18 12:50:22', '2015-09-18 17:57:08'),
(598, 245, 10, 30, 9674, 3, '03-18-15-00', '03-23-50-00', NULL, '2015-09-18 08:00:00', '2015-09-18 15:10:00', 7.17, '2015-09-18 12:51:19', '2015-09-18 17:57:30'),
(599, 245, 11, 35, 11286, 4, '03-23-50-00', '04-02-30-00', NULL, '2015-09-18 08:00:00', '2015-09-18 11:50:00', 3.83, '2015-09-18 12:52:33', '2015-09-18 17:57:53'),
(600, 245, 6, 41, 13221, 5, '04-02-30-00', '04-19-33-11', NULL, '2015-09-18 08:00:00', '2015-09-18 15:15:00', 7.25, '2015-09-18 12:54:15', '2015-09-18 17:58:18'),
(601, 245, 3, 30, 9674, 6, '04-19-33-11', '04-28-00-00', NULL, '2015-09-18 08:00:00', '2015-09-18 12:25:00', 4.42, '2015-09-18 13:38:25', '2015-09-18 17:58:39'),
(602, 245, 14, 20, 6450, 7, '04-28-00-00', '05-10-00-00', NULL, '2015-09-18 08:00:00', '2015-09-18 11:00:00', 3, '2015-09-18 13:39:11', '2015-09-18 17:59:04'),
(603, 245, 5, 41, 13221, 8, '05-10-00-00', '05-50-50-00', NULL, '2015-09-18 08:00:00', '2015-09-18 15:20:00', 7.33, '2015-09-18 13:40:13', '2015-09-18 17:59:51'),
(604, 245, 13, 30, 9674, 9, '05-50-50-00', '06-08-47-00', NULL, '2015-09-18 08:00:00', '2015-09-18 12:10:00', 4.17, '2015-09-18 13:40:58', '2015-09-18 18:00:31'),
(605, 245, 7, 41, 13221, 10, '06-08-47-00', 'Last', NULL, '2015-09-18 08:00:00', '2015-09-18 16:10:00', 8.17, '2015-09-18 13:41:36', '2015-09-18 18:01:01'),
(606, 246, 8, 12, 4104, 1, 'Start', '01-46-10-00', 0.5, '2015-09-18 16:00:00', '2015-09-18 17:00:00', 1.5, '2015-09-18 18:20:17', '2015-09-18 18:42:19'),
(607, 246, 11, 12, 4104, 2, '01-46-10-00', '01-52-20-00', 2, '2015-09-18 16:00:00', '2015-09-18 17:00:00', 3, '2015-09-18 18:21:01', '2015-09-18 18:42:40'),
(608, 246, 4, 12, 4104, 3, '01-52-20-00', '02-00-00-00', 2.5, '2015-09-18 16:00:00', '2015-09-18 17:00:00', 3.5, '2015-09-18 18:21:46', '2015-09-18 19:44:55'),
(609, 246, 3, 12, 4104, 4, '02-00-00-00', '02-06-44-00', 1, '2015-09-18 16:00:00', '2015-09-18 17:00:00', 2, '2015-09-18 18:23:23', '2015-09-18 18:43:18'),
(610, 246, 6, 12, 4104, 5, '02-06-44-00', '02-16-00-00', 2.5, '2015-09-18 16:00:00', '2015-09-18 17:00:00', 3.5, '2015-09-18 18:24:13', '2015-09-18 18:44:11'),
(611, 246, 5, 12, 4104, 6, '02-16-00-00', '02-35-30-00', 1.5, '2015-09-18 16:00:00', '2015-09-18 17:00:00', 2.5, '2015-09-18 18:24:55', '2015-09-18 18:44:38'),
(612, 246, 7, 12, 4104, 7, '02-35-30-00', '02-49-58-00', 2, '2015-09-18 16:00:00', '2015-09-18 17:00:00', 3, '2015-09-18 18:26:28', '2015-09-18 19:01:20'),
(613, 246, 13, 12, 4104, 8, '02-49-58-00', '02-53-57-11', 2.5, '2015-09-18 16:00:00', '2015-09-18 17:00:00', 3.5, '2015-09-18 18:27:08', '2015-09-18 19:45:17'),
(614, 246, 10, 12, 4104, 9, '02-53-57-11', '02-59-10-26', 2, '2015-09-18 16:00:00', '2015-09-18 17:00:00', 3, '2015-09-18 18:27:53', '2015-09-18 19:01:42'),
(616, 247, 8, 16, 2533, 1, 'Start', '01-22-10-00', NULL, '2015-09-25 08:00:00', '2015-09-25 10:50:00', 2.83, '2015-09-25 09:52:49', '2015-09-28 08:58:50'),
(617, 247, 7, 16, 2533, 2, '01-22-10-00', '01-35-30-00', NULL, '2015-09-25 08:00:00', '2015-09-25 14:50:00', 6.83, '2015-09-25 09:53:29', '2015-09-28 08:59:21'),
(618, 247, 4, 16, 2533, 3, '01-35-30-00', '01-50-00-00', NULL, '2015-09-25 08:00:00', '2015-09-25 14:20:00', 6.33, '2015-09-25 09:54:09', '2015-09-28 08:59:42'),
(619, 247, 5, 16, 2533, 4, '01-50-00-00', '02-05-20-13', NULL, '2015-09-25 08:00:00', '2015-09-25 13:35:00', 5.58, '2015-09-25 09:54:51', '2015-09-28 09:00:03'),
(620, 247, 3, 16, 2533, 5, '02-05-20-13', '02-21-14-06', NULL, '2015-09-25 08:00:00', '2015-09-25 14:15:00', 6.25, '2015-09-25 09:55:45', '2015-09-28 09:00:30'),
(621, 247, 6, 16, 2533, 6, '02-21-14-06', '02-38-00-00', NULL, '2015-09-25 08:00:00', '2015-09-25 13:35:00', 5.58, '2015-09-25 09:56:40', '2015-09-28 09:00:58'),
(622, 247, 10, 16, 2533, 7, '02-38-00-00', '02-52-15-00', NULL, '2015-09-25 08:00:00', '2015-09-25 16:45:00', 8.75, '2015-09-25 09:57:56', '2015-09-28 09:01:21'),
(623, 247, 14, 16, 2533, 8, '02-52-15-00', '03-07-02-26', NULL, '2015-09-25 08:00:00', '2015-09-25 16:00:00', 8, '2015-09-25 09:58:33', '2015-09-28 09:01:52'),
(624, 247, 13, 16, 2533, 9, '03-07-02-26', '03-23-02-00', NULL, '2015-09-25 08:00:00', '2015-09-25 16:15:00', 8.25, '2015-09-25 09:59:15', '2015-09-28 09:02:19'),
(625, 247, 11, 16, 2533, 10, '03-23-02-00', 'Last', NULL, '2015-09-25 08:00:00', '2015-09-25 16:30:00', 8.5, '2015-09-25 09:59:49', '2015-09-28 09:02:38'),
(626, 248, 8, 60, 20516, 1, 'Start', '02-20-00-00', 4, '2015-09-25 12:00:00', '2015-09-28 08:00:00', 8, '2015-09-28 09:04:58', '2015-09-29 08:29:15'),
(627, 248, 6, 50, 17097, 2, '02-20-00-00', '03-06-00-00', NULL, '2015-09-25 13:40:00', '2015-09-28 12:35:00', 6.92, '2015-09-28 09:05:40', '2015-09-29 08:29:48'),
(628, 248, 5, 50, 17097, 3, '03-06-00-00', '03-55-00-00', NULL, '2015-09-25 13:35:00', '2015-09-28 17:00:00', 11.42, '2015-09-28 09:06:18', '2015-09-29 08:30:10'),
(629, 248, 4, 50, 17097, 4, '03-55-00-00', 'Last', NULL, '2015-09-25 14:50:00', '2015-09-28 16:55:00', 10.08, '2015-09-28 09:07:20', '2015-09-29 08:30:29'),
(631, 250, 7, 70, 23940, 1, 'Start', '02-10-00-00', NULL, '2015-09-25 14:50:00', '2015-09-28 17:00:00', 10.17, '2015-09-28 09:14:01', '2015-09-30 15:03:53'),
(632, 250, 13, 70, 23940, 2, '02-10-00-00', 'Last', 4, '2015-09-28 08:00:00', '2015-09-30 14:50:00', 26.83, '2015-09-28 09:14:28', '2015-09-30 15:04:22'),
(633, 249, 3, 50, 17100, 1, 'Start', '01-50-00-00', NULL, '2015-09-25 14:20:00', '2015-09-28 17:00:00', 10.67, '2015-09-28 09:15:25', '2015-09-29 17:28:52'),
(634, 249, 14, 40, 13680, 2, '01-50-00-00', '02-30-00-00', NULL, '2015-09-28 08:00:00', '2015-09-29 13:40:00', 14.67, '2015-09-28 09:15:55', '2015-09-29 17:29:27'),
(635, 249, 10, 50, 17100, 3, '02-30-00-00', 'Last', NULL, '2015-09-28 08:00:00', '2015-09-29 15:45:00', 16.75, '2015-09-28 09:17:17', '2015-09-29 17:29:53'),
(636, 246, 14, 12, 4104, 10, '02-59-10-26', 'Last', NULL, '2015-09-18 16:00:00', '2015-09-18 17:00:00', 1, '2015-09-28 09:24:36', '2015-09-28 09:24:58'),
(638, 251, 8, 35, 11968, 1, 'Start', '01-40-00-00', 2, '2015-09-28 08:00:00', '2015-09-28 11:10:00', 5.17, '2015-09-28 09:38:01', '2015-09-30 08:33:26'),
(640, 254, 7, 40, 13680, 1, 'Start', '01-42-55-14', NULL, '2015-09-29 08:00:00', '2015-09-30 16:20:00', 17.33, '2015-09-29 08:35:49', '2015-10-01 16:01:54'),
(641, 254, 5, 40, 13680, 2, '01-42-55-14', '02-38-38-00', NULL, '2015-09-29 08:00:00', '2015-09-30 11:05:00', 12.08, '2015-09-29 08:36:27', '2015-10-01 16:02:28'),
(642, 254, 3, 40, 13680, 3, '02-38-38-00', 'Last', 1, '2015-09-29 08:00:00', '2015-10-01 14:05:00', 23.08, '2015-09-29 08:37:01', '2015-10-01 16:03:06'),
(644, 251, 11, 40, 13677, 2, '01-40-00-00', '02-33-10-00', NULL, '2015-09-28 08:00:00', '2015-09-29 17:00:00', 18, '2015-09-30 08:31:20', '2015-09-30 08:33:41'),
(645, 251, 6, 40, 13677, 3, '02-33-10-00', 'Last', NULL, '2015-09-28 12:35:00', '2015-09-29 17:00:00', 13.42, '2015-09-30 08:32:26', '2015-09-30 08:34:48'),
(646, 253, 11, 50, 17102, 1, 'Start', '01-52-29-01', NULL, '2015-09-30 08:00:00', '2015-09-30 16:20:00', 8.33, '2015-09-30 08:36:57', '2015-09-30 16:37:45'),
(647, 253, 4, 50, 17102, 2, '01-52-29-01', 'Last', NULL, '2015-09-29 08:00:00', '2015-09-29 16:25:00', 8.42, '2015-09-30 08:38:04', '2015-09-30 16:38:17'),
(648, 255, 14, 35, 11970, 1, 'Start', '01-45-00-00', NULL, '2015-09-29 13:55:00', '2015-09-30 16:05:00', 11.17, '2015-09-30 08:41:40', '2015-10-01 16:04:29'),
(649, 255, 10, 35, 11970, 2, '01-45-00-00', '02-36-19-00', NULL, '2015-09-29 15:45:00', '2015-10-01 15:15:00', 15.5, '2015-09-30 08:42:22', '2015-10-01 16:05:04'),
(650, 255, 6, 40, 13680, 3, '02-36-19-00', '03-00-10-00', NULL, '2015-09-30 08:00:00', '2015-10-01 09:30:00', 10.5, '2015-09-30 11:54:44', '2015-10-01 16:05:27'),
(651, 255, 5, 30, 10260, 4, '03-00-10-00', 'Last', NULL, '2015-09-30 12:00:00', '2015-10-01 15:30:00', 12.5, '2015-09-30 12:00:40', '2015-10-01 16:05:50'),
(652, 257, 13, 40, 13680, 1, 'Start', '02-03-19-19', NULL, '2015-09-30 14:55:00', '2015-10-02 08:05:00', 9.17, '2015-10-01 08:22:27', '2015-10-03 15:53:18'),
(653, 257, 7, 40, 13680, 2, '02-03-19-19', '02-36-07-20', NULL, '2015-10-01 08:00:00', '2015-10-02 15:30:00', 16.5, '2015-10-01 08:23:24', '2015-10-03 15:53:47'),
(656, 258, 14, 40, 6334, 1, 'Start', '01-55-20-00', 0.5, '2015-09-30 16:20:00', '2015-10-03 17:00:00', 25.17, '2015-10-01 16:08:26', '2015-10-03 17:26:07'),
(657, 258, 3, 40, 6334, 2, '01-55-20-00', '02-23-00-00', NULL, '2015-10-01 14:05:00', '2015-10-03 12:55:00', 14.83, '2015-10-01 16:09:04', '2015-10-03 17:26:38'),
(658, 258, 10, 40, 6334, 3, '02-23-00-00', 'Last', NULL, '2015-10-01 15:15:00', '2015-10-03 13:30:00', 14.25, '2015-10-01 16:09:35', '2015-10-03 17:26:59'),
(659, 257, 6, 40, 13680, 3, '02-36-07-202', 'Last', NULL, '2015-10-01 09:35:00', '2015-10-03 15:05:00', 21.5, '2015-10-02 08:08:12', '2015-10-03 15:54:10'),
(662, 256, 4, 50, 17100, 1, 'Start', '02-03-45-00', NULL, '2015-09-30 08:00:00', '2015-10-02 15:40:00', 23.67, '2015-10-02 11:36:25', '2015-10-03 15:45:26'),
(665, 256, 11, 50, 17100, 2, '02-03-45-00', '02-40-40-00', NULL, '2015-10-01 08:00:00', '2015-10-03 10:00:00', 18, '2015-10-03 15:49:13', '2015-10-03 15:50:51'),
(666, 256, 13, 20, 6840, 3, '02-40-40-00', 'Last', NULL, '2015-10-02 09:00:00', '2015-10-03 14:10:00', 14.17, '2015-10-03 15:50:25', '2015-10-03 15:51:23'),
(667, 259, 7, 30, 10260, 1, 'Start', '01-30-30-00', NULL, '2015-10-03 08:00:00', '2015-10-05 16:25:00', 16.42, '2015-10-04 20:48:57', '2015-10-07 12:26:10'),
(668, 260, 11, 40, 13680, 1, 'Start', '01-46-22-21', NULL, '2015-10-03 10:40:00', '2015-10-05 16:30:00', 13.83, '2015-10-04 20:50:59', '2015-10-08 10:45:57'),
(669, 259, 3, 30, 10260, 2, '01-30-30-00', '02-05-55-00', NULL, '2015-10-03 13:10:00', '2015-10-06 16:55:00', 19.75, '2015-10-05 08:41:07', '2015-10-07 12:26:41'),
(670, 259, 8, 30, 10260, 3, '02-05-55-00', '02-35-35-00', NULL, '2015-10-03 08:00:00', '2015-10-06 09:30:00', 17.5, '2015-10-05 08:42:11', '2015-10-07 12:27:13'),
(675, 252, 8, 150, 23753, 1, 'Start', '03-45-45-00', 1, '2015-09-28 12:30:00', '2015-10-02 15:05:00', 35.58, '2015-10-05 10:58:19', '2015-10-05 10:59:46'),
(676, 252, 5, 70, 11085, 2, '03-45-45-00', 'Last', NULL, '2015-10-01 15:30:00', '2015-10-05 10:35:00', 19.08, '2015-10-05 10:59:09', '2015-10-05 11:00:20'),
(677, 259, 14, 15, 5130, 4, '02-35-35-00', '02-47-42-22', NULL, '2015-10-05 08:00:00', '2015-10-06 17:00:00', 18, '2015-10-05 11:07:40', '2015-10-07 12:27:35'),
(678, 259, 10, 25, 8550, 5, '02-47-42-22', 'Last', NULL, '2015-10-03 13:30:00', '2015-10-07 12:05:00', 22.58, '2015-10-05 11:08:24', '2015-10-07 12:27:56'),
(679, 260, 6, 30, 10260, 2, '01-46-22-21', '02-16-00-00', NULL, '2015-10-05 08:00:00', '2015-10-08 10:25:00', 26.42, '2015-10-05 11:56:33', '2015-10-08 10:49:47'),
(680, 260, 4, 30, 10260, 3, '02-16-00-00', '02-49-21-27', NULL, '2015-10-03 08:10:00', '2015-10-06 16:30:00', 24.33, '2015-10-05 11:58:25', '2015-10-08 10:50:15'),
(681, 260, 5, 20, 6840, 4, '02-49-21-27', '03-08-39-27', NULL, '2015-10-05 10:45:00', '2015-10-06 15:30:00', 13.75, '2015-10-05 11:59:35', '2015-10-08 10:50:38'),
(682, 260, 13, 30, 10260, 5, '03-08-39-27', 'Last', NULL, '2015-10-03 15:00:00', '2015-10-07 14:50:00', 23.83, '2015-10-05 12:00:19', '2015-10-08 10:51:25'),
(685, 263, 4, 70, 23943, 1, 'Start', '02-10-43-07', NULL, '2015-10-07 08:00:00', '2015-10-08 16:15:00', 17.25, '2015-10-07 09:56:30', '2015-10-10 08:51:52'),
(686, 263, 3, 65, 22233, 2, '02-10-43-07', '03-18-58-17', NULL, '2015-10-07 08:00:00', '2015-10-10 08:30:00', 24.5, '2015-10-07 09:57:49', '2015-10-10 08:52:22'),
(687, 264, 11, 90, 30783, 1, 'Start', '02-35-00-00', NULL, '2015-10-06 08:00:00', '2015-10-09 08:30:00', 24.5, '2015-10-07 10:00:22', '2015-10-09 14:25:21'),
(688, 264, 5, 65, 22233, 2, '02-35-00-00', 'Last', NULL, '2015-10-06 16:00:00', '2015-10-09 14:10:00', 22.17, '2015-10-07 10:01:46', '2015-10-09 14:25:56'),
(689, 262, 7, 50, 17100, 1, 'Start', '01-57-00-00', 2.5, '2015-10-06 08:00:00', '2015-10-08 17:00:00', 27.5, '2015-10-09 07:09:48', '2015-10-09 07:13:40'),
(690, 262, 3, 10, 3420, 2, '01-57-00-00', '02-06-17-14', 5, '2015-10-08 16:50:00', '2015-10-08 17:00:00', 5.17, '2015-10-09 07:11:36', '2015-10-09 07:14:02'),
(691, 262, 8, 45, 15390, 3, '02-06-17-14', '02-51-51-00', 5, '2015-10-06 09:30:00', '2015-10-08 17:00:00', 28.5, '2015-10-09 07:12:16', '2015-10-09 07:14:36'),
(692, 262, 6, 25, 8550, 4, '02-51-51-00', 'Last', 4.5, '2015-10-08 12:00:00', '2015-10-08 17:00:00', 9.5, '2015-10-09 07:12:59', '2015-10-09 07:15:46'),
(693, 263, 10, 65, 22233, 3, '03-18-58-17', 'Last', NULL, '2015-10-07 12:00:00', '2015-10-09 16:10:00', 20.17, '2015-10-09 09:27:37', '2015-10-10 08:52:48'),
(694, 267, 13, 60, 20520, 1, 'Start', '02-02-00-00', NULL, '2015-10-08 08:00:00', '2015-10-09 13:55:00', 14.92, '2015-10-10 09:55:34', '2015-10-18 15:51:03'),
(696, 267, 14, 25, 8550, 2, '02-02-00-00', '02-45-00-00', NULL, '2015-10-08 08:00:00', '2015-10-10 15:55:00', 23.92, '2015-10-18 15:49:08', '2015-10-18 15:51:44'),
(697, 267, 5, 40, 13680, 3, '02-45-00-00', 'Last', NULL, '2015-10-09 14:10:00', '2015-10-10 15:00:00', 9.83, '2015-10-18 15:49:59', '2015-10-18 15:52:12');
INSERT INTO `task_records` (`id`, `order_id`, `employee_id`, `edit_length`, `edit_point`, `clip_no`, `clip_in`, `clip_out`, `overtime`, `started`, `completed`, `worktime`, `created`, `modified`) VALUES
(698, 268, 11, 30, 10260, 1, 'Start', '01-38-00-00', NULL, '2015-10-09 09:00:00', '2015-10-10 16:00:00', 16, '2015-10-18 16:24:31', '2015-10-18 17:02:28'),
(699, 268, 7, 27, 9234, 2, '01-38-00-00', '02-09-45-00', NULL, '2015-10-09 08:00:00', '2015-10-10 15:55:00', 16.92, '2015-10-18 16:25:46', '2015-10-18 17:03:09'),
(700, 268, 6, 28, 9576, 3, '02-09-45-00', '02-45-00-00', NULL, '2015-10-09 08:00:00', '2015-10-10 14:20:00', 15.33, '2015-10-18 16:26:34', '2015-10-18 17:03:35'),
(701, 268, 4, 20, 6840, 4, '02-45-00-00', '02-53-00-00', NULL, '2015-10-09 08:00:00', '2015-10-09 17:00:00', 9, '2015-10-18 16:27:26', '2015-10-18 17:03:59'),
(702, 268, 8, 20, 6840, 5, '02-53-00-00', 'Last', NULL, '2015-10-09 08:00:00', '2015-10-09 17:00:00', 9, '2015-10-18 16:27:54', '2015-10-18 17:05:04'),
(703, 269, 4, 40, 13680, 1, 'Start', '01-40-00-00', NULL, '2015-10-10 08:00:00', '2015-10-10 17:00:00', 9, '2015-10-18 17:07:00', '2015-10-19 07:04:16'),
(704, 269, 8, 35, 11970, 2, '01-40-00-00', 'Last', NULL, '2015-10-10 08:00:00', '2015-10-10 17:00:00', 9, '2015-10-18 17:07:33', '2015-10-19 07:04:37'),
(705, 261, 13, 60, 9500, 1, 'Start', '02-06-00-00', NULL, '2015-10-09 12:00:00', '2015-10-20 13:30:00', 25.5, '2015-10-19 07:56:16', '2015-10-21 12:55:39'),
(706, 261, 6, 60, 9500, 2, '02-06-00-00', '03-00-00-00', NULL, '2015-10-19 08:00:00', '2015-10-20 16:35:00', 17.58, '2015-10-19 07:57:04', '2015-10-21 12:56:03'),
(707, 261, 10, 60, 9500, 3, '03-00-00-00', '04-02-20-00', NULL, '2015-10-09 16:15:00', '2015-10-21 10:40:00', 26.42, '2015-10-19 08:00:49', '2015-10-21 12:56:34'),
(709, 261, 3, 60, 9500, 4, '04-02-20-00', 'Last', 0.5, '2015-10-10 08:30:00', '2015-10-20 17:00:00', 25, '2015-10-19 08:02:13', '2015-10-21 12:57:27'),
(710, 271, 7, 120, 9000, 1, 'Start', 'Last', NULL, '2015-10-19 08:00:00', '2015-10-23 10:55:00', 34.92, '2015-10-19 08:16:42', '2015-10-26 10:20:46'),
(711, 272, 8, 120, 9000, 1, 'Start', 'Last', NULL, '2015-10-19 08:00:00', '2015-10-22 09:50:00', 25.83, '2015-10-19 08:17:28', '2015-10-22 10:05:58'),
(712, 273, 4, 120, 9000, 1, 'Start', 'Last', NULL, '2015-10-19 08:00:00', '2015-10-20 12:20:00', 13.33, '2015-10-19 08:18:14', '2015-10-21 13:00:18'),
(713, 274, 11, 120, 9000, 1, 'Start', 'Last', NULL, '2015-10-19 08:00:00', '2015-10-20 17:00:00', 18, '2015-10-19 08:19:00', '2015-10-21 13:04:25'),
(717, 276, 14, 60, 20520, 1, 'Start', '02-09-16-07', NULL, '2015-10-19 08:00:00', '2015-10-21 12:00:00', 20, '2015-10-20 12:41:24', '2015-10-21 13:02:53'),
(718, 276, 4, 80, 27360, 2, '02-09-16-07', 'Last', NULL, '2015-10-20 12:20:00', '2015-10-21 10:50:00', 7.5, '2015-10-20 12:42:24', '2015-10-21 13:03:16'),
(719, 275, 5, 75, 5625, 1, 'Start', '02-17-59-14', NULL, '2015-10-19 08:00:00', '2015-10-20 12:35:00', 13.58, '2015-10-21 13:41:14', '2015-10-22 10:04:49'),
(720, 275, 13, 45, 3375, 2, '02-17-59-14', 'Last', NULL, '2015-10-20 13:30:00', '2015-10-21 17:00:00', 12.5, '2015-10-21 13:43:13', '2015-10-22 10:05:12'),
(721, 270, 13, 120, 9000, 1, 'Start', 'Last', NULL, '2015-10-22 08:00:00', '2015-10-26 14:15:00', 22.25, '2015-10-22 08:26:07', '2015-10-27 14:37:46'),
(722, 280, 5, 35, 11970, 1, 'Start', '01-49-00-00', NULL, '2015-10-20 13:30:00', '2015-10-21 14:50:00', 10.33, '2015-10-22 10:55:17', '2015-10-22 10:58:49'),
(723, 280, 6, 50, 17100, 2, '01-49-00-00', '02-21-00-00', NULL, '2015-10-21 08:00:00', '2015-10-21 16:40:00', 8.67, '2015-10-22 10:56:31', '2015-10-22 10:59:13'),
(724, 280, 11, 20, 6840, 3, '02-21-00-00', '02-41-00-00', NULL, '2015-10-21 08:00:00', '2015-10-21 14:25:00', 6.42, '2015-10-22 10:57:23', '2015-10-22 10:59:35'),
(725, 280, 10, 15, 5130, 4, '02-41-00-00', 'Last', 0.5, '2015-10-21 10:40:00', '2015-10-21 17:00:00', 6.83, '2015-10-22 10:58:02', '2015-10-22 11:00:03'),
(726, 277, 8, 60, 14040, 1, 'Start', 'Last', NULL, '2015-10-22 09:50:00', '2015-10-22 15:25:00', 5.58, '2015-10-22 11:54:40', '2015-10-22 15:48:53'),
(727, 279, 6, 120, 9000, 1, 'Start', 'Last', NULL, '2015-10-22 08:00:00', '2015-10-27 15:50:00', 31.83, '2015-10-22 11:55:51', '2015-10-28 07:42:52'),
(731, 278, 4, 70, 11084, 1, 'Start', '02-11-40-10', NULL, '2015-10-21 10:50:00', '2015-10-27 14:00:00', 35.17, '2015-10-22 16:08:19', '2015-10-27 14:40:27'),
(732, 278, 8, 50, 7917, 2, '02-11-40-10', 'Last', NULL, '2015-10-22 13:30:00', '2015-10-27 14:00:00', 24.5, '2015-10-22 16:09:01', '2015-10-27 14:40:49'),
(734, 283, 14, 60, 21060, 1, 'Start', '02-12-00-00', NULL, '2015-10-21 12:00:00', '2015-10-27 13:50:00', 33.83, '2015-10-23 12:22:18', '2015-10-28 07:43:59'),
(735, 283, 7, 60, 21060, 2, '02-12-00-00', 'Last', NULL, '2015-10-23 12:00:00', '2015-10-27 17:00:00', 21, '2015-10-23 12:22:54', '2015-10-28 07:44:22'),
(736, 284, 11, 60, 21060, 1, 'Start', '02-01-30-00', NULL, '2015-10-22 08:00:00', '2015-10-26 15:10:00', 23.17, '2015-10-27 14:44:29', '2015-10-27 14:46:10'),
(737, 284, 10, 60, 21060, 2, '02-01-30-00', 'Last', NULL, '2015-10-22 08:00:00', '2015-10-27 11:05:00', 27.08, '2015-10-27 14:45:11', '2015-10-27 14:46:28'),
(738, 287, 11, 80, 27356, 1, 'Start', 'Last', NULL, '2015-10-27 08:00:00', '2015-10-29 09:30:00', 17.5, '2015-10-27 14:58:58', '2015-10-30 09:27:27'),
(739, 281, 3, 120, 42120, 1, 'Start', 'Last', NULL, '2015-10-21 08:00:00', '2015-10-27 16:30:00', 40.5, '2015-10-27 15:00:01', '2015-10-28 07:40:39'),
(740, 282, 5, 120, 42120, 1, 'Start', 'Last', NULL, '2015-10-21 15:30:00', '2015-10-27 17:00:00', 33.5, '2015-10-27 15:00:46', '2015-10-28 08:31:08'),
(746, 288, 6, 90, 25650, 1, 'Start', '02-32-19-07', NULL, '2015-10-28 08:00:00', '2015-10-29 10:50:00', 11.83, '2015-10-28 07:48:51', '2015-10-30 09:47:35'),
(747, 288, 7, 90, 25650, 2, '02-32-19-07', 'Last', NULL, '2015-10-28 08:00:00', '2015-10-29 14:20:00', 15.33, '2015-10-28 07:49:19', '2015-10-30 09:48:02'),
(748, 286, 4, 55, 18806, 1, 'Start', '01-56-00-00', NULL, '2015-10-27 14:00:00', '2015-10-28 13:45:00', 8.75, '2015-10-28 10:36:13', '2015-10-30 09:44:26'),
(749, 286, 14, 30, 10258, 2, '01-56-00-00', '02-40-00-00', NULL, '2015-10-27 14:00:00', '2015-10-29 17:00:00', 19, '2015-10-28 10:36:55', '2015-10-30 09:45:03'),
(750, 286, 8, 30, 10258, 3, '02-40-00-00', '02-58-36-28', NULL, '2015-10-27 15:00:00', '2015-10-28 17:00:00', 11, '2015-10-28 10:37:36', '2015-10-30 09:45:40'),
(751, 286, 13, 20, 6839, 4, '02-58-36-28', 'Last', NULL, '2015-10-28 10:20:00', '2015-10-29 11:40:00', 10.33, '2015-10-28 10:38:18', '2015-10-30 09:46:01'),
(752, 285, 13, 90, 30780, 1, 'Start', '02-30-30-00', NULL, '2015-10-26 14:20:00', '2015-10-28 10:20:00', 12, '2015-10-30 09:36:20', '2015-10-30 09:37:30'),
(754, 285, 10, 30, 10260, 2, '02-0-30-00', 'Last', NULL, '2015-10-27 12:00:00', '2015-10-28 09:15:00', 6.25, '2015-10-30 09:38:57', '2015-10-30 09:39:24'),
(758, 289, 5, 50, 17097, 1, 'Start', '01-55-50-00', NULL, '2015-10-28 08:00:00', '2015-10-29 17:00:00', 18, '2015-10-30 10:12:02', '2015-10-30 10:57:56'),
(759, 289, 11, 20, 6839, 2, '01-55-50-00', '02-06-00-00', NULL, '2015-10-29 09:45:00', '2015-10-29 15:05:00', 5.33, '2015-10-30 10:13:02', '2015-10-30 10:58:24'),
(760, 289, 10, 40, 13678, 3, '02-06-00-00', '02-46-55-00', NULL, '2015-10-28 09:15:00', '2015-10-29 16:30:00', 16.25, '2015-10-30 10:14:00', '2015-10-30 10:58:52'),
(761, 289, 3, 25, 8549, 4, '02-46-55-00', 'Last', NULL, '2015-10-29 08:00:00', '2015-10-30 10:35:00', 11.58, '2015-10-30 10:14:47', '2015-10-30 10:59:20'),
(762, 290, 4, 50, 17550, 1, 'Strat', '02-15-25-20', NULL, '2015-10-28 14:00:00', '2015-10-29 15:00:00', 10, '2015-10-30 11:03:49', '2015-10-30 11:05:43'),
(763, 290, 8, 35, 12285, 2, '02-15-25-20', '02-48-00-00', NULL, '2015-10-29 08:00:00', '2015-10-30 09:20:00', 10.33, '2015-10-30 11:04:29', '2015-10-30 11:06:10'),
(764, 290, 6, 35, 12285, 3, '02-48-00-00', 'Last', NULL, '2015-10-29 12:20:00', '2015-10-30 09:20:00', 6, '2015-10-30 11:04:56', '2015-10-30 11:06:29'),
(765, 291, 11, 18, 2850, 1, 'Strat', '01-15-22-00', NULL, '2015-10-30 08:00:00', '2015-10-30 11:25:00', 3.42, '2015-10-31 09:36:51', '2015-10-31 09:46:34'),
(766, 291, 5, 18, 2850, 2, '01-15-22-00', '01-39-20-00', NULL, '2015-10-30 08:00:00', '2015-10-30 13:10:00', 5.17, '2015-10-31 09:37:34', '2015-10-31 09:46:53'),
(767, 291, 13, 18, 2850, 3, '01-39-20-00', '02-05-20-00', NULL, '2015-10-30 08:00:00', '2015-10-30 13:30:00', 5.5, '2015-10-31 09:38:15', '2015-10-31 09:47:15'),
(768, 291, 4, 18, 2850, 4, '02-05-20-00', '02-38-27-26', NULL, '2015-10-30 08:00:00', '2015-10-30 14:25:00', 6.42, '2015-10-31 09:39:00', '2015-10-31 09:47:42'),
(769, 291, 7, 18, 2850, 5, '02-38-27-26', '03-03-30-00', NULL, '2015-10-30 08:00:00', '2015-10-30 13:20:00', 5.33, '2015-10-31 09:40:03', '2015-10-31 09:56:28'),
(770, 291, 14, 18, 2850, 6, '03-03-30-00', '03-18-52-25', NULL, '2015-10-30 08:00:00', '2015-10-30 14:10:00', 6.17, '2015-10-31 09:41:02', '2015-10-31 09:57:22'),
(771, 291, 6, 18, 2850, 7, '03-18-52-25', '03-35-19-02', NULL, '2015-10-30 09:30:00', '2015-10-30 12:45:00', 3.25, '2015-10-31 09:41:59', '2015-10-31 09:57:46'),
(772, 291, 8, 18, 2850, 8, '03-35-19-02', '03-48-00-00', NULL, '2015-10-30 10:00:00', '2015-10-30 12:40:00', 2.67, '2015-10-31 09:42:50', '2015-10-31 09:58:09'),
(773, 291, 3, 18, 2850, 9, '03-48-00-00', 'Last', NULL, '2015-10-30 10:33:00', '2015-10-30 13:25:00', 2.87, '2015-10-31 09:43:36', '2015-10-31 09:59:08'),
(774, 292, 11, 12, 1900, 1, 'Start', '01-29-15-24', NULL, '2015-10-31 08:00:00', '2015-10-31 11:00:00', 3, '2015-10-31 15:00:58', '2015-10-31 19:38:44'),
(775, 292, 7, 12, 1900, 2, '01-29-15-24', '01-40-49-22', NULL, '2015-10-31 08:00:00', '2015-10-31 13:05:00', 5.08, '2015-10-31 15:03:03', '2015-10-31 19:39:05'),
(776, 292, 4, 12, 1900, 3, '01-40-49-22', '01-51-39-03', NULL, '2015-10-31 08:00:00', '2015-10-31 11:55:00', 3.92, '2015-10-31 15:03:40', '2015-10-31 19:39:32'),
(777, 292, 13, 12, 1900, 4, '01-51-39-03', '02-01-58-24', NULL, '2015-10-31 08:00:00', '2015-10-31 12:25:00', 4.42, '2015-10-31 15:04:29', '2015-10-31 19:39:54'),
(778, 292, 3, 12, 1900, 5, '02-01-58-24', '02-13-23-29', NULL, '2015-10-31 08:00:00', '2015-10-31 11:05:00', 3.08, '2015-10-31 15:05:12', '2015-10-31 19:40:18'),
(779, 292, 10, 12, 1900, 6, '02-13-23-29', '02-25-25-00', NULL, '2015-10-31 08:00:00', '2015-10-31 11:15:00', 3.25, '2015-10-31 15:05:52', '2015-10-31 19:40:48'),
(780, 292, 14, 12, 1900, 7, '02-25-25-00', '02-36-12-03', NULL, '2015-10-31 08:00:00', '2015-10-31 12:00:00', 4, '2015-10-31 15:06:59', '2015-10-31 19:41:26'),
(781, 292, 5, 12, 1900, 8, '02-36-12-03', '02-47-32-05', NULL, '2015-10-31 08:00:00', '2015-10-31 14:05:00', 6.08, '2015-10-31 15:07:54', '2015-10-31 19:41:49'),
(782, 292, 6, 12, 1900, 9, '02-47-32-05', 'Last', NULL, '2015-10-31 08:00:00', '2015-10-31 12:05:00', 4.08, '2015-10-31 15:08:21', '2015-10-31 19:42:18'),
(783, 293, 3, 13, 4446, 1, 'Start', '01-33-20-08', NULL, '2015-10-31 12:00:00', '2015-10-31 15:15:00', 3.25, '2015-10-31 15:11:05', '2015-10-31 19:44:17'),
(784, 293, 10, 13, 4446, 2, '01-33-20-08', '01-44-44-00', NULL, '2015-10-31 12:00:00', '2015-10-31 15:40:00', 3.67, '2015-10-31 15:11:39', '2015-10-31 19:44:35'),
(785, 293, 11, 13, 4446, 3, '01-44-44-00', '02-06-46-01', NULL, '2015-10-31 12:00:00', '2015-10-31 14:45:00', 2.75, '2015-10-31 15:12:16', '2015-10-31 19:45:03'),
(786, 293, 4, 13, 4446, 4, '02-06-46-01', '02-16-33-07', NULL, '2015-10-31 12:00:00', '2015-10-31 15:05:00', 3.08, '2015-10-31 15:12:57', '2015-10-31 19:45:41'),
(787, 293, 6, 13, 4446, 5, '02-16-33-07', '02-28-03-03', NULL, '2015-10-31 12:00:00', '2015-10-31 14:50:00', 2.83, '2015-10-31 15:13:58', '2015-10-31 19:46:12'),
(788, 293, 13, 13, 4446, 6, '02-28-03-03', '02-38-34-26', NULL, '2015-10-31 12:00:00', '2015-10-31 14:45:00', 2.75, '2015-10-31 15:14:35', '2015-10-31 19:46:35'),
(789, 293, 14, 13, 4446, 7, '02-38-34-26', '02-45-35-10', NULL, '2015-10-31 12:00:00', '2015-10-31 15:25:00', 3.42, '2015-10-31 15:15:19', '2015-10-31 19:46:56'),
(790, 293, 7, 13, 4446, 8, '02-45-35-10', '02-48-36-20', NULL, '2015-10-31 13:05:00', '2015-10-31 15:00:00', 1.92, '2015-10-31 15:16:19', '2015-10-31 19:48:31'),
(791, 293, 5, 13, 4446, 9, '02-48-36-20', 'Last', NULL, '2015-10-31 14:05:00', '2015-10-31 15:25:00', 1.33, '2015-10-31 15:17:45', '2015-10-31 19:48:58'),
(792, 294, 11, 20, 3167, 1, 'Start', '01-22-21-10', NULL, '2015-11-02 12:00:00', '2015-11-03 13:10:00', 10.17, '2015-11-02 19:01:25', '2015-11-04 14:50:58'),
(793, 294, 10, 20, 3167, 2, '01-22-21-10', '01-41-40-26', NULL, '2015-11-02 12:00:00', '2015-11-03 11:10:00', 8.17, '2015-11-02 19:02:36', '2015-11-04 14:45:07'),
(794, 294, 3, 20, 3167, 3, '01-41-40-26', '02-00-52-15', NULL, '2015-11-02 12:00:00', '2015-11-03 13:05:00', 10.08, '2015-11-02 19:03:25', '2015-11-04 14:45:27'),
(795, 294, 8, 20, 3167, 4, '02-00-52-15', '02-22-24-12', NULL, '2015-11-02 12:00:00', '2015-11-03 10:45:00', 7.75, '2015-11-02 19:04:08', '2015-11-04 14:47:06'),
(796, 294, 13, 20, 3167, 5, '02-22-24-12', '02-41-41-07', NULL, '2015-11-02 12:00:00', '2015-11-03 10:00:00', 7, '2015-11-02 19:04:42', '2015-11-04 14:46:31'),
(797, 294, 14, 20, 3167, 6, '02-41-41-07', '02-58-44-09', NULL, '2015-11-02 12:00:00', '2015-11-04 09:00:00', 13, '2015-11-02 19:05:26', '2015-11-04 14:47:33'),
(798, 294, 4, 20, 3167, 7, '02-58-44-09', 'Last', NULL, '2015-11-02 12:00:00', '2015-11-03 17:00:00', 14, '2015-11-02 19:05:53', '2015-11-04 14:48:06'),
(799, 295, 7, 30, 10260, 1, 'Start', '01-47-24-02', NULL, '2015-11-03 08:00:00', '2015-11-04 08:40:00', 9.67, '2015-11-04 14:35:52', '2015-11-04 14:52:10'),
(800, 295, 11, 18, 6156, 2, '01-47-24-02', '02-00-00-00', NULL, '2015-11-03 13:30:00', '2015-11-04 11:00:00', 6.5, '2015-11-04 14:36:39', '2015-11-04 14:52:30'),
(801, 295, 3, 18, 6156, 3, '02-00-00-00', '02-20-00-00', NULL, '2015-11-03 13:10:00', '2015-11-04 10:00:00', 5.83, '2015-11-04 14:37:12', '2015-11-04 14:52:58'),
(802, 295, 5, 18, 6156, 4, '02-20-00-00', '02-37-37-00', NULL, '2015-11-03 08:00:00', '2015-11-03 15:10:00', 7.17, '2015-11-04 14:37:48', '2015-11-04 14:53:38'),
(803, 295, 8, 20, 6840, 5, '02-37-37-00', '02-53-38-20', NULL, '2015-11-03 10:45:00', '2015-11-04 11:20:00', 9.58, '2015-11-04 14:38:36', '2015-11-04 14:53:57'),
(804, 295, 13, 18, 6156, 6, '02-53-38-20', '03-07-17-00', NULL, '2015-11-03 10:15:00', '2015-11-04 12:25:00', 11.17, '2015-11-04 14:39:49', '2015-11-04 14:54:18'),
(805, 295, 10, 9, 3078, 7, '03-07-17-00', '03-15-00-00', NULL, '2015-11-03 12:00:00', '2015-11-03 17:00:00', 5, '2015-11-04 14:40:23', '2015-11-04 14:54:39'),
(806, 295, 6, 9, 3078, 8, '03-15-00-00', 'Last', NULL, '2015-11-04 08:00:00', '2015-11-04 10:25:00', 2.42, '2015-11-04 14:41:09', '2015-11-04 14:54:59'),
(809, 296, 11, 32, 10946, 1, 'Start', '01-30-00-00', NULL, '2015-11-05 08:00:00', '2015-11-05 15:50:00', 7.83, '2015-11-05 10:26:35', '2015-11-07 10:01:01'),
(810, 296, 10, 32, 10946, 2, '01-30-00-00', '02-09-45-00', NULL, '2015-11-05 08:00:00', '2015-11-05 16:35:00', 8.58, '2015-11-05 10:27:13', '2015-11-07 10:01:46'),
(811, 296, 3, 33, 11288, 3, '02-09-45-00', '02-50-00-00', NULL, '2015-11-05 08:00:00', '2015-11-05 16:55:00', 8.92, '2015-11-05 10:27:50', '2015-11-07 10:02:15'),
(812, 296, 8, 40, 13682, 4, '02-50-00-00', '03-20-00-00', NULL, '2015-11-05 08:00:00', '2015-11-06 10:30:00', 11.5, '2015-11-05 10:38:20', '2015-11-07 10:03:08'),
(813, 296, 4, 33, 11288, 5, '03-20-00-00', '03-45-10-00', NULL, '2015-11-05 08:00:00', '2015-11-06 11:00:00', 12, '2015-11-05 10:39:03', '2015-11-07 10:03:29'),
(814, 296, 14, 20, 6841, 6, '03-45-10-00', 'Last', NULL, '2015-11-05 08:00:00', '2015-11-06 13:55:00', 14.92, '2015-11-05 10:39:30', '2015-11-07 10:03:58'),
(815, 297, 6, 30, 10260, 1, 'start', '01-33-41-20', NULL, '2015-11-05 08:00:00', '2015-11-05 16:00:00', 8, '2015-11-05 10:45:02', '2015-11-07 10:05:41'),
(816, 297, 7, 30, 10260, 2, '01-33-41-20', '02-06-11-00', NULL, '2015-11-05 08:00:00', '2015-11-06 15:10:00', 16.17, '2015-11-05 10:45:57', '2015-11-07 10:06:09'),
(817, 297, 5, 30, 10260, 3, '02-06-11-00', '02-41-19-10', NULL, '2015-11-05 08:00:00', '2015-11-06 13:15:00', 14.25, '2015-11-05 10:47:40', '2015-11-07 10:06:57'),
(818, 297, 13, 30, 10260, 4, '02-41-19-10', 'Last', NULL, '2015-11-05 08:00:00', '2015-11-05 16:35:00', 8.58, '2015-11-05 10:48:09', '2015-11-07 10:07:48'),
(824, 298, 11, 32, 10942, 1, 'Start', '01-18-33-26', NULL, '2015-11-06 08:00:00', '2015-11-07 16:50:00', 17.83, '2015-11-07 13:48:42', '2015-11-07 17:00:41'),
(825, 298, 10, 31, 10600, 2, '01-18-33-26', '01-50-41-11', NULL, '2015-11-06 08:00:00', '2015-11-07 13:30:00', 14.5, '2015-11-07 13:49:22', '2015-11-07 17:01:04'),
(826, 298, 3, 20, 6839, 3, '01-50-41-11', '02-30-54-03', NULL, '2015-11-06 08:00:00', '2015-11-07 12:30:00', 13.5, '2015-11-07 13:49:56', '2015-11-07 17:01:26'),
(827, 298, 13, 31, 10600, 4, '02-30-54-03', '02-59-05-00', NULL, '2015-11-06 08:00:00', '2015-11-07 13:00:00', 14, '2015-11-07 13:51:27', '2015-11-07 17:01:44'),
(828, 298, 6, 31, 10600, 5, '02-59-05-00', 'Last', NULL, '2015-11-06 08:00:00', '2015-11-07 13:30:00', 14.5, '2015-11-07 13:52:01', '2015-11-07 17:02:00'),
(829, 299, 4, 40, 6200, 1, 'Start', '01-46-32-06', NULL, '2015-11-06 12:00:00', '2015-11-07 15:50:00', 12.83, '2015-11-07 14:57:04', '2015-11-07 16:33:50'),
(830, 299, 13, 10, 1550, 2, '01-46-32-06', '01-54-27-21', NULL, '2015-11-07 13:00:00', '2015-11-07 16:10:00', 3.17, '2015-11-07 14:58:21', '2015-11-07 16:34:18'),
(831, 299, 5, 30, 4650, 3, '01-54-27-21', '02-23-19-11', NULL, '2015-11-06 13:20:00', '2015-11-07 15:45:00', 11.42, '2015-11-07 14:59:14', '2015-11-07 16:35:07'),
(832, 299, 10, 3, 465, 4, '02-23-19-11', '02-26-20-00', NULL, '2015-11-07 13:30:00', '2015-11-07 16:10:00', 2.67, '2015-11-07 15:00:10', '2015-11-07 16:35:29'),
(833, 299, 14, 26, 4030, 5, '02-26-20-00', '02-59-45-00', NULL, '2015-11-06 14:00:00', '2015-11-07 15:00:00', 10, '2015-11-07 15:02:13', '2015-11-07 16:36:19'),
(834, 299, 8, 12, 1860, 6, '02-59-45-00', '03-04-24-16', NULL, '2015-11-06 13:30:00', '2015-11-07 08:30:00', 4, '2015-11-07 15:06:56', '2015-11-07 16:37:05'),
(835, 299, 7, 19, 2945, 7, '03-04-45-00', '03-22-15-02', NULL, '2015-11-07 08:30:00', '2015-11-07 15:35:00', 7.08, '2015-11-07 15:08:22', '2015-11-07 16:37:35'),
(836, 299, 3, 10, 1550, 8, '03-04-15-02', 'Last', NULL, '2015-11-07 12:30:00', '2015-11-07 15:55:00', 3.42, '2015-11-07 15:08:57', '2015-11-07 16:38:03'),
(837, 302, 11, 65, 22230, 1, 'Start', '02-12-00-00', NULL, '2015-11-10 08:00:00', '2015-11-10 17:00:00', 9, '2015-11-10 19:48:28', '2015-11-12 13:54:57'),
(839, 300, 3, 30, 10260, 1, 'Start', '01-42-11-18', NULL, '2015-11-10 08:00:00', '2015-11-11 13:50:00', 14.83, '2015-11-11 08:19:04', '2015-11-11 15:45:36'),
(841, 300, 4, 35, 11970, 2, '01-42-11-18', '02-28-28-05', NULL, '2015-11-10 08:00:00', '2015-11-11 12:50:00', 13.83, '2015-11-11 08:20:24', '2015-11-11 15:46:12'),
(842, 300, 7, 30, 10260, 3, '02-28-28-05', '02-45-05-23', NULL, '2015-11-10 08:00:00', '2015-11-10 17:00:00', 9, '2015-11-11 08:21:23', '2015-11-11 15:46:56'),
(843, 300, 8, 15, 5130, 4, '02-45-05-23', '02-56-05-00', NULL, '2015-11-11 08:00:00', '2015-11-11 14:20:00', 6.33, '2015-11-11 08:22:15', '2015-11-11 15:48:27'),
(844, 300, 11, 10, 3420, 5, '02-56-05-00', 'Last', NULL, '2015-11-11 08:00:00', '2015-11-11 15:15:00', 7.25, '2015-11-11 08:22:44', '2015-11-11 15:48:45'),
(849, 302, 6, 65, 22230, 2, '02-12-00-00', '03-13-00-00', NULL, '2015-11-10 08:00:00', '2015-11-12 13:00:00', 21, '2015-11-11 16:42:39', '2015-11-12 13:55:20'),
(850, 302, 8, 15, 5130, 3, '03-13-00-00', 'Last', NULL, '2015-11-11 15:00:00', '2015-11-12 12:15:00', 6.25, '2015-11-11 16:43:14', '2015-11-12 13:55:47'),
(854, 301, 14, 55, 18810, 1, 'Start', '02-10-44-27', NULL, '2015-11-10 08:00:00', '2015-11-12 14:00:00', 22, '2015-11-12 10:08:53', '2015-11-13 07:50:47'),
(855, 301, 5, 55, 18810, 2, '02-10-44-27', '02-59-21-18', NULL, '2015-11-10 08:00:00', '2015-11-12 14:00:00', 22, '2015-11-12 10:09:59', '2015-11-13 07:51:23'),
(856, 301, 3, 25, 8550, 3, '02-59-21-18', '03-21-47-25', NULL, '2015-11-11 14:00:00', '2015-11-12 15:10:00', 10.17, '2015-11-12 10:11:11', '2015-11-13 07:51:49'),
(857, 301, 7, 20, 6840, 4, '03-21-47-25', 'Last', NULL, '2015-11-12 09:00:00', '2015-11-12 14:15:00', 5.25, '2015-11-12 10:11:50', '2015-11-13 07:52:13'),
(858, 303, 10, 50, 17100, 1, 'Start', '02-09-53-24', NULL, '2015-11-10 08:00:00', '2015-11-12 16:00:00', 24, '2015-11-12 10:16:36', '2015-11-13 07:53:13'),
(859, 303, 11, 15, 5130, 2, '02-09-53-24', '02-20-00-00', NULL, '2015-11-11 16:30:00', '2015-11-12 13:00:00', 5.5, '2015-11-12 10:17:37', '2015-11-13 07:53:37'),
(860, 303, 13, 50, 17100, 3, '02-20-00-00', '02-58-38-16', NULL, '2015-11-10 10:45:00', '2015-11-12 13:00:00', 18.25, '2015-11-12 10:18:29', '2015-11-13 07:54:06'),
(861, 303, 4, 20, 6840, 4, '02-58-38-16', 'Last', NULL, '2015-11-11 13:20:00', '2015-11-12 13:10:00', 8.83, '2015-11-12 10:20:14', '2015-11-13 07:54:27'),
(862, 304, 8, 32, 11492, 1, 'Start', '01-51-45-20', NULL, '2015-11-12 12:20:00', NULL, NULL, '2015-11-14 11:00:43', '2015-11-14 11:00:43'),
(863, 304, 4, 32, 11492, 2, '01-51-45-20', '02-23-38-11', NULL, '2015-11-12 13:10:00', NULL, NULL, '2015-11-14 11:01:21', '2015-11-14 11:01:21'),
(864, 304, 11, 32, 11492, 3, '02-23-38-11', '02-46-18-14', NULL, '2015-11-12 13:10:00', NULL, NULL, '2015-11-14 11:02:01', '2015-11-14 11:02:01'),
(865, 304, 6, 32, 11492, 4, '02-46-18-14', '03-17-08-08', NULL, '2015-11-12 13:10:00', NULL, NULL, '2015-11-14 11:02:50', '2015-11-14 11:02:50');

-- --------------------------------------------------------

--
-- テーブルの構造 `time_cards`
--

CREATE TABLE IF NOT EXISTS `time_cards` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `pay_cut_type_id` int(11) NOT NULL,
  `in_time` time DEFAULT NULL,
  `out_time` time DEFAULT NULL,
  `note` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pay_cut_type_id_idx` (`pay_cut_type_id`),
  KEY `employee_id` (`employee_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=82 ;

--
-- テーブルのデータをダンプしています `time_cards`
--

INSERT INTO `time_cards` (`id`, `employee_id`, `date`, `pay_cut_type_id`, `in_time`, `out_time`, `note`, `created`, `modified`) VALUES
(28, 3, '2015-04-22', 1, NULL, NULL, 'null', '2015-08-14 16:26:07', '2015-08-14 16:26:07'),
(29, 6, '2015-08-17', 1, NULL, NULL, 'He has problem with his wife.', '2015-08-17 09:16:19', '2015-08-17 09:16:19'),
(30, 5, '2015-08-06', 1, NULL, NULL, 'Family problem', '2015-08-18 14:55:45', '2015-08-18 14:55:45'),
(31, 12, '2015-08-07', 1, NULL, NULL, 'family problem', '2015-08-18 14:56:55', '2015-08-18 14:56:55'),
(32, 8, '2015-08-10', 1, NULL, NULL, 'Family problem', '2015-08-18 14:57:39', '2015-08-18 14:57:39'),
(33, 8, '2015-08-11', 1, NULL, NULL, 'Family problem', '2015-08-18 14:58:29', '2015-08-18 14:58:29'),
(34, 10, '2015-08-03', 2, '08:10:00', NULL, '', '2015-08-19 10:41:40', '2015-08-19 10:41:40'),
(35, 7, '2015-08-03', 2, '08:20:00', NULL, '', '2015-08-19 10:42:42', '2015-08-19 10:42:42'),
(36, 6, '2015-08-03', 2, '08:15:00', NULL, '', '2015-08-19 10:43:25', '2015-08-19 10:43:25'),
(37, 2, '2015-08-03', 2, '09:30:00', NULL, '', '2015-08-19 10:44:07', '2015-08-19 10:44:07'),
(38, 10, '2015-08-07', 2, '08:05:00', NULL, '', '2015-08-19 10:45:16', '2015-08-19 10:45:16'),
(39, 2, '2015-08-07', 2, '08:05:00', NULL, '', '2015-08-19 10:45:58', '2015-08-19 10:45:58'),
(40, 11, '2015-08-07', 2, '08:05:00', NULL, '', '2015-08-19 10:46:15', '2015-08-19 10:46:15'),
(41, 5, '2015-08-07', 2, '08:05:00', NULL, '', '2015-08-19 10:47:26', '2015-08-19 10:47:26'),
(42, 13, '2015-08-24', 1, NULL, NULL, 'Family Problem.', '2015-08-24 08:39:36', '2015-08-24 08:39:36'),
(43, 12, '2015-08-24', 1, NULL, NULL, 'Family Problem', '2015-08-24 12:17:42', '2015-08-24 12:17:42'),
(44, 10, '2015-08-28', 2, '08:25:00', NULL, '', '2015-08-28 09:30:59', '2015-08-28 09:30:59'),
(45, 10, '2015-08-31', 1, NULL, NULL, 'Family problem', '2015-08-31 08:17:51', '2015-08-31 08:17:51'),
(46, 7, '2015-09-08', 2, '08:10:00', NULL, '', '2015-09-08 08:30:26', '2015-09-08 08:30:26'),
(47, 10, '2015-09-09', 3, NULL, '12:00:00', 'Family Problem', '2015-09-09 09:59:59', '2015-09-09 09:59:59'),
(48, 6, '2015-09-11', 1, NULL, NULL, 'he was ill', '2015-09-11 09:22:39', '2015-09-11 09:22:39'),
(49, 13, '2015-09-14', 2, '09:00:00', NULL, 'I don''t know', '2015-09-14 10:50:48', '2015-09-14 10:50:48'),
(50, 11, '2015-09-14', 1, NULL, NULL, 'Sickness', '2015-09-14 10:51:05', '2015-09-14 10:51:05'),
(51, 2, '2015-09-14', 5, NULL, NULL, 'care of wife', '2015-09-14 10:51:28', '2015-09-14 10:51:28'),
(52, 10, '2015-09-17', 2, '08:10:00', '09:33:00', 'traffic jam', '2015-09-17 08:19:47', '2015-09-17 09:34:08'),
(53, 13, '2015-09-28', 2, '11:00:00', NULL, 'traffic jam', '2015-09-28 13:00:24', '2015-09-28 13:00:24'),
(54, 10, '2015-09-29', 2, '08:20:00', NULL, 'traffic jam', '2015-09-29 08:21:51', '2015-09-29 08:21:51'),
(55, 6, '2015-10-01', 2, '08:10:00', NULL, 'traffic jam', '2015-10-01 08:15:11', '2015-10-01 08:15:11'),
(56, 6, '2015-10-02', 2, '08:13:00', NULL, 'traffic jam', '2015-10-02 08:13:29', '2015-10-02 08:13:29'),
(57, 4, '2015-10-07', 2, '08:20:00', NULL, 'bring his father to hospital.', '2015-10-07 08:31:28', '2015-10-07 08:31:28'),
(58, 6, '2015-10-07', 1, NULL, NULL, 'sickness', '2015-10-07 08:32:42', '2015-10-07 08:32:42'),
(59, 3, '2015-10-08', 6, NULL, '21:00:00', 'Overtime work Sorya required', '2015-10-08 19:24:40', '2015-10-08 22:03:11'),
(60, 7, '2015-10-08', 6, NULL, '20:00:00', 'Overtime work Sorya required', '2015-10-08 19:24:56', '2015-10-08 22:03:30'),
(61, 8, '2015-10-08', 6, NULL, '22:30:00', 'Overtime work Sorya required', '2015-10-08 19:25:09', '2015-10-08 22:03:52'),
(62, 13, '2015-10-08', 6, NULL, '20:00:00', 'Overtime work Sorya required', '2015-10-08 22:04:22', '2015-10-08 22:04:22'),
(63, 10, '2015-10-23', 1, NULL, NULL, 'Family problem', '2015-10-23 08:27:40', '2015-10-23 08:27:40'),
(64, 5, '2015-10-26', 2, '08:20:00', NULL, 'traffic jam', '2015-10-26 08:34:17', '2015-10-26 08:34:17'),
(65, 6, '2015-10-26', 2, '08:20:00', NULL, 'traffic jam', '2015-10-26 08:34:42', '2015-10-26 08:34:42'),
(66, 3, '2015-10-28', 1, NULL, NULL, ' his sister sickness', '2015-10-28 07:12:09', '2015-10-28 07:12:09'),
(67, 4, '2015-10-29', 3, NULL, '12:00:00', 'Family problem', '2015-10-29 12:44:32', '2015-10-29 12:44:32'),
(68, 10, '2015-10-30', 1, NULL, NULL, 'sickness', '2015-10-30 08:30:19', '2015-10-30 08:30:19'),
(69, 8, '2015-10-31', 1, NULL, NULL, 'family problem', '2015-10-31 13:26:03', '2015-10-31 13:26:03'),
(70, 5, '2015-11-02', 1, NULL, NULL, 'sickness', '2015-11-03 07:52:04', '2015-11-03 07:52:04'),
(71, 6, '2015-11-03', 2, '08:15:00', NULL, '', '2015-11-03 08:17:29', '2015-11-03 08:17:29'),
(74, 10, '2015-11-03', 2, '08:50:00', NULL, 'own problem', '2015-11-03 08:53:17', '2015-11-03 08:53:17'),
(75, 10, '2015-11-04', 1, NULL, NULL, 'family problem', '2015-11-04 08:01:28', '2015-11-04 08:01:28'),
(76, 5, '2015-11-05', 2, '08:30:00', '10:43:00', 'traffic jam', '2015-11-05 10:43:04', '2015-11-05 10:43:34'),
(77, 7, '2015-11-06', 1, NULL, NULL, 'sickness', '2015-11-06 08:23:45', '2015-11-06 08:23:45'),
(78, 6, '2015-11-06', 2, '08:15:00', '08:24:00', 'traffic jam', '2015-11-06 08:24:24', '2015-11-06 08:24:57'),
(79, 8, '2015-11-10', 1, NULL, NULL, 'family problem', '2015-11-10 07:55:30', '2015-11-10 07:55:30'),
(80, 13, '2015-11-10', 2, '10:45:00', NULL, 'Own problem.', '2015-11-10 10:45:58', '2015-11-10 10:45:58'),
(81, 16, '2015-11-12', 1, NULL, NULL, 'sickness', '2015-11-12 13:04:44', '2015-11-12 13:04:44');

-- --------------------------------------------------------

--
-- テーブルの構造 `todo_lists`
--

CREATE TABLE IF NOT EXISTS `todo_lists` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `employee_id` int(11) NOT NULL,
  `priority_type_id` int(11) NOT NULL,
  `status_type_id` int(11) NOT NULL,
  `deadline` date DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `todo_list_id_UNIQUE` (`id`),
  KEY `priority_type_idx` (`priority_type_id`),
  KEY `status_type_idx` (`status_type_id`),
  KEY `employee_idx` (`employee_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1003 ;

--
-- テーブルのデータをダンプしています `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `user_role_id`, `user_img`, `employee_id`, `created`, `modified`) VALUES
(1, '000sorya', '271b157cc48af2cd67d2b1ffab4007cd5a5fa80b', 1, '000sorya.png', 1, '2015-08-13 16:55:00', '2015-08-13 16:55:00'),
(2, '001pidoar', 'bf1a54111650abae541a1956cbda97bad31fdd75', 2, '001pidoar.png', 2, '2015-08-14 12:58:43', '2015-08-14 12:58:43'),
(3, '002nang', '14296f0f02d4816cccd66a4c9b38786bdea1441d', 4, '002nang.png', 3, '2015-08-14 06:25:29', '2015-08-14 06:25:29'),
(4, '004liseak', '90369b2efd8b13d2de7a07af16d5419b0d231103', 4, '004liseak.png', 4, '2015-08-14 06:26:20', '2015-08-14 06:26:20'),
(5, '005sokea', 'bb6b39620e53cd05bc2b2d9c2f38d4cab690b72f', 4, '005sokea.png', 5, '2015-08-14 11:22:26', '2015-08-14 11:22:26'),
(6, '006smey', 'd04731410b58f69bbe2a231e429ae995f4e5c934', 4, '006smey.png', 6, '2015-08-14 06:28:34', '2015-08-14 06:28:34'),
(7, '007sovan', '216c623267b6b4c920b87ea79f376f4974f35aa7', 4, '007sovan.png', 7, '2015-08-14 06:29:03', '2015-08-14 06:29:03'),
(8, '008chhunlay', 'f9233c5fef15aa09611f9b57aa539961f167a48d', 4, '008chhunlay.png', 8, '2015-08-14 06:29:43', '2015-08-14 06:29:43'),
(10, '010seyma', '7a84e56bc78658f37da71e804601a7be615e9a9c', 4, '010seyma.png', 10, '2015-08-14 06:30:11', '2015-08-14 06:30:11'),
(11, '011khemra', '5914a558f49432a9879d61f9329b2836aa32568a', 4, '011khemra.png', 11, '2015-08-14 12:03:12', '2015-08-14 12:03:12'),
(12, '012sopheap', 'a177e6a6b2a5048e5f9c0b7a4c07cf59cfff5625', 4, '012sopheap.png', 12, '2015-08-14 12:03:43', '2015-08-14 12:03:43'),
(13, '013vesna', 'e454e96161d42f93ebd7f5dc64615089c2119a9d', 4, '013vesna.png', 13, '2015-08-14 12:04:13', '2015-08-14 12:04:13'),
(14, '014lida', 'fea33c5a7de9f61f47d14ea9393da27434fd304a', 4, '014lida.png', 14, '2015-10-01 06:51:03', '2015-10-01 06:51:03'),
(15, '015rithy', '1908107f8f6b595b7b29a7a831c2b4afbf13a6f9', 4, '015rithy.png', 15, '2015-11-05 18:21:59', '2015-11-05 18:21:59'),
(16, '016Chea', '93aaf5f6f33a8521accea2a9198cdf22c0c32854', 4, '016chea.png', 16, '2015-11-12 12:38:34', '2015-11-12 12:38:34'),
(997, 'sample', '4ba16abcb4e42456c000362160f5a8e10acf3a14', 6, 'default-user.png', NULL, '2015-08-14 16:43:12', '2015-08-14 16:43:12'),
(998, 'manager', '05fdec2a486b7cd656efb7189cb698ac81e5c609', 5, 'default-user.png', NULL, '2015-08-14 16:42:31', '2015-08-14 16:42:31'),
(999, 'gokuraku', '639f03a3457a695e84e62941f6a8f6de8318f1a2', 3, 'default-user.png', NULL, '2015-08-14 16:42:08', '2015-08-14 16:42:08');

-- --------------------------------------------------------

--
-- テーブルの構造 `user_roles`
--

CREATE TABLE IF NOT EXISTS `user_roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `role_UNIQUE` (`role`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- テーブルのデータをダンプしています `user_roles`
--

INSERT INTO `user_roles` (`id`, `role`, `created`, `modified`) VALUES
(1, 'Admin', '2015-07-23 10:11:38', '2015-07-23 10:11:38'),
(2, 'Mangetsu Manager', '2015-07-23 10:12:26', '2015-07-23 10:12:26'),
(3, 'Gokuraku', '2015-07-23 10:12:32', '2015-07-23 10:12:32'),
(4, 'Employee', '2015-07-23 10:12:38', '2015-07-23 10:12:38'),
(5, 'Managers', '2015-07-23 10:12:47', '2015-07-23 10:12:47'),
(6, 'Sample', '2015-07-23 10:12:53', '2015-07-23 10:12:53');

-- --------------------------------------------------------

--
-- テーブルの構造 `work_hours`
--

CREATE TABLE IF NOT EXISTS `work_hours` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `open_at` time NOT NULL,
  `close_at` time NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- ダンプしたテーブルの制約
--

--
-- テーブルの制約 `calendars`
--
ALTER TABLE `calendars`
  ADD CONSTRAINT `day_type_id` FOREIGN KEY (`day_type_id`) REFERENCES `day_types` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- テーブルの制約 `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `career` FOREIGN KEY (`career_id`) REFERENCES `careers` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- テーブルの制約 `goal_settings`
--
ALTER TABLE `goal_settings`
  ADD CONSTRAINT `goal_type_id` FOREIGN KEY (`goal_type_id`) REFERENCES `goal_types` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- テーブルの制約 `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `client_id` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `mosaic_size_id` FOREIGN KEY (`mosaic_size_id`) REFERENCES `mosaic_sizes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `mosaic_type_id` FOREIGN KEY (`mosaic_type_id`) REFERENCES `mosaic_types` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- テーブルの制約 `salaries`
--
ALTER TABLE `salaries`
  ADD CONSTRAINT `employeeid` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- テーブルの制約 `task_records`
--
ALTER TABLE `task_records`
  ADD CONSTRAINT `employee-id_idx` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `order_id` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- テーブルの制約 `time_cards`
--
ALTER TABLE `time_cards`
  ADD CONSTRAINT `employee_id` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `pay_cut_type_id` FOREIGN KEY (`pay_cut_type_id`) REFERENCES `pay_cut_types` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- テーブルの制約 `todo_lists`
--
ALTER TABLE `todo_lists`
  ADD CONSTRAINT `employee` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `priority_type` FOREIGN KEY (`priority_type_id`) REFERENCES `priority_types` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `status_type` FOREIGN KEY (`status_type_id`) REFERENCES `status_types` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- テーブルの制約 `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `user_employee` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `user_role_id` FOREIGN KEY (`user_role_id`) REFERENCES `user_roles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
