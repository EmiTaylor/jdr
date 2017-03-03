<?php

final class Cretin extends Observable implements iClasse
{
    protected $statsId = 5;

    public function __construct()
    {
        $this->nom = "Cretin";
        parent::__construct();
    }

    public function Attack() {
        echo "Attaque\n";
    }
}
