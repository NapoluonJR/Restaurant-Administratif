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

    $controller = new UtilisateurController();

    if (isset($_GET["action"])) {
        if ($_GET["action"] === "inscription") {
            $controller->inscription();
        } elseif ($_GET["action"] === "connexion") {
            $controller->connexion();
        }
    } else {
        echo "<div class='message info'>Page d'accueil</div>";
    }
    ?>
</div>

<?php include 'footer.php'; ?>
