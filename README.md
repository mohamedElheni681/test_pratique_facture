

#### 1) les commandes utilisées pour la création du projet:

- composer global require laravel/installer
- laravel new test_pratique_facture --jet
- php artisan migrate
- npm install && npm run dev

#### 2) la procédure et les fichiers nécessaires pour Pointer le domaine www.testrec01.local:5458:

- il faut simplement ajouter cette ligne dans le fichier hosts: 127.0.0.1      www.testrec01.local
- php artisan serve --port=5458

#### 3) j'ai utilisé le package Jetstream module d’authentification :
##### Caractéristiques de Laravel Jetstream

- open-source, gratuit et maintenu par l'équipe laravel
-  Gestion de profils
-  authentification à deux facteurs
-  gestion multi-sessions
-  auth scaffolding
-  et plus

#### 5) DataTables
j'ai utilisé DataTables qui est un puissant plugin jQuery pour créer des listes de tables et y ajouter des interactions. 
Il fournit la recherche, le tri et la pagination sans aucune configuration.

#### 6) Tests unitaires 
- php vendor/phpunit/phpunit/phpunit --filter FactureTest

#### 7) un mini guide d’installation de cette application et de lancement des tests:

1) composer install
2) Renommez ou copiez le fichier .env.example en .env
3) php artisan key:generate
4) Définissez vos informations d'identification de base de données dans votre fichier .env
5) php artisan migrate
6) npm install && npm run dev
7) php artisan serve --port=5458

###### lancement d'un test complet:
- php artisan test
###### pour tester seulement notre module facture
- php vendor/phpunit/phpunit/phpunit --filter FactureTest

#### 8) Docker
###### ma recommandation pour dockeriser cette application c'est d'utiliser ce workflow Docker Compose assez simplifié qui met en place un réseau LEMP (Linux, NGINX, MySQL, PHP) de conteneurs :
https://github.com/supermavster/docker-laravel-8

il faut tout simplement mettre le projet dans le dossier source et avoir la même configuration de base de données .env  et source/.env