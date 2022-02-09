<body id="servicesPage">
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

      <!-- Testimonials header -->
      <section class="row" id="tmServices">
        <div class="col-12">
          <div class="parallax-window tm-services-parallax-header tm-testimonials-parallax-header" data-parallax="scroll" data-z-index="101" data-image-src="view/presentacion/img/26.jpg">
            <div class="tm-bg-black-transparent text-center tm-services-header tm-testimonials-header">
              <h2 class="text-uppercase tm-services-page-title tm-testimonials-page-title">NOTICIAS</h2>
              <p class="tm-services-description mb-0 small">Labateca, Norte de Santander</p>
            </div>
          </div>
        </div>
      </section>

      <section class="row tm-testimonials-section">
        <div class="col-12 tm-carousel">
          <?php
          $query = $conexion->query("SELECT * FROM noticia ORDER BY id DESC LIMIT 9");
          while ($row = mysqli_fetch_array($query)) {
            if (empty($row[7]) || $row[7] == NULL) {
              $link = "";
            } else {
              $link = "<a style='color:#140494' href='" . $row[7] . "' target='_blank'>Ver más</a>";
            }

            if (empty($row[5]) || $row[5] == NULL || $row[5] == '0000-00-00') {
              $date = "";
            } else {
              $date = "<p><strong>Lugar y fecha:</strong></p><p class='tm-about-description'> En " . utf8_encode($row[6]) . ' el día ' . utf8_encode($row[5]) . "</p>";
            }

            echo " <div class='tm-bg-white-transparent tm-testimonial-box text-center'>
                    <div class='tm-person-img-container'>
                      <img src='model/" . $row[1] . "' alt='Image' class='img-fluid mx-auto' />
                    </div>
                    <h5 class='tm-about-name tm-uppercase' style='color:#000000'><strong>" . utf8_encode($row[3]) . "</strong></h5>
                    <p class='tm-about-description'>" . utf8_encode($row[4]) . "</p><br>
                    " . $link . $date . " 
                    </div>";
          }
          ?>
        </div>
      </section>
      <!-- Call to Action -->
    </div>
    <!-- .container-fluid -->
    <?php include "view/modulos/footer.php"; ?>
  </div>
</body>