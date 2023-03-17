<?php
    //On démarre une nouvelle session
    session_start();
    /*On utilise session_id() pour récupérer l'id de session s'il existe.
     *Si l'id de session n'existe  pas, session_id() renvoie une chaine
     *de caractères vide*/
    $id_session = session_id();
?>

<!DOCTYPE html>
<html>
    <head>
        <link href="$link" rel="stylesheet">
    </head>
    <body>
        <?php
            if($id_session){
                echo 'ID de session (récupéré via session_id()) : <br>'
                .$id_session. '<br>';
            }
        ?>

        <form id="login_form" action="connected.php" method="POST">
            <table> 
            <input type="hidden" name="hide" value="secret" />
                <tr>
                    <th>Login :</th>
                    <td><input type="text" name="login"></td>
                </tr> 
                <tr>
                    <th>Mot de passe :</th>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <th></th>
                    <td><input type="submit" value="Se connecter..." /></td>
                </tr>
            </table>
        </form>

        <form id="style_form" action="index.php" method="GET">
            <select name="css">
                <option value="style1">style1</option>
                <option value="style2">style2</option>
            </select>
            <input type="submit" value="Appliquer" />
        </form>

    <?php
    if(isset($_GET['css'])) {
        $cookie_name = $_GET['css'];
        $cookie_value = $_GET['css'];
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
    } else {
        $cookie_name = 'style1';
        $cookie_value = 'style1';
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
    };
    if(isset($_COOKIE[$cookie_name])){
        echo 'Le style utilisé est le ' .$_COOKIE[$cookie_value];
    };

    /*$_SESSION['login'] = $_POST['login'];
    $_SESSION['password'] = $_POST['password'];*/
    ?>

<link rel="stylesheet" href="<?php echo $_COOKIE[$cookie_value]?>.css" >
    </body>
</html>
