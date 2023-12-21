<?php
    if(!isset($_SESSION)){
        session_start();
    }
    include ('../conexion.php');
    
    if (isset($_POST) &&(!empty($_POST))){
        $usuario = $_POST['usuario'];
        $pass = md5($_POST['password']);
        $sql = "SELECT *
                FROM usuario
                WHERE correo = '$usuario' AND password ='$pass'";
        
        $resultado=mysqli_query($conn, $sql);
        // while($row = mysqli_fetch_assoc($resulEventos)
        $filas=mysqli_fetch_array($resultado);
        
        if ($filas['rol'] == 2) {
           
            header('Location: ../../views/dashboardUser.php');

        }else if($filas['rol'] == 1){
            
                    
            header('Location: ../../views/admin/loginAdmin.php');
        }
        else{

            header('Location: ../../views/index.html');
            session_destroy();

        }
    }
?>