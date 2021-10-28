<?php

require_once 'conexion.php';

$conexion->query("SET NAMES 'UTF8' ");

$titulo = $_POST['tituloPublicidad'];
$descripcion = $_POST['descripcionPublicidad'];
$facebook = $_POST['linkFacebook'];
$instagram = $_POST['linkInstagram'];

$directorio = "Archivos/imagenes/publicidad/";

if (empty($titulo) || empty($descripcion)) {
    $respuesta = array('respuesta' => 'vacio');
} else {
    if (!is_dir($directorio)) {
        mkdir($directorio, 0755, true);
    }
    if ($_FILES['fotoPublicidad']['size'] <= 40000000) {
        if (($_FILES["fotoPublicidad"]["type"] == "image/gif")
            || ($_FILES["fotoPublicidad"]["type"] == "image/jpeg")
            || ($_FILES["fotoPublicidad"]["type"] == "image/jpg")
            || ($_FILES["fotoPublicidad"]["type"] == "image/png")
        ) {
            if (move_uploaded_file($_FILES['fotoPublicidad']['tmp_name'], $directorio . $_FILES['fotoPublicidad']['name'])) {
                $archivo_url = $directorio . $_FILES['fotoPublicidad']['name'];
                $nombreImagen = $_FILES['fotoPublicidad']['name'];
                $sql = $conexion->query("INSERT INTO publicidad (id, titulo, descripcion, ruta_imagen, imagen, link_facebook, link_instagram) 
                VALUES (NULL, '$titulo', '$descripcion', '$archivo_url', '$nombreImagen', '$facebook', '$instagram')");

                if ($sql) {
                    $respuesta = array('respuesta' => 'exito');
                } else {
                    $respuesta = array('respuesta' => 'error');
                }
            } else {
                echo '->' . error_get_last();
            }
        } else {
            $respuesta = array('respuesta' => 'noformato');
        }
    } else {
        $respuesta = array('respuesta' => 'notamano');
    }
}

echo json_encode($respuesta);

mysqli_close($conexion);