<?php
require_once('header.php');
?>

<body>

  <header role="banner">
    <?php
    require_once('banner.php');
    renderMenuToHTML('recipes.php');
    ?>
  </header>
  <!-- END header -->

  <div class="slider-wrap">
    <div class="slider-item" style="background-image: url('img/hero_1.jpg');">

      <div class="container">
        <div class="row slider-text align-items-center justify-content-center">
          <div class="col-md-8 text-center col-sm-12 ">
            <h1 data-aos="fade-up">Some of our best Recipes</h1>
            <p data-aos="fade-up" data-aos-delay="200"><a href="signup.php" class="btn btn-white btn-outline-white">Sign Up</a></p>
          </div>
        </div>
      </div>

    </div>
    <!-- END slider -->
  </div>



  <section class="section bg-light pt-0 bottom-slant-gray">

    <div class="clearfix mb-5 pb-5">
      <div class="container-fluid">
        <div class="row" data-aos="fade">
          <div class="col-md-12 text-center heading-wrap">
            <h2>Our Recipes</h2>
          </div>
        </div>
      </div>
    </div>

    <div class="container">

      <div class="row no-gutters">
        <div class="col-md-6">
          <div class="sched d-block d-lg-flex">
            <div class="bg-image order-2" style="background-image: url('img/dishes_4.jpg');" data-aos="fade"></div>
            <div class="text order-1">
              <h3>Grilled Caesar salad, shaved reggiano</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto illo delectus...</p>
              <p class="text-primary h3">584 kcal</p>
            </div>

          </div>

          <div class="sched d-block d-lg-flex">
            <div class="bg-image" style="background-image: url('img/dishes_1.jpg');" data-aos="fade"></div>
            <div class="text">
              <h3>Spicy Calamari and beans</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto illo delectus...</p>
              <p class="text-primary h3">398 kcal</p>

            </div>

          </div>

        </div>

        <div class="col-md-6">
          <div class="sched d-block d-lg-flex">
            <div class="bg-image order-2" style="background-image: url('img/dishes_2.jpg');" data-aos="fade"></div>
            <div class="text order-1">
              <h3>Bacon wrapped wild gulf prawns</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto illo delectus...</p>
              <p class="text-primary h3">579 kcal</p>

            </div>

          </div>

          <div class="sched d-block d-lg-flex">
            <div class="bg-image" style="background-image: url('img/dishes_3.jpg');" data-aos="fade"></div>
            <div class="text">
              <h3>Seared ahi tuna fillet*, honey-ginger sauce</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto illo delectus...</p>
              <p class="text-primary h3">630 kcal</p>

            </div>

          </div>

        </div>
      </div>

      <div class="row no-gutters">
        <div class="col-md-6">
          <div class="sched d-block d-lg-flex">
            <div class="bg-image order-2" style="background-image: url('img/dishes_4.jpg');" data-aos="fade"></div>
            <div class="text order-1">
              <h3>Grilled Caesar salad, shaved reggiano</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto illo delectus...</p>
              <p class="text-primary h3">612 kcal</p>
            </div>

          </div>

          <div class="sched d-block d-lg-flex">
            <div class="bg-image" style="background-image: url('img/dishes_1.jpg');" data-aos="fade"></div>
            <div class="text">
              <h3>Spicy Calamari and beans</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto illo delectus...</p>
              <p class="text-primary h3">432 kcal</p>

            </div>

          </div>

        </div>

        <div class="col-md-6">
          <div class="sched d-block d-lg-flex">
            <div class="bg-image order-2" style="background-image: url('img/dishes_2.jpg');" data-aos="fade"></div>
            <div class="text order-1">
              <h3>Bacon wrapped wild gulf prawns</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto illo delectus...</p>
              <p class="text-primary h3">739 kcal</p>

            </div>

          </div>

          <div class="sched d-block d-lg-flex">
            <div class="bg-image" style="background-image: url('img/dishes_3.jpg');" data-aos="fade"></div>
            <div class="text">
              <h3>Seared ahi tuna fillet*, honey-ginger sauce</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto illo delectus...</p>
              <p class="text-primary h3">712 kcal</p>

            </div>

          </div>

        </div>
      </div>


    </div>
  </section> <!-- .section -->


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