-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-06-2016 a las 02:43:52
-- Versión del servidor: 10.0.17-MariaDB
-- Versión de PHP: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `corporacion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `usuario` varchar(30) DEFAULT NULL,
  `clave` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`usuario`, `clave`) VALUES
('corpoliberal', 'corpoliberal');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `codigos`
--

CREATE TABLE `codigos` (
  `id` int(50) NOT NULL,
  `codigo` varchar(20) NOT NULL DEFAULT '',
  `comuna` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coordinador`
--

CREATE TABLE `coordinador` (
  `nombrec` varchar(50) DEFAULT NULL,
  `documentoc` varchar(25) NOT NULL DEFAULT '',
  `direccionc` varchar(50) DEFAULT NULL,
  `telefonoc` varchar(20) DEFAULT NULL,
  `profesionc` varchar(30) DEFAULT NULL,
  `cumplec` varchar(50) DEFAULT NULL,
  `mailc` varchar(50) DEFAULT NULL,
  `barrioc` varchar(40) DEFAULT NULL,
  `estratoc` varchar(10) DEFAULT NULL,
  `productosc` varchar(50) DEFAULT NULL,
  `lugarc` varchar(40) DEFAULT NULL,
  `puestoc` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `familia`
--

CREATE TABLE `familia` (
  `nombref` varchar(55) DEFAULT NULL,
  `cedulaf` varchar(25) DEFAULT NULL,
  `apellidof` varchar(20) NOT NULL,
  `oficiof` varchar(20) DEFAULT NULL,
  `parentescof` varchar(30) DEFAULT NULL,
  `lugarf` varchar(20) DEFAULT NULL,
  `puestof` varchar(5) DEFAULT NULL,
  `fk_coordinador` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lider`
--

CREATE TABLE `lider` (
  `nombrel` varchar(30) DEFAULT NULL,
  `cedulal` varchar(20) NOT NULL DEFAULT '',
  `cell` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menores`
--

CREATE TABLE `menores` (
  `nombrem` varchar(50) DEFAULT NULL,
  `edadm` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL DEFAULT '.',
  `fk_coo` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rompe1`
--

CREATE TABLE `rompe1` (
  `id` int(11) NOT NULL,
  `fk_cedulal` varchar(20) DEFAULT NULL,
  `fk_codigo` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rompe2`
--

CREATE TABLE `rompe2` (
  `id` int(11) NOT NULL,
  `fk_coordinador` varchar(25) DEFAULT NULL,
  `fk_lider` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `codigos`
--
ALTER TABLE `codigos`
  ADD PRIMARY KEY (`codigo`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `coordinador`
--
ALTER TABLE `coordinador`
  ADD PRIMARY KEY (`documentoc`);

--
-- Indices de la tabla `familia`
--
ALTER TABLE `familia`
  ADD KEY `fk_coordinador` (`fk_coordinador`);

--
-- Indices de la tabla `lider`
--
ALTER TABLE `lider`
  ADD PRIMARY KEY (`cedulal`);

--
-- Indices de la tabla `menores`
--
ALTER TABLE `menores`
  ADD KEY `fk_coo` (`fk_coo`);

--
-- Indices de la tabla `rompe1`
--
ALTER TABLE `rompe1`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cedulal` (`fk_cedulal`),
  ADD KEY `fk_codigo` (`fk_codigo`);

--
-- Indices de la tabla `rompe2`
--
ALTER TABLE `rompe2`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_coordinador` (`fk_coordinador`),
  ADD KEY `fk_lider` (`fk_lider`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `codigos`
--
ALTER TABLE `codigos`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `rompe1`
--
ALTER TABLE `rompe1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `rompe2`
--
ALTER TABLE `rompe2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `familia`
--
ALTER TABLE `familia`
  ADD CONSTRAINT `familia_ibfk_1` FOREIGN KEY (`fk_coordinador`) REFERENCES `coordinador` (`documentoc`);

--
-- Filtros para la tabla `menores`
--
ALTER TABLE `menores`
  ADD CONSTRAINT `menores_ibfk_1` FOREIGN KEY (`fk_coo`) REFERENCES `coordinador` (`documentoc`);

--
-- Filtros para la tabla `rompe1`
--
ALTER TABLE `rompe1`
  ADD CONSTRAINT `rompe1_ibfk_1` FOREIGN KEY (`fk_cedulal`) REFERENCES `lider` (`cedulal`),
  ADD CONSTRAINT `rompe1_ibfk_2` FOREIGN KEY (`fk_codigo`) REFERENCES `codigos` (`codigo`);

--
-- Filtros para la tabla `rompe2`
--
ALTER TABLE `rompe2`
  ADD CONSTRAINT `rompe2_ibfk_1` FOREIGN KEY (`fk_coordinador`) REFERENCES `coordinador` (`documentoc`),
  ADD CONSTRAINT `rompe2_ibfk_2` FOREIGN KEY (`fk_lider`) REFERENCES `lider` (`cedulal`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
