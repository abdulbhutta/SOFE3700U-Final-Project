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
-- Temporary view structure for view `cgpa`
--

DROP TABLE IF EXISTS `cgpa`;
/*!50001 DROP VIEW IF EXISTS `cgpa`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `cgpa` AS SELECT 
 1 AS `studentID`,
 1 AS `CGPA`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `d_eleecompsofe`
--

DROP TABLE IF EXISTS `d_eleecompsofe`;
/*!50001 DROP VIEW IF EXISTS `d_eleecompsofe`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `d_eleecompsofe` AS SELECT 
 1 AS `Fname`,
 1 AS `Lname`,
 1 AS `PhoneNumber`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `totalstudents`
--

DROP TABLE IF EXISTS `totalstudents`;
/*!50001 DROP VIEW IF EXISTS `totalstudents`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `totalstudents` AS SELECT 
 1 AS `COUNT(StudentID)`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `studentprogram`
--

DROP TABLE IF EXISTS `studentprogram`;
/*!50001 DROP VIEW IF EXISTS `studentprogram`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `studentprogram` AS SELECT 
 1 AS `StudentID`,
 1 AS `FName`,
 1 AS `LName`,
 1 AS `Year`,
 1 AS `ProgramName`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `gpa`
--

DROP TABLE IF EXISTS `gpa`;
/*!50001 DROP VIEW IF EXISTS `gpa`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `gpa` AS SELECT 
 1 AS `StudentID`,
 1 AS `CourseCode`,
 1 AS `CRN`,
 1 AS `ProfessorID`,
 1 AS `Term`,
 1 AS `Year`,
 1 AS `GPA`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `aboveclassavg`
--

DROP TABLE IF EXISTS `aboveclassavg`;
/*!50001 DROP VIEW IF EXISTS `aboveclassavg`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `aboveclassavg` AS SELECT 
 1 AS `StudentID`,
 1 AS `CourseCode`,
 1 AS `CRN`,
 1 AS `ProfessorID`,
 1 AS `Term`,
 1 AS `Year`,
 1 AS `GPA`*/;
SET character_set_client = @saved_cs_client;

--
-- Final view structure for view `cgpa`
--

/*!50001 DROP VIEW IF EXISTS `cgpa`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_0900_ai_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `cgpa` AS select distinct `a`.`studentID` AS `studentID`,(`a`.`GPASum` / `b`.`numOfCourses`) AS `CGPA` from ((select `grades`.`StudentID` AS `studentID`,sum(`gpaconvert`.`points`) AS `GPASum` from (`gpaconvert` join `grades`) where (`gpaconvert`.`grades` = `grades`.`LetterGrade`) group by `grades`.`StudentID`) `a` join (select `grades`.`StudentID` AS `studentID`,count(`grades`.`LetterGrade`) AS `numOfCourses` from `grades` group by `grades`.`StudentID`) `b`) where (`a`.`studentID` = `b`.`studentID`) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `d_eleecompsofe`
--

/*!50001 DROP VIEW IF EXISTS `d_eleecompsofe`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_0900_ai_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `d_eleecompsofe` AS select `professors`.`Fname` AS `Fname`,`professors`.`Lname` AS `Lname`,`professors`.`PhoneNumber` AS `PhoneNumber` from `professors` where (`professors`.`DepartmentID` = (select `departments`.`DepartmentID` from `departments` where (`departments`.`DepartmentName` = 'Department of Electrical, Computer, and Software Engineering'))) union select `administrators`.`FirstName` AS `Fname`,`administrators`.`LastName` AS `Lname`,`administrators`.`PhoneNumber` AS `PhoneNumber` from `administrators` where (`administrators`.`Department` = (select `departments`.`DepartmentID` from `departments` where (`departments`.`DepartmentName` = 'Department of Electrical, Computer, and Software Engineering'))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `totalstudents`
--

/*!50001 DROP VIEW IF EXISTS `totalstudents`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_0900_ai_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `totalstudents` AS select count(`students`.`StudentID`) AS `COUNT(StudentID)` from `students` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `studentprogram`
--

/*!50001 DROP VIEW IF EXISTS `studentprogram`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_0900_ai_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `studentprogram` AS select `students`.`StudentID` AS `StudentID`,`students`.`FName` AS `FName`,`students`.`LName` AS `LName`,`students`.`YEAR` AS `Year`,`program`.`ProgramName` AS `ProgramName` from (`students` left join `program` on((`students`.`Program` = `program`.`ProgramID`))) union select `students`.`StudentID` AS `StudentID`,`students`.`FName` AS `FName`,`students`.`LName` AS `LName`,`students`.`YEAR` AS `Year`,`program`.`ProgramName` AS `ProgramName` from (`program` left join `students` on((`students`.`Program` = `program`.`ProgramID`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `gpa`
--

/*!50001 DROP VIEW IF EXISTS `gpa`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_0900_ai_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `gpa` AS select distinct `grades`.`StudentID` AS `StudentID`,`grades`.`CourseCode` AS `CourseCode`,`grades`.`CRN` AS `CRN`,`grades`.`ProfessorID` AS `ProfessorID`,`grades`.`Term` AS `Term`,`grades`.`Year` AS `Year`,(select `gpaconvert`.`points` from `gpaconvert` where (`gpaconvert`.`grades` = `grades`.`LetterGrade`)) AS `GPA` from (`grades` join `cgpa`) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `aboveclassavg`
--

/*!50001 DROP VIEW IF EXISTS `aboveclassavg`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_0900_ai_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `aboveclassavg` AS select `a`.`StudentID` AS `StudentID`,`a`.`CourseCode` AS `CourseCode`,`a`.`CRN` AS `CRN`,`a`.`ProfessorID` AS `ProfessorID`,`a`.`Term` AS `Term`,`a`.`Year` AS `Year`,`a`.`GPA` AS `GPA` from `gpa` `a` where (`a`.`GPA` > (select avg(`gpa`.`GPA`) from `gpa` where ((`a`.`CourseCode` = `gpa`.`CourseCode`) and (`a`.`Year` = `gpa`.`Year`) and (`a`.`Term` = `gpa`.`Term`)))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-11-29 18:46:59
