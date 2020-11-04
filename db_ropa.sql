-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-11-2020 a las 17:14:52
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
(3, 'nueva descripcion de narrow', 'NARROW'),
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
(18, 'descripcion de Roberto Cavalli', 'ROBERTO CAVALLI'),
(20, 'muy buena', 'MUestra'),
(24, 'PARA IR CERCA', 'CERCANI');

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
(40, 'BERMUDA NUEVA', 62, 'GROW', 'SUVE', 2345, 11);

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
(9, 'usuario1', '$2y$10$tvd32pOWVMlQ1rEnwk4jHeURIDcpSMep4BEZ/U3eqike8EIkU/6fO', 0),
(10, 'usuario2', '$2y$10$xEjAb/RkZdQjkqVy1CusaO1qhrjj2bL3uADeej1KnWlAhOeK6n3Nu', 0),
(11, 'usuario3', '$2y$10$tXAGmZQOtg4GXo2j15NZde0332iRaX2n8rSGSNhoLYyTGH8RlOBRG', 0);

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
  MODIFY `id_marca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `pantalon`
--
ALTER TABLE `pantalon`
  MODIFY `id_pantalones` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
