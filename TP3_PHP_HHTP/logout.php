<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Page de déconnexion</title>
        <meta charset="utf-8">
    </head>
    <body>
    <?php
    unset($_SESSION['login']);
    unset($_SESSION['password']);
    session_destroy();
    ?>

    </body>
</html>