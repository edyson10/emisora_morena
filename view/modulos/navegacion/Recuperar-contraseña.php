<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login EMS 98.2</title>
    <!-- Icono pagina -->
    <link rel="icon" href="view/presentacion/img/logoemisora.png" sizes="16x16" />
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="view/presentacion/admin/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="view/presentacion/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="view/presentacion/admin/dist/css/adminlte.min.css">
    <!-- =========== Sweetalert2 ============ -->
    <link rel="stylesheet" type="text/css" href="view/presentacion/css/sweetalert2.min.css" />
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="" class="h1"><b>Administraci&oacute;n</a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">¿Olvidaste tu contraseña? Aquí puede recuperar fácilmente una nueva contraseña.</p>
                <form name="FormRecuperarPass" id="FormRecuperarPass" method="POST">
                    <div class="input-group mb-3">
                        <input type="email" name="emailForgot" id="emailForgot" class="form-control" placeholder="Ingrese su correo">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Enviar contrase&ntilde;a</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                <p class="mt-3 mb-1">
                    <a href="Privado">Iniciar sesi&oacute;n</a>
                </p>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="view/presentacion/admin/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="view/presentacion/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="view/presentacion/admin/dist/js/adminlte.min.js"></script>

    <script src="view/presentacion/js/alertas.js"></script>
    <script src="view/presentacion/js/sweetalert2.min.js"></script>
    <!-- jquery-validation -->
    <script src="view/presentacion/admin/plugins/jquery-validation/jquery.validate.min.js"></script>
    <script src="view/presentacion/admin/plugins/jquery-validation/additional-methods.min.js"></script>

    <script src="view/presentacion/js/forgot_pass.js"></script>
</body>

</html>