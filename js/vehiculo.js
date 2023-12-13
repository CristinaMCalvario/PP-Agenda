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
                if($("#tiempoaprox").val() == ""){
                    //alert("El campo Dirección no puede estar vacío.");
                    Swal.fire({
                        icon: "error",
                        title: "Oops...",
                        text: "El campo Tiempo aproximado no puede estar vacío.",
                    });
                    $("#tiempoaprox").focus();
                    return false;
                }
                if($("#pasajeros").val() == ""){
                    //alert("El campo Dirección no puede estar vacío.");
                    Swal.fire({
                        icon: "error",
                        title: "Oops...",
                        text: "El campo Pasajeros no puede estar vacío.",
                    });
                    $("#pasajeros").focus();
                    return false;
                }
                if($("#destino").val() == ""){
                    //alert("El campo Dirección no puede estar vacío.");
                    Swal.fire({
                        icon: "error",
                        title: "Oops...",
                        text: "El campo Destino no puede estar vacío.",
                    });
                    $("#destino").focus();
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
                if(!$("#tga").is(":checked")){
                    //alert("El campo Dirección no puede estar vacío.");
                    Swal.fire({
                        icon: "error",
                        title: "Oops...",
                        text: "El campo TGA no puede estar vacío.",
                    });
                    $("#tga").focus();
                    return false;
                }

                return true;
      }

      $(document).ready( function() {
                $("#enviarAuto").click( function() {
                    if(validaForm()){                            
                        $.ajax({
                            url: '../includes/insertvehiculo.php',
                            type: 'POST',
                            data: $('#formVehiculo').serialize(),
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