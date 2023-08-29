<?php 
    unset($_SESSION["nom"]);
    session_destroy();
    header("Location:?section=connexion");
?>