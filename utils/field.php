<?php

// classe permetant de gérer un objet champ d'un objet de la base de données




class _field {

    protected $name;        // nom du champ
    protected $type;        // type de champ : TXT, DATE, DATETIME, NUM, LINK
    protected $libelle;     // Libellé du champ
    protected $link;        // Objet pointé si lien

    protected $object;      // Objet dont ce champ fait partie

    protected $value;       // valeur de l'objet
    protected $target;       // Objet pointé si chargé


    function __construct($object,$name, $type = null, $libelle  = null, $link = null) {
        // Constructeur
        // Paramètres :
        //      $object:    objet de ratachement
        //      $name;        // nom du champ
        //      $type;        // type de champ : TXT, DATE, DATETIME, NUM, LINK 
        //              par defaut : TXT
        //      $libelle;     // Libellé du champ
        //              par défaut : nom du champ
        //      $link;        // Objet pointé si lien (facultatif)
        //                    si c'est un lien et que link n'est pas précisé,link = name

        $this->object = $object;
        $this->name = $name;
        $this->type = (empty($type) ? "TXT" : $type); 
        $this->libelle = (empty($libelle) ? $libelle : $name);
        if ($type != "LINK") return;
        $this->link = (empty($link) ? $link : $name);
    }

    function get() {
        // Role: récupérer la valeur du champ
        // Paramètres : néant
        // Retour : la valeur

        return $this->value;
    }

    function set($value) {
        // Role: changer la valeur du champ
        // Paramètres : 
        //      $value : nouvelle valeur
        // Retour : true si la valeur est accepté, false sinon

        $this->value = $value;
        return true;

        
    }

    function html() {
        // Role: récupérer la valeur HTML du champ
        // Paramètres : néant
        // Retour : la valeur

        return nl2br(htmlentities($this->get()));        
    }

    function type() {
        // Role: récupérer le type du champ
        // Paramètres : néant
        // Retour : le code du type

        return $this->type;           
    }

    function name(){
        // Role: récupérer le nom du champ
        // Paramètres : néant
        // Retour : le code du nom
        return $this->name;
    }

    function libelle($html = true) {
        // Role: récupérer le libelle du champ
        // Paramètres : 
        //      $html : true si on veut le convertir en HTML
        // Retour : le code du libelle  
        
        if ($html) return nl2br(htmlentities($this->libelle));
        else return $this->libelle;
    }


}
