<?php

require_once 'conexion.php';

$conexion->query("SET NAMES 'UTF8' ");

//die(json_encode($_POST));

date_default_timezone_set('America/Bogota');

$comentario = $_POST['comentario'];

$fechaActual = date('Y-m-d G:i:s');

$sql = $conexion->query("INSERT INTO comentario (id, descripcion, fecha_comentario) VALUES (NULL, '$comentario', '$fechaActual')");

if ($sql) {
    $respuesta = array('respuesta' => 'exito');
} else {
    $respuesta = array('respuesta' => 'error');
}

echo json_encode($respuesta);

mysqli_close($conexion);