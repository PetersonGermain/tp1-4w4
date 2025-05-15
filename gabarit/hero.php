<?php
/**
 * Template-part hero
 */
?>
<?php $hero_auteur = get_theme_mod("hero_auteur", "Default Title");?>
<?php $hero_courriel = get_theme_mod("hero_courriel", "Default Title");?>
<?php $carrousel_count = get_theme_mod('hero_carrousel_count', 3);?>
<?php $hero_background = array();?>
<?php for ($k = 0; $k < $carrousel_count; $k++) {
  $hero_background[$k] = get_theme_mod('hero_background_' . $k, '');
}?>
<?php $hero_couleur = get_theme_mod("hero_couleur", "#fff");?>
<?php $svg_icone_url = get_theme_mod('hero_svg_icone_url'); ?>
<?php $svg_icone_url2 = get_theme_mod('hero_svg_icone_url2'); ?>
<?php $svg_icone_url3 = get_theme_mod('hero_svg_icone_url3'); ?>
<?php $svg_icone_url4 = get_theme_mod('hero_svg_icone_url4'); ?>
    <!-- /////////////////////////////////////////////////////////////////////////hero__caroussel -->
    <section class="hero">
      <?php for ($k = 0; $k < count($hero_background); $k++): ?>
        <div class="hero__carrousel <?php echo ($k === 0) ? 'hero__carrousel--active' : ''; ?>" data-id_carrousel="<?php echo $k; ?>" style="background-image: url(<?php echo esc_url($hero_background[$k]); ?>)"></div>
      <?php endfor; ?>

      <div class="hero__radio">
        <?php for ($k = 0; $k < count($hero_background); $k++): ?>
        <input class="hero__radio__input" data-id_carrousel="<?php echo $k; ?>" type="radio" name="carroussel" <?php echo ($k === 0) ? 'checked="checked"' : ''; ?>>
        <?php endfor; ?>
      </div>

    <!-- /////////////////////////////////////////////////////////////////////////hero__contenu -->
      <div class="hero__contenu global" style="color:<?php echo $hero_couleur = get_theme_mod("hero_couleur", "#fff");?>">   
        <div class="hero__animation hero__animation--active">
          <h1 class="hero__titre">
            <?php  bloginfo('name'); ?>
          </h1>
          <p class="hero__description">
          <?php  bloginfo('description'); ?>
          </p>
        </div>
        <div class="hero__animation">
          <h1 class="hero__titre">
            Lorem ipsum dolor
          </h1>
          <p class="hero__description">
            Labore, iusto alias.
          </p>
        </div>
          <a href="" class="hero__courriel">
            <?php echo $hero_courriel = get_theme_mod("hero_courriel", "Default Title");?>
          </a>
          <p> <?php echo $footer_adresse = get_theme_mod('footer_adresse', 'Default Title'); ?>  </p>
          <p class="telephone">Tel : <?php echo $footer_telephone = get_theme_mod('footer_telephone', 'Default Title'); ?>  </p>
          <button class="hero__bouton">
            Inscription
          </button>
          <div class="icones">
            <?php if ($svg_icone_url): ?>
              <a href= "https://www.facebook.com/maisonneuvetim">
                <img src="<?php echo esc_url($svg_icone_url); ?>" alt="Icône footer" class="hero__icone"/>
              </a>
            <?php endif; ?>
            <?php if ($svg_icone_url2): ?>
              <a href= "https://www.linkedin.com/in/tim-coll%C3%A8ge-de-maisonneuve-9407b7131/?locale=fr_FR">
                <img src="<?php echo esc_url($svg_icone_url2); ?>" alt="Icône footer" class="hero__icone"/>
              </a>
            <?php endif; ?>
            <?php if ($svg_icone_url3): ?>
              <a href= "https://www.instagram.com/maisonneuvetim/">
                <img src="<?php echo esc_url($svg_icone_url3); ?>" alt="Icône footer" class="hero__icone"/>
              </a>
            <?php endif; ?>
            
            <?php if ($svg_icone_url4): ?>
              <a href= "https://github.com/PetersonGermain/tp1-4w4/tree/tp2">
                <img src="<?php echo esc_url($svg_icone_url4); ?>" alt="Icône footer" class="hero__icone"/>
              </a>
            <?php endif; ?>
          </div>
          <p>Auteur : <?php echo $hero_auteur = get_theme_mod("hero_auteur", "Default Title");?></p>
        </div>
    </section>