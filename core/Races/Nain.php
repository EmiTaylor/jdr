<?php

final class Nain extends Observable implements iRace
{
    protected $statsId = 8;

    public function __construct()
    {
        $this->nom = "Nain";
        parent::__construct();
    }
    public function Move() {
        echo "Se déplace\n";
    }
}
