<?php
function afficherTableauXHTML($tableau) {
    echo "<table border='1'>";
    echo "<tr>";
    foreach (array_keys($tableau[0]) as $cle) {
        echo "<th>$cle</th>";
    }
    echo "</tr>";

    foreach ($tableau as $ligne) {
        echo "<tr>";
        foreach ($ligne as $valeur) {
            echo "<td>$valeur</td>";
        }
        echo "</tr>";
    }

    echo "</table>";
}

// Exemple d'utilisation
$donnees = array(
    array("Nom" => "kine", "Âge" => 20, "Ville" => "dakar"),
    array("Nom" => "astou", "Âge" => 30, "Ville" => "kedougou"),
    array("Nom" => "pape", "Âge" => 22, "Ville" => "diourbel")
);

afficherTableauXHTML($donnees);
?>
