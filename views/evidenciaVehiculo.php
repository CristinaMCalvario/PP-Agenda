<?php
  session_start();
  $id_user = $_SESSION['idUsuario'];

	if(!isset ($_SESSION['idUsuario'])) {
    	header('Location: login.php');
	}
  
include('../includes/conexion.php');

  $SqlEventos   = ("SELECT * FROM eventvehiculo");//solicitudvehiculo
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
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
    <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-minimal/minimal.css" rel="stylesheet">
  
    <script src="https://kit.fontawesome.com/b21fa3e45a.js" crossorigin="anonymous"></script>

    <!--CSS OWN-->
    <link rel="stylesheet" href="styles.css">
    <!--<link rel="stylesheet" href="../css/bootstrap.min.css">-->
    <link rel="stylesheet" href="../css/cdn.datatables.net_v_dt_dt-1.13.6_datatables.min.css">
   

    <!--JS -->
    <script src="../js/code.jquery.com_jquery-3.7.1.min.js"></script>
    <script src="../js/unpkg.com_@popperjs_core@2.11.8_dist_umd_popper.min.js"></script>
    <!--<script src="../js/bootstrap.min.js"></script>-->
    <script src="../js/cdn.datatables.net_v_dt_dt-1.13.6_datatables.min.js"></script>
    
    

    <!--STYLOS-->
    <style>
      .btn{
        display: flex;
        justify-content: center;
        margin: 20px;
      }
      .boton{
        background-color: #e62b29;
        color: white;
        margin: 15px;
      }
      #calendar {
        max-width: 900px;
        margin: 0 auto;
      }
      #agregar{
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
            <div class="sidebar-nav text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><img src="../img/logoGL2.png" width="100"></div>
            <div class="list-group list-group-flush my-3">
                <a href="dashboardUser.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
                <a href="calendarSala.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fa-solid fa-users-between-lines"></i> Sala de Juntas</a>
                <a href="calendarAuto.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fa-solid fa-car"></i> Vehículo Utilitario</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold active"><i class="fa-solid fa-images"></i> Evidencia de Vehículo</a>
                <a href="evidenciaVehiculo.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fa-solid fa-bell" style="color: #555259;"></i> Notificaciones</a>
                <a href="../includes/_sesion/cerrarSesionUser.php" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                        class="fas fa-power-off me-2"></i>Cerrar Sesión</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->
                                                    
      <!-- Page Content -->
        <div id="page-content-wrapper">

            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Agenda</h2>
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
                                <li><a class="dropdown-item" href="#">Notificaciones</a></li>
                                <li><a class="dropdown-item" href="../includes/_sesion/cerrarSesionUser.php">Cerrar Sesión</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
             <div class="container-fluid">
              <h1 class="text-center">Evidencia de Vehículo Utilitario</h1>
              <div class="table-responsive-sm">

                <table id="myTable" class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">Título</th>
                      <th scope="col">Fecha inicio</th>
                      <th scope="col">Fecha Fin</th>
                      <th scope="col">Tiempo aproximado</th>
                      <th scope="col">Nombre de pasajeros</th>
                      <th scope="col">Destino</th>
                      <th scope="col">Descripción</th>
                      <th scope="col">TGA</th>
                      <th scope="col">Observaciones</th>
                      <th scope="col">Subir evidencia</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                    while($row = mysqli_fetch_assoc($resulEventos)){  
                  ?>
                      <tr>
                        <td scope="row"><?php echo $row['titulo']; ?></td>
                        <td scope="row"><?php echo $row['fechainicio']; ?></td>
                        <td scope="row"><?php echo $row['fechafin']; ?></td>
                        <td scope="row"><?php echo $row['tiempoaprox']; ?></td>
                        <td scope="row"><?php echo $row['nombrePasajeros']; ?></td>
                        <td scope="row"><?php echo $row['destino']; ?></td>
                        <td scope="row"><?php echo $row['descripcion']; ?></td>
                        <td scope="row"><?php echo $row['tga']; ?></td>
                        <td scope="row"><?php echo $row['observaciones']; ?></td>
                        <td>
                          <a href="#" class="btn boton" data-bs-toggle="modal" data-bs-target="#formevidenciaVehiculo"><i class="fa-solid fa-file-circle-plus"></i>Agregar</a>
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
    <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></>-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2/dist/sweetalert2.min.js"></script>
   
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>
     <?php include ('../evento/modal/modalEvidenciaAuto.php'); ?>
     <?php include ('../evento/modal/modalNuevoEvidenciaAuto.php'); ?>
    <script>
      /*let form = document.getElementById("agregar");
      form.onclick = agregarEvidencia;
        function agregarEvidencia() {
          $("#formAuto").modal('show');

        }*/
      $(document).ready( function () {
        $('#myTable').DataTable();
        } );
     
      let nuevoModal = document.getElementById('formNuevoEvidenciaVehiculo');
      nuevoModal.addEventListener('hide.bs.modal', event => {
         nuevoModal.querySelector('.modal-body #imginicial');
         nuevoModal.querySelector('.modal-body #imgfinal');
      })


    </script>
</body>
</html>