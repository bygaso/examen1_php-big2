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

// Exercice 11 - Utiliser une boucle while pour lire le tableau de l'exercice 8
echo "\nExercice 11 - While pour le tableau de l'exercice 8:\n";
$keys_exercice_8 = array_keys($tableau_exercice_8);
$index_exercice_8 = 0;
while ($index_exercice_8 < count($keys_exercice_8)) {
    $nom = $keys_exercice_8[$index_exercice_8];
    $infos = $tableau_exercice_8[$nom];
    echo "Nom: $nom, Prénom: {$infos['prénom']}, Ville: {$infos['ville']}, Âge: {$infos['âge']}\n";
    $index_exercice_8++;
}

// Exercice 11 - Utiliser une boucle while pour lire le tableau de l'exercice 9
echo "\nExercice 11 - While pour le tableau de l'exercice 9:\n";
$keys_exercice_9 = array_keys($tableau_exercice_9);
$index_exercice_9 = 0;
while ($index_exercice_9 < count($keys_exercice_9)) {
    $nom = $keys_exercice_9[$index_exercice_9];
    $infos = $tableau_exercice_9[$nom];
    echo "Nom: $nom, Prénom: {$infos['prénom']}, Ville: {$infos['ville']}, Âge: {$infos['âge']}\n";
    $index_exercice_9++;
}
?>
