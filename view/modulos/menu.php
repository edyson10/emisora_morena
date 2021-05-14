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
                                <a class="nav-link" href="Acerca">About</a>
                            </li>
                            <li class="nav-item">
                                <div class="tm-nav-link-highlight"></div>
                                <a class="nav-link" href="Servicio">Services</a>
                            </li>
                            <li class="nav-item green-highlight">
                                <div class="tm-nav-link-highlight"></div>
                                <a class="nav-link" href="Testimonio">Testimonials </a>
                            </li>
                            <li class="nav-item">
                                <div class="tm-nav-link-highlight"></div>
                                <a class="nav-link" href="Contacto">Contact</a>
                            </li>
                        <?php } else if ($_GET["ubicacion"] == "Acerca") { ?>
                            <li class="nav-item">
                                <div class="tm-nav-link-highlight"></div>
                                <a class="nav-link" href="Inicio">Home</a>
                            </li>
                            <li class="nav-item green-highlight active">
                                <div class="tm-nav-link-highlight"></div>
                                <a class="nav-link" href="Acerca">Acerca <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <div class="tm-nav-link-highlight"></div>
                                <a class="nav-link" href="Servicio">Services</a>
                            </li>
                            <li class="nav-item green-highlight">
                                <div class="tm-nav-link-highlight"></div>
                                <a class="nav-link" href="Testimonio">Testimonials</a>
                            </li>
                            <li class="nav-item">
                                <div class="tm-nav-link-highlight"></div>
                                <a class="nav-link" href="Contacto">Contact</a>
                            </li>
                        <?php } else if ($_GET["ubicacion"] == "Servicio") { ?>
                            <li class="nav-item">
                                <div class="tm-nav-link-highlight"></div>
                                <a class="nav-link" href="Inicio">Home</a>
                            </li>
                            <li class="nav-item">
                                <div class="tm-nav-link-highlight"></div>
                                <a class="nav-link" href="Acerca">About</a>
                            </li>
                            <li class="nav-item green-highlight active">
                                <div class="tm-nav-link-highlight"></div>
                                <a class="nav-link" href="Servicio">Services <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item green-highlight">
                                <div class="tm-nav-link-highlight"></div>
                                <a class="nav-link" href="Testimonio">Testimonials</a>
                            </li>
                            <li class="nav-item">
                                <div class="tm-nav-link-highlight"></div>
                                <a class="nav-link" href="Contacto">Contact</a>
                            </li>
                        <?php } else if ($_GET["ubicacion"] == "Testimonio") { ?>
                            <li class="nav-item">
                                <div class="tm-nav-link-highlight"></div>
                                <a class="nav-link" href="Inicio">Home</a>
                            </li>
                            <li class="nav-item">
                                <div class="tm-nav-link-highlight"></div>
                                <a class="nav-link" href="Acerca">About</a>
                            </li>
                            <li class="nav-item">
                                <div class="tm-nav-link-highlight"></div>
                                <a class="nav-link" href="Servicio">Services</a>
                            </li>
                            <li class="nav-item green-highlight active">
                                <div class="tm-nav-link-highlight"></div>
                                <a class="nav-link" href="Testimonio">Testimonials <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <div class="tm-nav-link-highlight"></div>
                                <a class="nav-link" href="Contacto">Contact</a>
                            </li>
                        <?php } else if ($_GET["ubicacion"] == "Contacto") { ?>
                            <li class="nav-item">
                                <div class="tm-nav-link-highlight"></div>
                                <a class="nav-link" href="Inicio">Home</a>
                            </li>
                            <li class="nav-item">
                                <div class="tm-nav-link-highlight"></div>
                                <a class="nav-link" href="Acerca">About</a>
                            </li>
                            <li class="nav-item">
                                <div class="tm-nav-link-highlight"></div>
                                <a class="nav-link" href="Servicio">Services</a>
                            </li>
                            <li class="nav-item green-highlight">
                                <div class="tm-nav-link-highlight"></div>
                                <a class="nav-link" href="Testimonio">Testimonials</a>
                            </li>
                            <li class="nav-item green-highlight active">
                                <div class="tm-nav-link-highlight"></div>
                                <a class="nav-link" href="Contacto">Contact <span class="sr-only">(current)</span></a>
                            </li>
                    <?php }
                    } ?>
                </ul>
            </div>
        </nav>
    </div>
</div>