<?php
$tableauPersonnesAssoc = array(
    "faye" => array("prenom" => "fatou", "ville" => "ziguinchor", "age" => 25),
    "wade" => array("prenom" => "daouda", "ville" => "rufisque", "age" => 30),
    "Balde" => array("prenom" => "Hadja", "ville" => "kolda", "age" => 22)
);

// Affichage du tableau
foreach ($tableauPersonnesAssoc as $nom => $details) {
    echo "Nom: $nom, Prénom: $details[prenom], Ville: $details[ville], Âge: $details[age]<br>";
}
?>
