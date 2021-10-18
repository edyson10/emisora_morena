<?php

require_once 'conexion.php';

$conexion->query("SET NAMES 'UTF8' ");

//die(json_encode($_POST));

$nombre = $_POST['nombreProgramacion'];
$fecha = $_POST['fechaProgramacion'];
$hora = $_POST['horaProgramacion'];

$hour = explode(" ", $hora);

if ($hour[1] == "AM") {
    $horas = explode(":", $hour[0]);
    if ($horas[0] == "12") {
        $time = "00:" . $horas[1] . ":00";
    } else {
        $time = $hour[0] . ":00";
    }
} else {
    $horas = explode(":", $hour[0]);
    if ($horas[0] == "12") {
        $time = ($horas[0]) . ":" . $horas[1] . ":00";
    } else {
        $time = ($horas[0] + 12) . ":" . $horas[1] . ":00";
    }
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
