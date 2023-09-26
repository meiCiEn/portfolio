<?php
// Define background and bubble colors based on the page
$backgroundColor = "#e9afcd"; // 
$backgroundImage = "linear-gradient(160deg, #e9afcd 0%, e39cc0 100%)"; 
$particleColor = "#efd7e3";

// Define page name and language
$pageTitle = "contact";
$pageLang = "fr";

?>

<script>
    // retrieve the value of the PHP variables $pageTitle/$pageLang and turn into JS variables
        let pageTitle = <?php echo json_encode($pageTitle); ?>;
        let pageLang = <?php echo json_encode($pageLang); ?>;
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
            <div class="contact__wrapper">
                <div class="contact">
                    <div class="wrapper wrapper--contact">
                    <?php include_once 'views/titles/contact_en.php'; ?>
                    <?php include_once 'views/titles/contact_mob_en.php'; ?>
                    </div>
                    <div class="line line--green"></div>

                    <!-- CONTACT FORM -->
                    <!-- The $_SERVER["PHP_SELF"] is a super global variable that returns the filename of the currently executing script. So, the $_SERVER["PHP_SELF"] sends the submitted form data to the page itself, instead of jumping to a different page. This way, the user will get error messages on the same page as the form. -->
                    <div class="contact__content">
                        <section class="contact__details">
                            <p id="contact_message">Get in touch with me through social media or using the contact form.
                                <!-- Get in touch with me via email, on social media or using the online contact form. -->
                            <p>
                            <ul>
                                <!-- <li>
                                <div class="bullet"><img src="public/images/glyphs/arrow-bullet_green.svg" alt="arrow"></div><a href="mailto:eleanor.mears@gmail.com" target="_blank">email</a>
                            </li> -->

                                <li>
                                    <div class="bullet"><img src="public/images/glyphs/arrow-bullet_green.svg" alt="arrow"></div><a href="https://www.linkedin.com/in/elliemears/" target="_blank">linkedin</a>
                                </li>
                                <li>
                                    <div class="bullet"><img src="public/images/glyphs/arrow-bullet_green.svg" alt="arrow"></div><a href="https://github.com/meiCiEn" target="_blank">github</a>
                                </li>
                            </ul>


                        </section>


                        <section class="contact__form">
                            <div class="form__wrapper">
                                <!-- Launch the validateForm function (form.js) when the user clicks the submit button -->
                                <!-- <form method="POST" id="contact__form" name="contact_form" class="form" action="https://formspree.io/f/xqkoqqdw"
  method="POST">
                                <div class="form__field">
                                    <label for="full-name" class="form__label">Name:</label>
                                    <input type="text" class="form__input" name="full-name" id="full-name" placeholder="e.g. Anna Brown" value="">
                                    <small></small>

                                </div>
                                <div class="form__field">
                                    <label for="email" class="form__label">Email:</label>
                                    <input input type="email" name="email" id="email" class="form__input" placeholder="name@email.com">
                                    <small></small>

                                </div>
                                <div class="form__field">
                                    <label for="message" class="form__label">Message:</label>
                                    <textarea class="form__textarea" name="message" id="message" rows="3" placeholder="What would you like to discuss?"></textarea>
                                    <small></small>

                                </div>
                                <div class="button">
                                    <button type="submit" class="button__body button__body--form">Submit</button>
                                
                                </div>
                            </form> -->
                                <form id="fs-frm" name="simple-contact-form" accept-charset="utf-8" action="https://formspree.io/f/xqkoqqdw" method="post">
                                    <fieldset id="fs-frm-inputs">
                                        <label for="full-name" id="label_full_name" class="form__label">Full Name</label>
                                        <input type="text" name="name" id="full-name" required="">
                                        <label for="email-address" id="label_email_address">Email Address</label>
                                        <input type="email" name="_replyto" id="email-address"required="">
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


