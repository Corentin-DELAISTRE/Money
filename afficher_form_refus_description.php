<?php

// Contrôleur : Affiche le formulaire permettant de saisir la raison du refus d'une proposition de projet
// Paramètres : $id l'id de la proposition

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

// Affichage du template
include_once "templates/pages/form_refus_proposition.php";