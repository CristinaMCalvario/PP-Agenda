<?php
 date_default_timezone_set('America/Mexico_City');


    require_once("conexion.php");

    if(isset($_POST["id_evento"]) && isset($_POST["delete"])){
        $id_evento = $_POST["id_evento"];
        $delete = ("DELETE FROM eventos WHERE ID = '$id_evento'");
        if (mysqli_query($conn, $delete)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        mysqli_close($conn);
        header("Location: ../views/calendarSala.php");
    } else if (isset($_POST["id_evento"]) && isset($_POST["titulo"]) && isset($_POST["fechaInicio"]) && isset($_POST["fechaFin"]) && isset($_POST["sera"]) && isset($_POST["internos"]) && isset($_POST["externos"]) && isset($_POST["descripcion"]) && isset($_POST['usaras'])) {

        $id_evento = $_POST["id_evento"];
        $titulo = $_POST['titulo'];
        /*$inicio = $_POST['fechaInicio'];
        $termino = $_POST['fechaFin'];*/

        $f_inicio          = $_REQUEST['fechaInicio'];
        $fecha_inicio      = date('Y-m-d', strtotime($f_inicio)); 
        $f_fin             = $_REQUEST['fechaFin']; 
        $seteando_f_final  = date('Y-m-d', strtotime($f_fin));  
        $fecha_fin1        = strtotime($seteando_f_final."+ 1 days");
        $fecha_fin         = date('Y-m-d', ($fecha_fin1));  
        $sera              = var_dump( $_POST['sera']);
        $internos          = $_POST['internos'];
        $externos          = $_POST['externos'];
        $descripcion       = $_POST['descripcion'];
        $usaras2           = implode(",",$_POST['usaras']);
        
        /*$id_usuario = $_SESSION['idUsuario'];*/

        $inicio= date('Y/m/d H:i:s', strtotime($inicio));
		$termino= date('Y/m/d H:i:s', strtotime($termino));

        $sql = ("UPDATE eventos SET  titulo = '$titulo', fechainicio = '$fecha_inicio', fechafin = '$fecha_fin', juntasera = '$sera', participantesInternos = '$internos', participantesExternos = '$externos', descripcion = '$descripcion', usaras = '$usaras2' WHERE ID = '$id_evento' ");

        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        mysqli_close($conn);


    header("Location: ../views/calendarSala.php");
    }
    
?>