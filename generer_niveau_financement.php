<?php

// Contrôleur : Génère le niveau de financement d'un projet (en %) dans un format exploitable en JSON
// Paramètres : $_GET["id"] l'id du projet concerné

// Initialisation
include_once "utils/init.php";

// Traitement
// Récupération du projet
$projet = new projet($_GET["id"]);

// Initialisation du  tableau qui sera exploitable en JSON
$tabJSON = [];

// Ajout du niveau de financement dans le tableau
$tabJSON[] = $projet->getNiveauFinancement();

// Encodage en JSON
echo json_encode($tabJSON);