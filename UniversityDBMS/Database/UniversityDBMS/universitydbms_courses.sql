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
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `courses` (
  `CourseCode` varchar(45) NOT NULL,
  `CourseName` varchar(45) NOT NULL,
  `CRN` varchar(45) NOT NULL,
  `Professor` int NOT NULL,
  `CourseYear` varchar(45) NOT NULL,
  `Term` varchar(45) NOT NULL,
  `Department` varchar(45) NOT NULL,
  PRIMARY KEY (`CourseCode`,`CRN`),
  UNIQUE KEY `CRN_UNIQUE` (`CRN`),
  KEY `courses_ibfk_1` (`Professor`),
  CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`Professor`) REFERENCES `professors` (`ProfessorID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `courses`
--

LOCK TABLES `courses` WRITE;
/*!40000 ALTER TABLE `courses` DISABLE KEYS */;
INSERT INTO `courses` VALUES ('AUTE3010','Intro to Automotive Engineering','42250',1001,'2021','Fall','1'),('BUSI1000','Intro to Accounting','40050',1004,'2021','Fall','4'),('COMP3070','Algorithms','44500',1003,'2021','Fall','6'),('ECEE1000','Intro to Early Childhood','42100',1007,'2021','Fall','7'),('ELEE3200','Electric Circuits','41000',1001,'2021','Winter','2'),('MATH1010','Calculus','40010',1002,'2020','Fall','2'),('MECE3220','Machine Design','44210',1002,'2022','Winter','3'),('MEDI1000','Intro to Medicine','41500',1006,'2022','Winter','5'),('SOFE3450','Data Management System','40100',1000,'2021','Fall','2'),('SOFE3450','Data Management System','40101',1002,'2021','Fall','2');
/*!40000 ALTER TABLE `courses` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-11-29 18:46:58
