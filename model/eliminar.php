<?php

require_once 'conexion.php';

if ($_POST['eliminar'] == 'eliminarRol') {
    $id = $_POST['id'];
    $sql = "DELETE FROM rol WHERE id = '$id'";
    $ejecutar = mysqli_query($conexion, $sql);
    if ($ejecutar) {
        $respuesta = array('respuesta' => 'exito');
    } else {
        $respuesta = array('respuesta' => 'error');
    }
    echo json_encode($respuesta);
}