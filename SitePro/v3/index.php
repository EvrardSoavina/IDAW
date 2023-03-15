<?php
    require_once('template_header.php');
    require_once('template_menu.php');

    $currentPageID = 'accueil';
    if(isset($_GET['page'])) {
        $currentPageID = $_GET['page'];
    };
    $currentPageLanguage = 'fr';
    if(isset($_GET['lang'])) {
        $currentPageLanguage = $_GET['lang'];
    }
?>

<header class="bandeau_haut">
    <h1 class="titre">Evrard SOAVINA</h1>
</header>

<?php
    renderMenuToHTML($currentPageID,$currentPageLanguage);
?>

<section class="corps">
    <?php
        $pageToInclude = $currentPageLanguage."/".$currentPageID . ".php";
        if(is_readable($pageToInclude))
            require_once($pageToInclude);
        else
            require_once("error.php");
    ?>

</section>

<?php
    require_once('template_footer.php');
?>