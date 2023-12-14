<?php
require_once('../conexion.php');

if(isset($_POST["id_evento"])){
    $id = $_POST["id_evento"];
     $sql = ("SELECT ID,titulo, fechainicio, fechafin, juntasera, participantesInternos, participantesExternos, descripcion, usaras FROM eventos WHERE ID = $id LIMIT 1");
    $resultado = mysqli_query($conn, $sql);
    $res = [];

    $res =  fetch_array($resultado);

    echo json_encode($res, JSON_UNESCAPED_UNICODE);
}
?>