<?php

require_once 'models/classes/Tarif.php'; // Inclure une seule fois le fichier Tarif.php

class TarifManager {
    private PDO $db;

    public function __construct(PDO $db) {
        $this->db = $db;
    }

    // Méthode pour récupérer tous les tarifs
    public function getAllTarifs(): array {
        $query = $this->db->query("SELECT * FROM tarif");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    // Méthode pour récupérer les tarifs avec des objets Tarif
    public function getTarifs(): array {
        $sql = "SELECT id_prestation, id_categorie, prix FROM tarif";
        $stmt = $this->db->query($sql);
        $tarifs = [];

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $tarifs[] = new Tarif($row['id_prestation'], $row['id_categorie'], $row['prix']);
        }

        return $tarifs;
    }
}

?>
