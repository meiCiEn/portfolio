<!-- project-javascript.php -->
<?php

$pageLang = "fr";
$pageTitle = "JavaScript";

// Read the JSON file based on the selected language
$translationFile = ($pageLang === "en") ? "public/data/text_files/javascript_en.json" : "public/data/text_files/javascript_fr.json";
$translationData = json_decode(file_get_contents($translationFile), true);

$pagePath = $translationData["pagePath"];
$projectLead = $translationData["projectLead"];
$projectTitle = $translationData["projectTitle"];
$projectType = $translationData["projectType"];
$projectYear = $translationData["projectYear"];
$projectTech = $translationData["projectTech"];
$projectTeam = $translationData["projectTeam"];
$projectDescription = $translationData["projectDescription"];
$projectURL = $translationData["projectURL"];
$screenShot_1 = $translationData["screenShot_1"];
$screenShotTitle_1 = $translationData["screenShotTitle_1"];
$screenShot_2 = $translationData["screenShot_2"];
$screenShotTitle_2 = $translationData["screenShotTitle_2"];
$screenShot_3 = $translationData["screenShot_3"];
$screenShotTitle_3 = $translationData["screenShotTitle_3"];
$screenShot_4 = $translationData["screenShot_4"];
$screenShotTitle_4 = $translationData["screenShotTitle_4"];
$screenShot_5 = $translationData["screenShot_5"];
$screenShotTitle_5 = $translationData["screenShotTitle_5"];
$screenShotMobile = $translationData["screenShotMobile"];
$nextProjectTitle = $translationData["nextProjectTitle"];
$nextProjectURL = $translationData["nextProjectURL"];
$next = $translationData["next"];
$goToSite = $translationData["goToSite"];
$breadcrumbHome = $translationData["breadcrumbHome"];
$breadcrumbProjects = $translationData["breadcrumbProjects"];
$breadcrumbCurrent = $translationData["breadcrumbCurrent"];

include("controllers/project-templateController.php");

?>

