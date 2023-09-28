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

    <div class="projects d-flex">
        <div class="projects__left">
            <div id="project__image" class="project__image">
                <img id="project-molenbeek-img" src="public/images/thumbnails/molenbeek.png" alt="screenshot of Molenbeek en Promenade" style="display: none;">
                <img id="project-ecologie-img" src="public/images/thumbnails/ecologie.png" alt="Project 2 Image" style="display: none;">
                <img id="project-bwt-img" src="public/images/thumbnails/bwt.png" alt="Project 3 Image" style="display: none;">
                <img id="project-boulangerie-img" src="public/images/thumbnails/boulangerie.png" alt="Project 4 Image" style="display: none;">
                <!-- Add images for other projects here -->
            </div>
            <div class="project__description">
                <!-- <p>Here's a little info about the project.</p> -->
            </div>
        </div>
        <div class="projects__right d-flex">
            <div class="d-flex flex-column">
                <div class="wrapper wrapper--projects">
                    <?php include_once 'views/titles/projects_fr.php'; ?>
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
                                <a id="<?php echo $project['id']; ?>" class="projects__link" href="?section=<?php echo $project['id']; ?>">
                                    <div class="projects__row">
                                        <div class="projects__name cursive">
                                            <div class="projects__arrow">
                                                <h4 class="arrow">&#x21d2;</h4>
                                            </div>
                                            <h4 class="projects__title"><?php echo $project['title']; ?></h4>
                                        </div>
                                        <div class="projects__year">
                                            <p class="projects-year"><?php echo $project['year']; ?></p>
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



<!-- <script>
    // Get references to project links and project images by ID
    const projectLinks = {
        'project-molenbeek-link': 'project-molenbeek-img',
        'project-ecologie-link': 'project-ecologie-img',
        'project-bwt-link': 'project-bwt-img',
        'project-boulangerie-link': 'project-boulangerie-img',
        // Add more link-image pairs here
    };

    // Add hover event listeners to project links
    for (const linkId in projectLinks) {
        const link = document.getElementById(linkId);
        const imageId = projectLinks[linkId];
        const image = document.getElementById(imageId);

        if (link && image) {
            link.addEventListener('mouseenter', () => {
                // Hide all images
                for (const imgId in projectLinks) {
                    const img = document.getElementById(projectLinks[imgId]);
                    if (img) {
                        img.style.display = 'none';
                    }
                }

                // Show the image corresponding to the hovered project
                image.style.display = 'block';
            });

            link.addEventListener('mouseleave', () => {
                // Hide the image when the mouse leaves the project link
                image.style.display = 'none';
            });
        }
    }
</script> -->