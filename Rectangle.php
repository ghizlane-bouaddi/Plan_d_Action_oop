<?php

class Rectangle extends Forme{
    protected float $largeur;
    protected float $hauteur;

    public function __construct($largeur,$hauteur){
        $this->largeur=$largeur;
        $this->hauteur =$hauteur;
    }

    public function dimensions(){
        $Rectangle = $this->largeur * $this->hauteur;
        return var_dump($Rectangle);
    }
}