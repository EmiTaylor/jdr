<?php

final class Humain extends Observable implements iRace
{
    protected $statsId = 6;

    public function __construct()
    {
        $this->nom = "Humain";
        parent::__construct();
    }
    public function Move() {
        echo "Se déplace\n";
    }
}
