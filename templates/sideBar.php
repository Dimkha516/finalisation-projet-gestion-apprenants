<?php
session_start();
if (isset($_SESSION['connectedUser'])) {
    $connectedUser = $_SESSION['connectedUser'];

// if(isset($_SESSION['activePromo'])) {
//     $_SESSION['activePromo'] = $connectedUser['promo'];
// }
}
?>

<link rel="stylesheet" href="../public/css/main.css">

<div class="left-nav">
    <img src="../public/images/logo-odc3.png" class="logoOdc" alt="logoOdc"> <br>

    <div class="item1" style="margin-top: 1%;">
        <img src="../public/images/fenetre.png" id="fenetre" alt="">
        <label for="fenetre" style="margin-top: 30%;">MENU
        </label> <br>
    </div>

    <?php if ($connectedUser['profil'] == 'admin') {
        echo "<div class='item2'>";
        echo "<img src='../public/images/barre-decalee.png' alt='dashboard' id='dashboard'>";
        echo "<a href='#'>";
        echo "<label for='dashboard'>Dashboard</label><br>";
        echo "</a>";
        echo "</div>";
        //---------------------------------------------------------------------------------------------- 
        echo "<div class='item3'>";
        echo "<img src='../public/images/complet.png' alt='complet' id='list-promo'>";
        echo "<a href='index.php?page=promos'>";
        echo "<label for='list-promos'>Promos</label><br>";
        echo "</a>";
        echo "</div>";
        //----------------------------------------------------------------------------------------------
        echo "<div class='item4'>";
        echo "<img src='../public/images/calendrier-horloge.png' alt='complet' id='users'>";
        echo "<a href='index.php?page=filieres'>";
        echo "<label for='list-users'>Référentiels</label><br>";
        echo "</a>";
        echo "</div>";
        //------------------------------------------------------------------------------------------------------ 
        echo "<div class='item5'>";
        echo "<img src='../public/images/utilisateur.png' alt='complet' id='users'>";
        echo "<a href='index.php?page=utilisateurs'>";
        echo "<label for='users'>Utilisateurs</label><br>";
        echo "</a>";
        echo "</div>";
        //----------------------------------------------------
        echo "<div class='item5'>";
        echo "<img src='../public/images/utilisateur.png' alt='complet' id='visiteurs'>";
        echo "<a href='#'>";
        echo "<label for='visiteurs'>Visiteurs</label><br>";
        echo "</a>";
        echo "</div>";

    }

    ?>

    <!-- <div class="item5">
        <img src="../public/images/utilisateur.png" id="visiteurs" alt="">
        <a href="#">
            <label for="visiteurs">Visiteurs</label> <br>
        </a>
    </div> -->


    <div class="item6">
        <img src="../public/images/utilisateur.png" id="presence" alt="">
        <a href="index.php?page=presences">
            <label for="presence">Présence</label> <br>
        </a>
    </div>


    <div class="item7">
        <img src="../public/images/calendrier-horloge.png" id="events" alt="">
        <a href="#">
            <label for="events">Evénements</label>
        </a>
    </div>

    <?php echo "<p style=margin-top:60px;color:green;font-weight:900;font-size:2rem;>Profil utilisateur: " . $connectedUser['profil'] . "</p>" ?>
</div>