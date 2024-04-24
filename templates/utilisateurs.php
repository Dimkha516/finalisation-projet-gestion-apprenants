<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/main.css">
    <title>Document</title>

</head>

<body>

    <!-- TEST DE SESSION POUR STOCKAGE REF CHECKÉ -->

    <!-- FIN TEST DE SESSION POUR STOCKAGE REF CHECKÉ -->


    <?php
    session_start();
    // 
    if (isset($_SESSION["activePromo"])) {
        $activedPromo = $_SESSION["activePromo"];
    }
    // 
    if (isset($_SESSION["nbApprenants"])) {
        $nombreApprenants = $_SESSION["nbApprenants"];
    }
    ?>

<!-- L'aventure est dangreuse la routine est mortel -->

    <!-- <link rel="stylesheet" href="../public/css/main.css"> -->
    <div class="promo6">
        <div class="top2">
            <div class="top2-1">
                <?php echo "<h3 style='color:teal; font-size:2rem; font-weight:900; margin-top: 5px; margin-left: 30px;'>Promotion " . $activedPromo . "</h3>" ?>
                <!-- <h3 style="color: teal;font-weight: 900;margin-top: 5px;margin-left: 10px;">Promotion 6</h3> -->
            </div>

            <div class="top2-2">
                <!-- <h2>Référentiel: </h2> -->
                <!-- <h3 style="color: teal;font-weight: 900;margin-top: 5px;margin-left: 10px;">Dev Web/mobile</h3> -->
                <?php echo "<h3 style='color: tomato; font-size:2rem ;font-weight:900; margin-left: -80%;'>Référentiel: " . $valueRef . "</h3>"; ?>
            </div>

            <div class="top2-3">
                
                <form method="post" id="refForm" class="refForm">
                <!-- action="index.php?page=utilisateurs" -->
                    <!-- <label for="Dev-Web">Dev-web</label>
                -->
                    <input type="checkbox" name="checkedRef[]" id="Dev-Web" class="refCheck" value="Dev-Web" onchange="this.form.submit()">
                </form>
            </div>

        </div>

        <div class="contain">


            <!--  -->
            <div class="head1">
                <span class="numero">1</span>
                <span class="appr">Apprenants</span>
            </div>

            <div class="head2">
                <div class="nombre-apprenants">
                    <h3>Apprenants</h3>

                    <?php
                    echo "<h2 style='color: teal;'>" . "(" . $nombreApprenants . ")" . "</h2>";

                    ?>


                </div>

                <div class="buttons">
                    <button class="new">+ Nouveau</button>
                    <button class="insert">Insertion en masse</button>
                    <button class="fichier">
                        <img src="../public/images/telecharge.png" style="height: 2vh;" alt="">
                        Fichier model</button>
                    <button class="exclus">Liste des Exclus</button>
                </div>
            </div>

            <form class="filtre" method="post">
                <span><img src="../medias/cherche.png" class="search-img" style="height:2vh" alt="">
                </span>
                <input type="text" name="nomRef" id="nomRef"
                    value="<?php echo isset($_POST['nomRef']) ? htmlspecialchars($_POST['nomRef']) : ''; ?>"
                    placeholder="Filtrer par référentiel: Dev-Web; Dev-Data ou Ref-Dig">
            </form>



            <div class="file-logo">
                <img src="../public/images/fichier.png" alt=""> <br>
            </div>

            <div class="listApprenants">

                <div class="entete">
                    <ul style="display: flex; justify-content: space-around;">
                        <li>Image</li>
                        <li>Nom</li>
                        <li>Prénom</li>
                        <li>Référentiel</li>
                        <li>Email</li>
                        <li>Genre</li>
                        <li>Téléphone</li>
                        <li>Action</li>
                    </ul>
                </div>
            </div>
        </div>

        <?php require_once ("../functions/gestionPromos.php") ?>
    </div>
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#Dev-Web').change(function () {
                // Empêcher le formulaire d'être soumis normalement
                event.preventDefault();

                // Soumettre le formulaire en utilisant AJAX
                $.ajax({
                    type: 'POST',
                    url: '../functions/gestionPromos.php', // URL du script de traitement du formulaire
                    data: $('#refForm').serialize(), // Données du formulaire
                    success: function (response) {
                        // Traiter la réponse du serveur
                        console.log(response);
                    },
                    error: function (error) {
                        // Gérer les erreurs
                        console.log(error);
                    }
                });
            });
        });
    </script> -->
</body>

</html>