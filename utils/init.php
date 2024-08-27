<?php
//Fichier à inclure au début de tout les controleurs pour initialiser l'environnement
//GESTION DES MESSAGES D'ERREURS
ini_set("display_errors", 1);       // Aficher les erreurs
error_reporting(E_ALL);             // Toutes les erreurs

//OUVERTURES DE LA BASE DE DONNEES
global $bdd; //Les variables dans $GLOBALS["bdd"]

//On affecte la base de données à la variable globale
$bdd = new PDO("mysql:host=localhost;dbname=projets_money_cdelaistre;charset=UTF8", "cdelaistre", "ai+SVn3c+T");
//Pour debugger,  on peut ajouter une propriété
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

// Charger les libariries diverses
// Chargement des classes
include_once "utils/_lambda.php";
include_once "utils/field.php";
include_once "models/gestionnaire.php";
include_once "models/investisseur.php";
include_once "models/porteur.php";
include_once "models/projet.php";
include_once "models/promesse.php";
include_once "models/proposition.php";


// chargement du mécanisme de session
include_once "utils/session.php";
?>