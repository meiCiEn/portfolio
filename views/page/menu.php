<?php
$pageLang = "fr";

// Read the JSON file based on the selected language
$translationFile = ($pageLang === "en") ? "public/data/text_files/menu_en.json" : "public/data/text_files/menu_fr.json";
$translationData = json_decode(file_get_contents($translationFile), true);

$topMenuItem_home = $translationData["topMenuItem_home"];
$topMenuItem_projects = $translationData["topMenuItem_projects"];
$topMenuItem_about = $translationData["topMenuItem_about"];
$topMenuItem_contact = $translationData["topMenuItem_contact"];

include("controllers/menu-templateController.php");

?>

