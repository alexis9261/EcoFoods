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
  <!-- Recaptcha -->
  <script src="https://www.google.com/recaptcha/api.js"></script>
  <script>
   function onSubmit(token) {
     document.getElementById("form_contact").submit();
   }
  </script>
  <!-- Recaptcha -->
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
            Our Products
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
            Our way of storing each product seeks to preserve its quality at all times.
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
					<h2><em>Refined Fine Sugar</em></h2>
					<p>
            Each bag of sugar complies with the most demanding standards and regulations, as they are:<br><br>
            ✓ Kosher certification.<br>
            ✓ Halal Certification.<br>
            ✓ NON-GMO Certification.<br><br>
            For more information, write to us in the comments your doubts or directly DM us and we will be attending you as soon as possible.
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
              EcoFoods imports, sells and distributes wholesale imported products in the USA, with the capacity to develop other markets.
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
  <section class="section section_info section_info_opposite pb-0">
		<div class="container">
			<div class="row">
				<div class="col">
					<!-- Heading -->
					<h2 class="section__heading text-center">
						From the beginning to the end, we take care of every detail! ⠀
					</h2>
					<!-- Subheading -->
					<p class="section__subheading text-center">
						We follow a demanding distribution protocol to guarantee the quality of the raw material at all times.
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
            Subscribe
          </h2>
          <p class="section__subheading text-center">
            We will keep you updated on all our services and new products that we import from the United States.
          </p>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div>
            <form class="section_newsletter__form validate" action="suscription.php" method="get">
              <div class="row">
                <div class="mc-field-group form-group col-md-9">
                  <label for="email" class="sr-only">E-Mail Direction</label>
                  <input type="email" id="email" name="email" class="required email form-control" placeholder="E-Mail Direction" required>
                </div>
                <div class="clear col-md-3 text-center">
                  <!-- <button type="submit" class="btn btn-primary">
                    Subscribe
                  </button> -->
                  <button class="btn btn-primary g-recaptcha" data-sitekey="6LdtCCshAAAAAE-1y0EWa3NqlCxfvMM7tn5Gk_mJ" data-callback='onSubmit' data-action='submit'>Subscribe</button>
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
            Gallery
          </h2>
          <p class="section__subheading text-center">
            Some images from our social networks
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
        <a href="gallery.php" class="btn btn-primary text-white">
          See Gallery
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
