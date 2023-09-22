<!-- Array to store project list data -->

<?php $projects = [
    [
        'id' => 'project-reactology',
        'title' => 'Reactology',
        'year' => '2023',
    ],
    [
        'id' => 'project-javascript',
        'title' => 'JavaScript',
        'year' => '2023',
    ],
    // Add more projects as needed...
]; ?> 

<!-- Loop to generate HTML for each list item, including relevant project data -->

<ul id="project-list">
    <?php foreach ($projects as $project) : ?>
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
