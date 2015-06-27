CREATE DATABASE  IF NOT EXISTS `vermelho` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `vermelho`;
-- MySQL dump 10.13  Distrib 5.5.43, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: vermelho
-- ------------------------------------------------------
-- Server version	5.5.43-0ubuntu0.14.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `text`
--

DROP TABLE IF EXISTS `text`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `text` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL,
  `frame_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_text_frame1_idx` (`frame_id`),
  CONSTRAINT `fk_text_frame1` FOREIGN KEY (`frame_id`) REFERENCES `frame` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `text`
--

LOCK TABLES `text` WRITE;
/*!40000 ALTER TABLE `text` DISABLE KEYS */;
INSERT INTO `text` VALUES (1,'Trazendo o melhor da melhor &eacute;poca do Rock n\' Roll desde 2007!',1),(2,'Ben Rock nasceu em Itaporanga, em 1993. Mesmo n&atilde;o tendo vivido o melhor momento do Rock n Roll, faz um tributo a esssa &eacute;poca m&aacute;gica: os anos 80. Com repert&oacute;rio com cl&aacute;ssicos como Whitesnake, Bon Jovi, Def Leppard, Black Sabbath, Styx, Asia, Toto e outros grandes artistas do per&iacute;odo. Ben Rock &eacute; focado em trazer n&atilde;o s&oacute; m&uacute;sica, mas uma perfomance completa a todo lugar que toca em sua turn&ecirc;!',2);
/*!40000 ALTER TABLE `text` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `frame`
--

DROP TABLE IF EXISTS `frame`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `frame` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `frame`
--

LOCK TABLES `frame` WRITE;
/*!40000 ALTER TABLE `frame` DISABLE KEYS */;
INSERT INTO `frame` VALUES (1,'home'),(2,'about'),(3,'shows'),(4,'videos'),(5,'musicas');
/*!40000 ALTER TABLE `frame` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `media`
--

DROP TABLE IF EXISTS `media`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `media` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(2000) NOT NULL,
  `path` varchar(2000) NOT NULL,
  `frame_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_media_Frame1_idx` (`frame_id`),
  CONSTRAINT `fk_media_Frame1` FOREIGN KEY (`frame_id`) REFERENCES `frame` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=big5;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `media`
--

LOCK TABLES `media` WRITE;
/*!40000 ALTER TABLE `media` DISABLE KEYS */;
INSERT INTO `media` VALUES (1,'homeimage.jpg','../resources/images/',1),(2,'about-ben10-1.jpg','../resources/images/',2),(3,'banner1.jpg','../resources/images/',1),(4,'banner2.jpg','../resources/images/',1),(5,'banner3.jpg','../resources/images/',1),(6,'musica1.jpg','../resources/images/',5),(7,'music1.mp3','../resources/music/',5),(8,'musica2.jpg','../resources/images/',5),(9,'music2.mp3','../resources/music/',5),(10,'musica3.jpg','../resources/images/',5),(11,'music3.mp3','../resources/music/',5),(12,'musica4.jpg','../resources/images/',5),(13,'music4.mp3','../resources/music/',5),(14,'musica5.jpg','../resources/images/',5),(15,'music5.mp3','../resources/music/',5),(16,'musica6.jpg','../resources/images/',5),(17,'music6.mp3','../resources/music/',5);
/*!40000 ALTER TABLE `media` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-06-21 22:36:26
