# Projet IDAW avec Josua Berdugo et Evrard Soavina


## API REST


| Action | HTTP | Payload | URL | Description |
|---    |:-:    |:-:    |:-:    |--:    |
| Read | GET | - | /utilisateur.php | Return all users in the database |
| Read | GET | - | /utilisateur.php?login= | Return the user with the login specified |
| Create | POST | json | /utilisateur.php | Create a user with his info in the json payload |
| Update | PUT | json | /utilisateur.php | Modify all of a user's info |
| Delete | DELETE | json | /utilisateur.php | Delete a user by specifying his login |
| Read | GET | - | /aliments.php | Returns all the food |
| Read | GET | - | /aliments.php?id_aliment= | Returns a single food |
| Create | POST | json | /aliments.php | Add a new food |
| Update | PUT | json | /aliments.php | Modifiy a food |
| Delete | DELETE | json | /aliments.php | Delete a food |
| Read | GET | - | /.php |  |
| Read | GET | - | /.php?= |  |
| Create | POST | json | /.php | |
| Update | PUT | json | /.php |  |
| Delete | DELETE | json | /.php |  |

endpoint d'authentification pour dire si le login mdp et ok ou pas.

Vérifier que le front-end ne peux pas accéder à l'API.