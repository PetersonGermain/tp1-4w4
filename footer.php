<?php $footer_mission = get_theme_mod('footer_mission', 'Default Title'); ?>
<?php $footer_adresse = get_theme_mod('footer_adresse', 'Default Title'); ?>
<?php $footer_telephone = get_theme_mod('footer_telephone', 'Default Title'); ?>
<?php $footer_couleur = get_theme_mod('footer_couleur', 'Default Title'); ?> 
<?php $svg_icone_url = get_theme_mod('footer_svg_icone_url'); ?>
<?php $svg_icone_url2 = get_theme_mod('footer_svg_icone_url2'); ?>
<?php $svg_icone_url3 = get_theme_mod('footer_svg_icone_url3'); ?>
<?php $svg_icone_url4 = get_theme_mod('footer_svg_icone_url4'); ?>

<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="<?php echo $footer_couleur = get_theme_mod('footer_couleur', 'Default Title'); ?> " fill-opacity="1" d="M0,320L10.9,309.3C21.8,299,44,277,65,240C87.3,203,109,149,131,133.3C152.7,117,175,139,196,138.7C218.2,139,240,117,262,144C283.6,171,305,245,327,234.7C349.1,224,371,128,393,106.7C414.5,85,436,139,458,181.3C480,224,502,256,524,229.3C545.5,203,567,117,589,112C610.9,107,633,181,655,192C676.4,203,698,149,720,149.3C741.8,149,764,203,785,229.3C807.3,256,829,256,851,240C872.7,224,895,192,916,186.7C938.2,181,960,203,982,202.7C1003.6,203,1025,181,1047,160C1069.1,139,1091,117,1113,122.7C1134.5,128,1156,160,1178,176C1200,192,1222,192,1244,197.3C1265.5,203,1287,213,1309,224C1330.9,235,1353,245,1375,213.3C1396.4,181,1418,107,1429,69.3L1440,32L1440,320L1429.1,320C1418.2,320,1396,320,1375,320C1352.7,320,1331,320,1309,320C1287.3,320,1265,320,1244,320C1221.8,320,1200,320,1178,320C1156.4,320,1135,320,1113,320C1090.9,320,1069,320,1047,320C1025.5,320,1004,320,982,320C960,320,938,320,916,320C894.5,320,873,320,851,320C829.1,320,807,320,785,320C763.6,320,742,320,720,320C698.2,320,676,320,655,320C632.7,320,611,320,589,320C567.3,320,545,320,524,320C501.8,320,480,320,458,320C436.4,320,415,320,393,320C370.9,320,349,320,327,320C305.5,320,284,320,262,320C240,320,218,320,196,320C174.5,320,153,320,131,320C109.1,320,87,320,65,320C43.6,320,22,320,11,320L0,320Z"></path></svg>

<footer style="background-color: <?php echo $footer_couleur = get_theme_mod('footer_couleur', 'Default Title'); ?>   ;">
     <div class="piedpage global">
        <section class="piedpage__s1">
            <div class="piedpage__s1__description">
                <h2>Notre mission</h2>
                <?php echo $footer_mission; ?>
                <a href=""></a>
            </div>
            <div class="piedpage__s1__liens">
                <h2>Lien sur les voyages</h2>
                    <?php wp_nav_menu(array(
                        "menu" => "externe",
                        "container" => "nav",
                        "container_class" => "piedpage__s1__externe"
                    )); ?>
            </div>
            <div class="piedpage__s1__adresse">
                <div class="piedpage__s1__adresse__coord">
                    <h2>Adresse et Recherche</h2>
                        <p> <?php echo $footer_adresse = get_theme_mod('footer_adresse', 'Default Title'); ?>  </p>
                        <p>Tel : <?php echo $footer_telephone = get_theme_mod('footer_telephone', 'Default Title'); ?>  </p>
                </div>
                <div class="piedpage__s1__adresse__recherche">
                    <?php get_search_form();   ?>
                </div>
                <div class="piedpage__s1__icone-app">
                    <?php if ($svg_icone_url): ?> 
                        <a href= "https://www.facebook.com/maisonneuvetim">
                            <img src="<?php echo esc_url($svg_icone_url); ?>" alt="Icône footer" class="footer-icon"/>
                        </a>
                    <?php endif; ?>

                    <?php if ($svg_icone_url2): ?> 
                        <a href= "https://www.linkedin.com/in/tim-coll%C3%A8ge-de-maisonneuve-9407b7131/?locale=fr_FR">
                            <img src="<?php echo esc_url($svg_icone_url2); ?>" alt="Icône footer" class="footer-icon"/>
                        </a>
                    <?php endif; ?>

                    <?php if ($svg_icone_url3): ?> 
                        <a href= "https://www.instagram.com/maisonneuvetim/">
                            <img src="<?php echo esc_url($svg_icone_url3); ?>" alt="Icône footer" class="footer-icon"/>
                        </a>
                    <?php endif; ?>
                    
                    <?php if ($svg_icone_url4): ?> 
                        <a href= "https://github.com/PetersonGermain/tp1-4w4/tree/tp2">
                            <img src="<?php echo esc_url($svg_icone_url4); ?>" alt="Icône footer" class="footer-icon"/>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </section>
        <section class="piedpage__s2">
            <div class="piedpage__s2__nav">
                <?php wp_nav_menu(array(
                    'menu' => 'principal',
                    'container' => 'nav',
                    'container_class' => 'entete__menu',
                )); ?>
            </div>
        </section>
        <section class="piedpage__s3"></section>
    </div>
</footer>
<?php wp_footer() ?>