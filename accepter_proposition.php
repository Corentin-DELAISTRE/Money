<?php

// Contrôleur : Passe le statut de la demande en ACC
//              Crée un nouveau projet dans la BDD avec les infos de la proposition et sa description modifiée ou pas
//              Envoie un mail avec lien du contrôleur permettant d'afficher le détail du projet pour un porteur
//              Affiche un message de confirmation

// Paramètres : $_GET["id"] l'id de la proposition
//              $_POST["description"] la description de la proposition de projet (modifiée ou non)

// Initialisation
include_once "utils/init.php";
session_activation();
include_once "utils/verif_connexion.php";

// Si je ne suis pas un gestionnaire je ne peux pas acceder à cette page on renvoie à l'acceuil
if($_SESSION["typeCompte"] !== "gestionnaire"){
    header('Location: http://money.cdelaistre.mywebecom.ovh/index.php');
    exit;
}

// Traitement
// Recuperation de la proposition et du porteur
$proposition = new proposition($_GET["id"]);
$porteur = $proposition->getTarget("porteur");

// Changement du statut de la proposition
$proposition->set("statut","ACC");
$proposition->update();

// Création du nouveau projet
$projet = new projet();
$projet->set("porteur",$proposition->get("porteur"));
$projet->set("gestionnaire",session_userconnected()->id());
$projet->set("titre",$proposition->get("titre"));
$projet->set("description",$_POST["description"]);
$projet->set("montant_demande",$proposition->get("montant_demande"));
$projet->set("date_publication",date("Y-m-d H:i:s"));

// Si création réussie envoi du mail
if($projet->insert()){
    $projet->sendMailHTML("Money <cdelaistre@mywebecom.ovh>","cdelaistre@mywebecom.ovh","Validation de votre projet","cdelaistre@mywebecom.ovh","mail_acc.php");
    include_once "templates/pages/message_et_redirection.php";
}