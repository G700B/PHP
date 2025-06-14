-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-09-2023 a las 23:05:15
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
-- Base de datos: `empresa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `dni` int(8) NOT NULL,
  `fecha_ingreso` date DEFAULT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `lugar_nacimiento` varchar(100) DEFAULT NULL,
  `nacionalidad` varchar(51) DEFAULT NULL,
  `sexo` varchar(1) DEFAULT NULL,
  `estado_civil` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telefono` int(15) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `localidad` varchar(100) DEFAULT NULL,
  `postal` int(4) DEFAULT NULL,
  `provincia` varchar(100) DEFAULT NULL,
  `sector` varchar(50) DEFAULT NULL,
  `cod_sector` int(2) DEFAULT NULL,
  `puesto` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`dni`, `fecha_ingreso`, `apellido`, `nombre`, `fecha_nacimiento`, `lugar_nacimiento`, `nacionalidad`, `sexo`, `estado_civil`, `email`, `telefono`, `direccion`, `localidad`, `postal`, `provincia`, `sector`, `cod_sector`, `puesto`) VALUES
(12369789, '0000-00-00', 'Vargas ', 'Tatiana', '1979-05-11', 'San Justo', 'argentina', 'F', 'Soltera', 'vargastati@gmail.com', 1137469864, 'barrieno 4324', 'San Isidro', 8923, 'Buenos Aires', 'oficina', NULL, 'consultor de estrategia'),
(23698766, '0000-00-00', 'López', 'Armando', '1980-05-22', 'Buenos Aires', 'argentino', 'M', 'Soltero', 'lopezarmando44@gmail.com', 1198678343, 'Monserrat 3556', 'San Miguel', 1613, 'Buenos aires', 'oficina', NULL, 'Marqeting');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `cod_producto` int(8) NOT NULL,
  `descripcion` varchar(50) DEFAULT NULL,
  `cod_sector` int(2) DEFAULT NULL,
  `cantidad` int(4) DEFAULT NULL,
  `fecha_produccion` date DEFAULT NULL,
  `hora_produccion` datetime DEFAULT NULL,
  `fecha_vencimiento` date DEFAULT NULL,
  `produccion` varchar(100) DEFAULT NULL,
  `stock` int(4) DEFAULT NULL,
  `codigo_producto` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sectores`
--

CREATE TABLE `sectores` (
  `cod_sector` int(2) NOT NULL,
  `sector` varchar(50) DEFAULT NULL,
  `dni` int(8) DEFAULT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `fecha_ingreso` date DEFAULT NULL,
  `horario_ingreso` datetime DEFAULT NULL,
  `horario_salida` datetime DEFAULT NULL,
  `encargado` varchar(50) DEFAULT NULL,
  `produccion` varchar(100) DEFAULT NULL,
  `stock` int(4) DEFAULT NULL,
  `codigo_producto` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`dni`),
  ADD KEY `cod_sector` (`cod_sector`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`cod_producto`),
  ADD KEY `cod_sector` (`cod_sector`);

--
-- Indices de la tabla `sectores`
--
ALTER TABLE `sectores`
  ADD PRIMARY KEY (`cod_sector`),
  ADD KEY `codigo_producto` (`codigo_producto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `dni` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23698767;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `cod_producto` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `sectores`
--
ALTER TABLE `sectores`
  MODIFY `cod_sector` int(2) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD CONSTRAINT `empleados_ibfk_1` FOREIGN KEY (`cod_sector`) REFERENCES `sectores` (`cod_sector`);

--
-- Filtros para la tabla `sectores`
--
ALTER TABLE `sectores`
  ADD CONSTRAINT `sectores_ibfk_1` FOREIGN KEY (`codigo_producto`) REFERENCES `productos` (`cod_producto`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
