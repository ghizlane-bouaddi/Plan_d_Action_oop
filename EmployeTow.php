<?php
require_once "Employe.php";
class EmployeTow extends Employe{
    protected int $bonus;
    protected int $fiex;

    public function __construct($nom,$bonus,$fiex){
        parent::__construct($nom);
        $this->bonus=$bonus;
        $this->fiex=$fiex;
    }

    public function getSalaire(){
        $salair = $this->bonus +$this->fiex;
        return var_dump($salair);
    }
    
   
}