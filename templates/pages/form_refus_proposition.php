<?php
// Template : Formulaire permettant de notifier la raison du refus d'une proposition de projet
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
    <title>Refus de la proposition</title>
</head>
<body>
    <?php include_once "templates/fragments/header.php"; ?>
    <main>
    <h2 class="mt32 mb64 ml64">Refus de la proposition</h2>
        <form action="refuser_proposition.php?id=<?=$proposition->id()?>" method="post" class="flexwrap flexcolumn cont1200 g64 aos-item" data-aos="fade-left" data-aos-duration="1500">
            <label class="flexwrap flexcolumn g16">Veuillez préciser la raison du refus<textarea name="raison" id="raison" rows="20"></textarea></label>
            <div class="flexwrap g16 align-center justcenter">
                <input type="submit" value="Envoyer" class="projbtn">
                <a href="afficher_gestion.php" class="backbtn">Annuler</a>
            </div>
        </form>
    <script src="node_modules/aos/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>