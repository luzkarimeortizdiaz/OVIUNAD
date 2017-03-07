-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 01-03-2017 a las 23:59:16
-- Versión del servidor: 5.5.8
-- Versión de PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `web1_unad`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contenido`
--

CREATE TABLE IF NOT EXISTS `contenido` (
  `cont_id` int(11) NOT NULL AUTO_INCREMENT,
  `cont_title` varchar(80) NOT NULL,
  `cont_subtitle` varchar(80) NOT NULL,
  `cont_prog` varchar(80) NOT NULL,
  `cont_desc` varchar(2000) NOT NULL,
  PRIMARY KEY (`cont_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Volcar la base de datos para la tabla `contenido`
--

INSERT INTO `contenido` (`cont_id`, `cont_title`, `cont_subtitle`, `cont_prog`, `cont_desc`) VALUES
(1, 'Programaci&oacute;n web 1', 'Vinculaci&oacute;n de BD a una p&aacute;gina con PHP', 'Tec. Desarrollo de Software', 'Mostrar la programaci&oacute;n y los elementos necesarios para esta vinculaci&oacute;n. <br> Creaci&oacute;n de bases de datos en gestores como MYSQL. <br> Pasos en la vinculaci&oacute;n de una base de datos en una p&aacute;gina desde PHP con opciones de consulta, edici&oacute;n, modificaci&oacute;n y eliminaci&oacute;n de datos y/o registros.'),
(2, 'Programaci&oacute;n web 1', 'Conectar una Base de Datos', 'Pasos', 'Creamos una clase denominada Db. <br> Dentro de la clase, establecemos las variables privadas (host, usuario, contrase&ntilde;a y nombre de base de datos). <br> Elaboramos la funci&oacute;n privada para conectar nuestra base de datos (mysqli_connect).'),
(3, 'Programaci&oacute;n web 1', 'Insertar Registros de una Base de Datos', 'Pasos', 'En la clase Db, creamos una funci&oacute;n p&uacute;blica para ejecutar una sentencia. <br> En un archivo aparte, creamos una funci&oacute;n para validar y asegurar el contenido de los datos. <br> Ejecutamos la funci&oacute;n ejecutar para insertar los datos en la base de datos.'),
(4, 'Programaci&oacute;n web 1', 'Consultar Registros de una Base de Datos', 'Pasos', 'Mostrar la programaci&oacute;n y los elementos necesarios para esta vinculaci&oacute;n. <br> Creaci&oacute;n de bases de datos en gestores como MYSQL. <br> Pasos en la vinculaci&oacute;n de una base de datos en una p&aacute;gina desde PHP con opciones de consulta, edici&oacute;n, modificaci&oacute;n y eliminaci&oacute;n de datos y/o registros.'),
(5, 'Programaci&oacute;n web 1', 'Edici&oacute;n de Registros de una Base de Datos', 'Pasos', 'Mostrar la programaci&oacute;n y los elementos necesarios para esta vinculaci&oacute;n. <br> Creaci&oacute;n de bases de datos en gestores como MYSQL. <br> Pasos en la vinculaci&oacute;n de una base de datos en una p&aacute;gina desde PHP con opciones de consulta, edici&oacute;n, modificaci&oacute;n y eliminaci&oacute;n de datos y/o registros.'),
(6, 'Programaci&oacute;n web 1', 'Actualizaci&oacute;n de Registros de una Base de Datos', 'Pasos', 'Mostrar la programaci&oacute;n y los elementos necesarios para esta vinculaci&oacute;n. <br> Creaci&oacute;n de bases de datos en gestores como MYSQL. <br> Pasos en la vinculaci&oacute;n de una base de datos en una p&aacute;gina desde PHP con opciones de consulta, edici&oacute;n, modificaci&oacute;n y eliminaci&oacute;n de datos y/o registros.'),
(7, 'Programaci&oacute;n web 1', 'Eliminaci&oacute;n de Registros de una Base de Datos', 'Pasos', 'Mostrar la programaci&oacute;n y los elementos necesarios para esta vinculaci&oacute;n. <br> Creaci&oacute;n de bases de datos en gestores como MYSQL. <br> Pasos en la vinculaci&oacute;n de una base de datos en una p&aacute;gina desde PHP con opciones de consulta, edici&oacute;n, modificaci&oacute;n y eliminaci&oacute;n de datos y/o registros.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

CREATE TABLE IF NOT EXISTS `imagenes` (
  `id_imagen` int(11) NOT NULL AUTO_INCREMENT,
  `name_imagen` varchar(60) NOT NULL,
  PRIMARY KEY (`id_imagen`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcar la base de datos para la tabla `imagenes`
--

INSERT INTO `imagenes` (`id_imagen`, `name_imagen`) VALUES
(1, '1.png'),
(2, '2.png'),
(3, '3.png'),
(4, 'PHP-Development.png'),
(5, 'base_datos.png'),
(6, 'insertar_base_datos.png');
