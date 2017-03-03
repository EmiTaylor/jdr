<?php

final class Personnage extends Observable {

    private $race = null;
    private $classe = null;
    private $stuff = array();

    public function __construct(string $nom, iRace $race, iClasse $classe)
    {
        $this->nom = $nom;
        $this->race = $race;
        $this->classe = $classe;

        $this->pv = $race->getPv() + $classe->getPv();
        $this->att = $race->getAtt() + $classe->getAtt();
        $this->def = $race->getDef() + $classe->getDef();
        $this->mov = $race->getMov() + $classe->getMov();

    }

    // RACE
    public function getRace(): iRace
    {
        return $this->race;
    }
    // CLASSE
    public function getClasse(): iClasse
    {
        return $this->classe;
    }

    // STUFF
    public function getStuff(): array
    {
        return $this->stuff;
    }
    // ACTION ATK
    public function Attack(): self
    {
        $this->classe->Attack();
        return $this;
    }

    /*
     * Action se déplacer
     * Déplace le personnage sur le damier
     */
    public function Move(): self
    {
        $this->race->Move();
        return $this;
    }
    /*
     * Action mourir
     * Personnage décède du Cancer
     */
    public function Die(): self
    {
        return $this;
    }
    /*
     * Action Attendre
     * Le joueur passe son tour
     */
    public function Wait(): self
    {
        return $this;
    }
}
