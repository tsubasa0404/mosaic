-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2015 年 8 朁E13 日 11:28
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

-- --------------------------------------------------------

--
-- テーブルの構造 `cake_sessions`
--

CREATE TABLE IF NOT EXISTS `cake_sessions` (
  `id` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `data` text COLLATE utf8_unicode_ci NOT NULL,
  `expires` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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

-- --------------------------------------------------------

--
-- テーブルの構造 `clients`
--

CREATE TABLE IF NOT EXISTS `clients` (
`id` int(11) NOT NULL,
  `client` varchar(45) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- テーブルの構造 `day_types`
--

CREATE TABLE IF NOT EXISTS `day_types` (
`id` int(11) NOT NULL,
  `day_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- テーブルの構造 `employee_groups`
--

CREATE TABLE IF NOT EXISTS `employee_groups` (
`id` int(11) NOT NULL,
  `employee_group` varchar(45) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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

-- --------------------------------------------------------

--
-- テーブルの構造 `goal_types`
--

CREATE TABLE IF NOT EXISTS `goal_types` (
`id` int(11) NOT NULL,
  `goal_type` varchar(45) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
  `worktime` float DEFAULT NULL,
  `started` datetime DEFAULT NULL,
  `completed` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=192 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='			';

-- --------------------------------------------------------

--
-- テーブルの構造 `pay_cut_types`
--

CREATE TABLE IF NOT EXISTS `pay_cut_types` (
`id` int(11) NOT NULL,
  `type` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
  `overtime` float DEFAULT NULL,
  `started` datetime DEFAULT NULL,
  `completed` datetime DEFAULT NULL,
  `worktime` float DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
  `employee_id` int(11) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id_UNIQUE` (`id`), ADD UNIQUE KEY `username_UNIQUE` (`username`), ADD KEY `user_role_id` (`user_role_id`), ADD KEY `employee_id` (`employee_id`);

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
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=78;
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
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
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
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=192;
--
-- AUTO_INCREMENT for table `pay_cut_types`
--
ALTER TABLE `pay_cut_types`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
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
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `time_cards`
--
ALTER TABLE `time_cards`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
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
ADD CONSTRAINT `user_employee` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `user_role_id` FOREIGN KEY (`user_role_id`) REFERENCES `user_roles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
