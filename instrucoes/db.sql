CREATE DATABASE  IF NOT EXISTS `log_api` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `log_api`;
-- MySQL dump 10.13  Distrib 8.0.36, for Win64 (x86_64)
--
-- Host: localhost    Database: log_api
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.32-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `logs`
--

DROP TABLE IF EXISTS `logs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data` datetime NOT NULL,
  `solicitacao` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `logs`
--

LOCK TABLES `logs` WRITE;
/*!40000 ALTER TABLE `logs` DISABLE KEYS */;
INSERT INTO `logs` VALUES (1,'2025-01-21 10:58:30','Filme solicitado: Uma Nova Esperança - É um período de guerra civil. Naves espaciais rebeldes, ataca'),(2,'2025-01-21 10:58:45','Filme solicitado: O Império Contra-Ataca - É um tempo sombrio para a Rebelião. Embora a Estrela da M'),(3,'2025-01-21 11:01:42','Filme solicitado: Uma Nova Esperança - É um período de guerra civil. Naves espaciais rebeldes, ataca'),(4,'2025-01-21 11:02:39','Filme solicitado: Uma Nova Esperança - É um período de guerra civil. Naves espaciais rebeldes, ataca'),(5,'2025-01-21 11:02:44','Filme solicitado: O Império Contra-Ataca - É um tempo sombrio para a Rebelião. Embora a Estrela da M'),(6,'2025-01-21 11:02:48','Filme solicitado: O Retorno de Jedi - Luke Skywalker retornou ao seu planeta natal, Tatooine, em uma'),(7,'2025-01-21 11:04:44','Filme solicitado: Uma Nova Esperança'),(8,'2025-01-21 11:07:56','Filme solicitado: Uma Nova Esperança'),(9,'2025-01-21 11:07:58','Filme solicitado: O Despertar da Força'),(10,'2025-01-21 11:08:53','Filme solicitado: A Ameaça Fantasma'),(11,'2025-01-21 11:16:35','Filme solicitado: A Ameaça Fantasma'),(12,'2025-01-21 11:16:36','Filme solicitado: O Ataque dos Clones'),(13,'2025-01-21 11:16:40','Filme solicitado: A Vingança dos Sith'),(14,'2025-01-21 11:37:09','Filme Acessado: Uma Nova Esperança'),(15,'2025-01-21 13:43:58','Filme Acessado: Uma Nova Esperança'),(16,'2025-01-21 13:44:00','Filme Acessado: O Império Contra-Ataca'),(17,'2025-01-21 16:13:29','Filme Acessado: Uma Nova Esperança'),(18,'2025-01-21 16:14:14','Filme Acessado: A Ameaça Fantasma'),(19,'2025-01-21 16:14:38','Filme Acessado: O Ataque dos Clones');
/*!40000 ALTER TABLE `logs` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-01-21 16:44:38
