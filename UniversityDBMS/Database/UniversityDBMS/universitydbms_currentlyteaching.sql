-- MySQL dump 10.13  Distrib 8.0.26, for Win64 (x86_64)
--
-- Host: localhost    Database: universitydbms
-- ------------------------------------------------------
-- Server version	8.0.26

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
-- Table structure for table `currentlyteaching`
--

DROP TABLE IF EXISTS `currentlyteaching`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `currentlyteaching` (
  `ProfessorID` int DEFAULT NULL,
  `CourseCode` varchar(45) DEFAULT NULL,
  `CRN` varchar(45) DEFAULT NULL,
  `CourseYear` varchar(45) NOT NULL,
  KEY `ProfessorID` (`ProfessorID`),
  KEY `CourseCode` (`CourseCode`),
  KEY `CRN` (`CRN`),
  CONSTRAINT `currentlyteaching_ibfk_1` FOREIGN KEY (`ProfessorID`) REFERENCES `professors` (`ProfessorID`),
  CONSTRAINT `currentlyteaching_ibfk_2` FOREIGN KEY (`CourseCode`) REFERENCES `courses` (`CourseCode`),
  CONSTRAINT `currentlyteaching_ibfk_3` FOREIGN KEY (`CRN`) REFERENCES `courses` (`CRN`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `currentlyteaching`
--

LOCK TABLES `currentlyteaching` WRITE;
/*!40000 ALTER TABLE `currentlyteaching` DISABLE KEYS */;
INSERT INTO `currentlyteaching` VALUES (1004,'BUSI1000','40050','2021'),(1003,'COMP3070','44500','2021'),(1000,'SOFE3450','40100','2021'),(1003,'COMP3070','44500','2021'),(1000,'SOFE3450','40100','2021'),(1002,'SOFE3450','40101','2021'),(1007,'ECEE1000','42100','2021'),(1001,'ELEE3200','44500','2021'),(1001,'AUTE3010','42250','2021');
/*!40000 ALTER TABLE `currentlyteaching` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-11-29 18:46:59
