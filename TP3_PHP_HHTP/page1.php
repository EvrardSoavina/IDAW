<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Page de traitement</title>
        <meta charset="utf-8">
    </head>
    <body>
    <?php

        echo "Vous êtes connecté en tant que ".$_SESSION['login'];

    ?>

    <p>PHP permet d'exécuter du code sur un serveur et cela pose de nombreux problèmes de sécurité. Il est par exemple possible d'injecter du code PHP dans l'URL ou les formulaires ou même du code SQL.</p>
    </body>
</html>