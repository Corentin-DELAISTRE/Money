<?php

// Contrôleur : Affiche la liste des membres avec la selection des critères de recherche.Par défaut le contrôleur affiche tous les membres de l'application. Si l'utilisateur n'est pas un gestionnaire il est renvoyé sur une autre page.
// Paramètres : $listeMembre une liste de tous les membres de l'application


// Initialisation
include_once "utils/init.php";
session_activation();
include_once "utils/verif_connexion.php";

// Si le type de compte n'est pas "gestionnaire" on renvoie l'utilisateur à la page d'accueil de son compte
if($_SESSION["typeCompte"] !== "gestionnaire"){
    header('Location: http://money.cdelaistre.mywebecom.ovh/afficher_compte.php');
    exit;
}else{
    // Sinon Recuperation de la liste des membre et affichage du template
    $listeMembre = [];
    $gestionnaire = new gestionnaire();
    $investisseur = new investisseur();

    $listeGestionnaire = $gestionnaire->listAll();
    $listeInvestisseur = $investisseur->listAll();

    foreach ($listeGestionnaire as $gestionnaire) {
        array_push($listeMembre,$gestionnaire);
    }

    foreach ($listeInvestisseur as $investisseur) {
        array_push($listeMembre,$investisseur);
    }
    include_once "templates/pages/gestion_membres.php";
}