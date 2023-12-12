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
<div class="modal fade" id="formNuevoEvidenciaVehiculo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="">Agregar evidencia del vehículo utilitario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formevidenciavehiculo" method="post">
          <div class="mb-3">
            <label for="" class="form-label">Kilometraje inicial:</label>
            <input class="form-control" type="file" id="imginicial" name="imginicial" multiple>
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Kilometraje final:</label>
            <input class="form-control" type="file" id="imgfinal" name="imgfinal" multiple>
          </div>

          <div class="modal-footer">
            <button type="button" id="enviarevidencia" class="btn" style="background-color: #e62b29; color: white;" >Enviar</button>
            <button type="button" class="btn" data-dismiss="modal" style="background-color: white; color: black;">Salir</button>
          </div>
        </form>
      </div>
      
    </div>
  </div>
</div>