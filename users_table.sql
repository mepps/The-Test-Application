SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `users_table` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `users_table` ;

-- -----------------------------------------------------
-- Table `users_table`.`users`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `users_table`.`users` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `first_name` VARCHAR(225) NULL ,
  `last_name` VARCHAR(225) NULL ,
  `password` VARCHAR(45) NULL ,
  `email` VARCHAR(100) NULL ,
  `created_at` DATETIME NULL ,
  `updated_at` DATETIME NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;

USE `users_table` ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
