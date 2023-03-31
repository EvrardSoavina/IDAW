<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="login.js"></script>
</head>
<body>
	<h2>Login Page</h2>
	<form id="login-form">
		<label for="username">Username:</label>
		<input type="text" name="username" id="username"><br>
		<label for="password">Password:</label>
		<input type="password" name="password" id="password"><br>
		<input type="submit" value="Login">
	</form>
	<div id="error-message"></div>
</body>
</html>
<script>
    $(document).ready(function() {
	$('#login-form').submit(function(event) {
		event.preventDefault();
		var username = $('#username').val();
		var password = $('#password').val();
		$.ajax({
			type: 'POST',
			url: 'http://localhost:8888/Projet_IDAW/IDAW/Projet/backend/login.php',
			data: JSON.stringify({ "login": username, "motdepasse": password }),
			success: function(data) {
				if (data == 'Valid credentials') {
					window.location.href = 'welcome.php';
				} else {
					$('#error-message').html('Invalid credentials');
				}
			}
		});
	});
});
</script>