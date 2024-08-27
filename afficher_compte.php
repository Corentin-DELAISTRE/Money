<?php

// Contrôleur : Affiche l'accueil du compte de l'utilisateur
// Paramètres : aucun


// Initialisation
include_once "utils/init.php";
session_activation();
include_once "utils/verif_connexion.php";

// Traitement des données
// Si l'utilisateur connecté est un gestionnaire on affiche :
//                                                              - la liste de ses projets acceptés 
//                                                              - les 5 publications de proposition de projet les plus récentes
if($_SESSION["typeCompte"] === "gestionnaire"){
    
    $proposition = new proposition();
    $listProp = $proposition->listFiveLastProp();
    
    $projet = new projet();
    $listeProjets = $projet->listAcceptedProject(session_userconnected()->id());
}

// Si l'utilisateur connecté est un investisseur on affiche:
//                                                              - la liste des projets pour lesquels il a promis un financement
//                                                              - la liste des 5 projets publiés les plus récents
if($_SESSION["typeCompte"] === "investisseur"){
    
    
    $projet = new projet();
    $promesse = new promesse();

    $ListeDerniersProjetsPubliés = $projet->listFiveLastProjets();
    $listeProjetsAvecPrommesse = $promesse->getProjetsAvecPromesse();
}
// Affichage du template

include_once "templates/pages/accueil_compte.php";