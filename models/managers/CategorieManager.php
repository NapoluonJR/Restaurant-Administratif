<?php

class CategorieManager {
    private PDO $db;

    public function __construct(PDO $db) {
        $this->db = $db;
    }

    public function getAllCategories(): array {
        $query = $this->db->query("SELECT * FROM categorie");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>