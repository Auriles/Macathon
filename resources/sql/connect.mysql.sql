-- MySQL dump 10.13  Distrib 5.7.15, for Linux (x86_64)
--
-- Host: localhost    Database: connect
-- ------------------------------------------------------
-- Server version	5.7.15-0ubuntu0.16.04.1

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
-- Table structure for table `avis`
--

DROP TABLE IF EXISTS `avis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `avis` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `contributorid` int(10) unsigned NOT NULL,
  `message` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `avis_contributorid_foreign` (`contributorid`),
  CONSTRAINT `avis_contributorid_foreign` FOREIGN KEY (`contributorid`) REFERENCES `contributor` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `avis`
--

LOCK TABLES `avis` WRITE;
/*!40000 ALTER TABLE `avis` DISABLE KEYS */;
/*!40000 ALTER TABLE `avis` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contributor`
--

DROP TABLE IF EXISTS `contributor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contributor` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `userid` int(10) unsigned NOT NULL,
  `device` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `experience` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `contributor_userid_foreign` (`userid`),
  CONSTRAINT `contributor_userid_foreign` FOREIGN KEY (`userid`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contributor`
--

LOCK TABLES `contributor` WRITE;
/*!40000 ALTER TABLE `contributor` DISABLE KEYS */;
/*!40000 ALTER TABLE `contributor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES ('2014_10_12_000000_create_users_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `operation`
--

DROP TABLE IF EXISTS `operation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `operation` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `serviceid` int(10) unsigned NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `message` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `customer` int(10) unsigned DEFAULT NULL,
  `contributorid` int(10) unsigned DEFAULT NULL,
  `avisid` int(10) unsigned DEFAULT NULL,
  `prix` double DEFAULT NULL,
  `state` enum('pending','accepted','processing','done','cancelled') COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `operation_serviceid_foreign` (`serviceid`),
  KEY `operation_customer_foreign` (`customer`),
  KEY `operation_contributorid_foreign` (`contributorid`),
  KEY `operation_avisid_foreign` (`avisid`),
  CONSTRAINT `operation_avisid_foreign` FOREIGN KEY (`avisid`) REFERENCES `avis` (`id`),
  CONSTRAINT `operation_contributorid_foreign` FOREIGN KEY (`contributorid`) REFERENCES `contributor` (`id`),
  CONSTRAINT `operation_customer_foreign` FOREIGN KEY (`customer`) REFERENCES `users` (`id`),
  CONSTRAINT `operation_serviceid_foreign` FOREIGN KEY (`serviceid`) REFERENCES `service` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `operation`
--

LOCK TABLES `operation` WRITE;
/*!40000 ALTER TABLE `operation` DISABLE KEYS */;
INSERT INTO `operation` VALUES (1,1,'2016-10-05 17:14:28',NULL,NULL,'sfdnfcklncdcs',NULL,NULL,NULL,NULL,NULL),(2,1,'2016-10-05 19:46:11',NULL,NULL,'sdsd',NULL,NULL,NULL,NULL,NULL),(4,6,'2016-10-05 19:53:03',NULL,NULL,'dfdfdffddfdfdf',NULL,NULL,NULL,NULL,'pending');
/*!40000 ALTER TABLE `operation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `service`
--

DROP TABLE IF EXISTS `service`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `service` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `choices` enum('computer','cloud','box','periph','smartphone','connectique','smarttv') COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `service`
--

LOCK TABLES `service` WRITE;
/*!40000 ALTER TABLE `service` DISABLE KEYS */;
INSERT INTO `service` VALUES (1,'computer'),(2,'cloud'),(3,'box'),(4,'periph'),(5,'smartphone'),(6,'connectique'),(7,'smarttv');
/*!40000 ALTER TABLE `service` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `zipcode` int(11) NOT NULL,
  `image` blob,
  `stateid` enum('user','contributor') COLLATE utf8_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_pseudo_unique` (`pseudo`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'drattak','$2y$10$tAoFuncwQXKkqvVbenoLgO2AJo0q7p9D2Sn/mwUQ0G9RQAvG87Y56','EMILE','Vincent','vl.emile@gmail.com',636957023,'1 Square Charles Delaunay','ASNIERES SUR SEINE',92600,NULL,'user','LSxuIEuOwuuKf8rieooiDlMDcUJssiokYvr0kMN7AzSPXbaeQwpASH9smcQe','2016-10-05 07:49:54','2016-10-05 17:41:29'),(2,'adelys','$2y$10$/hjffR6gyvxfkN9YUgXX3O5uuoxD7J7l9mBUWnqg6rVyEz.KCaEOm','EMILE','Dominique','adelys974@gmail.com',179307424,'1 Square Charles Delaunay','ASNIERES SUR SEINE',92600,NULL,NULL,'4lMaKgbSDVdrS8fiOvW5rOVKKaGaFEuxpILw1z6bDcMuWKPrItZH2V1oM26g','2016-10-05 15:20:23','2016-10-05 16:28:55'),(3,'testtest','$2y$10$wK3N23J6kkucGI5Cp76/rekc6iXDUD9gQbr6OhO79UIlPomGg.IKG','test','test','test@test.fr',102030405,'test','Levallois-Perret',92300,NULL,NULL,'5UYA5QwUrh2AEBBXCWs7dF1AuxdbJRNpPZ9s4bfDtW0jJyg46xgrfY9iqp4o','2016-10-05 16:53:27','2016-10-05 16:54:55'),(4,'bobjambon','$2y$10$xhIuYM5BKCUARhZBZAmUlOPrSt7Lbh4X1Egryv1337or9zVeDHNju','EMILE','Vincent','test@doubletest.fr',655555555,'1 Square Charles Delaunay','ASNIERES SUR SEINE',92600,NULL,NULL,'pE8scsMAh7dkYaufGHAUnaLetf80Azj03cvolvkBrPSHSJWd8eqJH81dOGsz','2016-10-05 16:56:53','2016-10-05 16:57:31');
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

-- Dump completed on 2016-10-05 21:55:36
