<?php
/*
Code à inclure dans les contrôleurs qui ont besoin de la connexion
Vérifie si un utilisateur est connecté. Sinon, redirection à la page indiquée
*/

// Vérifier si l'utilisateur est connecté
if (!session_isconnected()) {
    // Si non connecté, rediriger vers la page d'accueil
    header('Location: http://money.cdelaistre.mywebecom.ovh/index.php');
    exit;
}

// Verifier si le compte de l'utilisateur n'est pas désactivé
// Si il est désactivé redirectiob vers l'accueil du site
if(session_userconnected()->verifIfDes()){
    header('Location: http://money.cdelaistre.mywebecom.ovh/index.php');
    exit;
}