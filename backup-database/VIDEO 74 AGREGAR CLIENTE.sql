-- MySQL dump 10.13  Distrib 9.0.1, for Win64 (x86_64)
--
-- Host: localhost    Database: pos
-- ------------------------------------------------------
-- Server version	9.0.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
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
  `id` int NOT NULL AUTO_INCREMENT,
  `categoria` text COLLATE utf8mb3_spanish_ci,
  `fecha` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categorias`
--

LOCK TABLES `categorias` WRITE;
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
INSERT INTO `categorias` VALUES (1,'Equipos Electromecánicos','2024-09-12 03:59:02'),(2,'Taladros','2024-09-12 03:59:40'),(3,'Andamios','2024-09-12 04:00:07'),(4,'Generadores de Energía','2024-09-12 04:00:15'),(5,'Equipos de Construcción','2024-09-12 05:29:02'),(6,'Martillos Mecánicos','2024-09-16 04:23:18');
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clientes`
--

DROP TABLE IF EXISTS `clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `clientes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` text COLLATE utf8mb3_spanish_ci,
  `documento` int DEFAULT NULL,
  `email` text COLLATE utf8mb3_spanish_ci,
  `telefono` text COLLATE utf8mb3_spanish_ci,
  `direccion` text COLLATE utf8mb3_spanish_ci,
  `fecha_nacimiento` date DEFAULT NULL,
  `compras` int DEFAULT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clientes`
--

