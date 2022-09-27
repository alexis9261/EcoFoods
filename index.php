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
  <?php include('common/navbarEnglish.php'); ?>
  <!-- WELCOME
  ================================================== -->
  <section class="section section_welcome" data-parallax="scroll" data-image-src="assets/img/1.png">
    <!-- Content -->
    <div class="section_welcome__main">
      <div class="container">
        <img class="d-none d-lg-block img_greenMills" src="assets/img/Logo_Green_Mills-Borde.png" width="20%" style="position:absolute;top:30%;left:5%;">
        <div class="row align-items-center mt-3">
          <div class="col">
            <h2 class="section__preheading section_welcome__preheading text-center text-muted">
              <span>Food imports to the United States</span>
            </h2>
            <h1 class="section__heading section_welcome__heading text-center" id="fontaa">
              <img src="assets/img/logo_c.png" alt="EcoFoods Logo" width="55%">
            </h1>
            <p class="section__subheading section_welcome__subheading text-center text-muted px-4 pt-0">
              We have the necessary logistics to supply wholesalers, supermarket chains and any customer that requires the purchase of any product in large quantities.
            </p>
            <div class="text-center">
              <a href="contact-us.php" class="btn btn-primary text-white">
                contact us
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer -->
    <div class="section_welcome__footer">
      <div class="container">
        <div class="row align-items-center">
          <!--div class="col-md">
            <ul class="section_welcome__footer__social text-center text-lg-left">
              <li>
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li>
                <a href="https://www.facebook.com/ecofoodsUS" target="_blank">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li>
                <a href="https://www.instagram.com/ecofoodsus/" target="_blank">
                  <i class="fab fa-instagram"></i>
                </a>
              </li>
            </ul>
          </div-->
          <div class="col-md">
            <div class="section_welcome__footer__address text-center text-lg-center">
              <i class="fas fa-map-marker-alt text-white"></i> Miami, Florida. EEUU.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Description
  ================================================== -->
  <section class="section section_discover section_no-padding_bottom">
    <div class="container">
      <div class="row" data-aos="fade-up" data-aos-duration="1500">
        <div class="col-md-2 align-self-start">
          <p class="section_discover__description">
            The best food products in the world to your warehouse, warehouse or shed.
          </p>
        </div>
        <div class="col-md-4 align-self-start">
          <div class="section_discover__img">
            <img src="assets/img/Green_Mills-Sacos.png" class="img-fluid" alt="">
          </div>
        </div>
        <div class="col-md-6 align-self-center">
          <h2><em>Refined Fine Sugar</em></h2>
          <p>
            Excellence in Eco Foods is reflected in each of the steps we follow in the import and distribution process within the North American territory.⠀⠀⠀⠀⠀⠀⠀⠀⠀
            <br>
            Therefore, we have high strength bags, in addition to a top product. The refined fine sugar from Eco Foods is characterized by being:⠀⠀⠀⠀⠀⠀⠀⠀⠀
            <br><br>
            ✅ High quality.<br>
            ✅ It has Kosher Certification.<br>
            ✅ It is preserved in the most efficient way.
          </p>
        </div>
      </div>
    </div>
  </section>
  <section class="section section_discover section_no-padding_bottom">
    <div class="container">
      <div class="row" data-aos="fade-up" data-aos-duration="1500">
        <div class="col-md-2 order-md-2 align-self-end">
          <p class="section_discover__description">
            You can be part of the big Eco Foods family.
          </p>
        </div>
        <div class="col-md-4 order-md-3 align-self-start">
          <div class="section_discover__img alt">
            <img src="assets/img/7.png" class="img-fluid" alt="...">
          </div>
        </div>
        <div class="col-md-6 order-md-1 align-self-center">
          <h2><em>We take your products to the </em> United States</h2>
          <p>
            If you are a grain producer and have high quality raw materials, contact us and raise the level of your company.<br>
            At Eco Foods we always seek the best, because we owe it to our customers.⠀
          </p>
        </div>
      </div>
    </div>
  </section>
  <section class="section section_discover">
    <div class="container">
      <div class="row" data-aos="fade-up" data-aos-duration="1500">
        <div class="col-md-2 align-self-start">
          <p class="section_discover__description">
            Being able to supply excellent food products and in large quantities, is our main objective.
          </p>
        </div>
        <div class="col-md-4 align-self-start">
          <div class="section_discover__img">
            <img src="assets/img/8.png" class="img-fluid" alt="...">
          </div>
        </div>
        <div class="col-md-6 align-self-center">
          <h2><em>We import them from the </em> best producers worldwide.</h2>
          <p>
            At Eco Foods we care about bringing the best foods in the world to North America and supplying the market with what you need.
            <br><br>
            We have a great logistics team to maintain product quality and take it to any corner of the United States.
            <br><br>
            Contact us!
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- DIV Logo
  ================================================== -->
  <section class="pt-3 mt-3" style="background-color:#f2f2f2;">
    <div class="container py-5 my-5" data-aos="zoom-in" data-aos-duration="1000">
      <div class="row justify-content-center">
        <img src="assets/img/logo_a.png" alt="" width="50%">
      </div>
    </div>
  </div>
  <!-- ABOUT
  ================================================== -->
  <section class="section section_about">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <!-- Description -->
          <p class="section_about__description">
            The logistics to achieve these transfers meet the most stringent safety and health standards, guaranteeing high quality.
          </p>
        </div>
      </div> <!-- / .row -->
    </div>
    <img data-aos="zoom-in" data-aos-duration="1000" src="assets/img/logo_c.png" alt="" width="15%" style="position:absolute;bottom:0px;right:0px;"> <!-- / .container -->
  </section>
  <!-- Servicios
  ================================================== -->
  <section class="section section_dishes" style="padding-bottom:20px!important;">
    <div class="container">
      <div class="row">
        <div class="col">
          <h2 class="section__heading text-center">
            Our services
          </h2>
          <p class="section__subheading text-center">
            We are expert in Distribution, Storing and Safeguarding of foods products
          </p>
        </div>
      </div>
    </div>
  </section>
  <section class="section section_discover section_no-padding_bottom" style="padding-top:0!important;">
    <div class="container">
      <div class="row" data-aos="fade-up" data-aos-duration="1500">
        <div class="col-md-1"></div>
        <div class="col-md-5 align-self-start">
          <div class="section_discover__img">
            <img src="assets/img/distribution.png" class="img-fluid" alt="">
          </div>
        </div>
        <div class="col-md-6 align-self-center">
          <h2><em>Distribution</em></h2>
          <p>
            We distribute food products of the highest quality and take care of every detail: from the raw materials and their protection to our practical packaging.
            <br>
            Each bag of sugar complies with the most demanding standards and regulations, as they are:
            <br><br>
            ✓ Kosher certification.<br>
            ✓ Halal Certification.<br>
            ✓ NON-GMO Certification. ⠀
          </p>
        </div>
      </div>
    </div>
  </section>
  <section class="section section_discover section_no-padding_bottom">
    <div class="container">
      <div class="row" data-aos="fade-up" data-aos-duration="1500">
        <div class="col-md-1"></div>
        <div class="col-md-5 order-md-3 align-self-start">
          <div class="section_discover__img alt">
            <img src="assets/img/logistics.png" class="img-fluid" alt="...">
          </div>
        </div>
        <div class="col-md-6 order-md-1 align-self-center">
          <h2><em>Storing and</em> Safeguarding</h2>
          <p>
            At EcoFoods, we handle the best processes for storing and safeguarding the finished product.
            <br>
            Taking care of every detail, allows us to be a reference of excellence and guarantee that you will receive a product in the best conditions, with which you will be able to elevate your business to the maximum.
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- produts
  ================================================== -->
  <section class="section section_dishes">
    <div class="container">
      <div class="row">
        <div class="col">
          <h2 class="section__heading text-center">
            Some of our products
          </h2>
          <p class="section__subheading text-center">
            Some of the products we import to the United States
          </p>
        </div>
      </div>
    </div>
    <!-- Carousel -->
    <div class="section_dishes__carousel dots-disabled" data-aos="zoom-in" data-aos-duration="1000">
      <div class="section_dishes__carousel__item">
        <img src="assets/img/40.png" alt="..." class="section_dishes__carousel__item__img">
      </div>
      <div class="section_dishes__carousel__item">
        <img src="assets/img/41.png" alt="..." class="section_dishes__carousel__item__img">
      </div>
      <div class="section_dishes__carousel__item">
        <img src="assets/img/42.png" alt="..." class="section_dishes__carousel__item__img">
      </div>
      <div class="section_dishes__carousel__item">
        <img src="assets/img/43.png" alt="..." class="section_dishes__carousel__item__img">
      </div>
      <div class="section_dishes__carousel__item">
        <img src="assets/img/44.png" alt="..." class="section_dishes__carousel__item__img">
      </div>
      <div class="section_dishes__carousel__item">
        <img src="assets/img/45.png" alt="..." class="section_dishes__carousel__item__img">
      </div>
      <div class="section_dishes__carousel__item">
        <img src="assets/img/46.png" alt="..." class="section_dishes__carousel__item__img">
      </div>
      <div class="section_dishes__carousel__item">
        <img src="assets/img/47.png" alt="..." class="section_dishes__carousel__item__img">
      </div>
      <div class="section_dishes__carousel__item">
        <img src="assets/img/48.png" alt="..." class="section_dishes__carousel__item__img">
      </div>
      <div class="section_dishes__carousel__item">
        <img src="assets/img/49.png" alt="..." class="section_dishes__carousel__item__img">
      </div>
    </div>
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
            <form class="section_newsletter__form" action="suscription.php" method="get">
              <div class="row">
                <div class="mc-field-group form-group col-md-9">
                  <label for="email" class="sr-only">E-Mail Direction</label>
                  <input type="email" name="email" class="required email form-control" placeholder="Email address" required>
                </div>
                <div class="clear col-md-3 text-center">
                  <!-- <button type="submit" class="btn btn-primary">
                    Subscribe
                  </button> -->
                  <button class="btn btn-primary g-recaptcha" 
                  data-sitekey="6LdtCCshAAAAAE-1y0EWa3NqlCxfvMM7tn5Gk_mJ" 
                  data-callback='onSubmit' 
                  data-action='submit'>Subscribe</button>
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
          <a href="assets/img/11.png" data-lightbox="gallery">
            <img src="assets/img/11.png" class="img-fluid" alt="...">
          </a>
        </div>
        <div class="col-6 col-sm-6 col-md-4 section_gallery__grid__item" data-aos="zoom-in" data-aos-duration="1000">
          <a href="assets/img/16.png" data-lightbox="gallery">
            <img src="assets/img/16.png" class="img-fluid" alt="...">
          </a>
        </div>
        <div class="col-6 col-sm-6 col-md-4 section_gallery__grid__item" data-aos="zoom-in" data-aos-duration="1000">
          <a href="assets/img/13.png" data-lightbox="gallery">
            <img src="assets/img/13.png" class="img-fluid" alt="...">
          </a>
        </div>
        <div class="col-6 col-sm-6 col-md-4 section_gallery__grid__item" data-aos="zoom-in" data-aos-duration="1000">
          <a href="assets/img/15.png" data-lightbox="gallery">
            <img src="assets/img/15.png" class="img-fluid" alt="...">
          </a>
        </div>
        <div class="col-6 col-sm-6 col-md-4 section_gallery__grid__item" data-aos="zoom-in" data-aos-duration="1000">
          <a href="assets/img/14.png" data-lightbox="gallery">
            <img src="assets/img/14.png" class="img-fluid" alt="...">
          </a>
        </div>
        <div class="col-6 col-sm-6 col-md-4 section_gallery__grid__item" data-aos="zoom-in" data-aos-duration="1000">
          <a href="assets/img/18.png" data-lightbox="gallery">
            <img src="assets/img/18.png" class="img-fluid" alt="...">
          </a>
        </div>
        <div class="col-6 col-sm-6 col-md-4 section_gallery__grid__item" data-aos="zoom-in" data-aos-duration="1000">
          <a href="assets/img/17.png" data-lightbox="gallery">
            <img src="assets/img/17.png" class="img-fluid" alt="...">
          </a>
        </div>
        <div class="col-6 col-sm-6 col-md-4 section_gallery__grid__item" data-aos="zoom-in" data-aos-duration="1000">
          <a href="assets/img/12.png" data-lightbox="gallery">
            <img src="assets/img/12.png" class="img-fluid" alt="...">
          </a>
        </div>
      </div> <!-- / .row -->
      <div class="row mt-4 justify-content-center">
        <a href="gallery.php" class="btn btn-primary text-white">
          See Gallery
        </a>
      </div>
    </div>
  </section>
  <?php include('common/footerEnglish.php'); ?>
  <?php if (isset($_GET['m'])) { ?>
    <script>
      const toast=swal.mixin({toast:true,position:'top-end',showConfirmButton:false,timer:5000});
      toast({type:'success',title:"Your message was sent successfully! \n¡Tu mensaje fue enviado exitosamente!"});
    </script>
  <?php } ?>
  <?php if (isset($_GET['s'])) { ?>
    <script>
      const toast=swal.mixin({toast:true,position:'top-end',showConfirmButton:false,timer:5000});
      toast({type:'success',title:"You successfully subscribed to our page! \n¡Te suscribiste a nuestra pagina exitosamente!"});
    </script>
  <?php } ?>
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
