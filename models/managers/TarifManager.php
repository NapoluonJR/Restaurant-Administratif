<?php

class TarifManager {
    private PDO $db;

    public function __construct(PDO $db) {
        $this->db = $db;
    }

    public function getAllTarifs(): array {
        $query = $this->db->query("SELECT * FROM tarif");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>