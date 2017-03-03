<?php

final class Palade extends Observable implements iClasse
{
    protected $statsId = 4;

    public function __construct()
    {
        $this->nom = "Palade";
        parent::__construct();
    }

    public function Attack() {
        echo "Attaque\n";
    }
}
