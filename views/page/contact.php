<?php
$pageTitle = "contact";

// Define background and bubble colors based on the page
$backgroundColor = "#e9afcd"; // 
$backgroundImage = "linear-gradient(160deg, #e9afcd 0%, e39cc0 100%)";
$particleColor = "#efd7e3";


?>

<script>
    // retrieve the value of the PHP variables $pageTitle/$pageLang and turn into JS variables
    let pageTitle = <?php echo json_encode($pageTitle); ?>;
</script>

<div class="page-bg page-bg--pink forestgreen">
    <div id="tsparticles"></div>
    <div class="slide-page-up d-flex">
        <div class="breadcrumb__wrapper breadcrumb__wrapper--contact">
            <!-- breadcrumb -->
            <nav class="breadcrumb" aria-label="Breadcrumb">
                <ul class="breadcrumb__list">
                    <li class="breadcrumb__item"><a class="breadcrumb__link" id="breadcrumb_home" href="?section=home">Home</a></li>
                    <li class="breadcrumb__item"><a class="breadcrumb__link" id="breadcrumb_current" href="?section=contact" aria-current="location">Contact</a></li>
                </ul>
            </nav>
            <!-- <a class="back back--contact" href="?section=home"> -->
            <svg id="back" class="back" xmlns="http://www.w3.org/2000/svg" width="50.06" height="50" viewBox="0 0 50.06 50">
                <g id="About_offwhite">
                    <path d="M50.06,25c0,14.28-10.75,25-25.03,25S0,39.28,0,25,10.78,0,25.03,0s25.03,10.75,25.03,25Zm-25,23.09c13.02,0,22.89-9.97,22.89-23.09S38.08,1.94,25.06,1.94,2.1,11.88,2.1,25s9.91,23.09,22.96,23.09Zm-2.98-38.86h2.75l-13.21,13.21c-.58,.58-.29,1.1,.42,1.1h31.8v2.14H12.05c-.71,0-.97,.52-.42,1.1l13.18,13.28h-2.75L6.61,24.61l15.48-15.38Z" />
                </g>
            </svg></a>
            <!-- col-md-8 col-11 d-flex flex-column -->
            <div class="contact__wrapper article">
                <div class="contact">
                    <div class="wrapper wrapper--contact">
                        <div id="contact-svg" class="wrapper">
                            <!-- svg added dynamically (see language_toggle.js) -->
                        </div>
                    </div>
                    <div class="line line--green"></div>

                    <!-- CONTACT FORM -->
                    <!-- The $_SERVER["PHP_SELF"] is a super global variable that returns the filename of the currently executing script. So, the $_SERVER["PHP_SELF"] sends the submitted form data to the page itself, instead of jumping to a different page. This way, the user will get error messages on the same page as the form. -->
                    <div class="contact__content">
                        <section class="contact__details">
                            <p id="contact_message">Get in touch with me through social media or using the contact form.
                            <p>
                            <ul>

                                <li>
                                    <div class="bullet"><img src="public/images/icons/arrow-bullet_green.svg" alt="arrow"></div><a href="https://www.linkedin.com/in/elliemears/" target="_blank">linkedin</a>
                                </li>
                                <li>
                                    <div class="bullet"><img src="public/images/icons/arrow-bullet_green.svg" alt="arrow"></div><a href="https://github.com/meiCiEn" target="_blank">github</a>
                                </li>
                            </ul>

                        </section>


                        <section class="contact__form">
                            <div class="form__wrapper">
                                <form id="contact-form" name="simple-contact-form" method="post" action="helpers/process_form.php">
                                <fieldset id="form-inputs">
                                        <label for="full-name" id="label_full_name" class="form__label">Full Name</label>
                                        <input type="text" name="name" id="full-name" required="">
                                        <label for="email-address" id="label_email_address">Email Address</label>
                                        <input type="email" name="_replyto" id="email-address" required="">
                                        <label for="message" id="label_message">Message</label>
                                        <textarea rows="5" name="message" id="message" required=""></textarea>
                                        <input type="hidden" name="_subject" id="email-subject" value="Contact Form Submission">
                                    </fieldset>
                                    <input id="submit_button" class="button__body button__body--form" type="submit" value="Submit">
                                </form>
                            </div>

                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Define JavaScript variables with PHP values -->
<script>
    // for page background
    let jsBackgroundColor = "<?php echo $backgroundColor; ?>";
    let jsBackgroundImage = "<?php echo $backgroundImage; ?>";
    let jsParticleColor = "<?php echo $particleColor; ?>";
</script>

<script>
    const form = document.getElementById("contact-form");
    console.log('form: ', form)

form.addEventListener("submit", function (event) {
   const name = form.elements["name"].value;
   const email = form.elements["_replyto"].value;
   const message = form.elements["message"].value;

   console.log(name, email, message);

   if (!name || !email || !message) {
      alert("Please fill out all required fields.");
      event.preventDefault(); // Prevent form submission
   }
});

</script>