<?php
$currentPageId = 'accueil';
if (isset($_GET['page'])) {
    $currentPageId = $_GET['page']; // récupère la valeur de la variable 'page' dans l'URL, sinon définit la valeur par défaut 'accueil'
}

require_once("header.php");
?>

<header class="bandeau_haut">
    <form>
        <label for="login">Login:</label>
        <input type="text" id="login" name="login" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="Submit" onclick="onloginSubmit()">
    </form>
</header>

<section class="corps">

</section>

<script> // A METTRE DANS CRUD.JS
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
</script>

<?php
require_once("footer.php");
?>