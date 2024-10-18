-- MySQL dump 10.13  Distrib 8.0.39, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: pagina_web_street_tango
-- ------------------------------------------------------
-- Server version	8.0.39-0ubuntu0.24.04.1

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
-- Table structure for table `categorias`
--

DROP TABLE IF EXISTS `categorias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categorias` (
  `categorias_id` int NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `descripcion` text,
  PRIMARY KEY (`categorias_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categorias`
--

LOCK TABLES `categorias` WRITE;
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
INSERT INTO `categorias` VALUES (1,'pantalones','todos los tipos de pantalones'),(2,'Buzos','todos los tipos de Hoodies'),(3,'Body','todos los tipos de body'),(4,'Remeras','Todos los tipos de remeras: Boxy fit, Normales, Oversize, etc.');
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `color`
--

DROP TABLE IF EXISTS `color`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `color` (
  `color_id` int NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(50) NOT NULL,
  PRIMARY KEY (`color_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `color`
--

LOCK TABLES `color` WRITE;
/*!40000 ALTER TABLE `color` DISABLE KEYS */;
INSERT INTO `color` VALUES (1,'Negro'),(2,'Blanco'),(3,'verde'),(4,'gris'),(5,'Marron'),(6,'Rojo');
/*!40000 ALTER TABLE `color` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fechas`
--

DROP TABLE IF EXISTS `fechas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `fechas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fecha` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fechas`
--

LOCK TABLES `fechas` WRITE;
/*!40000 ALTER TABLE `fechas` DISABLE KEYS */;
/*!40000 ALTER TABLE `fechas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `producto_color`
--

DROP TABLE IF EXISTS `producto_color`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `producto_color` (
  `productos_id` int NOT NULL,
  `color_id` int NOT NULL,
  PRIMARY KEY (`productos_id`,`color_id`),
  KEY `color_id` (`color_id`),
  CONSTRAINT `producto_color_ibfk_1` FOREIGN KEY (`productos_id`) REFERENCES `productos` (`productos_id`),
  CONSTRAINT `producto_color_ibfk_2` FOREIGN KEY (`color_id`) REFERENCES `color` (`color_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `producto_color`
--

LOCK TABLES `producto_color` WRITE;
/*!40000 ALTER TABLE `producto_color` DISABLE KEYS */;
INSERT INTO `producto_color` VALUES (2,1),(5,1),(6,1),(5,2),(6,4),(5,5);
/*!40000 ALTER TABLE `producto_color` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `producto_talle`
--

DROP TABLE IF EXISTS `producto_talle`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `producto_talle` (
  `producto_id` int NOT NULL,
  `talle_id` int NOT NULL,
  PRIMARY KEY (`producto_id`,`talle_id`),
  KEY `talle_id` (`talle_id`),
  CONSTRAINT `producto_talle_ibfk_1` FOREIGN KEY (`producto_id`) REFERENCES `productos` (`productos_id`),
  CONSTRAINT `producto_talle_ibfk_2` FOREIGN KEY (`talle_id`) REFERENCES `talle` (`talle_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `producto_talle`
--

LOCK TABLES `producto_talle` WRITE;
/*!40000 ALTER TABLE `producto_talle` DISABLE KEYS */;
INSERT INTO `producto_talle` VALUES (2,1),(6,1),(5,2),(6,2),(5,3),(6,3),(5,4),(6,4);
/*!40000 ALTER TABLE `producto_talle` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `productos`
--

DROP TABLE IF EXISTS `productos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `productos` (
  `productos_id` int NOT NULL,
  `categoria_id` int DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `descripcion` text,
  `precio` int DEFAULT NULL,
  `marca` varchar(45) DEFAULT NULL,
  `genero` varchar(10) DEFAULT NULL,
  `ruta_imagen_dorso` text,
  `fecha_de_entrada` date DEFAULT NULL,
  `ruta_imagen_reverso` text,
  `descripcion_larga` text,
  `stock` int DEFAULT NULL,
  PRIMARY KEY (`productos_id`),
  KEY `categoria_id` (`categoria_id`),
  CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`categorias_id`),
  CONSTRAINT `productos_chk_1` CHECK ((`genero` in (_utf8mb4'Mujer',_utf8mb4'Hombre')))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productos`
--

LOCK TABLES `productos` WRITE;
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` VALUES (1,1,'Jean cargo baggy','Pantalon de jean cargo baggy',30,'Kiech','Mujer','https://acdn.mitiendanube.com/stores/001/497/956/products/8-f64e9408a2acbd5dad17258334074051-1024-1024.webp','2024-09-13','https://acdn.mitiendanube.com/stores/001/497/956/products/7-9f4c293f1401bc5aca17258334069651-1024-1024.webp',NULL,NULL),(2,2,'Hoodie love','Hoodie de corte boxy fit con bordado',20000,'Kiech','Hombre','https://acdn.mitiendanube.com/stores/001/497/956/products/1-c6124a31f902aeffc517258163877937-1024-1024.webp','2024-09-13','https://acdn.mitiendanube.com/stores/001/497/956/products/2-3fc33741afe2b8552a17258163871547-1024-1024.webp',NULL,NULL),(3,3,'Body MB','Body manga larga de tricot con cierre invisible ',5000,'Kiech','Mujer','https://acdn.mitiendanube.com/stores/001/497/956/products/23-49ef3cba535618d6ef17227330424354-1024-1024.webp','2024-09-13','https://acdn.mitiendanube.com/stores/001/497/956/products/22-05b768235cd197eeb917227330418618-1024-1024.webp',NULL,NULL),(4,2,'Buzo Crewneck Fmily','Buzo crewneck Fmily corte BOXY de algodòn con friza premium',20000,'Kiech','Hombre','https://acdn.mitiendanube.com/stores/001/497/956/products/17-13a8857b637c05643517227262206931-1024-1024.webp','2024-09-20','https://acdn.mitiendanube.com/stores/001/497/956/products/16-07027be10f64b4393a17227262212941-1024-1024.webp',NULL,NULL),(5,4,'Remera cali','Remera Cali de algodòn con lycra pesada de corte Boxy fit',40000,'kiech','Hombre','https://acdn.mitiendanube.com/stores/001/497/956/products/7-4111e5c5e94acfc8a817227398730408-1024-1024.webp','2024-10-04','https://acdn.mitiendanube.com/stores/001/497/956/products/8-d373949a0457369dd717227398725588-1024-1024.webp','Remera Cali confeccionada en algodòn con lycra pesada de corte BOXY fit. Tiene bordado en el delantero y una amplia estampa en la espalda.',NULL),(6,4,'Remera YB','Remera oversize de algodòn con lycra 24/1',35000,'kiech','Hombre','https://acdn.mitiendanube.com/stores/001/497/956/products/_dsc6172-1-d7cf6efb97f448788e17038722190738-1024-1024.webp','2024-10-04','https://acdn.mitiendanube.com/stores/001/497/956/products/_dsc6169-1-375452241512d2ebd317038723352513-1024-1024.webp','Remera oversize de algodòn con lycra 24/1 con estampa en pecho y espalda. ',NULL);
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reservas`
--

DROP TABLE IF EXISTS `reservas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `reservas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` text,
  `dni` int DEFAULT NULL,
  `telefono` int DEFAULT NULL,
  `mail` text,
  `users_id` int DEFAULT NULL,
  `color` varchar(50) DEFAULT NULL,
  `talle` varchar(50) DEFAULT NULL,
  `sucursal_id` int DEFAULT NULL,
  `fechas_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `users_id` (`users_id`),
  KEY `sucursal_id` (`sucursal_id`),
  KEY `fechas_id` (`fechas_id`),
  CONSTRAINT `reservas_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `users` (`usuario_id`),
  CONSTRAINT `reservas_ibfk_2` FOREIGN KEY (`sucursal_id`) REFERENCES `sucursales` (`id`),
  CONSTRAINT `reservas_ibfk_3` FOREIGN KEY (`fechas_id`) REFERENCES `fechas` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reservas`
--

LOCK TABLES `reservas` WRITE;
/*!40000 ALTER TABLE `reservas` DISABLE KEYS */;
/*!40000 ALTER TABLE `reservas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sucursales`
--

DROP TABLE IF EXISTS `sucursales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sucursales` (
  `id` int NOT NULL AUTO_INCREMENT,
  `direccion` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sucursales`
--

LOCK TABLES `sucursales` WRITE;
/*!40000 ALTER TABLE `sucursales` DISABLE KEYS */;
/*!40000 ALTER TABLE `sucursales` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `talle`
--

DROP TABLE IF EXISTS `talle`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `talle` (
  `talle_id` int NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(50) NOT NULL,
  PRIMARY KEY (`talle_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `talle`
--

LOCK TABLES `talle` WRITE;
/*!40000 ALTER TABLE `talle` DISABLE KEYS */;
INSERT INTO `talle` VALUES (1,'Medium'),(2,'Small'),(3,'Large'),(4,'Extra-Large'),(5,'Extra-Small');
/*!40000 ALTER TABLE `talle` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `usuario_id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `apellido` varchar(45) DEFAULT NULL,
  `mail` varchar(45) DEFAULT NULL,
  `contraseña` varchar(45) DEFAULT NULL,
  `telefono` int DEFAULT NULL,
  PRIMARY KEY (`usuario_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'nicolas','oddo','nicolasoddo@gmail.com','eeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee',12345678),(2,'nicolas','oddo','nicolasoddo07@gmail.com','',12345678),(3,'nicolas','oddo','nicolasoddo073@gmail.com','nicoloco',12345678),(4,'pedro','perez','nose@gmail.com','holasoypedro123',1234567844),(5,'nicolas','oddo','nicolasoddo072@gmail.com','nico1511',1128995268);
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

-- Dump completed on 2024-10-18 17:51:06
