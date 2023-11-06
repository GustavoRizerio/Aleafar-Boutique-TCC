CREATE DATABASE IF NOT EXISTS `aleafar`;
use `aleafar`;

CREATE TABLE `tamanho` (
  `ID_tamanho` int(11) NOT NULL AUTO_INCREMENT,
  `tamanho` varchar(5) NOT NULL,
  PRIMARY KEY (`ID_tamanho`)
);

/* subcategoria */

CREATE TABLE `subcategoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome_subcatg` varchar(30) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
);

INSERT INTO `subcategoria` (`id`, `nome_subcatg`, `descricao`) VALUES 
(1, 'Blusas de Manga Longa', 'Blusas elegantes para diversas ocasiões, perfeitas para dias mais frescos.'),
(2, 'Blusas', 'Modelos variados, ideais para dias ensolarados e eventos informais.'),
(3, 'Vestidos de Festa', '	Elegância e glamour para ocasiões especiais.'),
(4, 'Vestidos Casuais', 'Modelos confortáveis e estilosos para o dia a dia.'),
(5, 'Vestidos Midi', 'Comprimento na medida certa para um visual sofisticado.'),
(6, 'Vestidos Longos', '	Longos e fluidos, perfeitos para eventos mais formais.'),
(7, 'Calças Jeans', 'Estilos e cortes modernos para um visual descontraído.'),
(8, 'Shorts Jeans', 'Conforto e estilo para os dias mais quentes.'),
(9, 'Calças de Tecido', 'Elegância sem abrir mão do conforto.'),
(10, 'Shorts de Tecido', 'Para um look leve e casual.'),
(11, 'Casacos de Inverno', '	Peças quentes e estilosas para os dias frios.'),
(12, 'Jaquetas de Couro', 'Um toque de rebeldia e elegância em qualquer estação.'),
(13, 'Blazers', 'Sofisticação e versatilidade para o ambiente de trabalho.'),
(14, 'Leggings', 'Conforto e estilo para os momentos de atividade física.'),
(15, 'Tops Fitness', '	Sustentação e estilo, aliados na prática esportiva.'),
(16, 'Biquínis', 'Modelos variados para arrasar sob o sol.'),
(17, 'Saídas de Praia', 'Peças leves e estilosas para complementar seu look praiano'),
(18, 'Plus Size: Blusas', 'Modelos modernos e confortáveis em tamanhos especiais.'),
(19, 'Plus Size: Vestidos', 'Elegância sem limites, independente do tamanho'),
(20, 'Plus Size: Calças', 'Conforto e estilo para todos os corpos.'),
(21, 'Moda Praia Plus Size', 'Biquínis e maiôs que realçam a beleza em todos os tamanhos');



CREATE TABLE `sexo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sexo` varchar(35) NOT NULL,
  PRIMARY KEY (`id`)
);

INSERT INTO `sexo` VALUES (1,'Masculino'),(2,'Feminino'),(5,'Prefiro não informar');

/* Tabela categoria */

CREATE TABLE `categoria` (
  `ID_categoria` int(11) NOT NULL AUTO_INCREMENT,
  `id_subcatg` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  PRIMARY KEY (`ID_categoria`) USING BTREE,
  KEY `categoria_ibfk_1` (`id_subcatg`),
  CONSTRAINT `categoria_ibfk_1` FOREIGN KEY (`id_subcatg`) REFERENCES `subcategoria` (`id`)
);

INSERT INTO `categoria` (`ID_categoria`, `id_subcatg`, `nome`) VALUES (1, 1, 'Blusas e Tops'),
(2, 2, 'Blusas e Tops'),
(3, 3, 'Vestidos'),
(4, 4, 'Vestidos'),
(5, 5, 'Vestidos'),
(6, 6, 'Vestidos'),
(7, 7, 'Calças e Shorts'),
(8, 8, 'Calças e Shorts'),
(9, 9, 'Calças e Shorts'),
(10, 10, 'Calças e Shorts'),
(11, 11, 'Casacos e Jaquetas'),
(12, 12, 'Casacos e Jaquetas'),
(13, 13, 'Casacos e Jaquetas'),
(14, 14, 'Roupas Esportivas'),
(15, 15, 'Roupas Esportivas'),
(16, 16, 'Moda Praia'),
(17, 17, 'Moda Praia'),
(18, 18, 'Tamanhos Especiais'),
(19, 19, 'Tamanhos Especiais'),
(20, 20, 'Tamanhos Especiais'),
(21, 21, 'Tamanhos Especiais');


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

CREATE TABLE `funcionario` (
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