<?php

//------------------------CE FICHIER SERT A AFFICHER LES LA LISTE DES ÉTUDIANTS DE LA PROMO ACTIVÉE:

session_start();


if (isset($_SESSION["activePromo"])) {
    $activedPromo = $_SESSION["activePromo"];
}

// Recupérer la valeur du référentiel dans l'URL
$valueRef = $_GET['value'];
// Convertir en miniscule la valeur:
$valeurRefMin = strtolower($valueRef);

// Déclarer le tableau de stockage des référentiels:
$tabRef = [];
array_push($tabRef, $valueRef);


// if (isset($_POST['Dev-Web'])) {
//     $_SESSION['Dev-Web'] = $_POST['Dev-Web'];
//     $DevWeb = $_SESSION['Dev-Web'];
//     if($DevWeb != $valueRef){
//         array_push($tabRef, $DevWeb);
//     }
// }

// if (isset($_SESSION['Dev-Data'])) {
//     $DevData = $_SESSION['Dev-Data'];
//     // unset($_SESSION['Dev-Data']);
//     $DevData !== $valueRef ? array_push($tabRef, $DevData) : "";
// }
// if (isset($_SESSION['Dev-Web'])) {
//     $DevWeb = $_SESSION['Dev-Web'];
//     $DevWeb !== $valueRef ? array_push($tabRef, $DevWeb) : "";
// }
// if (isset($_SESSION['Ref-Dig'])) {
//     $RefDig = $_SESSION['Ref-Dig'];
// $RefDig !== $valueRef ? array_push($tabRef, $RefDig) : "";
// }




//------------------------------------------------



// -------------------------------------------------

// Mettre tous les éléments du tableau en minuscule:
// $tabRefMin = array_map('strtolower', $tabRef);

// Insérer le référentiel dans le tableau ref:
// array_push($tabRefMin, $valeurRefMin);


// RECUPERATION DU RÉFÉRENTIEL SUR L'URL:

//  or $url = $_SERVER['SERVER_NAME'];


