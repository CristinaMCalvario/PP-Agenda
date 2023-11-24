<?php
header('Content-Type: application/json');
$pdo = new PDO("mysql:dbname=agendapp;host=localhost;","root","1234");

//
$setenciaSQL = $pdo->prepare("SELECT * FROM solicitudsalajuntas");
$setenciaSQL->execute();

$resultado = $setenciaSQL->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($resultado);

?>