<?php
/** 
 * modèle 404.php permet d'afficher la page d'erreur
 * 
*/
?>
<?php $erreur_titre = get_theme_mod("erreur_titre", "Default Title");?>
<?php $erreur_description = get_theme_mod("erreur_description", "Default Title");?>
<?php $erreurTitre_couleur = get_theme_mod("erreurTitre_couleur", "#fff");?> 
<?php $erreurBoutons_couleur = get_theme_mod("erreurBoutons_couleur", "#fff");?> 
<?php $erreur_background = get_theme_mod("erreur_background", "Default Title");?> 

<?php get_header() ?>

<section class="erreur" style="background-image: url(<?php echo $erreur_background = get_theme_mod("erreur_background", "Default Title");?> );">
  <h1 class="erreur__titre" style="color: <?php echo $erreurTitre_couleur = get_theme_mod("erreurTitre_couleur", "#fff");?> "><?php echo $erreur_titre = get_theme_mod("erreur_titre", "Default Title");?></h1>
  <p class="erreur__description" style="color: <?php echo $erreurTitre_couleur = get_theme_mod("erreurTitre_couleur", "#fff");?> "><?php echo $erreur_description = get_theme_mod("erreur_description", "Default Title");?> </p>
  <!-- <div class="erreur__icones">
    <img src="https://s2.svgbox.net/social.svg?ic=facebook&color=000000" width="40" height="40">
    <img src="https://s2.svgbox.net/social.svg?ic=linkedin&color=000000" width="40" height="40">
    <img src="https://s2.svgbox.net/social.svg?ic=paypal&color=000000" width="40" height="40">
    <img src="https://s2.svgbox.net/social.svg?ic=stackoverflow&color=000000" width="40" height="40">
  </div> -->
  <div><a href="https://gftnth00.mywhc.ca/4w4_33/" class="erreur__bouton" style="<?php echo $erreurBoutons_couleur = get_theme_mod("erreurTitre_couleur", "#fff");?> ">Retour à l'accueil</p></div>
  <?php wp_nav_menu(array(
    "menu" => "destinations",
    "container" => "nav",
    "container_class" => "erreur__destinations"
    )); ?>

  <div class="erreur__recherche" style="color: <?php echo $erreurBoutons_couleur = get_theme_mod("erreurTitre_couleur", "#fff");?> ;">
  <?php get_search_form();   ?>
  </div>
</section>

<?php get_footer(); ?>