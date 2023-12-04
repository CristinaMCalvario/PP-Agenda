/*CREATE TABLE `agendapp`.`solicitudsalajuntas` ( 
    `ID` INT(10) NOT NULL AUTO_INCREMENT , 
    `titulo` VARCHAR(100) NOT NULL , 
    `fechainicio` DATETIME NOT NULL ,
    `fechafin` DATETIME NOT NULL , 
    `juntasera` VARCHAR(20) NOT NULL , 
    `participantesInternos` VARCHAR(200) NOT NULL , `participantesExternos` VARCHAR(200) NOT NULL , 
    `descripcion` VARCHAR(200) NOT NULL , 
    `usaras` VARCHAR(20) NOT NULL , 
    `IDUser` INT(10) NOT NULL , 
    PRIMARY KEY (`ID`),
    FOREIGN KEY (`IDUser`) REFERENCES  usuario(ID)
    );

CREATE TABLE `agendapp`.`solicitudvehiculo` ( 
    `ID` INT(10) NOT NULL AUTO_INCREMENT , 
    `titulo` VARCHAR(100) NOT NULL , 
    `fechainicio` DATETIME NOT NULL ,  
    `fechafin` DATETIME NOT NULL , 
    `tiempoaprox` VARCHAR(20) NOT NULL , 
    `nombrePasajeros` VARCHAR(200) NOT NULL , 
    `destino` VARCHAR(200) NOT NULL , 
    `descripcion` VARCHAR(200) NOT NULL , 
    `tga` VARCHAR(20) NOT NULL , 
    `observaciones` VARCHAR(200) NOT NULL ,
    `IDUser` INT(10) NOT NULL , 
    PRIMARY KEY (`ID`),
    FOREIGN KEY (`IDUser`) REFERENCES  usuario(ID)
    );

CREATE TABLE `agendapp`.`evidenciavehiculo` ( 
    `ID` INT(10) NOT NULL AUTO_INCREMENT , 
    `kilometrajeInicial` LONGBLOB NOT NULL , 
    `kilometrajeFinal` LONGBLOB NOT NULL ,
     `IDUser` INT(10) NOT NULL ,   
    PRIMARY KEY (`ID`),
    FOREIGN KEY (`IDUser`) REFERENCES  usuario(ID)
    );*/

/*CREATE TABLE `agendapp`.`eventoSalaJuntas` ( 
    `ID` INT(10) NOT NULL AUTO_INCREMENT , 
    `titulo` VARCHAR(300) NULL , 
    `descripcion` TEXT NULL , 
    `incio` DATETIME NULL , 
    `fin` DATETIME NULL,
    `IDUser` INT(10) NOT NULL ,   
    PRIMARY KEY (`ID`),
    FOREIGN KEY (`IDUser`) REFERENCES  usuario(ID)
    );*/

/*CREATE TABLE `agendapp`.`admin` ( 
    `ID` INT(10) NOT NULL AUTO_INCREMENT , 
    `nombre` VARCHAR(100) NULL , 
    `apellidos` VARCHAR(100) NULL , 
    `correo` VARCHAR(100) NULL , 
    `password` VARCHAR(100) NULL,   
    PRIMARY KEY (`ID`)
    
    );*/

/*CREATE TABLE `permisos` (
  `id` int(11) NOT NULL,
  `rol` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `permisos` (`id`, `rol`) VALUES
(1, 'administrador'),
(2, 'usuario'),
(3, 'lector');*/


/*CREATE TABLE `agendapp`.`usuario`( 
    `ID` INT NOT NULL AUTO_INCREMENT , 
    PRIMARY KEY (`ID`)
) ENGINE = InnoDB;*/




CREATE TABLE `permisos` (
  `id` int(11) NOT NULL,
  `rol` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `permisos`
--

INSERT INTO `permisos` (`id`, `rol`) VALUES
(1, 'administrador'),
(2, 'usuario'),
(3, 'lector');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` VARCHAR(100) NOT NULL , 
  `apellidos` VARCHAR(100) NOT NULL , 
  `departamento` VARCHAR(100) NOT NULL , 
  `cargo` VARCHAR(100) NOT NULL , 
  `correo` VARCHAR(100) NOT NULL , 
  `telefono` VARCHAR(100) NOT NULL , 
  `username` VARCHAR(100) NOT NULL , 
  `password` INT(10) NOT NULL,
  `rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `user`
--

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permisos` (`rol`);

--
-- 

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `user`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `permisos` FOREIGN KEY (`rol`) REFERENCES `permisos` (`id`);
COMMIT;