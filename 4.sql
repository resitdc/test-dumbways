-- MySQL dump 10.16  Distrib 10.1.25-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: db_dumbways
-- ------------------------------------------------------
-- Server version	10.1.25-MariaDB

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
-- Table structure for table `kabupaten_tb`
--

DROP TABLE IF EXISTS `kabupaten_tb`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kabupaten_tb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(150) DEFAULT NULL,
  `provinsi_id` int(11) DEFAULT NULL,
  `diresmikan` date DEFAULT NULL,
  `photo` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kabupaten_tb`
--

LOCK TABLES `kabupaten_tb` WRITE;
/*!40000 ALTER TABLE `kabupaten_tb` DISABLE KEYS */;
INSERT INTO `kabupaten_tb` VALUES (1,'Bandung',1,'2000-01-10','bandung.jpg'),(2,'Garut',1,'2000-01-12','garut.jpg');
/*!40000 ALTER TABLE `kabupaten_tb` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `provinsi_tb`
--

DROP TABLE IF EXISTS `provinsi_tb`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `provinsi_tb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(150) DEFAULT NULL,
  `diresmikan` date DEFAULT NULL,
  `photo` varchar(150) DEFAULT NULL,
  `pulau` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `provinsi_tb`
--

LOCK TABLES `provinsi_tb` WRITE;
/*!40000 ALTER TABLE `provinsi_tb` DISABLE KEYS */;
INSERT INTO `provinsi_tb` VALUES (1,'Jawa Barat','1994-04-24','foto_jawa_barat.jpg','SUMATRA'),(2,'Jawa Tengah','1995-12-04','foto_jawa_tengah.jpg','BALI'),(3,'Jawa Timur','1993-12-04','foto_jawa_timur.jpg','BALI');
/*!40000 ALTER TABLE `provinsi_tb` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-02-29 15:24:18
