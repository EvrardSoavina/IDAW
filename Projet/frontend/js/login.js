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
                    let date = new Date();
                    let annee = date.getFullYear();
                    let mois = ("0" + (date.getMonth() + 1)).slice(-2);
                    let jour = ("0" + date.getDate()).slice(-2);
                    let heures = ("0" + date.getHours()).slice(-2);
                    let minutes = ("0" + date.getMinutes()).slice(-2);
                    let secondes = ("0" + date.getSeconds()).slice(-2);
                    let dateFormatee = `${annee}-${mois}-${jour} ${heures}:${minutes}:${secondes}`;

                    // Call the journal API
                    $.ajax({
                        url: apifolder + '/backend/journal.php?date=date'+dateFormatee+'&login='+login,
                        type: 'GET',
                        data: {
                            date: dateFormatee,
                            login: login
                        },
                        success: function (response) {
                            if (response == null) {
                                // Send a POST request to the journal API
                                $.ajax({
                                    url: apifolder + '/backend/journal.php',
                                    type: 'POST',
                                    data: JSON.stringify({
                                        "login": login,
                                        "date": dateFormatee
                                    }),
                                    contentType: 'application/json',
                                    dataType: 'json',
                                    success: function (data) {
                                        console.log(data);
                                    },
                                    error: function (xhr, textStatus, errorThrown) {
                                        console.log('Error: ' + errorThrown);
                                    }
                                });
                            } else {
                                console.log(response);
                            }
                        },
                        error: function (xhr, textStatus, errorThrown) {
                            console.log('Error: ' + errorThrown);
                        }
                    });

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


