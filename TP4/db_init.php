<!DOCTYPE html>
<html>
    <head>
        <title>Création de la BD</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Création de la BD</h1>  
        <?php
            require_once('config.php');
            
            $connectionString = "mysql:host="._MYSQL_HOST;

            if(defined('_MYSQL_PORT'))
                $connectionString .= ";port="._MYSQL_PORT;

            $connectionString .= ";dbname="._MYSQL_DBNAME;

            $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8' );

            $pdo = NULL;
            try {
                $pdo = new PDO($connectionString,_MYSQL_USER,_MYSQL_PASSWORD,$options);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo 'Connexion réussie';
            }
            catch (PDOException $erreur) {
                echo 'Erreur : '.$erreur->getMessage();
            }

            
            $request = $pdo->prepare("DROP TABLE `dbtest`.`users`");
            $request->execute();
            echo 'Suppression réussie';

            $sql = file_get_contents('users.sql');
            $request = $pdo->prepare($sql);
            $request->execute();
            echo 'Création réussie';
        ?>
    </body>
</html>