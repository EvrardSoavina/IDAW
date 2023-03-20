<?php
require_once('config.php');

$connectionString = "mysql:host="._MYSQL_HOST;

if(defined('_MYSQL_PORT'))
    $connectionString .= ";port="._MYSQL_PORT;

$connectionString .= ";dbname="._MYSQL_DBNAME;

$options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8' );


try {
    $pdo = new PDO($connectionString,_MYSQL_USER,_MYSQL_PASSWORD,$options);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Connexion réussie';
}
catch (PDOException $erreur) {
    echo 'Erreur : '.$erreur->getMessage();
}


?>

<!DOCTYPE html>
<html>
    <head>
        <title>REST API</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>REST API</h1>  

            <form id="all_users" action="" method="GET">
            <table> 
                <tr>
                    <td></td>
                    <td><input type="submit" value="get" /></td>
                </tr>
            </table>
            </form>

           <?php
            $pdo = null;
            ?>
    </body>
</html>

