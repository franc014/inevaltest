-- MySQL dump 10.13  Distrib 5.6.19, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: inevaltest
-- ------------------------------------------------------
-- Server version	5.6.19-0ubuntu0.14.04.1

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
INSERT INTO `migrations` VALUES ('2014_10_12_000000_create_users_table',1),('2014_10_12_100000_create_password_resets_table',1),('2016_01_22_153236_create_roles_tabble',2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'Superadmin','Tiene acceso a todas las funcionalidades de la aplicación.','2016-01-22 16:19:32','0000-00-00 00:00:00'),(2,'Admin','Solo puede ver listado de estudiantes y por ver los datos de cada uno','2016-01-22 18:34:22','0000-00-00 00:00:00'),(3,'Student','Solo puede ver sus datos personales incluyendo calificaciones','2016-01-22 16:19:32','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `idn` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `firstname` varchar(48) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(48) COLLATE utf8_unicode_ci NOT NULL,
  `birthdate` date NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(18) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `role_id` int(10) unsigned NOT NULL,
  `partial1` decimal(10,2) NOT NULL,
  `partial2` decimal(10,2) NOT NULL,
  `partial3` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_role_id_foreign` (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (10,'','gandrade@gmail.com','','','gabriela','andrade','0000-00-00','','','',NULL,'2016-01-22 16:54:50','2016-01-21 17:44:49',3,0.00,0.00,0.00),(43,'admin','jmal23@jmal.com','$2y$10$8Rs92eGFmdkS0zJteVyMzetBbyg/lF3Kd2ymSxrKkK/aPMGmOK35a','1713444552','Rocio','Andrade','1999-01-15','el inca','2898988','0978787878','Qfq87gMoLSY25Di1sjgn4E0DxnfGaevWwRke7QVHMn9kOUuMteNZNXCTE9GR','2016-01-22 20:36:22','2016-01-22 20:36:22',2,0.00,0.00,0.00),(46,'administrrador','jfandradea@gmail.com','$2y$10$6e10hjGE.r8bTC656uT.vOuYwGN6D.u2qpYBoS0dz3G5ziXbl2bHu','','','','0000-00-00','','','','q3fEDJ4wsehId2xN8GGWB6XXNGo6oXd4xf3OiBbJ8xLXmTjDZQqV2Z4BZmfS','2016-01-22 20:34:14','2016-01-22 20:34:14',1,0.00,0.00,0.00),(47,'','jmal10@jmal.com','$2y$10$36PPyTyx1ZcayxZ.xg4if.M0DKdklemuGQvf35Zi0xKXK5QPlGA3W','1713444559','Juan Manuel','Pedro Carlos Soldados','1999-01-15','el inca','2898988','0978787878',NULL,'2016-01-22 17:15:12','2016-01-22 17:15:12',0,0.00,0.00,0.00),(48,'','jmal13@jmal.com','$2y$10$5YoSrrvpoRDN847VDJsyCO2UnEVzv/5cBPXLsOT1yNJCDGbbXcwvy','1716333531','Juan Elio2','Guaman','1999-01-15','el inca','2898988','0978787878','0lomFCAvhIgMrDX2wMnB5OhrmFhWeC01NcDHj3UHWTb6ip0I8PVqyMCtVEzt','2016-01-22 20:48:25','2016-01-22 20:48:25',3,0.00,0.00,0.00),(49,'','jmal230@jmal.com','$2y$10$UrcRmLAAcafEmebiZO60bOWfhy42UYwoPsQlvkcWfPr7wo48ESUdm','1716333533','Juan Manuel','Pedro Carlos Soldados','1999-01-15','el inca','2898988','0978787878',NULL,'2016-01-22 21:28:06','2016-01-22 21:28:06',3,10.20,1.40,10.20);
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

-- Dump completed on 2016-01-22 16:33:30
