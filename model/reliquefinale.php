<?php
$file = 'relique_finale.txt';
$data = 1;

// Créer le fichier s'il n'existe pas
if (!file_exists($file)) {
    $handle = fopen($file, 'w') or die('Impossible de créer le fichier');
    fclose($handle);
}

// Ajouter les données au fichier
file_put_contents($file, $data);

?>