<div class="project page-bg page-bg--lightpink">
    <nav class="breadcrumb breadcrumb--project" aria-label="breadcrumb">
        <ul class="breadcrumb__list">
            <li class="breadcrumb__item"><a class="breadcrumb__link" href="?section=home">Home</a></li>
            <li class="breadcrumb__item"><a class="breadcrumb__link" href="?section=projects">Projects</a></li>
            <li class="breadcrumb__item"><a class="breadcrumb__link" href="?section={---SECTION_URL---}" aria-current="location">{---PROJECT_TITLE---}</a></li>
        </ul>
    </nav>
    <article id="{---PROJECT_TITLE---}">
        <div class="project__backdrop slide-page-up">
            <header class="project__header text-wrapper">
                <h2 class="project__title slide-up-text">
                    {---PROJECT_TITLE---}
                </h2>
            </header>
        </div>
        <div class="project__info">
            <section class="project__summary">
                <p class="project__lead lead slide-up-text-1">
                    {---PROJECT_LEAD---}
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
                                <td>{---PROJECT_TYPE---}</td>
                            </tr>
                            <tr>
                                <td class="table__heading">
                                    Year
                                </td>
                                <td>{---PROJECT_YEAR---}</td>
                            </tr>
                            <tr>
                                <td class="table__heading">
                                    Tech
                                </td>
                                <td>
                                    {---PROJECT_TECH---}
                                </td>
                            </tr>
                            <tr>
                                <td class="table__heading">
                                    Team
                                </td>
                                <td>{---PROJECT_TEAM---}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="project-overview__right">
                    <div class="project-overview__description">
                        <p>
                            {---PROJECT DESCRIPTION---}</p>
                    </div>

                    <a href="{---PROJECT_URL---}" target="_blank" rel="noopener noreferrer" class="d-flex">→ go to site</a>
                </div>
            </section>
        </div>
    </article>
</div>