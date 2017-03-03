<?php

abstract class Observable
{
    protected $pv = 0;
    protected $mov = 0;
    protected $att = 0;
    protected $def = 0;
    protected $nom = "";

    protected $statsId = 1;

    protected function __construct() {
        $this->initStats();
    }

    protected function initStats()
    {
        //echo "Stats id : " . $this->statsId;

        // On récupère l'objet database
        $db = Database::getInstance();
        // On cherche si le nom d'utilisateur existe
        $q = $db->prepare("SELECT * FROM stats_base WHERE id = :id");
        $q->bindValue(":id", $this->statsId, PDO::PARAM_INT);
        $q->execute();
        $stats = $q->fetch();

        if (!empty ($stats)) {
            $this->pv = $stats->pv;
            $this->mov = $stats->mov;
            $this->att = $stats->att;
            $this->def = $stats->def;
        }
    }

    // NOM
    public function getNom(): string
    {
        return $this->nom;
    }
    public function setNom(string $nom): self
    {
        $this->nom = $nom;
        return $this;
    }

    // PV
    public function getPv(): int
    {
        return $this->pv;
    }

    public function setPv(int $pv)
    {
        $this->pv = $pv;
    }

    // MOV
    public function getMov(): int
    {
        return $this->mov;
    }

    public function setMov(int $mov)
    {
        $this->mov = $mov;
    }

    // ATT
    public function getAtt(): int
    {
        return $this->att;
    }

    public function setAtt(int $att)
    {
        $this->att = $att;
    }

    // DEF
    public function getDef(): int
    {
        return $this->def;
    }

    public function setDef(int $def)
    {
        $this->def = $def;
    }
}
