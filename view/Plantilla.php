<?php
if (isset($_GET["ubicacion"])) {
    if (
        $_GET["ubicacion"] == "Inicio" || $_GET["ubicacion"] == "Nosotros" || $_GET["ubicacion"] == "Contactanos"
        || $_GET["ubicacion"] == "PQRS" || $_GET["ubicacion"] == "Noticias" || $_GET["ubicacion"] == "Publicidad"
    ) { ?>
        <!DOCTYPE html>
        <html lang="es">

        <head>
            <meta charset="UTF-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <meta http-equiv="X-UA-Compatible" content="ie=edge" />
            <title>EMS 98.2</title>
            <!-- Icono pagina -->
            <link rel="icon" href="view/presentacion/img/logoemisora.png" sizes="16x16" />
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" />
            <link rel="stylesheet" href="view/presentacion/css/all.min.css" />
            <link rel="stylesheet" href="view/presentacion/css/bootstrap.min.css" />
            <link rel="stylesheet" href="view/presentacion/css/templatemo-style.css" />
            <link rel="stylesheet" type="text/css" href="view/presentacion/slick/slick.css" />
            <link rel="stylesheet" type="text/css" href="view/presentacion/slick/slick-theme.css" />
            <!-- =========== Sweetalert2 ============ -->
            <link rel="stylesheet" type="text/css" href="view/presentacion/css/sweetalert2.min.css" />
            <!-- Slick -->
            <link rel="stylesheet" type="text/css" href="view/presentacion/slick/slick.css" />
            <link rel="stylesheet" type="text/css" href="view/presentacion/slick/slick-theme.css" />
            <link rel="stylesheet" href="view/presentacion/css/estilo.css" />
            <!-- Font Awesome -->
            <link rel="stylesheet" href="view/presentacion/admin/plugins/fontawesome-free/css/all.min.css">
            <link rel="stylesheet" type="text/css" href="view/presentacion/slick/slick.css" />
        </head>

        <?php
        include_once 'model/conexion.php';
        include "modulos/navegacion/" . $_GET["ubicacion"] . ".php";
        include_once "modulos/footer.php";
        ?>
        <script src="view/presentacion/js/jquery.min.js"></script>
        <script src="view/presentacion/js/parallax.min.js"></script>
        <script src="view/presentacion/js/bootstrap.min.js"></script>
        <script src="view/presentacion/slick/slick.min.js"></script>
        <!-- jquery-validation -->
        <script src="view/presentacion/admin/plugins/jquery-validation/jquery.validate.min.js"></script>
        <script src="view/presentacion/admin/plugins/jquery-validation/additional-methods.min.js"></script>

        <script src="view/presentacion/js/alertas.js"></script>
        <script src="view/presentacion/js/sweetalert2.min.js"></script>
        <script src="view/presentacion/js/correo.js"></script>

        <script src="view/presentacion/js/registrar.js"></script>
        <script src="view/presentacion/js/eliminar.js"></script>
        <script src="view/presentacion/js/ver.js"></script>
        
        <script>
            $(function() {
                $('.tabgroup > div').hide();
                $('.tabgroup > div:first-of-type').show();
                $('.tabs a').click(function(e) {
                    e.preventDefault();
                    var $this = $(this),
                        tabgroup = '#' + $this.parents('.tabs').data('tabgroup'),
                        others = $this.closest('li').siblings().children('a'),
                        target = $this.attr('href');
                    others.removeClass('active');
                    $this.addClass('active');
                    $(tabgroup).children('div').hide();
                    $(target).show();

                    // Scroll to tab content (for mobile)
                    if ($(window).width() < 992) {
                        $('html, body').animate({
                            scrollTop: $("#first-tab-group").offset().top
                        }, 200);
                    }
                })

                $('.tm-carousel').slick({
                    dots: true,
                    infinite: false,
                    arrows: false,
                    speed: 300,
                    slidesToShow: 3,
                    slidesToScroll: 2,
                    responsive: [{
                            breakpoint: 1024,
                            settings: {
                                arrows: false,
                                slidesToShow: 2,
                                slidesToScroll: 1,
                                infinite: true,
                                dots: true
                            }
                        },
                        {
                            breakpoint: 600,
                            settings: {
                                arrows: false,
                                slidesToShow: 1,
                                slidesToScroll: 1
                            }
                        },
                        {
                            breakpoint: 480,
                            settings: {
                                arrows: false,
                                slidesToShow: 1,
                                slidesToScroll: 1
                            }
                        }
                        // You can unslick at a given breakpoint now by adding:
                        // settings: "unslick"
                        // instead of a settings object
                    ]
                });
            });
        </script>
        <!-- Slick -->
        <script src="view/presentacion/slick/slick.min.js"></script>
        <script>
            $(function() {
                $('.tabgroup > div').hide();
                $('.tabgroup > div:first-of-type').show();
                $('.tabs a').click(function(e) {
                    e.preventDefault();
                    var $this = $(this),
                        tabgroup = '#' + $this.parents('.tabs').data('tabgroup'),
                        others = $this.closest('li').siblings().children('a'),
                        target = $this.attr('href');
                    others.removeClass('active');
                    $this.addClass('active');
                    $(tabgroup).children('div').hide();
                    $(target).show();

                    // Scroll to tab content (for mobile)
                    if ($(window).width() < 992) {
                        $('html, body').animate({
                            scrollTop: $("#first-tab-group").offset().top
                        }, 200);
                    }
                })

                $('.tm-carousel').slick({
                    dots: true,
                    infinite: false,
                    arrows: false,
                    speed: 300,
                    slidesToShow: 3,
                    slidesToScroll: 2,
                    responsive: [{
                            breakpoint: 1024,
                            settings: {
                                arrows: false,
                                slidesToShow: 2,
                                slidesToScroll: 1,
                                infinite: true,
                                dots: true
                            }
                        },
                        {
                            breakpoint: 600,
                            settings: {
                                arrows: false,
                                slidesToShow: 1,
                                slidesToScroll: 1
                            }
                        },
                        {
                            breakpoint: 480,
                            settings: {
                                arrows: false,
                                slidesToShow: 1,
                                slidesToScroll: 1
                            }
                        }
                        // You can unslick at a given breakpoint now by adding:
                        // settings: "unslick"
                        // instead of a settings object
                    ]
                });
            });
        </script>
        <script>
            let image = document.querySelector('.image');
            let select = document.getElementById('effect');

            select.addEventListener('change', function(e) {
              image.className = `image ${this.value}`;
            });
          </script>
        </body>

        </html>
    <?php } else if ($_GET["ubicacion"] == "Privado" || $_GET["ubicacion"] == "Recuperar-contraseña") {
        include_once 'model/conexion.php';
        include "modulos/navegacion/" . $_GET["ubicacion"] . ".php";
    } else if (
        $_GET["ubicacion"] == "Administracion" || $_GET["ubicacion"] == "Documentacion"  ||  $_GET["ubicacion"] == "Programacion-dia" 
        || $_GET["ubicacion"] == "Registrar-noticia" || $_GET["ubicacion"] == "Registrar-personal" || $_GET["ubicacion"] == "Registrar-publicidad" 
        || $_GET["ubicacion"] == "Rol" || $_GET["ubicacion"] == "Salir" || $_GET["ubicacion"] == "Sesion" || $_GET["ubicacion"] == "Ver-correo" 
        || $_GET["ubicacion"] == "Ver-noticia" || $_GET["ubicacion"] == "Ver-personal"|| $_GET["ubicacion"] == "Ver-publicidad" 
        || $_GET["ubicacion"] == "Ver-pqrs" || $_GET["ubicacion"] == "Vocabulario" || $_GET["ubicacion"] == "Comentarios"
    ) { ?>
        <!DOCTYPE html>
        <html lang="es">

        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>EMS 98.2 | Privado</title>
            <!-- Icono pagina -->
            <link rel="icon" href="view/presentacion/img/logoemisora.png" sizes="16x16" />
            <!-- Google Font: Source Sans Pro -->
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
            <!-- Font Awesome -->
            <link rel="stylesheet" href="view/presentacion/admin/plugins/fontawesome-free/css/all.min.css">
            <!-- Ionicons -->
            <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
            <!-- Tempusdominus Bootstrap 4 -->
            <link rel="stylesheet" href="view/presentacion/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
            <!-- iCheck -->
            <link rel="stylesheet" href="view/presentacion/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
            <!-- JQVMap -->
            <link rel="stylesheet" href="view/presentacion/admin/plugins/jqvmap/jqvmap.min.css">
            <!-- Theme style -->
            <link rel="stylesheet" href="view/presentacion/admin/dist/css/adminlte.min.css">
            <!-- overlayScrollbars -->
            <link rel="stylesheet" href="view/presentacion/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
            <!-- Daterange picker -->
            <link rel="stylesheet" href="view/presentacion/admin/plugins/daterangepicker/daterangepicker.css">
            <!-- summernote -->
            <link rel="stylesheet" href="view/presentacion/admin/plugins/summernote/summernote-bs4.min.css">
            <!-- =========== Sweetalert2 ============ -->
            <link rel="stylesheet" type="text/css" href="view/presentacion/css/sweetalert2.min.css" />
            <!-- DataTables -->
            <link rel="stylesheet" href="view/presentacion/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
            <link rel="stylesheet" href="view/presentacion/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
            <link rel="stylesheet" href="view/presentacion/admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

        </head>

        <body class="hold-transition sidebar-mini layout-fixed">
            <div class="wrapper">
                <?php
                include_once 'model/conexion.php';
                session_start();
                include "modulos/header.php";
                include "modulos/menuAdmin.php";
                if (empty($_SESSION['rol'])) {
                    header("Location: Privado");
                }
                include "modulos/navegacion/" . $_GET["ubicacion"] . ".php";
                include "modulos/footerAdmin.php";
                ?>
            </div>
            <!-- ./wrapper -->
            <!-- jQuery -->
            <script src="view/presentacion/admin/plugins/jquery/jquery.min.js"></script>
            <!-- jQuery UI 1.11.4 -->
            <script src="view/presentacion/admin/plugins/jquery-ui/jquery-ui.min.js"></script>
            <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
            <script>
                $.widget.bridge('uibutton', $.ui.button)
            </script>
            <!-- Bootstrap 4 -->
            <script src="view/presentacion/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
            <!-- ChartJS -->
            <script src="view/presentacion/admin/plugins/chart.js/Chart.min.js"></script>
            <!-- Sparkline -->
            <script src="view/presentacion/admin/plugins/sparklines/sparkline.js"></script>
            <!-- JQVMap -->
            <script src="view/presentacion/admin/plugins/jqvmap/jquery.vmap.min.js"></script>
            <script src="view/presentacion/admin/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
            <!-- jQuery Knob Chart -->
            <script src="view/presentacion/admin/plugins/jquery-knob/jquery.knob.min.js"></script>
            <!-- daterangepicker -->
            <script src="view/presentacion/admin/plugins/moment/moment.min.js"></script>
            <script src="view/presentacion/admin/plugins/daterangepicker/daterangepicker.js"></script>
            <!-- Tempusdominus Bootstrap 4 -->
            <script src="view/presentacion/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
            <!-- Summernote -->
            <script src="view/presentacion/admin/plugins/summernote/summernote-bs4.min.js"></script>
            <!-- overlayScrollbars -->
            <script src="view/presentacion/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
            <!-- AdminLTE App -->
            <script src="view/presentacion/admin/dist/js/adminlte.js"></script>
            <!-- AdminLTE for demo purposes -->
            <script src="view/presentacion/admin/dist/js/demo.js"></script>
            <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
            <script src="view/presentacion/admin/dist/js/pages/dashboard.js"></script>
            <!-- jquery-validation -->
            <script src="view/presentacion/admin/plugins/jquery-validation/jquery.validate.min.js"></script>
            <script src="view/presentacion/admin/plugins/jquery-validation/additional-methods.min.js"></script>
            <!-- DataTables  & Plugins -->
            <script src="view/presentacion/admin/plugins/datatables/jquery.dataTables.min.js"></script>
            <script src="view/presentacion/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
            <script src="view/presentacion/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
            <script src="view/presentacion/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
            <script src="view/presentacion/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
            <script src="view/presentacion/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
            <script src="view/presentacion/admin/plugins/jszip/jszip.min.js"></script>
            <script src="view/presentacion/admin/plugins/pdfmake/pdfmake.min.js"></script>
            <script src="view/presentacion/admin/plugins/pdfmake/vfs_fonts.js"></script>
            <script src="view/presentacion/admin/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
            <script src="view/presentacion/admin/plugins/datatables-buttons/js/buttons.print.min.js"></script>
            <script src="view/presentacion/admin/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
            <!-- date-range-picker -->
            <script src="view/presentacion/admin/plugins/daterangepicker/daterangepicker.js"></script>
            <!-- bs-custom-file-input -->
            <script src="view/presentacion/admin/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>

            <script src="view/presentacion/js/alertas.js"></script>
            <script src="view/presentacion/js/sweetalert2.min.js"></script>

            <script src="view/presentacion/js/registrar.js"></script>
            <script src="view/presentacion/js/eliminar.js"></script>
            <!--<script src="view/presentacion/js/app.js"></script>-->
            <script src="view/presentacion/js/ver.js"></script>
            <script>
                $(function() {
                    //Timepicker
                    $('#timepicker').datetimepicker({
                        format: 'LT'
                    })
                });
            </script>
            <script>
                $(function() {
                    bsCustomFileInput.init();
                });
            </script>
            <!-- Page specific script -->
            <script>
                $(function() {
                    $("#example1").DataTable({
                        "responsive": true,
                        "lengthChange": false,
                        "autoWidth": false,
                        "buttons": ["pdf"]
                    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
                    $('#example2').DataTable({
                        "paging": true,
                        "lengthChange": false,
                        "searching": false,
                        "ordering": true,
                        "info": true,
                        "autoWidth": false,
                        "responsive": true,
                    });
                });
            </script>
        </body>

        </html>
<?php } else {
        header('location: Inicio');
    }
} else {
    header('location: Inicio');
}
