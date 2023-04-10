<?php
require_once('header.php');
require_once('cookie_session.php');
?>

<body>

  <header role="banner">
    <?php
    require_once('banner.php');
    renderMenuToHTML('news.php');
    ?>
  </header>
  <!-- END header -->

  <div class="slider-wrap">
    <div class="slider-item" style="background-image: url('img/hero_1.jpg');">

      <div class="container">
        <div class="row slider-text align-items-center justify-content-center">
          <div class="col-md-8 text-center col-sm-12 ">
            <h1 data-aos="fade-up">EAT'S ME News</h1>
            <p data-aos="fade-up" data-aos-delay="200"><a href="signup.php" class="btn btn-white btn-outline-white">Sign Up</a></p>
          </div>
        </div>
      </div>

    </div>
    <!-- END slider -->
  </div>

  <section class="section bg-light pt-0 bottom-slant-gray">
    <div class="container">
      <div class="row">
        <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="blog d-block">
            <a class="bg-image d-block" href="single.html" style="background-image: url('img/dishes_1.jpg');"></a>
            <div class="text">
              <h3><a href="single.html">How To Make Salad?</a></h3>
              <p class="sched-time">
                <span><span class="fa fa-calendar"></span> February 22, 2023</span> <br>
              </p>
              <p>If you're looking for a fresh and healthy meal, a salad is a great option.</p>

              <p><a href="#" class="btn btn-primary btn-sm">Read More</a></p>

            </div>

          </div>
        </div>
        <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="blog d-block">
            <a class="bg-image d-block" href="single.html" style="background-image: url('img/dishes_2.jpg');"></a>
            <div class="text">
              <h3><a href="single.html">How To Cook Sweet Potatoes?</a></h3>
              <p class="sched-time">
                <span><span class="fa fa-calendar"></span> February 28, 2023</span> <br>
              </p>
              <p>Sweet potatoes are a delicious and nutritious vegetable that can be cooked in a variety of ways.</p>

              <p><a href="#" class="btn btn-primary btn-sm">Read More</a></p>

            </div>

          </div>
        </div>

        <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="blog d-block">
            <a class="bg-image d-block" href="single.html" style="background-image: url('img/dishes_3.jpg');"></a>
            <div class="text">
              <h3><a href="single.html">How To Cook Noodles?</a></h3>
              <p class="sched-time">
                <span><span class="fa fa-calendar"></span> March 2, 2023</span> <br>
              </p>
              <p>Noodles are a popular dish that can be made in a variety of ways, from stir-fried to boiled in soups.</p>

              <p><a href="#" class="btn btn-primary btn-sm">Read More</a></p>

            </div>

          </div>
        </div>
        <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="blog d-block">
            <a class="bg-image d-block" href="single.html" style="background-image: url('img/dishes_4.jpg');"></a>
            <div class="text">
              <h3><a href="single.html">How To Make Salad?</a></h3>
              <p class="sched-time">
                <span><span class="fa fa-calendar"></span> March 7, 2023</span> <br>
              </p>
              <p>Learn the basics of creating a tasty salad with this step-by-step guide.</p>

              <p><a href="#" class="btn btn-primary btn-sm">Read More</a></p>

            </div>

          </div>
        </div>

        <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="blog d-block">
            <a class="bg-image d-block" href="single.html" style="background-image: url('img/dishes_5.jpg');"></a>
            <div class="text">
              <h3><a href="single.html">How To Make Salad?</a></h3>
              <p class="sched-time">
                <span><span class="fa fa-calendar"></span> March 9, 2023</span> <br>
              </p>
              <p>Learn the basics of creating a tasty salad with this step-by-step guide.</p>

              <p><a href="#" class="btn btn-primary btn-sm">Read More</a></p>

            </div>

          </div>
        </div>
        <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="blog d-block">
            <a class="bg-image d-block" href="single.html" style="background-image: url('img/dishes_2.jpg');"></a>
            <div class="text">
              <h3><a href="single.html">How To Cook Sweet Potatoes?</a></h3>
              <p class="sched-time">
                <span><span class="fa fa-calendar"></span> March 24, 2023</span> <br>
              </p>
              <p>Discover the best techniques for cooking sweet potatoes and enjoy a delicious meal.</p>

              <p><a href="#" class="btn btn-primary btn-sm">Read More</a></p>

            </div>

          </div>
        </div>
      </div>

      <div class="row mt-5" data-aos="fade-up">
        <div class="col-12 text-center">
          <a href="#" class="p-3">1</a>
          <a href="#" class="p-3">2</a>
          <a href="#" class="p-3">3</a>
          <span class="p-3">...</span>
          <a href="#" class="p-3">5</a>
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