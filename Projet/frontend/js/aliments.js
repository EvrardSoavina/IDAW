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
    var mealType = $(this).attr("id").replace("add-", "");
  var selectedMeal = $("#" + mealType).val();
  var tableId = "#add-" + mealType + "-table";
  
  if (selectedMeal != "") {
    $(tableId + " tbody").append("<tr><td>" + selectedMeal + "</td></tr>");
  }

    // Save the table data to a cookie
    var tableData = table.html();
    Cookies.set(id + '-table-data', tableData, { expires: 1 }); // Expires in 1 day
  });

  // Load the table data from cookies
  $('.form-group').each(function () {
    var id = $(this).find('select').attr('id');
    var table = $('#' + id + '-table');
    var tableData = Cookies.get(id + '-table-data');
    if (tableData) {
      table.html(tableData);
    }
  });
});


