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
  <!-- endbuild -->
</head>
<body>
  <?php include('common/navbarEnglish.php'); ?>
	<!-- HEADER
	================================================== -->
	<section class="section section_header" data-parallax="scroll" data-image-src="assets/img/contact.png">
		<div class="container">
			<div class="row">
				<div class="col">
					<h1 class="section__heading section_header__heading text-center">
						Contact Us
					</h1>
				</div>
			</div>
		</div>
	</section>
	<!-- CONTACT
	================================================== -->
  <div id="contactForm"></div>
	<section class="section section_contact">
		<div class="container">
			<div class="row">
				<div class="col">
					<h2 class="section__heading text-center">
						Get in contact with us
					</h2>
					<p class="section__subheading text-center">
						Send us a message with your questions. We are attentive to help you bring all the products you need to the United States.
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 order-md-2">
					<div class="section_contact__info">
						<div class="section_contact__info__item">
							<h4 class="section_contact__info__item__heading">
								Write us
							</h4>
							<p class="section_contact__info__item__content">
								<a href="#contactForm">customerservices@ecofoodsservices.com</a>
							</p>
						</div>
						<!--div class="section_contact__info__item">
							<h4 class="section_contact__info__item__heading">
								Call us
							</h4>
							<p class="section_contact__info__item__content">
								<a href="tel:+19876543210">+1 987 654 3210</a>
							</p>
						</div-->
						<div class="section_contact__info__item">
							<h4 class="section_contact__info__item__heading">
								Visit us
							</h4>
							<p class="section_contact__info__item__content">
								 Miami, Florida. EEUU.
							</p>
						</div>
						<div class="section_contact__info__item">
							<h4 class="section_contact__info__item__heading">
								Social links
							</h4>
							<ul class="section_contact__info__item__content">
								<!--li>
									<a href="#">
										<i class="fab fa-twitter"></i>
									</a>
								</li-->
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
						</div>
					</div>
				</div>
				<div class="col-md-9 order-md-1">
					<!-- Contact form -->
					<form class="section_contact__form" action="send_message.php" method="get">
						<div class="form-group">
							<label for="contact__form__name" class="sr-only">Full name</label>
							<input type="text" class="form-control" name="name" placeholder="Full name" required autofocus>
							<div class="invalid-feedback"></div>
						</div>
						<div class="form-group">
							<label for="contact__form__email" class="sr-only">E-mail address</label>
							<input type="email" class="form-control" name="email" placeholder="E-mail address" required>
							<div class="invalid-feedback"></div>
						</div>
            <div class="form-group">
							<label for="contact__form__email" class="sr-only">Phone Number</label>
							<input type="tel" class="form-control" name="phone" placeholder="Phone Number" required>
							<div class="invalid-feedback"></div>
						</div>
						<div class="form-group">
							<label for="contact__form__email" class="sr-only">Message</label>
							<textarea class="form-control"  name="message" rows="9" placeholder="Message" required></textarea>
							<div class="invalid-feedback"></div>
						</div>
						<button type="submit" class="btn btn-primary">
							Send message
						</button>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- MAP
	================================================== -->
	<!--section class="section section_map">
		<div class="section_map__map" data-lat="40.7590403" data-lng="-74.0392713" data-zoom="12" data-info="<h4 class='section_map__map__heading text-center'>Touche restaurant</h4><p class='section_map__map__content text-center text-muted'>1234 Altschul, New York, NY 10027-0000<br>+1 987 654 3210</p>"></div>
	</section-->
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

	<!-- JAVASCRIPT
	================================================== -->

	<!-- JS Global -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCnKt8_N4-FKOnhI_pSaDL7g_g-XI1-R9E"></script>

	<!-- JS Plugins -->
	<script src="assets/plugins/parallax/parallax.min.js"></script>
	<script src="assets/plugins/isotope/lib/imagesloaded.pkgd.min.js"></script>
	<script src="assets/plugins/isotope/isotope.pkgd.min.js"></script>
	<script src="assets/plugins/flickity/flickity.pkgd.min.js"></script>
	<script src="assets/plugins/lightbox/js/lightbox.min.js"></script>
	<script src="assets/plugins/reservation/reservation.js"></script>
	<script src="assets/plugins/contact/contact.js"></script>
	<script src="assets/plugins/alerts/alerts.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
	<!-- JS Custom -->
	<!-- build:js assets/js/theme.min.js -->
	<script src="assets/js/theme.js"></script>
	<!-- endbuild -->
	<script src="assets/js/custom.js"></script>

  </body>
</html>
