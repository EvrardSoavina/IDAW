$(document).ready(function () {
    $('#login-form').submit(function (event) {
        event.preventDefault();
        var login = $('#login').val();
        var password = $('#password').val();
        $.ajax({
            type: 'POST',
            url: apifolder + '/backend/login.php',
            data: JSON.stringify({
                "login": login,
                "motdepasse": password
            }),
            success: function (data) {
                if (data == 'Valid credentials') {
                    createCookie('login', login, 1); // création du cookie contenant le login
                    window.location.href = 'dashboard.php'; // redirection vers la page "dashboard.php"
                } else {
                    $('#error-message').html('Invalid credentials');
                }
            }
        });
    });

    //  création d'un cookie
    function createCookie(name, value, days) {
        var expires;
        if (days) {
            var date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            expires = "; expires=" + date.toGMTString();
        }
        else {
            expires = "";
        }
        document.cookie = name + "=" + value + expires + "; path=/";
    }
});


