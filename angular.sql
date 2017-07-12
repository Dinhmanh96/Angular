-- MySQL dump 10.13  Distrib 5.7.18, for Linux (x86_64)
--
-- Host: localhost    Database: angular
-- ------------------------------------------------------
-- Server version	5.7.18-0ubuntu0.16.04.1

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
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES ('2DE28CA2-6847-F4EC-5539-F97F52927C1C','Lance',62,'Cum.sociis@velit.org'),('34FD6FF8-4100-5F7C-0D02-4BFA8DE0628F','Rajah',74,'quam.dignissim@variusorci.co.uk'),('49FEE296-5B69-DF8D-797D-6306533E38F0','Leo',33,'justo.sit@Aliquamerat.net'),('6334A448-B057-13B3-C876-D8A452C4DFE1','Tad',86,'Donec.felis.orci@liberoDonecconsectetuer.org'),('6A5715CA-6B2E-E4BD-DA87-3E901A5714BD','Kenneth',41,'tristique.ac.eleifend@mattis.ca'),('77652BC1-A5DC-78A1-AE5A-F65392C408CB','Arden',22,'Cum.sociis.natoque@ante.ca'),('86AF37DC-E596-AF91-0B20-3074B41ED72D','Nguyen Dinh Manh',21,'cursus.non@aliquetmagna.com'),('94D5D0E7-78C0-4596-14E1-96CC2A6AA63A','Wayne',31,'nulla@amet.org'),('A4FC522F-D787-66CF-9B8B-FC3F359792BA','Yoshio',13,'velit@erat.edu'),('A5CFAD5A-943D-F3C8-E6C5-879762C6B46F','Kirk',18,'interdum@Crasdictumultricies.com'),('B7790674-A2FC-2595-45E4-ACDD0B8B1FF7','Jermaine',41,'arcu.Morbi@nonenimMauris.com'),('D2E4D9B1-1EE0-0B1F-C97F-CCB11C770491','Marvin',66,'Proin.eget.odio@euligulaAenean.edu'),('F696B5CE-4D16-B622-3940-190EEA315473','Emerson',134,'Donec.dignissim.magna@nec.net'),('F7F62353-14A9-BC41-74E8-BBE42B0A3942','Ronan',61,'sit.amet.faucibus@arcu.edu');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-07-12 22:30:17
