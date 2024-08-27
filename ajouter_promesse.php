<?php
// Contrôleur : Ajoute une promesse de financement dans la BDD
// Paramètres : $_GET["id"] l'id du projet
//              $_POST["montant"] le montant de la promesse de financement faite par l'investisseur dans le formulaire

// Initialisation
include_once "utils/init.php";
session_activation();
include_once "utils/verif_connexion.php";

// Si je ne suis pas un investisseur je n'ai pas le droit d'acceder à cette page. Redirection vers accueil.
if($_SESSION["typeCompte"] !== "investisseur"){
    header('Location: http://money.cdelaistre.mywebecom.ovh/afficher_compte.php');
    exit;
}else{
    // Sinon ajout de la promesse dans la BDD

    $promesse = new promesse();
    $promesse->set("investisseur",session_idconnected());
    $promesse->set("projet",$_GET["id"]);
    $promesse->set("montant_promis",$_POST["montant"]);

    // Si l'insertion a réussie j'affiche le template qui confirme l'ajout de la promesse
    if($promesse->insert())
    include_once "templates/pages/message_et_redirection.php";

}