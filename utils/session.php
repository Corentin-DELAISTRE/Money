<?php
/*
Fonctions de gestion de la session
- La superglobale $_SESSION est utilisée pour stocker les données de session.
- Si aucun utilisateur n'est pas connecté, $_SESSION["id"] contient 0.
- Si un utilisateur est connecté, $_SESSION["id"] contient l'id de l'utilisateur.
- L'objet associé à l'utilisateur connecté est stocké dans la variable globale $utilisateurConnecte.
*/

function session_activation() {
    // Active le mécanisme de session et initialise l'utilisateur connecté si une session existe
    session_start(); // Démarrer le mécanisme de session

    // Si un utilisateur est connecté, charger l'objet utilisateur connecté
    if (session_isconnected()) {
        global $utilisateurConnecte;
        $utilisateurConnecte = new $_SESSION["typeCompte"](session_idconnected());
    }

    // Retourner si on est connecté ou pas
    return session_isconnected();
}

function session_isconnected() {
    // Vérifie si un utilisateur est connecté en vérifiant l'existence de l'id de session
    // retourne true si connecté false sinon
    return !empty($_SESSION["id"]);
}

function session_idconnected() {
    // Retourne l'id de l'utilisateur connecté ou 0 s'il n'y a pas de connexion
    if (session_isconnected()) {
        return $_SESSION["id"];
    } else {
        return 0;
    }
}

function session_userconnected() {
    // Retourne l'objet correspondant à l'utilisateur connecté ou un nouvel objet de la classe correspondant au type de compte ou un nouvel objet de la classe _lambda
    if (session_isconnected()) {
        global $utilisateurConnecte;
        return $utilisateurConnecte;
    } else {
        // Si le type de compte de la session est vide on retourne un objet de la classe générique (_lambda)
        if(empty($_SESSION["typecompte"])){
            return new _lambda();
        }else{
            return new $_SESSION["typecompte"]();
        }
    }
}

function session_deconnect() {
    // Déconnecte l'utilisateur en réinitialisant les valeurs de session
    $_SESSION["id"] = 0;
    $_SESSION["typeCompte"] = "";
}

function session_connect($id, $typeCompte) {
    // Connecte un utilisateur en stockant son id et son type de compte dans la session
    $_SESSION["id"] = $id;
    $_SESSION["typeCompte"] = $typeCompte;
}
?>
