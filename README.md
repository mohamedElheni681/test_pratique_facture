

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