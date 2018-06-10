-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema cadastro
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema cadastro
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `cadastro` DEFAULT CHARACTER SET latin1 ;
USE `cadastro` ;

-- -----------------------------------------------------
-- Table `cadastro`.`Empresario`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `cadastro`.`Empresario` ;

CREATE TABLE IF NOT EXISTS `cadastro`.`Empresario` (
  `idEmpresario` INT NOT NULL,
  `nome` VARCHAR(255) NOT NULL,
  `CPF` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `tel` BIGINT(14) NOT NULL,
  `endereco` VARCHAR(150) NOT NULL,
  `cidade` VARCHAR(50) NOT NULL,
  `site` VARCHAR(100) NULL,
  `senha` VARCHAR(6) NOT NULL,
  PRIMARY KEY (`idEmpresario`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `cadastro`.`Vagas`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `cadastro`.`Vagas` ;

CREATE TABLE IF NOT EXISTS `cadastro`.`Vagas` (
  `idVagas` INT NOT NULL AUTO_INCREMENT,
  `tipo_oportuidade` VARCHAR(45) NOT NULL,
  `cargo` VARCHAR(45) NOT NULL,
  `descricao_oportunidade` VARCHAR(255) NOT NULL,
  `area_atuacao` VARCHAR(45) NOT NULL,
  `perfil` VARCHAR(255) CHARACTER SET 'dec8' NOT NULL,
  `num_vagas` INT(11) NOT NULL,
  `cidade` VARCHAR(50) NOT NULL,
  `Empresario_idEmpresario` INT NOT NULL,
  PRIMARY KEY (`idVagas`),
  INDEX `fk_Vagas_Empresario1_idx` (`Empresario_idEmpresario` ASC),
  CONSTRAINT `fk_Vagas_Empresario1`
    FOREIGN KEY (`Empresario_idEmpresario`)
    REFERENCES `cadastro`.`Empresario` (`idEmpresario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `cadastro`.`Candidatos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `cadastro`.`Candidatos` ;

CREATE TABLE IF NOT EXISTS `cadastro`.`Candidatos` (
  `idCandidatos` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(255) NOT NULL,
  `cidade` VARCHAR(45) NOT NULL,
  `endereco` VARCHAR(255) NOT NULL,
  `tel` BIGINT(14) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `senha` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idCandidatos`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `cadastro`.`Vagas_has_Candidatos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `cadastro`.`Vagas_has_Candidatos` ;

CREATE TABLE IF NOT EXISTS `cadastro`.`Vagas_has_Candidatos` (
  `Vagas_idVagas` INT NOT NULL,
  `Candidatos_idCandidatos` INT NOT NULL,
  PRIMARY KEY (`Vagas_idVagas`, `Candidatos_idCandidatos`),
  INDEX `fk_Vagas_has_Candidatos_Candidatos1_idx` (`Candidatos_idCandidatos` ASC),
  INDEX `fk_Vagas_has_Candidatos_Vagas1_idx` (`Vagas_idVagas` ASC),
  CONSTRAINT `fk_Vagas_has_Candidatos_Vagas1`
    FOREIGN KEY (`Vagas_idVagas`)
    REFERENCES `cadastro`.`Vagas` (`idVagas`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Vagas_has_Candidatos_Candidatos1`
    FOREIGN KEY (`Candidatos_idCandidatos`)
    REFERENCES `cadastro`.`Candidatos` (`idCandidatos`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;


-- Dá acesso ao banco de dados ao usuário tecuser
GRANT ALL ON cadastro.* TO 'tecuser'@'localhost';
