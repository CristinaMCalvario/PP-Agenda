<?php
 date_default_timezone_set('America/Mexico_City');


    require_once("conexion.php");

    if (isset($_POST["titulo"]) && isset($_POST["fechaInicio"]) && isset($_POST["fechaFin"]) && isset($_POST["sera"]) && isset($_POST["internos"]) && isset($_POST["externos"]) && isset($_POST["descripcion"]) && isset($_POST['usaras'])) {

        $titulo = $_POST["titulo"];
        $inicio = $_POST["fechaInicio"];
        $termino = $_POST["fechaFin"];
        $sera = $_POST["sera"];
        $internos = $_POST["internos"];
        $externos = $_POST["externos"];
        $descripcion = $_POST["descripcion"];
        $usaras2 = implode(",",$_POST["usaras"]);
        

        echo $titulo;
        /*$id_usuario = $_SESSION['idUsuario'];*/

        $inicio= date('Y/m/d H:i:s', strtotime($inicio));
		$termino= date('Y/m/d H:i:s', strtotime($termino));

        $insert = "INSERT INTO eventos(titulo, fechainicio, fechafin, juntasera, participantesInternos, participantesExternos, descripcion, usaras) 
        VALUES ('$titulo','$inicio','$termino','$sera','$internos','$externos','$descripcion','$usaras2')";

        echo $insert;

        if (mysqli_query($conn, $insert)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        mysqli_close($conn);

       /* $conn = mysqli_query($con,$insert);

        if ($conn) {
            echo "sucess";
        } else {
            echo "error".mysqli_error();
        }*/

    }
   


    
    

    
    
?>