<?php
require_once "PaiementInterface.php";

class Stripe implements PaiementInterface{
    public function Pay(float $montant){
        echo "Stripe $montant";
    }
}