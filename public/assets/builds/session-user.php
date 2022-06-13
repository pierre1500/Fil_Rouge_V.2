<?php
session_start();
if($_SESSION['pseudo'] !== ""){
    $user = $_SESSION['pseudo'];
    // afficher un message
    echo "Bonjour $user, vous êtes connecté";
}
?>