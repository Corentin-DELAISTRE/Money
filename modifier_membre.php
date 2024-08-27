<?php

// Contrôleur : Met à jour les informations du membre dans la BBD et Affiche un message de confirmation
// Paramètres : $_GET l'id du membre
//              $_GET le type de compte du membre
//              $_POST les infos modifiées dans le formulaire de modification d'un membre

// Initialisation
include_once "utils/init.php";
session_activation();
include_once "utils/verif_connexion.php";

// Si je ne suis pas un gestionnaire je ne peux pas acceder à cette page on renvoie à l'acceuil
if($_SESSION["typeCompte"] !== "gestionnaire"){
    header('Location: http://money.cdelaistre.mywebecom.ovh/index.php');
    exit;
}

// Traitement des données
// Récuperation du membre
$membre = new $_GET["typeCompte"]($_GET["id"]);

// Assignation des informations modifiées
$membre->set("nom",$_POST["nom"]);
$membre->set("prenom",$_POST["prenom"]);
$membre->set("email",$_POST["email"]);
$membre->set("telephone",$_POST["telephone"]);

// MàJ des informations
$membre->update();

// Affichage du template

include_once "templates/pages/message_et_redirection.php";