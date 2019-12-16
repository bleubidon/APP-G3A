# Projet APP - G3A - 2019-2020
Projet d'informatique / électronique réalisé dans le cadre de l'isep.

## Fonctionnement du fichier stylesheets_et_titres.json
- Il permet de définir les feuilles de style et titres des vues et permet de s'affranchir du ```DOCTYPE```, de la section ```<head>``` etc. qu'on retrouve à chaque début de fichier de vue
- Il est écrit au format JSON
- Il est composé de 2 sections: "stylesheets" qui recense les feuilles de style à utiliser et "titres" qui recense les titres des pages web
- Pour chaque vue, il est possible de spécifier 0 ou plusieurs feuilles de style au sein d'un tableau JSON, ainsi que pas de titre ou 1 titre
- Pour l'inclure dans une vue, placer la ligne ```<?php include "header.php" ?>``` au début de celle-ci. Cette ligne remplace la section de code HTML depuis ```DOCTYPE``` jusqu'à ```</head>```

## Fonctionnement de views/Mise_en_page.php
Fichier unique qui gère la mise en page de la page principale en fonction du statut de l'utilisateur du site. Ainsi certaines parties de html sont conditionnées par un test sur ```$_SESSION['statut_utilisateur_site']```.
