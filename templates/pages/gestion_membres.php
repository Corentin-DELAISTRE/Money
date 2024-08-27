<?php

// Template : Affiche une liste de membre et les critères de recherche

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
    <title>Gestion des membres</title>
</head>
<body>
    <?php include_once "templates/fragments/header.php"; ?>

    <main>
        <h1 class="mt32 ml64 mb64">Gestion des membres</h1>
        <a href="afficher_form_creation_membre.php" class="actionbtn ml64 mb32">Créer un membre</a>

        <form action="" class="mb64 flexwrap g48 cont1200">
            <label class="flexwrap flexcolumn g16">Type de membre :
                <select name="typeCompte" id="typeCompte">
                    <option value="all">Tous les membres</option>
                    <option value="gestionnaire">Gestionnaires</option>
                    <option value="investisseur">Investisseurs</option>
                </select>
            </label>
            <label class="flexwrap flexcolumn g16 w30">Rechercher une information précise :
                <input type="search" name="search" id="search" class="w100">
            </label>
        </form>
        <table class="membre-table cont1200 mb128">
            <thead>
                <tr>
                    <th>NOM</th>
                    <th>PRENOM</th>
                    <th>EMAIL</th>
                    <th>TELEPHONE</th>
                    <th>MODIFIER</th>
                    <th>ACTIVER / DESACTIVER</th>
                </tr>
                
            </thead>
            <tbody id="tableau">
                <?php foreach ($listeMembre as $membre) { ?>
                    <tr>
                    <td><?= $membre->getHTML("nom")?></td>
                    <td><?= $membre->getHTML("prenom")?></td>
                    <td><?= $membre->getHTML("email")?></td>
                    <td><?= $membre->getHTML("telephone")?></td>
                    <td><a href="afficher_form_modif_membre.php?id=<?=$membre->id()?>&typeCompte=<?=$membre->table()?>"><div class="table-icon mlra"><img src=".././assets/icons/modifier.png" alt="" class="responsive-img"></div></a></td>
                    <!-- Si le compte est desactivé on propose de l'activer -->
                    <?php if($membre->get("statut")==="DES"){?>
                        <td><a href="afficher_demande_conf_activation.php?id=<?=$membre->id()?>&typeCompte=<?=$membre->table()?>"><div class="table-icon mlra"><img src=".././assets/icons/activer.png" alt="" class="responsive-img"></div></a></td>
                    <?php } ?>
                    <!-- Si le compte est actif on propose de le désactiver -->
                    <?php if($membre->get("statut")==="ACT"){?>
                        <td><a href="afficher_demande_conf_desactivation.php?id=<?=$membre->id()?>&typeCompte=<?=$membre->table()?>"><div class="table-icon mlra"><img src=".././assets/icons/desactiver.png" alt="" class="responsive-img"></div></a></td>
                    <?php } ?>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </main>

   <script src="../../scripts/demande_tri_membre.js" defer></script>
</body>
</html>