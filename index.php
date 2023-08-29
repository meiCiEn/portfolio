<?php 
    session_start();
    include("views/html/header.php");

    // LOGIN / LOGOUT (if needed)
    
    // if(isset($_SESSION["nom"])){
    //     include("views/menu/nav-co.php");
    // }
    // else {
    //     include("views/menu/nav-deco.php");
    // }
    

    include("controllers/router.php");
    include("views/html/footer.php");
?>