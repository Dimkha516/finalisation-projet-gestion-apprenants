<?php

session_start();

if (isset($_SESSION['activePromo'])) {
    $promoActive = $_SESSION['activePromo'];
}

$refTarget = "";

if ($_SERVER["REQUEST_METHOD"] = "GET") {
    if (isset($_GET["value"])) {
        $refTarget = $_GET["value"];
        $_SESSION['refTarget'] = $refTarget;
    }
}


// Load the CSV file
$filename = '../Data/referentiels.csv';
$refTab = [];
$associativeArray = [];

if (($handle = fopen($filename, 'r')) !== FALSE) {
    // Skip the header row
    fgetcsv($handle);


    // Parcours des lignes
    while (($row = fgetcsv($handle, 1000, ',')) !== FALSE) {

        // vérifier si idRéf égal à promo-active
        if ($row[0] == $promoActive && $row[2] == 'active') {

            // Insérer les ref de la promo active  
            $refTab[] = $row;
            $associativeArray[$row[1]] = $row[2];
        }
        // else {
        //     echo("Erreur parcours");
        // }
    }
    fclose($handle);
}


echo "<div class='activeref-page'>";
echo "<h5 class='promotionRef' style='color: darkblue;'>" . 'Réferentiels actifs promo ' . $promoActive . "</h5>";
echo "<h5 class='creatingref'>Référentiels >> Liste </h5>";
echo "</div>";

echo "<div class='champ-referentiel'>";

echo "<div class='referentiels'>";
foreach ($associativeArray as $filiere => $status) {
    echo "<a href='index.php?page=utilisateurs&value={$filiere}' class='refBox'>";
    echo "<img src='../public/images/salles.jpeg' alt=''>";
    echo "<h2>{$filiere}</h2>";
    echo "<p>{$status}</p>";
    echo "</a><br>";
}

echo "</div>";


echo "<div class='formulaire-referentiel'>";

echo "<h2 style='text-align:center;'>Nouveau référentiel</h2>";
echo "<div class='lib'>";
echo "<label for='ref-lib'>Libelle</label>";
echo "<input type='text' class=ref-lib placeholder='Entrez libellé'>";
echo "<img src='../public/images/utilisateur2.png' class='user'>";
echo "</div>";

echo "<div class='desc'>";
echo "<label for='ref-desc'>Description</label>";
echo "<input type='text' class='ref-desc' placeholder='Entrez description'>";
echo "<img src='../public/images/utilisateur2.png' class='user'>";
echo "</div>";


echo "<input type='submit' id='save' value='Enregistrer'>";
echo "</div>";


echo "</div>";

echo "</div>";































