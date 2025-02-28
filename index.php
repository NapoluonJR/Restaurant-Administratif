<?php

require_once "config/bdd.php";
$db = Database::getConnection();
echo "Connexion réussie !";

require_once "controllers/UtilisateurController.php";

$controller = new UtilisateurController();

if (isset($_GET["action"])) {
    if ($_GET["action"] === "inscription") {
        $controller->inscription();
    } elseif ($_GET["action"] === "connexion") {
        $controller->connexion();
    }
} else {
    echo "Page d'accueil";
}


?>
