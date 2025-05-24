-- MySQL dump 10.13  Distrib 8.0.41, for Linux (x86_64)
--
-- Host: localhost    Database: habibi
-- ------------------------------------------------------
-- Server version	8.0.41-0ubuntu0.20.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
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
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `userid` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `usertype` enum('Admin','Author','Guest') DEFAULT 'Guest',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`userid`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (8,'Habibi','$2y$10$pf62/asppsxhqIW1ogcaAu3Mj/7R.m7bIzLRxDzWvlodcuvwJIdfi','Admin','2025-04-19 20:07:07'),(11,'Author1','$2y$10$VPbiQW7GZLG.R7X39iPoOeYLNc06KNWSJqqYP/3/wtPchwPf1pzCi','Author','2025-04-21 16:09:33'),(12,'GuestUser','$2y$10$wfWJlQHVboUuEpKuBP9fX.Beapya5hu9Wt9OTQbuNvLynp.PFV6li','Guest','2025-04-21 16:09:56'),(13,'hacker','$2y$10$.LA0TYEA/U6KKeG0xCAcrea4z46OWv7KuKhk5EvK.WIwr3yhlucqS','Author','2025-04-21 16:59:34'),(14,'Amar','$2y$10$MssT.d/xTkPLdqVa267aOeYK6g1p35uTSRB0l8Ef4LbcA6pFih/LW','Author','2025-04-22 14:50:19'),(15,'Manoj','$2y$10$woYmGq73hc7Q2pkzclIjiefdohaJB5aNtVS8Weg/JrMPAU7S1oDpC','Guest','2025-04-22 14:50:42'),(16,'ABC','$2y$10$h/53Ai9EQNCupy88G0sAbOu6m8YY0OUElcAamhVeF/5SBt0tROo9e','Author','2025-04-22 16:55:09');
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

-- Dump completed on 2025-04-23 21:48:41
