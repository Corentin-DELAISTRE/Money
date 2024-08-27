<?php

// Contrôleur : Affiche les information détaillées d'une proposition de projet et la possibilité de l'ccepter ou de le refuser
// Paramètres : $_GET["id"] l'id de la proposition

// Initialisation
include_once "utils/init.php";
session_activation();
include_once "utils/verif_connexion.php";

// Si je ne suis pas un gestionnaire je ne peux pas acceder à cette page on renvoie à l'acceuil
if($_SESSION["typeCompte"] !== "gestionnaire"){
    header('Location: http://money.cdelaistre.mywebecom.ovh/index.php');
    exit;
}

// Traitement 
$proposition = new proposition($_GET["id"]);

$porteur = $proposition->getTarget(("porteur"));

// Affichage du template

include_once "templates/pages/detail_proposition.php";