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
} else if ($_POST['eliminar'] == 'eliminarPersonal') {
    $id = $_POST['id'];
    $sql = "UPDATE persona SET estado = '0' WHERE id = '$id'";
    $ejecutar = mysqli_query($conexion, $sql);
    if ($ejecutar) {
        $respuesta = array('respuesta' => 'exito');
    } else {
        $respuesta = array('respuesta' => 'error');
    }
    echo json_encode($respuesta);
} else if ($_POST['eliminar'] == 'eliminarProgramacion') {
    $id = $_POST['id'];
    $sql = "DELETE FROM programacion  WHERE id  = '$id'";
    $ejecutar = mysqli_query($conexion, $sql);
    if ($ejecutar) {
        $respuesta = array('respuesta' => 'exito');
    } else {
        $respuesta = array('respuesta' => 'error');
    }
    echo json_encode($respuesta);
} else if ($_POST['eliminar'] == 'eliminarNoticia') {
    $id = $_POST['id'];
    $sql = "DELETE FROM noticia WHERE id = '$id'";
    $ejecutar = mysqli_query($conexion, $sql);
    if ($ejecutar) {
        $respuesta = array('respuesta' => 'exito');
    } else {
        $respuesta = array('respuesta' => 'error');
    }
    echo json_encode($respuesta);
}
