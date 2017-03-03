<?php

final class Elfe extends Observable implements iRace
{
    protected $statsId = 7;

    public function __construct()
    {
        $this->nom = "Elfe";
        parent::__construct();
    }
    public function Move() {
        echo "Se déplace\n";
    }
}
