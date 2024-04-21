<?php

include_once("formValidator.php");

if ($_SERVER['REQUEST_METHOD']=='POST'){
    $email = $_POST['email'];
    $password = $_POST['password'];
}

testValidator($email,$password);



// function dataFormater($data)
// {
//     $data = trim($data);
//     $data = stripslashes($data);
//     $data = htmlspecialchars($data);
//     return $data;
// }

// function emailValidator($email)
// {   
//     $isValidEmail = false;
//     if (isset($_POST["email"])){
//         $email = $_POST["email"];
//     }
//     $email = dataFormater($email);
//     if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
//         $isValidEmail == false;
//         echo "<span>Email invalide</span>"; 
//     } else{
//         $isValidEmail == true;
//         echo "<span>Email ok</span>";
//     }
// }

// function passValidator($pass){
//     $passRegex = '/^\d{4}$/';
//     $isValidPass = false;
//     $pass = dataFormater($pass);
//     if(!preg_match($passRegex, $pass)){
//         $isValidPass == false;
//         echo "<span style=color:'tomato';>Mot de pass invalide</span> <br>";
//     }
//     else{
//         $isValidPass == true;
//         echo"<span>Mot de passe accepté</span>";
//     }
// }
/*
EXPLICATION DU REGEX MOT DE PASSE:
^ : début de la chaîne
\d : correspond à un chiffre (équivalent à la classe [0-9])
{4} : quantificateur qui indique que le chiffre doit apparaître exactement 4 fois
$ : fin de la chaîne
*/

