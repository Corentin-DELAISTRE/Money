<?php

// Contrôleur de test
include_once "utils/init.php";

// Création du tableau à retourner sous format JSON 
$tabJSON = [];
// Récupération du niveau de financement
$projet = new projet(1);
$niveauDeFinancement = $projet->getNiveauFinancement();

// Récuperation de la liste des investisseur qui ont promis un financement
$promesses = new promesse();
$listePromesses = $promesses->targetedList("projet",$projet->id());
$tabJSON[0] = $niveauDeFinancement;

// Pour chaque promesse récupérer l'investisseur et l'ajouter dans $tabInvestisseur
foreach ($listePromesses as $promesse) {
    $tabJSON[1] = $promesse->getTarget("investisseur");
}


echo json_encode($tabJSON);
// Affichage du template de test

include_once "templates/pages/template_de_test.php";