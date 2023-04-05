<?php
require_once('header.php');
require_once('cookie_session.php');
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
                            <h1 data-aos="fade-up">Welcome </br> <?php echo isset($_SESSION['login']) ? $_SESSION['login'] : 'Guest'; ?>!</h1>
                        </div>
                    </div>
                </div>

            </div>

            <div class="slider-item" style="background-image: url('img/hero_2.jpg');">
                <div class="container">
                    <div class="row slider-text align-items-center justify-content-center">
                        <div class="col-md-8 text-center col-sm-12 ">
                            <h1 data-aos="fade-up">Welcome </br> <?php echo isset($_SESSION['login']) ? $_SESSION['login'] : 'Guest'; ?>!</h1>
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

            <div>
                <!-- first Row -->
                <div class="row" style="display: flex; align-items: flex-end;">

                    <!-- breakfast select bar + button -->
                    <div class="col-md-4 form-group" >
                        <label for="breakfast">Breakfast</label>
                        <select id="breakfast" class="form-control">
                        </select>
                    </div>
                    <div class="col-md-2 form-group">
                        <button type="button" class="btn btn-primary add-btn" id="add-breakfast">Add</button>
                    </div>
                    <!-- breakfast select bar  + button -->

                    <!-- snacks select bar  + button -->
                    <div class="col-md-4 form-group" >
                        <label for="snacks">Snacks</label>
                        <select id="snacks" class="form-control">
                        </select>
                    </div>
                    <div class="col-md-2 form-group">
                        <button type="button" class="btn btn-primary add-btn" id="add-snacks">Add</button>
                    </div>
                    <!-- breakfast select bar  + button -->

                    <!-- breakfast table meal -->
                    <div class="col-md-6 form-group">
                        <table class="table table-striped" id="add-breakfast-table">
                            <thead>
                                <tr>
                                    <th>Add breakfast</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                    <!-- breakfast table meal -->

                    <!-- snacks table meal -->
                    <div class="col-md-6 form-group">
                        <table class="table table-striped" id="add-snacks-table">
                            <thead>
                                <tr>
                                    <th>Add Snacks</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                    <!-- snacks table meal -->

                </div>
                <!-- first Row -->

                <!-- Second Row -->
                <div class="row" style="display: flex; align-items: flex-end;">

                    <!-- lunch select bar + button -->
                    <div class="col-md-4 form-group" >
                        <label for="lunch">Lunch</label>
                        <select id="lunch" class="form-control">
                        </select>
                    </div>
                    <div class="col-md-2 form-group">
                        <button type="button" class="btn btn-primary add-btn" id="add-lunch">Add</button>
                    </div>
                    <!-- lunch select bar + button -->

                    <!-- water select bar + button -->
                    <div class="col-md-4 form-group " >
                        <label for="water ">Water</label>
                        <input type="number" id="water" class="form-control " placeholder="Glasses of water">
                    </div>
                    <div class="col-md-2 form-group">
                        <button type="button" class="btn btn-primary add-btn" id="add-water">Add</button>
                    </div>
                    <!-- water select bar + button -->

                    <!-- lunch table meal -->
                    <div class="col-md-6 form-group">
                        <table class="table table-striped" id="add-lunch-table">
                            <thead>
                                <tr>
                                    <th>Add Lunch</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                    <!-- lunch table meal -->

                </div>
                <!-- Second Row -->

                <!-- third Row -->
                <div class="row" style="display: flex; align-items: flex-end;">

                    <!-- dinner select bar + button -->
                    <div class="col-md-4 form-group" >
                        <label for="dinner">Dinner</label>
                        <select id="dinner" class="form-control">
                        </select>
                    </div>
                    <div class="col-md-2 form-group">
                        <button type="button" class="btn btn-primary add-btn" id="add-dinner">Add</button>
                    </div>
                    <!-- dinner select bar + button -->

                </div>

                <!-- dinner table meal -->
                <div class="col-md-6 form-group" >
                    <table class="table table-striped" id="add-dinner-table">
                        <thead>
                            <tr>
                                <th>Add Dinner</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
                <!-- dinner table meal -->

            </div>
            <!-- third Row -->
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