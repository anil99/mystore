-- MySQL dump 10.13  Distrib 5.6.30, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: school
-- ------------------------------------------------------
-- Server version	5.6.30-0ubuntu0.14.04.1

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
-- Table structure for table `MyGuests`
--

DROP TABLE IF EXISTS `MyGuests`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `MyGuests` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `MyGuests`
--

LOCK TABLES `MyGuests` WRITE;
/*!40000 ALTER TABLE `MyGuests` DISABLE KEYS */;
INSERT INTO `MyGuests` VALUES (1,'John','Doe','john@example.com','2016-10-23 13:40:51');
/*!40000 ALTER TABLE `MyGuests` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `authintication`
--

DROP TABLE IF EXISTS `authintication`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `authintication` (
  `password` int(6) NOT NULL,
  `user` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`password`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `authintication`
--

LOCK TABLES `authintication` WRITE;
/*!40000 ALTER TABLE `authintication` DISABLE KEYS */;
INSERT INTO `authintication` VALUES (1358,'2014ucp1358'),(1507,'2014ucp1507');
/*!40000 ALTER TABLE `authintication` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `book`
--

DROP TABLE IF EXISTS `book`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `book` (
  `book_name` varchar(25) DEFAULT NULL,
  `Author` varchar(25) DEFAULT NULL,
  `s_no` int(11) NOT NULL,
  `title` varchar(25) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `book`
--

LOCK TABLES `book` WRITE;
/*!40000 ALTER TABLE `book` DISABLE KEYS */;
INSERT INTO `book` VALUES ('','',0,'',0),('s.l.loni','loni',12,'jee_trigonometry',250),('iit chemistry','Lbahadur',32,'jee_chemistry',350),('iit physics by saneev','sanjeev gupta',50,'jee_physics',200),('comp architectre','asdf',102,'study',0),('data base system','sudarshan',337,'dbms',0);
/*!40000 ALTER TABLE `book` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `borrow`
--

DROP TABLE IF EXISTS `borrow`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `borrow` (
  `book_name` varchar(25) DEFAULT NULL,
  `Author` varchar(25) DEFAULT NULL,
  `s_no` int(11) NOT NULL,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `borrow`
--

LOCK TABLES `borrow` WRITE;
/*!40000 ALTER TABLE `borrow` DISABLE KEYS */;
INSERT INTO `borrow` VALUES ('','',0),('s.l.loni','loni',12),('s.l.loni','Lbahadur',23),('iit chemistry',' Lbahadur',32),('iit physics by saneev','sanjeev gupta',50),('iit chemistry','sudarshan',112),('data base system','sudarshan',123),('data base system','sudarshan',337),('data base system','Lbahadur',465);
/*!40000 ALTER TABLE `borrow` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reader`
--

DROP TABLE IF EXISTS `reader`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reader` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(25) DEFAULT NULL,
  `department` varchar(25) DEFAULT NULL,
  `phone` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reader`
--

LOCK TABLES `reader` WRITE;
/*!40000 ALTER TABLE `reader` DISABLE KEYS */;
/*!40000 ALTER TABLE `reader` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `retu`
--

DROP TABLE IF EXISTS `retu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `retu` (
  `book_name` varchar(25) DEFAULT NULL,
  `Author` varchar(25) DEFAULT NULL,
  `s_no` int(11) NOT NULL,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `retu`
--

LOCK TABLES `retu` WRITE;
/*!40000 ALTER TABLE `retu` DISABLE KEYS */;
INSERT INTO `retu` VALUES ('','',0),('efferfefrfe','rferfrg',2),('fggfffghgh','errttr',7),('','anil',9),('s.l.loni','loni',12),('data base system','fgfhg',23),('s.l.loni','loni',32),('ggggggggggggggggg','hhhhhhhhhhhhhhhhhhh',89),('data base system','sudarshan',123),('rerrgtr','awqe',332),('data base system','sudarshan',337),('sfdgfhgjhkh','dfghgfhghh',7879),('','aaaaaaaaaaaaaaa',77666);
/*!40000 ALTER TABLE `retu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `staff` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `staff`
--

LOCK TABLES `staff` WRITE;
/*!40000 ALTER TABLE `staff` DISABLE KEYS */;
INSERT INTO `staff` VALUES (1,'anil'),(2,'himanshu');
/*!40000 ALTER TABLE `staff` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student` (
  `id` varchar(12) NOT NULL,
  `Name` varchar(25) DEFAULT NULL,
  `department` varchar(25) DEFAULT NULL,
  `year` int(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student`
--

LOCK TABLES `student` WRITE;
/*!40000 ALTER TABLE `student` DISABLE KEYS */;
INSERT INTO `student` VALUES ('2014uch1439','sandeep','chemical',3),('2014uch1629','ggdfg','cse',3),('2014ucp1102','himanshu chawariya','cse',3),('2014ucp1152','gjhjhj','cse',3),('2014ucp1393','himanshu ','cse',3),('2014ucp1449','girraj meena','cse',3),('2014ucp1460','aastha','cse',3),('2014ucp1507','anil dhaked','cse',3),('2014ucp1515','nikhil yadav','cse',3),('2014ucp1517','hemendra','cse',3),('2014ucp1523','esrgt','cse',3),('2014UCP1558','XYZ','cse',3),('2014ucp1588','ankit','computer science',2014),('2014ucp1996','megha','cse',3),('214ucp12112','rahhul','cse',2014);
/*!40000 ALTER TABLE `student` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student_authentication`
--

DROP TABLE IF EXISTS `student_authentication`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student_authentication` (
  `user` varchar(25) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`password`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student_authentication`
--

LOCK TABLES `student_authentication` WRITE;
/*!40000 ALTER TABLE `student_authentication` DISABLE KEYS */;
INSERT INTO `student_authentication` VALUES ('ankit','2014ucp1358'),('himanshu','2014ucp1393'),('anil','2014ucp1507'),('nikhil','2014ucp1515');
/*!40000 ALTER TABLE `student_authentication` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `first` varchar(128) NOT NULL,
  `last` varchar(128) NOT NULL,
  `uid` varchar(128) NOT NULL,
  `pwd` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'','','',''),(2,'himanshu','barad','mikku','1393'),(3,'himanshu','chawaria','prince','1102'),(4,'','','',''),(5,'','','',''),(6,'','','mikku','1393'),(7,'','','',''),(8,'','','',''),(9,'','','',''),(10,'','','',''),(11,'','','',''),(12,'fgf','bbvv','vbvn','bvn'),(13,'ghgh','ghhjj','hjhhhh','ghghghk'),(14,'ghgh','ghhjj','hjhhhh','ghg');
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

-- Dump completed on 2016-12-05 17:53:12
