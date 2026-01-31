<?php

class ProduitControler{
    public function produit(){
        $produit = new Produit('phone',1200);
        echo $produit->getNom();
        echo $produit->getPrix();
        $produit->affiche();

    }
}