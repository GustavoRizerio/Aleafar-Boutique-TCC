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

INSERT INTO `produtos` (`ID`, `id_catg`, `id_tamanho`, `img`, `cor`, `nome_produto`, `descricao`, `estoque`, `valorvenda`, `img2`, `img3`, `cor2`, `cor3`) VALUES (1, 10, 3, 'https://i.imgur.com/dtmcPk3.jpeg', '#9400d3', 'Conjunto Shorts e Blazer', 'Conjunto com Shorts e Blazer, 3 cores disponiveis', '10', 99.00, 'https://i.imgur.com/SRaYzrY.jpeg', 'https://i.imgur.com/INo9m2s.jpeg', '#d86700', '#7c3b1a');
INSERT INTO `produtos` (`ID`, `id_catg`, `id_tamanho`, `img`, `cor`, `nome_produto`, `descricao`, `estoque`, `valorvenda`, `img2`, `img3`, `cor2`, `cor3`) VALUES (6, 5, 9, 'https://i.imgur.com/g6LgEl9.jpeg', '#09111e', 'Vestido Midi Tricot Modal', 'Nosso VESTIDO MIDI TRICOT MODAL é o modelo mais esperado pelas simplets; um básico, clássico, versátil, perfeito para todas as estações do ano. No inv', '4', 30.00, 'https://i.imgur.com/d0LMAL9.jpeg', 'https://i.imgur.com/ZyKGCv7.jpeg', '#967161', '#a1a5b0');
INSERT INTO `produtos` (`ID`, `id_catg`, `id_tamanho`, `img`, `cor`, `nome_produto`, `descricao`, `estoque`, `valorvenda`, `img2`, `img3`, `cor2`, `cor3`) VALUES (5, 2, 4, 'https://i.imgur.com/7QfvD1l.jpeg', '#942b7e', 'Regata Corações', 'Nossa REGATA CORAÇÕES está nas últimas unidades, corre para garantir', '10', 14.00, 'https://i.imgur.com/IJwDdiZ.jpeg', 'https://i.imgur.com/VBFisEt.jpeg', '#df0a67', '#3b5144');
INSERT INTO `produtos` (`ID`, `id_catg`, `id_tamanho`, `img`, `cor`, `nome_produto`, `descricao`, `estoque`, `valorvenda`, `img2`, `img3`, `cor2`, `cor3`) VALUES (7, 2, 9, 'https://i.imgur.com/upj48O1.jpeg', '#3a4c40', 'Vestido Midi Tricot Modal', 'TECIDO: viscose de suede Tamanho: único', '4', 14.00, 'https://i.imgur.com/NPiJW2C.jpeg', 'https://i.imgur.com/bnX8veD.jpeg', '#f41878', '#11151e');
INSERT INTO `produtos` (`ID`, `id_catg`, `id_tamanho`, `img`, `cor`, `nome_produto`, `descricao`, `estoque`, `valorvenda`, `img2`, `img3`, `cor2`, `cor3`) VALUES (8, 2, 9, 'https://i.imgur.com/0sXIWEc.jpeg', '#e7eaef', 'Cropped Daphane', 'O CROPPED DAPHANE é a escolha perfeita para quem deseja um look casual e elegante. Feita com um tecido macio e leve, essa blusa proporciona conforto e', '5', 14.00, 'https://i.imgur.com/sgTMiUx.jpeg', 'https://i.imgur.com/ei1jIEn.jpeg', '#e1bfb3', '#202430');
INSERT INTO `produtos` (`ID`, `id_catg`, `id_tamanho`, `img`, `cor`, `nome_produto`, `descricao`, `estoque`, `valorvenda`, `img2`, `img3`, `cor2`, `cor3`) VALUES (9, 17, 4, 'https://i.imgur.com/DDdjGT6.jpeg', '#332f2e', 'Saida de Praia', 'Já pensou em ter uma saída de praia puro luxo na sua loja??', '20', 35.00, 'https://i.imgur.com/vRlkHeU.jpeg', 'https://i.imgur.com/h7jIvHU.jpeg', '#ee3652', '#cdcbd0');
INSERT INTO `produtos` (`ID`, `id_catg`, `id_tamanho`, `img`, `cor`, `nome_produto`, `descricao`, `estoque`, `valorvenda`, `img2`, `img3`, `cor2`, `cor3`) VALUES (10, 2, 9, 'https://i.imgur.com/Nw9KAHE.jpeg', '#6a4431', 'Cropped Aro', 'Nosso CROPPED ARO é desenvolvido no tecido suplex com toque de poliamida. Tem caimento ajustado ao corpo e comprimento curto. Possui um aro que mantém', '9', 15.00, 'https://i.imgur.com/x08dAFe.jpeg', 'https://i.imgur.com/OHOGoWM.jpeg', '#fe3d88', '#dededf');
INSERT INTO `produtos` (`ID`, `id_catg`, `id_tamanho`, `img`, `cor`, `nome_produto`, `descricao`, `estoque`, `valorvenda`, `img2`, `img3`, `cor2`, `cor3`) VALUES (11, 16, 3, 'https://i.imgur.com/KywE4pF.jpeg', '#b07890', 'Biquíni duplo', 'conjunto desse biquíni 100%DUPLO com toque de poliamida', '20', 25.00, 'https://i.imgur.com/yI7iwTX.jpeg', 'https://i.imgur.com/m7po2Z6.jpeg', '#8098a5', '#9ca2b4');
INSERT INTO `produtos` (`ID`, `id_catg`, `id_tamanho`, `img`, `cor`, `nome_produto`, `descricao`, `estoque`, `valorvenda`, `img2`, `img3`, `cor2`, `cor3`) VALUES (12, 17, 9, 'https://i.imgur.com/AgSEeFG.jpeg', '#c6b3a4', 'Saida Babado', 'Nossa SAÍDA BABADO é a escolha perfeita para quem busca unir estilo e praticidade na hora de curtir a praia ou a piscina. Com seu tecido leve e confor', '10', 20.00, 'https://i.imgur.com/wyaGdzv.jpeg', 'https://i.imgur.com/y75MYls.jpeg', '#c7b4a5', '#c6b3a4');
INSERT INTO `produtos` (`ID`, `id_catg`, `id_tamanho`, `img`, `cor`, `nome_produto`, `descricao`, `estoque`, `valorvenda`, `img2`, `img3`, `cor2`, `cor3`) VALUES (13, 16, 9, 'https://i.imgur.com/iK11suc.jpeg', '#8b4da3', 'Biquini Guarujá fita', 'Nosso BIQUÍNI GUARUJÁ FITA é confeccionado no tecido Lycra, próprio para moda praia, é perfeito para quem quer uma marquinha de sol incrível', '5', 32.00, 'https://i.imgur.com/ycY61yq.jpeg', 'https://i.imgur.com/I5DqiAK.jpeg', '#239eb1', '#1e1740');
INSERT INTO `produtos` (`ID`, `id_catg`, `id_tamanho`, `img`, `cor`, `nome_produto`, `descricao`, `estoque`, `valorvenda`, `img2`, `img3`, `cor2`, `cor3`) VALUES (14, 17, 9, 'https://i.imgur.com/T7lxUvD.jpeg', '#c33661', 'Saída Jalapão', 'Foram lançados em torno de mil unidades de cada cor da SAÍDA JALAPÃO e agora restam menos de 30 unidades ', '30', 27.00, 'https://i.imgur.com/tfsOD75.jpeg', 'https://i.imgur.com/rwTK7Ls.jpeg', '#9cbdbe', '#fb7d43');
INSERT INTO `produtos` (`ID`, `id_catg`, `id_tamanho`, `img`, `cor`, `nome_produto`, `descricao`, `estoque`, `valorvenda`, `img2`, `img3`, `cor2`, `cor3`) VALUES (15, 2, 3, 'https://i.imgur.com/wNk0Chw.jpeg', '#ba9cce', 'Tricot Garrafinha', 'O tricot GARRAFINHA é aquele basiquinho que se encaixa em looks sociais ou mais casuais. Confeccionado em uma malha super macia, suave e confortável. ', '15', 34.00, 'https://i.imgur.com/nU4GTxZ.jpeg', 'https://i.imgur.com/cOK9Yvt.jpeg', '#cccdd1', '#030303');
INSERT INTO `produtos` (`ID`, `id_catg`, `id_tamanho`, `img`, `cor`, `nome_produto`, `descricao`, `estoque`, `valorvenda`, `img2`, `img3`, `cor2`, `cor3`) VALUES (16, 9, 9, 'https://i.imgur.com/ckDD0iH.jpeg', '#1c2536', 'Calça Wide Leg', 'Nosso queridinha calça wide leg com rasgo no joelho!', '5', 45.99, 'https://i.imgur.com/ktbsNjJ.jpeg', 'https://i.imgur.com/YxqYj5G.jpeg', '#1c2536', '#1a2332');
INSERT INTO `produtos` (`ID`, `id_catg`, `id_tamanho`, `img`, `cor`, `nome_produto`, `descricao`, `estoque`, `valorvenda`, `img2`, `img3`, `cor2`, `cor3`) VALUES (17, 9, 9, 'https://i.imgur.com/387nO5m.jpeg', '#9a9fa3', 'Calça Zaya', 'Esse tipo de calça possui um corte amplo que valoriza diferentes tipos de corpos e pode ser usada tanto em looks casuais quanto mais elegantes, depend', '12', 35.99, 'https://i.imgur.com/2AHQaCg.jpeg', 'https://i.imgur.com/5Bsg6Ot.jpeg', '#8b9096', '#979c9f');
INSERT INTO `produtos` (`ID`, `id_catg`, `id_tamanho`, `img`, `cor`, `nome_produto`, `descricao`, `estoque`, `valorvenda`, `img2`, `img3`, `cor2`, `cor3`) VALUES (18, 11, 9, 'https://i.imgur.com/KQ4dilv.jpeg', '#0c101c', 'Jaqueta Teddy Lauren ', 'Extremamente quentinha e com tecido grosso', '4', 55.00, 'https://i.imgur.com/TD9G5HF.jpeg', 'https://i.imgur.com/wGMbUUE.jpeg', '#652f09', '#bcb19d');
INSERT INTO `produtos` (`ID`, `id_catg`, `id_tamanho`, `img`, `cor`, `nome_produto`, `descricao`, `estoque`, `valorvenda`, `img2`, `img3`, `cor2`, `cor3`) VALUES (19, 13, 4, 'https://i.imgur.com/0UmDD32.jpeg', '#f6e8cb', 'Blazer', 'Um blazer bem estruturado pode ser a base perfeita para um look caprichado básico. Sabe aqueles dias que você quer se arrumar, mas está sem ideia? O b', '7', 45.99, 'https://i.imgur.com/tgWJYdI.jpeg', 'https://i.imgur.com/gCnzneT.jpeg', '#fbffff', '#0f1722');


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

CREATE TABLE cliente (
    ID INT(10) NOT NULL AUTO_INCREMENT,
    id_sexo INT(10) NOT NULL,
    nome VARCHAR(70) NOT NULL,
    email VARCHAR(50) NOT NULL,
    fone VARCHAR(15) NOT NULL,
    senha VARCHAR(30) NOT NULL,
    PRIMARY KEY (ID) USING BTREE,
    INDEX fk_sexo (id_sexo) USING BTREE
)