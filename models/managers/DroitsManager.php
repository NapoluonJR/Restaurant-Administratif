<?php

class DroitsManager {
    private PDO $db;

    public function __construct(PDO $db) {
        $this->db = $db;
    }

    public function getAllDroits(): array {
        $query = $this->db->query("SELECT * FROM droits");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>