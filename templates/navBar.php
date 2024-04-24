<link rel="stylesheet" href="../public/css/main.css">

<?php
$date_actuelle = date("d/m/Y");
session_start();
if (isset($_SESSION['connectedUser'])) {
    $connectedUser = $_SESSION['connectedUser'];
}

include_once('../functions/logoutController.php');

?>

<!-- <script>
    function confirmAction() {
        let confirmResult = confirm("Se déconnecter ?");
        if (confirmResult) {
            window.location.href = '../public/index.php';
        }
    }
</script> -->

<div class="contain-top">
    <div class="left-top">
        <img src="../public/images/menu-burger.png" class="burger" alt="">
        <img src="../public/images/applications.png" class="icon-app" alt="">

        <form method="post">
            <input type="text" class="recherche" id="matricule" name="matricule" placeholder="Rechercher par matricule"
                autocomplete="off">
            <span>
                <img src="../public/images/cherche.png" class="recherche-img" alt="" />
                <input type="submit" name="recherche" value="rechercher">
            </span>
        </form>
    </div>


    <div class="right-top">
        <div class="today-contain">
            <img src="../public/images/calendrier-horloge.png" alt="">
            <?php
            echo "<h2 class='today'>" . $date_actuelle . "</h2>"
                ?>
        </div>
        <img src="../public/images/homme.png" class="logo-right">

        </img>
        <div class="current-user">
            <h3 style="color: teal;">User</h3>
            <select>
                <?php echo "<option value='adm'>" . $connectedUser["nom"] . "</option>" ?>
            </select> <br>
            <form action="" method="post" target="_blank" onsubmit="window.close();">
            <input type="submit" id="logout" name="logout" value="Déconnexion">
                <!-- <input type="submit" id="logout" name="logout" value="Déconnexion" onclick="confirmAction()"> -->
            </form>
        </div>
    </div>

</div>