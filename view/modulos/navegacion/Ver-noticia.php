<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Ver noticias</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="Administracion">Inicio</a></li>
                        <li class="breadcrumb-item active">Ver noticias</li>
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
                            <h3 class="card-title">Noticias registrados</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered ">
                                <thead class="bg-info">
                                    <tr>
                                        <th>ID</th>
                                        <th>Titulo</th>
                                        <th>descripci&oacute;n</th>
                                        <th>Fecha</th>
                                        <th>Lugar</th>
                                        <th>Link</th>
                                        <th>Acci&oacute;n</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query = $conexion->query("SELECT * FROM noticia");
                                    while ($row = mysqli_fetch_array($query)) {
                                        $botones = "<a class='btn btn-danger' onclick='eliminarNoticia(" . $row["id"] . ")'><i class='fas fa-trash'></i></a>";
                                        echo "<tr>
                                            <td>" . $row["id"] . "</td>
                                            <td>" . utf8_encode($row["titulo"]) . "</td>
                                            <td>" . utf8_encode($row["descripcion"]) . "</td>
                                            <td>" . $row["fecha"] . "</td>
                                            <td>" . utf8_encode($row["lugar"]) . "</td>
                                            <td>" . utf8_encode($row["link"]) . "</td>
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