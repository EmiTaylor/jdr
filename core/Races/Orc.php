<?php

final class Orc extends Observable implements iRace
{
    protected $statsId = 1;

    public function __construct()
    {
        $this->nom = "Orc";
        parent::__construct();
    }
    public function Move() {
        echo "Se déplace\n";
    }
}
