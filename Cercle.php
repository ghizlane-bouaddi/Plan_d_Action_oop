<?php

class Cercle extends Forme{
    protected float $rayon;


    public function __construct($rayon){
        $this->rayon=$rayon;
    }

    public function rayones(){
        $Cercle= ($this->rayon *$this->rayon)*3.14;
        return var_dump($Cercle);
    }
    
}