<body>
    <div class="parallax-window" data-parallax="scroll" data-image-src="view/presentacion/img/3.jpg">
        <div class="container-fluid">
            <div class="row tm-brand-row">
                <div class="col-lg-4 col-11">
                    <div class="tm-brand-container">
                        <img src="view/presentacion/img/logoemisora.png" width="300" height="200">
                    </div>
                </div>
                <?php include "view/modulos/menu.php"; ?>
            </div>
            <section class="row" id="tmServices">
                <div class="col-12">
                    <div class="parallax-window tm-services-parallax-header tm-testimonials-parallax-header" data-parallax="scroll" data-z-index="101" data-image-src="view/presentacion/img/24.jpg">
                        <div class="tm-bg-black-transparent text-center tm-services-header tm-testimonials-header">
                            <h2 class="text-uppercase tm-services-page-title tm-testimonials-page-title">EMISORA MORENA ESTEREO </h2>
                            <p class="tm-services-description mb-0 small">
                                Labateca, Norte de Santander
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <!-- Inicio. radio hosting USAstreams.com html5 player -->
                        <!-- Licencia: GRATIS-XDF4543ERF -->
                        <iframe name="contenedorPlayer" class="cuadroBordeado" allow="autoplay" width="100%" height="110px" marginwidth=0 marginheight=0 hspace=0 vspace=0 frameborder=0 scrolling=no src="https://cp.usastreams.com/pr2g/APPlayerRadioHTML5.aspx?stream=http://node-29.zeno.fm/s87y2kpabnzuv?rj-ttl=5&rj-tok=AAABe6k2zlUAXNcr7lZNHpLKHg&fondo=05&formato=mpeg&color=14&titulo=2&autoStart=1&vol=5&tipo=13&nombre=Emisora+Morena+Stereo&botonPlay=1&imagen=https://i.postimg.cc/nLZbkX3C/logoemisora.png&server=http://node-29.zeno.fm/status.xslCHUMILLASmount=/s87y2kpabnzuvCHUMILLASrj-ttl=5&rj-tok=AAABe6k2zlUAXNcr7lZNHpLKHg"></iframe>
                        <!-- En players responsive puede modificar el weight a sus necesidades, Por favor no modifique el resto del codigo para poder seguir ofreciendo este servicio gratis  -->
                        <!-- Fin. USAstreams.com html5 player -->
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </section>

            <section class="row" id="tmHome">
                <div class="col-12 tm-home-container">
                    <div class="col-lg-6 tm-contact-col-right">
                        <div class="tm-bg-white-transparent tm-contact-text">
                            <h3 class="tm-service-tab-title">Programaci&oacute;n del d&iacute;a</h3>
                            <div id="list-example" class="list-group">
                                <table class="table">
                                    <thead class="table-primary">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Hora</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-light">
                                        <?php
                                        $query = $conexion->query("SELECT * FROM programacion WHERE DATE_FORMAT(fecha_hora, '%Y-%m-%d') = CURDATE() ORDER BY fecha_hora ASC");
                                        $id = 1;
                                        while ($row = mysqli_fetch_array($query)) {
                                            $horario = explode(" ", $row["fecha_hora"]);
                                            echo "<tr>
                                                    <th scope='row'>" . $id . "</th>
                                                    <td>" . $row["nombre"] . "</td>
                                                    <td>" . $horario[1] . "</td>
                                                </tr>";
                                            $id++;
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <div class="tm-home-right">
                            <div class="tm-bg-white-transparent tm-contact-text">
                                <h3 class="tm-service-tab-title">Comentarios</h3>
                                <div id="list-example" class="list-group">
                                    <table class="table">
                                        <thead class="table-primary">
                                            <tr>
                                                <th scope="col">Descripci&oacute;n</th>
                                            </tr>
                                        </thead>
                                        <tbody class="table-light">
                                            <?php
                                            $query = $conexion->query("SELECT * FROM comentario WHERE DATE_FORMAT(fecha_comentario, '%Y-%m-%d') = CURDATE() ORDER BY fecha_comentario ASC");
                                            $result = $conexion->query("SELECT * FROM vocabulario");
                                            for ($censuradas = array(); $row = $result->fetch_assoc(); $censuradas[] = $row['descripcion']);
                                            $partes = count($censuradas);
                                            $id = 1;
                                            while ($row = mysqli_fetch_array($query)) {
                                                $frasecompleta = utf8_encode($row['descripcion']);
                                                for ($i = 0; $i < $partes; $i++) {
                                                    if (strpos($frasecompleta, $censuradas[$i]) !== false) {
                                                        //Replazamos las prohibidas con ****
                                                        $frasecompleta = str_replace($censuradas[$i], ' **** ', $frasecompleta);
                                                    }
                                                }
                                                echo "<tr>
                                                    <td><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-person' viewBox='0 0 16 16'>
                                                    <path d='M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z'/>
                                                  </svg> " . $frasecompleta . "</td>
                                                </tr>";
                                                $id++;
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                </div>
            </section>

            <!-- Call to Action -->
            <section class="row" id="tmCallToAction">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="tm-call-to-action-col" style="padding-bottom: -200% !important">
                        <div class="tm-bg-white tm-call-to-action-text">
                            <h2 class="tm-call-to-action-title">Dejanos tu comentario</h2>
                            <form class="tm-call-to-action-form" method="POST" id="FormEnviarComentario" name="FormEnviarComentario">
                                <input type="text" class="tm-email-input" name="comentario" id="comentario" placeholder="Envia un comentario"/>
                                <button type="submit" class="btn btn-secondary">Enviar</button>
                            </form>
                        </div>
                        <img src="view/presentacion/img/18.jpeg" width="400" height="400" />
                    </div>
                </div>
                <div class="col-md-1"></div>

            </section>
        </div>
        <?php include "view/modulos/footer.php"; ?>
        <!-- .container-fluid -->
    </div>
</body>