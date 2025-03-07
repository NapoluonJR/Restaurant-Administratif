<?php
class Tarif {
    private int $id_prestation;
    private int $id_categorie;
    private float $prix;

    public function __construct(int $id_prestation, int $id_categorie, float $prix) {
        $this->id_prestation = $id_prestation;
        $this->id_categorie = $id_categorie;
        $this->prix = $prix;
    }

    public function getIdPrestation(): int {
        return $this->id_prestation;
    }

    public function getIdCategorie(): int {
        return $this->id_categorie;
    }

    public function getPrix(): float {
        return $this->prix;
    }
}
?>
