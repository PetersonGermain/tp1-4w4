<?php
/**
 * Template-part hero
 */
?>
<?php $hero_auteur = get_theme_mod("hero_auteur", "Default Title");?>
<?php $hero_courriel = get_theme_mod("hero_courriel", "Default Title");?>
<?php $hero_background = get_theme_mod("hero_background", "Default Title");?> 
<?php $hero_couleur = get_theme_mod("hero_couleur", "#fff");?>

    <section class="hero" style="background-image: url(<?php echo $hero_background?>);">
      <div class="hero__contenu global" style="color:<?php echo $hero_couleur = get_theme_mod("hero_couleur", "#fff");?>">   
          <h1 class="hero__titre">
            <?php  bloginfo('name'); ?>
          </h1>
          <p class="hero__description">
          <?php  bloginfo('description'); ?>
          </p>
          <a href="" class="hero__courriel">
            <?php echo $hero_courriel = get_theme_mod("hero_courriel", "Default Title");?>
          </a>
          <button class="hero__bouton">
            Inscription
          </button>
          <?php get_template_part( 'gabarit/icones' ); ?>
          <p>Auteur : <?php echo $hero_auteur = get_theme_mod("hero_auteur", "Default Title");?></p>
        </div>
    </section>