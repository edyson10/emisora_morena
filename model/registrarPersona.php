<?php

require_once 'conexion.php';

//die(json_encode($_POST));

$nombre = $_POST['nombrePersonal'];
$apellido = $_POST['apellidoPersonal'];
$tipo_documento = $_POST['tipoDocumentoPersonal'];
$identificacion = $_POST['documentoPersonal'];
$correo = $_POST['correoPersonal'];
$rol = $_POST['rolPersonal'];
$fecha_vinculacion = $_POST['fechaInicioPersonal'];
$contrasena = $_POST['passPersonal'];
$repContrasena = $_POST['repPassPersonal'];

$directorio = "Archivos/imagenes/personal/";

if ($contrasena != $repContrasena) {
    $respuesta = array('respuesta' => 'nocontrasena');
} else {
    
    if (!is_dir($directorio)) {
        mkdir($directorio, 0755, true);
    }
    if ($_FILES['foto']['size'] <= 4000000) {
        if (($_FILES["foto"]["type"] == "image/gif")
            || ($_FILES["foto"]["type"] == "image/jpeg")
            || ($_FILES["foto"]["type"] == "image/jpg")
            || ($_FILES["foto"]["type"] == "image/png")
        ) {
            if (move_uploaded_file($_FILES['foto']['tmp_name'], $directorio . $_FILES['foto']['name'])) {
                $archivo_url = $directorio . $_FILES['foto']['name'];
                $nombreImagen = $_FILES['foto']['name'];

                $sql = $conexion->query("INSERT INTO persona (id, nombre, apellido, tipo_documento, documento, correo, contrasena, rol, imagen, ruta_imagen, 
                fecha_inicio, fecha_fin, estado) VALUES (NULL, '$nombre', '$apellido', '$tipo_documento', '$identificacion', '$correo', '$contrasena', '$rol', 
                '$nombreImagen', '$nombreImagen', '$fecha_vinculacion', NULL, '1')");

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
