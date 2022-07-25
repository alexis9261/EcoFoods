<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="180x180" href="assets/ico/apple-touch-icon.png">
  <link rel="manifest" href="assets/ico/manifest.json">
  <link rel="mask-icon" href="assets/ico/safari-pinned-tab.svg" color="#5bbad5">
  <link rel="shortcut icon" href="assets/img/favicon/favicon.ico">
  <meta name="msapplication-config" content="assets/ico/browserconfig.xml">
  <meta name="theme-color" content="#ffffff">
  <title>Eco Foods</title>
  <link rel="stylesheet" href="assets/plugins/font-awesome/css/all.min.css">
  <link rel="stylesheet" href="assets/plugins/lightbox/css/lightbox.min.css">
  <link rel="stylesheet" href="assets/plugins/flickity/flickity.min.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <!-- build:css assets/css/theme.min.css -->
  <link rel="stylesheet" href="assets/css/theme.css">
  <style media="screen">
  /* Si la pantalla es menor a 992px se aplicaran los estilos*/
  @media only screen and (max-width: 1100px){
    .img_greenMills{
      left:3.5%!important;

    }
  }
  @media only screen and (max-width: 1100px){
    .img_greenMills{
      left:2%!important;

    }
  }
  </style>
  <!-- endbuild -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src='https://cdn.jsdelivr.net/npm/sweetalert2@7.29.0/dist/sweetalert2.all.min.js'></script>
