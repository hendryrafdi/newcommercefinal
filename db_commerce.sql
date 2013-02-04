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
  `product_name` varchar(40) NOT NULL,
  `customer_name` varchar(40) NOT NULL,
  `customer_company` varchar(40) DEFAULT NULL,
  `address` text NOT NULL,
  `city` varchar(30) NOT NULL,
  `postcode` int(10) NOT NULL,
  `state` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `telp` int(12) NOT NULL,
  `payment_method` varchar(30) NOT NULL,
  `date_purchased` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_modify` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_order`),
  KEY `id_user` (`id_user`,`id_product`),
  KEY `id_product` (`id_product`),
  KEY `id_product_2` (`id_product`),
  KEY `id_product_3` (`id_product`),
  CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
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
  `nm_product` varchar(40) NOT NULL,
  `image` varchar(255) NOT NULL,
  `desc` varchar(255) NOT NULL,
  `category` varchar(30) NOT NULL,
  `price` int(255) NOT NULL,
  `product_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `product_last_modify` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_product`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES (1,'Mac Book Pro','images/product/product-6.jpg','Apple notebook with pink skin','Computer',6000000,'2013-01-31 12:51:26','2013-01-31 12:51:26'),(2,'Apple Mac PC','images/product/product-4.jpg','Apple PC Desktop with Pink Skin','Computer',4800000,'2013-02-01 01:48:08',NULL),(3,'iPhone5','images/product/product-5.jpg','New iPhone 5','Gadget',5000000,'2013-02-01 01:48:08',NULL),(4,'Apple Mac PC','images/product/product-2.jpg','Apple PC Desktop','Computer',4800000,'2013-02-01 01:55:39','2013-02-01 01:57:19'),(5,'iPhone4','images/product/product-12.jpg','iPhone4 3G','Gadget',4000000,'2013-02-01 01:55:39','2013-02-01 01:55:39');
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
  CONSTRAINT `shoppingcart_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shoppingcart`
--

LOCK TABLES `shoppingcart` WRITE;
/*!40000 ALTER TABLE `shoppingcart` DISABLE KEYS */;
INSERT INTO `shoppingcart` VALUES (1,2,'i8mggl26mt8k76eatmtm441sl2','2013-02-01 17:00:24',1),(2,2,'3nmj3t2el7e336thc7olqbq0q3','2013-02-03 17:00:24',3),(3,1,'3nmj3t2el7e336thc7olqbq0q3','2013-02-03 17:00:24',1),(4,5,'3nmj3t2el7e336thc7olqbq0q3','2013-02-03 17:00:24',1),(5,4,'3nmj3t2el7e336thc7olqbq0q3','2013-02-03 17:00:24',1);
/*!40000 ALTER TABLE `shoppingcart` ENABLE KEYS */;
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
  `l_name` varchar(20) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `birthday_place` varchar(30) NOT NULL,
  `birthday` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `telp` int(12) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id_user`,`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
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

-- Dump completed on 2013-02-04  9:40:03
