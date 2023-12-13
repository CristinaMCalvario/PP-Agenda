eventClick: function(info){
              $('#ModalEdit #titulo').val(info.event.title);
              $('#ModalEdit #fechaInicio').val(info.event.start);
              $('#ModalEdit #fechaFin').val(info.event.end);
              $('#ModalEdit #sera').val(info.event.extendedProps.juntasera);
              $('#ModalEdit #internos').val(info.event.extendedProps.participantesInternos);
              $('#ModalEdit #externos').val(info.event.extendedProps.participantesExternos);
              $('#ModalEdit #descripcion').val(info.event.extendedProps.description);
              $('#ModalEdit #usaras').val(info.event.extendedProps.usaras);

              $("#ModalEdit").modal('show');

            }


            /*,

            eventClick: function(info){
              $('#title').html(info.event.title);
              $('#start').html(info.event.start);
              $('#end').html(info.event.end);
              $('#sera').html(info.event.extendedProps.juntasera);
              $('#partinternos').html(info.event.extendedProps.participantesInternos);
              $('#partexternos').html(info.event.extendedProps.participantesExternos);
              $('#desc').html(info.event.extendedProps.description);
              $('#usara').html(info.event.extendedProps.usaras);

              $("#mostrarInfo").modal('show');

            }*/


            eventRender: function(info, element) {
              element.bind('click', function() {
                $('#ModalEdit #id_evento').val(info.event.extendedProps.ID);
                $('#ModalEdit #titulo').val(info.event.title);
                $('#ModalEdit #fechaInicio').val(info.event.start);
                $('#ModalEdit #fechaFin').val(info.event.end);
                $('#ModalEdit #sera').val(info.event.extendedProps.juntasera);
                $('#ModalEdit #internos').val(info.event.extendedProps.participantesInternos);
                $('#ModalEdit #externos').val(info.event.extendedProps.participantesExternos);
                $('#ModalEdit #descripcion').val(info.event.extendedProps.description);
                $('#ModalEdit #usaras').val(info.event.extendedProps.usaras);

                $("#ModalEdit").modal('show');

              });
            }

            function edit(event){
					start = event.start.format('DD-MM-YYYY HH:mm:ss');
					if(event.end){
						end = event.end.format('DD-MM-YYYY HH:mm:ss');
					}else{
						end = start;
					}
					
					id_evento =  event._id;
					
					Event = [];
					Event[0] = id_evento;
					Event[1] = start;
					Event[2] = end;
					
					$.ajax({
					url: '../evento/action/eventoEditData.php',
					type: "POST",
					data: {Event:Event},
					success: function(rep) {
							if(rep == 'OK'){
								alert('Fecha Modificada.');
							}else{
								alert('Fallo algo, Intentalo de nuevo.'); 
							}
						}
					});
				}



        eventDrop: function (info) {
              var idEvento = info.event.extendedProps._id;
              var start = (info.event.start.format('DD-MM-YYYY'));
              var end = (info.event.end.format("DD-MM-YYYY"));

                $.ajax({
                    url: '../includes/drag_drop_evento.php',
                    type: "POST",
                    data: 'start=' + start + '&end=' + end + '&idEvento=' + idEvento,
                    success: function (response) {
                    // $("#respuesta").html(response);
                    if(response == 'OK'){
                      alert('Fecha Modificada.');
                    }else{
                      alert('Fallo algo, Intentalo de nuevo.'); 
                    }
                    }
                });
                if (!confirm("Are you sure about this change?")) {
                  info.revert();
                }
            }