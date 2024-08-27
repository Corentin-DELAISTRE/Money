<?php 
// Template du formulaire de connexion
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
    <title>Connexion</title>
</head>
<body>
    <?php include_once "templates/fragments/header_sans_connexion.php"; ?>
    <main>
        <h2 class="mt32 mb64 textcenter">Connexion en tant que gestionnaire</h2>
        <form action="connecter_utilisateur.php?typeCompte=gestionnaire" method="post" class="flexwrap flexcolumn align-center cont1200 g64 aos-item" data-aos="fade-left" data-aos-duration="1500">
            <label class="flexwrap flexcolumn g16 w30">Adresse email<input type="text" name="email"></label>
            <label class="flexwrap flexcolumn g16 w30">Mot de passe<input type="password" name="mdp"></label>
            <input type="submit" value="Connexion" class="mlra actionbtn">
        </form>
    </main>
    <script src="node_modules/aos/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>