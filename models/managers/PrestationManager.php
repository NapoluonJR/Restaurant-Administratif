<?php

class PrestationManager {
    private PDO $db;

    public function __construct(PDO $db) {
        $this->db = $db;
    }

    public function getAllPrestations(): array {
        $query = $this->db->query("SELECT * FROM prestation");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>