<?php
require_once('header.php');
require_once('cookie_session.php');
?>

<body>

  <header role="banner">
    <?php
    require_once('banner.php');
    renderMenuToHTML('index.php');
    ?>
  </header>
  <!-- END header -->

  <div class="slider-wrap">
    <section class="home-slider owl-carousel">

      <div class="slider-item" style="background-image: url('img/hero_1.jpg');">

        <div class="container">
          <div class="row slider-text align-items-center justify-content-center">
            <div class="col-md-8 text-center col-sm-12 ">
              <h1 data-aos="fade-up">Enjoy Food while being you</h1>
              <p data-aos="fade-up" data-aos-delay="200"><a href="signup.php" class="btn btn-white btn-outline-white">Sign Up</a></p>
            </div>
          </div>
        </div>

      </div>

      <div class="slider-item" style="background-image: url('img/hero_2.jpg');">
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center">
            <div class="col-md-8 text-center col-sm-12 ">
              <h1 data-aos="fade-up">Delecious Food</h1>
              <p data-aos="fade-up" data-aos-delay="200"><a href="#" class="btn btn-white btn-outline-white">Sign Up</a></p>
            </div>
          </div>
        </div>

      </div>

    </section>
    <!-- END slider -->
  </div>


  <section class="section bg-light py-5  bottom-slant-gray">
    <div class="container">
      <div class="row">
        <div class="col-md-6 mb-4 mb-lg-0 col-lg-3 text-left service-block" data-aos="fade-up" data-aos-delay="100">
          <span class="wrap-icon"><span class="flaticon-fish d-block mb-4"></span></span>
          <h3 class="mb-2 text-primary">Learn. Follow. Progress.</h3>
          <p>Keeping a food diary gives you a better understanding of your habits and increases your chances of reaching your goals.</p>
        </div>
        <div class="col-md-6 mb-4 mb-lg-0 col-lg-3 text-left service-block" data-aos="fade-up" data-aos-delay="200">
          <span class="wrap-icon"><span class="flaticon-hot-coffee-rounded-cup-on-a-plate-from-side-view d-block mb-4"></span></span>
          <h3 class="mb-2 text-primary">Record more easily.</h3>
          <p>Scan barcodes, save meals and recipes, and use Quick Tools for quick and easy food tracking.</p>
        </div>
        <div class="col-md-6 mb-4 mb-lg-0 col-lg-3 text-left service-block" data-aos="fade-up" data-aos-delay="300">
          <span class="wrap-icon"><span class="flaticon-meat d-block mb-4"></span></span>
          <h3 class="mb-2 text-primary">Stay motivated.</h3>
          <p>Join the world's largest fitness community for tips and tricks, plus 24/7 support.</p>
        </div>
        <div class="col-md-6 mb-4 mb-lg-0 col-lg-3 text-left service-block" data-aos="fade-up" data-aos-delay="">
          <span class="wrap-icon"><span class="flaticon-dinner d-block mb-4"></span></span>
          <h3 class="mb-2 text-primary">Recipes & Inspiration</h3>
          <p>Get nutritionist-approved recipes and motivational workout tips</p>
        </div>
      </div>
    </div>
  </section>

  <section class="section pb-0">
    <div class="container">
      <div class="row mb-5 justify-content-center" data-aos="fade">
        <div class="col-md-7 text-center heading-wrap">
          <h2 data-aos="fade-up">Good health starts with good nutrition.</h2>
          <p data-aos="fade-up" data-aos-delay="100">Want to be more careful about what you eat? Track your meals, learn more about your habits, and reach your goals with Eat's Me.</p>
        </div>
      </div>
      <div class="row align-items-center">
        <div class="col-lg-4">
          <img src="img/dishes_1.jpg" alt="Free website template by Free-Template.co" class="img-fluid about_img_1" data-aos="fade" data-aos-delay="200">
        </div>
        <div class="col-lg-4">
          <img src="img/about_1.jpg" alt="Free website template by Free-Template.co" class="img-fluid about_img_1" data-aos="fade" data-aos-delay="300">
          <img src="img/about_2.jpg" alt="Free website template by Free-Template.co" class="img-fluid about_img_1" data-aos="fade" data-aos-delay="400">
        </div>
        <div class="col-lg-4">
          <img src="img/dishes_3.jpg" alt="Free website template by Free-Template.co" class="img-fluid about_img_1" data-aos="fade" data-aos-delay="500">
        </div>
      </div>
    </div>
    
  </section>


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
              <p></p>
              <p class="text-primary h3">584 kcal</p>
            </div>

          </div>

          <div class="sched d-block d-lg-flex">
            <div class="bg-image" style="background-image: url('img/dishes_1.jpg');" data-aos="fade"></div>
            <div class="text">
              <h3>Spicy Calamari and beans</h3>
              <p></p>                
              <p class="text-primary h3">398 kcal</p>

            </div>

          </div>

        </div>

        <div class="col-md-6">
          <div class="sched d-block d-lg-flex">
            <div class="bg-image order-2" style="background-image: url('img/dishes_2.jpg');" data-aos="fade"></div>
            <div class="text order-1">
              <h3>Bacon wrapped wild gulf prawns</h3>
              <p></p>
              <p class="text-primary h3">579 kcal</p>

            </div>

          </div>

          <div class="sched d-block d-lg-flex">
            <div class="bg-image" style="background-image: url('img/dishes_3.jpg');" data-aos="fade"></div>
            <div class="text">
              <h3>Seared ahi tuna fillet*, honey-ginger sauce</h3>
              <p></p>
              <p class="text-primary h3">630 kcal</p>

            </div>

          </div>

        </div>
      </div>

    </div>
  </section> <!-- .section -->

  <section class="section relative-higher">

    <div class="clearfix mb-5 pb-5">
      <div class="container-fluid">
        <div class="row" data-aos="fade">
          <div class="col-md-12 text-center heading-wrap">
            <h2>Testimonial</h2>
            <!-- <span class="back-text">Testimonial</span> -->
          </div>
        </div>
      </div>
    </div>

    <div class="container">

      <div class="row justify-content-center">
        <div class="col-lg-7">
          <div class="owl-carousel centernonloop2">
            <div class="slide" data-aos="fade-left" data-aos-delay="100">
              <blockquote class="testimonial">
                <p>&ldquo; Eat's Me allowed me to sound the alarm bells about my diet, and to clearly understand what I absolutely had to change. &rdquo;</p>
                <div class="d-flex author">
                  <img src="img/person_1.jpg" alt="" class="mr-4">
                  <div class="author-info">
                    <h4>Mellisa Howard</h4>
                    <p>CEO, XYZ Company</p>
                  </div>
                </div>
              </blockquote>
            </div>
            <div class="slide" data-aos="fade-left" data-aos-delay="200">
              <blockquote class="testimonial">
                <p>&ldquo; Now, when my friends get into running and get frustrated, I tell them to hang in there because eventually they'll go faster. &rdquo;</p>
                <div class="d-flex author">
                  <img src="img/person_2.jpg" alt="" class="mr-4">
                  <div class="author-info">
                    <h4>Mike Richardson</h4>
                    <p>CEO, XYZ Company</p>
                  </div>
                </div>
              </blockquote>
            </div>
            <div class="slide" data-aos="fade-left" data-aos-delay="300">
              <blockquote class="testimonial">
                <p>&ldquo; I naturally adopted the concept of conscious eating.. it takes 15 to 20 minutes for food to reach the stomach, so I started eating more slowly. &rdquo;</p>
                <div class="d-flex author">
                  <img src="img/person_3.jpg" alt="" class="mr-4">
                  <div class="author-info">
                    <h4>Charles White</h4>
                    <p>CEO, XYZ Company</p>
                  </div>
                </div>
              </blockquote>
            </div>
          </div>
        </div>
      </div>




    </div>
  </section> <!-- .section -->

  <section class="section  bg-light top-slant-white">
    <div class="clearfix mb-5 pb-5">
      <div class="container-fluid">
        <div class="row" data-aos="fade">
          <div class="col-md-12 text-center heading-wrap">
            <h2>Blog</h2>
            <span class="back-text">Our Blog</span>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="blog d-block">
            <a class="bg-image d-block" href="single.php" style="background-image: url('img/dishes_1.jpg');"></a>
            <div class="text">
              <h3><a href="single.php">15 Make-Ahead Breakfasts Under 300 Calories</a></h3>
              <p class="sched-time">
                <span><span class="fa fa-calendar"></span> April 22, 2018</span> <br>
              </p>
              <p>We've all heard more than once that starting the day with a healthy breakfast is great for the brain and the belly. But with all that prework hustle and bustle, not everyone has time to whip up a hot stack of pancakes or bake a fancy frittata. Make your morning routine a breeze by preparing a few nutritious staples ahead of time, like hearty oatmeal cups, simple egg dishes and grab-and-go bars.</p>

              <p><a href="#" class="btn btn-primary btn-sm">Read More</a></p>

            </div>

          </div>
        </div>
        <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="blog d-block">
            <a class="bg-image d-block" href="single.php" style="background-image: url('img/dishes_2.jpg');"></a>
            <div class="text">
              <h3><a href="single.php">The Problem with Cheat Days</a></h3>
              <p class="sched-time">
                <span><span class="fa fa-calendar"></span> April 22, 2018</span> <br>
              </p>
              <p>As a registered dietitian, I shudder when I hear the term “cheat day.” Not because I'm thinking of people shoving donuts and cheeseburgers in their mouths left and right, but because it's a term rooted in diet culture that firmly places food in “good” or “bad” camps.</p>

              <p><a href="#" class="btn btn-primary btn-sm">Read More</a></p>

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
    

  <?php
  require_once('footer.php');
  require_once('loader.php');
  ?>

</body>

</html>