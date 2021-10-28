<?php

require_once 'conexion.php';

$conexion->query("SET NAMES 'UTF8' ");

$titulo = $_POST['tituloNoticia'];
$descripcion = $_POST['descripcionNoticia'];
$fecha = $_POST['fechaNoticia'];
$lugar = $_POST['lugarNoticia'];
$link = $_POST['linkNoticia'];

$directorio = "Archivos/imagenes/noticia/";

if (empty($titulo) || empty($descripcion)) {
    $respuesta = array('respuesta' => 'vacio');
} else {
    if (!is_dir($directorio)) {
        mkdir($directorio, 0755, true);
    }
    if ($_FILES['fotoNoticia']['size'] <= 40000000) {
        if (($_FILES["fotoNoticia"]["type"] == "image/gif")
            || ($_FILES["fotoNoticia"]["type"] == "image/jpeg")
            || ($_FILES["fotoNoticia"]["type"] == "image/jpg")
            || ($_FILES["fotoNoticia"]["type"] == "image/png")
        ) {
            if (move_uploaded_file($_FILES['fotoNoticia']['tmp_name'], $directorio . $_FILES['fotoNoticia']['name'])) {
                $archivo_url = $directorio . $_FILES['fotoNoticia']['name'];
                $nombreImagen = $_FILES['fotoNoticia']['name'];
                $sql = $conexion->query("INSERT INTO noticia (id, ruta_imagen, imagen, titulo, descripcion, fecha, lugar, link) 
                VALUES (NULL, '$archivo_url', '$nombreImagen', '$titulo', '$descripcion', '$fecha', '$lugar', '$link')");

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
