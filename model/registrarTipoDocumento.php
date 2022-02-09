<?php

require_once 'conexion.php';

$conexion->query("SET NAMES 'UTF8' ");

$tipo_documento = $_POST['tipo_documento'];

$sql = $conexion->query("INSERT INTO tipo_documento (id, descripcion) VALUES (NULL, '$tipo_documento')");

if ($sql) {
    $respuesta = array('respuesta' => 'exito');
} else {
    $respuesta = array('respuesta' => 'error');
}

echo json_encode($respuesta);

mysqli_close($conexion);
