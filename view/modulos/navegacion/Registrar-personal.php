<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Registrar personal</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="Administracion">Inicio</a></li>
                        <li class="breadcrumb-item active">Registrar personal</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- Horizontal Form -->
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Registrar personal</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form class="form-horizontal" id="FormRegistroPersonal" name="FormRegistroPersonal" method="POST" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-4 col-form-label">Nombre</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="nombrePersonal" name="nombrePersonal" placeholder="Ingrese el nombre">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword3" class="col-sm-4 col-form-label">Apellido</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="apellidoPersonal" name="apellidoPersonal" placeholder="Ingrese el apellido">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-4 col-form-label">Tipo documento</label>
                                            <div class="col-sm-8">
                                                <select class="custom-select rounded-0" id="tipoDocumentoPersonal" name="tipoDocumentoPersonal">
                                                    <?php
                                                    $query = $conexion->query("SELECT * FROM tipo_documento ORDER BY descripcion ASC");
                                                    while ($valores = mysqli_fetch_array($query)) {
                                                        echo '<option value="' . $valores['id'] . '">' . utf8_encode($valores['descripcion']) . '</option>';
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-4 col-form-label">Documento</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="documentoPersonal" name="documentoPersonal" placeholder="Ingrese el n&uacute;mero de identidad">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-4 col-form-label">Correo</label>
                                            <div class="col-sm-8">
                                                <input type="email" class="form-control" id="correoPersonal" name="correoPersonal" placeholder="Ingrese el correo">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-4 col-form-label">Contrase&ntilde;a</label>
                                            <div class="col-sm-8">
                                                <input type="password" class="form-control" id="passPersonal" name="passPersonal" placeholder="Ingrese una contrase&ntilde;a">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-4 col-form-label">Repite la contrase&ntilde;a</label>
                                            <div class="col-sm-8">
                                                <input type="password" class="form-control" id="repPassPersonal" name="repPassPersonal" placeholder="Ingrese de nuevo la contrase&ntilde;a">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword3" class="col-sm-4 col-form-label">Rol</label>
                                            <div class="col-sm-8">
                                                <select class="custom-select rounded-0" id="rolPersonal" name="rolPersonal">
                                                    <?php
                                                    $query = $conexion->query("SELECT * FROM rol ORDER BY descripcion ASC");
                                                    while ($valores = mysqli_fetch_array($query)) {
                                                        echo '<option value="' . $valores['id'] . '">' . utf8_encode($valores['descripcion']) . '</option>';
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-4 col-form-label">Imagen</label>
                                            <div class="col-sm-8">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="foto" name="foto">
                                                    <label class="custom-file-label" for="customFile">Seleccione el archivo</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-4 col-form-label">Fecha inicio</label>
                                            <div class="col-sm-8">
                                                <input type="date" class="form-control" id="fechaInicioPersonal" name="fechaInicioPersonal" placeholder="Email">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">Registrar</button>
                            </div>
                            <!-- /.card-footer -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>