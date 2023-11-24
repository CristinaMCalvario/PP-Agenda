
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
    );*/
/*
CREATE TABLE `agendapp`.`evidenciavehiculo` ( 
    `ID` INT(10) NOT NULL AUTO_INCREMENT , 
    `kilometrajeInicial` LONGBLOB NOT NULL , 
    `kilometrajeFinal` LONGBLOB NOT NULL ,
     `IDUser` INT(10) NOT NULL ,   
    PRIMARY KEY (`ID`),
    FOREIGN KEY (`IDUser`) REFERENCES  usuario(ID)
    );
*/
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

