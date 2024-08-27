<?php

// Template du formulaire de création d'un membre

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
    <title>Création d'un membre</title>
</head>
<body>
    <?php include_once "templates/fragments/header_sans_connexion.php"; ?>
    <main>
        <h2 class="mt32 mb64 ml64">Création d'un membre</h2>
        <form action="creer_membre.php" method="post" class="flexwrap flexcolumn align-center cont1200 g32 aos-item mb128" data-aos="fade-left" data-aos-duration="1500">
            <fieldset class="w50 flexwrap g16">
                <legend class="mb16">Type du membre</legend>
                <label for="gestionnaire" class="flexwrap g16 wfit"><input type="radio" name="type" id="gestionnaire" value="gestionnaire" checked> Gestionnaire</label>
                <label for="investisseur" class="flexwrap g16 wfit"><input type="radio" name="type" id="investisseur" value="investisseur"> Investisseur</label>
            </fieldset>
            <label class="flexwrap flexcolumn g16 w50">Nom <input type="text" name="nom" id="nom"></label>
            <label class="flexwrap flexcolumn g16 w50">Prénom <input type="text" name="prenom" id="prenom"></label>
            <label class="flexwrap flexcolumn g16 w50">Adresse<input type="text" name="adresse" id="adresse"></label>
            <label class="flexwrap flexcolumn g16 w50">Numéro de téléphone<input type="text" name="telephone" id="telephone"></label>
            <label class="flexwrap flexcolumn g16 w50">Email<input type="text" name="email" id="email"></label>
            <label class="flexwrap flexcolumn g16 w50">Mot de passe<input type="password" name="mdp" id="mdp"></label>
            <div class="flexwrap g16 align-center">
                <input type="submit" value="Créer le membre" class="actionbtn">
                <a href="afficher_gestion.php" class="backbtn">Annuler</a>
            </div>
        </form>
    </main>
    <script src="node_modules/aos/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>