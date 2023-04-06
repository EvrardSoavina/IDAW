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
		let login = 'Lelea' // A CHANGER
		let date = '2023-04-01' // A CHANGER
		$.ajax({
			type: 'GET',
			url: 'http://localhost:8888/Projet_IDAW/IDAW/Projet/backend/dashboard.php?date='+date+'&login='+login,
			success: function(data) {
				responseObject = JSON.parse(data);
				const datas = [{"nom":"Bouillon de viande et legumes type pot-au-feu, pret a consommer","quantite":"200"},{"nom":"Salade de pates, vegetarienne","quantite":"200"},{"nom":"Blini","quantite":"1000"},{"nom":"Vodka","quantite":"100"},{"nom":"Gin","quantite":"100"}];
				$('#display-result').html(data);
			}
		});
	});
	$('#get-form2').submit(function(event) {
		event.preventDefault();
		let login = 'Lelea' // A CHANGER
		let id_indicateur = '1' // A CHANGER
		let date = '2023-04-01'
		$.ajax({
			type: 'GET',
			url: 'http://localhost:8888/Projet_IDAW/IDAW/Projet/backend/dashboard.php?date='+date+'&login='+login+'&id_indicateur='+id_indicateur,
			success: function(data) {
				responseObject = JSON.parse(data);
				id_type_repas = parseFloat(responseObject[0].quantite_fois_ratio).toFixed(1);
				//id_aliment = id_type_repas
				$('#display-result').html(id_type_repas);
			}
		});
	});
	$('#post-form').submit(function(event) {
		event.preventDefault();
		$.ajax({
			type: 'POST',
			url: 'http://localhost:8888/Projet_IDAW/IDAW/Projet/backend/journal.php',
			data: JSON.stringify({id_type_repas: "1",login: "Lelea",date: "2022-01-01 01:01:03"}),
			success: function(data) {
				obj = JSON.parse(data)
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