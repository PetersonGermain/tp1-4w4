<footer>
    <?php $footer_mission = get_theme_mod('footer_mission', 'Default Title'); ?>
    <?php $footer_adresse = get_theme_mod('footer_adresse', 'Default Title'); ?>
    <?php $footer_telephone = get_theme_mod('footer_telephone', 'Default Title'); ?>           

    <div class="piedpage global">
        <section class="piedpage__s1">
            <div class="piedpage__s1__description">
                <h2>Notre mission</h2>
                <?php echo $footer_mission; ?>
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
                    <img src="https://s2.svgbox.net/social.svg?ic=facebook&color=000000" width="20" height="20">
                    <img src="https://s2.svgbox.net/social.svg?ic=linkedin&color=000000" width="20" height="20">
                    <img src="https://s2.svgbox.net/social.svg?ic=paypal&color=000000" width="20" height="20">
                    <img src="https://s2.svgbox.net/social.svg?ic=stackoverflow&color=000000" width="20" height="20">
                </div>
            </div>
        </section>
        <section class="piedpage__s2"></section>
        <section class="piedpage__s3"></section>
    </div>
</footer>
<?php wp_footer() ?>