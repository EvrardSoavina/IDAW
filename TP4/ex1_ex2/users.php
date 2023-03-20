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

$request = $pdo->prepare("select * from users");
$request->execute();

$resultat = $request->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP / MySQL</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Bases de données MySQL</h1>  
        <?php
            /*echo '<pre>';
            print_r($resultat);
            echo '</pre>';*/
            echo '<h3>Users</h3>';

            echo '
            <table border="3">
                <tr>
                  <th>Id</th>
                  <th>Nom</th>
                  <th>Email</th>
                </tr>';

                foreach($resultat as $data) {
                    echo 
                    '<tr>
                        <td>'.$data['id'].'</td>
                        <td>'.$data['name'].'</td>
                        <td>'.$data['email'].'</td>
                    </tr>';
                };
            echo '</table>';

            $request = $pdo->prepare("INSERT INTO `users` (`id`, `name`, `email`) VALUES (NULL, 'prague', 'prague@gmail.com')");
            $request->execute();

            echo 'Entrée ajoutée dans la table';

            $pdo = null;
        ?>
    </body>
</html>

