<?php
require_once "PaiementInterface.php";
class Virement implements PaiementInterface{
    public function Pay(float $montant){
        echo "Virement :$montant";
    }
}