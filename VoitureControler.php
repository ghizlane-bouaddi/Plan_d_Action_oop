<?php

class VoitureControler {
   public function Voitures(){
     $voiture = new voiture();
    $voiture->setMarque('catcate');
    $voiture->setCouleur('red');
    $voiture->setVitesse(60);

    $voiture->accelerer();
    $voiture->afficherInfos();
    
   }


}