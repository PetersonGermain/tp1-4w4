<footer>
    <?php $footer_mission = get_theme_mod('footer_mission', 'Default Title'); ?>        

    <div class="piedpage global">
        <section class="piedpage__s1">
            <h2>Lien sur les voyages</h2>
                <?php wp_nav_menu(array(
                    "menu" => "externe",
                    "container" => "nav",
                    "container_class" => "piedpage__s1__externe"
                )); ?>
            <div class="piedpage__s1__adresse">
                <div class="piedpage__s1__adresse__coord">
                    <h2>Adresse et Recherche</h2>
                        <p>3800, Sherbrooke est, Montréal, Québec, Canada, H1X 2A2</p>
                        <p>Tel: (514) 254-7131</p>
                </div>
                <div class="piedpage__s1__adresse__recherche">
                    <?php get_search_form();   ?>
                </div>
            </div>
            <div class="piedpage__s1__description">
                <h2>Notre mission</h2>
                    <!-- <p>Offrir à nos clients des expériences de voyage uniques et inoubliables en leur proposant des services de qualité, adaptés à leurs besoins et à leurs envies, tout en garantissant un excellent rapport qualité-prix</p> -->
                    <?php echo $footer_mission; ?>
            </div>
        </section>
        <section class="piedpage__s2"></section>
        <section class="piedpage__s3"></section>
    </div>
</footer>
<?php wp_footer() ?>