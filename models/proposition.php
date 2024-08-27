<?php
// Classe proposition : gestion des objets proposition 

class proposition extends _lambda { 

    // attributs à valoriser
    protected $table = "proposition";               // Nom de la table
    
    protected function define() {
        // Création des champs

        $this->addField("porteur", "LINK", "Porteur");
        $this->addField("titre", "TXT", "Titre");
        $this->addField("description", "TXT", "Description");
        $this->addField("montant_demande","NUM","Montant de la demande");
        $this->addField("statut","TXT","Statut");
        $this->addField("date_publication","DATETIME","Date de publication");
    }


    function listFiveLastProp(){
        // Rôle : lister lister les 5 dernieres propositions de projet les plus récent de la BDD
        // Paramètres : aucun
        // Retourne : une liste de proposition

        // Construction de la requête
        $sql = "SELECT `id`, ". $this->listChamps() . " FROM `$this->table` WHERE `statut`= 'EC' ORDER BY `date_publication` DESC LIMIT 5";

        // Execution
        $liste = $this->sqlToList($sql);

        return $liste;
    }
}