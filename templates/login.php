<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/main.css">
    <title>Document</title>
</head>

<body>
  
    <?php include_once("../functions/loginController.php") ?>   
    
    <div class="main-form">

        <!-- <img src="/medias/odc.png" class="logo" alt=""> -->
        <form action="../functions/loginController.php" method="post">
            <div class="formulaire">
                <p class="error">Email et Mot de passe Recquis</p>
                

                <div class="email">
                    <label for="email">Email Adress</label> <span class="request" style="right: 30%;">*</span> <br>
                    <input type="text" class="email" name="email" placeholder="Entrer email adress" required> <span class="request"
                        style="right: 5%; top: -40px;">*</span>
                    </div>

                <div class="password">
                    <label for="pass">Password</label> <span class="request" style="right: 30%;">*</span> <br>
                    <input type="password" class="pass" name="password" placeholder="Entrer mot de passe" required>
                    <!-- <span class="request" style="top: 30%;">*</span> -->
                    <img src="../medias/password.png" class="hide-pass" alt="">
                </div>
            </div>

            <div class="form-options">
                <div>
                    <input type="checkbox" id="remember" style="cursor: pointer;">
                    <label for="remember" style="cursor: pointer;">Remember me</label>
                </div>
                <div>
                    <span style="color: teal; font-weight: 900;cursor: pointer;">Mot de passe Oublié ?</span>
                </div>
            </div>

            <div class="login">
                <a href="#">
                    <input type="submit" class="log" value="Se connecter">
                </a>
            </div>
        </form>
    </div>
</body>

</html>