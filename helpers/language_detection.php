<?php 
function detectBrowserLanguage() {
    if (isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
        $languages = explode(',', $_SERVER['HTTP_ACCEPT_LANGUAGE']);
        foreach ($languages as $lang) {
            // Split each language and quality
            $split = explode(';', $lang);
            $language = trim($split[0]);
            // Check if the language is in the format "en-US" and extract only the primary part
            if (strpos($language, '-') !== false) {
                list($primaryLanguage, $subLanguage) = explode('-', $language);
                // Set site language to French if the browser language is French
                if ($primaryLanguage === 'fr') {
                    return 'fr'; // Set $siteLang to French
                }
            } else {
                // Set site language to English if the browser language is English
                if ($language === 'en') {
                    return 'en'; // Set $siteLang to English
                }
            }
        }
    }
    // Default to English if no language is detected or none of the conditions match
    return 'en'; 
}

?>