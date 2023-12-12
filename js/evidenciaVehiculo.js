

      $(document).ready( function() {
                $("#enviarevidencia").click( function() {                           
                        $.ajax({
                            url: '../includes/insertevidenciavehiculo.php',
                            type: 'POST',
                            data: $('#formevidenciavehiculo').serialize(),
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
                    
                });    
      });
      