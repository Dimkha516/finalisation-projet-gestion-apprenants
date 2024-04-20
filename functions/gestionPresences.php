<?php
// Récupérer la date actuelle:
// H:i:s


function presencesDisplay()
{
    session_start();
    if (isset($_SESSION["activePromo"])) {
        $actived = $_SESSION["activePromo"];
    }

    $date_actuelle = date('d/m/Y');

    $etud = [
        [
            "matricule" => 1,
            "nom" => "Diop",
            "prenom" => "Salimata",
            "phone" => 776699665,
            "promo" => 6,
            "referenciel" => "Dev-Web",
            "heure" => "08:00",
            "status" => "Present",
            "date" => "19/04/2024",
        ],
        [
            "matricule" => 2,
            "nom" => "Sall",
            "prenom" => "Baba",
            "phone" => 776699665,
            "promo" => 6,
            "referenciel" => "Dev-Data",
            "heure" => "09:10",
            "status" => "Retard",
            "date" => "19/04/2024",
        ],
        [
            "matricule" => 3,
            "nom" => "Sy",
            "prenom" => "Demba",
            "phone" => 776699565,
            "promo" => 6,
            "referenciel" => "Ref-Dig",
            "heure" => "-",
            "status" => "Absent",
            "date" => "19/04/2024",
        ],
        [
            "matricule" => 4,
            "nom" => "Faye",
            "prenom" => "Rama",
            "phone" => 709622665,
            "promo" => 6,
            "referenciel" => "Dev-Web",
            "heure" => "07:40",
            "status" => "Present",
            "date" => "19/04/2024",
        ],
        [
            "matricule" => 5,
            "nom" => "Kane",
            "prenom" => "Aly",
            "phone" => 78232665,
            "promo" => 6,
            "referenciel" => "Dev-Data",
            "heure" => "09:10",
            "status" => "Present",
            "date" => "19/04/2024",
        ],
        [
            "matricule" => 6,
            "nom" => "Lo",
            "prenom" => "Khady",
            "phone" => 77944665,
            "promo" => 6,
            "referenciel" => "Ref-Dig",
            "heure" => "08:20",
            "status" => "Present",
            "date" => "19/04/2024",
        ],
        [
            "matricule" => 6,
            "nom" => "Diallo",
            "prenom" => "Moussa",
            "phone" => 772302020,
            "promo" => 6,
            "referenciel" => "Dev-Web",
            "heure" => "07:40",
            "status" => "Present",
            "date" => "20/04/2024",
        ],
        [
            "matricule" => 8,
            "nom" => "Faye",
            "prenom" => "Demba",
            "phone" => 709673562,
            "promo" => 6,
            "referenciel" => "Dev-Data",
            "heure" => "08:40",
            "status" => "Retard",
            "date" => "20/04/2024",
        ],
        [
            "matricule" => 9,
            "nom" => "Sylla",
            "prenom" => "Penda",
            "phone" => 758905566,
            "promo" => 6,
            "referenciel" => "Ref-Dig",
            "heure" => "08:05",
            "status" => "Present",
            "date" => "19/04/2024",
        ],
        [
            "matricule" => 10,
            "nom" => "Seck",
            "prenom" => "Ibra",
            "phone" => 779063622,
            "promo" => 4,
            "referenciel" => "Dev-Web",
            "heure" => "vide",
            "status" => "Absent",
            "date" => "19/04/2024",
        ],
        [
            "matricule" => 11,
            "nom" => "Diagne",
            "prenom" => "Faly",
            "phone" => 8965255,
            "promo" => 6,
            "referenciel" => "Dev-Web",
            "heure" => "07:10",
            "status" => "Present",
            "date" => "20/04/2024",
        ],
        [
            "matricule" => 12,
            "nom" => "Sylla",
            "prenom" => "Fatima",
            "phone" => 773883983,
            "promo" => 6,
            "referenciel" => "Ref-Dig",
            "heure" => "07:30",
            "status" => "Present",
            "date" => "20/04/2024",
        ],
        [
            "matricule" => 13,
            "nom" => "Mbaye",
            "prenom" => "Papa",
            "phone" => 33399223,
            "promo" => 6,
            "referenciel" => "Dev-Data",
            "heure" => "07:55",
            "status" => "Present",
            "date" => "20/04/2024",
        ],
        [
            "matricule" => 10,
            "nom" => "Seck",
            "prenom" => "Ibra",
            "phone" => 779063622,
            "promo" => 6,
            "referenciel" => "Dev-Web",
            "heure" => "-",
            "status" => "Absent",
            "date" => "20/04/2024",
        ],
        [
            "matricule" => 11,
            "nom" => "Diagne",
            "prenom" => "Faly",
            "phone" => 8965255,
            "promo" => 6,
            "referenciel" => "Dev-Web",
            "heure" => "07:10",
            "status" => "Present",
            "date" => "20/04/2024",
        ],
        [
            "matricule" => 12,
            "nom" => "Sylla",
            "prenom" => "Fatima",
            "phone" => 773883983,
            "promo" => 6,
            "referenciel" => "Ref-Dig",
            "heure" => "07:30",
            "status" => "Present",
            "date" => "20/04/2024",
        ],
        [
            "matricule" => 13,
            "nom" => "Diop",
            "prenom" => "Coumba",
            "phone" => 33399223,
            "promo" => 6,
            "referenciel" => "Dev-Data",
            "heure" => "07:55",
            "status" => "Present",
            "date" => "20/04/2024",
        ],
        [
            "matricule" => 130,
            "nom" => "Tall",
            "prenom" => "Baba",
            "phone" => 7382662,
            "promo" => 6,
            "referenciel" => "Dev-Data",
            "heure" => "07:55",
            "status" => "Absent",
            "date" => "19/04/2024",
        ],
        [
            "matricule" => 13,
            "nom" => "Diop",
            "prenom" => "Coumba",
            "phone" => 67223683,
            "promo" => 6,
            "referenciel" => "Dev-Data",
            "heure" => "07:55",
            "status" => "Retard",
            "date" => "20/04/2024",
        ],
        [
            "matricule" => 11,
            "nom" => "Diagne",
            "prenom" => "Faly",
            "phone" => 8965255,
            "promo" => 6,
            "referenciel" => "Dev-Web",
            "heure" => "07:10",
            "status" => "Present",
            "date" => "17/04/2024",
        ],
        [
            "matricule" => 12,
            "nom" => "Sylla",
            "prenom" => "Fatima",
            "phone" => 773883983,
            "promo" => 5,
            "referenciel" => "Ref-Dig",
            "heure" => "07:30",
            "status" => "Present",
            "date" => "19/04/2024",
        ],
        [
            "matricule" => 12,
            "nom" => "Lo",
            "prenom" => "Moussa",
            "phone" => 89369933,
            "promo" => 5,
            "referenciel" => "Ref-Dig",
            "heure" => "08:00",
            "status" => "Present",
            "date" => "19/04/2024",
        ],
        [
            "matricule" => 12,
            "nom" => "Talla",
            "prenom" => "Sylla",
            "phone" => 773883983,
            "promo" => 5,
            "referenciel" => "Ref-Dig",
            "heure" => "08:20",
            "status" => "Retard",
            "date" => "20/04/2024",
        ],
        [
            "matricule" => 12,
            "nom" => "Mane",
            "prenom" => "Sadio",
            "phone" => 703783903,
            "promo" => 5,
            "referenciel" => "Dev-Web",
            "heure" => "07:18",
            "status" => "Present",
            "date" => "20/04/2024",
        ],
        [
            "matricule" => 12,
            "nom" => "Sylla",
            "prenom" => "Khady",
            "phone" => 38332283,
            "promo" => 6,
            "referenciel" => "Dev-Web",
            "heure" => "vide",
            "status" => "Absent",
            "date" => "20/04/2024",
        ],
        [
            "matricule" => 12,
            "nom" => "Sylla",
            "prenom" => "Fatima",
            "phone" => 773883983,
            "promo" => 5,
            "referenciel" => "Dev-Data",
            "heure" => "07:58",
            "status" => "Present",
            "date" => "20/04/2024",
        ],
        [
            "matricule" => 12,
            "nom" => "Sylla",
            "prenom" => "Fatima",
            "phone" => 773883983,
            "promo" => 5,
            "referenciel" => "Ref-Dig",
            "heure" => "07:30",
            "status" => "Present",
            "date" => "19/04/2024",
        ],
        [
            "matricule" => 12,
            "nom" => "Lo",
            "prenom" => "Moussa",
            "phone" => 89369933,
            "promo" => 6,
            "referenciel" => "Ref-Dig",
            "heure" => "08:00",
            "status" => "Present",
            "date" => "20/04/2024",
        ],
        [
            "matricule" => 12,
            "nom" => "Talla",
            "prenom" => "Sylla",
            "phone" => 773883983,
            "promo" => 6,
            "referenciel" => "Ref-Dig",
            "heure" => "08:20",
            "status" => "Retard",
            "date" => "20/04/2024",
        ],
        [
            "matricule" => 12,
            "nom" => "Mane",
            "prenom" => "Sadio",
            "phone" => 703783903,
            "promo" => 6,
            "referenciel" => "Dev-Web",
            "heure" => "07:18",
            "status" => "Present",
            "date" => "20/04/2024",
        ],
        [
            "matricule" => 12,
            "nom" => "Sylla",
            "prenom" => "Khady",
            "phone" => 38332283,
            "promo" => 6,
            "referenciel" => "Dev-Web",
            "heure" => "vide",
            "status" => "Absent",
            "date" => "19/04/2024",
        ],
        [
            "matricule" => 12,
            "nom" => "Sylla",
            "prenom" => "Fatima",
            "phone" => 773883983,
            "promo" => 6,
            "referenciel" => "Dev-Data",
            "heure" => "07:58",
            "status" => "Present",
            "date" => "19/04/2024",
        ],
        [
            "matricule" => 12,
            "nom" => "Sylla",
            "prenom" => "Fatima",
            "phone" => 773883983,
            "promo" => 6,
            "referenciel" => "Ref-Dig",
            "heure" => "07:30",
            "status" => "Present",
            "date" => "19/04/2024",
        ],
        [
            "matricule" => 12,
            "nom" => "Lo",
            "prenom" => "Moussa",
            "phone" => 89369933,
            "promo" => 6,
            "referenciel" => "Ref-Dig",
            "heure" => "08:00",
            "status" => "Present",
            "date" => "18/04/2024",
        ],
        [
            "matricule" => 12,
            "nom" => "Talla",
            "prenom" => "Sylla",
            "phone" => 773883983,
            "promo" => 6,
            "referenciel" => "Ref-Dig",
            "heure" => "08:20",
            "status" => "Retard",
            "date" => "18/04/2024",
        ],
        [
            "matricule" => 12,
            "nom" => "Mane",
            "prenom" => "Sadio",
            "phone" => 703783903,
            "promo" => 6,
            "referenciel" => "Dev-Web",
            "heure" => "07:18",
            "status" => "Present",
            "date" => "18/04/2024",
        ],
        [
            "matricule" => 12,
            "nom" => "Sylla",
            "prenom" => "Khady",
            "phone" => 38332283,
            "promo" => 6,
            "referenciel" => "Dev-Web",
            "heure" => "vide",
            "status" => "Absent",
            "date" => "18/04/2024",
        ],
        [
            "matricule" => 12,
            "nom" => "Sylla",
            "prenom" => "Fatima",
            "phone" => 773883983,
            "promo" => 6,
            "referenciel" => "Dev-Data",
            "heure" => "07:58",
            "status" => "Present",
            "date" => "18/04/2024",
        ],
        [
            "matricule" => 12,
            "nom" => "Sylla",
            "prenom" => "Fatima",
            "phone" => 773883983,
            "promo" => 6,
            "referenciel" => "Ref-Dig",
            "heure" => "07:30",
            "status" => "Present",
            "date" => "18/04/2024",
        ],
        [
            "matricule" => 12,
            "nom" => "Lo",
            "prenom" => "Moussa",
            "phone" => 89369933,
            "promo" => 6,
            "referenciel" => "Ref-Dig",
            "heure" => "08:00",
            "status" => "Present",
            "date" => "18/04/2024",
        ],
        [
            "matricule" => 12,
            "nom" => "Talla",
            "prenom" => "Sylla",
            "phone" => 773883983,
            "promo" => 6,
            "referenciel" => "Ref-Dig",
            "heure" => "08:20",
            "status" => "Retard",
            "date" => "18/04/2024",
        ],
        [
            "matricule" => 12,
            "nom" => "Mane",
            "prenom" => "Sadio",
            "phone" => 703783903,
            "promo" => 6,
            "referenciel" => "Dev-Web",
            "heure" => "07:18",
            "status" => "Present",
            "date" => "18/04/2024",
        ],
        [
            "matricule" => 12,
            "nom" => "Sylla",
            "prenom" => "Khady",
            "phone" => 38332283,
            "promo" => 5,
            "referenciel" => "Dev-Web",
            "heure" => "vide",
            "status" => "Absent",
            "date" => "18/04/2024",
        ],
        [
            "matricule" => 12,
            "nom" => "Sylla",
            "prenom" => "Fatima",
            "phone" => 773883983,
            "promo" => 6,
            "referenciel" => "Dev-Data",
            "heure" => "07:58",
            "status" => "Present",
            "date" => "18/04/2024",
        ],

        [
            "matricule" => 13,
            "nom" => "Mbaye",
            "prenom" => "Papa",
            "phone" => 33399223,
            "promo" => 6,
            "referenciel" => "Dev-Data",
            "heure" => "07:55",
            "status" => "Present",
            "date" => "19/04/2024",
        ],
        [
            "matricule" => 11,
            "nom" => "Diagne",
            "prenom" => "Faly",
            "phone" => 8965255,
            "promo" => 6,
            "referenciel" => "Dev-Web",
            "heure" => "07:10",
            "status" => "Present",
            "date" => "19/04/2024",
        ],
        [
            "matricule" => 12,
            "nom" => "Sylla",
            "prenom" => "Fatima",
            "phone" => 773883983,
            "promo" => 6,
            "referenciel" => "Ref-Dig",
            "heure" => "07:30",
            "status" => "Present",
            "date" => "20/04/2024",
        ],
        [
            "matricule" => 13,
            "nom" => "Mbaye",
            "prenom" => "Papa",
            "phone" => 33399223,
            "promo" => 6,
            "referenciel" => "Dev-Data",
            "heure" => "07:55",
            "status" => "Present",
            "date" => "20/04/2024",
        ],
        [
            "matricule" => 1,
            "nom" => "Diop",
            "prenom" => "Salimata",
            "phone" => 776699665,
            "promo" => 5,
            "referenciel" => "Dev-Web",
            "heure" => "08:00",
            "status" => "Present",
            "date" => "20/04/2024",
        ],
        [
            "matricule" => 2,
            "nom" => "Sall",
            "prenom" => "Baba",
            "phone" => 776699665,
            "promo" => 5,
            "referenciel" => "Dev-Data",
            "heure" => "09:10",
            "status" => "Retard",
            "date" => "20/04/2024",
        ],
        [
            "matricule" => 3,
            "nom" => "Sy",
            "prenom" => "Demba",
            "phone" => 776699565,
            "promo" => 5,
            "referenciel" => "Ref-Dig",
            "heure" => "-",
            "status" => "Absent",
            "date" => "20/04/2024",
        ],
        [
            "matricule" => 4,
            "nom" => "Faye",
            "prenom" => "Rama",
            "phone" => 709622665,
            "promo" => 5,
            "referenciel" => "Dev-Web",
            "heure" => "07:40",
            "status" => "Present",
            "date" => "20/04/2024",
        ],
        [
            "matricule" => 5,
            "nom" => "Kane",
            "prenom" => "Aly",
            "phone" => 78232665,
            "promo" => 5,
            "referenciel" => "Dev-Data",
            "heure" => "09:10",
            "status" => "Present",
            "date" => "20/04/2024",
        ],
        [
            "matricule" => 6,
            "nom" => "Lo",
            "prenom" => "Khady",
            "phone" => 77944665,
            "promo" => 5,
            "referenciel" => "Ref-Dig",
            "heure" => "08:20",
            "status" => "Present",
            "date" => "20/04/2024",
        ],
        [
            "matricule" => 5,
            "nom" => "Diallo",
            "prenom" => "Moussa",
            "phone" => 772302020,
            "promo" => 5,
            "referenciel" => "Dev-Web",
            "heure" => "07:40",
            "status" => "Present",
            "date" => "20/04/2024",
        ],
        [
            "matricule" => 8,
            "nom" => "Faye",
            "prenom" => "Demba",
            "phone" => 709673562,
            "promo" => 6,
            "referenciel" => "Dev-Data",
            "heure" => "08:40",
            "status" => "Retard",
            "date" => "20/04/2024",
        ],
        [
            "matricule" => 9,
            "nom" => "Sylla",
            "prenom" => "Penda",
            "phone" => 758905566,
            "promo" => 6,
            "referenciel" => "Ref-Dig",
            "heure" => "08:05",
            "status" => "Present",
            "date" => "20/04/2024",
        ],
        [
            "matricule" => 10,
            "nom" => "Seck",
            "prenom" => "Ibra",
            "phone" => 779063622,
            "promo" => 6,
            "referenciel" => "Dev-Web",
            "heure" => "-",
            "status" => "Absent",
            "date" => "20/04/2024",
        ],
        [
            "matricule" => 11,
            "nom" => "Diagne",
            "prenom" => "Faly",
            "phone" => 8965255,
            "promo" => 5,
            "referenciel" => "Dev-Web",
            "heure" => "07:10",
            "status" => "Present",
            "date" => "20/04/2024",
        ],
        [
            "matricule" => 12,
            "nom" => "Sylla",
            "prenom" => "Fatima",
            "phone" => 773883983,
            "promo" => 5,
            "referenciel" => "Ref-Dig",
            "heure" => "07:30",
            "status" => "Present",
            "date" => "20/04/2024",
        ],
        [
            "matricule" => 13,
            "nom" => "Mbaye",
            "prenom" => "Papa",
            "phone" => 33399223,
            "promo" => 5,
            "referenciel" => "Dev-Data",
            "heure" => "07:55",
            "status" => "Present",
            "date" => "20/04/2024",
        ],
        [
            "matricule" => 10,
            "nom" => "Seck",
            "prenom" => "Ibra",
            "phone" => 779063622,
            "promo" => 6,
            "referenciel" => "Dev-Web",
            "heure" => "-",
            "status" => "Absent",
            "date" => "20/04/2024",
        ],
        [
            "matricule" => 11,
            "nom" => "Diagne",
            "prenom" => "Faly",
            "phone" => 8965255,
            "promo" => 5,
            "referenciel" => "Dev-Web",
            "heure" => "07:10",
            "status" => "Present",
            "date" => "20/04/2024",
        ],
        [
            "matricule" => 12,
            "nom" => "Sylla",
            "prenom" => "Fatima",
            "phone" => 773883983,
            "promo" => 5,
            "referenciel" => "Ref-Dig",
            "heure" => "07:30",
            "status" => "Present",
            "date" => "20/04/2024",
        ],
        [
            "matricule" => 13,
            "nom" => "Mbaye",
            "prenom" => "Papa",
            "phone" => 33399223,
            "promo" => 5,
            "referenciel" => "Dev-Data",
            "heure" => "07:55",
            "status" => "Present",
            "date" => "20/04/2024",
        ],
        [
            "matricule" => 11,
            "nom" => "Fall",
            "prenom" => "Samba",
            "phone" => 8965255,
            "promo" => 5,
            "referenciel" => "Dev-Web",
            "heure" => "07:10",
            "status" => "Present",
            "date" => "20/04/2024",
        ],
        [
            "matricule" => 12,
            "nom" => "Sylla",
            "prenom" => "Fatima",
            "phone" => 773883983,
            "promo" => 6,
            "referenciel" => "Ref-Dig",
            "heure" => "07:30",
            "status" => "Present",
            "date" => "20/04/2024",
        ],
        [
            "matricule" => 13,
            "nom" => "Mbaye",
            "prenom" => "Papa",
            "phone" => 33399223,
            "promo" => 6,
            "referenciel" => "Dev-Data",
            "heure" => "07:55",
            "status" => "Present",
            "date" => "20/04/2024",
        ],
        [
            "matricule" => 11,
            "nom" => "Diagne",
            "prenom" => "Faly",
            "phone" => 8965255,
            "promo" => 6,
            "referenciel" => "Dev-Web",
            "heure" => "07:10",
            "status" => "Present",
            "date" => "20/04/2024",
        ],
        [
            "matricule" => 12,
            "nom" => "Sylla",
            "prenom" => "Fatima",
            "phone" => 773883983,
            "promo" => 5,
            "referenciel" => "Ref-Dig",
            "heure" => "07:30",
            "status" => "Present",
            "date" => "20/04/2024",
        ],
        [
            "matricule" => 13,
            "nom" => "Mbaye",
            "prenom" => "Papa",
            "phone" => 33399223,
            "promo" => 5,
            "referenciel" => "Dev-Data",
            "heure" => "07:55",
            "status" => "Present",
            "date" => "20/04/2024",
        ],
        [
            "matricule" => 12,
            "nom" => "Sylla",
            "prenom" => "Fatima",
            "phone" => 773883983,
            "promo" => 6,
            "referenciel" => "Ref-Dig",
            "heure" => "07:30",
            "status" => "Present",
            "date" => "20/04/2024",
        ],
        [
            "matricule" => 13,
            "nom" => "Mbaye",
            "prenom" => "Papa",
            "phone" => 33399223,
            "promo" => 5,
            "referenciel" => "Dev-Data",
            "heure" => "07:55",
            "status" => "Present",
            "date" => "20/04/2024",
        ],
        [
            "matricule" => 12,
            "nom" => "Sylla",
            "prenom" => "Fatima",
            "phone" => 773883983,
            "promo" => 6,
            "referenciel" => "Ref-Dig",
            "heure" => "07:30",
            "status" => "Present",
            "date" => "20/04/2024",
        ],
        [
            "matricule" => 13,
            "nom" => "Mbaye",
            "prenom" => "Papa",
            "phone" => 33399223,
            "promo" => 6,
            "referenciel" => "Dev-Data",
            "heure" => "07:55",
            "status" => "Present",
            "date" => "20/04/2024", 
        ],
    ];


    // if (isset($_POST["recherche"])) {

    // STOCKAGE MATRICULE RECHERCHÉ:
    $searchedMatricule = $_POST["matricule"];

    $foundedMatricule = null;
    $tabFounded = [];
    foreach ($etud as $value) {
        if ($value['matricule'] == $searchedMatricule) {
            $tabFounded[] = $value;
            $foundedMatricule = $value;
            break;
        }
    }


    //---****************************************** FILTRES************************************:


    if (isset($_POST['optionsStatus'])) {
        $selectedStatus = $_POST['optionsStatus'];
    }
    if (isset($_POST['optionsRef'])) {
        $selectedRef = $_POST['optionsRef'];
    }
    if (isset($_POST['jour'])) {
        $selectedDay = $_POST['jour'];
    }


    echo "<div class='tables'>";
    echo "<table>";

    /*******************************************RECHERCHE PAR MATRICULE**********************/
    if ($foundedMatricule != null && $foundedMatricule['promo'] == $actived) {
        echo "<tr class='tabRow'>";
        echo "<td class='matric'>" . $foundedMatricule['matricule'] . "</td>";
        echo "<td class='prenom'>" . $foundedMatricule['prenom'] . "</td>";
        echo "<td class='nom'>" . $foundedMatricule['nom'] . "</td>";
        echo "<td class='phone'>" . $foundedMatricule['phone'] . "</td>";
        echo "<td class='promo'>" . $foundedMatricule['promo'] . '</td>';
        echo "<td class='ref'>" . $foundedMatricule['referenciel'] . "</td>"; 
        echo "<td class='heure'>" . $foundedMatricule['heure'] . "</td>";
        echo "<td class='stat'>" . $foundedMatricule['status'] . "</td>";
        echo "</tr>";
    }

    /*******************************************FILTRE PAR STATUS/REFERENTIEL/DATE**********************/ else if
    ($selectedStatus != null && $selectedRef != null && $selectedDay != null) {
        foreach ($etud as $val) {
            if ($val['status'] == $selectedStatus && $val['referenciel'] == $selectedRef && $val['date'] == $date_actuelle) {
                echo "<tr class='tabRow'>";
                echo "<td class='matric'>" . $val['matricule'] . "</td>";
                echo "<td class='prenom'>" . $val['prenom'] . "</td>";
                echo "<td class='nom'>" . $val['nom'] . "</td>";
                echo "<td class='phone'>" . $val['phone'] . "</td>";
                echo "<td class='promo'>" . $val['promo'] . '</td>';
                echo "<td class='ref'>" . $val['referenciel'] . "</td>";
                echo "<td class='heure'>" . $val['heure'] . "</td>";
                echo "<td class='stat'>" . $val['status'] . "</td>";
                echo "</tr>";
            }
        }
    }

    /*******************************************FILTRE PAR STATUS/REFERENTIEL**********************/ else if
    ($selectedStatus != null && $selectedRef != null) {
        foreach ($etud as $val) {
            if ($val['status'] == $selectedStatus && $val['referenciel'] == $selectedRef && $val['date'] == $date_actuelle) {
                echo "<tr class='tabRow'>";
                echo "<td class='matric'>" . $val['matricule'] . "</td>";
                echo "<td class='prenom'>" . $val['prenom'] . "</td>";
                echo "<td class='nom'>" . $val['nom'] . "</td>";
                echo "<td class='phone'>" . $val['phone'] . "</td>";
                echo "<td class='promo'>" . $val['promo'] . '</td>';
                echo "<td class='ref'>" . $val['referenciel'] . "</td>";
                echo "<td class='heure'>" . $val['heure'] . "</td>";
                echo "<td class='stat'>" . $val['status'] . "</td>"; 
                echo "</tr>";
            }
        }
    }

    /*******************************************FILTRE PAR STATUS/DATE**********************/ else if
    ($selectedStatus != null && $selectedDay != null) {
        foreach ($etud as $val) {
            if ($val['status'] == $selectedStatus && $val['date'] == $selectedDay) {
                echo "<tr class='tabRow'>";
                echo "<td class='matric'>" . $val['matricule'] . "</td>";
                echo "<td class='prenom'>" . $val['prenom'] . "</td>";
                echo "<td class='nom'>" . $val['nom'] . "</td>";
                echo "<td class='phone'>" . $val['phone'] . "</td>";
                echo "<td class='promo'>" . $val['promo'] . '</td>';
                echo "<td class='ref'>" . $val['referenciel'] . "</td>";
                echo "<td class='heure'>" . $val['heure'] . "</td>";
                echo "<td class='stat'>" . $val['status'] . "</td>";
                echo "</tr>";
            }
        }
    }




    /*******************************************FILTRE PAR STATUS**********************/ else if ($selectedStatus != null) {
        foreach ($etud as $val) {
            if ($val["status"] == $selectedStatus && $val['promo'] == $actived) {
                echo "<tr class='tabRow'>";
                echo "<td class='matric'>" . $val['matricule'] . "</td>";
                echo "<td class='prenom'>" . $val['prenom'] . "</td>";
                echo "<td class='nom'>" . $val['nom'] . "</td>";
                echo "<td class='phone'>" . $val['phone'] . "</td>";
                echo "<td class='promo'>" . $val['promo'] . '</td>';
                echo "<td class='ref'>" . $val['referenciel'] . "</td>";
                echo "<td class='heure'>" . $val['heure'] . "</td>";
                echo "<td class='stat'>" . $val['status'] . "</td>";
                echo "</tr>";
            }
        }
    }



    /*******************************************FILTRE PAR RÉRÉRENTIEL**********************/ else if ($selectedRef != null) {
        foreach ($etud as $val) {
            if ($val['referenciel'] == $selectedRef && $val['promo'] == $actived && $val['date'] == $date_actuelle) {
                echo "<tr class='tabRow'>";
                echo "<td class='matric'>" . $val['matricule'] . "</td>";
                echo "<td class='prenom'>" . $val['prenom'] . "</td>";
                echo "<td class='nom'>" . $val['nom'] . "</td>";
                echo "<td class='phone'>" . $val['phone'] . "</td>";
                echo "<td class='promo'>" . $val['promo'] . '</td>';
                echo "<td class='ref'>" . $val['referenciel'] . "</td>";
                echo "<td class='heure'>" . $val['heure'] . "</td>";
                echo "<td class='stat'>" . $val['status'] . "</td>";
                echo "</tr>";
            }
        }
    }

    /*******************************************FILTRE PAR DATE**********************/ else if ($selectedDay != null) {
        foreach ($etud as $val) {
            if ($val['date'] == $selectedDay && $val['promo'] == $actived) {
                echo "<tr class='tabRow'>";
                echo "<td class='matric'>" . $val['matricule'] . "</td>";
                echo "<td class='prenom'>" . $val['prenom'] . "</td>";
                echo "<td class='nom'>" . $val['nom'] . "</td>";
                echo "<td class='phone'>" . $val['phone'] . "</td>";
                echo "<td class='promo'>" . $val['promo'] . '</td>';
                echo "<td class='ref'>" . $val['referenciel'] . "</td>";
                echo "<td class='heure'>" . $val['heure'] . "</td>";
                echo "<td class='stat'>" . $val['status'] . "</td>";
               
                echo "</tr>";
            }
        }
    }




    /*******************************************AFFICHAGE DE BASE SANS FILTRE**********************/ else
        if ($date_actuelle != null) {

            foreach ($etud as $val) {
                if ($val['date'] == $date_actuelle && $val['promo'] == $actived) {
                    echo "<tr class='tabRow'>";
                    echo "<td class='matric'>" . $val['matricule'] . "</td>";
                    echo "<td class='nom'>" . $val['nom'] . "</td>";
                    echo "<td class='prenom'>" . $val['prenom'] . "</td>";
                    echo "<td class='phone'>" . $val['phone'] . "</td>";
                    echo "<td class='promo'>" . $val['promo'] . '</td>';
                    echo "<td class='ref'>" . $val['referenciel'] . "</td>";
                    echo "<td class='heure'>" . $val['heure'] . "</td>";
                    echo "<td class='stat'>" . $val['status'] . "</td>";
                    // echo "<td class='dt'>". $val["date"] . "</td>";
                    echo "</tr>";
                }
            }
        } else {
            echo ("AUCUNE DONNÉE AUJOUDH'HUI");
        }
    echo "</table>";
    echo "</div>";

}

