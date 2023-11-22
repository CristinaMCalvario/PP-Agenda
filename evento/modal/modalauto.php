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
<div class="modal fade" id="RegistroUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Solicitud de Vehículo Utilitario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="mb-3">
          <b class="tagUser">Título:</b> <p class="datoUser"></p>
        </div>
        <div class="mb-3">
          <b class="tagUser">Fecha inicio:</b> <p class="datoUser"></p>
        </div>
        <div class="mb-3">
          <b class="tagUser">Hora inicio:</b> <p class="datoUser"></p>
        </div>
        <div class="mb-3">
          <b class="tagUser">Fecha fin:</b> <p class="datoUser"></p>
        </div>
        <div class="mb-3">
          <b class="tagUser">Hora fin:</b> <p class="datoUser"></p>
        </div>
        <div class="mb-3">
          <b class="tagUser">Tiempo aprox.:</b> <p class="datoUser"></p>
        </div>
        <div class="mb-3">
          <b class="tagUser">Nombres de los pasajeros:</b> <p class="datoUser"></p>
        </div>
        <div class="mb-3">
          <b class="tagUser">Destino:</b> <p class="datoUser"></p>
        </div>
        <div class="mb-3">
          <b class="tagUser">Descripción:</b> <p class="datoUser"></p>
        </div>
        <div class="mb-3">
          <b class="tagUser">TGA:</b> <p class="datoUser"></p>
        </div>
        <div class="mb-3">
          <b class="tagUser">Observaciones:</b> <p class="datoUser"></p>
        </div>
      </div>

      <!--
        <div class="mb-3 row">
          <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
          <div class="col-sm-10">
            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="email@example.com">
          </div>
        </div>
      -->
      <div class="modal-footer">
        <button type="button" class="btn" style="background-color: #e62b29; color: white;" >Aceptar</button>
        <button type="button" class="btn" style="background-color: #e62b29; color: white;" >Eliminar</button>
      </div>
    </div>
  </div>
</div>