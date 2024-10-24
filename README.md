# CV-PHP Project

## Description
Ce projet est un site web de CV/Portfolio développé en PHP. Il permet aux utilisateurs de créer, modifier et afficher leur CV, d'ajouter des projets et d'interagir avec les autres utilisateurs via des commentaires et des évaluations.

## Prérequis
- Docker Desktop installé
- Compte GitHub pour cloner le dépôt

## Installation

### Étape 1 : Cloner le dépôt
git clone https://github.com/Giovanni31000/CV-php.git
cd Ynov-PhP

### Étape 2 : Configurer le fichier .env
Créez un fichier .env à la racine du projet avec le contenu suivant :

env

DB_HOST=db
DB_DATABASE=cv_db
DB_USERNAME=root
DB_PASSWORD=root

GOOGLE_CLIENT_ID=ton_client_id_google
GOOGLE_CLIENT_SECRET=ton_client_secret_google
GOOGLE_REDIRECT_URI=http://localhost:8080/callback

APP_ENV=local
APP_DEBUG=true
APP_KEY=ton_cle_application

PORT=80
### Étape 3 : Démarrer les services Docker
Assurez-vous que Docker Desktop est en cours d'exécution, puis lancez les services avec la commande suivante :

docker-compose up --build
### Étape 4 : Accéder à votre projet
Ouvrez votre navigateur et allez à http://localhost pour voir le site web.

### Étape 5 : Configurer la base de données
Utilisez Adminer pour vous connecter et créer les tables nécessaires pour les utilisateurs, les projets...

### Étape 6 : Développement PHP
Ajoutez les fonctionnalités PHP nécessaires pour l'authentification, la gestion de CV, les projets, etc.

Commiter et pusher les modifications sur une nouvelle branche
git add .
git commit -m "Initial commit with Docker setup"
git push
Outils et technologies utilisés
PHP : Langage de programmation principal.

Docker : Conteneurisation des services.

Nginx : Serveur web.

MariaDB : Base de données.

Adminer : Interface de gestion de base de données.

Bootstrap : Framework CSS.

jQuery : Bibliothèque JavaScript.

SweetAlert2 : Librairie Javascript pour les alertes.

Notie / Toastr : Librairies Javascript pour les notifications.