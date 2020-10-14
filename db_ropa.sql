-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-10-2020 a las 21:41:41
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.9

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
(3, 'descripcion de narrow', 'NARROW'),
(6, 'para el campo', 'PAMPERO'),
(7, 'descripcion de Kloster', 'KLOSTER'),
(9, 'descripcion de vanderholl', 'VANDERHOLL'),
(10, 'descripcion de Huapi', 'HUAPI'),
(11, 'descripcion de levi´s', 'LEVI´S'),
(12, 'descripcion de bearcliff', 'BEARCLIFF'),
(13, 'descripcion de basement', 'BASEMENT'),
(14, 'descripcion de americanino', 'AMERICANINO'),
(15, 'descripcion de mossimo', 'MOSSIMO'),
(16, 'descripcion de volcom', 'VOLCOM'),
(17, 'descripcion de brooksfield', 'BROOKSFIELD'),
(18, 'descripcion de Roberto Cavalli', 'ROBERTO CAVALLI');

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
  `id_marca` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pantalon`
--

INSERT INTO `pantalon` (`id_pantalones`, `nombre`, `talle`, `color`, `tela`, `precio`, `id_marca`) VALUES
(17, 'jeans', 40, 'azul claro', 'algodon', 3490, 3),
(22, 'Rally', 35, 'azul oscuro', 'estilizada', 2990, 7),
(23, 'jean canno', 42, 'gris', 'denim', 2800, 9),
(24, 'Biolish', 43, 'celeste', 'mezclilla', 2900, 7),
(30, 'pantalón chino con cinturón', 43, 'crema', 'algodon', 5900, 13),
(31, 'balcarce', 38, 'beige', 'algodón ', 2300, 6),
(33, 'jeans urbano', 40, 'negro', 'algodon', 3500, 17),
(36, 'annanaan', 17, 'firtiu', 'lqiwd', 1, 15),
(37, 'nuevo', 10, 'ds', 'szzz', 545, 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `password`) VALUES
(2, 'lucas123456', '$2y$10$WU7LhV0QAH4bcLHCq/4WBu1oaoi9O0G1Nr4FI6Oi7A7ivNxQjLwtm'),
(3, 'luis123', '$2y$10$T9/Y7kZUX4Hb4eS7dW1xM.uz5kFnxKxU1T1xtbbUNk4/dnZhNloW2'),
(4, 'otro12345', '$2y$10$ykNXXPytKQJfeFZEOPLT4OBg/c2NfIIn9I54mqiRe9lNMqR76ezmW');

--
-- Índices para tablas volcadas
--

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
-- AUTO_INCREMENT de la tabla `marca`
--
ALTER TABLE `marca`
  MODIFY `id_marca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `pantalon`
--
ALTER TABLE `pantalon`
  MODIFY `id_pantalones` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
