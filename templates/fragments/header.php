<?php

// Template du header qui est affiché lorsque l'utilisateur est connecté et disposant de certaines fonctionalitées selon le type de compte
// Paramètres : $_SESSION["typeCompte"] le type de compte de l'utilisateur connecté

?>
<header class="pl32 pr32 w100 flexwrap align-center pos-sticky spacebetween">

    <div class="w20 flexwrap align-center g16">
        <div class="w20 logo-div">
                <a href="afficher_compte.php"><img src="../../assets/images/logo_money_fond_blanc.png" class="responsive-img"></a>
        </div>
        <p class="logo-title">Money</p>
    </div>

    <!-- Si on est sur la page d'acceuil du site -->
    <?php if($_SERVER['PHP_SELF'] === "/index.php"){ ?>
        <div>
            <a href="" id="connexion-link">Connexion</a>
        </div>
        <div class="w15 connexion flexwrap flexcolumn g16 pos-abs d-none" id="connexion-div">
            <a href="afficher_form_connexion_investisseur.php" class="flexwrap g8 align-center"><div class="w15"><img src="../../assets/icons/investisseur.png" alt="" class="responsive-img"></div>Investisseur</a>
            <a href="afficher_form_connexion_gestionnaire.php" class="flexwrap g8 align-center"><div class="w15"><img src="../../assets/icons/gestionnaire.png" alt="" class="responsive-img"></div>Gestionnaire</a>
        </div>
    <?php } ?>

    <!-- Si c'est le compte d'un gestionnaire -->
    <?php if(($_SERVER['PHP_SELF'] !== "/index.php") and ($_SESSION["typeCompte"] === "gestionnaire") ){ ?>
        <div class="flexwrap g16">
            <a href="afficher_compte.php">Accueil</a>
            <a href="afficher_gestion.php">Gérer les membres de l'application</a>
            <a href="deconnecter.php">Deconnexion</a>
        </div>
    <?php } ?>

    <!-- Si c'est le compte d'un investisseur -->
    <?php if(($_SERVER['PHP_SELF'] !== "/index.php") and ($_SESSION["typeCompte"] === "investisseur") ){ ?>
        <div class="flexwrap g16">
            <a href="afficher_compte.php">Accueil</a>
            <a href="deconnecter.php">Deconnexion</a>
        </div>
    <?php } ?>
</header>
