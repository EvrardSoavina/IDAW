<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="login.js"></script>
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
			url: 'http://localhost:8888/Projet_IDAW/IDAW/Projet/backend/utilisateur.php',
			success: function(data) {
					$('#display-result').html(data);
			}
		});
	});
	$('#get-form2').submit(function(event) {
		event.preventDefault();
		$.ajax({
			type: 'GET',
			url: 'http://localhost:8888/Projet_IDAW/IDAW/Projet/backend/utilisateur.php?login=Ezz_87',
			success: function(data) {
					$('#display-result').html(data);
			}
		});
	});
	$('#post-form').submit(function(event) {
		event.preventDefault();
		$.ajax({
			type: 'POST',
			url: 'http://localhost:8888/Projet_IDAW/IDAW/Projet/backend/utilisateur.php',
			data: JSON.stringify({login : "Al-BD",motdepasse : "password", prenom : "Evrard", nom : "Soavina", email : "evr@gmail.com", date_de_naissance : "2001-07-04", id_sexe : "1", id_tranche_age : "2", id_niveau: "1", taille: "180", poids: "90"}),
			success: function(data) {
					$('#display-result').html(data);
			}
			error: function(jqXHR, textStatus, errorThrown) {
                        alert("Erreur lors de l'ajout de l'utilisateur.");
                        console.log(textStatus, errorThrown);
                    }
		});
	});
	$('#put-form').submit(function(event) {
		event.preventDefault();
		$.ajax({
			type: 'PUT',
			url: 'http://localhost:8888/Projet_IDAW/IDAW/Projet/backend/utilisateur.php',
			data: JSON.stringify({login : "evrsvna",motdepasse : "supersecretpassword", prenom : "Evrard", nom : "Soavina", email : "evr@gmail.com", date_de_naissance : "2001-07-04", id_sexe : "1", id_tranche_age : "2", id_niveau: "1", taille: "180", poids: "90"}),
			success: function(data) {
					$('#display-result').html(data);
			}
		});
	});
	$('#delete-form').submit(function(event) {
		event.preventDefault();
		$.ajax({
			type: 'DELETE',
			url: 'http://localhost:8888/Projet_IDAW/IDAW/Projet/backend/utilisateur.php',
			data: JSON.stringify({login : "evrsvna"}),
			success: function(data) {
					$('#display-result').html(data);
			}
		});
	});
});
</script>