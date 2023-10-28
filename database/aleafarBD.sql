CREATE DATABASE IF NOT EXISTS `aleafar`;
use `aleafar`;

CREATE TABLE `tamanho` (
  `ID_tamanho` int(11) NOT NULL AUTO_INCREMENT,
  `tamanho` varchar(5) NOT NULL,
  PRIMARY KEY (`ID_tamanho`)
);

CREATE TABLE `subcategoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome_subcatg` varchar(30) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
);

CREATE TABLE `sexo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sexo` varchar(35) NOT NULL,
  PRIMARY KEY (`id`)
);

INSERT INTO `sexo` VALUES (1,'Masculino'),(2,'Feminino'),(5,'Prefiro não informar');

CREATE TABLE `categoria` (
  `ID_categoria` int(11) NOT NULL AUTO_INCREMENT,
  `id_subcatg` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  PRIMARY KEY (`ID_categoria`) USING BTREE,
  KEY `categoria_ibfk_1` (`id_subcatg`),
  CONSTRAINT `categoria_ibfk_1` FOREIGN KEY (`id_subcatg`) REFERENCES `subcategoria` (`id`)
);

CREATE TABLE `produtos` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `id_catg` int(11) NOT NULL,
  `id_tamanho` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `cor` VARCHAR(20) NOT NULL,
  `nome_produto` varchar(80) DEFAULT NULL,
  `descricao` varchar(150) DEFAULT NULL,
  `estoque` varchar(5) NOT NULL,
  `valorvenda` decimal(7,2) NOT NULL,
  `img2` varchar(255) DEFAULT NULL,
  `img3` varchar(255) DEFAULT NULL,
  `cor2` VARCHAR(20) NOT NULL,
  `cor3` VARCHAR(20) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `produto_ibfk_1` (`id_catg`),
  KEY `produto_ibfk_2` (`id_tamanho`),
  CONSTRAINT `produtos_ibfk_1` FOREIGN KEY (`id_catg`) REFERENCES `categoria` (`ID_categoria`),
  CONSTRAINT `produtos_ibfk_2` FOREIGN KEY (`id_tamanho`) REFERENCES `tamanho` (`ID_tamanho`)
);

CREATE TABLE `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `senha` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
);

CREATE TABLE `contato` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) DEFAULT NULL,
  `email` varchar(120) DEFAULT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `mensagem` text DEFAULT NULL,
  PRIMARY KEY (`id`)
);

CREATE TABLE `cliente` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `id_sexo` int(11) NOT NULL,
  `nome` varchar(70) NOT NULL,
  `email` varchar(50) NOT NULL,
  `fone` varchar(15) NOT NULL,
  `senha` varchar(30) NOT NULL,
  PRIMARY KEY (`ID`) USING BTREE,
  KEY `fk_sexo` (`id_sexo`),
  CONSTRAINT `fk_sexo` FOREIGN KEY (`id_sexo`) REFERENCES `sexo` (`id`)
);