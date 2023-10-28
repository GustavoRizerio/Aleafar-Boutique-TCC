CREATE DATABASE IF NOT EXISTS `aleafar` 
USE `aleafar`;


/* CATEGORIA */

DROP TABLE IF EXISTS `categoria`;

CREATE TABLE `categoria` (
  `ID_categoria` int(11) NOT NULL AUTO_INCREMENT,
  `id_subcatg` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  PRIMARY KEY (`ID_categoria`) USING BTREE,
  KEY `categoria_ibfk_1` (`id_subcatg`),
  CONSTRAINT `categoria_ibfk_1` FOREIGN KEY (`id_subcatg`) REFERENCES `subcategoria` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

LOCK TABLES `categoria` WRITE;

UNLOCK TABLES;

/* CLIENTE */

DROP TABLE IF EXISTS `cliente`;

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
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

LOCK TABLES `cliente` WRITE;

UNLOCK TABLES;

/* CONTATO */

DROP TABLE IF EXISTS `contato`;

CREATE TABLE `contato` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) DEFAULT NULL,
  `email` varchar(120) DEFAULT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `mensagem` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

LOCK TABLES `contato` WRITE;

UNLOCK TABLES;

/* lOGIN */


DROP TABLE IF EXISTS `login`;

CREATE TABLE `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `senha` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

LOCK TABLES `login` WRITE;

UNLOCK TABLES;

/* PRODUTOS */

DROP TABLE IF EXISTS `produtos`;

CREATE TABLE `produtos` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `id_catg` int(11) NOT NULL,
  `id_tamanho` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `nome_produto` varchar(80) DEFAULT NULL,
  `descricao` varchar(150) DEFAULT NULL,
  `estoque` varchar(5) NOT NULL,
  `valorvenda` decimal(7,2) NOT NULL,
  `img2` varchar(255) DEFAULT NULL,
  `img3` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `produto_ibfk_1` (`id_catg`),
  KEY `produto_ibfk_2` (`id_tamanho`),
  CONSTRAINT `produtos_ibfk_1` FOREIGN KEY (`id_catg`) REFERENCES `categoria` (`ID_categoria`),
  CONSTRAINT `produtos_ibfk_2` FOREIGN KEY (`id_tamanho`) REFERENCES `tamanho` (`ID_tamanho`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

LOCK TABLES `produtos` WRITE;

UNLOCK TABLES;

/* SEXO */

DROP TABLE IF EXISTS `sexo`;

CREATE TABLE `sexo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sexo` varchar(35) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

LOCK TABLES `sexo` WRITE;

UNLOCK TABLES;

/* SUBCATEGORIA */

DROP TABLE IF EXISTS `subcategoria`;

CREATE TABLE `subcategoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome_subcatg` varchar(30) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


LOCK TABLES `subcategoria` WRITE;

/* TAMANHO */

DROP TABLE IF EXISTS `tamanho`;

CREATE TABLE `tamanho` (
  `ID_tamanho` int(11) NOT NULL AUTO_INCREMENT,
  `tamanho` varchar(5) NOT NULL,
  PRIMARY KEY (`ID_tamanho`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

LOCK TABLES `tamanho` WRITE;

UNLOCK TABLES;

