-- MySQL dump 10.13  Distrib 5.1.41, for Win32 (ia32)
--
-- Host: localhost    Database: commerce_final
-- ------------------------------------------------------
-- Server version	5.1.41

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
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category` (
  `id_category` int(11) NOT NULL AUTO_INCREMENT,
  `nm_category` varchar(30) NOT NULL,
  PRIMARY KEY (`id_category`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES (1,'Computer'),(2,'Fashion'),(3,'Gadget');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contact` (
  `id_contact` int(11) NOT NULL AUTO_INCREMENT,
  `telp` bigint(30) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `fax` varchar(30) NOT NULL,
  PRIMARY KEY (`id_contact`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact`
--

LOCK TABLES `contact` WRITE;
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
INSERT INTO `contact` VALUES (1,6285692535496,'Jl. Kegausan Raya , No.37 Keluarahan Ragunan \r\nKecamatan Pasar Minggu','Carpink@Cingprung.com','1404517');
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `message`
--

DROP TABLE IF EXISTS `message`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `message` (
  `id_message` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `content` text NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_message`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `message`
--

LOCK TABLES `message` WRITE;
/*!40000 ALTER TABLE `message` DISABLE KEYS */;
INSERT INTO `message` VALUES (1,'Hendry','hendry.rafdi@live.com','Test','2013-03-14 13:27:34'),(2,'','','','2013-03-18 06:46:33'),(3,'','','','2013-03-18 06:47:54');
/*!40000 ALTER TABLE `message` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `id_order` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `customer_name` varchar(40) NOT NULL,
  `customer_company` varchar(40) DEFAULT NULL,
  `address` text NOT NULL,
  `city` varchar(30) NOT NULL,
  `postcode` int(10) NOT NULL,
  `state` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `telp` bigint(12) NOT NULL,
  `qty` int(11) NOT NULL,
  `payment_method` varchar(30) NOT NULL,
  `status` varchar(20) NOT NULL,
  `date_purchased` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_modify` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_order`),
  KEY `id_user` (`id_user`,`id_product`),
  KEY `id_product` (`id_product`),
  KEY `id_product_2` (`id_product`),
  KEY `id_product_3` (`id_product`),
  CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (1,1,2,'Hendry','Software Transformator','Jl. Kutilang 4 No.41','Depok',16432,'Jawa Barat','Indonesia',2147483647,1,'cod','active','2013-02-05 17:00:24',NULL),(2,1,4,'Hendry Rafdi','Software Transformator','Jl. Kutilang 4 No.41','Depok',16432,'Jawa Barat','Indonesia',2147483647,1,'cod','active','2013-02-05 17:00:24',NULL),(3,1,1,'Hendry Rafdi','Software Transformator','Jl. Kutilang 4 No.41','Depok',16432,'Jawa Barat','Indonesia',2147483647,1,'cod','pending','2013-02-05 17:00:24',NULL),(4,7,5,'Frets Eric','Capricornboy','Jl. Raya Bogor','Jakarta Timur',13425,'DKI Jakarta','Indonesia',901920901,1,'cod','pending','2013-02-05 17:00:24',NULL),(7,2,1,'Rizqi Fadilla','jksjdsk','Condet City','Jakarta Timur',13520,'Jawa Barat','Indonesia',901920901,1,'cod','deactive','2013-03-11 17:00:24',NULL),(8,1,7,'Cir Indomil','','Jl. Cisarua Raya','Depok',16421,'Jawa Barat','Indonesia',81238912099,1,'cod','pending','2013-03-24 17:00:24',NULL),(9,1,1,'Hendry Rafdi','','Jl. Sederhana No. 49','Depok',16421,'Jawa Barat','Indonesia',12321930,1,'cod','pending','2013-03-25 17:00:24',NULL),(10,1,1,'Hendry Rafdi','','Jl. Sederhana No. 49','Depok',16421,'Jawa Barat','Indonesia',12321930,1,'cod','pending','2013-03-25 17:00:24',NULL),(11,1,7,'Hendry Rafdi','Softtranz','Congok','Jakarta Pusat',16421,'DKI Jakarta','Indonesia',12321930,1,'cod','pending','2013-03-25 17:00:24',NULL),(12,1,3,'Hendry Rafdi','Band','Canjur','Bogor',16421,'Jawa Barat','Indonesia',12321930,1,'cod','pending','2013-03-25 17:00:24',NULL),(13,9,3,'nama belakang','','jakarta','Depok',16421,'Jawa Barat','Indonesia',2147483647,4,'cod','pending','2013-03-25 17:00:24',NULL),(14,9,5,'nama belakang','','jakarta','Depok',16421,'Jawa Barat','Indonesia',2147483647,1,'cod','active','2013-03-25 17:00:24',NULL),(15,1,7,'Hendry Rafdi','','Jl. Sederhana No. 49','Depok',16421,'Jawa Barat','Indonesia',12321930,1,'cod','pending','2013-03-27 17:00:24',NULL);
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product` (
  `id_product` int(11) NOT NULL AUTO_INCREMENT,
  `id_category` int(11) NOT NULL,
  `nm_product` varchar(40) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `product_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `product_last_modify` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_product`),
  KEY `id_category` (`id_category`),
  CONSTRAINT `product_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `category` (`id_category`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES (1,1,'Dark Chocolate','../images/product/product-11.jpg','No Sugar Chocolate','80000','2013-01-31 12:51:26','2013-01-31 12:51:26'),(3,3,'iPhone5','../images/product/product-5.jpg','New iPhone 5','5000000','2013-02-01 01:48:08',NULL),(4,1,'Apple Mac PC','../images/product/product-2.jpg','Apple PC Desktop','4800000','2013-02-01 01:55:39','2013-03-14 12:40:48'),(5,3,'iPhone4','../images/product/product-1.jpg','iPhone4 3G','4000000','2013-02-01 01:55:39','2013-03-14 12:40:48'),(7,1,'Apple PC','../images/product/apple pc.jpg','','2000000','2013-03-14 13:18:58',NULL);
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shoppingcart`
--

DROP TABLE IF EXISTS `shoppingcart`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shoppingcart` (
  `id_shopping` int(11) NOT NULL AUTO_INCREMENT,
  `id_product` int(11) NOT NULL,
  `id_session` varchar(100) NOT NULL,
  `shopping_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `qty` int(10) NOT NULL,
  `total` bigint(255) NOT NULL,
  PRIMARY KEY (`id_shopping`),
  KEY `id_product` (`id_product`),
  CONSTRAINT `shoppingcart_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shoppingcart`
--

LOCK TABLES `shoppingcart` WRITE;
/*!40000 ALTER TABLE `shoppingcart` DISABLE KEYS */;
/*!40000 ALTER TABLE `shoppingcart` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `slideshow`
--

DROP TABLE IF EXISTS `slideshow`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `slideshow` (
  `id_slide` int(11) NOT NULL AUTO_INCREMENT,
  `nm_slide` varchar(30) NOT NULL,
  `link` text NOT NULL,
  PRIMARY KEY (`id_slide`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `slideshow`
--

LOCK TABLES `slideshow` WRITE;
/*!40000 ALTER TABLE `slideshow` DISABLE KEYS */;
INSERT INTO `slideshow` VALUES (1,'Apple Macbook Air','../../images/slideshow/Apple Macbook Air.jpg'),(2,'Iphone','../../images/slideshow/iphone.jpg'),(3,'Iphone5','../../images/slideshow/iphone5.jpg'),(4,'iphone-5','../../images/slideshow/iphone-5.jpg');
/*!40000 ALTER TABLE `slideshow` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `f_name` varchar(20) NOT NULL,
  `l_name` varchar(20) DEFAULT NULL,
  `gender` varchar(1) NOT NULL,
  `birthday_place` varchar(30) NOT NULL,
  `birthday` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `telp` int(12) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` text NOT NULL,
  `level` varchar(1) NOT NULL,
  PRIMARY KEY (`id_user`,`email`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'Hendry','Rafdi','l','Depok','1996-01-25','',12321930,'hendry.rafdi@live.com','2a65a8b5f3bb1ac4697777713070eeec','a'),(2,'Rizqi','Fadilla','l','jakarta','1996-10-22','Condet City',901920901,'dilafadila48@yahoo.com','bebas','a'),(3,'Hendry','Abi','l','Depok','1999-01-02','Depok',1293123,'hendryrafdi@gmail.com','abc','u'),(6,'Momo','Pedro','p','Jakarta','2013-02-04','Jakarta',901920901,'momo@gmail.com','momo','u'),(7,'Ambon','Eric','l','Ambon','1995-12-01','Jakarta',19023123,'ambon@capricornboy.tk','123456','a'),(8,'Natasha','','p','Jakarta','1992-09-05','Jl. Sederhana No. 49',2147483647,'natasha@gmail.com','acb123','u'),(9,'nama','belakang','G','jakarta','2013-02-25','jakarta',2147483647,'test','pass','u'),(10,'Usro','Unyil','l','Jakarta','1997-02-02','Jl. Sederhana No. 49',2147483647,'test@gmail.com','202cb962ac59075b964b07152d234b70','u');
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

-- Dump completed on 2013-03-28  9:59:35
