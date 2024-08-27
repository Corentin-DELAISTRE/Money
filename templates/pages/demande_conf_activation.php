<?php

// Template : Affiche un message demandant de confirmer l'activation d'un compte membre
// Paramètres : $membre qui est soit un objet gestionnaire soit un objet investisseur

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
    <title>Activer le membre</title>
</head>
<body>
    <?php include_once "templates/fragments/header.php"; ?>

    <main>
        <h1 class="mt32 ml64 mb64">Voulez vous activer le compte de ce membre?</h1>
        <div class="cont1200 flexwrap flexcolumn align-center g32">
            <div class="wfit">
                <p><b>Nom : </b><?=$membre->getHTML("nom")?></p>
                <p><b>Prénom : </b><?=$membre->getHTML("prenom")?></p>
                <?php if($_GET["typeCompte"] === "investisseur"){ ?>
                    <p><b>Adresse postale : </b><?=$membre->getHTML("adresse")?></p>
                <?php } ?>
                <p><b>Email : </b><?=$membre->getHTML("email")?></p>
                <p><b>Numéro de téléphone : </b><?=$membre->getHTML("telephone")?></p>
            </div>
            <div class="flexwrap justcenter g16 align-center">
                <a href="activer_membre.php?id=<?=$membre->id()?>&typeCompte=<?=$_GET["typeCompte"]?>" class="desbtn">Activer</a>
                <a href="afficher_gestion.php" class="backbtn">Annuler</a>
            </div>
        </div>
    </main>
</body>
</html>