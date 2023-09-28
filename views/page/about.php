<?php
$pageTitle = "about"; ?>

<?php
// Define background and bubble colors based on the page
$backgroundColor = "#265e5d";
$backgroundImage = "linear-gradient(160deg, #265e5d 0%, #1e4848 100%)";
$particleColor = "#678b8b";

?>

<script>
    // retrieve the value of the PHP variables $pageTitle/$pageLang and turn into JS variables
    let pageTitle = <?php echo json_encode($pageTitle); ?>;
</script>

<div class="page-bg page-bg--forestgreen d-flex justify-end">
    <div id="tsparticles"></div>
    <nav class="breadcrumb" aria-label="Breadcrumb">
        <ul class="breadcrumb__list">
            <li class="breadcrumb__item"><a id="breadcrumb_home" class="breadcrumb__link" href="?section=home">Home</a></li>
            <li class="breadcrumb__item"><a id="breadcrumb_current" class="breadcrumb__link" href="?section=about" aria-current="location">About</a></li>
        </ul>
    </nav>
    <div class="d-flex justify-center">
        <!-- breadcrumb -->

        <a class="back back--about" href="?section=home"><svg id="back" class="back" xmlns="http://www.w3.org/2000/svg" width="50.06" height="50" viewBox="0 0 50.06 50">
                <g id="About_offwhite">
                    <path d="M50.06,25c0,14.28-10.75,25-25.03,25S0,39.28,0,25,10.78,0,25.03,0s25.03,10.75,25.03,25Zm-25,23.09c13.02,0,22.89-9.97,22.89-23.09S38.08,1.94,25.06,1.94,2.1,11.88,2.1,25s9.91,23.09,22.96,23.09Zm-2.98-38.86h2.75l-13.21,13.21c-.58,.58-.29,1.1,.42,1.1h31.8v2.14H12.05c-.71,0-.97,.52-.42,1.1l13.18,13.28h-2.75L6.61,24.61l15.48-15.38Z" />
                </g>
            </svg></a>
        <div class="about__wrapper">
            <div class="wrapper wrapper--about">
                <?php include_once 'views/titles/about_fr.php'; ?>
            </div>
            <div class="line line--light line--mb"></div>
            <div class="about slide-page-up">
                <!-- portrait -->
                <div class="about__left">
                    <!-- <div class="about__image scale-from-center">
                <img src="public/images/photos/Eleanor.jpg" class="portrait scale-in-center" alt="" />
            </div> -->
                    <!-- SKILLS TABS -->


                    <!-- Tab links -->
                    <section class="skills__container">
                        <div>
                            <h3 id="about_title_skills" class="uppercase skills__title">Skills</h3>
                            <!-- <img class="click-me_en" src="public/images/glyphs/click_me_en.svg" alt="click me"> -->
                            <img class="click-me_fr" src="public/images/glyphs/click_me_fr.svg" alt="click me">
                        </div>
                        <div class="skills">
                            <div id="tab" class="tab tab--light bottom-rounded">
                                <button id="about_coding" class="tablinks" onclick="openSkills(event, 'Coding')">Coding</button>
                                <button id="about_design" class="tablinks" onclick="openSkills(event, 'Design')">Design</button>
                                <button id="about_languages" class="tablinks" onclick="openSkills(event, 'Languages')">Languages</button>
                            </div>


                            <!-- Tab content -->
                            <div class="skills__wrapper">
                                <div id="Coding" class="tabcontent">
                                    <div class="skills__group">
                                        <div class="skill skill--light">HTML</div>
                                        <div class="skill skill--light">CSS</div>
                                        <div class="skill skill--light">Sass</div>
                                        <div class="skill skill--light">Bootstrap</div>
                                        <div class="skill skill--light">Tailwind</div>
                                        <div class="skill skill--light">JavaScript</div>
                                        <div class="skill skill--light">React</div>
                                        <div class="skill skill--light">JQuery</div>
                                        <div class="skill skill--light">Node.js</div>
                                        <div class="skill skill--light">Git</div>
                                        <div class="skill skill--light">PHP</div>
                                        <div class="skill skill--light">MySQL</div>
                                        <div class="skill skill--light">WordPress</div>
                                        <div class="skill skill--light">Elementor</div>
                                        <div class="skill skill--light">Webflow</div>
                                    </div>
                                    <div class="reset__wrapper"><button class="reset" type="button" id="reset1">x</button></div>
                                </div>
                            </div>

                            <div class="skills__wrapper">
                                <div id="Design" class="tabcontent">
                                    <div class="skills__group">
                                        <div class="skill skill--light">Final Cut Pro</div>
                                        <div class="skill skill--light">Adobe XD</div>
                                        <div class="skill skill--light">Illustrator</div>
                                        <div class="skill skill--light">Photoshop</div>
                                        <div class="skill skill--light">Animate</div>
                                        <div class="skill skill--light">After Effects</div>
                                        <div class="skill skill--light">Audition</div>
                                    </div>
                                    <div class="reset__wrapper"><button class="reset" type="button">x</button></div>
                                </div>
                            </div>

                            <div class="skills__wrapper">
                                <div id="Languages" class="tabcontent">
                                    <div class="skills__group">
                                        <div id="about_english" class="skill skill--light">English (native)</div>
                                        <div id="about_french" class="skill skill--light">French (B2)</div>
                                        <div id="about_german" class="skill skill--light">German (B2)</div>
                                        <div id="about_mandarin" class="skill skill--light">Mandarin (B1)</div>
                                        <div id="about_dutch" class="skill skill--light">Dutch (A2)</div>
                                    </div>
                                    <div class="reset__wrapper"><button class="reset" type="button">x</button></div>
                                </div>
                            </div>
                        </div>

                    </section>
                    <section>
                        <div>
                            <h3 id="about_title_background" class="uppercase">Background</h3>
                        </div>
                        <div>
                            <p id="about_p2">
                                Born in Kent, the “Garden of England”, I studied German and English Literature at Oxford University, before working in media and journalism in the UK, Taiwan and Belgium. I live in central Brussels and enjoy singing, long walks, sourdough bread and Studio Ghibli films.
                            </p>

                        </div>
                    </section>


                </div>
                <!-- about text -->
                <div class="about__right">

                    <section>
                        <p id="about_lead" class="lead">
                            As an aspiring web developer from the world of journalism, my goal is to create visually-appealing websites with accessibility and user experience at the forefront of each design.
                        </p>
                        <p id="about_p1">
                            A trained journalist with experience at The Guardian, BBC, Deutsche Welle and Politico, I embarked on a full-time intensive web development course (Interface3) in 2021 in order to hone skills with a view to pursuing frontend development professionally.

                            I am fascinated by high-quality web design that is both eye-catching and functional, and I love the process of developing visual ideas towards a harmonious whole.

                            With my background in journalism, I am also keen to explore the intersection of news, data and visual representation in the burgeoning field of data-journalism.
                        </p>
                    </section>

                </div>
            </div>
            <div class=button style="
    z-index: 1;">
                <a id="about_download_button" class="button__body button__body--light" href="public/images/docs/CV_Eleanor_Mears_en.pdf" download="Eleanor-Mears_CV" role="button">Download my CV</a>
            </div>
        </div>
    </div>

</div>

<script>
    let jsBackgroundColor = "<?php echo $backgroundColor; ?>";
    let jsBackgroundImage = "<?php echo $backgroundImage; ?>";
    let jsParticleColor = "<?php echo $particleColor; ?>";
</script>

