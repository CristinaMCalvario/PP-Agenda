<?php
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$departamento = $_POST['departamento'];
$cargo = $_POST['cargo'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];

function generatePassword()
{
    $length = 8;
    $key = "";
    $pattern = "1234567890abcdefghijklmnopqrstuvwxyz";
    $max = strlen($pattern)-1;
    for($i = 0; $i < $length; $i++){
        $key .= substr($pattern, mt_rand(0,$max), 1);
    }
    return $key;
}
$pass = generatePassword();

?>


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
        <h5 class="modal-title" id="exampleModalLongTitle">Registro de Usuarios</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="mb-3">
          <b class="tagUser">Nombre (s):</b><br>
          <p class="datoUser">
            <?php echo $nombre; ?>
          </p>
        </div>
        <div class="mb-3">
          <b class="tagUser">Apellidos:</b><br> 
          <p class="datoUser">
            <?php echo $apellidos; ?>
          </p>
        </div>
        <div class="mb-3">
          <b class="tagUser">Departamento:</b><br> 
          <p class="datoUser">
            <?php echo $departamento; ?>
          </p>
        </div>
        <div class="mb-3">
          <b class="tagUser">Cargo:</b><br> <p class="datoUser"><?php echo $cargo; ?></p>
        </div>
        <div class="mb-3">
          <b class="tagUser">Correo electrónico:</b><br> <p class="datoUser"><?php echo $correo; ?></p>
        </div>
        <div class="mb-3">
          <b class="tagUser">Teléfono:</b><br> <p class="datoUser"><?php echo $telefono; ?></p>
        </div>
        <br>
        <div class="mb-3">
          <b class="tagUser">Nombre de usuario:</b><br> <p class="datoUser"><?php echo $correo; ?></p>
        </div>
        <div class="mb-3">
          <b class="tagUser">Contraseña:</b><br> 
          <p class="datoUser">
            <?php echo $pass; ?>
          </p>
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
        <button type="button" class="btn" style="background-color: #e62b29; color: white;" >Registrar</button>
        <button type="button" class="btn" style="background-color: #e62b29; color: white;" >Editar</button>
        <button type="button" class="btn" style="background-color: #e62b29; color: white;" >Eliminar</button>
      </div>
    </div>
  </div>
</div>

