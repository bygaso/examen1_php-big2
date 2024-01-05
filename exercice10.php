<?php
// Exercice 8 - Tableau multidimensionnel associatif indicé
$tableau_exercice_8 = array(
    "Diop" => array("prénom" => "fatou binetou", "ville" => "foire", "âge" => 25),
    "manga" => array("prénom" => "gabriella", "ville" => "liberte 6", "âge" => 30),
    "Diallo" => array("prénom" => "Mamadou", "ville" => "Grand yoff", "âge" => 22)
);

// Exercice 9 - Tableau multidimensionnel associatif associatif
$tableau_exercice_9 = array(
    "faye" => array("prénom" => "fatou", "ville" => "ziguinchor", "âge" => 25),
    "wade" => array("prénom" => "Daouda", "ville" => "rufisque", "âge" => 30),
    "balde" => array("prénom" => "hadja", "ville" => "Kolda", "âge" => 22)
);

// Exercice 10 - Utiliser une boucle foreach pour lire le tableau de l'exercice 8
echo "Exercice 10 - Foreach pour le tableau de l'exercice 8:\n";
foreach ($tableau_exercice_8 as $nom => $infos_8) {
    echo "Nom: $nom, Prénom: {$infos_8['prénom']}, Ville: {$infos_8['ville']}, Âge: {$infos_8['âge']}\n";
}

// Exercice 10 - Utiliser une boucle foreach pour lire le tableau de l'exercice 9
echo "\nExercice 10 - Foreach pour le tableau de l'exercice 9:\n";
foreach ($tableau_exercice_9 as $nom_9 => $infos_9) {
    echo "Nom: $nom_9, Prénom: {$infos_9['prénom']}, Ville: {$infos_9['ville']}, Âge: {$infos_9['âge']}\n";
}
?>
