<?php 
    $tabRoles = [
        // anonyme
        1 => ["home", "about", "contact", "projects", "project-molenbeek", "project-ecologie", "project-film", "project-boulangerie", "project-bwt", "project-agr", "project-shuihu", "deconnexion", "form" ],
        0 => ["home", "about", "contact", "projects", "project-molenbeek", "project-ecologie",  "project-boulangerie", "project-film", "project-bwt", "project-agr", "project-shuihu", "connexion", "form" ],
        // connecté
        // for future - admin?
    ];
    
    if(isset($_GET["section"])){
        // vérifier si existe dans le tableau
        $section = $_GET["section"];
        $r = (isset($_SESSION["name"])) ? 1 : 0;
        

        if(in_array($section, $tabRoles[$r])){
            include("controllers/". $section ."Controller.php");
        }
        else {
            include("views/error/404.php");
        }
    }
    else {
        include("controllers/homeController.php");
    }

    // include("controllers/project-templateController.php");
?>
