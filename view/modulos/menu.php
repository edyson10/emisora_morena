<div class="col-lg-8 col-1">
    <div class="tm-nav">
        <nav class="navbar navbar-expand-lg navbar-light tm-bg-white-transparent tm-navbar">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <?php
                    if (isset($_GET["ubicacion"])) {
                        if ($_GET["ubicacion"] == "Inicio") { ?>
                            <li class="nav-item active">
                                <div class="tm-nav-link-highlight"></div>
                                <a class="nav-link" href="Inicio">Inicio <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <div class="tm-nav-link-highlight"></div>
                                <a class="nav-link" href="sobreNosotros">Sobre Nosotros</a>
                            </li>
                            <li class="nav-item">
                                <div class="tm-nav-link-highlight"></div>
                                <a class="nav-link" href="Documentos">Documentos</a>
                            </li>
                            <li class="nav-item green-highlight">
                                <div class="tm-nav-link-highlight"></div>
                                <a class="nav-link" href="Galeria">Galeria </a>
                            </li>
                            <li class="nav-item">
                                <div class="tm-nav-link-highlight"></div>
                                <a class="nav-link" href="Contactanos">Contáctanos</a>
                            </li>
                        <?php } else if ($_GET["ubicacion"] == "sobreNosotros") { ?>
                            <li class="nav-item">
                                <div class="tm-nav-link-highlight"></div>
                                <a class="nav-link" href="Inicio">Inicio</a>
                            </li>
                            <li class="nav-item green-highlight active">
                                <div class="tm-nav-link-highlight"></div>
                                <a class="nav-link" href="sobreNosotros">Sobre Nosotros <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <div class="tm-nav-link-highlight"></div>
                                <a class="nav-link" href="Documentos">Documentos</a>
                            </li>
                            <li class="nav-item green-highlight">
                                <div class="tm-nav-link-highlight"></div>
                                <a class="nav-link" href="Galeria">Galeria</a>
                            </li>
                            <li class="nav-item">
                                <div class="tm-nav-link-highlight"></div>
                                <a class="nav-link" href="Contactanos">Contáctanos</a>
                            </li>
                        <?php } else if ($_GET["ubicacion"] == "Documentos") { ?>
                            <li class="nav-item">
                                <div class="tm-nav-link-highlight"></div>
                                <a class="nav-link" href="Inicio">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <div class="tm-nav-link-highlight"></div>
                                <a class="nav-link" href="sobreNosotros">Sobre Nosotros</a>
                            </li>
                            <li class="nav-item green-highlight active">
                                <div class="tm-nav-link-highlight"></div>
                                <a class="nav-link" href="Documentos">Documentos <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item green-highlight">
                                <div class="tm-nav-link-highlight"></div>
                                <a class="nav-link" href="Galeria">Galeria</a>
                            </li>
                            <li class="nav-item">
                                <div class="tm-nav-link-highlight"></div>
                                <a class="nav-link" href="Contactanos">Contáctanos</a>
                            </li>
                        <?php } else if ($_GET["ubicacion"] == "Galeria") { ?>
                            <li class="nav-item">
                                <div class="tm-nav-link-highlight"></div>
                                <a class="nav-link" href="Inicio">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <div class="tm-nav-link-highlight"></div>
                                <a class="nav-link" href="sobreNosotros">Sobre Nosotros</a>
                            </li>
                            <li class="nav-item">
                                <div class="tm-nav-link-highlight"></div>
                                <a class="nav-link" href="Documentos">Documentos</a>
                            </li>
                            <li class="nav-item green-highlight active">
                                <div class="tm-nav-link-highlight"></div>
                                <a class="nav-link" href="Galeria">Galeria <span class="sr-only">(current)</span></a>
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
                                <a class="nav-link" href="sobreNosotros">Sobre Nosotros</a>
                            </li>
                            <li class="nav-item">
                                <div class="tm-nav-link-highlight"></div>
                                <a class="nav-link" href="Documentos">Documentos</a>
                            </li>
                            <li class="nav-item green-highlight">
                                <div class="tm-nav-link-highlight"></div>
                                <a class="nav-link" href="Galeria">Galeria</a>
                            </li>
                            <li class="nav-item green-highlight active">
                                <div class="tm-nav-link-highlight"></div>
                                <a class="nav-link" href="Contactanos">Contáctanos <span class="sr-only">(current)</span></a>
                            </li>
                    <?php }
                    } ?>
                </ul>
            </div>
        </nav>
    </div>
</div>