<?php
require_once('header.php');
?>

<body>

  <header role="banner">
    <?php
    require_once('banner.php');
    renderMenuToHTML('services.php');
    ?>
  </header>
  <!-- END header -->

  <div class="slider-wrap">
    <div class="slider-item" style="background-image: url('img/hero_1.jpg');">

      <div class="container">
        <div class="row slider-text align-items-center justify-content-center">
          <div class="col-md-8 text-center col-sm-12 ">
            <h1 data-aos="fade-up">Foody Services</h1>
            <p data-aos="fade-up" data-aos-delay="200"><a href="signup.php" class="btn btn-white btn-outline-white">Sign Up</a></p>
          </div>
        </div>
      </div>

    </div>
    <!-- END slider -->
  </div>

  <section class="section bg-light py-5  bottom-slant-gray">
    <div class="container">
      <div class="row">
        <div class="col-md-6 mb-4 mb-lg-5 col-lg-3 text-left service-block" data-aos="fade-up" data-aos-delay="">
          <span class="wrap-icon"><span class="flaticon-dinner d-block mb-4"></span></span>
          <h3 class="mb-2 text-primary">Enjoy Eating</h3>
          <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
        </div>
        <div class="col-md-6 mb-4 mb-lg-5 col-lg-3 text-left service-block" data-aos="fade-up" data-aos-delay="100">
          <span class="wrap-icon"><span class="flaticon-fish d-block mb-4"></span></span>
          <h3 class="mb-2 text-primary">Fresh Sea Foods</h3>
          <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
        </div>
        <div class="col-md-6 mb-4 mb-lg-5 col-lg-3 text-left service-block" data-aos="fade-up" data-aos-delay="200">
          <span class="wrap-icon"><span class="flaticon-hot-coffee-rounded-cup-on-a-plate-from-side-view d-block mb-4"></span></span>
          <h3 class="mb-2 text-primary">Cup of Coffees</h3>
          <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
        </div>
        <div class="col-md-6 mb-4 mb-lg-5 col-lg-3 text-left service-block" data-aos="fade-up" data-aos-delay="300">
          <span class="wrap-icon"><span class="flaticon-meat d-block mb-4"></span></span>
          <h3 class="mb-2 text-primary">Meat Eaters</h3>
          <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
        </div>
      </div>
    </div>
  </section>

  <footer class="site-footer" role="contentinfo">
    <div class="container mb-5">
      <div class="row justify-content-center">
        <div class="col-lg-6 text-center">
          <div class="row">
            <div class="col-md-12 mb-3">
              <h3>Subsribe Newsletter</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore ex temporibus magni ipsam inventore dolorum sunt, amet vel.</p>
            </div>

            <form action="" class="col-12 mb-5">
              <div class="row align-items-center">
                <div class="col-md-8 mb-3 mb-md-0">
                  <input type="text" class="form-control" placeholder="Enter Email Address">
                </div>
                <div class="col-md-4">
                  <input type="submit" class="btn btn-primary btn-block" value="Subscribe">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-4 mb-5">
          <h3>About Us</h3>
          <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus et dolor blanditiis consequuntur ex voluptates perspiciatis omnis unde minima expedita.</p>
          <ul class="list-unstyled footer-link d-flex footer-social">
            <li><a href="#" class="p-2"><span class="fa fa-twitter"></span></a></li>
            <li><a href="#" class="p-2"><span class="fa fa-facebook"></span></a></li>
            <li><a href="#" class="p-2"><span class="fa fa-linkedin"></span></a></li>
            <li><a href="#" class="p-2"><span class="fa fa-instagram"></span></a></li>
          </ul>
        </div>

        <div class="col-md-4 b-5">
          <h3>Contact Info</h3>
          <ul class="list-unstyled footer-link">
            <li class="d-block">
              <span class="d-block text-black">Address:</span>
              <span>34 Street Name, City Name Here, United States</span>
            </li>
            <li class="d-block"><span class="d-block text-black">Phone:</span><span>+1 242 4942 290</span></li>
            <li class="d-block"><span class="d-block text-black">Email:</span><span>info@yourdomain.com</span></li>
          </ul>
        </div>
        <div class="col-md-4 mb-5">
          <h3>Quick Links</h3>
          <ul class="list-unstyled footer-link">
            <li><a href="#">Terms of Use</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </div>
        <div class="col-md-3">

        </div>
      </div>
      <div class="row">
        <div class="col-12 text-md-center text-left">
          <p>
            <!-- Link back to Free-Template.co can't be removed. Template is licensed under CC BY 3.0. -->
            <small class="block">&copy; 2019 <strong class="text-black">Foody</strong> Free Template. All Rights Reserved. <br> Design by <a href="https://free-template.co/" target="_blank">Free-Template.co</a></small>
          </p>
        </div>
      </div>
    </div>
  </footer>
  <!-- END footer -->

  <?php
  require_once('loader.php');
  ?>

</body>

</html>