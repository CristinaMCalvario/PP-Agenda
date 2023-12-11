function validaForm() {
         if($("#titulo").val() == ""){
                    //alert("El campo Nombre no puede estar vacío.");
                    Swal.fire({
                        icon: "error",
                        title: "Oops...",
                        text: "El campo Titulo de la Junta no puede estar vacío.",
                    });
                    $("#titulo").focus();
                    return false;
                }
                if($("#fechaInicio").val() == ""){
                    //alert("El campo Apellidos no puede estar vacío.");
                    Swal.fire({
                        icon: "error",
                        title: "Oops...",
                        text: "El campo Fecha de Inicio no puede estar vacío.",
                    });
                    $("#fechaInicio").focus();
                    return false;
                }
                if($("#fechaFin").val() == ""){
                    //alert("El campo Dirección no puede estar vacío.");
                    Swal.fire({
                        icon: "error",
                        title: "Oops...",
                        text: "El campo Fecha de Fin no puede estar vacío.",
                    });
                    $("#fechaFin").focus();
                    return false;
                }
                if($("#descripcion").val() == ""){
                    //alert("El campo Dirección no puede estar vacío.");
                    Swal.fire({
                        icon: "error",
                        title: "Oops...",
                        text: "El campo Descripción no puede estar vacío.",
                    });
                    $("#descripcion").focus();
                    return false;
                }

                return true;
      }

      $(document).ready( function() {
                $("#enviarSala").click( function() {
                    if(validaForm()){                            
                        $.ajax({
                            url: '../includes/insertsalajuntas.php',
                            type: 'POST',
                            data: $('#agregareventos').serialize(),
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
    function cerrarModal() {
        $('#myModal #salir').modal('hide')
    }
      