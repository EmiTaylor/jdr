<?php

final class Stuff extends Observable
{
    private $type = 0;
    private $emplacement = 0;

    // TYPE
    public function getType(): int
    {
        return $this->type;
    }
    public function setType(int $type): self
    {
        $this->type = $type;
        return $this;
    }
    // EMPLACEMENT
    public function getEmplacement(): int
    {
        return $this->emplacement;
    }
    public function setEmplacement(int $emplacement): self
    {
        $this->emplacement = $emplacement;
        return $this;
    }
}
