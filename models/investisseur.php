<?php
// Classe investisseur : gestion des objets investisseur 

class investisseur extends _lambda { 

    // attributs à valoriser
    protected $table = "investisseur";               // Nom de la table
    
    protected function define() {
        // Création des champs

        $this->addField("nom", "TXT", "Nom");
        $this->addField("prenom", "TXT", "Prenom");
        $this->addField("adresse", "TXT", "Adresse Postale");
        $this->addField("email","TXT","Adresse Email");
        $this->addField("telephone","TXT","Numero de téléphone");
        $this->addField("mdp","TXT","Mot de passe");
        $this->addField("statut","TXT","Statut");
    }


    function trierInvestisseur($critere){
        // Rôle : générer une liste d'investisseur en fonction d'un critère de recherche
        // Paramètres : $critere le critère de recherche
        // Retourne  : Une liste d'objet investisseur

        // Construction de la requête et des paramètres
            $params = [":critere" => "%".$critere."%"];
            $sql = "SELECT `id`, `nom`, `prenom`, `email`, `telephone` FROM `investisseur`  WHERE `nom` LIKE :critere  or `prenom` LIKE :critere or `email` LIKE :critere or `telephone` LIKE :critere";
        // Execution

        $liste = $this->sqlToList($sql,$params);

        return $liste;

        
    }
}