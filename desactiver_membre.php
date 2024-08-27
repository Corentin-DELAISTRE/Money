<?php

// Contôleur : Passe le statut d'un membre en "DES" dans la BDD + Affiche un message confirmant la desactivation du compte
// Paramètres : $_GET["id"] l'id du membre
//              $_GET["typeCompte"] le type de compte du membre (gestionnaire ou utilisateur)

// Initialisation
include_once "utils/init.php";
session_activation();
include_once "utils/verif_connexion.php";

// Traitement

// Recuperation du membre
$membre = new $_GET["typeCompte"]($_GET["id"]);

// Changement du statut
$membre->set("statut","DES");
$membre->update();

// Affichage du template avec le message de confirmation
include_once "templates/pages/message_et_redirection.php";