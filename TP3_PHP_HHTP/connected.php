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

    $_SESSION['login'] = $_POST['login'];

        echo "Vous êtes connecté en tant que ".$_SESSION['login']; 
        echo "<br>";
        // on simule une base de données
        $users = array(
            // login => password
            'riri' => 'fifi',
            'yoda' => 'maitrejedi' );

        $login = "anonymous";
        $errorText = "";
        $successfullyLogged = false;

        if(isset($_POST['login']) && isset($_POST['password'])) {
            $tryLogin=$_POST['login'];
            $tryPwd=$_POST['password'];

            // si login existe et password correspond
            if( array_key_exists($tryLogin,$users) && $users[$tryLogin]==$tryPwd ) {
                $successfullyLogged = true;
                $login = $tryLogin;
            } else
                $errorText = "Erreur de login/password";
        } else
            $errorText = "Merci d'utiliser le formulaire de login";
        if(!$successfullyLogged) {
            echo $errorText;
        } else {
            echo "<h1>Bienvenu ".$login."</h1>";
            print_r($_POST);
        };
        echo "<br>"
    ?>
    <link><a href="page1.php">page1</a></link>
    <link><a href="logout.php">se déconnecter</a></link>



    </body>
</html>