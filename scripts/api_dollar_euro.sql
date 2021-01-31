-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 31-01-2021 a las 04:19:50
-- Versión del servidor: 5.7.31
-- Versión de PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `api_dollar_euro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dollar`
--

DROP TABLE IF EXISTS `dollar`;
CREATE TABLE IF NOT EXISTS `dollar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(20) NOT NULL,
  `value` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `dollar`
--

INSERT INTO `dollar` (`id`, `date`, `value`) VALUES
(1, '2018-05-01', 610),
(2, '2018-05-02', 650);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `euro`
--

DROP TABLE IF EXISTS `euro`;
CREATE TABLE IF NOT EXISTS `euro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(20) NOT NULL,
  `value` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `euro`
--

INSERT INTO `euro` (`id`, `date`, `value`) VALUES
(1, '2018-05-01', 700),
(2, '2018-05-02', 701),
(3, '2018-05-03', 702),
(4, '2018-05-04', 703);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
