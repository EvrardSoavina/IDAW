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


<script>
    let selectedRow = null;

    $("#addStudentForm").submit(function(event) {
        event.preventDefault();
        let nom = $("#inputNom").val();
        let prenom = $("#inputPrenom").val();
        let dateNaissance = $("#inputDateNaissance").val();
        let aimeLeCours = $("#inputAimeLeCours").prop('checked');
        let remarques = $("#inputRemarques").val();

        if (nom.trim() !== '') {
            if (selectedRow) { // Si une ligne est sélectionnée, on la modifie
                selectedRow.children().eq(0).text(nom);
                selectedRow.children().eq(1).text(prenom);
                selectedRow.children().eq(2).text(dateNaissance);
                selectedRow.children().eq(3).text(aimeLeCours ? 'Oui' : 'Non');
                selectedRow.children().eq(4).text(remarques);
                selectedRow = null; // On désélectionne la ligne
            } else { // Sinon, on ajoute une nouvelle ligne
                $("#studentsTableBody").append(`
                    <tr>
                        <td>${nom}</td>
                        <td>${prenom}</td>
                        <td>${dateNaissance}</td>
                        <td>${aimeLeCours ? 'Oui' : 'Non'}</td>
                        <td>${remarques}</td>
                        <td>
                            <button type="button" class="btn btn-warning" onclick="onEdit(this)">Editer</button>
                            <button type="button" class="btn btn-danger" onclick="onDelete(this)">Supprimer</button>
                        </td>
                    </tr>
                `);
            }
            // On réinitialise le formulaire
            $("#addStudentForm").trigger("reset");
            $("#inputNom").focus();
        }
    });

    function onEdit(button) {
        selectedRow = $(button).closest("tr");
        $("#inputNom").val(selectedRow.children().eq(0).text());
        $("#inputPrenom").val(selectedRow.children().eq(1).text());
        $("#inputDateNaissance").val(selectedRow.children().eq(2).text());
        $("#inputAimeLeCours").prop('checked', selectedRow.children().eq(3).text() === 'Oui');
        $("#inputRemarques").val(selectedRow.children().eq(4).text());
    }

    function onDelete(button) {
        $(button).closest("tr").remove();
    }
</script>

</body>
</html>