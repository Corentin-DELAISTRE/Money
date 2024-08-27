<?php

// Contrôleur : Passe le statut de la proposition de projet en "REF"
//              Envoie un mail au porteur de la proposition contenant la raison du refus
//              Affiche un message de confirmation d'envoi

// Paramètres : $_GET["id"] l'id de la proposition
//              $_POST["raison"] la raison du refus écrite dans le formulaire pour un refus

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

// Récupération de la proposition de projet et changement de son statut
$proposition = new proposition($_GET["id"]);
$proposition->set("statut","REF");
$proposition->update();

// Envoi du mail
$proposition->sendMailRefusHTML("Money <cdelaistre@mywebecom.ovh>","cdelaistre@mywebecom.ovh","Refus de votre projet","cdelaistre@mywebecom.ovh","mail_ref.php",$_POST["raison"]);

// Affichage du template
include_once "templates/pages/message_et_redirection.php";