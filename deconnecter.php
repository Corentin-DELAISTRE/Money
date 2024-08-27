<?php

// Contrôleur : deconnecte l'utilisateur de la session et redirige vers la page d'accueil du site
// Paramètres : aucun

// Initialisation
include_once "utils/init.php";
session_activation();

// Traitement des données

session_deconnect();

// Redirection

header('Location: http://money.cdelaistre.mywebecom.ovh/index.php');
