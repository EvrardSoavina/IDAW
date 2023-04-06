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
                    <canvas id="activeEnergyRing"></canvas>
                    <div id="display-result"></div>
                    <table id="aliments_consommées_auj"></table>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
<script>
        let login = 'Lelea' // A CHANGER
		let id_indicateur = '1' // A CHANGER
		let date = '2023-04-01'
		$.ajax({
			type: 'GET',
			url: 'http://localhost:8888/Projet_IDAW/IDAW/Projet/backend/objectif.php?login='+login+'&id_indicateur='+id_indicateur,
			success: function(data) {
				responseObject = JSON.parse(data);
                calories_objectif = responseObject[0].quantite
                $.ajax({
                    type: 'GET',
                    url: 'http://localhost:8888/Projet_IDAW/IDAW/Projet/backend/dashboard.php?date='+date+'&login='+login+'&id_indicateur='+id_indicateur,
                    success: function(data) {
                        responseObject = JSON.parse(data);
                        calories_consommées = responseObject[0].quantite_fois_ratio;
                        // Données pour l'anneau de l'énergie active
                        var activeEnergyData = {
                            datasets: [{
                                data: [calories_consommées, calories_objectif-calories_consommées],
                                backgroundColor: ['#FF2D55', '#EDEDED'],
                                borderWidth: 1
                            }]
                        };
                        // Options pour l'anneau de l'énergie active
                        var activeEnergyOptions = {
                            rotation: 0.5 * Math.PI,
                            circumference: 2 * Math.PI,
                            cutoutPercentage: 75,
                            tooltips: {
                                enabled: false
                            },
                            hover: {
                                mode: null
                            },
                            title: {
                                display: true,
                                text: parseFloat(calories_consommées).toFixed()+' kcal/'+parseFloat(calories_objectif).toFixed(),
                                position: 'bottom',
                                fontSize: 20,
                                fontFamily: 'Arial',
                                fontColor: '#333',
                                fontStyle: 'bold',
                                lineHeight: 1.2,
                                padding: 10
                            }
                        };

                        // Créer l'objet Chart pour l'anneau de l'énergie active
                        var activeEnergyCtx = document.getElementById('activeEnergyRing').getContext('2d');
                        var activeEnergyChart = new Chart(activeEnergyCtx, {
                            type: 'doughnut',
                            data: activeEnergyData,
                            options: activeEnergyOptions
                        });
                    }
                });
			}
		});

        $.ajax({
            method: "GET",
            url: 'http://localhost:8888/Projet_IDAW/IDAW/Projet/backend/dashboard.php?date='+date+'&login='+login,
            success: function(datas) {

                const data = JSON.parse(datas);

                const table = document.getElementById("aliments_consommées_auj");
                // Créez une ligne pour les en-têtes
                const headerRow = table.insertRow(0);
                const nomHeader = headerRow.insertCell(0);
                nomHeader.innerHTML = "<b>Nom</b>";
                const quantiteHeader = headerRow.insertCell(1);
                quantiteHeader.innerHTML = "<b>Quantité</b>";

                // Ajoutez une ligne pour chaque aliment
                data.forEach((aliment, index) => {
                    const row = table.insertRow(index + 1);
                    const nomCell = row.insertCell(0);
                    nomCell.innerText = aliment.nom;
                    const quantiteCell = row.insertCell(1);
                    quantiteCell.innerText = aliment.quantite;
                });
            
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert("Erreur pour récupere les données de la table MySQL");
                console.log(textStatus, errorThrown);
            }
        });
		
        

</script>
</body>

</html>