<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Programaci&oacute;n del d&iacute;a</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="Administracion">Inicio</a></li>
                        <li class="breadcrumb-item active">Programaci&oacute;n del d&iacute;a</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
            <div class="row mb-2">
                <div class="col-sm-4">
                    <button type="button" class="btn btn-block btn-outline-primary" data-toggle="modal" data-target="#modal-default">Registrar programaci&oacute;n del d&iacute;a</button>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </div>

    <!-- Modal Programacion día -->
    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Registrar programaci&oacute;n del d&iacute;a</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form name="FormRegistrarProgramacion" id="FormRegistrarProgramacion" method="POST">
                    <div class="modal-body">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-5 col-form-label">Nombre programaci&oacute;n</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="nombreProgramacion" name="nombreProgramacion" placeholder="Ingrese el nombre">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-5 col-form-label">Fecha programaci&oacute;n</label>
                            <div class="col-sm-7">
                                <input type="date" class="form-control" id="fechaProgramacion" name="fechaProgramacion">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-5 col-form-label">Hora programaci&oacute;n</label>
                            <div class="col-sm-7">
                                <div class="input-group date" id="timepicker" data-target-input="nearest">
                                    <input type="text" class="form-control datetimepicker-input" data-target="#timepicker" id="horaProgramacion" name="horaProgramacion" />
                                    <div class="input-group-append" data-target="#timepicker" data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="far fa-clock"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Registrar</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Programaci&oacute;n diaria</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered ">
                                <thead class="bg-info">
                                    <tr>
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th>Fecha hora</th>
                                        <th>Acci&oacute;n</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query = $conexion->query("SELECT * FROM programacion ORDER BY id ASC");
                                    while ($row = mysqli_fetch_array($query)) {
                                        //<a class='btn btn-warning' onclick='editarProgramacion(" . $row["id"] . ")'><i class='fas fa-edit' title='Editar programación'></i></a>
                                        echo "<tr>
                                            <td>" . $row["id"] . "</td>
                                            <td>" . utf8_encode($row["nombre"]) . "</td>
                                            <td>" . $row["fecha_hora"] . "</td>
                                            <td class='text-center py-0 align-middle'>
                                                <div class='btn-group btn-group-sm'>
                                                <a class='btn btn-danger' onclick='eliminarProgramacion(" . $row["id"] . ")'><i class='fas fa-trash' title='Eliminar programación'></i></a>
                                                </div>
                                            </td>
                                        </tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
</div>