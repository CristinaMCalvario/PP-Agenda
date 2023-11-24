<?php
    $server = "localhost";
    $usuario = "root";
    $clave = "1234";
    $base = "agendapp";

    $con = mysqli_connect($server, $usuario, $clave) or die("No se ha podido conectar al Servidor");
    $db = mysqli_select_db($con, $base) or die("Upps! Error en conectar a la Base de Datos");

?>