<?php
// Template : Formulaire de modification de la description d'une proposition de projet
// Paramètres : $proposition une proposition de projet
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
    <title>Modifier la description du projet</title>
</head>
<body>
    <?php include_once "templates/fragments/header.php"; ?>
    <main>
    <h2 class="mt32 mb64 ml64">Validation du projet</h2>
        <form action="accepter_proposition.php?id=<?=$proposition->id()?>" method="post" class="flexwrap flexcolumn cont1200 g64 aos-item" data-aos="fade-left" data-aos-duration="1500">
            <label class="flexwrap flexcolumn g16">Modifier la description de la proposition de projet (facultatif)<textarea name="description" id="description" rows="20"><?= $proposition->get("description")?></textarea></label>
            <div class="flexwrap g16 align-center justcenter">
                <input type="submit" value="Valider la proposition" class="projbtn">
                <a href="afficher_gestion.php" class="backbtn">Annuler</a>
            </div>
        </form>
    <script src="node_modules/aos/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>