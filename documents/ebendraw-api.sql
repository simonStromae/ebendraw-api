-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema ebendraw-api
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema ebendraw-api
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `ebendraw-api` DEFAULT CHARACTER SET utf8 ;
USE `ebendraw-api` ;

-- -----------------------------------------------------
-- Table `ebendraw-api`.`roles`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ebendraw-api`.`roles` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NULL,
  `description` VARCHAR(255) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ebendraw-api`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ebendraw-api`.`users` (
  `id` BIGINT(20) NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(45) NULL,
  `password` VARCHAR(255) NULL,
  `name` VARCHAR(45) NULL,
  `avatar` VARCHAR(45) NULL,
  `email` VARCHAR(255) NULL,
  `role_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_users_roles_idx` (`role_id` ASC),
  CONSTRAINT `fk_users_roles`
    FOREIGN KEY (`role_id`)
    REFERENCES `ebendraw-api`.`roles` (`id`)
    ON DELETE NO ACTION
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ebendraw-api`.`illustrations`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ebendraw-api`.`illustrations` (
  `id` BIGINT(20) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NULL,
  `description` VARCHAR(255) NULL,
  `svg` VARCHAR(255) NULL,
  `user_id` BIGINT(20) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_illustrations_users1_idx` (`user_id` ASC),
  CONSTRAINT `fk_illustrations_users`
    FOREIGN KEY (`user_id`)
    REFERENCES `ebendraw-api`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ebendraw-api`.`tags`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ebendraw-api`.`tags` (
  `id` BIGINT(20) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ebendraw-api`.`patterns`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ebendraw-api`.`patterns` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NULL,
  `description` VARCHAR(255) NULL,
  `svg` VARCHAR(255) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ebendraw-api`.`illustration_tag`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ebendraw-api`.`illustration_tag` (
  `illustration_id` BIGINT(20) NOT NULL,
  `tag_id` BIGINT(20) NOT NULL,
  PRIMARY KEY (`illustration_id`, `tag_id`),
  INDEX `fk_illustrations_has_tags_tags1_idx` (`tag_id` ASC),
  INDEX `fk_illustrations_has_tags_illustrations1_idx` (`illustration_id` ASC),
  CONSTRAINT `fk_illustration_tag_illustrations`
    FOREIGN KEY (`illustration_id`)
    REFERENCES `ebendraw-api`.`illustrations` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_illustration_tag_tags`
    FOREIGN KEY (`tag_id`)
    REFERENCES `ebendraw-api`.`tags` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ebendraw-api`.`pattern_tag`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ebendraw-api`.`pattern_tag` (
  `pattern_id` INT NOT NULL AUTO_INCREMENT,
  `tag_id` BIGINT(20) NOT NULL,
  PRIMARY KEY (`pattern_id`, `tag_id`),
  INDEX `fk_patterns_has_tags_tags1_idx` (`tag_id` ASC),
  INDEX `fk_patterns_has_tags_patterns1_idx` (`pattern_id` ASC),
  CONSTRAINT `fk_pattern_tag_patterns`
    FOREIGN KEY (`pattern_id`)
    REFERENCES `ebendraw-api`.`patterns` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_pattern_tag_tags`
    FOREIGN KEY (`tag_id`)
    REFERENCES `ebendraw-api`.`tags` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
