<?php
/**
 * Template-part carte
 */
?>
<article class="carte carte--grande">
  <figure class="carte__image">
    <img src="voyage.jpg" alt="Image de voyage">
  </figure>
  <div class="carte__contenu">
    <?php
        if (has_post_thumbnail()) {
        the_post_thumbnail('thumbnail'); }
    ?>    
    <h4 class="carte__titre"><?php the_title(); ?></h4>
    <p class="carte__description"><?php echo wp_trim_words(get_the_content(),10, " ... " ); ?></p>
    <a class="carte__bouton carte__bouton--actif" href="<?php the_permalink() ?>">suite ...</a>
    <?php the_category() ?>
      <p>Température minimum&nbsp;<?php echo the_field('temperature_minimum'); ?>&#xB0;C</p>
      <p>Température maximum&nbsp;<?php echo the_field('temperature_maximum'); ?>&#xB0;C</p>
      <p>Température moyenne&nbsp;<?php echo the_field('temperature_moyenne'); ?>&#xB0;C</p>
  </div>
</article>