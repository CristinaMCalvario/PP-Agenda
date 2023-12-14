<?php

  date_default_timezone_set('America/Mexico_City');
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

    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-minimal/minimal.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <script src="https://kit.fontawesome.com/b21fa3e45a.js" crossorigin="anonymous"></script>

    <!--CSS OWN-->
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="../css/cdn.datatables.net_v_dt_dt-1.13.6_datatables.min.css">
    <link rel="stylesheet" href="../css/bootstrap-clockpicker.css">
    <link rel="stylesheet" href="../fullcalendar/main.css">

    <!--JS -->
    <script src="../js/code.jquery.com_jquery-3.7.1.min.js"></script>
    <script src="../js/unpkg.com_@popperjs_core@2.11.8_dist_umd_popper.min.js"></script>
    <!--<script src="../js/bootstrap.min.js"></script>-->
    <script src="../js/cdn.datatables.net_v_dt_dt-1.13.6_datatables.min.js"></script>
    <script src="../js/bootstrap-clockpicker.js"></script>
    <script src="../js/momentjs.com_downloads_moment-with-locales.js"></script>
    <script src="../fullcalendar/main.js"></script>
    <script src="../locales/es.js"></script>

    <!--STYLOS-->
    <style>
      .btns{
        display: flex;
        justify-content: center;
        margin: 20px;
      }
      .btns button{
        background-color: #e62b29;
        color: white;
        margin: 15px;
      }
      #calendar {
        max-width: 900px;
        margin: 0 auto;
      }
    </style>

</head>
<body>

<?php
include('../includes/conexion.php');

  $SqlEventos   = ("SELECT * FROM eventos");
  $resulEventos = mysqli_query($conn, $SqlEventos);

?>

    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class=""  id="sidebar-wrapper">
            <div class="sidebar-nav text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><img src="../img/logoGL2.png" width="100"></div>
            <div class="list-group list-group-flush my-3">
                <a href="dashboardUser.html" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold active"><i class="fa-solid fa-users-between-lines"></i> Sala de Juntas</a>
                <a href="calendarAuto.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fa-solid fa-car"></i> Vehículo Utilitario</a>
                <a href="evidenciaVehiculo.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fa-solid fa-images"></i> Evidencia de Vehículo</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fa-solid fa-bell" style="color: #555259;"></i> Notificaciones</a>
              
                <a href="#" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i class="fas fa-power-off me-2"></i>Cerrar Sesión</a>
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
              <h1 class="text-center">Agenda Sala de Juntas</h1>
              <div id="calendar"></div>
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
    <script
            src="https://code.jquery.com/jquery-1.12.4.js"
            integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU="
            crossorigin="anonymous">
        </script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2/dist/sweetalert2.min.js"></script>
    <script src="../js/salajuntas.js"></script>

    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>
    <?php include ('../evento/modal/modalAgregarSala.php'); ?>
    <?php include ('../evento/modal/modalEditSala.php'); ?>
    
    <script>
        
      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
          customButtons: {
            myButton: {
              text: 'Solicitar Sala de Juntas',
              click: function() {
                
                $("#formEventos").modal('show');
                
              }
            }
          },
          headerToolbar: {
                left: 'prev,next today myButton',
                center: "title",
                right: "dayGridMonth,timeGridWeek,timeGridDay"
            },
            
          locale: 'es',

            defaultDate:'<?php echo date('Y-m-d'); ?>',
            defaultView: "month",
            navLinks: true, 
            editable: true,
            eventLimit: true, 
            selectable: true,
            selectHelper: false,

            //nuevo evento
            select: function(start,end){
              $('#formEventos #fechaInicio').val(moment(start).format('DD-MM-YYYY HH:mm:ss'));
              $('#formEventos #fechaFin').val(moment(end).format('DD-MM-YYYY HH:mm:ss'));
              $('#formEventos').modal('show');
              
            },
            eventClick: function(info){
              $('#ModalEdit #titulo').val(info.event.title);
              $('#ModalEdit #fechaInicio').val(moment(info.event.start).format('DD-MM-YYYY HH:mm:ss'));
              $('#ModalEdit #fechaFin').val(moment(info.event.end).format('DD-MM-YYYY HH:mm:ss'));
              $('#ModalEdit #sera').val(info.event.extendedProps.juntasera);
              $('#ModalEdit #internos').val(info.event.extendedProps.participantesInternos);
              $('#ModalEdit #externos').val(info.event.extendedProps.participantesExternos);
              $('#ModalEdit #descripcion').val(info.event.extendedProps.description);
              $('#ModalEdit #usaras').val(info.event.extendedProps.usaras);
              $('#ModalEdit #id_evento').val(info.event.extendedProps._id);

              $("#ModalEdit").modal('show');

            },
            eventDrop: function(info) { 
              edit(info);
            },
            eventResize: function(info) { 
              edit(info);
            },
           
              events: [
                <?php
                  while($dataEvento = mysqli_fetch_array($resulEventos)){ ?>
                    { 
                      title: '<?php echo $dataEvento['titulo']; ?>',
                      start: '<?php echo $dataEvento['fechainicio']; ?>',
                      end:   '<?php echo $dataEvento['fechafin']; ?>',
                      extendedProps: {
                        _id: '<?php echo $dataEvento['ID']; ?>',
                        juntasera: '<?php echo $dataEvento['juntasera']; ?>',
                        participantesInternos: '<?php echo $dataEvento['participantesInternos']; ?>',
                        participantesExternos: '<?php echo $dataEvento['participantesExternos']; ?>',
                        description: '<?php echo $dataEvento['descripcion']; ?>',
                        usaras : '<?php echo $dataEvento['usaras']; ?>'
                        }
                    },
                    <?php } ?>
            ]
            
            
            
        });
        function edit(info){
         
            start = info.event.start.toISOString();
            if(info.event.end ){
						  end = info.event.end.toISOString();
            }else{
              end = start;
            }
					
					id_evento =  info.event.extendedProps._id;
					
					Event = [];
					Event[0] = id_evento;
					Event[1] = start;
					Event[2] = end;
					
					$.ajax({
					url: '../includes/eventoEditData.php',
					type: "POST",
					data: {Event:Event},
					success: function(rep) {
							Swal.fire({
                title: "OK",
                  text: "Registro exitoso",
                  icon: "success"
              });
						}
					});
				}
        

        calendar.render();
      });

      

    </script>
    
</body>
</html>