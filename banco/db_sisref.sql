-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema db_sisref
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `db_sisref` ;

-- -----------------------------------------------------
-- Schema db_sisref
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `db_sisref` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `db_sisref` ;

-- -----------------------------------------------------
-- Table `db_sisref`.`tb_user`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `db_sisref`.`tb_user` ;

CREATE TABLE IF NOT EXISTS `db_sisref`.`tb_user` (
  `id_user` INT NOT NULL AUTO_INCREMENT,
  `name_user` VARCHAR(100) NOT NULL,
  `password_user` VARCHAR(20) NOT NULL,
  `family_name_user` VARCHAR(100) NOT NULL,
  `email_user` VARCHAR(150) NOT NULL,
  `date_user` DATE NULL,
  PRIMARY KEY (`id_user`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_sisref`.`tb_admin`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `db_sisref`.`tb_admin` ;

CREATE TABLE IF NOT EXISTS `db_sisref`.`tb_admin` (
  `id_admin` INT NOT NULL,
  `name_admin` VARCHAR(80) NOT NULL,
  `email_admin` VARCHAR(150) NOT NULL,
  `password_admin` VARCHAR(20) NOT NULL,
  `family_name_admin` VARCHAR(80) NOT NULL,
  `date_admin` DATE NULL,
  PRIMARY KEY (`id_admin`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_sisref`.`tb_recipes`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `db_sisref`.`tb_recipes` ;

CREATE TABLE IF NOT EXISTS `db_sisref`.`tb_recipes` (
  `id_recipe` INT NOT NULL AUTO_INCREMENT,
  `title_recipe` VARCHAR(80) NOT NULL,
  `category_recipe` VARCHAR(80) NOT NULL,
  `ingredients_recipe` VARCHAR(250) NOT NULL,
  `txt_recipe` VARCHAR(1100) NOT NULL,
  `nationality_recipe` VARCHAR(80) NULL,
  `difficulty_recipe` INT NULL,
  `comment_recipe` VARCHAR(500) NULL,
  `cod_users` INT NOT NULL,
  `cod_admin` INT NOT NULL,
  PRIMARY KEY (`id_recipe`),
  INDEX `fk_tb_recipes_tb_user_idx` (`cod_users` ASC),
  INDEX `fk_tb_recipes_tb_admin1_idx` (`cod_admin` ASC),
  CONSTRAINT `cod_users`
    FOREIGN KEY (`cod_users`)
    REFERENCES `db_sisref`.`tb_user` (`id_user`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `cod_admin`
    FOREIGN KEY (`cod_admin`)
    REFERENCES `db_sisref`.`tb_admin` (`id_admin`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
