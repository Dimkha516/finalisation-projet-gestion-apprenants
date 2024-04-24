<?php

session_start();
$_SESSION['global-error'] = '';
$_SESSION['email-error'] = '';
$_SESSION['pass-error'] = '';
// 
function testValidator($email, $password)
{   
    $usersFile = file_get_contents("../Data/users.json");
    $usersFileArray = json_decode($usersFile, true);
    
    //1°)---------------------------VÉRIFIER SI EMAIL EST VALIDE ET LONGUEUR PASSWORD SUPÉRIEURE A 4
    $globalError = "Email et Mot de passe Recquis";
    $emailError = "Email invalide";
    $passError = "Le mot de passe doit faire 4 chiffres";
    
    if($email == null && $password == null){
        if(isset($_SESSION["global-error"])){
            $_SESSION["global-error"] = $globalError;
        }
    }
    
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        if(isset($_SESSION['email-error'])){
            $_SESSION['email-error'] = $emailError;
        }
    } elseif (strlen($password) != 4) {
        $_SESSION['pass-error'] = $passError;
    } else {
        // $cryptedPass = password_hash($password, PASSWORD_DEFAULT);
        // $password = $cryptedPass;
        $userInfos = [
            'mail' => $email,
            'pass' => $password,
        ];
        $foundedUser = null;

        // VÉRIFIER SI USER LOGIN EST SUR LE FICHIER: 
        foreach ($usersFileArray as $user) {
            if ($user['email'] == $userInfos['mail']) {
                $foundedUser = $user;
                break;
            }
        }
        if ($foundedUser !== null) {
            session_start();
            $_SESSION['connectedUser'] = $foundedUser;
            // var_dump($_SESSION['connectedUser']);
            header('Refresh: 2; url=../public/index.php?page=promos');

            // if(isset($_SESSION['connectedUser'])){
            //     $_SESSION['connectedUser'] = $foundedUser;
            //     $connectedUser = ($_SESSION['connectedUser']);

            //     var_dump($connectedUser);

            // } 
        } else {
            echo "Utilisateur inconnu";
        }


    }



    // 2°)----------------------------------------------------TRAITEMENTS SI LOGIN VALIDE: 
    // header('Refresh: 2; url=../public/index.php');
    // var_dump($email);
    // var_dump($password);

}

// function emailValidator($email)
// {
//     $isValidEmail = true;
//     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//         $isValidEmail = false;
//         // echo "<span>Email invalide</span>"; 
//     } else {
//         $isValidEmail = true;
//         // echo "<span>Email ok</span>";
//     }
// }

// // FONCTION DE CRYPTAGE DE MOT DE PASSE A 4 CHIFFRES:
// function encryptPassword($password)
// {
//     if (strlen($password) != 4) {
//         return false;
//     }

//     $options = [
//         'cost' => 12,
//     ];

//     $hashedPassword = password_hash($password, PASSWORD_BCRYPT, $options);

//     if ($hashedPassword) {
//         return $hashedPassword;
//     } else {
//         return false;
//     }
// }

