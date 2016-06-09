-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2015 年 8 朁E06 日 08:08
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
-- テーブルの構造 `acos`
--

CREATE TABLE IF NOT EXISTS `acos` (
`id` int(10) NOT NULL,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=125 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `acos`
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
`id` int(10) NOT NULL,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `aros`
--

INSERT INTO `aros` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, 'UserRole', 1, NULL, 1, 4),
(2, NULL, 'UserRole', 2, NULL, 5, 8),
(3, NULL, 'UserRole', 3, NULL, 9, 12),
(4, NULL, 'UserRole', 4, NULL, 13, 14),
(5, NULL, 'UserRole', 5, NULL, 15, 18),
(6, NULL, 'UserRole', 6, NULL, 19, 22),
(7, 1, 'User', 1, NULL, 2, 3),
(8, 3, 'User', 2, NULL, 10, 11),
(9, 5, 'User', 3, NULL, 16, 17),
(10, 6, 'User', 4, NULL, 20, 21),
(11, 2, 'User', 5, NULL, 6, 7);

-- --------------------------------------------------------

--
-- テーブルの構造 `aros_acos`
--

CREATE TABLE IF NOT EXISTS `aros_acos` (
`id` int(10) NOT NULL,
  `aro_id` int(10) NOT NULL,
  `aco_id` int(10) NOT NULL,
  `_create` varchar(2) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `_read` varchar(2) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `_update` varchar(2) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `_delete` varchar(2) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `aros_acos`
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
  `expires` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `cake_sessions`
--

INSERT INTO `cake_sessions` (`id`, `data`, `expires`) VALUES
('kunhe4nhgrh6c3rji44674l3c1', 'Config|a:3:{s:9:"userAgent";s:32:"9359e11f6fb63cf65d28bfca0ccf3b9b";s:4:"time";i:1444023963;s:9:"countdown";i:10;}Message|a:1:{s:4:"auth";a:3:{s:7:"message";s:47:"You are not authorized to access that location.";s:7:"element";s:7:"default";s:6:"params";a:0:{}}}Auth|a:1:{s:4:"User";a:7:{s:2:"id";s:1:"1";s:8:"username";s:5:"admin";s:12:"user_role_id";s:1:"1";s:8:"user_img";s:9:"admin.png";s:7:"created";s:19:"2015-07-23 10:12:58";s:8:"modified";s:19:"2015-07-23 10:12:58";s:8:"UserRole";a:4:{s:2:"id";s:1:"1";s:4:"role";s:5:"Admin";s:7:"created";s:19:"2015-07-23 10:11:38";s:8:"modified";s:19:"2015-07-23 10:11:38";}}}', 1444023963),
('o38gsq4vd2k229araunfmvh3q5', 'Config|a:3:{s:9:"userAgent";s:32:"b0f6f2282e475e77acd03339cc993856";s:4:"time";i:1444025291;s:9:"countdown";i:10;}Message|a:1:{s:4:"auth";a:3:{s:7:"message";s:47:"You are not authorized to access that location.";s:7:"element";s:7:"default";s:6:"params";a:0:{}}}Auth|a:1:{s:4:"User";a:7:{s:2:"id";s:1:"1";s:8:"username";s:5:"admin";s:12:"user_role_id";s:1:"1";s:8:"user_img";s:9:"admin.png";s:7:"created";s:19:"2015-07-23 10:12:58";s:8:"modified";s:19:"2015-07-23 10:12:58";s:8:"UserRole";a:4:{s:2:"id";s:1:"1";s:4:"role";s:5:"Admin";s:7:"created";s:19:"2015-07-23 10:11:38";s:8:"modified";s:19:"2015-07-23 10:11:38";}}}', 1444025292);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- テーブルの構造 `careers`
--

CREATE TABLE IF NOT EXISTS `careers` (
`id` int(11) NOT NULL,
  `career` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `basic_salary` int(11) NOT NULL,
  `hourly_wage` float DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `careers`
--

INSERT INTO `careers` (`id`, `career`, `basic_salary`, `hourly_wage`) VALUES
(1, 'manager', 300, 1.25),
(2, 'regular employee', 200, 0.825),
(3, 'internship', 160, 0.825);

-- --------------------------------------------------------

--
-- テーブルの構造 `clients`
--

CREATE TABLE IF NOT EXISTS `clients` (
`id` int(11) NOT NULL,
  `client` varchar(45) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `clients`
--

INSERT INTO `clients` (`id`, `client`) VALUES
(8, 'degital ark'),
(1, 'Gokuraku'),
(9, 'Japan Entertainment'),
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
`id` int(11) NOT NULL,
  `day_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `day_types`
--

INSERT INTO `day_types` (`id`, `day_type`) VALUES
(1, 'regular holiday'),
(2, 'public holiday'),
(3, 'compensatory holiday'),
(4, 'special holiday');

-- --------------------------------------------------------

--
-- テーブルの構造 `employees`
--

CREATE TABLE IF NOT EXISTS `employees` (
`id` int(11) NOT NULL,
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
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `employees`
--

INSERT INTO `employees` (`id`, `first_name`, `family_name`, `employee_no`, `sex`, `birthday`, `tel`, `address`, `occupation`, `career_id`, `employee_group_id`, `prof_img`, `start_date`, `terminated_date`, `memo`, `created`, `modified`) VALUES
(1, 'Sorya', 'Hikichi', '000Sorya', 'M', '1989-04-04', '015676792', '#41, St3, Sangkat Teuk Thla, Sensok, PP', 'CEO', 1, 1, '000sorya.png', '2014-10-20', NULL, NULL, '2015-07-29 09:20:00', '2015-07-29 09:20:00');

-- --------------------------------------------------------

--
-- テーブルの構造 `employee_groups`
--

CREATE TABLE IF NOT EXISTS `employee_groups` (
`id` int(11) NOT NULL,
  `employee_group` varchar(45) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `employee_groups`
--

INSERT INTO `employee_groups` (`id`, `employee_group`) VALUES
(1, '1'),
(2, '2');

-- --------------------------------------------------------

--
-- テーブルの構造 `goal_settings`
--

CREATE TABLE IF NOT EXISTS `goal_settings` (
`id` int(11) NOT NULL,
  `month` date NOT NULL,
  `goal_type_id` int(11) NOT NULL,
  `goal_value` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `goal_settings`
--

INSERT INTO `goal_settings` (`id`, `month`, `goal_type_id`, `goal_value`, `created`, `modified`) VALUES
(22, '2015-07-01', 1, 1200000, '2015-07-27 08:39:36', '2015-07-27 08:39:36'),
(23, '2015-07-01', 2, 150000, '2015-07-27 08:39:42', '2015-07-27 08:39:42'),
(24, '2015-07-01', 1, 1300000, '2015-07-30 14:00:41', '2015-07-30 14:00:41'),
(25, '2015-07-01', 1, 1200000, '2015-07-31 17:22:00', '2015-07-31 17:22:00'),
(26, '2015-08-01', 2, 150000, '2015-08-01 08:01:12', '2015-08-01 08:01:12'),
(27, '2015-08-01', 1, 1300000, '2015-08-01 08:01:27', '2015-08-01 08:01:27'),
(28, '2015-08-01', 1, 1300000, '2015-08-06 12:41:24', '2015-08-06 12:41:24');

-- --------------------------------------------------------

--
-- テーブルの構造 `goal_types`
--

CREATE TABLE IF NOT EXISTS `goal_types` (
`id` int(11) NOT NULL,
  `goal_type` varchar(45) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `goal_types`
--

INSERT INTO `goal_types` (`id`, `goal_type`) VALUES
(1, 'indivisual'),
(2, 'team');

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

-- --------------------------------------------------------

--
-- テーブルの構造 `mosaic_types`
--

CREATE TABLE IF NOT EXISTS `mosaic_types` (
`id` int(11) NOT NULL,
  `mosaic_type` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `note` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `mosaic_types`
--

INSERT INTO `mosaic_types` (`id`, `mosaic_type`, `note`, `created`, `modified`) VALUES
(1, 'normal', NULL, NULL, NULL),
(2, 'CS', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- テーブルの構造 `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
`id` int(11) NOT NULL,
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
  `worktime` int(11) DEFAULT NULL,
  `started` datetime DEFAULT NULL,
  `completed` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='			';

--
-- テーブルのデータのダンプ `orders`
--

INSERT INTO `orders` (`id`, `control_no`, `file_name`, `client_id`, `delivery_date`, `mosaic_type_id`, `mosaic_size_id`, `price`, `length`, `target_time`, `cut_count`, `multiplay`, `note`, `status_type_id`, `worktime`, `started`, `completed`, `created`, `modified`) VALUES
(4, '1111', '321312', 2, '2015-07-29', 1, 3, 3213421, 32, 432, NULL, NULL, '432432432432', 1, 24, NULL, '2015-07-30 00:00:00', '2015-07-28 00:00:00', '2015-07-28 00:00:00'),
(5, 'GK9999', 'ingosex', 1, '2015-08-04', 1, 4, 41040, 120, 20, NULL, NULL, 'がｇらヴぁあｆららｇｖふぁれｆヴぁｒふぁうぇふぁふぁふぁｆ', 1, 42, NULL, '2015-08-30 00:00:00', '2015-07-28 13:49:59', '2015-07-28 13:49:59'),
(6, 'GK0063', 'ucyu haruna', 5, '2015-07-06', 2, 3, 23121, 123, 20, NULL, NULL, 'test', 2, 48, NULL, '2015-08-03 00:00:00', '2015-07-29 01:18:56', '2015-07-31 13:40:26');

-- --------------------------------------------------------

--
-- テーブルの構造 `pay_cut_types`
--

CREATE TABLE IF NOT EXISTS `pay_cut_types` (
`id` int(11) NOT NULL,
  `type` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `pay_cut_types`
--

INSERT INTO `pay_cut_types` (`id`, `type`, `amount`) VALUES
(1, 'off', 7),
(2, 'late', 1),
(3, 'early leave', 1),
(4, 'no call off', 17),
(5, 'paid off', 0);

-- --------------------------------------------------------

--
-- テーブルの構造 `priority_types`
--

CREATE TABLE IF NOT EXISTS `priority_types` (
`id` int(11) NOT NULL,
  `priority` varchar(45) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- テーブルの構造 `status_types`
--

CREATE TABLE IF NOT EXISTS `status_types` (
`id` int(11) NOT NULL,
  `status` varchar(45) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `status_types`
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
`id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `edit_length` int(11) DEFAULT NULL,
  `edit_point` int(11) DEFAULT NULL,
  `clip_no` int(11) DEFAULT NULL,
  `clip_in` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `clip_out` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `overtime` int(11) DEFAULT NULL,
  `started` datetime DEFAULT NULL,
  `completed` datetime DEFAULT NULL,
  `worktime` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- テーブルの構造 `time_cards`
--

CREATE TABLE IF NOT EXISTS `time_cards` (
`id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `pay_cut_type_id` int(11) NOT NULL,
  `in_time` time DEFAULT NULL,
  `out_time` time DEFAULT NULL,
  `note` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- テーブルの構造 `todo_lists`
--

CREATE TABLE IF NOT EXISTS `todo_lists` (
`id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `employee_id` int(11) NOT NULL,
  `priority_type_id` int(11) NOT NULL,
  `status_type_id` int(11) NOT NULL,
  `deadline` date DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- テーブルの構造 `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `username` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_role_id` int(11) NOT NULL,
  `user_img` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `user_role_id`, `user_img`, `created`, `modified`) VALUES
(1, 'admin', '271b157cc48af2cd67d2b1ffab4007cd5a5fa80b', 1, '000sorya.png', '2015-07-23 10:12:58', '2015-07-23 10:12:58'),
(2, 'gokuraku', '639f03a3457a695e84e62941f6a8f6de8318f1a2', 3, 'default-user.png', '2015-07-23 10:13:10', '2015-07-23 10:13:10'),
(3, 'manager', '9d66d2ebe6b3717815d5315325848389908e4339', 5, 'default-user.png', '2015-07-23 10:15:09', '2015-07-23 10:15:09'),
(4, 'sample', '4ba16abcb4e42456c000362160f5a8e10acf3a14', 6, 'default-user.png', '2015-07-23 10:15:21', '2015-07-23 10:15:21'),
(5, 'mangetsu', '271b157cc48af2cd67d2b1ffab4007cd5a5fa80b', 2, '001pidoar.png', '2015-08-06 11:24:22', '2015-08-06 11:24:22');

-- --------------------------------------------------------

--
-- テーブルの構造 `user_roles`
--

CREATE TABLE IF NOT EXISTS `user_roles` (
`id` int(11) NOT NULL,
  `role` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `user_roles`
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
`id` int(11) NOT NULL,
  `name` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `open_at` time NOT NULL,
  `close_at` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acos`
--
ALTER TABLE `acos`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aros`
--
ALTER TABLE `aros`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aros_acos`
--
ALTER TABLE `aros_acos`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `ARO_ACO_KEY` (`aro_id`,`aco_id`);

--
-- Indexes for table `cake_sessions`
--
ALTER TABLE `cake_sessions`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `calendars`
--
ALTER TABLE `calendars`
 ADD PRIMARY KEY (`id`), ADD KEY `day_type_id_idx` (`day_type_id`);

--
-- Indexes for table `careers`
--
ALTER TABLE `careers`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id_UNIQUE` (`id`), ADD UNIQUE KEY `career_UNIQUE` (`career`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id_UNIQUE` (`id`), ADD UNIQUE KEY `client_UNIQUE` (`client`);

--
-- Indexes for table `day_types`
--
ALTER TABLE `day_types`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id_UNIQUE` (`id`), ADD UNIQUE KEY `employee_no_UNIQUE` (`employee_no`), ADD KEY `career_id` (`career_id`), ADD KEY `employee_group_id` (`employee_group_id`);

--
-- Indexes for table `employee_groups`
--
ALTER TABLE `employee_groups`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `employee_group_id_UNIQUE` (`id`);

--
-- Indexes for table `goal_settings`
--
ALTER TABLE `goal_settings`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `goal_setting_id_UNIQUE` (`id`), ADD KEY `goal_type_id_idx` (`goal_type_id`);

--
-- Indexes for table `goal_types`
--
ALTER TABLE `goal_types`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `goal_type_id_UNIQUE` (`id`);

--
-- Indexes for table `mosaic_sizes`
--
ALTER TABLE `mosaic_sizes`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- Indexes for table `mosaic_types`
--
ALTER TABLE `mosaic_types`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `mosaic_type_UNIQUE` (`mosaic_type`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id_UNIQUE` (`id`), ADD UNIQUE KEY `control_no_UNIQUE` (`control_no`), ADD KEY `mosaic_type_id` (`mosaic_type_id`), ADD KEY `mosaic_size_id` (`mosaic_size_id`), ADD KEY `status_id` (`status_type_id`), ADD KEY `client_id` (`client_id`), ADD KEY `control_no` (`control_no`);

--
-- Indexes for table `pay_cut_types`
--
ALTER TABLE `pay_cut_types`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id_UNIQUE` (`id`), ADD UNIQUE KEY `name_UNIQUE` (`type`);

--
-- Indexes for table `priority_types`
--
ALTER TABLE `priority_types`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `priority_type_id_UNIQUE` (`id`);

--
-- Indexes for table `status_types`
--
ALTER TABLE `status_types`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `status_type_id_UNIQUE` (`id`);

--
-- Indexes for table `task_records`
--
ALTER TABLE `task_records`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id_UNIQUE` (`id`), ADD KEY `control_no_idx` (`order_id`), ADD KEY `employee_id_idx` (`employee_id`);

--
-- Indexes for table `time_cards`
--
ALTER TABLE `time_cards`
 ADD PRIMARY KEY (`id`), ADD KEY `pay_cut_type_id_idx` (`pay_cut_type_id`), ADD KEY `employee_id` (`employee_id`);

--
-- Indexes for table `todo_lists`
--
ALTER TABLE `todo_lists`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `todo_list_id_UNIQUE` (`id`), ADD KEY `priority_type_idx` (`priority_type_id`), ADD KEY `status_type_idx` (`status_type_id`), ADD KEY `employee_idx` (`employee_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id_UNIQUE` (`id`), ADD UNIQUE KEY `username_UNIQUE` (`username`), ADD KEY `user_role_id` (`user_role_id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id_UNIQUE` (`id`), ADD UNIQUE KEY `role_UNIQUE` (`role`);

--
-- Indexes for table `work_hours`
--
ALTER TABLE `work_hours`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id_UNIQUE` (`id`), ADD UNIQUE KEY `name_UNIQUE` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acos`
--
ALTER TABLE `acos`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=125;
--
-- AUTO_INCREMENT for table `aros`
--
ALTER TABLE `aros`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `aros_acos`
--
ALTER TABLE `aros_acos`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `calendars`
--
ALTER TABLE `calendars`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `careers`
--
ALTER TABLE `careers`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `day_types`
--
ALTER TABLE `day_types`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `employee_groups`
--
ALTER TABLE `employee_groups`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `goal_settings`
--
ALTER TABLE `goal_settings`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `goal_types`
--
ALTER TABLE `goal_types`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `mosaic_sizes`
--
ALTER TABLE `mosaic_sizes`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `mosaic_types`
--
ALTER TABLE `mosaic_types`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `pay_cut_types`
--
ALTER TABLE `pay_cut_types`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `priority_types`
--
ALTER TABLE `priority_types`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `status_types`
--
ALTER TABLE `status_types`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `task_records`
--
ALTER TABLE `task_records`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `time_cards`
--
ALTER TABLE `time_cards`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `todo_lists`
--
ALTER TABLE `todo_lists`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `work_hours`
--
ALTER TABLE `work_hours`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
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
ADD CONSTRAINT `user_role_id` FOREIGN KEY (`user_role_id`) REFERENCES `user_roles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
