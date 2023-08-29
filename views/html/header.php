<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo $pageTitle; ?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Adobe fonts -->
    <link rel="stylesheet" href="https://use.typekit.net/fjj4tfz.css" />
    <!-- CSS -->
    <!-- <link rel="stylesheet" href="public/styles/css/fonts.css" /> -->
    <link rel="stylesheet" href="public/styles/css/main.css" />

    <script src="https://kit.fontawesome.com/f64cbb42a1.js" crossorigin="anonymous" defer></script>
    <!-- <script src="gen_validatorv4.js" type="text/javascript"></script> -->
</head>

<body>
    <header class="header">
        <div class="header__content">
            <div class="header__left">
                <a href="?section=home">
                    <div class="header__logo"><img src="./public/images/logos/EM-logo-semicolon-white.svg" alt="logo"></div>
                </a>
            </div>
            <div class="header__right">
                <ul>
                    <!-- <li>
                        <a href="/fr/">FR</a>
                    </li>
                    <li>
                        
                        <a href="#"><i class="fa-regular fa-moon"></i></a>
                    </li> -->
                    <div class="menu">
                        <!-- hamburger icon -->
                        <label class="menu__label" for="menu__checkbox">
                            <li>

                                <!-- hamburger menu -->
                                <div class="menu__burger">
                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                </div>
                            </li>
                        </label>
                        <input type="checkbox" name="menu__checkbox" id="menu__checkbox" class="menu__checkbox" autocomplete="off">

                    </div>
                </ul>
            </div>
        </div>
    </header>
    <main>
        <div class="page__frame">

            <div class="page__content">
                <div class="overlay overlay--slidedown page-bg--forestgreen">
                    <button type="button" class="overlay__close">
                        <svg id="x" xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewBox="0 0 200 200">
                            <g id="logo-white">
                                <path d="M100.54,82.95c4.34,0,6.33-2.73,7.41-4.23L163.11,0h36.89l-62.75,88.13c-2.35,3.27-2.89,5.59-2.89,7.91,0,2.59,.72,5.05,2.71,8.46l62.93,95.5h-36.89l-55.15-84.58c-1.09-1.91-3.44-5.05-7.59-5.05s-6.51,3.14-7.78,5.05l-55.7,84.58H0L62.75,104.5c2.35-3.41,3.26-5.87,3.26-8.46,0-2.46-.9-4.78-3.07-7.91L0,0H36.89l56.24,78.45c1.27,1.77,3.44,4.5,7.41,4.5Z" />
                            </g>
                        </svg>
                    </button>



                    <div class="overlay__menu">
                        <nav>
                            <ul class="overlay__list">
                                <a  href="?section=home">

                                    <li class="text-wrapper">
                                            <h2 class="slide-up-text color__slider">Home</h2>
                                    </li>
                                </a>
                                <a href="?section=projects">
                                    <li class="text-wrapper">
                                        <h2 class="color__slider slide-up-text">Projects</h2>
                                    </li>
                                </a>
                                <a href="?section=about">
                                    <li class="text-wrapper">
                                        <h2 class="color__slider slide-up-text">About</h2>
                                    </li>
                                </a>
                                <a href="?section=contact">
                                    <li class="text-wrapper">
                                        <h2 class="color__slider slide-up-text">Get in touch</h2>
                                    </li>
                                </a>
                            </ul>
                        </nav>
                    </div>

                </div>
                