<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../public/css/main.css">
        <title>Document</title>
        
</head>

<!-- <link rel="stylesheet" href="../public/css/main.css"> -->

<body>

    <div class="promos">
        <div class="activePagePromos">
            <h5 class="promotion">Promotions</h5>
            <h5 class="creating">Promos >> Liste </h5>
        </div>

        <div class="contenu-principal">

            <div class="partie1">
                <div class="intitule">
                    <h3>Liste Des Promotions</h3> <span class="num"
                        style="color: teal; font-size: 1.2rem;font-size: 1.5rem;">(1)</span>
                </div>
                <div class="droite">
                    <input type="text" placeholder="Rechercher"> <span><img src="../medias/cherche.png" alt=""></span>
                    <a href="./1creations.html">
                        <button>+ Nouvelle</button>
                    </a>
                </div>
            </div>

            <div class="partie2">
                <div class="entetes">
                    <ul>
                        <li>Libellé</li>
                        <li>Date Début</li>
                        <li>Date Fin</li>
                        <li>Action</li>
                    </ul> 
                </div>
                <?php require_once("../functions/activePromo.php") ?>
                <!-- APPELER PROMO DISPLAY ICI. NE PAS OUBLIER D'IMPORTER SON CHEMIN D'ABORD --> 
                 
            </div>
            <div class="partie3">
                <!-- <form action="index.php" method="get"> -->
            


            </div>

            <!-- <div class="partie4">
                <select>
                    <option value="">Items par page: 10</option>
                </select>

                <h4>1-1 of 1 |< <> >| </h4>
            </div> -->



        </div>
        <!-- </form> -->
    </div>
</body>
</html>


<!-- <div class="partie3">
    <form action="index.php" method="get"> -->


<!-- PROMO6 -->
<!-- <ul> -->
<!-- <li class="li1"> -->
<!-- <a href="index.php?page=promo6"> -->
<!-- <img src="../public/images/reglages .png" alt=""> -->
<!-- <h2 style="color: green; font-weight: 900;">Promotion 6</h2>
                </a>
            </li>
            
            <li>2023-02-01</li>
            
            <li>2024-11-01</li>
            
            <li>
                <input type="radio" name="promo" checked value=6 onchange="this.form.submit()">
            </li>
        </ul> -->

<!-- PROMO3 -->
<!-- <ul>
            <li class="li1">
                <a href="index.php?page=promo5"> -->
<!-- <img src="../public/images/reglages .png" alt=""> -->
<!-- <h2 style="color: green; font-weight: 900;">Promotion 5</h2>
                </a>
            </li>
            
            <li>2022-02-01</li>
            
            <li>2023-11-01</li>
            
            <li>
                <input type="radio" name="promo" value=5 onchange="this.form.submit()">
            </li>
        </ul> -->

<!-- PROMO4 -->
<!-- <ul>
            <li class="li1">
                <a href="index.php?page=promo4"> -->
<!-- <img src="../public/images/reglages .png" alt=""> -->
<!-- <h2 style="color: green; font-weight: 900;">Promotion 4</h2>
                </a>
            </li>
            
            <li>2021-02-01</li>
            
            <li>2022-11-01</li>
            
            <li>
                <input type="radio" name="promo" value=4 onchange="this.form.submit()">
            </li>
        </ul> -->

<!-- PROMO3 -->
<!-- <ul>
            <li class="li1">
                <a href="index.php?page=promo3"> -->
<!-- <img src="../public/images/reglages .png" alt=""> -->
<!-- <h2 style="color: green; font-weight: 900;">Promotion 3</h2>
                </a>
            </li>
            
            <li>2020-02-01</li>
            
            <li>2021-11-01</li>
            
            <li>
                <input type="radio" name="promo" value=3 onchange="this.form.submit()">
            </li>
        </ul> -->

<!-- PROMO2 -->
<!--  <ul>
            <li class="li1">
                <a href="index.php?page=promo2"> -->
<!-- <img src="../public/images/reglages .png" alt=""> --> -->
<!-- <h2 style="color: green; font-weight: 900;">Promotion 2</h2>
                </a>
            </li>
            
            <li>2019-02-01</li>
            
            <li>2020-11-01</li>
            
            <li> -->
<!-- <input type="radio" name="promo" value=2 onchange="this.form.submit()">
            </li>
        </ul> -->

<!-- PROMO1 -->
<!-- <ul>
            <li class="li1">
                <a href="index.php?page=promo1"> -->
<!-- <img src="../public/images/reglages .png" alt=""> -->
<!-- <h2 style="color: green; font-weight: 900;">Promotion 1</h2>
                </a>
            </li>
            
            <li>2018-02-01</li>
            
            <li>2019-11-01</li>
            
            <li>
                <input type="radio" name="promo" value=1 onchange="this.form.submit()">
            </li>
        </ul>

        
</div> -->