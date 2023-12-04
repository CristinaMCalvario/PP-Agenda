-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-11-2023 a las 03:23:22
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `agendapp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventosalajuntas`
--

CREATE TABLE `eventosalajuntas` (
  `ID` int(10) NOT NULL,
  `titulo` varchar(300) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `incio` datetime DEFAULT NULL,
  `fin` datetime DEFAULT NULL,
  `IDUser` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evidenciavehiculo`
--

CREATE TABLE `evidenciavehiculo` (
  `ID` int(10) NOT NULL,
  `kilometrajeInicial` longblob NOT NULL,
  `kilometrajeFinal` longblob NOT NULL,
  `IDUser` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitudsalajuntas`
--

CREATE TABLE `solicitudsalajuntas` (
  `ID` int(10) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `fechainicio` datetime NOT NULL,
  `fechafin` datetime NOT NULL,
  `juntasera` varchar(20) NOT NULL,
  `participantesInternos` varchar(200) NOT NULL,
  `participantesExternos` varchar(200) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `usaras` varchar(20) NOT NULL,
  `IDUser` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `solicitudsalajuntas`
--

INSERT INTO `solicitudsalajuntas` (`ID`, `titulo`, `fechainicio`, `fechafin`, `juntasera`, `participantesInternos`, `participantesExternos`, `descripcion`, `usaras`, `IDUser`) VALUES
(1, 'Junta de Tequila', '2023-11-23 13:30:00', '2023-11-23 18:00:00', 'presencial', 'aSDFGHJ', 'fdghjkhgf', 'dfghjk', 'proyector', 1),
(2, 'GYM', '2023-11-08 15:51:34', '2023-11-08 16:51:34', '', 'SADSFDGFH', 'ASDFGH', 'SADFGH', 'proyector', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitudvehiculo`
--

CREATE TABLE `solicitudvehiculo` (
  `ID` int(10) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `fechainicio` datetime NOT NULL,
  `fechafin` datetime NOT NULL,
  `tiempoaprox` varchar(20) NOT NULL,
  `nombrePasajeros` varchar(200) NOT NULL,
  `destino` varchar(200) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `tga` varchar(20) NOT NULL,
  `observaciones` varchar(200) NOT NULL,
  `IDUser` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `ID` int(10) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `departamento` varchar(100) NOT NULL,
  `cargo` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `telefono` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `rol` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  FOREIGN KEY (`rol`) REFERENCES permisos(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`ID`, `nombre`, `apellidos`, `departamento`, `cargo`, `correo`, `telefono`, `password`) VALUES
(1, 'Amyra', 'Sanchez Garcia', 'TI', 'Lider', 'amyra@gamil.com', '25896314', '123456');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `eventosalajuntas`
--
ALTER TABLE `eventosalajuntas`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `IDUser` (`IDUser`);

--
-- Indices de la tabla `evidenciavehiculo`
--
ALTER TABLE `evidenciavehiculo`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `IDUser` (`IDUser`);

--
-- Indices de la tabla `solicitudsalajuntas`
--
ALTER TABLE `solicitudsalajuntas`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `IDUser` (`IDUser`);

--
-- Indices de la tabla `solicitudvehiculo`
--
ALTER TABLE `solicitudvehiculo`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `IDUser` (`IDUser`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `eventosalajuntas`
--
ALTER TABLE `eventosalajuntas`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `evidenciavehiculo`
--
ALTER TABLE `evidenciavehiculo`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `solicitudsalajuntas`
--
ALTER TABLE `solicitudsalajuntas`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `solicitudvehiculo`
--
ALTER TABLE `solicitudvehiculo`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `eventosalajuntas`
--
ALTER TABLE `eventosalajuntas`
  ADD CONSTRAINT `eventosalajuntas_ibfk_1` FOREIGN KEY (`IDUser`) REFERENCES `usuario` (`ID`);

--
-- Filtros para la tabla `evidenciavehiculo`
--
ALTER TABLE `evidenciavehiculo`
  ADD CONSTRAINT `evidenciavehiculo_ibfk_1` FOREIGN KEY (`IDUser`) REFERENCES `usuario` (`ID`);

--
-- Filtros para la tabla `solicitudsalajuntas`
--
ALTER TABLE `solicitudsalajuntas`
  ADD CONSTRAINT `solicitudsalajuntas_ibfk_1` FOREIGN KEY (`IDUser`) REFERENCES `usuario` (`ID`);

--
-- Filtros para la tabla `solicitudvehiculo`
--
ALTER TABLE `solicitudvehiculo`
  ADD CONSTRAINT `solicitudvehiculo_ibfk_1` FOREIGN KEY (`IDUser`) REFERENCES `usuario` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
