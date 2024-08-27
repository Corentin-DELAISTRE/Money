<?php
// Template affichant les informations détaillées d'une proposition de projet
// Paramètres : $proposition la proposition
//              $porteur le porteur de la proposition
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
    <title>Détail de la proposition de projet</title>
</head>
<body>
    <?php include_once "templates/fragments/header.php"; ?>
    <main>
        <div class="cont1400 flexwrap spacebetween mt64">
            <div class="left-infos w60 flexwrap g8 aos-item" data-aos="fade-right" data-aos-duration="1500">
                <div class="left-img w100 pos-rel">
                    <img src="../assets/images/proposition-<?=$proposition->id()?>.jpg" alt="" class="responsive-img">
                    <div class="pos-abs infos-img p16 w100">
                        <h3><?=$proposition->get("titre")?></h3>
                        <p><?=$proposition->datetimeToDate($proposition->get("date_publication"))?></p>
                        <p class="textend montant-demande"><?=$proposition->get("montant_demande")?> €</p>
                    </div>
                </div>
                <p class="p16"><?=$proposition->get("description")?></p>
            </div>
            <div class="right-info w30 flexwrap flexcolumn spacebetween aos-item" data-aos="fade-left" data-aos-duration="1500">
                <div class="flexwrap flexcolum g32">
                    <div class="coord w100 flexwrap g32 p16">
                        <h3>Porteur de la proposition</h3>
                        <ul class="w100 flexwrap flexcolumn g16">
                            <li><?=$porteur->get("prenom")?> <?=$porteur->get("nom")?></li>
                            <li><?=$porteur->get("adresse")?></li>
                            <li><?=$porteur->get("telephone")?></li>
                            <li><?=$porteur->get("email")?></li>
                        </ul>
                    </div>
                    <div class="btns w100 flexwrap flexcolumn w100 g16">
                        <a href="afficher_form_modif_description.php?id=<?=$proposition->id()?>" class="projbtn w100 textcenter">Accepter le projet</a>
                        <a href="afficher_form_refus_description.php?id=<?=$proposition->id()?>" class="refusbtn w100 textcenter">Refuser le projet</a>
                    </div>
                </div>
                <a href="afficher_compte.php" class="backtolistbtn textcenter">Revenir à la liste des propositions</a>
            </div>
        </div>
    <script src="node_modules/aos/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>