# Projet IDAW avec Josua Berdugo et Evrard Soavina


## API REST


| Action | HTTP | Payload | URL | Description |
|---    |:-:    |:-:    |:-:    |--:    |
| Read | GET | - | /utilisateur.php | Return all users in the database |
| Read | GET | - | /utilisateur.php?login= | Return the user with the login specified |
| Create | POST | {login: ,motdepasse: ,prenom: ,nom : ,email: ,date_de_naissance: ,id_sexe: ,id_tranche_age: ,id_niveau: ,taille: ,poids: } | /utilisateur.php | Create a user with his info in the json payload |
| Update | PUT | {login: ,motdepasse: ,prenom: ,nom : ,email: ,date_de_naissance: ,id_sexe: ,id_tranche_age: ,id_niveau: ,taille: ,poids: } | /utilisateur.php | Modify all of a user's info |
| Delete | DELETE | {login: } | /utilisateur.php | Delete a user by specifying his login |
| Read | GET | - | /aliments.php | Returns all the food |
| Read | GET | - | /aliments.php?id_aliment= | Returns a single food |
| Create | POST | {id_aliment: nom: ,id_type: } | /aliments.php | Add a new food |
| Update | PUT | {id_aliment: nom: ,id_type: } | /aliments.php | Modifiy a food |
| Delete | DELETE | {id_aliment: } | /aliments.php | Delete a food |
| Read | GET | - | /indicateur_nutritionnel.php |  |
| Read | GET | - | /indicateur_nutritionnel.php?id_indicateur= |  |
| Create | POST | {nom:, recommandation_oms: } | /indicateur_nutritionnel.php | |
| Update | PUT | {id_indicateur: ,nom:, recommandation_oms: } | /indicateur_nutritionnel.php |  |
| Delete | DELETE | {id_indicateur: } | /indicateur_nutritionnel.php |  |
| Read | GET | - | /.php |  |
| Read | GET | - | /.php?= |  |
| Create | POST | {: } | /.php | |
| Update | PUT | {: } | /.php |  |
| Delete | DELETE | {: } | /.php |  |
| Read | GET | - | /.php |  |
| Read | GET | - | /.php?= |  |
| Create | POST | {: } | /.php | |
| Update | PUT | {: } | /.php |  |
| Delete | DELETE | {: } | /.php |  |
| Read | GET | - | /.php |  |
| Read | GET | - | /.php?= |  |
| Create | POST | {: } | /.php | |
| Update | PUT | {: } | /.php |  |
| Delete | DELETE | {: } | /.php |  |

endpoint d'authentification pour dire si le login mdp et ok ou pas.

Vérifier que le front-end ne peux pas accéder à l'API.