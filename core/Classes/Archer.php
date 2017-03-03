<?php

final class Archer extends Observable implements iClasse
{
    protected $statsId = 3;

    public function __construct()
    {
        $this->nom = "Archer";
        parent::__construct();
    }

    public function Attack() {
        echo "Attaque\n";
    }
}
