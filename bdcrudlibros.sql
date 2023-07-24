/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.6.24-log : Database - bdlibros
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`bdlibros` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `bdlibros`;

/*Table structure for table `tab_libros` */

DROP TABLE IF EXISTS `tab_libros`;

CREATE TABLE `tab_libros` (
  `id_libros` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) DEFAULT NULL,
  `autor` varchar(50) DEFAULT NULL,
  `genero` varchar(50) DEFAULT NULL,
  `anio_publicacion` date DEFAULT NULL,
  `disponibilidad` tinyint(4) DEFAULT NULL,
  `stock` int(11) DEFAULT '0',
  PRIMARY KEY (`id_libros`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

/*Data for the table `tab_libros` */

insert  into `tab_libros`(`id_libros`,`titulo`,`autor`,`genero`,`anio_publicacion`,`disponibilidad`,`stock`) values (1,'El código Da Vinci','Dan Brownaa','Misterio','2003-03-18',1,9),(3,'bbb','bbb','bbb','2022-07-22',0,57),(5,'zz','zz','zz','2023-07-04',0,3),(9,'diegos','diegos','diegos','2023-07-07',0,33),(10,'gato con botas modificado','aaaqq','aaaqqqqq','2023-07-07',1,332),(11,'qss','qs','qs','2022-12-16',1,22),(12,'mi libro modi','diego modi','aventura modificado','2019-06-24',0,333);

/*Table structure for table `tab_usuarios` */

DROP TABLE IF EXISTS `tab_usuarios`;

CREATE TABLE `tab_usuarios` (
  `id_usuarios` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `usuario` varchar(50) DEFAULT NULL,
  `password` varchar(90) DEFAULT NULL,
  `perfil` varchar(50) DEFAULT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_usuarios`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

/*Data for the table `tab_usuarios` */

insert  into `tab_usuarios`(`id_usuarios`,`nombre`,`usuario`,`password`,`perfil`,`fecha`) values (1,'Diegoos','admin','$2a$07$asxx54ahjppf45sd87a5auXBm1Vr2M1NV5t/zNQtGHGpS5fFirrbG','Administrador','2023-07-24 12:31:04'),(2,'Napo','napo','$2a$07$asxx54ahjppf45sd87a5auXBm1Vr2M1NV5t/zNQtGHGpS5fFirrbG','Vendedor','2023-07-21 00:16:38'),(4,'admin1','admin1','$2a$07$asxx54ahjppf45sd87a5au1Cam1BmODYmvg125RuJDCajb9smPdx6','Vendedor modificado1','2023-07-24 13:14:10');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
