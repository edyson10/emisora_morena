<?php

require_once 'conexion.php';

$conexion->query("SET NAMES 'UTF8' ");

//die(json_encode($_POST));
//die(json_encode($_FILES));

$nombre = $_POST['contact_name'];
$correo = $_POST['contact_email'];
$asunto = $_POST['contact_asunt'];
$mensaje = $_POST['contact_message'];

$directorio = "Archivos/contacto/";

if (empty($nombre) || empty($correo) || empty($asunto) || empty($mensaje)) {
    $respuesta = array('respuesta' => 'vacio');
} else {
    if (!is_dir($directorio)) {
        mkdir($directorio, 0755, true);
    }

    if (isset($_FILES['contact_file'])) {
        $formatos_permitidos =  array('doc', 'docx', 'pdf', 'gif', 'jpeg', 'jpg', 'png');
        $archivo = $_FILES['contact_file']['name'];
        $extension = pathinfo($archivo, PATHINFO_EXTENSION);
        if ($_FILES['contact_file']['size'] <= 40000000) {
            if (!in_array($extension, $formatos_permitidos)) {
                $respuesta = array('respuesta' => 'noformato');
            } else {
                if (move_uploaded_file($_FILES['contact_file']['tmp_name'], $directorio . $_FILES['contact_file']['name'])) {
                    $archivo_url = $directorio . $_FILES['contact_file']['name'];
                    $nombreImagen = $_FILES['contact_file']['name'];
                } else {
                    echo '->' . error_get_last();
                }
            }
        } else {
            $respuesta = array('respuesta' => 'notamano');
        }
    } else {
        $archivo_url = NULL;
        $nombreImagen = NULL;
    }

    $fechaActual = date('Y-m-d');

    $sql = $conexion->query("INSERT INTO contacto(id, nombre, correo, asunto, mensaje, fecha, imagen, ruta_imagen) VALUES (NULL, '$nombre', '$correo', '$asunto', '$mensaje', '$fechaActual', '$archivo_url', '$nombreImagen')");

    if ($sql) {
        $respuesta = array('respuesta' => 'exito');
    } else {
        $respuesta = array('respuesta' => 'error');
    }
}

echo json_encode($respuesta);

mysqli_close($conexion);
