<?php
// Template des informations détaillées d'un projet
// Paramètres : Un objet projet
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
    <title>Détail du projet</title>
</head>
<body>

    <!-- Si l'utilisateur est connecté -->
    <?php if(session_isconnected()){include_once "templates/fragments/header.php";} ?>
    <!-- Si l'utilisateur n'est pas connecté -->
    <?php if(session_isconnected() === false){include_once "templates/fragments/header_sans_connexion.php";} ?>

    <main>
        <h2 class="mt32 ml64">Détails du projet</h2>
        <div class="cont1400 flexwrap spacebetween mt64 mb64 mb128"><!-- INFOS DU PROJET -->
            <div class="left-infos w60 flexwrap g8 aos-item" data-aos="fade-right" data-aos-duration="1500">
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
            <div class="right-info w30 flexwrap flexcolumn spacebetween aos-item" data-aos="fade-left" data-aos-duration="1500"><!-- INFOS DU PORTEUR -->
                <div class="flexwrap flexcolum g32">
                    <!-- AFFICHAGE DES COORDONNEES DU PORTEUR QUE POUR LES GESTIONNAIRES-->
                    <?php if($_SESSION["typeCompte"] === "gestionnaire"){?>
                        <div class="coord w100 flexwrap g32 p16">
                            <h3>Porteur du projet</h3>
                            <ul class="w100 flexwrap flexcolumn g16">
                                <li><?=$porteur->get("prenom")?> <?=$porteur->get("nom")?></li>
                                <li><?=$porteur->get("adresse")?></li>
                                <li><?=$porteur->get("telephone")?></li>
                                <li><?=$porteur->get("email")?></li>
                            </ul>
                        </div>
                    <?php } ?>
                    <div class="w100 financement flexwrap flexcolumn g16 p16">
                        <h3>Niveau de financement</h3>
                        <p id="niveau"></p>
                        <div class="jauge w100  flexwrap">
                            <div class="promis h100" id="promis"></div>
                            <div class="restant h100" id="restant"></div>
                        </div>
                    </div>
                </div>

                <!-- AFFICHAGE DES FONCTIONNALITES DE PROPOSITION DE FINANCEMENT ET DE RETOUR A LA LISTE DES PROJETS ET AFFICHAGE DE LA LISTE DES INVESTISSEUR-->
                <!-- Si l'utilisateur est un investisseur ou un gestionnaire (donc si on a un utilisateur connecté)-->
    <?php if(session_isconnected()){ ?>
                    <div class="btns w100 flexwrap flexcolumn w100 g16">
                        <!-- Si l'utilisateur est un investisseur-->
                        <?php if($_SESSION["typeCompte"] === "investisseur") {$promesse = new promesse();?>
                            <!-- Et qu'il a déjà fait une promesse de financement pour ce projet -->
                            <?php if($financementPromis === true){?>
                                <p>Vous avez fait une promesse de financement pour ce projet</p>
                            <?php }else{ ?>
                                <a href="afficher_form_promesse.php?id=<?=$projet->id()?>" class="projbtn textcenter">Participer au financement</a>
                            <?php }?>
                        <?php } ?>
                        <a href="afficher_compte.php" class="backtolistbtn textcenter">Revenir à la liste des projets</a>
                    </div>
                

            </div>
        </div>

        <h2 class="mt32 mb64 ml64">Liste des financeurs</h2>
        <table class="membre-table cont1400 mb128">
            <thead>
                <tr>
                    <th>NOM</th>
                    <th>PRENOM</th>
                    <th>EMAIL</th>
                    <th>TELEPHONE</th>
                    <th>MONTANT PROMIS ( EN € )</th>
                </tr>
                
            </thead>
            <tbody id="tableau">
                <!-- <tr>
                    <td>Jean</td>
                    <td>Dupond</td>
                    <td>jean.dupond@exemple.com</td>
                    <td>06.06.06.06.06</td>
                    <td>1500.00</td>
                </tr> -->
            </tbody>
        </table>
    <?php } ?>
    </main>
    <script>idProjet = <?= $projet->id() ?></script>
    <?php if(session_isconnected()){ ?>
        <script src="../../scripts/demande_liste_financeurs.js" defer></script>
    <?php } ?>
    <script src="../../scripts/demande_niveau_financement.js"></script>
    <script src="node_modules/aos/dist/aos.js"></script>
    <script>AOS.init();</script>
</body>
</html>