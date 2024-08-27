<?php

// Template affichant le compte de l'utilisateur
// Paramètres : le type de compte de l'utilisateur
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="../../assets/images/logo_money.png"/>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/main.css">
    <link href="./node_modules/aos/dist/aos.css" rel="stylesheet">
    <title>Votre compte</title>
</head>
<body>
    <?php include_once "templates/fragments/header.php"; ?>

    <main>
        <h1 class="mt32 ml64 mb64">Bonjour, <?= session_userconnected()->getHTML("prenom")?> !</h1>

        <!-- Si l'utilisateur est un gestionnaire -->
         <?php if($_SESSION["typeCompte"] === "gestionnaire"){ 
            include_once "templates/fragments/compte_gestionnaire.php";
        } ?>

        <!-- Si l'utilisateur est un investisseur -->
        <?php if($_SESSION["typeCompte"] === "investisseur"){ 
            include_once "templates/fragments/compte_investisseur.php";
        } ?>
        
    </main>

   
</body>
</html>