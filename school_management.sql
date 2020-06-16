-- MySQL dump 10.16  Distrib 10.1.37-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: school_management
-- ------------------------------------------------------
-- Server version	10.1.37-MariaDB

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
-- Table structure for table `first_semester_evaluation`
--

DROP TABLE IF EXISTS `first_semester_evaluation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `first_semester_evaluation` (
  `studentId` int(11) NOT NULL,
  `arabic` varchar(5) DEFAULT NULL,
  `english` varchar(5) DEFAULT NULL,
  `socialStudies` varchar(5) DEFAULT NULL,
  `math` varchar(5) DEFAULT NULL,
  `sciences` varchar(5) DEFAULT NULL,
  `activity_1` varchar(5) DEFAULT NULL,
  `activity_2` varchar(5) DEFAULT NULL,
  `religion` varchar(5) DEFAULT NULL,
  `computer` varchar(5) DEFAULT NULL,
  `draw` varchar(5) DEFAULT NULL,
  KEY `student_Id` (`studentId`),
  CONSTRAINT `student_Id` FOREIGN KEY (`studentId`) REFERENCES `students_data` (`studentId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `first_semester_practical`
--

DROP TABLE IF EXISTS `first_semester_practical`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `first_semester_practical` (
  `studentId` int(11) DEFAULT NULL,
  `sciences` varchar(5) DEFAULT '0',
  `computer` varchar(5) DEFAULT '0',
  KEY `fsp_student_Id` (`studentId`),
  CONSTRAINT `fsp_student_Id` FOREIGN KEY (`studentId`) REFERENCES `students_data` (`studentId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `first_semester_written`
--

DROP TABLE IF EXISTS `first_semester_written`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `first_semester_written` (
  `studentId` int(11) DEFAULT NULL,
  `arabic` varchar(5) DEFAULT '0',
  `english` varchar(5) DEFAULT '0',
  `socialStudies` varchar(5) DEFAULT '0',
  `aljebra` varchar(5) DEFAULT '0',
  `geometry` varchar(5) DEFAULT '0',
  `sciences` varchar(5) DEFAULT '0',
  `religion` varchar(5) DEFAULT '0',
  `computer` varchar(5) DEFAULT '0',
  `draw` varchar(5) DEFAULT '0',
  KEY `fsw_student_Id` (`studentId`),
  CONSTRAINT `fsw_student_Id` FOREIGN KEY (`studentId`) REFERENCES `students_data` (`studentId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Temporary table structure for view `fs_degs`
--

DROP TABLE IF EXISTS `fs_degs`;
/*!50001 DROP VIEW IF EXISTS `fs_degs`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `fs_degs` (
  `studentId` tinyint NOT NULL,
  `sittingNumber` tinyint NOT NULL,
  `studentName` tinyint NOT NULL,
  `enrollmentStatus` tinyint NOT NULL,
  `classNumber` tinyint NOT NULL,
  `grade` tinyint NOT NULL,
  `fse_arabic` tinyint NOT NULL,
  `fsw_arabic` tinyint NOT NULL,
  `fse_english` tinyint NOT NULL,
  `fsw_english` tinyint NOT NULL,
  `fse_social` tinyint NOT NULL,
  `fsw_social` tinyint NOT NULL,
  `fse_math` tinyint NOT NULL,
  `fsw_aljebra` tinyint NOT NULL,
  `fsw_geometry` tinyint NOT NULL,
  `fse_sciences` tinyint NOT NULL,
  `fsp_sciences` tinyint NOT NULL,
  `fsw_sciences` tinyint NOT NULL,
  `fse_activity_1` tinyint NOT NULL,
  `fse_activity_2` tinyint NOT NULL,
  `fse_religion` tinyint NOT NULL,
  `fsw_religion` tinyint NOT NULL,
  `fse_computer` tinyint NOT NULL,
  `fsp_computer` tinyint NOT NULL,
  `fsw_computer` tinyint NOT NULL,
  `fse_draw` tinyint NOT NULL,
  `fsw_draw` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `fs_sheet`
--

DROP TABLE IF EXISTS `fs_sheet`;
/*!50001 DROP VIEW IF EXISTS `fs_sheet`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `fs_sheet` (
  `data_studentId` tinyint NOT NULL,
  `data_sittingNumber` tinyint NOT NULL,
  `data_studentName` tinyint NOT NULL,
  `data_classNumber` tinyint NOT NULL,
  `enrollmentStatus` tinyint NOT NULL,
  `data_grade` tinyint NOT NULL,
  `fse_arabic` tinyint NOT NULL,
  `fsw_arabic` tinyint NOT NULL,
  `fs_arabic_total` tinyint NOT NULL,
  `fs_arabic_grade` tinyint NOT NULL,
  `fse_english` tinyint NOT NULL,
  `fsw_english` tinyint NOT NULL,
  `fs_english_total` tinyint NOT NULL,
  `fs_english_grade` tinyint NOT NULL,
  `fse_social` tinyint NOT NULL,
  `fsw_social` tinyint NOT NULL,
  `fs_social_total` tinyint NOT NULL,
  `fs_social_grade` tinyint NOT NULL,
  `fse_math` tinyint NOT NULL,
  `fsw_aljebra` tinyint NOT NULL,
  `fsw_geometry` tinyint NOT NULL,
  `fs_math_total` tinyint NOT NULL,
  `fs_math_grade` tinyint NOT NULL,
  `fse_sciences` tinyint NOT NULL,
  `fsp_sciences` tinyint NOT NULL,
  `fsw_sciences` tinyint NOT NULL,
  `fs_sciences_total` tinyint NOT NULL,
  `fs_sciences_grade` tinyint NOT NULL,
  `fs_full_total` tinyint NOT NULL,
  `fs_full_grade` tinyint NOT NULL,
  `fse_activity_1_total` tinyint NOT NULL,
  `fs_activity_1_grade` tinyint NOT NULL,
  `fse_activity_2_total` tinyint NOT NULL,
  `fs_activity_2_grade` tinyint NOT NULL,
  `fse_religion` tinyint NOT NULL,
  `fsw_religion` tinyint NOT NULL,
  `fs_religion_total` tinyint NOT NULL,
  `fs_religion_grade` tinyint NOT NULL,
  `fse_computer` tinyint NOT NULL,
  `fsp_computer` tinyint NOT NULL,
  `fsw_computer` tinyint NOT NULL,
  `fs_computer_total` tinyint NOT NULL,
  `fs_computer_grade` tinyint NOT NULL,
  `fse_draw` tinyint NOT NULL,
  `fsw_draw` tinyint NOT NULL,
  `fs_draw_total` tinyint NOT NULL,
  `fs_draw_grade` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `fs_totals`
--

DROP TABLE IF EXISTS `fs_totals`;
/*!50001 DROP VIEW IF EXISTS `fs_totals`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `fs_totals` (
  `studentId` tinyint NOT NULL,
  `sittingNumber` tinyint NOT NULL,
  `studentName` tinyint NOT NULL,
  `enrollmentStatus` tinyint NOT NULL,
  `classNumber` tinyint NOT NULL,
  `grade` tinyint NOT NULL,
  `fse_arabic` tinyint NOT NULL,
  `fsw_arabic` tinyint NOT NULL,
  `fs_arabic_total` tinyint NOT NULL,
  `fse_english` tinyint NOT NULL,
  `fsw_english` tinyint NOT NULL,
  `fs_english_total` tinyint NOT NULL,
  `fse_social` tinyint NOT NULL,
  `fsw_social` tinyint NOT NULL,
  `fs_social_total` tinyint NOT NULL,
  `fse_math` tinyint NOT NULL,
  `fsw_aljebra` tinyint NOT NULL,
  `fsw_geometry` tinyint NOT NULL,
  `fs_math_total` tinyint NOT NULL,
  `fse_sciences` tinyint NOT NULL,
  `fsp_sciences` tinyint NOT NULL,
  `fsw_sciences` tinyint NOT NULL,
  `fs_sciences_total` tinyint NOT NULL,
  `fse_activity_1` tinyint NOT NULL,
  `fse_activity_2` tinyint NOT NULL,
  `fse_religion` tinyint NOT NULL,
  `fsw_religion` tinyint NOT NULL,
  `fs_religion_total` tinyint NOT NULL,
  `fse_computer` tinyint NOT NULL,
  `fsp_computer` tinyint NOT NULL,
  `fsw_computer` tinyint NOT NULL,
  `fs_computer_total` tinyint NOT NULL,
  `fse_draw` tinyint NOT NULL,
  `fsw_draw` tinyint NOT NULL,
  `fs_draw_total` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `school_data`
--

DROP TABLE IF EXISTS `school_data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `school_data` (
  `governorate` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `administration` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `school_name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `manager_name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `control_cheaf` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `academic_year` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `calc_date` date DEFAULT NULL,
  `second_round_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `second_semester_evaluation`
--

DROP TABLE IF EXISTS `second_semester_evaluation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `second_semester_evaluation` (
  `studentId` int(11) DEFAULT NULL,
  `arabic` varchar(5) DEFAULT '0',
  `english` varchar(5) DEFAULT '0',
  `socialStudies` varchar(5) DEFAULT '0',
  `math` varchar(5) DEFAULT '0',
  `sciences` varchar(5) DEFAULT '0',
  `activity_1` varchar(5) DEFAULT '0',
  `activity_2` varchar(5) DEFAULT '0',
  `religion` varchar(5) DEFAULT '0',
  `computer` varchar(5) DEFAULT '0',
  `draw` varchar(5) DEFAULT '0',
  KEY `sse_student_Id` (`studentId`),
  CONSTRAINT `sse_student_Id` FOREIGN KEY (`studentId`) REFERENCES `students_data` (`studentId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `second_semester_practical`
--

DROP TABLE IF EXISTS `second_semester_practical`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `second_semester_practical` (
  `studentId` int(11) DEFAULT NULL,
  `sciences` varchar(5) DEFAULT '0',
  `computer` varchar(5) DEFAULT '0',
  KEY `ssp_student_Id` (`studentId`),
  CONSTRAINT `ssp_student_Id` FOREIGN KEY (`studentId`) REFERENCES `students_data` (`studentId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `second_semester_written`
--

DROP TABLE IF EXISTS `second_semester_written`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `second_semester_written` (
  `studentId` int(11) DEFAULT NULL,
  `arabic` varchar(5) DEFAULT '0',
  `english` varchar(5) DEFAULT '0',
  `socialStudies` varchar(5) DEFAULT '0',
  `aljebra` varchar(5) DEFAULT '0',
  `geometry` varchar(5) DEFAULT '0',
  `sciences` varchar(5) DEFAULT '0',
  `religion` varchar(5) DEFAULT '0',
  `computer` varchar(5) DEFAULT '0',
  `draw` varchar(5) DEFAULT '0',
  KEY `ssw_student_Id` (`studentId`),
  CONSTRAINT `ssw_student_Id` FOREIGN KEY (`studentId`) REFERENCES `students_data` (`studentId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `secret_numbers`
--

DROP TABLE IF EXISTS `secret_numbers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `secret_numbers` (
  `studentId` int(11) DEFAULT NULL,
  `sittingNumber` int(11) DEFAULT '0',
  `firstTerm` int(11) DEFAULT NULL,
  `secondTerm` int(11) DEFAULT NULL,
  UNIQUE KEY `studentId` (`studentId`),
  UNIQUE KEY `firstTerm` (`firstTerm`),
  UNIQUE KEY `secondTerm` (`secondTerm`),
  CONSTRAINT `sn_student_Id` FOREIGN KEY (`studentId`) REFERENCES `students_data` (`studentId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `students_data`
--

DROP TABLE IF EXISTS `students_data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `students_data` (
  `studentId` int(11) NOT NULL AUTO_INCREMENT,
  `studentName` varchar(255) NOT NULL,
  `enrollmentStatus` enum('مستجد','معيد') CHARACTER SET utf8mb4 NOT NULL,
  `classNumber` int(11) NOT NULL,
  `religion` char(6) CHARACTER SET utf8mb4 NOT NULL,
  `sex` char(5) CHARACTER SET utf8mb4 NOT NULL,
  `nationalId` varchar(255) NOT NULL,
  `pirthDate` date NOT NULL,
  `day` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `grade` int(11) NOT NULL DEFAULT '1',
  `studentCode` varchar(255) DEFAULT '---',
  PRIMARY KEY (`studentId`),
  UNIQUE KEY `studentId` (`studentId`)
) ENGINE=InnoDB AUTO_INCREMENT=541 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `temp`
--

DROP TABLE IF EXISTS `temp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `temp` (
  `studentId` int(11) DEFAULT NULL,
  `ssc` varchar(5) DEFAULT NULL,
  `cmp` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `test`
--

DROP TABLE IF EXISTS `test`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `val_1` varchar(10) DEFAULT NULL,
  `val_2` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `password` varchar(255) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `groupId` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`userId`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Final view structure for view `fs_degs`
--

/*!50001 DROP TABLE IF EXISTS `fs_degs`*/;
/*!50001 DROP VIEW IF EXISTS `fs_degs`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `fs_degs` AS select `data`.`studentId` AS `studentId`,`numbers`.`sittingNumber` AS `sittingNumber`,`data`.`studentName` AS `studentName`,`data`.`enrollmentStatus` AS `enrollmentStatus`,`data`.`classNumber` AS `classNumber`,`data`.`grade` AS `grade`,`GETDEG`(`fse`.`arabic`) AS `fse_arabic`,`GETDEG`(`fsw`.`arabic`) AS `fsw_arabic`,`GETDEG`(`fse`.`english`) AS `fse_english`,`GETDEG`(`fsw`.`english`) AS `fsw_english`,`GETDEG`(`fse`.`socialStudies`) AS `fse_social`,`GETDEG`(`fsw`.`socialStudies`) AS `fsw_social`,`GETDEG`(`fse`.`math`) AS `fse_math`,`GETDEG`(`fsw`.`aljebra`) AS `fsw_aljebra`,`GETDEG`(`fsw`.`geometry`) AS `fsw_geometry`,`GETDEG`(`fse`.`sciences`) AS `fse_sciences`,`GETDEG`(`fsp`.`sciences`) AS `fsp_sciences`,`GETDEG`(`fsw`.`sciences`) AS `fsw_sciences`,`GETDEG`(`fse`.`activity_1`) AS `fse_activity_1`,`GETDEG`(`fse`.`activity_2`) AS `fse_activity_2`,`GETDEG`(`fse`.`religion`) AS `fse_religion`,`GETDEG`(`fsw`.`religion`) AS `fsw_religion`,`GETDEG`(`fse`.`computer`) AS `fse_computer`,`GETDEG`(`fsp`.`computer`) AS `fsp_computer`,`GETDEG`(`fsw`.`computer`) AS `fsw_computer`,`GETDEG`(`fse`.`draw`) AS `fse_draw`,`GETDEG`(`fsw`.`draw`) AS `fsw_draw` from ((((`students_data` `data` left join `secret_numbers` `numbers` on((`data`.`studentId` = `numbers`.`studentId`))) left join `first_semester_evaluation` `fse` on((`data`.`studentId` = `fse`.`studentId`))) left join `first_semester_written` `fsw` on((`data`.`studentId` = `fsw`.`studentId`))) left join `first_semester_practical` `fsp` on((`data`.`studentId` = `fsp`.`studentId`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `fs_sheet`
--

/*!50001 DROP TABLE IF EXISTS `fs_sheet`*/;
/*!50001 DROP VIEW IF EXISTS `fs_sheet`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `fs_sheet` AS select `fs_totals`.`studentId` AS `data_studentId`,`fs_totals`.`sittingNumber` AS `data_sittingNumber`,`fs_totals`.`studentName` AS `data_studentName`,`fs_totals`.`classNumber` AS `data_classNumber`,`fs_totals`.`enrollmentStatus` AS `enrollmentStatus`,`fs_totals`.`grade` AS `data_grade`,`fs_totals`.`fse_arabic` AS `fse_arabic`,`fs_totals`.`fsw_arabic` AS `fsw_arabic`,`fs_totals`.`fs_arabic_total` AS `fs_arabic_total`,`GRADE`(40,`fs_totals`.`fs_arabic_total`) AS `fs_arabic_grade`,`fs_totals`.`fse_english` AS `fse_english`,`fs_totals`.`fsw_english` AS `fsw_english`,`fs_totals`.`fs_english_total` AS `fs_english_total`,`GRADE`(30,`fs_totals`.`fs_english_total`) AS `fs_english_grade`,`fs_totals`.`fse_social` AS `fse_social`,`fs_totals`.`fsw_social` AS `fsw_social`,`fs_totals`.`fs_social_total` AS `fs_social_total`,`GRADE`(20,`fs_totals`.`fs_social_total`) AS `fs_social_grade`,`fs_totals`.`fse_math` AS `fse_math`,`fs_totals`.`fsw_aljebra` AS `fsw_aljebra`,`fs_totals`.`fsw_geometry` AS `fsw_geometry`,`fs_totals`.`fs_math_total` AS `fs_math_total`,`GRADE`(30,`fs_totals`.`fs_math_total`) AS `fs_math_grade`,`fs_totals`.`fse_sciences` AS `fse_sciences`,`fs_totals`.`fsp_sciences` AS `fsp_sciences`,`fs_totals`.`fsw_sciences` AS `fsw_sciences`,`fs_totals`.`fs_sciences_total` AS `fs_sciences_total`,`GRADE`(20,`fs_totals`.`fs_sciences_total`) AS `fs_sciences_grade`,((((`fs_totals`.`fs_arabic_total` + `fs_totals`.`fs_english_total`) + `fs_totals`.`fs_social_total`) + `fs_totals`.`fs_math_total`) + `fs_totals`.`fs_sciences_total`) AS `fs_full_total`,`GRADE`(140,((((`fs_totals`.`fs_arabic_total` + `fs_totals`.`fs_english_total`) + `fs_totals`.`fs_social_total`) + `fs_totals`.`fs_math_total`) + `fs_totals`.`fs_sciences_total`)) AS `fs_full_grade`,`fs_totals`.`fse_activity_1` AS `fse_activity_1_total`,`GRADE`(100,`fs_totals`.`fse_activity_1`) AS `fs_activity_1_grade`,`fs_totals`.`fse_activity_2` AS `fse_activity_2_total`,`GRADE`(100,`fs_totals`.`fse_activity_2`) AS `fs_activity_2_grade`,`fs_totals`.`fse_religion` AS `fse_religion`,`fs_totals`.`fsw_religion` AS `fsw_religion`,`fs_totals`.`fs_religion_total` AS `fs_religion_total`,`GRADE`(20,`fs_totals`.`fs_religion_total`) AS `fs_religion_grade`,`fs_totals`.`fse_computer` AS `fse_computer`,`fs_totals`.`fsp_computer` AS `fsp_computer`,`fs_totals`.`fsw_computer` AS `fsw_computer`,`fs_totals`.`fs_computer_total` AS `fs_computer_total`,`GRADE`(10,`fs_totals`.`fs_computer_total`) AS `fs_computer_grade`,`fs_totals`.`fse_draw` AS `fse_draw`,`fs_totals`.`fsw_draw` AS `fsw_draw`,`fs_totals`.`fs_draw_total` AS `fs_draw_total`,`GRADE`(10,`fs_totals`.`fs_draw_total`) AS `fs_draw_grade` from `fs_totals` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `fs_totals`
--

/*!50001 DROP TABLE IF EXISTS `fs_totals`*/;
/*!50001 DROP VIEW IF EXISTS `fs_totals`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `fs_totals` AS select `fs_degs`.`studentId` AS `studentId`,`fs_degs`.`sittingNumber` AS `sittingNumber`,`fs_degs`.`studentName` AS `studentName`,`fs_degs`.`enrollmentStatus` AS `enrollmentStatus`,`fs_degs`.`classNumber` AS `classNumber`,`fs_degs`.`grade` AS `grade`,`fs_degs`.`fse_arabic` AS `fse_arabic`,`fs_degs`.`fsw_arabic` AS `fsw_arabic`,round(((`fs_degs`.`fse_arabic` + `fs_degs`.`fsw_arabic`) * 0.4),2) AS `fs_arabic_total`,`fs_degs`.`fse_english` AS `fse_english`,`fs_degs`.`fsw_english` AS `fsw_english`,round(((`fs_degs`.`fse_english` + `fs_degs`.`fsw_english`) * 0.3),2) AS `fs_english_total`,`fs_degs`.`fse_social` AS `fse_social`,`fs_degs`.`fsw_social` AS `fsw_social`,round(((`fs_degs`.`fse_social` + `fs_degs`.`fsw_social`) * 0.2),2) AS `fs_social_total`,`fs_degs`.`fse_math` AS `fse_math`,`fs_degs`.`fsw_aljebra` AS `fsw_aljebra`,`fs_degs`.`fsw_geometry` AS `fsw_geometry`,round((((`fs_degs`.`fse_math` + `fs_degs`.`fsw_aljebra`) + `fs_degs`.`fsw_geometry`) * 0.3),2) AS `fs_math_total`,`fs_degs`.`fse_sciences` AS `fse_sciences`,`fs_degs`.`fsp_sciences` AS `fsp_sciences`,`fs_degs`.`fsw_sciences` AS `fsw_sciences`,round((((`fs_degs`.`fse_sciences` + `fs_degs`.`fsp_sciences`) + `fs_degs`.`fsw_sciences`) * 0.2),2) AS `fs_sciences_total`,`fs_degs`.`fse_activity_1` AS `fse_activity_1`,`fs_degs`.`fse_activity_2` AS `fse_activity_2`,`fs_degs`.`fse_religion` AS `fse_religion`,`fs_degs`.`fsw_religion` AS `fsw_religion`,round(((`fs_degs`.`fse_religion` + `fs_degs`.`fsw_religion`) * 0.2),2) AS `fs_religion_total`,`fs_degs`.`fse_computer` AS `fse_computer`,`fs_degs`.`fsp_computer` AS `fsp_computer`,`fs_degs`.`fsw_computer` AS `fsw_computer`,round((((`fs_degs`.`fse_computer` + `fs_degs`.`fsp_computer`) + `fs_degs`.`fsw_computer`) * 0.1),2) AS `fs_computer_total`,`fs_degs`.`fse_draw` AS `fse_draw`,`fs_degs`.`fsw_draw` AS `fsw_draw`,round(((`fs_degs`.`fse_draw` + `fs_degs`.`fsw_draw`) * 0.1),2) AS `fs_draw_total` from `fs_degs` */;
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

-- Dump completed on 2020-06-16 23:56:09
