<?php

// Contrôleur : affiche le formulaire de modifications des informations concernant un membre
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

// Traitement des données
// Si le membre est un gestionnaire je crée un objet gestionnaire avec l'id du membre passé en paramètres
if($_GET["typeCompte"] === "gestionnaire"){
    $membre = new gestionnaire($_GET["id"]);
// Sinon on fait de même mais pour un investisseur
}else if($_GET["typeCompte"] === "investisseur"){
    $membre = new investisseur($_GET["id"]);
}

// Affichage du template

include_once "templates/pages/form_modif_membre.php";