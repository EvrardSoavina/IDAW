<?php
require_once('header.php');
?>

<body>

  <header role="banner">
    <?php
    require_once('banner.php');
    renderMenuToHTML('objectives.php');
    ?>
  </header>
  <!-- END header -->

  <div class="slider-wrap no-slanted">
    <div class="slider-item" style="background-image: url('img/hero_1.jpg');">

      <div class="container">
        <div class="row slider-text align-items-center justify-content-center">
          <div class="col-md-8 text-center col-sm-12 ">
            <h1 data-aos="fade-up">Let's fix your objectives</h1>
          </div>
        </div>
      </div>

    </div>
    <!-- END slider -->
  </div>

  <section class="section pt-5 top-slant-white2 relative-higher bottom-slant-gray">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12">

<form id="objectives-form">
    <div id="indicator-forms">
        <!-- Indicator forms will be dynamically added here -->
        <div class="indicator-form row">
            <div class="col-md-6 form-group">
                <select id="id_indicateur" class="form-control">
                    <option value="">Select the nutritional indicator</option>
                </select>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-8 form-group">
                        <input type="number" id="quantite" class="form-control" placeholder="quantity" required>
                    </div>
                    <div class="col-md-4 form-group">
                        <div class="remove-btn-wrap">
                        <button type="button" class="btn btn-danger remove-btn" style="display: flex; justify-content: center;">Remove</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- .add indicator button -->
        <div class="row">
            <div class="col-md-12 form-group text-center">
                <button type="button" class="btn btn-primary" id="add-indicator">Add an indicator</button>
            </div>
        </div>
        <!-- .add indicator button -->

        <!-- .enter button -->
        <div class="row">
            <div class="col-md-12 form-group text-center">
                <input type="submit" value="Enter" class="btn btn-primary">
            </div>
        </div>
        <!-- .enter button -->
    </div>
</form>


        </div>
      </div>
    </div>
  </section>
  <!-- .section -->


  <footer class="site-footer" role="contentinfo">

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