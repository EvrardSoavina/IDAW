function onloginSubmit() {
    let login = $("#login").val();
    let password = $("#motdepasse").val();
    if (nom.trim() !== '') {
        $.ajax({
            url: apifolder + '/login.php',
            method: "POST",
            data: JSON.stringify({ "login": login, "motdepasse": password }),
            success: function (response) {
                echo(response);
            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert("Erreur pour vérifier les credentials");
                console.log(textStatus, errorThrown);
            }
        });
    }
}