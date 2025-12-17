<?php
require_once('perlConfig.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Contact - Original Food Delivery</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <link href="assets/css/main.css" rel="stylesheet">
  <link href="style.css" rel="stylesheet">

</head>

<body class="contact-page">

    <?php
        require_once('index-header.php'); 
    ?>

  <main class="main">
<section id="about" class="about section">
  <div class="container">

    <!-- Section Title -->
    <div class="text-center mb-5">
      <div style="font-size:2rem;font-weight:700;line-height:1.2;">
        <span style="color:#2178bd;">About Us</span>
      </div>
      <p class="mt-2">
        Delivering quality, trust, and freshness to our customers every day.
      </p>
    </div>

    <div class="row g-4 align-items-stretch">

      <!-- About Description -->
      <div class="col-lg-6">
        <div style="background:#ffffff;padding:30px;border-radius:10px;height:100%;">
          <p>
            Original Food Delivery is committed to providing high-quality, natural food products
            with a strong focus on authenticity and customer satisfaction. We specialize in
            delivering pure honey and other original food products to customers locally and
            internationally.
          </p>
          <p>
            Our goal is to connect people with nature’s best offerings through reliable sourcing,
            careful handling, and timely delivery.
          </p>
        </div>
      </div>

      <!-- Mission & Vision -->
      <div class="col-lg-6">
        <div style="background:#ffffff;padding:30px;border-radius:10px;height:100%;">

          <!-- Mission -->
          <div class="mb-4">
            <div style="font-size:1.4rem;font-weight:700;margin-bottom:8px;">
              <span style="color:#2178bd;">Our Mission</span>
            </div>
            <p>
              To deliver authentic, high-quality food products while promoting health, trust,
              and convenience through excellent service and reliable distribution.
            </p>
          </div>

          <!-- Vision -->
          <div>
            <div style="font-size:1.4rem;font-weight:700;margin-bottom:8px;">
              <span style="color:#2178bd;">Our Vision</span>
            </div>
            <p>
              To become a leading and trusted food delivery brand recognized for quality,
              transparency, and positive impact on communities worldwide.
            </p>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>


</main>

  <?php
    require_once('index-footer.php');
  ?>

  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
 <?php require_once('loader.php'); ?>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/js/main.js"></script>

</body>

</html>