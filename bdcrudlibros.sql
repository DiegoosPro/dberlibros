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
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

/*Data for the table `tab_libros` */

insert  into `tab_libros`(`id_libros`,`titulo`,`autor`,`genero`,`anio_publicacion`,`disponibilidad`,`stock`) values (1,'El código Da Vinci','Dan Brownaa','Misterio','2003-03-18',1,9),(9,'diegosS','diegos','diegos','2023-07-07',0,33),(10,'gato con botas modificado','aaaqq','aaaqqqqq','2023-07-07',1,332),(12,'mi libro modi','diego modi','aventura modificado','2019-06-24',0,333),(15,'Cien años de soledad','Gabriel García Márquez','Novela','1967-05-30',1,10),(16,'Don Quijote de la Mancha','Miguel de Cervantes ','Novela','1605-01-16',1,8),(17,'Crimen y castigo','Fyodor Dostoevsky','Novela','1866-02-15',1,5),(18,'El amor en los tiempos del cólera','Gabriel García Márquez','Novela','1985-03-06',1,12),(19,'Rayuela','Julio Cortázar','Novela','1963-01-28',1,6),(20,'Ficciones','Jorge Luis Borges','Cuento','1944-05-28',1,4),(21,'Pedro Páramo','Juan Rulfo','Novela','1955-04-01',1,3),(22,'El Aleph','Jorge Luis Borges','Cuento','1949-05-15',1,7),(23,'La sombra del viento','Carlos Ruiz Zafón','Novela','2001-04-01',1,9),(24,'La casa de los espíritus','Isabel Allende','Novela','1982-06-01',1,11);

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table `tab_usuarios` */

insert  into `tab_usuarios`(`id_usuarios`,`nombre`,`usuario`,`password`,`perfil`,`fecha`) values (1,'Diegoos','admin','$2a$07$asxx54ahjppf45sd87a5auXBm1Vr2M1NV5t/zNQtGHGpS5fFirrbG','Administrador','2023-07-24 12:31:04'),(2,'Napo','napo','$2a$07$asxx54ahjppf45sd87a5auXBm1Vr2M1NV5t/zNQtGHGpS5fFirrbG','Vendedor','2023-07-21 00:16:38'),(4,'admin1','admin1','$2a$07$asxx54ahjppf45sd87a5au1Cam1BmODYmvg125RuJDCajb9smPdx6','Vendedor modificado1','2023-07-24 13:14:10'),(5,'alex','hola','$2a$07$asxx54ahjppf45sd87a5auEKl984fID33lyBClW7OSuuQkFCZQT9a','Vendedor','2023-07-26 11:56:09');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
