<?php
if(!isset($_SESSION)){
		session_start();
	}
 date_default_timezone_set('America/Mexico_City');


    require_once("conexion.php");

    if (isset($_POST["imginicial"]) && isset($_POST["imgfinal"]) ) {

        $imginicial = $_POST["imginicial"];
        $imgfinal = $_POST["imgfinal"];
        $id_usuario = $_SESSION['idUsuario'];
    
        /*$id_usuario = $_SESSION['idUsuario'];*/

        $insert = "INSERT INTO evidenciavehiculo(kilometrajeInicial, kilometrajeFinal,IDUser) 
        VALUES ('$imginicial','$imgfinal','$id_usuario')";

        if (mysqli_query($conn, $insert)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        mysqli_close($conn);

    }
    
    header("Location: ../views/calendarAuto.php");
?>