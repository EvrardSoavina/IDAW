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
			data: JSON.stringify({$login : "",$motdepasse : "", $prenom : "", $nom : "", $email : "", $date_de_naissance : "", $id_sexe : "", $id_tranche_age : "", $id_niveau: "", $taille: "", $poids: ""}),
			success: function(data) {
					$('#display-result').html(data);
			}
		});
	});
	$('#put-form').submit(function(event) {
		event.preventDefault();
		$.ajax({
			type: 'PUT',
			url: 'http://localhost:8888/Projet_IDAW/IDAW/Projet/backend/utilisateur.php',
			data: JSON.stringify({$login : "",$motdepasse : "", $prenom : "", $nom : "", $email : "", $date_de_naissance : "", $id_sexe : "", $id_tranche_age : "", $id_niveau: "", $taille: "", $poids: ""}),
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
			data: JSON.stringify({$login : ""}),
			success: function(data) {
					$('#display-result').html(data);
			}
		});
	});
});
</script>