<?php

require_once 'conexion.php';

$nombre = $_POST['nombreProgramacion'];
$fecha = $_POST['fechaProgramacion'];
$hora = $_POST['horaProgramacion'];

$fechaHora = $fecha . " " . $hora;

$sql = $conexion->query("INSERT INTO programacion (id, nombre, fecha_hora) VALUES (NULL, '$nombre', '$fechaHora')");

if ($sql) {
    $respuesta = array('respuesta' => 'exito');
} else {
    $respuesta = array('respuesta' => 'error');
}

echo json_encode($respuesta);

mysqli_close($conexion);
