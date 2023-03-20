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

echo "<br>";
print_r($_POST);

if(isset($_POST['name'])){
    $var1=$_POST['name'];
    $var2=$_POST['email'];
    $b=$pdo->prepare("INSERT INTO `users` (`id`, `name`, `email`) VALUES (NULL, :var1, :var2)");
    $b->bindParam(":var1",$var1);
    $b->bindParam(":var2",$var2);
    $b->execute();
}

if(isset($_POST['deleterow'])){
    $var1=$_POST['deleterow'];
    $c=$pdo->prepare("DELETE FROM users WHERE `users`.`id` = :var1");
    $c->bindParam(":var1",$var1);
    $c->execute();
}

if(isset($_POST['updaterowid'])){
    $var1=$_POST['updaterowid'];
    $var2=$_POST['updaterowname'];
    $var3=$_POST['updaterowemail'];
    $c=$pdo->prepare("UPDATE `users` SET `name` = :var2, `email` = :var3 WHERE `users`.`id` = :var1;");
    $c->bindParam(":var1",$var1);
    $c->bindParam(":var2",$var2);
    $c->bindParam(":var3",$var3);
    $c->execute();
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
                  <th>Action</th>
                </tr>';
                foreach($resultat as $data) {
                    echo 
                    '<tr>
                        <td>'.$data['id'].'</td>
                        <td>'.$data['name'].'</td>
                        <td>'.$data['email'].'</td>
                        <td>
                        <div>
                        <form style="display: inline-block" id="login_form" action="updaterow.php" method="POST">
                        <table> 
                        <input type="hidden" name="inforowid" value='.$data['id'].' />
                        <input type="hidden" name="inforowname" value='.$data['name'].' />
                        <input type="hidden" name="inforowemail" value='.$data['email'].' />
                            <tr>
                                <td><input type="submit" value="modifier" /></td>
                            </tr>
                        </table>
                        </form>
                        <form style="display: inline-block" id="login_form" action="users.php" method="POST">
                        <table> 
                        <input type="hidden" name="deleterow" value='.$data['id'].' />
                            <tr>
                                <td><input type="submit" value="supprimer" /></td>
                            </tr>
                        </table>
                        </form>
                        </div>

                        </td>
                        </tr>';
                };
            echo '</table>';
        ?>

            <form id="login_form" action="users.php" method="POST">
            <table> 
                <tr>
                    <td>Name :</td>
                    <td><input type="text" name="name"></td>
                </tr> 
                <tr>
                    <td>email :</td>
                    <td><input type="text" name="email"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Add" /></td>
                </tr>
            </table>
            </form>

           <?php
            $pdo = null;
            ?>
    </body>
</html>

