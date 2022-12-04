CREATE DATABASE login;
USE login;

CREATE TABLE `login`.`usuario` (
  `usuario_id` INT NOT NULL AUTO_INCREMENT,
  `usuario` VARCHAR(200) NOT NULL,
  `senha` VARCHAR(32) NOT NULL,
  `nome` VARCHAR(100) NOT NULL,
  `data_cadastro` DATETIME NOT NULL,
  PRIMARY KEY (`usuario_id`));

INSERT INTO `usuario` (`usuario_id`,`usuario`,`senha`, `nome`, `data_cadastro`) VALUES (1,'aldri','202cb962ac59075b964b07152d234b70', 'aldrijon m silva	', '2022-12-04 14:45:47');