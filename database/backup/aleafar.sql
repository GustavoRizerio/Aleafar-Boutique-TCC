CREATE DATABASE  IF NOT EXISTS `aleafar` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `aleafar`;


DROP TABLE IF EXISTS `categoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categoria` (
  `ID_categoria` int(11) NOT NULL AUTO_INCREMENT,
  `id_subcatg` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  PRIMARY KEY (`ID_categoria`) USING BTREE,
  KEY `categoria_ibfk_1` (`id_subcatg`),
  CONSTRAINT `categoria_ibfk_1` FOREIGN KEY (`id_subcatg`) REFERENCES `subcategoria` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categoria`
--

LOCK TABLES `categoria` WRITE;
/*!40000 ALTER TABLE `categoria` DISABLE KEYS */;
INSERT INTO `categoria` VALUES (8,15,'roupa'),(9,13,'roupa'),(10,8,'luva'),(11,14,'roupa'),(12,10,'leggin'),(13,9,'camiseta'),(14,9,'calça'),(15,9,'croped');
/*!40000 ALTER TABLE `categoria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cliente`
--

DROP TABLE IF EXISTS `cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cliente`
--

LOCK TABLES `cliente` WRITE;
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
INSERT INTO `cliente` VALUES (4,2,'Makauli','makuli.dazn@gmail.com','12421412412','12345'),(5,1,'roni','roni.andrade@gmail.com','32562363266','12345'),(6,1,'Gustavo','GustavoGRizerioG@gmail.com','21421412421','12345'),(7,2,'Fabi','fabi.xavier@gmail.com','24532652352','12345'),(8,2,'cliente','cliente.teste@gmail.com','35412512515','12345'),(9,2,'emi','emi.teste@gmail.com','24156754377','34353'),(11,1,'ronielli','roni.teste@gmail.com','32542152152','12345'),(12,5,'maria','maria.teste@gmail.com','32415215215','215215215215');
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `senha` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login`
--

LOCK TABLES `login` WRITE;
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
INSERT INTO `login` VALUES (1,'GustavoGRizerioG@gmail.com','12345'),(2,'GustavoGRizerioG@gmail.com','12345'),(3,'mario.dazn@gmail.com','123456789'),(4,'GustavoGRizerioG@gmail.com','12345'),(5,'GustavoGRizerioG@gmail.com','12345'),(6,'GustavoGRizerioG@gmail.com','12345'),(7,'GustavoGRizerioG@gmail.com','12345'),(8,'GustavoGRizerioG@gmail.com','12345'),(9,'GustavoGRizerioG@gmail.com','12345'),(10,'GustavoGRizerioG@gmail.com','12345'),(11,'GustavoGRizerioG@gmail.com','12345'),(12,'GustavoGRizerioG@gmail.com','12345'),(13,'GustavoGRizerioG@gmail.com','12345'),(14,'GustavoGRizerioG@gmail.com','12345'),(15,'GustavoGRizerioG@gmail.com','12345'),(16,'GustavoGRizerioG@gmail.com','12345'),(17,'GustavoGRizerioG@gmail.com','12345'),(18,'GustavoGRizerioG@gmail.com','12345'),(19,'GustavoGRizerioG@gmail.com','12345'),(20,'GustavoGRizerioG@gmail.com','12345'),(21,'GustavoGRizerioG@gmail.com','12345'),(22,'GustavoGRizerioG@gmail.com','12345'),(23,'GustavoGRizerioG@gmail.com','12345'),(24,'GustavoGRizerioG@gmail.com','12345'),(25,'GustavoGRizerioG@gmail.com','12345'),(26,'GustavoGRizerioG@gmail.com','12345'),(27,'GustavoGRizerioG@gmail.com','12345'),(28,'GustavoGRizerioG@gmail.com','12345');
/*!40000 ALTER TABLE `login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `produtos`
--

DROP TABLE IF EXISTS `produtos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `produtos` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `id_catg` int(11) NOT NULL,
  `id_tamanho` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `img2` varchar(255) NOT NULL,
  `img3` varchar(255) NOT NULL,
  'cor' VARCHAR(7) NOT NULL
  'cor2' VARCHAR(7) NOT NULL
  'cor3' VARCHAR(7) NOT NULL
  `nome_produto` varchar(80) DEFAULT NULL,
  `descricao` varchar(150) DEFAULT NULL,
  `estoque` varchar(5) NOT NULL,
  `valorvenda` decimal(7,2) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `produto_ibfk_1` (`id_catg`),
  KEY `produto_ibfk_2` (`id_tamanho`),
  CONSTRAINT `produtos_ibfk_1` FOREIGN KEY (`id_catg`) REFERENCES `categoria` (`ID_categoria`),
  CONSTRAINT `produtos_ibfk_2` FOREIGN KEY (`id_tamanho`) REFERENCES `tamanho` (`ID_tamanho`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produtos`
--

LOCK TABLES `produtos` WRITE;
/*!40000 ALTER TABLE `produtos` DISABLE KEYS */;
INSERT INTO `produtos` VALUES (12,10,4,'https://i.imgur.com/LEiQ4HZ_d.webp?maxwidth=760&fidelity=grand','teste','teste','teste',48.00);
/*!40000 ALTER TABLE `produtos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sexo`
--

DROP TABLE IF EXISTS `sexo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sexo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sexo` varchar(35) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sexo`
--

LOCK TABLES `sexo` WRITE;
/*!40000 ALTER TABLE `sexo` DISABLE KEYS */;
INSERT INTO `sexo` VALUES (1,'Masculino'),(2,'Feminino'),(5,'Prefiro não informar');
/*!40000 ALTER TABLE `sexo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subcategoria`
--

DROP TABLE IF EXISTS `subcategoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `subcategoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome_subcatg` varchar(30) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subcategoria`
--

LOCK TABLES `subcategoria` WRITE;
/*!40000 ALTER TABLE `subcategoria` DISABLE KEYS */;
INSERT INTO `subcategoria` VALUES (5,'verão','moda praia'),(6,'Crente','moda crente, igreja'),(8,'Inverno','Frio'),(9,'+size','grande'),(10,'fit','academia'),(11,'intima','moda intima'),(12,'vestido','roupa longa'),(13,'saia','parte de baixo'),(14,'camiseta','estampa'),(15,'croped','moda verao');
/*!40000 ALTER TABLE `subcategoria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tamanho`
--

DROP TABLE IF EXISTS `tamanho`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tamanho` (
  `ID_tamanho` int(11) NOT NULL AUTO_INCREMENT,
  `tamanho` varchar(5) NOT NULL,
  PRIMARY KEY (`ID_tamanho`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tamanho`
--

LOCK TABLES `tamanho` WRITE;
/*!40000 ALTER TABLE `tamanho` DISABLE KEYS */;
INSERT INTO `tamanho` VALUES (4,'GG'),(5,'P'),(6,'PP'),(7,'M'),(8,'G');
/*!40000 ALTER TABLE `tamanho` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

