<?php

class Produit{
    private int $id;
    private string $nom;
    private float $prix;

    public function __construct($nom,$prix){
        $this->nom =$nom;
        $this->prix =$prix;
    }



    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

    }

   
    public function getNom()
    {
        return $this->nom;
    }

  
    public function setNom($nom)
    {
        $this->nom = $nom;

    }

 
    
    public function getPrix()
    {
        return $this->prix;
    }

   
    public function setPrix($prix)
    {
        $this->prix = $prix;

    }

    
    public function affiche(){
        echo "produit - nom :$this->nom prix: $this->prix";
    }

    
}