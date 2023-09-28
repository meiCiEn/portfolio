<?php
// $pageTitle = "menu";

?>

<script>
 <?php echo json_encode($pageTitle); ?>;
</script>

<nav>
    <ul class="overlay__list">
        <a href="?section=home">

            <li class="text-wrapper">
                <h2 id="topMenuItem_home" class="slide-up-text color__slider">--Home--</h2>
            </li>
        </a>
        <a href="?section=projects">
            <li class="text-wrapper">
                <h2 id="topMenuItem_projects" class="color__slider slide-up-text">--Projects--</h2>
            </li>
        </a>
        <a href="?section=about">
            <li class="text-wrapper">
                <h2 id="topMenuItem_about" class="color__slider slide-up-text">--About--</h2>
            </li>
        </a>
        <a href="?section=contact">
            <li class="text-wrapper">
                <h2 id="topMenuItem_contact" class="color__slider slide-up-text">--Contact--</h2>
            </li>
        </a>
    </ul>
</nav>

<script>
    loadPageText('menu', siteLanguage);
</script>