-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-04-2025 a las 21:02:27
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gym`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `metodo`
--

CREATE TABLE `metodo` (
  `id` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `metodo`
--

INSERT INTO `metodo` (`id`, `nombre`) VALUES
(1, 'Mercado Pago');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos`
--

CREATE TABLE `pagos` (
  `id` int(11) NOT NULL,
  `usuario` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `plan` int(11) NOT NULL,
  `fecha_pago` date NOT NULL,
  `metodo_pago` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pagos`
--

INSERT INTO `pagos` (`id`, `usuario`, `user`, `plan`, `fecha_pago`, `metodo_pago`) VALUES
(15, 11, 'eze angu', 1, '2025-04-29', 1),
(16, 11, 'eze angu', 1, '2025-04-29', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plan`
--

CREATE TABLE `plan` (
  `id` int(11) NOT NULL,
  `plan` varchar(100) NOT NULL,
  `precio` int(20) NOT NULL,
  `duracion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `plan`
--

INSERT INTO `plan` (`id`, `plan`, `precio`, `duracion`) VALUES
(1, 'plata', 3000, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `id_reg` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `apellido` text NOT NULL,
  `dni` int(11) NOT NULL,
  `telefono` int(11) NOT NULL,
  `password` varchar(55) NOT NULL,
  `f_ins` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`id_reg`, `nombre`, `apellido`, `dni`, `telefono`, `password`, `f_ins`) VALUES
(5, 'kevin', 'casco', 47190942, 1140643837, '', '2025-03-18'),
(6, 'federico', 'acosta', 47860926, 11227090, '', '2025-03-18'),
(7, 'fr', 'casco', -1, 11227090, '', '2025-03-18'),
(8, 'kevin', 'd', 3, 11227090, '3', '2025-03-18'),
(9, 'kevin', 'f', 452, 42, 'gvfdsg', '0000-00-00'),
(10, 'kevin', '5', 5, 5, 'gfh', '2025-03-19'),
(11, 'eze', 'angu', 33, 33, '33', '2025-03-19'),
(12, 'fran', 'col', 47635483, 1155917588, '12345', '2025-03-19'),
(13, 'kevin', 'casco', 2147483647, 45, '4763548356', '2025-03-19'),
(14, 'ñ', 'o', 25, 9, '12', '2025-04-01');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `metodo`
--
ALTER TABLE `metodo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario` (`usuario`,`plan`),
  ADD KEY `plan` (`plan`),
  ADD KEY `metodo_pago` (`metodo_pago`);

--
-- Indices de la tabla `plan`
--
ALTER TABLE `plan`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id_reg`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `metodo`
--
ALTER TABLE `metodo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `pagos`
--
ALTER TABLE `pagos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `plan`
--
ALTER TABLE `plan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `id_reg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD CONSTRAINT `pagos_ibfk_1` FOREIGN KEY (`usuario`) REFERENCES `registro` (`id_reg`),
  ADD CONSTRAINT `pagos_ibfk_2` FOREIGN KEY (`plan`) REFERENCES `plan` (`id`),
  ADD CONSTRAINT `pagos_ibfk_3` FOREIGN KEY (`metodo_pago`) REFERENCES `metodo` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
