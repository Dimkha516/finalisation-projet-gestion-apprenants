<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/main.css">
    <title>Document</title>
</head>

<body>
    <!-- http://www.bamba.mbow:8089/architecture/templates/presences.php -->


    <?php require_once ("../functions/gestionPresences.php") ?>

    <?php session_start();

    if (isset($_SESSION["activePromo"])) {
        $active = $_SESSION["activePromo"];
    }
    if (isset($_SESSION['connectedUser'])) {
        $connectedUser = $_SESSION['connectedUser'];
    }
    ?>

    <!--  -->
    <!--PARTIE CONTENU-DROITE  -->
    <div class="right-contain">



        <div class="active-page">
            <div>
                <h5 class="promotion">Présences</h5> <br>
                <?php echo "<h2>Connected: " . $connectedUser["nom"] . "</h2>" ?>
            </div>
            <div>
                <?php echo "<h2 class='runningPromo'>Promo: " . $active . "</h2>" ?>
            </div>
            <div>
                <h5 class="creating">Présences >> Liste </h5>
            </div>
        </div>

        <div class="contenu-principal">


            <div class="filter">
                <form action="" method="post">
                    <div>
                        <select class="status" name="optionsStatus" id="optionsStatus">
                            <!-- onchange="this.form.submit()" -->
                            <option value="">Status</option>
                            <option value="Present">Present</option>
                            <option value="Retard">Retard</option>
                            <option value="Absent">Absent</option>
                        </select>
                    </div>

                    <div>
                        <select class="referentiel" name="optionsRef" id="optionsRef">
                            <option value="">Référentiel</option>
                            <option value="Dev-Web">Dev-Web</option>
                            <option value="Ref-Dig">Ref-Dig</option>
                            <option value="Dev-Data">Dev-Data</option>
                        </select>
                    </div>



                    <div>
                        <input type="date" name="jour" id="jour" value="10/02/2020" />
                        <!-- <img src="../medias/calendrier-horloge.png" alt=""> -->
                    </div>

                    <div>
                        <!-- <form method="post"> -->
                        <!-- <input type="text" class="recherche" id="status" name="status" -->
                        <input type="submit" class="refresh" name="status" id="status" value="rafraichir"
                            style="margin-left: 50px">

                        <!-- <input type="submit" class="refresh" value="Rafraichir" style="margin-left:40px"/> -->
                        <!-- </form> -->

                    </div>

                </form>
            </div>

            <!--  -->
            <?php getTitles();
            presencesDisplay();
            ?>





            <!-- <div class="entetes">
                <ul>
                    <li>Matricule</li>
                    <li>Nom</li>
                    <li>Prenom</li>
                    <li>Téléphone</li>
                    <li>Reférentiel</li>
                    <li>Heure d'arrivée</li>
                    <li>Status</li>
                </ul>
            </div> -->
            <!-- APPELER LE FICHIER ICI -->


            <div class="page-level">

                <div class="active-level">
                    <select style="width: 8vw">
                        <option value="">Item par page 10</option>
                        <option value=10>10</option>
                        <option value=10>15</option>
                        <option value=10>20</option>
                    </select>
                </div>

                <div class="levels" style="margin-top: 35px">
                    <h5 style="font-size: 1.2rem">111-120 of 128 |< <>
                    </h5>
                </div>
            </div>


        </div>
    </div>

</body>

</html>