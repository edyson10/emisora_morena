<?php

require_once 'conexion.php';

try {
    if (!empty($_POST['emailForgot'])) {
        $pass = substr(md5(microtime()), 1, 10);
        $correo = $_POST['emailForgot'];
        $query = $conexion->query("SELECT * FROM persona WHERE correo = '$correo'");
        $row = mysqli_fetch_array($query);
        
        if ($row > 0) {
            $sql = "UPDATE persona SET contrasena = '$pass' WHERE correo = '$correo'";
            $nombre = $row['nombre'] . " " . $row['apellido'];
            $ejecutar = $conexion->query($sql);
            if ($ejecutar) {
                $to = $row['correo'];
                $subject = "Restablecimiento de contraseña - Emisora Morena Stereo.";
                $cabeceras = 'MIME-Version: 1.0' . "\r\n";
                $cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";
                $message = '<table style="padding:50px 0;background:url("
                https://doc-08-ac-docs.googleusercontent.com/docs/securesc/p3fjatsoacqobijbtec8t93ok5b89q7p/bt1d3no2lbei2i43gqghv2qvmsnhie0n/1614972450000/10963207390854114534/17700326816645748306/1usNb70qb6FvQI5D8H_Rf6OwMlv0z_M3-?authuser=0")"
                width="100%" cellspacing="0" cellpadding="0" border="0" bgcolor="#ffffff">
                <tbody>
                    <tr>
                        <td>
                            <table style="border-radius:20px 20px" width="650" cellspacing="0" cellpadding="0" border="0"
                                bgcolor="#FFFFFF" align="center">
                                <tbody>
                                    <tr>
                                        <td>
                                            <table width="100%" cellspacing="0" cellpadding="0" border="0">
                                                <tbody>
                                                    <tr>
                                                        <td width="50%">
                                                            <table width="100%" cellspacing="0" cellpadding="0" border="0">
            
                                                            </table>
                                                        </td>
                                                        <td width="50%">
                                                            <table width="100%" cellspacing="0" cellpadding="0" border="0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <table width="100%" cellspacing="0" cellpadding="0"
                                                                                border="0">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td width="96%" valign="top" align="rigth">
                                                                                            <div>
                                                                                                <a href="#"
                                                                                                    style="color:#68696a;text-decoration:none"
                                                                                                    target="_blank"
                                                                                                    data-saferedirecturl="https://www.google.com/url?q=https://divisist2.ufps.edu.co&amp;source=gmail&amp;ust=1606796406606000&amp;usg=AFQjCNHs8ojkcem6sJDkiwPeMZyvA3X06w"><img
                                                                                                        src="https://i.ibb.co/DbbGhKY/logoemisora.png"
                                                                                                        class="CToWUd" width="300"
                                                                                                        height="160"></a>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td width="4%">&nbsp;</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2" style="text-align:center"><br>
                                                            <hr style="border-top:3px solid #073f49" width="85%"><br>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table width="100%" cellspacing="0" cellpadding="0" border="0">
                                                <tbody>
                                                    <tr style="font-family:Verdana,Geneva,sans-serif;color:#68696a;font-size:12px;line-height:20px">
                                                        <td width="10%">&nbsp;</td>
                                                        <td style="font-family:Verdana,Geneva,sans-serif;color:#68696a;font-size:12px;line-height:20px"
                                                            width="80%" valign="top" align="justify">
                                                            <p>Hola, ' . $nombre . ':</p>
                                                            <p>
                                                                Recientemente, solicit&oacute; el cambio de su contrase&ntilde;a
                                                                de su cuenta en la plataforma de la Emisora Morena Stereo.<br>
                                                                Si solicitaste el cambio, esta es su nueva contrase&ntilde;a.
                                                            </p>
                                                            <p><strong>Su nueva contrase&ntilde;a es: ' . $pass . '</strong></p>
                                                            <p style="margin-bottom:0px"><b>Por favor no responder este correo.</b>
                                                            </p>
                                                        </td>
                                                        <td width="10%">&nbsp;</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
            
                                    <tr>
                                        <td colspan="2" style="text-align:center"><br>
                                            <hr style="border-top:3px solid #073f49" width="85%"><br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table
                                                style="background-color:#073f49;background-size:100% 100%;border-radius:0px 0px 20px 20px"
                                                width="100%" height="70px" cellspacing="0" cellpadding="0" border="0">
                                                <tbody>
                                                    <tr>
                                                        <td width="50%" align="center"><br>
                                                            <font
                                                                style="font-family: MyriadPro,Helvetica,Arial,sans-serif;color:#FFFFFF;font-size:13px">
                                                                <strong>
                                                                    Calle 3 N 1-03 B Quinta Real<br>
                                                                    Emisora Morena Stereo <br>
                                                                    <i>"La radio para todos"</i><br>
                                                                    Labateca, Norte de Santander, Colombia
                                                                </strong>
                                                            </font>
                                                        </td>
                                                        <td width="5%"><br>&nbsp;</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <br>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="yj6qo"></div>
            <div class="adL"></div>';
                mail($to, $subject, $message, $cabeceras);
                $respuesta = array('respuesta' => 'exito');
            } else {
                $respuesta = array('respuesta' => 'error');
            }
        } else {
            $respuesta = array('respuesta' => 'nonadie');
        }
    } else {
        $respuesta = array('respuesta' => 'vacio');
    }
} catch (Exception $e) {
    $respuesta = 'Excepción capturada: '. $e->getMessage() . "\n";
}

echo json_encode($respuesta);

mysqli_close($conexion);