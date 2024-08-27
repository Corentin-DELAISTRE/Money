<?php
// Template pour le mail informant le porteur la refus de sa proposition de projet
// Paramètre : $this le porteur de la proposition (un objet porteur)
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta charset="UTF-8">
</head>
<body>
    <div class="cont1200 flexwrap flexcolumn g24">
        <p>
            Bonjour <?= $this->getTarget("porteur")->getHTML("prenom") ?>,<br>
            Nous vous remercions d’avoir soumis votre projet intitulé "<?= $this->getHTML("titre") ?>" sur notre plateforme de financement participatif. Après une évaluation minutieuse, nous regrettons de vous informer que votre proposition n’a pas été retenue.
        </p>
        <p>
            Nous recevons de nombreuses propositions chaque jour et, bien que votre projet présente des aspects intéressants, il ne correspond pas actuellement à nos critères de sélection. Nous vous encourageons à revoir votre proposition en tenant compte des éléments suivants :
        </p>
        <p>
            <?=nl2br($raison)?>
        </p>
        <p>
            Nous vous invitons à prendre en considération ces points et à soumettre une nouvelle proposition après avoir apporté les modifications nécessaires. Notre équipe reste à votre disposition pour toute question ou clarification concernant notre décision.
        </p>
        <p>
            Nous vous remercions de votre compréhension et espérons pouvoir collaborer avec vous sur de futurs projets.
        </p>
        <p>
            Cordialement.
        </p>
    </div>
    
    
</body>
</html>