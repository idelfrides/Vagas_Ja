
-- Este arquivo está sincronizado entre PhpStorm e MySQL Workbench
-- contém os scripts do banco e suas tabelas

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vagaJaDB`
--

-- --------------------------------------------------------

-- criando o banco de dados de nome tecWebDB
CREATE DATABASE vagaJaDB
  DEFAULT CHARACTER SET utf8
  DEFAULT COLLATE utf8_general_ci;

use vagaJaDB;

-- *****************************************************
--              tabelas do DB
-- *****************************************************

-- #1: tabela empresario

CREATE TABLE IF NOT EXISTS `VagaJaDB`.`empresario` (
  `id_empresario` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(255) NOT NULL,
  `CPF` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `tel` BIGINT(14) NOT NULL,
  `endereco` VARCHAR(150) NOT NULL,
  `cidade` VARCHAR(50) NOT NULL,
  `site` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id_empresario`))
ENGINE = InnoDB DEFAULT CHARACTER SET = latin1;


-- #2: tabela postagem
CREATE TABLE IF NOT EXISTS `VagaJaDB`.`postagem` (
  `id_postagem` INT(11) NOT NULL AUTO_INCREMENT,
  `tipo_oportuidade` VARCHAR(45) NOT NULL,
  `cargo` VARCHAR(45) NOT NULL,
  `descricao_oportunidade` VARCHAR(255) NOT NULL,
  `area_atuacao` VARCHAR(45) NOT NULL,
  `perfil` VARCHAR(255) CHARACTER SET 'dec8' NOT NULL,
  `num_vagas` INT(11) NOT NULL,
  `cidade` VARCHAR(50) NULL DEFAULT NULL,
  `empresario_id_empresario` INT(11) NOT NULL,
  PRIMARY KEY (`id_postagem`),
  INDEX `fk_postagem_empresario_idx` (`empresario_id_empresario` ASC),
  CONSTRAINT `fk_postagem_empresario` 
    FOREIGN KEY (`empresario_id_empresario`)
    REFERENCES `VagaJaDB`.`empresario` (`id_empresario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB DEFAULT CHARACTER SET = latin1;



-- ************************************************************
--                    comandos de consulta
-- ************************************************************
DESCRIBE  postagem;
SELECT * FROM empresario;




