<?php
require_once('cookie_session.php');
require_once('header.php');
?>

<body>

    <header role="banner">
        <?php
        require_once('banner.php');
        renderMenuToHTML('dashboard.php');
        ?>
    </header>
    <!-- END header -->

    <div class="slider-wrap">
        <section class="home-slider owl-carousel">


            <div class="slider-item" style="background-image: url('img/hero_1.jpg');">

                <div class="container">
                    <div class="row slider-text align-items-center justify-content-center">
                        <div class="col-md-8 text-center col-sm-12 ">
                            <h1 data-aos="fade-up">Welcome <?php echo isset($_SESSION['login']) ? $_SESSION['login'] : 'Guest'; ?>!</h1>
                        </div>
                    </div>
                </div>

            </div>

            <div class="slider-item" style="background-image: url('img/hero_2.jpg');">
                <div class="container">
                    <div class="row slider-text align-items-center justify-content-center">
                        <div class="col-md-8 text-center col-sm-12 ">
                            <h1 data-aos="fade-up">Welcome <?php echo isset($_SESSION['login']) ? $_SESSION['login'] : 'Guest'; ?>!</h1>
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
                <div class="col-md-6 mb-4 mb-lg-0 col-lg-3 text-left service-block" data-aos="fade-up" data-aos-delay="">
                    <span class="wrap-icon"><span class="flaticon-dinner d-block mb-4"></span></span>
                    <h3 class="mb-2 text-primary">Enjoy Eating</h3>
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                </div>
                <div class="col-md-6 mb-4 mb-lg-0 col-lg-3 text-left service-block" data-aos="fade-up" data-aos-delay="100">
                    <span class="wrap-icon"><span class="flaticon-fish d-block mb-4"></span></span>
                    <h3 class="mb-2 text-primary">Fresh Sea Foods</h3>
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                </div>
                <div class="col-md-6 mb-4 mb-lg-0 col-lg-3 text-left service-block" data-aos="fade-up" data-aos-delay="200">
                    <span class="wrap-icon"><span class="flaticon-hot-coffee-rounded-cup-on-a-plate-from-side-view d-block mb-4"></span></span>
                    <h3 class="mb-2 text-primary">Cup of Coffees</h3>
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                </div>
                <div class="col-md-6 mb-4 mb-lg-0 col-lg-3 text-left service-block" data-aos="fade-up" data-aos-delay="300">
                    <span class="wrap-icon"><span class="flaticon-meat d-block mb-4"></span></span>
                    <h3 class="mb-2 text-primary">Meat Eaters</h3>
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                </div>
            </div>
        </div>
    </section>


    <section class="section pb-0">
        <div class="container">
            <div class="row mb-5 justify-content-center" data-aos="fade">
                <div class="col-md-7 text-center heading-wrap">
                    <h2 data-aos="fade-up">My dashboard</h2>
                    <p data-aos="fade-up" data-aos-delay="100">
                        Here, you will be able to add your nutrient daily intake ! You just have to let you guide through your dashboard so you'll have an eye on the details that hide behind all the delicious food you eat everyday.
                        Eating is not a sin, and demonising it is not the right way through for a diet journey. Make sure you're in peace with your body, your health and what you eat ! It's all that matters at EAT'S ME !
                        Be you while, and through what you eat.
                    </p>
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

        <div class="clearfix mb-5 pb-5">
            <div class="container-fluid">
                <div class="row" data-aos="fade">
                    <div class="col-md-12 text-center heading-wrap">
                        <h2></h2>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <footer class="site-footer-dashboard" role="contentinfo">

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