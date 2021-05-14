<body id="servicesPage">
  <div class="parallax-window" data-parallax="scroll" data-image-src="view/presentacion/img/bg-01.jpg">
    <div class="container-fluid">
      <div class="row tm-brand-row">
        <div class="col-lg-4 col-11">
          <div class="tm-brand-container tm-bg-white-transparent">
            <i class="fas fa-2x fa-pen tm-brand-icon"></i>
            <div class="tm-brand-texts">
              <h1 class="text-uppercase tm-brand-name">Parallo</h1>
              <p class="small">new app landing page</p>
            </div>
          </div>
        </div>
        <?php include "view/modulos/menu.php"; ?>
      </div>

      <!-- Testimonials header -->
      <section class="row" id="tmServices">
        <div class="col-12">
          <div class="parallax-window tm-services-parallax-header tm-testimonials-parallax-header" data-parallax="scroll" data-z-index="101" data-image-src="view/presentacion/img/people.jpg">

            <div class="tm-bg-black-transparent text-center tm-services-header tm-testimonials-header">
              <h2 class="text-uppercase tm-services-page-title tm-testimonials-page-title">Contact</h2>
              <p class="tm-services-description mb-0 small">
                Parallax movement background page "people" for contact page
              </p>
            </div>
          </div>
        </div>
      </section>

      <section class="row tm-contact-row">
        <div class="col-lg-6 tm-contact-col-left">
          <form action="#" method="POST" id="tmContactForm" class="tm-bg-black-transparent tm-contact-form">
            <div class="form-group">
              <input type="text" id="contact_name" name="contact_name" class="form-control rounded-0 border-top-0 border-right-0 border-left-0" placeholder="Name" required="">
            </div>
            <div class="form-group">
              <input type="email" id="contact_email" name="contact_email" class="form-control rounded-0 border-top-0 border-right-0 border-left-0" placeholder="Email" required="">
            </div>
            <div class="form-group">
              <textarea rows="6" id="contact_message" name="contact_message" class="form-control rounded-0 border-top-0 border-right-0 border-left-0" placeholder="Message" required=""></textarea>
            </div>
            <div class="text-right">
              <button type="submit" class="btn btn-primary tm-btn-submit rounded-0">
                Submit
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
        <div class="col-12 tm-call-to-action-col">
          <img src="view/presentacion/img/call-to-action-3.jpg" alt="Image" class="img-fluid tm-call-to-action-image" />
          <div class="tm-bg-white tm-call-to-action-text">
            <h2 class="tm-call-to-action-title">Vivamus sollicitudin tellus</h2>
            <p class="tm-call-to-action-description">
              Maecenas maximus tellus in dolor auctor tristique. Nam hendrerit
              posuere laoreet. Aliquam erat volutpat. Nulla eros est,
              imperdiet vel feugiat non, ullamcorper mattis nulla.
            </p>
            <form action="#" method="get" class="tm-call-to-action-form">
              <input name="email" type="email" class="tm-email-input" id="email" placeholder="Email" />
              <button type="submit" class="btn btn-secondary">Get Updates</button>
            </form>
          </div>
        </div>
      </section>
    </div>
    <!-- .container-fluid -->
  </div>
</body>
</html>