function presencesDisplay2()
{
    session_start();
    if (isset($_SESSION["activePromo"])) {
        $actived = $_SESSION["activePromo"];
    }

    $date_actuelle = date('d/m/Y');

    $presenceFile = "../Data/presences.csv";

    $presenceFile = fopen($presenceFile, "r");

    $fileHeaders = fgetcsv($presenceFile);

    $presencesTab = [];

    while (($ligne = fgetcsv($presenceFile)) !== false) {
        if (count($ligne) == count($fileHeaders)) {
            $presencesTab[] = array_combine($fileHeaders, $ligne);
        }
    }
    fclose($presenceFile);

}


// RECUPÉRATION DES ENTÊTES DE DONNÉES LISTE PRESENCES:
function getTitles()
{
    $chemin_fichier = '../Data/presences.csv';

    // Ouvre le fichier en lecture
    $fichier = fopen($chemin_fichier, 'r');

    // Vérifie si le fichier a pu être ouvert avec succès
    if ($fichier !== false) {
        // Lit la première ligne du fichier (les entêtes)
        $entetes = fgetcsv($fichier);

        // Vérifie si les entêtes ont été récupérées avec succès
        if ($entetes !== false) {
            // Affiche les entêtes dans une balise <ul> avec des balises <li>
            echo "<div class='entetes'>";
            echo '<ul>';
            foreach ($entetes as $entete) {
                echo '<li>' . $entete . '</li>';
            }
            echo '</ul>';
            echo "</div>";
        } else {
            // Gère l'erreur si la première ligne ne peut pas être lue
            echo "Erreur : Impossible de lire les entêtes du fichier.";
        }

        // Ferme le fichier
        fclose($fichier);
    } else {
        // Gère l'erreur si le fichier ne peut pas être ouvert
        echo "Erreur : Impossible d'ouvrir le fichier.";
    }
}


/*
1: Parcourir le fichier promos et le stocker dans un tableau.
2: Stocker les données dans un tableau.
2: Vérifier les status
3: Comparer l'id de chaque ligne par les boutons radios
4: Celui avec le status 1 est coché par défaut
5: quand on coche un autre, status prend la valeur 1 et celle qui 
avait la valeur 1 devient 0
*/
