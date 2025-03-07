<?php
require_once "config/bdd.php";
$db = Database::getConnection();
?>

<?php include 'header.php'; ?>

<div class="container">
    <?php
    if ($db) {
        echo "<div class='message success'>Connexion réussie !</div>";
    }

    require_once "controllers/UtilisateurController.php";
    require_once "controllers/TarifController.php"; // Ajout du contrôleur des tarifs

    $userController = new UtilisateurController();
    $tarifController = new TarifController();

    if (isset($_GET["action"])) {
        if ($_GET["action"] === "inscription") {
            $userController->inscription();
        } elseif ($_GET["action"] === "connexion") {
            $userController->connexion();
        } elseif ($_GET["action"] === "tarifs") {
            $tarifController->afficherTarifs(); // Affichage des tarifs
        }
    } else {
        echo "<div class='message info'>Page d'accueil</div>";
    }
    ?>
</div>

<?php include 'footer.php'; ?>
