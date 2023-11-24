<?php

header('Content-Type: application/json');

require("conexion.php");

$conexion = regresarConexion();

switch ($_GET['accion']) {
    case 'listar':
        $datos = mysqli_query($conexion, "SELECT id,
            titulo as title,
            descripcion,
            inicio as start,
            fin as end
            FROM eventosalajuntas");
        $resultado = mysqli_fetch_all($datos, MYSQLI_ASSOC);
        echo json_encode($resultado);
        break;
    case 'agregar':
    /*    "INSERT TO eventos (titulo, descripcion, inicio, fin, colortexto, colorfondo) values
                           ('$_POST[titulo]','$_POST[descripcion]','$_POST[inicio]','$_POST[fin]','$_POST[colortexto]','$_POST[colorfondo]')";*/
        break;
    case 'modificar':
    /*    "UPDATE eventos set titulo = '$_POST[titulo]',
                            descripcion = '$_POST[descripcion]',
                            inicio = '$_POST[inicio]',
                            fin = '$_POST[fin]',
                            colortexto = '$_POST[colortexto]',
                            colorfondo = '$_POST[colorfondo]'
                            WHERE ID = $_POST[id]";*/
        break;
    case 'borrar':
        /*"DELETE FROM eventos WHERE id = $_POST[id]";*/
        break;
}


?>