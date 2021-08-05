<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Registrar noticia</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="Administracion">Inicio</a></li>
                        <li class="breadcrumb-item active">Registrar noticia</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- Horizontal Form -->
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Registrar noticia</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->

                        <form class="form-horizontal" id="FormRegistroNoticia" name="FormRegistroNoticia" method="POST" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="alert alert-info alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                                    <h6><i class="icon fas fa-ban"></i> Importante</h6>
                                    Los campos que tengan asterisco son obligatorios.
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-4 col-form-label">Descripci&oacute;n *</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="descripcionNoticia" name="descripcionNoticia" placeholder="Ingrese una descripci&oacute;n de la noticias">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-4 col-form-label">Imagen *</label>
                                            <div class="col-sm-8">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="fotoNoticia" name="fotoNoticia">
                                                    <label class="custom-file-label" for="customFile">Seleccione el archivo</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-4 col-form-label">Lugar (Opcional)</label>
                                            <div class="col-sm-8">
                                                <input type="password" class="form-control" id="lugarNoticia" name="lugarNoticia" placeholder="Ingrese un lugar">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword3" class="col-sm-4 col-form-label">Fecha (Opcional)</label>
                                            <div class="col-sm-8">
                                                <input type="date" class="form-control" id="fechaNoticia" name="fechaNoticia" placeholder="Ingrese una fecha">
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