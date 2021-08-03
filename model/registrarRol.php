<?php

require_once 'conexion.php';

$rol = $_POST['rol'];

$sql = $conexion->query("INSERT INTO rol (id, descripcion) VALUES (NULL, '$rol')");

if ($sql) {
    $respuesta = array('respuesta' => 'exito');
} else {
    $respuesta = array('respuesta' => 'error');
}

echo json_encode($respuesta);

mysqli_close($conexion);