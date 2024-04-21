<?php
$apprenants = [
    [
        "profil" => "../medias/tete.png",
        "nom" => "Mbow",
        "prenom" => "Saer",
        "email" => "saer@gmail.com",
        "genre" => "M",
        "tel" => 77885623,
        "promo" => 6,
        "referentiel" => "Dev-Web",
    ],
    [
        "profil" => "../medias/tete.png",
        "nom" => "Kane",
        "prenom" => "Baba",
        "email" => "baba@gmail.com",
        "genre" => "M",
        "tel" => 72985623,
        "promo" => 6,
        "referentiel" => "Ref-Dig",
    ],
    [
        "profil" => "../medias/tete.png",
        "nom" => "Sarr",
        "prenom" => "Khady",
        "email" => "khady@gmail.com",
        "genre" => "F",
        "tel" => 709005623,
        "promo" => 6,
        "referentiel" => "Dev-Data",
    ],
    [
        "profil" => "../medias/tete.png",
        "nom" => "Fall",
        "prenom" => "Nafi",
        "email" => "fina@gmail.com",
        "genre" => "F",
        "tel" => 88985623,
        "promo" => 5,
        "referentiel" => "Dev-Data",
    ],
    [
        "profil" => "../medias/tete.png",
        "nom" => "Sarr",
        "prenom" => "Mamadou",
        "email" => "mamdou@gmail.com",
        "genre" => "M",
        "tel" => 30085688,
        "promo" => 5,
        "referentiel" => "Dev-Web",
    ],
    [
        "profil" => "../medias/tete.png",
        "nom" => "Diop",
        "prenom" => "Sali",
        "email" => "sali@gmail.com",
        "genre" => "F",
        "tel" => 789800623,
        "promo" => 5,
        "referentiel" => "Ref-Dig",
    ],
    [
        "profil" => "../medias/tete.png",
        "nom" => "Fall",
        "prenom" => "Pala",
        "email" => "papa@gmail.com",
        "genre" => "M",
        "tel" => 98985623,
        "promo" => 6,
        "referentiel" => "Dev-Web",
    ],
    [
        "profil" => "../medias/tete.png",
        "nom" => "Sow",
        "prenom" => "Fatou",
        "email" => "fatou@gmail.com",
        "genre" => "F",
        "tel" => 767783738,
        "promo" => 6,
        "referentiel" => "Ref-Dig",
    ],
    [
        "profil" => "../medias/tete.png",
        "nom" => "Lo",
        "prenom" => "Moussa",
        "email" => "moussa@gmail.com",
        "genre" => "M",
        "tel" => 708283763,
        "promo" => 6,
        "referentiel" => "Ref-Dig",
    ],
    [
        "profil" => "../medias/tete.png",
        "nom" => "Sylla",
        "prenom" => "NafY",
        "email" => "nafy@gmail.com",
        "genre" => "F",
        "tel" => 76836320,
        "promo" => 6,
        "referentiel" => "Dev-Data",
    ],
    [
        "profil" => "../medias/tete.png",
        "nom" => "Sarr",
        "prenom" => "Lamine",
        "email" => "moussa@gmail.com",
        "genre" => "M",
        "tel" => 75125008,
        "promo" => 6,
        "referentiel" => "Dev-Web",
    ],
];
// 

// FONCTION DE CRYPTAGE DE MOT DE PASSE A 4 CHIFFRES:
function encryptPassword($password) {
    if(strlen($password) != 4) {
        return false;
    }

    $options = [
        'cost' => 12,
    ];

    $hashedPassword = password_hash($password, PASSWORD_BCRYPT, $options);

    if($hashedPassword) {
        return $hashedPassword;
    } else {
        return false;
    }
}

// Exemple d'utilisation :
// $password = "1234";
// $encryptedPassword = encryptPassword($password);

// if($encryptedPassword) {
//     echo "Le mot de passe a été crypté avec succès : " . $encryptedPassword;
// } else {
//     echo "Une erreur s'est produite lors du cryptage du mot de passe.";
// }

// FONCTION POUR COMPARER UN MOT DE PASSE CRYPTÉ ET UN MOT DE PASSE SAISI:
function verifyPassword($password, $hashedPassword) {
    if(password_verify($password, $hashedPassword)) {
        return true;
    } else {
        return false;
    }
}

// Exemple d'utilisation :
// $password = "1234";
// $hashedPassword = "$2y$12$vXrVZgfBY0uGcZzZk3peeuKo4WD2U7.zDd.D1fGZvXWjkDO05O2T2";

// if(verifyPassword($password, $hashedPassword)) {
//     echo "Le mot de passe est correct.";
// } else {
//     echo "Le mot de passe est incorrect.";
// }

// ÉCRIRE DANS UN FICHIER JSON:
function addDataToJsonFile($filename, $data) {
    // Lire le contenu du fichier JSON existant
    $jsonData = file_get_contents($filename);

    // Convertir le contenu JSON en tableau PHP
    $arrayData = json_decode($jsonData, true);

    // Générer un ID unique pour la nouvelle entrée
    $id = uniqid();

    // Ajouter la nouvelle entrée au tableau existant
    $arrayData[$id] = $data;

    // Convertir le tableau PHP en chaîne JSON
    $jsonData = json_encode($arrayData, JSON_PRETTY_PRINT);

    // Écrire le tableau mis à jour dans le fichier JSON
    if(file_put_contents($filename, $jsonData)) {
        return $id;
    } else {
        return false;
    }
}

// Exemple d'utilisation :
// $filename = "users.json";
// $data = array(
//     "nom" => "Saer",
//     "email" => "saer@example.com",
//     "pass"=> encryptPassword(1234),
//     "profil"=> "apprenant",
//     "promo"=> "Dev-Data",
//     "referentiel"=> 5,
//     "image" => "../public/images/icon1.png"
// );

// $id = addDataToJsonFile($filename, $data);

// if($id) {
//     echo "Les données ont été ajoutées avec succès au fichier JSON avec l'ID suivant : " . $id;
// } else {
//     echo "Une erreur s'est produite lors de l'ajout des données au fichier JSON.";
// }

function cryptPassword($password) {
    // Utilisez la fonction password_hash pour crypter le mot de passe
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    return $hashed_password;
}
function verifyPassword2($password, $hashed_password) {
    // Utilisez la fonction password_verify pour comparer le mot de passe saisi à la chaîne de caractères cryptée
    if (password_verify($password, $hashed_password)) {
        return true;
    } else {
        return false;
    }
}

// Crypter un mot de passe


$password = 1234;
$hashed_password = cryptPassword($password);

// Enregistrer le mot de passe crypté dans la base de données
// ...

// Vérifier le mot de passe saisi par l'utilisateur
// $user_password = 1234;
// if (verifyPassword2($user_password, $hashed_password)) {
//     echo "Le mot de passe est correct !";
// } else {
//     echo "Le mot de passe est incorrect.";
// }


// VÉRIFICATION SUR UN FICHIER JSON: 
// LECTURE DU FILE:
$usersFile = file_get_contents('users.json');
// CONVERSION DUN FILE:
$fileArray = json_decode($usersFile, true);

// TABLEAU DE L'UTILISATEUR A RECHERCHER DANS LE FICHIER!
$searchedUser = [
    "email" => "saer@example.com",
    "pass" => 1234,
];

$foundedUser = false;

foreach($fileArray as $user){
    if($user['email'] == $searchedUser['email'] && $user['freePass']== $searchedUser['pass']){
        $foundedUser = true;
    }
}
if($foundedUser){
    echo("touvé");
} else {
    echo("Non");
}