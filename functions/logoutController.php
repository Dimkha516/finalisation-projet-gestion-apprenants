<?php

function logout()
{

    session_unset();
    session_destroy();
    header("Location: ../public/index.php?page=login");
    exit();
    // header("Refresh: 1; url=../public/index.php?page=login");
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['logout'])) {
        logout();
    }
}
?>
<!-- <script>
    function confirmerSoumission() {
        // Afficher une boîte de dialogue de confirmation
        if (!confirm("Êtes-vous sûr de vouloir soumettre le formulaire ?")) {
            // Annuler la soumission si l'utilisateur clique sur "Annuler"
            event.preventDefault();
            return false;
        }
        

        // Autoriser la soumission si l'utilisateur clique sur "OK"
        return true;
    }
</script> -->