<?php

// Récupération des paramètres
$date = $_POST['date'];
$login = $_POST['login'];

// Appel à l'API GET
$url = 'http://localhost:8888/Projet_IDAW/IDAW/Projet/backend/dashboard.php?date=' . $date . '&login=' . $login;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
curl_close($ch);

// Traitement du résultat
$result = json_decode($result, true);

// Affichage du résultat
echo "<table>";
echo "<tr><th>Nom</th><th>Quantité</th></tr>";
foreach ($result as $row) {
    echo "<tr><td>".$row['nom']."</td><td>".$row['quantite']." g</td></tr>"; 
}
echo "</table>";
?>
