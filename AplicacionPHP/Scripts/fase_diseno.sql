/*
SQLyog Ultimate v9.63 
MySQL - 5.6.21 : Database - fase_diseno
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`fase_diseno` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `fase_diseno`;

/*Table structure for table `productos` */

DROP TABLE IF EXISTS `productos`;

CREATE TABLE `productos` (
  `cod_producto` bigint(20) NOT NULL COMMENT 'Código del producto',
  `nom_producto` varchar(50) NOT NULL COMMENT 'Nombre del producto',
  `cant_producto` int(6) NOT NULL COMMENT 'Cantidad del producto',
  `valor` bigint(20) NOT NULL COMMENT 'Valor del producto',
  `estado` int(1) NOT NULL COMMENT 'Estado del prodcuto. 1=Activo | 0=inactivo',
  PRIMARY KEY (`cod_producto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `productos` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
