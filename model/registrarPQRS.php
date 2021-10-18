<?php

require_once 'conexion.php';

$conexion->query("SET NAMES 'UTF8' ");

//die(json_encode($_POST));

$tipo = $_POST['tipoPQRS'];
$nombre = $_POST['nombrePQRS'];
$numero = $_POST['numeroPQRS'];
$correo = $_POST['correoPQRS'];
$descripcion = $_POST['descripcionPQRS'];

$sql = $conexion->query("INSERT INTO pqrs (id, tipo, nombre, telefono, email, descripcion) VALUES (NULL, '$tipo', '$nombre', '$numero', '$correo', '$descripcion')");

if ($sql) {
    $respuesta = array('respuesta' => 'exito');
} else {
    $respuesta = array('respuesta' => 'error');
}

echo json_encode($respuesta);

mysqli_close($conexion);