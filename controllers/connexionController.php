<?php 
    $msg = "";
    if(isset($_POST["name"])){
        if($_POST["name"] == "admin"){
            // connecté
            $_SESSION["name"] = "admin";
            header("Location:?section=vip");
        }
        else {
            // msg erreur
            $msg="<p>incorrect password</p>";
        }
    }

    include("views/page/connexion.php");
?>
Footer
