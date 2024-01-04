
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>CGL | Agenda</title>
     <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-minimal/minimal.css" rel="stylesheet">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../../views/styles.css">

     <script src="https://kit.fontawesome.com/b21fa3e45a.js" crossorigin="anonymous"></script>
    
</head>
<body>
     <header>
        <!-- Navigation bar -->
        <nav class="navbar navbar-expand-md navbar-light">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-toggler" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbar-toggler">
                <a class="navbar-brand" href="#">
                    <img src="../../img/logoGL2.png" width="70" alt="Logo de la página web" height="40" >
                    | Agenda
                </a>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <h1>Cargando <i class="fa-solid fa-spinner"></i></h1>
    </main>

     <footer class="footer d-flex flex-column align-items-center justify-content-center"> 
      <div class="iconos-redes-sociales d-flex flex-wrap align-items-center justify-content-center">
        <a href="#" target="_blank" rel="noopener noreferrer">
            <i class="fa-brands fa-square-facebook"></i>
        </a>
        <a href="#" target="_blank" rel="noopener noreferrer">
          <i class="fa-brands fa-linkedin"></i>
        </a>
        <a href="mailto:" target="_blank" rel="noopener noreferrer">
          <i class="fa-solid fa-envelope"></i>
        </a>
        <a href="#" target="_blank" rel="noopener noreferrer">
            <i class="fa-solid fa-globe"></i>
        </a>
      </div>
      <div class="derechos-de-autor">GRUPO LOGÍSTICO (2023) &#169;</div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2/dist/sweetalert2.min.js"></script>

    <?php
    include ('../conexion.php');
    session_start();

    if (isset($_POST) &&(!empty($_POST))){
        $usuario = $_POST['usuario'];
        $pass = md5($_POST['password']);

        $sql = "SELECT * FROM usuario WHERE correo = '$usuario' AND password ='$pass'";
        
        $resultado=mysqli_query($conn, $sql);
        $contar = mysqli_num_rows($resultado);

        if($contar>0){
           while($array = mysqli_fetch_array($resultado)){
            $id_usuario = $array['ID'];
            $username = $array['correo'];
            $_SESSION['idUsuario'] = $id_usuario;
            $_SESSION['username'] = $username;
            }
            header("location: ../../views/dashboardUser.php");
        } else{
            echo '<script src="../../js/loginsweetalert.js"></script>';   
        }

        if(!isset($usuario)){
        header("location: ../../login.php");
        } 
        
    }
    ?>
</body>
</html>