<?php
$server = "localhost";
    $usuario = "root";
    $clave = "1234";
    $base = "agendapp";
    $con = mysqli_connect($server, $usuario, $clave) or die("No se ha podido conectar al Servidor");

    $nombre = $_POST["nombre"];
    $apellidos = $_POST["apellidos"];
    $departamento = $_POST["departamento"];
    $cargo = $_POST["cargo"];
    $correo = $_POST["correo"];
    $telefono = $_POST["telefono"];
    $rol = $_POST["rol"];
    $username = $_POST["username"];
    $password = md5($_POST["pass"]);
    
    $insert = "INSERT INTO usuario(id, nombre, apellidos, departamento, cargo, correo, telefono, username, password, rol) 
    VALUES ('$nombre','$apellidos','$departamento','$cargo','$correo','$telefono','$rol','$username','$password')";

    $conn = mysqli_query($con,$insert);

    if ($conn) {
        echo "sucess";
    } else {
        echo "error".mysqli_error();
    }

?>