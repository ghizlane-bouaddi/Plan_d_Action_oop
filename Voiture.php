<?php

class Voiture{
    private int $id;
    private string $marque;
    private string $couleur;
    private int $vitesse =0;

  public function accelerer(){
    $this->vitesse+=10;
  }

  public function afficherInfos(){
    echo "Voiture un marque: $this->marque  couleur :$this->couleur  vitesse:$this->vitesse";
  }
   
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getMarque()
    {
        return $this->marque;
    }

    public function setMarque($marque)
    {
        $this->marque = $marque;

    }

    public function getCouleur()
    {
        return $this->couleur;
    }

    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;

        
    }

    public function getVitesse()
    {
        return $this->vitesse;
    }

    public function setVitesse($vitesse)
    {
        $this->vitesse = $vitesse;

    }


}