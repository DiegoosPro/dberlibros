/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.6.24-log : Database - crudlibros
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`crudlibros` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `crudlibros`;

/*Table structure for table `tab_libros` */

DROP TABLE IF EXISTS `tab_libros`;

CREATE TABLE `tab_libros` (
  `ID_LIBRO` int(11) NOT NULL AUTO_INCREMENT,
  `TITULO` varchar(50) DEFAULT NULL,
  `AUTOR` varchar(50) DEFAULT NULL,
  `GENERO` varchar(50) DEFAULT NULL,
  `ANIO_PUBLICACION` int(11) DEFAULT NULL,
  `DISPONIBILIDAD` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`ID_LIBRO`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

/*Data for the table `tab_libros` */

insert  into `tab_libros`(`ID_LIBRO`,`TITULO`,`AUTOR`,`GENERO`,`ANIO_PUBLICACION`,`DISPONIBILIDAD`) values (1,'Cien años de soledad','Gabriel García Márquez','Realismo mágico',1967,1),(2,'1984','George Orwell','Ciencia ficción',1949,1),(3,'Harry Potter y la piedra filosofal','J.K. Rowling','Fantasía',1997,1);

/*Table structure for table `tab_usuarios` */

DROP TABLE IF EXISTS `tab_usuarios`;

CREATE TABLE `tab_usuarios` (
  `ID_USUARIOS` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE` varchar(50) DEFAULT NULL,
  `USUARIO` varchar(50) DEFAULT NULL,
  `PASSWORD` varchar(50) DEFAULT NULL,
  `PERFIL` varchar(50) DEFAULT NULL,
  `FECHA` date DEFAULT NULL,
  PRIMARY KEY (`ID_USUARIOS`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `tab_usuarios` */

insert  into `tab_usuarios`(`ID_USUARIOS`,`NOMBRE`,`USUARIO`,`PASSWORD`,`PERFIL`,`FECHA`) values (1,'John Doe','johndoe','mypassword','admin','2023-07-18'),(2,'Jane Smith','janesmith','password123','user','2023-07-18'),(3,'Mike Johnson','mikejohnson','securepass','user','2023-07-18');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
