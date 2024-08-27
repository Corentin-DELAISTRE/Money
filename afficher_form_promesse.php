<?php

// Contrôleur : Affiche le formulaire pour une promesse de financement
// Paramètres : Aucun

// Initialisation
include_once "utils/init.php";
session_activation();
include_once "utils/verif_connexion.php";

// Si je ne suis pas un investisseur je n'ai pas le droit d'acceder à cette page. Redirection vers accueil.
if($_SESSION["typeCompte"] !== "investisseur"){
    header('Location: http://money.cdelaistre.mywebecom.ovh/afficher_compte.php');
    exit;
}else{
    // Sinon recuperation du projet et affichage du template
    $projet = new projet($_GET["id"]);
    include_once "templates/pages/form_promesse.php";
}