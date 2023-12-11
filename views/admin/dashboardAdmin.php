<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <script src="https://kit.fontawesome.com/b21fa3e45a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/estilos.css" />
    <title>CGL | Agenda</title>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><img src="../../img/logoGL2.png" width="100"></div>
            <div class="list-group list-group-flush my-3">
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text active"><i class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
                <a href="registroUsuarios.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fa-regular fa-user"></i>Registro Usuarios</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fa-solid fa-users-between-lines"></i> Solicitudes Sala de Juntas</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fa-solid fa-car"></i>Solicitudes Vehículo Utilitario</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fa-solid fa-images"></i>Evidencia de Vehículo</a>
        
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
                        <a href="#" class="elementos">
                             <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <!--<h3 class="fs-2"></h3>-->
                                <p class="fs-5"><b>Registro Usuarios</b></p>
                            </div>
                            <i class="fa-solid fa-user fs-1" style="color: #555259;"></i>
                        </div>
                        </a>
                       
                    </div>

                    <div class="col-md-3">
                        <a href="#" class="elementos">
                            <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <!---<h3 class="fs-2"></h3>-->
                                <p class="fs-5"><b>Solicitudes Sala de Juntas</b></p>
                            </div>
                            <i class="fa-solid fa-users-between-lines fs-1" style="color: #555259;"></i></i>
                            </div>
                        </a>
                        
                    </div>

                    <div class="col-md-3">
                        <a href="#" class="elementos"> 
                            <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <!--<h3 class="fs-2">3899</h3>-->
                                <p class="fs-5"><b>Solicitudes Vehículo Utilitario</b></p>
                            </div>
                            <i class="fa-solid fa-car fs-1" style="color: #555259;"></i>
                        </div>
                        </a>
                    </div>
                    
                    <div class="col-md-3">
                        <a href="#" class="elementos" >
                            <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                               <!-- <h3 class="fs-2">%25</h3>-->
                                <p class="fs-5"><b>Evidencia de Vehículo</b></p>
                            </div>
                            <i class="fa-solid fa-images fs-1" style="color: #555259;"></i>
                        </div>
                        </a>
                        
                    </div>
                </div>

                <div class="row my-5">
                    <h3 class="fs-4 mb-3">Usuarios</h3>
                    <div class="col">
                        
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


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>
</body>

</html>