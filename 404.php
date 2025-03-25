<?php
/** 
 * modèle 404.php permet d'afficher la page d'erreur
 * 
*/
?>
<?php $erreur_description = get_theme_mod("erreur_description", "Default Title");?> 

<?php get_header() ?>

<section class="erreur">
  <h1>404.php</h1>
  <h1 class="erreur__titre">Erreur 404</h1>
  <p><?php echo $erreur_description = get_theme_mod("erreur_description", "Default Title");?> </p>
  <?php get_template_part( 'gabarit/icones' ); ?>
</section>

<?php get_footer(); ?>