LOCK TABLES `clientes` WRITE;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` VALUES (1,'Ariel Lemus',8456214,'arielhackd@gmail.com','+(502)3128-6646','3 Calle Lote #15 Gonzalez.Amatitlan','1993-03-24',NULL,'2024-09-28 05:46:45'),(2,'Escarlet Montano',425633,'scarmontano98@gmail.com','+(502)4010-3052','4 Calle Amatitlan Esquina','1996-06-23',NULL,'2024-09-28 05:48:11');
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `productos`
--

DROP TABLE IF EXISTS `productos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `productos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_categoria` int DEFAULT NULL,
  `codigo` text COLLATE utf8mb3_spanish_ci,
  `descripcion` text COLLATE utf8mb3_spanish_ci,
  `imagen` text COLLATE utf8mb3_spanish_ci,
  `stock` int DEFAULT NULL,
  `precio_compra` float DEFAULT NULL,
  `precio_venta` float DEFAULT NULL,
  `ventas` int DEFAULT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productos`
--

LOCK TABLES `productos` WRITE;
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` VALUES (1,1,'101','Aspiradora Industrial ','vistas/img/productos/101/105.png',15,1000,1200,0,'2017-12-22 22:32:49'),(2,1,'102','Plato Flotante para Allanadora','vistas/img/productos/102/940.jpg',20,4500,6300,0,'2017-12-22 22:33:16'),(3,1,'103','Compresor de Aire para pintura','vistas/img/productos/103/763.jpg',8,3000,4200,0,'2017-12-22 22:33:31'),(4,1,'104','Cortadora de Adobe sin Disco ','vistas/img/productos/104/957.jpg',20,4000,5600,0,'2017-12-22 22:33:52'),(5,1,'105','Cortadora de Piso sin Disco ','vistas/img/productos/105/630.jpg',20,1540,2156,0,'2017-12-22 22:34:08'),(6,1,'106','Disco Punta Diamante ','vistas/img/productos/106/635.jpg',20,1100,1540,0,'2017-12-22 22:34:20'),(7,1,'107','Extractor de Aire ','vistas/img/productos/107/848.jpg',20,1540,2156,0,'2017-12-22 22:34:33'),(8,1,'108','Guadañadora ','vistas/img/productos/108/163.jpg',20,1540,2156,0,'2017-12-22 22:34:44'),(9,1,'109','Hidrolavadora Eléctrica ','vistas/img/productos/109/769.jpg',20,2600,3640,0,'2017-12-22 22:35:08'),(10,1,'110','Hidrolavadora Gasolina','vistas/img/productos/110/582.jpg',20,2210,3094,0,'2017-12-22 22:35:19'),(11,1,'111','Motobomba a Gasolina','vistas/img/productos/111/473.jpg',20,2860,4004,0,'2017-12-22 03:56:28'),(12,1,'112','Motobomba El?ctrica','vistas/img/productos/default/anonymous.png',20,2400,3360,0,'2017-12-22 03:56:28'),(13,1,'113','Sierra Circular ','vistas/img/productos/default/anonymous.png',20,1100,1540,0,'2017-12-22 03:56:28'),(14,1,'114','Disco de tugsteno para Sierra circular','vistas/img/productos/default/anonymous.png',20,4500,6300,0,'2017-12-22 03:56:28'),(15,1,'115','Soldador Electrico ','vistas/img/productos/default/anonymous.png',20,1980,2772,0,'2017-12-22 03:56:28'),(16,1,'116','Careta para Soldador','vistas/img/productos/default/anonymous.png',20,4200,5880,0,'2017-12-22 03:56:28'),(17,1,'117','Torre de iluminacion ','vistas/img/productos/default/anonymous.png',20,1800,2520,0,'2017-12-22 03:56:28'),(18,2,'201','Martillo Demoledor de Piso 110V','vistas/img/productos/default/anonymous.png',20,5600,7840,0,'2017-12-22 03:56:28'),(19,2,'202','Muela o cincel martillo demoledor piso','vistas/img/productos/default/anonymous.png',20,9600,13440,0,'2017-12-22 03:56:28'),(20,2,'203','Taladro Demoledor de muro 110V','vistas/img/productos/default/anonymous.png',20,3850,5390,0,'2017-12-22 03:56:28'),(21,2,'204','Muela o cincel martillo demoledor muro','vistas/img/productos/default/anonymous.png',20,9600,13440,0,'2017-12-22 03:56:28'),(22,2,'205','Taladro Percutor de 1/2 Madera y Metal','vistas/img/productos/default/anonymous.png',20,8000,11200,0,'2017-12-22 04:28:24'),(23,2,'206','Taladro Percutor SDS Plus 110V','vistas/img/productos/default/anonymous.png',20,3900,5460,0,'2017-12-22 03:56:28'),(24,2,'207','Taladro Percutor SDS Max 110V (Mineria)','vistas/img/productos/default/anonymous.png',20,4600,6440,0,'2017-12-22 03:56:28'),(25,3,'301','Andamio colgante','vistas/img/productos/default/anonymous.png',20,1440,2016,0,'2017-12-22 03:56:28'),(26,3,'302','Distanciador andamio colgante','vistas/img/productos/default/anonymous.png',20,1600,2240,0,'2017-12-22 03:56:28'),(27,3,'303','Marco andamio modular ','vistas/img/productos/default/anonymous.png',20,900,1260,0,'2017-12-22 03:56:28'),(28,3,'304','Marco andamio tijera','vistas/img/productos/default/anonymous.png',20,100,140,0,'2017-12-22 03:56:28'),(29,3,'305','Tijera para andamio','vistas/img/productos/default/anonymous.png',20,162,226,0,'2017-12-22 03:56:28'),(30,3,'306','Escalera interna para andamio','vistas/img/productos/default/anonymous.png',20,270,378,0,'2017-12-22 03:56:28'),(31,3,'307','Pasamanos de seguridad','vistas/img/productos/default/anonymous.png',20,75,105,0,'2017-12-22 03:56:28'),(32,3,'308','Rueda giratoria para andamio','vistas/img/productos/default/anonymous.png',20,168,235,0,'2017-12-22 03:56:28'),(33,3,'309','Arnes de seguridad','vistas/img/productos/default/anonymous.png',20,1750,2450,0,'2017-12-22 03:56:28'),(34,3,'310','Eslinga para arnes','vistas/img/productos/default/anonymous.png',20,175,245,0,'2017-12-22 03:56:28'),(35,3,'311','Plataforma Met?lica','vistas/img/productos/default/anonymous.png',20,420,588,0,'2017-12-22 03:56:28'),(36,4,'401','Planta Electrica Diesel 6 Kva','vistas/img/productos/default/anonymous.png',20,3500,4900,0,'2017-12-22 03:56:28'),(37,4,'402','Planta Electrica Diesel 10 Kva','vistas/img/productos/default/anonymous.png',20,3550,4970,0,'2017-12-22 03:56:28'),(38,4,'403','Planta Electrica Diesel 20 Kva','vistas/img/productos/default/anonymous.png',20,3600,5040,0,'2017-12-22 03:56:28'),(39,4,'404','Planta Electrica Diesel 30 Kva','vistas/img/productos/default/anonymous.png',20,3650,5110,0,'2017-12-22 03:56:28'),(40,4,'405','Planta Electrica Diesel 60 Kva','vistas/img/productos/default/anonymous.png',20,3700,5180,0,'2017-12-22 03:56:28'),(41,4,'406','Planta Electrica Diesel 75 Kva','vistas/img/productos/default/anonymous.png',20,3750,5250,0,'2017-12-22 03:56:28'),(42,4,'407','Planta Electrica Diesel 100 Kva','vistas/img/productos/default/anonymous.png',20,3800,5320,0,'2017-12-22 03:56:28'),(43,4,'408','Planta Electrica Diesel 120 Kva','vistas/img/productos/default/anonymous.png',20,3850,5390,0,'2017-12-22 03:56:28'),(44,5,'501','Escalera de Tijera Aluminio ','vistas/img/productos/default/anonymous.png',20,350,490,0,'2017-12-22 03:56:28'),(45,5,'502','Extension Electrica ','vistas/img/productos/default/anonymous.png',20,370,518,0,'2017-12-22 03:56:28'),(46,5,'503','Gato tensor','vistas/img/productos/default/anonymous.png',20,380,532,0,'2017-12-22 03:56:28'),(47,5,'504','Lamina Cubre Brecha ','vistas/img/productos/default/anonymous.png',20,380,532,0,'2017-12-22 03:56:28'),(48,5,'505','Llave de Tubo','vistas/img/productos/default/anonymous.png',20,480,672,0,'2017-12-22 03:56:28'),(49,5,'506','Manila por Metro','vistas/img/productos/default/anonymous.png',20,600,840,0,'2017-12-22 03:56:28'),(50,5,'507','Polea 2 canales','vistas/img/productos/default/anonymous.png',20,900,1260,0,'2017-12-22 03:56:28'),(51,5,'508','Tensor','vistas/img/productos/default/anonymous.png',20,100,140,0,'2017-12-22 03:56:28'),(52,5,'509','Bascula ','vistas/img/productos/default/anonymous.png',20,130,182,0,'2017-12-22 03:56:28'),(53,5,'510','Bomba Hidrostatica','vistas/img/productos/default/anonymous.png',20,770,1078,0,'2017-12-22 03:56:28'),(54,5,'511','Chapeta','vistas/img/productos/default/anonymous.png',20,660,924,0,'2017-12-22 03:56:28'),(55,5,'512','Cilindro muestra de concreto','vistas/img/productos/default/anonymous.png',20,400,560,0,'2017-12-22 03:56:28'),(56,5,'513','Cizalla de Palanca','vistas/img/productos/default/anonymous.png',20,450,630,0,'2017-12-22 03:56:28'),(57,5,'514','Cizalla de Tijera','vistas/img/productos/default/anonymous.png',20,580,812,0,'2017-12-22 03:56:28'),(58,5,'515','Coche llanta neumatica','vistas/img/productos/default/anonymous.png',20,420,588,0,'2017-12-22 03:56:28'),(59,5,'516','Cono slump','vistas/img/productos/default/anonymous.png',20,140,196,0,'2017-12-22 03:56:28'),(60,5,'517','Cortadora de Baldosin','vistas/img/productos/default/anonymous.png',20,930,1302,0,'2017-12-22 03:56:28');
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` text COLLATE utf8mb3_spanish_ci,
  `usuario` text COLLATE utf8mb3_spanish_ci,
  `password` text COLLATE utf8mb3_spanish_ci,
  `perfil` text COLLATE utf8mb3_spanish_ci,
  `foto` text COLLATE utf8mb3_spanish_ci,
  `estado` int DEFAULT NULL,
  `ultimo_login` datetime DEFAULT NULL,
  `fecha` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci COMMENT='Tabla para la gestión de usuarios.';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'Usuario Administrador','admin','$2a$07$usesomesillystringfore3NFklazMwBy5H4TNAfJ2aQintYXeIXa','Administrador','vistas/img/usuarios/admin/814.png',1,'2024-09-27 22:10:09','2024-09-05 04:57:31'),(9,'Ariel Lemus','arielhackd','$2a$07$usesomesillystringforeayVU0TG5ZotQHxzbRd9aDnBiszoVawy','Administrador','vistas/img/usuarios/arielhackd/718.png',0,'2024-09-10 21:55:13','2024-09-11 03:30:41');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'pos'
--

--
-- Dumping routines for database 'pos'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-09-27 23:49:33
