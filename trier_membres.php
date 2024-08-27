<?php

// Contrôleur : Génère une liste triée d'investisseur ou de gestionnaire ou les deux
// Paramètres : $_GET["typeCompte"] le type de membre recherché et $_GET["critere"] la recherche precise apportée par l'utilisateur dans l'input type search
// Retourne une liste de membre sous un format JSON

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
// Initialisation du JSON à retourner
$tabJSON = [];
// Si on veut les gestionnaires
if($_GET["typeCompte"] == "gestionnaire"){

    // Utilisation de la methode permettant de générer une liste selon le type de compte et le critère de recherche
    $gestionnaire = new gestionnaire();
    $listeMembre = $gestionnaire->trierGestionnaire($_GET["critere"]);
    // Pour chaque membre dans la liste générée je l'ajoute avec les informations nécessaire dans un tableau qui sera encodé en JSON
    foreach ($listeMembre as $membre) {
        $tabJSON[] = [$membre->objToTabJSON()]; 
    }

}else if($_GET["typeCompte"] == "investisseur"){
    // Si on veut les investisseurs : même déroulement que pour les gestionnaires 
    $investisseur = new investisseur();
    $listeMembre = $investisseur->trierInvestisseur($_GET["critere"]);
    foreach ($listeMembre as $membre) {
        $tabJSON[] = [$membre->objToTabJSON()];
    }
}else if($_GET["typeCompte"] == "all"){
    // Si on veut n'importe quel type de compte : utilisation d'une methode retournant la liste des gestionnaire et des investisseur selon le critère recherché 
    $tousLesMembres = new _lambda();
    $listeMembre = $tousLesMembres->listAllMembres($_GET["critere"]);

    foreach ($listeMembre as $membre) {
        $tabJSON[] = [$membre->objToTabJSON()];
    }
}
echo json_encode($tabJSON);
