<?php
include('../../includes/conexion.php');

  $SqlEventos   = ("SELECT * FROM evidenciavehiculo");
  $resulEventos = mysqli_query($conn, $SqlEventos);

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CGL | Agenda</title>
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

    <!--STYLOS-->
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
        <div class=""  id="sidebar-wrapper">
            <div class="sidebar-nav text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><img src="../../img/logoGL2.png" width="100"></div>
            <div class="list-group list-group-flush my-3">
                <a href="dashboardAdmin.php" class="list-group-item list-group-item-action bg-transparent second-text fw-boold"><i class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
                <a href="registroUsuarios.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fa-regular fa-user"></i>Registro Usuarios</a>
                <a href="solicitudSalaJuntas.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fa-solid fa-users-between-lines"></i> Solicitudes Sala de Juntas</a>
                <a href="solicitudVehiculo.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fa-solid fa-car"></i>Solicitudes Vehículo Utilitario</a>
                <a href="aceptarEvidenciaVehiculo.php" class="list-group-item list-group-item-action bg-transparent second-text active"><i class="fa-solid fa-images"></i>Evidencia de Vehículo</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i class="fas fa-power-off me-2"></i>Cerrar Sesión</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->
                                                    
      <!-- Page Content -->
        <div id="page-content-wrapper">

            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Agenda ADMIN</h2>
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
                                <li><a class="dropdown-item" href="#">Notificaciones</a></li>
                                <li><a class="dropdown-item" href="#">Cerrar Sesión</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
             <div class="container-fluid">
              <div id="calendar"></div>
                <h3 class="fs-4 mb-3 text-center">Evidencia de Vehículo Utilitario</h3>
                <div class="table-responsive-sm">

                  <table id="myTable" class="table table-striped">
                    <thead>
                      <tr>
                       <th scope="col">Kilometraje Inicial</th>
                        <th scope="col">Kilometraje Final</th>
                        <th scope="col">ID usuario</th>
                        <th scope="col">Aceptar Evidencia</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        while($row = mysqli_fetch_assoc($resulEventos)){  
                      ?>
                      <tr>
                        <td scope="row"><img height="100px" src="data:image/jpg;base64,<?php echo base64_encode($row['kilometrajeInicial']); ?>"/></td>
                        <td scope="row"><img height="100px" src="data:image/jpg;base64,<?php echo base64_encode($row['kilometrajeFinal']); ?>"/></td>
                        <td scope="row"><?php echo $row['IDUser']; ?></td>
                        <td>
                          <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#">Aceptar</a>
                        </td>
                      </tr>  
                      <?php } ?>
                    </tbody>
                  </table>                        
                </div>
              </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->

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
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
    <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></>-->
    <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></>-->
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