<?php 

// Contrôleur : Ajoute un nouveau membre dans la BDD et envoie un mail à la personne correspondant au membre créé pour  notifier de la création du compte et lui fournir ses identifiants
// Paramètres : $_POST["type"] le type de compte voulant être créer
//              $_POST["nom"] nom du membre
//              $_POST["prenom"] prenom du membre
//              $_POST["adresse"] adresse postale du membre
//              $_POST["telephone"] numero de telephone du membre
//              $_POST["email"] email du membre
//              $_POST["mdp"] mot de passe du membre

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
// Ajout dans la base de données
$membre = new $_POST["type"]();

$membre->set("nom",$_POST["nom"]);
$membre->set("prenom",$_POST["prenom"]);
$membre->set("adresse",$_POST["adresse"]);
$membre->set("email",$_POST["email"]);
$membre->set("telephone",$_POST["telephone"]);
$membre->set("mdp",password_hash($_POST["mdp"],PASSWORD_DEFAULT));
$membre->set("statut","ACT");

$membre->insert();

// Envoi du mail

$membre->sendMailIdentifiantsHTML("Money <cdelaistre@mywebecom.ovh>","cdelaistre@mywebecom.ovh","Création de votre compte sur Money","cdelaistre@mywebecom.ovh","mail_creation_compte.php",$_POST["mdp"]);

// Affichage du template

include_once "templates/pages/message_et_redirection.php";