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
              <h2 class="text-uppercase tm-services-page-title tm-testimonials-page-title">Publicidad</h2>
              <p class="tm-services-description mb-0 small">Labateca, Norte de Santander</p>
            </div>
          </div>
        </div>
      </section>

      <section class="row tm-testimonials-section">
        <div class="col-12 tm-carousel">
          <?php
          $query = $conexion->query("SELECT * FROM publicidad ORDER BY id DESC LIMIT 9");
          while ($row = mysqli_fetch_array($query)) {
            if (empty($row['link_facebook']) || $row['link_facebook'] == NULL) {
              $linkFacebook = "";
            } else {
              $linkFacebook = "<a href='" . $row['link_facebook'] . "' target='_blank'><i class='fab fa-facebook-square'></i> Facebook</a>";
            }

            if (empty($row['link_instagram']) || $row['link_instagram'] == NULL) {
              $linkInstagram = "";
            } else {
              $linkInstagram = "<a href='" . $row['link_instagram'] . "' target='_blank'><i class='fab fa-instagram-square'></i> Instagram</a>";
            }

            echo "<div class='tm-bg-white-transparent tm-testimonial-box text-center'>
                    <h4><strong>" . utf8_encode($row['titulo']) . "</strong></h4>
                    <figure class='image push'>
                      <img src='model/" . $row['ruta_imagen'] . "''>
                      <figcaption style='background-color: #aac4fc; color:white;'>
                        " . $linkFacebook . "&nbsp;". $linkInstagram . "
                      </figcaption>
                    </figure>
                    <p><strong>" . utf8_encode($row['descripcion']) . "</strong></p>
                  </div>";
          }
          ?>
        </div>

      </section>
      <!-- Call to Action -->

      <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Default Modal</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>One fine body&hellip;</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
    </div>
    <!-- .container-fluid -->
    <?php include "view/modulos/footer.php"; ?>
  </div>
</body>