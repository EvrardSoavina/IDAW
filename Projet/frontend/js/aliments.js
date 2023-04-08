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

      // Add an event listener to each add button
      $('#add-breakfast, #add-snacks, #add-lunch, #add-dinner').click(function () {
        console.log("Le bouton Add a été cliqué !");
        var id = $(this).attr("id") + '-table-data';
        var mealType = $(this).attr("id").replace("add-", "");
        var selectedMealId = $("#" + mealType).val();
        var selectedMeal = aliments.find(function (element) {
          return element.id_aliment == selectedMealId;
        });
        var selectedMealName = selectedMeal ? selectedMeal.nom : "";
        var selectedMealQty = $("#" + mealType + "-quantity").val();
        var tableId = "#add-" + mealType + "-table";
        if (selectedMealName != "" && selectedMealQty != "") {
          $(tableId + " tbody").append("<tr><td>" + selectedMealName + "</td><td>" + selectedMealQty + "</td></tr>");
        }
      });

    }
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

