-- MariaDB dump 10.17  Distrib 10.4.11-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: ci
-- ------------------------------------------------------
-- Server version	10.4.11-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'admin','admin');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `company_detele`
--

DROP TABLE IF EXISTS `company_detele`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `company_detele` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `company_name` char(50) DEFAULT NULL,
  `registered_company_number` int(20) DEFAULT NULL,
  `email` char(100) DEFAULT NULL,
  `contact_number` int(20) DEFAULT NULL,
  `date` char(50) DEFAULT NULL,
  `vat_number` char(50) DEFAULT NULL,
  `address_line_1` text DEFAULT NULL,
  `address_line_2` text DEFAULT NULL,
  `city` char(50) DEFAULT NULL,
  `country` char(50) DEFAULT NULL,
  `post_code` int(10) DEFAULT NULL,
  `c_date` char(20) DEFAULT NULL,
  `password` char(50) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `company_detele`
--

LOCK TABLES `company_detele` WRITE;
/*!40000 ALTER TABLE `company_detele` DISABLE KEYS */;
INSERT INTO `company_detele` VALUES (1,'google.com',121212,'cantact@google.com',2147483647,'2021-12-08','111','Atharv Society, Kashish Park, near TipTop Plaza','L.B.S. Marg Thane west.','Thane','India',400604,'12-12-2121','test'),(2,'konnectgen',1111,'a@konnectgen.com',0,'2021-12-06','','Atharv Society, Kashish Park, near TipTop Plaza','L.B.S. Marg Thane west.','Thane','India',400604,'12-12-2121',NULL),(3,'test',0,'test@gmail.com',1212121212,'2022-01-09','1212','thane','thnae','thnae','thane',121212,'09-01-2222',NULL),(4,'test1',0,'test1@gmail.com',0,'2022-01-09','111','Atharv Society, Kashish Park, near TipTop Plaza','L.B.S. Marg Thane west.','Thane','India',400604,'09-01-2222','yUOilcKTbI');
/*!40000 ALTER TABLE `company_detele` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employer`
--

DROP TABLE IF EXISTS `employer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `employer` (
  `employer_id` int(20) NOT NULL AUTO_INCREMENT,
  `wallet_points` int(225) DEFAULT NULL,
  `utillized_points` int(20) DEFAULT NULL,
  `redeem_points` int(20) DEFAULT NULL,
  `earned_rewards` int(20) DEFAULT NULL,
  `employee_list` text DEFAULT NULL,
  `live_challenges` text DEFAULT NULL,
  `history_challenge` text DEFAULT NULL,
  PRIMARY KEY (`employer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employer`
--

LOCK TABLES `employer` WRITE;
/*!40000 ALTER TABLE `employer` DISABLE KEYS */;
/*!40000 ALTER TABLE `employer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employers`
--

DROP TABLE IF EXISTS `employers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `employers` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `logo_pic` varchar(225) DEFAULT NULL,
  `employer_id` int(20) DEFAULT NULL,
  `admin_ids` text DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `contact_number` char(50) DEFAULT NULL,
  `date` char(50) DEFAULT NULL,
  `address_line_1` text DEFAULT NULL,
  `address_line_2` text DEFAULT NULL,
  `city` char(50) DEFAULT NULL,
  `country` char(50) DEFAULT NULL,
  `post_code` char(50) DEFAULT NULL,
  `c_date` char(50) DEFAULT NULL,
  `status` char(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employers`
--

LOCK TABLES `employers` WRITE;
/*!40000 ALTER TABLE `employers` DISABLE KEYS */;
INSERT INTO `employers` VALUES (1,'test',NULL,NULL,NULL,NULL,'mkZGR28uTK | MyxLiIZJrK | 1234567890 | test@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(2,'test1',NULL,NULL,NULL,NULL,'81ZRakHKfU | fseIuhyLop | 1234567890 | test1@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(3,'test2',NULL,NULL,NULL,NULL,'syOSwGmYhf | rJcbiLWVqU | 1234567890 | test2@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(4,'test2',NULL,NULL,NULL,NULL,'m0YUj9L2RK | CQpubAsHNq | 1234567890 | test2@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(5,'test2',NULL,NULL,NULL,NULL,'FCW9koS67O | RdezquCLpo | 1234567890 | test2@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(6,'test2',NULL,NULL,NULL,NULL,'Ku92f6AjnM | vbTDaZLlEr | 1234567890 | test2@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(7,'test2',NULL,NULL,NULL,NULL,'aM1o5VI7rw | pPmvlHuVAx | 1234567890 | test2@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(8,'test2',NULL,NULL,NULL,NULL,'6TQto9RsNJ | hluWbQJNwo | 1234567890 | test2@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(9,'test2',NULL,NULL,NULL,NULL,'KHa0XmVGCn | cqRKFLujUG | 1234567890 | test2@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(10,'test2',NULL,NULL,NULL,NULL,'h8xIk1T7EU | kIRvGDFxcj | 1234567890 | test2@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(11,'test2',NULL,NULL,NULL,NULL,'xoz6a8GLp3 | YbqdiujmHL | 1234567890 | test2@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(12,'test2',NULL,NULL,NULL,NULL,'QzDiRsGSo8 | uknTFgbfYU | 1234567890 | test2@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(13,'test2',NULL,NULL,NULL,NULL,'HYcRtb7LgG | QhkBVXCIyW | 1234567890 | test2@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(14,'test2',NULL,NULL,NULL,NULL,'KYF5JZPknm | cMJYBmzwOi | 1234567890 | test2@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(15,'test2',NULL,NULL,NULL,NULL,'Z16Fe9pY35 | IUEvrduhDM | 1234567890 | test2@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(16,'test2',NULL,NULL,NULL,NULL,'X6mJs8dzOw | KkIeJZYbCE | 1234567890 | test2@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(17,'test2',NULL,NULL,NULL,NULL,'2fPu4JYbpc | VfBpJONzbD | 1234567890 | test2@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(18,'test2',NULL,NULL,NULL,NULL,'gQCTtwX8rI | XYSUEkqsJf | 1234567890 | test2@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(19,'test2',NULL,NULL,NULL,NULL,'dH3A6DvphU | CImpAKgizr | 1234567890 | test2@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(20,'test2',NULL,NULL,NULL,NULL,'Y9NxrJotu5 | VSKdLDTQkm | 1234567890 | test2@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(21,'test2',NULL,NULL,NULL,NULL,'9lWEnLoixH | LJTXcODmCH | 1234567890 | rohit.jadhav0403@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(22,'test2',NULL,NULL,NULL,NULL,'yqvwlph9ij | KeHzyPIpLd | 1234567890 | rohit.jadhav0403@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(23,'test2',NULL,NULL,NULL,NULL,'6739rtE5Ye | YAjIXSZUeh | 1231231231 | test2@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(24,'test3',NULL,NULL,NULL,NULL,'AxPCkIRaBY | rWtkgPHJuM | 121212121212 | test3@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(25,'test4','AYmkPJS67w','unPeXyZjim',NULL,NULL,'AYmkPJS67w | unPeXyZjim | 11111111111 | test4@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(26,'patils','Tnf9876vaU','DKdENQrXjg',NULL,NULL,'Tnf9876vaU | DKdENQrXjg | 111111111 | mayuresh.patil@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `employers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `history_challenges`
--

DROP TABLE IF EXISTS `history_challenges`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `history_challenges` (
  `history_challenges_id` int(20) NOT NULL AUTO_INCREMENT,
  `type_of_challenge` text DEFAULT NULL,
  `points` varchar(225) DEFAULT NULL,
  `badge_id` int(20) DEFAULT NULL,
  PRIMARY KEY (`history_challenges_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `history_challenges`
--

LOCK TABLES `history_challenges` WRITE;
/*!40000 ALTER TABLE `history_challenges` DISABLE KEYS */;
/*!40000 ALTER TABLE `history_challenges` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `issued_badges`
--

DROP TABLE IF EXISTS `issued_badges`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `issued_badges` (
  `issued_badges_id` int(20) NOT NULL AUTO_INCREMENT,
  `points` int(20) DEFAULT NULL,
  `badge_pic` varchar(225) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `challenge_id` int(20) DEFAULT NULL,
  `issued_to` text DEFAULT NULL,
  PRIMARY KEY (`issued_badges_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `issued_badges`
--

LOCK TABLES `issued_badges` WRITE;
/*!40000 ALTER TABLE `issued_badges` DISABLE KEYS */;
/*!40000 ALTER TABLE `issued_badges` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `live_badges`
--

DROP TABLE IF EXISTS `live_badges`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `live_badges` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `live_badges_id` int(20) DEFAULT NULL,
  `points` int(20) DEFAULT NULL,
  `badge_pic` varchar(225) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `challenge_id` int(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `live_badges`
--

LOCK TABLES `live_badges` WRITE;
/*!40000 ALTER TABLE `live_badges` DISABLE KEYS */;
INSERT INTO `live_badges` VALUES (1,5,3,NULL,'30','aa',NULL),(2,6,3,NULL,'30','aa',6),(3,7,3,NULL,'30','aa',7),(4,8,1,NULL,'30','aqws',8),(5,9,1,NULL,'30','aqws',9),(6,10,1,NULL,'60','aqws',10),(7,11,0,NULL,'60','',11),(8,12,0,NULL,'60','',12),(9,1,2,NULL,'60','qwsa',1),(10,1,11,NULL,'60','asdc',1);
/*!40000 ALTER TABLE `live_badges` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `live_challenges`
--

DROP TABLE IF EXISTS `live_challenges`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `live_challenges` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `live_challenges_id` int(20) DEFAULT NULL,
  `type_of_challenge` text DEFAULT NULL,
  `points` varchar(225) DEFAULT NULL,
  `badge_id` int(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `live_challenges`
--

LOCK TABLES `live_challenges` WRITE;
/*!40000 ALTER TABLE `live_challenges` DISABLE KEYS */;
INSERT INTO `live_challenges` VALUES (1,7,'3','3',3),(2,8,'1','1',4),(3,9,'1','1',5),(4,10,'1','1',6),(5,11,'','',7),(6,12,'','',8),(7,1,'2','2',9),(8,1,'11','11',10);
/*!40000 ALTER TABLE `live_challenges` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `other`
--

DROP TABLE IF EXISTS `other`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `other` (
  `other_challenges_id` int(20) NOT NULL AUTO_INCREMENT,
  `points` varchar(225) DEFAULT NULL,
  `start_time` varchar(20) DEFAULT NULL,
  `end_time` varchar(20) DEFAULT NULL,
  `duration` text DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `description` text DEFAULT NULL,
  PRIMARY KEY (`other_challenges_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `other`
--

LOCK TABLES `other` WRITE;
/*!40000 ALTER TABLE `other` DISABLE KEYS */;
/*!40000 ALTER TABLE `other` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `partner_list`
--

DROP TABLE IF EXISTS `partner_list`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `partner_list` (
  `partner_id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `logo_pic` varchar(225) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `admin_ids` text DEFAULT NULL,
  `contact` int(20) DEFAULT NULL,
  PRIMARY KEY (`partner_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `partner_list`
--

LOCK TABLES `partner_list` WRITE;
/*!40000 ALTER TABLE `partner_list` DISABLE KEYS */;
/*!40000 ALTER TABLE `partner_list` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedalon`
--

DROP TABLE IF EXISTS `pedalon`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pedalon` (
  `pedalon_challenges_id` int(20) NOT NULL AUTO_INCREMENT,
  `points` varchar(225) DEFAULT NULL,
  `start_time` varchar(20) DEFAULT NULL,
  `end_time` varchar(20) DEFAULT NULL,
  `duration` text DEFAULT NULL,
  `distance` varchar(20) DEFAULT NULL,
  `speed` varchar(20) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `description` text DEFAULT NULL,
  PRIMARY KEY (`pedalon_challenges_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedalon`
--

LOCK TABLES `pedalon` WRITE;
/*!40000 ALTER TABLE `pedalon` DISABLE KEYS */;
INSERT INTO `pedalon` VALUES (1,'11','2021-11-18','2021-11-19','11',NULL,'12','aqwe','asdc');
/*!40000 ALTER TABLE `pedalon` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `popular_pedalon`
--

DROP TABLE IF EXISTS `popular_pedalon`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `popular_pedalon` (
  `popular_pedalon_id` int(20) NOT NULL AUTO_INCREMENT,
  `start_time` varchar(50) DEFAULT NULL,
  `end_time` varchar(50) DEFAULT NULL,
  `duration` varchar(225) DEFAULT NULL,
  `distance` varchar(50) DEFAULT NULL,
  `speed` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `description` text DEFAULT NULL,
  PRIMARY KEY (`popular_pedalon_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `popular_pedalon`
--

LOCK TABLES `popular_pedalon` WRITE;
/*!40000 ALTER TABLE `popular_pedalon` DISABLE KEYS */;
/*!40000 ALTER TABLE `popular_pedalon` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `popular_stepon`
--

DROP TABLE IF EXISTS `popular_stepon`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `popular_stepon` (
  `popular_stepon_id` int(20) NOT NULL AUTO_INCREMENT,
  `start_time` varchar(50) DEFAULT NULL,
  `end_time` varchar(50) DEFAULT NULL,
  `duration` varchar(225) DEFAULT NULL,
  `distance` varchar(50) DEFAULT NULL,
  `speed` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `description` text DEFAULT NULL,
  PRIMARY KEY (`popular_stepon_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `popular_stepon`
--

LOCK TABLES `popular_stepon` WRITE;
/*!40000 ALTER TABLE `popular_stepon` DISABLE KEYS */;
/*!40000 ALTER TABLE `popular_stepon` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `popular_walkon`
--

DROP TABLE IF EXISTS `popular_walkon`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `popular_walkon` (
  `popular_id` int(20) NOT NULL AUTO_INCREMENT,
  `start_time` varchar(50) DEFAULT NULL,
  `end_time` varchar(50) DEFAULT NULL,
  `duration` varchar(225) DEFAULT NULL,
  `step_count` varchar(20) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `description` text DEFAULT NULL,
  PRIMARY KEY (`popular_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `popular_walkon`
--

LOCK TABLES `popular_walkon` WRITE;
/*!40000 ALTER TABLE `popular_walkon` DISABLE KEYS */;
/*!40000 ALTER TABLE `popular_walkon` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `predefine_badges`
--

DROP TABLE IF EXISTS `predefine_badges`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `predefine_badges` (
  `predefine_id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `badge_pic` varchar(225) DEFAULT NULL,
  `description` text DEFAULT NULL,
  PRIMARY KEY (`predefine_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `predefine_badges`
--

LOCK TABLES `predefine_badges` WRITE;
/*!40000 ALTER TABLE `predefine_badges` DISABLE KEYS */;
/*!40000 ALTER TABLE `predefine_badges` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stepon`
--

DROP TABLE IF EXISTS `stepon`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stepon` (
  `stepon_challenges_id` int(20) NOT NULL AUTO_INCREMENT,
  `points` varchar(225) DEFAULT NULL,
  `start_time` varchar(20) DEFAULT NULL,
  `end_time` varchar(20) DEFAULT NULL,
  `duration` text DEFAULT NULL,
  `distance` varchar(20) DEFAULT NULL,
  `speed` varchar(20) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `description` text DEFAULT NULL,
  PRIMARY KEY (`stepon_challenges_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stepon`
--

LOCK TABLES `stepon` WRITE;
/*!40000 ALTER TABLE `stepon` DISABLE KEYS */;
INSERT INTO `stepon` VALUES (1,'2','2021-11-17','2021-11-19','11','12','12','asxz','qwsa');
/*!40000 ALTER TABLE `stepon` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `user_id` int(20) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `profile_pic` varchar(50) DEFAULT NULL,
  `phone_number` int(20) DEFAULT NULL,
  `email_id` varchar(20) DEFAULT NULL,
  `corporate_email` varchar(20) DEFAULT NULL,
  `earned_badges` text DEFAULT NULL,
  `total_points` int(20) DEFAULT NULL,
  `redeem_points` varchar(20) DEFAULT NULL,
  `earn_rewards` varchar(20) DEFAULT NULL,
  `transcation_history` text DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `walkon`
--

DROP TABLE IF EXISTS `walkon`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `walkon` (
  `walkon_challenges_id` int(20) NOT NULL AUTO_INCREMENT,
  `points` varchar(225) DEFAULT NULL,
  `start_time` varchar(20) DEFAULT NULL,
  `end_time` varchar(20) DEFAULT NULL,
  `duration` text DEFAULT NULL,
  `step_count` varchar(20) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `description` text DEFAULT NULL,
  PRIMARY KEY (`walkon_challenges_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `walkon`
--

LOCK TABLES `walkon` WRITE;
/*!40000 ALTER TABLE `walkon` DISABLE KEYS */;
INSERT INTO `walkon` VALUES (1,'3','2021-11-12','2021-11-13','3','2','aa','aa'),(2,'3','2021-11-12','2021-11-13','3','2','aa','aa'),(3,'3','2021-11-12','2021-11-13','3','2','aa','aa'),(4,'3','2021-11-12','2021-11-13','3','2','aa','aa'),(5,'3','2021-11-12','2021-11-13','3','2','aa','aa'),(6,'3','2021-11-12','2021-11-13','3','2','aa','aa'),(7,'3','2021-11-12','2021-11-13','3','2','aa','aa'),(8,'1','2021-11-18','2021-11-18','1','2','Blog','aqws'),(9,'1','2021-11-18','2021-11-18','1','2','Blog','aqws'),(10,'1','2021-11-18','2021-11-19','2','2','demo','aqws'),(11,'','','','','','aqws',''),(12,'','','','','','','');
/*!40000 ALTER TABLE `walkon` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;