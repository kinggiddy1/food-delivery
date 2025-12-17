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
<section id="contact" class="contact section">
  <div class="container">

    <div class="row g-4 align-items-stretch">

      <!-- Map Column -->
      <div class="col-lg-6">
        <div class="map-container h-100">
          <iframe 
           src="https://www.google.com/maps?q=Kigali%2C%20Rwanda&output=embed"
            width="100%"
            height="100%"
            style="border:0;"
            allowfullscreen
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>
      </div>

      <!-- Form Column -->
      <div class="col-lg-6">
        <div class="form-container h-100">
        <div style="font-size:1.75rem;font-weight:700;line-height:1.2;margin-bottom:1rem;">
        <span style="color:#2178bd;">
            Get in Touch
        </span>
        </div>

          <p>We would love to hear from you! Whether you have questions about our products, need assistance with an order, or want to provide feedback, our team is here to help. Reach out to us through any of the following methods:</p>
          <form action="forms/contact.php" method="post" class="php-email-form">
            
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="nameInput" name="name" placeholder="Full Name" required>
              <label for="nameInput">Full Name</label>
            </div>

            <div class="form-floating mb-3">
              <input type="email" class="form-control" id="emailInput" name="email" placeholder="Email Address" required>
              <label for="emailInput">Email Address</label>
            </div>

            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="subjectInput" name="subject" placeholder="Subject" required>
              <label for="subjectInput">Subject</label>
            </div>

            <div class="form-floating mb-3">
              <textarea class="form-control" id="messageInput" name="message" placeholder="Your Message" style="height:150px" required></textarea>
              <label for="messageInput">Your Message</label>
            </div>

            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>

            <div class="d-grid">
              <button
                type="submit"
                style="
                    background-color:#2178bd;
                    color:#ffffff;
                    border:none;
                    padding:12px 28px;
                    border-radius:6px;
                    font-weight:600;
                    cursor:pointer;
                    transition:all 0.3s ease;
                "
                onmouseover="this.style.backgroundColor='#1b66a0'"
                onmouseout="this.style.backgroundColor='#2178bd'"
                >
                Send Message <i class="bi bi-send-fill ms-2"></i>
                </button>

            </div>

          </form>
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