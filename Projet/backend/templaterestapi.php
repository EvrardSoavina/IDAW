<?php

require_once('config.php');
require_once('connexionBD.php');

$request_method = $_SERVER["REQUEST_METHOD"];

switch($request_method)
{
    case 'GET':
        getAllUsers();
        break;
    case 'POST':
        createUser();
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



function templateGET() {
    global $pdo;
    // Récupération des utilisateurs
    $request = $pdo->prepare('select * from Utilisateur');
    $request->execute();
    $users = $request->fetchAll(PDO::FETCH_OBJ);
    
    // Conversion en JSON
    $json = json_encode($users);
    echo $json; // on envoie la réponse de la requête 

    // HTPP response of 200 OK
    http_response_code(200);
    
}

function templatePOST() {
    global $pdo;
    $userData = json_decode(file_get_contents('php://input'),true);

    $nom = $userData['nom'];
    $prenom = $userData['prenom'];

    $stmt = $pdo->prepare("INSERT INTO Utilisateur (nom, prenom) VALUES ( ? , ?)");

    if($stmt->execute([$nom, $prenom])) {
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