<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Correos recibidos</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="Administracion">Inicio</a></li>
                        <li class="breadcrumb-item active">Correos recibidos</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Correos recibidos</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered ">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Fecha</th>
                                        <th>Nombre</th>
                                        <th>Correo</th>
                                        <th>Asunto</th>
                                        <th>Mensaje</th>
                                        <th>Acci&oacute;n</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query = $conexion->query("SELECT * FROM contacto ORDER BY id DESC");
                                    while ($row = mysqli_fetch_array($query)) {
                                        echo "<tr>
                                            <td>" . $row["fecha"] . "</td>
                                            <td>" . $row["nombre"] . "</td>
                                            <td>" . $row["correo"] . "</td>
                                            <td>" . $row["asunto"] . "</td>
                                            <td>" . $row["mensaje"] . "</td>
                                            <td class='text-center py-0 align-middle'>
                                                <div class='btn-group btn-group-sm'>
                                                <a class='btn btn-warning' onclick='editarProgramacion(" . $row["id"] . ")'><i class='fas fa-edit' title='Editar programación'></i></a>
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