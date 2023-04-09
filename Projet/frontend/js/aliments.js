$(document).ready(function () {

  // Collect the aliments from the server
  $.ajax({
    url: apifolder + '/backend/aliments.php',
    type: 'GET',
    success: function (data) {
      // Parse the JSON response
      var aliments = JSON.parse(data);

      // Append options to each select
      $("#breakfast, #snacks, #lunch, #dinner").each(function () {
        var select = $(this);
        select.append('<option value="">Add ' + select.attr("id") + '</option>');
        $.each(aliments, function (index, value) {
          select.append('<option value="' + value.id_aliment + '">' + value.nom + '</option>');
        });
      });

    }
  });

  var id_type_repas = null;
  let date = new Date();
  let annee = date.getFullYear();
  let mois = ("0" + (date.getMonth() + 1)).slice(-2);
  let jour = ("0" + date.getDate()).slice(-2);
  let heures = ("0" + date.getHours()).slice(-2);
  let minutes = ("0" + date.getMinutes()).slice(-2);
  let secondes = ("0" + date.getSeconds()).slice(-2);
  let dateFormatee = `${annee}-${mois}-${jour} ${heures}:${minutes}:${secondes}`;

  $("#breakfast_add").on("click", function () {
    id_type_repas = 1;
  });

  $("#lunch_add").on("click", function () {
    id_type_repas = 2;
  });

  $("#dinner_add").on("click", function () {
    id_type_repas = 3;
  });

  $("#snacks_add").on("click", function () {
    id_type_repas = 4;
  });

  $(".add_aliment").on("click", function (event) {
    event.preventDefault();

    // Récupérer la valeur de l'aliment et la quantité
    var id_aliment = $(this).siblings("select").val();
    var quantite = $(this).siblings("input[type=number]").val();

    // Appeler le backend pour récupérer l'id_journal correspondant
    $.ajax({
      url: apifolder + '/backend/journal.php?date=date' + dateFormatee + '&login=' + login,
      method: "GET",
      data: {
        login: login,
        date: date
      },
      dataType: "json",
      success: function (response) {
        // Trouver l'id_journal correspondant à id_type_repas
        var id_journal = null;
        for (var i = 0; i < response.length; i++) {
          if (response[i].id_type_repas === id_type_repas) {
            id_journal = response[i].id_journal;
            break;
          }
        }

        if (id_journal === null) {
          alert("Erreur : pas de journal trouvé pour ce type de repas");
        } else {
          // Envoyer la consommation à consommation.php
          $.ajax({
            url: "consommation.php",
            method: "POST",
            data: {
              id_journal: id_journal,
              id_aliment: id_aliment,
              quantite: quantite
            },
            success: function () {
              alert("Consommation enregistrée !");
            },
            error: function () {
              alert("Erreur lors de l'enregistrement de la consommation");
            }
          });
        }
      },
      error: function () {
        alert("Erreur lors de la récupération du journal");
      }
    });
  });

});





var water_circles = document.getElementById("water_circles");

document.getElementById("add-water").addEventListener("click", function () {
  var glassesOfWater = parseInt(document.getElementById("water").value);

  for (var i = 0; i < glassesOfWater; i++) {
    var circle = document.createElement("div");
    circle.classList.add("circle");
    water_circles.appendChild(circle);

  }
});

document.getElementById("remove-water").addEventListener("click", function () {
  var circles = document.querySelectorAll("#water_circles .circle");
  if (circles.length > 0) {
    var lastCircle = circles[circles.length - 1];
    lastCircle.parentNode.removeChild(lastCircle);
  }
});

