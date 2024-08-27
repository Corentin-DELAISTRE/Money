<?php

// Contrôleur : Affiche le template du formulaire de dépot de projet
// Paramètres : aucun


// Initialisation

include_once "utils/init.php";
session_activation();

// Recuperation d'un objet projet pour avoir le nom et le libelle de chaque champs

$projet = new projet();
$porteur = new porteur();

// Affichage du templates

include_once "templates/pages/form_depot_proposition.php";