</head>
<body style="margin-bottom:0!important;padding-bottom:0!important;">
  <?php include('common/navbarSpain.php'); ?>
  <!-- HEADER
  ================================================== -->
  <section class="section section_header" data-parallax="scroll" data-image-src="assets/img/fondo.png">
    <div class="container">
      <div class="row">
        <div class="col">
          <!-- Heading -->
          <h1 class="section__heading section_header__heading text-center">
            Nuestros Productos
          </h1>
        </div>
      </div> <!-- / .row -->
    </div> <!-- / .container -->
  </section>
  <!-- productos
  ================================================== -->
  <section class="section section_discover">
    <div class="container mt-5">
      <div class="row">
        <div class="col-md-2 align-self-start">
          <p class="section_discover__description">
            Los mejores productos alimenticios del mundo hasta tu almacén, depósito o galpón.
          </p>
        </div>
        <div class="col-md-4 align-self-start">
          <!-- Image -->
          <div class="section_discover__img">
            <img src="assets/img/Green_Mills-Sacos.png" class="img-fluid" alt="...">
          </div>
        </div>
        <div class="col-md-6 align-self-center">
          <!-- Content -->
          <h2><em>Ázucar Fina Refinada</em></h2>
          <p>
            La excelencia en Eco Foods se refleja en cada uno de los pasos que seguimos en el proceso de importación y distribución dentro del territorio norteamericano.⠀⠀⠀⠀⠀⠀⠀⠀⠀
            <br>
            Por ello, contamos con sacos de alta resistencia, además de un producto de primera. El ázucar fina refinada de Eco Foods se caracteriza por ser:⠀⠀⠀⠀⠀⠀⠀⠀⠀
            <br><br>
            ✅ De alta calidad.<br>
            ✅ Cuenta con Certificación Kosher.<br>
            ✅ Se preserva de la manera más eficiente.<br>
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- QUOTE
  ================================================== -->
  <section class="section section_quote section_gray">
    <div class="container section_quote__container">
      <div class="row">
        <div class="col col-md-8 ml-md-auto mr-md-auto">
          <blockquote class="section_quote__blockquote">
            <p class="text-center">
              EcoFoods importa, vende y distribuye al mayor los productos importados en USA, con capacidad de desarrollar otros mercados.
            </p>
            <footer class="text-center">
            </footer>
          </blockquote>
        </div>
      </div>
    </div>
  </section>
  <!-- INFO
  ================================================== -->
  <section class="section section_info section_info_opposite">
    <div class="container">
      <div class="row">
        <div class="col">
          <!-- Heading -->
          <h2 class="section__heading text-center">
            ¡Desde el inicio hasta el final, cuidamos cada detalle!⠀
          </h2>
          <!-- Subheading -->
          <p class="section__subheading text-center">
            Seguimos un exigente protocolo de distribución para garantizar en todo momento la calidad de la materia prima.
          </p>
        </div>
      </div> <!-- / .row -->
    </div> <!-- / .container -->
  </section>
  <!-- Suscripcion
  ================================================== -->
  <section class="section section_gray section_newsletter">
    <div class="container">
      <div class="row">
        <div class="col">
          <h2 class="section__heading section_newsletter__heading text-center">
            Suscribirse
          </h2>
          <p class="section__subheading text-center">
            Te mantendremos al tanto de todos nuestros servicios y nuevos productos que importamos desde Estados Unidos.
          </p>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div>
            <form class="section_newsletter__form validate" action="suscription.php" method="get">
              <div class="row">
                <div class="mc-field-group form-group col-md-9">
                  <label for="email" class="sr-only">Correo Electrónico</label>
                  <input type="email" id="email" name="email" class="required email form-control" placeholder="Ingresa tu correo" required>
                </div>
                <div class="clear col-md-3 text-center">
                  <button type="submit" class="btn btn-primary">
                    Suscribirse
                  </button>
                </div>
              </div>
            </form>
          </div> <!-- #mc_embed_signup -->
        </div>
      </div> <!-- / .row -->
    </div> <!-- / .container -->
  </section>
  <!-- GALLERY
  ================================================== -->
  <section class="section section_gallery">
    <div class="container">
      <div class="row">
        <div class="col">
          <h2 class="section__heading text-center">
            Galeria
          </h2>
          <p class="section__subheading text-center">
            Algunas imagenes de nuestras redes sociales
          </p>
        </div>
      </div>
      <div class="row section_gallery__grid">
        <div class="col-6 col-sm-6 col-md-4 section_gallery__grid__item" data-aos="zoom-in" data-aos-duration="1000">
          <a href=" assets/img/11.png" data-lightbox="gallery">
            <img src=" assets/img/11.png" class="img-fluid" alt="...">
          </a>
        </div>
        <div class="col-6 col-sm-6 col-md-4 section_gallery__grid__item" data-aos="zoom-in" data-aos-duration="1000">
          <a href=" assets/img/16.png" data-lightbox="gallery">
            <img src=" assets/img/16.png" class="img-fluid" alt="...">
          </a>
        </div>
        <div class="col-6 col-sm-6 col-md-4 section_gallery__grid__item" data-aos="zoom-in" data-aos-duration="1000">
          <a href=" assets/img/13.png" data-lightbox="gallery">
            <img src=" assets/img/13.png" class="img-fluid" alt="...">
          </a>
        </div>
        <div class="col-6 col-sm-6 col-md-4 section_gallery__grid__item" data-aos="zoom-in" data-aos-duration="1000">
          <a href=" assets/img/15.png" data-lightbox="gallery">
            <img src=" assets/img/15.png" class="img-fluid" alt="...">
          </a>
        </div>
        <div class="col-6 col-sm-6 col-md-4 section_gallery__grid__item" data-aos="zoom-in" data-aos-duration="1000">
          <a href=" assets/img/14.png" data-lightbox="gallery">
            <img src=" assets/img/14.png" class="img-fluid" alt="...">
          </a>
        </div>
        <div class="col-6 col-sm-6 col-md-4 section_gallery__grid__item" data-aos="zoom-in" data-aos-duration="1000">
          <a href=" assets/img/18.png" data-lightbox="gallery">
            <img src=" assets/img/18.png" class="img-fluid" alt="...">
          </a>
        </div>
        <div class="col-6 col-sm-6 col-md-4 section_gallery__grid__item" data-aos="zoom-in" data-aos-duration="1000">
          <a href=" assets/img/17.png" data-lightbox="gallery">
            <img src=" assets/img/17.png" class="img-fluid" alt="...">
          </a>
        </div>
        <div class="col-6 col-sm-6 col-md-4 section_gallery__grid__item" data-aos="zoom-in" data-aos-duration="1000">
          <a href=" assets/img/12.png" data-lightbox="gallery">
            <img src=" assets/img/12.png" class="img-fluid" alt="...">
          </a>
        </div>
      </div>
      <div class="row mt-4 justify-content-center">
        <a href="galeria.php" class="btn btn-primary text-white">
          Ver galeria
        </a>
      </div>
    </div>
  </section>
  <?php include('common/footerSpain.php'); ?>
  <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/plugins/parallax/parallax.min.js"></script>
  <script src="assets/plugins/isotope/lib/imagesloaded.pkgd.min.js"></script>
  <script src="assets/plugins/isotope/isotope.pkgd.min.js"></script>
  <script src="assets/plugins/flickity/flickity.pkgd.min.js"></script>
  <script src="assets/plugins/lightbox/js/lightbox.min.js"></script>
  <script src="assets/plugins/reservation/reservation.js"></script>
  <script src="assets/plugins/alerts/alerts.js"></script>
  <!-- build:js assets/js/theme.min.js -->
  <script src="assets/js/theme.js"></script>
  <!-- endbuild -->
  <script src="assets/js/custom.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>
</html>
