<?php

// Contrôleur : Affiche les informations détaillées d'un projet. 
//              Certaines informations sont disponibles ou non selon si  on est investisseur, un gestionnaire ou un visiteur (potentielement le porteur du projet)

// Paramètres : $_GET["id"] l'id du projet

// Initialisation
include_once "utils/init.php";
session_activation();
// Pas de verification de connection tout le monde peux acceder à la page

// Traitement

// Récuperation du projet, de son porteur et de son gestionnaire
$projet = new projet($_GET["id"]);
$porteur = $projet->getTarget(("porteur"));
$gestionnaire = $projet->getTarget("gestionnaire");

// Si on est un utilisateur connecté et qu'on est un investisseur on doit savoir si on a promis un financement pour ce projet
$promesse = new promesse();
$financementPromis = $promesse->hasPromise(session_userconnected()->id(),$projet->id()); //Cette fonction retourne true si l'utilisateur à participé au financement, sinon false



// Affichage du template
include_once "templates/pages/detail_projet.php";