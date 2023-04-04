<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
	<h2>Login Page</h2>
	<form id="get-form">
		<input type="submit" value="Get request">
	</form>
	<form id="get-form2">
		<input type="submit" value="Get one request">
	</form>
	<form id="post-form">
		<input type="submit" value="post request">
	</form>
	<form id="put-form">
		<input type="submit" value="put request">
	</form>
	<form id="delete-form">
		<input type="submit" value="delete request">
	</form>
	<div id="display-result"></div>
</body>
</html>
<script>
    $(document).ready(function() {
	$('#get-form').submit(function(event) {
		event.preventDefault();
		$.ajax({
			type: 'GET',
			url: 'http://localhost:8888/Projet_IDAW/IDAW/Projet/backend/aliments.php',
			success: function(data) {
					$('#display-result').html(data);
			}
		});
	});
	$('#get-form2').submit(function(event) {
		event.preventDefault();
		let nom_aliment = 'Gin' // A CHANGER
		$.ajax({
			type: 'GET',
			url: 'http://localhost:8888/Projet_IDAW/IDAW/Projet/backend/aliments.php?nom='+nom_aliment,
			success: function(data) {
				responseObject = JSON.parse(data);
				id_type_repas = responseObject[0].id_aliment;
				id_aliment = id_type_repas
				//id_aliment = responseObject[0].id_aliment;
				$('#display-result').html(id_aliment);
			}
		});
	});
	$('#post-form').submit(function(event) {
		event.preventDefault();
		$.ajax({
			type: 'POST',
			url: 'http://localhost:8888/Projet_IDAW/IDAW/Projet/backend/indicateur_nutritionnel.php',
			data: JSON.stringify({nom: "test",recommandation_oms: "0"}),
			success: function(data) {
					$('#display-result').html(data);
			}
		});
	});
	$('#put-form').submit(function(event) {
		event.preventDefault();
		$.ajax({
			type: 'PUT',
			url: 'http://localhost:8888/Projet_IDAW/IDAW/Projet/backend/journal.php',
			data: JSON.stringify({id_indicateur: "1",login: "Lelea",quantite: "49"}),
			success: function(data) {
					$('#display-result').html(data);
			}
		});
	});
	$('#delete-form').submit(function(event) {
		event.preventDefault();
		$.ajax({
			type: 'DELETE',
			url: 'http://localhost:8888/Projet_IDAW/IDAW/Projet/backend/journal.php',
			data: JSON.stringify({id_indicateur: "1",login: "Lelea"}),
			success: function(data) {
					$('#display-result').html(data);
			}
		});
	});
});
</script>