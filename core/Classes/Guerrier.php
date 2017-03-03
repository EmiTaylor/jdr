<?php

final class Guerrier extends Observable implements iClasse
{
    protected $statsId = 1;

    public function __construct()
    {
        $this->nom = "Guerrier";
        parent::__construct();
    }

    public function Attack() {
        echo "Attaque\n";
    }
}