$apprenants = [
    [
        "profil" => "../public/images/icone1.png",
        "nom" => "Mbow",
        "prenom" => "Saer",
        "email" => "saer@gmail.com",
        "genre" => "M",
        "tel" => 77885623,
        "promo" => 6,
        "referentiel" => "Dev-Web",
    ],
    [
        "profil" => "../public/images/icone2.png",
        "nom" => "Kane",
        "prenom" => "Baba",
        "email" => "baba@gmail.com",
        "genre" => "M",
        "tel" => 72985623,
        "promo" => 6,
        "referentiel" => "Ref-Dig",
    ],
    [
        "profil" => "../public/images/icone3.png",
        "nom" => "Sarr",
        "prenom" => "Khady",
        "email" => "khady@gmail.com",
        "genre" => "F",
        "tel" => 709005623,
        "promo" => 6,
        "referentiel" => "Dev-Data",
    ],
    [
        "profil" => "../public/images/icone4.png",
        "nom" => "Fall",
        "prenom" => "Nafi",
        "email" => "fina@gmail.com",
        "genre" => "F",
        "tel" => 88985623,
        "promo" => 5,
        "referentiel" => "Dev-Data",
    ],
    [
        "profil" => "../public/images/icone5.png",
        "nom" => "Sarr",
        "prenom" => "Mamadou",
        "email" => "mamdou@gmail.com",
        "genre" => "M",
        "tel" => 30085688,
        "promo" => 5,
        "referentiel" => "Dev-Web",
    ],
    [
        "profil" => "../public/images/icone6.png",
        "nom" => "Diop",
        "prenom" => "Sali",
        "email" => "sali@gmail.com",
        "genre" => "F",
        "tel" => 789800623,
        "promo" => 5,
        "referentiel" => "Ref-Dig",
    ],
    [
        "profil" => "../public/images/icone7.png",
        "nom" => "Fall",
        "prenom" => "Pala",
        "email" => "papa@gmail.com",
        "genre" => "M",
        "tel" => 98985623,
        "promo" => 6,
        "referentiel" => "Dev-Web",
    ],
    [
        "profil" => "../public/images/icone8.png",
        "nom" => "Sow",
        "prenom" => "Fatou",
        "email" => "fatou@gmail.com",
        "genre" => "F",
        "tel" => 767783738,
        "promo" => 6,
        "referentiel" => "Ref-Dig",
    ],
    [
        "profil" => "../public/images/icone9.png",
        "nom" => "Lo",
        "prenom" => "Moussa",
        "email" => "moussa@gmail.com",
        "genre" => "M",
        "tel" => 708283763,
        "promo" => 6,
        "referentiel" => "Ref-Dig",
    ],
    [
        "profil" => "../public/images/icone10.png",
        "nom" => "Sylla",
        "prenom" => "NafY",
        "email" => "nafy@gmail.com",
        "genre" => "F",
        "tel" => 76836320,
        "promo" => 6,
        "referentiel" => "Dev-Data",
    ],
    [
        "profil" => "../public/images/icone11.png",
        "nom" => "Sarr",
        "prenom" => "Lamine",
        "email" => "moussa@gmail.com",
        "genre" => "M",
        "tel" => 75125008,
        "promo" => 6,
        "referentiel" => "Dev-Web",
    ],
    [
        "profil" => "../public/images/icone12.png",
        "nom" => "Sarr",
        "prenom" => "Lamine",
        "email" => "la@gmail.com",
        "genre" => "M",
        "tel" => 77885623,
        "promo" => 6,
        "referentiel" => "Dev-Web",
    ],
    [
        "profil" => "../public/images/icone13.png",
        "nom" => "nake",
        "prenom" => "Bibi",
        "email" => "baba@gmail.com",
        "genre" => "M",
        "tel" => 72985623,
        "promo" => 6,
        "referentiel" => "Ref-Dig",
    ],
    [
        "profil" => "../public/images/icone14.png",
        "nom" => "Rass",
        "prenom" => "Dikha",
        "email" => "dikha@gmail.com",
        "genre" => "F",
        "tel" => 709005623,
        "promo" => 6,
        "referentiel" => "Dev-Data",
    ],
    [
        "profil" => "../public/images/icone15.png",
        "nom" => "LafF",
        "prenom" => "Fina",
        "email" => "fina@gmail.com",
        "genre" => "F",
        "tel" => 88985623,
        "promo" => 5,
        "referentiel" => "Dev-Data",
    ],
    [
        "profil" => "../public/images/icone16.png",
        "nom" => "Ras",
        "prenom" => "Douma",
        "email" => "dou@gmail.com",
        "genre" => "M",
        "tel" => 30085688,
        "promo" => 5,
        "referentiel" => "Dev-Web",
    ],
    [
        "profil" => "../public/images/icone17.png",
        "nom" => "Piod",
        "prenom" => "Lissa",
        "email" => "lissa@gmail.com",
        "genre" => "F",
        "tel" => 789800623,
        "promo" => 5,
        "referentiel" => "Ref-Dig",
    ],
    [
        "profil" => "../public/images/icone18.png",
        "nom" => "Laff",
        "prenom" => "Lapa",
        "email" => "papa@gmail.com",
        "genre" => "M",
        "tel" => 98985623,
        "promo" => 6,
        "referentiel" => "Dev-Web",
    ],
    [
        "profil" => "../public/images/icone19.png",
        "nom" => "Wos",
        "prenom" => "Toufa",
        "email" => "fatou@gmail.com",
        "genre" => "F",
        "tel" => 767783738,
        "promo" => 6,
        "referentiel" => "Ref-Dig",
    ],
    [
        "profil" => "../public/images/icone20.png",
        "nom" => "Loo",
        "prenom" => "Soumma",
        "email" => "moussa@gmail.com",
        "genre" => "M",
        "tel" => 708283763,
        "promo" => 6,
        "referentiel" => "Ref-Dig",
    ],
    [
        "profil" => "../public/images/icone21.png",
        "nom" => "Lissa",
        "prenom" => "NafY",
        "email" => "nafy@gmail.com",
        "genre" => "F",
        "tel" => 76836320,
        "promo" => 6,
        "referentiel" => "Dev-Data",
    ],
    [
        "profil" => "../public/images/icone22.png",
        "nom" => "Ras",
        "prenom" => "mine",
        "email" => "moussa@gmail.com",
        "genre" => "M",
        "tel" => 75125008,
        "promo" => 6,
        "referentiel" => "Dev-Web",
    ],
];

// 
// $searchedRef = $_POST["nomRef"];
// $foundedRef = null;
// $tabEtud = [$valueRef];
// foreach ($apprenants as $apprenant) {
//     if ($apprenant['referentiel'] == $searchedRef) {
//         $tabEtud[] = $apprenant;
//         $foundedRef = $apprenant;
//         break;
//     }
// }
$_SESSION['nbApprenants'] = count($apprenants);
echo "<div class='global'>";

// var_dump()

