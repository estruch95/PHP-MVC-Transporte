-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 04-03-2022 a las 13:28:17
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `transporte`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `CAMION`
--

CREATE TABLE `CAMION` (
  `matricula` varchar(7) NOT NULL,
  `modelo` varchar(50) NOT NULL,
  `potencia` varchar(50) NOT NULL,
  `tipo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `CAMION`
--

INSERT INTO `CAMION` (`matricula`, `modelo`, `potencia`, `tipo`) VALUES
('3344TES', 'STRAILESS', '450CV', 'TRAILER'),
('8867LPT', 'COLMAN', '650CV', 'REMOLCADOR');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `CAMIONERO`
--

CREATE TABLE `CAMIONERO` (
  `dni` varchar(9) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `poblacion` varchar(50) NOT NULL,
  `telefono` varchar(9) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `salario` float NOT NULL,
  `matricula_camion` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `CAMIONERO`
--

INSERT INTO `CAMIONERO` (`dni`, `nombre`, `poblacion`, `telefono`, `direccion`, `salario`, `matricula_camion`) VALUES
('22595478P', 'Pepe', 'Mislata', '695409032', 'C/La chispa 15', 1250.7, '3344TES'),
('56798034Q', 'Juan', 'Torrent', '633409078', 'C/Avenue 14', 1320.4, '3344TES'),
('78657823L', 'Carlos', 'Almussafes', '695334478', 'C/Ausias March 20', 1820.9, '8867LPT');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `CIUDAD`
--

CREATE TABLE `CIUDAD` (
  `cp` varchar(5) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `CIUDAD`
--

INSERT INTO `CIUDAD` (`cp`, `nombre`) VALUES
('46430', 'Sollana'),
('46440', 'Almussafes'),
('46450', 'Benifaio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `PAQUETE`
--

CREATE TABLE `PAQUETE` (
  `codigo` int(11) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `destinatario` varchar(100) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `dni_camionero` varchar(9) NOT NULL,
  `cp_ciudad` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `PAQUETE`
--

INSERT INTO `PAQUETE` (`codigo`, `descripcion`, `destinatario`, `direccion`, `dni_camionero`, `cp_ciudad`) VALUES
(1234, 'Xiami POCO X3 Pro', 'Ivan Estruch', 'C/Santa Cecilia 12', '22595478P', '46450'),
(4321, 'Camiseta tirantes gym blanco', 'Ivan Estruch', 'C/Santa Cecilia 12', '56798034Q', '46450'),
(5321, 'Impresora etiquetas SATO', 'Leopoldo Martinez', 'Av/Romani s/n', '78657823L', '46430');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `CAMION`
--
ALTER TABLE `CAMION`
  ADD PRIMARY KEY (`matricula`);

--
-- Indices de la tabla `CAMIONERO`
--
ALTER TABLE `CAMIONERO`
  ADD PRIMARY KEY (`dni`),
  ADD KEY `FK_CAMION` (`matricula_camion`);

--
-- Indices de la tabla `CIUDAD`
--
ALTER TABLE `CIUDAD`
  ADD PRIMARY KEY (`cp`);

--
-- Indices de la tabla `PAQUETE`
--
ALTER TABLE `PAQUETE`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `FK_CAMIONERO` (`dni_camionero`),
  ADD KEY `FK_CIUDAD` (`cp_ciudad`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `CAMIONERO`
--
ALTER TABLE `CAMIONERO`
  ADD CONSTRAINT `FK_CAMION` FOREIGN KEY (`matricula_camion`) REFERENCES `CAMION` (`matricula`);

--
-- Filtros para la tabla `PAQUETE`
--
ALTER TABLE `PAQUETE`
  ADD CONSTRAINT `FK_CAMIONERO` FOREIGN KEY (`dni_camionero`) REFERENCES `CAMIONERO` (`dni`),
  ADD CONSTRAINT `FK_CIUDAD` FOREIGN KEY (`cp_ciudad`) REFERENCES `CIUDAD` (`cp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
