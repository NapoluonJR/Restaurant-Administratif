<h1>Tarifs par catégorie</h1>

<?php
$categorie_actuelle = null;
foreach ($tarifs as $tarif) {
    if ($tarif->getIdCategorie() !== $categorie_actuelle) {
        if ($categorie_actuelle !== null) {
            echo "</ul>";
        }
        echo "<h2>Catégorie " . htmlspecialchars($tarif->getIdCategorie()) . "</h2><ul>";
        $categorie_actuelle = $tarif->getIdCategorie();
    }
    echo "<li>Prestation " . htmlspecialchars($tarif->getIdPrestation()) . " : " . htmlspecialchars($tarif->getPrix()) . "€</li>";
}
if ($categorie_actuelle !== null) {
    echo "</ul>";
}
?>
