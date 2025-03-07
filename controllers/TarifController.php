<?php
require_once 'config/bdd.php';
require_once 'models/managers/TarifManager.php';

class TarifController {
    public function afficherTarifs() {
        global $db;

        $tarifManager = new TarifManager($db);
        $tarifs = $tarifManager->getTarifs();
        require 'views/tarifs.php';
    }
}
?>
