<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CGL | Agenda</title>
    <!--CSS CDN--->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <script src="https://kit.fontawesome.com/b21fa3e45a.js" crossorigin="anonymous"></script>

    <!--CSS OWN-->
    <link rel="stylesheet" href="estilosLogin.css">
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
        <section class="container">
            <div class="form-login seccion-oscura">
                <form method="post" action="../../includes/_sesion/loginAdmin.php">
                    <fieldset>
                        <legend class="text-center">Iniciar Sesión</legend>
                        <h3 class="text-center"><b>ADMIN</b></h3>
                        <div class="mb-3">
                            <label for="usuario" class="form-label">Usuario:</label>
                            <input type="text" name="username" id="username" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Contraseña:</label>
                            <input type="password" name="pass" id="pass" class="form-control">
                        </div>
                        <div class="mb-3 text-center">
                            <input type="submit" value="Iniciar Sesión" class="btn">
                        </div>
                    </fieldset>
                </form>
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