# Fund My Project

Fund My Project est un site internet de crowdfunding ayant pour objectif de permettre à des internautes de récolter de l'argent pour réaliser leurs projets.

Pour le moment, une version HTML statique du site a été réalisée et vous devez maintenant créer une version dynamique du site qui devra permettre aux internautes de :
- Consulter la liste des projets
- Consulter la liste des catégories de projet
- Créer un compte
- Se connecter
- Proposer un projet (nécessite d'être connecté)
- Faire une promesse de don sur un projet (nécessite d'être connecté)

Un compte administrateur pourra également gérer l'ensemble des données du site (comptes utilisateur, projets et catégories) via une interface d'administration.

## Description des pages

### index.html

Page d'accueil présentant la liste des 6 derniers projets ajoutés en base de données

### category.html

Page d'une catégorie affichant la liste des projets associée à celle-ci.

### projects.html

Page listant l'ensemble des projets de la base de données.
Etant donné que le nombre de projets sera ammené à augmenter, les projets devront être affichés avec un système de pagination.

### project.html

Page affichant les détails d'un projet.
Cette page affichera l'ensemble des données relative à un projet y compris le montant des dons nécessaires pour que le projet puisse être réalisé.
Une barre de chargement permettra d'afficher la progression des promesses de dons par rapport à l'objectif et un formulaire permettra aux internautes connectés d'ajouter une nouvelle promesse de don.

### projet-add.html

Page permettant aux internautes connectés de proposer un nouveau projet

### register.html

Page permettant aux internautes de créer un compte

### login.html

Page permettant aux internautes de se connecter

## Contraintes techniques

- Le projet devra être développé avec le framework Symfony 5
- Les données devront être stockées dans une base de données MySQL
- Les comptes utilisateurs devront être sécurisés avec login + mot de passe (hashé)
- Le code source devra être versionné avec Git
- Les dépendances côté front (bootstrap, bootswatch, fontawesome...) devront être installée via NPM.  
