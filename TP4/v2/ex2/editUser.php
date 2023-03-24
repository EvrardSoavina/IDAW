<?php
// Vérifier si la requête est de type POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Récupérer les données envoyées depuis le formulaire
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $date_naissance = $_POST['date_naissance'];
    $aime_le_cours = $_POST['aime_le_cours'];
    $remarques = $_POST['remarques'];

    require_once('config.php');
    require_once('connexionBD.php');

    // Préparer la requête d'insertion des données dans la table "utilisateurs"
    $stmt = $pdo->prepare('UPDATE Utilisateur SET nom = ?, prenom = ?, date_naissance = ?, aime_le_cours = ?, remarques = ? WHERE id = ?');
    $stmt -> execute([$nom, $prenom, $date_naissance, $aime_le_cours, $remarques, $id]);

    // Fermer la connexion à la base de données
    $pdo = null;

    // Renvoyer une réponse JSON à la requête AJAX
    $response = array('status' => 'success', 'message' => 'Utilisateur ajouté avec succès');
    echo json_encode($response);
}
?>