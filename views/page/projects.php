<?php
$pageTitle = "projects";

// Define background and bubble colors based on the page
$backgroundColor = "#f9f3dc"; // Change this colour for each page
$backgroundImage = "linear-gradient(160deg, #f9f3dc 0%, #f5ecc6; 100%)"; // Change this colour for each page
$particleColor = "#ffffff"
?>

<script>
    // retrieve the value of the PHP variables $pageTitle/$pageLang and turn into JS variables
        let pageTitle = 'projects';
</script>


<div class="page-bg page-bg--offwhite">

    <div id="tsparticles"></div>

    <div class="projects d-flex article">
        <div class="projects-left">
        </div>
        <div class="projects-right d-flex">
            <div class="d-flex flex-column">
                <div id="projects-svg" class="wrapper wrapper--projects">
                    <!-- svg added dynamically (see language_toggle.js) -->
                </div>
                <div class="line line--green"></div>
                <!-- LIST OF PROJECTS -->
                <div class="scrollable-list-container">

                    <!-- php for loop to display $projects array in an unordered list -->
                    <ul id="project-list">
                        <?php
                        // get the project data ($projects array stored in a separate php file)

                        include_once 'public/data/project_data.php';

                        foreach ($projects as $project) : ?>
                            <li>
                                <a id="<?php echo $project['id']; ?>" class="projects-link" href="?section=<?php echo $project['id']; ?>">
                                    <div class="projects-row">
                                        <div class="projects-name">
                                            <div class="projects-arrow">
                                                <h4 class="arrow">&#x21d2;</h4>
                                            </div>
                                            <h4 class="projects-title"><?php echo $project['title']; ?></h4>
                                        </div>
                                        <div class="projects-year">
                                            <p><?php echo $project['year']; ?></p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>

                </div>
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

