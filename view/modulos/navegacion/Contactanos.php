<body id="servicesPage">
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

      <!-- Testimonials header -->
      <section class="row" id="tmServices">
        <div class="col-12">
          <div class="parallax-window tm-services-parallax-header tm-testimonials-parallax-header" data-parallax="scroll" data-z-index="101" data-image-src="view/presentacion/img/28.jpg">
            <div class="tm-bg-black-transparent text-center tm-services-header tm-testimonials-header">
              <h2 class="text-uppercase tm-services-page-title tm-testimonials-page-title">Contacto</h2>
              <p class="tm-services-description mb-0 small">Labateca, Norte de Santander</p>
            </div>
          </div>
        </div>
      </section>

      <section class="row" id="tmHome">
        <div class="col-12 tm-home-container">
          <div class="col-lg-12 tm-contact-col-right">
              <div class="tm-bg-white-transparent tm-contact-text">
                  <h3 class="tm-service-tab-title">Puedes enviarnos un correo electrónico</h3>
                      <div id="list-example" class="list-group">
                      <form method="POST" id="FormEnviarCorreo" name="FormEnviarCorreo" class="tm-bg-white tm-contact-form" enctype="multipart/form-data">
                        <div class="form-group">
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlInput1">Correo electrónico remitente</label>
                          <input type="email" id="contact_email" name="contact_email" class="form-control rounded-0 border-top-0 border-right-0 border-left-0" placeholder="Correo">
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlInput1">Asunto</label>
                          <input rows="text" id="contact_asunt" name="contact_asunt" class="form-control rounded-0 border-top-0 border-right-0 border-left-0" placeholder="Asunto"/>
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlInput1">Mensaje</label>
                          <textarea rows="6" id="contact_message" name="contact_message" class="form-control rounded-0 border-top-0 border-right-0 border-left-0" placeholder="Mensaje"></textarea>
                        </div>
                        <div class="text-right">
                          <button type="button" class="btn btn-outline-primary">Enviar</button>
                        </div>
                      </form>
                      </div>
              </div>
          </div>
        </div>
      </section>

      <!-- Call to Action -->
      <section class="row tm-testimonials-cta" id="tmCallToAction">
        <div class="col-lg-12 tm-call-to-action-col">
          <!--<img src="view/presentacion/img/call-to-action-3.jpg" alt="Image" class="img-fluid tm-call-to-action-image" />-->
          <div class="tm-bg-white tm-call-to-action-text text-center">
            <h2 class="tm-call-to-action-title">Donde puedes encontrarnos</h2>
            <p class="tm-call-to-action-description">
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15829.91903058413!2d-72.4937971!3d7.2998713!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5aaa0be098b03b47!2sEMISORA%20COMUNITARIA%20MORENA%20STEREO!5e0!3m2!1ses-419!2sco!4v1621087920719!5m2!1ses-419!2sco" width="680" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </p>
            <!--
            <form action="#" method="get" class="tm-call-to-action-form">
              <input name="email" type="email" class="tm-email-input" id="email" placeholder="Email" />
              <button type="submit" class="btn btn-secondary">Get Updates</button>
            </form>-->
          </div>
        </div>
      </section>
      <?php include "view/modulos/footer.php"; ?>
    </div>
    <!-- .container-fluid -->
  </div>
</body>

</html>