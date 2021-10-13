<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Ver personal</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="Administracion">Inicio</a></li>
                        <li class="breadcrumb-item active">Ver personal</li>
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
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Personal registrados</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered ">
                                <thead class="bg-info">
                                    <tr>
                                        <th>Foto</th>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>Identificaci&oacute;n</th>
                                        <th>Correo</th>
                                        <th>Rol</th>
                                        <th>Estado</th>
                                        <th>Acci&oacute;n</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query = $conexion->query("SELECT p.id, p.nombre, p.apellido, p.documento, r.descripcion AS rol, p.estado, p.correo FROM persona p INNER JOIN rol r ON p.rol = r.id ORDER BY p.documento, p.estado ASC");
                                    while ($row = mysqli_fetch_array($query)) {
                                        if (isset($row['imagen'])) {
                                            $imagen = "model/Archivos/imagenes/personal/" . $row['imagen'];
                                            
                                        } else {
                                            $imagen = "view/presentacion/admin/dist/img/user_1.png";
                                        }
                                        if ($row["estado"] == '1') {
                                            $estado = "<span class='badge badge-success'>Activo</span>";
                                        } else {
                                            $estado = "<span class='badge badge-danger'>Inactivo</span>";
                                        }

                                        if ($row["estado"] == '1') {
                                            $botones = "<a class='btn btn-danger' onclick='eliminarPersona(" . $row["id"] . ")'><i class='fas fa-trash'></i></a>";
                                        } else {
                                            $botones = "";
                                        }
                                        echo "<tr>
                                            <td>
                                                <div class='image'>
                                                    <img style='width: 50px; height: 50px;' src='" . $imagen . "' alt='User Image'>
                                                </div>
                                            </td>
                                            <td>" . $row["nombre"] . "</td>
                                            <td>" . $row["apellido"] . "</td>
                                            <td>" . $row["documento"] . "</td>
                                            <td>" . $row["correo"] . "</td>
                                            <td>" . $row["rol"] . "</td>
                                            <td>" . $estado . "</td>
                                            <td class='text-center py-0 align-middle'>
                                                <div class='btn-group btn-group-sm'>" . $botones . "</div>
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