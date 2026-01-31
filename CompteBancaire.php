<?php

class CompteBancaire{
    private int $id;
    private int $solde;

    private int $montant;

    public function __construct($id,$solde,$montant){
        $this->id=$id;
        $this->solde=$solde;
        $this->montant=$montant;
    }
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getSolde()
    {
        return $this->solde;
    }

    public function setSolde($solde)
    {
        $this->solde = $solde;

    }

    
    public function getMontant()
    {
        return $this->montant;
    }

    public function AfficheMontant($kjarj){
        if($this->montant - $kjarj < 0 ){
           echo 'tkhrjx wzlo';
           return;
        }else{
             return print_r($this->montant=$this->montant-$kjarj);

        }
    }

   
    public function setMontant($montant)
    {
        $this->montant = $montant;

    }

    public function Affichache(){
        echo 'id :'.$this->id. 'soler :'.$this->solde .'montant:'.$this->montant;
    }
}