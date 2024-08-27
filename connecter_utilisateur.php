<?php
// Contrôleur : Vérifie les identifiants et le type de compte de l'utilisateur et si son compte est actif
// Paramètres : $_POST les identifiants renseignés, $_GET le type de compte

// Si tout est OK, affiche l'accueil du compte de l'utilisateur
// Si les identifiants ne correspondent pas, affiche le formulaire de connexion
// Si le compte est désactivé, affiche un message pour informer l'utilisateur et le redirige vers l'accueil du site

// Initialisation
include_once "utils/init.php"; // Inclure les fichiers d'initialisation
include_once "utils/session.php"; // Inclure les fonctions de session
session_activation();

// Vérifier le type de compte de l'utilisateur
if ($_GET["typeCompte"] === "gestionnaire") {
    $user = new gestionnaire(); // Créer un nouvel objet gestionnaire
    $verif = $user->verifCompte($_POST["email"], $_POST["mdp"]); // Vérifier les identifiants
    // Si la vérification échoue, afficher le formulaire de connexion
    if ($verif === false) {
        include_once "templates/pages/form_connexion_gestionnaire.php";
        exit;
    } else {
        // Si le compte est désactivé, informer l'utilisateur et rediriger vers l'accueil
        if ($user->get("statut") === "DES") {
            include_once "templates/pages/message_et_redirection.php";
            exit;
        }
        // Connexion à la session
        session_connect($user->id(), $_GET["typeCompte"]); // Connecter l'utilisateur
    }

} else if ($_GET["typeCompte"] === "investisseur") {
    $user = new investisseur(); // Créer un nouvel objet investisseur
    $verif = $user->verifCompte($_POST["email"], $_POST["mdp"]); // Vérifier les identifiants
    // Si la vérification échoue, afficher le formulaire de connexion
    if ($verif === false) {
        include_once "templates/pages/form_connexion_investisseur.php";
        exit;
    } else {
        // Si le compte est désactivé, informer l'utilisateur et rediriger vers l'accueil
        if ($user->get("statut") === "DES") {
            include_once "templates/pages/message_et_redirection.php";
            exit;
        }
        // Connexion à la session
        session_connect($user->id(), $_GET["typeCompte"]); // Connecter l'utilisateur
    }
}
// Redirection vers la page d'accueil du compte de l'utilisateur
header('Location: http://money.cdelaistre.mywebecom.ovh/afficher_compte.php');
exit;
?>
