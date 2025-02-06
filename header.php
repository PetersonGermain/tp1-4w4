<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mondo Voyages</title>
    <!-- link rel="stylesheet" href="normalize.css" -->
    <!-- link rel="stylesheet" href="style.css" -->
    <?php wp_head(); ?> 
</head>
<body>
    <header>
        <div class="entete">
            <figure class="entete__logo">
                <img src="images/logo.png" alt="logo voyage" width="100" height="100">
            </figure>
            <label for="chk__burger" class="burger">
                <div>
                    <!-- <img src="https://s2.svgbox.net/hero-outline.svg?ic=menu&color=000" width="32" height="32"> -->
                    <img src="<?php echo get_template_directory_uri() . '/images/logo.png' ?>" alt="logo voyage">
                </div>
            </label>
            <input type="checkbox" id="chk__burger" class="chk__burger">
            <div class="entete__nav">
                <nav class="entete__menu">
                    <ul class="menu">
                        <li class="menu__li">
                            <a class="menu__a" href="#">SPORT</a>
                        </li>
                        <li class="menu__li">
                            <a class="menu__a" href="#">PLEINE NATURE</a>
                        </li>
                        <li class="menu__li">
                            <a class="menu__a" href="#">CROISIÈRE</a>
                        </li>
                        <li class="menu__li">
                            <a class="menu__a" href="#">AVENTURE</a>
                        </li>
                        <li class="menu__li">
                            <a class="menu__a"  href="#">CULTUREL</a>
                        </li>
                        <li class="menu__li">
                            <a class="menu__a"  href="#">REPOS</a>
                        </li>
                        <li class="menu__li">
                            <a  class="menu__a" href="#">ZEN</a>
                        </li>
                        <li class="menu__li">
                            <a  class="menu__a" href="#">ÉCONOMIQUE</a>
                        </li>                        
                        <li class="menu__li">
                            <a  class="menu__a" href="#">FAVORIS</a>
                        </li>                        
                        <li class="menu__li">
                            <a  class="menu__a" href="#">PAYS</a>
                        </li>
                    </ul>
                </nav>
                <div class="entete__recherche">
                    <form action="" class="recherche">
                        <input type="text" class="recherche__input" placeholder="Recherche..." >
                        <i class="recherche__loupe">&#x1F50D;</i>
                        <!-- <img src="https://s2.svgbox.net/hero-outline.svg?ic=search&color=000" width="20" height="20"> -->
                    </form>
                </div>
            </div>
        </div>
    </header>