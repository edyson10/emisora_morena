<?php

require_once 'conexion.php';

$identificacion = $_POST['ingresarCorreo'];
$contraseña = $_POST['ingresarContrasena'];
$tipo = $_POST['ingresarTipo'];

if ($tipo == 'Seleccione') {
    $respuesta = array('respuesta' => 'seleccion');
    echo json_encode($respuesta);
    return;
} else {

    $sql = "SELECT p.nombre, p.apellido, tp.descripcion AS tipo_documento, p.documento, p.correo, r.descripcion AS rol, p.imagen, p.ruta_imagen, p.fecha_inicio, 
    p.fecha_fin, p.estado FROM persona p INNER JOIN tipo_documento tp ON p.tipo_documento = tp.id INNER JOIN rol r ON r.id = p.rol WHERE 
    p.documento = '$identificacion' AND p.contrasena = '$contraseña' AND p.rol = '$tipo'";

    $ejecutar = mysqli_query($conexion, $sql);
    $rowcount = mysqli_num_rows($ejecutar);

    if ($rowcount > 0) {
        $row = $ejecutar->fetch_array(MYSQLI_ASSOC);
        if ($row['estado'] == '1') {
            $IP = $_SERVER['REMOTE_ADDR'];
            $usersTimezone = 'America/New_York';
            $date = new DateTime("now", new DateTimeZone($usersTimezone));
            $hoy = $date->format('Y-m-d H:i:s');
            $sql1 = "INSERT INTO sesion (id, identificacion, fecha, ip) VALUES (NULL, '$identificacion', '$hoy', '$IP')";
            $ejecutar = mysqli_query($conexion, $sql1);
            session_start();
            $_SESSION['nombre'] = $row['nombre'];
            $_SESSION['apellido'] = $row['apellido'];
            $_SESSION['tipo_documento'] = $row['tipo_documento'];
            $_SESSION['documento'] = $row['documento'];
            $_SESSION['correo'] = $row['correo'];
            $_SESSION['rol'] =  $row['rol'];
            $_SESSION['imagen'] = $row['imagen'];
            $_SESSION['ruta_imagen'] = $row['ruta_imagen'];
            $_SESSION['fecha_inicio'] = $row['fecha_inicio'];
            if ($row['fecha_fin'] == null) {
                $_SESSION['fecha_fin'] = 'Activo';
            } else {
                $_SESSION['fecha_fin'] = $row['fecha_fin'];
            }
            $respuesta = array('respuesta' => 'exito');
        } else {
            $respuesta = array('respuesta' => 'estado');
        }
    } else {
        $respuesta = array('respuesta' => 'error');
    }
    echo json_encode($respuesta);
}

mysqli_close($conexion);