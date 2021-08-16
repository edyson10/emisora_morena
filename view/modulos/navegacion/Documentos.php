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

      <!-- Services header -->
      <section class="row" id="tmServices">
        <div class="col-12">
          <div class="parallax-window tm-services-parallax-header tm-testimonials-parallax-header" data-parallax="scroll" data-z-index="101" data-image-src="view/presentacion/img/14.jpg">
            <div class="tm-bg-black-transparent text-center tm-services-header tm-testimonials-header">
              <h2 class="text-uppercase tm-services-page-title tm-testimonials-page-title">EMISORA MORENA ESTEREO</h2>
              <p class="tm-services-description mb-0 small">Labateca, Norte de Santander</p>
            </div>
          </div>
        </div>
    </div>

    <div class="col-lg-12 tm-contact-col-right">
      <div class="tm-bg-white-transparent tm-contact-text">
        <h3 class="tm-service-tab-title">DOCUMENTOS IMPORTANTES</h3>
        <div id="list-example" class="list-group">
          <table class="table">
            <thead class="table-primary">
              <tr>
                <th scope="col">#</th>
                <th scope="col" style="width:850px">Nombre</th>
                <th scope="col" style="width:50px">Opciones</th>
              </tr>
            </thead>
            <tbody class="table-light">
              <?php
              $query = $conexion->query("SELECT * FROM documentacion ORDER BY id ASC");
              while ($row = mysqli_fetch_array($query)) {
                echo "<tr>
                <th scope='row'>" . $row["id"] . "</th>
                <td>" . $row["titulo"] . "</td>
                <td><button type='button' class='btn btn-success'>Descargar</button></td>
              </tr>";
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    </section>
    <?php include "view/modulos/footer.php"; ?>
  </div>
  <!-- .container-fluid -->
  </div>
</body>