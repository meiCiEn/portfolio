<?php
// Define background and bubble colors based on the page
$backgroundColor = "#f9f3dc";
$backgroundImage = "linear-gradient(160deg, #f9f3dc 0%, #f5ecc6; 100%"; 
$particleColor = "#ffffff";
?>



<div class="page-bg page-bg--offwhite bg--home h-100 d-flex">
    <div id="tsparticles"></div>

    <div class="intro__wrapper">

        <div class="intro__text">
            <div class="intro__text-wrapper">
                <div class="wrapper wrapper--eleanor">
                <?php include_once 'views/titles/home.php'; ?>
                <?php include_once 'views/titles/home_mob.php'; ?>
                </div>

                <p>
                    Front-end web developer & journalist based in Brussels.
                </p>
            </div>
            <div class="intro__links ">
                <ul class="intro__nav">
                    <li class="bullet-link-trigger" id="bullet-link-trigger">
                        <a href="?section=projects">
                            <div class="d-flex align-items-center">
                                <div class="bullet"><img src="public/images/glyphs/arrow-bullet_green.svg" alt="arrow"></div>
                                <div class="bullet-link"><span class="bullet-link-text-wrapper"><span class="bullet-link-letters">projects</span></span></div>
                            </div>
                        </a>
                    </li>
                    <li class="bullet-link-trigger" id="bullet-link-1-trigger">
                        <a href="?section=about">
                            <div class="d-flex align-items-center">
                                <div class="bullet"><img src="public/images/glyphs/arrow-bullet_green.svg" alt="arrow"></div>
                                <div class="bullet-link"><span class="bullet-link-text-wrapper"><span class="bullet-link-1-letters">about me</span></span></div>
                            </div>
                        </a>
                    </li>
                    <li class="bullet-link-trigger" id="bullet-link-2-trigger">
                        <a href="?section=contact">
                            <div class="d-flex align-items-center">
                                <div class="bullet"><img src="public/images/glyphs/arrow-bullet_green.svg" alt="arrow"></div>
                                <div class="bullet-link"><span class="bullet-link-text-wrapper"><span class="bullet-link-2-letters">get in touch</span></span></div>
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