<!-- Modal -->
<style>
  .modal-header{
    background-color: #e62b29; 
    color: white;
  }
  .modal-body{
    background-color: #F5F7F8;
    color: black;
  }
  .modal-content{
    font-size: 100%;
  }
  .modal-title{
    font-weight: bold;
    letter-spacing: 2px;
  }
</style>
<div class="modal fade" id="formEventos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="">Solicitar Vehículo Utilitario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formVehiculo" method="post">
          <div class="mb-3">
            <label for="" class="form-label">Titulo:</label>
            <input type="text" id="titulo" name="titulo" class="form-control">
          </div>
          <div class="mb-3 row">
            <label for="" class="col-sm-4 col-form-label">Fecha de inicio:</label>
            <div class="col-sm-8">
              <input type="datetime" class="form-control" id="fechaInicio" name="fechaInicio" placeholder="12-12-2023 09:08:10">
            </div>
          </div>
          <!--<div class="mb-3 row">
            <label for="" class="col-sm-4 col-form-label">Hora de inicio:</label>
            <div class="col-sm-8">
              <div class="input-group clockpicker" data-autoclose="true">
                <input type="text" class="form-control" id="horaInicio" placeholder="13:00">
                 <span class="input-group-addon">
                  <span class="glyphicon glyphicon-time"></span>
                 </span>
                
              </div>
              
            </div>
          </div>-->
          <div class="mb-3 row">
            <label for="" class="col-sm-4 col-form-label">Fecha de fin:</label>
            <div class="col-sm-8">
              <input type="datetime" class="form-control" id="fechaFin" name="fechaFin" placeholder="12-12-2023 15:08:10">
            </div>
          </div>
          <!--<div class="mb-3 row">
            <label for="" class="col-sm-4 col-form-label">Hora de fin:</label>
            <div class="col-sm-8">
              <div class="input-group clockpicker" data-autoclose="true">
                <input type="text" class="form-control" id="horaFin" placeholder="14:00">
                 <span class="input-group-addon">
                  <span class="glyphicon glyphicon-time"></span>
                 </span>
              </div>
          </div>-->
          
          <div class="mb-3">
            <label for="" class="form-label">Tiempo aproximado:</label>
            <input type="text" class="form-control" id="tiempoaprox" name="tiempoaprox" placeholder="2 horas">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Nombres de los pasajeros:</label>
            <textarea class="form-control" id="pasajeros" name="pasajeros" rows="3"></textarea>
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Destino:</label>
            <textarea class="form-control" id="destino" name="destino" rows="3"></textarea>
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Descripción:</label>
            <textarea class="form-control" id="descripcion" name="descripcion" rows="3"></textarea>
          </div>
          <div class="mb-3">
            <label for="" class="form-label">TAG:</label>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio"  id="tga" name="tga">
              <label class="form-check-label" for="">
                Sí
              </label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" id="tga" name="tga" checked>
              <label class="form-check-label" for="">
                No
              </label>
            </div>
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Observaciones:</label>
            <textarea class="form-control" id="observaciones" name="observaciones" rows="3"></textarea>
          </div>
          <div class="modal-footer">
            <button type="button" id="enviarAuto" class="btn" style="background-color: #e62b29; color: white;" >Enviar</button>
            <button type="button" class="btn" data-dismiss="modal" style="background-color: white; color: black;">Salir</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>