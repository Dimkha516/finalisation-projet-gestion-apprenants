<?php

//FONCTION UTILISÉE EN PREMIER 

// function promosDisplay()
// {

//-----------------------------------------STOCKAGE DES DONNÉES DU FICHIER PROMOS DANS UN TABLEAU:
$filename = "../Data/promos.csv";

// Ouvrir le fichier CSV en mode lecture
$file = fopen($filename, "r");

// Lire la première ligne du fichier CSV pour récupérer les en-têtes de colonnes
$headers = fgetcsv($file);

// Initialiser un tableau vide pour stocker les données
$data = [];

// Lire les lignes suivantes du fichier CSV et les ajouter au tableau associatif
while (($row = fgetcsv($file)) !== false) {
    // Vérifier que la ligne contient le même nombre d'éléments que les en-têtes de colonnes
    if (count($row) == count($headers)) {
        $data[] = array_combine($headers, $row);
    }
}
// Fermer le fichier CSV
fclose($file);


//---------------------------------------------------------------AFFICHAGE DES DONNÉES DU TABLEAU:
$stockedVal = "";

session_start();
// $_SESSION['activePromo'] = 6;

if ($_SERVER["REQUEST_METHOD"] = "POST") {
    if (isset($_POST["promo"])) {
        $stockedVal = $_POST['promo'];
        $_SESSION['activePromo'] = $stockedVal;
        // header('Location: autre-page.php');
        // exit();
    }

}

echo '<form method="post" id="promoForm">';
$first = true;

// Boucle pour parcourir les promotions
// foreach ($data as $promotion) {
// unset($promotion['id'], $promotion['status']);

// Je définit le nombre d'éléments à afficher: 
$elements_par_page = 6;
$total_elements = count($data);
$total_pages = ceil($total_elements / $elements_par_page);

// Je vérifie si la page existe.
$page_actuelle = isset($_GET['page']) ? (int) $_GET['page'] : 1;

// Je calcule le début et la fin du parcours de foreach
$debut = ($page_actuelle - 1) * $elements_par_page;
$fin = min($debut + $elements_par_page, $total_elements);

foreach (array_slice($data, $debut, $elements_par_page) as $promotion) {


    // Ajouter un input radio pour chaque promotion
    echo "<div class='promoForm'>";
    echo "<h3>" . $promotion['Libelle'] . "</h3>";
    echo "<h4>" . $promotion['date_debut'] . "</h4>";
    echo "<h4>" . $promotion['date_fin'] . "</h4>";
    // }

    if ($first) {
        echo "<input type='radio' class='promo-radio' name='promo' value='$promotion[id]' checked>";
        $first = false;
    } elseif (isset($_SESSION["activePromo"]) && $_SESSION["activePromo"] == $promotion['id']) {
        echo "<input type='radio' class='promo-radio' name='promo' value='$promotion[id]' checked>";
    } else {
        echo "<input type='radio' class='promo-radio' name='promo' value='$promotion[id]'>";
    }
    echo '</div>';
}
echo '<div class="pagination">';
for ($i = 1; $i <= $total_pages; $i++) {
    if ($i == $page_actuelle) {
        echo "<span>$i</span>";
    } else {
        echo "<a href='?page=$i'>$i</a>";
    }
}
echo '</div>';


// }
// echo '<button type="submit">Activer promo séléctionnée</button>';
// Fin du formulaire
echo '</form>';

// }
?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $('.promo-radio').change(function () {
            $('#promoForm').submit();
        });
    });
</script>