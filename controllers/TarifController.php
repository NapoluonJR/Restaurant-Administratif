<?php
require_once 'config/bdd.php'; // Inclure le fichier qui gère la connexion
require_once 'models/managers/TarifManager.php';

class TarifController {
    public function afficherTarifs() {
        // Utiliser la connexion déjà définie dans bdd.php
        global $db; // Si $db est défini comme variable globale dans config/bdd.php

        $tarifManager = new TarifManager($db);
        $tarifs = $tarifManager->getTarifs();
        require 'views/tarifs.php';
    }
}
?>
