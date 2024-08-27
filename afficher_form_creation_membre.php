<?php

// Contrôleur : affiche le formulaire de création d'un membre
// Paramètres : Aucun

// Initialisation 
include_once "utils/init.php";
session_activation();
include_once "utils/verif_connexion.php";

// Si je ne suis pas un gestionnaire je ne peux pas acceder à cette page on renvoie à l'acceuil
if($_SESSION["typeCompte"] !== "gestionnaire"){
    header('Location: http://money.cdelaistre.mywebecom.ovh/index.php');
    exit;
}

// Affichage du template

include_once "templates/pages/form_creation_membre.php";