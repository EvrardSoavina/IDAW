<?php
$currentPageId = 'accueil';
if (isset($_GET['page'])) {
    $currentPageId = $_GET['page']; // récupère la valeur de la variable 'page' dans l'URL, sinon définit la valeur par défaut 'accueil'
}

require_once("header.php");
?>

<header class="bandeau_haut">
    <?php
    require_once('login_form.php');
    ?>
</header>

<section class="corps"></section>

<?php
require_once("footer.php");
?>