<?php
require_once('perlConfig.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Home - Original Food Delivery</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <link href="assets/img/logo/logo.jpg" rel="icon">
  <link href="assets/img/logo/logo.jpg" rel="apple-touch-icon">
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

<body class="index-page">

 <?php
    require_once('index-header.php');
  ?>

  <main class="main">
    
<!-- Carousel Section -->
<section id="carousel" class="carousel-section" style="padding: 0; margin: 0;">
  <div class="container-fluid" style="padding: 0;">
    <div id="honeyCarousel" class="carousel slide" data-bs-ride="carousel">
      
      <!-- Carousel Indicators -->
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#honeyCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#honeyCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#honeyCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>

      <!-- Carousel Inner -->
      <div class="carousel-inner">
        
        <!-- Slide 1 -->
        <div class="carousel-item active" style="position: relative;">
          <img src="assets/img/products/kkk.png" class="d-block w-100" alt="Pure Honey" style="height: 600px; object-fit: cover;">
          <div style="position: absolute; top: 50%; left: 10%; transform: translateY(-50%); max-width: 500px; z-index: 10;">
            <h1 style="color: #2178bd; font-size: 3rem; font-weight: 700; line-height: 1.2; margin-bottom: 20px;">Delivering Pure Original Honey Worldwide</h1>
            <p style="color: #2178bd; font-size: 1.1rem; margin-bottom: 30px;">Original Food Delivery is dedicated to delivering 100% pure.</p>
            <a href="#about" class="btn btn-primary" style="background-color: #2178bd; border: none; padding: 12px 30px; font-size: 1rem;">Learn More About Us</a>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="position: relative;">
          <img src="assets/img/products/kk1.png" class="d-block w-100" alt="Organic Honey" style="height: 600px; object-fit: cover;">
          <div style="position: absolute; top: 50%; left: 10%; transform: translateY(-50%); max-width: 500px; z-index: 10;">
            <h1 style="color: #2178bd; font-size: 3rem; font-weight: 700; line-height: 1.2; margin-bottom: 20px;">100% Pure & Natural Honey</h1>
            <p style="color: #2178bd; font-size: 1.1rem; margin-bottom: 30px;">We guarantee that our honey is free from additives, preservatives, and artificial ingredients. Every jar is tested to ensure the highest quality.</p>
            <a href="#products" class="btn btn-primary" style="background-color: #2178bd; border: none; padding: 12px 30px; font-size: 1rem;">Shop Now</a>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="position: relative;">
          <img src="assets/img/products/kk2.png" class="d-block w-100" alt="Honey Comb" style="height: 600px; object-fit: cover;">
          <div style="position: absolute; top: 50%; left: 10%; transform: translateY(-50%); max-width: 500px; z-index: 10;">
            <h1 style="color: #2178bd; font-size: 3rem; font-weight: 700; line-height: 1.2; margin-bottom: 20px;">Worldwide Delivery</h1>
            <p style="color: #2178bd; font-size: 1.1rem; margin-bottom: 30px;">We deliver our honey to customers around the world, ensuring timely and safe delivery with the freshest products.</p>
            <a href="#products" class="btn btn-primary" style="background-color: #2178bd; border: none; padding: 12px 30px; font-size: 1rem;">Explore Products</a>
          </div>
        </div>
      </div>

      <!-- Carousel Controls -->
      <button class="carousel-control-prev" type="button" data-bs-target="#honeyCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#honeyCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
</section>


    <!-- <section id="hero" class="hero section">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="hero-content" data-aos="fade-right" data-aos-delay="200">
              
              <h1 style="color: #2178bd;">Delivering Pure Original Honey Worldwide</h1>
              <p style="color: #2178bd;">Original Food Delivery is dedicated to delivering 100% pure, natural honey to customers around the world. We work closely with trusted local producers to ensure every product meets the highest standards of quality, freshness, and authenticity.</p>

              <div class="hero-buttons">
                <a href="#" class="btn-primary" style="background-color: #2178bd;">Learn More About Us</a>
              </div> 
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
            <div class="hero-image">
              <img src="assets/img/products/IMG-01.png" alt="product image" class="img-fluid">              
            </div>
          </div>
        </div>
      </div>
    </section> -->

    <section id="about" class="about section" style="background-color: #ffffffff;">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row align-items-center g-5">
          <div class="col-lg-6">
            <div class="about-content" data-aos="fade-right" data-aos-delay="200">
              <h2 style="color: #2178bd;">WHY ORIGINAL FOOD DELIVERY?</h2>
              <p class="lead" style="color: #2178bd;">Original Honey Delivery is a trusted company dedicated to delivering pure, natural honey worldwide. We source our honey directly from experienced beekeepers, ensuring every jar meets the highest standards of quality, authenticity, and freshness.</p>
              <ul class="about-features list-unstyled mt-4" style="color: #2178bd;">
                <li data-aos="fade-up" data-aos-delay="300">
                  
                  <div>
                    <h5 style="color: #2178bd;"><i class="bi bi-check-circle-fill"></i> 100% Pure &amp; Natural</h5>
                    <p>We guarantee that our honey is free from additives, preservatives, and artificial ingredients.</p>
                  </div>
                </li>
                <li data-aos="fade-up" data-aos-delay="400">
                  <div>
                    <h5 style="color: #2178bd;"><i class="bi bi-check-circle-fill"></i> Worldwide Delivery</h5>
                    <p>We deliver our honey to customers around the world, ensuring timely and safe delivery.</p>
                  </div>
                </li>
                <li data-aos="fade-up" data-aos-delay="500">
                  <div>
                    <h5 style="color: #2178bd;"><i class="bi bi-check-circle-fill"></i> Ethically Sourced</h5>
                    <p>Our honey comes from responsible beekeeping practices.</p>
                  </div>
                </li>
                <li data-aos="fade-up" data-aos-delay="500">
                  <div>
                    <h5 style="color: #2178bd;"><i class="bi bi-check-circle-fill"></i> Strict Quality Control</h5>
                    <p>Every batch is tested to guarantee purity and taste.</p>
                  </div>
                </li>
              </ul>
              <div class="cta-container mt-5" data-aos="fade-up" data-aos-delay="800">
                <a href="<?php echo URLROOT;?>about" class="btn btn-primary">Learn More About Us</a>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="about-image position-relative" data-aos="fade-left" data-aos-delay="200">
              <img src="assets/img/products/img1.jpg" alt="Product Image" class="img-fluid main-image rounded">
            </div>
          </div>
        </div>
      </div>
    </section>


    
      <section id="products" class="products section">
      <div class="container">
    <div class="text-center mb-5">
      <div style="font-size:2rem;font-weight:700;line-height:1.2;">
        <span style="color:#2178bd;">Our Products</span>
      </div>
      <p class="mt-2">
        Discover our range of high-quality, original food products delivered worldwide.
      </p>
    </div>

    <div class="row g-4">
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div style="background:#ffffff;padding:20px;border-radius:10px;text-align:center;height:100%;">
          <img src="assets/img/products/IMG-a.jpg" alt="Pure Honey" style="width:100%;border-radius:10px;margin-bottom:15px;">
          <h5 style="color:#2178bd;font-weight:700;">Pure Honey</h5>
          <p style="font-weight:600;color:#333;">$15.00</p>
          <p>100% natural honey harvested from organic farms, perfect for health-conscious customers.</p>
        </div>
      </div>

      
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div style="background:#ffffff;padding:20px;border-radius:10px;text-align:center;height:100%;">
          <img src="assets/img/products/IMG-b.jpg" alt="Organic Honey" style="width:100%;border-radius:10px;margin-bottom:15px;">
          <h5 style="color:#2178bd;font-weight:700;">Organic Honey</h5>
          <p style="font-weight:600;color:#333;">$18.00</p>
          <p>Rich, organic honey with full flavor and nutrients, sourced directly from local beekeepers.</p>
        </div>
      </div>

     
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <div style="background:#ffffff;padding:20px;border-radius:10px;text-align:center;height:100%;">
          <img src="assets/img/products/IMG-c.png" alt="Honey Comb" style="width:100%;border-radius:10px;margin-bottom:15px;">
          <h5 style="color:#2178bd;font-weight:700;">Honey Comb</h5>
          <p style="font-weight:600;color:#333;">$22.00</p>
          <p>Natural honey comb, ideal for enjoying raw honey with its pure texture and flavor.</p>
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