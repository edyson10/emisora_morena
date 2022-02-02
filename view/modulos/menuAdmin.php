<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="Administracion" class="brand-link">
        <img src="view/presentacion/admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">EMS 98.2</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <?php 
                    if (empty($_SESSION['imagen']) || $_SESSION['imagen'] == NULL || empty($_SESSION['ruta_imagen']) || $_SESSION['ruta_imagen'] == NULL) {
                        $imagen = "view/presentacion/admin/dist/img/user_1.png";
                    } else {
                        $imagen = "model/Archivos/imagenes/personal/" . $_SESSION['imagen'];
                    }
                ?>
                <img src="<?php echo $imagen ?>" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?php echo $_SESSION['nombre'] . " " . $_SESSION['apellido']; ?></a>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <?php
            if ($_SESSION['rol'] == "Administrador") { ?>
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Personal
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="Registrar-personal" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Registrar personal</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="Ver-personal" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Ver personal</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-bullhorn"></i>
                            <p>
                                Publicidad
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="Registrar-publicidad" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Registrar publicidad</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="Ver-publicidad" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Ver publicidad</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-edit"></i>
                            <p>
                                Noticias
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="Registrar-noticia" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Registrar noticia</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="Ver-noticia" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Ver noticia</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="Programacion-dia" class="nav-link">
                            <i class="nav-icon fas fa-columns"></i>
                            <p>
                                Programaci&oacute;n d&iacute;a
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="Vocabulario" class="nav-link">
                            <i class="nav-icon fas fa-angry"></i>
                            <p>
                                Vocabulario
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="Ver-correo" class="nav-link">
                            <i class="nav-icon fas fa-calendar-check"></i>
                            <p>
                                Contacto
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="Documentacion" class="nav-link">
                            <i class="nav-icon fas fa-folder"></i>
                            <p>
                                Documentos
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="Ver-pqrs" class="nav-link">
                            <i class="nav-icon fas fa-columns"></i>
                            <p>
                                PQRS
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="Comentarios" class="nav-link">
                            <i class="nav-icon fas fa-pen"></i>
                            <p>
                                Comentarios
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="Rol" class="nav-link">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Rol
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="Sesion" class="nav-link">
                            <i class="nav-icon fas fa-lock"></i>
                            <p>
                                Sesiones
                            </p>
                        </a>
                    </li>
                </ul>
            <?php } else if ($_SESSION['rol'] == "Locutor") { ?>
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-edit"></i>
                            <p>
                                Noticias
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="Registrar-noticia" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Registrar noticia</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="Ver-noticia" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Ver noticia</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-bullhorn"></i>
                            <p>
                                Publicidad
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="Registrar-publicidad" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Registrar publicidad</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="Ver-publicidad" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Ver publicidad</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="Programacion-dia" class="nav-link">
                            <i class="nav-icon fas fa-columns"></i>
                            <p>
                                Programaci&oacute;n d&iacute;a
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="Comentarios" class="nav-link">
                            <i class="nav-icon fas fa-pen"></i>
                            <p>
                                Comentarios
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="Vocabulario" class="nav-link">
                            <i class="nav-icon fas fa-angry"></i>
                            <p>
                                Vocabulario
                            </p>
                        </a>
                    </li>
                </ul>
            <?php } ?>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>