<?php

require_once 'conexion.php';

$conexion->query("SET NAMES 'UTF8' ");

$titulo = $_POST['tituloDocumento'];

$directorio = "Archivos/documentos/";

$formatos_permitidos =  array('doc', 'docx', 'pdf');
$archivo = $_FILES['fileDocumento']['name'];
$extension = pathinfo($archivo, PATHINFO_EXTENSION);

if (empty($titulo)) {
    $respuesta = array('respuesta' => 'vacio');
} else {
    if (!is_dir($directorio)) {
        mkdir($directorio, 0755, true);
    }
    if ($_FILES['fileDocumento']['size'] <= 40000000) {
        if (!in_array($extension, $formatos_permitidos)) {
            $respuesta = array('respuesta' => 'noformato');
        } else {
            if (move_uploaded_file($_FILES['fileDocumento']['tmp_name'], $directorio . $_FILES['fileDocumento']['name'])) {
                $archivo_url = $directorio . $_FILES['fileDocumento']['name'];
                $nombreImagen = $_FILES['fileDocumento']['name'];
                $sql = $conexion->query("INSERT INTO documentacion (id, titulo, ruta_documento) VALUES (NULL, '$titulo', '$archivo_url');");

                if ($sql) {
                    $respuesta = array('respuesta' => 'exito');
                } else {
                    $respuesta = array('respuesta' => 'error');
                }
            } else {
                echo '->' . error_get_last();
            }
        }
    } else {
        $respuesta = array('respuesta' => 'notamano');
    }
}

echo json_encode($respuesta);

mysqli_close($conexion);
