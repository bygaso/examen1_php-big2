<?php
$tableauPersonnes = array(
    "Diop" => array("fatou Binetou", "foire", 25),
    "Manga" => array("Gabriella", "liberte 6", 30),
    "Diallo" => array("mamadou", "Grand yoff", 22)
);

// Affichage du tableau
foreach ($tableauPersonnes as $nom => $details) {
    echo "Nom: $nom, Prénom: $details[0], Ville: $details[1], Âge: $details[2]<br>";
}
?>
