$(document).ready(function () {
    $('#signup-form').on('submit', function (e) {
        e.preventDefault();
        var prenom = $('#prenom').val();
        var nom = $('#nom').val();

        var date = $('#date_de_naissance').val();
        var dateVar = new Date(date);
        var date_de_naissance = dateVar.toISOString().slice(0, 10); // on met la date sous la forme 'Y-m-d'

        var email = $('#email').val();
        var login = $('#login').val();
        var motdepasse = $('#motdepasse').val();
        var confirme_motdepasse = $('#confirme-motdepasse').val();
        var id_sexe = $('#id_sexe').val();
        var taille = $('#taille').val();
        var poids = $('#poids').val();
        var id_tranche_age = $('#id_tranche_age').val();
        var id_niveau = $('#id_niveau').val();

        if (motdepasse != confirme_motdepasse) {
            alert('Your passwords are not matching.');
        } else {
            $.ajax({
                url: apifolder + '/backend/utilisateur.php',
                type: 'post',
                data: JSON.stringify({
                    prenom: prenom,
                    nom: nom,
                    date_de_naissance: date_de_naissance,
                    email: email,
                    login: login,
                    motdepasse: motdepasse,
                    confirme_motdepasse: confirme_motdepasse,
                    id_sexe: id_sexe,
                    taille: taille,
                    poids: poids,
                    id_tranche_age: id_tranche_age,
                    id_niveau: id_niveau
                }),
                success: function (response) {
                    console.log("User created with success !");
                    window.location.href = "dashboard.php";
                }
            });
        }
    });
});
