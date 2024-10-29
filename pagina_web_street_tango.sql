-- MySQL dump 10.13  Distrib 8.0.39, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: pagina_web_street_tango
-- ------------------------------------------------------
-- Server version	8.0.39-0ubuntu0.22.04.1

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
INSERT INTO `categorias` VALUES (1,'Pantalones','todos los tipos de patntalones'),(2,'Buzos','todos los tipos de buzos canguro, hoodie, etc'),(3,'Tops','Tops de diferentes estilos: camisetas, blusas, crop tops, etc.'),(4,'Remeras','todos los tipos de remeras boxy, oversize, normales, etc'),(5,'Bodys','Bodys ajustados y de diferentes diseños: mangas largas, cortas, sin mangas.'),(6,'Corsets','Corsets de moda para complementar cualquier outfit urbano.'),(7,'Bandeaus','Bandeaus en varios colores y estilos para un look fresco y juvenil.'),(8,'Faldas','Faldas urbanas: cortas, largas, con estampados y lisas.'),(9,'Vestidos','Vestidos casuales y de fiesta, perfectos para cualquier ocasión.'),(10,'Camisas','Camisas de diferentes estilos: casuales y formales.'),(11,'Shorts','Shorts cómodos y estilosos para el verano.'),(12,'Accesorios','Accesorios para hombres: gorras, relojes, cinturones, etc.'),(13,'Musculosas','ropa sin mangas');
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
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `color`
--

