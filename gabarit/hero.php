<?php
/**
 * Template-part hero
 */
?>
<?php $hero_auteur = get_theme_mod("hero_auteur", "Default Title");?>
<?php $hero_courriel = get_theme_mod("hero_courriel", "Default Title");?>
<?php for ($k=0; $k<3; $k++){
$hero_background[$k] = get_theme_mod('hero_background_' . $k, 'Default Title');} ?>
<?php $hero_couleur = get_theme_mod("hero_couleur", "#fff");?>
    <!-- /////////////////////////////////////////////////////////////////////////hero__caroussel -->
    <section class="hero">
        <div class="hero__carrousel hero__carrousel--active" data-id_carrousel="0" style="background-image: url(<?php echo $hero_background[0] ?>)"></div>
        <div class="hero__carrousel" data-id_carrousel="1" style="background-image: url(<?php echo $hero_background[1] ?>)"></div>
        <div class="hero__carrousel" data-id_carrousel="2" style="background-image: url(<?php echo $hero_background[2] ?>)"></div>

        <div class="hero__radio">
            <input class="hero__radio__input" data-id_carrousel="0" type="radio" name="carroussel"  checked="checked">
            <input class="hero__radio__input" data-id_carrousel="1" type="radio" name="carroussel">
            <input class="hero__radio__input" data-id_carrousel="2" type="radio" name="carroussel">
        </div>

    <!-- /////////////////////////////////////////////////////////////////////////hero__contenu -->
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
          <p> <?php echo $footer_adresse = get_theme_mod('footer_adresse', 'Default Title'); ?>  </p>
          <p>Tel : <?php echo $footer_telephone = get_theme_mod('footer_telephone', 'Default Title'); ?>  </p>
          <button class="hero__bouton">
            Inscription
          </button>
          <?php get_template_part( 'gabarit/icones' ); ?>
          <p>Auteur : <?php echo $hero_auteur = get_theme_mod("hero_auteur", "Default Title");?></p>
        </div>
    </section>