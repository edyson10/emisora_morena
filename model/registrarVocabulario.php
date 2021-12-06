<?php

require_once 'conexion.php';

$conexion->query("SET NAMES 'UTF8' ");

$vocabulario = $_POST['vocabulario'];

$sql = $conexion->query("INSERT INTO vocabulario (id, descripcion) VALUES (NULL, '$vocabulario')");

if ($sql) {
    $respuesta = array('respuesta' => 'exito');
} else {
    $respuesta = array('respuesta' => 'error');
}

echo json_encode($respuesta);

mysqli_close($conexion);