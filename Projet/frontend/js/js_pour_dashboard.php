<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
<script>

    let login = '<?php echo $_SESSION['login'] ?>'
    let date = new Date();
    let annee = date.getFullYear();
    let mois = ("0" + (date.getMonth() + 1)).slice(-2);
    let jour = ("0" + date.getDate()).slice(-2);
    let dateFormatee = `${annee}-${mois}-${jour}`;
    //let date = '2023-04-01';

    function createring(id_indicateur, elementid, unite) {
        $.ajax({
        type: 'GET',
        url: 'http://localhost:8888/Projet_IDAW/IDAW/Projet/backend/objectif.php?login='+login+'&id_indicateur='+id_indicateur,
        success: function(data) {
            responseObject = JSON.parse(data);
            indicateur_objectif = responseObject[0].quantite
            console.log(indicateur_objectif);
            $.ajax({
                type: 'GET',
                url: 'http://localhost:8888/Projet_IDAW/IDAW/Projet/backend/dashboard.php?date='+dateFormatee+'&login='+login+'&id_indicateur='+id_indicateur,
                success: function(data) {
                    responseObject = JSON.parse(data);
                    calories_consommées = responseObject[0].quantite_fois_ratio;
                    // Données pour l'anneau de l'énergie active
                    var activeEnergyData = {
                        datasets: [{
                            data: [calories_consommées, indicateur_objectif-calories_consommées],
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
                            text: parseFloat(calories_consommées).toFixed()+' '+unite+'/'+parseFloat(indicateur_objectif).toFixed(),
                            position: 'bottom',
                            fontSize: 15,
                            fontFamily: 'Arial',
                            fontColor: '#333',
                            fontStyle: 'bold',
                            lineHeight: 1.2,
                            padding: 10
                        }
                    };

                    // Créer l'objet Chart pour l'anneau de l'énergie active
                    var activeEnergyCtx = document.getElementById(elementid).getContext('2d');
                    var activeEnergyChart = new Chart(activeEnergyCtx, {
                        type: 'doughnut',
                        data: activeEnergyData,
                        options: activeEnergyOptions
                    });
                    
                    // Appeler la fonction createring suivante
                    if (id_indicateur < 5) {
                        createring(parseInt(id_indicateur) + 1, 'activeEnergyRing' + (parseInt(id_indicateur) + 1), 'g');
                    }
                }
            });
        }
        });
    }

    createring('1', 'activeEnergyRing', 'kcal');

    function getdashboard() {
        var startdate = document.getElementById("start-date").value;
        var enddate = document.getElementById("end-date").value;
        var login = '<?php echo $_SESSION['login'] ?>';

        var xhr = new XMLHttpRequest(); 
        xhr.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
            document.getElementById("result").innerHTML = this.responseText;
            }
        };
        xhr.open("POST", "get_dashboard.php", true);
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.send("startdate="+startdate+"&enddate="+enddate+"&login="+login);
    }
</script>