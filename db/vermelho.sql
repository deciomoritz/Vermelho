SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `vermelho` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `vermelho` ;

-- -----------------------------------------------------
-- Table `vermelho`.`frame`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `vermelho`.`frame` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `vermelho`.`media`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `vermelho`.`media` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(2000) NOT NULL,
  `path` VARCHAR(2000) NOT NULL,
  `frame_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_media_Frame1_idx` (`frame_id` ASC),
  CONSTRAINT `fk_media_Frame1`
    FOREIGN KEY (`frame_id`)
    REFERENCES `vermelho`.`frame` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = big5;


-- -----------------------------------------------------
-- Table `vermelho`.`text`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `vermelho`.`text` (
  `id` INT NOT NULL,
  `content` TEXT(5000) NOT NULL,
  `frame_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_text_frame1_idx` (`frame_id` ASC),
  CONSTRAINT `fk_text_frame1`
    FOREIGN KEY (`frame_id`)
    REFERENCES `vermelho`.`frame` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
