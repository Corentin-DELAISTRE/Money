<?php 
// Template du formulaire de dépôt de projet
// Paramètres : aucun
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
    <title>Depôt de proposition de projet</title>
</head>
<body>
    <?php include_once "templates/fragments/header_sans_connexion.php"; ?>
    <main>
        <h2 class="mt32 mb64 ml64">Parlez nous de votre projet...</h2>
        <form action="deposer_proposition.php" method="post" class="flexwrap spacebetween cont1200 g64 aos-item" data-aos="fade-left" data-aos-duration="1500">
            <div class="flexwrap flexcolumn g32 w45">
                <label class="flexwrap flexcolumn g16">Titre de votre projet<input type="text" name="titre"></label>
                <label class="flexwrap flexcolumn g16">Description détaillée de votre projet <textarea name="description" rows="14"></textarea></label>
                <label class="flexwrap flexcolumn g16">Montant désiré ( en € )<input type="number" name="montant_demande"></label>
            </div>
            <div class="flexwrap flexcolumn g32 w45">
                <label class="flexwrap flexcolumn g16">Votre nom<input type="text" name="nom"></label>
                <label class="flexwrap flexcolumn g16">Votre prénom<input type="text" name="prenom"></label>
                <label class="flexwrap flexcolumn g16">Votre adresse postale<input type="text" name="adresse"></label>
                <label class="flexwrap flexcolumn g16">Votre email<input type="text" name="email"></label>
                <label class="flexwrap flexcolumn g16">Votre numéro de téléphone<input type="text" name="telephone"></label>
            </div>
            <input type="submit" value="Déposer votre proposition" class="mlra actionbtn">
        </form>
    </main>
    <script src="node_modules/aos/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>