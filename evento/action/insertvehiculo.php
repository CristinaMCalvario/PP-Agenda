<?php
 date_default_timezone_set('America/Mexico_City');


    require_once("conexion.php");

   
    if (isset($_POST["titulo"]) && isset($_POST["fechaInicio"]) && isset($_POST["fechaFin"]) && isset($_POST["tiempoaprox"]) && isset($_POST["pasajeros"]) && isset($_POST["destino"]) && isset($_POST["descripcion"]) && isset($_POST['tga']) && ($_POST['observaciones'])) {

        $titulo = $_POST["titulo"];
        $inicio = $_POST["fechaInicio"];
        $termino = $_POST["fechaFin"];
        $tiempoaprox = $_POST["tiempoaprox"];
        $pasajeros = $_POST["pasajeros"];
        $destino = $_POST["destino"];
        $descripcion = $_POST["descripcion"];
        $tga = $_POST["tga"];
        $observacion = $_POST["observaciones"];
    
        /*$id_usuario = $_SESSION['idUsuario'];*/

        $inicio= date('Y/m/d H:i:s', strtotime($inicio));
		$termino= date('Y/m/d H:i:s', strtotime($termino));

        $insert = "INSERT INTO solicitudvehiculo(titulo, fechainicio, fechafin, tiempoaprox, nombrePasajeros,destino, descripcion, tga,observaciones) 
        VALUES ('$titulo','$inicio','$termino','$tiempoaprox','$pasajeros','$destino','$descripcion','$tga','$observacion')";

        if (mysqli_query($conn, $insert)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        mysqli_close($conn);

    }

    
    

    
    
?>