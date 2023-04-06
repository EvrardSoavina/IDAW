var aliments = [];

$(document).ready(function () {

  // Collect the aliments from the server
  $.ajax({
    url: apifolder + '/backend/aliments.php',
    type: 'GET',
    success: function (data) {
      // Parse the JSON response
      aliments = JSON.parse(data);

      // Append options to each select
      $("#breakfast, #snacks, #lunch, #dinner").each(function () {
        var select = $(this);
        select.append('<option value="">Add ' + select.attr("id") + '</option>');
        for (var i = 0; i < aliments.length; i++) {
          select.append('<option value="' + aliments[i].id_aliment + '">' + aliments[i].nom + '</option>');
        }
      });
    }
  });
});

$(document).ready(function () {

  // Add an event listener to each add button
  $('#add-breakfast, #add-snacks, #add-lunch, #add-dinner').click(function () {
    console.log("Le bouton Add a été cliqué !");
    var id = $(this).attr("id") + '-table-data';
    var mealType = $(this).attr("id").replace("add-", "");
    var selectedMealId = $("#" + mealType).val();
    var selectedMealName = "";
    for (var i = 0; i < aliments.length; i++) {
      if (aliments[i].id_aliment == selectedMealId) {
        selectedMealName = aliments[i].nom;
        break;
      }
    }
    var tableId = "#add-" + mealType + "-table";
    if (selectedMealName != "") {
      $(tableId + " tbody").append("<tr><td>" + selectedMealName + "</td></tr>");
    }
  })

})

var water_circles = document.getElementById("water_circles");

document.getElementById("add-water").addEventListener("click", function() {
  var glassesOfWater = parseInt(document.getElementById("water").value);

  for (var i = 0; i < glassesOfWater; i++) {
    var circle = document.createElement("div");
    circle.classList.add("circle");
    water_circles.appendChild(circle);
    
  }
});

document.getElementById("remove-water").addEventListener("click", function() {
  var circles = document.querySelectorAll("#water_circles .circle");
  if (circles.length > 0) {
    var lastCircle = circles[circles.length - 1];
    lastCircle.parentNode.removeChild(lastCircle);
  }
});

