<?php 

require_once 'conexion.php';

$conexion->query("SET NAMES 'UTF8' ");

//die(json_encode($_POST));

$nombre = $_POST['contact_name'];
$correo = $_POST['contact_email'];
$asunto = $_POST['contact_asunt'];
$mensaje = $_POST['contact_message'];

$fechaActual = date('Y-m-d');

$sql = $conexion->query("INSERT INTO contacto (id, nombre, correo, asunto, mensaje, fecha) VALUES (NULL, '$nombre', '$correo', '$asunto', '$mensaje', '$fechaActual')");

if ($sql) {
    $respuesta = array('respuesta' => 'exito');
} else {
    $respuesta = array('respuesta' => 'error');
}

echo json_encode($respuesta);

mysqli_close($conexion);