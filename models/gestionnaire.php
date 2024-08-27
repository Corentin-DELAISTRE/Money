<?php
// Classe gestionnaire : gestion des objets gestionnaire 

class gestionnaire extends _lambda { 

    // attributs à valoriser
    protected $table = "gestionnaire";               // Nom de la table
    
    protected function define() {
        // Création des champs

        $this->addField("nom", "TXT", "Nom");
        $this->addField("prenom", "TXT", "Prenom");
        $this->addField("email","TXT","Adresse Email");
        $this->addField("mdp","TXT","Mot de passe");
        $this->addField("statut","TXT","Statut");
        $this->addField("telephone","TXT","Numero de telephone");
    }

     function trierGestionnaire($critere){
        // Rôle : générer une liste de gestionnaires en fonction d'un critère de recherche
        // Paramètres : $critere le critère de recherche
        // Retourne  : Une liste d'objet gestionnaire

        // Construction de la requête et des paramètres
        $params =[":critere" => "%".$critere."%"];
        $sql = "SELECT `id`, `nom`, `prenom`, `email`, `telephone` FROM `gestionnaire`  WHERE `nom` LIKE :critere  or `prenom` LIKE :critere or `email` LIKE :critere or `telephone` LIKE :critere";
        // Execution

        $liste = $this->sqlToList($sql,$params);

        return $liste;
    }



}