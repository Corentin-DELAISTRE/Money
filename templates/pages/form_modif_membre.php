<?php

// Template du formulaire de modification d'un membre
// Paramètres : $membre un objet gestionnaire ou un objet investisseur

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
    <title>Modification du membre</title>
</head>
<body>
    <?php include_once "templates/fragments/header_sans_connexion.php"; ?>
    <main>
        <h2 class="mt32 mb64 ml64">Modification du membre</h2>
        <form action="modifier_membre.php?id=<?=$_GET["id"]?>&typeCompte=<?=$_GET["typeCompte"]?>" method="post" class="flexwrap flexcolumn align-center cont1200 g64 aos-item mb128" data-aos="fade-left" data-aos-duration="1500">
            <label class="flexwrap flexcolumn g16 w50">Nom <input type="text" name="nom" id="nom" value="<?= $membre->getHTML("nom") ?>"></label>
            <label class="flexwrap flexcolumn g16 w50">Prénom <input type="text" name="prenom" id="prenom" value="<?= $membre->getHTML("prenom") ?>"></label>
            <label class="flexwrap flexcolumn g16 w50">Numéro de téléphone<input type="text" name="telephone" id="telephone" value="<?= $membre->getHTML("telephone") ?>"></label>
            <label class="flexwrap flexcolumn g16 w50">Email<input type="text" name="email" id="email" value="<?= $membre->getHTML("email") ?>"></label>
            <div class="flexwrap g16 align-center">
                <input type="submit" value="Modifier" class="actionbtn">
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