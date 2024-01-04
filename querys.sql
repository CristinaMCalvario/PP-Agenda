/*CREATE TABLE `usuario` (
  `ID` int(10) AUTO_INCREMENT NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `departamento` varchar(100) NOT NULL,
  `cargo` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `telefono` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `username` varchar(100) NOT NULL,
  `rol` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  FOREIGN KEY (`rol`) REFERENCES permisos(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
*/
--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`ID`, `nombre`, `apellidos`, `departamento`, `cargo`, `correo`, `telefono`, `password`,`username`,`rol`) VALUES
(1, 'Cristina', 'Calvario Serrano', 'TI', 'Asistente', 'cris.margaretcs1518@gmail.com', '2227161434', '6f039c91ea94558eb011b89e6084bfdd','cris.margaretcs1518@gmail.com',1);