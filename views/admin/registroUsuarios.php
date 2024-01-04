<?php
    if(!isset($_SESSION)){
    	session_start();
	}

	$id_user = $_SESSION['idUsuario'];

	if(!isset ($_SESSION['idUsuario'])) {
    	header('Location: loginAdmin.php');
	}
include('../../includes/conexion.php');

  $SqlEventos   = ("SELECT * FROM usuario");
  $resulEventos = mysqli_query($conn, $SqlEventos);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

     <!--CSS CDN--->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <script src="https://kit.fontawesome.com/b21fa3e45a.js" crossorigin="anonymous"></script>

    <!--CSS OWN-->
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-minimal/minimal.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />

    <!--JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <title>CGL | Agenda</title>

    <style>
        .btn{
        background-color: #e62b29;
        color: white;
        margin: 1px;
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
                <a href=solicitudSalaJuntas.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fa-solid fa-users-between-lines"></i></i> Solicitudes Sala de Juntas</a>
                <a href="solicitudVehiculo.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fa-solid fa-car"></i>Solicitudes Vehículo Utilitario</a>
                <a href="aceptarEvidenciaVehiculo.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fa-solid fa-images"></i>Evidencia de Vehículo</a>
        
                <a href="../../includes/_sesion/cerrarSesionAdmin.php" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i class="fas fa-power-off me-2"></i>Cerrar sesión</a>
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
                                <i class="fas fa-user me-2"></i><?php echo $_SESSION['username']; ?>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="../../includes/_sesion/cerrarSesionAdmin.php">Cerrar Sesión</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="container-fluid px-4">
                <div class="row g-3 my-2">
                    <div class="col-md-3">
                        <a href="FormRegistroUsuarios.php" class="elementos">
                            <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                                <div>
                                    <!--<h3 class="fs-2"></h3>-->
                                    <p class="fs-5"><b>Form Registro Usuarios</b></p>
                                </div>
                                <i class="fa-solid fa-user fs-1" style="color: #555259;"></i>
                            </div>
                        </a>
                    </div>    
                </div>

                <div class="row my-5">
                    <h3 class="fs-4 mb-3">Usuarios</h3>
                    <div class="table-responsive-sm">

                        <table id="myTable" class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellidos</th>
                                <th scope="col">Departamento</th>
                                <th scope="col">Cargo</th>
                                <th scope="col">Correo</th>
                                <th scope="col">Teléfono</th>
                                <th scope="col">Username</th>
                                <th scope="col">Acción</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                                while($row = mysqli_fetch_assoc($resulEventos)){  
                            ?>
                            <tr>
                                <td scope="row"><?php echo $row['ID']; ?></td>
                                <td scope="row"><?php echo $row['nombre']; ?></td>
                                <td scope="row"><?php echo $row['apellidos']; ?></td>
                                <td scope="row"><?php echo $row['departamento']; ?></td>
                                <td scope="row"><?php echo $row['cargo']; ?></td>
                                <td scope="row"><?php echo $row['correo']; ?></td>
                                <td scope="row"><?php echo $row['telefono']; ?></td>
                                <td scope="row"><?php echo $row['username']; ?></td>
                                <td>
                                    <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#ModalEdit"><i class="fa-solid fa-pen-to-square"></i>Editar</a>
                                    <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#">Eliminar</a>
                                </td>
                            </tr>  
                            <?php } ?>
                            
                            </tbody>
                        </table>                        
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2/dist/sweetalert2.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>

    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>
</body>

</html>