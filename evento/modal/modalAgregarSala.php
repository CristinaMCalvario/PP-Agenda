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
        <h5 class="modal-title" id="exampleModalLongTitle">Solicitar Sala de Juntas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" id="agregareventos">
          <div class="mb-3">
            <label for="" class="form-label">Titulo de la Junta:</label>
            <input type="text" name="titulo" id="titulo" class="form-control">
          </div>
          <div class="mb-3 row">
            <label for="" class="col-sm-4 col-form-label">Fecha de inicio:</label>
            <div class="col-sm-8">
              <input type="datetime" class="form-control" name="fechaInicio" id="fechaInicio">
            </div>
           <!-- <div class="mb-3 row">
            <label for="" class="col-sm-4 col-form-label">Hora de inicio:</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="horaInicio" id="horaInicio">
            </div>-->

          </div>
          <div class="mb-3 row">
            <label for="" class="col-sm-4 col-form-label">Fecha de fin:</label>
            <div class="col-sm-8">
              <input type="datetime" class="form-control" name="fechaFin" id="fechaFin">
            </div>
          </div>
         <!-- <div class="mb-3 row">
            <label for="" class="col-sm-4 col-form-label">Hora de fin:</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="horaFin" id="horaFin">
            </div>-->
          
          <div class="mb-3">
            <label for="" class="form-label">La junta será:</label>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="sera[]" id="sera" checked>
              <label class="form-check-label">
                Presencial
              </label>
            </div>
            
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="sera[]" id="sera" >
              <label class="form-check-label">
                Remoto
              </label>
            </div>
          </div>
          <div class="mb-3">
            <label class="form-label">Nombres de los participantes internos:</label>
            <textarea class="form-control" name="internos" id="internos" rows="3"></textarea>
          </div>
          <div class="mb-3">
            <label class="form-label">Nombres de los participantes externos:</label>
            <textarea class="form-control" name="externos" id="externos" rows="3"></textarea>
          </div>
          <div class="mb-3">
            <label class="form-label">Descripción:</label>
            <textarea class="form-control" name="descripcion" id="descripcion" rows="3"></textarea>
          </div>
          <div class="mb-3">
            <label class="form-label">Usarás:</label>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="proyector" name="usaras[]" id="usaras" checked>
              <label class="form-check-label" for="">
                Proyector
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="bocina" name="usaras[]" id="usaras">
              <label class="form-check-label">
                Bocina
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="TI" name="usaras[]" id="usaras">
              <label class="form-check-label">
                Asistencia del personal de TI
              </label>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" value="guardar" class="btn" style="background-color: #e62b29; color: white;" id="enviarSala" >Guardar</button>
            <button type="button" id="salir" onclick="cerrarModal()" class="btn" data-dismiss="modal" style="background-color: white; color: black;">Salir</button>
          </div>
        </form>
      </div>
      
    </div>
  </div>
</div>


