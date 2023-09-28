<?php
// Define background and bubble colors based on the page
$backgroundColor = "#fbeff5"; // Change this colour for each page
$backgroundImage = "linear-gradient(160deg, #fbeff5 0%, #f4d7e6 100%)"; // Change this colour for each page
$particleColor = "#ffffff";

?>


<script>
    // retrieve the value of the PHP variables $pageTitle/$pageLang and turn into JS variables
    let pageTitle = <?php
                    echo json_encode($pageTitle);
                    ?>;

    console.log('Page Title:', pageTitle);
</script>

<div class="project page-bg page-bg--lightpink">
    <div id="tsparticles"></div>
    <nav class="breadcrumb breadcrumb--project" aria-label="breadcrumb" style="
    z-index: 2;
">
        <ul class="breadcrumb__list">
            <li class="breadcrumb__item"><a id="breadcrumbHome" class="breadcrumb__link translate" href="?section=home">--breadcrumbHome--</a></li>
            <li class="breadcrumb__item"><a id="breadcrumbProjects" class="breadcrumb__link translate" href="?section=projects">--breadcrumbProjects--</a></li>
            <li class="breadcrumb__item"><a id="breadcrumbCurrent" class="breadcrumb__link translate" href="?section=<?php echo $pagePath; ?>" aria-current="location">--breadcrumbCurrent--</a></li>
        </ul>
    </nav>
    <article id="<?php echo $pageTitle; ?>" class="d-flex flex-column align-items-center" style="z-index: 1;">
        <div class="project__backdrop slide-page-down">
            <header class="project__header text-wrapper">
                <h2 class="project__title slide-up-text ">
                    <span id="projectTitle" class="translate">--projectTitle--</span>
                </h2>
            </header>
        </div>
        <div class="project__info">
            <section class="project__summary">
                <p id="projectLead" class="project__lead lead slide-up-text-1 translate">
                    --projectLead--
                </p>
            </section>
            <section class="project__overview">
                <div class="project-overview__left">
                    <table class="project-overview__table table">
                        <tbody>
                            <tr>
                                <td class="table__heading">
                                    Type
                                </td>
                                <td>
                                    <span id="projectType" class="translate">--projectType--</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="table__heading">
                                    <span id="year" class="translate">--year--</span>
                                </td>
                                <td><?php echo $projectYear; ?></td>
                            </tr>
                            <tr>
                                <td class="table__heading">
                                    Tech
                                </td>
                                <td>
                                <?php echo $projectTech; ?>
                                </td>
                            </tr>
                            <!-- Only display this row if $projectTeam exists and contains a value -->
                            <?php if (isset($projectTeam) && !empty($projectTeam)) : ?>
                                <tr>
                                    <td class="table__heading">
                                        Team
                                    </td>
                                    <td>
                                        <span id="projectTeam" class="translate"><?php echo $projectTeam; ?>-</span>
                                    </td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
                <div class="project-overview__right">
                    <div class="project-overview__description">
                        <p id="projectDescription" class="translate">
                            --projectDescription--</p>
                    </div>

                    <?php if (isset($projectURL) && !empty($projectURL)) : ?>
                        <div class="project__sitelink"><a href="<?php echo $projectURL; ?>" target="_blank" rel="noopener noreferrer" class="d-flex">
                                <span id="goToSite" class="translate">--goToSite--</span></a></div>

                    <?php endif; ?>
                </div>
            </section>
            <section class="screenshots">
                <!-- row -->
                <!-- Only display the following if $screenShot_1 and $screenShotTitle_1 exist, AND if they do not contain empty values -->
                <?php if (isset($screenShot_1) && !empty($screenShot_1)) : ?>
                    <div class="screenshot">
                        <h5 class="screenshot__title"><span id="screenShotTitle_1">--screenShotTitle_1--</span></h5>
                        <img class="screenshot__img" src="<?php echo $screenShot_1; ?>" alt="screenshot">
                    </div>
                <?php endif; ?>
                <!-- end row -->

                <!-- row -->
                <?php if (isset($screenShot_2) && !empty($screenShot_2)) : ?>
                    <div class="screenshot">
                        <h5 class="screenshot__title"><span id="screenShotTitle_2">--screenShotTitle_2--</span></h5>
                        <img class="screenshot__img" src="<?php echo $screenShot_2; ?>" alt="screenshot">
                    </div>
                <?php endif; ?>
                <!-- end row -->
                <!-- end row -->

                <!-- row -->
                <?php if (isset($screenShot_3) && !empty($screenShot_3)) : ?>
                    <div class="screenshot">
                        <h5 class="screenshot__title"><span id="screenShotTitle_3">--screenShotTitle_3--</span></h5>
                        <img class="screenshot__img" src="<?php echo $screenShot_3; ?>" alt="screenshot">
                    </div>
                <?php endif; ?>
                <!-- end row -->

                <!-- row -->
                <?php if (isset($screenShot_4) && !empty($screenShot_4)) : ?>
                    <div class="screenshot">
                        <h5 class="screenshot__title"><span id="screenShotTitle_4">--screenShotTitle_4--</span></h5>
                        <img class="screenshot__img" src="<?php echo $screenShot_4; ?>" alt="screenshot">
                    </div>
                <?php endif; ?>
                <!-- end row -->


                <!-- row -->
                <?php if (isset($screenShot_5) && !empty($screenShot_5)) : ?>
                    <div class="screenshot">
                        <h5 class="screenshot__title"><span id="screenShotTitle_5">--screenShotTitle_5--</span></h5>
                        <img class="screenshot__img" src="<?php echo $screenShot_5; ?>" alt="screenshot">
                    </div>
                <?php endif; ?>
                <!-- end row -->

                <!-- row -->
                <?php if (isset($screenShotMobile) && !empty($screenShotMobile)) : ?>
                    <div class="screenshot">
                        <h5 class="screenshot__title">Mobile</h5>
                        <img class="screenshot__img" src="<?php echo $screenShotMobile; ?>" alt="screenshot">
                    </div>
                <?php endif; ?>
                <!-- end row -->

            </section>
            <?php if (isset($nextProjectURL) && isset($nextProjectTitle) && !empty($nextProjectURL) && !empty($nextProjectTitle)) : ?>
                <section class="next">
                    <div class="next__wrapper">
                        <p class="rader next__arrow">&#x21d2;&nbsp;</p>
                    </div>
                    <p class="next__text"><a href="<?php echo $nextProjectURL; ?>"><span id="next" class="translate">--next--</span><span><?php echo $nextProjectTitle; ?></span></a></p>
                </section>
            <?php endif; ?>

        </div>
    </article>
</div>

<script>
    let jsBackgroundColor = "<?php echo $backgroundColor; ?>";
    let jsBackgroundImage = "<?php echo $backgroundImage; ?>";
    let jsParticleColor = "<?php echo $particleColor; ?>";
</script>


<!-- <script>
    loadPageText('menu', siteLanguage);
</script> -->