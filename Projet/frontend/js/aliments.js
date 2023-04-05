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

  function loadTableDataFromCookie(id, userId) {
    var tableData = Cookies.get(userId + '-' + id + '-table-data');
    console.log('Cookie get:', userId + '-' + id, tableData);
    if (tableData) {
      $('#' + id + ' tbody').html(tableData);
    }
  }

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
    var table = $(tableId + " tbody");
    if (selectedMealName != "") {
      $(tableId + " tbody").append("<tr><td>" + selectedMealName + "</td></tr>");
    }

    // Save the table data to a cookie
    var userId = $("#user_id").val();
    var tableData = table.html();
    Cookies.set(userId + '-' + id + '-table-data', tableData, { expires: 1 }); // Expires in 1 day
    console.log('Cookie set:', userId + '-' + id, tableData);
  });

})
