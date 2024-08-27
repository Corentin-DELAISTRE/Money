<?php

// Contrôleur : Ajoute la proposition de projet et le porteur de projet dans la BDD et Affiche un message de confirmation
// Paramètres : $_POST les informations du projets renseignées dans le formulaire de dépôt

// Initialisation
include_once "utils/init.php";

// Traitement des données

$proposition = new proposition();
$porteur = new porteur();
// Porteur

$porteur->set("nom",$_POST["nom"]);
$porteur->set("prenom",$_POST["prenom"]);
$porteur->set("adresse",$_POST["adresse"]);
$porteur->set("email",$_POST["email"]);
$porteur->set("telephone",$_POST["telephone"]);

$porteur->insert();

// Proposition
$proposition->set("porteur",$porteur->id());
$proposition->set("titre",$_POST["titre"]);
$proposition->set("description",$_POST["description"]);
$proposition->set("montant_demande",round($_POST["montant_demande"],2));
$proposition->set("statut","EC");
$proposition->insert();

// Affichage du template

include_once "templates/pages/message_et_redirection.php";