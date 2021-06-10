<body>
    <div class="parallax-window" data-parallax="scroll" data-image-src="view/presentacion/img/3.jpg">
        <div class="container-fluid">
            <div class="row tm-brand-row">
                <div class="col-lg-4 col-11">
                    <div class="tm-brand-container tm-bg-white-transparent">
                        <img src="view/presentacion/img/logoemisora.png" width="300" height="200">
                    </div>
                </div>
                <?php include "view/modulos/menu.php"; ?>
            </div>
            <section class="row" id="tmServices">
                <div class="col-12">
                    <div class="parallax-window tm-services-parallax-header tm-testimonials-parallax-header" data-parallax="scroll" data-z-index="101" data-image-src="view/presentacion/img/11.jpg">
                        <div class="tm-bg-black-transparent text-center tm-services-header tm-testimonials-header">
                            <h2 class="text-uppercase tm-services-page-title tm-testimonials-page-title">EMISORA MORENA ESTEREO </h2>
                            <p class="tm-services-description mb-0 small">
                                Labateca, Norte de Santander
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="row" id="tmHome">
                <div class="col-12 tm-home-container">
                    <div class="tm-home-right">
                        <img src="view/presentacion/img/mobile-screen.png" alt="App on Mobile mockup" />
                        <!--width="400" height="700" -->
                    </div>
                    <div class="col-lg-6 tm-contact-col-right">
                        <div class="tm-bg-white-transparent tm-contact-text">
                            <h3 class="tm-service-tab-title">PROGRAMACIÓN DEL DÍA</h3>
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
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Amanecer campesino</td>
                                            <td>6:00am</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Colegio al día</td>
                                            <td>8:00am</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Eucaristía</td>
                                            <td>9:00am</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td>Sobre Ruedas</td>
                                            <td>10:00am</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">5</th>
                                            <td>Musica Colombiana</td>
                                            <td>12:00pm</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">6</th>
                                            <td>Alcaldía Comunica</td>
                                            <td>4:00pm</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">7</th>
                                            <td>Eucaristía</td>
                                            <td>4:00pm</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Call to Action -->
            <section class="row" id="tmCallToAction">
                <div class="col-lg-12 tm-call-to-action-col">
                    <div class="tm-bg-white tm-call-to-action-text">
                        <h2 class="tm-call-to-action-title">Dejanos tu comentario</h2>
                        <form action="#" method="get" class="tm-call-to-action-form">
                            <input name="email" type="email" class="tm-email-input" id="email" placeholder="Tu opinión" />
                        </form>
                        <button type="submit" class="btn btn-secondary">Enviar</button>
                    </div>
                    <img src="view/presentacion/img/18.jpeg" width="400" height="400" />
                </div>
            </section>
            <?php include "view/modulos/footer.php";?>
        </div>
        <!-- .container-fluid -->
    </div>
</body>