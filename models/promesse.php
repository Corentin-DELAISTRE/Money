<?php
// Classe promesse : gestion des objets promesse 

class promesse extends _lambda { 

    // attributs à valoriser
    protected $table = "promesse";               // Nom de la table
    
    protected function define() {
        // Création des champs

        $this->addField("investisseur", "LINK", "Investisseur");
        $this->addField("projet", "LINK", "Projet");
        $this->addField("montant_promis", "NUM", "Montant promis");
    }

    function getProjetsAvecPromesse(){
        // Rôle : Récuperer tous les projets pour lesquels l'utilisateur a promis un financement
        // Paramètres : Aucun
        // Retourne: une liste d'objets projet

        // Construction de la requête et des paramèters
        $params = [":id" => session_userconnected()->id()];
        $sql = "SELECT `id`, " . $this->listChamps() . " FROM `$this->table` WHERE `investisseur` = :id";

        // Execution
        $listePromesses = $this->sqlToList($sql,$params);

        // Initialisation de la liste des projets
        $listeProjets = [];

        // Pour chaque promesses récupération et insertion dans la liste des projets
        foreach ($listePromesses as $promesse) {
            $listeProjets[] = $promesse->getTarget("projet");
        }

        return $listeProjets;
    }

    function hasPromise($idInvestisseur,$idProjet){
        // Rôle : Savoir si un investisseur a promis un financement pour un projet ou non
        // Paramètres : $idInvestisseur l'id d l'investisseur
        //              $idProjet l'id du projet
        // Retourne : true si l'investisseur a bien promis un financement, false sinon

        // Construction des paramètres et de la requête
        $params = [
            ":investisseur"=>$idInvestisseur,
            "projet"=>$idProjet
        ];
        $sql = "SELECT `id`, " . $this->listChamps() . " FROM `$this->table` WHERE `investisseur` = :investisseur and `projet` = :projet";

        // Execution de la requête
        $promesse = $this->sqlToList($sql,$params);
        
        // On est censé avoir une liste avec un seul élément ou une liste vide
        // Si la liste est vide on retourne false 
        if(empty($promesse)){
            return false;
        }else{
            return true;
        }
    }
}