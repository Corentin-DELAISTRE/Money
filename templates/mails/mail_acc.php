<?php
// Template pour le mail informant le porteur la validation de sa proposition de projet
// Paramètre : $this le projet en question (un objet projet)
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta charset="UTF-8">
</head>
<body>
    <p>
        Bonjour <?= $this->getTarget("porteur")->getHTML("prenom") ?>,<br>
        Après l'étude attentive de votre proposition de projet par notre équipe, nous avons la joie de vous annoncer la validation de ce dernier.
    </p>
    <p style="margin-bottom:32px;">
        Pour accéder aux informations de votre projet ainsi qu'à son taux de financement il vous suffit de cliquer sur le lien ci-dessous : <br>
        <a href="http://money.cdelaistre.mywebecom.ovh/afficher_detail_projet.php?id=<?=$this->id()?>">http://money.cdelaistre.mywebecom.ovh/afficher_detail_projet.php?id=<?=$this->id()?></a> 
    </p>
    
</body>
</html>