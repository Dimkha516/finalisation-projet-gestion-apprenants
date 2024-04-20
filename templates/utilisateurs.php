<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/main.css">
    <title>Document</title>
</head>

<body>

    <?php
    session_start();
    if (isset($_SESSION["activePromo"])) {
        $activedPromo = $_SESSION["activePromo"];
    }

    if (isset($_SESSION["nbApprenants"])) {
        $nombreApprenants = $_SESSION["nbApprenants"];
    }
    if (isset($_SESSION["activePromo"])) {
        $activedPromo = $_SESSION["activePromo"];
    }
    $valueRef = $_GET['value'];
    ?>


    <!-- <link rel="stylesheet" href="../public/css/main.css"> -->
    <div class="promo6">
        <div class="top2">
            <div class="top2-1">
                <?php echo "<h3 style='color:teal; font-size:2rem; font-weight:900; margin-top: 5px; margin-left: 10px'> Promotion " . $activedPromo . "</h3>" ?>
                <!-- <h3 style="color: teal;font-weight: 900;margin-top: 5px;margin-left: 10px;">Promotion 6</h3> -->
            </div>

            <div class="top2-2">
                <h2>Référentiel: </h2>
                <!-- <h3 style="color: teal;font-weight: 900;margin-top: 5px;margin-left: 10px;">Dev Web/mobile</h3> -->
                <?php echo "<h3 style='color: teal; font-size:2rem ;font-weight:900; margin-top:5px; margin-left: 10px;'>" . $valueRef . "</h3>"; ?>
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

    </div>
    <?php require_once ("../functions/gestionPromos.php") ?>
</body>

</html>