LOCK TABLES `color` WRITE;
/*!40000 ALTER TABLE `color` DISABLE KEYS */;
INSERT INTO `color` VALUES (1,'Negro'),(2,'Blanco'),(3,'Rojo'),(4,'Azul'),(5,'Verde'),(6,'Amarillo'),(7,'Rosa'),(8,'Gris'),(9,'Morado'),(10,'Naranja'),(11,'Beige'),(12,'Cyan'),(13,'Vino'),(14,'Turquesa'),(15,'Oro'),(16,'Color propio');
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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fechas`
--

LOCK TABLES `fechas` WRITE;
/*!40000 ALTER TABLE `fechas` DISABLE KEYS */;
INSERT INTO `fechas` VALUES (1,'2024-10-30 10:00:00'),(2,'2024-10-30 14:00:00'),(3,'2024-10-31 10:00:00'),(4,'2024-10-31 16:00:00'),(5,'2024-11-01 10:00:00'),(6,'2024-11-01 15:00:00'),(7,'2024-11-02 11:00:00'),(8,'2024-11-02 17:00:00');
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
INSERT INTO `producto_color` VALUES (1,1),(3,1),(4,1),(8,1),(9,1),(10,1),(12,1),(16,1),(17,1),(18,1),(8,2),(9,2),(13,2),(17,2),(10,3),(9,4),(13,5),(2,8),(5,8),(13,8),(14,9),(14,10),(1,11),(11,11),(3,13),(6,16),(7,16),(15,16);
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
INSERT INTO `producto_talle` VALUES (3,1),(4,1),(5,1),(7,1),(8,1),(11,1),(13,1),(14,1),(16,1),(1,2),(3,2),(4,2),(5,2),(7,2),(8,2),(11,2),(13,2),(14,2),(16,2),(1,3),(3,3),(6,3),(7,3),(8,3),(9,3),(11,3),(14,3),(15,3),(16,3),(17,3),(1,4),(2,4),(3,4),(4,4),(5,4),(6,4),(7,4),(9,4),(14,4),(16,4),(17,4),(1,5),(2,5),(3,5),(6,5),(7,5),(14,5),(16,5),(2,6),(14,6),(15,6),(15,7),(4,8),(10,8),(12,8),(18,8);
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
INSERT INTO `productos` VALUES (1,4,'Remera cali','Remera Cali confeccionada en algodòn con lycra pesada de corte BOXY fit.',39,'Kiech','Hombre','https://acdn.mitiendanube.com/stores/001/497/956/products/7-4111e5c5e94acfc8a817227398730408-1024-1024.webp','2024-10-29','https://acdn.mitiendanube.com/stores/001/497/956/products/8-d373949a0457369dd717227398725588-1024-1024.webp','Remera Cali confeccionada en algodòn con lycra pesada de corte BOXY fit. Tiene bordado en el delantero y una amplia estampa en la espalda.',100),(2,4,'Remera grey','Remera semi boxy con tratamiento acid wash.',35000,'Kiech','Hombre','https://acdn.mitiendanube.com/stores/001/497/956/products/22-32d34cbb83a2a1d14517148575345183-1024-1024.webp','2024-10-29','https://acdn.mitiendanube.com/stores/001/497/956/products/21-3e3ed384888e26085a17148575351200-1024-1024.webp','Remera semi boxy con tratamiento acid wash, costura invertida y bordado de la marca en el pecho.',50),(3,4,'Remera FMILY','Remera Fmily confeccionada en algodòn con lycra pesada de corte BOXY fit.',39000,'Kiech','Hombre','https://acdn.mitiendanube.com/stores/001/497/956/products/1-c8c9068e3f0278086d17227378692690-1024-1024.webp','2024-10-29','https://acdn.mitiendanube.com/stores/001/497/956/products/2-640b77564f39d420ca17227378700053-1024-1024.webp','Remera Fmily confeccionada en algodòn con lycra pesada de corte BOXY fit. Tiene bordado en el delantero y una amplia estampa en la espalda.',680),(4,1,'Jean CANVAS','Jean baggy tiro medio/bajo con 6 bolsillos cargo, 2 bolsillos delanteros y 2 bolsillos traseros.',60000,'Kiech','Mujer','https://acdn.mitiendanube.com/stores/001/497/956/products/39-69238b5a522da8371f17149238766067-1024-1024.webp','2024-10-29','https://acdn.mitiendanube.com/stores/001/497/956/products/40-7d4d0c1ce7a405457817149239475644-1024-1024.webp','Jean baggy tiro medio/bajo con 6 bolsillos cargo, 2 bolsillos delanteros y 2 bolsillos traseros. En la tapa del bolsillo cargo superior izquierdo esta bordado el nombre de la marca.',200),(5,1,'Top GREY','Top crop con tratamiento acid wash, costura invertida.',23000,'Kiech','Mujer','https://acdn.mitiendanube.com/stores/001/497/956/products/2-7f56cb63165b73393217148577846975-1024-1024.webp','2024-10-29','https://acdn.mitiendanube.com/stores/001/497/956/products/3-03eb9050c78f6c3f4e17148577846704-1024-1024.webp','Top crop con tratamiento acid wash, costura invertida y bordado de la marca en la zona del pecho.',80),(6,11,'OCEAN - BERMUDA DE JEAN','Short de jean con roturas',20000,'Kiech','Hombre','https://acdn.mitiendanube.com/stores/001/994/528/products/ocean-1-af38e3e0633de1fef317266892172871-480-0.webp?w=480','2024-10-29','https://acdn.mitiendanube.com/stores/001/994/528/products/ocean-3-6b05d6c6784668807b17266892172768-480-0.webp?w=480','Short de jean con roturas desgastado y de tela fina.',80),(7,11,'CAMT - JORTS BERMUDA LARGA','Short de jean con bolsillos cargo',20000,'Burzaco ind','Hombre','https://acdn.mitiendanube.com/stores/001/994/528/products/cant-1-c0dc8572965f9f204217268510636396-480-0.webp?w=480','2024-10-29','https://acdn.mitiendanube.com/stores/001/994/528/products/cant-2-506958f13bfd67156017268510628715-480-0.webp?w=480','Short de jean con bolsillos cargos, desgastado y de tela fina.',13),(8,4,'Remera DALA','Remera blanca con estampa en el pecho',19900,'batuk','Mujer','https://www.batuk.com.ar/storage/photos/BM-3627-C.jpg','2024-10-29','https://www.batuk.com.ar/storage/photos/BM-3627-C-2.jpg','Remera blanca con estampa en el pecho.',13),(9,10,'Camisa BREMEN','Camisa de lino',53990,'batuk','Hombre','https://www.batuk.com.ar/storage/photos/B-4207-4-_1_.jpg','2024-10-29','https://www.batuk.com.ar/storage/photos/B-4207-2-C-4.jpg','Camisa de lino premium de verano.',23),(10,12,'Pañuelo COWBOY','Pañuelo de lino ',53990,'batuk','Mujer','https://www.batuk.com.ar/storage/photos/BA-6001-A-1.jpg','2024-10-29','https://www.batuk.com.ar/storage/photos/BA-6001-A-2.jpg','Pañuelo de lino fabrico por juan pablo baquero.',50),(11,4,'Remera COWGIRL','Remera blanca de material jersey',22990,'Jhon Pablo Baquero','Mujer','https://www.batuk.com.ar/storage/photos/BM-3632.jpg','2024-10-29','https://www.batuk.com.ar/storage/photos/BM-3632-43.jpg','Remera blanca de material jersey fabrico por juan pablo baquero.',50),(12,8,'FALDA SKIRT','Falda de cuero sintetico',35990,'Huoky','Mujer','https://www.batuk.com.ar/storage/photos/HM-2056.jpg','2024-10-29','https://www.batuk.com.ar/storage/photos/HM-2056.jpg','Falda de cuero sintetico.',30),(13,13,'Musculosa NEVADA','Musculosa de algodon',26000,'Holic','Mujer','https://holiclothing.com.ar/wp-content/uploads/2024/10/R3404C-4RED.jpg','2024-10-29','https://holiclothing.com.ar/wp-content/uploads/2024/09/R3404C-2AA.jpg.webp','Musculosa de algodon.',30),(14,2,'Hoodie VMP','Hoodie VMP de frisa invisible peinada premium de corte BOXY FIT',73000,'Kiech','Mujer','https://acdn.mitiendanube.com/stores/001/497/956/products/15-3d6d5fa6cad24f2a6917227368053810-1024-1024.webp','2024-10-29','https://acdn.mitiendanube.com/stores/001/497/956/products/kiech-250-d42fa782805779f82817227360516872-1024-1024.webp','Hoodie VMP de frisa invisible peinada premium de corte BOXY FIT con estampa que cubre toda la espalda y bordado de la marca en el pecho.',60),(15,1,'Jean sa cargo BAGGY','Jean SA cargo de corte extra baggy, tiene aplicado un acid wash para que tenga ese color óxido',85000,'Kiech','Hombre','https://acdn.mitiendanube.com/stores/001/497/956/products/8-f64e9408a2acbd5dad17258334074051-1024-1024.webp','2024-10-29','https://acdn.mitiendanube.com/stores/001/497/956/products/7-9f4c293f1401bc5aca17258334069651-1024-1024.webp','Jean SA cargo de corte extra baggy, tiene aplicado un acid wash para que tenga ese color óxido, elastico en la parte trasera para que se adapte a todos los cuerpos y tiene 12 bolsillos de los cuales 8 son cargo. Cada bolsillo cargo tiene botones snaps de metal plateado para que puedas abrir y cerrar cada uno de ellos. Tiene una badana de cuero en la parte trasera.\n',70),(16,5,'BODY MB','Body MB manga larga de tricot ',37000,'Kiech','Mujer','https://acdn.mitiendanube.com/stores/001/497/956/products/23-49ef3cba535618d6ef17227330424354-1024-1024.webp','2024-10-29','https://acdn.mitiendanube.com/stores/001/497/956/products/22-05b768235cd197eeb917227330418618-1024-1024.webp','Body MB manga larga de tricot con cierre invisible YKK y estampa a tono\n',10),(17,2,'DOUBLE ZIP HOODIE TREND','Double zip hoodie Trend de frisa invisible peinada premium de corte BOXY FIT',76000,'Kiech','Hombre','https://acdn.mitiendanube.com/stores/001/497/956/products/3-3ff7b52c0e1d83142c17258299989825-1024-1024.webp','2024-10-29','https://acdn.mitiendanube.com/stores/001/497/956/products/4-994ea245df5fee21a217258299994218-1024-1024.webp','Double zip hoodie Trend de frisa invisible peinada premium de corte BOXY FIT con bordado en el delantero, estampa en la espalda, doble cierre YKK, 2 bolsillos y una amplia capucha.\n',89),(18,2,'CAMPERA CANVAS','Campera Canvas confeccionada en tela canvas de corte BOXY con cierre YKK doble camino, parches intercambiables con estampa en NEGRO y BLANCO.',60000,'Kiech','Hombre','https://acdn.mitiendanube.com/stores/001/497/956/products/19-abd298f9ea93e0094817227298925833-1024-1024.webp','2024-10-29','https://acdn.mitiendanube.com/stores/001/497/956/products/20-94752963745e32fff917227298930283-1024-1024.webp','Campera Canvas confeccionada en tela canvas de corte BOXY con cierre YKK doble camino, parches intercambiables con estampa en NEGRO y BLANCO. Este articulo viene con dos parches EXTRA. Los mismos estan puestos con botones snap por lo tanto podes sacarlo y poner los otros que vienen de otro color. En resumen, tenes dos variantes de color en una campera.\n',34);
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
  `cantidad` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `users_id` (`users_id`),
  KEY `sucursal_id` (`sucursal_id`),
  KEY `fechas_id` (`fechas_id`),
  CONSTRAINT `reservas_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `users` (`usuario_id`),
  CONSTRAINT `reservas_ibfk_2` FOREIGN KEY (`sucursal_id`) REFERENCES `sucursales` (`id`),
  CONSTRAINT `reservas_ibfk_3` FOREIGN KEY (`fechas_id`) REFERENCES `fechas` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sucursales`
--

LOCK TABLES `sucursales` WRITE;
/*!40000 ALTER TABLE `sucursales` DISABLE KEYS */;
INSERT INTO `sucursales` VALUES (1,'Lavallol 4745'),(2,'Antezana 247');
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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `talle`
--

LOCK TABLES `talle` WRITE;
/*!40000 ALTER TABLE `talle` DISABLE KEYS */;
INSERT INTO `talle` VALUES (1,'XS'),(2,'S'),(3,'M'),(4,'L'),(5,'XL'),(6,'XXL'),(7,'XXXL'),(8,'Talla única');
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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
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

-- Dump completed on 2024-10-29 11:00:48
