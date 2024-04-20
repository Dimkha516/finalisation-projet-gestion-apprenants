<link rel="stylesheet" href="../public/css/main.css">

<?php
$date_actuelle = date("d/m/Y");
?>

<div class="contain-top">
    <div class="left-top">
        <img src="../public/images/menu-burger.png" class="burger" alt="">
        <img src="../public/images/applications.png" class="icon-app" alt="">

        <form method="post">
            <input type="text" class="recherche" id="matricule" name="matricule" placeholder="Rechercher par matricule" autocomplete="off">
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
            <h3 style="color: teal;">SUPER_ADMIN</h3>
            <select>
                <option value="adm">Admin Admin</option>
            </select>
        </div>
    </div>

</div>