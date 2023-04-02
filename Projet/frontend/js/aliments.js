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
