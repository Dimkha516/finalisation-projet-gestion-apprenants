<?php

echo"KIKO";
























// function promosDisplay()
// {
    
// $csvFile = '../Data/promos.csv';

// // Vérification de l'existence du fichier
// if (file_exists($csvFile)) {
// // Lecture du fichier CSV
// if (($handle = fopen($csvFile, 'r')) !== false) {
// // Lire chaque ligne du fichier
// $firstLine = true;
// while (($data = fgetcsv($handle, 1000, ',')) !== false) {
// // Afficher les données sous forme de texte avec un bouton radio
// if ($firstLine) {
// // Afficher la première ligne des en-têtes

// echo '<p>' . htmlspecialchars($data[0]) . ' ' . htmlspecialchars($data[1]) . ' ' . htmlspecialchars($data[2]) . ' ' .
//     htmlspecialchars($data[3]) . '</p>';
// $firstLine = false;
// } else {
// // Afficher les autres lignes avec un bouton radio
// echo '<p>' . htmlspecialchars($data[1]) . ' ' . htmlspecialchars($data[2]) . ' ' . htmlspecialchars($data[3]) . ' <input
//         type="radio" name="status" value="' . htmlspecialchars($data[4]) . '"> </p>';
// }
// }
// fclose($handle);
// }
// } else {
// echo '<p>Le fichier CSV n\'existe pas.</p>';
// }

// }