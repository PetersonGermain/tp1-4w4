<?php
/** 
 * modèle 404.php permet d'afficher la page d'erreur
 * 
*/
?>
<?php $erreur_description = get_theme_mod("erreur_description", "Default Title");?>
<?php $erreurTitre_couleur = get_theme_mod("erreurTitre_couleur", "#fff");?> 

<?php get_header() ?>

<section class="erreur">
  <h1 class="erreur__titre" style="color: <?php echo $erreurTitre_couleur = get_theme_mod("erreurTitre_couleur", "#fff");?> ">Erreur 404</h1>
  <p class="erreur__description"><?php echo $erreur_description = get_theme_mod("erreur_description", "Default Title");?> </p>
  <div class="erreur__icones">
    <img src="https://s2.svgbox.net/social.svg?ic=facebook&color=000000" width="40" height="40">
    <img src="https://s2.svgbox.net/social.svg?ic=linkedin&color=000000" width="40" height="40">
    <img src="https://s2.svgbox.net/social.svg?ic=paypal&color=000000" width="40" height="40">
    <img src="https://s2.svgbox.net/social.svg?ic=stackoverflow&color=000000" width="40" height="40">
  </div>
  <p class="erreur__recommandation">Cherchez-vous plutôt : </p>
  <?php wp_nav_menu(array(
    "menu" => "destinations",
    "container" => "nav",
    "container_class" => "erreur__destinations"
    )); ?>
</section>

<?php get_footer(); ?>