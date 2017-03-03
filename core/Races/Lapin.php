<?php

final class Lapin extends Observable implements iRace
{
    protected $statsId = 8;

    public function __construct()
    {
        $this->nom = "Lapin";
        parent::__construct();
    }
    public function Move() {
        echo "Se déplace\n";
    }
}
