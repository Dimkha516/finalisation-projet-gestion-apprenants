<?php
// http://localhost:8089/architecture/public/index.php
//include("../models/login.php");

// IMPORTATIONS DES FONCTIONS:

// APPEL DE BAR DE NAVIGATION:
include_once("../templates/navBar.php");

// RECUPERATION REQUÊTE PAGE:
$currentPage = isset($_GET["page"]) ? ($_GET["page"]) : 'presences';

// RETOUR DE LA PAGE DEMANDÉE:
include_once "../templates/" . $currentPage . ".php";

include_once("../templates/sideBar.php");
 
// APPEL PIED DE PAGE
include("../templates/footer.php");

// DÉMARRER LA SESSION POUR L'UTILISATEUR CONNECTÉ:
// session_start();
// $_SESSION['connectedUser'] = [];


// DÉFINITION DE LA SESSION POUR LA PROMO ACTIVÉE:
// session_start();
// $_SESSION['activePromo'] = 6;

// if(isset($_POST['promo'])){
//     $_SESSION['activePromo'] = $_POST['promo'];
//     setcookie('activePromo', $_POST['promo'], time() + (86400 * 30), "/"); 
// }

// if(!isset($_SESSION['activePromo']) && isset($_COOKIE['activePromo'])) {
//     $_SESSION['activePromo'] = $_COOKIE['activePromo'];
// }




// header("Location: index.php"); // Redirige vers la même page pour cet exemple
// exit();


//Lundi: 
// Git/Github
// Les expressions regulieres (Générales) => Voir les fonctions pour les exécuter en PHP

// Lundi: Terminer tout ce qui est filtre => C'est la semaine des formulaire et des extractions(Télégargement, Importation)


//1) Les dates dans promo en français

//2) Page apprenants: filtre référentiel utiliser check pour pouvoir faire des select multiples. éviter le SELECT 

//3) Partie Login:
//---------Le fichier d'authentification est un fichier json
//---------Pas de reconnexion en cas de clique sur précèdent
//-------Spécifier les msg d'erreur: Se documenter sur les validator de php ou utiliser les regex.
//-------Crypter les mots de passe dans le fichier et les decrypter lors de la connextion
//-------Dashboard Présence et évenement activé pour apprenants: page par défaut de l'apprenant page présence avec ses infos seulement
//------Il peut filtrer que par date et par status
//-------Les photos des apprenants doivent être différentes
//--------Gerer le temps de connexion de l'utilisateur: s'il reste 5min sans activité on le déconnecte. 


//4) Ajout référentiel: Dernière tâche.
//AJouter sans l'affecter à une promo ou créer simplement sans l'affecter à une promo => Gérer par le bouton On/Off 
//Traiter le choix de l'image
//Enlever les espaces pendant la saisie des fonctions php le font. Et convertir tout soit en miniscule soit en majiscule des fonctions PHP le font

//5) Tache facultatif: Création Promo ==> POUR LES NDANDANE...
//--------- Le libellé doit être unique.
//--------- une poromo doit durer minimum 4 mois.
//*-------------------------------------------/
