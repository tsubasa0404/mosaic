-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2015 年 8 朁E13 日 11:52
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acos`
--
ALTER TABLE `acos`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acos`
--
ALTER TABLE `acos`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=125;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