if (!empty(($valueRef))) {
    foreach ($apprenants as $apprenant) {
        // if ($apprenant['promo'] == $activedPromo && $apprenant['referentiel'] == $valueRef) {
        if ($apprenant['promo'] == $activedPromo && in_array($apprenant['referentiel'], $tabRef)) {

            echo "<div class='infos-promos'>";
            echo "<ul>";
            echo "<li class='donnees1'>";
            echo "<img class='profilEtudiant' src=" . $apprenant['profil'] . ">";
            // echo "<img src='../public/images/tete.png' class='profilEtudiant' alt='profil'>";
            echo "<p class='nomEtudiant' style='font-size:1.2rem'>" . $apprenant['nom'] . "</p>";
            echo "<p class='prenomEtudiant' style='font-size:1.2rem'>" . $apprenant['prenom'] . "</p>";
            echo "<p class='refEtudiant' style='font-size:1.2rem'>" . $apprenant['referentiel'] . "</p>";
            echo "<p class='emailEtudiant' style='font-size:1.2rem'>" . $apprenant['email'] . "</p>";
            echo "<p class='genreEtudiant' style='font-size:1.2rem'>" . $apprenant['genre'] . "</p>";
            echo "<p class='telEtudiant' style='font-size:1.2rem'>" . $apprenant['tel'] . "</p>";
            echo "<input type='checkbox' class='action'></input>";
            echo "</li>";
            echo "</ul>";
            echo "</div>";
        }
    }
} else {
    foreach ($apprenants as $apprenant) {
        if ($apprenant['promo'] == $activedPromo)    {
            echo "<div class='infos-promos'>";
            echo "<ul>";
            echo "<li class='donnees1'>";
            echo "<img class='profilEtudiant' src=" . $apprenant['profil'] . ">";
            // echo "<img src='../public/images/tete.png' class='profilEtudiant' alt='profil'>";
            echo "<p class='nomEtudiant' style='font-size:1.2rem'>" . $apprenant['nom'] . "</p>";
            echo "<p class='prenomEtudiant' style='font-size:1.2rem'>" . $apprenant['prenom'] . "</p>";
            echo "<p class='refEtudiant' style='font-size:1.2rem'>" . $apprenant['referentiel'] . "</p>";
            echo "<p class='emailEtudiant' style='font-size:1.2rem'>" . $apprenant['email'] . "</p>";
            echo "<p class='genreEtudiant' style='font-size:1.2rem'>" . $apprenant['genre'] . "</p>";
            echo "<p class='telEtudiant' style='font-size:1.2rem'>" . $apprenant['tel'] . "</p>";
            echo "<input type='checkbox' class='action'></input>";
            echo "</li>";
            echo "</ul>";
            echo "</div>";
        }

    }
}

echo "</div>";
// if ($foundedRef != null && $foundedRef['promo'] == $activedPromo) {
//     echo "<div class='infos-promos'>";
//     echo "<ul>";
//     echo "<li class='donnees1'>";
//     echo "<img src='../public/images/tete.png' class='profilEtudiant' alt='profil'>";
//     echo "<p class='nomEtudiant' style='font-size:1.2rem'>" . $foundedRef['nom'] . "</p>";
//     echo "<p class='prenomEtudiant' style='font-size:1.2rem'>" . $foundedRef['prenom'] . "</p>";
//     echo "<p class='refEtudiant' style='font-size:1.2rem'>" . $foundedRef['referentiel'] . "</p>";
//     echo "<p class='emailEtudiant' style='font-size:1.2rem'>" . $foundedRef['email'] . "</p>";
//     echo "<p class='genreEtudiant' style='font-size:1.2rem'>" . $foundedRef['genre'] . "</p>";
//     echo "<p class='telEtudiant' style='font-size:1.2rem'>" . $foundedRef['tel'] . "</p>";
//     echo "<input type='checkbox' class='action'></input>";
//     echo "</li>";
//     echo "</ul>";
//     echo "</div>";
// }
// 
?>;
<!-- <script>
    window.onload = function () {
        var checkboxes = document.querySelectorAll('input[type="checkbox"]');

        for (var i = 0; i < checkboxes.length; i++) {
            checkboxes[i].addEventListener("change", function () {
                if (this.checked) {
                    var checkboxValue = this.value;
                    console.log("Le checkbox a été coché. Valeur : " + checkboxValue);
                    // Ici, vous pouvez envoyer la valeur vers votre script PHP si nécessaire.
                }
            });
        }
    };
</script> -->