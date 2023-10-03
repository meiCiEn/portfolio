<?php
$pageTitle = "home";

// Define background and bubble colors based on the page
$backgroundColor = "#f9f3dc";
$backgroundImage = "linear-gradient(160deg, #f9f3dc 0%, #f5ecc6; 100%"; 
$particleColor = "#ffffff";

?>

<script>
    // retrieve the value of the PHP variables $pageTitle/$pageLang and turn into JS variables
        let pageTitle = <?php echo json_encode($pageTitle); ?>;
</script>



<div class="page-bg page-bg--offwhite bg--home h-100 d-flex">
    <div id="tsparticles"></div>

    <div class="intro__wrapper article">

        <div class="intro__text">
            <div class="intro__text-wrapper">
                <div id="home-svg" class="wrapper wrapper--eleanor">
                </div>

                <h4 id="job_description" class="translate job_description">
                    <!-- Front-end web developer -->
</h4>
            </div>
            <div class="intro__links ">
                <ul class="intro__nav">
                    <li class="bullet-link-trigger" id="bullet-link-trigger">
                        <a href="?section=projects">
                            <div class="d-flex align-items-center">
                                <div class="bullet"><img src="public/images/icons/arrow-bullet_green.svg" alt="arrow"></div>
                                <div class="bullet-link"><span class="bullet-link-text-wrapper"><span id="projects" class="bullet-link-letters translate">projects</span></span></div>
                            </div>
                        </a>
                    </li>
                    <li class="bullet-link-trigger" id="bullet-link-1-trigger">
                        <a href="?section=about">
                            <div class="d-flex align-items-center">
                                <div class="bullet"><img src="public/images/icons/arrow-bullet_green.svg" alt="arrow"></div>
                                <div class="bullet-link"><span class="bullet-link-text-wrapper"><span id="about_me" class="bullet-link-1-letters translate">about me</span></span></div>
                            </div>
                        </a>
                    </li>
                    <li class="bullet-link-trigger" id="bullet-link-2-trigger">
                        <a href="?section=contact">
                            <div class="d-flex align-items-center">
                                <div class="bullet"><img src="public/images/icons/arrow-bullet_green.svg" alt="arrow"></div>
                                <div class="bullet-link"><span  class="bullet-link-text-wrapper"><span id="contact_us" class="bullet-link-2-letters translate">get in touch</span></span></div>
                            </div>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Define JavaScript variables with PHP values -->
<script>
let jsBackgroundColor = "<?php echo $backgroundColor; ?>";
let jsBackgroundImage = "<?php echo $backgroundImage; ?>";
let jsParticleColor = "<?php echo $particleColor; ?>";
</script>

<script>
// Load English and French JSON files
let englishText;
let frenchText;

fetch('public/data/text_files/contact_en.json')
  .then(response => response.json())
  .then(data => {
    englishText = data;
    // Once English text is loaded, call updateText to set the initial language
    updateText('en');
    
  });

fetch('public/data/text_files/contact_fr.json')
  .then(response => response.json())
  .then(data => {
    frenchText = data;
    console.log('French text loaded:', frenchText);
  });

  function updateText(language) {
  const text = language === 'en' ? englishText : frenchText;

  // Loop through the keys in the JSON object
  for (const key in text) {
    // Check if an HTML element with the corresponding ID exists
    const element = document.getElementById(key);

    // If the element exists, update its content or attributes
    if (element) {
      // Check if the element has a "value" attribute
      if (element.hasAttribute('value')) {
        element.value = text[key];
      }
      // Check if the element has a "placeholder" attribute
      else if (element.hasAttribute('placeholder')) {
        element.placeholder = text[key];
      }
      // If none of the above, update the text content
      else {
        element.textContent = text[key];
      }
    }
  }
}


// Call updateText with the desired language when needed
// For example, if you want to switch to French, you can call:
// updateText('fr');
</script>