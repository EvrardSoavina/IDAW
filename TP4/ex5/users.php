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
}
catch (PDOException $erreur) {
    echo 'Erreur : '.$erreur->getMessage();
};

$request_method = $_SERVER["REQUEST_METHOD"];

switch($request_method)
{
    case 'GET':
        getAllUsers();
        break;
    case 'POST':
        createUser();
        break;
    default:
    header("HTTP/1.0 405 Method Not ALlowed");
    break;
};



function getAllUsers() {
    global $pdo;
    // Récupération des utilisateurs
    $request = $pdo->prepare('select * from users');
    $request->execute();
    $users = $request->fetchAll(PDO::FETCH_OBJ);
    
    // Conversion en JSON
    $json = json_encode($users);

    // HTPP response of 200 OK
    header('HTTP/1.1 200 OK');
    header('Content-Type: application/json');
    echo $json;
}

function createUser() {
    global $pdo;
    $content = file_get_contents('php://input');
    echo $content;

    $userData = json_decode($content,true);
    print_r($userData);

    $name = $userData['name'];
    $email = $userData['email'];

    $stmt = $pdo->prepare("INSERT INTO users (name, email) VALUES (:name, :email)");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);

    if($stmt->execute()) {
        echo 'Data inserted successfully!';
    } else {
        echo 'Error inserting data';
    }
    
}
/*
// Récupérer les données de l'utilisateur depuis la requête POST
$userData = json_decode(file_get_contents('php://input'), true);

// Code pour créer l'utilisateur dans la base de données et récupérer son identifiant

$newUserId = createNewUser($userData);

// En-tête HTTP Location
header('Location: /user.php/' . $newUserId);

// Corps de la réponse contenant les informations de l'utilisateur créé au format JSON
$userInfo = array(
  'id' => $newUserId,
  'name' => $userData['name'],
  'email' => $userData['email'],
  'phone' => $userData['phone']
);

// Retourner la réponse avec le code de statut 201 (Created) et le corps de la réponse contenant les informations de l'utilisateur créé au format JSON
http_response_code(201);
echo json_encode($userInfo);
*/


    function deleteUser() {
        // Vérification des paramètres
        $id = $_GET['id'];
        if (empty($id)) {
            header('HTTP/1.1 400 Bad Request');
            echo 'Missing parameter';
            return;
        }
        // Suppression de l'utilisateur de la base de données
        $stmt = $pdo->prepare('DELETE FROM users WHERE id = ?');
        $stmt -> execute([$id]);
        
        // Envoi de la réponse HTTP
        header('HTTP/1.1 204 No Content');
    }

    $pdo = null;
?>