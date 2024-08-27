<?php
// Template des fonctionnalitées disponibles pour un investisseur
?>
<div class="flexwrap g32 cont1400">  <!-- PROJETS ACCEPTES -->

    <h2 class="w100">Les projets que vous soutenez</h2>
    <div class="flexwrap  g64 projets mb128 w100 projets-valide p16">
        <?php foreach($listeProjetsAvecPrommesse as $projet){ ?>
            <div class="card w21">
                <div class="card-img w100">
                    <img src="../assets/images/projet-<?=$projet->id()?>.jpg" alt="" class="responsive-img">
                </div>
                <div class="card-text flexwrap flexcolumn p8 g16">
                    <p class="proj-titre"><?= $projet->getHTML("titre")?></p>
                    <p class="nom-porteur"><?= $projet->getTarget("porteur")->getHTML("prenom")?> <?= $projet->getTarget("porteur")->getHTML("nom")?></p>
                    <div class="flexwrap g8 w100">
                        <div class="horloge"><img src="../assets/icons/horloge-bleu.png" alt="" class="responsive-img"></div>
                        <p><?= $projet->datetimeToDate($projet->get("date_publication"))?> - financé à <?=$projet->getNiveauFinancement()?>%</p>
                    </div>
                    <a href="afficher_detail_projet.php?id=<?=$projet->id()?>" class="invbtn w100">Voir plus...</a>
                </div>
            </div>
        <?php } ?>
    </div>
            
    <h2 class="w100">Les derniers projets en date</h2>
    <div class="flexwrap g64 projets mb128 w100 projets-valide p16">
        <?php foreach($ListeDerniersProjetsPubliés as $projetPublie){ ?>
            
            <div class="card w21">
                <div class="card-img w100">
                    <img src="../assets/images/projet-<?=$projetPublie->id()?>.jpg" alt="" class="responsive-img">
                </div>
                <div class="card-text flexwrap flexcolumn p8 g16">
                    <p class="proj-titre"><?= $projetPublie->getHTML("titre")?></p>
                    <p class="nom-porteur"><?= $projetPublie->getTarget("porteur")->getHTML("prenom")?> <?= $projetPublie->getTarget("porteur")->getHTML("nom")?></p>
                    <div class="flexwrap g8 w100">
                        <div class="horloge"><img src="../assets/icons/horloge-bleu.png" alt="" class="responsive-img"></div>
                        <p><?= $projetPublie->datetimeToDate($projetPublie->get("date_publication"))?></p>
                    </div>
                    <a href="afficher_detail_projet.php?id=<?= $projetPublie->id()?>" class="invbtn">Voir plus...</a>
                </div>
            </div> 
         <?php } ?>
    </div>
    
</div>