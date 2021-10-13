<?php

require_once 'conexion.php';

//die(json_encode($_POST));

$comentario = $_POST['comentario'];

$fechaActual = date('Y-m-d');

$sql = $conexion->query("INSERT INTO comentario (id, descripcion, fecha_comentario) VALUES (NULL, '$comentario', '$fechaActual')");

if ($sql) {
    $respuesta = array('respuesta' => 'exito');
} else {
    $respuesta = array('respuesta' => 'error');
}

echo json_encode($respuesta);

mysqli_close($conexion);