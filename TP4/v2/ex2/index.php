<!doctype html>
<html lang="fr">
<head>
<meta charset='utf-8'>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
<title>tabletest</title>
<style>
body{ margin-top: 5em; }
.table {
     margin-top: 100px;
margin-bottom: 100px;
}
</style>
</head>
<body>
<table class="table">
   <thead>
    <tr>
        <th scope="col">Nom</th>
        <th scope="col">Prenom</th>
        <th scope="col">Date de naissance</th>
        <th scope="col">Aime le cours Web</th>
        <th scope="col">Remarques</th>
        <th scope="col">CRUD</th>
    </tr>
</thead>
<tbody id="studentsTableBody">

</tbody>
</table>

<form id="addStudentForm" action="" onsubmit="onFormsubmit();">
    <div class="form-group row">
        <label for="inputNom" class="col-sm-2 col-form-label">Nom*</label>
        <div class="col-sm-3">
            <input type="text" class="form-control" id="inputNom" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="inputPrenom" class="col-sm-2 col-form-label">Prenom*</label>
        <div class="col-sm-3">
            <input type="text" class="form-control" id="inputPrenom" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="inputDateNaissance" class="col-sm-2 col-form-label">Date de naissance*</label>
        <div class="col-sm-3">
            <input type="date" class="form-control" id="inputDateNaissance" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="inputAimeLeCours" class="col-sm-2 col-form-label">Aime le cours Web</label>
        <div class="col-sm-3">
            <input type="checkbox" class="form-control" id="inputAimeLeCours">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputRemarques" class="col-sm-2 col-form-label">Remarques</label>
        <div class="col-sm-3">
            <textarea class="form-control" id="inputRemarques"></textarea>
        </div>
    </div>
    <div class="form-group row">
        <span class="col-sm-2"></span>
        <div class="col-sm-2">
            <button type="submit" class="btn btn-primary form-control">Submit</button>
        </div>
    </div>
</form>




<?php

require_once('config.php');
require_once('connexionBD.php');

// Création de la table "Utilisateur"
$sql = "CREATE TABLE IF NOT EXISTS Utilisateur (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255) NOT NULL,
    prenom VARCHAR(255) NOT NULL,
    date_naissance DATE NOT NULL,
    aime_le_cours VARCHAR(255) NOT NULL DEFAULT '0',
    remarques TEXT
)";

if ($pdo->query($sql) === FALSE) {
    die("Erreur lors de la création de la table : " . $pdo->errorInfo()[2]);
}

echo "<br>";
print_r($_POST);

$request = $pdo->prepare("select * from users");
$request->execute();

$resultat = $request->fetchAll(PDO::FETCH_ASSOC);

?>

<script>
    let selectedRow = null;
    let students = [];

    function onFormsubmit() {
        event.preventDefault();
        let nom = $("#inputNom").val();
        let prenom = $("#inputPrenom").val();
        let dateNaissance = $("#inputDateNaissance").val();
        let aimeLeCours = $("#inputAimeLeCours").prop('checked');
        let remarques = $("#inputRemarques").val();

        if (nom.trim() !== '') {
            if (selectedRow) { // Si une ligne est sélectionnée, on la modifie
                let index = selectedRow.attr('data-index');
                students[index] = {nom, prenom, dateNaissance, aimeLeCours, remarques};
                updateTable();
                selectedRow = null; // On désélectionne la ligne
            } else { // Sinon, on ajoute une nouvelle ligne
                $.ajax({
                    url: "addUser.php",
                    method: "POST",
                    data: {
                        nom: nom,
                        prenom: prenom,
                        date_naissance: dateNaissance,
                        aime_le_cours: aimeLeCours,
                        remarques: remarques
                    },
                    success: function(data) {
                        console.log(data);
                        // Si la requête a réussi, on ajoute l'utilisateur dans le tableau
                        students.push({nom, prenom, dateNaissance, aimeLeCours, remarques});
                        updateTable();                        
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        alert("Erreur lors de l'ajout de l'utilisateur.");
                        console.log(textStatus, errorThrown);
                    }

                });
            }
            // On réinitialise le formulaire
            $("#addStudentForm").trigger("reset");
            $("#inputNom").focus();
        }
    };

    function updateTable() {
        let tableBody = $("#studentsTableBody");
        tableBody.empty();


        $.ajax({
                    url: "getUsers.php",
                    method: "GET",
                    data: {
                        nom: nom,
                        prenom: prenom,
                        date_naissance: dateNaissance,
                        aime_le_cours: aimeLeCours,
                        remarques: remarques
                    },
                    success: function(data) {
                        console.log(data);
                        // Si la requête a réussi, on ajoute l'utilisateur dans le tableau
                        students.push({nom, prenom, dateNaissance, aimeLeCours, remarques});
                        updateTable();                        
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        alert("Erreur lors de l'ajout de l'utilisateur.");
                        console.log(textStatus, errorThrown);
                    }

                });



        for (let i = 0; i < students.length; i++) {
            let student = students[i];
            tableBody.append(`
                <tr data-index="${i}">
                    <td>${student.nom}</td>
                    <td>${student.prenom}</td>
                    <td>${student.dateNaissance}</td>
                    <td>${student.aimeLeCours ? 'Oui' : 'Non'}</td>
                    <td>${student.remarques}</td>
                    <td>
                        <button type="button" class="btn btn-warning" onclick="onEdit(this)">Editer</button>
                        <button type="button" class="btn btn-danger" onclick="onDelete(this)">Supprimer</button>
                    </td>
                </tr>
            `);
        }
    }

    function onEdit(button) {
        selectedRow = $(button).closest("tr");
        let index = selectedRow.attr('data-index');
        let student = students[index];
        $("#inputNom").val(student.nom);
        $("#inputPrenom").val(student.prenom);
        $("#inputDateNaissance").val(student.dateNaissance);
        $("#inputAimeLeCours").prop('checked', student.aimeLeCours);
        $("#inputRemarques").val(student.remarques);

        /*$("#addStudentForm").off('submit').submit(function(event) {
            event.preventDefault();
            let id = selectedRow.attr('id');
            let nom = $("#inputNom").val();
            let prenom = $("#inputPrenom").val();
            let dateNaissance = $("#inputDateNaissance").val();
            let aimeLeCours = $("#inputAimeLeCours").prop('checked');
            let remarques = $("#inputRemarques").val();

            $.ajax({
                url: 'editUser.php',
                type: 'POST',
                data: {id: id, nom: nom, prenom: prenom, dateNaissance: dateNaissance, aimeLeCours: aimeLeCours, remarques: remarques},
                success: function(response) {
                    // Mettre à jour la ligne modifiée avec les nouvelles informations
                    let index = selectedRow.attr('data-index');
                    students[index] = {nom, prenom, dateNaissance, aimeLeCours, remarques};
                    updateTable();
                    selectedRow = null;
                    // Réinitialiser le formulaire
                    $("#addStudentForm").trigger("reset");
                    $("#inputNom").focus();
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log(textStatus, errorThrown);
                }
            });
        });*/
    }

    function onDelete(button) {
        let row = $(button).closest("tr");
        let index = row.attr('data-index');
        students.splice(index, 1);
        updateTable();
    }
</script>


</body>
</html>