<?php
/** 
 * modèle front-page.php permet d'afficher la page d'accueil
 * 
*/
?>

<?php get_header() ?>
<h1>front-page.php</h1>
<?php get_template_part( 'gabarit/hero' ); ?>
    <section class="galerie">
        <figure class="galerie__fig">
            <img src="" alt="">
        </figure>
    </section>
 
    <section class="populaire">
        <div class="boiteflex global">
        <?php if (have_posts()) : while (have_posts()) : the_post(); 
            if (in_category("galerie"))  {
                the_content() ;
            } else {    ?>
                    <?php get_template_part( 'gabarit/carte' ); ?>
                        <?php } ?>
                        <?php endwhile; endif; ?>
        </div>
    </section>
    <?php get_footer(); ?>
</body>
</html>