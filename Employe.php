<?php

Abstract class Employe{
    protected string $nom;

    public function __construct($nom){
        $this->nom=$nom;
    }

    public function getSalaire(){}
} 