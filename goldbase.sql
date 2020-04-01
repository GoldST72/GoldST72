-- MySQL dump 10.13  Distrib 8.0.18, for Win64 (x86_64)
--
-- Host: localhost    Database: virtual_quiz
-- ------------------------------------------------------
-- Server version	8.0.18

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
-- Table structure for table `q_alumno`
--

DROP TABLE IF EXISTS `q_alumno`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `q_alumno` (
  `id_alumno` int(11) NOT NULL AUTO_INCREMENT,
  `estado` varchar(45) DEFAULT NULL,
  `persona_id` int(11) NOT NULL,
  `curso_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_alumno`),
  KEY `alumno_persona_alumno_bc924863_fk_persona_id_persona` (`persona_id`),
  KEY `alumno_curso_id_bd352814_fk_curso_id_curso` (`curso_id`),
  CONSTRAINT `alumno_curso_id_bd352814_fk_curso_id_curso` FOREIGN KEY (`curso_id`) REFERENCES `q_curso` (`id_curso`),
  CONSTRAINT `alumno_persona_alumno_bc924863_fk_persona_id_persona` FOREIGN KEY (`persona_id`) REFERENCES `q_persona` (`id_persona`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `q_alumno`
--

LOCK TABLES `q_alumno` WRITE;
/*!40000 ALTER TABLE `q_alumno` DISABLE KEYS */;
INSERT INTO `q_alumno` VALUES (6,'ACTIVO',8,1),(7,'ACTIVO',8,2),(8,'ACTIVO',7,2),(9,'ACTIVO',4,7);
/*!40000 ALTER TABLE `q_alumno` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `q_curso`
--

DROP TABLE IF EXISTS `q_curso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `q_curso` (
  `id_curso` int(11) NOT NULL AUTO_INCREMENT,
  `curso` varchar(45) NOT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `paralelo` varchar(12) NOT NULL,
  `estado` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_curso`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `q_curso`
--

LOCK TABLES `q_curso` WRITE;
/*!40000 ALTER TABLE `q_curso` DISABLE KEYS */;
INSERT INTO `q_curso` VALUES (1,'Tercero','sin descripcion','B','ACTIVO'),(2,'Cuarto','Ninguna','A','ACTIVO'),(3,'Quinto','Poo','','ACTIVO'),(4,'Sexto','Base datos','','ACTIVO'),(5,'2','CURSO DE MATEMATICAS','','ACTIVO'),(6,'5','CURSO DE PROGRAMACION','C','ACTIVO'),(7,'6','CURSO DE BASE DATOS','E','ACTIVO');
/*!40000 ALTER TABLE `q_curso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `q_curso_examenes`
--

DROP TABLE IF EXISTS `q_curso_examenes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `q_curso_examenes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `examen_id` int(11) NOT NULL,
  `curso_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `curso_examenes_curso_id_9afc9fd6_fk_curso_id_curso` (`curso_id`),
  KEY `examen_id_idx` (`examen_id`),
  CONSTRAINT `curso_examenes_curso_id_9afc9fd6_fk_curso_id_curso` FOREIGN KEY (`curso_id`) REFERENCES `q_curso` (`id_curso`),
  CONSTRAINT `examen_id` FOREIGN KEY (`examen_id`) REFERENCES `q_examen` (`id_examen`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `q_curso_examenes`
--

LOCK TABLES `q_curso_examenes` WRITE;
/*!40000 ALTER TABLE `q_curso_examenes` DISABLE KEYS */;
INSERT INTO `q_curso_examenes` VALUES (1,1,1),(2,2,6);
/*!40000 ALTER TABLE `q_curso_examenes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `q_examen`
--

DROP TABLE IF EXISTS `q_examen`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `q_examen` (
  `id_examen` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `materia` int(11) NOT NULL,
  PRIMARY KEY (`id_examen`),
  KEY `examen_materia_d245d964_fk_materia_id_materia` (`materia`),
  CONSTRAINT `examen_materia_d245d964_fk_materia_id_materia` FOREIGN KEY (`materia`) REFERENCES `q_materia` (`id_materia`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `q_examen`
--

LOCK TABLES `q_examen` WRITE;
/*!40000 ALTER TABLE `q_examen` DISABLE KEYS */;
INSERT INTO `q_examen` VALUES (1,'estadistica','ACTIVO',1),(2,'palabras','ACTIVO',2),(3,'MEDIA ARITMETICA',NULL,1),(4,'MODA','ACTIVO',1),(5,'MATRICES','ACTIVO',1);
/*!40000 ALTER TABLE `q_examen` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `q_materia`
--

DROP TABLE IF EXISTS `q_materia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `q_materia` (
  `id_materia` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(45) NOT NULL,
  `estado` varchar(45) NOT NULL,
  PRIMARY KEY (`id_materia`),
  UNIQUE KEY `descripcion` (`descripcion`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `q_materia`
--

LOCK TABLES `q_materia` WRITE;
/*!40000 ALTER TABLE `q_materia` DISABLE KEYS */;
INSERT INTO `q_materia` VALUES (1,'MATEMATICA','ACTIVO'),(2,'LENGUAGE','ACTIVO'),(3,'CIENCIAS','ACTIVO');
/*!40000 ALTER TABLE `q_materia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `q_menu`
--

DROP TABLE IF EXISTS `q_menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `q_menu` (
  `id_menu` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `url` varchar(60) NOT NULL,
  `menu_padre` int(11) DEFAULT NULL,
  `tipo_menu` varchar(45) NOT NULL,
  PRIMARY KEY (`id_menu`),
  UNIQUE KEY `descripcion` (`nombre`),
  KEY `menu_menu_padre_74321b51_fk_menu_id_menu` (`menu_padre`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `q_menu`
--

LOCK TABLES `q_menu` WRITE;
/*!40000 ALTER TABLE `q_menu` DISABLE KEYS */;
INSERT INTO `q_menu` VALUES (1,'Seguridad','ACTIVO','#',NULL,'PADRE'),(3,'Usuarios','ACTIVO','seguridad:usuarios',1,'HIJO'),(4,'Permisos','ACTIVO','seguridad:permisos',1,'HIJO'),(5,'Personas','ACTIVO','seguridad:personas',1,'HIJO'),(6,'Sección Estudiante','ACTIVO','#',NULL,'PADRE'),(7,'Cursos','ACTIVO','asignacion:cursos',8,'HIJO'),(8,'Seccion profesor','ACTIVO','#',NULL,'PADRE'),(9,'Alumnos','ACTIVO','asignacion:alumnos',8,'HIJO'),(10,'Examenes','ACTIVO','#',8,'HIJO'),(12,'Opciones','ACTIVO','#',8,'HIJO'),(13,'Preguntas','ACTIVO','#',8,'HIJO'),(14,'Asignar examenes','ACTIVO','#',8,'HIJO'),(15,'Anexos','ACTIVO','evaluacion:anexos',8,'HIJO'),(16,'Evaluaciones','ACTIVO','#',6,'HIJO');
/*!40000 ALTER TABLE `q_menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `q_opciones`
--

DROP TABLE IF EXISTS `q_opciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `q_opciones` (
  `id_opcion` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(50) NOT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `respuesta` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_opcion`),
  UNIQUE KEY `opciones_descripcion_849af30b_uniq` (`descripcion`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `q_opciones`
--

LOCK TABLES `q_opciones` WRITE;
/*!40000 ALTER TABLE `q_opciones` DISABLE KEYS */;
INSERT INTO `q_opciones` VALUES (1,'4','ACTIVO',1),(2,'5','ACTIVO',0),(3,'po','ACTIVO',0),(9,'cuatro','ACTIVO',1),(10,'5+5','ACTIVO',0);
/*!40000 ALTER TABLE `q_opciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `q_permiso_menu`
--

DROP TABLE IF EXISTS `q_permiso_menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `q_permiso_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rol_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `permiso_menu_menu_id_86e9674a_fk_menu_id_menu` (`menu_id`),
  KEY `rol_idx` (`rol_id`),
  CONSTRAINT `permiso_menu_menu_id_86e9674a_fk_menu_id_menu` FOREIGN KEY (`menu_id`) REFERENCES `q_menu` (`id_menu`),
  CONSTRAINT `rolesdemenu` FOREIGN KEY (`rol_id`) REFERENCES `q_rol` (`id_rol`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `q_permiso_menu`
--

LOCK TABLES `q_permiso_menu` WRITE;
/*!40000 ALTER TABLE `q_permiso_menu` DISABLE KEYS */;
INSERT INTO `q_permiso_menu` VALUES (1,2,10),(2,2,10),(3,3,14),(4,2,10),(5,3,7),(6,3,14),(7,3,14),(8,3,14),(9,3,14),(10,3,16),(11,5,14),(12,4,10);
/*!40000 ALTER TABLE `q_permiso_menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `q_persona`
--

DROP TABLE IF EXISTS `q_persona`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `q_persona` (
  `id_persona` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `cedula` varchar(50) NOT NULL,
  `estado` varchar(50) DEFAULT NULL,
  `foto` varchar(100) NOT NULL,
  PRIMARY KEY (`id_persona`),
  UNIQUE KEY `persona_cedula_f74f5552_uniq` (`cedula`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `q_persona`
--

LOCK TABLES `q_persona` WRITE;
/*!40000 ALTER TABLE `q_persona` DISABLE KEYS */;
INSERT INTO `q_persona` VALUES (4,'Mauricio','Santillan','0950596353','ACTIVO','usuarios_avatar/luffy.jpg'),(5,'pedro','moncayo','0950596344','INACTIVO','default/default_avatar.png'),(6,'Manuel','fonseca','0950597841','ACTIVO','default/default_avatar.png'),(7,'Mateo','Hidalgo','1724911217','ACTIVO','default/default_avatar.png'),(8,'PENE','MILENKO','1234567825','ACTIVO','EN LA CUCA MARIA EMILIA');
/*!40000 ALTER TABLE `q_persona` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `q_preguntas`
--

DROP TABLE IF EXISTS `q_preguntas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `q_preguntas` (
  `id_pregunta` int(11) NOT NULL AUTO_INCREMENT,
  `pregunta` longtext NOT NULL,
  `id_examen` int(11) NOT NULL,
  `anexo` longtext,
  `id_opcion` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_pregunta`),
  KEY `preguntas_id_examen_6304a803_fk_examen_id_examen` (`id_examen`),
  KEY `opcion_idx` (`id_opcion`),
  CONSTRAINT `opcion` FOREIGN KEY (`id_opcion`) REFERENCES `q_opciones` (`id_opcion`),
  CONSTRAINT `preguntas_id_examen_6304a803_fk_examen_id_examen` FOREIGN KEY (`id_examen`) REFERENCES `q_examen` (`id_examen`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `q_preguntas`
--

LOCK TABLES `q_preguntas` WRITE;
/*!40000 ALTER TABLE `q_preguntas` DISABLE KEYS */;
INSERT INTO `q_preguntas` VALUES (1,'2 +2 ',1,NULL,NULL),(2,'¿cuanto es 2 + 2?',1,'www.xvideos.com',1),(3,'¿cuanto es 3 + 2?',1,'www.xvideos.com',2);
/*!40000 ALTER TABLE `q_preguntas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `q_rol`
--

DROP TABLE IF EXISTS `q_rol`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `q_rol` (
  `id_rol` int(11) NOT NULL AUTO_INCREMENT,
  `rol_nombre` varchar(45) NOT NULL,
  `rol_estado` varchar(45) NOT NULL,
  PRIMARY KEY (`id_rol`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `q_rol`
--

LOCK TABLES `q_rol` WRITE;
/*!40000 ALTER TABLE `q_rol` DISABLE KEYS */;
INSERT INTO `q_rol` VALUES (2,'ADMINISTRADOR','ACTIVO'),(3,'PROFESOR','ACTIVO'),(4,'ALUMNO','ACTIVO'),(5,'EMPLEADO ADMINITRATIVO','ACTIVO'),(6,'MANTENIMIENTO','ACTIVO');
/*!40000 ALTER TABLE `q_rol` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `q_usuario`
--

DROP TABLE IF EXISTS `q_usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `q_usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(45) NOT NULL,
  `correo` varchar(80) DEFAULT NULL,
  `clave` varchar(45) NOT NULL,
  `estado` varchar(50) DEFAULT NULL,
  `id_persona` int(11) NOT NULL,
  `rol_usuario` int(11) NOT NULL,
  PRIMARY KEY (`id_usuario`),
  UNIQUE KEY `usuario_id_persona_dd575d1f_uniq` (`id_persona`),
  KEY `usuario_rol_usuario_c54bbc57_fk_rol_id_rol` (`rol_usuario`),
  CONSTRAINT `usuario_id_persona_dd575d1f_fk_persona_id_persona` FOREIGN KEY (`id_persona`) REFERENCES `q_persona` (`id_persona`),
  CONSTRAINT `usuario_rol_usuario_c54bbc57_fk_rol_id_rol` FOREIGN KEY (`rol_usuario`) REFERENCES `q_rol` (`id_rol`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `q_usuario`
--

LOCK TABLES `q_usuario` WRITE;
/*!40000 ALTER TABLE `q_usuario` DISABLE KEYS */;
INSERT INTO `q_usuario` VALUES (1,'admin','example@gmail.com','admin','ACTIVO',4,2),(2,'usuario','usuario@gmail.com','usuario','ACTIVO',5,4),(3,'DANKO','milenkonegrete@cocheo.com','6969724','ACTIVO',8,6);
/*!40000 ALTER TABLE `q_usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'virtual_quiz'
--

--
-- Dumping routines for database 'virtual_quiz'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-03-31 12:38:00
