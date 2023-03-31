$(document).ready(function () {
	$('#login-form').submit(function (event) {
		event.preventDefault();
		var username = $('#username').val();
		var password = $('#password').val();
		$.ajax({
			type: 'POST',
			url: apifolder + '/backend/login.php',
			data: JSON.stringify({
				"login": username,
				"motdepasse": password
			}),
			success: function (data) {
				if (data == 'Valid credentials') {
					window.location.href = 'welcome.php';
				} else {
					$('#error-message').html('Invalid credentials');
				}
			}
		});
	});
});
