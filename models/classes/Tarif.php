<?php

class Tarif {
    private int $id;
    private float $montant;
    private int $idCategorie;
    private int $idPrestation;

    public function __construct(int $id, float $montant, int $idCategorie, int $idPrestation) {
        $this->id = $id;
        $this->montant = $montant;
        $this->idCategorie = $idCategorie;
        $this->idPrestation = $idPrestation;
    }

    public function getId(): int {
        return $this->id;
    }

    public function getMontant(): float {
        return $this->montant;
    }

    public function getIdCategorie(): int {
        return $this->idCategorie;
    }

    public function getIdPrestation(): int {
        return $this->idPrestation;
    }
}

?>