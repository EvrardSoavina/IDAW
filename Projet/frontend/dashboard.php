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
                            <h1 data-aos="fade-up">Welcome </br> <?php echo $login ?>!</h1>
                        </div>
                    </div>
                </div>

            </div>

            <div class="slider-item" style="background-image: url('img/hero_2.jpg');">
                <div class="container">
                    <div class="row slider-text align-items-center justify-content-center">
                        <div class="col-md-8 text-center col-sm-12 ">
                            <h1 data-aos="fade-up">Welcome </br> <?php echo $login ?>!</h1>
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

                <form id="breakfast-form" class="row" style="display: flex; align-items: flex-end;">

                    <!-- breakfast select bar + button -->
                    <div class="col-md-7 form-group">
                        <label for="breakfast">Breakfast</label>
                        <select id="breakfast" class="form-control">
                        </select>
                    </div>
                    <div class="col-md-3 form-group">
                        <label for="breakfast-quantity ">Quantity</label>
                        <input type="number" id="breakfast-quantity" class="form-control " placeholder="Enter Quantity">
                    </div>
                    <div class="col-md-2 form-group">
                        <button type="button" class="btn btn-primary add-btn" id="add-breakfast">Add</button>
                    </div>
                    <!-- breakfast select bar  + button -->

                    <!-- first Row -->
                    <!-- Second Row -->

                    <!-- breakfast table meal -->
                    <div class="col-md-12 form-group">
                        <table class="table table-striped" id="add-breakfast-table">
                            <thead>
                                <tr>
                                    <th>Add breakfast</th>
                                    <th>Quantity</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                    <!-- breakfast table meal -->

                    <!-- Second Row -->
                </form>

                <form id="snacks-form" class="row" style="display: flex; align-items: flex-end;">

                    <!-- Third Row -->

                    <!-- snacks select bar  + button -->
                    <div class="col-md-7 form-group">
                        <label for="snacks">Snacks</label>
                        <select id="snacks" class="form-control">
                        </select>
                    </div>
                    <div class="col-md-3 form-group">
                        <label for="snacks-quantity ">Quantity</label>
                        <input type="number" id="snacks-quantity" class="form-control " placeholder="Enter Quantity">
                    </div>
                    <div class="col-md-2 form-group">
                        <button type="button" class="btn btn-primary add-btn" id="add-snacks">Add</button>
                    </div>
                    <!-- snacks select bar  + button -->

                    <!-- Third Row -->

                    <!-- snacks table meal -->
                    <div class="col-md-12 form-group">
                        <table class="table table-striped" id="add-snacks-table">
                            <thead>
                                <tr>
                                    <th>Add Snacks</th>
                                    <th>Quantity</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                    <!-- snacks table meal -->

                    <!-- Third Row -->

                </form>


                <form id="lunch-form" class="row" style="display: flex; align-items: flex-end;">

                    <!-- Fourth Row -->

                    <!-- lunch select bar + button -->
                    <div class="col-md-7 form-group">
                        <label for="lunch">Lunch</label>
                        <select id="lunch" class="form-control">
                        </select>
                    </div>
                    <div class="col-md-3 form-group">
                        <label for="lunch-quantity ">Quantity</label>
                        <input type="number" id="lunch-quantity" class="form-control " placeholder="Enter Quantity">
                    </div>
                    <div class="col-md-2 form-group">
                        <button type="button" class="btn btn-primary add-btn" id="add-lunch">Add</button>
                    </div>
                    <!-- lunch select bar + button -->

                    <!-- Fourth Row -->

                    <!-- Fifth Row -->

                    <!-- lunch table meal -->
                    <div class="col-md-12 form-group">
                        <table class="table table-striped" id="add-lunch-table">
                            <thead>
                                <tr>
                                    <th>Add Lunch</th>
                                    <th>Quantity</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                    <!-- lunch table meal -->

                    <!-- Fifth Row -->

                </form>
            </div>



            <form id="dinner-form" class="row" style="display: flex; align-items: flex-end;">

                <!-- Sixth Row -->

                <!-- dinner select bar + button -->
                <div class="col-md-7 form-group">
                    <label for="dinner">Dinner</label>
                    <select id="dinner" class="form-control">
                    </select>
                </div>
                <div class="col-md-3 form-group">
                    <label for="dinner-quantity ">Quantity</label>
                    <input type="number" id="dinner-quantity" class="form-control " placeholder="Enter Quantity">
                </div>

                <div class="col-md-2 form-group">
                    <button type="button" class="btn btn-primary add-btn" id="add-dinner">Add</button>
                </div>
                <!-- dinner select bar + button -->

                <!-- Sixth Row -->

                <!-- Seventh Row -->

                <!-- dinner table meal -->
                <div class="col-md-12 form-group">
                    <table class="table table-striped" id="add-dinner-table">
                        <thead>
                            <tr>
                                <th>Add Dinner</th>
                                <th>Quantity</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
                <!-- dinner table meal -->

                <!-- Seventh Row -->

            </form>


            <form id="water-form" class="row" style="display: flex; align-items: flex-end;">

                <!-- water select bar + button -->
                <div class="col-md-4 form-group">
                    <label for="water">Water</label>
                    <input type="number" id="water" class="form-control" placeholder="Glasses of water">
                </div>
                <div class="col-md-2 form-group pr-0">
                    <button type="button" class="btn btn-primary add-btn" id="add-water">Add</button>
                </div>
                <div class="col-md-2 form-group pl-0">
                    <button type="button" class="btn btn-danger remove-btn" id="remove-water" style="text-align:right">Remove</button>
                </div>
                <!-- water select bar + buttons -->

                <div class="col-md-4 form-group" id="water_circles">
                    <!-- 6 blocks here for the blue circles-->
                </div>

            </form>

        </div>
    </section>

    <footer class="site-footer-dashboard" role="contentinfo">
        
    <?php
    require_once('footer.php');
    require_once('loader.php');
    ?>
</body>

</html>