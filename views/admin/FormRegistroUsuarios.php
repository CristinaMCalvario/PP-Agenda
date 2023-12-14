<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-minimal/minimal.css" rel="stylesheet">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script src="https://kit.fontawesome.com/b21fa3e45a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/estilos.css" />
    <title>CGL | Agenda</title>

    <style>
        .form{
            with: 100%;
            margin: 5rem 3rem 5rem 3rem;
            padding: 6rem 5rem 6rem 5rem;
            font-size: 15px;
        
            background-color: #F5F7F8;
        }
        .seccion-oscura {
            color: black;    
        }
        label {
            font-weight: bold;
        }
        legend {
            font-weight: bold;
        }
        .btn {
            background-color: #e62b29;
            color: white;
            font-weight: bold;
        }

    </style>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><img src="../../img/logoGL2.png" width="100"></div>
            <div class="list-group list-group-flush my-3">
                <a href="dashboardAdmin.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold active"><i class="fa-regular fa-user"></i>Registro Usuarios</a>
                <a href="solicitudSalaJuntas.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fa-solid fa-users-between-lines"></i></i> Solicitudes Sala de Juntas</a>
                <a href="solicitudVehiculo.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fa-solid fa-car"></i>Solicitudes Vehículo Utilitario</a>
                <a href="aceptarEvidenciaVehiculo.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fa-solid fa-images"></i>Evidencia de Vehículo</a>
        
                <a href="#" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                        class="fas fa-power-off me-2"></i>Cerrar sesión</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Dashboard ADMIN</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2"></i>John Doe
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><a class="dropdown-item" href="#">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="container-fluid px-4">
                <div class="row g-3 my-2">
                    <div class="col-md-3">
                        <a href="registroUsuarios.php" class="elementos">
                            <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <!---<h3 class="fs-2"></h3>-->
                                <p class="fs-5"><b>Usuarios</b></p>
                            </div>
                            <i class="fa-solid fa-users fs-1" style="color: #555259;"></i>
                            
                            </div>
                        </a>
                        
                    </div>
                </div>

                <div class="row my-5">
                    <!--<h3 class="fs-4 mb-3">Usuarios</h3>-->
                    <div class="col form">
                        <form method="POST" id="formRegistro" class="seccion-oscura">
                    <fieldset>
                        <legend class="text-center">Registro de Usuario</legend>
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre (s): </label>
                            <input type="text" name="nombre" id="nombre" class="form-control" required>
                            <div class="help-block with-errors"></div>
                        </div>
                            <div class="mb-3">
                            <label for="apellidos" class="form-label">Apellidos:</label>
                            <input type="text" name="apellidos" id="apellidos" class="form-control" required>
                            </div>
                            <div class="help-block with-errors"></div>
                        <div class="mb-3">
                            <label for="departamento" class="form-label">Departamento:</label>
                            <input type="text" name="departamento" id="departamento" class="form-control" required>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="mb-3">
                            <label for="cargo" class="form-label">Cargo:</label>
                            <input type="text" name="cargo" id="cargo" class="form-control" required>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="mb-3">
                            <label for="correo" class="form-label">Correo electrónico:</label>
                            <input type="email" name="correo" id="correo" class="form-control" required>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="mb-3">
                            <label for="telefono" class="form-label">Teléfono:</label>
                            <input type="tel" name="telefono" id="telefono" class="form-control" required>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="mb-3">
                            <label for="rol" class="form-label">Rol:</label>
                            <blockquote>
                                1-Administrador, 2-Usuario, 3-Lector
                            </blockquote>
                            <select class="form-select" name="rol" id="rol" aria-label="Default select example" required>
                                <option value="1">1</option>
                                <option value="2" selected>2</option>
                                <option value="3">3</option>
                            </select>
                            <div class="help-block with-errors"></div>
                        </div>

                        <h4 class="mb-3">Datos para Login</h4>

                        <div class="mb-3">
                            <label for="username" class="form-label">Username: (correo electrónico)</label>
                            <input type="email" name="username" id="username" class="form-control" required>
                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="mb-3">
                            <label for="pass" class="form-label">Contraseña:</label>
                            <input type="password" name="pass" id="pass" class="form-control" required value="">
                            <label for="pass" class="form-label">Contraseña a ingresar:</label>
                            <?php 
                                    $pass =  generatePassword();
                                    echo $pass;
                                ?>
                            <!--<p name="pass" id ="pass"> 
                                

                            </p>-->
                        </div>

                        <div class="mb-3 text-center">
                            <input type="button" id="botonenviar" value="Registrar" class="btn btn-lg">
                            <!--<button class="btn btn-lg" id="enviar">Registrar</button>-->
                        </div>
                    </fieldset>
                </form>
                    </div>
                </div>

            </div>

        </div>

    </div>
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
    <!-- /#page-content-wrapper -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>

    
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script
            src="https://code.jquery.com/jquery-1.12.4.js"
            integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU="
            crossorigin="anonymous">
        </script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2/dist/sweetalert2.min.js"></script>    
    

    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>
    <script>
      function validaForm() {
         if($("#nombre").val() == ""){
                    //alert("El campo Nombre no puede estar vacío.");
                    Swal.fire({
                        icon: "error",
                        title: "Oops...",
                        text: "El campo Nombre no puede estar vacío.",
                    });
                    $("#nombre").focus();
                    return false;
                }
                if($("#apellidos").val() == ""){
                    //alert("El campo Apellidos no puede estar vacío.");
                    Swal.fire({
                        icon: "error",
                        title: "Oops...",
                        text: "El campo Apellidos no puede estar vacío.",
                    });
                    $("#apellidos").focus();
                    return false;
                }
                if($("#departamento").val() == ""){
                    //alert("El campo Dirección no puede estar vacío.");
                    Swal.fire({
                        icon: "error",
                        title: "Oops...",
                        text: "El campo Departamento no puede estar vacío.",
                    });
                    $("#departamento").focus();
                    return false;
                }
                if($("#cargo").val() == ""){
                    //alert("El campo Dirección no puede estar vacío.");
                    Swal.fire({
                        icon: "error",
                        title: "Oops...",
                        text: "El campo Cargo no puede estar vacío.",
                    });
                    $("#cargo").focus();
                    return false;
                }
                if($("#correo").val() == ""){
                    //alert("El campo Dirección no puede estar vacío.");
                    Swal.fire({
                        icon: "error",
                        title: "Oops...",
                        text: "El campo Correo no puede estar vacío.",
                    });
                    $("#correo").focus();
                    return false;
                }
                if($("#telefono").val() == ""){
                    //alert("El campo Dirección no puede estar vacío.");
                    Swal.fire({
                        icon: "error",
                        title: "Oops...",
                        text: "El campo Teléfono no puede estar vacío.",
                    });
                    $("#telefono").focus();
                    return false;
                }
                if($("#rol").is(":selected")){
                    //alert("El campo Dirección no puede estar vacío.");
                    Swal.fire({
                        icon: "error",
                        title: "Oops...",
                        text: "El campo Rol no puede estar vacío.",
                    });
                    $("#rol").focus();
                    return false;
                }
                if($("#username").val() == ""){
                    //alert("El campo Dirección no puede estar vacío.");
                    Swal.fire({
                        icon: "error",
                        title: "Oops...",
                        text: "El campo Username no puede estar vacío.",
                    });
                    $("#username").focus();
                    return false;
                }

                return true;
      }
    </script>
    <?php
        function generatePassword()
        {
            $length = 8;
            $key = "";
            $pattern = "1234567890abcdefghijklmnopqrstuvwxyz";
            $max = strlen($pattern)-1;
            for($i = 0; $i < $length; $i++){
                $key .= substr($pattern, mt_rand(0,$max), 1);
            }
            return $key;
        }
    ?>

    <script>
        $(document).ready( function() {
                $("#botonenviar").click( function() {
                    if(validaForm()){                            
                        $.ajax({
                            type: 'POST',
                            url: 'nuevoUsuario.php',
                            data: $('#formRegistro').serialize(),
                            success: function(respuesta) {
                                if(respuesta=='ok'){
                                //alert('enviado');
                                    Swal.fire({
                                        icon: "error",
                                        title: "Oops...",
                                        text: "Registro NO exitoso"
                                    });
                                }
                                else {
                                    Swal.fire({
                                        title: "OK",
                                        text: "Registro exitoso",
                                        icon: "success"
                                    });
                                    
                                }
                            }
                        });
                    }
                });    
            });
    </script>

</body>

</html>