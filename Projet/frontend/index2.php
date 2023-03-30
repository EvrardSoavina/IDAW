<?php
$currentPageId = 'accueil';
if (isset($_GET['page'])) {
    $currentPageId = $_GET['page']; // récupère la valeur de la variable 'page' dans l'URL, sinon définit la valeur par défaut 'accueil'
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $currentPageId ?></title>
</head>
<body>

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
function renderFooterToHTML($currentPageId) {
        echo 
        '<footer>
            <p> Vous êtes sur le footer de la page' . $currentPageId . '</p>
        </footer>
        </body>
        </html>';
}
?>