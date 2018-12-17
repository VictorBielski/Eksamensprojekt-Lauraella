-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
DROP TABLE IF EXISTS galleri;
DROP TABLE IF EXISTS pages;
DROP TABLE IF EXISTS lauraellaUsers;

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- CREATE SCHEMA IF NOT EXISTS `mul18` DEFAULT CHARACTER SET utf8 ;
-- USE `mul18` ;

-- -----------------------------------------------------
-- Table `mydb`.`pages`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pages` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `mydb`.`lauraellaUsers`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lauraellaUsers` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(45) NULL DEFAULT 'UNIQUE',
  `pwhash` VARCHAR(255) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;
-- -----------------------------------------------------
-- Table `mydb`.`galleri`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `galleri` (
  `idGallery` INT(11) NOT NULL AUTO_INCREMENT,
  `titleGallery` LONGTEXT NOT NULL,
  `descGallery` LONGTEXT NOT NULL,
  `imgFullNameGallery` LONGTEXT NOT NULL,
  `orderGallery` LONGTEXT NOT NULL,
  `pages_id` INT NOT NULL,
  PRIMARY KEY (`idGallery`),
  INDEX `fk_galleri_pages_idx` (`pages_id` ASC),
  CONSTRAINT `fk_galleri_pages`
    FOREIGN KEY (`pages_id`)
    REFERENCES `pages` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

INSERT INTO pages (name) VALUES ('Forside');
INSERT INTO pages (name) VALUES ('Nye Varer');
INSERT INTO pages (name) VALUES ('Tilbud');

SELECT * FROM pages;
SELECT * FROM galleri;
SELECT * FROM lauraellaUsers;


