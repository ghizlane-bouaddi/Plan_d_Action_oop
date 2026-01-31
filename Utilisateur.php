<?php

class Utilisateur
{

    protected string $nom;
    protected string $email;

    protected static int $compter = 0;

    public function __construct($nom, $email)
    {
        $this->nom = $nom;
        $this->email = $email;
        self::$compter++;
    }

    public function Contter()
    {
        return print_r(self::$compter);
    }
}
