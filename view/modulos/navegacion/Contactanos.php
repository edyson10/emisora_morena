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
          <div class="parallax-window tm-services-parallax-header tm-testimonials-parallax-header" data-parallax="scroll" data-z-index="101" data-image-src="view/presentacion/img/people.jpg">

            <div class="tm-bg-black-transparent text-center tm-services-header tm-testimonials-header">
              <h2 class="text-uppercase tm-services-page-title tm-testimonials-page-title">Contacto</h2>
              <p class="tm-services-description mb-0 small">
                Parallax movement background page "people" for contact page
              </p>
            </div>
          </div>
        </div>
      </section>

      <section class="row tm-contact-row">
        <div class="col-lg-6 tm-contact-col-left">
          <form method="POST" id="FormEnviarCorreo" name="FormEnviarCorreo" class="tm-bg-black-transparent tm-contact-form">
            <div class="form-group">
              <input type="text" id="contact_name" name="contact_name" class="form-control rounded-0 border-top-0 border-right-0 border-left-0" placeholder="Nombre completo">
            </div>
            <div class="form-group">
              <input type="email" id="contact_email" name="contact_email" class="form-control rounded-0 border-top-0 border-right-0 border-left-0" placeholder="Correo">
            </div>
            <div class="form-group">
              <input rows="text" id="contact_asunt" name="contact_asunt" class="form-control rounded-0 border-top-0 border-right-0 border-left-0" placeholder="Asunto"/>
            </div>
            <div class="form-group">
              <textarea rows="6" id="contact_message" name="contact_message" class="form-control rounded-0 border-top-0 border-right-0 border-left-0" placeholder="Mensaje"></textarea>
            </div>
            <div class="text-right">
              <button type="submit" class="btn btn-primary tm-btn-submit rounded-0">
                Enviar
              </button>
            </div>
          </form>
        </div>
        <div class="col-lg-6 tm-contact-col-right">
          <div class="tm-bg-black-transparent tm-contact-text">

            <i class="mx-auto mb-5 fas fa-3x fa-address-card tm-app-feature-icon"></i>

            <h3 class="tm-service-tab-title">Maecenas in aliquam lorem</h3>
            <p class="tm-service-tab-p">
              Proin rutrum massa quis erat mollis iaculis. Vestibulum
              a risus ex. Nunc rhoncus, justo at blandit cursus, orci
              erat molestie felis, id ullamcorper mauris felis eu eros.
            </p>
            <p class="mb-0">
              Donec turpis augue, mollis eu erat in, posuere congue
              sapien. Maecenas facilisis dui sit amet ornare aliquam.
              Paesent malesuada mi a est pulvinar.
            </p>
          </div>
        </div>
      </section>

      <!-- Call to Action -->
      <section class="row tm-testimonials-cta" id="tmCallToAction">
        <div class="col-md-12 tm-call-to-action-col">
          <!--<img src="view/presentacion/img/call-to-action-3.jpg" alt="Image" class="img-fluid tm-call-to-action-image" />-->
          <div class="tm-bg-white tm-call-to-action-text text-center">
            <h2 class="tm-call-to-action-title">Donde puede encontrarnos</h2>
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