-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-09-2021 a las 18:09:59
-- Versión del servidor: 10.1.22-MariaDB
-- Versión de PHP: 7.0.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `organizador`
--
CREATE DATABASE IF NOT EXISTS `organizador` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `organizador`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupos`
--

CREATE TABLE `grupos` (
  `id_grupo` int(11) NOT NULL,
  `nombre_grupo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `listas`
--

CREATE TABLE `listas` (
  `id_lista` int(11) NOT NULL,
  `id_grupo` int(11) NOT NULL,
  `nombre_lista` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `listas_elementos`
--

CREATE TABLE `listas_elementos` (
  `id_lista_elemento` int(11) NOT NULL,
  `id_lista` int(11) NOT NULL,
  `contenido_lista_elemento` varchar(200) NOT NULL,
  `fecha_de_creacion` date NOT NULL,
  `estado_de_elemento` int(1) NOT NULL COMMENT '0=inactivo, 1=activo, 2=completado'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `grupos`
--
ALTER TABLE `grupos`
  ADD PRIMARY KEY (`id_grupo`);

--
-- Indices de la tabla `listas`
--
ALTER TABLE `listas`
  ADD PRIMARY KEY (`id_lista`),
  ADD KEY `id_lista` (`id_grupo`) USING BTREE;

--
-- Indices de la tabla `listas_elementos`
--
ALTER TABLE `listas_elementos`
  ADD PRIMARY KEY (`id_lista_elemento`),
  ADD KEY `id_lista` (`id_lista`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `grupos`
--
ALTER TABLE `grupos`
  MODIFY `id_grupo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `listas`
--
ALTER TABLE `listas`
  MODIFY `id_lista` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `listas_elementos`
--
ALTER TABLE `listas_elementos`
  MODIFY `id_lista_elemento` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `listas`
--
ALTER TABLE `listas`
  ADD CONSTRAINT `listas_ibfk_1` FOREIGN KEY (`id_grupo`) REFERENCES `grupos` (`id_grupo`);

--
-- Filtros para la tabla `listas_elementos`
--
ALTER TABLE `listas_elementos`
  ADD CONSTRAINT `listas_elementos_ibfk_1` FOREIGN KEY (`id_lista`) REFERENCES `listas` (`id_lista`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
