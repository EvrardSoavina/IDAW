<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
	<h2>Login Page</h2>
	<form id="post-form">
		<input type="submit" value="post request">
	</form>
	<div id="display-result"></div>
</body>
</html>
<script>
    $(document).ready(function() {
	$('#post-form').submit(function(event) {
		event.preventDefault();
		let nom_repas = 'déjeuner' // A PRENDRE DEPUIS LE FORM
		let nom_aliment = 'Gin' // A PRENDRE DEPUIS LE FORM
		let login = 'Lelea' // = $_SESSION['login']
		let quantite = '100' // A PRENDRE DEPUIS LE FORM
		let date = new Date();
		let annee = date.getFullYear();
		let mois = ("0" + (date.getMonth() + 1)).slice(-2);
		let jour = ("0" + date.getDate()).slice(-2);
		let heures = ("0" + date.getHours()).slice(-2);
		let minutes = ("0" + date.getMinutes()).slice(-2);
		let secondes = ("0" + date.getSeconds()).slice(-2);
		let dateFormatee = `${annee}-${mois}-${jour} ${heures}:${minutes}:${secondes}`;
// Avoir la correspondance nom du type de repas (dejeuner, diner, ..) avec l'id associé
		$.ajax({
			type: 'GET',
			url: 'http://localhost:8888/Projet_IDAW/IDAW/Projet/backend/type_repas.php?nom_repas='+nom_repas,
			success: function(data) {
				responseObject = JSON.parse(data);
				id_type_repasss = responseObject[0].id_type_repas;
				$.ajax({
					type: 'GET',
					url: 'http://localhost:8888/Projet_IDAW/IDAW/Projet/backend/aliments.php?nom='+nom_aliment,
					success: function(data) {
						responseObject = JSON.parse(data);
						id_aliment = responseObject[0].id_aliment;

						$.ajax({
							type: 'POST',
							url: 'http://localhost:8888/Projet_IDAW/IDAW/Projet/backend/journal.php',
							data: JSON.stringify({id_type_repas: id_type_repasss,login: login,date: dateFormatee}),
							success: function(data) {
								$.ajax({
									type: 'POST',
									url: 'http://localhost:8888/Projet_IDAW/IDAW/Projet/backend/consommation.php',
									data: JSON.stringify({id_journal: "100",id_aliment: id_aliment,quantite: quantite}),
									success: function(data) {
											$('#display-result').html(data);
									}
								});
							}
						});
					}
				});
			}
		});
		
	});
});
</script>