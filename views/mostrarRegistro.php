<?php
$nombre = $_POST['ncampo'];
$apellidos = $_POST['acampo'];
$departamento = $_POST['dcampo'];
$cargo = $_POST['carcampo'];
$correo = $_POST['ccampo'];
$telefono = $_POST['tcampo'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CGL | Registrado</title>
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
                    <img src="/img/logoGL2.png" width="70" alt="Logo de la página web" height="40" >
                    | Agenda
                </a>
                <ul class="navbar-nav d-flex justify-content-center align-items-center">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Iniciar Sesión</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link boton" href="#">Registro</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
    </header>
    
    <main>
        <section class="main-banner section-container">
            <div class="container">
                <h1>Registro Existoso</h1>
                <i class="bi bi-emoji-smile-fill"></i>
                <p>Se te enviará tu usuario y contraseña por correo y/o WhatsApp. <br>

                
            </p>
            <label for=""> <b>Correo:</b></label><?php $correo ?>
            <label for=""><b>Teléfono</b></label><?php $telefono ?>
            </div>
        </section>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>

