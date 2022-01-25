<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Men&uacute;</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="Administracion">Inicio</a></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <?php
        if ($_SESSION['rol'] == "Administrador") { ?>
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>
                                    <?php
                                    $query = $conexion->query("SELECT count(*) FROM noticia");
                                    $row = mysqli_fetch_array($query);
                                    echo $row[0];
                                    ?>
                                </h3>
                                <p>Noticias Registradas</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-clipboard"></i>
                            </div>
                            <a href="Ver-noticia" class="small-box-footer">M&aacute;s informaci&oacute;n <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>
                                    <?php
                                    $query = $conexion->query("SELECT count(*) FROM documentacion");
                                    $row = mysqli_fetch_array($query);
                                    echo $row[0];
                                    ?>
                                </h3>
                                <p>Documentos</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-folder"></i>
                            </div>
                            <a href="Documentacion" class="small-box-footer">M&aacute;s informaci&oacute;n <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>
                                    <?php
                                    $query = $conexion->query("SELECT count(*) FROM persona WHERE estado = 1");
                                    $row = mysqli_fetch_array($query);
                                    echo $row[0];
                                    ?>
                                </h3>
                                <p>Usuarios Registrados</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person-add"></i>
                            </div>
                            <a href="Ver-personal" class="small-box-footer">M&aacute;s informaci&oacute;n <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>
                                    <?php
                                    $query = $conexion->query("SELECT count(*) FROM pqrs");
                                    $row = mysqli_fetch_array($query);
                                    echo $row[0];
                                    ?>
                                </h3>
                                <p>PQRS Recibidos</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-chatboxes"></i>
                            </div>
                            <a href="Ver-pqrs" class="small-box-footer">M&aacute;s informaci&oacute;n <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                </div>
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>
                                    <?php
                                    $query = $conexion->query("SELECT count(*) FROM contacto");
                                    $row = mysqli_fetch_array($query);
                                    echo $row[0];
                                    ?>
                                </h3>
                                <p>Correos recibidos de Contacto</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-mail"></i>
                            </div>
                            <a href="Ver-correo" class="small-box-footer">M&aacute;s informaci&oacute;n <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        <?php } else if ($_SESSION['rol'] == "Locutor") { ?>
            <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>
                                <?php
                                $query = $conexion->query("SELECT count(*) FROM noticia");
                                $row = mysqli_fetch_array($query);
                                echo $row[0];
                                ?>
                            </h3>
                            <p>Noticias Registradas</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="Ver-noticia" class="small-box-footer">M&aacute;s informaci&oacute;n <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>  
        </div>
        <?php }
        ?>
    </section>
</div>