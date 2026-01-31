<?php

require_once "Voiture.php";
require_once "Produit.php";
require_once "CompteBancaire.php";
require_once "Animal.php";
require_once "chate.php";
require_once "Chien.php";
require_once "Forme.php";
require_once "Rectangle.php";
require_once "Cercle.php";
require_once "Utilisateur.php";
require_once "Paypal.php";
require_once "Virement.php";
require_once "Stripe.php";

require_once "EmployeTow.php";
// echo '<pre>';
//  $voiture = new voiture();
//     $voiture->setMarque('catcate');
//     $voiture->setCouleur('red');
//     $voiture->setVitesse(60);

//     $voiture->accelerer();
//     $voiture->afficherInfos();

   
// echo '</pre>';

// echo '<pre>';
//  $montont = new CompteBancaire(1,10000000,11150);
// $montont->AfficheMontant(2000);

// echo '</pre>';
// echo '<pre>';

// $produit = new Produit('phone',1200); 
// $produit->affiche();

// echo '</pre>';

// echo '<pre>';
// $chate = new Chate();
// $chate->chate();
// echo '</pre>';
// $Chien = new Chien();
// $Chien->Chiene();
// echo '</pre>';
// echo '<pre>';
// $form1 =new Rectangle(4,3);
// $form1->dimensions();
// echo '</pre>';

// echo '<pre>';
// $form2 = new Cercle(30);
// $form2->rayones();
// echo '</pre>';
// echo '<pre>';

// $admin1 = new Utilisateur("Ghizlane","Ghizlane@gmail.com");
// $admin1->Contter();
// echo '</pre>';

// echo '<pre>';

// $admin2= new Utilisateur("Ghizlane","Ghizlane@gmail.com");
// $admin2->Contter();
// echo '</pre>';

// echo '<pre>';

// $admin3= new Utilisateur("Ghizlane","Ghizlane@gmail.com");
// $admin3->Contter();
// echo '</pre>';

// echo '<pre>';

// $admin4= new Utilisateur("Ghizlane","Ghizlane@gmail.com");
// $admin4->Contter();
// echo '</pre>';
//  echo '<pre>';
// $pay = new Paypal();
// $pay->pay(10);


// echo '</pre>';
// $pay2 = new Virement();
// $pay2->pay(20);

//  echo '</pre>';
//   echo '<pre>';
// $pay3 = new Stripe();
// $pay3->pay(30);


$salire = new EmployeTow("adam",1200,100);
$salire->getSalaire();