<?php

require_once('config.php');
require_once('init_pdo.php');

$request_method = $_SERVER["REQUEST_METHOD"];

switch($request_method)
{
    case 'GET':
        getuserbylogin();
        break;
    case 'POST':
        createUser();
        break;
    case 'GET':
        checkvalidcredentials();
        break;
    case 'PUT':
        updateUser();
        break;
    case 'DELETE':
        deleteUser();
        break;
    default:
    header("HTTP/1.0 405 Method Not ALlowed");
    break;
};

function checkvalidcredentials() {

    $userData = json_decode(file_get_contents('php://input'),true);
    $login = $userData["login"];
    $password = $userData["motdepasse"];
    
    global $pdo;
    $query = "SELECT COUNT(*) FROM utilisateur WHERE login = :login AND motdepasse = :password";
    $statement = $pdo->prepare($query);
    $statement->bindParam(":login", $login);
    $statement->bindParam(":password", $password);
    $statement->execute();

    $count = $statement->fetchColumn();

    if ($count == 1) {
        echo "Valid credentials";
    } else {
        echo "Invalid credentials";
    }
}

function getuserbylogin() {
    global $pdo;
    // Récupération des utilisateurs
    $request = $pdo->prepare('select * from utilisateur where login= ?');
    $request->execute();
    $users = $request->fetchAll(PDO::FETCH_OBJ);
    
    // Conversion en JSON
    $json = json_encode($users);
    echo $json; // on envoie la réponse de la requête 

    // HTPP response of 200 OK
    http_response_code(200);
    
}

function createUser() {
    global $pdo;
    $userData = json_decode(file_get_contents('php://input'),true);

    $login = $userData['login'];
    $motdepasse = $userData['motdepasse'];
    $prenom = $userData['prenom'];
    $nom = $userData['nom'];
    $email = $userData['email'];
    $date_de_naissance = $userData['date_de_naissance'];
    $id_sexe = $userData['id_sexe'];
    $id_tranche_age = $userData['id_tranche_age'];
    $id_niveau = $userData['id_niveau'];
    $taille = $userData['taille'];
    $poids = $userData['poids'];

    $stmt = $pdo->prepare("INSERT INTO Utilisateur (login, motdepasse, prenom, nom, email, date_de_naissance, taille, poids, id_sexe, id_tranche_age, id_niveau) VALUES ( ? , ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    if($stmt->execute([$login, $motdepasse, $prenom, $nom, $email, $date_de_naissance, $taille, $poids, $id_sexe, $id_tranche_age, $id_niveau])) {
        http_response_code(201);
    } else {
        echo 'Error inserting data';
    }
}

function templatePUT(){
    global $pdo;
    $userData = json_decode(file_get_contents('php://input'),true);

    // Récupérer les données envoyées depuis le formulaire
    $id = $userData['id'];
    $nom = $userData['nom'];

    $stmt = $pdo->prepare('UPDATE Utilisateur SET nom = ?WHERE id = ?');

    $stmt -> execute([$nom, $id]);

    // OPTIONNEL: Renvoyer une réponse JSON à la requête AJAX à afficher avec console.log
    $response = array('status' => 'success', 'message' => 'Utilisateur ajouté avec succès');
    echo json_encode($response);
}


function templateDELETE() {
    global $pdo;
    $userData = json_decode(file_get_contents('php://input'),true);
    $id = $userData['id'];
    if (empty($id)) {
        header('HTTP/1.1 400 Bad Request');
        echo 'Missing parameter';
        return;
    }
    // Suppression de l'utilisateur de la base de données
    $stmt = $pdo->prepare('DELETE FROM Utilisateur WHERE id = ?');
    $stmt -> execute([$id]);
    
    // Envoi de la réponse HTTP
    header('HTTP/1.1 204 No Content');
}

    $pdo = null;
?>