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
INSERT INTO `contact` VALUES (1,6285692535495,'Jl. Kegausan Raya , No.36 Keluarahan Ragunan \r\nKecamatan Pasar Minggu','Carpink@Cingprung.krik','1404512');
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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `message`
--

LOCK TABLES `message` WRITE;
/*!40000 ALTER TABLE `message` DISABLE KEYS */;
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
  `telp` int(12) NOT NULL,
  `qty` int(11) NOT NULL,
  `payment_method` varchar(30) NOT NULL,
  `date_purchased` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_modify` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_order`),
  KEY `id_user` (`id_user`,`id_product`),
  KEY `id_product` (`id_product`),
  KEY `id_product_2` (`id_product`),
  KEY `id_product_3` (`id_product`),
  CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (1,1,2,'Hendry','Software Transformator','Jl. Kutilang 4 No.41','Depok',16432,'Jawa Barat','Indonesia',2147483647,1,'cod','2013-02-05 17:00:24',NULL),(2,1,4,'Hendry Rafdi','Software Transformator','Jl. Kutilang 4 No.41','Depok',16432,'Jawa Barat','Indonesia',2147483647,1,'cod','2013-02-05 17:00:24',NULL),(3,1,1,'Hendry Rafdi','Software Transformator','Jl. Kutilang 4 No.41','Depok',16432,'Jawa Barat','Indonesia',2147483647,1,'cod','2013-02-05 17:00:24',NULL),(4,7,5,'Frets Eric','Capricornboy','Jl. Raya Bogor','Jakarta Timur',13425,'DKI Jakarta','Indonesia',901920901,1,'cod','2013-02-05 17:00:24',NULL),(5,9,1,'alsolendski prakoso','','Jl. Raya Bogor','Depok',16432,'Jawa Barat','Indonesia',818898983,1,'cod','2013-02-07 17:00:24',NULL),(6,9,3,'alsolendski prakoso','','Jl. Raya Bogor','Depok',16432,'Jawa Barat','Indonesia',818898983,1,'cod','2013-02-07 17:00:24',NULL),(7,2,1,'Rizqi Fadilla','jksjdsk','Condet City','Jakarta Timur',13520,'Jawa Barat','Indonesia',901920901,1,'cod','2013-03-11 17:00:24',NULL),(8,2,3,'Rizqi Fadilla','jksjdsk','Condet City','Jakarta Timur',13520,'Jawa Barat','Indonesia',901920901,1,'cod','2013-03-11 17:00:24',NULL);
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
  CONSTRAINT `product_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `category` (`id_category`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES (1,1,'Mac Book Pro','images/product/08 Form Laporan Data Pendafta Per Jurusan.jpg','Apple notebook with pink skin','6000000','2013-01-31 12:51:26','2013-01-31 12:51:26'),(2,1,'Apple Mac PCC','../images/product/05 Form Input Biodata.jpg','Apple PC Desktop with Pink Skin','4800000','2013-02-01 01:48:08',NULL),(3,3,'iPhone5','images/product/product-5.jpg','New iPhone 5','5000000','2013-02-01 01:48:08',NULL),(4,1,'Apple Mac PC','images/product/product-2.jpg','Apple PC Desktop','4800000','2013-02-01 01:55:39','2013-02-01 01:57:19'),(5,3,'iPhone4','images/product/product-12.jpg','iPhone4 3G','4000000','2013-02-01 01:55:39','2013-02-01 01:55:39');
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
INSERT INTO `slideshow` VALUES (1,'Apple Macbook Air','images/slideshow/Apple Macbook Air.jpg'),(2,'Iphone','images/slideshow/iphone.jpg'),(3,'Iphone5','images/slideshow/iphone5.jpg'),(4,'iphone-5','images/slideshow/iphone-5.jpg');
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
  `password` varchar(20) NOT NULL,
  `level` varchar(1) NOT NULL,
  PRIMARY KEY (`id_user`,`email`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'Hendry','Rafdi','l','Depok','1996-01-25','',12321930,'hendry.rafdi@live.com','amoeba123','a'),(2,'Rizqi','Fadilla','l','jakarta','1996-10-22','Condet City',901920901,'dilafadila48@yahoo.com','bebas','a'),(3,'Depok','City','l','Depok','1999-01-02','Depok',1293123,'depok@city.co.id','depok','u'),(6,'Momo','Pedro','p','Jakarta','2013-02-04','Jakarta',901920901,'momo@gmail.com','momo','u'),(7,'Ambon','Eric','l','Ambon','1995-12-01','Jakarta',19023123,'ambon@capricornboy.tk','123456','a'),(8,'Geisha','','p','jakarta','1991-01-01','Jakarta',2109312,'geisha@momo.com','123','u'),(9,'alsolendski','prakoso','l','jakarta','2004-02-03','lfalkfjdklfj',0,'alsolendski@gmail.com','123123','u');
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

-- Dump completed on 2013-03-14  9:21:45
