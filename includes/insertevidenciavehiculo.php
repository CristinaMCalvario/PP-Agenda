<?php
 date_default_timezone_set('America/Mexico_City');


    require_once("conexion.php");

    if (isset($_POST["imginicial"]) && isset($_POST["imgfinal"]) ) {

        $imginicial = $_POST["imginicial"];
        $imgfinal = $_POST["imgfinal"];
    
        /*$id_usuario = $_SESSION['idUsuario'];*/

        $insert = "INSERT INTO evidenciavehiculo(kilometrajeInicial, kilometrajeFinal) 
        VALUES ('$imginicial','$imgfinal')";

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
   


    
    

    
    header("Location: ../views/calendarAuto.php");
?>