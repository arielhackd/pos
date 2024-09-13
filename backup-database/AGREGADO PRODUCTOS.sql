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

/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productos`
--

LOCK TABLES `productos` WRITE;
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` VALUES (1,1,'101','Aspiradora Industrial ','',20,1500,2100,0,'2024-09-13 02:13:40'),(2,1,'102','Plato Flotante para Allanadora','',20,4500,6300,0,'2024-09-13 02:13:40'),(3,1,'103','Compresor de Aire para pintura','',20,3000,4200,0,'2024-09-13 02:13:40'),(4,1,'104','Cortadora de Adobe sin Disco ','',20,4000,5600,0,'2024-09-13 02:13:40'),(5,1,'105','Cortadora de Piso sin Disco ','',20,1540,2156,0,'2024-09-13 02:13:40'),(6,1,'106','Disco Punta Diamante ','',20,1100,1540,0,'2024-09-13 02:13:40'),(7,1,'107','Extractor de Aire ','',20,1540,2156,0,'2024-09-13 02:13:40'),(8,1,'108','Guadañadora ','',20,1540,2156,0,'2024-09-13 02:13:40'),(9,1,'109','Hidrolavadora Eléctrica ','',20,2600,3640,0,'2024-09-13 02:13:40'),(10,1,'110','Hidrolavadora Gasolina','',20,2210,3094,0,'2024-09-13 02:13:40'),(11,1,'111','Motobomba a Gasolina','',20,2860,4004,0,'2024-09-13 02:13:40'),(12,1,'112','Motobomba Eléctrica','',20,2400,3360,0,'2024-09-13 02:13:40'),(13,1,'113','Sierra Circular ','',20,1100,1540,0,'2024-09-13 02:13:40'),(14,1,'114','Disco de tugsteno para Sierra circular','',20,4500,6300,0,'2024-09-13 02:13:40'),(15,1,'115','Soldador Electrico ','',20,1980,2772,0,'2024-09-13 02:13:40'),(16,1,'116','Careta para Soldador','',20,4200,5880,0,'2024-09-13 02:13:40'),(17,1,'117','Torre de iluminacion ','',20,1800,2520,0,'2024-09-13 02:13:40'),(18,2,'201','Martillo Demoledor de Piso 110V','',20,5600,7840,0,'2024-09-13 02:13:40'),(19,2,'202','Muela o cincel martillo demoledor piso','',20,9600,13440,0,'2024-09-13 02:13:40'),(20,2,'203','Taladro Demoledor de muro 110V','',20,3850,5390,0,'2024-09-13 02:13:40'),(21,2,'204','Muela o cincel martillo demoledor muro','',20,9600,13440,0,'2024-09-13 02:13:40'),(22,2,'205','Taladro Percutor de 1/2\" Madera y Metal','',20,8000,11200,0,'2024-09-13 02:13:40'),(23,2,'206','Taladro Percutor SDS Plus 110V','',20,3900,5460,0,'2024-09-13 02:13:40'),(24,2,'207','Taladro Percutor SDS Max 110V (Mineria)','',20,4600,6440,0,'2024-09-13 02:13:40'),(25,3,'301','Andamio colgante','',20,1440,2016,0,'2024-09-13 02:13:40'),(26,3,'302','Distanciador andamio colgante','',20,1600,2240,0,'2024-09-13 02:13:40'),(27,3,'303','Marco andamio modular ','',20,900,1260,0,'2024-09-13 02:13:40'),(28,3,'304','Marco andamio tijera','',20,100,140,0,'2024-09-13 02:13:40'),(29,3,'305','Tijera para andamio','',20,162,226.8,0,'2024-09-13 02:13:40'),(30,3,'306','Escalera interna para andamio','',20,270,378,0,'2024-09-13 02:13:40'),(31,3,'307','Pasamanos de seguridad','',20,75,105,0,'2024-09-13 02:13:40'),(32,3,'308','Rueda giratoria para andamio','',20,168,235.2,0,'2024-09-13 02:13:40'),(33,3,'309','Arnes de seguridad','',20,1750,2450,0,'2024-09-13 02:13:40'),(34,3,'310','Eslinga para arnes','',20,175,245,0,'2024-09-13 02:13:40'),(35,3,'311','Plataforma Metálica','',20,420,588,0,'2024-09-13 02:13:40'),(36,4,'401','Planta Electrica Diesel 6 Kva','',20,3500,4900,0,'2024-09-13 02:13:40'),(37,4,'402','Planta Electrica Diesel 10 Kva','',20,3550,4970,0,'2024-09-13 02:13:40'),(38,4,'403','Planta Electrica Diesel 20 Kva','',20,3600,5040,0,'2024-09-13 02:13:40'),(39,4,'404','Planta Electrica Diesel 30 Kva','',20,3650,5110,0,'2024-09-13 02:13:40'),(40,4,'405','Planta Electrica Diesel 60 Kva','',20,3700,5180,0,'2024-09-13 02:13:40'),(41,4,'406','Planta Electrica Diesel 75 Kva','',20,3750,5250,0,'2024-09-13 02:13:40'),(42,4,'407','Planta Electrica Diesel 100 Kva','',20,3800,5320,0,'2024-09-13 02:13:40'),(43,4,'408','Planta Electrica Diesel 120 Kva','',20,3850,5390,0,'2024-09-13 02:13:40'),(44,6,'501','Escalera de Tijera Aluminio ','',20,350,490,0,'2024-09-13 02:13:40'),(45,6,'502','Extension Electrica ','',20,370,518,0,'2024-09-13 02:13:40'),(46,6,'503','Gato tensor','',20,380,532,0,'2024-09-13 02:13:40'),(47,6,'504','Lamina Cubre Brecha ','',20,380,532,0,'2024-09-13 02:13:40'),(48,6,'505','Llave de Tubo','',20,480,672,0,'2024-09-13 02:13:40'),(49,6,'506','Manila por Metro','',20,600,840,0,'2024-09-13 02:13:40'),(50,6,'507','Polea 2 canales','',20,900,1260,0,'2024-09-13 02:13:40'),(51,6,'508','Tensor','',20,100,140,0,'2024-09-13 02:13:40'),(52,6,'509','Bascula ','',20,130,182,0,'2024-09-13 02:13:40'),(53,6,'510','Bomba Hidrostatica','',20,770,1078,0,'2024-09-13 02:13:40'),(54,6,'511','Chapeta','',20,660,924,0,'2024-09-13 02:13:40'),(55,6,'512','Cilindro muestra de concreto','',20,400,560,0,'2024-09-13 02:13:40'),(56,6,'513','Cizalla de Palanca','',20,450,630,0,'2024-09-13 02:13:40'),(57,6,'514','Cizalla de Tijera','',20,580,812,0,'2024-09-13 02:13:40'),(58,6,'515','Coche llanta neumatica','',20,420,588,0,'2024-09-13 02:13:40'),(59,6,'516','Cono slump','',20,140,196,0,'2024-09-13 02:13:40'),(60,6,'517','Cortadora de Baldosin','',20,930,1302,0,'2024-09-13 02:13:40');
LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'Usuario Administrador','admin','$2a$07$usesomesillystringfore3NFklazMwBy5H4TNAfJ2aQintYXeIXa','Administrador','vistas/img/usuarios/admin/814.png',1,'2024-09-12 21:42:09','2024-09-05 04:57:31'),(9,'Ariel Lemus','arielhackd','$2a$07$usesomesillystringforeayVU0TG5ZotQHxzbRd9aDnBiszoVawy','Administrador','vistas/img/usuarios/arielhackd/718.png',0,'2024-09-10 21:55:13','2024-09-11 03:30:41');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'pos'
--
