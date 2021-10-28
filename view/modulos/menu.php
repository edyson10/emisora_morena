<div class="col-lg-8 col-1">
    <div class="tm-nav">
        <nav class="navbar navbar-expand-lg navbar-light tm-bg-white-transparent tm-navbar ">
            <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <?php
                    if (isset($_GET["ubicacion"])) {
                        if ($_GET["ubicacion"] == "Inicio") { ?>
                            <li class="nav-item green-highlight active">
                                <div class="tm-nav-link-highlight"></div>
                                <a class="nav-link" href="Inicio">Inicio <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <div class="tm-nav-link-highlight"></div>
                                <a class="nav-link" href="Nosotros">Nosotros</a>
                            </li>
                            <li class="nav-item">
                                <div class="tm-nav-link-highlight"></div>
                                <a class="nav-link" href="PQRS">PQRS</a>
                            </li>
                            <li class="nav-item">
                                <div class="tm-nav-link-highlight"></div>
                                <a class="nav-link" href="Noticias">Noticias </a>
                            </li>
                            <li class="nav-item">
                                <div class="tm-nav-link-highlight"></div>
                                <a class="nav-link" href="Publicidad">Publicidad</a>
                            </li>
                            <li class="nav-item">
                                <div class="tm-nav-link-highlight"></div>
                                <a class="nav-link" href="Contactanos">Contáctanos</a>
                            </li>
                        <?php } else if ($_GET["ubicacion"] == "Nosotros") { ?>
                            <li class="nav-item">
                                <div class="tm-nav-link-highlight"></div>
                                <a class="nav-link" href="Inicio">Inicio</a>
                            </li>
                            <li class="nav-item green-highlight active">
                                <div class="tm-nav-link-highlight"></div>
                                <a class="nav-link" href="Nosotros">Nosotros <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <div class="tm-nav-link-highlight"></div>
                                <a class="nav-link" href="PQRS">PQRS</a>
                            </li>
                            <li class="nav-item">
                                <div class="tm-nav-link-highlight"></div>
                                <a class="nav-link" href="Noticias">Noticias</a>
                            </li>
                            <li class="nav-item">
                                <div class="tm-nav-link-highlight"></div>
                                <a class="nav-link" href="Publicidad">Publicidad</a>
                            </li>
                            <li class="nav-item">
                                <div class="tm-nav-link-highlight"></div>
                                <a class="nav-link" href="Contactanos">Contáctanos</a>
                            </li>
                        <?php } else if ($_GET["ubicacion"] == "PQRS") { ?>
                            <li class="nav-item">
                                <div class="tm-nav-link-highlight"></div>
                                <a class="nav-link" href="Inicio">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <div class="tm-nav-link-highlight"></div>
                                <a class="nav-link" href="Nosotros">Nosotros</a>
                            </li>
                            <li class="nav-item green-highlight active">
                                <div class="tm-nav-link-highlight"></div>
                                <a class="nav-link" href="PQRS">PQRS <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <div class="tm-nav-link-highlight"></div>
                                <a class="nav-link" href="Noticias">Noticias</a>
                            </li>
                            <li class="nav-item">
                                <div class="tm-nav-link-highlight"></div>
                                <a class="nav-link" href="Publicidad">Publicidad</a>
                            </li>
                            <li class="nav-item">
                                <div class="tm-nav-link-highlight"></div>
                                <a class="nav-link" href="Contactanos">Contáctanos</a>
                            </li>
                        <?php } else if ($_GET["ubicacion"] == "Noticias") { ?>
                            <li class="nav-item">
                                <div class="tm-nav-link-highlight"></div>
                                <a class="nav-link" href="Inicio">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <div class="tm-nav-link-highlight"></div>
                                <a class="nav-link" href="Nosotros">Nosotros</a>
                            </li>
                            <li class="nav-item">
                                <div class="tm-nav-link-highlight"></div>
                                <a class="nav-link" href="PQRS">PQRS</a>
                            </li>
                            <li class="nav-item green-highlight active">
                                <div class="tm-nav-link-highlight"></div>
                                <a class="nav-link" href="Noticias">Noticias <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <div class="tm-nav-link-highlight"></div>
                                <a class="nav-link" href="Publicidad">Publicidad</a>
                            </li>
                            <li class="nav-item">
                                <div class="tm-nav-link-highlight"></div>
                                <a class="nav-link" href="Contactanos">Contáctanos</a>
                            </li>
                        <?php } else if ($_GET["ubicacion"] == "Contactanos") { ?>
                            <li class="nav-item">
                                <div class="tm-nav-link-highlight"></div>
                                <a class="nav-link" href="Inicio">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <div class="tm-nav-link-highlight"></div>
                                <a class="nav-link" href="Nosotros">Nosotros</a>
                            </li>
                            <li class="nav-item">
                                <div class="tm-nav-link-highlight"></div>
                                <a class="nav-link" href="PQRS">PQRS</a>
                            </li>
                            <li class="nav-item">
                                <div class="tm-nav-link-highlight"></div>
                                <a class="nav-link" href="Noticias">Noticias</a>
                            </li>
                            <li class="nav-item">
                                <div class="tm-nav-link-highlight"></div>
                                <a class="nav-link" href="Publicidad">Publicidad</a>
                            </li>
                            <li class="nav-item green-highlight active">
                                <div class="tm-nav-link-highlight"></div>
                                <a class="nav-link" href="Contactanos">Contáctanos <span class="sr-only">(current)</span></a>
                            </li>
                    <?php } else if ($_GET["ubicacion"] == "Publicidad") { ?>
                            <li class="nav-item">
                                <div class="tm-nav-link-highlight"></div>
                                <a class="nav-link" href="Inicio">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <div class="tm-nav-link-highlight"></div>
                                <a class="nav-link" href="Nosotros">Nosotros</a>
                            </li>
                            <li class="nav-item">
                                <div class="tm-nav-link-highlight"></div>
                                <a class="nav-link" href="PQRS">PQRS</a>
                            </li>
                            <li class="nav-item">
                                <div class="tm-nav-link-highlight"></div>
                                <a class="nav-link" href="Noticias">Noticias</a>
                            </li>
                            <li class="nav-item green-highlight active">
                                <div class="tm-nav-link-highlight"></div>
                                <a class="nav-link" href="Publicidad">Publicidad <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <div class="tm-nav-link-highlight"></div>
                                <a class="nav-link" href="Noticias">Noticias</a>
                            </li>
                    <?php }
                    } ?>
                </ul>
            </div>
        </nav>
    </div>
</div>