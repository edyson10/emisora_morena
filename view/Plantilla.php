<?php
if (isset($_GET["ubicacion"])) {
    if (
        $_GET["ubicacion"] == "Inicio" || $_GET["ubicacion"] == "Nosotros" || $_GET["ubicacion"] == "Contactanos"
        || $_GET["ubicacion"] == "Documentos" || $_GET["ubicacion"] == "Galeria"
    ) { ?>
        <!DOCTYPE html>
        <html lang="es">

        <head>
            <meta charset="UTF-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <meta http-equiv="X-UA-Compatible" content="ie=edge" />
            <title>EMS 98.2</title>
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" />
            <link rel="stylesheet" href="view/presentacion/css/all.min.css" />
            <link rel="stylesheet" href="view/presentacion/css/bootstrap.min.css" />
            <link rel="stylesheet" href="view/presentacion/css/templatemo-style.css" />
            <link rel="stylesheet" type="text/css" href="view/presentacion/slick/slick.css" />
            <link rel="stylesheet" type="text/css" href="view/presentacion/slick/slick-theme.css" />
            <!-- =========== Sweetalert2 ============ -->
            <link rel="stylesheet" type="text/css" href="view/presentacion/css/sweetalert2.min.css" />
        </head>

        <?php
        include "modulos/navegacion/" . $_GET["ubicacion"] . ".php";
        include_once "modulos/footer.php";
        ?>
        <script src="view/presentacion/js/jquery.min.js"></script>
        <script src="view/presentacion/js/parallax.min.js"></script>
        <script src="view/presentacion/js/bootstrap.min.js"></script>
        <script src="view/presentacion/slick/slick.min.js"></script>

        <script src="view/presentacion/js/alertas.js"></script>
        <script src="view/presentacion/js/sweetalert2.min.js"></script>
        <script src="view/presentacion/js/correo.js"></script>

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
        </body>

        </html>
    <?php } else if ($_GET["ubicacion"] == "Privado") {
        include "modulos/navegacion/" . $_GET["ubicacion"] . ".php";
    } else if ($_GET["ubicacion"] == "Administracion") { ?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>AdminLTE 3 | Dashboard</title>

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
        </head>

        <body class="hold-transition sidebar-mini layout-fixed">
            <div class="wrapper">
                <?php 
                    include_once "modulos/header.php";
                    include_once "modulos/menuAdmin.php";
                ?>
            </div>
        </body>
<?php } else {
        header('location: Inicio');
    }
} else {
    header('location: Inicio');
}
