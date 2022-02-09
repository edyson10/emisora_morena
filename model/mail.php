<?php

require_once 'conexion.php';

try {
    if (!empty($_POST['contact_name']) && !empty($_POST['contact_email']) && !empty($_POST['contact_message']) && !empty($_POST['contact_asunt'])) {
        $nombre = $_POST['contact_name'];
        $asunto = $_POST['contact_asunt'];
        $correo = $_POST['contact_email'];
        $mensaje = $_POST['contact_message'];
        
        $to = 'morenastereolabateca@gmail.com';
        $subject = $asunto;
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
                                                                                        <a href="https://divisist2.ufps.edu.co"
                                                                                            style="color:#68696a;text-decoration:none"
                                                                                            target="_blank"
                                                                                            data-saferedirecturl="https://www.google.com/url?q=https://divisist2.ufps.edu.co&amp;source=gmail&amp;ust=1606796406606000&amp;usg=AFQjCNHs8ojkcem6sJDkiwPeMZyvA3X06w"><img
                                                                                                src="//isteam.wsimg.com/ip/bc20cdf0-18df-49b0-a6b5-1e03620041c9/TUR%20Colombia%20Ltd1.png/:/cr=t:0%25,l:0%25,w:100%25,h:100%25/rs=w:600,h:300,cg:true"
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
                                            <tr>
                                                <td width="10%">&nbsp;</td>
                                                <td style="font-family:Verdana,Geneva,sans-serif;color:#68696a;font-size:12px;line-height:20px"
                                                    width="80%" valign="top" align="justify">
                                                    <p>Hola soy, ' . $nombre . ':</p>
                                                    <p>
                                                        ' . $mensaje .'
                                                    </p>
                                                    <p><strong>Mi correo para cualquier inquietud es: ' . $correo . '</strong></p>
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
                                            <tr style="font-family:Verdana,Geneva,sans-serif;color:#68696a;font-size:12px;line-height:20px">
                                                <td width="50%" align="center"><br>
                                                    <font
                                                        style="font-family: MyriadPro,Helvetica,Arial,sans-serif;color:#FFFFFF;font-size:13px">
                                                        <strong>
                                                            Calle 3 No. 1 - 03 Barrio Quinta Real<br>
                                                            Emisora Morena Stereo<br>
                                                            Labateca, Norte de Santander, Colombia
                                                        </strong>
                                                    </font>
                                                </td>
                                                <td width="4%" align="right"><br>
                                                    <a href="https://www.facebook.com/turcolombiagroup" target="_blank"
                                                        data-saferedirecturl="https://www.google.com/url?q=https://www.facebook.com/turcolombiagroup/&amp;source=gmail&amp;ust=1606796406606000&amp;usg=AFQjCNHR2ex-dWm5N-ZL5S2er-bfpMxfkw"><img
                                                            src="https://ci3.googleusercontent.com/proxy/QXm52O5uS77Im4Xscamgp_oP73q2jx4QhqqvCxMSa1j954y7B8EHuh-mvpTI_Hvb6zl7pxGaL7fGLoPEbY3GJ_Y=s0-d-e1-ft#https://ww2.ufps.edu.co/public/imagenes/fb.png"
                                                            alt="facebook" class="CToWUd" width="30" height="30"
                                                            border="0"></a>
                                                </td>
                                                <td width="5%" align="center"><br>
                                                    <a href="https://twitter.com/TURColombiaLtd" target="_blank"
                                                        data-saferedirecturl="https://www.google.com/url?q=https://twitter.com/TURColombiaLtd&amp;source=gmail&amp;ust=1606796406606000&amp;usg=AFQjCNFeeF13YWdrtx-Luy3Dx1WqPJVMTg"><img
                                                            src="https://ci4.googleusercontent.com/proxy/o6xFG-QJoaHuNd1O3N3bC-_V_Pot5OBFkO2_WLzgrhdJsPGRFHvSwtX_Y_5bB4tzxxrndUz-zR4hcC5Ar3ruzfE=s0-d-e1-ft#https://ww2.ufps.edu.co/public/imagenes/tw.png"
                                                            alt="twitter" class="CToWUd" width="30" height="30"
                                                            border="0"></a>
                                                </td>
                                                <td width="4%" align="left"><br>
                                                    <a href="https://www.youtube.com/TURCOLOMBIALIMITED" target="_blank"
                                                        data-saferedirecturl="https://www.google.com/url?q=https://www.youtube.com/TURCOLOMBIALIMITED/&amp;source=gmail&amp;ust=1606796406606000&amp;usg=AFQjCNEEaL9zSn_q2oc3PZxf6VrUQNxNaw"><img
                                                            src="https://ci6.googleusercontent.com/proxy/3Cb_WFVp3m42Nnnq4w7aF_2WvpeUPEcusYltHTrhRlqUpmB9g6zR1Svn823_KSP2BbLb1jX5yekUPwz7zTFJl3s=s0-d-e1-ft#https://ww2.ufps.edu.co/public/imagenes/yt.png"
                                                            alt="linkedin" class="CToWUd" width="30" height="30"
                                                            border="0"></a>
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
} catch (Exception $e) {
    $respuesta = 'Excepción capturada: ' . $e->getMessage() . "\n";
}

echo json_encode($respuesta);
