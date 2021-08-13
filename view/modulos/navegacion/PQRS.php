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
            <div class="parallax-window tm-services-parallax-header tm-testimonials-parallax-header" data-parallax="scroll" data-z-index="101" data-image-src="view/presentacion/img/23.jpg">
              <div class="tm-bg-black-transparent text-center tm-services-header tm-testimonials-header">
                  <h2 class="text-uppercase tm-services-page-title tm-testimonials-page-title">EMISORA MORENA ESTEREO</h2>
                  <p class="tm-services-description mb-0 small">Labateca, Norte de Santander</p>
              </div>
            </div>
          </div>
        </div>

      <section class="row" id="tmHome">
        <div class="col-12 tm-home-container">
          <div class="col-lg-12 tm-contact-col-right">
              <div class="tm-bg-white-transparent tm-contact-text">
                        
                        
                            <h2 class="font-weight-bold"> </h2>
                            <h1 class="font-weight-bold" >REGISTRO PQRS</h1>
                            <h2 class="font-weight-bold"> </h2>
                            <p class="tm-service-tab-p" style="color:#2E2E2E"><br/>
                              Apreciado Usuario:<br/>
                              Para nosotros es muy importante contar con usted. 
                              En procura de mejorar nuestros servicios y trámites que ofrecemos 
                              a nuestros grupos de interés, hemos rediseñado nuestra página Web, a través de 
                              la cual usted podrá registrar sus solicitudes, quejas, reclamos y/o sugerencias 
                              sobre temas de nuestra competencia y de igual forma, consultar información 
                              relacionada con nuestra gestión institucional y del sector.
                            </p>
                            <p>
                              Los campos con <b style="color:#FF0000">*</b> son obligatorios.
                            </p>
                            <div id="list-example" class="list-group">
                      <div id="list-example" class="list-group">
                          <form method="POST" id="FormEnviarCorreo" name="FormEnviarCorreo" class="tm-bg-white tm-contact-form" enctype="multipart/form-data">                              
                              <div class="form-group">
                                <label for="exampleFormControlSelect1">Tipo de Solicitud<b style="color:#FF0000">*</b></label>
                                <select class="form-control text-body" id="exampleFormControlSelect1">
                                  <option>Petición</option>
                                  <option>Queja</option>
                                  <option>Reclamo</option>
                                  <option>Sugerencia</option>
                                </select>
                              </div>
                              <div class="form-group">
                                <label for="exampleFormControlInput1">Nombre del solicitante<b style="color:#FF0000">*</b></label>
                                <input type="nomSolicitante" class="form-control text-body" id="exampleFormControlInput1" placeholder="nombre">
                              </div>
                              <div class="form-group">
                                <label for="exampleFormControlInput1">Número de teléfono<b style="color:#FF0000">*</b></label>
                                <input type="telSolicitante" class="form-control text-body" id="exampleFormControlInput1" placeholder="número">
                              </div>
                              <div class="form-group">
                                <label for="exampleFormControlInput1">Correo electrónico<b style="color:#FF0000">*</b></label>
                                <input type="emailSolicitante" class="form-control text-body" id="exampleFormControlInput1" placeholder="Email">
                              </div>
                              <div class="form-group">
                                <label for="exampleFormControlTextarea1">Descripción de la solicitud<b style="color:#FF0000">*</b></label>
                                <textarea class="form-control text-body" id="exampleFormControlTextarea1" rows="3"></textarea>
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
      <?php include "view/modulos/footer.php";?>
    </div>
    <!-- .container-fluid -->
  </div>  
</body>
