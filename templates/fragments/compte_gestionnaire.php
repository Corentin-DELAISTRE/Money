<?php
// Template des fonctionnalitées disponibles pour un gestionnaire
?>
<div class="flexwrap g32 cont1400">  <!-- PROJETS ACCEPTES -->

    <h2 class="w100">Les projets que vous avez validés</h2>
    <div class="flexwrap  g64 projets mb128 w100 projets-valide p16">
        <?php foreach($listeProjets as $projet){ ?>
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
            
    <h2 class="w100">Les dernières propositions de projet</h2>
    <div class="flexwrap g64 projets mb128 w100 projets-valide p16">
        <?php foreach($listProp as $proposition){ ?>
            
            <div class="card w21">
                <div class="card-img w100">
                    <img src="../assets/images/proposition-<?=$proposition->id()?>.jpg" alt="" class="responsive-img">
                </div>
                <div class="card-text flexwrap flexcolumn p8 g16">
                    <p class="proj-titre"><?= $proposition->getHTML("titre")?></p>
                    <p class="nom-porteur"><?= $proposition->getTarget("porteur")->getHTML("prenom")?> <?= $proposition->getTarget("porteur")->getHTML("nom")?></p>
                    <div class="flexwrap g8 w100">
                        <div class="horloge"><img src="../assets/icons/horloge-bleu.png" alt="" class="responsive-img"></div>
                        <p><?= $proposition->datetimeToDate($proposition->get("date_publication"))?></p>
                    </div>
                    <a href="afficher_detail_proposition.php?id=<?= $proposition->id()?>" class="invbtn">Voir plus...</a>
                </div>
            </div> 
         <?php } ?>
    </div>
    
</div>