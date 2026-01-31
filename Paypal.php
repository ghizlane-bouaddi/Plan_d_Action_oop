<?php
require_once "PaiementInterface.php";
class Paypal implements PaiementInterface{


public function pay(float $montant){
    echo "payple $montant ";
}

}