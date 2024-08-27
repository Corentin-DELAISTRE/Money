<?php

// Template de la page d'acceuil du site
// Paramètres : une liste de 5 objet "projet"

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
    <title>Money : le site de financement de projet</title>
</head>
<body>
    <?php include_once "templates/fragments/header.php"; ?>
    <main>
        <div class="hero w100 pos-rel mb64"> <!-- HERO -->
            <div class="filter pos-abs w100 h100"></div>
            <h1 class="w70 pos-abs aos-item" data-aos="fade-right" data-aos-duration="1500">Découvrez et financez les projets qui façonnent l'avenir.</h1>
        </div>

        <article class="presentation flexwrap flexcolumn cont1400 g64 mb128"> <!-- PRESENTATION -->

            <div class="presentation-text flexwrap flexcolumn g32">
                <div class="flexwrap flexcolumn g16 aos-item" data-aos="fade-right" data-aos-duration="1500">
                   <h2>Bienvenue sur Money, la nouvelle référence en matière de financement de projets innovants.</h2>
                    <p>Que vous soyez un entrepreneur en quête de fonds pour concrétiser votre vision ou un investisseur cherchant à soutenir des initiatives prometteuses, notre plateforme vous offre un espace sécurisé et collaboratif pour réaliser vos objectifs.</p> 
                </div>
                <div class="flexwrap flexcolumn g16 aos-item" data-aos="fade-left" data-aos-duration="1500">
                   <h2>Pour les Porteurs de Projets</h2>
                    <p>Vous avez une idée brillante et êtes prêt à la transformer en réalité ? Money est là pour vous aider à franchir ce cap. Soumettez votre projet via notre formulaire simple et intuitif. Une fois approuvé, votre projet sera présenté à notre communauté d’investisseurs passionnés et engagés. Nous vous offrons une visibilité optimale pour attirer les financements nécessaires à votre réussite</p> 
                </div>
                <div class="flexwrap flexcolumn g16 aos-item" data-aos="fade-right" data-aos-duration="1500">
                    <h2>Pour les Investisseurs</h2>
                    <p>Rejoignez notre communauté d’investisseurs et découvrez des opportunités uniques de financement. Money vous permet d’explorer une sélection soigneusement validée de projets ambitieux et innovants. Vous pouvez consulter les détails de chaque projet, suivre leur progression et faire des promesses de financement directement depuis votre compte. Investissez en toute confiance et contribuez au succès de projets qui vous tiennent à cœur.</p>
                </div>
                <div class="flexwrap flexcolumn g16 aos-item" data-aos="fade-left" data-aos-duration="1500">
                    <h2>Notre Mission</h2>
                    <p>Notre mission est de créer un pont solide entre les créateurs et les financeurs. Nous croyons en la puissance de la collaboration et du soutien mutuel pour transformer des idées en réalités tangibles. Avec Money, nous visons à démocratiser l’accès au financement et à encourager l’innovation à travers une interface simple, transparente et sécurisée.</p>
                </div>
                <div class="flexwrap flexcolumn g16 aos-item" data-aos="fade-right" data-aos-duration="1500">
                    <h2>Fonctionnalités Clés</h2>
                    <ul class="flexwrap flexcolumn g12">
                        <li><strong>Facilité de Soumission :</strong> Un processus de dépôt de projet simple et rapide.</li>
                        <li><strong>Validation Rigoureuse :</strong>Chaque projet est attentivement évalué pour garantir sa viabilité.</li>
                        <li><strong>Visibilité Maximale </strong>Présentation claire et attrayante des projets pour attirer les investisseurs.</li>
                        <li><strong>Gestion des Promesses de Financement :</strong>Suivi facile et détaillé des promesses de financement.</li>
                        <li><strong>Communauté Engagée :</strong>Interaction avec une communauté d’investisseurs motivés et enthousiastes.</li>
                    </ul>
                </div>
            </div>
        </article>
        
        <div class="flexwrap g32 cont1400 aos-item" data-aos="fade-left" data-aos-duration="1500">  <!-- PROJETS -->
            <div class="flexwrap  g56 projets mb128 w100">
                <h2 class="w100">Les derniers Projets en date</h2>
                <?php foreach($listeProjets as $projet){ ?>

                    <div class="card w22">
                        <div class="card-img w100">
                            <img src="../assets/images/projet-<?=$projet->id()?>.jpg" alt="" class="responsive-img">
                        </div>
                        <div class="card-text flexwrap flexcolumn p8 g16">
                            <p class="proj-titre"><?= $projet->get("titre")?></p>
                            <p class="nom-porteur"><?= $projet->getTarget("porteur")->get("prenom")?> <?= $projet->getTarget("porteur")->get("nom")?></p>
                            <div class="flexwrap g8">
                                <div class="horloge"><img src="../assets/icons/horloge-bleu.png" alt="" class="responsive-img"></div>
                                <p><?= $projet->datetimeToDate($projet->get("date_publication"))?>- financé à <?=$projet->getNiveauFinancement()?>%</p>
                            </div>
                        </div>
                    </div>

                <?php } ?>
            </div>  
        </div>


        <div class="flexwrap g24 align-center cont1400 mb128 aos-item" data-aos="fade-right" data-aos-duration="1500"> <!-- REJOIGNEZ NOUS -->
            <div class="flexwrap flexcolumn g32 w40">
                <h2>Rejoignez-nous</h2>
                <p>Que vous soyez un porteur de projet ou un investisseur, Money est l’endroit idéal pour vous. Ensemble, construisons un avenir où les idées brillantes trouventle soutien financier dont elles ont besoin pour prospérer. Inscrivez-vous dès aujourd’hui et commencez votre aventure avec nous !</p>
                <div class="flexwrap g16">
                    <a href="afficher_form_depot_proposition.php" class="projbtn">Soumettre un projet</a>
                    <a href="" class="invbtn">Devenir investisseur</a>
                </div>
            </div>
            <div class="presentation-img"><img src="../assets/images/investor.webp" alt="" class="responsive-img"></div>
        </div>

    </main>
    <script src="../../scripts/header.js" defer></script>
    <script src="node_modules/aos/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>