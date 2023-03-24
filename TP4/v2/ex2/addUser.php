<?php
// Vérifier si la requête est de type POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Récupérer les données envoyées depuis le formulaire
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $date_naissance = $_POST['date_naissance'];
    $aime_le_cours = $_POST['aime_le_cours'];
    $remarques = $_POST['remarques'];

    require_once('config.php');
    require_once('connexionBD.php');

    // Préparer la requête d'insertion des données dans la table "utilisateurs"
/*    $sql = "INSERT INTO Utilisateur (nom, prenom, date_naissance, remarques) VALUES (:nom, :prenom, :date_naissance, :remarques)";*/
    $sql = "INSERT INTO Utilisateur (nom, prenom, date_naissance, aime_le_cours, remarques) VALUES (:nom, :prenom, :date_naissance, :aime_le_cours, :remarques)";
    $stmt = $pdo->prepare($sql);

    // Exécuter la requête en liant les valeurs aux paramètres
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':prenom', $prenom);
    $stmt->bindParam(':date_naissance', $date_naissance);
    $stmt->bindParam(':aime_le_cours', $aime_le_cours);
    $stmt->bindParam(':remarques', $remarques);
    $stmt->execute();

    // Fermer la connexion à la base de données
    $pdo = null;

    // Renvoyer une réponse JSON à la requête AJAX
    $response = array('status' => 'success', 'message' => 'Utilisateur ajouté avec succès');
    echo json_encode($response);
}
?>
