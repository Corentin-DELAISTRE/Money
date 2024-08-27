<?php

// Contrôleur : Affiche la page d'accueil du site avec les 5 derniers projets publiés
// Paramètres : la liste des 5 dernier projets publiés donc une liste d'objet "projet"

// Initialisation

include_once "utils/init.php";
include_once "utils/session.php";
session_activation();

// Traitement des données
// Récuperation de la liste des 5 derniers projets publiés

$projet = new projet();

$listeProjets = $projet->listFiveLast();

// Affichage du template

include_once "templates/pages/accueil.php";