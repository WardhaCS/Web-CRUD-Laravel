-- MySQL dump 10.16  Distrib 10.1.43-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: db_asrama
-- ------------------------------------------------------
-- Server version	10.1.43-MariaDB-0ubuntu0.18.04.1

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
-- Table structure for table `bokings`
--

DROP TABLE IF EXISTS `bokings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bokings` (
  `kode` varchar(25) NOT NULL,
  `penagungjawab` varchar(25) DEFAULT NULL,
  `fakultas` varchar(25) DEFAULT NULL,
  `cekin` date DEFAULT NULL,
  `cekout` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`kode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bokings`
--

LOCK TABLES `bokings` WRITE;
/*!40000 ALTER TABLE `bokings` DISABLE KEYS */;
INSERT INTO `bokings` VALUES ('A124','Delete tok','Teknik Informatika','2017-09-06','2017-11-06','2020-01-18 07:42:55','2020-01-18 07:42:55'),('B123218','Delete tok','Teknik Informatika','2019-11-15','2020-03-18','2020-01-18 09:56:32','2020-01-18 09:56:32'),('B1234','9','Teknik Informatika','2018-11-13','2018-11-15','2020-01-18 07:44:29','2020-01-18 07:44:29'),('C1241','Delete tok','Teknik Elektro','2017-12-07','2018-12-20','2020-01-18 07:45:23','2020-01-18 07:45:23'),('D1214','9','Teknik Elektro','2019-11-01','2019-11-05','2020-01-18 07:46:15','2020-01-18 07:46:15'),('E12434','Delete tok','Teknik Elektro','2018-01-04','2018-12-12','2020-01-18 07:47:01','2020-01-18 07:47:01'),('F041203','Delete tok','Teknik Informatika','2019-12-31','2020-01-08','2020-01-18 04:27:05','2020-01-18 04:27:05'),('F12442','Delete tok','Teknik Informatika','2018-01-04','2019-12-13','2020-01-18 07:47:58','2020-01-18 07:47:58'),('G12143','Delete tok','Teknik Elektro','2018-01-18','2019-12-18','2020-01-18 07:48:41','2020-01-18 07:48:41'),('G12334','Delete tok','Teknik Kimia','2019-12-11','2020-02-06','2020-01-18 07:49:27','2020-01-18 07:49:27'),('H12324','Delete tok','Teknik Informatika','2017-11-08','2020-03-19','2020-01-18 07:50:13','2020-01-18 07:50:13'),('H290343294','12','Teknik Elektro','2017-01-04','2017-01-06','2020-01-19 01:05:00','2020-01-19 01:05:00'),('H392139','Delete tok','Teknik Elektro','2020-01-09','2020-05-21','2020-01-18 09:52:22','2020-01-18 09:52:22'),('H902901902','Delete H902901902','Teknik Elektro','2020-01-03','2020-01-21','2020-01-18 02:31:23','2020-01-18 02:31:23'),('J8731793','13','Teknik Informatika','2020-01-08','2020-01-10','2020-01-19 04:57:03','2020-01-19 04:57:03'),('K1932103','Delete Newo','Teknik Elektro','2018-12-13','2019-01-16','2020-01-18 23:49:00','2020-01-18 23:49:00'),('M843583','Delete mar','Teknik Kimia','2019-12-12','2020-01-23','2020-01-18 16:43:03','2020-01-18 16:43:03'),('N314914','Delete','Teknik Informatika','2020-01-23','2020-03-13','2020-01-18 03:57:02','2020-01-18 03:57:02'),('N402933','12','Teknik Informatika','2020-12-01','2020-12-16','2020-01-19 01:03:58','2020-01-19 01:03:58'),('T123621','Delete Wisnu','Teknik Informatika','2019-01-01','2019-01-03','2020-01-19 19:10:40','2020-01-19 19:10:40'),('T292232','9','Teknik Informatika','2020-01-01','2020-01-07','2020-01-18 02:04:23','2020-01-18 02:04:23'),('V123132','Delete tok','Teknik Informatika','2019-11-28','2020-03-19','2020-01-18 07:50:52','2020-01-18 07:50:52'),('V2390493','Delete Newo','Teknik Informatika','2017-01-01','2017-01-03','2020-01-19 01:02:40','2020-01-19 01:02:40'),('Y298291','9','Teknik Kimia','2020-01-08','2020-01-15','2020-01-18 02:29:48','2020-01-18 02:29:48');
/*!40000 ALTER TABLE `bokings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `penghuni`
--

DROP TABLE IF EXISTS `penghuni`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `penghuni` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `kode_boking` varchar(25) DEFAULT NULL,
  `nama` varchar(25) DEFAULT NULL,
  `gander` char(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `kode_boking` (`kode_boking`),
  CONSTRAINT `penghuni_ibfk_1` FOREIGN KEY (`kode_boking`) REFERENCES `bokings` (`kode`)
) ENGINE=InnoDB AUTO_INCREMENT=106 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `penghuni`
--

LOCK TABLES `penghuni` WRITE;
/*!40000 ALTER TABLE `penghuni` DISABLE KEYS */;
INSERT INTO `penghuni` VALUES (42,'G233413','Charles','P'),(43,'G233413','David','P'),(44,NULL,'Char','P'),(45,NULL,'Las','L'),(46,NULL,'Mok','P'),(47,'H902901902','Pu','L'),(48,'H902901902','Wan','P'),(49,'H902901902','To','L'),(50,'N314914','Nang','P'),(51,'N314914','Diva','P'),(52,'N314914','Jon','P'),(53,'N314914','Jhi','P'),(54,'F041203','Charles','L'),(55,'F041203','David','P'),(56,'A124','Charles','L'),(57,'A124','David','P'),(58,'B1234','Jon','P'),(59,'B1234','Kris','L'),(60,'C1241','Mor','P'),(61,'C1241','To','L'),(62,'D1214','Kon','L'),(63,'D1214','For','P'),(64,'E12434','Bor','P'),(65,'E12434','Jo','P'),(66,'F12442','Bon','P'),(67,'F12442','Nko','L'),(68,'G12143','Mun','L'),(69,'G12143','Tio','L'),(70,'G12334','Min','L'),(71,'G12334','Tin','P'),(72,'H12324','Vor','P'),(73,'H12324','Don','P'),(74,'V123132','Bun','P'),(75,'V123132','Fid','L'),(76,'H392139','Kur','L'),(77,'H392139','No','L'),(78,'B123218','Kur','L'),(79,'B123218','Mud','L'),(80,'B123218','tah','P'),(81,'M843583','Naf','P'),(82,'M843583','Fi','L'),(83,'M843583','Ah','P'),(84,'K1932103','Pur','P'),(85,'K1932103','Bou','P'),(86,'K1932103','Dadi','L'),(87,'K1932103','Putri','P'),(88,'V2390493','Pur','L'),(89,'V2390493','Wi','P'),(90,'V2390493','San','L'),(91,'V2390493','Ti','P'),(92,'N402933','Swi','L'),(93,'N402933','Tia','P'),(94,'N402933','Man','L'),(95,'N402933','Tin','P'),(96,'H290343294','Swin','L'),(97,'H290343294','Nar','P'),(98,'H290343294','Tin','P'),(99,'H290343294','Nan','L'),(100,'J8731793','Hon','L'),(101,'J8731793','Da','P'),(102,'J8731793','Re','L'),(103,'T123621','Kiki','L'),(104,'T123621','Lala','P'),(105,'T123621','Dobeh','L');
/*!40000 ALTER TABLE `penghuni` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Morc','Kuriang@xyz.com',NULL,'$2y$10$lbeDPK2a/QFEQvpoPiw8.ON512vBNTmIsOTqf5.SS0TE5FNBeb2Gu',NULL,'2020-01-08 22:03:47','2020-01-09 05:12:28'),(2,'kom','kom@xyz.com',NULL,'$2y$10$vedKAruBrLRP33h2kyl9.u1RYNYwmjzVr01CUvPpgB6XowWUPwZY.',NULL,'2020-01-09 01:16:29','2020-01-16 18:29:55'),(3,'Boy','Boy@xyz.com',NULL,'$2y$10$.R0JwfJ51gYCgdifQ8DS7efvkE3dfEM6AbZtQfDsT1yABMLjRYJ.i',NULL,'2020-01-15 22:40:59','2020-01-15 22:40:59'),(5,'Jum','Jum@xyz.com',NULL,'$2y$10$qU203oQ4X3lLPcLeKJBFg.S/HINEYnwpTR.JZ9c177wV6izkF44Nm',NULL,'2020-01-16 18:27:46','2020-01-16 18:27:46'),(6,'Sintong','sintong@xyz.com',NULL,'$2y$10$HPjMn7ynLiGfYzn2FtuIj.aY5yYRfDK.7udwmxZrmJb/4R4bLqaji',NULL,'2020-01-16 23:55:03','2020-01-16 23:55:03'),(7,'Sano','Sano@xyz.com',NULL,'$2y$10$9nTtC3cqJfh3JbjP7sd74OiYuJnIhbLBMZCuzLKg1/CPx1TymVD2e',NULL,'2020-01-17 06:25:26','2020-01-17 06:25:26'),(8,'Fong','fong@xyz.com',NULL,'$2y$10$XGe0djQ5iHyDkV5A4sGKg.NNuc2V5vbmWUYwV3/rJvd/OQO0KywEO',NULL,'2020-01-17 16:05:55','2020-01-17 16:05:55'),(9,'tok','tok@xyz.com',NULL,'$2y$10$hWJ3V.wl/2jejEfG2uHma.Zbls9oXWVksI9QMj89GkXo501E4Guhm',NULL,'2020-01-17 19:50:09','2020-01-17 19:50:09'),(10,'Dha','dha@xyz.com',NULL,'$2y$10$I2Vx.ubs06BnZoAyDu5F6uyXvpipGQwh1ge57rar65/COylLP/7.u',NULL,'2020-01-18 15:49:18','2020-01-18 15:49:18'),(11,'mar','mar@xyz.com',NULL,'$2y$10$iO.pGYBj/v83JDRo1lIrxOIVIREewTBxzRA9ePOkMnSVDn8Py7UHG',NULL,'2020-01-18 15:51:52','2020-01-18 15:51:52'),(12,'Newo','Newo@xyz.com',NULL,'$2y$10$0fotZZCGK02ZiWhnxD.C7.QdGC3Vyblasa3uBKtZlmLaSRUizT01G',NULL,'2020-01-18 22:55:37','2020-01-18 22:55:37'),(13,'Wis','Wis@xyz.com',NULL,'$2y$10$1wM9NBzXTcHgDYmLMiiwO.C8579VVMltFvcK4rZ4p7LMSn16MxTsq',NULL,'2020-01-19 04:55:38','2020-01-19 04:55:38'),(14,'Wisnu','Wisnu@xy.com',NULL,'$2y$10$MkM5B06NRcEb.tcCTChpK.Kq18y3f7UJLydvJZXcodtvWJOKsU/2q',NULL,'2020-01-19 19:08:16','2020-01-19 19:08:16'),(15,'Hog','Hog@xy.com',NULL,'$2y$10$JECJohxSXarkL2WK2ADmHeH06krCVBQdDZAdYzDWwEACgSS3TAc7i',NULL,'2020-01-30 17:29:15','2020-01-30 17:29:15');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-02-05 14:15:37
