<?php

require_once 'conexion.php';

//die(json_encode($_POST));

$nombre = $_POST['nombreProgramacion'];
$fecha = $_POST['fechaProgramacion'];
$hora = $_POST['horaProgramacion'];

$hour = explode(" ", $hora);

if ($hour[1] == "AM") {
    $time = $hour[0] . ":00";
} else {
    $horas = explode(":", $hour[0]);
    $time = ($horas[0] + 12) . ":" . $horas[1] . ":00";
}

$fechaHora = $fecha . " " . $time;

$sql = $conexion->query("INSERT INTO programacion (id, nombre, fecha_hora) VALUES (NULL, '$nombre', '$fechaHora')");

if ($sql) {
    $respuesta = array('respuesta' => 'exito');
} else {
    $respuesta = array('respuesta' => 'error');
}

echo json_encode($respuesta);

mysqli_close($conexion);
