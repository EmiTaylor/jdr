<?php

final class Mage extends Observable implements iClasse
{
    protected $statsId = 2;

    public function __construct()
    {
        $this->nom = "Mage";
        parent::__construct();
    }

    public function Attack() {
        echo "Attaque\n";
    }
}
