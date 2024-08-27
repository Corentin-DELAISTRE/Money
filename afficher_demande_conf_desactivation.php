<?php

// Contrôleur : Affiche un message demandant de confirmer la desactivation du compte membre
// Paramètres : $_GET["id"] l'id du membre
//              $_GET["typeCompte"] le type de compte du membre

// Initialisation
include_once "utils/init.php";
session_activation();
include_once "utils/verif_connexion.php";

// Si je ne suis pas un gestionnaire je ne peux pas acceder à cette page on renvoie à l'acceuil
if($_SESSION["typeCompte"] !== "gestionnaire"){
    header('Location: http://money.cdelaistre.mywebecom.ovh/index.php');
    exit;
}

// traitement des données

$membre = new $_GET["typeCompte"]($_GET["id"]);

// Affichage du template

include_once "templates/pages/demande_conf_desactivation.php";