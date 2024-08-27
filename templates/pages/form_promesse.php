<?php
// Template du formulaire de soumission d'une promesse de financement
// Paramètres : $projet un objet projet
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
    <title>Promettre un financement</title>
<body>
    <?php include_once "templates/fragments/header.php"; ?>
    <main>
        <div class="cont1400 flexwrap spacebetween mt64 mb64 mb128"><!-- INFOS DU PROJET -->
            <div class="left-infos w50 flexwrap g8 aos-item" data-aos="fade-right" data-aos-duration="1500">
                <div class="left-img w100 pos-rel">
                    <img src="../assets/images/projet-<?=$projet->id()?>.jpg" alt="" class="responsive-img">
                    <div class="pos-abs infos-img p16 w100">
                        <h3><?=$projet->get("titre")?></h3>
                        <p><?=$projet->datetimeToDate($projet->get("date_publication"))?></p>
                        <p class="textend montant-demande"><?=$projet->get("montant_demande")?> €</p>
                    </div>
                </div>
                <p class="p16"><?=$projet->get("description")?></p>
            </div>
            <div class="right-info w36 flexwrap flexcolumn spacebetween aos-item promesse-form p32" data-aos="fade-left" data-aos-duration="1500"><!-- INFOS DU PORTEUR -->
                <h2 class="mb64">Participer au financement</h2>
                <form action="ajouter_promesse.php?id=<?=$projet->id()?>" method="post" class="flexwrap flexcolumn g64 aos-item" data-aos="fade-left" data-aos-duration="1500">
                    <label  class="flexwrap flexcolumn g16">Veuillez saisir le montant de votre participation (en €)<input type="number" name="montant" id="montant"></label>
                    <div class="flexwrap g16 align-center justcenter">
                        <input type="submit" value="Financer le projet" class="projbtn">
                        <a href="afficher_gestion.php" class="backbtn">Annuler</a>
                    </div>
                </form>
            </div>
        </div>
    <script src="node_modules/aos/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>