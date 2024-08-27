<?php
// Classe porteur : gestion des objets porteur 

class porteur extends _lambda { 

    // attributs à valoriser
    protected $table = "porteur";               // Nom de la table
    
    protected function define() {
        // Création des champs

        $this->addField("nom", "TXT", "Nom");
        $this->addField("prenom", "TXT", "Prenom");
        $this->addField("adresse", "TXT", "Adresse Postale");
        $this->addField("email","TXT","Adresse Email");
        $this->addField("telephone","TXT","Numero de téléphone");
    }

}