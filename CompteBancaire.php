<?php

class CompteBancaire{
    private int $id;
    private int $solde;

    private int $montant;
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

   
    public function setMontant($montant)
    {
        $this->montant = $montant;

    }
}