-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-11-2020 a las 16:31:49
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_ropa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL,
  `comentarios` varchar(255) DEFAULT NULL,
  `puntaje` int(11) DEFAULT NULL,
  `commentedBy` varchar(255) NOT NULL,
  `id_coment_pantalon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id`, `comentarios`, `puntaje`, `commentedBy`, `id_coment_pantalon`) VALUES
(138, 'muy buena 2', 5, 'admin mariano123', 17),
(139, 'muy buena 2 123', 5, 'admin mariano123', 17),
(140, 'prueba', 1, 'admin mariano123', 24),
(141, 'prueba otro usuariio', 2, 'camila', 24),
(142, 'das', 1, 'camila', 22),
(144, 'comentarios para ver filtro', 5, 'admin mariano123', 24),
(145, 'comentarios para ver ', 5, 'admin mariano123', 24),
(146, 'otra cosa', 3, 'admin mariano123', 24),
(147, 'otra cosa nueva', 2, 'admin mariano123', 24);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE `marca` (
  `id_marca` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `marca` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`id_marca`, `descripcion`, `marca`) VALUES
(3, 'nueva descripcion de narrow', 'NARROW'),
(6, 'para el campo', 'PAMPERO'),
(7, 'descripcion de Kloster', 'KLOSTER'),
(10, 'descripcion de Huapi', 'HUAPI'),
(11, 'descripcion de levi´s', 'LEVI´S'),
(12, 'descripcion de bearcliff', 'BEARCLIFF'),
(13, 'descripcion de basement', 'BASEMENT'),
(14, 'descripcion de americanino', 'AMERICANINO'),
(15, 'descripcion de mossimo', 'MOSSIMO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pantalon`
--

CREATE TABLE `pantalon` (
  `id_pantalones` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `talle` int(11) NOT NULL,
  `color` varchar(55) NOT NULL,
  `tela` varchar(55) NOT NULL,
  `precio` float NOT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `id_marca` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pantalon`
--

INSERT INTO `pantalon` (`id_pantalones`, `nombre`, `talle`, `color`, `tela`, `precio`, `imagen`, `id_marca`) VALUES
(17, 'sarandunga', 40, 'azul claro', 'algodon', 3490, 'pantalon-muestra.jpg', 3),
(22, 'Rally', 35, 'azul oscuro', 'estilizada', 2990, NULL, 7),
(24, 'cosa nueva', 43, 'celeste', 'mezclilla', 2900, NULL, 3),
(30, 'pantalón chino con cinturón', 43, 'crema', 'algodon', 5900, NULL, 13),
(31, 'balcarce', 38, 'beige', 'algodón ', 2300, NULL, 6),
(50, 'mariano', 456, 'sda', 'das', 456, 'C5B2.tmp', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `administrador` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `password`, `administrador`) VALUES
(5, 'lucas123', '$2y$10$oTxg6SodRUUZRpcNnOYgaua.tYZ66MlJV.TFzcB33LC9gYEPWR3Ya', 1),
(8, 'mariano123', '$2y$10$nQTJWkxZfULLNkmBK.pOvOk4pKBiM2Tcaqx2i/9xEf/pjDrArJk0K', 1),
(9, 'usuario1', '$2y$10$tvd32pOWVMlQ1rEnwk4jHeURIDcpSMep4BEZ/U3eqike8EIkU/6fO', 1),
(44, 'usuario2', '$2y$10$bkDIvef/grr/DcsGgwBCWeN4/OfB.a3cIzeq5yvXF88Hsrq7ppgwa', 0),
(45, 'marianomayo', '$2y$10$/wudlfVYF0Yl57.DPnEK2eQPNC0f5q6RFQsJqf.YQxxnIL6MGpjYy', 0),
(46, 'camila', '$2y$10$AdTaxh3ihi1YqcLMeQrnouMWR47Ym0tAzWaBUGwQAu7poKWejKDKS', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`id_marca`),
  ADD KEY `id_marca` (`id_marca`);

--
-- Indices de la tabla `pantalon`
--
ALTER TABLE `pantalon`
  ADD PRIMARY KEY (`id_pantalones`),
  ADD KEY `id_marca` (`id_marca`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=148;

--
-- AUTO_INCREMENT de la tabla `marca`
--
ALTER TABLE `marca`
  MODIFY `id_marca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `pantalon`
--
ALTER TABLE `pantalon`
  MODIFY `id_pantalones` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pantalon`
--
ALTER TABLE `pantalon`
  ADD CONSTRAINT `pantalon_ibfk_1` FOREIGN KEY (`id_marca`) REFERENCES `marca` (`id_marca`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
