<?php
// This PHP script should be located in the "controllers" or "views" folder.

// Define the path to your SVG file in the "public" directory.
$svgFilePath = 'public/images/titles/about.svg';

// echo $svgFilePath;

// Check if the file exists before attempting to read it.
if (file_exists($svgFilePath)) {
    // Read the SVG content.
    $svgContent = file_get_contents($svgFilePath);

    // Generate the HTML code to embed the SVG.
    echo $svgContent;

} else {
    // Handle the case where the SVG file does not exist.
    echo "SVG file not found.";
}
?>