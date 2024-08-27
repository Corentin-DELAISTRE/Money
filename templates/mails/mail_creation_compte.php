<?php
// Template pour le mail informant la création d'un compte
// Paramètre : $this le membre créer (un objet gestionnaire ou un objet investisseur)
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta charset="UTF-8">
</head>
<body>
    <p>
        Bonjour <?= $this->getHTML("prenom") ?>, un compte <?= $this->table()?> à été créé pour vous sur le site de Money.<br> Pour vous connecter veuillez utiliser votre adresse mail ainsi que le mot de passe suivant : <?= $clearMdp ?>
        
    </p>
    <p style="margin-bottom:32px;">
        Pour accéder au formulaire de connexion veuillez cliquer <a href="http://money.cdelaistre.mywebecom.ovh/afficher_form_connexion_<?= $this->table() ?>.php">ici</a> 
    </p>
    
</body>

</html>