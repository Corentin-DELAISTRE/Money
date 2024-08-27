<?php
// Template affichant un message de confirmation et une redirection en fonction du contrôleur par lequel on est arrivé
// Paramètres : $_SERVER["PHP_SELF"] qui donne le nom du contrôleur

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Si on vient du formulaire de dépôt de proposition de projet -->
    <?php if($_SERVER['PHP_SELF'] === "/deposer_proposition.php") {?>
        <meta http-equiv="refresh" content="5; URL='index.php'" />
    <?php } ?>
    <!-- Si on vient du formulaire de création, de modification d'activation ou de desactivation de membre -->
    <?php if(($_SERVER['PHP_SELF'] === "/modifier_membre.php") or ($_SERVER['PHP_SELF'] === "/desactiver_membre.php") or ($_SERVER['PHP_SELF'] === "/creer_membre.php") or ($_SERVER['PHP_SELF'] === "/activer_membre.php")) {?>
        <meta http-equiv="refresh" content="5; URL='afficher_gestion.php'" />
    <?php } ?>
    <!-- Si on vient d'accepte/refuser une proposition de projet en tant que gestionnaire ou qu'on vient d'ajouter une promesse de financement en tant qu'investisseur -->
    <?php if(($_SERVER['PHP_SELF'] === "/accepter_proposition.php") or ($_SERVER['PHP_SELF'] === "/refuser_proposition.php")) {?>
        <meta http-equiv="refresh" content="5; URL='afficher_compte.php'" />
    <?php } ?>
    <!-- Si on vient d'envoyer une promesse de financement pour un projet -->
    <?php if($_SERVER['PHP_SELF'] === "/ajouter_promesse.php") {?>
        <meta http-equiv="refresh" content="5; URL='afficher_detail_projet.php?id=<?= $_GET["id"]?>" />
    <?php } ?>
    <!-- Si on essaye de se connecter et que le compte est désactivé-->
    <?php if($_SERVER['PHP_SELF'] === "/connecter_utilisateur.php") {?>
        <meta http-equiv="refresh" content="5; URL='index.php'" />
    <?php } ?>
    <link rel="shortcut icon" type="image/png" href="../../assets/images/logo_money.png"/>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/main.css">
    <link href="./node_modules/aos/dist/aos.css" rel="stylesheet">
    <title>Proposition déposée</title>
</head>
<body>
    <?php include_once "templates/fragments/header.php"; ?>
    <main>
        <div class="cont1200 mt128">
            <!-- Si on vient du formulaire de dépôt de proposition de projet -->
            <?php if($_SERVER['PHP_SELF'] === "/deposer_proposition.php") {?>
                <p class="textcenter message-conf">Votre proposition de projet a bien été déposée. Vous allez être redirigé vers l'accueil.</p>
            <?php } ?>

            <!-- Si on vient du formulaire de création de membre -->
            <?php if($_SERVER['PHP_SELF'] === "/creer_membre.php") {?>
                <p class="textcenter message-conf">Le membre a bien été créé. Vous allez être redirigé vers la page de gestion des membres.</p>
            <?php } ?>

            <!-- Si on vient du formulaire de modification de membre -->
            <?php if($_SERVER['PHP_SELF'] === "/modifier_membre.php") {?>
                <p class="textcenter message-conf">Le membre a bien été modifié. Vous allez être redirigé vers la page de gestion des membres.</p>
            <?php } ?>

            <!-- Si on vient de la page pour désactiver le compte d'un membre -->
            <?php if($_SERVER['PHP_SELF'] === "/desactiver_membre.php") {?>
                <p class="textcenter message-conf">Le compte membre a bien été désactivé. Vous allez être redirigé vers la page de gestion des membres.</p>
            <?php } ?>

            <!-- Si on vient de la page pour activer le compte d'un membre-->
            <?php if($_SERVER['PHP_SELF'] === "/activer_membre.php"){?>
                <p class="textcenter message-conf">Le compte membre a bien été activé. Vous allez être redirigé vers la page de gestion des membres.</p>
            <?php } ?>
            <!-- Si on vient d'accepter une proposition de projet en tant que gestionnaire -->
            <?php if($_SERVER['PHP_SELF'] === "/accepter_proposition.php") {?>
                <p class="textcenter message-conf">La proposition à été acceptée. Vous allez être redirigé vers l'accueil de votre compte.</p>
            <?php } ?>

            <!-- Si on vient de refuser une proposition de projet en tant que gestionnaire -->
            <?php if($_SERVER['PHP_SELF'] === "/refuser_proposition.php") {?>
                <p class="textcenter message-conf">La proposition à été refusée. Vous allez être redirigé vers l'accueil de votre compte.</p>
            <?php } ?>

            <!-- Si on essaye de se connecter alors que notre compte à été désactivé -->
            <?php if($_SERVER['PHP_SELF'] === "/connecter_utilisateur.php") {?>
                <p class="textcenter message-conf">Votre compte a été désactivé. Pour le contacter veuillez contacter nos services. Vous allez être redirigé vers l'accueil</p>
            <?php } ?>

            <!-- Si on vient d'envoyer une promesse de financement pour un projet -->
            <?php if($_SERVER['PHP_SELF'] === "/ajouter_promesse.php") {?>
                <p class="textcenter message-conf">Votre promesse de financement à été envoyé. Vous allez être redirigé sur la page du projet</p>
            <?php } ?>

        </div>
    </main>
    <script src="node_modules/aos/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>