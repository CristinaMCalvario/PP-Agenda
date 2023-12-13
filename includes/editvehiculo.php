<?php
 date_default_timezone_set('America/Mexico_City');


    require_once("conexion.php");

    if(isset($_POST["id_evento"]) && isset($_POST["delete"])){
        $id_evento = $_POST["id_evento"];
        $delete = ("DELETE FROM eventvehiculo WHERE ID = '$id_evento'");
        if (mysqli_query($conn, $delete)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        mysqli_close($conn);
        header("Location: ../views/calendarAuto.php");
    } else if (isset($_POST["id_evento"]) && isset($_POST["titulo"]) && isset($_POST["fechaInicio"]) && isset($_POST["fechaFin"]) && isset($_POST["tiempoaprox"]) && isset($_POST["pasajeros"]) && isset($_POST["destino"]) && isset($_POST["descripcion"]) && isset($_POST['tga']) && ($_POST['observaciones'])) {

        $id_evento = $_POST["id_evento"];
        $titulo = $_POST['titulo'];
        /*$inicio = $_POST['fechaInicio'];
        $termino = $_POST['fechaFin'];*/

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

        $sql = ("UPDATE eventvehiculo SET  
        titulo = '$titulo', 
        fechainicio = '$inicio', 
        fechafin = '$termino', 
        tiempoaprox = '$tiempoaprox', 
        nombrePasajeros = '$pasajeros', 
        destino = '$destino', 
        descripcion = '$descripcion', 
        tga = '$tga',
        observaciones = '$observacion' 
        WHERE ID = '$id_evento' ");

        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        mysqli_close($conn);

    header("Location: ../views/calendarAuto.php");
    }
   
?>