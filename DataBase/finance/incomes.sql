-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016 年 2 朁E16 日 09:04
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
-- テーブルの構造 `incomes`
--

CREATE TABLE IF NOT EXISTS `incomes` (
`id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `project_id` int(11) DEFAULT NULL,
  `income_item_id` int(11) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `budget_type_id` int(11) DEFAULT NULL,
  `currency_id` int(11) DEFAULT NULL,
  `payer_id` int(11) DEFAULT NULL,
  `note` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `incomes`
--
ALTER TABLE `incomes`
 ADD PRIMARY KEY (`id`), ADD KEY `project_idx` (`project_id`), ADD KEY `income_item_idx` (`income_item_id`), ADD KEY `budget_type_idx` (`budget_type_id`), ADD KEY `currency_idx` (`currency_id`), ADD KEY `payer_idx` (`payer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `incomes`
--
ALTER TABLE `incomes`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- ダンプしたテーブルの制約
--

--
-- テーブルの制約 `incomes`
--
ALTER TABLE `incomes`
ADD CONSTRAINT `income_budget_type` FOREIGN KEY (`budget_type_id`) REFERENCES `budget_types` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `income_currency` FOREIGN KEY (`currency_id`) REFERENCES `currencies` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `income_item` FOREIGN KEY (`income_item_id`) REFERENCES `income_items` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `income_project` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `payer` FOREIGN KEY (`payer_id`) REFERENCES `payers` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
