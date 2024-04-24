<?php 

function logout() {

    session_unset();
    session_destroy();
    header("Location: ../public/index.php?page=login");
    exit();
    // header("Refresh: 1; url=../public/index.php?page=login");
}

if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['logout'])){
        logout();
    }
}


// session_start();    
// session_unset();
// session_destroy();
// exit();
