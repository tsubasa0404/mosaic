-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema mosaicdb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mosaicdb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mosaicdb` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ;
USE `mosaicdb` ;

-- -----------------------------------------------------
-- Table `mosaicdb`.`user_roles`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mosaicdb`.`user_roles` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `role` VARCHAR(45) NOT NULL COMMENT '',
  `created` DATETIME NOT NULL COMMENT '',
  `modified` DATETIME NULL COMMENT '',
  UNIQUE INDEX `id_UNIQUE` (`id` ASC)  COMMENT '',
  UNIQUE INDEX `role_UNIQUE` (`role` ASC)  COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mosaicdb`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mosaicdb`.`users` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `username` VARCHAR(45) NOT NULL COMMENT '',
  `password` VARCHAR(255) NOT NULL COMMENT '',
  `user_role_id` INT NOT NULL COMMENT '',
  `created` DATETIME NOT NULL COMMENT '',
  `modified` DATETIME NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  UNIQUE INDEX `id_UNIQUE` (`id` ASC)  COMMENT '',
  UNIQUE INDEX `username_UNIQUE` (`username` ASC)  COMMENT '',
  INDEX `user_role_id` (`user_role_id` ASC)  COMMENT '',
  CONSTRAINT `user_role_id`
    FOREIGN KEY (`user_role_id`)
    REFERENCES `mosaicdb`.`user_roles` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mosaicdb`.`careers`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mosaicdb`.`careers` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `career` VARCHAR(45) NOT NULL COMMENT '',
  `basic_salary` TINYINT NOT NULL COMMENT '',
  `hourly_wage` TINYINT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  UNIQUE INDEX `id_UNIQUE` (`id` ASC)  COMMENT '',
  UNIQUE INDEX `career_UNIQUE` (`career` ASC)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mosaicdb`.`employee_groups`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mosaicdb`.`employee_groups` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `employee_group` VARCHAR(45) NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  UNIQUE INDEX `employee_group_id_UNIQUE` (`id` ASC)  COMMENT '',
  UNIQUE INDEX `employee_group_UNIQUE` (`employee_group` ASC)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mosaicdb`.`employees`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mosaicdb`.`employees` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `first_name` VARCHAR(45) NOT NULL COMMENT '',
  `family_name` VARCHAR(45) NOT NULL COMMENT '',
  `employee_no` VARCHAR(45) NOT NULL COMMENT '',
  `sex` CHAR(1) NOT NULL COMMENT '',
  `birthday` DATE NOT NULL COMMENT '',
  `tel` VARCHAR(45) NULL COMMENT '',
  `address` VARCHAR(45) NULL COMMENT '',
  `occupation` VARCHAR(45) NULL COMMENT '',
  `career_id` INT NOT NULL COMMENT '',
  `employee_group_id` INT NULL DEFAULT 0 COMMENT '',
  `prof_img` VARCHAR(45) NULL COMMENT '',
  `start_date` DATE NULL COMMENT '',
  `terminated_date` DATE NULL COMMENT '',
  `memo` VARCHAR(255) NULL COMMENT '',
  `created` DATETIME NULL COMMENT '',
  `modified` DATETIME NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  UNIQUE INDEX `id_UNIQUE` (`id` ASC)  COMMENT '',
  UNIQUE INDEX `employee_no_UNIQUE` (`employee_no` ASC)  COMMENT '',
  INDEX `career_id` (`career_id` ASC)  COMMENT '',
  INDEX `employee_group_id_idx` (`employee_group_id` ASC)  COMMENT '',
  CONSTRAINT `career_id`
    FOREIGN KEY (`career_id`)
    REFERENCES `mosaicdb`.`careers` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `employee_group_id`
    FOREIGN KEY (`employee_group_id`)
    REFERENCES `mosaicdb`.`employee_groups` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mosaicdb`.`clients`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mosaicdb`.`clients` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `client` VARCHAR(45) NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  UNIQUE INDEX `id_UNIQUE` (`id` ASC)  COMMENT '',
  UNIQUE INDEX `client_UNIQUE` (`client` ASC)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mosaicdb`.`mosaic_types`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mosaicdb`.`mosaic_types` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `mosaic_type` VARCHAR(45) NOT NULL COMMENT '',
  `note` VARCHAR(255) NULL COMMENT '',
  `created` DATETIME NULL COMMENT '',
  `modified` DATETIME NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  UNIQUE INDEX `mosaic_type_UNIQUE` (`mosaic_type` ASC)  COMMENT '',
  UNIQUE INDEX `mosaic_type_id_UNIQUE` (`id` ASC)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mosaicdb`.`mosaic_sizes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mosaicdb`.`mosaic_sizes` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `mosaic_size` VARCHAR(10) NOT NULL COMMENT '',
  `note` VARCHAR(255) NULL COMMENT '',
  `created` DATETIME NULL COMMENT '',
  `modified` DATETIME NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  UNIQUE INDEX `id_UNIQUE` (`id` ASC)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mosaicdb`.`status_types`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mosaicdb`.`status_types` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `status` VARCHAR(45) NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  UNIQUE INDEX `status_type_id_UNIQUE` (`id` ASC)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mosaicdb`.`orders`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mosaicdb`.`orders` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `control_no` VARCHAR(45) NOT NULL COMMENT '',
  `file_name` VARCHAR(45) NOT NULL COMMENT '',
  `client_id` INT NOT NULL COMMENT '',
  `delivery_date` DATE NOT NULL COMMENT '',
  `mosaic_type_id` INT NOT NULL COMMENT '',
  `mosaic_size_id` INT NOT NULL COMMENT '',
  `price` INT NOT NULL COMMENT '',
  `length` INT NOT NULL COMMENT '',
  `target_time` INT NULL COMMENT '',
  `cut_count` INT NULL COMMENT '',
  `multiplay` INT NULL COMMENT '',
  `note` VARCHAR(255) NULL COMMENT '',
  `status_type_id` INT NULL COMMENT '',
  `created` DATETIME NULL COMMENT '',
  `modified` DATETIME NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  UNIQUE INDEX `id_UNIQUE` (`id` ASC)  COMMENT '',
  UNIQUE INDEX `control_no_UNIQUE` (`control_no` ASC)  COMMENT '',
  INDEX `mosaic_type_id` (`mosaic_type_id` ASC)  COMMENT '',
  INDEX `mosaic_size_id` (`mosaic_size_id` ASC)  COMMENT '',
  INDEX `status_type_id` (`status_type_id` ASC)  COMMENT '',
  INDEX `client_id` (`client_id` ASC)  COMMENT '',
  INDEX `control_no` (`control_no` ASC)  COMMENT '',
  CONSTRAINT `client_id`
    FOREIGN KEY (`client_id`)
    REFERENCES `mosaicdb`.`clients` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `mosaic_type_id`
    FOREIGN KEY (`mosaic_type_id`)
    REFERENCES `mosaicdb`.`mosaic_types` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `mosaic_size_id`
    FOREIGN KEY (`mosaic_size_id`)
    REFERENCES `mosaicdb`.`mosaic_sizes` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `status_type_id`
    FOREIGN KEY (`status_type_id`)
    REFERENCES `mosaicdb`.`status_types` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
COMMENT = '     ';


-- -----------------------------------------------------
-- Table `mosaicdb`.`task_records`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mosaicdb`.`task_records` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `order_id` INT NOT NULL COMMENT '',
  `clip_no` TINYINT NOT NULL COMMENT '',
  `employee_id` INT NOT NULL COMMENT '',
  `edit_length` TINYINT NULL COMMENT '',
  `clip_in` VARCHAR(45) NULL COMMENT '',
  `clip_out` VARCHAR(45) NULL COMMENT '',
  `overtime` TINYINT NULL COMMENT '',
  `started` DATETIME NULL COMMENT '',
  `completed` DATETIME NULL COMMENT '',
  `created` DATETIME NULL COMMENT '',
  `modified` DATETIME NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  UNIQUE INDEX `id_UNIQUE` (`id` ASC)  COMMENT '',
  INDEX `control_no_idx` (`order_id` ASC)  COMMENT '',
  INDEX `employee_id_idx` (`employee_id` ASC)  COMMENT '',
  CONSTRAINT `order_id`
    FOREIGN KEY (`order_id`)
    REFERENCES `mosaicdb`.`orders` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `employee_id`
    FOREIGN KEY (`employee_id`)
    REFERENCES `mosaicdb`.`employees` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mosaicdb`.`day_types`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mosaicdb`.`day_types` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `day_type` VARCHAR(255) NOT NULL COMMENT '',
  `created` DATETIME NULL COMMENT '',
  `modified` DATETIME NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  UNIQUE INDEX `id_UNIQUE` (`id` ASC)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mosaicdb`.`calendars`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mosaicdb`.`calendars` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `title` VARCHAR(255) NOT NULL COMMENT '',
  `allday` TINYINT NOT NULL DEFAULT 1 COMMENT '',
  `start` DATETIME NOT NULL COMMENT '',
  `day_type_id` INT NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `day_type_id_idx` (`day_type_id` ASC)  COMMENT '',
  UNIQUE INDEX `calendar_id_UNIQUE` (`id` ASC)  COMMENT '',
  CONSTRAINT `day_type_id`
    FOREIGN KEY (`day_type_id`)
    REFERENCES `mosaicdb`.`day_types` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mosaicdb`.`work_hours`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mosaicdb`.`work_hours` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `name` VARCHAR(45) NOT NULL COMMENT '',
  `open_at` TIME NOT NULL COMMENT '',
  `close_at` TIME NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  UNIQUE INDEX `id_UNIQUE` (`id` ASC)  COMMENT '',
  UNIQUE INDEX `name_UNIQUE` (`name` ASC)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mosaicdb`.`pay_cut_types`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mosaicdb`.`pay_cut_types` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `type` VARCHAR(45) NOT NULL COMMENT '',
  `amount` INT NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  UNIQUE INDEX `id_UNIQUE` (`id` ASC)  COMMENT '',
  UNIQUE INDEX `name_UNIQUE` (`type` ASC)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mosaicdb`.`time_cards`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mosaicdb`.`time_cards` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `employee_id` INT NOT NULL COMMENT '',
  `date` DATE NOT NULL COMMENT '',
  `pay_cut_type_id` INT NOT NULL COMMENT '',
  `in_time` DATETIME NULL COMMENT '',
  `out_time` DATETIME NULL COMMENT '',
  `note` VARCHAR(255) NULL COMMENT '',
  `created` DATETIME NULL COMMENT '',
  `modified` DATETIME NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `pay_cut_type_id_idx` (`pay_cut_type_id` ASC)  COMMENT '',
  INDEX `staff_id_idx` (`employee_id` ASC)  COMMENT '',
  UNIQUE INDEX `time_card_id_UNIQUE` (`id` ASC)  COMMENT '',
  CONSTRAINT `pay_cut_type_id`
    FOREIGN KEY (`pay_cut_type_id`)
    REFERENCES `mosaicdb`.`pay_cut_types` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `employee_id`
    FOREIGN KEY (`employee_id`)
    REFERENCES `mosaicdb`.`employees` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mosaicdb`.`priority_types`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mosaicdb`.`priority_types` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `priority` VARCHAR(45) NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  UNIQUE INDEX `priority_type_id_UNIQUE` (`id` ASC)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mosaicdb`.`todo_lists`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mosaicdb`.`todo_lists` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `title` VARCHAR(255) NOT NULL COMMENT '',
  `employee_id` INT NOT NULL COMMENT '',
  `priority_type_id` INT NOT NULL COMMENT '',
  `status_type_id` INT NOT NULL COMMENT '',
  `deadline` DATE NULL COMMENT '',
  `created` DATETIME NULL COMMENT '',
  `modified` DATETIME NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  UNIQUE INDEX `todo_list_id_UNIQUE` (`id` ASC)  COMMENT '',
  INDEX `priority_type_idx` (`priority_type_id` ASC)  COMMENT '',
  INDEX `status_type_idx` (`status_type_id` ASC)  COMMENT '',
  INDEX `employee_idx` (`employee_id` ASC)  COMMENT '',
  CONSTRAINT `priority_type`
    FOREIGN KEY (`priority_type_id`)
    REFERENCES `mosaicdb`.`priority_types` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `status_type`
    FOREIGN KEY (`status_type_id`)
    REFERENCES `mosaicdb`.`status_types` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `employee`
    FOREIGN KEY (`employee_id`)
    REFERENCES `mosaicdb`.`employees` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mosaicdb`.`goal_types`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mosaicdb`.`goal_types` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `goal_type` VARCHAR(45) NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  UNIQUE INDEX `goal_type_id_UNIQUE` (`id` ASC)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mosaicdb`.`goal_settings`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mosaicdb`.`goal_settings` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `month` DATE NOT NULL COMMENT '',
  `goal_type_id` INT NOT NULL COMMENT '',
  `goal_value` INT NULL COMMENT '',
  `created` DATETIME NULL COMMENT '',
  `modified` DATETIME NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  UNIQUE INDEX `goal_setting_id_UNIQUE` (`id` ASC)  COMMENT '',
  INDEX `goal_type_id_idx` (`goal_type_id` ASC)  COMMENT '',
  CONSTRAINT `goal_type_id`
    FOREIGN KEY (`goal_type_id`)
    REFERENCES `mosaicdb`.`goal_types` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mosaicdb`.`acos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mosaicdb`.`acos` (
  `id` INT(10) NOT NULL AUTO_INCREMENT COMMENT '',
  `parent_id` INT(10) NULL DEFAULT NULL COMMENT '',
  `model` VARCHAR(255) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NULL DEFAULT NULL COMMENT '',
  `foreign_key` INT(10) NULL DEFAULT NULL COMMENT '',
  `alias` VARCHAR(255) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NULL DEFAULT NULL COMMENT '',
  `lft` INT(10) NULL DEFAULT NULL COMMENT '',
  `rght` INT(10) NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB
AUTO_INCREMENT = 26
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci;


-- -----------------------------------------------------
-- Table `mosaicdb`.`aros`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mosaicdb`.`aros` (
  `id` INT(10) NOT NULL AUTO_INCREMENT COMMENT '',
  `parent_id` INT(10) NULL DEFAULT NULL COMMENT '',
  `model` VARCHAR(255) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NULL DEFAULT NULL COMMENT '',
  `foreign_key` INT(10) NULL DEFAULT NULL COMMENT '',
  `alias` VARCHAR(255) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NULL DEFAULT NULL COMMENT '',
  `lft` INT(10) NULL DEFAULT NULL COMMENT '',
  `rght` INT(10) NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB
AUTO_INCREMENT = 12
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci;


-- -----------------------------------------------------
-- Table `mosaicdb`.`aros_acos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mosaicdb`.`aros_acos` (
  `id` INT(10) NOT NULL AUTO_INCREMENT COMMENT '',
  `aro_id` INT(10) NOT NULL COMMENT '',
  `aco_id` INT(10) NOT NULL COMMENT '',
  `_create` VARCHAR(2) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NOT NULL DEFAULT '0' COMMENT '',
  `_read` VARCHAR(2) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NOT NULL DEFAULT '0' COMMENT '',
  `_update` VARCHAR(2) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NOT NULL DEFAULT '0' COMMENT '',
  `_delete` VARCHAR(2) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NOT NULL DEFAULT '0' COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  UNIQUE INDEX `ARO_ACO_KEY` (`aro_id` ASC, `aco_id` ASC)  COMMENT '')
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci;


-- -----------------------------------------------------
-- Table `mosaicdb`.`cake_sessions`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mosaicdb`.`cake_sessions` (
  `id` VARCHAR(255) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NOT NULL DEFAULT '' COMMENT '',
  `data` TEXT CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NOT NULL COMMENT '',
  `expires` INT(11) NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci;


-- -----------------------------------------------------
-- Table `mosaicdb`.`staffs`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mosaicdb`.`staffs` (
  `id` INT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  `first_name` VARCHAR(45) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NOT NULL COMMENT '',
  `family_name` VARCHAR(45) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NOT NULL COMMENT '',
  `employee_no` VARCHAR(45) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NOT NULL COMMENT '',
  `sex` CHAR(1) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NOT NULL COMMENT '',
  `birthday` DATE NOT NULL COMMENT '',
  `tel` VARCHAR(45) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NULL DEFAULT NULL COMMENT '',
  `address` VARCHAR(45) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NULL DEFAULT NULL COMMENT '',
  `occupation` VARCHAR(45) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NULL DEFAULT NULL COMMENT '',
  `career_id` INT(11) NOT NULL COMMENT '',
  `start_date` DATE NULL DEFAULT NULL COMMENT '',
  `terminated` DATE NULL DEFAULT NULL COMMENT '',
  `memo` VARCHAR(255) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NULL DEFAULT NULL COMMENT '',
  `created` DATETIME NULL DEFAULT NULL COMMENT '',
  `modified` DATETIME NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  UNIQUE INDEX `id_UNIQUE` (`id` ASC)  COMMENT '',
  UNIQUE INDEX `employee_no_UNIQUE` (`employee_no` ASC)  COMMENT '',
  INDEX `career_id` (`career_id` ASC)  COMMENT '',
  CONSTRAINT `career_id`
    FOREIGN KEY (`career_id`)
    REFERENCES `mosaicdb`.`careers` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci;


-- -----------------------------------------------------
-- Table `mosaicdb`.`projects`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mosaicdb`.`projects` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `project` VARCHAR(45) NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mosaicdb`.`expense_items`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mosaicdb`.`expense_items` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `item` VARCHAR(45) NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mosaicdb`.`expense_types`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mosaicdb`.`expense_types` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `type` VARCHAR(45) NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mosaicdb`.`budget_types`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mosaicdb`.`budget_types` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `type` VARCHAR(45) NULL COMMENT '',
  `note` VARCHAR(45) NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mosaicdb`.`currencies`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mosaicdb`.`currencies` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `currency` VARCHAR(45) NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mosaicdb`.`expenses`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mosaicdb`.`expenses` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `date` DATE NULL COMMENT '',
  `project_id` INT NULL COMMENT '',
  `expense_item_id` INT NULL COMMENT '',
  `expense_type_id` INT NULL COMMENT '',
  `price` FLOAT NULL COMMENT '',
  `budget_type_id` INT NULL COMMENT '',
  `currency_id` INT NULL COMMENT '',
  `note` VARCHAR(45) NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `project_idx` (`project_id` ASC)  COMMENT '',
  INDEX `item_idx` (`expense_item_id` ASC)  COMMENT '',
  INDEX `expense_type_idx` (`expense_type_id` ASC)  COMMENT '',
  INDEX `budget_type_idx` (`budget_type_id` ASC)  COMMENT '',
  INDEX `currency_idx` (`currency_id` ASC)  COMMENT '',
  CONSTRAINT `project`
    FOREIGN KEY (`project_id`)
    REFERENCES `mosaicdb`.`projects` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `item`
    FOREIGN KEY (`expense_item_id`)
    REFERENCES `mosaicdb`.`expense_items` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `expense_type`
    FOREIGN KEY (`expense_type_id`)
    REFERENCES `mosaicdb`.`expense_types` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `budget_type`
    FOREIGN KEY (`budget_type_id`)
    REFERENCES `mosaicdb`.`budget_types` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `currency`
    FOREIGN KEY (`currency_id`)
    REFERENCES `mosaicdb`.`currencies` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mosaicdb`.`income_items`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mosaicdb`.`income_items` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `income_item` VARCHAR(45) NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mosaicdb`.`payers`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mosaicdb`.`payers` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `payer` VARCHAR(45) NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mosaicdb`.`incomes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mosaicdb`.`incomes` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `date` DATE NULL COMMENT '',
  `project_id` INT NULL COMMENT '',
  `income_item_id` INT NULL COMMENT '',
  `price` FLOAT NULL COMMENT '',
  `budget_type_id` INT NULL COMMENT '',
  `currency_id` INT NULL COMMENT '',
  `payer_id` INT NULL COMMENT '',
  `note` VARCHAR(45) NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `project_idx` (`project_id` ASC)  COMMENT '',
  INDEX `income_item_idx` (`income_item_id` ASC)  COMMENT '',
  INDEX `budget_type_idx` (`budget_type_id` ASC)  COMMENT '',
  INDEX `currency_idx` (`currency_id` ASC)  COMMENT '',
  INDEX `payer_idx` (`payer_id` ASC)  COMMENT '',
  CONSTRAINT `income_project`
    FOREIGN KEY (`project_id`)
    REFERENCES `mosaicdb`.`projects` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `income_item`
    FOREIGN KEY (`income_item_id`)
    REFERENCES `mosaicdb`.`income_items` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `income_budget_type`
    FOREIGN KEY (`budget_type_id`)
    REFERENCES `mosaicdb`.`budget_types` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `income_currency`
    FOREIGN KEY (`currency_id`)
    REFERENCES `mosaicdb`.`currencies` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `payer`
    FOREIGN KEY (`payer_id`)
    REFERENCES `mosaicdb`.`payers` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
