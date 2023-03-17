<!DOCTYPE html>
<html>
    <head>
        <title>Page de traitement</title>
        <meta charset="utf-8">
    </head>
    <body>
        <p>Dans le formulaire précédent, vous avez fourni les informations suivantes :</p>
        
        <?php
            echo 'Login : '.$_GET["login"].'<br>';
            echo 'Password : ' .$_GET["password"].'<br>';
        ?>
    </body>
</html>