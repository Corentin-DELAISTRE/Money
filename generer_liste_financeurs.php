<?php

// Contrôleur : Génère les informations de financement d'un projet et les renvoi en format exploitable en JSON
// Paramètres : $_GET["id"] l'id du projet en question

// Initialisation
include_once "utils/init.php";
session_activation();
include_once "utils/verif_connexion.php";

// Création du tableau à retourner sous format JSON 
$tabJSON = [];
// Récuperation de la liste des investisseur qui ont promis un financement
$promesses = new promesse();
$listePromesses = $promesses->targetedList("projet",$_GET["id"]);
// Pour chaque promesse, récupérer l'investisseur et l'ajouter dans $tabJSON
foreach ($listePromesses as $promesse) {
    $invest = $promesse->getTarget("investisseur");

    $tabJSON[] = [
        "nom"=>$invest->get("nom"),
        "prenom"=>$invest->get("prenom"),
        "email"=>$invest->get("email"),
        "tel"=>$invest->get("telephone"),
        "montant_promis"=>$promesse->get("montant_promis")
];
}

// Envoi des informations sous format JSON
echo json_encode($tabJSON);