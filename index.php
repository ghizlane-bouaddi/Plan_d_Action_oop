<?php

require_once "Voiture.php";
require_once "VoitureControler.php";
require_once "Produit.php";
require_once "ProduitControler.php";
$voitures = new VoitureControler();
$voitures->Voitures();

$produit = new ProduitControler();
$produit->produit();