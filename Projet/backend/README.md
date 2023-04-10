# Projet IDAW avec Josua Berdugo et Evrard Soavina

config.php a modifier en fonction de la machine utilisé

## API REST


| Action | HTTP | Payload | URL | Description |
|---    |:-:    |:-:    |:-:    |--:    |
| Read | GET | - | /aliments.php | Returns all the food |
| Read | GET | - | /aliments.php?id_aliment= | Returns a single food |
| Read | GET | - | /aliments.php?nom= | Returns a single food |
| Create | POST | {id_aliment: nom: ,id_type: } | /aliments.php | Add a new food |
| Update | PUT | {id_aliment: nom: ,id_type: } | /aliments.php | Modifiy a food |
| Delete | DELETE | {id_aliment: } | /aliments.php | Delete a food |
||||||
| Read | GET | - | /consommation.php | Returns all the table consommation |
| Read | GET | - | /consommation.php?id_journal= &id_aliment= | Returns all the table consommation |
| Create | POST | {id_journal: ,id_aliment: ,quantite: } | /consommation.php | |
| Update | PUT | {id_journal: ,id_aliment: ,quantite: } | /consommation.php |  |
| Delete | DELETE | {id_journal: ,id_aliment: } | /consommation.php |  |
||||||
| Read | GET | - | /dashboard.php?date='+date+'&login='+login+'&id_indicateur='+id_indicateur |  |
| Read | GET | - | /dashboard.php?date='+date+'&login='+login |  |
| Read | GET | - | /dashboard.php?startdate='+startdate+'&enddate='+enddate&login='+login |  |
||||||
| Read | GET | - | /dashboard2.php?date='+date+'&login='+login |  |
||||||
| Read | GET | - | /indicateur_nutritionnel.php | Returns all the table indicateur_nutrionnnel |
| Read | GET | - | /indicateur_nutritionnel.php?id_indicateur= |  |
| Create | POST | {nom:, recommandation_oms: } | /indicateur_nutritionnel.php | |
| Update | PUT | {id_indicateur: ,nom:, recommandation_oms: } | /indicateur_nutritionnel.php |  |
| Delete | DELETE | {id_indicateur: } | /indicateur_nutritionnel.php |  |
||||||
| Read | GET | - | /journal.php | Returns all the table journal |
| Read | GET | - | /journal.php?id_journal= |  |
| Read | GET | - | /journal.php?date= &login=|  |
| Create | POST | {id_type_repas: ,login: ,date: } | /journal.php | |
| Update | PUT | {id_journal: ,id_type_repas: ,login: ,date: } | /journal.php |  |
| Delete | DELETE | {id_journal: } | /journal.php |  |
||||||
| Login | POST | - | /login.php | endpoint d'authentification pour dire si le login et mdp est bon ou non |
||||||
| Read | GET | - | /objectif.php | Returns all the table objectif |
| Read | GET | - | /objectif.php?id_indicateur= &login= |  |
| Create | POST | {id_indicateur: ,login: ,quantite: } | /objectif.php | |
| Update | PUT | {id_indicateur: ,login: ,quantite: } | /objectif.php |  |
| Delete | DELETE | {id_indicateur: ,login: } | /objectif.php |  |
||||||
| Create | POST | {id_indicateur: ,login: ,quantite: } | /objectif2.php | verify if an id is linked to a login and modify or add |
||||||
| Read | GET | - | /type_repas.php | Returns all the table type_repas |
| Read | GET | - | /type_repas.php?nom_repas= | Returns the id of the meal with the name nom_repas |
||||||
| Read | GET | - | /utilisateur.php | Return all users in the database |
| Read | GET | - | /utilisateur.php?login= | Return the user with the login specified |
| Create | POST | {login: ,motdepasse: ,prenom: ,nom : ,email: ,date_de_naissance: ,id_sexe: ,id_tranche_age: ,id_niveau: ,taille: ,poids: } | /utilisateur.php | Create a user with his info in the json payload |
| Update | PUT | {login: ,motdepasse: ,prenom: ,nom : ,email: ,date_de_naissance: ,id_sexe: ,id_tranche_age: ,id_niveau: ,taille: ,poids: } | /utilisateur.php | Modify all of a user's info |
| Delete | DELETE | {login: } | /utilisateur.php | Delete a user by specifying his login |